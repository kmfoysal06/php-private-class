<?php
use  \App\classes\VIP_User;
use \App\classes\Users;
require_once "vendor/autoload.php";

$user = new Users;
$user->setUserData('foysal',9,'male');
$vip =  new VIP_User();
// echo var_dump($vip->age_validate($user->get_user_age()));

// interface Animal{
// 	public function makeSound();
// 	// public function makeSound2();
// }
// class Cat implements Animal{
// 	public function makeSound(){
// 		echo "Meow";
// 	}
// }
// $cat = new Cat;
// $cat->makeSound();
interface payment{
	public function pay($amount);
}
class paypal implements payment{
	public function pay($amount){
		echo $amount;
	}
}
class stripe implements payment{
	public function pay($amount){
		echo $amount;
	}
}
class nagad implements payment{
	public function pay($amount){
		echo $amount;
	}
}
$paypal = new paypal;
$paypal->pay(10);