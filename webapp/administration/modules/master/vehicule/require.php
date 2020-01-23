<?php 
namespace Home;

if ($this->get_id() != null && intval($this->get_id()) > 0) {
	$datas = VEHICULE::findBy(["id="=>$this->get_id()]);
	if (count($datas) == 1) {
		session("vehicule_id", $this->get_id());
		$vehicule = $datas[0];
		$vehicule->actualise();
		$vehicule->etat();

		$vehicule->fourni("piecevehicule");
		$vehicule->fourni("assurance");
		$vehicule->fourni("visitetechnique");
		$vehicule->fourni("entretienvehicule");
		$vehicule->fourni("sinistre");
		$vehicule->fourni("equipement_vehicule");
		$vehicule->fourni("accessoire_vehicule");

		$vehicule->fourni("chauffeur_vehicule");
		$vehicule->fourni("cartegrise");

		$vehicule->affectation();

		$datas = AFFECTATION::findBy(["vehicule_id="=>$this->get_id(), "etat_id="=>0]);
		if (count($datas) > 0) {
			$affectation = $datas[0];
			$affectation->actualise();
		}
		// $vehicule->fourni("commande");
		// $commandes = $vehicule->items;
		// foreach ($commandes as $key => $commande) {
		// 	if (!$commande->is_encours()) {
		// 		unset($commandes[$key]);
		// 	}
		// }

		$title = "GTA | ".$vehicule->name();

	}else{
		header("Location: ../master/parcauto");
	}
}else{
	header("Location: ../master/parcauto");
}

?>