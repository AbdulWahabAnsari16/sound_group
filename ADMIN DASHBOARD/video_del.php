<?php
include 'conn.php';

$vid_id = $_GET['vid_id'];
$sqlDel = "DELETE FROM `video` WHERE `vid_id` = $vid_id";
$res2 = mysqli_query($conn,$sqlDel);
if($res2){
    echo "<script>window.location.href='all_video.php'</script>";
}
?>