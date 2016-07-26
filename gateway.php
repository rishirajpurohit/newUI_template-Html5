<?php

  $bg = array('intro-bg.jpg', 'intro-bg-2.jpg', 'intro-bg-3.jpg', 'intro-bg-4.jpg', 'intro-bg-5.jpg' ); 
  // array of filenames

  $i = ceil(rand(0, count($bg)-1)); // generate random number size of the array
  $selectedBg = "$bg[$i]"; // set variable equal to which random filename was chosen

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Rishiraj Purohit">

    <title>Project Management</title>

    <!-- Bootstrap Core CSS -->
    <link type="text/css" rel="stylesheet" href="/assets/css/theme-default/bootstrap.css" />

    <!-- Material Admin -->
    <link type="text/css" rel="stylesheet" href="/assets/css/theme-default/materialadmin.css" />

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    
    <!-- Fonts ICONIC -->
    <link type="text/css" rel="stylesheet" href="/assets/css/theme-default/material-design-iconic-font.min.css" />

    <!-- Theme CSS -->
    <link href="css/promet.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <style type="text/css">
        body{
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0.52), rgba(0, 0, 0, 0.22)), url(img/<?php echo $selectedBg; ?>) no-repeat top center scroll;
            background-size: cover;
        }
    </style>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

<div class="container">
    <div class="row">
             <!-- Navigation -->
        <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                        Menu <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand page-scroll inline" href="../index.php">
                       <img src="img/logo.png" class="img-responsive rx-logo" >
                       <span class="light">Pro</span><span class="clr-secondary">met</span>
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                    <ul class="nav navbar-nav">
                        <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                        <li class="hidden">
                            <a target="_blank" href="#page-top"></a>
                        </li>
                        <li>
                            <a class="page-scroll ul-secondary" href="../index.php#contact">Contact</a>
                        </li>
                        
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>
    </div>

<div class="row">
        <div class="col-md-5 rx-connect">
        <div class="form">
            <div class="card card-underline">
                        <div class="card-head text-center style-primary">
                            <header>
                                <h4 class="text-light "><i class="fa fa-users"></i> Register/Login</h4>
                            </header>
                        </div>
                        <div class="card-body floating-label">
                            
                            <div class="form-group">
                                <input type="text" class="form-control" id="Username2">
                                <label for="Username2"><i class="fa fa-envelope-o"></i> Email</label>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="Password2">
                                <label for="Password2"><i class="fa fa-pencil"></i> Password</label>
                            </div>
                            <div class="text-center text-white ">
                            <div class="text-primary"> Or Use :</div>
                                <span class="facebook-login social-btn">
                                    <button type="submit" class="btn btn-flat  ink-reaction"><i class="fa fa-external-link"></i> FaceBook</button>
                                </span>
                                <span class="google-login text-white social-btn">
                                    <button type="submit" class="btn btn-flat  ink-reaction"><i class="fa fa-external-link"></i> Google</button>
                                </span>
                            </div>
                        </div><!-- card body end -->
                        <hr/>
                        <div class="card-actionbar">
                            <div class="card-actionbar-row">
                                <button type="submit" class="btn btn-flat btn-primary ink-reaction pull-left"><i class="fa fa-user-plus"></i> Create account</button>
                                <button type="submit" class="btn btn-flat btn-primary ink-reaction"><i class="fa fa-sign-in"></i> Log In</button>
                            </div>
                        </div>

                    </div><!-- card end -->
                    </div> <!-- form end -->
        </div><!-- col end -->
    </div><!-- row end -->
</div>
  


  <!-- <footer class="stick-bottom-right">
      copyright by PROMET | 2016
  </footer>  
 -->
 

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>

    <!-- Theme JavaScript -->
    <script src="js/promet.min.js"></script>

    <script src="/assets/js/libs/nanoscroller/jquery.nanoscroller.min.js"></script>
        
        <!-- Put App.js last in your javascript imports -->
        <script src="/assets/js/core/source/App.min.js"></script>

</body>

</html>
