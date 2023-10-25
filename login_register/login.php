<?php
session_start();
include 'dbcon.php';

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $email_search = " select * from register_login where email= '$email'";
    $query = mysqli_query($con, $email_search);

    $email_count = mysqli_num_rows($query);

    if ($email_count) {

        $email_pass = mysqli_fetch_assoc($query);

        $db_pass = $email_pass['password'];

        $_SESSION['firstname'] = $email_pass['firstname'];
        $_SESSION['email'] = $email_pass['email'];
        $_SESSION['mobile'] = $email_pass['mobile'];
        $pass_decode = password_verify($password, $db_pass);

        if ($pass_decode) {
            
            echo '<script>alert("Welcome \n Login Successfull !!!")</script>';
            header("refresh:0.1 ; url=../html/home1.html");
        } else {
            echo '<script>alert("Wrong Password !!!")</script>';
        }
    } else {
        echo '<script>alert("Wrong Email !!!")</script>';
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/log.css">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
        <form class="myform" action="./login.php" method="POST">
            <label for="mail">Email</label>
            <input class="myinput" type="email" name="email" id="mail" required="required" placeholder="Enter Email"/>
            <label for="pass">Password</label>
            <input class="myinput" type="password" name="password" id="pass" required="required" placeholder="Enter Password"/>
            <div class="press">
                <button class="btn" name="submit">Login</button>
            </div>
        </form>
</body>
</html>