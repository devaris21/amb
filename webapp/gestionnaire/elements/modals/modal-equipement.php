<div class="modal fade" id="modal-equipement">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-blue">
                <h4 class="modal-title">Ajouter un nouveau produit/service</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <form method="POST" class="shamman-form" classname="equipement">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-4">
                            <label>Le type d'équipement<span1>*</span1></label>
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
                            <label>Marque de l'equipement<span1>*</span1></label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="marque" required>
                            </div>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col-sm-4">
                            <label>Stock actuel de l'equipement<span1>*</span1></label>
                            <div class="form-group">
                                <input type="number" class="form-control" name="stock" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <label>Décrivez l'equipement</label>
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
