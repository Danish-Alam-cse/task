
<?php require('nav.php');?>

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
        <div class="col-lg-2">
        </div>
        <div class="col-lg-9">
            <div class="card">
                <div class="text-center card-header">
                    <h1>Scouter Registration</h1>
                </div>
                 <div class="card-body">
        
            
            <form action="" method="post">
                <div class="mb-2">
                    <label for="">Company Name</label>
                    <input type="text" name="company_name" class="form-control">
                </div>
                <div class="row">
                 <div class="col-6">
                <div class="mb-2">
                    <label for="">Date Of Registration</label>
                    <input type="date" name="dor" class="form-control">
                </div>
                </div>
                <div class="col-6">
                <div class="mb-2">
                    <label for="">Technology Name</label>
                    <input type="text" name="technology_name" class="form-control">
                </div>
                </div>
                </div>

                <div class="row">
                    <div class="col-6">
                    <div class="mb-2">
                    <label for="">Country of Origin</label>
                    <input type="text" name="coo" class="form-control">
                </div>
                    </div>
                    <div class="col-6">
                    <div class="mb-2">
                    <label for="">Email</label>
                    <input type="email" name="email" class="form-control">
                </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                    <div class="mb-2">
                    <label for="">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                    </div>
                    <div class="col-6">
                    <div class="mb-2">
                    <label for="">Confirm Password</label>
                    <input type="text" name="cpassword" class="form-control">
                </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-12">
                    <div class="mb-2">
                    
                    <input type="submit" name="register" value="Register" class="btn btn-success btn-block">
                </div>
                    </div>
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
if(isset($_POST['register'])){
    $company_name  = $_POST['company_name'];
    $dor  = $_POST['dor'];
    $technology_name  = $_POST['technology_name'];
    $coo  = $_POST['coo'];
    $email  = $_POST['email'];
    $password  = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $token = bin2hex(random_bytes(15));

    $emailquery = "select * from scouter where email='$email'";
    $query = mysqli_query($con,$emailquery);
    $emailcount = mysqli_num_rows($query);

    if($emailcount > 0){
        echo "email already exists";
    }

    else{
        if($password==$cpassword){
    
        $q = mysqli_query($con,"INSERT INTO 
        scouter (company_name,dor,technology_name,coo,email,password,token,status) 
        values ('$company_name','$dor','$technology_name','$coo','$email','$password','$token','inactive')");

if($q){
    echo "Registration successfull";
}
else{
    echo "<script>alert('not created')</script>";
}
}
else{
    echo "password doest not matched";
} 
}
}
?>