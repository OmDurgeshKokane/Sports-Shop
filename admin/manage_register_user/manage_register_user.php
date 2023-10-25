<?php
require("dbcon.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register_user</title>
    <link rel="stylesheet" href="../manage_register_user/manage_register_user.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>
<nav id="navbar">
    <ul>
        <div class="nav-img">
            <img src="../../img/omsportsshopee logo.png" alt="" srcset="">
        </div>
        <li> <a href="../manage_register_user/manage_register_user.php">Manage_Register_<br>User</a> </li>
        <li> <a href="../manage_user_manager/manage_user_manager.php">Manage_Users_<br>Orders</a> </li>
        <li> <a href="../manage_order_manager/manage_order_manager.php">Manage_Order_<br>Manager</a> </li>
        <li> <a href="../manage_contact_form/manage_contact_form.php">Manage_Contact_<br>Form</a> </li>
        <!-- <li> <a href="#">Payment</a> </li> -->
    </ul>
</nav>
<button class="btn1"> <a href="../../login_register/logout.php">Logout</a></button>

<body class="bg-light" id="topregi">
    <div class="container bg-dark text-light p-3 rounded my-4">
        <div class="d-flex align-items-center justify-content-between">
            <h2><i class="bi bi-bag-check"></i> Registration Manager</h2>
        </div>
    </div>
    <?php

    if (isset($_GET['alert'])) {
        if ($_GET['alert'] == 'img_rem_fail') {
            echo <<<alert
                                <div class="container alert alert-danger alert-dismissible text-center" role="alert">
                                <strong>Unregistration Fail! Server Down</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>

            alert;
        }



        if ($_GET['alert'] == 'remove_failed') {
            echo <<<alert
                                <div class="container alert alert-danger alert-dismissible text-center" role="alert">
                                <strong>Cannot Remove registertion Server Down</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>

            alert;
        }
    } else if (isset($_GET['success'])) {

        if ($_GET['success'] == 'removed') {
            echo <<<alert
                                <div class="container alert alert-success alert-dismissible text-center" role="alert">
                                <strong>Registration Deleted </strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>

            alert;
        }
    }

    ?>

    <div class="container mt-4 p-0">
        <table class="table table-hover text-center">
            <thead class="bg-dark text-light">
                <tr>
                    <th width="10%" scope="col" class="rounded-start">Sr. No.</th>
                    <th width="15%" scope="col">firstname</th>
                    <th width="10%" scope="col">lastname</th>
                    <th width="10%" scope="col">email</th>
                    <th width="10%" scope="col">gender</th>
                    <th width="10%" scope="col">mobile</th>
                    <th width="10%" scope="col">age</th>
                    <th width="10%" scope="col">Action</th>
                </tr>
            </thead>
            <tbody class="bg-white">

                <?php

                $query = "SELECT * FROM `register_login`";
                $result = mysqli_query($con, $query);
                $i = 1;

                while ($fetch = mysqli_fetch_assoc($result)) {

                    echo <<<product
								<tr class="align-middle">
								<th scope="row">$i</th>
								<td>$fetch[firstname]</td>
								<td>$fetch[lastname]</td>
								<td>$fetch[email]</td>
								<td>$fetch[gender]</td>
								<td>$fetch[mobile]</td>
								<td>$fetch[age]</td>
								<td>
								
								<button onclick="confirm_rem($fetch[id])" class="btn btn-danger"><i class="bi bi-trash"></i></button>
								</td>
								</tr>
								product;
                    $i++;
                }


                ?>


            </tbody>
        </table>

    </div>

    <script>
        function confirm_rem(id) {
            if (confirm("Are you sure,you want to delete this item?")) {
                window.location.href = "crud.php?rem=" + id;
            }
        }
    </script>


</body>

</html>