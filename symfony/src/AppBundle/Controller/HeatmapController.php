<?php

namespace AppBundle\Controller;

use AppBundle\AppBundle;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Recording;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;

class HeatmapController extends Controller
{
    /**
     * @Route("/heatmap")
     */
    public function index()
    {
        $dataByPoint = [];
        $em = $this->getDoctrine()->getManager();
//        $data = $this->getDoctrine()->getRepository('AppBundle:Recording')
//            ->cr
        $data = $em->getRepository('AppBundle:Recording')
            ->createQueryBuilder('recording')
            ->select(' recording.name, recording.lat, recording.lon, recording.traffic_10_min, recording.for_date')
            ->orderBy('recording.name', 'asc')
            ->addOrderBy('recording.for_date', 'asc')
            ->getQuery()->getResult();
//        print_r($data);

        foreach ($data as $item) {
            $name = $item['name'];
            if (!isset($dataByPoint[$name])) {
                $dataByPoint[$name] = [];
            }
            $dataByPoint[$name][] = [
                'lat' => (float) $item['lat'],
                'lng' => (float) $item['lon'],
                'count' => $item['traffic_10_min']
            ];
        }

        return $this->render('heatmap/heatmap.html.twig', [
            'data' => $dataByPoint
        ]);
    }


}