<!DOCTYPE html>
<html>

<?php include($this->rootPath("webapp/carplan/elements/templates/head.php")); ?>


<body class="fixed-sidebar">

    <div id="wrapper">

        <?php include($this->rootPath("webapp/carplan/elements/templates/sidebar.php")); ?>  

        <div id="page-wrapper" class="gray-bg">

          <?php include($this->rootPath("webapp/carplan/elements/templates/header.php")); ?>  

          
          <div class="wrapper wrapper-content">
            <div class=" animated fadeInRightBig">
                <div class="ibox">
                    <div class="ibox-content">
                     <div class="tabs-container">
                        <ul class="nav nav-tabs" role="tablist">
                            <li><a class="nav-link" data-toggle="tab" href="#menu-0"><i class="fa fa-user"></i> Mes Informations</a></li>
                            <li><a class="nav-link active" data-toggle="tab" href="#menu-1"><i class="fa fa-car"></i> Infos Générale</a></li>
                            <li><a class="nav-link" data-toggle="tab" href="#menu-2"><i class="fa fa-file-text"></i> Fiche Technique</a></li>
                            <li><a class="nav-link" data-toggle="tab" href="#menu-3"><i class="fa fa-cubes"></i> Equipements</a></li>
                            <li><a class="nav-link" data-toggle="tab" href="#menu-4"><i class="fa fa-map-marker"></i> Géolocalisation</a></li>
                            <li><a class="nav-link" data-toggle="tab" href="#menu-5"><i class="fa fa-steam"></i> Historique du véhicule</a></li>
                        </ul>
                        <div class="tab-content"><br>

                            <div role="tabpanel" id="menu-1" class="tab-pane active">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="product-images">
                                            <div>
                                                <img style="width: 100%; margin-top: 15%" src="<?= $this->stockage("images", "vehicules", $affectation->vehicule->image) ?>" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-7 border-left">
                                        <br>
                                        <h1 class="gras text-navy" style="margin: 0"><strong><?= $affectation->vehicule->immatriculation ?></strong></h1>
                                        <h2 class="font-bold m-b-xs"><?= $affectation->vehicule->marque->name ?> <?= $affectation->vehicule->modele ?></h2><br>
                                        <span>Période de l'affectation</span>
                                        <h3 class="font-bold m-b-xs"><?= datecourt($renouv->started);  ?> -- <?= datecourt($renouv->finished);  ?> (<?= count($affectation->renouvelementaffectations) ?>)</h3>
                                        <hr>

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
                                                        <td><label class="m-b-5 f-w-400 label label-<?= ($assurance->finished > dateAjoute())?"success":"danger" ?>"><?= datecourt($assurance->finished); ?></label></td>
                                                        <td><label class="m-b-5 f-w-400 label label-<?= ($visitetechnique->finished > dateAjoute())?"success":"danger" ?>"><?= datecourt($visitetechnique->finished); ?></label></td>
                                                        <td>
                                                            <?php if ($vidange != null) { ?>
                                                                <label class="m-b-5 f-w-400 label label-<?= ($vidange->date > dateAjoute())?"success":"danger" ?>"><?= datecourt($vidange->date); ?> ou dans <?= $vidange->kilometrage  ?> Kms</label>
                                                            <?php } ?>
                                                        </td>
                                                        <td><?= $affectation->vehicule->kilometrage ?> Kms</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <hr>

                                        <div>
                                            <button data-toggle="modal" data-target="#modal-demandeentretien" class="btn btn-warning dim" type="button"><i class="fa fa-upload"></i> Demander un entretien</button>

                                            <button data-toggle="modal" data-target="#modal-sinistre-carplan" class="btn btn-outline btn-danger dim" type="button"><i class="fa fa-upload"></i> Déclarer un sinistre</button>

                                            <button class="btn btn-outline btn-success  dim" type="button"><i class="fa fa-line-chart"></i> Voir les stats</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div role="tabpanel" id="menu-0" class="tab-pane">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-8 border-right">
                                            <div class="row">
                                               <div class="col-md-4">
                                                <div class="">
                                                    <div>
                                                        <img style="width: 90%;" class="img-thumbnail" src="<?= $this->stockage("images", "carplans", $affectation->carplan->image) ?>" alt=""><br>
                                                        <div class="text-center"><br>
                                                            <button data-toggle="modal" data-target="#modal-image" class="btn btn-success btn-xs btn-rounded btn-outline"><i class="fa fa-plus"></i> Changer la photo</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <span data-toggle="modal" data-target="#modal-carplan" onclick="modification('carplan', <?= $affectation->carplan->getId(); ?>)" class="float-right mp5"><i class="fa fa-pencil cursor fa-2x"></i></span>
                                                <h2 class="mp0 gras text-navy" style="margin-top: 6px;"><?= $affectation->carplan->name() ?></h2>
                                                <h5 class="gras"><?= $affectation->carplan->fonction ?></h5><br>

                                                <small>Situation géographique</small>
                                                <h3 class="font-bold"><i class="fa fa-map-marker"></i>  <?= $affectation->carplan->adresse ?></h3>
                                                <small>Adresse email</small>
                                                <h3 class="font-bold"><i class="fa fa-envelope"></i>  <?= $affectation->carplan->email ?></h3>
                                                <small>Contact</small>
                                                <h3 class="font-bold"><i class="fa fa-phone"></i>  <?= $affectation->carplan->contact ?></h3>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-4">
                                        <h3 class="mp0 gras text-navy" style="margin-top: 6px;">Login</h3>
                                        <h5 class="gras"><?= $affectation->carplan->login ?>
                                        <button  data-toggle="modal" data-target="#modal-login" class="btn btn-warning btn-xs btn-rounded btn-outline pull-right"><i class="fa fa-key"></i> Changer le login</button>
                                    </h5>
                                    <br><br>


                                    <h3 class="mp0 gras text-navy" style="margin-top: 6px;">Mot de passe</h3>
                                    <h5 class="gras">************** 
                                        <button data-toggle="modal" data-target="#modal-password"  class="btn btn-danger btn-xs btn-rounded btn-outline pull-right"><i class="fa fa-lock"></i> Changer le mot de passe</button>
                                    </h5>
                                    <br>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div role="tabpanel" id="menu-2" class="tab-pane">
                        <h2 class="text-uppercase gras">Fiche technique de la <u><?= $affectation->vehicule->marque->name ?> <?= $affectation->vehicule->modele ?></u> </h2>

                        <br>
                        <div class="row">
                            <div class="col-md-4 border-right">
                                <table class="table table-sm">
                                    <tbody>
                                        <tr>
                                            <td>Marque</td>
                                            <td><?= $affectation->vehicule->marque->name ?></td>
                                        </tr>                                            
                                        <tr>
                                            <td>Modèle</td>
                                            <td><?= $affectation->vehicule->modele ?></td>
                                        </tr>
                                        <tr>
                                            <td>Couleur</td>
                                            <td><?= $carteGrise->couleur ?></td>
                                        </tr>
                                        <tr>
                                            <td>N°Chasis</td>
                                            <td><?= $affectation->vehicule->chasis ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md-4 border-right">
                                <table class="table table-sm">
                                    <tbody>
                                        <tr>
                                            <td>Energie</td>
                                            <td><?= ($carteGrise->energie_id > 0)?$carteGrise->energie->name:"" ?></td>
                                        </tr>
                                        <tr>
                                            <td>Puissance</td>
                                            <td><?= $affectation->vehicule->puissance ?> chevaux</td>
                                        </tr>
                                        <tr>
                                            <td>Transmission</td>
                                            <td><?= $affectation->vehicule->typetransmission->name ?></td>
                                        </tr>
                                        <tr>
                                            <td>Portieres / Places</td>
                                            <td><?= $affectation->vehicule->nb_porte ?> portières / <?= $affectation->vehicule->nb_place ?> places</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md-4">
                                <table class="table table-sm">
                                    <tbody>
                                        <tr>
                                            <td>Mise en circulation</td>
                                            <td><?= datecourt($affectation->vehicule->date_mise_circulation) ?></td>
                                        </tr>
                                        <tr>
                                            <td>Kilometrage actuel</td>
                                            <td><?= $affectation->vehicule->kilometrage ?> Kms</td>
                                        </tr>
                                        <tr>
                                            <td>Sortie de Circulation</td>
                                            <td><?= datecourt($affectation->vehicule->date_sortie) ?></td>
                                        </tr>
                                        <tr>
                                            <td>Propriétaire</td>
                                            <td><?= $affectation->vehicule->prestataire->name ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                    <div role="tabpanel" id="menu-3" class="tab-pane">
                        <div class="panel-body">
                         <div class="row">
                            <div class="col-md-6">
                                <table class="table table-striped table-hover table-sm">
                                    <thead>
                                        <tr>
                                            <th>Désignation</th>
                                            <th>Quantité</th>
                                            <th colspan="2">Options</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php foreach ($affectation->vehicule->equipement_vehicules as $key => $ch) {
                                        $ch->actualise(); ?>
                                        <tr>
                                            <td class=""><img style="width: 32px" src="<?= $this->stockage("images", "equipements", $ch->equipement->image) ?>"></td>
                                            <td class="gras text-uppercase"><?= $ch->equipement->name(); ?></td>
                                            <td><?= $ch->quantite; ?> unités</td>
                                            <th><i data-toggle="tooltip" title="Riterer l'equipement" class="fa fa-close cursor" onclick="retirer(<?= $ch->getId(); ?>)"></i></th>
                                            <th><i data-toggle="tooltip" title="Equipement usé ou abimé, changer!" class="fa fa-trash text-red cursor" onclick="suppression('equipement_vehicule', <?= $ch->getId(); ?>)"></i></th>
                                        </tr>
                                    <?php } ?> 
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
                        <div class="offset-1 col-md-10">
                            <div id="vertical-timeline" class="vertical-container dark-timeline">

                                <?php foreach ($historiques as $key => $history) { ?>
                                    <div class="vertical-timeline-block">
                                        <div class="vertical-timeline-icon navy-bg">
                                            <i class="fa fa-briefcase"></i>
                                        </div>
                                        <div class="vertical-timeline-content">
                                            <h2 class="mp0"><?= $history->name ?></h2>
                                            <p ><?= $history->comment ?></p>
                                            <small><?= depuis($history->created)  ?></small>
                                        </div>
                                    </div>
                                <?php } ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>
<div class="ibox-footer">
    <span class="float-right">
        Dernière mise à jour - <i class="fa fa-clock-o"></i> <?= datelong(date("Y-m-d H:i:s"));  ?>
    </span>
    AMB - Carplan | Gestionnaire de parc automobile
</div>
</div>
</div>
</div>



<div class="modal inmodal fade" id="modal-image">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title">Photo de profil</h4>
                <small class="font-bold">Remplacer la photo de profil</small>
            </div>
            <form method="POST" id="formImage">
                <div class="modal-body">
                    <div class="">
                        <label>Photo de profil</label>
                        <div class="">
                            <img style="width: 80px;" src="" class="img-thumbnail logo">
                            <input class="hide" type="file" name="image">
                            <button type="button" class="btn btn-sm bg-red pull-right btn_image"><i class="fa fa-image"></i> Choisir la photo</button>
                        </div>
                    </div>
                </div><hr class="">
                <div class="container">
                    <button type="button" class="btn btn-sm  btn-default" data-dismiss="modal"><i class="fa fa-close"></i> Annuler</button>
                    <button class="btn btn-sm btn-success pull-right"><i class="fa fa-check"></i>Changer la photo</button>
                </div>
                <br>
            </form>
        </div>
    </div>
</div>


<?php include($this->rootPath("composants/assets/modals/modal-carplan.php")); ?>  
<?php include($this->rootPath("composants/assets/modals/modal-login.php")); ?> 
<?php include($this->rootPath("composants/assets/modals/modal-password.php")); ?> 


<?php include($this->rootPath("webapp/carplan/elements/templates/footer.php")); ?>


</div>
</div>


<?php include($this->rootPath("webapp/carplan/elements/templates/script.php")); ?>


</body>

</html>
