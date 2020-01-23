
<?php require $this->path("../../../elements/templates/head.php"); ?>

<!-- Stylesheets -->
<link rel="stylesheet" href="<?= $this->path("../../../assets/pages/multi-step-sign-up/css/reset.min.css") ?> ">
<link rel="stylesheet" href="<?= $this->path("../../../assets/pages/multi-step-sign-up/css/style.css") ?> ">

<body>

    <?php require $this->path("../../../elements/templates/preloader.php"); ?>

    <form id="msform">

        <!-- fieldsets -->
        <fieldset style="width: 100%">
            <img class="logo" src="<?= $this->image("societe", "logo.png") ?>" alt="le logo" style="height: 60px">
            <h2 class="fs-title">Mot de passe oublié ?</h2>
            <h3 class="fs-subtitle">Vous avez des soucis de connexion ou vous avez simplement oublié votre identifiant et/ou votre mot de passe de connexion ?<br><br> Veuillez Entrez votre <b>email d'inscription</b> et nous vous enverrons un mail pour <b>reinitailiser vos paramètres de connexion</b> !</h3><br>

            <div class="text-left">
                <label>Votre adresse email</label>
                <div class="input-group">
                    <input type="email" class="form-control" required name="email" placeholder="Votre adresse email">
                </div>
            </div>
            <br><br>

            <div>
                <a href="<?= $this->url("administration", "access", "login") ?>" class="btn btn-inverse btn-outline-inverse f-left btn-sm"><i class="fa fa-close"></i> Annuler</a>
                <button class="btn btn-primary f-right btn-sm" value="submit"><i class="fa fa-sign-in"></i> Renvoyer mes informations</button>
            </div>
        </fieldset>
    </form>


    <div class="footer bg-inverse">
        <p class="text-center">Copyright &copy; 2019 GESTION PARC AUTO | XXXXX - Votre espace d'Administration</p>
    </div>

    <?php require $this->path("../../../elements/templates/footer.php"); ?>
</body>

</html>
