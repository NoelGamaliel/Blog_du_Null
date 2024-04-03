<?php

session_start();

//include the database:
include_once('asset/_cnx/_cnx.php');
    
    $message='';

    if (isset($_POST['connexion'])) {
        $message='';
        $email = $_POST['email'];
        $password = $_POST['password'];
        
        if (empty($email) || empty($password)) {
            echo "Please complete your email address and password";
        } 
         
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS Style -->
    <link rel="stylesheet" href="asset/style/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <title>Accueil | Blog du Null</title>
</head>

<body>
<main>
    <section class="container">
        <div class="form_login">
            <?php $message;  ?>
            <form action="login.php" method="post">
                <label for="email">Email:</label>
                <input type="email" class="email" name="email" placeholder="Enter your address Email" require>

                <label for="">Password:</label>
                <input type="password" name="password" placeholder="Enter your password" require>

                <input type="submit" value="Connexion" name="connexion">
            </form>
        </div>
    </section>
</main>
</body>

</html>