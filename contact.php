<?php  include 'header.php'?>
    
    <div class="site-wrap" id="home-section">

      <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>



      <header class="site-navbar site-navbar-target" role="banner">

        <div class="container mb-3">
          <div class="d-flex align-items-center">
            <div class="site-logo mr-auto">
              <a href="index.html">Noxen<span class="text-primary">.</span></a>
            </div>
            <div class="site-quick-contact d-none d-lg-flex ml-auto ">
              <div class="d-flex site-info align-items-center mr-5">
                <span class="block-icon mr-3"><span class="icon-map-marker"></span></span>
                <span>34 Street Name, City Name Here, <br> United States</span>
              </div>
              <div class="d-flex site-info align-items-center">
                <span class="block-icon mr-3"><span class="icon-clock-o"></span></span>
                <span>Sunday - Friday 8:00AM - 4:00PM <br> Saturday CLOSED</span>
              </div>
              
            </div>
          </div>
        </div>


        <div class="container">
          <div class="menu-wrap d-flex align-items-center">
            <span class="d-inline-block d-lg-none"><a href="#" class="text-black site-menu-toggle js-menu-toggle py-5"><span class="icon-menu h3 text-black"></span></a></span>



              <?php include 'navigation_bar.php'?>


              <div class="top-social ml-auto">
                <a href="#"><span class="icon-facebook"></span></a>
                <a href="#"><span class="icon-twitter"></span></a>
                <a href="#"><span class="icon-linkedin"></span></a>
              </div>
          </div>
        </div>

       

      </header>

    

    <div class="ftco-blocks-cover-1">
      <div class="site-section-cover overlay" data-stellar-background-ratio="0.5" style="background-image: url('images/hero_1.jpg')">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-5 mt-5 pt-5">
              <h1 class="mb-3">Contact Us</h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta veritatis in tenetur doloremque, maiores doloribus officia iste. Dolores.</p>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="site-section bg-light" id="contact-section">
      <div class="container">
        <div class="row justify-content-center text-center">
        <div class="col-7 text-center mb-5">
          <h2>Get In Touch Using The Contact Form</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo assumenda, dolorum necessitatibus eius earum voluptates sed!</p>
        </div>
      </div>
        <div class="row">
          <div class="col-lg-8 mb-5" >
            <form action="#" method="post">
              <div class="form-group row">
                <div class="col-md-6 mb-4 mb-lg-0">
                  <input type="text" class="form-control" placeholder="First name">
                </div>
                <div class="col-md-6">
                  <input type="text" class="form-control" placeholder="First name">
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <input type="text" class="form-control" placeholder="Email address">
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <textarea name="" id="" class="form-control" placeholder="Write your message." cols="30" rows="10"></textarea>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-6 mr-auto">
                  <input type="submit" class="btn btn-block btn-primary text-white py-3 px-5" value="Send Message">
                </div>
              </div>
            </form>
          </div>
          <div class="col-lg-4 ml-auto">
            <div class="bg-white p-3 p-md-5">
              <h3 class="text-black mb-4">Contact Info</h3>
              <ul class="list-unstyled footer-link">
                <li class="d-block mb-3">
                  <span class="d-block text-black">Address:</span>
                  <span>34 Street Name, City Name Here, United States</span></li>
                <li class="d-block mb-3"><span class="d-block text-black">Phone:</span><span>+1 242 4942 290</span></li>
                <li class="d-block mb-3"><span class="d-block text-black">Email:</span><span>info@yourdomain.com</span></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

        <?php  include 'footer.php'?>

