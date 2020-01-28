<?php
namespace Home;
use Native\RESPONSE;
use Native\FICHIER;
/**
 * 
 */
class VEHICULE extends TABLE
{
	public static $tableName = __CLASS__;
	public static $namespace = __NAMESPACE__;

	public $typevehicule_id;
	public $groupevehicule_id;
	public $prestataire_id = 1;
	public $immatriculation;
	public $couleur;
	public $chasis;
	public $image = "default.jpg";
	public $nb_place;
	public $nb_porte;
	public $marque_id;
	public $etiquette;
	public $price = 0;
	public $comment;
	public $date_acquisition;
	public $modele;
	public $energie_id;
	public $typetransmission_id;
	public $puissance;
	public $kilometrage;
	public $date_mise_circulation;
	public $date_sortie;
	public $date_visitetechnique;
	public $date_vidange;
	public $date_assurance;
	public $etatvehicule_id = 0;
	public $location = 0;
	public $possession = 1;

	public function enregistre(){
		$data = new RESPONSE;
		if ($this->prestataire_id == null) {
			$this->prestataire_id = 1;
		}
		if ($this->immatriculation != "" && $this->modele != "") {
			$datas = TYPEVEHICULE::findBy(["id ="=>$this->typevehicule_id]);
			if (count($datas) == 1) {
				$datas = PRESTATAIRE::findBy(["id ="=>$this->prestataire_id]);
				if (count($datas) == 1) {
					$data = $this->save();
					if ($data->status) {
						if (isset($this->photo) && $this->photo["tmp_name"] != "") {
							$image = new FICHIER();
							$image->hydrater($this->photo);
							if ($image->is_image()) {
								$a = substr(uniqid(), 5);
								$result = $image->upload("images", "vehicules", $a);
								$this->image = $result->filename;
								$this->save();
							}
						}
					}
				}else{
					$data->status = false;
					$data->message = "Une erreur s'est produite lors de l'ajout du véhicule !";
				}
			}else{
				$data->status = false;
				$data->message = "Une erreur s'est produite lors de l'ajout du véhicule !";
			}
		}else{
			$data->status = false;
			$data->message = "Veuillez renseigner tous les champs !";
		}
		return $data;
	}
	


	public function finAssurance(){
		$datas = ASSURANCE::findBy(["vehicule_id ="=> $this->getId()], [], ["finished"=>"DESC"]);
		if (count($datas) >= 1) {
			$item = $datas[0];
			return $item->finished;
		}else{
			return "2019-09-01";
		}
	}


	public function finVisite(){
		$datas = VISITETECHNIQUE::findBy(["vehicule_id ="=> $this->getId()], [], ["finished"=>"DESC"]);
		if (count($datas) >= 1) {
			$item = $datas[0];
			return $item->finished;
		}else{
			return "2019-09-01";
		}
	}


	public function finVidange(){
		$datas = TYPEENTRETIENVEHICULE::findBy();
		$datas = ASSURANCE::findBy(["vehicule_id ="=> $this->getId()], [], ["finished"=>"DESC"]);
		if (count($datas) >= 1) {
			$item = $datas[0];
			return $item->finished;
		}else{
			return "2019-09-01";
		}
	}


	public function piecevehicules(){
		foreach (TYPEPIECEVEHICULE::getAll() as $key => $piece) {
			$datas = PIECEVEHICULE::findBy(["vehicule_id ="=>$this->getId(), "typepiecevehicule_id ="=>$piece->getId()], [], ["finished"=>"DESC"]);
			$name = "piece".$piece->getId();
			if (count($datas) >= 1) {
				$item = $datas[0];
				$this->$name = $item->finished;
			}else{
				$this->$name = "2019-09-01";
			}
		}
	}


//////////////////////////////////////////////////////////////////////////////////////////


	public function assurance(){
		$datas = ASSURANCE::findBy(["vehicule_id ="=> $this->getId()], [], ["finished"=>"DESC"]);
		if (count($datas) >= 1) {
			return $datas[0];
		}else{
			return null;
		}
	}


	public function visiteTechnique(){
		$datas = VISITETECHNIQUE::findBy(["vehicule_id ="=> $this->getId()], [], ["finished"=>"DESC"]);
		if (count($datas) >= 1) {
			return $datas[0];
		}else{
			return null;
		}
	}

	public function carteGrise(){
		$datas = CARTEGRISE::findBy(["vehicule_id ="=> $this->getId()], [], ["id"=>"DESC"]);
		if (count($datas) >= 1) {
			return $datas[0];
		}else{
			return null;
		}
	}

	public function pieces(){
		$tableau = [];
		foreach (TYPEPIECEVEHICULE::getAll() as $key => $value) {
			$datas = PIECEVEHICULE::findBy(["vehicule_id ="=> $this->getId(), "typepiecevehicule_id ="=>$value->getId()], [], ["finished"=>"DESC"]);
			if (count($datas) >= 1) {
				$tableau[] = $datas[0];
			}
		}
		return $tableau;
	}

	/////////////////////////

	public function etat(){
		
		if (!in_array($this->etatvehicule_id, [-1, -2])) {
			if ($this->date_sortie != null) {
				$this->etatvehicule_id = -2;
			}elseif ($this->is_affecte()) {
				$this->etatvehicule_id = 3;
			}else{
				$datas = ENTRETIENVEHICULE::findBy(["etat_id="=>0, "started >="=>dateAjoute(), "vehicule_id ="=>$this->getId()]);
				if (count($datas) > 0) {
					$this->etatvehicule_id = 1;
				}else{
					$datas = VEHICULE_MISSION::findBy(["etat_id="=>0, "vehicule_id ="=>$this->getId()]);
					if (count($datas) > 0) {
						$this->etatvehicule_id = 2;
					}else{
						$this->etatvehicule_id = 0;
						$datas = LOCATION_VEHICULE::findBy(["etat_id="=>0, "vehicule_id ="=>$this->getId()]);
						foreach ($datas as $key => $value) {
							$value->actualise();
							if ($value->location->started <= dateAjoute() && dateAjoute() <= $value->location->finished) {
								$this->etatvehicule_id = 4;
								break;
							}
						}
					}
				}
			}
			$this->save();
		}
	}

	public function name(){
		$this->actualise();
		return $this->marque->name." ".$this->modele." immatriculé ".$this->immatriculation;
	}


	public function affectation(){
		$this->actualise();
		$this->fonction = "";
		if ($this->is_affecte()) {
			$datas = AFFECTATION::findBy(["vehicule_id="=>$this->getId(), "etat_id="=>0]);
			if (count($datas) > 0) {
				$affectation = $datas[0];
				$affectation->actualise();
				$this->carplan = $affectation->carplan;
				$this->fonction = $affectation->carplan->fonction;
				return $affectation->carplan->name();
			}
		}else{
			return $this->groupevehicule->name;
		}
	}


	public function is_affecte(){
		$datas = AFFECTATION::findBy(["vehicule_id ="=> $this->getId(), "etat_id="=>0]);
		if (count($datas) > 0) {
			return true;
		}else{
			return false;
		}
	}


	public function en_pret(){
		$this->etat();
		if ($this->etatvehicule_id == 4) {
			return true;
		}else{
			return false;
		}
	}

	//////////////////////////////////////////////////////////////////////////////////////////////////////////////////


	public function indisponible(){
		$this->historique("Le vehicule ".$this->name()." est maintenant indisponible !");
		$this->etatvehicule_id = -1;
		return $this->save();
	}



	public function disponible(){
		$this->historique("Le vehicule ".$this->name()." est de nouveau disponible !");
		$this->etatvehicule_id = 0;
		return $this->save();
	}


	public function out(){
		$data = new RESPONSE;
		if ($this->location == 0) {
			$this->historique("Le vehicule ".$this->name()." ne fait plus parti du parc !");
			$this->etatvehicule_id = 0;
			$this->date_sortie = dateAjoute();
			$data =  $this->save();
		}else{
			$data->status = false;
			$data->message = "Ce véhicule est en location chez ARTCI, il ne peut donc subir cette opération !";
		}
		return $data;
	}




////////////////////////////////////////////////////////////////////////////
	public static function artci(){
		return static::findBy(["prestataire_id ="=> 1]);
	}

	public static function noArtci(){
		return static::findBy(["prestataire_id !="=> 1, "possession ="=>1]);
	}

	public static function parcauto(){
		return static::findBy(["possession ="=>1]);
	}

	public static function loues(){
		return static::findBy(["location ="=>1, "possession ="=>1]);
	}

	public static function pretes(){
		$datas = static::findBy(["possession ="=>1]);
		foreach ($datas as $key => $vehicule) {
			$vehicule->etat();
			if (!in_array($vehicule->etatvehicule_id, [4])) {
				unset($datas[$key]);
			}
		}
		return $datas;
	}


	public static function pret_location(){
		$datas = static::loues();
		$datas1 = static::pretes();
		foreach ($datas1 as $key => $vehicule1) {
			foreach ($datas as $key => $vehicule) {
				if ($vehicule1->getId() == $vehicule->getId()) {
					unset($datas1[$key]);
				}
			}
		}
		return array_merge($datas, $datas1);
	}

	public static function in(){
		$datas = static::findBy(["possession ="=>1]);
		foreach ($datas as $key => $vehicule) {
			$vehicule->etat();
			if (in_array($vehicule->etatvehicule_id, [1,2,3,4])) {
				unset($datas[$key]);
			}
		}
		return $datas;
	}


////////////////////////////////////////////////////////////////////////////////////////////////////////////


	public function sentenseCreate(){
		return $this->sentense = "Enregistrement d'un nouveau véhicule N°$this->id immatriculé $this->immatriculation.";
	}


	public function sentenseUpdate(){
		return $this->sentense = "Modification des infos du véhicule N°$this->id immatriculé $this->immatriculation.";
	}


	public function sentenseDelete(){
		return $this->sentense = "Suppression définitive du véhicule N°$this->id immatriculé $this->immatriculation dans la base de données.";
	}

}
?>