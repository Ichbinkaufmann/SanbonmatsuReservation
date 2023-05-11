<?php 
include '../admin/inc/db_config.php';
if(isset($_GET['cartid'])){
    $id=$_GET['cartid'];

    $sql="DELETE from item_cart WHERE cart_id=$id";
    $result=mysqli_query($con,$sql);
    header('location:../cart.php');
}
?>