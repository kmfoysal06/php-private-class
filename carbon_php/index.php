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
// $c = new Carbon('+2 year 5 days', 'asia/dhaka');


// $c = Carbon::now();
// $c = new Carbon('12/3/2006');
// echo $c->format('l jS F Y h:i:s');
//print the date
// echo var_dump($c->toDateString());
//print the time
// echo $c->toDateTimeString();


// print the rss string
// echo $c->toRssString();
// print in atom string
// echo $c->toAtomString();

// carbon custom time formate
// echo $c->format('l jS F Y h:i:s');

// monday 12th march 2012 12:10:40

// echo $c->format('l jS F Y h:i:s');
// $diff = $c->diffForHumans();

$c = new Carbon('-2 years 5 days','asia/dhaka');
// echo var_dump($c->year);
// echo var_dump($c->month);
// echo $c->tz;
// $c->addYears(5);
// $c->subYears(4);
// echo $c->toDateTimeString();

$start