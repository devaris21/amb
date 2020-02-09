<?php 
namespace Home;

if ($this->getId() != null && intval($this->getId()) > 0) {
	$datas = PRESTATAIRE::findBy(["id="=>$this->getId()]);
	if (count($datas) == 1) {
		session("prestataire_id", $this->getId());
		$prestataire = $datas[0];
		$prestataire->actualise();

		$prestataire->fourni("produit");
		$prestataire->fourni("cotation");


		$title = "AMB | ".$prestataire->name();

	}else{
		header("Location: ../users/prestataires");
	}
}else{
	header("Location: ../users/prestataires");
}

?>