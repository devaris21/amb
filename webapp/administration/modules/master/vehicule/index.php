
<?php require("../../webapp/administration/assets/includes/head.php") ?>

<body>

    <?php require("../../webapp/administration/assets/includes/preloader.php") ?>

    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            <?php require("../../webapp/administration/assets/includes/header.php") ?>

            <!-- Sidebar inner chat end-->
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">

                    <?php require("../../webapp/administration/assets/includes/sidebar.php") ?>

                    <div class="pcoded-content">
                        <div class="pcoded-inner-content"><br>

                         <div class="row">
                            <div class="col-md-12">
                                <div class="card social-network">
                                    <ul class="nav nav-tabs " role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="tab" href="#infos" role="tab"><i class="fa fa-car"></i> Infos générales</a>
                                            <div class="slide"></div>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#equipement" role="tab"><i class="fa fa-cubes"></i> Accessoires / Equipements</a>
                                            <div class="slide"></div>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#leschauffeurs" role="tab"><i class="fa fa-user"></i> Chauffeurs</a>
                                            <div class="slide"></div>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#options" role="tab"><i class="fa fa-gears"></i> Options</a>
                                            <div class="slide"></div>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#tracking" role="tab"><i class="fa fa-map-marker"></i> Tracking</a>
                                            <div class="slide"></div>
                                        </li>
                                    </ul>
                                    <!-- Tab panes -->
                                    <div class="tab-content card-block" style="min-height: 350px">
                                        <div class="tab-pane active row" id="infos" role="tabpanel" style="margin-top: -4%">
                                            <div class="card-header">
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <img class="cursor" ondblclick="modal('#modal-image')" data-toggle="tooltip" title="Double-cliquez sur l'image pour la changer" src="<?= $this->image("vehicules", $vehicule->image) ?>" class="img-thumbnail" style="height: 100px;">
                                                    </div>
                                                    <div class="col-md-4 border-right">
                                                        <h5 class="text-muted italic"><?= $vehicule->etiquette ?></h5>
                                                        <h2 class="subtitle" style="margin: 2px"><?= $vehicule->immatriculation ?></h2>
                                                        <h5 style="font-size: 20px"><?= $vehicule->marque->name ?> <?= $vehicule->modele ?> - <label style="font-size: 12px;" class="text-<?= $vehicule->etatvehicule->class ?>"><?= $vehicule->etatvehicule->name ?></label></h5>
                                                        <h5 class="text-muted italic"><?= $vehicule->groupevehicule->name ?></h5>
                                                    </div>
                                                    <div class="col-md-4 border-right">
                                                        <h5 class="text-green">Affecté à </h5>
                                                        <?php if ($vehicule->is_affecte()) { ?>
                                                           <i data-toggle="modal" data-target="#modal-option-affectation" class="pull-right fa-2x cursor fa fa-gears"></i>
                                                       <?php } ?>
                                                       <h2 class="mp0 subtitle"><?= $vehicule->affectation() ?></h2>
                                                       <?php if ($vehicule->is_affecte()) { ?>
                                                           <span><?= $vehicule->carplane->contact ?> // <?= $vehicule->carplane->email ?></span>
                                                       <?php } ?>
                                                       <h5 class="text-muted"><?= $vehicule->fonction ?></h5>
                                                   </div>
                                                   <div class="col-sm-2">
                                                    <h2 class="mp0 subtitle"><span data-toggle=modal data-target="#modal-vehicule" class="pull-right cursor" onclick="modification('vehicule', <?= $vehicule->get_id() ?>)"><i class="fa fa-pencil"></i> Modifier</span> </h2>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-block">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <p class="text-muted m-b-5">Immatriculation :</p>
                                                        </div>
                                                        <div class="col-6">
                                                            <p class="m-b-5 f-w-400"><?= $vehicule->immatriculation ?></p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <p class="text-muted m-b-5">Couleur :</p>
                                                        </div>
                                                        <div class="col-6">
                                                            <p class="m-b-5 f-w-400"><?= $vehicule->couleur ?></p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <p class="text-muted m-b-5">Marque :</p>
                                                        </div>
                                                        <div class="col-6">
                                                            <p class="m-b-5 f-w-400"><?= $vehicule->marque->name ?></p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <p class="text-muted m-b-5">Modèle :</p>
                                                        </div>
                                                        <div class="col-6">
                                                            <p class="m-b-5 f-w-400"><?= $vehicule->modele ?></p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <p class="text-muted m-b-5">N° Chasis :</p>
                                                        </div>
                                                        <div class="col-6">
                                                            <p class="m-b-5 f-w-400"><?= $vehicule->chasis ?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <p class="text-muted m-b-5">Energie :</p>
                                                        </div>
                                                        <div class="col-6">
                                                            <p class="m-b-5 f-w-400"><?= $vehicule->energie->name ?></p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <p class="text-muted m-b-5">Transmission :</p>
                                                        </div>
                                                        <div class="col-6">
                                                            <p class="m-b-5 f-w-400"><?= $vehicule->typetransmission->name ?></p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <p class="text-muted m-b-5">Puissance :</p>
                                                        </div>
                                                        <div class="col-6">
                                                            <p class="m-b-5 f-w-400"><?= $vehicule->puissance ?> chevaux</p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <p class="text-muted m-b-5">Nbr Portières :</p>
                                                        </div>
                                                        <div class="col-6">
                                                            <p class="m-b-5 f-w-400"><?= $vehicule->nb_porte ?> portes</p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <p class="text-muted m-b-5">Nbr Places :</p>
                                                        </div>
                                                        <div class="col-6">
                                                            <p class="m-b-5 f-w-400"><?= $vehicule->nb_place ?> places</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <p class="text-muted m-b-5">Mise en circulation</p>
                                                        </div>
                                                        <div class="col-6">
                                                            <p class="m-b-5 f-w-400"><?= datecourt($vehicule->date_mise_circulation); ?></p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <p class="text-muted m-b-5">Kilometrage :</p>
                                                        </div>
                                                        <div class="col-6">
                                                            <p class="m-b-5 f-w-400"><?= $vehicule->kilometrage ?></p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <p class="text-muted m-b-5">Date de Sortie :</p>
                                                        </div>
                                                        <div class="col-6">
                                                            <p class="m-b-5 f-w-400"><?= datecourt($vehicule->date_sortie); ?></p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <p class="text-muted m-b-5">Propriétaire :</p>
                                                        </div>
                                                        <div class="col-6">
                                                            <p class="m-b-5 f-w-400"><?= $vehicule->prestataire->name ?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><hr>
                                            <div class="row">
                                                <div class="col-sm-4 m-t-0">
                                                    <div class="row">
                                                        <div class="col-5">
                                                            <p class="text-muted m-b-5">Assurance :</p>
                                                        </div><br>
                                                        <div class="col-7">
                                                            <p class="m-b-5 f-w-400 label label-<?= ($vehicule->finAssurance() > dateAjoute())?"success":"danger" ?>"><?= datecourt($vehicule->finAssurance()); ?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 m-t-0">
                                                    <div class="row">
                                                        <div class="col-5">
                                                            <p class="text-muted m-b-5">Visite Tech.:</p>
                                                        </div><br>
                                                        <div class="col-7">
                                                            <p class="m-b-5 f-w-400 label label-<?= ($vehicule->finVisite() > dateAjoute())?"success":"danger" ?>"><?= datecourt($vehicule->finVisite()); ?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 m-t-0">
                                                    <div class="row">
                                                        <div class="col-5">
                                                            <p class="text-muted m-b-5">Faire Vidange :</p>
                                                        </div><br>
                                                        <div class="col-7">
                                                            <p class="m-b-5 f-w-400 label label-<?= ($vehicule->finVidange() > dateAjoute())?"success":"danger" ?>"><?= datecourt($vehicule->finVidange()); ?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane" id="equipement" role="tabpanel">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <h2 class="subtitle mp0" style="font-size: 16px;">Equipements sur le véhicule</h2><br>
                                                <table class="table table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>Désignation</th>
                                                            <th>Quantité</th>
                                                            <th colspan="2"></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php foreach ($vehicule->equipement_vehicules as $key => $item) {
                                                            $item->actualise() ?>
                                                            <tr>
                                                                <td><?= $item->equipement->name ?></td>
                                                                <td>x <?= $item->quantite ?></td>
                                                                <td class="cursor" onclick="retirer('equipement_vehicule', <?= $item->get_id() ?>)"><i class="fa fa-close text-red" data-toggle="tooltip" title="retirer equipement"></i></td>
                                                                <td class="cursor" onclick="suppression('equipement_vehicule', <?= $item->get_id() ?>)"><i class="fa fa-trash text-red" data-toggle="tooltip" title="equipement usé"></i></td>
                                                            </tr>
                                                        <?php } ?>
                                                    </tbody>
                                                </table>
                                                <button class="btn btn-grd-success btn-sm" data-toggle=modal data-target="#modal-equipement"><i class="fa fa-plus"></i> Ajouter Equipement</button>
                                            </div>

                                            <div class="col-sm-6">
                                                <h2 class="subtitle mp0 text-blue" style="font-size: 16px;">Accessoires du véhicule</h2><br>
                                                <table class="table table-striped">
                                                 <thead>
                                                     <tr>
                                                        <th>Désignation</th>
                                                        <th>Quantité</th>
                                                        <th colspan="2"></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($vehicule->accessoire_vehicules as $key => $item) {
                                                        $item->actualise() ?>
                                                        <tr>
                                                            <td><?= $item->accessoire->name ?></td>
                                                            <td>x <?= $item->quantite ?></td>
                                                            <td class="cursor" onclick="retirer('accessoire_vehicule', <?= $item->get_id() ?>)"><i class="fa fa-close text-red" data-toggle="tooltip" title="retirer accessoire"></i></td>
                                                            <td class="cursor" onclick="suppression('accessoire_vehicule', <?= $item->get_id() ?>)"><i class="fa fa-trash text-red" data-toggle="tooltip" title="accessoire usé"></i></td>
                                                        </tr>
                                                    <?php } ?>
                                                </tbody>
                                            </table>
                                            <button class="btn btn-grd-primary btn-sm" data-toggle=modal data-target="#modal-accessoire"><i class="fa fa-plus"></i> Ajouter Accessoire</button>
                                        </div>
                                    </div>
                                </div>


                                <div class="tab-pane" id="leschauffeurs" role="tabpanel">
                                    <h2 class="subtitle mp0 text-blue" style="font-size: 16px;">Les chauffeurs de ce véhicule</h2><br>
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Nom & Prénoms</th>
                                                <th>Permis</th>
                                                <th>Expiration</th>
                                                <th>Email & Contacts</th>
                                                <th colspan="2"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($vehicule->chauffeur_vehicules as $key => $item) {
                                                $item->actualise() ?>
                                                <tr>
                                                    <td class="gras"><?= $item->chauffeur->name() ?></td>
                                                    <td>
                                                        <span><?= $item->chauffeur->numero_permis ?></span><br>
                                                        <span>Catégorie <?= $item->chauffeur->typepermis ?></span>
                                                    </td>
                                                    <td><?= datecourt($item->chauffeur->date_fin_permis) ?></td>
                                                    <td>
                                                        <span><a href="mailto:<?= $item->chauffeur->email ?>"><?= $item->chauffeur->email ?></a></span><br>
                                                        <span><?= $item->chauffeur->contact ?> / <?= $item->chauffeur->contact2 ?></span>
                                                    </td>
                                                    <td class="cursor" onclick="suppression('chauffeur_vehicule', <?= $item->get_id() ?>)"><i class="fa fa-close text-red"></i></td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                    <button class="btn btn-grd-primary btn-sm" data-toggle=modal data-target="#modal-chauffeur"><i class="fa fa-plus"></i> Ajouter un nouveau chauffeur</button>
                                </div>


                                <div class="tab-pane" id="options" role="tabpanel">
                                    <br>
                                    <div class="row text-left">
                                        <div class="col-sm-4 m-t-0 border-right">
                                            <button class="btn btn-block btn-grd-warning btn-sm" data-toggle="modal" data-target="#modal-entretien"><i class="fa fa-wrench"></i> Entretien du véhicule</button>
                                        </div>

                                        <div class="col-sm-4 m-t-0 border-right">
                                            <?php if (!$vehicule->is_affecte()) { ?>
                                                <button class="btn btn-block btn-grd-success btn-sm" data-toggle="modal" data-target="#modal-affectation"><i class="fa fa-handshake-o"></i> Affecter le véhicule</button><br>
                                            <?php } ?>

                                            <?php if ($vehicule->is_affecte()) { ?>
                                                <button class="btn btn-block btn-grd-info btn-sm" onclick="reaffecter(<?= $affectation->get_id() ?>)"><i class="fa fa-refresh"></i> Renouveler l'affectation</button><br>
                                            <?php } ?>

                                            <?php if (!$vehicule->en_pret() && !$vehicule->is_affecte()) { ?>
                                                <button data-toggle="modal" data-target="#modal-pret" class="btn btn-block btn-grd-primary btn-sm"><i class="fa fa-handshake-o"></i> Preter le véhicule</button><br>
                                            <?php } ?>
                                        </div>

                                        <div class="col-sm-4 m-t-0">
                                           <?php if ($vehicule->etatvehicule_id == -1) { ?>
                                               <button onclick="disponible()" class="btn btn-block btn-grd-success btn-sm"><i class="fa fa-close"></i> Le véhicule est maintenant disponible</button><br>
                                           <?php }else{ ?>
                                            <button onclick="indisponible()" class="btn btn-block btn-grd-warning btn-sm"><i class="fa fa-close"></i> Rendre ce véhicule indisponible</button><br>
                                        <?php } ?>

                                        <?php if ($vehicule->etatvehicule_id != -2) { ?>
                                            <button onclick="out()" class="btn btn-block btn-grd-danger btn-sm"><i class="fa fa-close"></i> Ce véhicule n'est plus dans le parc</button><br>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>


                            <div class="tab-pane" id="tracking" role="tabpanel">
                                <div class="border" style="width: 100%; height: 300px;">

                                </div><br>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="row">
                                            <div class="col-6">
                                                <p class="text-muted m-b-5">Immatriculation :</p>
                                            </div>
                                            <div class="col-6">
                                                <p class="m-b-5 f-w-400"><?= $vehicule->immatriculation ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <p class="text-muted m-b-5">Couleur :</p>
                                            </div>
                                            <div class="col-6">
                                                <p class="m-b-5 f-w-400"><?= $vehicule->couleur ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <p class="text-muted m-b-5">Marque :</p>
                                            </div>
                                            <div class="col-6">
                                                <p class="m-b-5 f-w-400"><?= $vehicule->marque->name ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <p class="text-muted m-b-5">Modèle :</p>
                                            </div>
                                            <div class="col-6">
                                                <p class="m-b-5 f-w-400"><?= $vehicule->modele ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="row">
                                            <div class="col-6">
                                                <p class="text-muted m-b-5">Energie :</p>
                                            </div>
                                            <div class="col-6">
                                                <p class="m-b-5 f-w-400"><?= $vehicule->energie->name ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <p class="text-muted m-b-5">Puissance :</p>
                                            </div>
                                            <div class="col-6">
                                                <p class="m-b-5 f-w-400"><?= $vehicule->puissance ?> chevaux</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <p class="text-muted m-b-5">Nbr Portières :</p>
                                            </div>
                                            <div class="col-6">
                                                <p class="m-b-5 f-w-400"><?= $vehicule->nb_porte ?> portes</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <p class="text-muted m-b-5">Nbr Places :</p>
                                            </div>
                                            <div class="col-6">
                                                <p class="m-b-5 f-w-400"><?= $vehicule->nb_place ?> places</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="row">
                                            <div class="col-6">
                                                <p class="text-muted m-b-5">Mise en circulation</p>
                                            </div>
                                            <div class="col-6">
                                                <p class="m-b-5 f-w-400"><?= datecourt($vehicule->date_mise_circulation); ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <p class="text-muted m-b-5">Kilometrage :</p>
                                            </div>
                                            <div class="col-6">
                                                <p class="m-b-5 f-w-400"><?= $vehicule->kilometrage ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <p class="text-muted m-b-5">Date de Sortie :</p>
                                            </div>
                                            <div class="col-6">
                                                <p class="m-b-5 f-w-400"><?= datecourt($vehicule->date_sortie); ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <p class="text-muted m-b-5">Propriétaire :</p>
                                            </div>
                                            <div class="col-6">
                                                <p class="m-b-5 f-w-400"><?= $vehicule->prestataire->name ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div><hr>
                                <br>
                                <div class="row text-center">
                                    <button class="btn btn-grd-warning btn-sm" data-toggle="modal" data-target="#modal-entretien"><i class="fa fa-wrench"></i> Bouton</button>
                                    <button class="btn btn-grd-warning btn-sm" data-toggle="modal" data-target="#modal-entretien"><i class="fa fa-wrench"></i> Bouton</button>
                                    <button class="btn btn-grd-warning btn-sm" data-toggle="modal" data-target="#modal-entretien"><i class="fa fa-wrench"></i> Bouton</button>
                                    <button class="btn btn-grd-warning btn-sm" data-toggle="modal" data-target="#modal-entretien"><i class="fa fa-wrench"></i> Bouton</button>
                                    <button class="btn btn-grd-warning btn-sm" data-toggle="modal" data-target="#modal-entretien"><i class="fa fa-wrench"></i> Bouton</button>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>

            </div>

            <div class="">
                <div class="card">
                    <div class="card-block">
                        <ul class="nav nav-tabs " role="tablist">

                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#grise" role="tab"><i class="fa fa-car"></i> Carte grise</a>
                                <div class="slide"></div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#pieces" role="tab"><i class="fa fa-file-text"></i> Pièces Administratives</a>
                                <div class="slide"></div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#assurances" role="tab"><i class="fa fa-file-text"></i> Assurances</a>
                                <div class="slide"></div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#visites" role="tab"><i class="fa fa-file-text"></i> Visite technique</a>
                                <div class="slide"></div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#entretiens" role="tab"><i class="fa fa-wrench"></i> Entretiens / Réparations</a>
                                <div class="slide"></div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#lessinistres" role="tab"><i class="fa fa-wrench"></i> Sinistres</a>
                                <div class="slide"></div>
                            </li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content card-block" style="min-height: 400px">
                         <div class="tab-pane active" id="grise" role="tabpanel">
                            <h2 class="mp0 subtitle">Les cartes grises de la <u><?= $vehicule->modele ?></u> <button class="pull-right btn-round bg-silcer btn btn-sm" data-toggle="modal" data-target="#modal-cartegrise"><i class="fa fa-plus"></i> Nouvelle carte grise</button></h2><br>
                            <div class="row">
                                <div class="col-md-9">
                                    <table class="spe table table-hover table-bordered">
                                        <thead class="bg-silver">
                                            <tr>
                                                <th>Désignation</th>
                                                <th>Etablie le</th>
                                                <th>Propriétaire</th>
                                                <th>Energie</th>
                                                <th>Couleur</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($vehicule->cartegrises as $key => $piece) {
                                                $piece->actualise(); ?>
                                                <tr class="cursor" onclick="src('GRISE', 'cartegrises', <?= $piece->get_id(); ?>)">
                                                    <td><b class="italic text-uppercase"><?= $piece->name ?></b> <br> <span><?= $piece->numero_piece ?></span></td>
                                                    <td><?= datecourt($piece->date_etablissement) ?></td>
                                                    <td><?= $piece->proprietaire ?></td>
                                                    <td><?= $piece->energie->name ?></td>
                                                    <td><?= $piece->couleur ?></td>
                                                    <td>
                                                        <button data-toggle=modal data-target="#modal-cartegrise" class="btn" onclick="modification('cartegrise', <?= $piece->get_id() ?>)"><i class="fa fa-pencil text-blue"></i></button>
                                                        <button class="btn btn" onclick="suppression('cartegrise', <?= $piece->get_id() ?>)"><i class="fa fa-close text-red"></i></button>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-md-3">
                                    <div class="grid affichage" id="GRISE">
                                        <!-- rempli en Ajax -->
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="tab-pane" id="pieces" role="tabpanel">
                            <h2 class="mp0 subtitle">Les pièces de la <u><?= $vehicule->modele ?></u> <button class="pull-right btn-round bg-navy btn btn-sm" data-toggle="modal" data-target="#modal-piece"><i class="fa fa-plus"></i> Ajouter Nouvelle pièce</button></h2><br>
                            <div class="row">
                                <div class="col-md-9">
                                    <table class="spe table table-hover table-bordered">
                                        <thead class="bg-navy">
                                            <tr>
                                                <th>Désignation</th>
                                                <th>Etablie le</th>
                                                <th>Durée</th>
                                                <th>Durée en date</th>
                                                <th>Etat</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($vehicule->piecevehicules as $key => $piece) {
                                                $piece->actualise(); $piece->etat(); ?>
                                                <tr class="cursor" onclick="src('PAV', 'piecevehicules', <?= $piece->get_id(); ?>)">
                                                    <td><b class="italic text-uppercase"><?= $piece->name ?></b> <br> <span><?= $piece->numero_piece ?></span></td>
                                                    <td><?= datecourt($piece->date_etablissement) ?></td>
                                                    <td><?= $piece->duree ?> <?= $piece->typeduree->name ?></td>
                                                    <td> Du <?= datecourt($piece->started) ?> <br> au <?= datecourt($piece->finished) ?></td>
                                                    <td><label class="label label-<?= $piece->etatpiece->class ?>"><?= $piece->etatpiece->name ?></label></td>
                                                    <td>
                                                        <button data-toggle=modal data-target="#modal-piecevehicule" class="btn" onclick="modification('piecevehicule', <?= $piece->get_id() ?>)"><i class="fa fa-pencil text-blue"></i></button>
                                                        <button class="btn btn" onclick="suppression('piecevehicule', <?= $piece->get_id() ?>)"><i class="fa fa-close text-red"></i></button>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-md-3">
                                    <div class="grid affichage" id="PAV">
                                        <!-- rempli en Ajax -->
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="tab-pane" id="assurances" role="tabpanel">
                           <h2 class="mp0 subtitle">Les assurances de la <u><?= $vehicule->modele ?></u> <button class="pull-right btn-round bg-purple btn btn-sm" data-toggle="modal" data-target="#modal-assur"><i class="fa fa-plus"></i> Nouvelle fiche assurance</button></h2><br>
                           <div class="row">
                            <div class="col-md-9">
                                <table class="spe table table-hover table-bordered table-striped">
                                    <thead class="bg-purple">
                                        <tr>
                                            <th>Désignation</th>
                                            <th>Etablie le</th>
                                            <th>Durée</th>
                                            <th>Durée en date</th>
                                            <th>Etat</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($vehicule->assurances as $key => $assurance) {
                                            $assurance->actualise(); ?>
                                            <tr class="cursor" onclick="src('ASSU', 'assurances', <?= $assurance->get_id(); ?>)">
                                                <td><b class="italic text-uppercase"><?= $assurance->name ?></b> <br> <span><?= $assurance->numero_piece ?></span></td>
                                                <td><?= datecourt($assurance->date_etablissement) ?></td>
                                                <td><?= $assurance->duree ?> <?= $assurance->typeduree->name ?></td>
                                                <td> Du <?= datecourt($assurance->started) ?> <br> au <?= datecourt($assurance->finished) ?></td>
                                                <td><label class="label label-<?= $assurance->etatpiece->class ?>"><?= $assurance->etatpiece->name ?></label></td>
                                                <td>
                                                    <button data-toggle=modal data-target="#modal-assurance" class="btn" onclick="modification('assurance', <?= $assurance->get_id() ?>)"><i class="fa fa-pencil text-blue"></i></button>
                                                    <button class="btn btn" onclick="suppression('assurance', <?= $assurance->get_id() ?>)"><i class="fa fa-close text-red"></i></button>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md-3">
                                <div class="grid affichage" id="ASSU">
                                    <!-- rempli en Ajax -->
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="tab-pane" id="visites" role="tabpanel">
                       <h2 class="mp0 subtitle">Les visites techniques de la <u><?= $vehicule->modele ?></u> <button class="pull-right btn-round bg-orange btn btn-sm" data-toggle="modal" data-target="#modal-visite"><i class="fa fa-plus"></i> Nouvelle fiche visite technique</button></h2><br>
                       <div class="row">
                        <div class="col-md-9">
                            <table class="spe table table-hover table-bordered table-striped">
                                <thead class="bg-orange">
                                    <tr>
                                        <th>Désignation</th>
                                        <th>Etablie le</th>
                                        <th>Durée</th>
                                        <th>Durée en date</th>
                                        <th>Etat</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($vehicule->visitetechniques as $key => $visite) {
                                        $visite->actualise(); ?>
                                        <tr class="cursor" onclick="src('VITC', 'visitetechniques', <?= $visite->get_id(); ?>)">
                                            <td><b class="italic text-uppercase"><?= $visite->name ?></b> <br> <span><?= $visite->numero_piece ?></span></td>
                                            <td><?= datecourt($visite->date_etablissement) ?></td>
                                            <td><?= $visite->duree ?> <?= $visite->typeduree->name ?></td>
                                            <td> Du <?= datecourt($visite->started) ?> <br> au <?= datecourt($visite->finished) ?></td>
                                            <td><label class="label label-<?= $visite->etatpiece->class ?>"><?= $visite->etatpiece->name ?></label></td>
                                            <td>
                                                <button data-toggle=modal data-target="#modal-visitetechnique" class="btn" onclick="modification('visitetechnique', <?= $visite->get_id() ?>)"><i class="fa fa-pencil text-blue"></i></button>
                                                <button class="btn btn" onclick="suppression('visitetechnique', <?= $visite->get_id() ?>)"><i class="fa fa-close text-red"></i></button>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-3">
                            <div class="grid affichage" id="VITC">
                                <!-- rempli en Ajax -->
                            </div>
                        </div>
                    </div>
                </div>



                <div class="tab-pane" id="entretiens" role="tabpanel">
                    <h2 class="mp0 subtitle">Tous les entretiens de la <u><?= $vehicule->modele ?></u> <button class="pull-right btn-round bg-blue btn btn-sm" data-toggle="modal" data-target="#modal-entretien"><i class="fa fa-plus"></i> Nouvel entretien pour le véhicule</button></h2><br>
                    <div class="row">
                        <div class="col-md-9">
                            <table class="spe table table-hover table-bordered table-striped">
                                <thead class="bg-blue">
                                    <tr>
                                        <th>Désignation</th>
                                        <th>Prestataire /Coût</th>
                                        <th>Durée entretien</th>
                                        <th>Etat</th>
                                        <th>Action</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($vehicule->entretienvehicules as $key => $entretien) {
                                        $entretien->actualise(); ?>
                                        <tr class="cursor" onclick="src('ENTR', 'entretiens', <?= $entretien->get_id(); ?>)">
                                            <td>
                                                <span class="gras italic text-uppercase"><?= $entretien->typeentretienvehicule->name ?></span><br>
                                                <span><?= $entretien->name ?></span>
                                            </td>
                                            <td>
                                                <span class="gras italic"><?= $entretien->prestataire->name ?></span><br>
                                                <span class="italic"><?= money($entretien->price) ?> <?= $params->devise ?></span>
                                            </td>
                                            <td> Du <?= datecourt($entretien->started) ?> <br> au <?= datecourt($entretien->finished) ?></td>
                                            <td><label class="label label-<?= $entretien->etat->class ?>"><?= $entretien->etat->name ?></label></td>
                                            <td>
                                                <button data-toggle=modal data-target="#modal-entretienvehicule" class="btn" onclick="modification('entretienvehicule', <?= $entretien->get_id() ?>)"><i class="fa fa-pencil text-blue"></i></button>
                                                <button class="btn btn" onclick="suppression('entretienvehicule', <?= $entretien->get_id() ?>)"><i class="fa fa-close text-red"></i></button>
                                            </td>
                                            <td>
                                                <?php if($entretien->etat_id == 0){ ?>
                                                    <button class="label cursor bg-green" onclick="entretien_fini(<?= $entretien->get_id() ?>)"><i class="fa fa-check"></i> Terminer</button><br>
                                                <?php } ?>
                                                <a class="label cursor bg-aqua" href="<?= $this->url("administration", "fiches", "entretiens", $entretien->get_id()) ?>"><i class="fa fa-file-text-o"></i> Voir fiche</a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-3">
                            <div class="grid affichage" id="ENTR">
                                <!-- rempli en Ajax -->
                            </div>
                        </div>
                    </div>
                </div>


                <div class="tab-pane" id="lessinistres" role="tabpanel">
                    <h2 class="mp0 subtitle">Les sinistres concernant la <u><?= $vehicule->modele ?></u> <button class="pull-right btn-round bg-red btn btn-sm" data-toggle="modal" data-target="#modal-sin"><i class="fa fa-plus"></i> Nouveau sinistre</button></h2><br>
                    <div class="row">
                        <div class="col-md-9">
                            <table class="spe table table-hover table-bordered table-striped">
                                <thead class="bg-red">
                                    <tr>
                                        <th>Type Sinistre</th>
                                        <th>Date / Lieu</th>
                                        <th>Autre partie</th>
                                        <th></th>
                                        <th colspan="2">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($vehicule->sinistres as $key => $sinistre) {
                                        $sinistre->actualise(); ?>
                                        <tr class="cursor" onclick="src('SIN', 'sinistres', <?= $sinistre->get_id(); ?>)">
                                            <td>
                                                <b class="italic text-uppercase"><?= $sinistre->typesinistre->name ?></b><br>
                                                <span><?= $sinistre->name ?></span>
                                            </td>
                                            <td>
                                                <span><?= datelong($sinistre->date_etablissement) ?></span><br>
                                                <span><?= $sinistre->lieudrame ?></span>
                                            </td>
                                            <td>
                                                <span><?= $sinistre->nomautre ?></span><br>
                                                <span><?= $sinistre->contactautre ?></span>
                                            </td>
                                            <td><label class="label label-<?= $sinistre->etat->class ?>"><?= $sinistre->etat->name ?></label></td>
                                            <td>
                                                <button data-toggle=modal data-target="#modal-sinistre" class="btn" onclick="modification('sinistre', <?= $sinistre->get_id() ?>)"><i class="fa fa-pencil text-blue"></i></button>
                                                <button class="btn btn" onclick="suppression('sinistre', <?= $sinistre->get_id() ?>)"><i class="fa fa-close text-red"></i></button>
                                            </td>
                                            <td>
                                                <a class="label cursor bg-aqua" href="<?= $this->url("administration", "fiches", "sinistres", $sinistre->get_id()) ?>"><i class="fa fa-file-text-o"></i> Voir fiche</a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-3">
                            <div class="grid affichage" id="SIN">
                                <!-- rempli en Ajax -->
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

</div>
</div>
</div>
</div>
</div>
</div>


<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

<div class="modal fade" id="modal-image">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header bg-purple">
                <h4 class="modal-title">Changer l'image</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <form method="POST" id="formImage">
                <div class="modal-body">
                    <div class="">
                        <label>Image de la voiture</label>
                        <div class="">
                            <img style="width: 80px;" src="" class="img-thumbnail logo">
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


<?php if ($vehicule->is_affecte()) { ?>                      
    <div class="modal fade" id="modal-option-affectation">
        <div class="modal-dialog" style="margin-top: 5%">
            <div class="modal-content">
                <form method="POST" id="formImage">
                    <div class="modal-body">
                       <div class="">
                        <p>Affectation pour </p>
                        <h1><?= $affectation->objet ?></h1>
                        <h6 class="gras">Du <?= datecourt($affectation->started) ?> au <?= datecourt($affectation->started) ?></h6>
                        <p><?= $affectation->comment ?> <label style="font-size: 12px;" class="label label-<?= $affectation->etat->class ?>"><?= $affectation->etat->name ?></label></p> 
                    </div>
                    <div class="">
                     <button onclick="modification('carplane', <?= $affectation->carplane->get_id() ?>)" class="btn btn-sm btn-flat  bg-aqua" data-toggle="modal" data-target="#modal-carplane"><i class="fa fa-edit"></i> Modifier le bénéficiaire</button>

                     <button class="btn btn-flat btn-sm bg-orange" data-toggle="modal" data-target="#modal-affectation1"><i class="fa fa-check"></i> Modifier l'affectation</button> <br>

                     <button onclick="compte_carplane(<?= $affectation->carplane->get_id() ?>)" class="btn btn-flat btn-sm bg-green" data-toggle="modal" data-target="#modal-"><i class="fa fa-user"></i> Créer le compte carplane</button>

                     <button class="btn btn-block btn-grd-info btn-sm" onclick="reaffecter(<?= $affectation->get_id() ?>)"><i class="fa fa-refresh"></i> Renouveler l'affectation</button><br>
                 </div>
             </div>
         </form>
     </div>
 </div>
</div>
<?php } ?>


<div class="modal fade" id="modal-affectation">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-purple">
                <h4 class="modal-title">Formulaire d'affectation</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <form method="POST" id="formAffectation">
                <div class="modal-body">

                    <div class="row">
                        <div class="col-sm-6">
                            <label>Noms & prénoms du bénéficiaire <span1>*</span1></label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" required placeholder="">
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <label>Sexe <span1>*</span1></label>
                            <div class="form-group">
                                <?php Native\BINDING::html("select", "sexe") ?>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <label>Email du bénéficiaire </label>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" placeholder="">
                            </div>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col-sm-4">
                            <label>Fonction du bénéficiaire </label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="fonction"  placeholder="">
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <label>Adresse </label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="adresse" placeholder="">
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <label>Contact du bénéficiaire </label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="contact"  placeholder="">
                            </div>
                        </div>
                    </div><hr>
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="row">
                                <div class="col-sm-6">
                                    <label>début periode d'affectation </label>
                                    <div class="form-group">
                                        <input type="date" class="form-control" name="started"  placeholder="">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <label>fin periode d'affectation </label>
                                    <div class="form-group">
                                        <input type="date" class="form-control" name="finished"  placeholder="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <label>Motif de l'affectation </label>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="objet"  placeholder="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <label>Ajouter une note</label>
                            <div class="form-group">
                                <textarea class="form-control" name="comment" rows="6"></textarea>
                            </div>
                        </div>
                    </div>
                </div><hr class="">
                <div class="container">
                    <button type="button" class="btn btn-sm  btn-default" data-dismiss="modal"><i class="fa fa-close"></i> Annuler</button>
                    <button class="btn btn-sm btn-success pull-right"><i class="fa fa-check"></i> Valider cette affectation</button>
                </div>
                <br>
            </form>
        </div>
    </div>
</div>


<div class="modal fade" id="modal-carplane">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-purple">
                <h4 class="modal-title">Formulaire d'affectation</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <form class="shamman-form" classname="carplane">
                <div class="modal-body">

                    <div class="row">
                        <div class="col-sm-6">
                            <label>Noms & prénoms du bénéficiaire <span1>*</span1></label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" required placeholder="">
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <label>Sexe <span1>*</span1></label>
                            <div class="form-group">
                                <?php Native\BINDING::html("select", "sexe") ?>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <label>Email du bénéficiaire </label>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" placeholder="">
                            </div>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col-sm-4">
                            <label>Fonction du bénéficiaire </label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="fonction"  placeholder="">
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <label>Adresse </label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="adresse" placeholder="">
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <label>Contact du bénéficiaire </label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="contact"  placeholder="">
                            </div>
                        </div>
                    </div>
                </div><hr class="">
                <div class="container">
                    <input type="hidden" name="id">
                    <button type="button" class="btn btn-sm  btn-default" data-dismiss="modal"><i class="fa fa-close"></i> Annuler</button>
                    <button class="btn btn-sm btn-success pull-right"><i class="fa fa-check"></i> Valider cette affectation</button>
                </div>
                <br>
            </form>

        </div>
    </div>
</div>




<div class="modal fade" id="modal-equipement">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-purple">
                <h4 class="modal-title">Formulaire d'equipement de véhicule</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <form method="POST" class="shamman-form" classname="equipement_vehicule">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-8">
                            <label>Equipement <span1>*</span1></label>
                            <div class="form-group">
                                <?php Native\BINDING::html("select", "equipement") ?>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <label>Quantité <span1>*</span1></label>
                            <div class="form-group">
                                <input type="number" class="form-control" name="quantite" required placeholder="">
                            </div>
                        </div>
                    </div>
                </div><hr class="">
                <div class="container">
                    <button type="button" class="btn btn-sm  btn-default" data-dismiss="modal"><i class="fa fa-close"></i> Annuler</button>
                    <button class="btn btn-sm btn-success pull-right"><i class="fa fa-check"></i> Equiper avec, ce véhicule</button>
                </div>
                <br>
            </form>

        </div>
    </div>
</div>


<div class="modal fade" id="modal-accessoire">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-purple">
                <h4 class="modal-title">Formulaire accessoire de véhicule</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <form method="POST" class="shamman-form" classname="accessoire_vehicule">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-8">
                            <label>Accessoire <span1>*</span1></label>
                            <div class="form-group">
                                <?php Native\BINDING::html("select", "accessoire") ?>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <label>Quantité <span1>*</span1></label>
                            <div class="form-group">
                                <input type="number" class="form-control" name="quantite" required placeholder="">
                            </div>
                        </div>
                    </div>
                </div><hr class="">
                <div class="container">
                    <button type="button" class="btn btn-sm  btn-default" data-dismiss="modal"><i class="fa fa-close"></i> Annuler</button>
                    <button class="btn btn-sm btn-success pull-right"><i class="fa fa-check"></i> Equiper avec, ce véhicule</button>
                </div>
                <br>
            </form>
        </div>
    </div>
</div>




<div class="modal fade" id="modal-chauffeur">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header bg-purple">
                <h4 class="modal-title">Ajouter un chauffeur</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <form method="POST" class="shamman-form" classname="chauffeur_vehicule">
                <div class="modal-body">
                  <div class="">
                    <label>Choisir le chauffeur <span1>*</span1></label>
                    <div class="form-group">
                        <?php Native\BINDING::html("select", "chauffeur") ?>
                    </div>
                </div>
                <div class="hide">
                    <label>Quantité <span1>*</span1></label>
                    <div class="form-group">
                        <input type="hidden" class="form-control" name="vehicule_id" value="<?= $vehicule->get_id() ?>">
                    </div>
                </div>
            </div><hr class="">
            <div class="container">
                <button type="button" class="btn btn-sm  btn-default" data-dismiss="modal"><i class="fa fa-close"></i> Annuler</button>
                <button class="btn btn-sm btn-success pull-right"><i class="fa fa-check"></i> Ajouter ce chauffeur</button>
            </div>
            <br>
        </form>

    </div>
</div>
</div>





<div class="modal fade" id="modal-pret">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-blue">
                <h4 class="modal-title">Formulaire de pret de véhicule</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <form method="POST" id="formPret">
                <div class="modal-body">

                    <div class="row">
                        <div class="col-sm-8">
                            <div class="row">
                                <div class="col-sm-6">
                                    <label>Date de début <span1>*</span1></label>
                                    <div class="form-group">
                                        <input type="date" class="form-control" name="started" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <label>Date de fin<span1>*</span1></label>
                                    <div class="form-group">
                                        <input type="date" class="form-control" name="finished" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <label>Montant du pret </label>
                                    <div class="form-group">
                                        <input type="number" class="form-control" name="price" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <label>Ajouter une note (motif ou but)</label>
                            <div class="form-group">
                                <textarea class="form-control" rows="5" name="comment" ></textarea>
                            </div>
                        </div>
                    </div><br>

                    <h2 class="subtitle italic mp0" style="font-size: 16px">LE bénéfiaicaire</h2><hr>
                    <div class="row">
                        <div class="col-sm-4">
                            <label>Nom de beneficiaire <span1>*</span1></label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" required>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <label>Adresse <span1>*</span1></label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="adresse" required>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <label>Son email <span1>*</span1></label>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" required>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <label>Son Contact <span1>*</span1></label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="contact" required>
                            </div>
                        </div>        
                        <div class="col-sm-4">
                            <label>Deuxieme Contact </label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="contact2" >
                            </div>
                        </div>         
                    </div>   
                </div><hr class="">
                <div class="container">
                    <input type="hidden" name="id">
                    <button type="button" class="btn btn-sm  btn-default" data-dismiss="modal"><i class="fa fa-close"></i> Annuler</button>
                    <button class="btn btn-sm btn-primary pull-right"><i class="fa fa-check"></i> Valider le pret de ce vehicule</button>
                </div>
                <br>
            </form>
        </div>
    </div>
</div>




<!-- //formulaire du véhicule -->
<?php require("../../webapp/home/elements/modals/modal-vehicule.php") ?>
<?php require("../../webapp/home/elements/modals/modal_assurances.php") ?>
<?php require("../../webapp/home/elements/modals/modal_sinistres.php") ?>
<?php require("../../webapp/home/elements/modals/modal_entretiens.php") ?>
<?php require("../../webapp/home/elements/modals/modal_pieces.php") ?>
<?php require("../../webapp/home/elements/modals/modal_cartegrise.php") ?>
<?php require("../../webapp/home/elements/modals/modal_visites.php") ?>



<?php require("../../webapp/administration/assets/includes/footer.php") ?>

</body>

</html>
