<?php

session_start();

include 'config.php';

if(isset($_GET['token'])){
    $token = $_GET['token'];
    //die;
    
    $updatequery ="update scouter set status='active' where token='$token' "; 
    $query = mysqli_query($con,$updatequery);
    
    if($query){
        if(isset($_SESSION['msg'])){
            $_SESSION['msg'] = "Account Activated Successfully";
            redirect('scouter_login');
        }
        else{
            $_SESSION['msg'] = "You are logged out";
            redirect('scouter_login');
        }
    }
    else{
        $_SESSION['msg'] = "Account not activated";
        redirect('scouter_signup');
    }
}
?>