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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../manage_order_manager/manage_order_manager.css">
    <title>Manage Orders</title>

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
            <h2><i class="bi bi-bag-check"></i> Order Manager</h2>


        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-12">
                <table class="table text-center ">
                    <thead class="bg-dark text-light">
                        <tr>
                            <th scope="col">Order ID</th>
                            <th scope="col">Customer Name</th>
                            <th scope="col">Contact No.</th>
                            <th scope="col">Address</th>
                            <th scope="col">Payment Mode</th>
                            <th scope="col">Date & Time</th>
                            <th scope="col">Orders</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white">
                        <?php

                        $query = "SELECT * FROM `order_manager`";
                        $user_result = mysqli_query($con, $query);
                        while ($user_fetch = mysqli_fetch_assoc($user_result)) {
                            echo " 
                             <tr>
                                <td class='table-active' >$user_fetch[Order_id]</td>
                                <td class='table-active'>$user_fetch[firstname]</td>
                                <td class='table-active'>$user_fetch[mobile]</td>
                                <td class='table-active'>$user_fetch[address]</td>
                                <td class='table-active'>$user_fetch[Pay_Mode]</td>
                                <td class='table-active'>$user_fetch[date]</td>
                                <td  class='table-secondary'>
                                <table class='table text-center'>
                                <thead class='table-bordered text-light bg-dark'>
                                    <tr>
                                        <th scope='col'>Item Name</th>
                                        <th scope='col'>Price</th>
                                        <th scope='col'>Quantity</th>  
                                        <th width='30%' scope='col'>Total +<br>Gst&nbsp18%</th>
                                        <th width='20%' scope='col'>Total</th>
                                                                        
                                    </tr>
                                    
                                </thead>
                                
                                <tbody>
                                ";
                            $order_query = "SELECT * FROM `user_orders` WHERE `Order_id`='$user_fetch[Order_id]'";
                            $order_result = mysqli_query($con, $order_query);
                            $gfinal = 0;
                            while ($order_fetch = mysqli_fetch_assoc($order_result)) {

                                $gst = 0.18 * $order_fetch['Price'] * $order_fetch['Quantity'];
                                $total = $order_fetch['Price'] * $order_fetch['Quantity'];
                                $final = $total + $gst;
                                $gfinal = $gfinal + $final;


                                // $insert= "INSERT INTO order_manager (Total) values ($gfinal,'')";
                                // $inserttquery=mysqli_query($con,$insert);


                                echo "

                                    <tr>
                                        <td class='table-success'>$order_fetch[Item_Name]</td>
                                        <td class='table-success'>$order_fetch[Price]</td>
                                        <td class='table-success'>$order_fetch[Quantity]</td>
                                        <td class='table-success'>₹.&nbsp$total + ₹.&nbsp$gst</td>
                                        <td class='table-success'>₹.&nbsp$final</td>
                                        
                                    </tr>
                                    ";
                            }
                            //    $gfinal=0;
                            //     for ($i = $final; $i < $final; $i++) {
                            //         $gfinal = $gfinal + $final;
                            //     }



                            echo "    

                                <th width='100%' class='gfinal' scope='col'>Grand Total ₹.&nbsp$gfinal</th>

                                </tbody>
                                </table>
                                <br>
                                </td>
                            </tr>
                                    ";



                            // $total_query = "SELECT * FROM `user_orders` ";
                            // $total_result = mysqli_query($con, $total_query);

                            // if($total_result)
                            // {}
                            $insert_query = "UPDATE order_manager SET gtotal='$gfinal' WHERE `Order_id`='$user_fetch[Order_id]' ";

                            $tquery = mysqli_query($con, $insert_query);
                        }



                        ?>


                    </tbody>
                </table>
            </div>
        </div>

    </div>

    <?php



    ?>

</body>

</html>