<?php 

session_start();

 echo $_SESSION['firstname'];

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
        <!-- Header -->
        <?php include_once ('includes/header.php');?>

        <!-- Content -->
        <?php include_once ('includes/content.php');?>

    </main>
</body>
</html>