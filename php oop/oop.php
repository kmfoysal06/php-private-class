<?php
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

class  VIP_User extends Users{
		public function age_validate($age){
				if($age < 18)
				{
							return "Sorry This Site is Age Restricted";
							exit;
					}else
					{
						return $this->registration_process();
						}
			}
		public function registration_process(){
					return "registration Successfull";
			}
}

$user = new Users;
$user->setUserData('foysal',16,'male');
$vip =  new VIP_User();
echo var_dump($vip->age_validate($user->get_user_age()));
