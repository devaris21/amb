<?php
namespace Home;
use Native\RESPONSE;



/**
 * 
 */
class ASSURANCE extends TABLE
{

	public static $tableName = __CLASS__;
	public static $namespace = __NAMESPACE__;


	public $name;
	public $numero_piece;
	public $vehicule_id;
	public $date_etablissement; 
	public $started;
	public $finished;
	public $duree;
	public $price;
	public $assurance;
	public $typeduree_id;
	public $etatpiece_id = 1;
	public $gestionnaire_id;



	public function enregistre(){
		$data = new RESPONSE;
		if ($this->name != "" && $this->numero_piece != "") {
			$datas = VEHICULE::findBy(["id ="=>$this->vehicule_id]);
			if (count($datas) == 1) {
				$this->gestionnaire_id = getSession("gestionnaire_connecte_id");
				$data = $this->save();
			}else{
				$data->status = false;
				$data->message = "Une erreur s'est produite lors de l'opération, veuillez recommencer !";
			}
		}else{
			$data->status = false;
			$data->message = "Veuillez renseigner les champs marqués d'un * !";
		}		
		return $data;
	}



	public function etat(){
		if ($this->finished >= dateAjoute()) {
			$this->etatpiece_id = 1;
		}else{
			$this->etatpiece_id = -1;
		}
		$this->save();
	}


	public function sentenseCreate(){}
	public function sentenseUpdate(){}
	public function sentenseDelete(){}

}



?>