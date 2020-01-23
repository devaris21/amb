<?php
namespace Home;
use Native\RESPONSE;
use Native\EMAIL;
use \DateTime;
/**
 * La classe PERSONNE herite deja de la classe TABLE 
 */

class AFFECTATION extends TABLE
{

	public static $tableName = __CLASS__;
	public static $namespace = __NAMESPACE__;

	public $carplane_id;
	public $comment;
	public $vehicule_id;
	public $objet;
	public $started = "";
	public $finished = "";
	public $date_fin;
	public $etat_id = 0;
	public $employe_id;



	public function enregistre(){
		$data = new RESPONSE;
		$this->vehicule_id = getSession("vehicule_id");
		$datas = static::findBy(["vehicule_id ="=>$this->vehicule_id, "etat_id ="=>0]);
		if (count($datas) == 0) {
			$datas = VEHICULE::findBy(["id ="=>$this->vehicule_id]);
			if (count($datas) == 1) {
				$datas = CARPLANE::findBy(["id ="=>$this->carplane_id]);
				if (count($datas) == 1) {
					$this->employe_id = getSession("employe_connecte_id");
					$data = $this->save();
				}else{
					$data->status = false;
					$data->message = "Une eurreur s'est produite pendant le processus, veuillez recommencer !";
				}
			}else{
				$data->status = false;
				$data->message = "Une eurreur s'est produite pendant le processus, veuillez recommencer !";
			}
		}else{
			$data->status = false;
			$data->message = "Cet vehicule est déja affecté à quelqu'un d'autre !";
		}
		return $data;
	}

	public function etat(){
		if ($this->finished < dateAjoute()) {
			$this->etat_id = 1;
		}else{
			$this->etat_id = 0;
		}
		$this->save();
	}


	public function name(){
		$this->actualise();
		return $this->carplane->name." ".$this->carplane->lastname." <br> // Car plan";
	}


	public function fin(){
		$this->actualise();
		$this->historique("Fin de l'affectation du vehicule ".$this->vehicule->name()." à ".$this->name());
		$this->date_fin = date("Y-m-d");
		$this->etat_id = 1;
		return $this->save();
	}


	public function reaffectation( $ladate ){
		$data = new RESPONSE;
		if ($ladate > $this->finished) {
			$data = $this->fin();
			if ($data->status) {
				$affectation = $this;
				$affectation->id = null;
				$affectation->started = date("Y-m-d"); 
				$affectation->finished = $ladate; 
				$affectation->etat_id = 0;
				$affectation->objet = "Renouvelement de la precedente affectation ";
				$affectation->employe_id = getSession("employe_connecte_id");
				$affectation->historique("On a reconduit l'affectation du vehicule ".$this->vehicule->name()." à ".$this->name()." jusqu'au ".datecourt($affectation->finished));
				$data = $affectation->save();
			}	
		}else{
			$data->status = false;
			$data->message = "La nouvelle date n'est pas plus lointaine que celle actuelle !";
		}
		return $data;	
	}



	public function sentenseCreate(){
		return $this->sentense = "Nouvelle affectation de  ".$this->carplane->name." ".$this->carplane->lastname." au véhicule ".$this->vehicule->marque->name." immatriculé ". $this->vehicule->immatriculation;
	}


	public function sentenseUpdate(){
		return $this->sentense = "Modification des informations de l'affectation N° $this->id ";
	}


	public function sentenseDelete(){
		return $this->sentense = "Suppression définitive de l'affectation N° $this->id ";

	}


}


?>