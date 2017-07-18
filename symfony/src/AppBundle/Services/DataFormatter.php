<?php
namespace AppBundle\Services;

class DataFormatter {
    public function format($data, $field_count = 'traffic_10_min')
    {
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
                'count' => $item[$field_count]
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

        return $dataByDate;
    }
}