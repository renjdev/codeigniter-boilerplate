<?php
$colors = [
    'rgb(231,76,60)',
    'rgb(241,196,15)',
    'rgb(22,160,133)',
    'rgb(142,68,173)',
    'rgb(243,156,18)',
    'rgb(52,73,94)',
    'rgb(41,128,185)',
    'rgb(127,140,141)'
   ];

$chart = array(
    'type' =>   'doughnut',
    'data' => array(
        'datasets' => array(array(
            'data' => $amount, 
            'backgroundColor' => array_slice($colors, 0, count($amount)),
            'label' => 'Categories'
        )),
        'labels' => $category
    ),
    'options' => array(
        'responsive' => true,
        'legend' => array (
            'position' => 'top'
        ),
        'title' => array( 
            'display' => true,
            'text' => 'Gastos por categoria',
            'fontSize' => 14
        ),
        'animation' => array(
            'animateScale' => true,
            'animateRotate' => true

        ) 
    )
);

echo json_encode($chart);