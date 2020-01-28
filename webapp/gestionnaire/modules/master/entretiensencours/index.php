<!DOCTYPE html>
<html>

<?php include($this->rootPath("webapp/gestionnaire/elements/templates/head.php")); ?>


<body class="fixed-sidebar">

    <div id="wrapper">

        <?php include($this->rootPath("webapp/gestionnaire/elements/templates/sidebars/sidebar.php")); ?>  

        <div id="page-wrapper" class="gray-bg">

          <?php include($this->rootPath("webapp/gestionnaire/elements/templates/header.php")); ?>  

          <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-sm-5">
                <h2 class="text-uppercase">Les demandes en attente</h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.html">This is</a>
                    </li>
                    <li class="breadcrumb-item active">
                        <strong>Breadcrumb</strong>
                    </li>
                </ol>
            </div>
            <div class="col-sm-7">
               <div class="row">
                <div class="col-md-4">
                    <div class="widget style1 navy-bg">
                        <div class="row">
                            <div class="col-4">
                                <i class="fa fa-cloud fa-3x"></i>
                            </div>
                            <div class="col-8 text-right">
                                <span> Today degrees </span>
                                <h2 class="font-bold">26'C</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="widget style1 lazur-bg">
                        <div class="row">
                            <div class="col-4">
                                <i class="fa fa-envelope-o fa-3x"></i>
                            </div>
                            <div class="col-8 text-right">
                                <span> messages </span>
                                <h2 class="font-bold">260</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="widget style1 yellow-bg">
                        <div class="row">
                            <div class="col-4">
                                <i class="fa fa-music fa-3x"></i>
                            </div>
                            <div class="col-8 text-right">
                                <span> New albums </span>
                                <h2 class="font-bold">12</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="wrapper wrapper-content">
        <div class="ibox">
            <div class="ibox-title">
                <h5>All projects assigned to this account</h5>
                <div class="ibox-tools">
                    <a href="" class="btn btn-primary btn-xs">Create new project</a>
                </div>
            </div>
            <div class="ibox-content">
                <table class="table table-hover">
                    <tbody>
                        <?php for ($i=0; $i < 15; $i++) { ?>
                        <tr>
                            <td class="project-status">
                                <span class="label label-primary">Active</span>
                            </td>
                            <td class="project-title">
                                <a href="project_detail.html">Contract with Zender Company</a>
                                <br/>
                                <small>Created 14.08.2014</small>
                            </td>
                            <td class="project-completion">
                                <small>Completion with: 48%</small>
                                <div class="progress progress-mini">
                                    <div style="width: 48%;" class="progress-bar"></div>
                                </div>
                            </td>
                            <td class="project-people">
                                <a href=""><img alt="image" src="<?= $this->stockage("images", "vehicules", "default.jpg") ?>"></a>
                                <a href=""><img alt="image" src="<?= $this->stockage("images", "vehicules", "default.jpg") ?>"></a>
                                <a href=""><img alt="image" src="<?= $this->stockage("images", "vehicules", "default.jpg") ?>"></a>
                                <a href=""><img alt="image" src="<?= $this->stockage("images", "vehicules", "default.jpg") ?>"></a>
                                <a href=""><img alt="image" src="<?= $this->stockage("images", "vehicules", "default.jpg") ?>"></a>
                            </td>
                            <td class="project-actions">
                                <a href="#" class="btn btn-white btn-sm"><i class="fa fa-folder"></i> View </a>
                                <a href="#" class="btn btn-white btn-sm"><i class="fa fa-pencil"></i> Edit </a>
                            </td>
                        </tr>
                        <?php  } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


        <?php include($this->rootPath("webapp/gestionnaire/elements/templates/footer.php")); ?>


    </div>
</div>


<?php include($this->rootPath("webapp/gestionnaire/elements/templates/script.php")); ?>


</body>

</html>
