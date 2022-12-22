
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
          <h3 class="mb-2 section-heading">9,7% guaranteed ROI</h3>
          <p class="loc text-light"><i class="fa fa-map-marker"></i> London, United Kingdom </p>
          
      </div>
      <div class="col-lg-4 my-auto text-right">
          <div class="contact-investor">
            <a href="#" class="green-btn" data-toggle="modal" data-target="#intrestModal">I'm Intrested</a>
            <a href="#" class="white-btn" data-toggle="modal" data-target="#intrestModal">Shortlist</a>
          </div>          
      </div>
    </div>
  </div>
</section>

<section class="fixed_bar">
  <div class="container">
    <div class="fixed_menu">
      <ul>
        <li><a href="#">Overview</a></li>
        <li><a href="#">Pitch Details</a></li>
        <li><a href="#">The Team</a></li>
        <li><a href="#">Documents</a></li>
        <li><a href="#">Questions & Answers</a></li>
      </ul>
    </div>
  </div>
</section>


<section class="text-dark grey-bg" style="padding: 2rem 0 6rem;">
  <div class="container">
    <div class="row">
      
      <div class="col-lg-8">
        <div class="invest-detail box-shad hover-effect">
          <div class="pane-heading">
            <h3>Short Summary</h3>
          </div>
          <div class="pane-body">
            <p>Are you looking for guaranteed 9,7% interest? As an investor, I'm looking for people who are willing to invest €5000 as a personal loan. I'll return the loan in 3 ys with a guaranteed 9,7% interest in return.</p>
            <h4>Highlights</h4>
            <ul>
              <li>9.7 % interest over 12 months</li>
              <li>Guarateed ROI</li>
              <li>Small investment needed</li>
              <li>Have part of your money back in 12 months to lower risks</li>
            </ul>

            <div class="alert alert-info">     
              <p> <strong>Please note:</strong> <span class="editableLabel" labelid="proposal_view:note_content">The content of this promotion has not been approved by an authorised person within the meaning of the Financial Services and Markets Act 2000. Reliance on this promotion for the purpose of engaging in any investment activity may expose an individual to a significant risk of losing all of the property or other assets invested. Investors should carry out their own due diligence and take professional advice where necessary.</span> </p>
            </div>
            <p class="m-0">To view the full pitch you must be a registered investor. To upgrade to an investor account, please email <a href="mailto:info@sikazone.com">info@Info@sikazone.com</a></p>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="invest-detail hover-effect box-shad">
          <div class="pane-heading">
            <h3>Overview</h3>
          </div>
          <div class="pane-body">
            <table style="width:100%" class="table profile-table">
              <tbody><tr>
                <th>Target</th>
                <td>£8,700</td>
              </tr>
              <tr>
                <th>Minimum</th>
                <td>£2,100</td>
              </tr>
              <tr>
                <th>Investment Raised</th>
                <td>N/A</td>
              </tr>
              <tr>
                <th>Previous Rounds</th>
                <td>2,500£</td>
              </tr>
              <tr>
                <th>Stage</th>
                <td>Profitable</td>
              </tr>
              <tr>
                <th>Investor Role</th>
                <td>Silent</td>
              </tr>
            </tbody></table>
          </div>
        </div>


        
      </div>      
    
    </div>
    
  </div>
</section>


<section class="text-dark grey-bg" id="opp-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-light">Similar Projects</h2>
            <p class="text-light">Browse our latest exciting startup pitches and connect with entrepreneurs to discuss further.</p>
          </div>
        </div>

        <div class="row mt-5" id="similar_projects">
          <div class="col-lg-4">
            <div class="opportunities" style="box-shadow: none;">
              <div class="opp-banner">
                <img class="ban-img" src="images/alternative-getty.jpg" alt="">
              </div>
              <div class="opp-detail">
                <h3><a href="#">Alternative Investments</a></h3>
                <p class="loc"><i class="fa fa-map-marker"></i> North Holland, Netherlands</p>
                <p class="short-summary">Oud oil is a very precious and rare commodity, it's used in luxury fragrances and Chinese medicine and can cost up to $ 50,000 a litre. Just like wine or whiskey, it increases in value as it matures and therefore is a great investment opportunity!</p>
                <div class="row">
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
                  <div class="col-lg-12 find_out">
                    <a class="green-btn btn-block" href="#">Find Out More</a>
                  </div>
                </div>
                </div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="opportunities" style="box-shadow: none;">
              <div class="opp-banner">
                <img class="ban-img" src="images/echo-coin.jpeg" alt="">
              </div>
              <div class="opp-detail">
                <h3><a href="#">The Eco Coin</a></h3>
                <p class="loc"><i class="fa fa-map-marker"></i> North Holland, Netherlands </p>
                <p class="short-summary">ECO coins are earned through sustainable actions. Eating meat-free meals, switching to a green energy provider and riding a bike to work can earn you ECOs which you can spend in our marketplace to buy sustainable services and circular products.</p>
                <div class="row">
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
                  <div class="col-lg-12 find_out">
                    <a class="green-btn btn-block" href="#">Find Out More</a>
                  </div>
                </div>
                </div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="opportunities" style="box-shadow: none;">
              <div class="opp-banner">
                <img class="ban-img" src="images/legacy-creation-baner.jpg" alt="">
              </div>
              <div class="opp-detail">
                <h3><a href="#">Wealth & Legacy Creation</a></h3>
                <p class="loc"><i class="fa fa-map-marker"></i> New South Wales, Australia </p>
                <p class="short-summary">Versailles Capital; Helping property investors build wealth & legacy; Company registered in August 2018; 3 properties available for investment; Cross team experience of 120 years in Property & Finance; 1.4m+ shares taken up; Already raised $1m+.</p>
                <div class="row">
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
                  <div class="col-lg-12 find_out">
                    <a class="green-btn btn-block" href="#">Find Out More</a>
                  </div>
                </div>
                </div>
            </div>
          </div>


        </div>
        <div class="row">
            <div class="col-lg-12 text-center mt-5">
                    <a href="#" class="white-btn btn-large">View More Pitches</a>         
            </div>
      </div>
      </div>
</section>

<!-- The Modal -->
  <div class="modal fade" id="intrestModal">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        
        <!-- Modal body -->
        <div class="modal-body text-center">
          
          <img src="images/icon-cir-check.png" alt="" />
          <p>To view the full pitch you must be a registered investor. To upgrade to an investor account, please email <a href="mailto:info@sikazone.com">info@sikazone.com</a></p>
          <button type="button" class="green-btn" data-dismiss="modal">OK, I've got it!</button>

        </div>
        
      </div>
    </div>
  </div>


  <?php
include('includes/footer.php');
include('includes/js.php');
?>
</body>
</html>