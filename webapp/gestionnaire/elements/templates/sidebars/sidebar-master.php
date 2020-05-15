<ul class="nav metismenu" id="side-menu">
    <li class="active" id="dashboard">
        <a href="<?= $this->url("gestionnaire", "master", "dashboard") ?>"><i class="fa fa-tachometer"></i> <span class="nav-label">Tableau de bord</span></a>
    </li>
    <li>
        <a href="#"><i class="fa fa-th-large"></i> <span class="nav-label">Parc auto</span> <span class="fa arrow"></span></a>
        <ul class="nav nav-second-level collapse">
            <li id="parcauto"><a href="<?= $this->url("gestionnaire", "master", "parcauto", "categorie") ?>">Liste des véhicules</a></li>
            <li data-toggle="modal" data-target="#modal-vehicule" ><a href="#"><i class="fa fa-plus"></i> Ajouter véhicule</a></li>
        </ul>
    </li>
    
    <li class="dropdown-divider"></li>
    <li>
        <a href="#"><i class="fa fa-wrench"></i> <span class="nav-label">Entretiens de véhicules</span> <span class="fa arrow"></span></a>
        <ul class="nav nav-second-level collapse">
            <li id="demandeentretiens"><a href="<?= $this->url("gestionnaire", "master", "demandeentretiens") ?>">Liste des demandes</a></li>
            <li id="entretiensencours"><a href="<?= $this->url("gestionnaire", "master", "entretiensencours") ?>">Entretiens en cours</a></li>
            <li data-toggle="modal" data-target="#modal-entretienvehicule"><a href="#"><i class="fa fa-plus"></i> Nouvel entretien</a></li>
        </ul>
    </li>
    <li>
        <a href="#"><i class="fa fa-unlink"></i> <span class="nav-label">Sinistres</span> <span class="fa arrow"></span></a>
        <ul class="nav nav-second-level collapse">
            <li id="sinistres"><a href="<?= $this->url("gestionnaire", "master", "sinistres") ?>">Sinistres déclarés</a></li>
            <li data-toggle="modal" data-target="#modal-sinistre"><a href="#"><i class="fa fa-plus"></i> Déclarer un sinistre</a></li>
        </ul>
    </li>
    <li class="" id="demandevehicules">
        <a href="<?= $this->url("gestionnaire", "master", "demandevehicules") ?>"><i class="fa fa-cab"></i> <span class="nav-label">Demandes de véhicules</span></a>
    </li>
    <li class="" id="missions">
        <a href="<?= $this->url("gestionnaire", "master", "missions") ?>"><i class="fa fa-plane"></i> <span class="nav-label">Missions</span></a>
    </li>
 <!--    <li class="" id="equipements">
        <a href="<?= $this->url("gestionnaire", "master", "equipements") ?>"><i class="fa fa-tags"></i> <span class="nav-label">Equipements véhicules</span></a>
    </li> -->

    <li class="dropdown-divider"></li>
    <li class="" id="locations">
        <a href="<?= $this->url("gestionnaire", "master", "locations") ?>"><i class="fa fa-handshake-o"></i> <span class="nav-label">Locations de véhicules</span></a>
    </li>
    <li class="" id="affectations">
        <a href="<?= $this->url("gestionnaire", "master", "affectations") ?>"><i class="fa fa-cab"></i> <span class="nav-label">Affectations / Reformes</span></a>
    </li>
</ul>




