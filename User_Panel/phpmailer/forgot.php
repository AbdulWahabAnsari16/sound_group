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
						<li class="breadcrumb__item"><a href="../../index.php">Home</a></li>
						<li class="breadcrumb__item breadcrumb__item--active">Forgot password</li>
					</ul>
				</div>
				<!-- end breadcrumb -->

				<!-- authorization form -->
				<div class="col-12">
					<div class="sign">
						<div class="sign__content">
							<form action="forgotpass/send.php" class="sign__form" method="post">
								<a href="../index.php" class="sign__logo">
									<img src="../icon/favicon-32x32.png" alt="">
								</a>

								<div class="sign__group">
									<input type="text" class="sign__input" placeholder="Email" name="em">
								</div>

								<div class="sign__group sign__group--checkbox">
									<input id="remember" name="remember" type="checkbox" checked="checked">
									<label for="remember">I agree to the <a href="../../privacy.php">Privacy Policy</a></label>
								</div>
								
								<button class="sign__btn" type="submit" name="send">Send</button>

								<span class="sign__text">We will send a password to your Email</span>
							</form>
						</div>
					</div>
				</div>
				<!-- end authorization form -->
			</div>
		</div>
	</main>
	<!-- end main content -->

	<!-- footer -->
	<?php 
	include 'footer.php'; 
	?>
	<!-- end footer -->