<!DOCTYPE html>
<html>

<?php include($this->rootPath("webapp/gestionnaire/elements/templates/head.php")); ?>


<body class="fixed-sidebar">

    <div id="wrapper">

        <?php include($this->rootPath("webapp/gestionnaire/elements/templates/sidebars/sidebar.php")); ?>  

        <div id="page-wrapper" class="gray-bg">

          <?php include($this->rootPath("webapp/gestionnaire/elements/templates/header.php")); ?>  

          <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-sm-6">
                <h2 class="text-uppercase">Departements & responsables</h2>
                <div>
                    <button data-toggle="modal" data-target="#modal-departement" class="btn btn-primary btn-xs dim"><i class="fa fa-plus"></i> Nouveau departemment</button>
                    <button data-toggle="modal" data-target="#modal-utilisateur" class="btn btn-primary btn-xs dim"><i class="fa fa-plus"></i> Nouveau responsable</button>
                </div>
            </div>
            <div class="col-sm-6">
                 <div class="row">
                    <div class="col-sm-6">
                        <div class="widget style1 lazur-bg">
                            <div class="row">
                                <div class="col-3">
                                    <i class="fa fa-cloud fa-3x"></i>
                                </div>
                                <div class="col-9 text-right">
                                    <span> Total départements </span>
                                    <h2 class="font-bold"><?= start0(count(Home\DEPARTEMENT::getAll()))  ?></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                                         <div class="col-sm-6">
                        <div class="widget style1 yellow-bg">
                            <div class="row">
                                <div class="col-12 text-right">
                                    <span> Total responsables</span>
                                    <h2 class="font-bold"><?= start0(count(Home\UTILISATEUR::getAll()))  ?></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="wrapper wrapper-content">
            <div class="animated fadeInRightBig">
                <div class="tabs-container">
                    <div class="tabs-left">
                        <ul class="nav nav-tabs text-center">
                            <?php foreach ($departements as $key => $dep) { ?>
                                <li style="width: 100%;"><a class="nav-link" data-toggle="tab" href="#dep-<?= $dep->getId() ?>"> <?= $dep->sigle ?><br> <?= $dep->name ?><br>
                                    <div class="btn-group">
                                        <button data-toggle="modal" data-target="#modal-departement" onclick="modification('departement', <?= $dep->getId() ?>)" class="btn btn-white btn-sm"><i class="fa fa-pencil"></i></button>
                                        <button onclick="suppressionWithPassword('departement', <?= $dep->getId() ?>)" class="btn btn-white btn-sm"><i class="fa fa-close text-red"></i> </button>
                                    </div>
                                </a>
                            </li>
                        <?php } ?>
                    </ul>
                    <div class="tab-content" id="deps">
                       <?php foreach ($departements as $key => $dep) {
                        $dep->fourni("utilisateur");
                        ?>
                        <div id="dep-<?= $dep->getId() ?>" class="tab-pane">
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead class="bg-navy">
                                            <tr>
                                                <th></th>
                                                <th>Nom & prénoms </th>
                                                <th>Fonction </th>
                                                <th>Contact </th>
                                                <th>Email</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>    
                                            <?php foreach ($dep->utilisateurs as $key => $user) { ?>
                                             <tr>
                                                <td class=""><img style="width: 32px" src="<?= $this->stockage("images", "utilisateurs", $user->image) ?>"></td>
                                                <td><b><?= $user->name() ?></b><br><?= $user->matricule ?></td>
                                                <td><?= $user->fonction ?></td>
                                                <td><?= $user->contact ?></td>
                                                <td><?= $user->email ?></td>
                                                <td>
                                                   <button data-toggle="modal" data-target="#modal-utilisateur" onclick="modification('utilisateur', <?= $user->getId() ?>)" class="btn btn-white btn-sm"><i class="fa fa-pencil text-green"></i> </button>
                                                   <button class="btn btn-white btn-sm" onclick="suppressionWithPassword('utilisateur', <?= $user->getId(); ?>)"><i class="fa fa-close text-red"></i> </button>
                                               </td>
                                           </tr> 
                                       <?php } ?>
                                   </tbody>
                               </table>
                           </div>
                       </div>
                   </div>
               <?php } ?>                                               
           </div>

       </div>

   </div>
</div>
</div>


<?php include($this->rootPath("webapp/gestionnaire/elements/templates/footer.php")); ?>

<?php include($this->rootPath("composants/assets/modals/modal-departement.php")); ?> 
<?php include($this->rootPath("composants/assets/modals/modal-utilisateur.php")); ?> 


</div>
</div>


<?php include($this->rootPath("webapp/gestionnaire/elements/templates/script.php")); ?>


</body>

</html>
