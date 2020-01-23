<?php
namespace Home;
use Native\RESPONSE;
/**
 * 
 */
class CONNEXION extends TABLE
{

	public static $tableName = __CLASS__;
	public static $namespace = __NAMESPACE__;


	public $date_connexion;
	public $date_deconnexion ;
	public $employe_id = null;
	public $client_id = null;

	public function enregistre(){
		return $this->save();
	}


	
	//connecter un employé
	public function connexion_employe(){
		$this->deconnexion_employe();
		session("employe_connecte_id", $this->employe_id);
		$this->date_connexion = date("Y-m-d H:i:s");
		$this->date_deconnexion = null;
		$this->enregistre();
	}



	//deconnecter un employé
	public function deconnexion_employe(){
		$datas = CONNEXION::findBy(["employe_id = "=> $this->employe_id], [], ["id"=>"DESC"], 1);
		if (count($datas) > 0) {
			$connexion = $datas[0];
			$connexion->actualise();
			if ($connexion->date_deconnexion == null) {
				$connexion->date_deconnexion = date("Y-m-d H:i:s");
				$connexion->historique("Déconnexion du gestionnaire".$connexion->employe->name." ".$connexion->employe->lastname);
				$connexion->save();
			}
		}
	}


/////////////////////////////////////////////////////////////////////////////////////////////////////


	//connecter un client
	public function connexion_client(){
		$this->deconnexion_client();
		session("client_id", $this->client_id);
		$this->date_connexion = date("Y-m-d H:i:s");
		$this->date_deconnexion = null;
		$this->enregistre();
	}



	//deconnecter un client
	public function deconnexion_client(){
		$datas = CONNEXION::findBy(["client_id = "=> $this->client_id], [], ["id"=>"DESC"], 1);
		if (count($datas) > 0) {
			$connexion = $datas[0];
			$connexion->actualise();
			if ($connexion->date_deconnexion == null) {
				$connexion->date_deconnexion = date("Y-m-d H:i:s");
				$connexion->historique("Déconnexion du client ".$connexion->client->name." ".$connexion->client->lastname);
				$connexion->save();
			}
		}
	}


/////////////////////////////////////////////////////////////////////////////////////////////////////


	//connecter un carplan
	public function connexion_carplane(){
		$this->deconnexion_carplane();
		session("carplane_id", $this->carplane_id);
		$this->date_connexion = date("Y-m-d H:i:s");
		$this->date_deconnexion = null;

		$this->enregistre();
	}



	//deconnecter un carplan
	public function deconnexion_carplane(){
		$datas = CONNEXION::findBy(["carplane_id = "=> $this->carplane_id], [], ["id"=>"DESC"], 1);
		if (count($datas) > 0) {
			$connexion = $datas[0];
			$connexion->actualise();
			if ($connexion->date_deconnexion == null) {
				$connexion->date_deconnexion = date("Y-m-d H:i:s");
				$connexion->historique("Déconnexion du carplane ".$connexion->carplane->name." ".$connexion->carplane->lastname);
				$connexion->save();
			}
		}
	}


/////////////////////////////////////////////////////////////////////////////////////////////////////

	//connecter un prestataire
	public function connexion_prestataire(){
		$this->deconnexion_prestataire();
		session("prestataire_id", $this->prestataire_id);
		$this->date_connexion = date("Y-m-d H:i:s");
		$this->date_deconnexion = null;
		$connexion->historique("Nouvelle connexion du prestataire ".$connexion->prestataire->name." ".$connexion->prestataire->lastname);
		$this->enregistre();
	}



	//deconnecter un prestataire
	public function deconnexion_prestataire(){
		$datas = CONNEXION::findBy(["prestataire_id = "=> $this->prestataire_id], [], ["id"=>"DESC"], 1);
		if (count($datas) > 0) {
			$connexion = $datas[0];
			$connexion->actualise();
			if ($connexion->date_deconnexion == null) {
				$connexion->date_deconnexion = date("Y-m-d H:i:s");
				$connexion->historique("Déconnexion du prestataire ".$connexion->prestataire->name." ".$connexion->prestataire->lastname);
				$connexion->save();
			}
		}
	}


/////////////////////////////////////////////////////////////////////////////////////////////////////



	public function sentenseCreate(){
		return $this->sentense = "Nouvelle connexion";
	}


	public function sentenseUpdate(){
		return $this->sentense = "Modification des informations de la connexion de ".$this->employe->name." ".$this->employe->lastname." du ".datelong($this->created);
	}


	public function sentenseDelete(){
		return $this->sentense = "Supprimer de la connexion de  ".$this->employe->name." ".$this->employe->lastname." du ".datelong($this->created);
	}

}
?>