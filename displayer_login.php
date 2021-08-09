
<?php require('nav.php');?>

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
    <div class=" row">
        <div class="mx-auto col-lg-3">
        <div class="card">
            <div class="card-header">
                <h3>Displayer Login</h3>
                <p class="bg-success text-light px-4"><?php if(isset($_SESSION['msg'])){
                    echo $_SESSION['msg'];
                } else{
                    echo $_SESSION['msg'] = "";
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
                    <br><a href="displayer_reset.php">Forget Password</a>
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
        
        $check = mysqli_query($con,"SELECT * from displayer where(email ='$email'
         AND password='$password')  AND status='active'");
        
        $count = mysqli_fetch_assoc($check);
        
        if($count > 0){
            $_SESSION['display_login'] = $email;
            redirect('displayer_profile');
        }
        else{
            echo "<script>alert('username or password is incorrect please try again')</script>";
        }
    }
    
    
    ?>