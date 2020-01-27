<?php
namespace Home;
use Native\RESPONSE;
use Native\EMAIL;
use \DateTime;
use \DateInterval;
/**
/**
 * 
 */
class carplan extends PERSONNE
{
	public static $tableName = __CLASS__;
	public static $namespace = __NAMESPACE__;



	public $allowed = 1;
	public $sexe_id = 1;
	public $fonction ;
	public $is_connecte = false;
	public $image ;
	


	public function enregistre(){
		$data = new RESPONSE;
		if ($this->name != "") {
			if ($this->email != "") {
				if ($this->verif_email($this->email)) {
					$pass = substr(uniqid(), 5);
					$this->login = substr(uniqid(), 5);
					$this->password = hasher($pass);
					$data = $this->save();
					if ($data->status) {
						ob_start();
						include(__DIR__."/../../sections/home/elements/mails/welcome_carplan.php");
						$contenu = ob_get_contents();
						ob_end_clean();
						EMAIL::send([$this->email], "Bienvenue - ARTCI | Gestion du parc auto", $contenu);
					}
				}else{
					$data->status = false;
					$data->message = "l'adresse email est incorrect !";
				}
			}else{
				$data = $this->save();
			}			
		}else{
			$data->status = false;
			$data->message = "Veuillez renseigner le nom du nouvel utilisateur du véhicule !";
		}
		return $data;
	}



	public function create_compte(){
		$pass = substr(uniqid(), 5);
		$this->login = substr(uniqid(), 5);
		$this->password = hasher($pass);
		$data = $this->save();
		if ($data->status) {
			ob_start();
			include(__DIR__."/../../sections/home/elements/mails/welcome_carplan.php");
			$contenu = ob_get_contents();
			ob_end_clean();
			EMAIL::send([$this->email], "Bienvenue - ARTCI | Gestion du parc auto", $contenu);
		}
		return $data;
	}




	public function se_connecter(){
		$connexion = new CONNEXION;
		$connexion->carplan_id = $this->get_id();
		$connexion->connexion_carplan();
	}



	public function se_deconnecter(){
		$connexion = new CONNEXION;
		$connexion->carplan_id = $this->get_id();
		$connexion->deconnexion_carplan();
	}


	public function last_connexion(){
		$datas = CONNEXION::findBy(["carplan_id = "=> $this->get_id()], [], ["id"=>"DESC"], 1);
		if (count($datas) == 1) {
			$connexion = $datas[0];
			if ($connexion->date_deconnexion == null) {
				return $connexion->date_connexion;
			}else{
				return $connexion->date_deconnexion;
			}
		}
	}


	public static function getAllConnected(){
		$datas = self::findBy(["allowed = "=> 1]);
		foreach ($datas as $key => $employe) {
			if (!$employe->is_connected()) {
				unset($datas[$key]);
			}
		}
		return $datas;
	}


	public function is_allowed(){
		if ($this->allowed == 0) {
			return false;
		}else{
			return true;
		}
	}


	public function is_connected(){
		$datas = CONNEXION::findBy(["employe_id = "=> $this->get_id()], [], ["id"=>"DESC"], 1);
		if (count($datas) == 1) {
			$connexion = $datas[0];
			if ($connexion->date_deconnexion == null) {
				return true;
			}else{
				return false;
			}
		}
	}



	public function relog_employe(string $login, string $password){
		$data = new RESPONSE;
		if ($password != "" && $login != "") {
			$datas = self::findBy(["login = "=>$login, "id !="=> $this->get_id()]);
			if (count($datas) == 0) {
				if($this->password != hasher($password)){
					if ($this->set_login($login)) {
						$this->set_password($password);
						$this->is_new = 1;
						$data = $this->save();
						$data->set_url("master", "dashboard");
					}else{
						$data->status = false;
						$data->message = "Cet identifiant est déjà utilisé. Changez-le !!!";
					}
				}else{
					$data->status = false;
					$data->message = "Veuillez ne pas utiliser l'ancien mot de passe. Changez-le !!!";
				}
			}else{
				$data->status = false;
				$data->message = "Vous ne pouvez pas utiliser ce login !";
			}
		}else{
			$data->status = false;
			$data->message = "Veuillez renseigner integralement vos parametres de connexion !";
		}
		return $data;
	}



	public function reinitialiserCompte(){
		$data = new RESPONSE;
		if ($this->set_login(substr(md5(uniqid()), 0, 9))) {
			$this->set_password("6ed78djf21ga");
			$this->is_new = 0;
			$this->historique("Reinitialisation des parametres de compte de $this->name $this->lastname");
			$data = $this->save();
		}else{
			$data->status = false;
			$data->message = "Cet identifiant est déjà utilisé. Veuillez reessayer !!!";
		}	
		return $data;
	}


	public function interdireCompte(){
		$this->allowed = 0;
		$this->historique("Restriction d'accès pour le compte de $this->name $this->lastname");
		$data = $this->save();	
		return $data;
	}


	public function accesCompte(){
		$this->allowed = 1;
		$this->historique("Reouverture d'accès pour le compte de $this->name $this->lastname");
		$data = $this->save();	
		return $data;
	}


	public function supprimerCompte(){
		$this->valide = 0;
		$this->allowed = 0;
		$this->set_password(substr(md5(uniqid()), 7, 12));
		$this->historique("Suppression du compte compte de $this->name $this->lastname");
		$data = $this->save();	
		return $data;
	}




	public function validate(){
		$data = new RESPONSE;
		$query = new QUERY;
		$datas = self::findBy(["login = "=>$this->login]);
		if (count($datas) == 0) {
			$data->status = true;
			$data->message = "aucun login semblabe, valide!";
		}else{
			$employeTemp = $datas[0];
			if ($employeTemp->id === $this->id) {
				$data->status = true;
				$data->message = "C'est son login'";
			}else{
				$data->status = false;
				$data->message = "Ce identifiant n'est pas disponible. veuillez le changer !";
			}
		}
		return $data;
	}







	public function sentenseCreate(){
		return $this->sentense = "Ajout d'un nouvel employé dans votre gestion : $this->name $this->lastname";
	}


	public function sentenseUpdate(){
		return $this->sentense = "Modification des informations de l'employé $this->name $this->lastname.";
	}


	public function sentenseDelete(){
		return $this->sentense = "Suppression définitive de l'employé $this->name $this->lastname.";
	}



}

?>