SpaceX API Wrapper for PHP
====

- [Installation](#installation)
- [Basic Usage](#basic-usage)

Installation
====

```
composer require airesvsg/spacex
```

Basic Usage
====

```PHP
<?php

require_once dirname(__FILE__) . '/vendor/autoload.php';

$spacex = new SpaceX\SpaceX;

$rockets = $spacex->rockets->all();

var_dump($rockets);
```
