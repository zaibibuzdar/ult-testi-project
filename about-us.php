
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
<section class="bg-dark text-white about_showCase_banner" id="showCase_banner">
  <div class="container text-center">
    <div class="row">
      <div class="col-lg-9 mx-auto">
          <h1 class="mb-2 section-heading">About us</h1>
          <p class="text-light">How two childhood friends built a network of 1,245,430 (and counting) entrepreneurs and investors, and helped create the startup ecosystem.</p>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="container">
    <div class="row">
      <div class="col-lg-6 my-auto">
          <h3 class="section-heading mb-3">about Sikazone</h3>
          <p><strong>The story so far…</strong></p>
          <p>Back in 2004, lots of people were trying to start businesses – many with brilliant ideas. But they were struggling to find the seed funding necessary to grow; and the best investors to guide their growth.</p>
          <p><strong>This got us thinking...</strong></p>
          <p>The problem was clearly undermining the startup scene: great ideas were not getting off the ground because it was hard to find investors. We thought we could solve this. So, we set out to build an online platform connecting startups with a global network of angel investors.</p>
          <a class="green-btn btn-form mt-3" href="contact-us.html">Contact us</a>
      </div>      
      
      <div class="col-lg-6 my-auto">
        <div class="half-col-img text-right">
          <img class="hover-effect" src="images/about-us.jpg" alt="">
        </div>
      </div>
    </div>
  </div>    
</section>

<section class="grey-bg">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 my-auto">
        <div class="half-col-img text-left">
          <img class="hover-effect" src="images/mission.jpg" alt="">
        </div>
      </div>
      <div class="col-lg-6 abou my-auto">
          <h3 class="section-heading mb-3">Our Mission</h3>          
          <p class="mt-3">Our mission remains to help as many entrepreneurs as possible connect with great investors and realise their ambitions.</p>
          <p>We’ve tried to never lose touch with our entrepreneurial roots. So, we are always looking for the next problem to solve.</p>
          <p class="mt-3"><strong>Stay ambitious</strong></p>
          <ul>
            <li>James Badgett & Mike Lebus</li>
            <li><i>Founders, Sikazone</i></li>
          </ul>
         <a class="green-btn btn-form mt-4" href="contact-us.html">Contact us</a>
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