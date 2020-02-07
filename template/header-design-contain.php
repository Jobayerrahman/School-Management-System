<!DOCTYPE html>
<html lang="en" class="app">

<head>
    <meta charset="utf-8" />
    <title>Hogward | Web Application</title>
    <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="stylesheet" href="../assets/css/app.v1.css" type="text/css" />
    <link rel="stylesheet" href="../assets/js/calendar/bootstrap_calendar.css" type="text/css" />
    <!--[if lt IE 9]> <script src="js/ie/html5shiv.js"></script> <script src="js/ie/respond.min.js"></script> <script src="js/ie/excanvas.js"></script> <![endif]-->
</head>

<body>
    <section class="vbox">
        <header class="bg-white header header-md navbar navbar-fixed-top-xs box-shadow">
            <div class="navbar-header aside-md dk">
                <a class="btn btn-link visible-xs" data-toggle="class:nav-off-screen,open" data-target="#nav,html"> <i class="fa fa-bars"></i> </a>
                <a href="dashboard.php" class="navbar-brand"> <img src="../assets/images/H1.png" class="m-r-sm" alt="scale"> <span class="hidden-nav-xs">Hogward School</span> </a>
                <a class="btn btn-link visible-xs" data-toggle="dropdown" data-target=".user"> <i class="fa fa-cog"></i> </a>
            </div>
            <ul class="nav navbar-nav hidden-xs">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="i i-grid"></i> </a>
                    <section class="dropdown-menu aside-lg bg-white on animated fadeInLeft">
                        <div class="row m-l-none m-r-none m-t m-b text-center">
                            <div class="col-xs-4">
                                <div class="padder-v">
                                    <a href="#"> <span class="m-b-xs block"> <i class="i i-mail i-2x text-primary-lt"></i> </span> <small class="text-muted">Mailbox</small> </a>
                                </div>
                            </div>
                            <div class="col-xs-4">
                                <div class="padder-v">
                                    <a href="#"> <span class="m-b-xs block"> <i class="i i-calendar i-2x text-danger-lt"></i> </span> <small class="text-muted">Calendar</small> </a>
                                </div>
                            </div>
                            <div class="col-xs-4">
                                <div class="padder-v">
                                    <a href="#"> <span class="m-b-xs block"> <i class="i i-map i-2x text-success-lt"></i> </span> <small class="text-muted">Map</small> </a>
                                </div>
                            </div>
                            <div class="col-xs-4">
                                <div class="padder-v">
                                    <a href="#"> <span class="m-b-xs block"> <i class="i i-paperplane i-2x text-info-lt"></i> </span> <small class="text-muted">Trainning</small> </a>
                                </div>
                            </div>
                            <div class="col-xs-4">
                                <div class="padder-v">
                                    <a href="#"> <span class="m-b-xs block"> <i class="i i-images i-2x text-muted"></i> </span> <small class="text-muted">Photos</small> </a>
                                </div>
                            </div>
                            <div class="col-xs-4">
                                <div class="padder-v">
                                    <a href="#"> <span class="m-b-xs block"> <i class="i i-clock i-2x text-warning-lter"></i> </span> <small class="text-muted">Timeline</small> </a>
                                </div>
                            </div>
                        </div>
                    </section>
                </li>
            </ul>
            <form class="navbar-form navbar-left input-s-lg m-t m-l-n-xs hidden-xs" role="search">
                <div class="form-group">
                    <div class="input-group"> <span class="input-group-btn"> <button type="submit" class="btn btn-sm bg-white b-white btn-icon"><i class="fa fa-search"></i></button> </span>
                        <input type="text" class="form-control input-sm no-border" placeholder="Search apps, projects..."> </div>
                </div>
            </form>
            <ul class="nav navbar-nav navbar-right m-n hidden-xs nav-user user">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <span class="thumb-sm avatar pull-left"> <img src="../assets/images/T3.jpg" alt="..."> </span> John.Smith <b class="caret"></b> </a>
                    <ul class="dropdown-menu animated fadeInRight">
                        <li> <span class="arrow top"></span> <a href="#">Settings</a> </li>
                        <li> <a href="profile.php">Profile</a> </li>
                        <li> <a href="docs.html">Help</a> </li>
                        <li class="divider"></li>
                        <li> <a href="modal.lockme.html" data-toggle="ajaxModal">Logout</a> </li>
                    </ul>
                </li>
            </ul>
        </header>
        <section>
            <section class="hbox stretch">
                <!-- .aside -->
                <aside class="bg-black aside-md hidden-print hidden-xs" id="nav">
                    <section class="vbox">
                        <section class="w-f scrollable">
                            <div class="slim-scroll" data-height="auto" data-disable-fade-out="true" data-distance="0" data-size="10px" data-railOpacity="0.2">
                                <div class="clearfix wrapper dk nav-user hidden-xs">
                                    <div class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <span class="thumb pull-left m-r"> <img src="../assets/images/T3.jpg" class="rounded" alt="..."> <i class="on md b-black"></i> </span> <span class="hidden-nav-xs clear"> <span class="block m-t-xs"> <strong class="font-bold text-lt">John.Smith</strong> <b class="caret"></b> </span>  </span>
                                        </a>
                                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                            <li> <span class="arrow top hidden-nav-xs"></span> <a href="#">Settings</a> </li>
                                            <li> <a href="profile.php">Profile</a> </li>
                                            <li> <a href="docs.html">Help</a> </li>
                                            <li class="divider"></li>
                                            <li> <a href="modal.lockme.html" data-toggle="ajaxModal">Logout</a> </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- nav -->
                                <nav class="nav-primary hidden-xs">
                                    <div class="text-muted text-sm hidden-nav-xs padder m-t-sm m-b-sm">Start</div>
                                    <ul class="nav nav-main" data-ride="collapse">
                                        <li class="active">
                                            <a href="dashboard.php" class="auto"> <i class="fa fa-home"> </i> <span class="font-bold">Dashboard</span> </a>
                                        </li>
                                        <li>
                                            <a href="#" class="auto"> <span class="pull-right text-muted"> <i class="i i-circle-sm-o text"></i> <i class="i i-circle-sm text-active"></i> </span> <b class="badge bg-danger pull-right"></b> <i class="i i-stack icon"> </i> <span class="font-bold">Admin Information</span> </a>
                                            <ul class="nav dk">
                                                <li>
                                                    <a href="add-new-student.php" class="auto"> <i class="i i-dot"></i> <span>Add New Admin</span> </a>
                                                </li>
                                                <li>
                                                    <a href="view-all-student.php" class="auto"> <i class="i i-dot"></i> <span>View All Admin</span> </a>
                                                </li> 
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#" class="auto"> <span class="pull-right text-muted"> <i class="i i-circle-sm-o text"></i> <i class="i i-circle-sm text-active"></i> </span> <b class="badge bg-danger pull-right"></b> <i class="i i-stack icon"> </i> <span class="font-bold">Teacher Information</span> </a>
                                            <ul class="nav dk">
                                                <li>
                                                    <a href="add-new-student.php" class="auto"> <i class="i i-dot"></i> <span>Add New Teacher</span> </a>
                                                </li>
                                                <li>
                                                    <a href="view-all-student.php" class="auto"> <i class="i i-dot"></i> <span>View All Teacher</span> </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#" class="auto"> <span class="pull-right text-muted"> <i class="i i-circle-sm-o text"></i> <i class="i i-circle-sm text-active"></i> </span> <b class="badge bg-danger pull-right"></b> <i class="i i-stack icon"> </i> <span class="font-bold">Student Information</span> </a>
                                            <ul class="nav dk">
                                                <li>
                                                    <a href="add-new-student.php" class="auto"> <i class="i i-dot"></i> <span>Add New Student</span> </a>
                                                </li>
                                                <li>
                                                    <a href="view-all-student.php" class="auto"> <i class="i i-dot"></i> <span>View All Student</span> </a>
                                                </li>
                                                <li>
                                                    <a href="add-new-subject.php" class="auto"> <i class="i i-dot"></i> <span>Add New Subject</span> </a>
                                                </li>
                                                <li>
                                                    <a href="add-new-notice.php" class="auto"> <i class="i i-dot"></i> <span>Add New Notice</span> </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#" class="auto"> <span class="pull-right text-muted"> <i class="i i-circle-sm-o text"></i> <i class="i i-circle-sm text-active"></i> </span> <b class="badge bg-danger pull-right"></b> <i class="i i-stack icon"> </i> <span class="font-bold">Account Information</span> </a>
                                            <ul class="nav dk">
                                                <li>
                                                    <a href="add-new-student.php" class="auto"> <i class="i i-dot"></i> <span>Add New Student</span> </a>
                                                </li>
                                                <li>
                                                    <a href="view-all-student.php" class="auto"> <i class="i i-dot"></i> <span>View All Student</span> </a>
                                                </li>
                                                <li>
                                                    <a href="add-new-subject.php" class="auto"> <i class="i i-dot"></i> <span>Add New Subject</span> </a>
                                                </li>
                                                <li>
                                                    <a href="add-new-notice.php" class="auto"> <i class="i i-dot"></i> <span>Add New Notice</span> </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#" class="auto"> <span class="pull-right text-muted"> <i class="i i-circle-sm-o text"></i> <i class="i i-circle-sm text-active"></i> </span> <b class="badge bg-danger pull-right"></b> <i class="i i-stack icon"> </i> <span class="font-bold">Staff Information</span> </a>
                                            <ul class="nav dk">
                                                <li>
                                                    <a href="add-new-student.php" class="auto"> <i class="i i-dot"></i> <span>Add New Staff</span> </a>
                                                </li>
                                                <li>
                                                    <a href="view-all-student.php" class="auto"> <i class="i i-dot"></i> <span>View All Staff</span> </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="">
                                            <a href="dashboard.php" class="auto"> <i class="fa fa-credit-card"> </i> <span class="font-bold">Payment</span> </a>
                                        </li>
                                        <li class="">
                                            <a href="dashboard.php" class="auto"> <i class="fa fa-gears"> </i> <span class="font-bold">Settings</span> </a>
                                        </li>
                                        <li class="">
                                            <a href="dashboard.php" class="auto"> <i class="i i-logout"> </i> <span class="font-bold">Logout</span> </a>
                                        </li>
                                    </ul>
                                </nav>
                                <!-- / nav -->
                            </div>
                        </section>
                        <footer class="footer hidden-xs no-padder text-center-nav-xs">
                            <a href="modal.lockme.html" data-toggle="ajaxModal" class="btn btn-icon icon-muted btn-inactive pull-right m-l-xs m-r-xs hidden-nav-xs"> <i class="i i-logout"></i> </a>
                            <a href="#nav" data-toggle="class:nav-xs" class="btn btn-icon icon-muted btn-inactive m-l-xs m-r-xs"> <i class="i i-circleleft text"></i> <i class="i i-circleright text-active"></i> </a>
                        </footer>
                    </section>
                </aside>
                <!-- /.aside -->
                <section id="content">
                    <section class="hbox stretch">
                  