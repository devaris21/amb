<!DOCTYPE html>
<html>

<?php include($this->rootPath("webapp/gestionnaire/elements/templates/head.php")); ?>


<body class="fixed-sidebar">

    <div id="wrapper">

        <?php include($this->rootPath("webapp/gestionnaire/elements/templates/sidebars/sidebar.php")); ?>  

        <div id="page-wrapper" class="gray-bg">

          <?php include($this->rootPath("webapp/gestionnaire/elements/templates/header.php")); ?>  

          <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-sm-7">
                <h2 class="text-uppercase">Les missions</h2>
                <div class="container">
                    <div class="row">
                        <div class="col-xs-7 gras text-capitalize">Afficher toutes les missions</div>
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
        <div class="col-sm-5">
            <div class="row">
                <div class="col-sm-6">
                    <div class="widget style1 lazur-bg">
                        <div class="row">
                            <div class="col-12 text-right">
                                <span> Débutées ce mois </span>
                                <h2 class="font-bold"><?= start0(count(Home\MISSION::commencerCeMois()))  ?></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="widget style1 yellow-bg">
                        <div class="row">
                            <div class="col-12 text-right">
                                <span> Annulées ce mois</span>
                                <h2 class="font-bold"><?= start0(count(Home\MISSION::annuleesCeMois()))  ?></h2>
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
                <h5>Toutes les missions </h5>
                <!-- <div class="ibox-tools">
                    <a href="" class="btn btn-primary btn-xs">Create new project</a>
                </div> -->
            </div>
            <div class="ibox-content">
                <table class="table table-hover">
                    <tbody>
                        <?php foreach ($missions as $key => $mission){
                            $mission->actualise();  ?>
                            <tr class=" <?= ($mission->etat_id != Home\ETAT::ENCOURS)?'fini':'' ?> border-bottom">
                                <td class="project-status">
                                    <span class="label label-<?= $mission->etat->class ?>"><?= $mission->etat->name ?></span>
                                </td>
                                <td class="project-title border-right" style="width: 48%;">
                                    <h3 class="mp0"><u class="text-info">#<?= $mission->reference ?></u> // <?= $mission->objet ?></h3>
                                    <h5 class="mp0"><?= $mission->lieu ?></h5>
                                    <span><?= $mission->comment ?></span><br><br>
                                    <u><?= $mission->demandevehicule->typedemandevehicule->name() ?></u><br>
                                    <a href="#"><i class="fa fa-clock-o"></i> Du <?= depuis($mission->started) ?> au <?= depuis($mission->finished) ?></a> <br>
                                    <div class="vote-info mp0">
                                        <i class="fa fa-bank"></i> <a href="#">Par <?= $mission->departement->name() ?></a>
                                    </div>
                                </td>
                                <td class="project-completion">
                                    <small>Carburant</small><br>
                                    <span><?= $mission->carburant ?> Litres</span><br>
                                    <small>Dotation</small><br>
                                    <span><?= money($mission->dotation) ?> <?= $params->devise ?></span>
                                </td>
                                <td class="border-right">
                                    <a class="row" style="color: black; margin-top: 3%" href="<?= $this->url("gestionnaire", "master", "vehicule", $mission->demandevehicule->vehicule_id) ?>">
                                        <div class="col-4">
                                            <div class="text-center">
                                                <img alt="image" style="height: 40px;" class="m-t-xs" src="<?= $this->stockage("images", "vehicules", $mission->demandevehicule->vehicule->image) ?>">
                                            </div>
                                        </div>
                                        <div class="col-8" style="font-size: 11px;">
                                            <h3 style="margin: 0"><strong><?= $mission->demandevehicule->vehicule->immatriculation ?></strong></h3>
                                            <address>
                                                <strong><?= $mission->demandevehicule->vehicule->marque->name ?></strong><br>
                                                <?= $mission->demandevehicule->vehicule->modele ?>
                                            </address>
                                        </div>
                                    </a><hr>
                                    <?php if ($mission->demandevehicule->with_chauffeur == 1) { ?>
                                        <div class="contact-box cursor" style="padding: 2px;">
                                            <div class="row">
                                                <div class="col-3">
                                                    <div class="text-center">
                                                        <img alt="image" style="height: 40px;" class="m-t-xs" src="<?= $this->stockage("images", "chauffeurs", $mission->demandevehicule->chauffeur->image) ?>">
                                                    </div>
                                                </div>
                                                <div class="col-9">
                                                    <h4 style="margin: 0"><strong><?= $mission->demandevehicule->chauffeur->name();  ?></strong></h4>
                                                    <span>Permis <?= $mission->demandevehicule->chauffeur->typepermis;  ?></span>
                                                </div>
                                            </div>
                                        </div>
                                    <?php }else{ ?>
                                        <p>// Pas de chauffeur</p>
                                    <?php } ?>
                                </td>
                                <td class="project-actions">
                                   <button onclick="terminer(<?= $mission->getId(); ?>)" class="btn btn-white btn-sm"><i class="fa fa-check text-green"></i> Terminer </button>
                                   <button class="btn btn-white btn-sm" data-toggle=tooltip title="Annuler la mission" onclick="annuler(<?= $mission->getId(); ?>)"><i class="fa fa-close text-red"></i></button>
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
