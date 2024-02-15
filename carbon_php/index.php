<?php
require_once "vendor/autoload.php";
use Carbon\Carbon;

// $c = new Carbon;
// echo var_dump($c.timezone);
// echo Carbon::now();
// $c = Carbon::create(2012,03,12,12,10,40);
// $c = Carbon::createFromDate(2012,03,12);
// $c = Carbon::createFromTimestamp(1142121600);
// $c = strtotime('2006-03-12');
// $c = new Carbon('6th March 2006 12:10:40', 'asia/dhaka');
// $c = new Carbon('+2 year 5 days', 'asia/dhaka');
$c = new Carbon('+2 year 5 days', 'asia/dhaka');
echo var_dump($c);
