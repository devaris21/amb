<!DOCTYPE html>
<html>

<?php include($this->rootPath("webapp/gestionnaire/elements/templates/head.php")); ?>


<body class="fixed-sidebar">

    <div id="wrapper">

        <?php include($this->rootPath("webapp/gestionnaire/elements/templates/sidebars/sidebar.php")); ?>  

        <div id="page-wrapper" class="gray-bg">

          <?php include($this->rootPath("webapp/gestionnaire/elements/templates/header.php")); ?>  

          <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-sm-5">
                <h2 class="text-uppercase">Les sinistres déclarés</h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.html">This is</a>
                    </li>
                    <li class="breadcrumb-item active">
                        <strong>Breadcrumb</strong>
                    </li>
                </ol>
            </div>
            <div class="col-sm-7">
               <div class="row">
                <div class="col-md-4">
                    <div class="widget style1 navy-bg">
                        <div class="row">
                            <div class="col-4">
                                <i class="fa fa-cloud fa-3x"></i>
                            </div>
                            <div class="col-8 text-right">
                                <span> Today degrees </span>
                                <h2 class="font-bold">26'C</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="widget style1 lazur-bg">
                        <div class="row">
                            <div class="col-4">
                                <i class="fa fa-envelope-o fa-3x"></i>
                            </div>
                            <div class="col-8 text-right">
                                <span> messages </span>
                                <h2 class="font-bold">260</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="widget style1 yellow-bg">
                        <div class="row">
                            <div class="col-4">
                                <i class="fa fa-music fa-3x"></i>
                            </div>
                            <div class="col-8 text-right">
                                <span> New albums </span>
                                <h2 class="font-bold">12</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="wrapper wrapper-content">
        <div class="ibox">
            <!-- <div class="ibox-title">
                <h5>Tous les sinistres déclarés</h5>
                <div class="ibox-tools">
                    <button style="margin-top: -3%;" data-toggle="modal" data-target="#modal-sinistre" class="btn btn-primary dim btn-xs"><i class="fa fa-plus"></i> Déclarer nouveau sinistre</button>
                </div>
            </div> -->
            <div class="ibox-content">
                <table class="table table-hover">
                    <tbody>
                        <?php foreach ($sinistres as $key => $sinistre) {
                            $sinistre->actualise(); ?>
                            <tr>
                                <td class="project-status">
                                    <span class="label label-primary">Active</span>
                                </td>
                                <td class="project-title">
                                    <h3 class="mp0"><?= $sinistre->name ?></h3>
                                    <h5 class="mp0"><?= $sinistre->typesinistre->name ?></h5>
                                </td>
                                <td class="project-title">
                                    <small>Survenu le <?= datecourt($sinistre->date_etablissement) ?></small>
                                    <h5 class="mp0"><?= $sinistre->lieudrame ?></h5>
                                </td>
                                <td class="project-title">
                                    <small>Conducteur</small>
                                    <h5 class="mp0"><?= $sinistre->auteur() ?></h5>
                                    <h5 class="mp0"><?= $sinistre->matricule ?></h5>
                                </td>
                            </td>
                            <!-- <td class="project-title">
                                <small><?= $sinistre->constat() ?></small>
                                <small><?= $sinistre->pompier() ?></small>
                            </td> -->
                            <td class="project-people">
                                <img alt="<?= $sinistre->name ?>" class="img-thumbnail cursor" onclick="openImage('<?= $this->stockage("images", "sinistres", $sinistre->image1) ?>')" style="height: 50px; width: 50px;" src="<?= $this->stockage("images", "sinistres", $sinistre->image1) ?>">
                                <img alt="<?= $sinistre->name ?>" class="img-thumbnail cursor" onclick="openImage('<?= $this->stockage("images", "sinistres", $sinistre->image2) ?>')" style="height: 50px; width: 50px;" src="<?= $this->stockage("images", "sinistres", $sinistre->image2) ?>">
                                <img alt="<?= $sinistre->name ?>" class="img-thumbnail cursor" onclick="openImage('<?= $this->stockage("images", "sinistres", $sinistre->image3) ?>')" style="height: 50px; width: 50px;" src="<?= $this->stockage("images", "sinistres", $sinistre->image3) ?>">
                            </td>
                            <td class="project-title">
                                <small><?= $sinistre->nomautre ?></small>
                                <h5 class="mp0"><?= $sinistre->vehiculeautre ?></h5>
                                <h5 class="mp0"><?= $sinistre->immatriculationautre ?></h5>
                            </td>
                            <td class="project-actions">
                                <button data-toggle="modal" data-target="#modal-sinistre"  onclick="modification('sinistre', <?= $sinistre->getId() ?>)" class="btn btn-white btn-sm"><i class="fa fa-pencil"></i> Modiifer </button>
                                <button class="btn btn-white btn-sm" onclick="suppressionWithPassword('sinistre', <?= $sinistre->getId(); ?>)"><i class="fa fa-close text-red"></i></button>
                            </td>
                        </tr>
                    <?php  } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


<?php include($this->rootPath("webapp/gestionnaire/elements/templates/footer.php")); ?>


</div>
</div>


<?php include($this->rootPath("webapp/gestionnaire/elements/templates/script.php")); ?>


</body>

</html>
