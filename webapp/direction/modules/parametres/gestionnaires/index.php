
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
                                                <h4 class="m-b-0"><?= start0(count(Home\GESTIONNAIRE::getAll())) ?></h4>
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
                                                <p class="m-b-5">Administrateurs</p>
                                                <h4 class="m-b-0"><?= start0(count(Home\GESTIONNAIRE::findBy(["typeadministrateur_id >="=>3]))) ?></h4>
                                            </div>
                                            <div class="col col-auto text-right">
                                                <i class="fa fa-clone f-50 text-c-green"></i>
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
                                                <h4 class="m-b-0"><?= start0(count(Home\GESTIONNAIRE::findBy(["created >="=>date("Y-m-"."01")]))) ?></h4>
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
                                            <a class="nav-link active" data-toggle="tab" href="#gestionnaires" role="tab">Tous les gestionnaires internes</a>
                                            <div class="slide"></div>
                                        </li>                                        
                                    </ul>

                                    <div class="tab-content card-block">

                                        <div class="tab-pane active" id="gestionnaires" role="tabpanel">
                                            <div class="row container">
                                                <button data-toggle="modal" data-target="#modal-gestionnaire" class="btn btn-sm btn-grd-success btn-round float-right btn_modal"><i class="fa fa-plus"></i> Ajouter un nouveau gestionnaire</button>
                                            </div><br>
                                            <div class="row">
                                                <table class="table table-hover table-striped table-bordered">
                                                    <thead class="bg-green">
                                                        <tr>
                                                            <th>Nom & Prénoms</th>
                                                            <th colspan="2">Type</th>
                                                            <th>Adresse</th>
                                                            <th>Email</th>
                                                            <th>Contacts</th>
                                                            <th colspan="2"></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php foreach ($gestionnaires as $key => $gestionnaire) {
                                                            $gestionnaire->actualise(); ?>
                                                            <tr>
                                                                <td class="gras"><?= $gestionnaire->name ?> <?= $gestionnaire->lastname ?></td>
                                                                <td class="gras"><?= $gestionnaire->typeadministrateur->name ?></td>
                                                               <td class="cursor" onclick="changer(<?= $gestionnaire->getId() ?>)"><i class="fa fa-refresh text-blue"></i></td>
                                                                <td><?= $gestionnaire->adresse ?></td>
                                                                <td><a href="mailto:<?= $gestionnaire->email ?>"><?= $gestionnaire->email ?></a></td>
                                                                <td><?= $gestionnaire->contact ?> / <?= $gestionnaire->contact2 ?></td>
                                                                <td class="cursor" data-toggle="modal" data-target="#modal-gestionnaire" onclick="modification('gestionnaire', <?= $gestionnaire->getId() ?>)"><i class="fa fa-pencil text-blue"></i></td>
                                                                <td class="cursor" onclick="suppression_with_password('gestionnaire', <?= $gestionnaire->getId() ?>)"><i class="fa fa-close text-red"></i></td>
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



<div class="modal fade" id="modal-gestionnaire">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-green">
                <h5 class="modal-title">Formuliare du gestionnaire</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <form method="POST" class="formShamman" classname="gestionnaire">
                <div class="modal-body">

                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <label>Nom <span1>*</span1></label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" required>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <label>Prenom <span1>*</span1></label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="lastname" required>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <label>Situation géographique <span1>*</span1></label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="adresse" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <label>Adresse email <span1>*</span1></label>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" required>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <label>Contact <span1>*</span1></label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="contact" required>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <label>Contact 2 </label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="contact2">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4 col-sm-6 unmodified">
                            <label>Type de gestionnaire <span1>*</span1></label>
                            <div class="form-group">
                               <?php Native\BINDING::html("select", "typeadministrateur"); ?>
                            </div>
                        </div>
                    </div>
                </div><hr>
                <div class="container">
                    <input type="hidden" name="id">
                    <button type="button" class="btn btn-sm  btn-default" data-dismiss="modal"><i class="fa fa-close"></i> Annuler</button>
                    <button class="btn btn-sm bg-green pull-right"><i class="fa fa-refresh"></i> Valider le formulaire</button>
                </div>
                <br>
            </form>
        </div>
    </div>
</div>




<?php require("../../webapp/administration/assets/includes/footer.php") ?>

</body>

</html>
