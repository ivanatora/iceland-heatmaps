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
use AppBundle\Services\DataFormatter;

class HeatmapController extends Controller
{
    /**
     * @Route("/heatmap")
     */
    public function index(Request $request, DataFormatter $dataFormatter)
    {
        $dataByDate = [];
        $em = $this->getDoctrine()->getManager();
//        $data = $this->getDoctrine()->getRepository('AppBundle:Recording')
//            ->cr
        $data = $em->getRepository('AppBundle:Recording')
            ->createQueryBuilder('recording')
            ->select(' recording.name, recording.lat, recording.lon, recording.traffic_10_min, recording.for_date')
//            ->where('recording.for_date > ?1')
            ->orderBy('recording.name', 'asc')
            ->addOrderBy('recording.for_date', 'asc')
//            ->setParameter(1, '2017-07-17 00:00:00')
            ->getQuery()->getResult();
//        print_r($data);

        $dataByDate = $dataFormatter->format($data);

        return $this->render('heatmap/heatmap.html.twig', [
            'data' => array_values($dataByDate)
        ]);
    }


    /**
     * @Route("/heatmap/condensed")
     */

    public function condensed(DataFormatter $dataFormatter)
    {
        $dataByDate = [];
        $em = $this->getDoctrine()->getManager();

        $first_date = $em->getRepository('AppBundle:Recording')
            ->createQueryBuilder('recording')
            ->select('recording.for_date')
            ->orderBy('recording.for_date', 'asc')
            ->setMaxResults(1)
            ->getQuery()->getSingleScalarResult();

        $last_date = $em->getRepository('AppBundle:Recording')
            ->createQueryBuilder('recording')
            ->select('recording.for_date')
            ->orderBy('recording.for_date', 'desc')
            ->setMaxResults(1)
            ->getQuery()->getSingleScalarResult();

        $first_date = date('Y-m-d 00:00:00', strtotime($first_date));
        $last_date = date('Y-m-d 23:59:59', strtotime($last_date));

        $day_data = [];
        for (; $first_date <= $last_date; $first_date = date('Y-m-d H:i:s', strtotime('+1 day', strtotime($first_date)))) {
            $day_data = $em->getRepository('AppBundle:Recording')
                ->createQueryBuilder('recording')
                ->select(' recording.name, recording.lat, recording.lon, recording.traffic_day, recording.for_date')
                ->where('recording.for_date > ?1')
                ->andWhere('recording.for_date < ?2')
                ->orderBy('recording.for_date', 'desc')
                ->setParameters([
                    1 => $first_date,
                    2 => date('Y-m-d 23:59:59', strtotime($first_date))
                ])
                ->getQuery()->getResult();
            $filtered_data = [];
            foreach ($day_data as $item){
                $name = $item['name'];
                if (! isset($filtered_data[$name])) {
                    $item['for_date'] = new \DateTime($first_date);
                    $filtered_data[$name] = $item;
                }
            }

            foreach ($filtered_data as $item) {
                $data[] = $item;
            }

        }

//        var_dump($data);
//        print count($data);
//        exit();
        $last_city = '';

        $dataByDate = $dataFormatter->format($data, 'traffic_day');


        return $this->render('heatmap/heatmap.html.twig', [
            'data' => array_values($dataByDate)
        ]);
    }

    /**
     * @Route("/heatmap/single/{date}")
     */
    public function single($date, Request $request, DataFormatter $dataFormatter)
    {
        $date = date('Y-m-d H:i:s', strtotime($date));
        $em = $this->getDoctrine()->getManager();
        $data = $em->getRepository('AppBundle:Recording')
            ->createQueryBuilder('recording')
            ->select(' recording.name, recording.lat, recording.lon, recording.traffic_10_min, recording.for_date')
            ->where('recording.for_date = ?1')
            ->orderBy('recording.name', 'asc')
            ->addOrderBy('recording.for_date', 'asc')
            ->setParameter(1, $date)
            ->getQuery()->getResult();

        $dataByDate = $dataFormatter->format($data);


        return $this->render('heatmap/heatmap.html.twig', [
            'data' => array_values($dataByDate)
        ]);
    }
}