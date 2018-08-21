<?php

require_once dirname(__FILE__) . '/../autoload.php';

$spacex = new SpaceX\SpaceX;

$all = $spacex->launches->all();

var_dump($all);

// $latest = $spacex->launches->latest();
// $next = $spacex->launches->next();
// $past = $spacex->launches->past();
// $past = $spacex->launches->past(array('launch_year' => 2017));
// $upcoming = $spacex->launches->upcoming();
// $all = $spacex->launches->all(array('launch_year' => 2017));
