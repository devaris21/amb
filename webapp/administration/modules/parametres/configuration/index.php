<!DOCTYPE html>
<html>

<?php include($this->rootPath("webapp/administration/elements/templates/head.php")); ?>


<body class="fixed-sidebar">

    <div id="wrapper">

        <?php include($this->rootPath("webapp/administration/elements/templates/sidebar.php")); ?>  

        <div id="page-wrapper" class="gray-bg">

          <?php include($this->rootPath("webapp/administration/elements/templates/header.php")); ?>  

          <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-sm-4">
                <h2>This is main title</h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.html">This is</a>
                    </li>
                    <li class="breadcrumb-item active">
                        <strong>Breadcrumb</strong>
                    </li>
                </ol>
            </div>
            <div class="col-sm-8">
                <div class="title-action">
                    <a href="" class="btn btn-primary">This is action area</a>
                </div>
            </div>
        </div>

        <div class="wrapper wrapper-content">
            <div class="animated fadeInRightBig">

                <h3 class="gras text-uppercase">* Configurations de 'véhicule'</h3>
                <div class="row grid" >

                    <div class="grid-item col-sm-6 col-md-4">
                        <div class="ibox">
                            <div class="ibox-title">
                                <h5>Types de véhicule</h5>
                                <div class="ibox-tools">
                                    <a data-toggle="modal" data-target="#modal-typesinistre" href="">
                                        <i class="fa fa-plus"></i> Ajouter
                                    </a>
                                    <a class="collapse-link" href="">
                                        <i class="fa fa-chevron-up"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="ibox-content">
                                <table class="table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>Libéllé</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($typevehicules as $key => $typevehicule) { ?>
                                            <tr>
                                                <td><?= $typevehicule->name ?></td>
                                                <td class="cursor" data-toggle="modal" data-target="#modal-typevehicule" onclick="modification('typevehicule', <?= $typevehicule->getId() ?>)"><i class="fa fa-pencil text-blue"></i></td>
                                                <td class="cursor" onclick="suppressionWithPassword('typevehicule', <?= $typevehicule->getId() ?>)"><i class="fa fa-close text-red"></i></td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="grid-item col-sm-6 col-md-4">
                        <div class="ibox">
                            <div class="ibox-title">
                                <h5> Groupes de véhicule</h5>
                                <div class="ibox-tools">
                                    <a data-toggle="modal" data-target="#modal-typesinistre" href="">
                                        <i class="fa fa-plus"></i> Ajouter
                                    </a>
                                    <a class="collapse-link" href="">
                                        <i class="fa fa-chevron-up"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="ibox-content">
                                <table class="table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>Libéllé</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($groupevehicules as $key => $groupevehicule) { ?>
                                            <tr>
                                                <td><?= $groupevehicule->name ?></td>
                                                <td class="cursor" data-toggle="modal" data-target="#modal-groupevehicule" onclick="modification('groupevehicule', <?= $groupevehicule->getId() ?>)"><i class="fa fa-pencil text-blue"></i></td>
                                                <td class="cursor" onclick="suppressionWithPassword('groupevehicule', <?= $groupevehicule->getId() ?>)"><i class="fa fa-close text-red"></i></td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item col-sm-6 col-md-4">
                        <div class="ibox">
                            <div class="ibox-title">
                                <h5>Types d'energie</h5>
                                <div class="ibox-tools">
                                    <a data-toggle="modal" data-target="#modal-typesinistre" href="">
                                        <i class="fa fa-plus"></i> Ajouter
                                    </a>
                                    <a class="collapse-link" href="">
                                        <i class="fa fa-chevron-up"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="ibox-content">
                                <table class="table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>Libéllé</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($energies as $key => $energie) { ?>
                                            <tr>
                                                <td><?= $energie->name ?></td>
                                                <td class="cursor" data-toggle="modal" data-target="#modal-typeenergie" onclick="modification('typeenergie', <?= $energie->getId() ?>)"><i class="fa fa-pencil text-blue"></i></td>
                                                <td class="cursor" onclick="suppressionWithPassword('typeenergie', <?= $energie->getId() ?>)"><i class="fa fa-close text-red"></i></td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="grid-item col-sm-6 col-md-4">
                        <div class="ibox">
                            <div class="ibox-title">
                                <h5>Marques de véhicule</h5>
                                <div class="ibox-tools">
                                    <a data-toggle="modal" data-target="#modal-typesinistre" href="">
                                        <i class="fa fa-plus"></i> Ajouter
                                    </a>
                                    <a class="collapse-link" href="">
                                        <i class="fa fa-chevron-up"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="ibox-content">
                                <table class="table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>Libéllé</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($marques as $key => $marque) { ?>
                                            <tr>
                                                <td><?= $marque->name ?></td>
                                                <td class="cursor" data-toggle="modal" data-target="#modal-marque" onclick="modification('marque', <?= $marque->getId() ?>)"><i class="fa fa-pencil text-blue"></i></td>
                                                <td class="cursor" onclick="suppressionWithPassword('marque', <?= $marque->getId() ?>)"><i class="fa fa-close text-red"></i></td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item col-sm-6 col-md-4">
                        <div class="ibox">
                            <div class="ibox-title">
                                <h5>Types de transmission</h5>
                                <div class="ibox-tools">
                                    <a data-toggle="modal" data-target="#modal-typesinistre" href="">
                                        <i class="fa fa-plus"></i> Ajouter
                                    </a>
                                    <a class="collapse-link" href="">
                                        <i class="fa fa-chevron-up"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="ibox-content">
                                <table class="table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>Libéllé</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($transmissions as $key => $transmission) { ?>
                                            <tr>
                                                <td><?= $transmission->name ?></td>
                                                <td class="cursor" data-toggle="modal" data-target="#modal-transmission" onclick="modification('transmission', <?= $transmission->getId() ?>)"><i class="fa fa-pencil text-blue"></i></td>
                                                <td class="cursor" onclick="suppressionWithPassword('transmission', <?= $transmission->getId() ?>)"><i class="fa fa-close text-red"></i></td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item col-sm-6 col-md-4">
                        <div class="ibox">
                            <div class="ibox-title">
                                <h5>Types de document</h5>
                                <div class="ibox-tools">
                                    <a data-toggle="modal" data-target="#modal-typesinistre" href="">
                                        <i class="fa fa-plus"></i> Ajouter
                                    </a>
                                    <a class="collapse-link" href="">
                                        <i class="fa fa-chevron-up"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="ibox-content">
                                <table class="table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>Libéllé</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($pieces as $key => $piece) { ?>
                                            <tr>
                                                <td><?= $piece->name ?></td>
                                                <td class="cursor" data-toggle="modal" data-target="#modal-piece" onclick="modification('piece', <?= $piece->getId() ?>)"><i class="fa fa-pencil text-blue"></i></td>
                                                <td class="cursor" onclick="suppressionWithPassword('piece', <?= $piece->getId() ?>)"><i class="fa fa-close text-red"></i></td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>


                <h3 class="gras text-uppercase">* Paramètres utilisateur </h3>
                <div class="grid row">
                    <div class="grid-item col-sm-6 col-md-4">
                        <div class="ibox">
                            <div class="ibox-title">
                                <h5>Types d'equipement</h5>
                                <div class="ibox-tools">
                                    <a class="collapse-link" href="">
                                        <i class="fa fa-chevron-up"></i>
                                    </a>
                                    <a class="close-link" href="">
                                        <i class="fa fa-times"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="ibox-content">
                                <table class="table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>Libéllé</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($equipements as $key => $equipement) { ?>
                                            <tr>
                                                <td><?= $equipement->name ?></td>
                                                <td class="cursor" data-toggle="modal" data-target="#modal-equipement" onclick="modification('equipement', <?= $equipement->getId() ?>)"><i class="fa fa-pencil text-blue"></i></td>
                                                <td class="cursor" onclick="suppressionWithPassword('equipement', <?= $equipement->getId() ?>)"><i class="fa fa-close text-red"></i></td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="grid-item col-sm-6 col-md-4">
                        <div class="ibox">
                            <div class="ibox-title">
                                <h5>Types de sinistre</h5>
                                <div class="ibox-tools">
                                    <a data-toggle="modal" data-target="#modal-typesinistre" href="">
                                        <i class="fa fa-plus"></i> Ajouter
                                    </a>
                                    <a class="collapse-link" href="">
                                        <i class="fa fa-chevron-up"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="ibox-content">
                                <table class="table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>Libéllé</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($sinistres as $key => $sinistre) { ?>
                                            <tr>
                                                <td><?= $sinistre->name ?></td>
                                                <td class="cursor" data-toggle="modal" data-target="#modal-typesinistre" onclick="modification('typesinistre', <?= $sinistre->getId() ?>)"><i class="fa fa-pencil text-blue"></i></td>
                                                <td class="cursor" onclick="suppressionWithPassword('typesinistre', <?= $sinistre->getId() ?>)"><i class="fa fa-close text-red"></i></td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item col-sm-6 col-md-4">
                        <div class="ibox">
                            <div class="ibox-title">
                                <h5>Entretien de véhicules</h5>
                                <div class="ibox-tools">
                                    <a data-toggle="modal" data-target="#modal-typesinistre" href="">
                                        <i class="fa fa-plus"></i> Ajouter
                                    </a>
                                    <a class="collapse-link" href="">
                                        <i class="fa fa-chevron-up"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="ibox-content">
                                <table class="table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>Libéllé</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($entretiens as $key => $entretien) { ?>
                                            <tr>
                                                <td><?= $entretien->name ?></td>
                                                <td class="cursor" data-toggle="modal" data-target="#modal-entretien" onclick="modification('entretien', <?= $entretien->getId() ?>)"><i class="fa fa-pencil text-blue"></i></td>
                                                <td class="cursor" onclick="suppressionWithPassword('entretien', <?= $entretien->getId() ?>)"><i class="fa fa-close text-red"></i></td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>


                <h3 class="gras text-uppercase">* Paramètres utilisateur </h3>
                <div class="row grid">
                   <div class="grid-item col-sm-6 col-md-4">
                    <div class="ibox">
                        <div class="ibox-title">
                            <h5>Types de prestataire</h5>
                            <div class="ibox-tools">
                                <a data-toggle="modal" data-target="#modal-typesinistre" href="">
                                    <i class="fa fa-plus"></i> Ajouter
                                </a>
                                <a class="collapse-link" href="">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content">
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>Libéllé</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($prestataires as $key => $prestataire) { ?>
                                        <tr>
                                            <td><?= $prestataire->name ?></td>
                                            <td class="cursor" data-toggle="modal" data-target="#modal-prestataire" onclick="modification('prestataire', <?= $prestataire->getId() ?>)"><i class="fa fa-pencil text-blue"></i></td>
                                            <td class="cursor" onclick="suppressionWithPassword('prestataire', <?= $prestataire->getId() ?>)"><i class="fa fa-close text-red"></i></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="grid-item col-sm-6 col-md-4">
                    <div class="ibox">
                        <div class="ibox-title">
                            <h5>Types de gestionnaire</h5>
                            <div class="ibox-tools">
                                <a data-toggle="modal" data-target="#modal-typesinistre" href="">
                                    <i class="fa fa-plus"></i> Ajouter
                                </a>
                                <a class="collapse-link" href="">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content">
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>Libéllé</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($gestionnaires as $key => $gesti) { ?>
                                        <tr>
                                            <td><?= $gesti->name ?></td>
                                            <td class="cursor" data-toggle="modal" data-target="#modal-gesti" onclick="modification('gesti', <?= $gesti->getId() ?>)"><i class="fa fa-pencil text-blue"></i></td>
                                            <td class="cursor" onclick="suppressionWithPassword('gesti', <?= $gesti->getId() ?>)"><i class="fa fa-close text-red"></i></td>
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


    <?php include($this->rootPath("webapp/administration/elements/templates/footer.php")); ?>


</div>
</div>


<?php include($this->rootPath("webapp/administration/elements/templates/script.php")); ?>


</body>

</html>
