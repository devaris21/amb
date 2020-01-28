<?php 
namespace Home;

if ($this->getId() != null && intval($this->getId()) > 0) {
	$datas = CLIENT::findBy(["id="=>$this->getId()]);
	if (count($datas) == 1) {
		session("client_id", $this->getId());
		$client = $datas[0];
		$client->actualise();

		// $client->fourni("piececlient");
		// $client->fourni("assurance");
		// $client->affectation();

		$title = "Senergys-ci | ".$client->representant;

	}else{
		header("Location: ../master/clients");
	}
}else{
	header("Location: ../master/clients");
}

?>