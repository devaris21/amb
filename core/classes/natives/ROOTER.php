<?php 
namespace Native;
use Native\SHAMMAN;
use Home\CLIENT;
use Home\EMPLOYE;
use Home\PARAMS;
/**
 * 
 */
class ROOTER
{


    private $url;
    private $language = "fr";
    private $section = "home";
    private $module = "start";
    private $page = "index";
    private $id ;


    private $token;


    const SECTION_SIMPLE = ["home"];
    const SECTION_ADMIN = ["espaceclient", "administration"];
    const SECTION_STOCKAGE = ["images", "documents"];


    public function __construct(){
        if (isset($_GET["query"])) {
            $this->url = $_GET["query"];
        }
        $this->create_root();
    }


    private function create_root(){
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
        $this->is_admin = (in_array($this->section, static::SECTION_ADMIN)) || ($this->section =="home" && $this->module=="espaceclient") ;
        if ($this->is_admin && $this->module != "access") {
            $data = PARAMS::check_timeout($this->section);
            if ($data->status == true) {
                $params = PARAMS::findLastId();
                
                if ($this->section == "administration") {
                    $datas = EMPLOYE::findBy(["id = "=>getSession("employe_connecte_id")]);
                    if (count($datas) >0) {
                        $employe = $datas[0];
                        $employe->actualise();
                    }else{
                        $this->new_root($this->section, "access", "login");
                        $this->render();
                        return false;
                    }


                }elseif ($this->section == "home" && $this->module == "espaceclient") {
                    $datas = CLIENT::findBy(["id = "=>getSession("client_id")]);
                    if (count($datas) > 0) {
                        $client = $datas[0];
                        $client->actualise();                      
                    }else{
                        $this->new_root($this->section, "espaceclient", "login");
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
    }else{
        header("HTTP/1.0 404 Not Found");
        $this->new_root("home", "access", "erreur404");
    }
    $this->render();
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

public function set_url(String $url){
    $this->url = $url;
    return $this;
}

public function get_url(){
    return $this->url;
}

public function assets($file){
    return "../../webapp/$this->section/assets/$file";
}

public function path($filepath){
    return $path = "../../webapp/$this->section/modules/$this->module/$this->page/$filepath";
}


public function path_root($filepath){
    return $path = "../../$filepath";
}


public function stockage($type, $dossier, $file){
    return "../../../stockage/$type/$dossier/$file";
}


public function image($dossier, $file){
    return "../../../stockage/images/$dossier/$file";
}



public function set_module($module)
{
    $this->module = $module;

    return $this;
}


public function get_module(){
    return $this->module;
}

public function get_page(){
    return $this->page;
}

public function get_id()
{
    return $this->id;
}



}





?>