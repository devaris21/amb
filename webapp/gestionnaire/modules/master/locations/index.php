
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
                             <div class="col-xl-3 col-md-6">
                                <div class="card bg-c-yellow text-white">
                                    <div class="card-block">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <p class="m-b-5">Total locations en cours</p>
                                                <h4 class="m-b-0"><?= start0(count(Home\LOCATION::locations())) ?></h4>
                                            </div>
                                            <div class="col col-auto text-right">
                                                <i class="fa fa-car f-50 text-c-yellow"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-c-green text-white">
                                    <div class="card-block">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <p class="m-b-5">Totals des prets en cours</p>
                                                <h4 class="m-b-0"><?= start0(count(Home\LOCATION::prets())) ?></h4>
                                            </div>
                                            <div class="col col-auto text-right">
                                                <i class="fa fa-grid f-50 text-c-green"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-c-pink text-white">
                                    <div class="card-block">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <p class="m-b-5">Véhicules impliqués</p>
                                                <h4 class="m-b-0"><?= start0(count(Home\VEHICULE::pret_location())) ?></h4>
                                            </div>
                                            <div class="col col-auto text-right">
                                                <i class="fa fa-check f-50 text-c-pink"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <button class="btn btn-sm btn-round btn-block btn-grd-primary" onclick="session('typelocation', 0)" data-toggle="modal" data-target="#modal-location"><i class="fa fa-plus"></i> nouvelle location</button><br>

                                <button class="btn btn-sm btn-round btn-block btn-grd-danger" onclick="session('typelocation', 1)" data-toggle="modal" data-target="#modal-pret"><i class="fa fa-plus"></i> Nouveau pret</button>
                            </div>
                        </div>

                        <div class="">
                            <div class="card">
                                <div class="card-block">
                                    <ul class="nav nav-tabs " role="tablist">
                                        <li class="nav-item ">
                                            <a class="nav-link active" data-toggle="tab" href="#leslocations" role="tab">Locations/prets en cours <span class="badge bg-aqua"><?= start0(count($locations)) ?></span></a>
                                            <div class="slide"></div>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#loues" role="tab">les véhicules loués <span class="badge bg-aqua"><?= start0(count($loues)) ?></span></a>
                                            <div class="slide"></div>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#pretes" role="tab">les véhicules pretés <span class="badge bg-aqua"><?= start0(count($pretes)) ?></span></a>
                                            <div class="slide"></div>
                                        </li>
                                    </ul>
                                    <!-- Tab panes -->
                                    <div class="tab-content ">
                                        <br>

                                        <div class="tab-pane active" id="leslocations" role="tabpanel">
                                            <div class="">
                                                <table class="table table-hover table-striped table-bordered">
                                                    <thead class="bg-orange">
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Type</th>
                                                            <th>Début </th>
                                                            <th>Fin </th>
                                                            <th>Motif</th>
                                                            <th>Nbr vehicules</th>
                                                            <th>Consession</th>
                                                            <th>Etat</th>
                                                            <th></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php foreach ($locations as $key => $location) {
                                                            $location->actualise();
                                                            $location->fourni("location_vehicule") ?>
                                                            <tr>
                                                                <td>#<?= $location->get_id() ?></td>
                                                                <td>#<?= $location->typelocation->name ?></td>
                                                                <td class="gras"><?= datecourt($location->started) ?></td>
                                                                <td class="gras"><?= datecourt($location->finished) ?></td>
                                                                <td><?= $location->comment ?></td>
                                                                <td><?= start0(count($location->location_vehicules)) ?> véhicules</td>
                                                                <td><?= $location->consession() ?></td>
                                                                <td><label class="label label-<?= $location->etat->class ?>"><?= $location->etat->name ?></label></td>
                                                                <td><a href="<?= $this->url("administration", "fiches", "location", $location->get_id()) ?>" class="btn btn-grd-success "><i class="fa fa-eye"></i> Voir la fiche</a></td>
                                                            </tr>
                                                        <?php } ?>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>


                                        <div class="tab-pane " id="loues" role="tabpanel">
                                            <div class="">
                                               <table class="table table-hover table-striped liste">
                                                <thead class="bg-green">
                                                    <tr>
                                                        <th colspan="2">Désignation</th>
                                                        <th>Type</th>
                                                        <th>Immatriculation</th>
                                                        <th>Attribut</th>
                                                        <th>Energie/Puissance</th>
                                                        <th>Mise en circl.</th>
                                                        <th>Kilométrage</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($loues as $key => $vehicule) {
                                                        $vehicule->actualise(); ?>
                                                        <tr>
                                                            <td><img style="width: 50px;" src="<?= $this->image("vehicules", $vehicule->image) ?>"></td>
                                                            <td>
                                                                <a href="<?= $this->url("administration", "master", "vehicule", $vehicule->get_id()) ?>">
                                                                    <span><?= $vehicule->marque->name ?></span><br>
                                                                    <span><?= $vehicule->modele ?></span>
                                                                </a>
                                                            </td>
                                                            <td><?= $vehicule->typevehicule->name ?></td>
                                                            <td>
                                                                <span><?= $vehicule->immatriculation ?></span><br>
                                                                <span><?= $vehicule->couleur ?></span>
                                                            </td>
                                                            <td>
                                                                <span><?= $vehicule->nb_place ?> places</span><br>
                                                                <span><?= $vehicule->nb_porte ?> portes</span>
                                                            </td>
                                                            <td>
                                                                <span><?= $vehicule->energie->name ?></span><br>
                                                                <span><?= $vehicule->puissance ?> Chevaux</span>
                                                            </td>
                                                            <td><?= datecourt($vehicule->date_mise_circulation) ?></td>
                                                            <td><?= $vehicule->kilometrage ?> Km</td>
                                                        </tr>
                                                    <?php } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>


                                    <div class="tab-pane " id="pretes" role="tabpanel">
                                        <div class="">
                                           <table class="table table-hover table-striped liste">
                                                <thead class="bg-silver">
                                                    <tr>
                                                        <th colspan="2">Désignation</th>
                                                        <th>Type</th>
                                                        <th>Immatriculation</th>
                                                        <th>Attribut</th>
                                                        <th>Energie/Puissance</th>
                                                        <th>Mise en circl.</th>
                                                        <th>Kilométrage</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($pretes as $key => $vehicule) {
                                                        $vehicule->actualise(); ?>
                                                        <tr>
                                                            <td><img style="width: 50px;" src="<?= $this->image("vehicules", $vehicule->image) ?>"></td>
                                                            <td>
                                                                <a href="<?= $this->url("administration", "master", "vehicule", $vehicule->get_id()) ?>">
                                                                    <span><?= $vehicule->marque->name ?></span><br>
                                                                    <span><?= $vehicule->modele ?></span>
                                                                </a>
                                                            </td>
                                                            <td><?= $vehicule->typevehicule->name ?></td>
                                                            <td>
                                                                <span><?= $vehicule->immatriculation ?></span><br>
                                                                <span><?= $vehicule->couleur ?></span>
                                                            </td>
                                                            <td>
                                                                <span><?= $vehicule->nb_place ?> places</span><br>
                                                                <span><?= $vehicule->nb_porte ?> portes</span>
                                                            </td>
                                                            <td>
                                                                <span><?= $vehicule->energie->name ?></span><br>
                                                                <span><?= $vehicule->puissance ?> Chevaux</span>
                                                            </td>
                                                            <td><?= datecourt($vehicule->date_mise_circulation) ?></td>
                                                            <td><?= $vehicule->kilometrage ?> Km</td>
                                                        </tr>
                                                    <?php } ?>
                                                </tbody>
                                            </table>
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



<div class="modal fade" id="modal-location">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-orange">
                <h4 class="modal-title">Formulaire de location de véhicule</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <form method="POST" id="formLocation">
                <div class="modal-body">

                    <div class="row">
                        <div class="col-sm-4">
                            <label>Le fournisseur / concessionnaire <span1>*</span1></label>
                            <div class="form-group">
                                <?php Native\BINDING::html("select", "prestataire") ?>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <label>Date de début <span1>*</span1></label>
                            <div class="form-group">
                                <input type="date" class="form-control" name="started" required>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <label>Date de fin<span1>*</span1></label>
                            <div class="form-group">
                                <input type="date" class="form-control" name="finished" required>
                            </div>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col-sm-4">
                            <label>Montant de la location <span1>*</span1></label>
                            <div class="form-group">
                                <input type="number" class="form-control" name="price" required>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <label>Ajouter une note (motif ou but)</label>
                            <div class="form-group">
                             <textarea class="form-control" rows="4" name="comment" ></textarea>
                         </div><br>
                         <button type="button" class="btn btn-aqua btn-sm" data-toggle=modal data-target="#modal-vehicule"><i class="fa fa-car"></i> Ajouter un véhicule</button>
                     </div>                
                 </div>
                 <div class="">
                    <table class="table table-striped table-bordered">
                        <tbody>
                         <!-- rempli en ajax -->
                     </tbody>
                 </table>
             </div>

         </div><hr class="">
         <div class="container">
            <input type="hidden" name="id">
            <button type="button" class="btn btn-sm  btn-default" data-dismiss="modal"><i class="fa fa-close"></i> Annuler</button>
            <button class="btn btn-sm btn-success pull-right"><i class="fa fa-check"></i> Valider la location</button>
        </div>
        <br>
    </form>
</div>
</div>
</div>



<div class="modal fade" id="modal-vehicule">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-green">
                <h5 class="modal-title">Formuliare du véhicule</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <form method="POST" id="formVehicule">
                <div class="modal-body">

                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <label>Type du vehicule <span1>*</span1></label>
                            <div class="form-group">
                                <?php Native\BINDING::html("select", "typevehicule") ?>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <label>Choisir la marque<span1>*</span1></label>
                            <div class="form-group">
                                <?php Native\BINDING::html("select", "marque") ?>
                            </div>
                        </div>
                        <div class="col-md-5 col-sm-6">
                            <label>Le modèle du vehicule<span1>*</span1></label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="modele" required placeholder="Ex...BMW 362 X2">
                            </div>
                        </div>
                    </div><br>

                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <label>Immatriculation <span1>*</span1></label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="immatriculation" required>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <label>Type Energie <span1>*</span1></label>
                            <div class="form-group">
                                <?php Native\BINDING::html("select", "energie") ?>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-6">
                            <label>Puissance<span1>*</span1></label>
                            <div class="form-group">
                                <input type="number" class="form-control" min=1 value=1 name="puissance" required>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-6">
                            <label>nbr portes<span1>*</span1></label>
                            <div class="form-group">
                                <input type="number" class="form-control" name="nb_porte" min=1 value=1 required>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-6">
                            <label>nbr places<span1>*</span1></label>
                            <div class="form-group">
                                <input type="number" class="form-control" name="nb_place" min=1 value=1 required>
                            </div>
                        </div>
                    </div><br>

                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <label>Couleur <span1>*</span1></label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="couleur" required>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <label>kilomètre au compteur<span1>*</span1></label>
                            <div class="form-group">
                                <input type="number" class="form-control" name="kilometrage" min=0 value=0 required>
                            </div>
                        </div>

                        <div class="col-sm-4">

                        </div>
                    </div>

                </div><hr>
                <div class="container">
                    <input type="hidden" name="id">
                    <button type="button" class="btn btn-sm  btn-default" data-dismiss="modal"><i class="fa fa-close"></i> Annuler</button>
                    <button class="btn btn-sm btn-succes pull-right"><i class="fa fa-refresh"></i> Valider le formulaire</button>
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

                    <h2 class="subtitle italic mp0" style="font-size: 16px">LE bénéfiaicaire</h2> <hr>
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
                    <div class="text-center">
                        <button type="button" class="btn bg-aqua btn-sm" data-toggle=modal data-target="#modal-vehiculep"><i class="fa fa-car"></i> Choisir les véhicules à preter</button>
                    </div>
                </div><hr class="">
                <div class="container">
                    <input type="hidden" name="id">
                    <button type="button" class="btn btn-sm  btn-default" data-dismiss="modal"><i class="fa fa-close"></i> Annuler</button>
                    <button class="btn btn-sm btn-primary pull-right"><i class="fa fa-check"></i> Valider ce pret</button>
                </div>
                <br>
            </form>
        </div>
    </div>
</div>



<div class="modal fade" id="modal-vehiculep">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Choisir le(s) véhicule(s) </h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <form method="POST" id="formVehiculep">
                <div class="modal-body">
                 <div class="row">
                    <?php foreach (Home\VEHICULE::getAll() as $key => $vehicule) {
                        $vehicule->actualise();
                        $vehicule->etat(); ?>
                        <div class="col-md-4">
                            <div class="card cursor vehicule" id="<?= $vehicule->get_id() ?>" style="padding: 2%">
                                <div class="row">
                                    <div class="col-3">
                                        <img class="img-thumbnail" src="<?= $this->image("vehicules", $vehicule->image) ?>" style="width: 100%"> 
                                    </div>
                                    <div class="col-9">
                                        <h2 class="mp0 subtitle" style="font-size: 13px"><?= $vehicule->modele ?></h2>
                                        <div class="">
                                            <p class="m-b-0"><?= $vehicule->marque->name ?> // <?= $vehicule->couleur ?></p>
                                            <p class="text-muted m-b-0">Imm: <?= $vehicule->immatriculation ?></p>
                                            <p class="m-b-0"><label class="label label-<?= $vehicule->etatvehicule->class ?>"><?= $vehicule->etatvehicule->name ?></label></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div><hr class="">
            <div class="container">
                <input type="hidden" name="id" value="">
                <button type="button" class="btn btn-sm  btn-default" data-dismiss="modal"><i class="fa fa-close"></i> Annuler</button>
                <button class="btn btn-sm btn-success pull-right"><i class="fa fa-check"></i> Choix des véhicules</button>
            </div>
            <br>
        </form>
    </div>
</div>
</div>

<?php require("../../webapp/administration/assets/includes/footer.php") ?>


<style type="text/css">
    .activer{
        border: none;
        border: 2px orangered solid;
        border-radius: 5px;
        transition-duration: 0.2s;
    }
</style>

</body>

</html>
