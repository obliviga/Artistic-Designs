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
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
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
              <li class="active"><a href="contact.php">Contact</a></li>
            </ul>
          </div>
        </div>
        </div><!-- /row -->
        </div><!-- /container -->
      </nav>
      <!-- End Header -->
      
      <!-- Section General Title -->
      <div class="general-title bg-color">
        <h2>Contact Us</h2>
        <div class="title-devider"></div>
      </div>
      <!-- Site Wrapper -->
      <div class="site-wrapper">
        <!-- Contact -->
        <div class="container padding-bottom text-center contact-adress">
          <!-- All Contact Information (phone, street, email, website, working hours) -->
          <div class="row">
            <!-- Description -->
            <div class="col-md-8 col-md-offset-2">
              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
            </div>
            <!-- Adress -->
            <div class="col-sm-4 col-md-4">
              <h3>Address</h3>
              <address>
                <p>
                  190 Tehun Street<br>
                  Los Angeles, CA 913 20<br>
                  United States
                </p>
              </address>
            </div>
            <!-- Contact Information -->
            <div class="col-sm-4 col-md-4">
              <h3>Contact Info</h3>
              <address>
                <p>
                  
                  <a href="mailto:#"><i class="fa fa-envelope-o"></i>office@yourdomain.com</a><br>
                  <a href="https://www.google.com/" target="_blank"><i class="fa fa-desktop"></i>www.yourdomain.com</a><br>
                  <i class="fa fa-phone"></i>(973) 879-1777
                </p>
              </address>
            </div>
            <!-- Working Hours -->
            <div class="col-sm-4 col-md-4">
              <h3>Office Hours</h3>
              <address>
                <p>
                  Monday - Friday: 09:00 - 17:00 <br>
                  Saturday: 09:00 - 13:00<br>
                  Sunday: Closed
                </p>
              </address>
            </div>
            </div><!-- /row -->
            <!-- End All Contact Information -->
            </div><!-- /container -->
            <!-- End Contact -->
            </div><!-- /site wrapper -->
            <!-- End Site Wrapper -->
            <!-- Contact Form (name, email, phone and message inputs for your email form "should change your email adress in contactForm.php file") -->
            <div class="bg-color">
              <div class="container">
                <div class="col-lg-12" id="contact">
                  <div id="message"></div>
                  <form method="post" action="contactForm.php" name="contactform" id="contactform">
                    <fieldset>
                      <div class="col-md-6">
                        <!-- Name -->
                        <input name="name" type="text" id="name" size="30" value="" placeholder="Name"/>
                        <br />
                        <!-- Email -->
                        <input name="email" type="text" id="email" size="30" value="" placeholder="Email"/>
                        <br />
                        <!-- Phone -->
                        <input name="phone" type="text" id="phone" size="30" value="" placeholder="Phone"/>
                      </div>
                      <!-- Message -->
                      <div class="col-md-6">
                        <textarea name="comments" cols="40" rows="5" id="comments" placeholder="Message"></textarea>
                      </div>
                      <!-- Submit Button -->
                      <div class="col-md-12 text-center">
                        <button type="submit" class="btn btn-default btn-submit submit" id="submit" value="Submit">Submit</button>
                      </div>
                    </fieldset>
                  </form>
                </div>
              </div>
            </div>
            <!-- End Contact Form -->
            <!-- Google Map (adress on map can be changed in app.js file) -->
            <div id="map-canvas"></div>
            <!-- End Google Map -->
            <!-- Footer -->
            <div id="footer">
              <div class="container">
                <div class="row">
                  <!-- Copyright -->
                  <div class="col-md-4 text-center">
                    <p>Copyright 2014 © Wrapbootstrap.com</p>
                  </div>
                  <!-- Footer Social Icons -->
                  <div class="col-md-4 text-center">
                    <a href="#">
                      <i class="fa fa-facebook fa-lg"></i>
                    </a>
                    <a href="#">
                      <i class="fa fa-twitter fa-lg"></i>
                    </a>
                    <a href="#">
                      <i class="fa fa-pinterest-square fa-lg"></i>
                    </a>
                    <a href="#">
                      <i class="fa fa-dribbble fa-lg"></i>
                    </a>
                    <a href="#">
                      <i class="fa fa-behance fa-lg"></i>
                    </a>
                  </div>
                  
                  <!-- Up Button -->
                  <div class="col-md-4 back-to-top">
                    <a href="#">
                      <i class="fa fa-angle-up fa-2x pull-right"></i>
                    </a>
                  </div>
                  </div><!-- /row -->
                  </div><!-- /container -->
                </div>
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