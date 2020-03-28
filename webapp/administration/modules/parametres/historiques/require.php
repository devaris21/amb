<?php 
namespace Home;
$title = "AMB | Historiques & Traçabilité ";

$interval = 50;
$totals = count(HISTORY::execute("SELECT id FROM history", []));
$page = 1;
$pagestotale = ceil($totals / $interval);
if ($this->getId() != null && intval($this->getId()) > 0 && intval($this->getId()) <= $pagestotale) {
	$page = intval($this->getId());
}
$depart = ($page-1)*$interval;

$historiques = HISTORY::execute("SELECT * FROM history LIMIT $depart, $interval", []);
?>