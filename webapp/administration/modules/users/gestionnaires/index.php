<!DOCTYPE html>
<html>

<?php include($this->rootPath("webapp/administration/elements/templates/head.php")); ?>


<body class="fixed-sidebar">

    <div id="wrapper">

        <?php include($this->rootPath("webapp/administration/elements/templates/sidebar.php")); ?>  

        <div id="page-wrapper" class="gray-bg">

          <?php include($this->rootPath("webapp/administration/elements/templates/header.php")); ?>  

          <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-sm-9">
                <h2 class="text-uppercase">les gestionnaires du parc</h2>
                <div class="">
                    <button class="btn btn-xs dim btn-success" data-toggle="modal" data-target="#modal-gestionnaire"><i class="fa fa-plus"></i> Nouveau gestionnaire</button>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="widget style1 blue-bg">
                    <div class="row">
                        <div class="col-3">
                            <i class="fa fa-cloud fa-3x"></i>
                        </div>
                        <div class="col-9 text-right">
                            <span> Total personnel </span>
                            <h2 class="font-bold"><?= $a = start0(count(Home\CHAUFFEUR::getAll()))  ?></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="wrapper wrapper-content">
            <div class="row">

                <?php foreach ($gestionnaires as $key => $gestionnaire) {
                 $gestionnaire->actualise() ?>

                 <div class="col-lg-3">
                    <div class="contact-box center-version">
                        <a href="profile.html">
                            <img alt="image" class="rounded-circle" src="<?= $this->stockage("images", "gestionnaires", $gestionnaire->image) ?>">
                            <br><?php if ($gestionnaire->is_new == 1) { ?>
                                    <label class="label label-success">N</label>
                                <?php } ?> &nbsp;&nbsp;&nbsp;
                                <strong>#<?= $gestionnaire->matricule ?></strong><br>
                            <h3 class="m-b-xs"><strong><?= $gestionnaire->name() ?></strong></h3>

                            <div class="font-bold"><?= $gestionnaire->typegestionnaire->name() ?></div>
                            <address class="m-t-md">
                                <?= $gestionnaire->contact ?><br>
                                <?= $gestionnaire->email ?> <br>                               
                            </address>
                        </a>
                        <div class="contact-box-footer ">
                            <?php if ($gestionnaire->is_allowed == 0) { ?>
                                <label class="label label-danger">Bloqué</label>
                            <?php } ?>
                            <div class="m-t-xs btn-group">
                                                                <?php if ($gestionnaire->is_allowed == 1) { ?>
                                    <button onclick="lock('gestionnaire', <?= $gestionnaire->getId(); ?>)" class="btn btn-xs btn-white"><i class="fa fa-lock"></i> Bloquer</button>
                                <?php }else{ ?>
                                    <button onclick="unlock('gestionnaire', <?= $gestionnaire->getId(); ?>)" class="btn btn-xs btn-white"><i class="fa fa-unlock"></i> Debloquer</button>
                                <?php } ?>
                                <button onclick="suppressionWithPassword('gestionnaire', <?= $gestionnaire->getId(); ?>)" class="btn btn-xs btn-white"><i class="fa fa-close text-danger"></i> Supprimer</button>
                            </div>
                        </div>

                    </div>
                </div>

            <?php } ?>
        </div>
    </div>


    <?php include($this->rootPath("webapp/administration/elements/templates/footer.php")); ?>

    <?php include($this->rootPath("composants/assets/modals/modal-gestionnaire.php")); ?> 

</div>
</div>


<?php include($this->rootPath("webapp/administration/elements/templates/script.php")); ?>


</body>

</html>
