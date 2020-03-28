<?php 
namespace Native;
use Native\SHAMMAN;
use Home\ADMIN;
use Home\GESTIONNAIRE;
use Home\UTILISATEUR;
use Home\CARPLAN;
use Home\PRESTATAIRE;
use Home\PARAMS;
use Home\MYCOMPTE;
/**
 * 
 */
class ROOTER extends PATH
{


    private $url;
    private $language = "fr";
    public $section = "amb";
    public $module = "start";
    public $page = "select";
    public $id ;


    private $token;


    const SECTION_SIMPLE = ["amb"];
    const SECTION_ADMIN = ["gestionnaire", "carplan", "direction", "prestataire", "administration"];
    const SECTION_STOCKAGE = ["images", "documents"];


    public function __construct(){
        if (isset($_GET["query"])) {
            $this->url = $_GET["query"];
        }
        $this->createRoot();
    }


    private function createRoot(){
        if ($this->url != "") {
            $tab = explode("/", strtolower($this->url));
            $this->section = $tab[0];
            if (in_array($this->section, static::SECTION_ADMIN)) {
                $this->module = "access";
                $this->page = "login";
            }
            if (isset($tab[1]) && $tab[1] != "") {
                $this->module = $tab[1];
            }

            if (isset($tab[2]) && $tab[2] != "") {
                $tab = explode("|", strtolower($tab[2]));
                $this->page = $tab[0];
                if (isset($tab[1])) {
                    $this->id = $_GET["id"] = $tab[1];
                }
            }
        }
    }




    public function render(){
        $data = new RESPONSE;
        $data->status = true;
        $this->is_admin = in_array($this->section, static::SECTION_ADMIN) ;
        if ($this->is_admin && $this->module != "access") {
            $data = PARAMS::checkTimeout($this->section);
            if ($data->status == true) {
                $params = PARAMS::findLastId();

                if ($this->section == "administration") {
                    $datas = ADMIN::findBy(["id = "=>getSession("admin_connecte_id")]);
                    if (count($datas) >0) {
                        $admin = $datas[0];
                        $admin->actualise();
                        $mycompte = MYCOMPTE::findLastId();
                    }else{
                        $this->new_root($this->section, "access", "login");
                        $this->render();
                        return false;
                    }
                }

                
                if ($this->section == "gestionnaire") {
                    $datas = GESTIONNAIRE::findBy(["id = "=>getSession("gestionnaire_connecte_id")]);
                    if (count($datas) >0) {
                        $gestionnaire = $datas[0];
                        $gestionnaire->actualise();
                    }else{
                        $this->new_root($this->section, "access", "login");
                        $this->render();
                        return false;
                    }
                }


                if ($this->section == "direction") {
                    $datas = UTILISATEUR::findBy(["id = "=>getSession("utilisateur_connecte_id")]);
                    if (count($datas) >0) {
                        $utilisateur = $datas[0];
                        $utilisateur->actualise();
                        session("departement_id", $utilisateur->departement_id);
                    }else{
                        $this->new_root($this->section, "access", "login");
                        $this->render();
                        return false;
                    }
                }


                if ($this->section == "carplan") {
                    $datas = CARPLAN::findBy(["id = "=>getSession("carplan_connecte_id")]);
                    if (count($datas) >0) {
                        $carplan = $datas[0];
                        $carplan->actualise();
                    }else{
                        $this->new_root($this->section, "access", "login");
                        $this->render();
                        return false;
                    }
                }


                 if ($this->section == "prestataire") {
                    $datas = PRESTATAIRE::findBy(["id = "=>getSession("prestataire_connecte_id")]);
                    if (count($datas) >0) {
                        $prestataire = $datas[0];
                        $prestataire->actualise();
                    }else{
                        $this->new_root($this->section, "access", "login");
                        $this->render();
                        return false;
                    }
                }


            }else{
               $this->new_root($this->section, "access", "login");
               $this->render();
               return false;
           }

       }


       $path = __DIR__."/../../../webapp/$this->section/modules/$this->module/$this->page/index.php";
       $require = __DIR__."/../../../webapp/$this->section/modules/$this->module/$this->page/require.php";

       if (file_exists($path)) {
          $path = __DIR__."/../../../webapp/$this->section/modules/$this->module/$this->page/index.php";
          $require = __DIR__."/../../../webapp/$this->section/modules/$this->module/$this->page/require.php";

          require realpath($require);
          require realpath($path);

          $token = hasher(bin2hex(random_bytes(32)));
          session("token", $token);
          session("verif_token", $token);

      }else{
        if (in_array($this->section, array_merge(static::SECTION_SIMPLE, static::SECTION_ADMIN))) {
            $this->new_root($this->section, "access", "erreur404");
            echo "page inconnue";
        }else{
            header("HTTP/1.0 404 Not Found");
            $this->new_root("amb", "access", "erreur404");
            echo "page inconnue 2";
        }
    //$this->render();
    }
}




    //redefinir la route
private function new_root($section, $module, $page="", $id=""){
    $this->section = $section;
    $this->module = $module;
    $this->page   = $page;
    $this->id     = $id;
}




public function url($section, $module, $page="", $id=""){
    return $this->url = "../../$section/$module/$page|$id";
}

public function setUrl(String $url){
    $this->url = $url;
    return $this;
}

public function getUrl(){
    return $this->url;
}


public function set_module($module)
{
    $this->module = $module;
    return $this;
}

public function getModule(){
    return $this->module;
}

public function getPage(){
    return $this->page;
}

public function getId()
{
    return $this->id;
}



}
?>