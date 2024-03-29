<?php

//include the database:
include_once('asset/_cnx/_cnx.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS Style -->
    <link rel="stylesheet" href="asset/style/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <title>Blog | Register </title>
</head>

<body>
<main>
    <section class="container">
        <div class="form_register">
            <?php $message;  ?>
            <form action="register.php" method="post">
                <label for="">First Name:</label>
                <input type="text" name="firstname" placeholder="Enter your First name">

                <label for="">Last Name:</label>
                <input type="text" class="" name="lastname" placeholder="Enter your First name">

                <label for="">Email:</label>
                <input type="email" class="email" name="email" placeholder="Enter your address Email">

                <label for="">Password:</label>
                <input type="password" name="email" placeholder="Enter your password">

                <input type="submit" value="Register" name="register">
            </form>
        </div>
</main>
</body>

</html>