<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
 
     <!-- Site Metas -->
    <title>Discovery Foodstuff</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/Logo 1.png" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/Logo 1.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!-- Modernizer for Portfolio -->
    <script src="js/modernizer.js"></script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>

    <!-- LOADER -->
    <div id="preloader">
        <div class="loader">
            <div class="loader__bar"></div>
            <div class="loader__bar"></div>
            <div class="loader__bar"></div>
            <div class="loader__bar"></div>
            <div class="loader__bar"></div>
            <div class="loader__ball"></div>
        </div>
    </div><!-- end loader -->
    <!-- END LOADER -->
    
    <div class="top-bar">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="left-top">
                        <div class="email-box">
                            <a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i> discoveryaftab@gmail.com</a>
                        </div>
                        <div class="phone-box">
                            <a href="tel:1234567890"><i class="fa fa-phone" aria-hidden="true"></i> +971 55 717 58 42</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="right-top">
                        <div class="social-box">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-rss-square" aria-hidden="true"></i></a></li>
                            <ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <header class="header header_style_01">
        <nav class="megamenu navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                     <a class="navbar-brand" href="index.php"><img src="images/Logo 1.png" class="img-fluid" style="height:60px; " alt="image"></a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a class="active" href="index.php">Home</a></li>
                        <li><a href="about-us.php">About us</a></li>
                        <li><a href="products.php">Products</a></li>
                        <li><a href="gallery.php">Gallery</a></li>
                        <li><a href="contact.php">Contact</a></li>
                        <li><a href="login.php">Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="banner-area banner-bg-1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="banner">
                        <h2>Contact Us</h2>
                        <ul class="page-title-link">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="contact" class="section wb">
        <div class="container">
            <div class="section-title text-center">
                <h3>Get in touch</h3>
                
            </div><!-- end title -->

            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="contact_form">
                        <div id="message"></div>
                        <form id="contactform" class="row" action="contact.php" name="contactform" method="post">
                            <fieldset class="row-fluid">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <input type="text" name="first_name" id="first_name" class="form-control" placeholder="First Name">
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Last Name">
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <input type="email" name="email" id="email" class="form-control" placeholder="Your Email">
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <input type="text" name="phone" id="phone" class="form-control" placeholder="Your Phone">
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <label class="sr-only">Select Service</label>
                                    <select name="select_service" id="select_service" class="selectpicker form-control" data-style="btn-white">
                                        <option value="12">Installation Service</option>
                                        <option value="Web Design">Fruits</option>
                                        <option value="Web Development">Vegetable</option>
                                        <option value="Others">Others</option>
                                    </select>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <textarea class="form-control" name="comments" id="comments" rows="6" placeholder="Give us more details.."></textarea>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center">
                                    <button type="submit" value="SEND" id="submit" class="btn btn-light btn-radius btn-brd grd1 btn-block">Submit</button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->
            
            <div class="row">
                <div class="col-md-offset-1 col-sm-10 col-md-10 col-sm-offset-1 pd-add">
                    <div class="address-item">
                        <div class="address-icon">
                            <i class="icon icon-location2"></i>
                        </div>
                        <h3>Dubai</h3>
                        <p>Al Aweer Fruits & Vegetable Market<br>
                        Building No: 10, Shop No: 01
                            <br> P.O Box:294905</p>
                    </div>
                    <div class="address-item">
                        <div class="address-icon">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </div>
                        <h3>Email Us</h3>
                        <p>discoveryaftab@gmail.com
                            <br>info@discoveryfoodstuff.com<br>
                            
                            </p>
                    </div>
                    <div class="address-item">
                        <div class="address-icon">
                            <i class="icon icon-headphones"></i>
                        </div>
                        <h3>Call Us</h3>
                        <p>+971 55 717 58 42
                            <br>+971 42 26 27 38<br>
                            
                            </p>
                    </div>
                </div>
            </div><!-- end row -->
            
        </div><!-- end container -->
    </div><!-- end section -->

    

   <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <h3><img src="images/Logo 1.png" style="height: 50px; width: 240px;"></h3>
            <p>Discovery Foodstuff Trading Co. LLC is one of the most recognised and reliable, trusted name in the importing, exporting and supplying of fresh fruits and vagetables in the UAE market.</p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="ion-ios-arrow-right"></i> <a href="about-us.php">About Us</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="services.php">Our Service</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Products</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Gallery</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Contact</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>OUR LOCATION</h4>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3610.868230008821!2d55.38289172695315!3d25.173926799999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f67b3189061c7%3A0x85bf4debb6c37086!2sAl%20Aweer%20Central%20Fruit%20%26%20Vegetable%20Market!5e0!3m2!1sen!2sbd!4v1652523458410!5m2!1sen!2sbd" width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

          </div>

          <div class="col-lg-3 col-md-6 footer-newsletter">
            <h4>OUR ADDRESS</h4>
            <p>Al Aweer Fruits & Vegetable Market<br>
              Building No: 10, Shop No: 01<br>
              P.O Box:294905<br>
              Dubai, UAE<br>
           
              <strong>Tel:</strong> 04 547 0232<br>
              <strong>Mob:Whatsapp </strong><a href="#" style="color:green;"class="twitter"><i class="fa fa-whatsapp"></i></a> +971 55 7175842<br>
              <strong>Email:</strong> discoveryaftab@gmail.com</p>

            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
            </div>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Discovery Foodstuff L.L.C</strong>. © 2022
      </div>
     <!-- <div class="credits" style="font-weight:bold;">
       
        Designed by <a href="https://hr.grihayanbd.com/" style="color:red;">MD: JITU</a>
      </div> -->
    </div>
  </footer><!-- End Footer -->


    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>
    <script src="js/portfolio.js"></script>
    <script src="js/hoverdir.js"></script>    

</body>
</html>