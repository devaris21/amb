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
                <h2 class="text-uppercase">les carplans systemes</h2>
                <div class="">
                    <button class="btn btn-xs dim btn-success" data-toggle="modal" data-target="#modal-carplan"><i class="fa fa-plus"></i> Nouveau carplan</button>
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
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead class="bg-navy">
                            <tr>
                                <th></th>
                                <th>Matricule </th>
                                <th>Nom & prénoms </th>
                                <th>Fonction </th>
                                <th>Contact </th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>    
                            <?php foreach ($carplans as $key => $carplan) { ?>
                             <tr>
                                <td class=""><img style="width: 32px" src="<?= $this->stockage("images", "carplans", $carplan->image) ?>"></td>
                                <td class=""><b><?= $carplan->matricule ?></b>
                                    <?php if ($carplan->is_new == 1) { ?>
                                      <span style="display: inline-block;padding: 3px; background: #23C677; color: #fff; border-radius: 4px; float: right;">Nouveau</span>
                                    <?php } ?>
                                </td>
                                <td><b><?= $carplan->name() ?></b> <br><?= $carplan->matricule ?></td>
                                <td><?= $carplan->fonction ?></td>
                                <td><?= $carplan->contact ?></td>
                                <td><?= $carplan->email ?></td>
                                <td>
                                   <button data-toggle="modal" data-target="#modal-carplan" onclick="modification('carplan', <?= $carplan->getId() ?>)" class="btn btn-white btn-sm"><i class="fa fa-pencil text-green"></i> </button>
                                   <button class="btn btn-white btn-sm" onclick="suppressionWithPassword('carplan', <?= $carplan->getId(); ?>)"><i class="fa fa-close text-red"></i> </button>
                                   <?php if ($carplan->is_allowed != 0) { ?>
                                      <button  onclick="resetPassword('carplan', <?= $carplan->getId(); ?>)" style="cursor: default;" class="btn btn-xs btn-secondary"><i class="fa fa-refresh"></i> Reinitialiser</button>
                                  <?php } ?>
                               </td>
                           </tr> 
                       <?php } ?>
                   </tbody>
               </table>
           </div>
    </div>


    <?php include($this->rootPath("webapp/administration/elements/templates/footer.php")); ?>

    <?php include($this->rootPath("composants/assets/modals/modal-admin.php")); ?> 
    <?php include($this->rootPath("composants/assets/modals/modal-carplan.php")); ?>

</div>
</div>


<?php include($this->rootPath("webapp/administration/elements/templates/script.php")); ?>


</body>

</html>
