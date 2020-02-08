<?php
namespace Home;
use Native\RESPONSE;
use Native\FICHIER;
use \DateTime;
use \DateInterval;
/**
/**
 * 
 */
class CHAUFFEUR extends PERSONNE
{
	public static $tableName = __CLASS__;
	public static $namespace = __NAMESPACE__;

	public $matricule;
	public $name;
	public $lastname;
	public $nationalite;
	public $adresse;
	public $sexe_id;
	public $typepermis;	
	public $numero_permis;
	public $date_fin_permis;
	public $email;
	public $contact;
	public $image;
	public $etatchauffeur_id;



	public function enregistre(){
		$data = new RESPONSE;
		if ($this->name ) {
			$data = $this->save();
			if ($data->status) {
				$this->uploading();
			}
		}else{
			$data->status = false;
			$data->message = "Veuillez le login et le mot de passe du nouvel employé !";
		}
		return $data;
	}


	public function uploading(){
		if (isset($this->image) && $this->image["tmp_name"] != "") {
			$image = new FICHIER();
			$image->hydrater($this->image);
			if ($image->is_image()) {
				$a = substr(uniqid(), 5);
				$result = $image->upload("images", "chauffeurs", $a);
				$this->image = $result->filename;
				$this->save();
			}
		}
	}




	public function etat(){
		if ($this->etatchauffeur_id != -1) {
			$datas = CHAUFFEUR_MISSION::findBy(["etat_id="=>0, "chauffeur_id ="=>$this->getId()]);
			if (count($datas) > 0) {
				$this->etatchauffeur_id = 1;
			}else{
				$this->etatchauffeur_id = 0;
			}			
			$this->save();
		}
	}


	public static function disponibles(){
		// TODO revoir les chauffeurs disponibles
		$datas = static::getAll();
		foreach ($datas as $key => $chauffeur) {
			$chauffeur->etat();
			if ($chauffeur->etatchauffeur_id != 0) {
				unset($datas[$key]);
			}
		}
		return $datas;
	}


	public function sentenseCreate(){
		return $this->sentense = "Ajout d'un nouveau chauffeur dans votre gestion : $this->name $this->lastname";
	}


	public function sentenseUpdate(){
		return $this->sentense = "Modification des informations du chauffeur N°$this->id : $this->name $this->lastname.";
	}


	public function sentenseDelete(){
		return $this->sentense = "Suppression définitive du chauffeur N°$this->id : $this->name $this->lastname.";
	}



}

?>