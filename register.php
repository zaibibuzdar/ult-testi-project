<!DOCTYPE html>
<!--<![endif]-->
<head>
<?php
include('includes/css.php')

?>
</head>
<body>
<?php
include('includes/css.php')

?>
<section class="grey-bg">
  <div class="container">
        <div class="row my-auto">
              <div class="col-lg-5 mx-auto">
                <div class="register_page box-shad">
                    <form action="logcode.php" method="post">
                      <h3 class="section-heading">Get Started Now</h3>
                      <p>It's free to join and gain full access to thousands of exciting investment opportunities.</p>
                      <div class="user_login mt-4">
                        <div class="form_box">
                          <input type="text"   name ="name" placeholder="Name" class="form-control">
                          <img src="images/user_icon.png">
                        </div>
                        
                        <div class="form_box">
                          <input type="text"  name="email" placeholder="Email" class="form-control">
                          <img src="images/envelope-icon.png">
                        </div>
                        
                        <div class="form_box">
                          <input type="text" name="password" placeholder="Password" class="form-control">
                          <img src="images/lock-img.png">
                        </div>

                        <div class="form_box">
                          <input type="text" name="confirm_password" placeholder="Repeat Password" class="form-control">
                          <img src="images/lock-img.png">
                        </div>
                        <div class="row user_help">
                            <div class="col-lg-12 px-0">
                              
                              <p>Already Member? <a href="login.php"><strong>Login</strong></a></p>
                            </div>
                          </div>
                        
                        <div class="form_box">
                        <button type="submit" name="adduser" class="green-btn btn-block btn-form">Create account</button>
                        
                        </div>
                      </div>
                    </form>
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