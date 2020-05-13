<?php 
namespace Home;
VEHICULE::etat();

if ($this->getId() != null && intval($this->getId()) > 0) {
	$datas = VEHICULE::findBy(["id="=>$this->getId()]);
	if (count($datas) == 1) {
		session("vehicule_id", $this->getId());
		$levehicule = $datas[0];
		$levehicule->actualise();
		$levehicule->etat();

		$levehicule->fourni("piecevehicule");
		$levehicule->fourni("assurance");
		$levehicule->fourni("visitetechnique");
		$levehicule->fourni("entretienvehicule");
		$levehicule->fourni("sinistre");
		$levehicule->fourni("equipement_vehicule");

		$levehicule->fourni("chauffeur_vehicule");
		$levehicule->fourni("cartegrise");
		usort($levehicule->cartegrises, function ($a, $b) {
			return -strcmp($a->date_etablissement, $b->date_etablissement);
		});

		///////////////////////////////////////////////////////
		$carteGrise = $levehicule->carteGrise();
		$assurance = $levehicule->assurance();
		$visitetechnique = $levehicule->visitetechnique();
		$vidange = $assurance; //$levehicule->vidange();

		AFFECTATION::etat();
		$affectation = $levehicule->affectation();

		$title = "AMB | ".$levehicule->name();

	}else{
		header("Location: ../master/parcauto");
	}
}else{
	header("Location: ../master/parcauto");
}

?>