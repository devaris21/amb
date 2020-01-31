
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
                                                <p class="m-b-5">Total Equipements</p>
                                                <h4 class="m-b-0"><?= start0(count(Home\EQUIPEMENT::getAll())) ?></h4>
                                            </div>
                                            <div class="col col-auto text-right">
                                                <i class="fa fa-car f-50 text-c-yellow"></i>
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
                                                <p class="m-b-5">Nbr pièces en stock</p>
                                                <h4 class="m-b-0"><?= start0(Home\EQUIPEMENT::stock()) ?></h4>
                                            </div>
                                            <div class="col col-auto text-right">
                                                <i class="fa fa-check f-50 text-c-pink"></i>
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
                                                <p class="m-b-5">Catégories d'équipements</p>
                                                <h4 class="m-b-0"><?= start0(count(Home\TYPEEQUIPEMENT::getAll())) ?></h4>
                                            </div>
                                            <div class="col col-auto text-right">
                                                <i class="fa fa-clone f-50 text-c-green"></i>
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
                                                <p class="m-b-5">Actuellement équipés</p>
                                                <h4 class="m-b-0"> <h4 class="m-b-0"><?= start0(Home\EQUIPEMENT::utilises()) ?></h4></h4>
                                            </div>
                                            <div class="col col-auto text-right">
                                                <i class="fa fa-ban f-50 text-c-blue"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                         <div >
                            <button class="btn bg-green btn-sm pull-left" data-toggle="modal" data-target="#modal-equipement"><i class="fa fa-plus"></i> Ajouter un nouvel équipement</button>
                        </div><br><br>
                        

                        <div class="">
                            <div class="card">
                                <div class="card-block">
                                    <ul class="nav nav-tabs " role="tablist">
                                        <?php foreach ($types as $key => $type) { ?>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#type<?= $type->getId() ?>" role="tab"><?= $type->name ?> <span class="badge bg-aqua"><?= count($type->items) ?></span></a>
                                                <div class="slide"></div>
                                            </li>
                                        <?php } ?>
                                    </ul>
                                    <!-- Tab panes -->
                                    <div class="tab-content card-block">
                                        <?php foreach ($types as $key => $type) {
                                            $type->fourni("equipement"); ?>
                                            <div class="tab-pane " id="type<?= $type->getId() ?>" role="tabpanel">
                                                <div class="row">
                                                    <?php foreach ($type->equipements as $key => $equipement) {
                                                        $equipement->actualise(); ?>
                                                        <div class="col-md-3 equipements">
                                                            <div class="card cursor " style="padding: 2%">
                                                                <div class="">
                                                                    <h2 class="mp3 subtitle text-blue" style="font-size: 14px"><?= $equipement->name ?></h2>
                                                                    <small><?= $equipement->comment ?></small>
                                                                    <hr class="mp0">
                                                                    <div class="row">
                                                                        <div class="col-7">
                                                                            <span>en stock: <?= $equipement->stock ?> pièces</span>
                                                                        </div>
                                                                        <div class="col-5">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>                                                    
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        <?php } ?>

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



<div class="modal fade" id="modal-equipement">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Ajouter un nouveau équipement</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <form method="POST" class="formShamman" classname="equipement">
                <div class="modal-body">

                    <div class="row">
                        <div class="col-sm-4">
                            <label>Le type <span1>*</span1></label>
                            <div class="form-group">
                                <?php Native\BINDING::html("select", "typeequipement") ?>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <label>Nom de l'equipement<span1>*</span1></label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" required>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <label>prix unitaire de l'equipement<span1>*</span1></label>
                            <div class="form-group">
                                <input type="number" class="form-control" name="price" min=1 required>
                            </div>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col-sm-6">
                            <label>Décrivez l' equipement</label>
                            <div class="form-group">
                             <textarea class="form-control" rows="4" name="comment" ></textarea>
                         </div>
                     </div>                        
                 </div>
             </div><hr class="">
             <div class="container">
                <input type="hidden" name="id">
                <button type="button" class="btn btn-sm  btn-default" data-dismiss="modal"><i class="fa fa-close"></i> Annuler</button>
                <button class="btn btn-sm btn-success pull-right"><i class="fa fa-check"></i> Valider le formulaire</button>
            </div>
            <br>
        </form>
    </div>
</div>
</div>


<?php require("../../webapp/administration/assets/includes/footer.php") ?>

</body>

</html>
