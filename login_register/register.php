<?php

include 'dbcon.php';


if (isset($_POST['submit'])) {
    $firstname = mysqli_real_escape_string($con, $_POST['firstname']);
    $lastname = mysqli_real_escape_string($con, $_POST['lastname']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $gender = mysqli_real_escape_string($con, $_POST['gender']);
    $mobile = mysqli_real_escape_string($con, $_POST['mobile']);
    $age = mysqli_real_escape_string($con, $_POST['age']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $cpassword = mysqli_real_escape_string($con, $_POST['confirmpassword']);
   

    $pass = password_hash($password, PASSWORD_BCRYPT);
    $cpass = password_hash($cpassword, PASSWORD_BCRYPT);

    $emailquery = " select * from register_login where email = '$email'";
    $query = mysqli_query($con, $emailquery);

    $emailcount = mysqli_num_rows($query);

    if ($emailcount > 0) {
?>
        <script>
            alert("Email already exits!!!!");
        </script>
        <?php

    } else {
        if ($password === $cpassword) {

            $insertquery = "insert into register_login(firstname, lastname,email, gender,mobile,age,password, confirmpassword) values('$firstname','$lastname','$email','$gender','$mobile','$age','$pass','$cpass')";

            $iquery = mysqli_query($con, $insertquery);

            if ($iquery) {
                echo '<script>alert("Registration Successful\n You can Login Now!!")</script>';
                header("refresh:0.1 ; url=../login_register/login.php");
            } else {
                echo '<script>alert("Unsucessful Registration!!!")</script>';
            }
        } else {
        ?>
            <script>
                alert("Passsword not matching!!!");
            </script>
<?php


        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/regi.css">
    <title>Do Register/Login First</title>
</head>

<body>
    <form class="myform" action="./register.php" method="post">
        <label for="fname">First Name</label>
        <input class="myinput" type="text" name="firstname" id="fname" pattern="[a-zA-Z'-'\s]*" required="required" placeholder="First Name" />
        <label for="lname">Last Name</label>
        <input class="myinput" type="text" name="lastname" id="lname" pattern="[a-zA-Z'-'\s]*" required="required" placeholder="Last Name" />
        <label for="mail">Email</label>
        <input class="myinput" type="email" name="email" id="mail" required="required" placeholder="Enter Email" />
        <label for="gen">Male </label>
        <input class="myinput" type="radio" name="gender" value="Male" id="gen" required="required" />
        <label for="fen">Female</label>
        <input class="myinput" type="radio" name="gender" value="Female" id="fen" required="required" />
        <label for="pho">Phone</label>
        <input class="myinput" type="phone" name="mobile" id="pho" pattern="[7-9]\d{9}$" maxlength="10" oninvalid="this.setCustomValidity('Please Enter Valid Number')" oninput="setCustomValidity('')" required="required" placeholder="Enter Phone" />
        <label for="age">Age</label>
        <input class="myinput" type="text" name="age" id="age" required="required" placeholder="Enter Age" />
        <label for="pass">Password</label>
        <input class="myinput" type="password" name="password" id="pass" required="required" placeholder="Enter Password" />
        <label for="pass1">Confirm Password</label>
        <input class="myinput" type="password" name="confirmpassword" id="pass1" required="required" placeholder="Confirm Password" />
        <div class="press">
            <button class="btn" name="submit">Register</button>
        </div>
      
    </form>
    <div class="link">
            <li><a href="../login_register/login.php">Go To Login</a></li>
        </div>
</body>

</html>