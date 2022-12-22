
<?php
include('config/dbcon.php');

session_start();

if(isset($_POST['logout']))
     {
       session_destroy();
        unset($_SESSION['auth']);
        $_SESSION['status'] = "logout successfully";
        header("Location:login.php");
        exit();
     }

if(isset($_POST['loginUser']))
{
    $userEmail = $_POST['email'];
    $userPassword = $_POST['password'];
    //  print_r($user_Email);
    $login_query ="SELECT * FROM users WHERE email='$userEmail' AND password='$userPassword' LIMIT 1";
    $login_query_run = mysqli_query($conn,$login_query);
    $fetch_data = mysqli_fetch_array($login_query_run);
    // print_r($fetch_data);
    // die;
    $rows = mysqli_num_rows($login_query_run);
   
    
    if($rows ==1)
    {

        $_SESSION['user_id'] = $fetch_data['id'];
        $_SESSION['user_name'] = $fetch_data['name'];
        $_SESSION['user_email'] = $fetch_data['email'];
        $_SESSION['auth'] = true;

        $_SESSION['status'] = "login successfully";
        header('Location:index.php');

    }
    else
    {
        $_SESSION['status'] = "your Password or Email Incorrect";
        header('Location:login.php');
    }

}
    else
    {
        $_SESSION['status'] = "Access Denied";
        header('Location:login.php');
    }
?>