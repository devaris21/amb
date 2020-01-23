<?php
namespace Home;
use Native\RESPONSE;

/**
 * 
 */
class VEHICULE_CARPLANE extends TABLE
{
	
	
	public static $tableName = __CLASS__;
	public static $namespace = __NAMESPACE__;


	public $vehicule_id;
	public $carplane_id;
	public $started;


	public function enregistre(){ 
		return $this->save();
	}





	public function sentenseCreate(){}
	public function sentenseUpdate(){}
	public function sentenseDelete(){}
}

?>