<?php
namespace Home;
use Native\RESPONSE;
use Native\EMAIl;



/**
 * 
 */
class DEMANDEVEHICULE extends TABLE
{

	public static $tableName = __CLASS__;
	public static $namespace = __NAMESPACE__;


	public $ticket;
	public $typedemandevehicule_id = 0;
	public $utilisateur_id;
	public $departement_id;
	public $objet;
	public $comment;
	public $started;
	public $finished;
	public $with_chauffeur; 
	public $caracteristique; 
	public $lieu; 

	public $validation_dapa = 0; 
	public $date_validation_dapa = null;
	public $validation_tresorerie = 0; 
	public $date_validation_tresorerie = null;
	public $validation_dg = 0; 
	public $date_validation_dg = null;
	public $validation_rh = 0; 
	public $date_validation_rh = null;

	public $etats = 0; // 0 emise // 1 DRH valide // 2 DAPA valide // 3 DG validé
	public $etat_id = 0;
	public $gestionnaire_id;

	public $carburant;
	public $dotation;
	public $typedotation_id;


	public function enregistre(){
		$data = new RESPONSE;
		$this->utilisateur_id = getSession("utilisateur_connecte_id");
		$this->departement_id = getSession("departement_id");
		if (dateAjoute() <= $this->started && $this->started <= $this->finished) {
			$datas = TYPEDEMANDEVEHICULE::findBy(["id ="=>$this->typedemandevehicule_id]);
			if (count($datas) == 1) {
				$datas = UTILISATEUR::findBy(["id ="=>$this->utilisateur_id]);
				if (count($datas) == 1) {
					if ($this->typedemandevehicule_id != 1) {
						$this->etats = 1;
					}
					$this->ticket = strtoupper(substr(uniqid(), 5, 6));
					$data = $this->save();
					if ($data->status) {
						$this->setId($data->lastid)->actualise();
						$params = PARAMS::findLastId();

						$message = "Vous avez reçu une nouvelle demande de véhicule de la part de ".$this->auteur()." pour ".$this->typedemandevehicule->name;

						//TODO regler les mails
						// ob_start();
						// include(__DIR__."/../../sections/home/elements/mails/demandevehicule.php");
						// $contenu = ob_get_contents();
						// ob_end_clean();
						// EMAIL::send(GESTIONNAIRE::getEmailGestionnaires(), "Nouvelle demande de véhicule", $contenu);
						
					}
					$data->message = "Votre demande de véhicule a bien été pris en compte !";
				}else{
					$data->status = false;
					$data->message = "Une erreur s'est produite lors de l'opération, veuillez recommencer !";
				}
			}else{
				$data->status = false;
				$data->message = "1 Une erreur s'est produite lors de l'opération, veuillez recommencer !";
			}
		}else{
			$data->status = false;
			$data->message = "Les dates pour la période de demande ne sont correctes !";
		}
		return $data;
	}


	public static function encours(){
		return static::findBy(["etat_id ="=>0]);
	}


	public static function drh(){
		return static::findBy(["etat_id ="=>0, "etats ="=>0]);
	}
	public static function dapa(){
		return static::findBy(["etat_id ="=>0, "etats ="=>1]);
	}
	public static function dg(){
		return static::findBy(["etat_id ="=>0, "etats ="=>2]);
	}


	public static function valideesCeMois(){
		return static::findBy(["etat_id ="=>1, "date_approuve >="=>date("Y-m")."-01"]);
	}

	public static function annuleesCeMois(){
		return static::findBy(["etat_id ="=>-1, "date_approuve >="=>date("Y-m")."-01"]);
	}





	public static function missions(){
		return static::findBy(["typedemandevehicule_id ="=>1]);
	}

	public function with_chauffeur(){
		return ($this->with_chauffeur == 0) ? "Sans chauffeur" : "Avec chauffeur";
	}

	public function caracteristique(){
		return ($this->caracteristique == "") ? "N'importe quel véhicule" : "Vehicule de type $this->caracteristique";
	}


	public function auteur(){
		$this->actualise();
		return $this->utilisateur->name." ".$this->utilisateur->lastname." - ". $this->utilisateur->departement->name;
	}


	public function email(){
		$this->actualise();
		return $this->utilisateur->email;
	}


	public function annuler(){
		$this->etat_id = -1;
		$this->historique("Annulation de la demande de véhicule N° $this->id par le demandeur");
		return $this->save();
	}

	public function approuver(){
		$data = new RESPONSE;
		$this->etat_id = 1;
		$this->date_approuve = date("Y-m-d H:i:s");
		$this->historique("Approbation de la demande de véhicule N° $this->id");
		$data = $this->save();
		if ($data->status) {
			$this->actualise();
			$message = "Votre demande de véhicule N°".$this->getId()." pour ".$this->typedemandevehicule->name." a été approuvé par la DAPA, les Ressources humaines et la Direction Générale !";
			$objet = "Demande de véhicule approuvé";

			ob_start();
			include(__DIR__."/../../sections/home/elements/mails/demandevehicule1.php");
			$contenu = ob_get_contents();
			ob_end_clean();
			EMAIL::send([$this->email()], $objet, $contenu);
		}
		return $data;
	}

	public function refuser(String $commentaire){
		$data = new RESPONSE;
		$this->etat_id = -1;
		$this->date_approuve = date("Y-m-d H:i:s");
		$this->historique("Refus de la demande de véhicule N° $this->id");
		$data = $this->save();
		if ($data->status) {
			$this->actualise();
			$message = "Votre demande de véhicule N°".$this->getId()." pour ".$this->typedemandevehicule->name." a été refusé ! Comme motif << $commentaire >> !";
			$objet = "Demande de véhicule refusé";

			ob_start();
			include(__DIR__."/../../sections/home/elements/mails/demandevehicule1.php");
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