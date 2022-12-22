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

      <div class="col-lg-6">
        <div class="row">
          <div class="col-lg-4 my-auto">
              <div class="user-profile">
                <img src="images/comm-1.png" alt="">
              </div>          
          </div>
          <div class="col-lg-8 my-auto pl-0">
              <h3 class="mb-2 section-heading">Kwadwo <span> (£ 200)</span></h3>
              <p class="loc text-light">Welcome to your investment overview</p>
              
              <a href="#" class="green-btn">Edit Profile</a>
          </div>
        </div>
      </div>
      
      
      <div class="col-lg-6 my-auto">
          <div class="row">
              <div class="col-lg-4">
                <div class="short_summry">
                  <h3>4</h3>
                  <p>Invested</p>
                </div>
              </div>
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

          </div>          
      </div>
    </div>
  </div>
</section>

<section class="fixed_bar">

    <div class="fixed_menu">
      <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#invested" role="tab" aria-controls="invested" aria-selected="false">Invested</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" data-toggle="tab" href="#intrested" role="tab" aria-controls="Interested" aria-selected="false">Interested</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#shortlisted" role="tab" aria-controls="shortlisted" aria-selected="false">Shortlisted</a>
        </li>
      </ul>
    </div>
</section>

<section class="text-dark grey-bg" style="padding-top: 2rem;">
  <div class="container">
    <div class="row">
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade" id="invested" role="tabpanel">
            <div class="row  mt-3">
              <div class="col-lg-12 px-0">
                <div class="well text-center">
                    <a href="#">
                        <div class="blue-cir">
                            <img src="images/add.png" alt="" />
                        </div>
                    </a>

                   <p class="mt-3">You haven't invested in any pitches yet.</p>
                   <p>Click the button below to check out our latest pitches.</p>
                    
                  </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade show active" id="intrested" role="tabpanel">
              
            <div class="row mt-3" id="similar_projects">

                <div class="col-lg-4">
                  <div class="opportunities">
                    <div class="opp-banner">
                      <img class="ban-img" src="images/echo-coin.jpeg" alt="">
                    </div>
                    <div class="opp-detail">
                      <h3><a href="#">The Eco Coin</a></h3>
                      <p class="loc"><i class="fa fa-map-marker"></i> North Holland, Netherlands </p>
                      <p class="status-info"><i></i>The entrepreneur has been notified of your interest. Please include as much information in your profile as possible</p>
                      <div class="row">
                        <div class="col-lg-12 p-0">
                          <select class="form-control my-3">
                            <option>New</option>
                            <option>Q&A</option>
                            <option>Mesaging</option>
                            <option>In Duscussions</option>
                            <option>Document Requested</option>
                            <option>Phone Call</option>
                            <option>Meeting</option>
                            <option>Due Diligence</option>
                            <option>Offer Made</option>
                            <option>Contract</option>
                            <option>Invested</option>
                            <option>No Longer Intrested</option>
                          </select>
                        </div>
                        
                        <div class="col-lg-7  my-auto find_out">
                          <a class="green-btn btn-block" href="#">Find Out More</a>
                        </div>
                        <div class="col-lg-5 my-auto text-right pr-0">
                            <div class="intrested_action">
                              <a href="#" class="btn btn-secondary"><i class="fa fa-envelope"></i></a>
                              <a href="#" class="btn btn-secondary"><i class="fa fa-trash"></i></a>    
                          </div>
                        </div>
                        
                      </div>
                      </div>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="opportunities">
                    <div class="opp-banner">
                      <img class="ban-img" src="images/alternative-getty.jpg" alt="">
                    </div>
                    <div class="opp-detail">
                      <h3><a href="#">Wroxall Abbey</a></h3>
                      <p class="loc"><i class="fa fa-map-marker"></i> North Holland, Netherlands</p>
                      <p class="status-info"><i></i>The entrepreneur has been notified of your interest. Please include as much information in your profile as possible</p>
                      <div class="row">
                        <div class="col-lg-12 p-0">
                          <select class="form-control my-3">
                            <option>New</option>
                            <option>Q&A</option>
                            <option>Mesaging</option>
                            <option>In Duscussions</option>
                            <option>Document Requested</option>
                            <option>Phone Call</option>
                            <option>Meeting</option>
                            <option>Due Diligence</option>
                            <option>Offer Made</option>
                            <option>Contract</option>
                            <option>Invested</option>
                            <option>No Longer Intrested</option>
                          </select>
                        </div>
                        
                        <div class="col-lg-7  my-auto find_out">
                          <a class="green-btn btn-block" href="#">Find Out More</a>
                        </div>
                        <div class="col-lg-5 my-auto text-right pr-0">
                            <div class="intrested_action">
                              <a href="#" class="btn btn-secondary"><i class="fa fa-envelope"></i></a>
                              <a href="#" class="btn btn-secondary"><i class="fa fa-trash"></i></a>    
                          </div>
                        </div>
                        
                      </div>
                      </div>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="opportunities">
                    <div class="opp-banner">
                      <img class="ban-img" src="images/legacy-creation-baner.jpg" alt="">
                    </div>
                    <div class="opp-detail">
                      <h3><a href="#">Wealth &amp; Legacy Creation</a></h3>
                      <p class="loc"><i class="fa fa-map-marker"></i> New South Wales, Australia </p>
                     <p class="status-info"><i></i>The entrepreneur has been notified of your interest. Please include as much information in your profile as possible</p>
                      <div class="row">
                        <div class="col-lg-12 p-0">
                          <select class="form-control my-3">
                            <option>New</option>
                            <option>Q&A</option>
                            <option>Mesaging</option>
                            <option>In Duscussions</option>
                            <option>Document Requested</option>
                            <option>Phone Call</option>
                            <option>Meeting</option>
                            <option>Due Diligence</option>
                            <option>Offer Made</option>
                            <option>Contract</option>
                            <option>Invested</option>
                            <option>No Longer Intrested</option>
                          </select>
                        </div>
                        
                        <div class="col-lg-7  my-auto find_out">
                          <a class="green-btn btn-block" href="#">Find Out More</a>
                        </div>
                        <div class="col-lg-5 my-auto text-right pr-0">
                            <div class="intrested_action">
                              <a href="#" class="btn btn-secondary"><i class="fa fa-envelope"></i></a>
                              <a href="#" class="btn btn-secondary"><i class="fa fa-trash"></i></a>    
                          </div>
                        </div>
                        
                      </div>
                      </div>
                  </div>
                </div>
            </div>

          </div>

          <div class="tab-pane fade" id="shortlisted" role="tabpanel" aria-labelledby="contact-tab">
            <div class="row mt-3" id="similar_projects">
                <div class="col-lg-4">
                  <div class="opportunities">
                    <div class="opp-banner">
                      <img class="ban-img" src="images/alternative-getty.jpg" alt="">
                    </div>
                    <div class="opp-detail">
                      <h3><a href="#">Alternative Investments</a></h3>
                      <p class="loc"><i class="fa fa-map-marker"></i> North Holland, Netherlands</p>
                      <p class="short-summary">Oud oil is a very precious and rare commodity, it's used in luxury fragrances and Chinese medicine and can cost up to $ 50,000 a litre. Just like wine or whiskey, it increases in value as it matures and therefore is a great investment opportunity!</p>
                      <div class="row mb-3">
                        <div class="col-lg-6 pl-0">
                          <div class="opp-rates">
                            <h4>£ 70,000</h4>
                            <p>Target</p>
                          </div>
                        </div>
                        <div class="col-lg-6 pl-0 investor_info">
                          <div class="opp-rates">
                            <h4>£ 870</h4>
                            <p>Min per Investor</p>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                          <div class="col-lg-6  my-auto find_out">
                            <a class="green-btn btn-block" href="#">Find Out More</a>
                          </div>
                          <div class="col-lg-6 my-auto text-right pr-0">
                              <div class="intrested_action">
                                <a href="#" class="btn btn-secondary"><i class="fa fa-trash"></i></a>
                                <a href="#" class="btn btn-secondary">intrested</a>    
                            </div>
                          </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-lg-4">
                  <div class="opportunities">
                    <div class="opp-banner">
                      <img class="ban-img" src="images/echo-coin.jpeg" alt="">
                    </div>
                    <div class="opp-detail">
                      <h3><a href="#">The Eco Coin</a></h3>
                      <p class="loc"><i class="fa fa-map-marker"></i> North Holland, Netherlands </p>
                      <p class="short-summary">ECO coins are earned through sustainable actions. Eating meat-free meals, switching to a green energy provider and riding a bike to work can earn you ECOs which you can spend in our marketplace to buy sustainable services and circular products.</p>
                      <div class="row mb-3">
                        <div class="col-lg-6 pl-0">
                          <div class="opp-rates">
                            <h4>£ 210,000</h4>
                            <p>Target</p>
                          </div>
                        </div>
                        <div class="col-lg-6 pl-0 investor_info">
                          <div class="opp-rates">
                            <h4>£ 8,700</h4>
                            <p>Min per Investor</p>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                          <div class="col-lg-6  my-auto find_out">
                            <a class="green-btn btn-block" href="#">Find Out More</a>
                          </div>
                          <div class="col-lg-6 my-auto text-right pr-0">
                              <div class="intrested_action">
                                <a href="#" class="btn btn-secondary"><i class="fa fa-trash"></i></a>
                                <a href="#" class="btn btn-secondary">intrested</a>    
                            </div>
                          </div>
                      </div>
                      
                    </div>
                  </div>
                </div>

                <div class="col-lg-4">
                  <div class="opportunities">
                    <div class="opp-banner">
                      <img class="ban-img" src="images/legacy-creation-baner.jpg" alt="">
                    </div>
                    <div class="opp-detail">
                      <h3><a href="#">Wealth &amp; Legacy Creation</a></h3>
                      <p class="loc"><i class="fa fa-map-marker"></i> New South Wales, Australia </p>
                      <p class="short-summary">Versailles Capital; Helping property investors build wealth &amp; legacy; Company registered in August 2018; 3 properties available for investment; Cross team experience of 120 years in Property &amp; Finance.</p>
                      <div class="row mb-3">
                        <div class="col-lg-6 pl-0">
                          <div class="opp-rates">
                            <h4>£ 2,200,000</h4>
                            <p>Target</p>
                          </div>
                        </div>
                        <div class="col-lg-6 pl-0 investor_info">
                          <div class="opp-rates">
                            <h4>£ 27,000</h4>
                            <p>Min per Investor</p>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                          <div class="col-lg-6  my-auto find_out">
                            <a class="green-btn btn-block" href="#">Find Out More</a>
                          </div>
                          <div class="col-lg-6 my-auto text-right pr-0">
                              <div class="intrested_action">
                                <a href="#" class="btn btn-secondary"><i class="fa fa-trash"></i></a>
                                <a href="#" class="btn btn-secondary">intrested</a>    
                            </div>
                          </div>
                      </div>              
                  </div>
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