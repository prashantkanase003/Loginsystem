<?php
     session_start();
     if(!isset($_SESSION['username'])){
        header('location:login.php');
     }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Welcome!</title>
</head>
<body>
    <?php require 'navbar.php' ?>
    
    <div class="container-fluid  mx-0 d-flex flex-row justify-content-end">
        <a href="Logout.php" class="btn btn-primary mt-2">Log Out</a>
    </div>
    <h1 class="text-center text-warning">Welcome To profile page <?php echo $_SESSION ['username'] ?></h1>
    
</body>
</html>