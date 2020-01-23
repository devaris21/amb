
<?php require( $this->path("../../../elements/templates/head.php") ) ?>

<!-- Stylesheets -->
<link rel="stylesheet" href="<?= $this->path("../../../assets/pages/multi-step-sign-up/css/reset.min.css") ?> ">
<link rel="stylesheet" href="<?= $this->path("../../../assets/pages/multi-step-sign-up/css/style.css") ?> ">

<body>


    <?php require $this->path("../../../elements/templates/preloader.php") ?>

    <br><br>
    <form id="msform" method="POST">
        <!-- fieldsets -->
        <fieldset style="width: 100%">
            <img class="logo" src="<?= $this->image("societe", "logo.png") ?>" style="height: 60px;" alt="le logo"><br>
            <br>
            <h2 class="fs-title gras text-uppercase">Espace d'administration</h2>
            <h3 class="fs-subtitle">Entrez vos informations de connexion</h3><br>
            <div class="text-left">
                <label>Identifiant <span>*</span></label>
                <div class="input-group">
                    <input type="text" class="form-control" name="login" required placeholder="Identifiant">
                </div>
            </div>
            <div class="text-left">
                <label>Mot de passe <span>*</span></label>
                <div class="input-group">
                    <input type="password" class="form-control" name="password" required placeholder="Mot de passe">
                </div>
            </div><br>
            <p><a href="<?= $this->url("administration", "access", "reset") ?>">Mot de passe oublié ?</a></p>
            <br><br>

            <div>
                <a type="reset" class="btn bg-grey btn-sm f-left" href="<?= $this->url("home", "access", "index") ?>"><i class="fa fa-close"></i> Annuler</a>
                <button class="btn btn-primary btn-sm f-right"><i class="fa fa-sign-in"></i> Se connecter</button>
            </div>
        </fieldset>
    </form>



    <div class="footer bg-inverse">
        <p class="text-center">Copyright &copy; 2019 Senergys-ci |  Votre espace d'Administration</p>
    </div>

    <?php require $this->path("../../../elements/templates/footer.php") ?>



    <div class="modal fade" id="modal-new">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header bg-green">
                    <h4 class="modal-title">Prémiere Connexion</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <form id="formNew" method="POST">
                    <br>
                    <div class="container text-center">
                        <p class="gras italic ">Bienvenue sur votre espace d'administration.<br> Pour plus de sécurité, vous devez changer vos paramètres de connexion pour que vous soyez le seul à les connaitre !</p>
                    </div>
                    <div class="modal-body">
                        <div>
                            <label>Nouveau login *</label>
                            <div class="form-group">
                                <input type="text" name="login" class="form-control" required>
                            </div>
                        </div>

                        <div>
                            <label>Nouveau mot de passe *</label>
                            <div class="form-group">
                                <input type="password" name="pass0" class="form-control" required>
                            </div>
                        </div>

                        <div>
                            <label>Confirmer le mot de passe *</label>
                            <div class="form-group">
                                <input type="password" name="pass" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-default" data-dismiss="modal"><i class="fa fa-close"></i> Annuler</button>
                        <button class="btn btn-sm btn-primary"><i class="fa fa-check"></i> Commencer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>
