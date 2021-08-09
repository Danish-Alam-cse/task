
<?php require('scouter_nav.php');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scouter Signup</title>
</head>
<body>

<div class="container mt-3">
    <div class="row">
        
        <div class="col-lg-6 mx-auto">
            <div class="card">
                <div class="text-center card-header">
                    <h1>Displayer Reset Password</h1>
                    <p><?php if(isset($_SESSION['passmsg'])){
                        echo $_SESSION['passmsg'];
                    } 
                    else{
                        echo $_SESSION['passmsg'] = "";
                    }
                    
                    ?></p>
                </div>
                 <div class="card-body">
        
            
            <form action="" method="post">
                
                


                
                    <div class="mb-2">
                    <label for="">New Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                    
                   
                    <div class="mb-2">
                    <label for="">Confirm Password</label>
                    <input type="password" name="cpassword" class="form-control">
                
                </div>
                
                
                    <div class="mb-2">
                    
                    <input type="submit" name="reset" value="Update Password" class="btn form-control btn-success btn-block">
                </div>
                
                

            </form>
            </div>
            </div>
        </div>
    </div>
</div>
    
</body>
</html>

<?php
if(isset($_POST['reset'])){
   
    if(isset($_GET['token'])){
        $token = $_GET['token'];
    
    $password  = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    



if($password===$cpassword){

    $updatequery = "update displayer set password='$password' where token='$token'";
    $q = mysqli_query($con,$updatequery);
    
if($q){
    $_SESSION['msg'] = "Your password has been updated";
    redirect('displayer_login');      
}
else{
    $_SESSION['passmsg'] =" Your password is not updated";
}

}
else{

    $_SESSION['passmsg'] =" Password is not matched";
}
}
else{
    echo "token not found";
}
}


?>