<!DOCTYPE html>
<html>

<?php include($this->rootPath("webapp/gestionnaire/elements/templates/head.php")); ?>


<body class="fixed-sidebar">

    <div id="wrapper">

        <?php include($this->rootPath("webapp/gestionnaire/elements/templates/sidebars/sidebar.php")); ?>  

        <div id="page-wrapper" class="gray-bg">

          <?php include($this->rootPath("webapp/gestionnaire/elements/templates/header.php")); ?>  

          <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-sm-12">
                <h2 class="text-uppercase gras text-muted">Rechercher parmi la centaine de produits de tous vos partenaires !!</h2>
                <span>Comparer et choisissez librement !</span>
            </div>
        </div>

        <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-sm-3 border-right">
                <h3 class="gras">Par nom de produits</h3>
                <div class="form-group">
                    <input type="text" id="rechercher" class="form-control">
                </div>
            </div>
            <div class="col-sm-3 border-right">
                <h3 class="gras">Par type de produits</h3>
                <?php foreach (Home\TYPEPRODUIT::getAll() as $key => $value) { ?>
                    <div class="checkbox checkbox-primary">
                        <input type="checkbox" name="typeproduit" checked id="type<?= $value->getId() ?>"><label for="type<?= $value->getId() ?>"> <?= $value->name ?></label>
                    </div>
                <?php } ?>
            </div>

            <div class="col-md-6">
                <h3>Par Intervalle de prix</h3>
                <div id="ionrange_1"></div>
                <!-- TODO gerer changement d'intervalle de prix -->
            </div>
        </div>

        <div class="wrapper wrapper-content">
            <div class="animated fadeInRightBig">
                <div class="ibox">
                    <div class="ibox-content">
                        <div class="row">
                         <?php foreach ($produits as $key => $produit) {
                            $produit->actualise(); ?>
                            <div class="col-md-3 produit type<?= $produit->typeproduit->getId() ?>" data-price="<?= $produit->price; ?>">
                                <div class="ibox">
                                    <div class="ibox-content product-box">
                                        <div class="border-bottom" style="height: 200px;">
                                            <img style="width: 100%;" src="<?= $this->stockage("images", "produits", $produit->image) ?>">
                                        </div>
                                        <div class="product-desc">
                                            <span class="product-price">
                                                <?= money($produit->price); ?> <?= $params->devise ?> | <?= $produit->stock ?>
                                            </span>
                                            <small class="text-muted"><?= $produit->prestataire->name() ?> // <?= $produit->typeproduit->name ?>
                                        </small>
                                        <a href="#" class="product-name"> <?= $produit->name ?>
                                    </a>
                                    <!-- TODO element truncate -->
                                    <div class="border-bottom small m-t-xs" style="height: 50px; overflow: hidden;">
                                        <?= $produit->comment ?>
                                    </div>
                                    <div class="m-t text-center">
                                        <a href="<?= $this->url("gestionnaire", "users", "prestataire", $produit->prestataire->getId()) ?>" class="btn btn-xs btn-outline btn-primary"><i class="fa fa-eye"></i> Aller à <?= $produit->prestataire->name() ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>     
            </div>
        </div>
    </div>
</div>
</div>


<?php include($this->rootPath("webapp/gestionnaire/elements/templates/footer.php")); ?>


</div>
</div>


<?php include($this->rootPath("webapp/gestionnaire/elements/templates/script.php")); ?>

<script type="text/javascript">
  $("#ionrange_1").ionRangeSlider({
    min: 0,
    max: 150000,
    step: 10000,
    type: 'double',
    postfix: " f",
    prettify: false,
    hasGrid: true
});
</script>


</body>

</html>
