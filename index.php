<?php

require_once 'bootstrap.php';

$m = model('users')->first();

print_r($m);