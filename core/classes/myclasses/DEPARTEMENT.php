<?php
namespace Home;
use Native\RESPONSE;
/**
 * 
 */
class DEPARTEMENT extends TABLE
{

	public static $tableName = __CLASS__;
	public static $namespace = __NAMESPACE__;

	public $name;
	public $sigle;


	public function enregistre(){
		$data = new RESPONSE;
		if ($this->name != "") {
			$data = $this->save();
		}else{
			$data->status = false;
			$data->message = "Veuillez renseigner le nom de la nouvelle direction";
		}
		return $data;
	}


	public function sigle(){
		if ($this->sigle != "") {
			return $this->sigle ;
		}
		return $this->name();
	}


	public function sentenseCreate(){
		return $this->sentense = "Ajout d'un nouvelle direction : $this->name dans les paramétrages";
	}


	public function sentenseUpdate(){
		return $this->sentense = "Modification des propriétés de la direction : $this->name";
	}


	public function sentenseDelete(){
		return $this->sentense = "Suppression définitive de la direction $this->name.";
	}


}
?>