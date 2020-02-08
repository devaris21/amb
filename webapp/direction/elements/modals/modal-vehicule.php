
<div class="modal fade" id="modal-vehicule">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-green">
                <h5 class="modal-title">Formulaire du véhicule</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <form method="POST" class="formShamman" classname="vehicule">
                <div class="modal-body">

                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <label>Immatriculation <span1>*</span1></label>
                            <div class="form-group">
                                <input type="text" class="form-control input-xs" name="immatriculation" required placeholder="EX... 0102 FG 01">
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <label>Type du vehicule <span1>*</span1></label>
                            <div class="form-group">
                                <?php Native\BINDING::html("select", "typevehicule") ?>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <label>Choisir la marque<span1>*</span1></label>
                            <div class="form-group">
                                <?php Native\BINDING::html("select", "marque") ?>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <label>Le modèle du vehicule<span1>*</span1></label>
                            <div class="form-group">
                                <input type="text" class="form-control input-xs" name="modele" required placeholder="Ex...BMW 362 X2">
                            </div>
                        </div>
                    </div><hr>

                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <label>Groupe de <span1>*</span1></label>
                            <div class="form-group">
                                <?php Native\BINDING::html("select", "groupevehicule") ?>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <label>Type Energie <span1>*</span1></label>
                            <div class="form-group">
                                <?php Native\BINDING::html("select", "energie") ?>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <label>Type Transmission <span1>*</span1></label>
                            <div class="form-group">
                                <?php Native\BINDING::html("select", "typetransmission") ?>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-6">
                            <label>Puissance<span1>*</span1></label>
                            <div class="form-group">
                                <input type="number" class="form-control input-xs" min=1 value=1 name="puissance" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-2 col-sm-6">
                            <label>nbr portes<span1>*</span1></label>
                            <div class="form-group">
                                <input type="number" class="form-control input-xs" name="nb_porte" min=1 value=5 required>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-6">
                            <label>nbr places<span1>*</span1></label>
                            <div class="form-group">
                                <input type="number" class="form-control input-xs" name="nb_place" min=1 value=5 required>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <label>Couleur </label>
                            <div class="form-group">
                                <input type="text" class="form-control input-xs" name="couleur" >
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <label>Etiquette </label>
                            <div class="form-group">
                                <input type="text" class="form-control input-xs" name="etiquette" >
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-6">
                            <label>kilometrage <span1>*</span1></label>
                            <div class="form-group">
                                <input type="number" class="form-control input-xs" name="kilometrage" min=0 value=0 required>
                            </div>
                        </div>
                    </div><hr>

                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <label>N° de Chasis </label>
                            <div class="form-group">
                                <input type="text" class="form-control input-xs" name="chasis" maxlength="17">
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <label>Date d'acquisition </label>
                            <div class="form-group">
                                <input type="date" class="form-control input-xs" name="date_acquisition" >
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <label>Date mise en circulation </label>
                            <div class="form-group">
                                <input type="date" class="form-control input-xs" name="date_mise_circulation" >
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-6 unmodified">
                            <label>Prix </label>
                            <div class="form-group">
                                <input type="number" class="form-control input-xs" name="price" value="0" min=0>
                            </div>
                        </div>
                    </div><hr>

                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <label>Ajouter un note </label>
                            <div class="form-group">
                                <textarea class="form-control" rows="4" name="comment"></textarea>
                            </div>
                        </div>
                        <div class="col-sm-4 unmodified">
                            <label>Image du véhicule</label>
                            <div class="">
                                <img style="width: 80px;" src="" class="img-thumbnail logo">
                                <input class="hide" type="file" name="photo">
                                <button type="button" class="btn btn-sm bg-orange pull-right btn_image"><i class="fa fa-image"></i> Ajouter une image</button>
                            </div>
                        </div>
                    </div>

                </div><hr>
                <div class="container">
                    <input type="hidden" name="id">
                    <button type="button" class="btn btn-sm  btn-default" data-dismiss="modal"><i class="fa fa-close"></i> Annuler</button>
                    <button class="btn btn-sm btn-success pull-right"><i class="fa fa-refresh"></i> Valider le formulaire</button>
                </div>
                <br>
            </form>
        </div>
    </div>
</div>