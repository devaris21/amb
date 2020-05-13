<?php 
namespace Home;
require '../../../core/root/includes.php';
use Native\RESPONSE;
extract($_POST);

$data = new RESPONSE;

if ($action == "session") {
	session($name, $value);
}


if ($action == "unsetSession") {
	unset_session($name);
}


if ($action == "getSession") {
	return getSession($name);
}



if ($action === "save-formShamman") {
	$class = TABLE::fullyClassName($classname);
	if (class_exists($class)) {
		$item = new $class();
		$item->hydrater($_POST);
		if (isset($_FILES)) {
			foreach ($_FILES as $key => $value) {
				if ($key !== "id") {
					$item->$key = $value;
				}
			}
		}
		//print_r($item);
		if ($item->getId() != null) {
			$item->sentenseUpdate();
			$data = $item->save();
			$item->uploading();
		}else{
			$data = $item->enregistre();
		}
	}else{
		$data->status = false;
		$data->message = "Erreur lors du processus. Veuillez recommencer !";
	}
	echo json_encode($data);
}



//disponiblité des elements
if ($action === "enable") {
	$class = TABLE::fullyClassName($table);
	if (class_exists($class)) {
		$datas = $class::findBy(["id ="=>$id]);
		if (count($datas) == 1) {
			$element = $datas[0];
			$element->actualise();
			if ($element->enable == 1) {
				$element->enable = 0;
			}else{
				$element->enable = 1;
			}
			$data = $element->save();
		}		
	}else{
		$data->status = false;
		$data->message = "Erreur lors du changement de disponiblité de l'element !";
	}
	echo json_encode($data);
}




//modification des elements
if ($action == "get_data") {
	$data = new RESPONSE;
	$class = TABLE::fullyClassName($table);
	if (class_exists($class)) {
		$datas = $class::findBy(["id ="=>$id]);
		if (count($datas) == 1) {
			$data = $datas[0];
			$data->status = true;
		}
	}else{
		$data->status = false;
		$data->message = "Une erreur s'est produite, veuillez recommencer !";
	}
	echo json_encode($data);
}

if ($action == "validerEtat") {
	$class = TABLE::fullyClassName($table);
	$datas = $class::findBy(["id ="=>$id]);
	if (count($datas) == 1) {
		$item = $datas[0];
		$data = $item->validerEtat();
	}else{
		$data->status = false;
		$data->message = "Une erreur s'est produite, veuillez recommencer !";
	}
	echo json_encode($data);
}


//suppression des elements
if ($action === "suppression") {
	$class = TABLE::fullyClassName($table);
	if (class_exists($class)) {
		$element = new $class();
		$element->setId($id);
		$data = $element->supprime();
	}else{
		$data->status = false;
		$data->message = "Erreur lors de la suppression de l'element !";
	}
	echo json_encode($data);
}


//suppression des elements avec mot de passe
if ($action === "verifierPassword") {
	$datas = GESTIONNAIRE::findBy(["id = "=>getSession("gestionnaire_connecte_id")]);
	if (count($datas) > 0) {
		$gestionnaire = $datas[0];
		$gestionnaire->actualise();
		if ($gestionnaire->checkPassword($password)) {
			$data->status = true;
		}else{
			$data->status = false;
			$data->message = "Votre mot de passe ne correspond pas !";
		}
	}else{
		$data->status = false;
		$data->message = "Vous ne pouvez pas effectué cette opération !";
	}
	echo json_encode($data);
}



//verouiller un user
if ($action === "lock") {
	$datas = ADMIN::findBy(["id = "=>getSession("admin_connecte_id")]);
	if (count($datas) > 0) {
		$admin = $datas[0];
		$admin->actualise();
		if ($admin->checkPassword($password)) {
			$class = TABLE::fullyClassName($table);
			if (class_exists($class)) {
				$element = new $class();
				$element->setId($id);
				$element->actualise();
				$data = $element->lock();
			}else{
				$data->status = false;
				$data->message = "Erreur lors du verouillage de cet element !";
			}
		}else{
			$data->status = false;
			$data->message = "Votre mot de passe ne correspond pas !";
		}
	}else{
		$data->status = false;
		$data->message = "Vous ne pouvez pas effectué cette opération !";
	}
	echo json_encode($data);
}


//Reinitialiser un mot de passe
if ($action === "resetPassword") {
	$datas = ADMIN::findBy(["id = "=>getSession("admin_connecte_id")]);
	if (count($datas) > 0) {
		$admin = $datas[0];
		$admin->actualise();
			$class = TABLE::fullyClassName($table);
			if (class_exists($class)) {
				$element = new $class();
				$element->setId($id);
				$element->actualise();
				$data = $element->resetPassword();
			}else{
				$data->status = false;
				$data->message = "Erreur lors de la reinitialisation du mot de passe !";
			}
	}else{
		$data->status = false;
		$data->message = "Vous ne pouvez pas effectué cette opération !";
	}
	echo json_encode($data);
}


//veroouiller un user
if ($action === "unlock") {
	$datas = ADMIN::findBy(["id = "=>getSession("admin_connecte_id")]);
	if (count($datas) > 0) {
		$admin = $datas[0];
		$admin->actualise();
		if ($admin->checkPassword($password)) {
			$class = TABLE::fullyClassName($table);
			if (class_exists($class)) {
				$element = new $class();
				$element->setId($id);
				$element->actualise();
				$data = $element->unlock();
			}else{
				$data->status = false;
				$data->message = "Erreur lors du deverouillage de cet element !";
			}
		}else{
			$data->status = false;
			$data->message = "Votre mot de passe ne correspond pas !";
		}
	}else{
		$data->status = false;
		$data->message = "Vous ne pouvez pas effectué cette opération !";
	}
	echo json_encode($data);
}



//suppression des elements avec mot de passe
if ($action === "suppression_with_password") {
	$datas = ADMIN::findBy(["id = "=>getSession("admin_connecte_id")]);
	if (count($datas) > 0) {
		$gestionnaire = $datas[0];
		$gestionnaire->actualise();
		if ($gestionnaire->checkPassword($password)) {
			$class = TABLE::fullyClassName($table);
			if (class_exists($class)) {
				$element = new $class();
				$element->setId($id);
				$data = $element->supprime();
			}else{
				$data->status = false;
				$data->message = "Erreur lors de la suppression de l'element !";
			}
		}else{
			$data->status = false;
			$data->message = "Votre mot de passe ne correspond pas !";
		}
	}else{
		$data->status = false;
		$data->message = "Vous ne pouvez pas effectué cette opération !";
	}
	echo json_encode($data);
}


//delete des elements
if ($action === "delete_suppression") {
	$class = TABLE::fullyClassName($table);
	if (class_exists($class)) {
		$element = new $class();
		$element->setId($id);
		$data = $element->delete();
	}else{
		$data->status = false;
		$data->message = "Erreur lors de la suppression de l'element !";
	}
	echo json_encode($data);
}


if ($action === "delete_with_password") {
	$datas = GESTIONNAIRE::findBy(["id = "=>getSession("gestionnaire_connecte_id")]);
	if (count($datas) > 0) {
		$gestionnaire = $datas[0];
		$gestionnaire->actualise();
		if ($gestionnaire->checkPassword($password)) {
			$class = TABLE::fullyClassName($table);
			if (class_exists($class)) {
				$element = new $class();
				$element->setId($id);
				$data = $element->delete();
			}else{
				$data->status = false;
				$data->message = "Erreur lors de la suppression de l'element !";
			}
		}else{
			$data->status = false;
			$data->message = "Votre mot de passe ne correspond pas !";
		}
	}else{
		$data->status = false;
		$data->message = "Vous ne pouvez pas effectué cette opération !";
	}
	echo json_encode($data);
}


if ($action === "session__") {
	session($name, $value);
	echo ($name == "last_access" && is_null(getSession("page_session")));
	if ($name == "last_access" && is_null(getSession("page_session"))) {
		session($name, time());
	}
}



if ($action === "params") {
	$params = PARAMS::findLastId();
	echo json_encode($params);
}