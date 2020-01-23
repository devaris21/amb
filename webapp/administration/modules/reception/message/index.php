<!DOCTYPE html>
<html lang="en">

<?php require $this->path("../../../elements/templates/head.php") ?>

<body>
    <!-- Pre-loader start -->
    <?php require $this->path("../../../elements/templates/preloader.php") ?>
    <!-- Pre-loader end -->


    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">

                    <div class="navbar-logo">
                        <a class="mobile-menu" id="mobile-collapse" href="#!">
                            <i class="feather icon-menu"></i>
                        </a>
                        <a href="index-1.htm">
                            <img class="img-fluid" src="..\files\assets\images\logo.png" alt="Theme-Logo">
                        </a>
                        <a class="mobile-options">
                            <i class="feather icon-more-horizontal"></i>
                        </a>
                    </div>

                    <div class="navbar-container container-fluid">
                        <ul class="nav-left">
                            <li class="header-search">
                                <div class="main-search morphsearch-search">
                                    <div class="input-group">
                                        <span class="input-group-addon search-close"><i class="feather icon-x"></i></span>
                                        <input type="text" class="form-control">
                                        <span class="input-group-addon search-btn"><i class="feather icon-search"></i></span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="#!" onclick="javascript:toggleFullScreen()">
                                    <i class="feather icon-maximize full-screen"></i>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav-right">
                            <li class="header-notification">
                                <div class="dropdown-primary dropdown">
                                    <div class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="feather icon-bell"></i>
                                        <span class="badge bg-c-pink">5</span>
                                    </div>
                                    <ul class="show-notification notification-view dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                        <li>
                                            <h6>Notifications</h6>
                                            <label class="label label-danger">New</label>
                                        </li>
                                        <li>
                                            <div class="media">
                                                <img class="d-flex align-self-center img-radius" src="..\files\assets\images\avatar-4.jpg" alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <h5 class="notification-user">John Doe</h5>
                                                    <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                    <span class="notification-time">30 minutes ago</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media">
                                                <img class="d-flex align-self-center img-radius" src="..\files\assets\images\avatar-3.jpg" alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <h5 class="notification-user">Joseph William</h5>
                                                    <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                    <span class="notification-time">30 minutes ago</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media">
                                                <img class="d-flex align-self-center img-radius" src="..\files\assets\images\avatar-4.jpg" alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <h5 class="notification-user">Sara Soudein</h5>
                                                    <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                    <span class="notification-time">30 minutes ago</span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="header-notification">
                                <div class="dropdown-primary dropdown">
                                    <div class="displayChatbox dropdown-toggle" data-toggle="dropdown">
                                        <i class="feather icon-message-square"></i>
                                        <span class="badge bg-c-green">3</span>
                                    </div>
                                </div>
                            </li>
                            <li class="user-profile header-notification">
                                <div class="dropdown-primary dropdown">
                                    <div class="dropdown-toggle" data-toggle="dropdown">
                                        <img src="..\files\assets\images\avatar-4.jpg" class="img-radius" alt="User-Profile-Image">
                                        <span>John Doe</span>
                                        <i class="feather icon-chevron-down"></i>
                                    </div>
                                    <ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                        <li>
                                            <a href="#!">
                                                <i class="feather icon-settings"></i> Settings
                                            </a>
                                        </li>
                                        <li>
                                            <a href="user-profile.htm">
                                                <i class="feather icon-user"></i> Profile
                                            </a>
                                        </li>
                                        <li>
                                            <a href="email-inbox.htm">
                                                <i class="feather icon-mail"></i> My Messages
                                            </a>
                                        </li>
                                        <li>
                                            <a href="auth-lock-screen.htm">
                                                <i class="feather icon-lock"></i> Lock Screen
                                            </a>
                                        </li>
                                        <li>
                                            <a href="auth-normal-sign-in.htm">
                                                <i class="feather icon-log-out"></i> Logout
                                            </a>
                                        </li>
                                    </ul>

                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <!-- Sidebar chat start -->
            <div id="sidebar" class="users p-chat-user showChat">
                <div class="had-container">
                    <div class="card card_main p-fixed users-main">
                        <div class="user-box">
                            <div class="chat-inner-header">
                                <div class="back_chatBox">
                                    <div class="right-icon-control">
                                        <input type="text" class="form-control  search-text" placeholder="Search Friend" id="search-friends">
                                        <div class="form-icon">
                                            <i class="icofont icofont-search"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="main-friend-list">
                                <div class="media userlist-box" data-id="1" data-status="online" data-username="Josephin Doe" data-toggle="tooltip" data-placement="left" title="Josephin Doe">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-radius img-radius" src="..\files\assets\images\avatar-3.jpg" alt="Generic placeholder image ">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Josephin Doe</div>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="2" data-status="online" data-username="Lary Doe" data-toggle="tooltip" data-placement="left" title="Lary Doe">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-radius" src="..\files\assets\images\avatar-2.jpg" alt="Generic placeholder image">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Lary Doe</div>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="3" data-status="online" data-username="Alice" data-toggle="tooltip" data-placement="left" title="Alice">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-radius" src="..\files\assets\images\avatar-4.jpg" alt="Generic placeholder image">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Alice</div>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="4" data-status="online" data-username="Alia" data-toggle="tooltip" data-placement="left" title="Alia">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-radius" src="..\files\assets\images\avatar-3.jpg" alt="Generic placeholder image">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Alia</div>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="5" data-status="online" data-username="Suzen" data-toggle="tooltip" data-placement="left" title="Suzen">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-radius" src="..\files\assets\images\avatar-2.jpg" alt="Generic placeholder image">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Suzen</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sidebar inner chat start-->
            <div class="showChat_inner">
                <div class="media chat-inner-header">
                    <a class="back_chatBox">
                        <i class="feather icon-chevron-left"></i> Josephin Doe
                    </a>
                </div>
                <div class="media chat-messages">
                    <a class="media-left photo-table" href="#!">
                        <img class="media-object img-radius img-radius m-t-5" src="..\files\assets\images\avatar-3.jpg" alt="Generic placeholder image">
                    </a>
                    <div class="media-body chat-menu-content">
                        <div class="">
                            <p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
                            <p class="chat-time">8:20 a.m.</p>
                        </div>
                    </div>
                </div>
                <div class="media chat-messages">
                    <div class="media-body chat-menu-reply">
                        <div class="">
                            <p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
                            <p class="chat-time">8:20 a.m.</p>
                        </div>
                    </div>
                    <div class="media-right photo-table">
                        <a href="#!">
                            <img class="media-object img-radius img-radius m-t-5" src="..\files\assets\images\avatar-4.jpg" alt="Generic placeholder image">
                        </a>
                    </div>
                </div>
                <div class="chat-reply-box p-b-20">
                    <div class="right-icon-control">
                        <input type="text" class="form-control search-text" placeholder="Share Your Thoughts">
                        <div class="form-icon">
                            <i class="feather icon-navigation"></i>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sidebar inner chat end-->
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
                                                <div class="col-lg-12 col-xl-3">
                                                    <div class="user-head row">
                                                        <div class="user-face">
                                                            <img class="img-fluid" src="..\files\assets\images\logo.png" alt="Theme-Logo">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-xl-9">
                                                    <div class="mail-box-head row">
                                                        <div class="col-md-12">
                                                            <form class="f-right">
                                                                <div class="right-icon-control">
                                                                    <input type="text" class="form-control  search-text" placeholder="Search Friend" id="search-friends-2">
                                                                    <div class="form-icon">
                                                                        <i class="icofont icofont-search"></i>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <!-- Left-side section start -->
                                                <div class="col-lg-12 col-xl-3">
                                                    <div class="user-body">
                                                        <div class="p-20 text-center">
                                                            <a href="email-compose.htm" class="btn btn-danger">Compose</a>
                                                        </div>
                                                        <ul class="page-list nav nav-tabs flex-column">
                                                            <li class="nav-item mail-section">
                                                                <a class="nav-link" href="email-inbox.htm">
                                                                    <i class="icofont icofont-inbox"></i> Inbox
                                                                    <span class="label label-primary f-right">6</span>
                                                                </a>
                                                            </li>
                                                            <li class="nav-item mail-section">
                                                                <a class="nav-link" href="email-inbox.htm">
                                                                    <i class="icofont icofont-star"></i> Starred
                                                                </a>
                                                            </li>
                                                            <li class="nav-item mail-section">
                                                                <a class="nav-link" href="email-inbox.htm">
                                                                    <i class="icofont icofont-file-text"></i> Drafts
                                                                </a>
                                                            </li>
                                                            <li class="nav-item mail-section">
                                                                <a class="nav-link" href="email-inbox.htm">
                                                                    <i class="icofont icofont-paper-plane"></i> Sent Mail
                                                                </a>
                                                            </li>
                                                            <li class="nav-item mail-section">
                                                                <a class="nav-link" href="email-inbox.htm">
                                                                    <i class="icofont icofont-ui-delete"></i> Trash
                                                                    <span class="label label-info f-right">30</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <ul class="p-20 label-list">
                                                            <li>
                                                                <h5>Labels</h5>
                                                            </li>
                                                            <li>
                                                                <a class="mail-work" href="">Work</a>
                                                            </li>
                                                            <li>
                                                                <a class="mail-design" href="">Design</a>
                                                            </li>
                                                            <li>
                                                                <a class="mail-family" href="">Family</a>
                                                            </li>
                                                            <li>
                                                                <a class="mail-friends" href="">Friends</a>
                                                            </li>
                                                            <li>
                                                                <a class="mail-office" href="">Office</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <!-- Left-side section end -->
                                                <!-- Right-side section start -->
                                                <div class="col-lg-12 col-xl-9">
                                                    <div class="mail-body">
                                                        <div class="mail-body-content email-read">
                                                            <div class="card">
                                                                <div class="card-header">
                                                                    <h5>Here You Have New Opportunity...</h5>
                                                                    <h6 class="f-right">08:23 AM</h6>
                                                                </div>
                                                                <div class="card-block">
                                                                    <div class="media m-b-20">
                                                                        <div class="media-left photo-table">
                                                                            <a href="#">
                                                                                <img class="media-object img-radius" src="..\files\assets\images\avatar-3.jpg" alt="E-mail User">
                                                                            </a>
                                                                        </div>
                                                                        <div class="media-body photo-contant">
                                                                            <a href="#">
                                                                                <h6 class="user-name txt-primary">John Doe</h6>
                                                                            </a>
                                                                            <a class="user-mail txt-muted" href="#">
                                                                                <h6>From:<span class="__cf_email__" data-cfemail="503a3f383e343f356165646310373d31393c7e333f3d">[email&#160;protected]</span></h6>
                                                                            </a>
                                                                            <div>
                                                                                <h6 class="email-welcome-txt">Hello Dear...</h6>
                                                                                <p class="email-content">
                                                                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus.
                                                                                </p>
                                                                            </div>
                                                                            <div class="m-t-15">
                                                                                <i class="icofont icofont-clip f-20 m-r-10"></i>Attachments <b>(3)</b>
                                                                                <div class="row mail-img">
                                                                                    <div class="col-sm-4 col-md-2 col-xs-12">
                                                                                        <a href="#"><img class="card-img-top img-fluid img-thumbnail" src="..\files\assets\images\card-block\card1.jpg" alt="Card image cap"></a>
                                                                                    </div>
                                                                                    <div class="col-sm-4 col-md-2 col-xs-12">
                                                                                        <a href="#"><img class="card-img-top img-fluid img-thumbnail" src="..\files\assets\images\card-block\card2.jpg" alt="Card image cap"></a>
                                                                                    </div>
                                                                                    <div class="col-sm-4 col-md-2 col-xs-12">
                                                                                        <a href="#"><img class="card-img-top img-fluid img-thumbnail" src="..\files\assets\images\card-block\card13.jpg" alt="Card image cap"></a>
                                                                                    </div>
                                                                                </div>
                                                                                <textarea class="form-control m-t-30 col-xs-12 email-textarea" id="exampleTextarea-1" placeholder="Reply Your Thoughts" rows="4"></textarea>
                                                                            </div>
                                                                        </div>
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
                                <!-- Page-body end -->
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



<!-- Warning Section Starts -->
<!-- Older IE warning message -->
    <!--[if lt IE 10]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="../files/assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="../files/assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="../files/assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="../files/assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="../files/assets/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->
<!-- Warning Section Ends -->
<!-- Required Jquery -->

<?php require $this->path("../../../elements/templates/footer.php") ?>



</body>

</html>
