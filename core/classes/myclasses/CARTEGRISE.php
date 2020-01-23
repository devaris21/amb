<?php
namespace Home;
use Native\RESPONSE;



/**
 * 
 */
class CARTEGRISE extends TABLE
{

	public static $tableName = __CLASS__;
	public static $namespace = __NAMESPACE__;


	public $name;
	public $numero_piece;
	public $vehicule_id;
	public $date_etablissement; 
	public $proprietaire;
	public $couleur;
	public $energie_id;


	public function enregistre(){
		$data = new RESPONSE;
		if ($this->price >= 0) {
			if ($this->name != "" && $this->numero_piece != "") {
				$datas = VEHICULE::findBy(["id ="=>$this->vehicule_id]);
				if (count($datas) == 1) {
					$data = $this->save();
				}else{
					$data->status = false;
					$data->message = "Une erreur s'est produite lors de l'opération, veuillez recommencer !";
				}
			}else{
				$data->status = false;
				$data->message = "Veuillez renseigner les champs marqués d'un * !";
			}
		}else{
			$data->status = false;
			$data->message = "Veuillez entrer un prix correct pour cette piece !";
		}		
		return $data;
	}




	public function sentenseCreate(){
		return $this->sentense = "Nouvelle carte grise pour la ".$this->vehicule->name();
	}

	public function sentenseUpdate(){}
	public function sentenseDelete(){}

}



?>