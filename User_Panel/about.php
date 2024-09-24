<?php 
session_start();
include 'header.php';
include 'conn.php';
if(!$_SESSION['e']){
	echo "<script>
    window.location.href = 'signin.php';
  </script>";
}else{
?>

	<!-- main content -->
	<main class="main">
		<div class="container-fluid">
			<div class="row row--grid">
				<!-- breadcrumb -->
				<div class="col-12">
					<ul class="breadcrumb">
						<li class="breadcrumb__item"><a href="index.php">Home</a></li>
						<li class="breadcrumb__item breadcrumb__item--active">About</li>
					</ul>
				</div>
				<!-- end breadcrumb -->

				<!-- title -->
				<div class="col-12">
					<div class="main__title">
						<h1>Online music</h1>

						<p>Many desktop publishing packages and <a href="#">web page</a> editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>

						<p>All the Lorem Ipsum generators on the <b>Internet</b> tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
					</div>
				</div>
				<!-- end title -->

				<div class="col-12 col-lg-4">
					<div class="step">
						<span class="step__number">01</span>
						<h3 class="step__title">Create an account</h3>
						<p class="step__text">It to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining</p>
					</div>
				</div>
				<div class="col-12 col-lg-4">
					<div class="step">
						<span class="step__number">03</span>
						<h3 class="step__title">Enjoy Sound_Group music</h3>
						<p class="step__text">It to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting</p>
					</div>
				</div>

				<div class="col-12">
					<a href="signup.php" class="main__load">Sign up</a>
				</div>
			</div>

			<div class="row row--grid">
				<!-- title -->
				<div class="col-12">
					<div class="main__title">
						<h2>Subscribe features</h2>

						<p>Many desktop publishing packages and <a href="#">web page</a> editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
					</div>
				</div>
				<!-- end title -->

				<div class="col-12 col-md-6 col-lg-4 col-xl-3">
					<div class="feature">
						<span class="feature__icon feature__icon--blue">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M19,7H18V6a3,3,0,0,0-3-3H5A3,3,0,0,0,2,6H2V18a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V10A3,3,0,0,0,19,7ZM5,5H15a1,1,0,0,1,1,1V7H5A1,1,0,0,1,5,5ZM20,15H19a1,1,0,0,1,0-2h1Zm0-4H19a3,3,0,0,0,0,6h1v1a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V8.83A3,3,0,0,0,5,9H19a1,1,0,0,1,1,1Z"/></svg>
						</span>
						<h3 class="feature__title">Instant conclusion</h3>
						<p class="feature__text">It to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining</p>
					</div>
				</div>

				<div class="col-12 col-md-6 col-lg-4 col-xl-3">
					<div class="feature">
						<span class="feature__icon feature__icon--purple">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20,2H10A3,3,0,0,0,7,5v7a3,3,0,0,0,3,3H20a3,3,0,0,0,3-3V5A3,3,0,0,0,20,2Zm1,10a1,1,0,0,1-1,1H10a1,1,0,0,1-1-1V5a1,1,0,0,1,1-1H20a1,1,0,0,1,1,1ZM17.5,8a1.49,1.49,0,0,0-1,.39,1.5,1.5,0,1,0,0,2.22A1.5,1.5,0,1,0,17.5,8ZM16,17a1,1,0,0,0-1,1v1a1,1,0,0,1-1,1H4a1,1,0,0,1-1-1V15H4a1,1,0,0,0,0-2H3V12a1,1,0,0,1,1-1A1,1,0,0,0,4,9a3,3,0,0,0-3,3v7a3,3,0,0,0,3,3H14a3,3,0,0,0,3-3V18A1,1,0,0,0,16,17ZM6,18H7a1,1,0,0,0,0-2H6a1,1,0,0,0,0,2Z"/></svg>
						</span>
						<h3 class="feature__title">Create an account</h3>
						<p class="feature__text">It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially</p>
					</div>
				</div>

				<div class="col-12 col-md-6 col-lg-4 col-xl-3">
					<div class="feature">
						<span class="feature__icon">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M21.65,2.24a1,1,0,0,0-.8-.23l-13,2A1,1,0,0,0,7,5V15.35A3.45,3.45,0,0,0,5.5,15,3.5,3.5,0,1,0,9,18.5V10.86L20,9.17v4.18A3.45,3.45,0,0,0,18.5,13,3.5,3.5,0,1,0,22,16.5V3A1,1,0,0,0,21.65,2.24ZM5.5,20A1.5,1.5,0,1,1,7,18.5,1.5,1.5,0,0,1,5.5,20Zm13-2A1.5,1.5,0,1,1,20,16.5,1.5,1.5,0,0,1,18.5,18ZM20,7.14,9,8.83v-3L20,4.17Z"/></svg>
						</span>
						<h3 class="feature__title">Enjoy Blast music</h3>
						<p class="feature__text">Various versions have evolved over the years, sometimes by accident, sometimes on purpose</p>
					</div>
				</div>

				<div class="col-12 col-md-6 col-lg-4 col-xl-3">
					<div class="feature">
						<span class="feature__icon">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M19.63,3.65a1,1,0,0,0-.84-.2,8,8,0,0,1-6.22-1.27,1,1,0,0,0-1.14,0A8,8,0,0,1,5.21,3.45a1,1,0,0,0-.84.2A1,1,0,0,0,4,4.43v7.45a9,9,0,0,0,3.77,7.33l3.65,2.6a1,1,0,0,0,1.16,0l3.65-2.6A9,9,0,0,0,20,11.88V4.43A1,1,0,0,0,19.63,3.65ZM18,11.88a7,7,0,0,1-2.93,5.7L12,19.77,8.93,17.58A7,7,0,0,1,6,11.88V5.58a10,10,0,0,0,6-1.39,10,10,0,0,0,6,1.39ZM13.54,9.59l-2.69,2.7-.89-.9a1,1,0,0,0-1.42,1.42l1.6,1.6a1,1,0,0,0,1.42,0L15,11a1,1,0,0,0-1.42-1.42Z"/></svg>
						</span>
						<h3 class="feature__title">No contracts, no risk</h3>
						<p class="feature__text">Various versions have evolved over the years, sometimes by accident, sometimes on purpose</p>
					</div>
				</div>

				<div class="col-12 col-md-6 col-lg-4 col-xl-3">
					<div class="feature">
						<span class="feature__icon">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12,3A10,10,0,0,0,2,13v7a1,1,0,0,0,1,1H6a3,3,0,0,0,3-3V16a3,3,0,0,0-3-3H4a8,8,0,0,1,16,0H18a3,3,0,0,0-3,3v2a3,3,0,0,0,3,3h3a1,1,0,0,0,1-1V13A10,10,0,0,0,12,3ZM6,15a1,1,0,0,1,1,1v2a1,1,0,0,1-1,1H4V15Zm14,4H18a1,1,0,0,1-1-1V16a1,1,0,0,1,1-1h2Z"/></svg>
						</span>
						<h3 class="feature__title">Valid shares only</h3>
						<p class="feature__text">Various versions have evolved over the years, sometimes by accident, sometimes on purpose</p>
					</div>
				</div>
		</div>
	</main>
	<!-- end main content -->

	<!-- footer -->
	<?php 
	include 'footer.php'; 
		}
	?>
	<!-- end footer -->
