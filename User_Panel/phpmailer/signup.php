<?php
include 'header.php';
?>
<!-- main content -->
	<main class="main">
		<div class="container-fluid">
			<div class="row row--grid">
				<!-- breadcrumb -->
				<div class="col-12">
					<ul class="breadcrumb">
						<li class="breadcrumb__item"><a href="../index.php">Home</a></li>
						<li class="breadcrumb__item breadcrumb__item--active">Sign up</li>
					</ul>
				</div>
				<!-- end breadcrumb -->

				<!-- registration form -->
				<div class="col-12">
					<div class="sign">
						<div class="sign__content">
							<form action="send.php" method="post" class="sign__form">
								<a href="../index.php" class="sign__logo">
									<img src="../icon/favicon-32x32.png" alt="" height="75">
								</a>

								<div class="sign__group">
									<input type="text" class="sign__input" placeholder="Name" name="uname" required>
								</div>

								<div class="sign__group">
									<input type="email" class="sign__input" placeholder="Email" name="email" required>
								</div>

								<div class="sign__group">
									<input type="password" class="sign__input" placeholder="Password" name="pass" required>
								</div>

								<div class="sign__group sign__group--checkbox">
									<input id="remember" name="remember" type="checkbox" checked="checked">
									<label for="remember">I agree to the <a href="../privacy.php">Privacy Policy</a></label>
								</div>
								
								<button class="sign__btn" type="submit" name="send">Sign up</button>


								<span class="sign__text">Already have an account? <a href="../signin.php">Sign in!</a></span>
							</form>
						</div>
					</div>
				</div>
				<!-- end registration form -->
			</div>
		</div>
	</main>
	<!-- end main content -->

	<!-- footer -->
	<?php 
	include 'footer.php'; 
	?>
	<!-- end footer -->