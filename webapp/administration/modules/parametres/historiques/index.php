<!DOCTYPE html>
<html>

<?php include($this->rootPath("webapp/administration/elements/templates/head.php")); ?>


<body class="fixed-sidebar">

    <div id="wrapper">

        <?php include($this->rootPath("webapp/administration/elements/templates/sidebar.php")); ?>  

        <div id="page-wrapper" class="gray-bg">

          <?php include($this->rootPath("webapp/administration/elements/templates/header.php")); ?>  

          <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-sm-4">
                <h2 class="text-uppercase">Historiques des actions</h2>
                <div class="row">
                    <div class="col-sm-6">
                        <input class="form-control" type="date" name="date1" value="<?= date("Y-m-d") ?>">
                    </div>
                    <div class="col-sm-6">
                        <input class="form-control" type="date" name="date1" value="<?= date("Y-m-d") ?>">
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="title-action">
                    
                </div>
            </div>
        </div>

        <div class="wrapper wrapper-content">
            <div class="animated fadeInRightBig">

                <div class="ibox">
                    <div class="ibox-content">
                        <table class="table table-striped table-hover" >
                            <tbody id="historique">
                                <?php foreach ($historiques as $key => $historique) {?>
                                 <tr>
                                    <td><i class="fa fa-clock-o fa-3x"></i></td>
                                    <td>
                                        <h4 class="mp0"><?= $historique->sentense  ?></h4>
                                        <small>Par <strong><?= $historique->auteur()  ?></strong> <i class="fa fa-clock-o"></i> <?= depuis($historique->created)  ?></small>
                                    </td>
                                    <td class="faq-item" style="width: 250px;">
                                        <span class="small font-bold">Robert Nowak</span>
                                        <div class="tag-list">
                                            <span class="tag-item"><?= $historique->record  ?></span> =>
                                            <span class="tag-item"><?= $historique->typeSave() ?></span>
                                        </div>
                                    </td>
                                    <td style="width: 100px;">
                                        <span class="small font-bold"><?= $historique->type() ?> </span><br/>
                                        <?= $historique->auteur() ?>
                                    </td>
                                </tr>
                            <?php  } ?>                        
                        </tbody>
                    </table>
                </div>
                <div class="ibox-title text-center">
                    <div class="btn-group">
                        <div class="pagination">
                            <?php for ($i=1; $i <= $pagestotale ; $i++) {
                                if ($i == $page) {  ?>
                                    <a class="gras"><?= $i  ?></a>
                                <?php }elseif ($i == $page+1) {  ?>
                                    <a class="btn btn-xs next" href="<?= $this->url("administration", "parametres", "historiques", $i)  ?>"><?= $i  ?></a>
                                <?php }else{  ?>
                                    <a class="btn btn-xs" href="<?= $this->url("administration", "parametres", "historiques", $i)  ?>" ><?= $i  ?></a>
                                <?php } 
                            } ?>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <?php include($this->rootPath("webapp/administration/elements/templates/footer.php")); ?>


</div>
</div>


<?php include($this->rootPath("webapp/administration/elements/templates/script.php")); ?>


</body>

</html>
