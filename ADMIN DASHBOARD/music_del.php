<?php
include 'conn.php';

$mus_id = $_GET['mus_id'];
$sqlDel = "DELETE FROM `music` WHERE `mus_id` = $mus_id";
$res2 = mysqli_query($conn,$sqlDel);
if($res2){
    echo "<script>window.location.href='all_music.php'</script>";
}
?>