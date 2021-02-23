<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ERROR);

require 'bootstrap.php';

use NFePHP\Sintegra\Tests;

$teste = new Tests\Z10Test();
$teste->testZ10();