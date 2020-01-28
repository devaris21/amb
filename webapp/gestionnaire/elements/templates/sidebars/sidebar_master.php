<ul class="nav metismenu" id="side-menu">
    <li class="active">
        <a href="<?= $this->url("gestionnaire", "master", "dashboard") ?>"><i class="fa fa-diamond"></i> <span class="nav-label">Tableau de bord</span></a>
    </li>
    <li>
        <a href="#"><i class="fa fa-th-large"></i> <span class="nav-label">Parc auto</span> <span class="fa arrow"></span></a>
        <ul class="nav nav-second-level collapse">
            <li><a href="<?= $this->url("gestionnaire", "master", "parcauto") ?>">Liste des véhicules</a></li>
            <li data-toggle="modal" data-target="#myModal5" ><a href="#"><i class="fa fa-plus"></i> Ajouter véhicule</a></li>
        </ul>
    </li>
    
    <li class="dropdown-divider"></li>
    <li>
        <a href="#"><i class="fa fa-th-large"></i> <span class="nav-label">Entretiens de véhicules</span> <span class="fa arrow"></span></a>
        <ul class="nav nav-second-level collapse">
            <li><a href="<?= $this->url("gestionnaire", "master", "demandesentretiens") ?>">Liste des demandes</a></li>
            <li><a href="<?= $this->url("gestionnaire", "master", "entretiensencours") ?>">Entretiens en cours</a></li>
            <li><a href="dashboard_2.html"><i class="fa fa-plus"></i> Nouvel entretien</a></li>
        </ul>
    </li>
    <li>
        <a href="#"><i class="fa fa-th-large"></i> <span class="nav-label">Sinistres</span> <span class="fa arrow"></span></a>
        <ul class="nav nav-second-level collapse">
            <li><a href="<?= $this->url("gestionnaire", "master", "sinistres") ?>">Sinistres déclarés</a></li>
            <li><a href="dashboard_2.html"><i class="fa fa-plus"></i> Déclarer un sinistre</a></li>
        </ul>
    </li>
    <li class="">
        <a href="<?= $this->url("gestionnaire", "master", "demandesvehicules") ?>"><i class="fa fa-diamond"></i> <span class="nav-label">Demandes de véhicules</span></a>
    </li>
    <li class="">
        <a href="<?= $this->url("gestionnaire", "master", "missions") ?>"><i class="fa fa-diamond"></i> <span class="nav-label">Missions</span></a>
    </li>
    <li class="">
        <a href="<?= $this->url("gestionnaire", "master", "Equipements") ?>"><i class="fa fa-diamond"></i> <span class="nav-label">Equipements véhicules</span></a>
    </li>

    <li class="dropdown-divider"></li>
    <li class="">
        <a href="<?= $this->url("gestionnaire", "master", "Locations") ?>"><i class="fa fa-diamond"></i> <span class="nav-label">Locations de véhicules</span></a>
    </li>
    <li class="">
        <a href="<?= $this->url("gestionnaire", "master", "Affectations") ?>"><i class="fa fa-diamond"></i> <span class="nav-label">Affectations / Reformes</span></a>
    </li>
</ul>




