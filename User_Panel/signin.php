<?php
session_start();
include 'header.php';
include 'conn.php';
if(isset($_POST['signIn'])){
	$em = $_POST['em'];
	$pass = $_POST['pass'];
	$sql = "SELECT * FROM `user` WHERE `u_email` = '$em'";
	$res = mysqli_query($conn,$sql);
	$row = mysqli_fetch_array($res);
	if(mysqli_num_rows($res) > 0){
		if(password_verify($pass,$row['u_password'])){
			$_SESSION['u_id'] = $row['u_id'];
			$_SESSION['n'] = $row['u_name'];
			$_SESSION['e'] = $row['u_email'];
			echo "<script>
    			window.location.href = 'index.php';
  				</script>";
		}
		else{
			echo "<script>
			alert('invalid password');
		  </script>";
		  }
		}else{
			echo "<script>
			alert('invalid email');
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
						<li class="breadcrumb__item breadcrumb__item--active">Sign in</li>
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
									<img src="icon/favicon-32x32.png" alt="" height="75">
								</a>

								<div class="sign__group">
									<input type="email" class="sign__input" placeholder="Email" name="em" required>
								</div>

								<div class="sign__group">
									<input type="password" class="sign__input" placeholder="Password" name="pass" required>
								</div>

								
								<button class="sign__btn" type="submit" name="signIn">Sign in</button>

								
								<span class="sign__text">Don't have an account? <a href="phpmailer/signup.php">Sign up!</a></span>

								<span class="sign__text"><a href="phpmailer/forgot.php">Forgot password?</a></span>
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
	<?php include 'footer.php'; ?>
	<!-- end footer -->