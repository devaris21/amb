<?php
namespace Home;
use Native\RESPONSE;
use Native\EMAIL;
/**
 * 
 */
class PRESTATAIRE extends PERSONNE
{
	public static $tableName = __CLASS__;
	public static $namespace = __NAMESPACE__;

	public $name;
	public $typeprestataire_id;
	public $email;
	public $login;
	public $password;
	public $adresse;
	public $contact;
	public $contact2;
	public $image;

	public $is_new = 1;
	public $is_allowed = 1;




	public function enregistre(){
		$data = new RESPONSE;
		if ($this->name != "") {
			if ($this->adresse != "" && $this->contact != "") {
				if ($this->verif_email($this->email)) {
					$pass = substr(uniqid(), 5);
					$this->login = substr(uniqid(), 5);
					$this->password = hasher($pass);
					$data = $this->save();
					if ($data->status) {
						ob_start();
						include(__DIR__."/../../sections/home/elements/mails/welcome_prestataire.php");
						$contenu = ob_get_contents();
						ob_end_clean();
						EMAIL::send([$this->email], "Bienvenue - ARTCI | Gestion du parc auto", $contenu);
					}
				}else{
					$data->status = false;
					$data->message = "l'adresse email est incorrect !";
				}
			}else{
				$data->status = false;
				$data->message = "Veuillez renseigner tous les champs marqués d'un * !";
			}
		}else{
			$data->status = false;
			$data->message = "Veuillez renseigner le nom de votre entreprise (votre flotte) !";
		}
		return $data;
	}



	public function se_connecter(){
		$connexion = new CONNEXION;
		$connexion->prestataire_id = $this->get_id();
		$connexion->connexion_carplane();
	}



	public function se_deconnecter(){
		$connexion = new CONNEXION;
		$connexion->prestataire_id = $this->get_id();
		$connexion->deconnexion_carplane();
	}


	public function last_connexion(){
		$datas = CONNEXION::findBy(["carplane_id = "=> $this->get_id()], [], ["id"=>"DESC"], 1);
		if (count($datas) == 1) {
			$connexion = $datas[0];
			if ($connexion->date_deconnexion == null) {
				return $connexion->date_connexion;
			}else{
				return $connexion->date_deconnexion;
			}
		}
	}




	public function statistiques(){
		$tableau_mois = ["", "Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre"];
		$mois1 = date("m", strtotime("-1 year")); $year1 = date("Y", strtotime("-1 year"));
		$mois2 = date("m"); $year2 = date("Y");
		$tableaux = [];
		while ( $year2 >= $year1) {
			$debut = $year1."-".$mois1."-01";
			$fin = $year1."-".$mois1."-".cal_days_in_month(CAL_GREGORIAN, ($mois1), $year1);
			$data = new RESPONSE;
			//$data->name = $tableau_mois[intval($mois1)]." ".$year1;
			$data->name = $year1."-".start0($mois1)."-".cal_days_in_month(CAL_GREGORIAN, ($mois1), $year1);;
			$data->no = $data->ex = $data->ci = $data->af = $data->mo = 0;
			$data->Nno = $data->Nex = $data->Nci = $data->Naf = $data->Nmo = 0;
			////////////
			$datas = COMMANDE::findBy(["entrepriselivreur_id="=>$this->get_id(), "etatcommande_id ="=>3, "modified >= "=>$debut, "modified <="=>$fin]);
			foreach ($datas as $key => $commande) {
				if ($commande->typecommande_id == 1) {
					$data->no += $commande->price;
					$data->Nno++;
				}else if ($commande->typecommande_id == 2) {
					$data->ex += $commande->price;
					$data->Nex++;
				}else if ($commande->typecommande_id == 3) {
					$data->ci += $commande->price;
					$data->Nci++;
				}else if ($commande->typecommande_id == 4) {
					$data->af += $commande->price;
					$data->Naf++;
				}else if ($commande->typecommande_id == 5) {
					$data->mo += $commande->price;
					$data->Nmo++;
				}
			}
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
		return $this->sentense = "Ajout d'un nouveau prestataire : $this->name";
	}
	public function sentenseUpdate(){
		return $this->sentense = "Modification des informations du prestataire $this->id : $this->name ";
	}
	public function sentenseDelete(){
		return $this->sentense = "Suppression definitive du prestataire $this->id : $this->name";
	}

}



?>