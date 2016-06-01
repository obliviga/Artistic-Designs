<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

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
              <li class="active"><a href="/">Home</a></li>
              <li><a href="about.php">About</a></li>
              <li><a href="services.php">Services</a></li>
              <!-- Dropdown -->
              <!-- <li class="dropdown">
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
      </div>
      <!-- /row -->
    </div>
    <!-- /container -->
  </nav>
  <!-- End Header -->
  <!-- Slider -->
  <div id="header-carousel" class="carousel slide carousel-fade header-carousel" data-ride="carousel">
    <!-- Slider Indicators -->
    <!-- <ol class="carousel-indicators">
          <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
          <li data-target="#header-carousel" data-slide-to="1"></li>
        </ol> -->
    <div class="carousel-inner">
      <!-- Slider Item (image, link and description for your project in slider) -->
      <div class="item active">
        <!-- Image -->
        <img src="assets/img/slider-images/banner.jpg" alt="Specifie an alternate text for an image">
        <!-- Description -->
        <div class="carousel-caption header-carousel-caption"></div>
      </div>

      <!-- Slider Item (image, link and description for your project in slider) -->
      <!-- <div class="item">
            <img src="assets/img/slider-images/image2.jpg" alt="Specifie an alternate text for an image">
            <div class="carousel-caption header-carousel-caption">
              <h1>Beautiful way to show your work</h1>
              <a href="project-inner.php" class="btn white-btn">View Project</a>
            </div>
          </div> -->

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
          </div> -->
    <!-- /container -->
    <!-- End Who We Are -->
    <!-- Our Services -->
    <div class="container text-center">
      <!-- Section General Title -->
      <div class="general-title">
        <h2>Design Services</h2>
        <div class="title-devider"></div>
      </div>
      <!-- Section Description -->
      <p>
        No project is too big, small, daunting, or unrealistic. Please reach out to me so we can transform your ideas into your reality.
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
          <p>Every room or project has endless possibilities. I work closely with clients to create unique and personal interiors which are comfortable, livable and reflective of both lifestyles and personalities.</p>
        </div>
        <!-- Services Item (icon, title and description for your service) -->
        <div class="col-sm-4 col-md-4">
          <!-- Icon -->
          <a href="services.php">
            <i class="fa fa-home fa-3x"></i>
          </a>
          <!-- Title -->
          <div class="service-title">
            <h3>Furniture, Fabric &amp; Flooring</h3>
          </div>
          <!-- Description -->
          <p>Established Relationships and accounts with both local and North Carolina Furniture Companies, Fabric and Flooring Vendors, Robert Allen, Kravet, Duralee, Maxwell, Brimar, &amp; Fabricade, Area Rugs, both Handmade and Machine, Broadloom, Ceramic Tile, Marble, Wood.</p>
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
          <p>Please feel free to contact me to either speak or to arrange for a consultation. Available by appointment for interior design consultation in Northern New Jersey: Bergen, Essex, Morris, Sussex and Passaic Counties.
          </p>
        </div>
      </div>
      <div class="row padding-top">
        <address>
          Boonton Township, New Jersey
          <br />
          973-879-1777
        </address>
      </div>
      <!-- /row -->
      <!-- View All Services Button -->
      <div class="padding-top padding-bottom">
        <a href="services.php" class="btn black-btn">
                  View all Services
                </a>
      </div>
    </div>
    <!-- /container -->
    <!-- End Our Services -->
    <!-- Projects -->
    <div class="container-fluid projects">
      <div class="row">
        <!-- Project Item (image, link and description for your project) -->
        <div class="col-sm-6 col-md-3">
          <div class="project-inner">
            <a href="living-room.php">
              <!-- Image -->
              <img src="assets/img/portfolio/lr1.jpg" alt="Living Room">
              <div class="project-caption">
                <!-- Title and Date -->
                <div class="project-details">
                  <p><i class="fa fa-plus fa-lg"></i></p>
                  <h3>Living Room</h3>
                  <!-- <p><small>2013/08</small></p> -->
                </div>
              </div>
            </a>
          </div>
        </div>
        <!-- Project Item (image, link and description for your project) -->
        <div class="col-sm-6 col-md-3">
          <div class="project-inner">
            <a href="kitchen.php">
              <!-- Image -->
              <img src="assets/img/portfolio/ki1.jpg" alt="Kitchen">
              <div class="project-caption">
                <!-- Title and Date -->
                <div class="project-details">
                  <p><i class="fa fa-plus fa-lg"></i></p>
                  <h3>Kitchen</h3>
                  <!-- <p><small>2013/02</small></p> -->
                </div>
              </div>
            </a>
          </div>
        </div>
        <!-- Project Item (image, link and description for your project) -->
        <div class="col-sm-6 col-md-3">
          <div class="project-inner">
            <a href="bathroom.php">
              <!-- Image -->
              <img src="assets/img/portfolio/ba1.jpg" alt="Bathroom">
              <div class="project-caption">
                <!-- Title and Date -->
                <div class="project-details">
                  <p><i class="fa fa-plus fa-lg"></i></p>
                  <h3>Bathroom</h3>
                  <!-- <p><small>2012/01</small></p> -->
                </div>
              </div>
            </a>
          </div>
        </div>
        <!-- Project Item (image, link and description for your project) -->
        <div class="col-sm-6 col-md-3">
          <div class="project-inner">
            <a href="bedroom.php">
              <!-- Image -->
              <img src="assets/img/portfolio/br1.jpg" alt="Bedroom">
              <div class="project-caption">
                <!-- Title and Date -->
                <div class="project-details">
                  <p><i class="fa fa-plus fa-lg"></i></p>
                  <h3>Bedroom</h3>
                  <!-- <p><small>2014/02</small></p> -->
                </div>
              </div>
            </a>
          </div>
        </div>
        <!-- Project Item (image,link and description for your project) -->
        <div class="col-sm-6 col-md-3">
          <div class="project-inner">
            <a href="dining.php">
              <!-- Image -->
              <img src="assets/img/portfolio/dr1.jpg" alt="Dining Room">
              <div class="project-caption">
                <!-- Title and Date -->
                <div class="project-details">
                  <p><i class="fa fa-plus fa-lg"></i></p>
                  <h3>Dining Room</h3>
                  <!-- <p><small>2013/08</small></p> -->
                </div>
              </div>
            </a>
          </div>
        </div>
        <!-- Project Item (image,link and description for your project) -->
        <div class="col-sm-6 col-md-3">
          <div class="project-inner">
            <a href="movie-room.php">
              <!-- Image -->
              <img src="assets/img/portfolio/mr1.jpg" alt="Movie Room">
              <div class="project-caption">
                <!-- Title and Date -->
                <div class="project-details">
                  <p><i class="fa fa-plus fa-lg"></i></p>
                  <h3>Movie Room</h3>
                  <!-- <p><small>2013/08</small></p> -->
                </div>
              </div>
            </a>
          </div>
        </div>
        <!-- Project Item (image,link and description for your project) -->
        <div class="col-sm-6 col-md-3">
          <div class="project-inner">
            <a href="library.php">
              <!-- Image -->
              <img src="assets/img/portfolio/li1.jpg" alt="Library">
              <div class="project-caption">
                <!-- Title and Date -->
                <div class="project-details">
                  <p><i class="fa fa-plus fa-lg"></i></p>
                  <h3>Library</h3>
                  <!-- <p><small>2013/08</small></p> -->
                </div>
              </div>
            </a>
          </div>
        </div>
        <!-- Project Item (image,link and description for your project) -->
        <div class="col-sm-6 col-md-3">
          <div class="project-inner">
            <a href="guest-room.php">
              <!-- Image -->
              <img src="assets/img/portfolio/gr1.jpg" alt="Guest Room">
              <div class="project-caption">
                <!-- Title and Date -->
                <div class="project-details">
                  <p><i class="fa fa-plus fa-lg"></i></p>
                  <h3>Guest Room</h3>
                  <!-- <p><small>2013/08</small></p> -->
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
      <!-- /row -->
    </div>
    <!-- /container -->
    <!-- See All Our Work Button -->
    <div class="all-projects text-center">
      <a href="projects.php" class="btn orange-btn">
                      See all our Projects
                    </a>
    </div>

    <!-- End Projects -->
  </div>
  <!-- /site-wrapper -->
  <!-- End Site Wrapper -->
  <!-- Footer -->
  <?php echo $footer; ?>
  <!-- End Footer -->
</body>

</html>
