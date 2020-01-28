<!DOCTYPE html>
<html>

<?php include($this->rootPath("webapp/prestataire/elements/templates/head.php")); ?>


<body class="fixed-sidebar">

    <div id="wrapper">

        <?php include($this->rootPath("webapp/prestataire/elements/templates/sidebar.php")); ?>  

        <div id="page-wrapper" class="gray-bg">

          <?php include($this->rootPath("webapp/prestataire/elements/templates/header.php")); ?>  


          <div class="row wrapper border-bottom page-heading" style="margin-top: 13%">
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
                                <a href=""  class="btn btn-sm btn-white"><i class="fa fa-edit"></i> Modifier les Infos </a>
                            </div>
                        </div> 
                    </div>                       
                </div>
            </div>
        </div>
        <div class="col-sm-4">
           <div class="ibox">
            <div class="ibox-title">
                <h5>Supports de contact</h5>
            </div>
            <div class="ibox-content text-center">

                <h3><i class="fa fa-phone"></i> +43 100 783 001</h3>
                <p class="font-bold">email@lorem2.com</p>
                <div class="m-t-sm">
                    <div class="btn-group">
                        <a href=""  class="btn btn-sm btn-white"><i class="fa fa-edit"></i> Modifier les supports </a>
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
    <div class="col-lg-3">
        <div class="widget style1">
            <div class="row">
                <div class="col-4 text-center">
                    <i class="fa fa-trophy fa-5x"></i>
                </div>
                <div class="col-8 text-right">
                    <span> Today income </span>
                    <h2 class="font-bold">$ 4,232</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="widget style1 navy-bg">
            <div class="row">
                <div class="col-4">
                    <i class="fa fa-cloud fa-5x"></i>
                </div>
                <div class="col-8 text-right">
                    <span> Today degrees </span>
                    <h2 class="font-bold">26'C</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="widget style1 lazur-bg">
            <div class="row">
                <div class="col-4">
                    <i class="fa fa-envelope-o fa-5x"></i>
                </div>
                <div class="col-8 text-right">
                    <span> New messages </span>
                    <h2 class="font-bold">260</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="widget style1 yellow-bg">
            <div class="row">
                <div class="col-4">
                    <i class="fa fa-music fa-5x"></i>
                </div>
                <div class="col-8 text-right">
                    <span> New albums </span>
                    <h2 class="font-bold">12</h2>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include($this->rootPath("webapp/prestataire/elements/templates/footer.php")); ?>

</div>


<?php include($this->rootPath("webapp/prestataire/elements/templates/script.php")); ?>


</body>

</html>
