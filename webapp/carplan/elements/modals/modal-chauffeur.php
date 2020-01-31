<div class="modal fade" id="modal-chauffeur">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-green">
                <h5 class="modal-title">Formulaire du chauffeur</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <form method="POST" class="formShamman" classname="chauffeur">
                <div class="modal-body">

                    <div class="row">
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
                        <div class="col-md-4 col-sm-6">
                            <label>Nationalité <span1>*</span1></label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="nationalite" required>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <label>Matricule <span1>*</span1></label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="matricule" required>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <label>Sexe <span1>*</span1></label>
                            <div class="form-group">
                                <?php Native\BINDING::html("select", "sexe") ?>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <label>Email <span1>*</span1></label>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <label>Situation géographique <span1>*</span1></label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="adresse" required>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <label>Contact <span1>*</span1></label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="contact" required>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <label>Contact 2 </label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="contact2" >
                            </div>
                        </div>
                    </div>

                     <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <label>Categorie du permis <span1>*</span1></label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="typepermis" required placeholder="EX...ABCDE">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <label>Numero de permis <span1>*</span1></label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="numero_permis" required>
                            </div>
                        </div>
                   <!--      <div class="col-md-4 col-sm-6">
                            <label>Date de fin du permis <span1>*</span1></label>
                            <div class="form-group">
                                <input type="date" class="form-control" name="date_fin_permis" required>
                            </div>
                        </div> -->
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