<?php
session_start();
include 'header.php';
include 'conn.php'; 
if(isset($_POST['verify'])){
    $code  = $_POST['vcode'];
    $sql = "SELECT * FROM `user` where u_v_code = '$code'";
    $res = mysqli_query($conn,$sql);
	$row = mysqli_fetch_array($res);
    if(mysqli_num_rows($res)> 0){
		$_SESSION['e'] = $row['u_email'];
        echo "<script>
    alert('Verified');
	window.location.href = '../index.php';
</script>";

    }
    else{
        echo "<script>
        alert('Invalid Verification Code');
    </script>";
    }
}

?>

	<!-- main content -->
	<main class="main">
		<div class="container-fluid">
			<div class="row row--grid">
				<!-- breadcrumb -->
				<div class="col-12">
					<ul class="breadcrumb">
						<li class="breadcrumb__item"><a href="index.php">Home</a></li>
						<li class="breadcrumb__item breadcrumb__item--active">Verify</li>
					</ul>
				</div>
				<!-- end breadcrumb -->

				<!-- sign in -->
				<div class="col-12">
					<div class="sign">
						<div class="sign__content">
							<!-- authorization form -->
							<form action="" class="sign__form" method="post">
								<a href="index.php" class="sign__logo">
									<img src="../icon/favicon-32x32.png" alt="" height="75">
								</a>

								<div class="sign__group">
									<input type="text" class="sign__input" placeholder="Enter Verification Code" name="vcode" required>
								</div>
								<h3>Check out your email and get your verification code</h3>
                                <button class="sign__btn" type="submit" name="verify">Verify</button>
							</form>
							<!-- end authorization form -->
						</div>
					</div>
				</div>
				<!-- end sign in -->
			</div>
		</div>
	</main>
	<!-- end main content -->

	<!-- footer -->
	<?php 
	include 'footer.php'; 
	?>
	<!-- end footer -->