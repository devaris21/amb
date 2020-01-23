<?php 
namespace Home;
use Native\RESPONSE;
/**
 * 
 */
class HISTORIQUE extends TABLE
{

	public static $tableName = __CLASS__;
	public static $namespace = __NAMESPACE__;

	public $sentense; // phrase de l'historique
	public $employe_id = null;
	public $utilisateur_id = null;
	public $carplane_id = null;
	public $prestataire_id = null;
	public $is_caisse = 0; //1 si operation de caisse, 1 sinon
	public $price = 0; //le montant si operation de caisse
	public $type_save; //-1 delete, 0 create, 1 update
	public $record; //nom de la table
	public $record_key; //id de la table


	public static function createHistorique(TABLE $element, String $type_save){
		$sentense = $element->sentense;
		$element->actualise();
		$element->sentense = $sentense;

		extract($element::tableName());
		$story = new HISTORIQUE;
		$story->record = $table;
		$story->record_key = $element->get_id();
		$story->type_save = $type_save;
		$story->sentense =  $element->sentense;
		if (getSession("employe_connecte_id") != null) {
			$story->employe_id = getSession("employe_connecte_id");
		}

		if ($story->type_save == "insert") {
			$story->sentense = $element->sentenseCreate();
		}else if ($story->type_save == "delete") {
			$story->sentense = $element->sentenseDelete();
		}
		if (isset($element->utilisateur_id)) {
			$story->utilisateur_id = $element->utilisateur_id;
		}
		if (isset($element->carplane_id)) {
			$story->carplane_id = $element->carplane_id;
		}
		if (in_array($story->record, ["depense", "entree", "reglement", "remboursement", "lignefacture"])) {
			$story->is_caisse = 1;
			$story->price = $element->price;
		}
		if ($story->sentense != "") {
			$story->enregistre();
		}
	}
	
	
	public function enregistre(){
		$data = $this->save();
	}


public function auteur(){
	$this->actualise();
	if ($this->employe_id != null) {
		return $this->employe->name." ".$this->employe->lastname." // Gestionnaire GPA";

	}elseif ($this->utilisateur_id != null) {
		return $this->utilisateur->name." ".$this->utilisateur->lastname." // Direction";

	}elseif ($this->carplane_id != null) {
		return $this->carplane->name." ".$this->carplane->lastname." // Car plan";

	}elseif ($this->prestataire_id != null) {
		return $this->prestataire->name." ".$this->prestataire->lastname." // Prestataire";
	}
}


	public static function getHistoriqueClient(CLIENT $client, $date1 = null, $date2 =null){
		if (is_null($date1)) { $date1 = "2019-05-01"; }
		if (is_null($date2)) { $date2 = date("Y-m-d H:i:s"); }
		return self::findBy(["client_id ="=>$client->get_id(), "DATE(created) >= "=>$date1, "DATE(created) <= "=>$date2], [], ["created"=>"DESC"]);
	}


	public static function getHistoriqueEmploye(EMPLOYE $employe, $date1 = null, $date2 =null){
		if (is_null($date1)) { $date1 = dateAjoute(-2); }
		if (is_null($date2)) { $date2 = date("Y-m-d H:i:s"); }
		return self::findBy(["employe_id ="=>$employe->get_id(), "is_caisse = "=>0, "DATE(created) >= "=>$date1, "DATE(created) <= "=>$date2], [], ["created"=>"DESC"]);
	}


	public static function getHistoriqueCaisseEmploye(EMPLOYE $employe, $date1 = null, $date2 =null){
		if (is_null($date1)) { $date1 = dateAjoute(-2); }
		if (is_null($date2)) { $date2 = date("Y-m-d H:i:s"); }
		return self::findBy(["employe_id ="=>$employe->get_id(), "DATE(created) >= "=>$date1, "DATE(created) <= "=>$date2], [], ["created"=>"DESC"]);
	}


	public static function getHistoriqueFournisseur(FOURNISSEUR $client, $date1 = null, $date2 =null){
		if (is_null($date1)) { $date1 = "2019-05-01"; }
		if (is_null($date2)) { $date2 = date("Y-m-d H:i:s"); }
		return self::findBy(["client_id ="=>$client->get_id(), "DATE(created) >= "=>$date1, "DATE(created) <= "=>$date2], [], ["created"=>"DESC"]);
	}

	public function sentenseCreate(){}
	public function sentenseUpdate(){}
	public function sentenseDelete(){}

}
?>