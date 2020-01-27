
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
                      <!-- statustic-card start -->
                      <div class="col-xl-3 col-md-6">
                        <div class="card bg-c-yellow text-white">
                            <div class="card-block">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <p class="m-b-5">Total des entretiens</p>
                                        <h4 class="m-b-0"><?= start0(count(Home\ENTRETIENVEHICULE::findBy(["etat_id !="=>-1]))) ?></h4>
                                    </div>
                                    <div class="col col-auto text-right">
                                        <i class="ti-paint-roller f-50 text-c-yellow"></i>
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
                                        <p class="m-b-5">Entretiens en cours</p>
                                        <h4 class="m-b-0"><?= start0(count(Home\ENTRETIENVEHICULE::findBy(["etat_id ="=>0]))) ?></h4>
                                    </div>
                                    <div class="col col-auto text-right">
                                        <i class="fa fa-gears f-50 text-c-green"></i>
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
                                        <p class="m-b-5">Dans cet mois</p>
                                        <h4 class="m-b-0"><?= start0(count(Home\ENTRETIENVEHICULE::findBy(["etat_id !="=>-1, "started >="=>date("Y-m")."-01"]))) ?></h4>
                                    </div>
                                    <div class="col col-auto text-right">
                                        <i class="fa fa-calendar f-50 text-c-pink"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- 
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-c-blue text-white">
                            <div class="card-block">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <p class="m-b-5">Indisponibles</p>
                                        <h4 class="m-b-0">6</h4>
                                    </div>
                                    <div class="col col-auto text-right">
                                        <i class="feather icon-shopping-cart f-50 text-c-blue"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>

                <div class="row container-fluid">
                    <button class="btn bg-green btn-sm pull-left" data-toggle="modal" data-target="#modal-entretien2"><i class="fa fa-plus"></i> Faire Nouvel entretien</button>
                </div><br>
                <div class="">
                    <div class="card">
                        <div class="card-body">
                            <table class="liste table table-hover table-bordered table-striped">
                                <thead class="bg-blue">
                                    <tr>
                                        <th>Désignation</th>
                                        <th colspan="2">Véhicule concerné</th>
                                        <th>Prestataire /Coût</th>
                                        <th>Durée entretien</th>
                                        <th>Etat</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($entretiens as $key => $entretien) {
                                        $entretien->actualise(); ?>
                                        <tr class="cursor" onclick="src('ENTR', 'entretiens', <?= $entretien->get_id(); ?>)">
                                            <td>
                                                <span class="gras italic text-uppercase"><?= $entretien->typeentretienvehicule->name ?></span><br>
                                                <span><?= $entretien->name ?></span>
                                            </td>
                                            <td><a href="<?= $this->url("administration", "master", "vehicule", $entretien->vehicule->get_id()) ?>"><img style="height: 40px;" src="<?= $this->image("vehicules", $entretien->vehicule->image) ?>" alt="placeholder+image"></a></td>
                                            <td>
                                                <span class="text-uppercase"><a href="<?= $this->url("administration", "master", "vehicule", $entretien->vehicule->get_id()) ?>"><?= $entretien->vehicule->modele ?></span></a><br>
                                                <span><?= $entretien->vehicule->marque->name ?> // <?= $entretien->vehicule->couleur ?></span>
                                            </td>
                                            <td>
                                                <span class="gras italic"><?= $entretien->prestataire->name ?></span><br>
                                                <span class="italic"><?= money($entretien->price) ?> <?= $params->devise ?></span>
                                            </td>
                                            <td> Du <?= datecourt($entretien->started) ?> <br> au <?= datecourt($entretien->finished) ?></td>
                                            <td><label class="label label-<?= $entretien->etat->class ?>"><?= $entretien->etat->name ?></label></td>
                                       <!--  <td>
                                            <button data-toggle=modal data-target="#modal-entretienvehicule" class="btn" onclick="modification('entretienvehicule', <?= $entretien->get_id() ?>)"><i class="fa fa-pencil text-blue"></i></button>
                                            <button class="btn btn" onclick="suppression('entretienvehicule', <?= $entretien->get_id() ?>)"><i class="fa fa-close text-red"></i></button>
                                        </td> -->
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
                </div>

                   <!--  <div class="col-md-3">
                        <div class="grid affichage" id="ENTR">
                           
                        </div>
                    </div> -->
<!-- 
                    <div class="col-md-4">
                        <h2 class="mp0 subtitle text-red"><i class="fa fa-plus"></i> déclarer Nouveau entretien </h2><br>
                        <div class="card">
                            <div class="card-body">
                                <form method="POST" id="formLivreur">
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-sm-5">
                                                <label>Votre nom <span1>*</span1></label>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="name" required>
                                                </div>
                                            </div>
                                            <div class="col-sm-5">
                                                <label>Votre prénom <span1>*</span1></label>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="lastname" required>
                                                </div>
                                            </div>
                                        </div><br>
                                        <div class="row">
                                            <div class="col-sm-5">
                                                <label>Adresse email <span1>*</span1></label>
                                                <div class="form-group">
                                                    <input type="email" class="form-control" name="email" required>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <label>Contact <span1>*</span1></label>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="contact" required>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <label style="margin-bottom: 3%">Selectionner un zone <span1>*</span1></label>
                                                <div class="form-group">
                                                    <?php Native\BINDING::html("select", "typevehicule"); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div><hr>
                                    <div class="container">
                                        <button type="button" class="btn btn-sm  btn-default" data-dismiss="modal"><i class="fa fa-close"></i> Annuler</button>
                                        <button class="btn btn-sm btn-primary pull-right"><i class="fa fa-check"></i> Ajouter ce livreur</button>
                                    </div>
                                    <br>
                                </form>
                            </div>
                        </div>
                    </div> -->
                </div>

            </div>
        </div>
    </div>
</div>
</div>
</div>


<?php require("../../webapp/administration/assets/includes/footer.php") ?>

</body>

</html>
