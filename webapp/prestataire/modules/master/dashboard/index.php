<!DOCTYPE html>
<html>

<?php include($this->rootPath("webapp/prestataire/elements/templates/head.php")); ?>


<body class="fixed-sidebar">

    <div id="wrapper">

        <?php include($this->rootPath("webapp/prestataire/elements/templates/sidebar.php")); ?>  

        <div id="page-wrapper" class="gray-bg">

            <?php include($this->rootPath("webapp/prestataire/elements/templates/header.php")); ?>  

            <div class="wrapper wrapper-content">
                <div class="animated fadeInRightBig">

                    <div class="row">
                        <div class="col-sm-4">
                            <div class="ibox">
                                <div class="ibox-content text-center">
                                   <div class="row">
                                    <div class="col-3">
                                        <img alt="image" class="img-responsive" style="height: 75px;" src="<?= $this->stockage("images", "societe", "avatar.png") ?>">
                                    </div>
                                    <div class="col-9">
                                        <h2>ARTCI Parc Auto</h2>

                                        <p class="font-bold">Marcory Anomanbo</p>
                                        <p class="mp0">Concessionnaire</p>
                                        <p class="font-bold">RC N° 145256/44458/965</p>

                                        <div class="text-center">
                                            <a href=""  class="btn btn-xs btn-white"><i class="fa fa-edit"></i> Modifier les Infos </a>
                                            <a href="" class="btn btn-xs btn-danger"><i class="fa fa-close"></i> Supprimer</a>
                                        </div>
                                    </div> 
                                </div>                       
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="ibox">
                            <div class="ibox-title">
                                <h5>Support</h5>
                            </div>
                            <div class="ibox-content text-center">

                                <h3><i class="fa fa-phone"></i> +43 100 783 001</h3>
                                <p class="font-bold">email@lorem2.com</p>
                                <div class="m-t-sm">
                                    <div class="btn-group">
                                        <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-phone"></i> Appeler</a>
                                        <a href="#" class="btn btn-white btn-sm"><i class="fa fa-envelope"></i> Envoyer mail</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="ibox">
                            <div class="ibox-content">
                                <p class="font-bold">
                                    Autres Informations
                                </p>

                                <hr/>
                                <div>
                                    <a href="#" class="product-name"> Product 1</a>
                                    <div class="small m-t-xs">
                                        Many desktop publishing packages and web page editors now.
                                    </div>
                                    <div class="m-t text-righ">
                                        <a href="#" class="btn btn-xs btn-outline btn-primary">Info <i class="fa fa-long-arrow-right"></i> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox">
                            <div class="ibox-title">
                                <h5 class="text-uppercase">Les demandes de cotations en cours</h5>
                                <div class="ibox-tools">
                                    <button style="margin-top: -5%;" data-toggle="modal" data-target="#modal-demandevehicule" class="btn btn-primary btn-xs dim"><i class="fa fa-plus"></i> Demander un véhicule</button>
                                </div>
                            </div>
                            <div class="ibox-content">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="animated fadeInRight">
                                           <table class="footable table table-stripped toggle-arrow-tiny">
                                            <thead>
                                                <tr>
                                                    <th data-toggle="true">Project</th>
                                                    <th>Name</th>
                                                    <th>Phone</th>
                                                    <th data-hide="all">Company</th>
                                                    <th data-hide="all">Completed</th>
                                                    <th data-hide="all">Task</th>
                                                    <th data-hide="all">Date</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Project - This is example of project</td>
                                                    <td>Patrick Smith</td>
                                                    <td>0800 051213</td>
                                                    <td>Inceptos Hymenaeos Ltd</td>
                                                    <td><span class="pie">0.52/1.561</span></td>
                                                    <td>20%</td>
                                                    <td>Jul 14, 2013</td>
                                                    <td><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <td colspan="5">
                                                        <ul class="pagination float-right"></ul>
                                                    </td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>


        <?php include($this->rootPath("webapp/prestataire/elements/templates/footer.php")); ?>


    </div>
</div>


<?php include($this->rootPath("webapp/prestataire/elements/templates/script.php")); ?>


</body>

</html>
