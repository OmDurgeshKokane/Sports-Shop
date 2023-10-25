<?php

require("dbcon.php");


function row_remove($img){
    if(unlink($img)){

    echo '<script>alert("Remove fail !!")</script>';
    header("location: manage_register_user.php");
        
        exit;

    }
    
}


if(isset($_GET['rem']) && $_GET['rem']>0)
{
    $query="SELECT * FROM `register_login` WHERE `id`='$_GET[rem]' ";
    $result=mysqli_query($con,$query);
    $fetch=mysqli_fetch_assoc($result);


    row_remove($fetch['email']);

    $query="DELETE FROM `register_login` WHERE `id`='$_GET[rem]'";
    if(mysqli_query($con,$query)){
        echo '<script>alert("user deleted  !!")</script>';
        header("location: manage_register_user.php");
    }
    else{
        echo '<script>alert(" user remove fail !!")</script>';
        header("location: manage_register_user.php");
    }
}