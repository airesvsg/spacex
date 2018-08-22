<?php

require_once dirname(__FILE__) . '/../vendor/autoload.php';

$spacex = new SpaceX\SpaceX;

$caps = $spacex->parts->caps();

var_dump($caps);

// $caps = $spacex->parts->caps('C201');

// $cores = $spacex->parts->cores();
// $cores = $spacex->parts->cores('B1050');
