
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
                <div class="pcoded-inner-content"><br><br><br>

                    <div class="row container-fluid">

                          <div class="col-md-3 col-sm-4">
                            <a href="<?= $this->url("administration", "parametres", "gestionnaires") ?>">
                                <div class="card user-widget-card bg-c-pink">
                                    <div class="card-block">
                                        <i class="fa fa-car bg-simple-c-pink card1-icon"></i>
                                        <h4>Gestionnaires</h4>
                                        <p class="cursor" data-toggle="modal" data-target="#modal-logo">Ajouter/Modifier/Supprimer</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        

                        <div class="col-md-3 col-sm-4">
                            <a href="<?= $this->url("administration", "parametres", "directions") ?>">
                                <div class="card user-widget-card bg-c-pink">
                                    <div class="card-block">
                                        <i class="feather icon-home bg-simple-c-pink card1-icon"></i>
                                        <h4>Les Directions</h4>
                                        <p class="cursor" data-toggle="modal" data-target="#modal-password">Ajouter/Modifier/Supprimer</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-3 col-sm-4">
                            <a href="<?= $this->url("administration", "parametres", "prestataires") ?>">
                                <div class="card user-widget-card bg-c-pink">
                                    <div class="card-block">
                                        <i class="fa fa-handshake-o bg-simple-c-pink card1-icon"></i>
                                        <h4>Les Prestataires</h4>
                                        <p class="cursor" data-toggle="modal" data-target="#modal-logo">Ajouter/Modifier/Supprimer</p>
                                    </div>
                                </div>
                            </a>
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
                        <label>Nouveau login<span1>*</span1></label>
                        <div class="form-group">
                            <input type="text" class="form-control" name="login" required>
                        </div>
                    </div>
                    <div class="">
                        <label>Mot de passe <span1>*</span1></label>
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



<div class="modal fade" id="modal-logo">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header bg-aqua">
                <h5 class="modal-title">Changer Mot de passe</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <form method="POST" id="formLogo">
                <div class="modal-body">

                    <div class="">
                        <label>Choisissez votre logo <span1>*</span1></label>
                        <div class="form-group">
                            <input type="file" class="form-control" name="logo" required>
                        </div>
                    </div>
                </div><hr>
                <div class="container">
                    <button type="button" class="btn btn-sm  btn-default" data-dismiss="modal"><i class="fa fa-close"></i> Annuler</button>
                    <button class="btn btn-sm btn-info pull-right"><i class="fa fa-refresh"></i> Mettre à jour mon logo</button>
                </div>
                <br>
            </form>
        </div>
    </div>
</div>





<div class="modal fade" id="modal-infos">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-purple">
                <h4 class="modal-title">Modifier les infos de la flotte</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <form method="POST" classname="entrepriselivreur" class="formShamman"  >
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <label>La raison sociale (votre nom) <span1>*</span1></label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" required>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <label>Contact <span1>*</span1></label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="contact" required>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <label>Contact 2<span1>*</span1></label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="contact2" required>
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
                        <div class="col-sm-5">
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
