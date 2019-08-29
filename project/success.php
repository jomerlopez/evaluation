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
<body style="background-color: #28B8B6">

    <div class="container">
    <h1>Congratulation <?php echo $firstname; ?></h1>
    </div>
    
    <p>You have Successfully Created an Account!click here <a href="login.php">log in</a></p>
    
</body>
</html>