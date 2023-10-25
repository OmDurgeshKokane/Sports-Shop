<?php

require("dbcon.php");


function row_remove($img){
    if(unlink($img)){

    echo '<script>alert("Remove fail !!")</script>';
    header("location: manage_user_manager.php");
        
        exit;

    }
    
}


if(isset($_GET['rem']) && $_GET['rem']>0)
{
    $query="SELECT * FROM `user_orders` WHERE `Order_id`='$_GET[rem]' ";
    $result=mysqli_query($con,$query);
    $fetch=mysqli_fetch_assoc($result);


    row_remove($fetch['email']);

    $query="DELETE FROM `user_orders` WHERE `Order_id`='$_GET[rem]'";
    if(mysqli_query($con,$query)){
        echo '<script>alert("user deleted  !!")</script>';
        header("location: manage_user_manager.php");
    }
    else{
        echo '<script>alert(" user remove fail !!")</script>';
        header("location: manage_user_manager.php");
    }
}