<?php

$config = require 'db_config.php';

define("DB_HOST", $config['localhost']);
define("DB_USER", $config['user']);
define("DB_PASS", $config['password']);
define("DB_NAME", $config['database']);

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'vendor/autoload.php';


$m = model('ddd');

print_r($m->getConnection());