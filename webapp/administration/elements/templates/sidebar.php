<nav class="pcoded-navbar d-print-none" navbar-theme="themelight1" id="nav-exterieurs">
    <div class="pcoded-inner-navbar main-menu">

        <ul class="pcoded-item pcoded-left-item">
            <li class="" id="dashboard1">
                <a href="<?= $this->url("administration", "master", "dashboard") ?>" >
                    <span class="pcoded-micon"><i class="fa fa-dashboard"></i></span>
                    <span class="pcoded-mtext">Tableau de bord</span>
                </a>
            </li>

            <li class="pcoded-hasmenu">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="ion-model-s"></i></span>
                    <span class="pcoded-mtext gras">Clientèle</span>
                </a>
                <ul class="pcoded-submenu">
                    <li class="" id="parcauto">
                        <a href="<?= $this->url("administration", "master", "clients") ?>">
                            <span class="pcoded-mtext">Liste des clients </span>
                        </a>
                    </li>
                    <li class="" onclick="modal('#modal-vehicule')" >
                        <a href="#" >
                            <span class="pcoded-mtext text-green">Ajouter un nouveau </span>
                        </a>
                    </li>
                </ul>
            </li>


        </ul>

        <div class="pcoded-navigatio-lavel text-orange">Reception</div>
        <ul class="pcoded-item pcoded-left-item">
            <li class="pcoded-hasmenu">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="feather icon-package"></i></span>
                    <span class="pcoded-mtext">Boîte de reception</span>
                </a>
                <ul class="pcoded-submenu">
                    <li class="" id="demandevehicules">
                        <a href="<?= $this->url("administration", "reception", "inbox") ?>">
                            <span class="pcoded-mtext">Boîte de reception </span>
                        </a>
                    </li>
                    <li class="" id="demandeentretiens">
                        <a href="<?= $this->url("administration", "reception", "compose") ?>">
                            <span class="pcoded-mtext">Nouveau message </span>
                        </a>
                    </li>
                </ul>
            </li>

        </ul>


        <div class="pcoded-navigatio-lavel text-orange">Paramètres</div>
        <ul class="pcoded-item pcoded-left-item">
            <li class="" id="index">
                <a href="<?= $this->url("administration", "parametres", "index") ?>">
                    <span class="pcoded-micon"><i class="fa fa-gears"></i></span>
                    <span class="pcoded-mtext">Options de paramètres</span>
                </a>
            </li>
            <li class="" id="acces">
                <a href="<?= $this->url("administration", "parametres", "acces") ?>">
                    <span class="pcoded-micon"><i class="fa fa-lock"></i></span>
                    <span class="pcoded-mtext">Gestion des accès</span>
                </a>
            </li>
        </ul>


        <div class="pcoded-navigatio-lavel text-orange">Extra</div>
        <ul class="pcoded-item pcoded-left-item">
            <li class="" id="historiques">
                <a href="<?= $this->url("administration", "extra", "historiques") ?>">
                    <span class="pcoded-micon"><i class="fa fa-history"></i></span>
                    <span class="pcoded-mtext">Historiques</span>
                </a>
            </li>
        </ul>

    </div>
</nav>


