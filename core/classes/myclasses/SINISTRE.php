<?php
namespace Home;
use Native\RESPONSE;
use Native\ROOTER;
use Native\EMAIL;



/**
 * 
 */
class SINISTRE extends TABLE
{

	public static $tableName = __CLASS__;
	public static $namespace = __NAMESPACE__;


	public $name;
	public $typesinistre_id;
	public $vehicule_id;
	public $date_etablissement; 
	public $comment;
	public $employe_id;
	public $chauffeur_id = null;
	public $carplane_id = null;
	public $lieudrame;
	public $etat_id = 0;
	public $date_approbation = null;

	public $constat;
	public $pompiers = 0;
	public $nomautre;
	public $contactautre;
	public $vehiculeautre;
	public $assurance;


	public function enregistre(){
		$data = new RESPONSE;
		if ($this->name != "") {
			$datas = VEHICULE::findBy(["id ="=>$this->vehicule_id]);
			if (count($datas) == 1) {
				$this->employe_id = getSession("employe_connecte_id");
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


	public function constat(){
		if ($this->constat == 0) {
			return "Constat à l'amiable";
		}else{
			return "Intervention de la police";
		}
	}


	public function auteur(){
		$this->actualise();
		if ($this->chauffeur_id == null) {
			return $this->carplane->name." ".$this->carplane->lastname;
		}else{
			return $this->chauffeur->name." ".$this->chauffeur->lastname;
		}
	}

	public function contact(){
		$this->actualise();
		if ($this->chauffeur_id == null) {
			return $this->carplane->contact;
		}else{
			return $this->chauffeur->contact." - ".$this->chauffeur->contact2;
		}
	}

	public function email(){
		$this->actualise();
		if ($this->chauffeur_id == null) {
			return $this->carplane->email;
		}else{
			return $this->chauffeur->email;
		}
	}


	public function fonction(){
		$this->actualise();
		if ($this->chauffeur_id == null) {
			return "Véhicule affecté";
		}else{
			return "Chauffeur ARTCI";
		}
	}

	public function approuver(){
		$data = new RESPONSE;
		$rooter = new ROOTER;
		$this->etat_id = 1;
		$this->date_approbation = date("Y-m-d H:i:s");
		$this->historique("Approbation de la demande d'entretien de véhicule N° $this->id");
		$data = $this->save();
		if ($data->status) {
			$this->actualise();
			$message = "Votre declaration de sinistre pour la ".$this->vehicule->marque->name." ".$this->vehicule->modele." immatriculé ".$this->vehicule->immatriculation." a bien été prise en compte et approuver par la gestion du parc automobile de l'ARTCI !";
			$image = $rooter->image("vehicules", $this->vehicule->image);
			$objet = "Déclaration de sinistre approuvée";

			ob_start();
			include(__DIR__."/../../sections/home/elements/mails/sinistre.php");
			$contenu = ob_get_contents();
			ob_end_clean();
			EMAIL::send([$this->email()], $objet, $contenu);
		}
		return $data;
	}

	public function refuser(){
		$data = new RESPONSE;
		$rooter = new ROOTER;
		$this->etat_id = -1;
		$this->date_approbation = date("Y-m-d H:i:s");
		$this->historique("Refus de la demande d'entretien de véhicule N° $this->id");
		$data = $this->save();
		if ($data->status) {
			$this->actualise();
			$message = "Votre declaration de sinistre pour la ".$this->vehicule->marque->name." ".$this->vehicule->modele." immatriculé ".$this->vehicule->immatriculation." a bien été refusé par la gestion du parc automobile de l'ARTCI !";
			$image = $rooter->image("vehicules", $this->vehicule->image);
			$objet = "Déclaration de sinistre refusée";

			ob_start();
			include(__DIR__."/../../sections/home/elements/mails/sinistre.php");
			$contenu = ob_get_contents();
			ob_end_clean();
			EMAIL::send([$this->email()], $objet, $contenu);
		}
		return $data;
	}


	public function sentenseCreate(){}
	public function sentenseUpdate(){}
	public function sentenseDelete(){}

}



?>