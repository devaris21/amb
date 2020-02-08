<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <h1 class="logo-name text-center" style="font-size: 50px; letter-spacing: 5px; margin: 0% auto !important; padding: 0% !important;">AMB</h1>
            <li class="nav-header">
                <div class="dropdown profile-element">                        
                    <div class="row">
                        <div class="col-3">
                            <img alt="image" class="rounded-circle" style="width: 35px" src="<?= $this->stockage("images", "utilisateurs", $utilisateur->image) ?>"/>
                        </div>
                        <div class="col-9">
                            <a data-toggle="tab" href="#">
                                <span class="block m-t-xs font-bold"><?= coupeMot($utilisateur->name(), 2) ?></span>
                                <span class="text-muted text-xs block"><?= $utilisateur->departement->sigle ?></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="logo-element">
                    AMB
                </div>
            </li>
            

            <li class="active">
                <a href="<?= $this->url("carplan", "master", "dashboard") ?>"><i class="fa fa-diamond"></i> <span class="nav-label">Tableau de bord</span></a>
            </li>
            <li class="">
                <a href="<?= $this->url("gestionnaire", "master", "demandevehicules") ?>"><i class="fa fa-diamond"></i> <span class="nav-label">Les missions</span></a>
            </li>
            <li class="dropdown-divider"></li>
            <li class="">
                <a href="<?= $this->url("gestionnaire", "master", "demandevehicules") ?>"><i class="fa fa-diamond"></i> <span class="nav-label">Les Demandes à valider</span></a>
            </li>

        </ul>

    </div>
</nav>