
<div class="modal fade" id="modal-piece">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-navy">
                <h4 class="modal-title">Nouvelle pièce de véhicule</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <form method="POST" id="formPiece">
                <div class="modal-body">

                    <div class="row">
                        <div class="col-sm-4">
                            <label style="margin-bottom: 3%">Quel type de pièce <span1>*</span1></label>
                            <div class="form-group">
                                <?php Native\BINDING::html("select", "typepiecevehicule"); ?>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <label>Nom la pièce (Titre) <span1>*</span1></label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" required placeholder="Ex... Patente 2019-2020">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <label>Numero de cette pièce <span1>*</span1></label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="numero_piece" required placeholder="">
                            </div>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col-sm-4">
                            <label>Etablie le <span1>*</span1></label>
                            <div class="form-group">
                                <input type="date" class="form-control" name="date_etablissement" required autocomplete="off">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <label>Début de la période de validité <span1>*</span1></label>
                            <div class="form-group">
                                <input type="date" class="form-control" name="started" required autocomplete="off">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <label>Fin de la période de validité <span1>*</span1></label>
                            <div class="form-group">
                                <input type="date" class="form-control" name="finished" required autocomplete="off">
                            </div>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col-sm-4">
                            <label>Coût de la pièce </label>
                            <div class="form-group">
                                <input type="number" class="form-control" name="price" autocomplete="off">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <label>Exprimer cette période validité <span1>*</span1></label>
                            <div class="row">
                                <div class="col-5">
                                    <div class="form-group">
                                        <input type="number" class="form-control" name="duree" required>
                                    </div>
                                </div>
                                <div class="col-7">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <?php Native\BINDING::html("select", "typeduree"); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <label>Illustration 1</label>
                            <div class="">
                                <img style="width: 80px;" src="" class="img-thumbnail logo">
                                <input class="hide" type="file" name="photo1">
                                <button type="button" class="btn btn-success pull-right btn_image"><i class="fa fa-image"></i> Ajouter une image</button>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <label>Illustration 2</label>
                            <div class="">
                                <img style="width: 80px;" src="" class="img-thumbnail logo">
                                <input class="hide" type="file" name="photo2">
                                <button type="button" class="btn btn-success pull-right btn_image"><i class="fa fa-image"></i> Ajouter une image</button>
                            </div>
                        </div>
                    </div>
                </div><hr class="mp0"><br>
                <div class="container">
                    <button type="button" class="btn btn-sm  btn-default" data-dismiss="modal"><i class="fa fa-close"></i> Annuler</button>
                    <button class="btn btn-sm btn-success pull-right"><i class="fa fa-check"></i> Ajouter cette pièce</button>
                </div>
                <br>
            </form>

        </div>
    </div>
</div>



<div class="modal fade" id="modal-piecevehicule">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-navy">
                <h4 class="modal-title">Nouvelle pièce de véhicule</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <form method="POST" id="formPiece" class="shamman-form" classname="piecevehicule">
                <div class="modal-body">

                    <div class="row">
                        <div class="col-sm-4">
                            <label style="margin-bottom: 3%">Quel type de pièce <span1>*</span1></label>
                            <div class="form-group">
                                <?php Native\BINDING::html("select", "typepiecevehicule"); ?>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <label>Nom la pièce (Titre) <span1>*</span1></label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" required placeholder="Ex... Patente 2019-2020">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <label>Numero de cette pièce <span1>*</span1></label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="numero_piece" required placeholder="">
                            </div>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col-sm-4">
                            <label>Etablie le <span1>*</span1></label>
                            <div class="form-group">
                                <input type="date" class="form-control" name="date_etablissement" required>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <label>Début de la période de validité <span1>*</span1></label>
                            <div class="form-group">
                                <input type="date" class="form-control" name="started" required>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <label>Fin de la période de validité <span1>*</span1></label>
                            <div class="form-group">
                                <input type="date" class="form-control" name="finished" required autocomplete="no">
                            </div>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col-sm-4">
                            <label>Exprimer cette période validité <span1>*</span1></label>
                            <div class="row">
                                <div class="col-5">
                                    <div class="form-group">
                                        <input type="number" class="form-control" name="duree" required>
                                    </div>
                                </div>
                                <div class="col-7">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <?php Native\BINDING::html("select", "typeduree"); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div><hr class="mp0">
                <div class="container">
                    <input type="hidden" name="id">
                    <button type="button" class="btn btn-sm  btn-default" data-dismiss="modal"><i class="fa fa-close"></i> Annuler</button>
                    <button class="btn btn-sm btn-success pull-right"><i class="fa fa-check"></i> Modifier cette pièce</button>
                </div>
                <br>
            </form>

        </div>
    </div>
</div>