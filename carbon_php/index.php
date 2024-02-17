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

// $startDate = new Carbon('2020-01-01');
// $endDate = Carbon::today();


// echo var_dump($startDate->eq($endDate));
// echo var_dump($startDate->lte($endDate));

// check condition in carbon 
// eq - To check if two dates are equal
// ne - To check if two dates are not equal
// lt - To check if a date is less than another
// lte - To check if a date is less than or equal to another
// gte - To check if a date is greater than or equal to another
// gt - To check if a date is greater than another


$startDate = new Carbon('2020-01-01');
$endDate = Carbon::today();

// echo $startDate->diffInYears($endDate);
// echo $startDate->diffInDays($endDate);
// echo $startDate->diffInWeeks($endDate);
// echo $startDate->diffInHours($endDate);
// echo $startDate->diffInMonths($endDate);
// echo $startDate->diffInMinutes($endDate);
// echo $startDate->diffInSeconds($endDate);

$born = new Carbon('2006-06-12');
// echo var_dump($born->age);

// echo 'i am '.$born->age.' years old';

$dt = Carbon::parse('+2 days');
// echo $dt->startOfDay();
// echo $dt->endOfDay();
// echo $dt->startOfMonth();
// echo $dt->endOfMonth();
// echo $dt->startOfYear();
// echo $dt->endOfYear();
