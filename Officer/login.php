<?php include "../connection.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="../css/ruang-admin.min.css" rel="stylesheet">

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="front/plugins/fontawesome-free/css/all.min.css">
    <!-- IonIcons -->
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="front/dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link rel="stylesheet" href="front/dist/css/roll.css">
</head>
<body onload="Captcha();">
<div class="container-login">
    <div class="row justify-content-center">
        <div class="col-xl-6 col-lg-12 col-md-9">
            <div class="my-5">
                <div class="card-body p-0">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="login-form">
                                <div class="text-center">
                                    <div class="panel-heading" style="text-align: center; margin: 0px;padding: 0px;">
                                        <img src="../img/logo1.png" style="height: 28%;width: 28%;boarder:2px solid red;">
                                    </div>
                                </div>
                                <div class="card shadow-lg"><br>
                                    <div class="text-center">
                                        <p style="font-size: 30px;font-family: Times New Roman" class="text-gray-900 mb-4">Login</p>
                                    </div>
                                    <form class="user">
                                        <div class="col-xl-12 col-lg-12 col-md-12 text-center" style="padding-left:150px;padding-right:150px;">
                                            <form >
                                                <div class="form-group">
                                                    <label >User Name<span style="color: red">*</span> </label>
                                                    <input type="text" class="form-control" id="exampleInputtext">
                                                </div>
                                                <div class="form-group">
                                                    <label >Password <span style="color: red">*</span> </label>
                                                    <input type="password" class="form-control" id="exampleInputPassword">
                                                </div>
                                                <br><br>
                                                <div class="form-group text-center">
                                                    <a href="" style="width: 200px;background: #2e6da4;" onclick="alert(ValidCaptcha());" class="btn btn-primary">Login</a>
                                                </div>
                                        </div<br><br></div>
                                </form>
                                <div class="text-center">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div></div>

<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="js/ruang-admin.min.js"></script>
<script src="vendor/chart.js/Chart.min.js"></script>
<script src="js/demo/chart-area-demo.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="front/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="front/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE -->
<script src="front/dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="front/plugins/chart.js/Chart.min.js"></script>
<script src="https://www.google.com/recaptcha/api.js"></script>
<script src="front/dist/js/pages/dashboard3.js"></script>
</body>

</html>
