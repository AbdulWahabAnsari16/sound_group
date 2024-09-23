<?php
session_start();
session_unset();
session_destroy();
header('location: pages/samples/login.php');
// echo "<script>window.location.href = 'pages/samples/login.php'</script>";
?>