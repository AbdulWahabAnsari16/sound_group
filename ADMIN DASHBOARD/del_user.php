<?php
include 'conn.php';
$id = $_GET['id'];
$sqlDel= "DELETE FROM `user` WHERE `u_id` = $id";
$res = mysqli_query($conn,$sqlDel);
if($res){
    echo "<script>window.location.href='all_users.php'</script>";
}
?>
