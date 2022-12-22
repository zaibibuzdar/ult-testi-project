<?php
include('config/dbcon.php');

session_start();
if(isset($_POST['adduser'])){

    $user_name = $_POST['name'];
    $user_email = $_POST['email'];
    $user_password = $_POST['password'];
    $user_confirm = $_POST['confirm_password'];

    // print_r($user_email);
    // die();
    
    if($user_password == $user_confirm)
    {
        $user_add = "INSERT INTO users (name,email,password) 
        VALUE('$user_name','$user_email','$user_password')";


        // echo $user_add;
        // die();
        $result = mysqli_query($conn, $user_add);

        if($result)
        {
            $_SESSION['status'] = " user register successfully";
            header('Location:index.php');
        }
            else
            {
                $_SESSION['status'] = " user doesnot Rigester ";
                header('Location:login.php');
            }
    } 
        else
        {
            echo "your password did not match";
        }

}






?>