<?php
namespace Home;
use Native\RESPONSE;
/**
 * 
 */
class TYPECOMMANDE extends TABLE
{
	public static $tableName = __CLASS__;
	public static $namespace = __NAMESPACE__;

	public $name;
	public $jour_recuperation;
	public $heure_recuperation;
	public $heure_limit_day;
	public $intervalle_jour;


	public function enregistre(){
		return  $this->save();
	}



	public function sentenseCreate(){}
	public function sentenseUpdate(){}
	public function sentenseDelete(){}

}



?>