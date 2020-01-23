<?php
namespace Home;
use Native\RESPONSE;/**
 * 
 */
class TYPEEMPLOYE extends TABLE
{

	public static $tableName = __CLASS__;
	public static $namespace = __NAMESPACE__;

	public $name;

	public function enregistre(){
		$data = new RESPONSE;
		if ($this->name != "") {
			$data = $this->save();
		}else{
			$data->status = false;
			$data->message = "Veuillez renseigner le nom du type de gestionnaire !";
		}
		return $data;
	}


	public function sentenseCreate(){
		return $this->sentense = "Ajout d'un nouveau type de gestionnaire : $this->name dans les paramétrages";
	}
	public function sentenseUpdate(){
		return $this->sentense = "Modification des informations du type de gestionnaire $this->id : $this->name ";
	}
	public function sentenseDelete(){
		return $this->sentense = "Suppression definitive du type de gestionnaire $this->id : $this->name";
	}

}
?>