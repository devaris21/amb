<?php
namespace Home;
use Native\RESPONSE;
use Native\EMAIL;
use Native\ROOTER;



/**
 * 
 */
class ENTRETIENVEHICULE extends TABLE
{

	public static $tableName = __CLASS__;
	public static $namespace = __NAMESPACE__;


	public $ticket;
	public $typeentretienvehicule_id;
	public $name;
	public $vehicule_id;
	public $prestataire_id;
	public $price;
	public $started;
	public $finished;
	public $gestionnaire_id;
	public $etat_id = 0;
	public $date_approuve; 
	public $image; 
	public $comment; 



	public function enregistre(){
		$data = new RESPONSE;
		if ($this->name != "") {
			$datas = TYPEENTRETIENVEHICULE::findBy(["id ="=>$this->typeentretienvehicule_id]);
			if (count($datas) == 1) {
				$datas = VEHICULE::findBy(["id ="=>$this->vehicule_id]);
				if (count($datas) == 1) {
					$this->ticket = strtoupper(substr(uniqid(), 5, 6));
					// TODO verifier les dates
					// TODO champ pour rejouter au commentaire quand ca vient des demandes d'entretien
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



	public function approuver(){
		$data = new RESPONSE;
		$rooter = new ROOTER;
		$this->etat_id = 2;
		$this->date_approuve = date("Y-m-d H:i:s");
		$this->historique("Approbation de la demande d'entretien de véhicule N° $this->id");
		$data = $this->save();
		if ($data->status) {
			$this->actualise();
			$message = "L'entretien pour le véhicule ".$this->vehicule->marque->name." ".$this->vehicule->modele." immatriculé ".$this->vehicule->immatriculation." a été effectué avec succes! Veuillez contacter le responsable/gestion du parc automobile pour plus de précision!";
			$image = $rooter->stockage("images", "vehicules", $this->vehicule->image);
			$objet = "Demande d'entretien de véhicule approuvé";

			ob_start();
			include(__DIR__."/../../sections/home/elements/mails/demandeentretien1.php");
			$contenu = ob_get_contents();
			ob_end_clean();
			//EMAIL::send([$this->email()], $objet, $contenu);
			session("demandeentretien", $this);
		}
		return $data;
	}
	

	public function refuser(){
		$data = new RESPONSE;
		$rooter = new ROOTER;
		$this->etat_id = -1;
		$this->date_approuve = date("Y-m-d H:i:s");
		$this->historique("Echec de l'entretien de véhicule N° $this->id");
		$data = $this->save();
		if ($data->status) {
			$this->actualise();
			$message = "L'entretien pour le véhicule ".$this->vehicule->marque->name." ".$this->vehicule->modele." immatriculé ".$this->vehicule->immatriculation." n'a pas abouti !<br> Veuillez contacter le responsable/gestion du parc automobile pour plus de précision";
			$image = $rooter->stockage("images", "vehicules", $this->vehicule->image);
			$objet = "Entretien de véhicule échoué!";

			ob_start();
			include(__DIR__."/../../sections/home/elements/mails/demandeentretien1.php");
			$contenu = ob_get_contents();
			ob_end_clean();
			//EMAIL::send([$this->email()], $objet, $contenu);
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