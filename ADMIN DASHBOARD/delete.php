<?php
include 'conn.php';
$uId = $_GET['u_id'];
$sqlDel= "DELETE FROM `user` WHERE `u_id` = $uId";
$res = mysqli_query($conn,$sqlDel);
if($res){
    echo "<script>window.location.href='all_users.php'</script>";
}
?>
