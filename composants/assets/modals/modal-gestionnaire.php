
<div class="modal inmodal fade" id="modal-gestionnaire">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title">Gestionnaire du parc AMB</h4>
                <small class="font-bold">Renseigner ces champs pour enregistrer le gestionnaire</small>
            </div>
            <form method="POST" class="formShamman" classname="gestionnaire">
                <div class="modal-body">

                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <label>Matricule<span1>*</span1></label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="matricule" required>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <label>Nom <span1>*</span1></label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" required>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <label>Prenom <span1>*</span1></label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="lastname" required>
                            </div>
                        </div>                        
                    </div>

                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <label>Adresse email <span1>*</span1></label>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" required>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <label>Contact <span1>*</span1></label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="contact" required>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 unmodified">
                            <label>Type de gestionnaire <span1>*</span1></label>
                            <div class="form-group">
                             <?php Native\BINDING::html("select", "typegestionnaire"); ?>
                         </div>
                     </div>
                 </div>
             </div><hr>
             <div class="container">
                <input type="hidden" name="id">
                <button type="button" class="btn btn-sm  btn-default" data-dismiss="modal"><i class="fa fa-close"></i> Annuler</button>
                <button class="btn btn-sm bg-green pull-right"><i class="fa fa-refresh"></i> Valider le formulaire</button>
            </div>
            <br>
        </form>
    </div>
</div>
</div>