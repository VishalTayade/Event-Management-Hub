<!DOCTYPE html>
<html lang="en">


    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta name="description" content="">
        <title>Welcome Wedding Planner : Admin</title>
        <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.html">
        <link rel="icon" type="image/png" href="../chala.png" sizes="32x32">
        <link rel="manifest" href="manifest.html">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700" rel="stylesheet">
        <link rel="stylesheet" href="css/vendor.min.css">
        <link rel="stylesheet" href="css/cosmos.min.css">
        <link rel="stylesheet" href="css/application.min.css">

    </head>
    <style>
        body { 
            background-image: url('img/background3.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center; 
            background-size:1380px 680px;
        }
    </style>

    <body class="authentication-body" >
        <div class="container-fluid" >
            <div class="authentication-header m-b-30" >

            </div>
            <div class="row">
                <div class="col-sm-4 col-sm-offset-4">
                    <div class="authentication-content m-b-30" style="border:5px inset purple;background-color: white; border-radius: 10px;margin-top: 40%;">
                        <center><img src="img/logo.png" width="240" height="105" alt="" style="border-radius: 20%;"/></center><br>
                        <form action="login-check.php" method="post">
                            <div class="form-group">
                                <label for="form-control-1">Username</label>
                                <input autofocus type="text" name="username" class="form-control" id="form-control-1" placeholder="Enter Username">
                            </div>
                            <div class="form-group">
                                <label for="form-control-2">Password</label>
                                <input type="password" name="password" class="form-control" id="form-control-2" placeholder="Enter Password">
                            </div>
                            <div class="checkbox">
                                <label class="pull-right">
                                    <a href="forgot-password.php">Forgotten Password?</a>
                                </label>
                            </div>
                            <button type="submit" class="btn btn-info btn-block">Login</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
        <script src="js/vendor.min.js"></script>
        <script src="js/cosmos.min.js"></script>
        <script src="js/application.min.js"></script>
    </body>

    <!-- Mirrored from big-bang-studio.com/cosmos/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 31 Jul 2017 06:53:23 GMT -->
</html>