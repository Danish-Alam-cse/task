<?php

$con = mysqli_connect('localhost','root','','mail');




function redirect($page){
    
    echo "<script>window.open('$page.php','_self')</script>";

}

function alert($msg){
    echo "<script>alert('$msg')</script>";
}


?>