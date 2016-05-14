<?php

use Codesleeve\Stapler\Config\NativeConfig;
use Codesleeve\Stapler\Stapler;

$loader = require __DIR__.'/../vendor/autoload.php';
$loader->add('Codesleeve\Stapler\\', __DIR__);

date_default_timezone_set('UTC');

Stapler::setConfigInstance(new NativeConfig);