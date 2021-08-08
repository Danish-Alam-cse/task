<?php require('nav.php');

if(isset($_SESSION['display_login'])){
    redirect('displayer_login');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Displayer Profile</title>
</head>
<body>

    <h1>Displayer Profile</h1>

    <table class="table">
                      <tr>
                          <th>Displayer id</th>
                          <th>Company Name</th>
                          <th>Date of Registration</th>
                          <th>Country of origin</th>
                          <th>Email</th>
                          <th>Technology name</th>
                          <th>Action</th>
                      </tr>
                      <?php
                      $log = $_SESSION['display_login'];
                      
                      $calling = mysqli_query($con,"select * from displayer where email='$log'");
                      while($row = mysqli_fetch_array($calling)):
                      ?>
                      <tr>
                          <th><?= $row['displayer_id'];?></th>
                          <th><?= $row['company_name'];?></th>
                          <th><?= $row['dor'];?></th>
                          <th><?= $row['coo'];?></th>
                          <th><?= $row['email'];?></th>
                          <th><?= $row['technology_name'];?></th>
                          
                          <th>
                              
                          </th>
                      </tr>
                      <?php endwhile;?>
                  </table>
    
</body>
</html>