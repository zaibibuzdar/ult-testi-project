
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

      <div class="col-lg-6 my-auto mx-auto">
          <div class="row">
            <div class="col-lg-4">
                <div class="short_summry">
                  <h3>10</h3>
                  <p>Interested</p>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="short_summry">
                  <h3>8</h3>
                  <p>Shortlisted</p>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="short_summry">
                  <h3>4</h3>
                  <p>Nudged</p>
                </div>
              </div>
          </div>          
      </div>
    </div>
  </div>
</section>

<section class="fixed_bar">

    <div class="fixed_menu">
      <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" data-toggle="tab" href="#intrested" role="tab" aria-controls="intrested" aria-selected="false">Intrested</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#shortlisted" role="tab" aria-controls="shortlisted" aria-selected="false">Shortlisted</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#nudged" role="tab" aria-controls="nudged" aria-selected="false">Nudged</a>
        </li>
        
      </ul>
    </div>
</section>

<section class="text-dark grey-bg" style="padding-top: 2rem;">
  <div class="container">
    <div class="row">
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="intrested" role="tabpanel">
            <div class="row">
              <div class="col-lg-12 px-0">
                <div class="well text-center">
                   <p>You don't have any investors interested yet.</p>
                   <p>Make sure your pitch is well filled in.</p>
                   <p class="mb-3">Then search the investors and get nudging!</p>
                   <a href="#">
                        <div class="blue-cir ">
                            <img src="images/add.png" alt="" />
                        </div>
                    </a>
                    
                  </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="shortlisted" role="tabpanel">
              
           <div class="row mt-3">
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
                      </div>
                      <div class="row">
                          <div class="col-lg-6  my-auto find_out">
                            <a class="green-btn btn-block" href="#">More Details</a>
                          </div>
                          <div class="col-lg-6 my-auto text-right pr-0">
                              <div class="intrested_action">
                                <a href="#" class="btn btn-secondary">Nudge</a>    
                                <a href="#" class="btn btn-secondary"><i class="fa fa-star"></i></a>
                            </div>
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
                      </div>
                      <div class="row">
                          <div class="col-lg-6  my-auto find_out">
                            <a class="green-btn btn-block" href="#">More Details</a>
                          </div>
                          <div class="col-lg-6 my-auto text-right pr-0">
                              <div class="intrested_action">
                                <a href="#" class="btn btn-secondary">Nudge</a>    
                                <a href="#" class="btn btn-secondary"><i class="fa fa-star"></i></a>
                            </div>
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
                      </div>
                      <div class="row">
                          <div class="col-lg-6  my-auto find_out">
                            <a class="green-btn btn-block" href="#">More Details</a>
                          </div>
                          <div class="col-lg-6 my-auto text-right pr-0">
                              <div class="intrested_action">
                                <a href="#" class="btn btn-secondary">Nudge</a>    
                                <a href="#" class="btn btn-secondary"><i class="fa fa-star"></i></a>
                            </div>
                          </div>
                      </div>
                      
                    </div>
                  </div>
                </div>
              </div>

          </div>

          <div class="tab-pane fade" id="nudged" role="tabpanel">
            <div class="row">
              <div class="col-lg-12 px-0">
                <div class="well text-center">
                   <p>You haven't nudged any investors yet.</p>
                   <p class="mb-3">Click the button below to search the investors.</p>
                   <a href="#">
                        <div class="blue-cir ">
                            <img src="images/add.png" alt="" />
                        </div>
                    </a>
                    
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