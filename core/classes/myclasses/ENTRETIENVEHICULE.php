<?php
namespace Home;
use Native\RESPONSE;



/**
 * 
 */
class ENTRETIENVEHICULE extends TABLE
{

	public static $tableName = __CLASS__;
	public static $namespace = __NAMESPACE__;


	public $typeentretienvehicule_id;
	public $name;
	public $vehicule_id;
	public $prestataire_id;
	public $price;
	public $started;
	public $finished;
	public $gestionnaire_id;
	public $etat_id = 0;
	public $comment; 



	public function enregistre(){
		$data = new RESPONSE;
		if ($this->name != "") {
			$datas = TYPEENTRETIENVEHICULE::findBy(["id ="=>$this->typeentretienvehicule_id]);
			if (count($datas) == 1) {
				$datas = VEHICULE::findBy(["id ="=>$this->vehicule_id]);
				if (count($datas) == 1) {
					// TODO verifier les dates
					$this->gestionnaire_id = getSession("gestionnaire_connecte_id");
					$data = $this->save();
				}else{
					$data->status = false;
					$data->message = "Une erreur s'est produite lors de l'opération b, veuillez recommencer !";
				}
			}else{
				$data->status = false;
				$data->message = "Une erreur s'est produite lors de l'opération n, veuillez recommencer !";
			}
		}else{
			$data->status = false;
			$data->message = "Veuillez renseigner les champs marqués d'un * !";
		}		
		return $data;
	}



	public static function encours(){
		return static::findBy(["etat_id ="=>0]);
	}



	public function sentenseCreate(){}
	public function sentenseUpdate(){}
	public function sentenseDelete(){}

}



?>