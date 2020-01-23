
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
                                                <p class="m-b-5">Effectif Total</p>
                                                <h4 class="m-b-0"><?= start0(count(Home\PRESTATAIRE::getAll())) ?></h4>
                                            </div>
                                            <div class="col col-auto text-right">
                                                <i class="fa fa-handshake-o f-50 text-c-yellow"></i>
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
                                                <p class="m-b-5">Nbr Catégories</p>
                                                <h4 class="m-b-0"><?= start0(count(Home\TYPEVEHICULE::getAll())) ?></h4>
                                            </div>
                                            <div class="col col-auto text-right">
                                                <i class="fa fa-clone f-50 text-c-green"></i>
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
                                                <p class="m-b-5">Produits Prescrits</p>
                                                <h4 class="m-b-0"><?= start0(count(Home\PRODUIT::getAll())) ?></h4>
                                            </div>
                                            <div class="col col-auto text-right">
                                                <i class="fa fa-cubes f-50 text-c-pink"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-c-blue text-white">
                                    <div class="card-block">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <p class="m-b-5">Ajoutés ce mois</p>
                                                <h4 class="m-b-0"><?= start0(count(Home\PRESTATAIRE::findBy(["created >="=>date("Y-m-"."01")]))) ?></h4>
                                            </div>
                                            <div class="col col-auto text-right">
                                                <i class="fa fa-calendar f-50 text-c-blue"></i>
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
                                            <a class="nav-link" data-toggle="tab" href="#prestataires" role="tab">Tous les prestataires <span class="badge bg-aqua"><?= start0(count($prestataires)) ?></span></a>
                                            <div class="slide"></div>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#types" role="tab">Les types de prestataires <span class="badge bg-aqua"><?= start0(count($types)) ?></span></a>
                                            <div class="slide"></div>
                                        </li>

                                        
                                    </ul>

                                    <div class="tab-content card-block">

                                        <div class="tab-pane " id="prestataires" role="tabpanel">
                                            <div class="row container">
                                                <button data-toggle="modal" data-target="#modal-prestataire" class="btn btn-sm btn-grd-success btn-round float-right btn_modal"><i class="fa fa-plus"></i> Ajouter un nouveau prestataire</button>
                                            </div><br>
                                            <div class="row">
                                               <table class="table table-hover table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>Nom & Prénoms</th>
                                                        <th>Adresse</th>
                                                        <th>Email</th>
                                                        <th>Contacts</th>
                                                        <th>Login</th>
                                                        <th>Mot de passe</th>
                                                        <th colspan="2"></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($prestataires as $key => $prestataire) {
                                                        $prestataire->actualise(); ?>
                                                        <tr>
                                                            <td>
                                                                <span class="gras text-uppercase"><?= $prestataire->name ?></span><br>
                                                                <span><?= $prestataire->typeprestataire->name ?></span>
                                                            </td>
                                                            <td><?= $prestataire->adresse ?></td>
                                                            <td><a href="mailto:<?= $prestataire->email ?>"><?= $prestataire->email ?></a></td>
                                                            <td><?= $prestataire->contact ?> / <?= $prestataire->contact2 ?></td>
                                                            <td><?= ($prestataire->is_new == 0)?'***********':$prestataire->login ?></td>
                                                            <td><?= ($prestataire->is_new == 0)?'***********':"21ju195mer5artci" ?></td>
                                                            <td class="cursor" data-toggle="modal" data-target="#modal-prestataire" onclick="modification('prestataire', <?= $prestataire->get_id() ?>)"><i class="fa fa-pencil text-blue"></i></td>
                                                            <td class="cursor" onclick="suppression_with_password('prestataire', <?= $prestataire->get_id() ?>)"><i class="fa fa-close text-red"></i></td>
                                                        </tr>
                                                    <?php } ?>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>


                                    <div class="tab-pane " id="types" role="tabpanel">
                                        <div class="row container">
                                            <button data-toggle="modal" data-target="#modal-type" class="btn btn-sm btn-grd-danger btn-round float-right btn_modal"><i class="fa fa-plus"></i> Ajouter un nouveau type</button>
                                        </div><br>
                                        <div class="row">
                                           <div class="col-md-5">
                                               <table class="table table-hover table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>Types de prestations</th>
                                                        <th colspan="2"></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($types as $key => $type) {
                                                        $type->actualise(); ?>
                                                        <tr>
                                                            <td><?= $type->name ?></td>
                                                            <td class="cursor" data-toggle="modal" data-target="#modal-type" onclick="modification('typeprestataire', <?= $type->get_id() ?>)"><i class="fa fa-pencil text-blue"></i></td>
                                                            <td class="cursor" onclick="suppression_with_password('typeprestataire', <?= $type->get_id() ?>)"><i class="fa fa-close text-red"></i></td>
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
</div>


<div class="modal fade" id="modal-type">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header bg-green">
                <h5 class="modal-title">Type de prestataires</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <form method="POST" class="shamman-form" classname="typeprestataire">
                <div class="modal-body">
                    <div class="">
                        <label>Type de prestataire<span1>*</span1></label>
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" required>
                        </div>
                    </div>
                </div><hr>
                <div class="container">
                    <input type="hidden" name="id">
                    <button type="button" class="btn btn-sm  btn-default" data-dismiss="modal"><i class="fa fa-close"></i> Annuler</button>
                    <button class="btn btn-sm btn-success pull-right"><i class="fa fa-check"></i> Valider</button>
                </div>
                <br>
            </form>
        </div>
    </div>
</div>


<?php require("../../webapp/home/elements/modals/modal-prestataire.php") ?>


<?php require("../../webapp/administration/assets/includes/footer.php") ?>

</body>

</html>
