<!DOCTYPE html>
<html>

<?php include($this->rootPath("webapp/administration/elements/templates/head.php")); ?>


<body class="fixed-sidebar">

    <div id="wrapper">

        <?php include($this->rootPath("webapp/administration/elements/templates/sidebar.php")); ?>  

        <div id="page-wrapper" class="gray-bg">

            <?php include($this->rootPath("webapp/administration/elements/templates/header.php")); ?>  

            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-sm-6">
                    <h2 class="text-uppercase text-red gras">Suggestions - <br> retour sur utilisation</h2>
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-7 gras text-capitalize">Afficher seulement les suggestions en cours</div>
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
            <div class="col-sm-6">
                <div class="row">
                    <div class="col-md-6">
                        <div class="widget style1 navy-bg">
                            <div class="row">
                                <div class="col-4">
                                    <i class="fa fa-wpbeginner fa-3x"></i>
                                </div>
                                <div class="col-8 text-right">
                                    <span>Déclaration en cours </span>
                                    <h2 class="font-bold"><?= start0(count(Home\SINISTRE::encours()))  ?></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="widget style1 lazur-bg">
                            <div class="row">
                                <div class="col-4">
                                    <i class="fa fa-car fa-3x"></i>
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
            <div class="animated fadeInRightBig">

              <div class="row">
                <div class="col-md-12">

                    <div class="ibox">
                        <div class="ibox-title">
                            <h5>Listes des bénéficiaires de Carplan</h5>
                        </div>
                        <div class="ibox-content">
                            <div class="table-responsive">
                                <table class="table table-striped table-suggestion">
                                    <tbody>
                                        <?php foreach ($suggestions as $key => $suggestion) {
                                            $suggestion->actualise();
                                            ?>
                                            <tr class=" <?= ($suggestion->etat_id == 0)?'encours':'' ?> border-bottom" >    
                                                <td class="project-status">
                                                    <span class="label label-<?= $suggestion->etat->class ?>"><?= $suggestion->etat->name ?></span>
                                                </td>                                            
                                                <td width="80">
                                                    <h1 style="font-size: 50px;"><?= $suggestion->emoji()  ?></h1>
                                                </td>
                                                <td class="border-right">
                                                    <h3 class="mp0"><u class="text-info">#<?= $suggestion->ticket ?></u> // <?= $suggestion->title ?></h3>
                                                    <h5><?= $suggestion->description ?></h5>
                                                    <div class="m-t-sm">
                                                        <span class="">Par <?= $suggestion->auteur() ?></span><br>
                                                        <span class="gras text-uppercase"><?= $suggestion->typesuggestion->name ?></span> | |
                                                        <a href="#" class="text-muted"><i class="fa fa-calendar"></i> Le <?= datecourt($suggestion->created) ?></a>
                                                    </div>
                                                </td>
                                                <td class="" style="min-width: 100px">
                                                    <?php if ($suggestion->etat_id == 0) { ?>

                                                        <button onclick="validerEtat('suggestion', <?= $suggestion->getId() ?>)" data-toggle="modal" data-target="#modal-suggestion" class="btn btn-outline btn-<?= $suggestion->etat->class ?>  btn-xs dim" type="button"><i data-toggle="tooltip" title="Modifier les infos de l'suggestion" class="fa fa-check"></i> Ok, compris !</button>
                                                    <?php }else{ ?>
                                                        <button data-toggle="tooltip" title="Renouveler l'suggestion" class="btn btn-outline btn-primary dim" type="button"><?= $suggestion->etat->name ?> <i class="fa fa-check"></i></button>
                                                    <?php } ?>
                                                    
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>


        </div>
    </div>


    <?php include($this->rootPath("webapp/administration/elements/templates/footer.php")); ?>



</div>
</div>


<?php include($this->rootPath("webapp/administration/elements/templates/script.php")); ?>


</body>

</html>
