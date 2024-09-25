<?php
session_start();
include '../header.php';
include '../conn.php'; 
if(isset($_POST['chgPass'])){
	$em = $_SESSION['em'];
    $cngpass = $_POST['newpass'];
	$passHash = password_hash($cngpass,PASSWORD_DEFAULT);
    $sqlUpdate = "UPDATE `user` SET `u_password`='$passHash' WHERE `u_email` = '$em'";
	$res = mysqli_query($conn,$sqlUpdate);
	echo "<script>
	window.location.href = '../../index.php';
	</script>";
}
?>

	<!-- main content -->
	<main class="main">
		<div class="container-fluid">
			<div class="row row--grid">
				<!-- breadcrumb -->
				<div class="col-12">
					<ul class="breadcrumb">
						<!-- <li class="breadcrumb__item"><a href="index.php">Home</a></li>
						<li class="breadcrumb__item breadcrumb__item--active">Verify</li> -->
					</ul>
				</div>
				<!-- end breadcrumb -->

				<!-- sign in -->
				<div class="col-12">
					<div class="sign">
						<div class="sign__content">
							<!-- authorization form -->
							<form action="" class="sign__form" method="post">
								<a href="../../index.php" class="sign__logo">
									<img src="../../icon/favicon-32x32.png" alt="" height="75">
								</a>

								<div class="sign__group">
									<input type="text" class="sign__input" placeholder="New Password" name="newpass" required>
								</div>
                                <button class="sign__btn" type="submit" name="chgPass">Change </button>
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
	include '../footer.php'; 
	?>
	<!-- end footer -->