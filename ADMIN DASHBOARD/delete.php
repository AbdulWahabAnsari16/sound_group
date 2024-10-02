<?php
include 'conn.php';
$uId = $_GET['u_id'];
$sqlDel= "DELETE FROM `user` WHERE `u_id` = $uId";
$res = mysqli_query($conn,$sqlDel);
if($res){
    echo "<script>window.location.href='all_users.php'</script>";
}
$mus_id = $_GET['mus_id'];
$sqlDel2 = "DELETE FROM `music` WHERE `mus_id` = $mus_id";
$res2 = mysqli_query($conn,$sqlDel2);
if($res2){
    echo "<script>window.location.href='all_music.php'</script>";
}
?>
