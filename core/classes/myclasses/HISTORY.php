<?php 
namespace Home;
use Native\RESPONSE;
/**
 * 
 */
class HISTORY extends TABE
{

	public $sentense; // phrase de l'historique
	public $gestionnaire_id = null;
	public $utilisateur_id = null;
	public $carplan_id = null;
	public $prestataire_id = null;
	public $isOperationCaisse = 0; //1 si operation de caisse, 1 sinon
	public $price = 0; //le montant si operation de caisse
	public $typeSave; //-1 delete, 0 create, 1 update
	public $record; //nom de la table
	public $recordId; //id de la table


	public static function createHistory(TABLE $element, String $type_save){
		$sentense = $element->sentense;
		$element->actualise();
		$element->sentense = $sentense;

		extract($element::tableName());
		$story = new HISTORIQUE;
		$story->record = $table;
		$story->record_key = $element->getId();
		$story->type_save = $type_save;
		$story->sentense =  $element->sentense;

		if (getSession("gestionnaire_connecte_id") != null) {
			$story->gestionnaire_id = getSession("gestionnaire_connecte_id");
		}
		if ($story->type_save == "insert") {
			$story->sentense = $element->sentenseCreate();
		}else if ($story->type_save == "delete") {
			$story->sentense = $element->sentenseDelete();
		}
		if (isset($element->utilisateur_id)) {
			$story->utilisateur_id = $element->utilisateur_id;
		}
		if (isset($element->carplan_id)) {
			$story->carplan_id = $element->carplan_id;
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
		if ($this->gestionnaire_id != null) {
			return $this->gestionnaire->name." ".$this->gestionnaire->lastname." // Gestionnaire GPA";

		}elseif ($this->utilisateur_id != null) {
			return $this->utilisateur->name." ".$this->utilisateur->lastname." // Direction";

		}elseif ($this->carplan_id != null) {
			return $this->carplan->name." ".$this->carplan->lastname." // Car plan";

		}elseif ($this->prestataire_id != null) {
			return $this->prestataire->name." ".$this->prestataire->lastname." // Prestataire";
		}
	}


	public function sentenseCreate(){}
	public function sentenseUpdate(){}
	public function sentenseDelete(){}

}
?>