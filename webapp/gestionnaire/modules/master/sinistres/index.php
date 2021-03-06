<!DOCTYPE html>
<html>

<?php include($this->rootPath("webapp/gestionnaire/elements/templates/head.php")); ?>


<body class="fixed-sidebar">

    <div id="wrapper">

        <?php include($this->rootPath("webapp/gestionnaire/elements/templates/sidebars/sidebar.php")); ?>  

        <div id="page-wrapper" class="gray-bg">

          <?php include($this->rootPath("webapp/gestionnaire/elements/templates/header.php")); ?>  

          <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-sm-9">
                <h2 class="text-uppercase text-red gras">Les sinistres déclarés</h2>
                <div class="container">
                    <div class="row">
                        <div class="col-xs-7 gras ">Afficher tous les sinistres</div>
                        <div class="offset-1"></div>
                        <div class="col-xs-4">
                           <div class="switch">
                            <div class="onoffswitch">
                                <input type="checkbox" class="onoffswitch-checkbox" id="example1">
                                <label class="onoffswitch-label" for="example1">
                                    <span class="onoffswitch-inner"></span>
                                    <span class="onoffswitch-switch"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
         <div class="row">
            <div class="col-md-12">
                <div class="widget style1 red-bg">
                    <div class="row">
                        <div class="col-4">
                            <i class="fa fa-unlink fa-3x"></i>
                        </div>
                        <div class="col-8 text-right">
                            <span> Sinistres ce mois </span>
                            <h2 class="font-bold"><?= start0(count(Home\SINISTRE::valideesCeMois()))  ?></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="wrapper wrapper-content">
    <div class="ibox">
            <div class="ibox-title">
                <h5>Tous les sinistres déclarés</h5>
                <div class="ibox-tools">
                    <button style="margin-top: -5%;" data-toggle="modal" data-target="#modal-sinistre" class="btn btn-danger dim btn-xs"><i class="fa fa-plus"></i> Déclarer nouveau sinistre</button>
                </div>
            </div>
            <div class="ibox-content">
                <table class="table table-hover table-sinistre">
                    <tbody>
                        <?php foreach ($sinistres as $key => $sinistre) {
                            $sinistre->actualise(); ?>
                            <tr class=" <?= ($sinistre->etat_id != Home\ETAT::ENCOURS)?'fini':'' ?> border-bottom">
                                <td class="project-status">
                                    <span class="label label-<?= $sinistre->etat->class ?>"><?= $sinistre->etat->name ?></span>
                                </td>
                                <td class="project-title border-right" style="width: 50%;">
                                    <h3 class="mp0"><u class="text-info">#<?= $sinistre->ticket ?></u> // <?= $sinistre->typesinistre->name ?></h3>
                                    <h5 class="mp0">Survenu le <?= datecourt($sinistre->date_etablissement) ?> à <?= $sinistre->lieudrame ?></h5>
                                    <span><?= $sinistre->comment ?></span>
                                    <p> <small><?= $sinistre->constat() ?></small> // <small><?= $sinistre->pompier() ?></small></p>
                                    <div class="vote-info mp0">
                                      <i class="fa fa-clock-o"></i> 
                                      <?php if ($sinistre->etat_id == Home\ETAT::ANNULEE) { ?>
                                        <a href="#">Annulée <?= depuis($sinistre->date_approbation) ?></a>
                                    <?php }else if ($sinistre->etat_id == Home\ETAT::ENCOURS){ ?>
                                        <a href="#">Emise <?= depuis($sinistre->created) ?></a>
                                    <?php }else if ($sinistre->etat_id == Home\ETAT::VALIDEE){ ?>
                                        <a href="#">Approuvée <?= depuis($sinistre->date_approbation) ?></a>
                                    <?php } ?>
                                    <i class="fa fa-user"></i> <a href="#">Par <?= $sinistre->auteur() ?> - <?= $sinistre->matricule ?></a>
                                </div>
                            </td>
                            <td class="border-right">
                                <a class="row" style="color: black; margin-top: 10%" href="<?= $this->url("gestionnaire", "master", "vehicule", $sinistre->vehicule_id) ?>">
                                    <div class="col-4">
                                        <div class="text-center">
                                            <img alt="image" style="height: 40px;" class="m-t-xs" src="<?= $this->stockage("images", "vehicules", $sinistre->vehicule->image) ?>">
                                        </div>
                                    </div>
                                    <div class="col-8" style="font-size: 11px;">
                                        <h3 style="margin: 0"><strong><?= $sinistre->vehicule->immatriculation ?></strong></h3>
                                        <address>
                                            <strong><?= $sinistre->vehicule->marque->name ?></strong><br>
                                            <?= $sinistre->vehicule->modele ?>
                                        </address>
                                    </div>
                                </a><hr>
                                <div class="text-center">
                                  <img alt="" class="img-thumbnail cursor" onclick="openImage('<?= $this->stockage("images", "sinistres", $sinistre->image1) ?>')" style="height: 40px; width: 40px;" src="<?= $this->stockage("images", "sinistres", $sinistre->image1) ?>">
                                  <img alt="" class="img-thumbnail cursor" onclick="openImage('<?= $this->stockage("images", "sinistres", $sinistre->image2) ?>')" style="height: 40px; width: 40px;" src="<?= $this->stockage("images", "sinistres", $sinistre->image2) ?>">
                                  <img alt="" class="img-thumbnail cursor" onclick="openImage('<?= $this->stockage("images", "sinistres", $sinistre->image3) ?>')" style="height: 40px; width: 40px;" src="<?= $this->stockage("images", "sinistres", $sinistre->image3) ?>">
                              </div>
                          </td>
                          <td class="project-title">
                            <small>L'autre partie</small>
                            <h5><?= $sinistre->nomautre ?></h5>
                            <h5 class="mp0"><?= $sinistre->vehiculeautre ?></h5>
                            <h5 class="mp0"><?= $sinistre->immatriculationautre ?></h5>
                            <h5 class="mp0"><i class="fa fa-phone"></i> <?= $sinistre->contactautre ?></h5>
                            <h5 class="mp0"><i class="fa fa-bank"></i> <?= $sinistre->assuranceautre ?></h5>

                        </td>
                        <td class="project-actions">
                         <?php if ($sinistre->etat_id == Home\ETAT::ENCOURS) { ?>
                            <div class="btn-group btn-group-vertical">
                                <?php if ($sinistre->carplan_id == null) { ?>
                                 <button data-toggle="modal" data-target="#modal-sinistre"  onclick="modification('sinistre', <?= $sinistre->getId() ?>)" class="btn btn-white btn-sm"><i data-toggle="tooltip" title="Modifier les informations du sinistre" class="fa fa-pencil"></i> </button>
                             <?php } ?>                                
                             <button data-toggle="tooltip" title="Valider cette déclaration" class="btn btn-white btn-sm" onclick="validerSinistre(<?= $sinistre->getId(); ?>)"><i class="fa fa-check text-green"></i></button>
                             <button data-toggle="tooltip" title="Annuler cette déclaration" class="btn btn-white btn-sm" onclick="annulerSinistre(<?= $sinistre->getId(); ?>)"><i class="fa fa-close text-red"></i></button>
                         </div>
                     <?php } ?>
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
