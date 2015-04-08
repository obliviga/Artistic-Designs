<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
  <title>Artistic Designs LLC</title>
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
              <li class="active"><a href="index.php">Home</a></li>
              <li><a href="about.php">About</a></li>
              <li><a href="services.php">Services</a></li>
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
      <!-- Slider -->
      <div id="header-carousel" class="carousel slide carousel-fade header-carousel" data-ride="carousel">
        <!-- Slider Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
          <li data-target="#header-carousel" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner">
          <!-- Slider Item (image, link and description for your project in slider) -->
          <div class="item active">
            <!-- Image -->
            <img src="assets/img/slider-images/image1.jpg" alt="Specifie an alternate text for an image">
            <!-- Description -->
            <div class="carousel-caption header-carousel-caption">
              <h1>We are a creative <br>
              Interior Design Studio</h1>
              <!-- Project Link -->
              <a href="project-inner.php" class="btn white-btn">View Project</a>
            </div>
          </div>
          
          <!-- Slider Item (image, link and description for your project in slider) -->
          <div class="item">
            <!-- Image -->
            <img src="assets/img/slider-images/image2.jpg" alt="Specifie an alternate text for an image">
            <!-- Decription -->
            <div class="carousel-caption header-carousel-caption">
              <h1>Beautiful way to show your work</h1>
              <!-- Project Link -->
              <a href="project-inner.php" class="btn white-btn">View Project</a>
            </div>
          </div>
          
        </div>
      </div>
      <!-- End Slider -->
      <!-- Site Wrapper -->
      <div class="site-wrapper">
        <!-- Who We Are -->
        <!-- <div class="container text-center">
          <div class="general-title">
            <h2>Who we Are?</h2>
            <div class="title-devider"></div>
          </div>
          <div class="row">
            <div class="col-md-10 col-md-offset-1">
              <p>Larx Design Studio, we design for the hospitality and retail sectors creating exceptional hotels, bars, restaurants and private clubs worldwide. We also work with a select number of private clients creating their dream homes. Our Studio provides a variety of services including interior architecture, interior design, furniture and lighting design.</p>
            </div>
          </div>
          </div> --><!-- /container -->
          <!-- End Who We Are -->
          <!-- Our Services -->
          <div class="container text-center">
            <!-- Section General Title -->
            <div class="general-title">
              <h2>Our Services</h2>
              <div class="title-devider"></div>
            </div>
            <!-- Section Description -->
            <p>
              No project is too big, small, daunting, or unrealistic. Please reach out to me so we transform your ideas into your reality.
            </p>
            <div class="row padding-top">
              <!-- Services Item (icon, title and description for your service) -->
              <div class="col-sm-4 col-md-4">
                <!-- Icon -->
                <a href="services.php">
                  <i class="fa fa-home fa-3x"></i>
                </a>
                <!-- Title -->
                <div class="service-title">
                  <h3>Interior Design</h3>
                </div>
                <!-- Description -->
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci.</p>
              </div>
              <!-- Services Item (icon, title and description for your service) -->
              <div class="col-sm-4 col-md-4">
                <!-- Icon -->
                <a href="services.php">
                  <i class="fa fa-building fa-3x"></i>
                </a>
                <!-- Title -->
                <div class="service-title">
                  <h3>Architecture</h3>
                </div>
                <!-- Description -->
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci.</p>
              </div>
              <!-- Services Item (icon, title and description for your service) -->
              <div class="col-sm-4 col-md-4">
                <!-- Icon -->
                <a href="services.php">
                  <i class="fa fa-file-text-o fa-3x"></i>
                </a>
                <!-- Title -->
                <div class="service-title">
                  <h3>Design Consultations</h3>
                </div>
                <!-- Description -->
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci.</p>
              </div>
              </div><!-- /row -->
              <!-- View All Services Button -->
              <div class="padding-top padding-bottom">
                <a href="services.php" class="btn black-btn">
                  View all Services
                </a>
              </div>
              </div><!-- /container -->
              <!-- End Our Services -->
              <!-- Projects -->
              <div class="container-fluid projects">
                <div class="row">
                  <!-- Project Item (image, link and description for your project) -->
                  <div class="col-sm-6 col-md-3">
                    <div class="project-inner">
                      <a href="project-inner.php">
                        <!-- Image -->
                        <img src="assets/img/portfolio/image1.jpg" alt="Specifie an alternate text for an image" >
                        <div class="project-caption">
                          <!-- Title and Date -->
                          <div class="project-details">
                            <p><i class="fa fa-plus fa-lg"></i></p>
                            <h3>Penthouse Walding</h3>
                            <p><small>2013/08</small></p>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                  <!-- Project Item (image, link and description for your project) -->
                  <div class="col-sm-6 col-md-3">
                    <div class="project-inner">
                      <a href="project-inner.php">
                        <!-- Image -->
                        <img src="assets/img/portfolio/image2.jpg" alt="Specifie an alternate text for an image">
                        <div class="project-caption">
                          <!-- Title and Date -->
                          <div class="project-details">
                            <p><i class="fa fa-plus fa-lg"></i></p>
                            <h3>Bathroom</h3>
                            <p><small>2013/02</small></p>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                  <!-- Project Item (image, link and description for your project) -->
                  <div class="col-sm-6 col-md-3">
                    <div class="project-inner">
                      <a href="project-inner.php">
                        <!-- Image -->
                        <img src="assets/img/portfolio/image3.jpg" alt="Specifie an alternate text for an image">
                        <div class="project-caption">
                          <!-- Title and Date -->
                          <div class="project-details">
                            <p><i class="fa fa-plus fa-lg"></i></p>
                            <h3>House in Town</h3>
                            <p><small>2012/01</small></p>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                  <!-- Project Item (image, link and description for your project) -->
                  <div class="col-sm-6 col-md-3">
                    <div class="project-inner">
                      <a href="project-inner.php">
                        <!-- Image -->
                        <img src="assets/img/portfolio/image4.jpg" alt="Specifie an alternate text for an image">
                        <div class="project-caption">
                          <!-- Title and Date -->
                          <div class="project-details">
                            <p><i class="fa fa-plus fa-lg"></i></p>
                            <h3>House Kitchen</h3>
                            <p><small>2014/02</small></p>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                  <!-- Project Item (image,link and description for your project) -->
                  <div class="col-sm-6 col-md-3">
                    <div class="project-inner">
                      <a href="project-inner.php">
                        <!-- Image -->
                        <img src="assets/img/portfolio/image5.jpg" alt="Specifie an alternate text for an image">
                        <div class="project-caption">
                          <!-- Title and Date -->
                          <div class="project-details">
                            <p><i class="fa fa-plus fa-lg"></i></p>
                            <h3>VILLA IN CANNES</h3>
                            <p><small>2013/08</small></p>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                  <!-- Project Item (image,link and description for your project) -->
                  <div class="col-sm-6 col-md-3">
                    <div class="project-inner">
                      <a href="project-inner.php">
                        <!-- Image -->
                        <img src="assets/img/portfolio/image6.jpg" alt="Specifie an alternate text for an image">
                        <div class="project-caption">
                          <!-- Title and Date -->
                          <div class="project-details">
                            <p><i class="fa fa-plus fa-lg"></i></p>
                            <h3>Penthouse in New York</h3>
                            <p><small>2013/08</small></p>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                  <!-- Project Item (image,link and description for your project) -->
                  <div class="col-sm-6 col-md-3">
                    <div class="project-inner">
                      <a href="project-inner.php">
                        <!-- Image -->
                        <img src="assets/img/portfolio/image7.jpg" alt="Specifie an alternate text for an image">
                        <div class="project-caption">
                          <!-- Title and Date -->
                          <div class="project-details">
                            <p><i class="fa fa-plus fa-lg"></i></p>
                            <h3>Kitchen</h3>
                            <p><small>2013/08</small></p>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                  <!-- Project Item (image,link and description for your project) -->
                  <div class="col-sm-6 col-md-3">
                    <div class="project-inner">
                      <a href="project-inner.php">
                        <!-- Image -->
                        <img src="assets/img/portfolio/image8.jpg" alt="Specifie an alternate text for an image">
                        <div class="project-caption">
                          <!-- Title and Date -->
                          <div class="project-details">
                            <p><i class="fa fa-plus fa-lg"></i></p>
                            <h3>DUSSELDORF</h3>
                            <p><small>2013/08</small></p>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                  </div><!-- /row -->
                  </div><!-- /container -->
                  <!-- See All Our Work Button -->
                  <div class="all-projects text-center">
                    <a href="projects.php" class="btn orange-btn">
                      See all our Projects
                    </a>
                  </div>
                  
                  <!-- End Projects -->
                  
                  <!-- From Blog -->
                  <section class="bg-color padding-top text-center">
                    <div class="container">
                      <!-- Section General Title -->
                      <div class="general-title">
                        <h2>From Blog</h2>
                        <div class="title-devider"></div>
                      </div>
                      <div class="row">
                        <!-- Blog Item (image, title, description, link and date for your blog post) -->
                        <div class="col-sm-4 col-md-4">
                          <div class="thumbnail blog-post">
                            <!-- Image -->
                            <a href="blog-inner.php">
                              <img src="assets/img/blog/image1.jpg" alt="Specifie an alternate text for an image">
                            </a>
                            <!-- Title and Description -->
                            <div class="caption">
                              <div class="blog-inner-title">
                                <a href="blog-inner.php">
                                  <h3>Curabitur auctor vulputate quam facilisis eu dolor</h3>
                                </a>
                              </div>
                              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                              <div class="blog-meta">
                                <span><i class="fa fa-calendar"></i> <a href="blog-inner.php">April 01, 2014</a></span>
                                <span><i class="fa fa-comment"></i> <a href="blog-inner.php">03 Comments</a></span>
                                <span><i class="fa fa-eye"></i> 84 Views</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- Blog Item (image, title, description, link and date for your blog post) -->
                        <div class="col-sm-4 col-md-4">
                          <div class="thumbnail blog-post">
                            <!-- Image -->
                            <a href="blog-inner.php">
                              <img src="assets/img/blog/image2.jpg" alt="Specifie an alternate text for an image">
                            </a>
                            <!-- Title and Description -->
                            <div class="caption">
                              <div class="blog-inner-title">
                                <a href="blog-inner.php">
                                  <h3>Lorem ipsum dolor sit amet, magna adipiscing elit</h3>
                                </a>
                              </div>
                              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                              <div class="blog-meta">
                                <span><i class="fa fa-calendar"></i> <a href="blog-inner.php">April 01, 2014</a></span>
                                <span><i class="fa fa-comment"></i> <a href="blog-inner.php">03 Comments</a></span>
                                <span><i class="fa fa-eye"></i> 84 Views</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- Blog Item (image, title, description, link and date for your blog post) -->
                        <div class="col-sm-4 col-md-4">
                          <div class="thumbnail blog-post">
                            <!-- Image -->
                            <a href="blog-inner.php">
                              <img src="assets/img/blog/image3.jpg" alt="Specifie an alternate text for an image">
                            </a>
                            <!-- Title and Description -->
                            <div class="caption">
                              <div class="blog-inner-title">
                                <a href="blog-inner.php">
                                  <h3>Duis in tortor tortor magna euismod id rutrum eros</h3>
                                </a>
                              </div>
                              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                              <div class="blog-meta">
                                <span><i class="fa fa-calendar"></i> <a href="blog-inner.php">April 01, 2014</a></span>
                                <span><i class="fa fa-comment"></i> <a href="blog-inner.php">03 Comments</a></span>
                                <span><i class="fa fa-eye"></i> 84 Views</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        </div><!-- /row -->
                        </div><!-- /container -->
                        <!-- All Posts Button -->
                        <div class="text-center padding-top padding-bottom">
                          <a href="blog.php" class="btn black-btn">See All Posts</a>
                        </div>
                      </section>
                      <!-- End From blog -->
                      </div><!-- /site-wrapper -->
                      <!-- End Site Wrapper -->
                      <!-- Footer -->
                      <?php echo $footer; ?>
                      <!-- End Footer -->
                      <!-- Js Global Compulsory  -->
                      <script src="assets/plugins/jquery-1.11.1.min.js"></script>
                      <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
                      <!-- Js Implementing Plugins  -->
                      <script src="assets/plugins/moderniz.js"></script>
                      <!-- Js Theme  -->
                      <script src="assets/js/app.js"></script>
                    </body>
                  </html>