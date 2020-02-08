
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
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-sm-6">
                                    <label>Quel type de sinistre <span1>*</span1></label>
                                    <div class="form-group">
                                        <?php Native\BINDING::html("select", "typesinistre"); ?>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <label>Nom de la fiche (Titre) <span1>*</span1></label>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name" required placeholder="Ex...Crevaison pneu gauche">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-5">
                                    <label>Sinistre survenu le <span1>*</span1></label>
                                    <div class="form-group">
                                        <input type="datetime-local" class="form-control" name="date_etablissement"  required autocomplete="off">
                                    </div>
                                </div>
                                <div class="col-sm-7">
                                    <label>Lieu du sinistre <span1>*</span1></label>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="lieudrame"  required autocomplete="off">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="">
                                <label>plus de détails</label>
                                <div class="form-group">
                                    <textarea class="form-control" rows="6" name="comment"></textarea>
                                </div>
                            </div>
                        </div>
                    </div><hr>
                    <div class="row">
                        <div class="col-sm-4">
                            <label>Il y a eu ....</label>
                            <div class="form-group">
                                <label><input type="radio" name="constat" value="0"> Arrangement à l'amiable</label><br>
                                <label><input type="radio" name="constat" value="1"> Intervention de la police</label>
                                <br><br>
                                <label><input type="checkbox" name="pompiers" value="1"> Intervention des sapeurs pompiers</label>
                            </div>
                        </div>
                        <div class="col-sm-8 border-left">
                            <h2 class="subtitle mp0">L'AUTRE PARTIE</h2>
                            <div class="row">
                                <div class="col-sm-6">
                                    <label>Nom et Prénom </label>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="nomautre" >
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <label>Modèle et marque du véhicule  </label>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="vehicule" >
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <label>Sa compagnie d'assurance </label>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="assurance" >
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <label>Son contact </label>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="contactautre" >
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><br>
                    
                    <hr>
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
            <form method="POST" id="formAssur" class="formShamman" classname="sinistre">
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
