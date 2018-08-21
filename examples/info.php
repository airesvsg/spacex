<?php

require_once dirname(__FILE__) . '/../autoload.php';

$spacex = new SpaceX\SpaceX;

$company = $spacex->info->company();

var_dump($company);

// $roadster = $spacex->info->roadster();
// $history = $spacex->info->history();
// $history = $spacex->info->history(array('flight_number' => 19));
