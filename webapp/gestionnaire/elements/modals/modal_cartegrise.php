
<div class="modal fade" id="modal-cartegrise">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-silver">
                <h4 class="modal-title">Nouvelle pièce de véhicule</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <form method="POST" id="formCartegrise">
                <div class="modal-body">

                    <div class="row">
                        <div class="col-sm-4">
                            <label>Nom la pièce (Titre) <span1>*</span1></label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" required placeholder="Ex... Carte grise de 2019">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <label>Numero de cette pièce <span1>*</span1></label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="numero_piece" required placeholder="">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <label>Etablie le <span1>*</span1></label>
                            <div class="form-group">
                                <input type="date" class="form-control" name="date_etablissement" required >
                            </div>
                        </div>
                    </div><br>
                    <div class="row">                        
                        <div class="col-sm-4">
                            <label>Couleur de la voiture <span1>*</span1></label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="couleur" required >
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <label>Type d'energie <span1>*</span1></label>
                            <div class="form-group">
                                <?php Native\BINDING::html("select", "energie"); ?>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <label>Proprietaire actuel <span1>*</span1></label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="proprietaire" required >
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
                <div class="container"><br>
                    <button type="button" class="btn btn-sm  btn-default" data-dismiss="modal"><i class="fa fa-close"></i> Annuler</button>
                    <button class="btn btn-sm btn-default pull-right"><i class="fa fa-check"></i> Ajouter la carte grise</button>
                </div>
                <br>
            </form>

        </div>
    </div>
</div>


