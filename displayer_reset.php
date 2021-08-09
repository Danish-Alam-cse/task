

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
    <div class="row">
       
        <div class="col-lg-5 mx-auto">
            <div class="card">
                <div class="text-center card-header">
                    <h3>Recover Displayer Account</h3>
                </div>
                 <div class="card-body">
        
            
            <form action="" method="post">
              
                <div class="mb-2">
                    <label for="">Email</label>
                    <input type="email" name="email" class="form-control">
                </div>
                    
                <div class="mb-2">
                    
                    <input type="submit" name="forget" value="Send Mail" class="btn btn-success form-control btn-block">
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
if(isset($_POST['forget'])){
  
    $email  = $_POST['email'];

    $emailquery = "select * from displayer where email='$email'";
    $query = mysqli_query($con,$emailquery);
    $record = mysqli_fetch_array($query);
    $emailcount = mysqli_num_rows($query);
    

    if($emailcount){
       $subject = "Password Reset";
       $token = $record['token'];
        $body = "Hi, $email Click here to Recover  your password
         http://localhost/task/display_resetpassword.php?token=$token";
        $headers = "From: danishalam002@gmail.com";

        if (mail($email, $subject, $body, $headers)) {
            $_SESSION['msg'] = "Check your mail Reset your password $email";
            redirect('displayer_login');
        } else {
            echo "Email sending failed...";
        }
}
    else{
        echo "No email found";
    }
}


 

?>