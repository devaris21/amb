<?php
namespace Home;
use Native\RESPONSE;
/**
 * 
 */
abstract class AUTH extends TABLE
{
	public static $tableName = __CLASS__;
	public static $namespace = __NAMESPACE__;

	public $nationalite;
	public $adresse;
	public $date_naissance;
	public $lieu_naissance;
	public $contact;
	public $contact2;
	public $ville;

	public $login;
	public $password;


	public static function connect(Array $params){
		$data = new RESPONSE;
		if (count($params) > 0) {
			$datas = static::findBy($params);
			if (count($datas) == 1) {
				$element = $datas[0];
				$element->actualise();
				if ($element->is_allowed()) {
					$data->status = true;
					//on met a jour le lasttime
					session("last_access", time());
					$data->element = $element;
					$data->new = false;
					if ($element->is_new == 1) {
						$data->new = true;
					}
				}else{
					$data->status = false;
					$data->message = "L'accès à cette application vous a été restrient !";
					$data->set_url("access", "restriction");
				}
			}else{
				$data->status = false;
				$data->message = "Votre login et/ou le mot de passe est incorrect !";
			}
		}else{
			$data->status = false;
			$data->message = "Veuillez renseigner integralement vos parametres de connexion !";
		}
		return $data;
	}


	public function resetPassword(){
		$this->is_new = 1;
		$this->login = substr(uniqid(), 6);
		$pass = substr(uniqid(), 5);
		$this->password = hasher($pass);
		$this->historique("Reinitialisation des parametres de connexion de $this->name $this->lastname");
		$data = $this->save();
		if ($data->status) {
			ob_start();
			//TODO mettre le mail a jour
			include(__DIR__."/../../sections/home/elements/mails/reset.php");
			$contenu = ob_get_contents();
			ob_end_clean();
			EMAIL::send([$this->email], "Reinitialisation de vos parametres de connexion", $contenu);
			$data->set_url("amb", "start", "select");
		}
		return $data;
	}



	public function loginIsValide(String $login){
		if ($login != "") {
			$login = verification($login);
			$datas = static::findBy(["login = "=>$login]);
			if (count($datas) == 0) {
				return true;
			}else{
				$item = $datas[0];
				if ($item->id === $this->id) {
					return true;
				}else{
					return false;
				}
			}
		}else{
			return false;
		}
	}


	public function emailIsValide(String $login){
		if(filter_var($email, FILTER_VALIDATE_EMAIL)){
			$datas = static::findBy(["email = "=>$email]);
			if (count($datas) == 0) {
				return true;
			}else{
				$item = $datas[0];
				if ($item->id === $this->id) {
					return true;
				}else{
					$this->email = null;
					return false;
				}
			}
		}else{
			return false;
		}
	}



	public function passwordIsValide($password){
		if (strlen($password) > 6) {
			return true;
		}else{
			return false;
		}
	}



	public function checkPassword($password){
		if ($this->password === hasher($password)) {
			return true;
		}else{
			return false;
		}
	}


	public function setPassword($password){
		$this->password = hasher($password);
		return $this;
	}


	public function sentenseCreate(){}
	public function sentenseUpdate(){}
	public function sentenseDelete(){}

}



?>