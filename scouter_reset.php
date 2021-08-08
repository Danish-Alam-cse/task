

<?php require('scouter_nav.php');?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Displayer Login</title>
</head>
<body>

<div class="container mt-3">
    <div class="row">
       
        <div class="col-lg-5 mx-auto">
            <div class="card">
                <div class="text-center card-header">
                    <h3>Displayer Registration</h3>
                </div>
                 <div class="card-body">
        
            
            <form action="" method="post">
              
                <div class="mb-2">
                    <label for="">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                    
                    
                <div class="mb-2">
                    <label for="">Confirm Password</label>
                    <input type="text" name="cpassword" class="form-control">
                </div>
                    
                
                
                <div class="mb-2">
                    
                    <input type="submit" name="register" value="Register" class="btn btn-success form-control btn-block">
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
if(isset($_POST['register'])):
    
    $password  = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    
    
if($password == $cpassword){
$query = mysqli_query($con,"INSERT INTO scouter (password) value ('$password')");

if($query){
    echo "data sent successfully";
}
else{
    echo "<script>alert('not created')</script>";
}
}
else{
        echo "password doest not matched";
    }

endif;
?>