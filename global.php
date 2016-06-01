<?php
$head = "
<!-- Meta Tags -->
<meta charset='utf-8'>
<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
<meta name='description' content='>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<!-- Favicon-->
<link rel='icon' type='image/png' href='assets/img/favicon.ico'>
<!-- Css Global Compulsory -->
<link rel='stylesheet' href='assets/plugins/bootstrap/css/bootstrap.min.css'>
<!-- Css Implementing Plugins -->
<link rel='stylesheet' href='assets/plugins/font-awesome/css/font-awesome.min.css'>
<link rel='stylesheet' href='assets/plugins/lightbox/css/lightbox.css'>
<!-- Css Theme -->
<link rel='stylesheet' href='assets/css/style.css'>
<link rel='stylesheet' href='assets/fonts/montserrat/style.css'>
<!-- Web Fonts -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600&subset;=latin,cyrillic' rel='stylesheet' type='text/css'>
<link rel='stylesheet' href='assets/fonts/montserrat/style.css'>
";
$footer = '
<div id="footer">
  <div class="container">
    <div class="row">
      <!-- Copyright -->
      <div class="col-md-4 text-center">
        <p>Copyright 2016 © Artistic Designs LLC</p>
      </div>
      <!-- Footer Social Icons -->
      <div class="col-md-4 text-center">
        <a href="#">
          <i class="fa fa-facebook fa-lg"></i>
        </a>
        <a href="#">
          <i class="fa fa-pinterest-square fa-lg"></i>
        </a>
      </div>

      <div class="col-md-3">
        Powered by: <a href="http://www.highmountaingraphics.com" target="_blank">High Mountain Graphics</a>
      </div>
      <!-- Up Button -->
      <div class="col-md-1 back-to-top">
        <a href="#">
          <i class="fa fa-angle-up fa-2x pull-right"></i>
        </a>
      </div>
      </div><!-- /row -->
      </div><!-- /container -->
    </div>
    <!-- Js Global Compulsory  -->
    <script src="assets/plugins/jquery-1.11.1.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- Js Implementing Plugins  -->
    <script src="assets/plugins/moderniz.js"></script>
    <script src="assets/plugins/lightbox/js/lightbox.js"></script>
    <!-- Js Page  -->
    <script src="assets/js/app.js"></script>
    ';

$projects_nav = '
<nav class="navbar navbar-default header-navbar" role="navigation">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/">
            <!-- Logo Image -->
            Artistic Designs
          </a>
        </div>
      </div>
      <div class="col-md-8">
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="services.php">Services</a></li>
            <!-- Dropdown -->
            <!-- <li class="dropdown active">
              <a href="projects.php" class="dropdown-toggle" data-toggle="dropdown">Projects</a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="project-inner.php">Single Project</a></li>
                <li><a href="projects.php">Gallery Style</a></li>
              </ul>
            </li> -->
            <li><a href="contact.php">Contact</a></li>
          </ul>
        </div>
      </div>
      </div><!-- /row -->
      </div><!-- /container -->
    </nav>
'
?>
