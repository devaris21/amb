<!DOCTYPE html>
<html>

<?php include($this->rootPath("webapp/gestionnaire/elements/templates/head.php")); ?>


<body class="fixed-sidebar">

    <div id="wrapper">

        <?php include($this->rootPath("webapp/gestionnaire/elements/templates/sidebars/sidebar.php")); ?>  

        <div id="page-wrapper" class="gray-bg">

          <?php include($this->rootPath("webapp/gestionnaire/elements/templates/header.php")); ?>  

          <div class="row wrapper border-bottom white-bg page-heading">
            <div class="tabs-container">
                <ul class="nav nav-tabs" role="tablist">
                    <li><a class="nav-link active" data-toggle="tab" href="#menu-1">Infos Générale</a></li>
                    <li><a class="nav-link" data-toggle="tab" href="#menu-2">Personnel Roulant</a></li>
                    <li><a class="nav-link" data-toggle="tab" href="#menu-3">Equiments</a></li>
                    <li><a class="nav-link" data-toggle="tab" href="#menu-4">Géolocalisation</a></li>
                    <li><a class="nav-link" data-toggle="tab" href="#menu-5">Historique du véhicule</a></li>
                </ul>
                <div class="tab-content">
                    <div role="tabpanel" id="menu-1" class="tab-pane active">
                        <div class="panel-body">
                          <div class="row">
                            <div class="col-md-6 col-sm-12 border-right" style="padding-right: 3%;">
                                <div class="row">
                                    <div class="col-4">
                                        <div class="text-center" data-toggle="tooltip" title="Double-cliquez sur l'image pour la changer">
                                            <img class="cursor" data-toggle="modal" data-target="#modal-image" src="<?= $this->stockage("images", "vehicules", $vehicule->image) ?>" class="img-thumbnail cursor" style="height: 110px;">
                                        </div>
                                    </div>
                                    <div class="col-7">
                                        <span class="label label-success float-right mp5">Monthly</span>
                                        <h1 class="gras text-navy" style="margin: 0"><strong><?= $vehicule->immatriculation ?></strong></h1>
                                        <address>
                                            <h3 style="margin-top: 6px;"><strong><?= $vehicule->marque->name ?> <?= $vehicule->modele ?></strong></h3>
                                            Véhicule de <u><?= $vehicule->groupevehicule->name ?></u> <br>
                                        </address>
                                    </div>
                                    <div class="col-1 text-center">
                                        <span  data-toggle=modal data-target="#modal-vehicule" class="cursor" onclick="modification('vehicule', <?= $vehicule->getId() ?>)"><i data-toggle='tooltip' title="Modiifer les infos du véhicule" class="fa fa-pencil fa-2x cursor"></i></span><br><br>
                                        <span data-toggle='tooltip' title="Supprimer le véhicule" onclick="suppressionWithPassword('vehicule', <?= $vehicule->getId() ?>)" class="cursor" ><i class="fa fa-close text-red fa-2x cursor"></i></span><br>                                                                            
                                    </div>
                                </div>
                                <button class="btn btn-warning btn-xs btn-rounded btn-outline pull-right"><i class="fa fa-plus"></i> Nouvel entretien du véhicule</button>
                            </div>
                            <div class="col-md-4 col-sm-4 border-right">
                                <span class="float-right mp5"><i class="fa fa-gears fa-2x"></i></span>
                                <h4 class="text-green gras">Affecté à </h4>
                                <h2 class="mp0 gras text-navy" style="margin-top: 6px;">Koné Mamadou</h2>
                                <h5 class="gras">Président de lorem</h5>
                                <h4>Du date1 au date2</h4>
                                <button class="btn btn-success btn-xs btn-rounded btn-outline pull-right"><i class="fa fa-plus"></i> Affecter le véhicule</button>
                            </div>
                            <div class="col-md-2 optionsbtn">                               
                                <button class="btn btn-success btn-block  btn-xs btn-rounded btn-outline pull-right"><i class="fa fa-handshake-o"></i> Faire louer ce véhicule</button>
                                <button class="btn btn-warning btn-block  btn-xs btn-rounded pull-right"><i class="fa fa-ban"></i> Le Rendre indisponible</button>
                                <button class="btn btn-danger  btn-block btn-xs btn-rounded pull-right"><i class="fa fa-close"></i> Il n'est plus dans le parc</button>
                            </div>
                        </div><hr>

                        <div class="row">
                            <div class="col-md-4 border-right">
                                <table class="table table-sm">
                                    <tbody>
                                        <tr>
                                            <td>Marque</td>
                                            <td><?= $vehicule->marque->name ?></td>
                                        </tr>                                            
                                        <tr>
                                            <td>Modèle</td>
                                            <td><?= $vehicule->modele ?></td>
                                        </tr>
                                        <tr>
                                            <td>Couleur</td>
                                            <td><?= $vehicule->couleur ?></td>
                                        </tr>
                                        <tr>
                                            <td>N°Chasis</td>
                                            <td><?= $vehicule->chasis ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md-4 border-right">
                                <table class="table table-sm">
                                    <tbody>
                                        <tr>
                                            <td>Energie</td>
                                            <td><?= $vehicule->energie->name ?></td>
                                        </tr>
                                        <tr>
                                            <td>Puissance</td>
                                            <td><?= $vehicule->puissance ?> chevaux</td>
                                        </tr>
                                        <tr>
                                            <td>Transmission</td>
                                            <td><?= $vehicule->typetransmission->name ?></td>
                                        </tr>
                                        <tr>
                                            <td>Portieres / Places</td>
                                            <td><?= $vehicule->nb_porte ?> portières / <?= $vehicule->nb_place ?> places</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md-4">
                                <table class="table table-sm">
                                    <tbody>
                                        <tr>
                                            <td>Mise en circulation</td>
                                            <td><?= datecourt($vehicule->date_mise_circulation) ?></td>
                                        </tr>
                                        <tr>
                                            <td>Kilometrage actuel</td>
                                            <td><?= $vehicule->kilometrage ?> Kms</td>
                                        </tr>
                                        <tr>
                                            <td>Sortie de Circulation</td>
                                            <td><?= datecourt($vehicule->date_sortie) ?></td>
                                        </tr>
                                        <tr>
                                            <td>Propriétaire</td>
                                            <td><?= $vehicule->prestataire->name ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div>
                            <table class="table table-sm table-bordered">
                                <tbody>
                                    <tr class="gras">
                                        <td>Fin de l'Assurance</td>
                                        <td>Fin de la visite Technique</td>
                                        <td>Nouvelle vidange</td>
                                        <td>Kilometrage actuel</td>
                                    </tr>
                                    <tr>
                                        <td><label class="m-b-5 f-w-400 label label-<?= ($vehicule->finAssurance() > dateAjoute())?"success":"danger" ?>"><?= datecourt($vehicule->finAssurance()); ?></label></td>
                                        <td><label class="m-b-5 f-w-400 label label-<?= ($vehicule->finVisite() > dateAjoute())?"success":"danger" ?>"><?= datecourt($vehicule->finVisite()); ?></label></td>
                                        <td><label class="m-b-5 f-w-400 label label-<?= ($vehicule->finVidange() > dateAjoute())?"success":"danger" ?>"><?= datecourt($vehicule->finVidange()); ?></label></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div role="tabpanel" id="menu-2" class="tab-pane">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-10">
                                <strong>S'il y en a, veuillez spécifier le personnel roulant de ce véhicule !</strong>
                                <button class="btn btn-success btn-sm btn-rounded btn-outline pull-right"><i class="fa fa-plus"></i> Ajouter nouveau</button>
                                <table class="table table-striped table-hover table-sm">
                                    <thead>
                                        <tr>
                                            <th>Matricule</th>
                                            <th>Nom & prénoms</th>
                                            <th>Type de permis</th>
                                            <th>Contact</th>
                                            <th>Email</th>
                                            <th colspan="2">Options</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Mise en circulation</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>


                <div role="tabpanel" id="menu-3" class="tab-pane">
                    <div class="panel-body">
                     <div class="row">
                        <div class="col-md-6">
                            <button class="btn btn-success btn-sm btn-rounded btn-outline pull-right"><i class="fa fa-plus"></i> Ajouter nouveau</button>
                            <table class="table table-striped table-hover table-sm">
                                <thead>
                                    <tr>
                                        <th>Désignation</th>
                                        <th>Quantité</th>
                                        <th colspan="2">Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Mise en circulation</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>


            <div role="tabpanel" id="menu-4" class="tab-pane">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-8 border-right">
                            <p>
                                With google maps <a href="https://developers.google.com/maps/documentation/javascript/reference#MapOptions">API</a> You can easy customize your map.
                            </p>
                            <div class="google-map" id="map1"></div>
                        </div>
                        <div class="col-md-4">
                            option
                        </div>
                    </div>
                </div>
            </div>


            <div role="tabpanel" id="menu-5" class="tab-pane">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-8 border-right">
                         <div id="vertical-timeline" class="vertical-container dark-timeline center-orientation">
                            <div class="vertical-timeline-block">
                                <div class="vertical-timeline-icon navy-bg">
                                    <i class="fa fa-briefcase"></i>
                                </div>

                                <div class="vertical-timeline-content">
                                    <h2>Meeting</h2>
                                    <p>Conference on the sales results for the previous year. Monica please examine sales trends in marketing and products. Below please find the current status of the sale.
                                    </p>
                                    <a href="#" class="btn btn-sm btn-primary"> More info</a>
                                    <span class="vertical-date">
                                        Today <br/>
                                        <small>Dec 24</small>
                                    </span>
                                </div>
                            </div>

                            <div class="vertical-timeline-block">
                                <div class="vertical-timeline-icon blue-bg">
                                    <i class="fa fa-file-text"></i>
                                </div>

                                <div class="vertical-timeline-content">
                                    <h2>Send documents to Mike</h2>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.</p>
                                    <a href="#" class="btn btn-sm btn-success"> Download document </a>
                                    <span class="vertical-date">
                                        Today <br/>
                                        <small>Dec 24</small>
                                    </span>
                                </div>
                            </div>

                            <div class="vertical-timeline-block">
                                <div class="vertical-timeline-icon lazur-bg">
                                    <i class="fa fa-coffee"></i>
                                </div>

                                <div class="vertical-timeline-content">
                                    <h2>Coffee Break</h2>
                                    <p>Go to shop and find some products. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's. </p>
                                    <a href="#" class="btn btn-sm btn-info">Read more</a>
                                    <span class="vertical-date"> Yesterday <br/><small>Dec 23</small></span>
                                </div>
                            </div>

                            <div class="vertical-timeline-block">
                                <div class="vertical-timeline-icon yellow-bg">
                                    <i class="fa fa-phone"></i>
                                </div>

                                <div class="vertical-timeline-content">
                                    <h2>Phone with Jeronimo</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis qui ut.</p>
                                    <span class="vertical-date">Yesterday <br/><small>Dec 23</small></span>
                                </div>
                            </div>

                            <div class="vertical-timeline-block">
                                <div class="vertical-timeline-icon lazur-bg">
                                    <i class="fa fa-user-md"></i>
                                </div>

                                <div class="vertical-timeline-content">
                                    <h2>Go to the doctor dr Smith</h2>
                                    <p>Find some issue and go to doctor. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. </p>
                                    <span class="vertical-date">Yesterday <br/><small>Dec 23</small></span>
                                </div>
                            </div>

                            <div class="vertical-timeline-block">
                                <div class="vertical-timeline-icon navy-bg">
                                    <i class="fa fa-comments"></i>
                                </div>

                                <div class="vertical-timeline-content">
                                    <h2>Chat with Monica and Sandra</h2>
                                    <p>Web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like). </p>
                                    <span class="vertical-date">Yesterday <br/><small>Dec 23</small></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        option
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>



<br><br>


<div class="row wrapper border-bottom white-bg page-heading">
    <div class="tabs-container">
        <ul class="nav nav-tabs" role="tablist">
            <li><a class="nav-link active" data-toggle="tab" href="#tab-cartegrise"> Cartes grises</a></li>
            <li><a class="nav-link" data-toggle="tab" href="#tab-assurance">Assurances</a></li>
            <li><a class="nav-link" data-toggle="tab" href="#tab-visitetechnique">Visites Techniques</a></li>
            <li><a class="nav-link" data-toggle="tab" href="#tab-piecevehicule">Autres pièces du véhicules</a></li>
            <li><a class="nav-link" data-toggle="tab" href="#pieces-5">Entretiens du véhicule</a></li>
            <li><a class="nav-link" data-toggle="tab" href="#pieces-5">Sinistres</a></li>
        </ul>
        <div class="tab-content">
            <div role="tabpanel" id="tab-cartegrise" class="tab-pane active">
                <div class="panel-body">
                    <div class="ibox">
                        <div class="ibox-title">
                            <h5 class="text-uppercase">Toutes les cartes grises de la <u><?= $vehicule->marque->name ?> <?= $vehicule->modele ?></u> </h5>
                            <div class="ibox-tools">
                                <button style="margin-top: -5%;" data-toggle="modal" data-target="#modal-cartegrise" class="btn btn-primary dim btn-xs"><i class="fa fa-plus"></i> Ajouter Nouvelle Carte Grise</button>
                            </div>
                        </div>
                        <div class="ibox-content">
                            <table class="table table-hover">
                                <tbody>
                                   <?php foreach ($vehicule->cartegrises as $key => $carte) {
                                    $carte->actualise(); ?>
                                    <tr>
                                        <td class="project-status">
                                            <span class="label label-primary">Active</span>
                                        </td>
                                        <td class="project-title">
                                            <h3 class="mp0"><?= $carte->name ?></h3>
                                            <small>Etablie le <?= datecourt($carte->date_etablissement) ?></small>
                                        </td>
                                        <td class="project-completion">
                                            <span><?= $carte->energie->name ?></span><br>
                                            <span>Couleur <?= $carte->couleur ?></span>
                                        </td>
                                        <td>
                                            <h4><?= money($carte->price) ?> <?= $params->devise ?></h4>
                                        </td>
                                        <td class="project-people">
                                         <img alt="carte grise" class="img-thumbnail cursor" onclick="openImage('<?= $this->stockage("images", "cartegrises", $carte->image1) ?>')" style="height: 50px; width: 50px;" src="<?= $this->stockage("images", "cartegrises", $carte->image1) ?>">
                                         <img alt="carte grise" class="img-thumbnail cursor" onclick="openImage('<?= $this->stockage("images", "cartegrises", $carte->image2) ?>')" style="height: 50px; width: 50px;" src="<?= $this->stockage("images", "cartegrises", $carte->image2) ?>">
                                     </td>
                                     <td class="project-actions">
                                        <button data-toggle="modal" data-target="#modal-cartegrise"  onclick="modification('cartegrise', <?= $carte->getId() ?>)" class="btn btn-white btn-sm"><i class="fa fa-pencil"></i> Modiifer </button>
                                        <button class="btn btn-white btn-sm" onclick="suppressionWithPassword('cartegrise', <?= $carte->getId(); ?>)"><i class="fa fa-close text-red"></i></button>
                                    </td>
                                </tr>
                            <?php  } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


    <div role="tabpanel" id="tab-assurance" class="tab-pane">
        <div class="panel-body">
            <div class="ibox">
                <div class="ibox-title">
                    <h5 class="text-uppercase">Toutes les assurances de la <u><?= $vehicule->marque->name ?> <?= $vehicule->modele ?></u> </h5>
                    <div class="ibox-tools">
                        <button style="margin-top: -5%;" data-toggle="modal" data-target="#modal-assurance" class="btn btn-primary dim btn-xs"><i class="fa fa-plus"></i> Ajouter Nouvelle Assurance</button>
                    </div>
                </div>
                <div class="ibox-content">
                    <table class="table table-hover">
                        <tbody>
                           <?php foreach ($vehicule->assurances as $key => $assurance) {
                            $assurance->actualise(); ?>
                            <tr>
                                <td class="project-status">
                                    <span class="label label-primary">Active</span>
                                </td>
                                <td class="project-title">
                                    <h3 class="mp0"><?= $assurance->name ?></h3>
                                    <small>Etablie le <?= datecourt($assurance->date_etablissement) ?></small>
                                </td>
                                <td class="project-completion">
                                    <span class="italic gras">Du <?= datecourt($assurance->started) ?></span><br>
                                    <span class="italic gras">Au <?= datecourt($assurance->finished) ?></span>
                                </td>
                                <td class="project-completion">
                                    <span><?= $assurance->assurance ?></span><br>
                                    <span>Validité de <?= $assurance->duree ?> <?= $assurance->typeduree->name ?></span>
                                </td>
                                <td>
                                    <h4><?= money($assurance->price) ?> <?= $params->devise ?></h4>
                                </td>
                                <td class="project-people">
                                 <img alt="assurance" class="img-thumbnail cursor" onclick="openImage('<?= $this->stockage("images", "assurances", $assurance->image1) ?>')" style="height: 50px; width: 50px;" src="<?= $this->stockage("images", "assurances", $assurance->image1) ?>">
                                 <img alt="assurance" class="img-thumbnail cursor" onclick="openImage('<?= $this->stockage("images", "assurances", $assurance->image2) ?>')" style="height: 50px; width: 50px;" src="<?= $this->stockage("images", "assurances", $assurance->image2) ?>">
                             </td>
                             <td class="project-actions">
                                <button data-toggle="modal" data-target="#modal-assurance"  onclick="modification('assurance', <?= $assurance->getId() ?>)" class="btn btn-white btn-sm"><i class="fa fa-pencil"></i> Modiifer </button>
                                <button class="btn btn-white btn-sm" onclick="suppressionWithPassword('assurance', <?= $assurance->getId(); ?>)"><i class="fa fa-close text-red"></i></button>
                            </td>
                        </tr>
                    <?php  } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>


<div role="tabpanel" id="tab-visitetechnique" class="tab-pane">
    <div class="panel-body">
        <div class="ibox">
            <div class="ibox-title">
                <h5 class="text-uppercase">Toutes les visites techniques de la <u><?= $vehicule->marque->name ?> <?= $vehicule->modele ?></u> </h5>
                <div class="ibox-tools">
                    <button style="margin-top: -5%;" data-toggle="modal" data-target="#modal-visitetechnique" class="btn btn-primary dim btn-xs"><i class="fa fa-plus"></i> Enregistrer nouvelle visite</button>
                </div>
            </div>
            <div class="ibox-content">
                <table class="table table-hover">
                    <tbody>
                       <?php foreach ($vehicule->visitetechniques as $key => $vist) {
                        $vist->actualise(); ?>
                        <tr>
                            <td class="project-status">
                                <span class="label label-primary">Active</span>
                            </td>
                            <td class="project-title">
                                <h3 class="mp0"><?= $vist->name ?></h3>
                                <small>Etablie le <?= datecourt($vist->date_etablissement) ?></small>
                            </td>
                            <td class="project-completion">
                                <span class="italic gras">Du <?= datecourt($vist->started) ?></span><br>
                                <span class="italic gras">Au <?= datecourt($vist->finished) ?></span>
                            </td>
                            <td class="project-completion">
                                <span>Validité de <?= $vist->duree ?> <?= $vist->typeduree->name ?></span>
                            </td>
                            <td>
                                <h4><?= money($vist->price) ?> <?= $params->devise ?></h4>
                            </td>
                            <td class="project-people">
                             <img alt="visite technique" class="img-thumbnail cursor" onclick="openImage('<?= $this->stockage("images", "visitetechniques", $vist->image1) ?>')" style="height: 50px; width: 50px;" src="<?= $this->stockage("images", "visitetechniques", $vist->image1) ?>">
                             <img alt="visite technique" class="img-thumbnail cursor" onclick="openImage('<?= $this->stockage("images", "visitetechniques", $vist->image2) ?>')" style="height: 50px; width: 50px;" src="<?= $this->stockage("images", "visitetechniques", $vist->image2) ?>">
                         </td>
                         <td class="project-actions">
                            <button data-toggle="modal" data-target="#modal-visitetechnique"  onclick="modification('visitetechnique', <?= $vist->getId() ?>)" class="btn btn-white btn-sm"><i class="fa fa-pencil"></i> Modiifer </button>
                            <button class="btn btn-white btn-sm" onclick="suppressionWithPassword('visitetechnique', <?= $vist->getId(); ?>)"><i class="fa fa-close text-red"></i></button>
                        </td>
                    </tr>
                <?php  } ?>
            </tbody>
        </table>
    </div>
</div>
</div>
</div>



<div role="tabpanel" id="tab-piecevehicule" class="tab-pane">
    <div class="panel-body">
        <div class="ibox">
            <div class="ibox-title">
                <h5 class="text-uppercase">Autres pièces administratives de la <u><?= $vehicule->marque->name ?> <?= $vehicule->modele ?></u> </h5>
                <div class="ibox-tools">
                    <button style="margin-top: -5%;" data-toggle="modal" data-target="#modal-piecevehicule" class="btn btn-primary dim btn-xs"><i class="fa fa-plus"></i> Enregistrer nouvelle visite</button>
                </div>
            </div>
            <div class="ibox-content">
                <table class="table table-hover">
                    <tbody>
                       <?php foreach ($vehicule->piecevehicules as $key => $piece) {
                        $piece->actualise(); ?>
                        <tr>
                            <td class="project-status">
                                <span class="label label-primary">Active</span>
                            </td>
                            <td class="project-title">
                                <h3 class="mp0"><?= $piece->typepiecevehicule->name ?></h3>
                                <h5 class="mp0"><?= $piece->name ?></h5>
                                <small>Etablie le <?= datecourt($piece->date_etablissement) ?></small>
                            </td>
                            <td class="project-completion">
                                <span class="italic gras">Du <?= datecourt($piece->started) ?></span><br>
                                <span class="italic gras">Au <?= datecourt($piece->finished) ?></span>
                            </td>
                            <td class="project-completion">
                                <span>Validité de <?= $piece->duree ?> <?= $piece->typeduree->name ?></span>
                            </td>
                            <td>
                                <h4><?= money($piece->price) ?> <?= $params->devise ?></h4>
                            </td>
                            <td class="project-people">
                             <img alt="visite technique" class="img-thumbnail cursor" onclick="openImage('<?= $this->stockage("images", "piecevehicules", $piece->image1) ?>')" style="height: 50px; width: 50px;" src="<?= $this->stockage("images", "piecevehicules", $piece->image1) ?>">
                             <img alt="visite technique" class="img-thumbnail cursor" onclick="openImage('<?= $this->stockage("images", "piecevehicules", $piece->image2) ?>')" style="height: 50px; width: 50px;" src="<?= $this->stockage("images", "piecevehicules", $piece->image2) ?>">
                         </td>
                         <td class="project-actions">
                            <button data-toggle="modal" data-target="#modal-piecevehicule"  onclick="modification('piecevehicule', <?= $piece->getId() ?>)" class="btn btn-white btn-sm"><i class="fa fa-pencil"></i> Modiifer </button>
                            <button class="btn btn-white btn-sm" onclick="suppressionWithPassword('piecevehicule', <?= $piece->getId(); ?>)"><i class="fa fa-close text-red"></i></button>
                        </td>
                    </tr>
                <?php  } ?>
            </tbody>
        </table>
    </div>
</div>
</div>
</div>



<div role="tabpanel" id="tab-2" class="tab-pane">
    <div class="panel-body">
        <strong>Donec quam felis</strong>

        <p>Thousand unknown plants are noticed by me: when I hear the buzz of the little world among the stalks, and grow familiar with the countless indescribable forms of the insects
        and flies, then I feel the presence of the Almighty, who formed us in his own image, and the breath </p>

        <p>I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the exquisite
        sense of mere tranquil existence, that I neglect my talents. I should be incapable of drawing a single stroke at the present moment; and yet.</p>
    </div>
</div>
</div>
</div>
</div>

<br><br>


<?php include($this->rootPath("webapp/gestionnaire/elements/templates/footer.php")); ?>



<div class="modal fade inmodal" id="modal-image">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title">Changer l'image</h4>
            </div>
            <form method="POST" id="formImage">
                <div class="modal-body">
                    <div class="">
                        <label>Image de la voiture</label>
                        <div class="">
                            <img style="width: 80px;" src="" class="img-thumbnail cursor logo">
                            <input class="hide" type="file" name="image">
                            <button type="button" class="btn btn-sm bg-red pull-right btn_image"><i class="fa fa-image"></i> Ajouter une image</button>
                        </div>
                    </div>
                </div><hr class="">
                <div class="container">
                    <button type="button" class="btn btn-sm  btn-default" data-dismiss="modal"><i class="fa fa-close"></i> Annuler</button>
                    <button class="btn btn-sm btn-success pull-right"><i class="fa fa-check"></i>Changer l'image</button>
                </div>
                <br>
            </form>
        </div>
    </div>
</div>

<?php include($this->rootPath("composants/assets/modals/modal-cartegrise.php")); ?> 
<?php include($this->rootPath("composants/assets/modals/modal-assurance.php")); ?> 
<?php include($this->rootPath("composants/assets/modals/modal-visitetechnique.php")); ?> 
<?php include($this->rootPath("composants/assets/modals/modal-piecevehicule.php")); ?> 

</div>
</div>


<?php include($this->rootPath("webapp/gestionnaire/elements/templates/script.php")); ?>


<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDQTpXj82d8UpCi97wzo_nKXL7nYrd4G70"></script>


</body>

</html>
