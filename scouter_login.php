
<?php require('scouter_nav.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scouter Login</title>
</head>
<body>

<div class="container mt-3">
    <div class=" row">
        <div class="mx-auto col-lg-3">
        <div class="card">
            <div class="card-header">
                <h3>Scouter Login</h3>
                <p class="bg-success text-light px-4"><?php
                    if(isset($_SESSION['msg'])){
                        echo $_SESSION['msg'];
                    }
                    else{
                        echo $_SESSION['msg'] = "You are logged out, Login again!";
                    }
                 ?></p>
            </div>
            <div class="card-body">
            <form action="" method="post">
                <div class="mb-2">
                    <label for="">Email</label>
                    <input type="email" name="email" class="form-control">
                </div>

                <div class="mb-2">
                    <label for="">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <div class="mb-2">
                   
                    <input type="submit" name="login" value="Login" class="btn form-control btn-success btn-block">
                    <br><a href="scouter_reset.php">Forget Password</a>
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
    if(isset($_POST['login'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        
        $check = mysqli_query($con,"SELECT * from scouter where (email ='$email' AND password='$password')
        AND status='active'");
        
        $count = mysqli_num_rows($check);
        
        if($count > 0){
            $_SESSION['scout_login'] = $email;
            redirect('scouter_profile');
        }
        else{
            echo "<script>alert('username and password is incorrect please try again')</script>";
        }
    }
    
    
    ?>
    