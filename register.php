<?php
    session_start();
    //include the database:
    include_once('asset/_cnx/_cnx.php');

    if (isset($_POST['register'])) {
        $message = "";
        $firstname = htmlentities($_POST['firstname']);
        $lastname = htmlentities($_POST['lastname']);
        $email = htmlentities($_POST['email']);
        $password = ($_POST['password']);
        $password = password_hash($password, PASSWORD_DEFAULT);

        if (empty($_POST['firstname']) || empty($_POST['lastname']) || empty($_POST['email']) || empty($_POST['password'])) {
            echo "Your champs are empty";
        } 
        elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Please enter a valid email address"; 
        } 

        else {
            //
            $req = "INSERT INTO users (firstname, lastname, email, password) VALUES (?, ?, ?, ?)";
            $stmt = $conn->prepare($req);

            if ($stmt->execute([$firstname, $lastname, $email, $password])) {
                echo "Your data has been inserted";
            }
            else 
            {
                echo "Error while inserting data";
            }
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

    <title>Blog | Register </title>
</head>

<body>
<main>
    <section class="container">
        <div class="form_register">
            <form action="register.php" method="post">
                <label for="first">First Name:</label>
                <input type="text" name="firstname" placeholder="Enter your First name" id="first">

                <label for="last">Last Name:</label>
                <input type="text" class="" name="lastname" placeholder="Enter your Last name" id="last">

                <label for="mail">Email:</label>
                <input type="email" class="email" name="email" placeholder="Enter your address Email" id="mail">

                <label for="pass">Password:</label>
                <input type="password" name="password" placeholder="Enter your password" id="pass">

                <input type="submit" value="Register" name="register">
            </form>
        </div>
    </section>
</main>
</body>

</html>