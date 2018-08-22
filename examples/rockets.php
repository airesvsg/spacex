<?php

require_once dirname(__FILE__) . '/../vendor/autoload.php';

$spacex = new SpaceX\SpaceX;

$rockets = $spacex->rockets->all();

var_dump($rockets);

// $falcon1 = $spacex->rockets->falcon1();
// $falcon9 = $spacex->rockets->falcon9();
// $falconheavy = $spacex->rockets->falconheavy();
// $bfr = $spacex->rockets->bfr();
