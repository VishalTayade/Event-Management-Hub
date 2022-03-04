

<?php
session_start();
include './admin/inc/database.php';
$db = new Database();
$islogin = false;

if (isset($_SESSION['vendor'])) {

    $islogin = true;
    $user_id = $_SESSION['vendor']['user_id'];
    $type = $_SESSION['vendor']['type'];
    $user_data = $user_select = $db->select("users", "*", ['user_id' => $user_id])[0];
}
if (isset($_SESSION['web_user'])) {

    $islogin = true;
    $register_id = $_SESSION['web_user']['register_id'];
}
?>
<!DOCTYPE html>
<html lang="en">

    <!-- Mirrored from 115.160.244.10:8084/themeforest/event_planning/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 21 May 2019 09:53:05 GMT -->
    <head>
        <!-- Meta information -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"><!-- Mobile Specific Metas -->

        <!-- Title -->
        <title>Event Planning</title>

        <!-- favicon icon -->
        <link rel="shortcut icon" href="images/Favicon.ico">

        <!-- CSS Stylesheet -->
        <link href="css/bootstrap.css" rel="stylesheet"><!-- bootstrap css -->
        <link href="css/owl.carousel.css" rel="stylesheet"><!-- carousel Slider -->
        <link href="css/styles.css" rel="stylesheet" /><!-- font css --> 
        <link href="css/datepicker.css" rel="stylesheet" /><!-- Date picker css -->
        <link href="css/loader.css" rel="stylesheet"><!-- Loader Box css -->
        <link href="css/docs.css" rel="stylesheet"><!--  template structure css -->

        <!-- Used Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Domine:400,700%7COpen+Sans:300,300i,400,400i,600,600i,700,700i%7CRoboto:400,500" rel="stylesheet"> 

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

    </head>

    <body class="inner-page">
        <div class="page">
            <!--            <div id="loader-wrapper">
                            <div id="loader"><img src="images/loader.gif" alt=""></div>
                            <div class="loader-section section-left"></div>
                            <div class="loader-section section-right"></div>
                        </div>-->
            <header id="header">
                <div class="quck-link">
                    <div class="container">
                        <div class="mail"><a href="MailTo:info@eventplanning.com"><span class="icon icon-envelope"></span>info@eventplanning.com</a></div>
                        <div class="right-link">
                            <ul>
                                <?php if (!isset($_SESSION['vendor'])) { ?>
                                    <li><a href="vender-login.php"><span class="icon icon-multi-user"></span>Vendor Login</a></li>
                                <?php } else { ?>
                                    <li><a href="vender-logout.php"><span class="icon icon-multi-user"></span>Logout</a></li>        
                                <?php } ?>      
                                <?php if (!isset($_SESSION['web_user'])) { ?>
                                    <li class="registration"><a href="javascript:;" data-toggle="modal" data-target="#registrationModal">Registration</a></li>
                                    <li><a href="javascript:;" data-toggle="modal" data-target="#loginModal">Login</a></li>
                                <?php } else { ?>
                                    <li><a href="vender-logout.php"><span class="icon icon-multi-user"></span>Logout</a></li>        
                                <?php } ?>  
                            </ul>
                        </div>
                    </div>    
                </div>
                <nav id="nav-main">
                    <div class="container">
                        <div class="navbar navbar-inverse">
                            <div class="navbar-header">
                                <a href="index.html" class="navbar-brand"><img src="images/logo.png" alt=""></a>
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="icon1-barMenu"></span>
                                    <span class="icon1-barMenu"></span>
                                    <span class="icon1-barMenu"></span>
                                </button>

                            </div>
                            <div class="navbar-collapse collapse">
                                <ul class="nav navbar-nav">
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="about.php">About Us</a></li>
                                    <li>
                                        <a href="#">Services <span class="icon icon-arrow-down"></span></a>
                                        <ul>
                                            <li><a href="hotels.php">Hotels</a></li>
                                            <li><a href="caterers.php">Caterers</a></li>
                                            <li><a href="mehandi.php">Mehndi</a></li>
                                            <li><a href="decor-florists.php">Decor &amp; Florists</a></li>
                                            <li><a href="cakes.php">Cakes</a></li>
                                            <li><a href="wedding-planner.php">Wedding Planner</a></li>
                                            <li><a href="makeup-hair.php">Make-up and Hair</a></li>
                                            <li><a href="music.php">Music</a></li>
                                            <li><a href="photo-video-grapher.php">Photographers/ Videographers</a></li>
                                            <li><a href="wedding-cards.php">Wedding Cards</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.php">Contact us</a></li>
                                    <?php
                                    if (isset($_SESSION['vendor'])) {
                                        if ($type == 'hotel') {
                                            ?>
                                            <li class="single-col">
                                                <a href="#">My Account <span class="icon icon-arrow-down"></span></a>
                                                <ul>
                                                    <li><a href="hotel-profile.php">Profile</a></li>
                                                    <li><a href="hotel-orders.php">Orders</a></li>
                                                    <li><a href="hotel-change-password.php">Change Password</a></li>
                                                </ul>
                                            </li>
                                            <?php
                                        }
                                        if ($type == 'decor') {
                                            ?>

                                            <li class="single-col">
                                                <a href="#">My Account <span class="icon icon-arrow-down"></span></a>
                                                <ul>
                                                    <li><a href="decor-profile.php">Profile</a></li>
                                                    <li><a href="decor-orders.php">Orders</a></li>
                                                    <li><a href="decor-change-password.php">Change Password</a></li>
                                                </ul>
                                            </li>

                                            <?php
                                        }
                                        if ($type == 'photo') {
                                            ?>
                                            <li class="single-col">
                                                <a href="#">My Account <span class="icon icon-arrow-down"></span></a>
                                                <ul>
                                                    <li><a href="photo-profile.php">Profile</a></li>
                                                    <li><a href="photo-orders.php">Orders</a></li>
                                                    <li><a href="photo-change-password.php">Change Password</a></li>
                                                </ul>
                                            </li>
                                            <?php
                                        }
                                        if ($type == 'parlour') {
                                            ?>
                                            <li class="single-col">
                                                <a href="#">My Account <span class="icon icon-arrow-down"></span></a>
                                                <ul>
                                                    <li><a href="parlour-profile.php">Profile</a></li>
                                                    <li><a href="parlour-orders.php">Orders</a></li>
                                                    <li><a href="parlour-change-password.php">Change Password</a></li>
                                                </ul>
                                            </li>
                                            <?php
                                        }
                                        if ($type == 'caterer') {
                                            ?>
                                            <li class="single-col">
                                                <a href="#">My Account <span class="icon icon-arrow-down"></span></a>
                                                <ul>
                                                    <li><a href="caterer-profile.php">Profile</a></li>
                                                    <li><a href="caterer-orders.php">Orders</a></li>
                                                    <li><a href="caterer-change-password.php">Change Password</a></li>
                                                </ul>
                                            </li>
                                            <?php
                                        }
                                        if ($type == 'card') {
                                            ?>
                                            <li class="single-col">
                                                <a href="#">My Account <span class="icon icon-arrow-down"></span></a>
                                                <ul>
                                                    <li><a href="card-profile.php">Profile</a></li>
                                                    <li><a href="card-orders.php">Orders</a></li>
                                                    <li><a href="card-change-password.php">Change Password</a></li>
                                                </ul>
                                            </li>
                                            <?php
                                        }
                                        if ($type == 'music') {
                                            ?>
                                            <li class="single-col">
                                                <a href="#">My Account <span class="icon icon-arrow-down"></span></a>
                                                <ul>
                                                    <li><a href="music-profile.php">Profile</a></li>
                                                    <li><a href="music-orders.php">Orders</a></li>
                                                    <li><a href="music-change-password.php">Change Password</a></li>
                                                </ul>
                                            </li>
                                            <?php
                                        }
                                        if ($type == 'mehandi') {
                                            ?>
                                            <li class="single-col">
                                                <a href="#">My Account <span class="icon icon-arrow-down"></span></a>
                                                <ul>
                                                    <li><a href="mehandi-profile.php">Profile</a></li>
                                                    <li><a href="mehandi-orders.php">Orders</a></li>
                                                    <li><a href="mehandi-change-password.php">Change Password</a></li>
                                                </ul>
                                            </li>
                                            <?php
                                        }
                                    }
                                    ?>
                                </ul>
                                <?php if (isset($_SESSION['vendor'])) { ?>
                                    <div class="search-box">
                                        <div class="search-icon"><span class="icon icon-user">
                                                Welcome, <?php echo ucwords($user_data['name']); ?>
                                            </span></div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </nav>
            </header>
            <div class="modal modal-vcenter fade" id="loginModal" tabindex="-1" role="dialog">
                <div class="modal-dialog login-popup" role="document">
                    <div class="modal-content">
                        <div class="close-icon" aria-label="Close" data-dismiss="modal" ><img src="images/close-icon.png" alt=""></div>
                        <div class="left-img"><img src="images/login-leftImg.png" alt=""></div>

                        <div class="right-info">
                            <h1>Login</h1>
                            <form action="login_check.php" method="post">
                                <div class="input-form">
                                    <div class="input-box">
                                        <div class="icon icon-user"></div>
                                        <input type="text" name="username" placeholder="Username">
                                    </div>
                                    <div class="input-box">
                                        <div class="icon icon-lock"></div>
                                        <input type="password" name="password" placeholder="Password">
                                    </div>
                                    <div class="check-slide">
                                        <div class="check">
                                            <label class="label_check" for="checkbox-02"><input type="checkbox" name="sample-checkbox-01" id="checkbox-02" value="1" checked="">Remember me</label>

                                        </div>
                                        <a href="#">Forgot password ?</a>
                                    </div>
                                    <div class="submit-slide">
                                        <input type="submit" value="Login" class="btn">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="signUp-link">Haven’t signed up yet? <a href="javascript:void(0);">Sign Up</a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal modal-vcenter fade" id="registrationModal" tabindex="-1" role="dialog">
            <div class="modal-dialog registration-popup" role="document">
                <div class="modal-content">
                    <div class="close-icon" aria-label="Close" data-dismiss="modal" ><img src="images/close-icon.png" alt=""></div>
                    <h1>New Member Registration</h1>
                    <div class="registration-form">
                        <div class="info">
                            <h2>Why to sign up</h2>
                            <ul>
                                <li>Exclusive discounts for all bookings</li>
                                <li>Full access all discounted prices</li>
                                <li>Dedicated wed-ordinator for your event</li>
                                <li>Custom event planner for your event</li>
                            </ul>
                        </div>
                        <form action="register-save.php" method="post">
                            <div class="form-filde">
                                <div class="input-box">
                                    <input type="text" name="name" placeholder="Name">
                                </div>
                                <div class="input-box">
                                    <input type="email" name="email" placeholder="Email ID">
                                </div>
                                <div class="input-box">
                                    <input type="text" name="username" placeholder="Username">
                                </div>
                                <div class="input-box">
                                    <input type="password" name="password" placeholder="Password">
                                </div>
                                <div class="input-box">
                                    <input type="text" name="contact" placeholder="Phone">
                                </div>
                                <div class="check-slide">
                                    <label class="label_check" for="checkbox-03"><input type="checkbox" name="sample-checkbox-01" id="checkbox-03" value="1" checked="">By signing up, I agree to EventPlanning terms of services</label>
                                </div>
                                <div class="submit-slide">
                                    <input type="submit" value="Register" class="btn">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>    
            </div>
        </div>