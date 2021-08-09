<?php require('config.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BGI</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
    <div class="container">
    <a href="" class="navbar-brand">GBI</a>

    <ul class="navbar-nav ms-auto">
    <?php if(isset($_SESSION['scout_login'])):?>
    
    <li class="nav-item"><a href="scouter_logout.php" class="nav-link">Logout</a></li>
    
    <?php else:?>
        <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
    <li class="nav-item"><a href="scouter_signup.php" class="nav-link">Signup</a></li>
    <?php endif;?>
    </ul>
    </div>
   
</nav>

    
</body>
</html>