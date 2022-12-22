
<?php
session_start();
include ('authentication.php');
?>

<!DOCTYPE html>
<!--<![endif]-->
<head>
<?php
include('includes/css.php');
?>
</head>
<body>

<?php
include('includes/header.php'); 
?>



<section class="bg-dark text-white con_showCase_banner" id="showCase_banner">
  <div class="container text-center">
    <div class="row">
      <div class="col-lg-9 mx-auto">
          <h1 class="mb-2 section-heading">Contact Us</h1>
          <p class="text-light">Do you have any questions or concerns? Contact us and do not forget to check out our knowledge base.</p>
      </div>
    </div>
  </div>
</section>


<section>
  <div class="container">
    <div class="row">
      <div class="col-lg-6 my-auto">
          <h2 class="mb-4 section-heading ">Get in touch with us!</h2>
          <form class="form-signin">
            <div class="row">
              <div class="col-lg-6 px-0">
                <div class="form-label-group input-group mb-2">
                    <input type="email" class="form-control" placeholder="First Name">
                  </div>
              </div>
              <div class="col-lg-6 pr-0">
                <div class="form-label-group input-group mb-2">
                    <input type="email" class="form-control" placeholder="Last Name">
                  </div>
              </div>
            </div>
            <div class="form-label-group input-group mb-2">
              <input type="email" class="form-control" placeholder="Email">
            </div>
            <div class="form-label-group input-group mb-2">
              <input type="text" class="form-control" placeholder="Subject">
            </div>
            <div class="form-label-group input-group mb-2">
              <textarea class="form-control" placeholder="Message" rows="7"></textarea>
            </div>    
            <button class="btn green-btn btn-block btn-form" type="submit">Send Message</button>
          </form>
      </div>      
      <div class="col-lg-6">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3313.275896420081!2d151.21310801492223!3d-33.85677992586583!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b12ae665e892fdd%3A0x3133f8d75a1ac251!2sSydney+Opera+House!5e0!3m2!1sen!2s!4v1542451918042" width="600" height="450" frameborder="0" style="border:2px solid #222;" allowfullscreen=""></iframe>
      </div>
    </div>
  </div>    
</section>

<section class="grey-bg" id="contact">
  <div class="container">
    <div class="row">
      <div class="col-lg-7 mx-auto text-center">
        <h2 class="section-heading mb-2">Connect with us</h2>
        <p class="mb-5">Ready to start your next project with us? That's great! Give us a call or send us an email and we will get back to you as soon as possible!</p>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-12  text-center ">
          <div class="get_touch box-shad">
              <i class="fa fa-phone fa-3x mb-3 sr-contact-1 color-red"></i>
              <p>+00 193 (763)99</p>
            <h6>We will respond on any day and time</h6>
          </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12  text-center ">
          <div class="get_touch box-shad">
              <i class="fa fa-envelope fa-3x mb-3 sr-contact-2 color-red"></i>
              <p>
                <a href="#">info@sikazone.com</a>
              </p>
              <h6>We will need up to 2 business days</h6><h6>
          </h6></div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12  text-center ">
          <div class="get_touch box-shad">
              <i class="fa fa-skype fa-3x mb-3 sr-contact-2 color-red"></i>
              <p>
                <a href="#">SikaZone</a>
              </p>
              <h6>Support only in chat</h6>
          </div>
      </div>
    </div>
  </div>
</section>

<?php
include('includes/footer.php');
include('includes/js.php');
?>
</body>
</html>