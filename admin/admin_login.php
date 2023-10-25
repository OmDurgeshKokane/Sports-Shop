<?php
    require('dbcon.php');
    session_start();
    // When form submitted, check and create user session.
    if (isset($_POST['submit'])) {
        $name = stripslashes($_REQUEST['name']);    // removes backslashes
        $name = mysqli_real_escape_string($con, $name);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        // Check user is exist in the database
        $query    = "SELECT * FROM `admin_login` WHERE name='$name'
                     AND password='" . ($password) . "'";
        $result = mysqli_query($con, $query);
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['name'] = $name;
            // Redirect to user dashboard page
            echo '<script>alert("Welcome Admin")</script>';
            header("refresh:0.1 ; url=../admin/admin_panel.php");
        } else {
            echo "<div class='form'>
                  <script>alert('Incorrect Username/password')</script><br/>
                  </div>";
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
    <link rel="stylesheet" href="../css/log.css">
    <title>Admin Login</title>
</head>
<body>
    <h1>Login</h1>
        <form class="myform" action="../admin/admin_login.php" method="POST">
            <label for="mail">Name</label>
            <input class="myinput" type="text" name="name" id="mail" required="required" placeholder="Enter Name"/>
            <label for="pass">Password</label>
            <input class="myinput" type="password" name="password" id="pass" required="required" placeholder="Enter Password"/>
            <div class="press">
                <button class="btn" name="submit">Login</button>
            </div>
        </form>
</body>
</html>