<?php 
include '../inc/db_config.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="DELETE from item WHERE item_id=$id";
    $result=mysqli_query($con,$sql);
    echo "<script>
alert('Item removed successfully');
window.location.href='../restaurant.php';
</script>";
}
?>