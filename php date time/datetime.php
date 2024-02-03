<?php
// date_default_timezone_set('gmt +6');
// $output = date('D-d-M-Y  h:i:s a ');
// $output = time();
// $output = 1706955842/(60*60*24*365);
// $date = strtotime('12-03-2006');
// $output = date('D',$date);
$output = date('d',strtotime('next sunday'));





echo var_dump($output);