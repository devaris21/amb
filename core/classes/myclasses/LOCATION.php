<?php
namespace Home;
use Native\RESPONSE;
use Native\EMAIL;
/**
 * 
 */
class LOCATION extends TABLE
{
	public static $tableName = __CLASS__;
	public static $namespace = __NAMESPACE__;

	public $typelocation_id;
	public $prestataire_id = null;
	public $preteur_id = null;
	public $started;
	public $finished;
	public $comment;
	public $price;
	public $etat_id = 0;

	public $vehicules;



	public function enregistre(){
		$data = new RESPONSE;
		if ($this->finished >= $this->started && $this->started >= date("Y-m-d")) {
			$data = $this->save();
		}else{
			$data->status = false;
			$data->message = "Les dates pour la location ne sont pas correctes  * !";
		}
		return $data;
	}



	public function consession(){
		$this->actualise();
		if ($this->typelocation_id == 1) {
			return $this->prestataire->name;
		}else{
			return $this->preteur->name;
		}
	}


	public function email(){
		$this->actualise();
		if ($this->typelocation_id == 1) {
			return $this->prestataire->email;
		}else{
			return $this->preteur->email;
		}
	}


	public function adresse(){
		$this->actualise();
		if ($this->typelocation_id == 1) {
			return $this->prestataire->adresse;
		}else{
			return $this->preteur->adresse;
		}
	}

	public function contact(){
		$this->actualise();
		if ($this->typelocation_id == 1) {
			return $this->prestataire->contact." // ".$this->prestataire->contact2;
		}else{
			return $this->preteur->contact." // ".$this->preteur->contact2;
		}
	}

	

	public static function locations(){
		return static::findBy(['etat_id ='=>0, "typelocation_id ="=>1]);
	}


	public static function prets(){
		return static::findBy(['etat_id ='=>0, "typelocation_id ="=>2]);
	}
	


	public function sentenseCreate(){
		return $this->sentense = "Nouvelle location de vehicule chez ".$this->prestataire->name;
	}
	public function sentenseUpdate(){}
	public function sentenseDelete(){}

}



?>