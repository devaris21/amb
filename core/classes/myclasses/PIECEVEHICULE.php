<?php
namespace Home;
use Native\RESPONSE;



/**
 * 
 */
class PIECEVEHICULE extends TABLE
{

	public static $tableName = __CLASS__;
	public static $namespace = __NAMESPACE__;


	public $name;
	public $numero_piece;
	public $vehicule_id;
	public $typepiecevehicule_id;
	public $date_etablissement; 
	public $started;
	public $finished;
	public $duree;
	public $typeduree_id;
	public $etatpiece_id = 1;
	public $employe_id;


	public function enregistre(){
		$data = new RESPONSE;
		if ($this->price >= 0) {
			if ($this->name != "" && $this->numero_piece != "") {
				$datas = TYPEPIECEVEHICULE::findBy(["id ="=>$this->typepiecevehicule_id]);
				if (count($datas) == 1) {
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


	public function etat(){
		if ($this->finished >= dateAjoute()) {
			$this->etatpiece_id = 1;
		}else{
			$this->etatpiece_id = -1;
		}
		$this->save();
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


	public function sentenseCreate(){
		return $this->sentense = "Nouvelle piece administrative pour la ".$this->vehicule->name();
	}

	public function sentenseUpdate(){}
	public function sentenseDelete(){}

}



?>