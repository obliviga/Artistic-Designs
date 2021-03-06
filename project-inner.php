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
              <img src="assets/img/logo-header.png" alt="Specifie an alternate text for an image">
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
              <li class="dropdown active">
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
        <h2>Penthouse in New York</h2>
        <div class="title-devider"></div>
      </div>
      <!-- Site Wrapper -->
      <div class="site-wrapper">
        <!-- Project Inner -->
        <div class="container">
          <div class="row">
            <!-- Project Image Gallery (for more images in your gallery, image width can be changed in styles.css class gallery-inner) -->
            <div class="col-sm-7">
              <ul class="gallery-inner">
                <!-- Image -->
                <li>
                  <a href="assets/img/portfolio/image1.jpg" data-lightbox="example-set">
                    <img src="assets/img/portfolio/image1.jpg" alt="Specifie an alternate text for an image">
                  </a>
                </li>
                <!-- Image -->
                <li>
                  <a href="assets/img/portfolio/image2.jpg" data-lightbox="example-set">
                    <img src="assets/img/portfolio/image2.jpg" alt="Specifie an alternate text for an image">
                  </a>
                </li>
                <!-- Image -->
                <li>
                  <a href="assets/img/portfolio/image3.jpg" data-lightbox="example-set">
                    <img src="assets/img/portfolio/image3.jpg" alt="Specifie an alternate text for an image">
                  </a>
                </li>
                <!-- Image -->
                <li>
                  <a href="assets/img/portfolio/image4.jpg" data-lightbox="example-set">
                    <img src="assets/img/portfolio/image4.jpg" alt="Specifie an alternate text for an image">
                  </a>
                </li>
              </ul>
            </div>
            <!-- Project Information (location, date, category some information about your project) -->
            <div class="col-sm-5">
              <div class="project-info">
                <ul>
                  <!-- Customer -->
                  <li>
                    <b>Customer:</b> Wrapbootstrap
                  </li>
                  <!-- Location -->
                  <li>
                    <b>Location:</b> NEW YORK
                  </li>
                  <!-- Date -->
                  <li>
                    <b>Date:</b> 24 May, 2013
                  </li>
                  <!-- Category -->
                  <li>
                    <b>Category:</b> Interior Design
                  </li>
                </ul>
              </div>
              <!-- Description -->
              <div class="project-description">
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                <p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
                <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas</p>
                <p>Delenit augue duis dolore te feugait nulla facilisi.</p>
              </div>
            </div>
            </div><!-- row -->
            </div><!-- /container -->
            <!-- End Project Inner -->
            <!-- Related Projects -->
            <section class="projects padding-top">
              <!-- Section General Title -->
              <div class="general-title">
                <h2>Related Projects</h2>
                <div class="title-devider"></div>
              </div>
              <div class="container-fluid">
                <div class="row">
                  <!-- Project Item (image,link and description for your project) -->
                  <div class="col-sm-6 col-md-3">
                    <div class="project-inner">
                      <a href="#">
                        <!-- Image -->
                        <img src="assets/img/portfolio/image5.jpg" alt="Specifie an alternate text for an image" >
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
                      <a href="#">
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
                      <a href="#">
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
                      <a href="#">
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
                  <!-- View All Projects Button -->
                  <div class="padding-top padding-bottom text-center">
                    <a href="projects.php" class="btn black-btn">View all Projects</a>
                  </div>
                </section>
                <!-- End Related Projects -->
              </div>
              <!-- End Site Wrapper -->
              <!-- Footer -->
              <?php echo $footer; ?>
                </body>
              </html>