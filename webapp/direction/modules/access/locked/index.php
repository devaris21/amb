<!DOCTYPE html>
<html>

<?php include($this->rootPath("webapp/carplan/elements/templates/head.php")); ?>


<body class="gray-bg">

<div style="margin-top: 5%;"></div>
    <div class="container text-center animated fadeInDown">
       <h1 class="logo-name text-uppercase" style="font-size: 90px; margin: 0% !important; padding: 0% !important;">session vérouillée</h1>

        <div class="middle-box">
            <div class="m-b-md">
            <img alt="image" style="width: 120px" class="rounded-circle circle-border" src="<?= $this->stockage("images", "societe", "avatar.png") ?>">
            </div>
            <h3>John Smith</h3>
            <p>Votre session a été vérouillée pour inactivité. Veuillez renseigner votre mot de passe pour retourner à l'application !</p>
            <form class="m-t" role="form" id="lockedForm" method="POST">
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Votre mot de passe" required>
                </div>
                <button type="submit" class="btn btn-primary block full-width">Dévérouiller ma session</button>
            </form>
        </div>
    </div>

    <?php include($this->rootPath("webapp/carplan/elements/templates/script.php")); ?>


</body>

</html>
