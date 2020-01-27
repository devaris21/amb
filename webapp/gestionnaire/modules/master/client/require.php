<?php 
namespace Home;

if ($this->get_id() != null && intval($this->get_id()) > 0) {
	$datas = CLIENT::findBy(["id="=>$this->get_id()]);
	if (count($datas) == 1) {
		session("client_id", $this->get_id());
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