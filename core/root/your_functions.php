<?php 

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////LES FONCTIONS DE SESSIONS ET COOKIES /////////////////////

//on autorise la session
session_start();


//mettre en session
function session($name, $valeur){
	$_SESSION[$name] = $valeur;
}


//retourner la session
function getSession($name){
	if (isset($_SESSION[$name])) {
		return $_SESSION[$name];
	}else{
		return null;
	}
}


//supprimer la session
function unset_session($name){
	if (isset($_SESSION[$name])) {
		unset($_SESSION[$name]) ;
	}
}

//mettre en cookie
function cookie($name, $valeur, $jour){
	setcookie($name, $valeur, time()+(60*60*24*$jour));
}


//mettre en cookie
function cookieSys($name, $valeur){
	$time = time()+(60*0.5);
	setcookie($name, $valeur, $time);
}



//retourner le cookie
function getCookie($name){
	if (isset($_COOKIE[$name])) {
		return $_COOKIE[$name];
	}else{
		return null;
	}
}


function reponse( $question){
	if ($question == 1) {
		return "Oui";
	}else if ($question == 0){
		return "Non";
	}
}



function comptage(Array $tableau, $propriete, $type="somme"){
	$total = 0;
	if ($type == "somme") {
		foreach ($tableau as $key => $obj) {
			$total += intval($obj->$propriete);
		}
	}else if($type == "avg"){
		foreach ($tableau as $key => $obj) {
			$total += intval($obj->$propriete);
		}
		if (count($tableau) > 0) {
			$total = round($total / count($tableau), 2);
		}		
	}

	return $total;
}

function comptage1(Array $tableau, $propriete, $type="somme"){
	$total = 0;
	if ($type == "somme") {
		foreach ($tableau as $key => $obj) {
			$total += intval($obj);
		}
	}else if($type == "avg"){
		foreach ($tableau as $key => $obj) {
			$total += intval($obj);
		}
		$total = $total / count($tableau);
	}

	return $total;
}

function comptage2(Array $tableau, $propriete){
	$tab = [];
	foreach ($tableau as $key => $obj) {
		$i = $obj->$propriete;
		if (!isset($tab[$i])) {
			$tab[$i] = 0;
		}
		$tab[$i]++;
	}
	return $tab;
}

function pourcentage($value, $total){
	if ($total != 0) {
		return round(($value / $total) * 100);
	}else{
		return 0;
	}
}

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////LES AUTRES FONCTIONS /////////////////////


#fonction de verification d'assainissements des formulaires
function verification($mot){
	$mot = htmlspecialchars($mot);
	$mot = stripcslashes($mot);
	$mot = strip_tags($mot);
	$mot = trim($mot);
	$mot = htmlentities($mot);
	return $mot;
}

function coupeMot($mot, $nb){
	$text = "";
	$tab = explode(" ", $mot);
	for ($i=0; $i <$nb ; $i++) { 
		$text .= $tab[$i]." ";
	}
	return $text ;
}


function initial($mot){
	$text = "";
	$tab = explode(" ", $mot);
	for ($i=0; $i < 3; $i++) { 
		if (isset($tab[$i])) {
			$text .=strtoupper(substr($tab[$i], 0,1));
		}
	}
	return $text;
}


function tronquer($texte, $nb){
	if (strlen($texte) <= $nb) {
		return $texte;
	}else{
		return substr($texte, 0, $nb)."...";
	}
}


function hasher($mot){
	return sha1(sha1($mot));
}


function affichage($path){
	if(file_exists($path)){
		include realpath($path);
	}else{
		echo $path;
	}
}


function compactPlus(String $ligne, int $nb, String $delimiter){
	$i = 1;
	while ($i <= $nb) {
		if ($i == $nb) { 
			$enregistrement .= $ligne ;
		}else{
			$enregistrement .= $ligne." $delimiter ";
		}
		$i++;
	}
}



// fonction qui compare les valeurs post_name l'une à l'autre
function comparer($a, $b) {
	return -strcmp($a->date, $b->date);
}
function comparerDateValidation($a, $b) {
	return -strcmp($a->date_validation, $b->date_validation);
}
function comparerDateEtabissement($a, $b) {
	return -strcmp($a->date_etablissement, $b->date_etablissement);
}
function comparerDateCreated($a, $b) {
	return strcmp($a->created, $b->created);
}

//filtrer un tableau d'objets
function filtrer_resultat(Array $tableau, $champ, $valeur, $inclus = true){
	if (is_array($tableau) && count($tableau) > 0) {
		foreach ($tableau as $key => $item) {
			if ($inclus) {
				if($item->$champ != $valeur){
					unset($tableau[$key]);
				}
			}else{
				if($item->$champ == $valeur){
					unset($tableau[$key]);
				}
			}
		}
		return $tableau;
	}else{
		return [];
	}
}


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////LES FONCTIONS DE DATE /////////////////////



#fonction pour afficher la date dans son long format
function datecourt($timestamp)
{
	if ($timestamp == '' OR $timestamp==null) {
		$dateformat = '...';
	}else{
		$dateformat =strftime(' %d ', strtotime($timestamp));
		$dateformat .= ucfirst(strftime('%B %Y', strtotime($timestamp)));
	}
	return $dateformat;
}

function datecourt2($timestamp)
{
	if ($timestamp == '' OR $timestamp==null) {
		$dateformat = '...';
	}else{
		$dateformat = date("d/m", strtotime($timestamp));
	}
	return $dateformat;
}


function datecourt3($timestamp)
{
	if ($timestamp == '' OR $timestamp==null) {
		$dateformat = '...';
	}else{
		$tableau_jour = ["", "Lundi", "Mardi", "Mercredi", "jeudi", "Vendredi", "Samedi", "Dimanche"];
		$dateformat = $tableau_jour[date("N", strtotime($timestamp))]." ".datecourt($timestamp);
	}
	return $dateformat;
}




#fonction pour afficher la date dans son court format
function datelong($timestamp)
{
	if ($timestamp == '' OR $timestamp==null) {
		$date1 = '...';
	}else{
		$date1 = datecourt($timestamp).' à '.date("H:i", strtotime($timestamp));
	}
	return $date1;
}


#fonction pour afficher la date dans son court format
function datelong3($timestamp)
{
	if ($timestamp == '' OR $timestamp==null) {
		$date1 = '...';
	}else{
		$tableau_jour = ["", "Lundi", "Mardi", "Mercredi", "jeudi", "Vendredi", "Samedi", "Dimanche"];
		$date1 = $tableau_jour[date("N", strtotime($timestamp))]." ".datecourt($timestamp).' à '.date("H:i", strtotime($timestamp));
	}
	return $date1;
}


#fonction pour afficher l'heure actuelle
function heure()
{
	return $date1 = date("H:i:s");
}

#fonction pour afficher l'heure seulement
function heurecourt($timestamp)
{
	return $date1 = date("H:i", strtotime($timestamp));
}


#fonction pour afficher l'heure seulement
function heurelong($timestamp)
{
	return $date1 = date("H:i:s", strtotime($timestamp));
}

#fonction pour calaculer l'age
function age($timestamp)
{
	return $a = date("Y-m-d")-date($timestamp);
}



function dateAjoute($nb = 0){
	$ladate = date('Y-m-d', strtotime(date("Y-m-d")) + (24 * 3600 * $nb));
	return $ladate;
}



function dateAjoute1($ladate = null, $nb = 0){
	if ($ladate == null) {
		$ladate = date("Y-m-d");
	}
	$ladate = date('Y-m-d', strtotime($ladate) + (24 * 3600 * $nb));
	return $ladate;
}



function dateDiffe($dateA, $dateB){
    // On transforme les 2 dates en timestamp
	$dateA = strtotime($dateA);
	$dateB = strtotime($dateB);
// On récupère la différence de timestamp entre les 2 précédents
	$nbJoursTimestamp = $dateB - $dateA;
// ** Pour convertir le timestamp (exprimé en secondes) en jours **
// On sait que 1 heure = 60 secondes * 60 minutes et que 1 jour = 24 heures donc :
$nbJours = $nbJoursTimestamp/86400; // 86 400 = 60*60*24
return $nbJours;
}



#fonction pour afficher la date en language courant
function depuis($timestamp){
//on recupere la difference
	$difference = strtotime($timestamp) - time();

	//les formats
	$apres = ($difference >= 0)?true:false;
	$jours = abs(intval($difference/(86400))); // 86 400 = 60*60*24
	$heures = abs(intval(($difference % (86400)) / 3600)); // 86 400 = 60*60*24
	$mins = abs(intval((($difference % 86400) % 3600) / 60)); // 86 400 = 60*60*24
	// On transforme 
	if ($apres) {
		if ($jours == 0 && $heures == 0 && $mins < 2) {
			$exp =  "Tout à l'heure";
		}else if ($jours == 0 && $heures == 0 && $mins > 2) {
			$exp = "Dans ".date("i",$difference)." min";
		}else if ($jours == 0 && $heures < 3) {
			$exp = "Dans ".date("H:i",$difference);
		}else if (date("Y-m-d", strtotime($timestamp)) == dateAjoute(0)) {
			$exp = "Aujourd'hui à ".heurecourt($timestamp);
		}else if (date("Y-m-d", strtotime($timestamp)) == dateAjoute(1)) {
			$exp = "Demain à ".heurecourt($timestamp);
		}else if (date("Y-m-d", strtotime($timestamp)) == dateAjoute(2)) {
			$exp = "Après demain à ".heurecourt($timestamp);
		}else {
			$exp = "le ".datelong($timestamp);
		}
	}else{
		if ($jours == 0 && $heures == 0 && $mins < 2) {
			$exp =  "Tout de suite";
		}else if ($jours == 0 && $heures == 0 && $mins > 2) {
			$exp = "Il y a ".date("i", abs($difference))." min";
		}else if ($jours == 0 && $heures < 3) {
			$exp = "Il y a ".date("H", abs($difference))." h ".date("i", abs($difference))." min";
		}else if (date("Y-m-d", strtotime($timestamp)) == dateAjoute(0)) {
			$exp = "Aujourd'hui à ".heurecourt($timestamp);
		}else if (date("Y-m-d", strtotime($timestamp)) == dateAjoute(-1)) {
			$exp = "Hier à ".heurecourt($timestamp);
		}else if (date("Y-m-d", strtotime($timestamp)) == dateAjoute(-2)) {
			$exp = "Avant hier à ".heurecourt($timestamp);
		}else {
			$exp = "le ".datelong($timestamp);
		}
	}
	return $exp;
}


function formaterDate($text){
	verification($text);
	$tab = explode("/", $text);
	return $text = $tab[2]."-".$tab[1]."-".$tab[0];
}


function formaterDateInverse($text){
	verification($text);
	$tab = explode("-", $text);
	return $text = $tab[2]."/".$tab[1]."/".$tab[0];
}

///////////////////////////////////////////////////////////////////////////////////////////////////
//// LES FONCTIONS DE MONEY //////////

//convertir chiffre en lettre
function enLettre($a){ 
	$joakim = explode('.',$a); 
	if (isset($joakim[1]) && $joakim[1]!=''){ 
		return enLettre($joakim[0]).' virgule '.enLettre($joakim[1]) ; 
	} 
	if ($a<0) return 'moins '.enLettre(-$a); 
	if ($a<17){ 
		switch ($a){ 
			case 0: return 'zero'; 
			case 1: return 'un'; 
			case 2: return 'deux'; 
			case 3: return 'trois'; 
			case 4: return 'quatre'; 
			case 5: return 'cinq'; 
			case 6: return 'six'; 
			case 7: return 'sept'; 
			case 8: return 'huit'; 
			case 9: return 'neuf'; 
			case 10: return 'dix'; 
			case 11: return 'onze'; 
			case 12: return 'douze'; 
			case 13: return 'treize'; 
			case 14: return 'quatorze'; 
			case 15: return 'quinze'; 
			case 16: return 'seize'; 
		} 
	} else if ($a<20){ 
		return 'dix-'.enLettre($a-10); 
	} else if ($a<100){
		if ($a%10==0){
			switch ($a){
				case 20: return 'vingt';
				case 30: return 'trente';
				case 40: return 'quarante';
				case 50: return 'cinquante';
				case 60: return 'soixante';
				case 70: return 'soixante-dix';
				case 80: return 'quatre-vingt';
				case 90: return 'quatre-vingt-dix';
			}
		} else if ($a<70){
			return enLettre($a-$a%10).'-'.enLettre($a%10);
		} else if ($a<80){
			return enLettre(60).'-'.enLettre($a%20);
		} else{
			return enLettre(80).'-'.enLettre($a%20);
		}
	} else if ($a==100){
		return 'cent';
	} else if ($a<200){
		return enLettre(100).($a%100!=0?' '.enLettre($a%100):'');
	} else if ($a<1000){
		return enLettre((int)($a/100)).' '.enLettre(100).' '.($a%100!=0?enLettre($a%100):'');
	} else if ($a==1000){
		return 'mille';
	} else if ($a<2000){
		return enLettre(1000).($a%1000!=0?' '.enLettre($a%1000):'');
	} else if ($a<1000000){
		return (enLettre((int)($a/1000)).' '.enLettre(1000).' '.($a%1000!=0?enLettre($a%1000):''));
	}  else if ($a<2000000){
		return (enLettre((int)($a/1000000)).' million '.($a%1000000!=0?' '.enLettre($a%1000000):''));
	}  
	else if ($a<1000000000){
		return (enLettre((int)($a/1000000)).' millions '.($a%1000000!=0?' '.enLettre($a%1000000):''));
	}  else if ($a<2000000000){
		return (enLettre((int)($a/1000000000)).' milliard '.($a%1000000000!=0?' '.enLettre($a%1000000000):''));
	}  
}  


#fonction pour afficher le format de monnaie
function money($a = 0)
{
	$nombre =number_format($a,0,","," ");
	return $nombre;
}



#
function start0($a)
{
	if (intval($a) < 10) {
		return "0".intval($a);
	}else{
		return $a;
	}
}
