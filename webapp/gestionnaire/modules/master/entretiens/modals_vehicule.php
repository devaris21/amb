
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
                        <div class="col-sm-4">
                            <label>Illustration 1</label>
                            <div class="">
                                <img style="width: 80px;" src="" class="img-thumbnail logo">
                                <input class="hide" type="file" name="photo1">
                                <button type="button" class="btn btn-sm btn-success pull-right btn_image"><i class="fa fa-image"></i> Ajouter une image</button>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <label>Illustration 2</label>
                            <div class="">
                                <img style="width: 80px;" src="" class="img-thumbnail logo">
                                <input class="hide" type="file" name="photo2">
                                <button type="button" class="btn btn-sm btn-success pull-right btn_image"><i class="fa fa-image"></i> Ajouter une image</button>
                            </div>
                        </div>

                    </div>
                </div><hr class="mp0">
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


<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->


<div class="modal fade" id="modal-assur">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-purple">
                <h4 class="modal-title">Nouvelle assurance de véhicule</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <form method="POST" id="formAssur">
                <div class="modal-body">

                    <div class="row">
                        <div class="col-sm-4">
                            <label>Nom l'assurance (Titre) <span1>*</span1></label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" required placeholder="Ex... Assurance 2019-2020">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <label>Numero de cette assurance <span1>*</span1></label>
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
                        <div class="col-sm-4">
                            <label>Illustration 1</label>
                            <div class="">
                                <img style="width: 80px;" src="" class="img-thumbnail logo">
                                <input class="hide" type="file" name="photo1">
                                <button type="button" class="btn btn-sm bg-purple pull-right btn_image"><i class="fa fa-image"></i> Ajouter une image</button>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <label>Illustration 2</label>
                            <div class="">
                                <img style="width: 80px;" src="" class="img-thumbnail logo">
                                <input class="hide" type="file" name="photo2">
                                <button type="button" class="btn btn-sm bg-purple pull-right btn_image"><i class="fa fa-image"></i> Ajouter une image</button>
                            </div>
                        </div>

                    </div>
                </div><hr class="">
                <div class="container">
                    <button type="button" class="btn btn-sm  btn-default" data-dismiss="modal"><i class="fa fa-close"></i> Annuler</button>
                    <button class="btn btn-sm btn-success pull-right"><i class="fa fa-check"></i> Ajouter l'assurance</button>
                </div>
                <br>
            </form>

        </div>
    </div>
</div>



<div class="modal fade" id="modal-assurance">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-purple">
                <h4 class="modal-title">Modifier l'assurance de véhicule</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <form method="POST" id="formAssur" class="shamman-form" classname="assurance">
                <div class="modal-body">

                    <div class="row">
                        <div class="col-sm-4">
                            <label>Nom l'assurance (Titre) <span1>*</span1></label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" required placeholder="Ex... Assurance 2019-2020">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <label>Numero de cette assurance <span1>*</span1></label>
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
                </div><hr class="">
                <div class="container">
                    <button type="button" class="btn btn-sm  btn-default" data-dismiss="modal"><i class="fa fa-close"></i> Annuler</button>
                    <button class="btn btn-sm btn-success pull-right"><i class="fa fa-check"></i> Modifier cette assurance</button>
                </div>
                <br>
            </form>

        </div>
    </div>
</div>



<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->


<div class="modal fade" id="modal-visite">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-orange">
                <h4 class="modal-title">Nouvelle Fiche de visite technique de véhicule</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <form method="POST" id="formVisite">
                <div class="modal-body">

                    <div class="row">
                        <div class="col-sm-4">
                            <label>Nom de la fiche (Titre) <span1>*</span1></label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" required placeholder="Ex... Visite Technique 2019-2020">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <label>Numero de cette fiche <span1>*</span1></label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="numero_piece" required placeholder="">
                            </div>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col-sm-4">
                            <label>Etablie le <span1>*</span1></label>
                            <div class="form-group">
                                <input type="date" class="form-control" name="date_etablissement"  required autocomplete="off">
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
                        <div class="col-sm-4">
                            <label>Illustration 1</label>
                            <div class="">
                                <img style="width: 80px;" src="" class="img-thumbnail logo">
                                <input class="hide" type="file" name="photo1">
                                <button type="button" class="btn btn-sm bg-orange pull-right btn_image"><i class="fa fa-image"></i> Ajouter une image</button>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <label>Illustration 2</label>
                            <div class="">
                                <img style="width: 80px;" src="" class="img-thumbnail logo">
                                <input class="hide" type="file" name="photo2">
                                <button type="button" class="btn btn-sm bg-orange pull-right btn_image"><i class="fa fa-image"></i> Ajouter une image</button>
                            </div>
                        </div>

                    </div>
                </div><hr class="">
                <div class="container">
                    <button type="button" class="btn btn-sm  btn-default" data-dismiss="modal"><i class="fa fa-close"></i> Annuler</button>
                    <button class="btn btn-sm btn-success pull-right"><i class="fa fa-check"></i> Ajouter la fiche de visite technique</button>
                </div>
                <br>
            </form>

        </div>
    </div>
</div>



<div class="modal fade" id="modal-visitetechnique">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-orange">
                <h4 class="modal-title">Modifier la fiche de visite technique</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <form method="POST" id="formAssur" class="shamman-form" classname="visitetechnique">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-4">
                            <label>Nom la fiche (Titre) <span1>*</span1></label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" required placeholder="Ex... Visite technique 2019-2020">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <label>Numero de cette fiche <span1>*</span1></label>
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
                </div><hr class="">
                <div class="container">
                    <button type="button" class="btn btn-sm  btn-default" data-dismiss="modal"><i class="fa fa-close"></i> Annuler</button>
                    <button class="btn btn-sm btn-success pull-right"><i class="fa fa-check"></i> Modifier cette fiche</button>
                </div>
                <br>
            </form>

        </div>
    </div>
</div>




<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->


<div class="modal fade" id="modal-entretien">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-blue">
                <h4 class="modal-title">Nouvel entretien du véhicule</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <form method="POST" id="formEntretien">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-4">
                            <label>Quel type d'entretien <span1>*</span1></label>
                            <div class="form-group">
                                <?php Native\BINDING::html("select", "typeentretienvehicule"); ?>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <label>Nom de la fiche (Titre) <span1>*</span1></label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" required placeholder="Ex...Nouvelle Vidange 2019">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <label>Numero de cette fiche </label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="numero_piece" placeholder="">
                            </div>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col-sm-4">
                            <label>Entretien fait le <span1>*</span1></label>
                            <div class="form-group">
                                <input type="date" class="form-control" name="date_etablissement"  required autocomplete="off">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <label>Me rappeler le prochain le <span1>*</span1></label>
                            <div class="form-group">
                                <input type="date" class="form-control" name="finished" required autocomplete="off">
                            </div>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col-sm-4">
                            <label>Illustration 1</label>
                            <div class="">
                                <img style="width: 80px;" src="" class="img-thumbnail logo">
                                <input class="hide" type="file" name="photo1">
                                <button type="button" class="btn btn-sm bg-blue pull-right btn_image"><i class="fa fa-image"></i> Ajouter une image</button>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <label>Illustration 2</label>
                            <div class="">
                                <img style="width: 80px;" src="" class="img-thumbnail logo">
                                <input class="hide" type="file" name="photo2">
                                <button type="button" class="btn btn-sm bg-blue pull-right btn_image"><i class="fa fa-image"></i> Ajouter une image</button>
                            </div>
                        </div>

                    </div>
                </div><hr class="">
                <div class="container">
                    <button type="button" class="btn btn-sm  btn-default" data-dismiss="modal"><i class="fa fa-close"></i> Annuler</button>
                    <button class="btn btn-sm btn-success pull-right"><i class="fa fa-check"></i> Ajouter la fiche de visite technique</button>
                </div>
                <br>
            </form>

        </div>
    </div>
</div>



<div class="modal fade" id="modal-entretienvehicule">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-orange">
                <h4 class="modal-title">Modifier les infos de l'entretien</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <form method="POST" id="formAssur" class="shamman-form" classname="entretienvehicule">
             <div class="modal-body">
                <div class="row">
                    <div class="col-sm-4">
                        <label>Quel type d'entretien <span1>*</span1></label>
                        <div class="form-group">
                            <?php Native\BINDING::html("select", "typeentretienvehicule"); ?>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <label>Nom de la fiche (Titre) <span1>*</span1></label>
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" required placeholder="Ex...Nouvelle Vidange 2019">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <label>Numero de cette fiche </label>
                        <div class="form-group">
                            <input type="text" class="form-control" name="numero_piece" placeholder="">
                        </div>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-sm-4">
                        <label>Entretien fait le <span1>*</span1></label>
                        <div class="form-group">
                            <input type="date" class="form-control" name="date_etablissement"  required autocomplete="off">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <label>Me rappeler le prochain le <span1>*</span1></label>
                        <div class="form-group">
                            <input type="date" class="form-control" name="finished" required autocomplete="off">
                        </div>
                    </div>
                </div><br>
            </div><hr class="">
            <div class="container">
                <button type="button" class="btn btn-sm  btn-default" data-dismiss="modal"><i class="fa fa-close"></i> Annuler</button>
                <button class="btn btn-sm btn-success pull-right"><i class="fa fa-check"></i> Modifier cette fiche</button>
            </div>
            <br>
        </form>

    </div>
</div>
</div>




<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->


<div class="modal fade" id="modal-sin">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-red">
                <h4 class="modal-title">Nouveau sinistre du véhicule</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <form method="POST" id="formSinistre">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-4">
                            <label>Quel type de sinistre <span1>*</span1></label>
                            <div class="form-group">
                                <?php Native\BINDING::html("select", "typesinistre"); ?>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <label>Nom de la fiche (Titre) <span1>*</span1></label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" required placeholder="Ex...Crevaison pneu gauche">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <label>plus de détails</label>
                            <div class="form-group">
                                <textarea class="form-control" rows="4" name="comment"></textarea>
                            </div>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col-sm-4">
                            <label>Sinistre survenu le <span1>*</span1></label>
                            <div class="form-group">
                                <input type="date" class="form-control" name="date_etablissement"  required autocomplete="off">
                            </div>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col-sm-4">
                            <label>Illustration 1</label>
                            <div class="">
                                <img style="width: 80px;" src="" class="img-thumbnail logo">
                                <input class="hide" type="file" name="photo1">
                                <button type="button" class="btn btn-sm bg-red pull-right btn_image"><i class="fa fa-image"></i> Ajouter une image</button>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <label>Illustration 2</label>
                            <div class="">
                                <img style="width: 80px;" src="" class="img-thumbnail logo">
                                <input class="hide" type="file" name="photo2">
                                <button type="button" class="btn btn-sm bg-red pull-right btn_image"><i class="fa fa-image"></i> Ajouter une image</button>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <label>Illustration 3</label>
                            <div class="">
                                <img style="width: 80px;" src="" class="img-thumbnail logo">
                                <input class="hide" type="file" name="photo3">
                                <button type="button" class="btn btn-sm bg-red pull-right btn_image"><i class="fa fa-image"></i> Ajouter une image</button>
                            </div>
                        </div>

                    </div>
                </div><hr class="">
                <div class="container">
                    <button type="button" class="btn btn-sm  btn-default" data-dismiss="modal"><i class="fa fa-close"></i> Annuler</button>
                    <button class="btn btn-sm btn-success pull-right"><i class="fa fa-check"></i> Déclarer le sinistre</button>
                </div>
                <br>
            </form>

        </div>
    </div>
</div>



<div class="modal fade" id="modal-sinistre">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-orange">
                <h4 class="modal-title">Modifier les infos du sinistre</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <form method="POST" id="formAssur" class="shamman-form" classname="sinistre">
             <div class="modal-body">
                <div class="row">
                    <div class="col-sm-4">
                        <label>Quel type de sinistre <span1>*</span1></label>
                        <div class="form-group">
                            <?php Native\BINDING::html("select", "typesinistre"); ?>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <label>un nom pour représenter<span1>*</span1></label>
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" required placeholder="Ex...Crevaison pneu gauche">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <label>plus de détails</label>
                        <div class="form-group">
                            <textarea class="form-control" rows="4" name="comment"></textarea>
                        </div>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-sm-4">
                        <label>Sinistre survenu le <span1>*</span1></label>
                        <div class="form-group">
                            <input type="date" class="form-control" name="date_etablissement"  required autocomplete="off">
                        </div>
                    </div>
                </div>
            </div><br>
        </div><hr class="">
        <div class="container">
            <button type="button" class="btn btn-sm  btn-default" data-dismiss="modal"><i class="fa fa-close"></i> Annuler</button>
            <button class="btn btn-sm btn-success pull-right"><i class="fa fa-check"></i> Modifier la fiche de sinistre</button>
        </div>
        <br>
    </form>

</div>
</div>
</div>




<!-- <div class="modal fade" id="modal-imagepiece">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <form method="POST" id="formPieceimage">
                <div class="modal-body">

                    <div class="row">                        
                        <div class="col-12">
                            <label>Votre photo à ajouter</label>
                            <div class="">
                                <img style="width: 100%;" src="" class="img-thumbnail logo">
                                <input class="hide" type="file" name="photo1">
                                <button type="button" class="btn btn-sm btn-block btn-success pull-right btn_image"><i class="fa fa-image"></i> Ajouter une image</button>
                                <br>
                            </div>
                        </div>
                    </div>

                </div><hr class="">
                <div class="container">
                    <button type="button" class="btn btn-sm  btn-default" data-dismiss="modal"><i class="fa fa-close"></i> Annuler</button>
                    <button class="btn btn-sm btn-success pull-right"><i class="fa fa-check"></i> Ajouter cette photo</button>
                </div>
                <br>
            </form>
        </div>
    </div>
</div> -->