<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <h1 class="logo-name text-center" style="font-size: 50px; letter-spacing: 5px; margin: 0% auto !important; padding: 0% !important;">AMB</h1>
            <li class="nav-header" style="padding: 15px 10px !important">
                <div class="dropdown profile-element">                        
                    <div class="row">
                        <div class="col-3">
                            <img alt="image" class="rounded-circle" style="width: 35px" src="<?= $this->stockage("images", "admins", $admin->image) ?>"/>
                        </div>
                        <div class="col-9">
                            <a data-toggle="tab" href="#">
                                <span class="block m-t-xs font-bold"><?= coupeMot($admin->name(), 2) ?></span>
                                <span class="text-muted text-xs block">Admin Système</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="logo-element">
                    AMB
                </div>
            </li>
            

            <li class="">
                <a href="<?= $this->url("administration", "master", "dashboard") ?>"><i class="fa fa-dashboard"></i> <span class="nav-label">Tableau de bord</span></a>
            </li>

            <br><li class="dropdown-divider"></li><br>

            <li>
                <a href="#"><i class="fa fa-user"></i> <span class="nav-label">Responsables</span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li id="utilisateurs"><a href="<?= $this->url("administration", "users", "utilisateurs") ?>">Liste des responsables</a></li>
                    <!-- <li><a href="dashboard_2.html"><i class="fa fa-plus"></i> Ajouter nouveau</a></li> -->
                </ul>
            </li>
            <li class="">
                <a href="<?= $this->url("administration", "users", "carplans") ?>"><i class="fa fa-frown-o"></i> <span class="nav-label">Bénéficiaires CARPLAN</span></a>
            </li>
            <li class="">
                <a href="<?= $this->url("administration", "users", "prestataires") ?>"><i class="fa fa-frown-o"></i> <span class="nav-label">Prestataires</span></a>
            </li>
            <li>
                <a href="#"><i class="fa fa-pied-piper-alt"></i> <span class="nav-label">Gestionnaire / Admin</span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li id="chauffeurs"><a href="<?= $this->url("administration", "users", "gestionnaires") ?>">Liste des Gestionnaire</a></li>
                    <li id="chauffeurs"><a href="<?= $this->url("administration", "users", "admins") ?>">Liste des admins</a></li>
                </ul>
            </li>

            <br><li class="dropdown-divider"></li><br>
            <li class="">
                <a href="<?= $this->url("administration", "parametres", "configuration") ?>"><i class="fa fa-frown-o"></i> <span class="nav-label">Configuration</span></a>
            </li>

            <br><li class="dropdown-divider"></li><br>
            <li class="">
                <a href="<?= $this->url("administration", "parametres", "suggestions") ?>"><i class="fa fa-frown-o"></i> <span class="nav-label">Retour Suggestions</span></a>
            </li>
            <li class="" id="index">
                <a href="<?= $this->url("administration", "parametres", "historiques") ?>"><i class="fa fa-steam"></i> <span class="nav-label">Traçabilité </span></a>
            </li>

            <br><li class="dropdown-divider"></li><br>

            <li class="">
                <a href="<?= $this->url("administration", "master", "dashboard") ?>"><i class="fa fa-diamond"></i> <span class="nav-label">Abonnement AMB</span></a>
            </li>

        </ul>

    </div>
</nav>