<?php

$config = require 'db_config.php';

define("DB_HOST", $config['host']);
define("DB_USER", $config['user']);
define("DB_PASS", $config['password']);
define("DB_NAME", $config['database']);

require_once 'vendor/autoload.php';
