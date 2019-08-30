<?php
    session_start();
    $firstname = $_SESSION['firstname'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    .container{
        text-align: center;
        border: 5px solid black; padding: 50px 60px;
        margin-top: 25vh;
    }
</style>
<body>
    <div class="container col-lg-8">
    
    <h1>Congratulation <?php echo $firstname; ?></h1>
    
    
    <p>You have Successfully Created an Account!click here <a href="login.php">log in</a></p>
    </div>
</body>
    
</html>