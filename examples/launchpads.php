<?php

require_once dirname(__FILE__) . '/../vendor/autoload.php';

$spacex = new SpaceX\SpaceX;

$all = $spacex->launchpads->all();

var_dump($all);

// $launchpads = $spacex->launchpads->detail('kwajalein_atoll');
