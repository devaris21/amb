<?php
namespace Home;
use Native\RESPONSE;
use Native\EMAIL;



/**
 * 
 */
class MEMORANDUM extends TABLE
{

	public static $tableName = __CLASS__;
	public static $namespace = __NAMESPACE__;


	public $reference;
	public $contenu;
	public $objet;
	public $etat_id = 0;
	public $employe_id;

	public $validation_gc = 0; 
	public $date_validation_gc = null;
	public $validation_csdg = 0; 
	public $date_validation_csdg = null;
	public $validation_dg = 0; 
	public $date_validation_dg = null;

	public $etats = 0;


	public function enregistre(){
		$data = new RESPONSE;
		if ($this->objet != "") {
			if ($this->contenu != "") {
				$this->employe_id = getSession("employe_connecte_id");
				$data = $this->save();
				if ($data->status) {
					$this->reference = start0($data->lastid)."/CSDG/DAL/SLET";
					$this->save();

					$this->set_id($data->lastid)->actualise();
					$params = PARAMS::findLastId();

					$message = "Vous avez reçu un nouveau mémorandum soumis à votre approbation faites par ".$this->employe->name().", avec pour objet : '$this->objet' ! ";
					ob_start();
					include(__DIR__."/../../sections/home/elements/mails/memo.php");
					$contenu = ob_get_contents();
					ob_end_clean();
					$emails = [];
					foreach (EMPLOYE::findBy(["is_admin ="=>1]) as $key => $employe) {
						$emails[] = $employe->email;
					}
					EMAIL::send($emails, "Approbation d'un nouveau memo", $contenu);
				}
			}else{
				$data->status = false;
				$data->message = "Le memo est vide !";
			}
		}else{
			$data->status = false;
			$data->message = "Veuillez renseigner l'objet du mémorandum !";
		}
		return $data;
	}



	public function sentenseCreate(){
		return $this->sentence = "Génération d'une nouvelle mission suite à l'approbation générale de la demande de véhicule N°$this->id";
	}

	public function sentenseUpdate(){}
	public function sentenseDelete(){}

}



?>