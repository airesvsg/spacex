<?php

require_once dirname(__FILE__) . '/../vendor/autoload.php';

$spacex = new SpaceX\SpaceX;

$capsules = $spacex->capsules->all();

var_dump($capsules);

// $dragon1 = $spacex->capsules->dragon1();
// $dragon2 = $spacex->capsules->dragon2();
// $crewdragon = $spacex->capsules->crewdragon();
