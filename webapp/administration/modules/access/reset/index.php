<!DOCTYPE html>
<html>

<?php include($this->rootPath("webapp/administration/elements/templates/head.php")); ?>


<body class="gray-bg">

    <div class="passwordBox animated fadeInDown">
        <div class="row">

            <div class="col-md-12">
                <div class="ibox-content text-center">
<h1 class="logo-name text-center" style="font-size: 120px; margin: 0% !important; padding: 0% !important;">AMB</h1>
                    <h2 class="font-bold">J'ai oublié mon mot de passe</h2>

                    <p>Entrer votre adresse email pour reiniatialiser votre mot de passe !</p>

                    <div class="row">
                        <div class="col-lg-12">
                            <form class="m-t" id="resetForm" role="form" method="POST">
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Adresse email" required>
                                </div>

                                <button type="submit" class="btn btn-primary block full-width m-b">Reiniatialiser mon mot de passe</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr/>
        <div class="row">
            <div class="col-md-6">
                AMD, tous droits reservés
            </div>
            <div class="col-md-6 text-right">
             <small>© 2019-2020</small>
         </div>
     </div>
    </div>

</body>

</html>
