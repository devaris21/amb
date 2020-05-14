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
                    <h2>Configuration de Base</h2>
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

            <div class="wrapper wrapper-content" id="autos">
                <div class="animated fadeInRightBig">
                    <div class="ibox" >
                        <div class="ibox-content" style="min-height: 400px;">
                            <div class="tabs-container">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class=""><a class="nav-link active" data-toggle="tab" href="#parc">Configuration Parc auto </a></li>
                                    <li class=""><a class="nav-link " data-toggle="tab" href="#paperasse">Configuration Paperasse </a></li>
                                    <li class=""><a class="nav-link " data-toggle="tab" href="#user">Configuration Utilisateurs </a></li>
                                </ul><br>                               
                                <div class="tab-content">


                                    <div role="tabpanel" id="parc" class="tab-pane active">
                                        <div class="row">
                                            <div class="col-md-4 col-sm-6 col-xs-12 bloc">
                                                <div class="ibox border">
                                                    <div class="ibox-title">
                                                        <h5 class="text-uppercase">Type de véhicule</h5>
                                                        <div class="ibox-tools">
                                                            <a class="collapse-link">
                                                                <i class="fa fa-plus"></i> Ajouter
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="ibox-content">
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th>#</th>
                                                                    <th>Libéllé</th>
                                                                    <th></th>
                                                                    <th></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php $i =0; foreach (Home\TYPEVEHICULE::findBy([], [], ["name"=>"ASC"]) as $key => $item) {
                                                                    $i++; ?>
                                                                    <tr>
                                                                        <td><?= $i ?></td>
                                                                        <td><?= $item->name(); ?></td>
                                                                        <td data-toggle="data-toggle" title="modifier l'élément" onclick="modification('typevehicule', <?= $item->getId() ?>)"><i class="fa fa-pencil text-blue cursor"></i></td>
                                                                        <td data-toggle="data-toggle" title="modifier l'élément" onclick="suppression('typevehicule', <?= $item->getId() ?>)"><i class="fa fa-close cursor text-danger"></i></td>
                                                                    </tr>
                                                                <?php } ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4 col-sm-6 col-xs-12 bloc">
                                                <div class="ibox border">
                                                    <div class="ibox-title">
                                                        <h5 class="text-uppercase">Catégorie de véhicule</h5>
                                                        <div class="ibox-tools">
                                                            <a class="collapse-link">
                                                                <i class="fa fa-plus"></i> Ajouter
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="ibox-content">
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th>#</th>
                                                                    <th>Libéllé</th>
                                                                    <th></th>
                                                                    <th></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php $i =0; foreach (Home\GROUPEVEHICULE::findBy([], [], ["name"=>"ASC"]) as $key => $item) {
                                                                    $i++; ?>
                                                                    <tr>
                                                                        <td><?= $i ?></td>
                                                                        <td><?= $item->name(); ?></td>
                                                                        <td data-toggle="data-toggle" title="modifier l'élément" onclick="modification('groupevehicule', <?= $item->getId() ?>)"><i class="fa fa-pencil text-blue cursor"></i></td>
                                                                        <td data-toggle="data-toggle" title="modifier l'élément" onclick="suppression('groupevehicule', <?= $item->getId() ?>)"><i class="fa fa-close cursor text-danger"></i></td>
                                                                    </tr>
                                                                <?php } ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4 col-sm-6 col-xs-12 bloc">
                                                <div class="ibox border">
                                                    <div class="ibox-title">
                                                        <h5 class="text-uppercase">Marque de véhicule</h5>
                                                        <div class="ibox-tools">
                                                            <a class="collapse-link">
                                                                <i class="fa fa-plus"></i> Ajouter
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="ibox-content">
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th>#</th>
                                                                    <th>Libéllé</th>
                                                                    <th></th>
                                                                    <th></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php $i =0; foreach (Home\MARQUE::findBy([], [], ["name"=>"ASC"]) as $key => $item) {
                                                                    $i++; ?>
                                                                    <tr>
                                                                        <td><?= $i ?></td>
                                                                        <td><?= $item->name(); ?></td>
                                                                        <td data-toggle="data-toggle" title="modifier l'élément" onclick="modification('typevehicule', <?= $item->getId() ?>)"><i class="fa fa-pencil text-blue cursor"></i></td>
                                                                        <td data-toggle="data-toggle" title="modifier l'élément" onclick="suppression('typevehicule', <?= $item->getId() ?>)"><i class="fa fa-close cursor text-danger"></i></td>
                                                                    </tr>
                                                                <?php } ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4 col-sm-6 col-xs-12 bloc">
                                                <div class="ibox border">
                                                    <div class="ibox-title">
                                                        <h5 class="text-uppercase">Type d'énergie</h5>
                                                        <div class="ibox-tools">
                                                            <a class="collapse-link">
                                                                <i class="fa fa-plus"></i> Ajouter
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="ibox-content">
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th>#</th>
                                                                    <th>Libéllé</th>
                                                                    <th></th>
                                                                    <th></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php $i =0; foreach (Home\ENERGIE::findBy([], [], ["name"=>"ASC"]) as $key => $item) {
                                                                    $i++; ?>
                                                                    <tr>
                                                                        <td><?= $i ?></td>
                                                                        <td><?= $item->name(); ?></td>
                                                                        <td data-toggle="data-toggle" title="modifier l'élément" onclick="modification('energie', <?= $item->getId() ?>)"><i class="fa fa-pencil text-blue cursor"></i></td>
                                                                        <td data-toggle="data-toggle" title="modifier l'élément" onclick="suppression('energie', <?= $item->getId() ?>)"><i class="fa fa-close cursor text-danger"></i></td>
                                                                    </tr>
                                                                <?php } ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4 col-sm-6 col-xs-12 bloc">
                                                <div class="ibox border">
                                                    <div class="ibox-title">
                                                        <h5 class="text-uppercase">Type d'équipement</h5>
                                                        <div class="ibox-tools">
                                                            <a class="collapse-link">
                                                                <i class="fa fa-plus"></i> Ajouter
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="ibox-content">
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th>#</th>
                                                                    <th>Libéllé</th>
                                                                    <th></th>
                                                                    <th></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php $i =0; foreach (Home\TYPEEQUIPEMENT::findBy([], [], ["name"=>"ASC"]) as $key => $item) {
                                                                    $i++; ?>
                                                                    <tr>
                                                                        <td><?= $i ?></td>
                                                                        <td><?= $item->name(); ?></td>
                                                                        <td data-toggle="data-toggle" title="modifier l'élément" onclick="modification('typeequipement', <?= $item->getId() ?>)"><i class="fa fa-pencil text-blue cursor"></i></td>
                                                                        <td data-toggle="data-toggle" title="modifier l'élément" onclick="suppression('typeequipement', <?= $item->getId() ?>)"><i class="fa fa-close cursor text-danger"></i></td>
                                                                    </tr>
                                                                <?php } ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                    </div>







                                    <div role="tabpanel" id="paperasse" class="tab-pane">
                                        <div class="row">
                                            <div class="col-md-4 col-sm-6 col-xs-12 bloc">
                                                <div class="ibox border">
                                                    <div class="ibox-title">
                                                        <h5 class="text-uppercase">Type de sinistre</h5>
                                                        <div class="ibox-tools">
                                                            <a class="collapse-link">
                                                                <i class="fa fa-plus"></i> Ajouter
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="ibox-content">
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th>#</th>
                                                                    <th>Libéllé</th>
                                                                    <th></th>
                                                                    <th></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php $i =0; foreach (Home\TYPESINISTRE::findBy([], [], ["name"=>"ASC"]) as $key => $item) {
                                                                    $i++; ?>
                                                                    <tr>
                                                                        <td><?= $i ?></td>
                                                                        <td><?= $item->name(); ?></td>
                                                                        <td data-toggle="data-toggle" title="modifier l'élément" onclick="modification('typesinistre', <?= $item->getId() ?>)"><i class="fa fa-pencil text-blue cursor"></i></td>
                                                                        <td data-toggle="data-toggle" title="modifier l'élément" onclick="suppression('typesinistre', <?= $item->getId() ?>)"><i class="fa fa-close cursor text-danger"></i></td>
                                                                    </tr>
                                                                <?php } ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4 col-sm-6 col-xs-12 bloc">
                                                <div class="ibox border">
                                                    <div class="ibox-title">
                                                        <h5 class="text-uppercase">type entretien de véhicule</h5>
                                                        <div class="ibox-tools">
                                                            <a class="collapse-link">
                                                                <i class="fa fa-plus"></i> Ajouter
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="ibox-content">
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th>#</th>
                                                                    <th>Libéllé</th>
                                                                    <th></th>
                                                                    <th></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php $i =0; foreach (Home\TYPEENTRETIENVEHICULE::findBy([], [], ["name"=>"ASC"]) as $key => $item) {
                                                                    $i++; ?>
                                                                    <tr>
                                                                        <td><?= $i ?></td>
                                                                        <td><?= $item->name(); ?></td>
                                                                        <td data-toggle="data-toggle" title="modifier l'élément" onclick="modification('typeentretienvehicule', <?= $item->getId() ?>)"><i class="fa fa-pencil text-blue cursor"></i></td>
                                                                        <td data-toggle="data-toggle" title="modifier l'élément" onclick="suppression('typeentretienvehicule', <?= $item->getId() ?>)"><i class="fa fa-close cursor text-danger"></i></td>
                                                                    </tr>
                                                                <?php } ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4 col-sm-6 col-xs-12 bloc">
                                                <div class="ibox border">
                                                    <div class="ibox-title">
                                                        <h5 class="text-uppercase">Pièce administrative de véhicule</h5>
                                                        <div class="ibox-tools">
                                                            <a class="collapse-link">
                                                                <i class="fa fa-plus"></i> Ajouter
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="ibox-content">
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th>#</th>
                                                                    <th>Libéllé</th>
                                                                    <th></th>
                                                                    <th></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php $i =0; foreach (Home\TYPEPIECEVEHICULE::findBy([], [], ["name"=>"ASC"]) as $key => $item) {
                                                                    $i++; ?>
                                                                    <tr>
                                                                        <td><?= $i ?></td>
                                                                        <td><?= $item->name(); ?></td>
                                                                        <td data-toggle="data-toggle" title="modifier l'élément" onclick="modification('typepiecevehicule', <?= $item->getId() ?>)"><i class="fa fa-pencil text-blue cursor"></i></td>
                                                                        <td data-toggle="data-toggle" title="modifier l'élément" onclick="suppression('typepiecevehicule', <?= $item->getId() ?>)"><i class="fa fa-close cursor text-danger"></i></td>
                                                                    </tr>
                                                                <?php } ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4 col-sm-6 col-xs-12 bloc">
                                                <div class="ibox border">
                                                    <div class="ibox-title">
                                                        <h5 class="text-uppercase">type de dotation</h5>
                                                        <div class="ibox-tools">
                                                            <a class="collapse-link">
                                                                <i class="fa fa-plus"></i> Ajouter
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="ibox-content">
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th>#</th>
                                                                    <th>Libéllé</th>
                                                                    <th></th>
                                                                    <th></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php $i =0; foreach (Home\TYPEDOTATION::findBy([], [], ["name"=>"ASC"]) as $key => $item) {
                                                                    $i++; ?>
                                                                    <tr>
                                                                        <td><?= $i ?></td>
                                                                        <td><?= $item->name(); ?></td>
                                                                        <td data-toggle="data-toggle" title="modifier l'élément" onclick="modification('typedotation', <?= $item->getId() ?>)"><i class="fa fa-pencil text-blue cursor"></i></td>
                                                                        <td data-toggle="data-toggle" title="modifier l'élément" onclick="suppression('typedotation', <?= $item->getId() ?>)"><i class="fa fa-close cursor text-danger"></i></td>
                                                                    </tr>
                                                                <?php } ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>





                                    <div role="tabpanel" id="user" class="tab-pane">
                                        <div class="row">
                                            <div class="col-md-4 col-sm-6 col-xs-12 bloc">
                                                <div class="ibox border">
                                                    <div class="ibox-title">
                                                        <h5 class="text-uppercase">Type de prestataire</h5>
                                                        <div class="ibox-tools">
                                                            <a class="collapse-link">
                                                                <i class="fa fa-plus"></i> Ajouter
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="ibox-content">
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th>#</th>
                                                                    <th>Libéllé</th>
                                                                    <th></th>
                                                                    <th></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php $i =0; foreach (Home\TYPEPRESTATAIRE::findBy([], [], ["name"=>"ASC"]) as $key => $item) {
                                                                    $i++; ?>
                                                                    <tr>
                                                                        <td><?= $i ?></td>
                                                                        <td><?= $item->name(); ?></td>
                                                                        <td data-toggle="data-toggle" title="modifier l'élément" onclick="modification('typeprestataire', <?= $item->getId() ?>)"><i class="fa fa-pencil text-blue cursor"></i></td>
                                                                        <td data-toggle="data-toggle" title="modifier l'élément" onclick="suppression('typeprestataire', <?= $item->getId() ?>)"><i class="fa fa-close cursor text-danger"></i></td>
                                                                    </tr>
                                                                <?php } ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4 col-sm-6 col-xs-12 bloc">
                                                <div class="ibox border">
                                                    <div class="ibox-title">
                                                        <h5 class="text-uppercase">type de produit de prestataire</h5>
                                                        <div class="ibox-tools">
                                                            <a class="collapse-link">
                                                                <i class="fa fa-plus"></i> Ajouter
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="ibox-content">
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th>#</th>
                                                                    <th>Libéllé</th>
                                                                    <th></th>
                                                                    <th></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php $i =0; foreach (Home\TYPEPRODUIT::findBy([], [], ["name"=>"ASC"]) as $key => $item) {
                                                                    $i++; ?>
                                                                    <tr>
                                                                        <td><?= $i ?></td>
                                                                        <td><?= $item->name(); ?></td>
                                                                        <td data-toggle="data-toggle" title="modifier l'élément" onclick="modification('typeproduit', <?= $item->getId() ?>)"><i class="fa fa-pencil text-blue cursor"></i></td>
                                                                        <td data-toggle="data-toggle" title="modifier l'élément" onclick="suppression('typeproduit', <?= $item->getId() ?>)"><i class="fa fa-close cursor text-danger"></i></td>
                                                                    </tr>
                                                                <?php } ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4 col-sm-6 col-xs-12 bloc">
                                                <div class="ibox border">
                                                    <div class="ibox-title">
                                                        <h5 class="text-uppercase">Type d'énergie</h5>
                                                        <div class="ibox-tools">
                                                            <a class="collapse-link">
                                                                <i class="fa fa-plus"></i> Ajouter
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="ibox-content">
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th>#</th>
                                                                    <th>Libéllé</th>
                                                                    <th></th>
                                                                    <th></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php $i =0; foreach (Home\ENERGIE::findBy([], [], ["name"=>"ASC"]) as $key => $item) {
                                                                    $i++; ?>
                                                                    <tr>
                                                                        <td><?= $i ?></td>
                                                                        <td><?= $item->name(); ?></td>
                                                                        <td data-toggle="data-toggle" title="modifier l'élément" onclick="modification('energie', <?= $item->getId() ?>)"><i class="fa fa-pencil text-blue cursor"></i></td>
                                                                        <td data-toggle="data-toggle" title="modifier l'élément" onclick="suppression('energie', <?= $item->getId() ?>)"><i class="fa fa-close cursor text-danger"></i></td>
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
