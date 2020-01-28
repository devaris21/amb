<!DOCTYPE html>
<html>

<?php include($this->rootPath("webapp/gestionnaire/elements/templates/head.php")); ?>


<body class="fixed-sidebar">

    <div id="wrapper">

        <?php include($this->rootPath("webapp/gestionnaire/elements/templates/sidebars/sidebar.php")); ?>  

        <div id="page-wrapper" class="gray-bg">
          
          <?php include($this->rootPath("webapp/gestionnaire/elements/templates/header.php")); ?>  

          <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-sm-4">
                <h2>This is main title</h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.html">This is</a>
                    </li>
                    <li class="breadcrumb-item active">
                        <strong>Breadcrumb</strong>
                    </li>
                </ol>
            </div>
            <div class="col-sm-8">
                <div class="title-action">
                    <a href="" class="btn btn-primary">This is action area</a>
                </div>
            </div>
        </div>

        <div class="wrapper wrapper-content">
            <div class="text-center animated fadeInRightBig">
                <div class="tabs-container">

                        <div class="tabs-left">
                            <ul class="nav nav-tabs">
                                <li><a class="nav-link active" data-toggle="tab" href="#tab-6"> Direction de Lorem ipsum dolor.</a></li>
                                <li><a class="nav-link" data-toggle="tab" href="#tab-7">Direction de Lorem ipsum dolor</a></li>
                                <a href="" class="btn btn-primary">This is action area</a>
                            </ul>
                            <div class="tab-content ">
                                <div id="tab-6" class="tab-pane active">
                                    <div class="panel-body">
                                                                <div class="table-responsive">
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>

                                                        <th>#</th>
                                                        <th>Project </th>
                                                        <th>Name </th>
                                                        <th>Phone </th>
                                                        <th>Company </th>
                                                        <th>Completed </th>
                                                        <th>Task</th>
                                                        <th>Date</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Project <small>This is example of project</small></td>
                                                        <td>Patrick Smith</td>
                                                        <td>0800 051213</td>
                                                        <td>Inceptos Hymenaeos Ltd</td>
                                                        <td><span class="pie">0.52/1.561</span></td>
                                                        <td>20%</td>
                                                        <td>Jul 14, 2013</td>
                                                        <td><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Alpha project</td>
                                                        <td>Alice Jackson</td>
                                                        <td>0500 780909</td>
                                                        <td>Nec Euismod In Company</td>
                                                        <td><span class="pie">6,9</span></td>
                                                        <td>40%</td>
                                                        <td>Jul 16, 2013</td>
                                                        <td><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>Betha project</td>
                                                        <td>John Smith</td>
                                                        <td>0800 1111</td>
                                                        <td>Erat Volutpat</td>
                                                        <td><span class="pie">3,1</span></td>
                                                        <td>75%</td>
                                                        <td>Jul 18, 2013</td>
                                                        <td><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>Gamma project</td>
                                                        <td>Anna Jordan</td>
                                                        <td>(016977) 0648</td>
                                                        <td>Tellus Ltd</td>
                                                        <td><span class="pie">4,9</span></td>
                                                        <td>18%</td>
                                                        <td>Jul 22, 2013</td>
                                                        <td><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Alpha project</td>
                                                        <td>Alice Jackson</td>
                                                        <td>0500 780909</td>
                                                        <td>Nec Euismod In Company</td>
                                                        <td><span class="pie">6,9</span></td>
                                                        <td>40%</td>
                                                        <td>Jul 16, 2013</td>
                                                        <td><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Project <small>This is example of project</small></td>
                                                        <td>Patrick Smith</td>
                                                        <td>0800 051213</td>
                                                        <td>Inceptos Hymenaeos Ltd</td>
                                                        <td><span class="pie">0.52/1.561</span></td>
                                                        <td>20%</td>
                                                        <td>Jul 14, 2013</td>
                                                        <td><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>Gamma project</td>
                                                        <td>Anna Jordan</td>
                                                        <td>(016977) 0648</td>
                                                        <td>Tellus Ltd</td>
                                                        <td><span class="pie">4,9</span></td>
                                                        <td>18%</td>
                                                        <td>Jul 22, 2013</td>
                                                        <td><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Project <small>This is example of project</small></td>
                                                        <td>Patrick Smith</td>
                                                        <td>0800 051213</td>
                                                        <td>Inceptos Hymenaeos Ltd</td>
                                                        <td><span class="pie">0.52/1.561</span></td>
                                                        <td>20%</td>
                                                        <td>Jul 14, 2013</td>
                                                        <td><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Alpha project</td>
                                                        <td>Alice Jackson</td>
                                                        <td>0500 780909</td>
                                                        <td>Nec Euismod In Company</td>
                                                        <td><span class="pie">6,9</span></td>
                                                        <td>40%</td>
                                                        <td>Jul 16, 2013</td>
                                                        <td><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>Betha project</td>
                                                        <td>John Smith</td>
                                                        <td>0800 1111</td>
                                                        <td>Erat Volutpat</td>
                                                        <td><span class="pie">3,1</span></td>
                                                        <td>75%</td>
                                                        <td>Jul 18, 2013</td>
                                                        <td><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>Gamma project</td>
                                                        <td>Anna Jordan</td>
                                                        <td>(016977) 0648</td>
                                                        <td>Tellus Ltd</td>
                                                        <td><span class="pie">4,9</span></td>
                                                        <td>18%</td>
                                                        <td>Jul 22, 2013</td>
                                                        <td><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Alpha project</td>
                                                        <td>Alice Jackson</td>
                                                        <td>0500 780909</td>
                                                        <td>Nec Euismod In Company</td>
                                                        <td><span class="pie">6,9</span></td>
                                                        <td>40%</td>
                                                        <td>Jul 16, 2013</td>
                                                        <td><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Project <small>This is example of project</small></td>
                                                        <td>Patrick Smith</td>
                                                        <td>0800 051213</td>
                                                        <td>Inceptos Hymenaeos Ltd</td>
                                                        <td><span class="pie">0.52/1.561</span></td>
                                                        <td>20%</td>
                                                        <td>Jul 14, 2013</td>
                                                        <td><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>Gamma project</td>
                                                        <td>Anna Jordan</td>
                                                        <td>(016977) 0648</td>
                                                        <td>Tellus Ltd</td>
                                                        <td><span class="pie">4,9</span></td>
                                                        <td>18%</td>
                                                        <td>Jul 22, 2013</td>
                                                        <td><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div id="tab-7" class="tab-pane">
                                    <div class="panel-body">
                                        <strong>Donec quam felis</strong>

                                        <p>Thousand unknown plants are noticed by me: when I hear the buzz of the little world among the stalks, and grow familiar with the countless indescribable forms of the insects
                                            and flies, then I feel the presence of the Almighty, who formed us in his own image, and the breath </p>

                                        <p>I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the exquisite
                                            sense of mere tranquil existence, that I neglect my talents. I should be incapable of drawing a single stroke at the present moment; and yet.</p>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
            </div>
        </div>

        
        <?php include($this->rootPath("webapp/gestionnaire/elements/templates/footer.php")); ?>
        

    </div>
</div>


<?php include($this->rootPath("webapp/gestionnaire/elements/templates/script.php")); ?>


</body>

</html>
