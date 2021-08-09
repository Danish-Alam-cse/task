<?php

session_start();

include 'config.php';

if(isset($_GET['token'])){
    $token = $_GET['token'];
    //die;
    
    $updatequery ="update displayer set status='active' where token='$token' "; 
    $query = mysqli_query($con,$updatequery);
    
    if($query){
        if(isset($_SESSION['msg'])){
            $_SESSION['msg'] = "Account Activated Successfully";
            redirect('displayer_login');
        }
        else{
            $_SESSION['msg'] = "You are logged out";
            redirect('displayer_login');
        }
    }
    else{
        $_SESSION['msg'] = "Account not activated";
        redirect('displayer_signup');
    }
}
?>