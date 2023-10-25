<?php
require("dbcon.php");
session_start();

date_default_timezone_set('Asia/Kolkata');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <link rel="stylesheet" href="../Style/inventory.css">
    <link rel="stylesheet" href="../Style/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../css/card.css">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="../Style/style-index.css">
    <title>Cart</title>
    <link rel="icon" href="../Image/title_icon.gif" type="image/icon type">

</head>
    <nav id="navbar">
        <ul>
          <div class="nav-img">
            <img src="../img/omsportsshopee logo.png" alt="" srcset="">
          </div>
          <li> <a href="../html/home1.html">Home</a> </li>
          <li> <a href="../store/store.php">Store</a> </li>
          <li> <a href="../special_items/special_items.php">Special Items</a> </li>
          <li> <a href="../aboutus/about_us.php">About Us</a> </li>
          <li> <a href="../contact us/contact_us.php">Contact</a> </li>
          <!-- <li> <a onclick="myFunction()" href="#">Payment</a> </li> -->
        </ul>
      </nav>
      <button id="btn"> <a href="../login_register/logout.php">Logout</a></button>


    <!--login&cart-->


    
<div class="right-column">
    <!-- <div class="header-login">
        <ul>
            <div class="user">
                <li>Hello !! <?php echo $_SESSION['firstname'] ?> </li>
            </div>

        </ul>
    </div> -->
    <!-- Example split danger button -->
    <div class="btn-group">
        <button type="button" class="btn btn-danger">Hello!!<?php echo $_SESSION['firstname']?> </button>
        <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
            <span class="visually-hidden"></span>
        </button>
            <!-- <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
            <li>
                <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="#">Separated link</a></li> -->
        </ul>


        <!-- Split dropstart button -->

        <div class="btn-group">
            <button type="button" class="btn btn-warning dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                <span class="visually-hidden">
                    <div>
                        <?php
                        $count = 0;
                        if (isset($_SESSION['cart'])) {
                            $count = count($_SESSION['cart']);
                        }
                        ?>
                    </div>
                    <i class="bi bi-cart-check-fill"></i>(<?php echo $count; ?> )
                </span>
            </button>
            <ul class="dropdown-menu">
                <div class="logout">
                    <li>
                        <div>
                            <?php
                            $count = 0;
                            if (isset($_SESSION['cart'])) {
                                $count = count($_SESSION['cart']);
                            }
                            ?>
                        </div>
                        <a href="../cart/cart.php">MY CART (<?php echo $count; ?> ) </a> <br>
                       

                    </li>
                </div>
            </ul>
        </div>
    </div>
        <div class="btn-group dropstart" role="group">
            <!-- <button type="button" class="btn btn-dark">
                <div class="logout">

                    <!-- <a href="../Profile/profile.php"> Profile </a> <br> -->
                    <!-- <a href="../Login_register/logout.php"> Logout</a> -->

            <!-- </button>  -->
        </div>
    
</div>






    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center border rounded bg-light my-5">

                <h1 id="heading">
                    MY CART
                </h1>
            </div>

            <div class="col-lg-9 bg-light">
                <table class="table">
                    <thead class="text-center">
                        <tr>
                            <th scope="col">Serial No.1</th>
                            <th scope="col">Item name</th>
                            <th scope="col">Item Price</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Total</th>


                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody class="text-center">

                        <?php
                        // $total = 0;
                        if (isset($_SESSION['cart'])) {


                            foreach ($_SESSION['cart'] as $key => $value) {
                                $sr = $key + 1;
                                // $total = $total + $value['Price'];

                                echo "
                                     <tr>
                                      <td>$sr</td>
                                      <td>$value[Item_Name]</td>
                                      <td> Rs. $value[Price]<input type='hidden' class='iprice' value='$value[Price]'</td>
                                      <td>
                                        <form action='manage_cart.php' method='POST'>
                                         <input class='text-center iquantity' name='Mod_Quantity'  onchange='this.form.submit()' type='number' value='$value[Quantity]' min='1' max='7'>
                                         <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
                                         </form>
                                      </td>
                                      <td class='itotal'></td>

                                      <td>
                                      <form action='manage_cart.php' method='POST'>
                                      <button name='Remove_Item' class='add_to_Card btn-sm' id='removebtn'> REMOVE</button>
                                      <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
                                      </form> 
                                      </td>
                                      </tr>
                                      ";
                            }
                        }
                        ?>

                    </tbody>
                </table>
            </div>
            <div class="col-lg-3 table-active bg-light">
                <h4 class="table-danger"> &nbsp Bill : </h4>
                <h6 class="bg-dark text-light"> &nbsp Total: </h6>
                ₹<h5  id="gtotal"> </h5>
                
                <h6 class="bg-dark text-light"> + Gst 18% </h6>
                ₹<h5  id="gst"></h5>
                _____________________________<br>
                ₹<h5  id="final"> </h5>
                <br>

                <?php
                if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
                ?>
                    <form action="purchase.php" method="POST">

                        <div class="form-group">

                            <label for="form-name">Name</label>
                            <input type="text" name="firstname" value="<?php echo $_SESSION['firstname'] ?>" class="form-control" id="form-name" placeholder="Name" pattern="[a-zA-Z'-'\s]*" required="" oninvalid="this.setCustomValidity('Please Enter Valid Name')" oninput="setCustomValidity('')">
                        </div>
                        <br>
                        <div class="form-group">
                            <label class="label" for="email">E-mail</label>
                            <input type="email" name="email" class="form-control" value="<?php echo $_SESSION['email'] ?>" placeholder="Enter your Email" name="email" class="form-control" readonly>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="form-subject">Mobile No.</label>
                            <input value="<?php echo $_SESSION['mobile'] ?>" type="text" id="mobile" name="mobile" class="form-control effect-16" pattern="^[7-9]\d{9}$" required="" maxlength="10" oninvalid="this.setCustomValidity('Please Enter Valid Number start from 9/8/7')" oninput="setCustomValidity('')" maxlength="10">
                        </div>

                        <br>
                        <div class="form-group">
                            <label for="form-address">Address</label>
                            <textarea class="form-control" name="address" id="form-address" placeholder="Address" required></textarea>
                        </div>
                        <br>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="Pay_Mode" value="COD" id="Pay_Mode2" checked required>
                            <label class="form-check-label" for="Pay_Mode2">
                                Pay On delivery
                            </label>
                        </div>
                        <div>
                            <input type="hidden" name="Total" id="final" value="final">

                            
                        </div>
                        <br>
                        <button class="btn btn-primary btn-block" name="purchase" onclick="myFunction()" >Purchase</button>
                        <br>
                    </form>
                <?php
                }
                ?>
            </div>


        </div>

    </div>
    

    <script>
        var gt = 0;
        var iprice = document.getElementsByClassName('iprice');
        var iquantity = document.getElementsByClassName('iquantity');
        var itotal = document.getElementsByClassName('itotal');
        var gtotal = document.getElementById('gtotal');
        var gst = document.getElementById('gst');
        var final = document.getElementById('final');

        function subTotal() {
            gt = 0;

            for (i = 0; i < iprice.length; i++) {
                itotal[i].innerText = (iprice[i].value) * (iquantity[i].value);
                gt = gt + (iprice[i].value) * (iquantity[i].value);
            }
            gst.innerText = gt * 0.18;
            gtotal.innerText = gt;

            final.innerText = (gt * 0.18) + gt;
        }

        subTotal();
    </script>


    
<script>
        var preloader = document.getElementById("loading");

        function myFunction() {
            preloader.style.display = 'none';
        };
    </script>


    

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>



    <!--footer-->

</body>

</html>