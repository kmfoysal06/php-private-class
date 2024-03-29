<?php
trait Singletone{
    public static function get_inst(){
        static $inst = [];
        $cls = static::class;
        if(!isset($inst[$cls])){
            echo "hello <br>";
            $inst[$cls] = new static ;
        }
        return $inst[$cls];
    }
}
class User{
    use Singletone;
    public function __construct(){
        echo "user <br>";
    }
}
$user = User::get_inst();
$user2 = User::get_inst();
$user3 = User::get_inst();
