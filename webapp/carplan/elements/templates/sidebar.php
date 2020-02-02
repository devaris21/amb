<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <h1 class="logo-name text-center" style="font-size: 50px; letter-spacing: 5px; margin: 0% auto !important; padding: 0% !important;">AMB</h1>
            <li class="nav-header">
                <div class="dropdown profile-element">                        
                    <div class="row">
                        <div class="col-3">
                            <img alt="image" class="rounded-circle" style="width: 35px" src="<?= $this->stockage("images", "carplans", $affectation->carplan->image) ?>"/>
                        </div>
                        <div class="col-9">
                            <a data-toggle="tab" href="#">
                                <span class="block m-t-xs font-bold"><?= coupeMot($affectation->carplan->name(), 2) ?></span>
                                <span class="text-muted text-xs block">Carplan</span>
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
            
            <li>
                <a href="#"><i class="fa fa-th-large"></i> <span class="nav-label">Entretiens de véhicules</span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="<?= $this->url("carplan", "master", "demandesentretiens") ?>">Liste des demandes</a></li>
                    <li><a href="<?= $this->url("carplan", "master", "entretiensencours") ?>">Entretiens en cours</a></li>
                    <li><a href="dashboard_2.html"><i class="fa fa-plus"></i> Nouvel entretien</a></li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-th-large"></i> <span class="nav-label">Sinistres</span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="<?= $this->url("carplan", "master", "sinistres") ?>">Sinistres déclarés</a></li>
                    <li><a href="dashboard_2.html"><i class="fa fa-plus"></i> Déclarer un sinistre</a></li>
                </ul>
            </li>
    
        </ul>

    </div>
</nav>