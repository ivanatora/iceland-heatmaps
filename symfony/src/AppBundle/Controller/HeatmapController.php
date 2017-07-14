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
            ->orderBy('recording.name', 'asc')
            ->addOrderBy('recording.for_date', 'asc')
            ->getQuery()->getResult();
//        print_r($data);

        $last_city = '';

        foreach ($data as $item) {
            $for_date = $item['for_date']->format('Y-m-d H:i:s');

            if (!isset($dataByDate[$for_date])) {
                $dataByDate[$for_date] = [
                    'data' => [],
                    'for_date' => $for_date
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


}