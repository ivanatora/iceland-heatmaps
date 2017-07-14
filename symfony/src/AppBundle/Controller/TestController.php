<?php

namespace AppBundle\Controller;

use AppBundle\AppBundle;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Product;
use AppBundle\Entity\Category;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;

class TestController extends Controller
{
    /**
     * @Route("/test/number")
     */
    public function numberAction()
    {
        $number = mt_rand(0, 100);

        return $this->render('test/number.html.twig', [
            'number' => $number
        ]);
    }

    /**
     * @Route("/brei")
     */
    public function brei()
    {
        echo 'brei';
        exit();
    }

    /**
     * @Route("/form")
     * @Route("/form/{id}")
     */
    public function form(Request $request, $id = null)
    {
        if ($id) {
            $product = $this->getDoctrine()->getRepository('AppBundle:Product')->find($id);
        } else {
            $product = new Product();
            $product->setName('Banica s Boza');
        }

        $form = $this->createFormBuilder($product)
            ->add('id', HiddenType::class)
            ->add('name', TextType::class)
            ->add('price', NumberType::class)
            ->add('description', TextType::class)
            ->add('category', EntityType::class, [
                'class' => 'AppBundle:Category',
                'choice_label' => 'name'
            ])
            ->add('save', SubmitType::class, ['label' => 'Save product'])
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $product = $form->getData();

            $em = $this->getDoctrine()->getManager();
            try {
                $em->persist($product);
                $em->flush();
            } catch (Exception $e) {
                return $this->redirect('/form');
            }
        }

        $list = $this->getDoctrine()->getRepository('AppBundle:Product')->findAll();

        return $this->render('form/form.html.twig', [
            'form' => $form->createView(),
            'list' => $list
        ]);
    }

    /**
     * @Route("/form/delete/{id}")
     */
    public function formDelete(Request $request, $id = null)
    {
        if (! $id) {
            return $this->redirect('/form');
        }

        $product = $this->getDoctrine()->getRepository('AppBundle:Product')->find($id);
        if (! $product){
            return $this->redirect('/form');
        }

        $em = $this->getDoctrine()->getManager();
        try {
            $em->remove($product);
            $em->flush();
        } catch (Exception $e) {
            return $this->redirect('/form');
        }
        return $this->redirect('/form');
    }

    /**
     * Matches /article/view/*
     *
     * @Route("/article/view/{id}", name="article_view")
     */

    public function test($id)
    {
        return $this->render('test/test.html.twig', [
            'id' => $id
        ]);
    }

    /**
     * @Route("/product/create")
     * @return Response
     */
    public function createAction()
    {
        // you can fetch the EntityManager via $this->getDoctrine()
        // or you can add an argument to your action: createAction(EntityManagerInterface $em)
        $em = $this->get('doctrine')->getManager();

        $product = new Product();
        $product->setName('Keyboard');
        $product->setPrice(19.99);
        $product->setDescription('Ergonomic and stylish!');

        try {


            // tells Doctrine you want to (eventually) save the Product (no queries yet)
            $em->persist($product);

            // actually executes the queries (i.e. the INSERT query)
            $em->flush();
        } catch (Exception $e) {
            echo $e->getMessage();
            exit();
        }

        return new Response('Saved new product with id ' . $product->getId());
    }

// if you have multiple entity managers, use the registry to fetch them

    /**
     * @Route("/product/edit")
     */
    public function editAction()
    {
        $doctrine = $this->getDoctrine();
        $em = $doctrine->getManager();
        $em2 = $doctrine->getManager('other_connection');
    }

}