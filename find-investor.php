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

<section class="bg-dark text-white investor_showCase_banner" id="showCase_banner">
  <div class="container text-center">
    <div class="row">
      <div class="col-lg-9 mx-auto">
          <h1 class="mb-2 section-heading">Find Investors in Worldwide</h1>
          <p class="text-light">How do I connect with investors? To meet investors, you just need to add a pitch using our easy-to-follow template. It's really simple and 218,906 investors are waiting to view your idea.</p>
      </div>
    </div>
  </div>
</section>


<section class="text-dark">
      <div class="container">
        <div class="row mb-5">
          <div class="col-lg-12 mx-auto">
            <div class="invetor-search box-shad">
              <form class="w-100">
                  <div class="form-group col-lg-9 float-left mb-0">
                    <input  type="text" placeholder="Enter Keyword..." class="form-control">
                  </div>
                  <div class="form-group col-lg-3 float-right pl-0 mb-0">
                    <button type="submit" class="green-btn btn-form btn-block border-0">Search</button>
                  </div>
              </form>
            </div>
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