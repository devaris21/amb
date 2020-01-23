<?php
namespace Home;
use Native\RESPONSE;
use Native\EMAIL;



/**
 * 
 */
class MISSION extends TABLE
{

	public static $tableName = __CLASS__;
	public static $namespace = __NAMESPACE__;


	public $reference;
	public $demandevehicule_id;
	public $departement_id;
	public $lieu;
	public $objet;
	public $comment;
	public $carburant;
	public $dotation;
	public $started;
	public $finished;
	public $etat_id = 0;
	public $employe_id;


	public function enregistre(){
		$data = new RESPONSE;
		if ($this->started <= $this->finished && $this->finished >= dateAjoute()) {
			$datas = DEMANDEVEHICULE::findBy(["id ="=>$this->demandevehicule_id]);
			if (count($datas) == 1) {
				$data = $this->save();
				if ($data->status) {
					$this->reference = $data->lastid."/".date("Y")."/CSDG/DRH/ML";
					$this->save();

					$this->set_id($data->lastid)->actualise();
					$params = PARAMS::findLastId();

					$message = "Une nouvelle mission a été enregistrée suite à l'approbation générale de la demande de véhicule N°$this->id pour ".$this->demandevehicule->typedemandevehicule->name." faite par ".$this->demandevehicule->auteur();
					ob_start();
					include(__DIR__."/../../sections/home/elements/mails/mission.php");
					$contenu = ob_get_contents();
					ob_end_clean();
					EMAIL::send(EMPLOYE::getEmailGestionnaires(), "Approbation d'une nouvelle mission", $contenu);


					$message = "Nous vous informons de la nouvelle mission suite à l'approbation générale de votre demande de véhicule N°$this->id pour ".$this->demandevehicule->typedemandevehicule->name;
					ob_start();
					include(__DIR__."/../../sections/home/elements/mails/missionuser.php");
					$contenu = ob_get_contents();
					ob_end_clean();
					EMAIL::send([$this->demandevehicule->email()], "Approbation votre mission", $contenu);
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

	public function terminer(){
		$data = new RESPONSE;
		if ($this->etat_id != 0) {
			$this->etat_id = 1;
			$this->historique("La mission en reference $this->reference vient d'etre declaré comme 'terminée' !");
			$data = $this->save();
			if ($data->status) {
				$this->fourni("chauffeur_mission");
				foreach ($this->chauffeur_missions as $key => $value) {
					if ($value->etat_id != 1) {
						$value->etat_id = 1;
						$value->save();
					}
				}
				$this->fourni("vehicule_mission");
				foreach ($this->vehicule_missions as $key => $value) {
					if ($value->etat_id != 1) {
						$value->etat_id = 1;
						$value->save();
					}
				}
			}
		}else{
			$data->status = false;
			$data->message = "Vous ne pouvez plus faire cette opération sur cette mission !";
		}
		return $data;
	}




	public static function statistiques(){
		$tableau_mois = ["", "Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre"];
		$mois1 = date("m", strtotime("-1 year")); $year1 = date("Y", strtotime("-1 year"));
		$mois2 = date("m"); $year2 = date("Y");
		$tableaux = [];
		while ( $year2 >= $year1) {
			$debut = $year1."-".$mois1."-01";
			$fin = $year1."-".$mois1."-".cal_days_in_month(CAL_GREGORIAN, ($mois1), $year1);
			$data = new RESPONSE;
			//$data->name = $tableau_mois[intval($mois1)]." ".$year1;
			$data->name = $year1."-".start0($mois1);
			$data->nbr = 0;
			////////////
			$datas = MISSION::findBy(["etat_id !="=>-1, "modified >= "=>$debut, "modified <="=>$fin]);
			$data->nbr = count($datas);
			$tableaux[] = $data;
			///////////////////////
			if ($mois2 == $mois1 && $year2 == $year1) {
				break;
			}else{
				if ($mois1 == 12) {
					$mois1 = 01;
					$year1++;
				}else{
					$mois1++;
				}
			}
		}
		return $tableaux;
	}




	public function sentenseCreate(){
		return $this->sentence = "Génération d'une nouvelle mission suite à l'approbation générale de la demande de véhicule N°$this->id";
	}

	public function sentenseUpdate(){}
	public function sentenseDelete(){}

}



?>