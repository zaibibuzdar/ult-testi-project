<?php
session_start();
if(isset($_SESSION['auth'])){
  $_SESSION['auth_status'] = "you are already login";
    header('location:index.php');
}

?>
<!DOCTYPE html>
<!--<![endif]-->
<head>
<?php
 include('includes/css.php')
?>
</head>
<body>

<?php

include('includes/header.php');
?>

<section class="grey-bg py-more">
  <div class="container">
        <div class="row my-auto">
              <div class="col-lg-5 mx-auto">
                <div class="register_page box-shad">
          <?php
                include('message.php');
                ?>
                    <form action="logincode.php" method="post">
                       
                      <h3 class="section-heading">Login</h3>
                      <p>Log in now to get full access.</p>
                      <div class="user_login mt-5">
                      
                        <div class="form_box">
                          <input type="text" name="email" placeholder="Email" class="form-control">
                          <img src="images/envelope-icon.png">
                        </div>
                        
                        <div class="form_box">
                          <input type="text"  name="password" placeholder="Password" class="form-control">
                          <img src="images/lock-img.png">
                        </div>
                        <div class="form_box">
                          <div class="row user_help">
                            <div class="col-lg-6 px-0">
                              <p>Not registered yet? <a href="register.php"><strong>Signup</strong></a></p>
                            </div>
                            <div class="col-lg-6 px-0 text-right">
                              <a href="#"><strong>Forget Password?</strong></a>
                            </div>
                          </div>
                          
                        </div>
                        <div class="form_box">
                        <button type="submit" class="green-btn btn-block btn-form" name="loginUser">Login</button>
                          
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