<?php 
namespace Home;

$datas = CLIENT::findBy(["id="=>getSession("client_id")]);
if (count($datas) == 1) {
	session("client_id", $this->getId());
	$client = $datas[0];
	$client->actualise();

	$title = "Senergys-ci | ".$client->entreprise;

}else{
	header("Location: ../espaceclient/login");
}

?>