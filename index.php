


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
<?php
// session_start();
if(isset($_SESSION['auth_status'])){
    ?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong><?php echo $_SESSION['auth_status']; ?></strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php
    unset($_SESSION['auth_status']);
}
?>
   <?php
   include('message.php')
?>
<section class="main-cont text-light">
  <div class="container">
        <div class="row my-auto banner">
          <div class="col-lg-9 text-center mx-auto">
            <h1 class="section-heading">Connecting Entrepreneurs & Investors</h1>
            <p class="text-light">Where great businesses and great people meet. We bring together businesses looking for investment and investors with the capital, contacts and knowledge to help them succeed.</p>
            <h3>Looking to <span>Fundraise</span> or <span>Invest</span></h3>
            <a class="white-btn" href="#">Get Started</a>
          </div>
        </div>
      </div>
</section>

<section class="text-dark">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">Our Industries</h2>
            <p>We connect investors with startups and businesses from all sectors to ensure the relationship is valuable to both parties.</p>
          </div>
        </div>
        <div class="row mt-5">
          <div class="col-lg-3 text-center my-auto">
            <a href="#">
                <div class="radius_box mx-auto">
                  <img src="images/real-estate.png">
                  <p>Property</p>
                </div>
            </a>
          </div>
          <div class="col-lg-3 text-center my-auto">
            <a href="#">
              <div class="radius_box mx-auto curve_radius">
                <img src="images/Medical.png">
                <p>Medical & Science</p>
              </div>
            </a>
          </div>
          <div class="col-lg-3 text-center my-auto">
            <a href="#">
              <div class="radius_box mx-auto">
                <img src="images/salon-and-spa.png">
                <p>Fashion & Beauty</p>
              </div>
            </a>
          </div>
          <div class="col-lg-3 text-center my-auto">
            <a href="#">
              <div class="radius_box mx-auto">
                <img src="images/Hotels.png">
                <p>Restaurants & Bars </p>
              </div>
            </a>
          </div>
        </div>
        <div class="row mt-4">
          <div class="col-lg-3 text-center my-auto">
            <a href="#">
              <div class="radius_box mx-auto">
                <img src="images/software.png">
                <p>Software</p>
              </div>
            </a>
          </div>
          <div class="col-lg-3 text-center my-auto">
            <a href="#">
              <div class="radius_box mx-auto curve_radius">
                <img src="images/Restaurants.png">
                <p>Food & Beverage </p>
              </div>
            </a>
          </div>
          <div class="col-lg-3 text-center my-auto">
            <a href="#">
              <div class="radius_box mx-auto">
                <img src="images/tech.png">
                <p>Technology</p>
              </div>
            </a>
          </div>
          <div class="col-lg-3 text-center my-auto">
            <a href="#">
              <div class="radius_box mx-auto">
                <img src="images/transport.png">
                <p>Transportation</p>
              </div>
            </a>
          </div>
        </div>
        <div class="row">
            <div class="col-lg-12 text-center mt-5">
                <a class="green-btn btn-large" href="#">View All Industries</a>
            </div>
          </div>
      </div>
</section>

<section class="text-dark grey-bg" id="opp-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-light">Looking for investment opportunities?</h2>
            <p class="text-light">Browse our latest exciting startup pitches and connect with entrepreneurs to discuss further.</p>
          </div>
        </div>

        <div class="row mt-5">
          <div class="col-lg-4">
            <div class="opportunities" style="box-shadow: none;">
              <div class="opp-banner">
                <img class="ban-img" src="images/o-1.jpg" alt="" />
                 <a href="#" class="proposal-logo"><img src="images/oc1.png" alt="" /></a>
              </div>
              <div class="opp-detail">
                <h3><a href="#">Worktrials.co.uk</a></h3>
                <p class="loc"><i class="fa fa-map-marker"></i> London, United Kingdom </p>
                <p class="short-summary">Clothing that cannot be stained. Devacci is a wearable tech brand mixing fashion and technology together... </p>
                <div class="row">
                  <div class="col-lg-6 pl-0">
                    <div class="opp-rates">
                      <h4>£ 150,000</h4>
                      <p>Target</p>
                    </div>
                  </div>
                  <div class="col-lg-6 pl-0">
                    <div class="opp-rates">
                      <h4>£ 100</h4>
                      <p>Min per Investor</p>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <a class="green-btn btn-block" href="#">Find Out More</a>
                  </div>
                </div>
                </div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="opportunities" style="box-shadow: none;">
              <div class="opp-banner">
                <img class="ban-img" src="images/o-2.jpg" alt="" />
                <a href="#" class="proposal-logo"><img src="images/oc2.png" alt="" /></a>
              </div>
              <div class="opp-detail">
                <h3><a href="#">Try EV</a></h3>
                <p class="loc"><i class="fa fa-map-marker"></i> London, United Kingdom </p>
                <p class="short-summary">The global Electric Vehicle (EV) market will grow 10-fold by 2030. Try EV aims to become the biggest one-stop...</p>
                <div class="row">
                  <div class="col-lg-6 pl-0">
                    <div class="opp-rates">
                      <h4>£ 150,000</h4>
                      <p>Target</p>
                    </div>
                  </div>
                  <div class="col-lg-6 pl-0">
                    <div class="opp-rates">
                      <h4>£ 100</h4>
                      <p>Min per Investor</p>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <a class="green-btn btn-block" href="#">Find Out More</a>
                  </div>
                </div>
                </div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="opportunities" style="box-shadow: none;">
              <div class="opp-banner">
                <img class="ban-img" src="images/o-3.jpg" alt="" />
                <a href="#" class="proposal-logo"><img src="images/oc3.png" alt="" /></a>
              </div>
              <div class="opp-detail">
                <h3><a href="#">LUDORIUM 'psychtech&...</a></h3>
                <p class="loc"><i class="fa fa-map-marker"></i> London, United Kingdom </p>
                <p class="short-summary">Ludorium™ (psychtech), is a next generation, AI driven mobile app, providing customer choice and analytics...</p>
                <div class="row">
                  <div class="col-lg-6 pl-0">
                    <div class="opp-rates">
                      <h4>£ 150,000</h4>
                      <p>Target</p>
                    </div>
                  </div>
                  <div class="col-lg-6 pl-0">
                    <div class="opp-rates">
                      <h4>£ 100</h4>
                      <p>Min per Investor</p>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <a class="green-btn btn-block" href="#">Find Out More</a>
                  </div>
                </div>
                </div>
            </div>
          </div>


        </div>
      </div>
</section>

<section class="text-dark" >
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">Join community of entrepreneurs & investors</h2>
            <p>We help investors and entrepreneurs build lasting and profitable relationships to build better businesses and brighter futures.</p>
          </div>
        </div>
        <div class="row mt-5">
          <div class="col-lg-4">
            <div class="opportunities">
              <div class="comm-banner">
                <div class="row">
                  <div class="col-lg-5 mx-auto">
                    <img src="images/comm-1.png" alt="" />
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
                    <img src="images/comm-2.jpg" alt="" />
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
                    <img src="images/comm-3.jpg" alt="" />
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


<section class="text-dark" id="testmonials_section">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">What our customers say</h2>
            <p>Over the past 15 years we’ve raised funding for thousands of businesses who have been kind enough to recognise our support.</p>
          </div>
        </div>
      </div>
      <div class="container">
        <div id="demo" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="row">
                      <div class="col-lg-9 testmonial mt-5 mx-auto text-center">
                          <div class="customers-avatar">
                              <img src="images/cus-1.png" alt="" />
                          </div>
                          <p class="mb-0">Raising capital is arguably one of the most difficult tasks an entrepreneur faces especially at the Proof of Concept phase. Angel Investment Network worked with my team to ensure that our offering was optimally positioned and as a result we closed $2MM in funding a month later. We are now raising a much larger round as we are no longer proving the concept and we will be using this platform as a key component of our capital raise strategy. "</p>
                          <h5>William Nobrega @ Kiseguro</h5>
                        </div>
                  </div>
              </div>
              <div class="carousel-item">
                <div class="row">
                    <div class="col-lg-9 testmonial mt-5 mx-auto text-center">
                        <div class="customers-avatar">
                            <img src="images/cus-2.png" alt="" />
                        </div>
                        <p class="mb-0">"We got an influx of interest from AIN investors which has resulted in substantial investment from investors sourced by AIN, at a very cheap share price. The offer in our AIN proposal was intended as a special offer for existing shareholders, and I posted it on AIN largely as a hurry-up for shareholders. As it has transpired, nearly half was grabbed in quick time from new AIN investors, more than half of whom were happy to invest without meeting us personally; crowd-funding on $100,000 steroids maybe."</p>
                        <h5>Mark Bradley @ Semantic Software</h5>
                    </div>
                </div>
              </div>

              <div class="carousel-item">
                <div class="row">
                  <div class="col-lg-9 testmonial mt-5 mx-auto text-center">
                        <div class="customers-avatar">
                            <img src="images/cus-3.png" alt="" />
                        </div>
                        <p class="mb-0">"Angel Investment Network has been great for our fund raising exercise. So far we've raised £140,000 of our £350,000 target."</p>
                        <h5>Paul Hawtin @ Cayman Atlantic</h5>
                    </div>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
              <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
              <span class="carousel-control-next-icon"></span>
            </a>
        </div>
      </div>
</section>

<section class="text-dark grey-bg">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">Featured in</h2>
            <p>See our trusted clients who believe in us.</p>
          </div>
        </div>
        <div class="row mt-5" style="max-width:73%; margin: 0 auto;">
          <div class="col-lg-3 my-auto clients">
            <img class="w-100" src="images/c1.png" alt="" />
          </div>
          <div class="col-lg-3 my-auto clients">
            <img class="w-100" src="images/c2.png" alt="" />
          </div>
          <div class="col-lg-3 my-auto clients">
            <img class="w-100" src="images/c3.png" alt="" />
          </div>
          <div class="col-lg-3 my-auto clients">
            <img class="w-100" src="images/c4.png" alt="" />
          </div>
          <div class="col-lg-3 my-auto clients">
            <img class="w-100" src="images/c5.png" alt="" />
          </div>
          <div class="col-lg-3 my-auto clients">
            <img class="w-100" src="images/c6.png" alt="" />
          </div>
          <div class="col-lg-3 my-auto clients">
            <img class="w-100" src="images/c7.png" alt="" />
          </div>
          <div class="col-lg-3 my-auto clients">
            <img class="w-100" src="images/c8.png" alt="" />
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