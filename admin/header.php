<?php
session_start();
if (!isset($_SESSION['admin'])) {
    $_SESSION['msg'] = array('txt' => "You are not a valid user. Please LogIn to Continue.", 'type' => 'danger');
    header("Location:login.php");
}
require './inc/database.php';
$db = new Database();
$user_id = $_SESSION['admin']['user_id'];
$type = $_SESSION['admin']['type'];

$user = $db->select("users", "*", ['user_id' => $user_id])[0];
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta name="description" content="">
        <title>Wedding Planner</title>

        <link rel="icon" type="image/logo.jpg" href="../chala.png" sizes="32x32">
        <link rel="icon" type="image/logo.jpg" href="../chala.png" sizes="16x16">

        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700" rel="stylesheet">
        <link rel="stylesheet" href="css/vendor.min.css">
        <link rel="stylesheet" href="css/cosmos.min.css">
        <link rel="stylesheet" href="css/application.min.css">


        <!-- Core JS files -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/fancybox.min.js"></script>
        <script src="js/app.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
        <script src="https://www.google.com/jsapi"></script>
        <script src="js/maps/jvectormap/jvectormap.min.js"></script>
        <script src="js/maps/jvectormap/map_files/world.js"></script>
        <script src="js/dashboard.js"></script>
        <script src="js/maps/google/markers/symbols_custom.js"></script>


        <!---------------------------------Datepicker---------------------------------------------------------->
        <!--        <link href="css/jquery-ui.css" rel="stylesheet" type="text/css"/>
                <script src="js/jquery-1.js" type="text/javascript"></script>

                <link rel="stylesheet" href="/resources/demos/style.css">
                <script src="js/jquery-ui-1.js" type="text/javascript"></script>-->


        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="/resources/demos/style.css">
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <!-------------------------------------------------------------------------->
    </head>
    <body class="layout layout-header-fixed layout-left-sidebar-fixed">
        <div class="site-overlay"></div>
        <div class="site-header">
            <nav class="navbar navbar-default">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">
                        <img src="img/logo.png" alt="" height="80" width="120" style="margin-top:-22px;">
                    </a>
                    <button class="navbar-toggler left-sidebar-toggle pull-left visible-xs" type="button">
                        <span class="hamburger"></span>
                    </button>

                    <button class="navbar-toggler pull-right visible-xs-block" type="button" data-toggle="collapse" data-target="#navbar">
                        <span class="more"></span>
                    </button>

                </div>
                <div class="navbar-collapsible">
                    <div id="navbar" class="navbar-collapse collapse">
                        <button class="navbar-toggler left-sidebar-collapse pull-left hidden-xs" type="button">
                            <span class="hamburger"></span>
                        </button>

                        <!-- Mobile view logout -->
                        <ul class="nav navbar-nav">
                            <li class="visible-xs-block">
                                <h4 class="navbar-text text-center">Welcome Admin</h4>
                            </li>
                        </ul>
                        <form class="navbar-form navbar-left">

                        </form>
                        <ul class="nav navbar-nav navbar-right">

                            <li class="nav-table dropdown visible-xs-block">
                                <a href="change-password.php">

                                    <span class="hidden-md-up m-l-15">Change Password</span>
                                </a>

                            </li>
                            <li class="nav-table dropdown visible-xs-block">
                                <a href="logout.php" >

                                    <span class="hidden-md-up m-l-15">Logout</span>
                                </a>

                            </li>

                            <!-- Mobile view logout End -->

                            <li class="nav-table dropdown hidden-sm-down">

                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">


                                    <?php if ($type == "admin") { ?>
                                        <span class="nav-cell">Welcome Admin
                                            <span class="caret"></span>
                                        </span>
                                    <?php } else { ?>
                                        <span class="nav-cell">Welcome <?php echo ucwords($user['name']); ?>
                                            <span class="caret"></span>
                                        </span>
                                    <?php } ?>
                                </a>
                                <ul class="dropdown-menu">

                                    <li>
                                        <a href="change-password.php">
                                            <i class="zmdi zmdi-key m-r-10"></i> Change Password</a>
                                    </li>

                                    <li>
                                        <a href="logout.php">
                                            <i class="zmdi zmdi-power m-r-10"></i> Logout</a>
                                    </li>

                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class="site-main">
            <div class="site-left-sidebar">

                <div class="custom-scrollbar">
                    <ul class="sidebar-menu">
                        <li class="menu-title">Main</li>
                        <li class="active">
                            <a href="index.php" style="color:#7d57c1">
                                <span class="menu-icon" style="color:#7d57c1">
                                    <i class="zmdi zmdi-view-web"></i>
                                </span>
                                <span class="menu-text">Dashboard</span>
                            </a>
                        </li>

                        <li class="with-sub active">
                            <a href="#" aria-haspopup="true">
                                <span class="menu-icon">
                                    <i class="zmdi zmdi-balance zmdi-hc-fw"></i>
                                </span>
                                <span class="menu-text">Hotels</span>
                            </a>
                            <ul class="sidebar-submenu collapse">
                                <li class=""><a href="hotel-add.php">Add Hotel</a></li>
                                <li class=""><a href="hotel-manage.php">Manage Hotel</a></li>
                            </ul>
                        </li>

                        <li class="with-sub active">
                            <a href="#" aria-haspopup="true">
                                <span class="menu-icon">
                                    <i class="zmdi zmdi-accounts zmdi-hc-fw"></i>
                                </span>
                                <span class="menu-text">Decors & Florists</span>
                            </a>
                            <ul class="sidebar-submenu collapse">
                                <li class=""><a href="decor-add.php">Add Decor</a></li>
                                <li class=""><a href="decor-manage.php">Manage Decor</a></li>
                            </ul>
                        </li>

                        <li class="with-sub active">
                            <a href="#" aria-haspopup="true">
                                <span class="menu-icon">
                                    <i class="zmdi zmdi-camera zmdi-hc-fw"></i>
                                </span>
                                <span class="menu-text">Photographers</span>
                            </a>
                            <ul class="sidebar-submenu collapse">
                                <li class=""><a href="photographer-add.php">Add Photographer</a></li>
                                <li class=""><a href="photographer-manage.php">Manage Photographer</a></li>
                            </ul>
                        </li>

                        <li class="with-sub active">
                            <a href="#" aria-haspopup="true">
                                <span class="menu-icon">
                                    <i class="zmdi zmdi-face zmdi-hc-fw"></i>
                                </span>
                                <span class="menu-text">Beauty Parlours</span>
                            </a>
                            <ul class="sidebar-submenu collapse">
                                <li class=""><a href="parlour-add.php">Add Beauty Parlour</a></li>
                                <li class=""><a href="parlour-manage.php">Manage Beauty Parlour</a></li>
                            </ul>
                        </li>

                        <li class="with-sub active">
                            <a href="#" aria-haspopup="true">
                                <span class="menu-icon">
                                    <i class="zmdi zmdi-cutlery zmdi-hc-fw"></i>
                                </span>
                                <span class="menu-text">Caterers</span>
                            </a>
                            <ul class="sidebar-submenu collapse">
                                <li class=""><a href="caterer-add.php">Add Caterer</a></li>
                                <li class=""><a href="caterer-manage.php">Manage Caterer</a></li>
                            </ul>
                        </li>

                        <li class="with-sub active">
                            <a href="#" aria-haspopup="true">
                                <span class="menu-icon">
                                    <i class="zmdi zmdi-receipt zmdi-hc-fw"></i>
                                </span>
                                <span class="menu-text">Wedding Cards</span>
                            </a>
                            <ul class="sidebar-submenu collapse">
                                <li class=""><a href="cards-add.php">Add Wedding Cards</a></li>
                                <li class=""><a href="cards-manage.php">Manage Wedding Cards</a></li>
                            </ul>
                        </li>

                        <li class="with-sub active">
                            <a href="#" aria-haspopup="true">
                                <span class="menu-icon">
                                    <i class="zmdi zmdi-input-composite zmdi-hc-fw"></i>
                                </span>
                                <span class="menu-text">Music System</span>
                            </a>
                            <ul class="sidebar-submenu collapse">
                                <li class=""><a href="music-add.php">Add Music System</a></li>
                                <li class=""><a href="music-manage.php">Manage Music System</a></li>
                            </ul>
                        </li>

                        <li class="with-sub active">
                            <a href="#" aria-haspopup="true">
                                <span class="menu-icon">
                                    <i class="zmdi zmdi-blur zmdi-hc-fw"></i>
                                </span>
                                <span class="menu-text">Mehandi</span>
                            </a>
                            <ul class="sidebar-submenu collapse">
                                <li class=""><a href="mehandi-add.php">Add Mehandi</a></li>
                                <li class=""><a href="mehandi-manage.php">Manage Mehandi</a></li>
                            </ul>
                        </li>

                        <li class="with-sub active">
                            <a href="#" aria-haspopup="true">
                                <span class="menu-icon">
                                    <i class="zmdi zmdi-cake zmdi-hc-fw"></i>
                                </span>
                                <span class="menu-text">Cakes</span>
                            </a>
                            <ul class="sidebar-submenu collapse">
                                <li class=""><a href="cake-add.php">Add Cakes</a></li>
                                <li class=""><a href="cake-manage.php">Manage Cakes</a></li>
                            </ul>
                        </li>

                        <li class="with-sub active">
                            <a href="#" aria-haspopup="true">
                                <span class="menu-icon">
                                    <i class="zmdi zmdi-account-add zmdi-hc-fw"></i>
                                </span>
                                <span class="menu-text">Event Planner</span>
                            </a>
                            <ul class="sidebar-submenu collapse">
                                <li class=""><a href="event-planner-add.php">Add Event Planner</a></li>
                                <li class=""><a href="event-planner-manage.php">Manage Event Planner</a></li>
                            </ul>
                        </li>
                        <li class="active">
                            <a href="contact.php">
                                <span class="menu-icon">
                                    <i class="zmdi zmdi-phone"></i>
                                </span>
                                <span class="menu-text">Contact</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <style>
                a{
                    color: #7d57c1;
                }
            </style>