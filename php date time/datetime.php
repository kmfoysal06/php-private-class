<?php
// date_default_timezone_set('gmt +6');
// $output = date('D-d-M-Y  h:i:s a ');
// $output = time();
// $output = 1706955842/(60*60*24*365);
// $date = strtotime('12-03-2006');
// $output = date('D',$date);
// $output = date('d',strtotime('next sunday'));

date_default_timezone_set('Asia/Dhaka');
// $output = date('D - d - M - Y h:i:s a');

// $output = date("D-M-Y",mktime(8,20,54,12,03,2006));
    // $startDate = strtotime('last friday');
    // $endDate = strtotime('+1 week');

// $output = date('d-m-Y',$endDate);
// while($startDate < $endDate){
//     $remainDay += 1;
//     $startDate = strtotime('+1 day',$startDate);
// }
// echo 'Total Days: '.$remainDay;
// echo var_dump(date('d-m-Y',strtotime('today')));


// $endDate = strtotime('next tuesday');
// $remainDay = $endDate - strtotime('today');
// echo $remainDay/(60*60*24).' Day remain to next sunday'; 

$date = date('D');
echo "today is $date ";