
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

                    <div class="row cntainer">
                        <div class="col-md-9">
                            <div class="card user-card-full">
                                <div class="row m-l-0 m-r-0">
                                    <div class="col-sm-12">
                                       <div class="card-block">
                                        <h6 class="text-aqua text-uppercase m-b-20 p-b-5 b-b-default f-w-600"><i class="fa fa-pencil"></i> Vos Informations <span onclick="modification('utilisateur', <?= $employe->get_id() ?>)" data-toggle=modal data-target="#modal-user" class="cursor pull-right"><i class="fa fa-pencil "></i> MODIFIER</span></h6>
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <p class="m-b-5 f-w-600">Votre Nom</p>
                                                <h6 class="text-muted f-w-400"><?= $employe->name() ?></h6>
                                            </div>
                                            <div class="col-sm-4">
                                                <p class="m-b-5 f-w-600">Niveau d'Administration</p>
                                                <h6 class="text-muted f-w-400"><?= $employe->typeadministrateur->name ?></h6>
                                            </div>
                                            <div class="col-sm-4">
                                                <p class="m-b-5 f-w-600">Login de connexion </p>
                                                <h6 class="text-muted f-w-400"><?= $employe->login ?></h6>
                                            </div>
                                        </div>
                                        <h6 class="text-aqua text-uppercase m-b-20 m-t-10 p-b-5 b-b-default f-w-600"><i class="fa fa-phone"></i> Infos de Contacts</h6>
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <p class="m-b-5 f-w-600">Contacts</p>
                                                <h6 class="text-muted f-w-400"><?= $employe->contact ?> / <?= $employe->contact2 ?></h6>
                                            </div>
                                            <div class="col-sm-4">
                                                <p class="m-b-5 f-w-600">Email</p>
                                                <h6 class="text-muted f-w-400"><?= $employe->email ?></h6>
                                            </div>
                                            <div class="col-sm-4">
                                                <p class="m-b-5 f-w-600">Situation Géographique</p>
                                                <h6 class="text-muted f-w-400"><?= $employe->adresse ?></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card user-widget-card bg-c-blue">
                            <div class="card-block">
                                <i class="fa fa-key bg-simple-c-blue card1-icon"></i>
                                <h4>Login de Connexion</h4>
                                <p class="cursor" data-toggle="modal" data-target="#modal-login" >Changer</p>
                            </div>
                        </div>

                        <div class="card user-widget-card bg-c-pink">
                            <div class="card-block">
                                <i class="fa fa-lock bg-simple-c-pink card1-icon"></i>
                                <h4>Mot de passe</h4>
                                <p class="cursor" data-toggle="modal" data-target="#modal-password" >Changer</p>
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




<div class="modal fade" id="modal-login">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header bg-red">
                <h5 class="modal-title">Changer mon login</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <form method="POST" id="formLogin">
                <div class="modal-body">
                    <div class="">
                        <label>Votre nouveau login<span1>*</span1></label>
                        <div class="form-group">
                            <input type="text" class="form-control" name="login" required>
                        </div>
                    </div>
                    <div class="">
                        <label>Mot de passe pour confirmer le changement <span1>*</span1></label>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" required>
                        </div>
                    </div>
                </div><hr>
                <div class="container">
                    <button type="button" class="btn btn-sm  btn-default" data-dismiss="modal"><i class="fa fa-close"></i> Annuler</button>
                    <button class="btn btn-sm btn-danger pull-right"><i class="fa fa-refresh"></i> Changer mon login</button>
                </div>
                <br>
            </form>
        </div>
    </div>
</div>




<div class="modal fade" id="modal-password">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header bg-red">
                <h5 class="modal-title">Changer Mot de passe</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <form method="POST" id="formPass">
                <div class="modal-body">

                    <div class="">
                        <label>Votre mot de passe actuel <span1>*</span1></label>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password0" required>
                        </div>
                    </div>
                    <div class="">
                        <label>Nouveau mot de passe <span1>*</span1></label>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" required>
                        </div>
                    </div>
                    <div class="">
                        <label>Confirmer le mot de passe <span1>*</span1></label>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password1" required>
                        </div>
                    </div>
                </div><hr>
                <div class="container">
                    <button type="button" class="btn btn-sm  btn-default" data-dismiss="modal"><i class="fa fa-close"></i> Annuler</button>
                    <button class="btn btn-sm btn-danger pull-right"><i class="fa fa-refresh"></i> Changer le mot de passe</button>
                </div>
                <br>
            </form>
        </div>
    </div>
</div>




<div class="modal fade" id="modal-user">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-purple">
                <h4 class="modal-title">Modifier vos informations</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <form method="POST" classname="utilisateur" class="shamman-form"  >
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-4">
                            <label>Nom <span1>*</span1></label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" required>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <label>Prenom <span1>*</span1></label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="lastname" required>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <label>Email <span1>*</span1></label>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" required>
                            </div>
                        </div>
                    </div><br>
                    <div class="row">

                        <div class="col-sm-4">
                            <label>Contact <span1>*</span1></label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="contact" required>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <label>Contact 2<span1>*</span1></label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="contact2" required>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <label>Situation geographique <span1>*</span1></label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="adresse" required>
                            </div>
                        </div>
                    </div>
                </div><hr>
                <div class="container">
                    <input type="hidden" name="id">
                    <button type="button" class="btn btn-sm  btn-default" data-dismiss="modal"><i class="fa fa-close"></i> Annuler</button>
                    <button class="btn btn-sm btn-primary pull-right"><i class="fa fa-check"></i> Mettre à jour</button>
                </div>
                <br>
            </form>
        </div>
    </div>
</div>


<?php require("../../webapp/administration/assets/includes/footer.php") ?>


</body>

</html>
