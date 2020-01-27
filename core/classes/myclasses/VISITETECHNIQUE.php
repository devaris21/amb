<?php
namespace Home;
use Native\RESPONSE;



/**
 * 
 */
class VISITETECHNIQUE extends TABLE
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
	public $typeduree_id;
	public $etatpiece_id = 0;
	public $gestionnaire_id;



	public function enregistre(){
		$data = new RESPONSE;
		if ($this->price >= 0) {
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
		}else{
			$data->status = false;
			$data->message = "Veuillez entrer un prix correct pour cette piece !";
		}	
		return $data;
	}



	public function compte(){
		if ($this->compte == 1) {
			return "Commission";
		}else{
			return "Reversement";
		}
	}


	public function auteur(){
		if ($this->livreur_id == null) {
			return $this->entrepriselivreur->name;
		}else{
			return $this->livreur->name." ".$this->livreur->lastname;
		}
	}


	public function regler_commande(COMMANDE $commande){
		$params = PARAMS::findLastId();
		$data = new RESPONSE;
		if (is_object($commande)) {
			$table = explode("\\", strtolower($commande::$tableName)) ;
			$table = explode("commande", strtolower(end($table)));
			$modul = end($table) ;

			$this->client_id       = $commande->client_id;
			$this->gestionnaire_id      = getSession("gestionnaire_connecte_id");
			if ($this->price <= $commande->reste ) {
				$data = $this->enregistre();
				if ($data->status) {
					$temp = MODEPAYEMENT::findBy(["id = "=>$this->modepayement_id])[0];
					$ligne = new LIGNEFACTURE;
					$module = MODULE::findBy(["name = " => $modul])[0];
					$ligne->reglement_id    = $data->lastid;
					$ligne->module_id       = $module->get_id();
					$ligne->numero_commande = $commande->get_id();
					$ligne->price           = $this->price;
					$ligne->reste           = $commande->reste - $this->price;
					$ligne->standby         = $temp->standby;
					$data = $ligne->save();
					if ($data->status) {							
						$commande->reste = $ligne->reste;
						$commande->save();
					}
				}				
			}else{
				$data->status = false;
				$data->message = "Vous ne pouvez regler plus que <b>".money($commande->reste)." ".$params->devise."</b> !";
			}

		}else{
			$data->status = false;
			$data->message = "Une erreur s'est produite lors de l'opération. Veuillez recommencer !";
		}
		return $data;
	}



	public function regler_avance(COMMANDE $commande){
		$data = new RESPONSE;
		if (is_object($commande)) {
			$table = explode("\\", strtolower($commande::$tableName)) ;
			$table = explode("commande", strtolower(end($table)));
			$modul = end($table) ;

			$this->price           = $commande->avance;
			$this->client_id       = $commande->client_id;
			$this->gestionnaire_id      = getSession("gestionnaire_connecte_id");
			$this->rendu           = $commande->rendu;
			$this->modepayement_id = $commande->modepayement_id;
			if ($this->price > 0) {
				$data = $this->enregistre();
				if ($data->status) {
					$temp = MODEPAYEMENT::findBy(["id = "=>$this->modepayement_id])[0];
					if ($data->status) {
						$ligne = new LIGNEFACTURE;
						$module = MODULE::findBy(["name = " => $modul])[0];
						$ligne->reglement_id    = $data->lastid;
						$ligne->module_id       = $module->get_id();
						$ligne->numero_commande = $commande->get_id();
						$ligne->price           = $this->price;
						$ligne->reste           = $commande->price - $commande->avance;
						$ligne->standby         = $temp->standby;
						$data = $ligne->save();
					}
				}
			}else{
				$data->status = false;
				$data->message = "Vous ne pouvez regler plus que <b>".money($commande->reste)."</b> !";
			}
		}else{
			$data->status = false;
			$data->message = "Une erreur s'est produite lors de l'opération. Veuillez recommencer !";
		}

		if (!$data->status) {
			$commande->avance = 0;
			$commande->reste = $commande->price;
			$commande->save();
		}
		return $data;
	}




	public function regler_commande_globale(Array $tableau){
		$data = new RESPONSE;
		$this->gestionnaire_id  = getSession("gestionnaire_connecte_id");
		$this->client_id  = getSession("client_courant_id");
		$temp = MODEPAYEMENT::findBy(["id = "=>$this->modepayement_id])[0];
		$this->historique("Reglement d'une facture shamman-form");
		$data = $this->enregistre();
		if ($data->status) {
			$lastid = $data->lastid;
			foreach ($tableau as $key => $value) {
				$commande = COMMANDE::getCommande($value);
				$ligne                  = new LIGNEFACTURE;
				$ligne->price           = $commande->reste;
				$ligne->reglement_id    = $lastid;
				$ligne->module_id       = $commande->module_id;
				$ligne->numero_commande = $commande->get_id();
				$ligne->reste           = 0;
				$ligne->standby = $temp->standby;
				$data = $ligne->save();
				if ($data->status) {
					$commande->reste = 0;
					$data = $commande->save();
				}				
			}
		}else{
			$data->status = false;
			$data->message = "Le montant renseigné pour le reglement est incorrect !";
		}
		return $data;
	}



	public function suppression(){
		if ($this->protected == 0) {
			$data = $this->supprime();
			$this->fourni("lignefacture");
			foreach ($this->items as $key => $ligne) {
				$module = MODULE::findBy(["id = "=>$ligne->module_id]);
				if (count($module) == 1) {
					$module = $module[0];
					$commande = COMMANDE::getCommande([$module->name, $ligne->numero_commande]);
					$commande->reste += $ligne->price;
					$commande->save();

					$data = $ligne->supprime();
				}
			}
		}else{
			$data->status = false;
			$data->message = "Vous ne pouvez pas suppression cet enregistrement. il est protégé !";
		}
		return $data;
	}


	public function sentenseCreate(){}
	public function sentenseUpdate(){}
	public function sentenseDelete(){}

}



?>