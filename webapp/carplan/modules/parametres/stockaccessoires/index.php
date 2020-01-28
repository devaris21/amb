
<?php require("../../webapp/administration/assets/includes/head.php") ?>

<body>

    <?php require("../../webapp/administration/assets/includes/preloader.php") ?>

    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            <?php require("../../webapp/administration/assets/includes/header.php") ?>

            <!-- Sidebar inner chat end-->
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">

                    <?php require("../../webapp/administration/assets/includes/sidebar.php") ?>

                    <div class="pcoded-content">
                        <div class="pcoded-inner-content"><br>

                           <div class="row">
                               <div class="col-xl-3 col-md-6">
                                <div class="card bg-c-yellow text-white">
                                    <div class="card-block">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <p class="m-b-5">Tous les Accessoires</p>
                                                <h4 class="m-b-0"><?= start0(count(Home\ACCESSOIRE::getAll())) ?></h4>
                                            </div>
                                            <div class="col col-auto text-right">
                                                <i class="fa fa-package f-50 text-c-yellow"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-c-green text-white">
                                    <div class="card-block">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <p class="m-b-5">Types d'accessoires</p>
                                                <h4 class="m-b-0"><?= start0(count(Home\TYPEACCESSOIRE::getAll())) ?></h4>
                                            </div>
                                            <div class="col col-auto text-right">
                                                <i class="fa fa-clone f-50 text-c-green"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-c-pink text-white">
                                    <div class="card-block">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <p class="m-b-5">Pieces en stock</p>
                                                <h4 class="m-b-0"><?= start0(Home\ACCESSOIRE::stock()) ?></h4>
                                            </div>
                                            <div class="col col-auto text-right">
                                                <i class="fa fa-cubes f-50 text-c-pink"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-c-blue text-white">
                                    <div class="card-block">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <p class="m-b-5">Actuelement équipés</p>
                                                <h4 class="m-b-0"><?= start0(Home\ACCESSOIRE::utilises()) ?></h4>
                                            </div>
                                            <div class="col col-auto text-right">
                                                <i class="fa fa-check f-50 text-c-blue"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="">
                            <div class="card">
                                <div class="card-block">
                                    <ul class="nav nav-tabs " role="tablist">
                                        <li class="nav-item ">
                                            <a class="nav-link active" data-toggle="tab" href="#lesaccessoires" role="tab">Tous les accessoires <span class="badge bg-aqua"><?= count($accessoires) ?></span></a>
                                            <div class="slide"></div>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#types" role="tab">TYpes d'accessoires <span class="badge bg-aqua"><?= count($types) ?></span></a>
                                            <div class="slide"></div>
                                        </li>
                                    </ul>
                                    <!-- Tab panes -->
                                    <div class="tab-content card-block">

                                        <div class="tab-pane active" id="lesaccessoires" role="tabpanel">
                                            <div class="row container">
                                             <button data-toggle="modal" data-target="#modal-accessoire" class="btn btn-sm btn-grd-success btn-round float-right btn_modal"><i class="fa fa-plus"></i> Ajouter accessoire/service</button>
                                         </div><br>
                                         <div class="">
                                             <table class="table table-sm table-striped table-hover table-bordered">
                                                <thead class="bg-green">
                                                    <tr>
                                                        <th>Désignation</th>
                                                        <th>Marque</th>
                                                        <th>Description</th>
                                                        <th>En stock</th>
                                                        <th colspan="3"></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($accessoires as $key => $accessoire) {
                                                        $accessoire->actualise(); ?>
                                                        <tr>
                                                            <td>
                                                                <h2 class="mp0 subtitle text-green" style="font-size: 13px"><?= $accessoire->name ?></h2>
                                                                <small class="gras italic"><?= $accessoire->typeaccessoire->name ?></small>
                                                            </td>
                                                            <td><?= $accessoire->marque ?></td>
                                                            <td><?= $accessoire->comment ?></td>
                                                            <td><?= $accessoire->stock ?> unité(s)</td>
                                                            <td><i data-toggle="modal" data-target="#modal-approvisionnement" class="fa fa-cubes text-blue cursor" onclick="session('accessoire', <?= $accessoire->getId() ?>)"></i></td>
                                                            <td> <i data-toggle="modal" data-target="#modal-accessoire" class="fa fa-pencil cursor" onclick="modification('accessoire', <?= $accessoire->getId() ?>)"></i></td>
                                                            <td> <i class="fa fa-close text-red cursor" onclick="modification('accessoire', <?= $accessoire->getId() ?>)"></i></td>
                                                        </tr>
                                                    <?php } ?>
                                                </tbody>
                                            </table> 
                                        </div>
                                    </div>


                                    <div class="tab-pane " id="types" role="tabpanel">
                                        <div class="row container">
                                            <button data-toggle="modal" data-target="#modal-type" class="btn btn-sm btn-grd-warning btn-round float-right btn_modal"><i class="fa fa-plus"></i> Ajouter un nouveau type</button>
                                        </div><br>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <table class="table table-hover table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>Types d'accessoires</th>
                                                            <th></th>
                                                            <th colspan="2"></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php foreach ($types as $key => $type) {
                                                            $type->actualise(); ?>
                                                            <tr>
                                                                <td><?= $type->name ?></td>
                                                                <td><?= $type->name ?></td>
                                                                <td class="cursor" data-toggle="modal" data-target="#modal-type" onclick="modification('typeaccessoire', <?= $type->getId() ?>)"><i class="fa fa-pencil text-blue"></i></td>
                                                                <td class="cursor" onclick="suppression_with_password('typeaccessoire', <?= $type->getId() ?>)"><i class="fa fa-close text-red"></i></td>
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
</div>
</div>



<div class="modal fade" id="modal-type">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header bg-green">
                <h5 class="modal-title">Type d'accessoires</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <form method="POST" class="shamman-form" classname="typeaccessoire">
                <div class="modal-body">
                    <div class="">
                        <label>Nom du type<span1>*</span1></label>
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" required>
                        </div>
                    </div>
                </div><hr>
                <div class="container">
                    <input type="hidden" name="id">
                    <button type="button" class="btn btn-sm  btn-default" data-dismiss="modal"><i class="fa fa-close"></i> Annuler</button>
                    <button class="btn btn-sm btn-success pull-right"><i class="fa fa-check"></i> Valider</button>
                </div>
                <br>
            </form>
        </div>
    </div>
</div>



<?php require("../../webapp/home/elements/modals/modal-accessoire.php") ?>


<div class="modal fade" id="modal-approvisionnement">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header bg-blue">
                <h5 class="modal-title">Formulaire d'approvisionnement</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <form method="POST" id="formApprovisonnement">
                <div class="modal-body">
                    <div class="">
                        <label>Quantite à apprivionner<span1>*</span1></label>
                        <div class="form-group">
                            <input type="number" class="form-control" name="quantite" required>
                        </div>
                    </div>

                    <div class="">
                        <label>Coût de cet approvisionnement <span1>*</span1></label>
                        <div class="form-group">
                            <input type="number" class="form-control" name="price" required>
                        </div>
                    </div>
                </div><hr>
                <div class="container">
                    <input type="hidden" name="id">
                    <button type="button" class="btn btn-sm  btn-default" data-dismiss="modal"><i class="fa fa-close"></i> Annuler</button>
                    <button class="btn btn-sm btn-success pull-right"><i class="fa fa-check"></i> Valider</button>
                </div>
                <br>
            </form>
        </div>
    </div>
</div>



<?php require("../../webapp/administration/assets/includes/footer.php") ?>

</body>

</html>
