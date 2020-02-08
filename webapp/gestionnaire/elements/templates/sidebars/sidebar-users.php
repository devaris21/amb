<ul class="nav metismenu" id="side-menu">

    <li>
        <a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">Personnels roulants</span> <span class="fa arrow"></span></a>
        <ul class="nav nav-second-level collapse">
            <li><a href="<?= $this->url("gestionnaire", "users", "chauffeurs") ?>">Liste du personnel</a></li>
            <li data-toggle="modal" data-target="#modal-chauffeur"><a href="#"><i class="fa fa-plus"></i> Ajouter nouveau</a></li>
        </ul>
    </li>
    <li class="">
        <a href="<?= $this->url("gestionnaire", "master", "affectations") ?>"><i class="fa fa-diamond"></i> <span class="nav-label">Bénéficiaires Carplan</span></a>
    </li>
    <li>
        <a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">Les Directions</span> <span class="fa arrow"></span></a>
        <ul class="nav nav-second-level collapse">
            <li><a href="<?= $this->url("gestionnaire", "users", "utilisateurs") ?>">Liste des responsables</a></li>
            <li><a href="dashboard_2.html"><i class="fa fa-plus"></i> Ajouter nouveau</a></li>
        </ul>
    </li>
    <li>
        <a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">Prestataires</span> <span class="fa arrow"></span></a>
        <ul class="nav nav-second-level collapse">
            <li><a href="<?= $this->url("gestionnaire", "users", "prestataires") ?>">Liste des prestataires</a></li>
            <li><a href="<?= $this->url("gestionnaire", "users", "shop") ?>"><i class="fa fa-search"></i> Rechercher produit</a></li>
            <li><a href="dashboard_2.html"><i class="fa fa-plus"></i> Ajouter prestataire</a></li>
        </ul>
    </li>

    <br><li class="dropdown-divider"></li><br>
    <li class="">
        <a href="<?= $this->url("gestionnaire", "Configuration", "index") ?>"><i class="fa fa-diamond"></i> <span class="nav-label">Configuration de base</span></a>
    </li>  
    
</ul>