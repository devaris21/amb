<!DOCTYPE html>
<html lang="fr">

<?php require $this->path("../../../elements/templates/head.php") ?>

<body>
    <!-- Pre-loader start -->
    <?php require $this->path("../../../elements/templates/preloader.php") ?>
    <!-- Pre-loader end -->

    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

         <?php require $this->path("../../../elements/templates/header.php") ?>

         <div class="pcoded-main-container">
            <div class="pcoded-wrapper">


             <?php require $this->path("../../../elements/templates/sidebar.php") ?>


             <div class="pcoded-content">
                <div class="pcoded-inner-content">
                    <!-- Main-body start -->
                    <div class="main-body">
                        <div class="page-wrapper">

                            <!-- Page-body start -->
                            <div class="page-body">
                                <div class="card">
                                    <!-- Email-card start -->
                                    <div class="card-block email-card">

                                        <div class="row">
                                            <!-- Left-side section start -->
                                            <div class="col-lg-12 col-xl-3">
                                                <div class="user-body">
                                                            <!-- <div class="p-20 text-center">
                                                                <a href="email-compose.htm" class="btn btn-danger btn-round"><i class="fa fa-plus"></i> Nouveau message </a>
                                                            </div> -->
                                                            <ul class="page-list nav nav-tabs flex-column" id="pills-tab" role="tablist">
                                                                <li class="nav-item mail-section">
                                                                    <a class="nav-link" data-toggle="pill" href="#e-inbox" role="tab">
                                                                        <i class="icofont icofont-inbox"></i> Nouveau message 
                                                                        <span class="label label-primary f-right">6</span>
                                                                    </a>
                                                                </li>
                                                                <li class="nav-item mail-section">
                                                                    <a class="nav-link active" data-toggle="pill" href="#e-inbox" role="tab">
                                                                        <i class="icofont icofont-inbox"></i> Boîte de reception
                                                                        <span class="label label-primary f-right">6</span>
                                                                    </a>
                                                                </li>
                                                                <li class="nav-item mail-section">
                                                                    <a class="nav-link" data-toggle="pill" href="#e-starred" role="tab">
                                                                        <i class="icofont icofont-star"></i> Marqués
                                                                    </a>
                                                                </li>
                                                                <li class="nav-item mail-section">
                                                                    <a class="nav-link" data-toggle="pill" href="#e-drafts" role="tab">
                                                                        <i class="icofont icofont-file-text"></i> Drafts
                                                                    </a>
                                                                </li>
                                                                <li class="nav-item mail-section">
                                                                    <a class="nav-link" data-toggle="pill" href="#e-sent" role="tab">
                                                                        <i class="icofont icofont-paper-plane"></i> Sent Mail
                                                                    </a>
                                                                </li>
                                                                <li class="nav-item mail-section">
                                                                    <a class="nav-link" data-toggle="pill" href="#e-trash" role="tab">
                                                                        <i class="icofont icofont-ui-delete"></i> Trash
                                                                        <span class="label label-info f-right">30</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <!-- Left-side section end -->
                                                    <!-- Right-side section start -->
                                                    <div class="col-lg-12 col-xl-9 border-left" style="background: #fdfdfd;">
                                                        <div class="tab-content" id="pills-tabContent">
                                                            <div class="tab-pane fade show active" id="e-inbox" role="tabpanel">

                                                                <div class="mail-body">
                                                                    <h4 class="text-center">Boîte de reception (25)</h4><br>

                                                                    <div class="mail-body-content">
                                                                        <div class="table-responsive">
                                                                            <table class="table">
                                                                                <tr class="read">
                                                                                    <td>
                                                                                        <div class="check-star">
                                                                                            <div class="checkbox-fade fade-in-primary checkbox">
                                                                                                <label>
                                                                                                    <input type="checkbox" value="">
                                                                                                    <span class="cr"><i class="cr-icon icofont icofont-verification-check txt-primary"></i></span>
                                                                                                </label>
                                                                                            </div>
                                                                                            <i class="icofont icofont-star text-warning"></i>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td><a href="email-read.htm" class="email-name">Google Inc</a></td>
                                                                                    <td><a href="email-read.htm" class="email-name">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</a></td>
                                                                                    <td class="email-attch"><a href="#"><i class="icofont icofont-clip"></i></a></td>
                                                                                    <td class="email-time">08:01 AM</td>
                                                                                </tr>
                                                                                <tr class="unread">
                                                                                    <td>
                                                                                        <div class="check-star">
                                                                                            <div class="checkbox-fade fade-in-primary checkbox">
                                                                                                <label>
                                                                                                    <input type="checkbox" value="">
                                                                                                    <span class="cr"><i class="cr-icon icofont icofont-verification-check txt-primary"></i></span>
                                                                                                </label>
                                                                                            </div>
                                                                                            <i class="icofont icofont-star text-primary"></i>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td><a href="email-read.htm" class="email-name">John Doe</a></td>
                                                                                    <td><a href="email-read.htm" class="email-name">Coming Up Next Week</a></td>
                                                                                    <td class="email-attch"><a href="#"><i class="icofont icofont-clip"></i></a></td>
                                                                                    <td class="email-time">13:02 PM</td>
                                                                                </tr>
                                                                                <tr class="unread">
                                                                                    <td>
                                                                                        <div class="check-star">
                                                                                            <div class="checkbox-fade fade-in-primary checkbox">
                                                                                                <label>
                                                                                                  <input type="checkbox" value="">
                                                                                                  <span class="cr"><i class="cr-icon icofont icofont-verification-check txt-primary"></i></span>
                                                                                              </label>
                                                                                          </div>
                                                                                          <i class="icofont icofont-star text-info"></i>
                                                                                      </div>
                                                                                  </td>
                                                                                  <td><a href="email-read.htm" class="email-name">Sara Soudein</a></td>
                                                                                  <td><a href="email-read.htm" class="email-name">SVG new updates comes for you</a></td>
                                                                                  <td class="email-attch"><a href="#"><i class="icofont icofont-clip"></i></a></td>
                                                                                  <td class="email-time">00:05 AM</td>
                                                                              </tr>
                                                                              <tr class="unread">
                                                                                <td>
                                                                                    <div class="check-star">
                                                                                        <div class="checkbox-fade fade-in-primary checkbox">
                                                                                            <label>
                                                                                              <input type="checkbox" value="">
                                                                                              <span class="cr"><i class="cr-icon icofont icofont-verification-check txt-primary"></i></span>
                                                                                          </label>
                                                                                      </div>
                                                                                      <i class="icofont icofont-star text-danger"></i>
                                                                                  </div>
                                                                              </td>
                                                                              <td><a href="email-read.htm" class="email-name">Rinky Behl</a></td>
                                                                              <td><a href="email-read.htm" class="email-name">Photoshop updates are available</a></td>
                                                                              <td class="email-attch"><a href="#"><i class="icofont icofont-clip"></i></a></td>
                                                                              <td class="email-time">10:01 AM</td>
                                                                          </tr>
                                                                          <tr class="read">
                                                                            <td>
                                                                                <div class="check-star">
                                                                                    <div class="checkbox-fade fade-in-primary checkbox">
                                                                                        <label>
                                                                                          <input type="checkbox" value="">
                                                                                          <span class="cr"><i class="cr-icon icofont icofont-verification-check txt-primary"></i></span>
                                                                                      </label>
                                                                                  </div>
                                                                                  <i class="icofont icofont-star text-primary"></i>
                                                                              </div>
                                                                          </td>
                                                                          <td><a href="email-read.htm" class="email-name">Harry John</a></td>
                                                                          <td><a href="email-read.htm" class="email-name">New upcoming data available</a></td>
                                                                          <td class="email-attch"><a href="#"><i class="icofont icofont-clip"></i></a></td>
                                                                          <td class="email-time">11:01 AM</td>
                                                                      </tr>

                                                                  </table>
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="tab-pane fade" id="e-starred" role="tabpanel">
                                                    <div class="mail-body">
                                                        <div class="mail-body-header">
                                                            <button type="button" class="btn btn-primary btn-xs waves-effect waves-light">
                                                              <i class="icofont icofont-star"></i>
                                                          </button>
                                                          <div class="btn-group dropdown-split-primary">
                                                            <button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split waves-effect waves-light" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                              <i class="icofont icofont-ui-folder"></i>
                                                          </button>
                                                          <div class="dropdown-menu">
                                                            <a class="dropdown-item waves-effect waves-light" href="#">Action</a>
                                                            <a class="dropdown-item waves-effect waves-light" href="#">Another action</a>
                                                            <a class="dropdown-item waves-effect waves-light" href="#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item waves-effect waves-light" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <div class="btn-group dropdown-split-primary">
                                                        <button type="button" class="btn btn-warning dropdown-toggle dropdown-toggle-split waves-effect waves-light" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                          More
                                                      </button>
                                                      <div class="dropdown-menu">
                                                        <a class="dropdown-item waves-effect waves-light" href="#">Action</a>
                                                        <a class="dropdown-item waves-effect waves-light" href="#">Another action</a>
                                                        <a class="dropdown-item waves-effect waves-light" href="#">Something else here</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item waves-effect waves-light" href="#">Separated link</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mail-body-content">
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <tr class="read">
                                                            <td>
                                                                <div class="check-star">
                                                                    <div class="checkbox-fade fade-in-primary checkbox">
                                                                        <label>
                                                                          <input type="checkbox" value="">
                                                                          <span class="cr"><i class="cr-icon icofont icofont-verification-check txt-primary"></i></span>
                                                                      </label>
                                                                  </div>
                                                                  <i class="icofont icofont-star text-primary"></i>
                                                              </div>
                                                          </td>
                                                          <td><a href="email-read.htm" class="email-name">Harry John</a></td>
                                                          <td><a href="email-read.htm" class="email-name">New upcoming data available</a></td>
                                                          <td class="email-attch"><a href="#"><i class="icofont icofont-clip"></i></a></td>
                                                          <td class="email-time">11:01 AM</td>
                                                      </tr>
                                                      <tr class="read">
                                                        <td>
                                                            <div class="check-star">
                                                                <div class="checkbox-fade fade-in-primary checkbox">
                                                                    <label>
                                                                      <input type="checkbox" value="">
                                                                      <span class="cr"><i class="cr-icon icofont icofont-verification-check txt-primary"></i></span>
                                                                  </label>
                                                              </div>
                                                              <i class="icofont icofont-star text-danger"></i>
                                                          </div>
                                                      </td>
                                                      <td><a href="email-read.htm" class="email-name">Hanry Joseph</a></td>
                                                      <td><a href="email-read.htm" class="email-name">SCSS current working for new updates</a></td>
                                                      <td class="email-attch"><a href="#"><i class="icofont icofont-clip"></i></a></td>
                                                      <td class="email-time">12:01 PM</td>
                                                  </tr>
                                                  <tr class="read">
                                                    <td>
                                                        <div class="check-star">
                                                            <div class="checkbox-fade fade-in-primary checkbox">
                                                                <label>
                                                                  <input type="checkbox" value="">
                                                                  <span class="cr"><i class="cr-icon icofont icofont-verification-check txt-primary"></i></span>
                                                              </label>
                                                          </div>
                                                          <i class="icofont icofont-star text-primary"></i>
                                                      </div>
                                                  </td>
                                                  <td><a href="email-read.htm" class="email-name">Liu Koi Yan</a></td>
                                                  <td><a href="email-read.htm" class="email-name">Charts waiting for you</a></td>
                                                  <td class="email-attch"><a href="#"><i class="icofont icofont-clip"></i></a></td>
                                                  <td class="email-time">07:15 AM</td>
                                              </tr>
                                              <tr class="unread">
                                                <td>
                                                    <div class="check-star">
                                                        <div class="checkbox-fade fade-in-primary checkbox">
                                                            <label>
                                                              <input type="checkbox" value="">
                                                              <span class="cr"><i class="cr-icon icofont icofont-verification-check txt-primary"></i></span>
                                                          </label>
                                                      </div>
                                                      <i class="icofont icofont-star text-warning"></i>
                                                  </div>
                                              </td>
                                              <td><a href="email-read.htm" class="email-name">Google Inc</a></td>
                                              <td><a href="email-read.htm" class="email-name">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</a></td>
                                              <td class="email-attch"><a href="#"><i class="icofont icofont-clip"></i></a></td>
                                              <td class="email-time">08:01 AM</td>
                                          </tr>

                                          <tr class="unread">
                                            <td>
                                                <div class="check-star">
                                                    <div class="checkbox-fade fade-in-primary checkbox">
                                                        <label>
                                                          <input type="checkbox" value="">
                                                          <span class="cr"><i class="cr-icon icofont icofont-verification-check txt-primary"></i></span>
                                                      </label>
                                                  </div>
                                                  <i class="icofont icofont-star text-danger"></i>
                                              </div>
                                          </td>
                                          <td><a href="email-read.htm" class="email-name">Rinky Behl</a></td>
                                          <td><a href="email-read.htm" class="email-name">Photoshop updates are available</a></td>
                                          <td class="email-attch"><a href="#"><i class="icofont icofont-clip"></i></a></td>
                                          <td class="email-time">10:01 AM</td>
                                      </tr>
                                      <tr class="read">
                                        <td>
                                            <div class="check-star">
                                                <div class="checkbox-fade fade-in-primary checkbox">
                                                    <label>
                                                      <input type="checkbox" value="">
                                                      <span class="cr"><i class="cr-icon icofont icofont-verification-check txt-primary"></i></span>
                                                  </label>
                                              </div>
                                              <i class="icofont icofont-star text-primary"></i>
                                          </div>
                                      </td>
                                      <td><a href="email-read.htm" class="email-name">Harry John</a></td>
                                      <td><a href="email-read.htm" class="email-name">New upcoming data available</a></td>
                                      <td class="email-attch"><a href="#"><i class="icofont icofont-clip"></i></a></td>
                                      <td class="email-time">11:01 AM</td>
                                  </tr>
                                  <tr class="read">
                                    <td>
                                        <div class="check-star">
                                            <div class="checkbox-fade fade-in-primary checkbox">
                                                <label>
                                                  <input type="checkbox" value="">
                                                  <span class="cr"><i class="cr-icon icofont icofont-verification-check txt-primary"></i></span>
                                              </label>
                                          </div>
                                          <i class="icofont icofont-star text-danger"></i>
                                      </div>
                                  </td>
                                  <td><a href="email-read.htm" class="email-name">Hanry Joseph</a></td>
                                  <td><a href="email-read.htm" class="email-name">SCSS current working for new updates</a></td>
                                  <td class="email-attch"><a href="#"><i class="icofont icofont-clip"></i></a></td>
                                  <td class="email-time">12:01 PM</td>
                              </tr>
                              <tr class="read">
                                <td>
                                    <div class="check-star">
                                        <div class="checkbox-fade fade-in-primary checkbox">
                                            <label>
                                              <input type="checkbox" value="">
                                              <span class="cr"><i class="cr-icon icofont icofont-verification-check txt-primary"></i></span>
                                          </label>
                                      </div>
                                      <i class="icofont icofont-star text-primary"></i>
                                  </div>
                              </td>
                              <td><a href="email-read.htm" class="email-name">Liu Koi Yan</a></td>
                              <td><a href="email-read.htm" class="email-name">Charts waiting for you</a></td>
                              <td class="email-attch"><a href="#"><i class="icofont icofont-clip"></i></a></td>
                              <td class="email-time">07:15 AM</td>
                          </tr>
                      </table>
                  </div>
              </div>
          </div>
      </div>
      <div class="tab-pane fade" id="e-drafts" role="tabpanel">

        <div class="mail-body">
            <div class="mail-body-header">
                <button type="button" class="btn btn-success btn-xs waves-effect waves-light">
                  <i class="icofont icofont-inbox"></i>
              </button>
              <button type="button" class="btn btn-danger btn-xs waves-effect waves-light">
                  <i class="icofont icofont-ui-delete"></i>
              </button>
              <div class="btn-group dropdown-split-primary">
                <button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split waves-effect waves-light" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="icofont icofont-ui-folder"></i>
              </button>
              <div class="dropdown-menu">
                <a class="dropdown-item waves-effect waves-light" href="#">Action</a>
                <a class="dropdown-item waves-effect waves-light" href="#">Another action</a>
                <a class="dropdown-item waves-effect waves-light" href="#">Something else here</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item waves-effect waves-light" href="#">Separated link</a>
            </div>
        </div>
        <div class="btn-group dropdown-split-primary">
            <button type="button" class="btn btn-warning dropdown-toggle dropdown-toggle-split waves-effect waves-light" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              More
          </button>
          <div class="dropdown-menu">
            <a class="dropdown-item waves-effect waves-light" href="#">Action</a>
            <a class="dropdown-item waves-effect waves-light" href="#">Another action</a>
            <a class="dropdown-item waves-effect waves-light" href="#">Something else here</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item waves-effect waves-light" href="#">Separated link</a>
        </div>
    </div>
</div>
<div class="mail-body-content">
    <div class="table-responsive">
        <table class="table">

            <tr class="read">
                <td>
                    <div class="check-star">
                        <div class="checkbox-fade fade-in-primary checkbox">
                            <label>
                              <input type="checkbox" value="">
                              <span class="cr"><i class="cr-icon icofont icofont-verification-check txt-primary"></i></span>
                          </label>
                      </div>
                      <i class="icofont icofont-star text-primary"></i>
                  </div>
              </td>
              <td><a href="email-read.htm" class="email-name">Liu Koi Yan</a></td>
              <td><a href="email-read.htm" class="email-name">Charts waiting for you</a></td>
              <td class="email-attch"><a href="#"><i class="icofont icofont-clip"></i></a></td>
              <td class="email-time">07:15 AM</td>
          </tr>
      </table>
  </div>
</div>
</div>
</div>
<div class="tab-pane fade" id="e-sent" role="tabpanel">

    <div class="mail-body">
        <div class="mail-body-header">
            <button type="button" class="btn btn-primary btn-xs waves-effect waves-light">
              <i class="icofont icofont-exclamation-circle"></i>
          </button>
          <button type="button" class="btn btn-danger btn-xs waves-effect waves-light">
              <i class="icofont icofont-ui-delete"></i>
          </button>
          <div class="btn-group dropdown-split-primary">
            <button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split waves-effect waves-light" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="icofont icofont-ui-folder"></i>
          </button>
          <div class="dropdown-menu">
            <a class="dropdown-item waves-effect waves-light" href="#">Action</a>
            <a class="dropdown-item waves-effect waves-light" href="#">Another action</a>
            <a class="dropdown-item waves-effect waves-light" href="#">Something else here</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item waves-effect waves-light" href="#">Separated link</a>
        </div>
    </div>
    <div class="btn-group dropdown-split-primary">
        <button type="button" class="btn btn-warning dropdown-toggle dropdown-toggle-split waves-effect waves-light" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          More
      </button>
      <div class="dropdown-menu">
        <a class="dropdown-item waves-effect waves-light" href="#">Action</a>
        <a class="dropdown-item waves-effect waves-light" href="#">Another action</a>
        <a class="dropdown-item waves-effect waves-light" href="#">Something else here</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item waves-effect waves-light" href="#">Separated link</a>
    </div>
</div>
</div>
<div class="mail-body-content">
    <div class="table-responsive">
        <table class="table">

            <tr class="read">
                <td>
                    <div class="check-star">
                        <div class="checkbox-fade fade-in-primary checkbox">
                            <label>
                              <input type="checkbox" value="">
                              <span class="cr"><i class="cr-icon icofont icofont-verification-check txt-primary"></i></span>
                          </label>
                      </div>
                      <i class="icofont icofont-star text-primary"></i>
                  </div>
              </td>
              <td><a href="email-read.htm" class="email-name">Liu Koi Yan</a></td>
              <td><a href="email-read.htm" class="email-name">Charts waiting for you</a></td>
              <td class="email-attch"><a href="#"><i class="icofont icofont-clip"></i></a></td>
              <td class="email-time">07:15 AM</td>
          </tr>
          <tr class="unread">
            <td>
                <div class="check-star">
                    <div class="checkbox-fade fade-in-primary checkbox">
                        <label>
                          <input type="checkbox" value="">
                          <span class="cr"><i class="cr-icon icofont icofont-verification-check txt-primary"></i></span>
                      </label>
                  </div>
                  <i class="icofont icofont-star text-warning"></i>
              </div>
          </td>
          <td><a href="email-read.htm" class="email-name">Google Inc</a></td>
          <td><a href="email-read.htm" class="email-name">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</a></td>
          <td class="email-attch"><a href="#"><i class="icofont icofont-clip"></i></a></td>
          <td class="email-time">08:01 AM</td>
      </tr>
      <tr class="unread">
        <td>
            <div class="check-star">
                <div class="checkbox-fade fade-in-primary checkbox">
                    <label>
                      <input type="checkbox" value="">
                      <span class="cr"><i class="cr-icon icofont icofont-verification-check txt-primary"></i></span>
                  </label>
              </div>
              <i class="icofont icofont-star text-primary"></i>
          </div>
      </td>
      <td><a href="email-read.htm" class="email-name">John Doe</a></td>
      <td><a href="email-read.htm" class="email-name">Coming Up Next Week</a></td>
      <td class="email-attch"><a href="#"><i class="icofont icofont-clip"></i></a></td>
      <td class="email-time">13:02 PM</td>
  </tr>
  <tr class="unread">
    <td>
        <div class="check-star">
            <div class="checkbox-fade fade-in-primary checkbox">
                <label>
                  <input type="checkbox" value="">
                  <span class="cr"><i class="cr-icon icofont icofont-verification-check txt-primary"></i></span>
              </label>
          </div>
          <i class="icofont icofont-star text-info"></i>
      </div>
  </td>
  <td><a href="email-read.htm" class="email-name">Sara Soudein</a></td>
  <td><a href="email-read.htm" class="email-name">SVG new updates comes for you</a></td>
  <td class="email-attch"><a href="#"><i class="icofont icofont-clip"></i></a></td>
  <td class="email-time">00:05 AM</td>
</tr>
<tr class="unread">
    <td>
        <div class="check-star">
            <div class="checkbox-fade fade-in-primary checkbox">
                <label>
                  <input type="checkbox" value="">
                  <span class="cr"><i class="cr-icon icofont icofont-verification-check txt-primary"></i></span>
              </label>
          </div>
          <i class="icofont icofont-star text-danger"></i>
      </div>
  </td>
  <td><a href="email-read.htm" class="email-name">Rinky Behl</a></td>
  <td><a href="email-read.htm" class="email-name">Photoshop updates are available</a></td>
  <td class="email-attch"><a href="#"><i class="icofont icofont-clip"></i></a></td>
  <td class="email-time">10:01 AM</td>
</tr>
<tr class="read">
    <td>
        <div class="check-star">
            <div class="checkbox-fade fade-in-primary checkbox">
                <label>
                  <input type="checkbox" value="">
                  <span class="cr"><i class="cr-icon icofont icofont-verification-check txt-primary"></i></span>
              </label>
          </div>
          <i class="icofont icofont-star text-primary"></i>
      </div>
  </td>
  <td><a href="email-read.htm" class="email-name">Harry John</a></td>
  <td><a href="email-read.htm" class="email-name">New upcoming data available</a></td>
  <td class="email-attch"><a href="#"><i class="icofont icofont-clip"></i></a></td>
  <td class="email-time">11:01 AM</td>
</tr>
<tr class="read">
    <td>
        <div class="check-star">
            <div class="checkbox-fade fade-in-primary checkbox">
                <label>
                  <input type="checkbox" value="">
                  <span class="cr"><i class="cr-icon icofont icofont-verification-check txt-primary"></i></span>
              </label>
          </div>
          <i class="icofont icofont-star text-danger"></i>
      </div>
  </td>
  <td><a href="email-read.htm" class="email-name">Hanry Joseph</a></td>
  <td><a href="email-read.htm" class="email-name">SCSS current working for new updates</a></td>
  <td class="email-attch"><a href="#"><i class="icofont icofont-clip"></i></a></td>
  <td class="email-time">12:01 PM</td>
</tr>
<tr class="read">
    <td>
        <div class="check-star">
            <div class="checkbox-fade fade-in-primary checkbox">
                <label>
                  <input type="checkbox" value="">
                  <span class="cr"><i class="cr-icon icofont icofont-verification-check txt-primary"></i></span>
              </label>
          </div>
          <i class="icofont icofont-star text-primary"></i>
      </div>
  </td>
  <td><a href="email-read.htm" class="email-name">Liu Koi Yan</a></td>
  <td><a href="email-read.htm" class="email-name">Charts waiting for you</a></td>
  <td class="email-attch"><a href="#"><i class="icofont icofont-clip"></i></a></td>
  <td class="email-time">07:15 AM</td>
</tr>
</table>
</div>
</div>
</div>
</div>
<div class="tab-pane fade" id="e-trash" role="tabpanel">

    <div class="mail-body">
        <div class="mail-body-header">
            <button type="button" class="btn btn-primary btn-xs waves-effect waves-light">
              <i class="icofont icofont-exclamation-circle"></i>
          </button>
          <div class="btn-group dropdown-split-primary">
            <button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split waves-effect waves-light" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="icofont icofont-ui-folder"></i>
          </button>
          <div class="dropdown-menu">
            <a class="dropdown-item waves-effect waves-light" href="#">Action</a>
            <a class="dropdown-item waves-effect waves-light" href="#">Another action</a>
            <a class="dropdown-item waves-effect waves-light" href="#">Something else here</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item waves-effect waves-light" href="#">Separated link</a>
        </div>
    </div>
    <div class="btn-group dropdown-split-primary">
        <button type="button" class="btn btn-warning dropdown-toggle dropdown-toggle-split waves-effect waves-light" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          More
      </button>
      <div class="dropdown-menu">
        <a class="dropdown-item waves-effect waves-light" href="#">Action</a>
        <a class="dropdown-item waves-effect waves-light" href="#">Another action</a>
        <a class="dropdown-item waves-effect waves-light" href="#">Something else here</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item waves-effect waves-light" href="#">Separated link</a>
    </div>
</div>
</div>
<div class="mail-body-content">
    <div class="table-responsive">
        <table class="table">

            <tr class="unread">
                <td>
                    <div class="check-star">
                        <div class="checkbox-fade fade-in-primary checkbox">
                            <label>
                              <input type="checkbox" value="">
                              <span class="cr"><i class="cr-icon icofont icofont-verification-check txt-primary"></i></span>
                          </label>
                      </div>
                      <i class="icofont icofont-star text-danger"></i>
                  </div>
              </td>
              <td><a href="email-read.htm" class="email-name">Rinky Behl</a></td>
              <td><a href="email-read.htm" class="email-name">Photoshop updates are available</a></td>
              <td class="email-attch"><a href="#"><i class="icofont icofont-clip"></i></a></td>
              <td class="email-time">10:01 AM</td>
          </tr>
          <tr class="read">
            <td>
                <div class="check-star">
                    <div class="checkbox-fade fade-in-primary checkbox">
                        <label>
                          <input type="checkbox" value="">
                          <span class="cr"><i class="cr-icon icofont icofont-verification-check txt-primary"></i></span>
                      </label>
                  </div>
                  <i class="icofont icofont-star text-primary"></i>
              </div>
          </td>
          <td><a href="email-read.htm" class="email-name">Harry John</a></td>
          <td><a href="email-read.htm" class="email-name">New upcoming data available</a></td>
          <td class="email-attch"><a href="#"><i class="icofont icofont-clip"></i></a></td>
          <td class="email-time">11:01 AM</td>
      </tr>
      <tr class="read">
        <td>
            <div class="check-star">
                <div class="checkbox-fade fade-in-primary checkbox">
                    <label>
                      <input type="checkbox" value="">
                      <span class="cr"><i class="cr-icon icofont icofont-verification-check txt-primary"></i></span>
                  </label>
              </div>
              <i class="icofont icofont-star text-danger"></i>
          </div>
      </td>
      <td><a href="email-read.htm" class="email-name">Hanry Joseph</a></td>
      <td><a href="email-read.htm" class="email-name">SCSS current working for new updates</a></td>
      <td class="email-attch"><a href="#"><i class="icofont icofont-clip"></i></a></td>
      <td class="email-time">12:01 PM</td>
  </tr>
  <tr class="read">
    <td>
        <div class="check-star">
            <div class="checkbox-fade fade-in-primary checkbox">
                <label>
                  <input type="checkbox" value="">
                  <span class="cr"><i class="cr-icon icofont icofont-verification-check txt-primary"></i></span>
              </label>
          </div>
          <i class="icofont icofont-star text-primary"></i>
      </div>
  </td>
  <td><a href="email-read.htm" class="email-name">Liu Koi Yan</a></td>
  <td><a href="email-read.htm" class="email-name">Charts waiting for you</a></td>
  <td class="email-attch"><a href="#"><i class="icofont icofont-clip"></i></a></td>
  <td class="email-time">07:15 AM</td>
</tr>
<tr class="unread">
    <td>
        <div class="check-star">
            <div class="checkbox-fade fade-in-primary checkbox">
                <label>
                  <input type="checkbox" value="">
                  <span class="cr"><i class="cr-icon icofont icofont-verification-check txt-primary"></i></span>
              </label>
          </div>
          <i class="icofont icofont-star text-warning"></i>
      </div>
  </td>
  <td><a href="email-read.htm" class="email-name">Google Inc</a></td>
  <td><a href="email-read.htm" class="email-name">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</a></td>
  <td class="email-attch"><a href="#"><i class="icofont icofont-clip"></i></a></td>
  <td class="email-time">08:01 AM</td>
</tr>
<tr class="unread">
    <td>
        <div class="check-star">
            <div class="checkbox-fade fade-in-primary checkbox">
                <label>
                  <input type="checkbox" value="">
                  <span class="cr"><i class="cr-icon icofont icofont-verification-check txt-primary"></i></span>
              </label>
          </div>
          <i class="icofont icofont-star text-primary"></i>
      </div>
  </td>
  <td><a href="email-read.htm" class="email-name">John Doe</a></td>
  <td><a href="email-read.htm" class="email-name">Coming Up Next Week</a></td>
  <td class="email-attch"><a href="#"><i class="icofont icofont-clip"></i></a></td>
  <td class="email-time">13:02 PM</td>
</tr>

<tr class="read">
    <td>
        <div class="check-star">
            <div class="checkbox-fade fade-in-primary checkbox">
                <label>
                  <input type="checkbox" value="">
                  <span class="cr"><i class="cr-icon icofont icofont-verification-check txt-primary"></i></span>
              </label>
          </div>
          <i class="icofont icofont-star text-primary"></i>
      </div>
  </td>
  <td><a href="email-read.htm" class="email-name">Liu Koi Yan</a></td>
  <td><a href="email-read.htm" class="email-name">Charts waiting for you</a></td>
  <td class="email-attch"><a href="#"><i class="icofont icofont-clip"></i></a></td>
  <td class="email-time">07:15 AM</td>
</tr>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- Right-side section end -->
</div>
</div>
<!-- Email-card end -->
</div>
</div>
<!-- Page-body start -->
</div>
</div>
<!-- Main-body end -->
<div id="styleSelector">

</div>
</div>
</div>
</div>
</div>
</div>
</div>



<?php require $this->path("../../../elements/templates/footer.php") ?>

<style type="text/css">
    .bg-sombre{
       background-color: #cdcddd !important;
   }
</style>


</body>

</html>
