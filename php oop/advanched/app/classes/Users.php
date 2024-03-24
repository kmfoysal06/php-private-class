<?php
namespace App\classes;
class Users{
	protected $name;
	protected $age ;
	protected $gender;

	public function getUserArray(){
			return [$this->name,$this->age,$this->gender];
		}
	public function setUserData($name = '',$age='',$gender=''){
			$this->name = $name;
			$this->age = $age;
			$this->gender = $gender;
			return $this->getUserArray();
		}
		public function get_user_age(){
					return $this->age;
				}
		
	}
