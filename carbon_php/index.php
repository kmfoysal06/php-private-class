<?php
require_once "vendor/autoload.php";
use Carbon\Carbon;

$c = new Carbon;
// echo var_dump($c.timezone);
echo Carbon::now();
