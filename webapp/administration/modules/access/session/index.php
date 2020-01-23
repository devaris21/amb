
<?php require $this->path("../../../elements/templates/head.php") ?>

<!-- Stylesheets -->
<link rel="stylesheet" href="<?= $this->path("../../../assets/pages/multi-step-sign-up/css/reset.min.css") ?> ">
<link rel="stylesheet" href="<?= $this->path("../../../assets/pages/multi-step-sign-up/css/style.css") ?> ">

<body>

 <?php require $this->path("../../../elements/templates/preloader.php") ?>

 <form id="msform">

    <!-- fieldsets -->
    <fieldset>
        <br>
        <img class="logo" src="<?= $this->image("societe", "logo.png") ?>" style="height: 40px" alt="logo de Quickly"><br>
        <h2 class="fs-title">Session vérouillée</h2>
        <h3 class="fs-subtitle">Votre session de connexion a été vérouillé pour inactivité et par mésure de sécurité !<br> Veuillez entrer votre mot de passe pour rouvrir la session...</h3>

        <div class="text-left">
            <label>Votre mot de passe</label>
            <div class="input-group">
                <input type="password" class="form-control" name="password" required placeholder="Entrez votre mot de passe">
            </div>
        </div>
        <br>
        <br><br>
        <div>
            <a href="<?= $this->url($this->section, "access", "logout"); ?>" class="btn btn-inverse btn-outline-inverse  f-left btn-sm"><i class="fa fa-sign-in"></i> Nouvelle session</a>
            <button class="btn btn-primary f-right btn-sm"><i class="fa fa-unlock"></i> Rouvrir la session</button>
        </div>
    </fieldset>
</form>


<div class="footer bg-inverse">
    <p class="text-center">Copyright &copy; 2019 GESTION PARC AUTO | XXXXX - Votre espace d'Administration</p>
</div>

<?php require $this->path("../../../elements/templates/footer.php") ?>

</body>

</html>
