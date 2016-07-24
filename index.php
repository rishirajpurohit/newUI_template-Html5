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
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

    <!-- Theme CSS -->
    <link href="css/promet.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <style type="text/css">
        .intro{
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

    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll inline" href="#page-top">
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
                        <a class="page-scroll ul-secondary" href="#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll ul-secondary" href="#join">Join</a>
                    </li>
                    <li>
                        <a class="page-scroll ul-secondary" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Intro Header -->
    <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1 class="brand-heading">pro<span class="clr-secondary">met</span></h1>
                        <p class="intro-text">A free, responsive, one page Custom Theme.
                            <br>Created by Rishiraj Purohit.</p>
                        <a target="_blank" href="#about" class="btn btn-circle page-scroll">
                            <i class="fa fa-angle-double-down animated"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- About Section -->
    <section id="about" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2 class="heading-ul">About pro<span class="clr-secondary">met</span></h2>
                <p>promet is a free Bootstrap 3 theme created by Rishiraj Purohit. It can be yours right now, simply download the template on <a target="_blank" href="http://rishirajpurohit.in/templates/promet/">the preview page</a>. The theme is open source, and you can use it for any purpose, personal or commercial.</p>
                <p>This theme features stock photos by <a target="_blank" href="http://gratisography.com/">Gratisography</a> along with a custom Google Maps skin courtesy of <a target="_blank" href="http://snazzymaps.com/">Snazzy Maps</a>.</p>
                <p>promet includes full HTML, CSS, and custom JavaScript files along with LESS files for easy customization.</p>
            </div>
        </div>
    </section>

    <!-- join Section -->
    <section id="join" class="content-section text-center">
        <div class="join-section">
            <div class="container">
                <div class="col-lg-8 col-lg-offset-2">
                    <h2 class="heading-ul">join pro<span class="clr-secondary">met</span> !! <p id="id01"></p> </h2>
                    <p>You can download promet for free on the preview page at Rishiraj Purohit.</p>
                    <a target="_blank" href="http://rishirajpurohit.in/templates/promet/" class="btn btn-default btn-lg">Visit join Page</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2 class="heading-ul">Contact Rishiraj Purohit</h2>
                <p>Feel free to email us to provide some feedback on our templates, give us suggestions for new templates and themes, or to just say hello!</p>
                <p><a target="_blank" href="mailto:feedback@rishirajpurohit.in">feedback@rishirajpurohit.in</a>
                </p>
                <ul class="list-inline banner-social-buttons">
                    <li>
                        <a target="_blank" href="https://twitter.com/ri5hiraj" class="btn btn-default btn-lg" target="_blank"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                    </li>
                    <li>
                        <a target="_blank" href="https://github.com/rishirajpurohit" class="btn btn-default btn-lg" target="_blank"><i class="fa fa-github fa-fw"></i> <span class="network-name">Github</span></a>
                    </li>
                    <li>
                        <a target="_blank" href="https://plus.google.com/+rishirajpurohitakarex" class="btn btn-default btn-lg" target="_blank"><i class="fa fa-google-plus fa-fw"></i> <span class="network-name">Google+</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <div id="map"></div>

    <!-- Footer -->
    <footer>
        <div class="container text-center">
            <p>Copyright &copy; PROMET 2016</p>
        </div>
    </footer>

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

</body>

</html>
