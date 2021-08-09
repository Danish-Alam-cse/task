<?php require('scouter_nav.php');


if(!isset($_SESSION['scout_login'])){
    redirect('scouter_login');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scouter Profile</title>
</head>
<body>
    <div class="row mt-4">
        <div class="col-lg-5 mx-auto">

        
    
    
    <div class="card">
        <div class="card-header">
        <div class="card-title text-center"><h3>Scouter Profile</h3></div></div>
                         <div class="card-body">

    <table class="table">

                    

                         
                     
                      <?php
                      $log = $_SESSION['scout_login'];
                      
                      $calling = mysqli_query($con,"select * from scouter where email='$log'");
                      while($row = mysqli_fetch_array($calling)):
                      ?>
                       <tr>
                          <th>Scouter id</th>
                          <th><?= $row['scouter_id'];?></th>
                      </tr>
                      <tr>
                          <th>Company Name</th>
                          <th><?= $row['company_name'];?></th>

                      </tr>
                      <tr>
                          <th>Date of Registration</th>
                          <th><?= $row['dor'];?></th>
                      </tr>

                      <tr>
                          <th>Country of origin</th>
                          <th><?= $row['coo'];?></th>
                      </tr>
                      <tr>
                          <th>Email</th>
                          <th><?= $row['email'];?></th>
                      </tr>

                      <tr>
                          <th>Technology name</th>
                          <th><?= $row['Technology_name'];?></th>
                          
                          
                      </tr>
                   
                      <?php endwhile;?>
                  </table>
                      </div>
                      </div>
                      </div>
                      </div>
    
    
</body>
</html>