<?php
namespace App\classes;
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
