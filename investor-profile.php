
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
      

      <div class="col-sm-3 avatar_profile">
            <div class="profile_pic" >
              <img src="images/avatar.jpg" alt="">
            </div>
            <span class="btn-file btn-block text-center">
            Upload Picture <input type="file" class="form-control"></span>
      </div>

      <div class="col-lg-6 my-auto pl-0">
          <h3 class="mb-2 section-heading">Kwadwo</h3>
          <p class="loc text-light"><i class="fa fa-map-marker"></i> London, United Kingdom </p>
          <!-- <div class="investor-action">
              <a class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Add to Shortlist"><i class="fa fa-star"></i></a>
              <a class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Endorse Investor"><i class="fa fa-thumbs-up"></i></a>    
          </div> -->
      </div>
      <div class="col-lg-3 my-auto text-right">
          <div class="contact-investor">
            <a href="#" class="white-btn">Edit Profile</a>
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
              <tbody><tr>
                <th>Investment Range</th>
                <td>£1 to £78,000</td>
              </tr>
              <tr>
                <th>Stages</th>
                <td>Pre-Startup/R&amp;D, MVP/Finished Product, Achieving Sales, Breaking Even, Profitable, Other</td>
              </tr>
              <tr>
                <th>Industries</th>
                <td>Education &amp; Training, Medical &amp; Sciences, Transportation, Agriculture, Software, Media, Business Services, Finance, Manufacturing &amp; Engineering, Energy &amp; Natural Resources, Property , Hospitality, Restaurants &amp; Bars, Products &amp; Inventions, Retail, Sales &amp; Marketing, Fashion &amp; Beauty, Technology, Food &amp; Beverage, Entertainment &amp; Leisure, Personal Services</td>
              </tr>
              <tr>
                <th>Locations</th>
                <td>Argentina, Bolivia, Chile, Colombia, Ecuador, Paraguay, Peru, Uruguay, Venezuela, Fuera de América del Sur</td>
              </tr>
              <tr>
                <th>Countries</th>
                <td>Canada</td>
              </tr>
            </tbody></table>
          </div>
        </div>


        <!-- my company start-->
          <div class="invest-detail box-shad hover-effect mt-4">
            <div class="pane-heading">
              <h3>My Companies</h3>
            </div>
            <div class="pane-body">

              <div class="row">
                <div class="col-lg-8"> 
                  <p>What's your experience?</p>
                </div>
                <div class="col-lg-4 text-right"> 
                  <a class="green-btn" href="#" data-toggle="modal" data-target="#addCompany-modal">Add Company</a>
                </div>
              </div>
            </div>
          </div>

        <!-- The Modal -->
          <div class="modal fade" id="addCompany-modal">
            <div class="modal-dialog modal-md">
              <div class="modal-content">
                <!-- Modal body -->
                <div class="modal-body text-center">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                   <h4 class="modal-title">Add new company</h4>
                  <p>Have you invested in any companies?</p>

                  <div class="row">
                    <div class="col-lg-12 avatar_profile">

                          <div class="profile_pic">
                            <img src="images/avatar.jpg" alt="">
                          </div>
                          <span class="btn-file btn-block text-center">
                          Upload Picture <input type="file" class="form-control"></span>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-12 mt-4">
                        <div class="form_box">
                          <input type="text" placeholder="Name" class="form-control">
                          <select class="form-control">
                            <option>------Position------</option>
                            <option>Role</option>
                            <option>Founder</option>
                            <option>Investor</option>
                            <option>Advisor</option>
                            <option>CEO/Director</option>
                          </select>
                          <textarea rows="4" class="form-control mt-2" placeholder="Description"></textarea>
                          
                        </div>
                        
                        <div class="form_box mt-3">
                          <a href="#" class="green-btn btn-block btn-form">Save</a>
                        </div>
                  
                          
                    </div>
                  </div>
                </div>
                
              </div>
            </div>
          </div>


        <!-- my company end-->

        <!-- My Endorsements start -->
          <div class="invest-detail box-shad hover-effect  mt-4">
            <div class="pane-heading">
              <h3>My Endorsements</h3>
            </div>
            <div class="pane-body">
              <p>You don't have any endorsements yet. We suggest requesting endorsements from people you've worked with or invested in.</p>
             <a class="green-btn" href="#">Get Endorsed</a>

             <div class="endorse-fields">
               <form>
                 <div class="form_box">
                  <a href="#" class="hide-div"><i class="fa fa-close "></i></object></a>
                    <input type="text" placeholder="Name" class="form-control">
                    <input type="Email" placeholder="Email" class="form-control">
                  </div>
                  <div class="form_box mt-3 text-right">
                    <a href="#" class="green-btn">Send Endorsement </a>
                  </div>
               </form>
             </div>
              
            </div>
          </div>
        <!-- My Endorsements end -->

      </div>
      <div class="col-lg-4">
        <div class="invest-detail hover-effect box-shad">
          <div class="pane-heading">
            <h3>My Profile</h3>
          </div>
          <div class="pane-body">
            <table style="width:100%" class="table profile-table">
              <tbody><tr>
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
            </tbody></table>
          </div>
        </div>


        <div class="invest-detail hover-effect box-shad mt-4">
          <div class="pane-heading">
            <h3>My Contact Details</h3>
          </div>
          <div class="pane-body">
            <table style="width:100%" class="contact-table">
              <tbody><tr>
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
            </tbody></table>
          </div>
        </div>

        <div class="invest-detail hover-effect box-shad mt-4">
          <div class="pane-heading">
            <h3>Keywords</h3>
          </div>
          <div class="pane-body">
            <div class="skill-tag">
                <span class="skills"> property </span>
                <span class="skills"> software </span>
                <span class="skills"> rental </span>
<!--                 <span class="skills"> technology </span>
                <span class="skills"> business </span>
                <span class="skills"> top </span> -->

            </div>
          </div>
        </div>

        <div class="invest-detail hover-effect box-shad mt-4">
          <div class="pane-heading">
            <h3>Investments Summary</h3>
          </div>
          <div class="pane-body">
            <p>If you have invested online via SeedTribe, the summary of your online investments will be displayed there.</p>
            <a class="green-btn" href="#">View Summary</a>
            
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