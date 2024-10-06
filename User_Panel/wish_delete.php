<?php
include 'conn.php';
$wish_id = $_GET['wish_id'];
$sqlDelete = "DELETE FROM `wishlist` WHERE `wish_id` = $wish_id";
$res = mysqli_query($conn,$sqlDelete);
if($res){
    echo "<script>window.location.href='wishlist.php'</script>";
}
?>