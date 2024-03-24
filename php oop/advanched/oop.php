<?php
use  \App\classes\VIP_User;
use \App\classes\Users;
require_once "vendor/autoload.php";

$user = new Users;
$user->setUserData('foysal',9,'male');
$vip =  new VIP_User();
echo var_dump($vip->age_validate($user->get_user_age()));
