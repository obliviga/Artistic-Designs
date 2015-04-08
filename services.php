<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
  <title>HOUSE - Interior Design Responsive Template</title>
  <!-- PHP File Includes -->
  <?php include 'global.php' ?>
  <?php echo $head; ?>
</head>
<body>
  <!-- Header (navigation menu, and logo) -->
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
            <a class="navbar-brand" href="index.php">
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
              <li class="active"><a href="services.php">Services</a></li>
              <!-- Dropdown -->
              <li class="dropdown">
                <a href="projects.php" class="dropdown-toggle" data-toggle="dropdown">Projects</a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="project-inner.php">Single Project</a></li>
                  <li><a href="projects.php">Gallery Style</a></li>
                </ul>
              </li>
              <!-- Dropdown -->
              <li class="dropdown">
                <a href="blog.php" class="dropdown-toggle" data-toggle="dropdown">Blog</a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="blog-inner.php">Single Blog</a></li>
                  <li><a href="blog.php">Gallery Blog</a></li>
                </ul>
              </li>
              <li><a href="contact.php">Contact</a></li>
            </ul>
          </div>
        </div>
        </div><!-- /row -->
        </div><!-- /container -->
      </nav>
      <!-- End Header -->
      <!-- Section General Title -->
      <div class="general-title bg-color">
        <h2>What we do?</h2>
        <div class="title-devider"></div>
      </div>
      <!-- Site Wrapper -->
      <div class="site-wrapper">
        <!-- Services -->
        <div class="container text-center padding-bottom">
          <div class="row">
            <!-- Service Item (title, icon and description for your service) -->
            <div class="col-sm-6 col-md-2">
              <!-- Icon -->
              <a href="#">
                <i class="fa fa-calculator fa-3x"></i>
              </a>
              <!-- Title and Description -->
              <div class="service-title">
                <h3>Floor Plans</h3>
              </div>
              <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.</p>
            </div>
            <!-- Service Item (title, icon and description for your service) -->
            <div class="col-sm-6 col-md-2">
              <!-- Icon -->
              <a href="#">
                <i class="fa fa-paint-brush fa-3x"></i>
              </a>
              <!-- Title and Description -->
              <div class="service-title">
                <h3>Color Palate</h3>
              </div>
              <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.</p>
            </div>
            <!-- Service Item (title, icon and description for your service) -->
            <div class="col-sm-6 col-md-2">
              <!-- Icon -->
              <a href="#">
                <i class="fa fa-windows fa-3x"></i>
              </a>
              <!-- Title and Description -->
              <div class="service-title">
                <h3>Wall & Window Treatments</h3>
              </div>
              <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.</p>
            </div>
            <!-- Service Item (title, icon and description for your service) -->
            <div class="col-sm-6 col-md-2">
              <!-- Icon -->
              <a href="">
                <i class="fa fa-lightbulb-o fa-3x"></i>
              </a>
              <!-- Title and Description -->
              <div class="service-title">
                <h3>Lighting</h3>
              </div>
              <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.</p>
            </div>
            <!-- Service Item (title, icon and description for your service) -->
            <div class="col-sm-6 col-md-2">
              <!-- Icon -->
              <a href="#">
                <i class="fa fa-home fa-3x"></i>
              </a>
              <!-- Title and Description -->
              <div class="service-title">
                <h3>Furniture & Fabric</h3>
              </div>
              <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.</p>
            </div>
            <!-- Service Item (title, icon and description for your service) -->
            <div class="col-sm-6 col-md-2">
              <!-- Icon -->
              <a href="#">
                <i class="fa fa-fire fa-3x"></i>
              </a>
              <!-- Title and Description -->
              <div class="service-title">
                <h3>Fireplaces</h3>
              </div>
              <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.</p>
            </div>
            </div><!-- /row -->
            </div><!-- /container -->
            <!-- End Services -->
            <!-- Additional Services -->
            <section class="text-center bg-color">
              <!-- Section General Title -->
              <div class="general-title">
                <h2>Additional Services</h2>
                <div class="title-devider"></div>
              </div>
              <div class="container">
                <div class="row">
                  <!-- Additional Services -->
                  <div class="panel-group" id="accordion">
                    <!-- Additional Service Item (title, image and description for your additional service) -->
                    <div class="col-sm-6 col-md-6">
                      <div class="panel panel-default">
                        <a data-toggle="collapse" data-parent="#accordion" href="#buildings">
                          <div class="panel-heading">
                            <!-- Title -->
                            <div class="service-title">
                              <h3>Buildings</h3>
                            </div>
                          </div>
                        </a>
                        <div id="buildings" class="panel-collapse collapse">
                          <!-- Description -->
                          <div class="panel-body">
                            <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                          </div>
                        </div>
                        <img src="assets/img/services/image1.jpg" alt="Specifie an alternate text for an image">
                      </div>
                    </div>
                    <!-- Additional Service Item (title, image and description for your additional service) -->
                    <div class="col-sm-6 col-md-6">
                      <div class="panel panel-default">
                        <a data-toggle="collapse" data-parent="#accordion" href="#construction">
                          <div class="panel-heading">
                            <!-- Title -->
                            <div class="service-title">
                              <h3>Construction</h3>
                            </div>
                          </div>
                        </a>
                        <div id="construction" class="panel-collapse collapse">
                          <!-- Description -->
                          <div class="panel-body">
                            <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                          </div>
                        </div>
                        <img src="assets/img/services/image2.jpg" alt="Specifie an alternate text for an image">
                      </div>
                    </div>
                    </div><!-- panel-group -->
                    <!-- End Additional Services -->
                    
                    </div><!-- /row -->
                    </div><!-- /container -->
                  </section>
                  <!-- End Additional Services -->
                  </div><!-- /site-wrapper -->
                  <!-- End Site Wrapper -->
                  <!-- Footer -->
                  <?php echo $footer ?>
                  <!-- End Footer -->
                  <!-- Js Global Compulsory  -->
                  <script src="assets/plugins/jquery-1.11.1.min.js"></script>
                  <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
                  <!-- Js Implementing Plugins  -->
                  <script src="assets/plugins/moderniz.js"></script>
                  <!-- Js Page  -->
                  <script src="assets/js/app.js"></script>
                </body>
              </html>