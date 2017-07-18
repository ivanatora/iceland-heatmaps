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
        $dataByDate = [];
        $em = $this->getDoctrine()->getManager();
//        $data = $this->getDoctrine()->getRepository('AppBundle:Recording')
//            ->cr
        $data = $em->getRepository('AppBundle:Recording')
            ->createQueryBuilder('recording')
            ->select(' recording.name, recording.lat, recording.lon, recording.traffic_10_min, recording.for_date')
            ->where('recording.for_date > ?1')
            ->orderBy('recording.name', 'asc')
            ->addOrderBy('recording.for_date', 'asc')
            ->setParameter(1, '2017-07-17 00:00:00')
            ->getQuery()->getResult();
//        print_r($data);

        $last_city = '';

        foreach ($data as $item) {
            $for_date = $item['for_date']->format('Y-m-d H:i:s');
            $min_number = $item['for_date']->format('H') * 60 + $item['for_date']->format('i');

            if (!isset($dataByDate[$for_date])) {
                $dataByDate[$for_date] = [
                    'data' => [],
                    'for_date' => $for_date,
                    'min_number' => $min_number
                ];
            }
            $dataByDate[$for_date]['data'][] = [
                'lat' => (float)$item['lat'],
                'lng' => (float)$item['lon'],
                'count' => $item['traffic_10_min']
            ];
        }

        foreach ($dataByDate as $key => $item) {
            $min = 0;
            $max = $item['data'][0]['count'];
            foreach ($item['data'] as $item2) {
                if ($item2['count'] < $min) {
                    $min = $item2['count'];
                }
                if ($item2['count'] > $max) {
                    $max = $item2['count'];
                }
            }
            $dataByDate[$key]['min'] = $min;
            $dataByDate[$key]['max'] = $max;
        }

        // normalize min/max
        $min = 0;
        $max = 0;
        foreach ($dataByDate as $key => $item){
            if ($item['min'] < $min) {
                $min = $dataByDate[$key]['min'];
            }
            if ($item['max'] > $max) {
                $max = $dataByDate[$key]['max'];
            }
        }

        // set new min/max
        foreach ($dataByDate as $key => $item){
            $dataByDate[$key]['min'] = $min;
            $dataByDate[$key]['max'] = $max;
        }
        ksort($dataByDate);


        return $this->render('heatmap/heatmap.html.twig', [
            'data' => array_values($dataByDate)
        ]);
    }


    /**
     * @Route("/heatmap/condensed")
     */

    public function condensed()
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

        foreach ($data as $item) {
            $for_date = $item['for_date']->format('Y-m-d H:i:s');
            $min_number = $item['for_date']->format('H') * 60 + $item['for_date']->format('i');

            if (!isset($dataByDate[$for_date])) {
                $dataByDate[$for_date] = [
                    'data' => [],
                    'for_date' => $for_date,
                    'min_number' => $min_number
                ];
            }
            $dataByDate[$for_date]['data'][] = [
                'lat' => (float)$item['lat'],
                'lng' => (float)$item['lon'],
                'count' => $item['traffic_day']
            ];
        }

        foreach ($dataByDate as $key => $item) {
            $min = 0;
            $max = $item['data'][0]['count'];
            foreach ($item['data'] as $item2) {
                if ($item2['count'] < $min) {
                    $min = $item2['count'];
                }
                if ($item2['count'] > $max) {
                    $max = $item2['count'];
                }
            }
            $dataByDate[$key]['min'] = $min;
            $dataByDate[$key]['max'] = $max;
        }

        // normalize min/max
        $min = 0;
        $max = 0;
        foreach ($dataByDate as $key => $item){
            if ($item['min'] < $min) {
                $min = $dataByDate[$key]['min'];
            }
            if ($item['max'] > $max) {
                $max = $dataByDate[$key]['max'];
            }
        }

        // set new min/max
        foreach ($dataByDate as $key => $item){
            $dataByDate[$key]['min'] = $min;
            $dataByDate[$key]['max'] = $max;
        }
        ksort($dataByDate);


        return $this->render('heatmap/heatmap.html.twig', [
            'data' => array_values($dataByDate)
        ]);
    }
}