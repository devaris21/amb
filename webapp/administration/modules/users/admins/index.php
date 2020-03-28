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
                <h2 class="text-uppercase">les administrateurs systemes</h2>
                <div class="">
                    <button class="btn btn-xs dim btn-success" data-toggle="modal" data-target="#modal-admin"><i class="fa fa-plus"></i> Nouvel administrateur</button>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="widget style1 blue-bg">
                            <div class="row">
                                <div class="col-3">
                                    <i class="fa fa-users fa-3x"></i>
                                </div>
                                <div class="col-9 text-right">
                                    <span> Total des administrateurs </span>
                                    <h2 class="font-bold"><?= $a = start0(count(Home\ADMIN::getAll()))  ?></h2>
                                </div>
                            </div>
                        </div>
            </div>
        </div>

        <div class="wrapper wrapper-content">
            <div class="row">

                <?php foreach ($admins as $key => $admin) {
                   $admin->actualise() ?>

                   <div class="col-lg-3">
                    <div class="contact-box center-version">
                        <a href="profile.html">
                            <img alt="image" class="rounded-circle" src="<?= $this->stockage("images", "admins", $admin->image) ?>">
                            <br><strong>#<?= $admin->matricule ?></strong><br>
                            <h3 class="m-b-xs text-danger"><strong><?= $admin->name() ?></strong></h3>

                            <div class="font-bold text-danger">Admin système</div>
                            <address class="m-t-md">
                                <?= $admin->contact ?><br>
                                <?= $admin->email ?><br>
                                <?php if ($admin->is_new == 1) { ?>
                                    <label class="label label-success">Nouveau</label>
                                <?php } ?>
                            </address>
                        </a>
                        <div class="contact-box-footer ">
                            <?php if ($admin->is_allowed == 0) { ?>
                                    <label class="label label-danger">Bloqué</label>
                                <?php } ?>
                            <div class="m-t-xs btn-group">
                                <?php if ($admin->is_allowed == 1) { ?>
                                    <button onclick="lock('admin', <?= $admin->getId(); ?>)" class="btn btn-xs btn-white"><i class="fa fa-lock"></i> Bloquer</button>
                                <?php }else{ ?>
                                    <button onclick="unlock('admin', <?= $admin->getId(); ?>)" class="btn btn-xs btn-white"><i class="fa fa-unlock"></i> Debloquer</button>
                                <?php } ?>
                                <button onclick="suppressionWithPassword('admin', <?= $admin->getId(); ?>)" class="btn btn-xs btn-white"><i class="fa fa-close text-danger"></i> Supprimer</button>
                            </div>
                        </div>

                    </div>
                </div>

            <?php } ?>
        </div>
    </div>


    <?php include($this->rootPath("webapp/administration/elements/templates/footer.php")); ?>

    <?php include($this->rootPath("composants/assets/modals/modal-admin.php")); ?> 

</div>
</div>


<?php include($this->rootPath("webapp/administration/elements/templates/script.php")); ?>


</body>

</html>
