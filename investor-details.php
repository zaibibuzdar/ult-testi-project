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


<section class="text-white investor_showCase_banner invDetail_showCase_banner" id="showCase_banner">
  <div class="container">
    <div class="row">
      <div class="col-lg-2 my-auto">
          <div class="user-profile">
            <img src="images/comm-1.png" alt="">
          </div>          
      </div>
      <div class="col-lg-6 my-auto pl-0">
          <h3 class="mb-2 section-heading">Leonardo R</h3>
          <p class="loc text-light"><i class="fa fa-map-marker"></i> London, United Kingdom </p>
          <div class="investor-action">
              <a class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Add to Shortlist"><i class="fa fa-star"></i></a>
              <a class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Endorse Investor"><i class="fa fa-thumbs-up"></i></a>    
          </div>
      </div>
      <div class="col-lg-4 my-auto text-right">
          <div class="contact-investor">
            <a href="contact-us.html" class="green-btn">Contact</a>
            <a href="#" class="white-btn">Nudge</a>
          </div>          
      </div>
    </div>
  </div>
</section>



<section class="text-dark grey-bg" style="padding: 2rem 0 6rem;">
  <div class="container">
    <div class="row">
      
      <div class="col-lg-8">
        <div class="invest-detail box-shad hover-effect">
          <div class="pane-heading">
            <h3>Background, Experties and Criteria</h3>
          </div>
          <div class="pane-body">
            <h4>About Me</h4>
            <p>Soy un inversor nuevo que cree en el desarrollo de nuevas tecnologías y con muchas ganas de invertir en conocimiento y medicina.</p>
            <h4>My Areas of Expertise</h4>
            <p>Tecnologia, Negocios</p>
            <h4>Criteria</h4>
            <table style="width:100%" class="table table-striped bg-table mt-2">
              <tr>
                <th>Investment Range</th>
                <td>£1 to £78,000</td>
              </tr>
              <tr>
                <th>Stages</th>
                <td>Pre-Startup/R&D, MVP/Finished Product, Achieving Sales, Breaking Even, Profitable, Other</td>
              </tr>
              <tr>
                <th>Industries</th>
                <td>Education & Training, Medical & Sciences, Transportation, Agriculture, Software, Media, Business Services, Finance, Manufacturing & Engineering, Energy & Natural Resources, Property , Hospitality, Restaurants & Bars, Products & Inventions, Retail, Sales & Marketing, Fashion & Beauty, Technology, Food & Beverage, Entertainment & Leisure, Personal Services</td>
              </tr>
              <tr>
                <th>Locations</th>
                <td>Argentina, Bolivia, Chile, Colombia, Ecuador, Paraguay, Peru, Uruguay, Venezuela, Fuera de América del Sur</td>
              </tr>
              <tr>
                <th>Countries</th>
                <td>Canada</td>
              </tr>
            </table>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="invest-detail hover-effect box-shad">
          <div class="pane-heading">
            <h3>My Profile</h3>
          </div>
          <div class="pane-body">
            <table style="width:100%" class="table profile-table">
              <tr>
                <th>Minimum Investment  </th>
                <td>£1</td>
              </tr>
              <tr>
                <th>Maximum</th>
                <td>£78,000</td>
              </tr>
              <tr>
                <th>Investor Type </th>
                <td>Angel Investor</td>
              </tr>
              <tr>
                <th>Registration Date </th>
                <td>24 September 2019</td>
              </tr>
              <tr>
                <th>Network</th>
                <td>South America</td>
              </tr>
            </table>
          </div>
        </div>


        <div class="invest-detail hover-effect box-shad mt-4">
          <div class="pane-heading">
            <h3>My Contact Details</h3>
          </div>
          <div class="pane-body">
            <table style="width:100%" class="contact-table">
              <tr>
                <th><i class="fa fa-phone"></i></th>
                <td> +00 193 (763)99</td>
              </tr>
              <tr>
                <th><i class="fa fa-envelope"></i></th>
                <td>info@sikazone.com.pk</td>
              </tr>
              <tr>
                <th><i class="fa fa-twitter"></i></th>
                <td>www.twitter.com/Sikazone</td>
              </tr>
              <tr>
                <th><i class="fa fa-facebook"></i></th>
                <td>www.facebook.com/Sikazone</td>
              </tr>
              <tr>
                <th><i class="fa fa-skype"></i></th>
                <td>idreesid2000</td>
              </tr>
            </table>
          </div>
        </div>
      </div>      
    
    </div>
  </div>
</section>


<section class="text-dark">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">Similar Investors</h2>
            <p>We help investors and entrepreneurs build lasting and profitable relationships to build better businesses and brighter futures.</p>
          </div>
        </div>
        <div class="row mt-4">
          <div class="col-lg-4">
            <div class="opportunities">
              <div class="comm-banner">
                <div class="row">
                  <div class="col-lg-5 mx-auto">
                    <img src="images/comm-1.png" alt="">
                  </div>
                  <div class="col-lg-7 my-auto mx-auto">
                    <h3>£1 - £50,000</h3>
                  </div>
                </div>
              </div>
              <div class="opp-detail text-center">
                <p class="loc"><i class="fa fa-map-marker"></i> London, United Kingdom </p>
                <p class="short-summary">I am a software engineer who runs a small consultancy but is now expanding into other sectors. My wife is fluent in English and Chinese and potentially able to ...</p>
                <div class="row">
                  <div class="col-lg-12 my-4 expertise">
                      <h5>Areas of Expertise</h5>
                      <p>Software and Web Development</p>
                  </div>
                  <div class="col-lg-12">
                    <a class="green-btn btn-block" href="#">Read More</a>
                  </div>
                </div>
                </div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="opportunities">
              <div class="comm-banner">
                <div class="row">
                  <div class="col-lg-5 mx-auto">
                    <img src="images/comm-2.jpg" alt="">
                  </div>
                  <div class="col-lg-7 my-auto mx-auto">
                    <h3>£10,000 - £50,000</h3>
                  </div>
                </div>
              </div>
              <div class="opp-detail text-center">
                <p class="loc"><i class="fa fa-map-marker"></i> London, United Kingdom</p>
                <p class="short-summary">I have worked in a leading global bank and gone through a cycle of building a financial services business which was acquired by a global technology major.</p>
                <div class="row">
                  <div class="col-lg-12 my-4 expertise">
                      <h5>Areas of Expertise</h5>
                      <p>Software and Web Development</p>
                  </div>
                  <div class="col-lg-12">
                    <a class="green-btn btn-block" href="#">Read More</a>
                  </div>
                </div>
                </div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="opportunities">
              <div class="comm-banner">
                <div class="row">
                  <div class="col-lg-5 mx-auto">
                    <img src="images/comm-3.jpg" alt="">
                  </div>
                  <div class="col-lg-7 my-auto mx-auto">
                    <h3>£1,000 - £50,000</h3>
                  </div>
                </div>
              </div>
              <div class="opp-detail text-center">
                <p class="loc"><i class="fa fa-map-marker"></i> Southampton, United Kingdom </p>
                <p class="short-summary">Finance expert with over 30 years experience in financial industry, from a financial advisor to the sales and marketing development, in retail, private and corp...</p>
                <div class="row">
                  <div class="col-lg-12 my-4 expertise">
                      <h5>Areas of Expertise</h5>
                      <p>Software and Web Development</p>
                  </div>
                  <div class="col-lg-12">
                    <a class="green-btn btn-block" href="#">Read More</a>
                  </div>
                </div>
                </div>
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