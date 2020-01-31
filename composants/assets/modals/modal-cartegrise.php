
<div class="modal inmodal fade" id="modal-cartegrise">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <h4 class="modal-title">Formulaire pour la carte grise</h4>
            <small class="font-bold">Renseigner ces champs pour enregistrer la carte grise</small>
        </div>
        <form method="POST" class="formShamman" classname="cartegrise" enctype="multipart/form-data">
            <div class="modal-body">

                <div class="row">
                    <div class="col-sm-4">
                        <label>Nom la pièce (Titre) <span1>*</span1></label>
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" required placeholder="Ex... Carte grise de 2020">
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
                       <!--  <div class="col-sm-4">
                            <label>Proprietaire actuel <span1>*</span1></label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="proprietaire" required >
                            </div>
                        </div> -->
                        <div class="col-sm-4">
                            <label>Coût de la pièce </label>
                            <div class="form-group">
                                <input type="number" class="form-control" name="price" autocomplete="off">
                            </div>
                        </div>  
                    </div><br>
                    <div class="row">  
                        <div class="col-sm-4">
                            <label>Illustration 1</label>
                            <div class="">
                                <img style="width: 80px;" src="" class="img-thumbnail logo">
                                <input class="hide" type="file" name="image1">
                                <button type="button" class="btn btn-sm btn-success pull-right btn_image"><i class="fa fa-image"></i> Ajouter une image</button>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <label>Illustration 2</label>
                            <div class="">
                                <img style="width: 80px;" src="" class="img-thumbnail logo">
                                <input class="hide" type="file" name="image2">
                                <button type="button" class="btn btn-sm btn-success pull-right btn_image"><i class="fa fa-image"></i> Ajouter une image</button>
                            </div>
                        </div>

                    </div>
                </div><hr class="mp0">
                <div class="container"><br>
                    <input type="hidden" name="id">
                    <button type="button" class="btn btn-sm dim  btn-default" data-dismiss="modal"><i class="fa fa-close"></i> Annuler</button>
                    <button class="btn btn-sm btn-default dim pull-right"><i class="fa fa-check"></i> Valider la carte grise</button>
                </div>
                <br>
            </form>

        </div>
    </div>
</div>


