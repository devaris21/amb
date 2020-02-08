<?php
namespace Home;
use Native\RESPONSE;
use Native\ROOTER;
use Native\EMAIL;
use Native\FICHIER;


/**
 * 
 */
class DEMANDEENTRETIEN extends TABLE
{

	public static $tableName = __CLASS__;
	public static $namespace = __NAMESPACE__;


	public $ticket;
	public $typeentretienvehicule_id = 0;
	public $carplan_id = null;
	public $vehicule_id	;
	public $comment;
	public $image;
	public $date_approuve;

	public $etat_id = 0;
	public $gestionnaire_id;


	public function enregistre(){
		$data = new RESPONSE;
		$this->vehicule_id = getSession("carplan_vehicule_id");
		$datas = TYPEENTRETIENVEHICULE::findBy(["id ="=>$this->typeentretienvehicule_id]);
		if (count($datas) == 1) {
			$this->ticket = strtoupper(substr(uniqid(), 5, 6));
			$data = $this->save();
			if ($data->status) {
				$this->uploading();
				$this->setId($data->lastid)->actualise();
				$params = PARAMS::findLastId();

				//TODO revoir les emails
				// ob_start();
				// include(__DIR__."/../../sections/home/elements/mails/demandeentretien.php");
				// $contenu = ob_get_contents();
				// ob_end_clean();
				// EMAIL::send(GESTIONNAIRE::getEmailGestionnaires(), "Nouvelle demande d'entretien de véhicule", $contenu);
				$data->message = "Votre demande d'entretien du véhicule a été enregistré avec succes !";
			}
		}else{
			$data->status = false;
			$data->message = "Une erreur s'est produite lors de l'opération, veuillez recommencer !";
		}
		return $data;
	}


	public function uploading(){
		if (isset($this->image) && $this->image["tmp_name"] != "") {
			$image = new FICHIER();
			$image->hydrater($this->image);
			if ($image->is_image()) {
				$a = substr(uniqid(), 5);
				$result = $image->upload("images", "demandeentretiens", $a);
				$this->image = $result->filename;
				$this->save();
			}
		}
	}



	public static function encours(){
		return static::findBy(["etat_id ="=>0]);
	}

	public static function valideesCeMois(){
		return static::findBy(["etat_id ="=>1, "date_approuve >="=>date("Y-m")."-01"]);
	}

	public static function annuleesCeMois(){
		return static::findBy(["etat_id ="=>-1, "date_approuve >="=>date("Y-m")."-01"]);
	}



	public function contact(){
		$this->actualise();
		if ($this->utilisateur_id == null) {
			return $this->carplan->contact." // ".$this->carplan->contact2;
		}else{
			return $this->utilisateur->contact." // ".$this->utilisateur->contact2;
		}
	}

	public function fonction(){
		$this->actualise();
		if ($this->utilisateur_id == null) {
			return "carplan";
		}else{
			return $this->utilisateur->departement->name;
		}
	}

	public function email(){
		$this->actualise();
		if ($this->utilisateur_id == null) {
			return $this->carplan->email;
		}else{
			return $this->utilisateur->email;
		}
	}


	public function annuler(){
		$this->etat_id = -1;
		$this->historique("Annulation de la demande d'entretien de véhicule N° $this->id par le demandeur");
		return $this->save();
	}


	public function approuver(){
		$data = new RESPONSE;
		$rooter = new ROOTER;
		$this->etat_id = 1;
		$this->date_approuve = date("Y-m-d H:i:s");
		$this->historique("Approbation de la demande d'entretien de véhicule N° $this->id");
		$data = $this->save();
		if ($data->status) {
			$this->actualise();
			$message = "Votre demande d'entretien de véhicule pour la ".$this->vehicule->marque->name." ".$this->vehicule->modele." immatriculé ".$this->vehicule->immatriculation." a bien été prise en compte et approuver par la gestion du parc automobile de l'ARTCI !";
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
		$this->historique("Refus de la demande d'entretien de véhicule N° $this->id");
		$data = $this->save();
		if ($data->status) {
			$this->actualise();
			$message = "Votre demande d'entretien de véhicule pour la ".$this->vehicule->marque->name." ".$this->vehicule->modele." immatriculé ".$this->vehicule->immatriculation." a bien été refusé par la gestion du parc automobile de l'ARTCI !";
			$image = $rooter->stockage("images", "vehicules", $this->vehicule->image);
			$objet = "Demande d'entretien de véhicule refusé";

			ob_start();
			include(__DIR__."/../../sections/home/elements/mails/demandeentretien1.php");
			$contenu = ob_get_contents();
			ob_end_clean();
			//EMAIL::send([$this->email()], $objet, $contenu);
		}
		return $data;
	}



	public function sentenseCreate(){
		return $this->sentence = "Enregistrement d'une nouvelle demande d'entretien de vehicule pour le vehicule ".$this->vehicule->name()." par ".$this->carplan->name();
	}

	public function sentenseUpdate(){}
	public function sentenseDelete(){}

}



?>