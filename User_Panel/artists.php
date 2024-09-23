<?php 
session_start();
include 'conn.php';
if(!$_SESSION['e']){
	echo "<script>
    window.location.href = 'signin.php';
  </script>";
}else{
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- CSS -->
	<link rel="stylesheet" href="css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/select2.min.css">
	<link rel="stylesheet" href="css/paymentfont.min.css">
	<link rel="stylesheet" href="css/slider-radio.css">
	<link rel="stylesheet" href="css/plyr.css">
	<link rel="stylesheet" href="css/main.css">

	<!-- Favicons -->
	<link rel="icon" type="image/png" href="icon/favicon-32x32.png" sizes="32x32">
	<link rel="apple-touch-icon" href="icon/favicon-32x32.png">

	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="Dmitry Volkov">
	<title>Sound_Group</title>

</head>
<body>
	<!-- header -->
	<header class="header">
		<div class="header__content">
			<div class="header__log">
				<a href="index.php">
					<img src="icon/favicon-32x32.png" alt="" width="30" height="30">
				</a>
			</div>

			<nav class="header__nav">
				<a href="profile.php">Profile</a>
				<a href="about.php">About</a>
				<a href="contacts.php">Contacts</a>
			</nav>

			<form action="#" class="header__search">
				<input type="text" placeholder="Artist, track or podcast">
				<button type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M21.71,20.29,18,16.61A9,9,0,1,0,16.61,18l3.68,3.68a1,1,0,0,0,1.42,0A1,1,0,0,0,21.71,20.29ZM11,18a7,7,0,1,1,7-7A7,7,0,0,1,11,18Z"/></svg></button>
				<button type="button" class="close"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M13.41,12l6.3-6.29a1,1,0,1,0-1.42-1.42L12,10.59,5.71,4.29A1,1,0,0,0,4.29,5.71L10.59,12l-6.3,6.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0L12,13.41l6.29,6.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42Z"/></svg></button>
			</form>

			<div class="header__actions">
				<div class="header__action header__action--search">
					<button class="header__action-btn" type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M21.71,20.29,18,16.61A9,9,0,1,0,16.61,18l3.68,3.68a1,1,0,0,0,1.42,0A1,1,0,0,0,21.71,20.29ZM11,18a7,7,0,1,1,7-7A7,7,0,0,1,11,18Z"/></svg></button>
				</div>

				<div class="header__action header__action--note">
					<span>17</span>
					<a href="#" class="header__action-btn"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M19.05566,2h-14a3.00328,3.00328,0,0,0-3,3V19a3.00328,3.00328,0,0,0,3,3h14a3.00328,3.00328,0,0,0,3-3V5A3.00328,3.00328,0,0,0,19.05566,2Zm-14,2h14a1.001,1.001,0,0,1,1,1v8H17.59082a1.99687,1.99687,0,0,0-1.66406.89062L14.52051,16H9.59082L8.18457,13.89062A1.99687,1.99687,0,0,0,6.52051,13H4.05566V5A1.001,1.001,0,0,1,5.05566,4Zm14,16h-14a1.001,1.001,0,0,1-1-1V15H6.52051l1.40625,2.10938A1.99687,1.99687,0,0,0,9.59082,18h4.92969a1.99687,1.99687,0,0,0,1.66406-.89062L17.59082,15h2.46484v4A1.001,1.001,0,0,1,19.05566,20Z"/></svg></a>

					<div class="header__drop">
						<a href="#" class="header__all">View all</a>
						<div class="header__note header__note--succ">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M14.72,8.79l-4.29,4.3L8.78,11.44a1,1,0,1,0-1.41,1.41l2.35,2.36a1,1,0,0,0,.71.29,1,1,0,0,0,.7-.29l5-5a1,1,0,0,0,0-1.42A1,1,0,0,0,14.72,8.79ZM12,2A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8,8,0,0,1,12,20Z"/></svg>
							<p><a href="#modal-info2" class="open-modal">Payment #51</a> was successful!</p>
							<span>1 hour ago</span>
						</div>
						<div class="header__note header__note--fail">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M15.71,8.29a1,1,0,0,0-1.42,0L12,10.59,9.71,8.29A1,1,0,0,0,8.29,9.71L10.59,12l-2.3,2.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0L12,13.41l2.29,2.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42L13.41,12l2.3-2.29A1,1,0,0,0,15.71,8.29Zm3.36-3.36A10,10,0,1,0,4.93,19.07,10,10,0,1,0,19.07,4.93ZM17.66,17.66A8,8,0,1,1,20,12,7.95,7.95,0,0,1,17.66,17.66Z"/></svg>
							<p><a href="#modal-info3" class="open-modal">Payment #50</a> failed!</p>
							<span>2 hours ago</span>
						</div>
						<div class="header__note header__note--info">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12,2A10,10,0,1,0,22,12,10.01114,10.01114,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8.00917,8.00917,0,0,1,12,20Zm0-8.5a1,1,0,0,0-1,1v3a1,1,0,0,0,2,0v-3A1,1,0,0,0,12,11.5Zm0-4a1.25,1.25,0,1,0,1.25,1.25A1.25,1.25,0,0,0,12,7.5Z"/></svg>
							<p><a href="#modal-info4" class="open-modal">Example</a> of notification.</p>
							<span>2 hours ago</span>
						</div>
						<div class="header__note header__note--gift">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18,7h-.35A3.45,3.45,0,0,0,18,5.5a3.49,3.49,0,0,0-6-2.44A3.49,3.49,0,0,0,6,5.5,3.45,3.45,0,0,0,6.35,7H6a3,3,0,0,0-3,3v2a1,1,0,0,0,1,1H5v6a3,3,0,0,0,3,3h8a3,3,0,0,0,3-3V13h1a1,1,0,0,0,1-1V10A3,3,0,0,0,18,7ZM11,20H8a1,1,0,0,1-1-1V13h4Zm0-9H5V10A1,1,0,0,1,6,9h5Zm0-4H9.5A1.5,1.5,0,1,1,11,5.5Zm2-1.5A1.5,1.5,0,1,1,14.5,7H13ZM17,19a1,1,0,0,1-1,1H13V13h4Zm2-8H13V9h5a1,1,0,0,1,1,1Z"/></svg>
							<p><a href="#modal-info5" class="open-modal">You have received a gift!</a></p>
							<span>4 hours ago</span>
						</div>
					</div>
				</div>
				<div class="header__action header__action--signin">
					<a class="header__action-btn" href="signin.php">
						<span>Sign in</span>
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20,12a1,1,0,0,0-1-1H11.41l2.3-2.29a1,1,0,1,0-1.42-1.42l-4,4a1,1,0,0,0-.21.33,1,1,0,0,0,0,.76,1,1,0,0,0,.21.33l4,4a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42L11.41,13H19A1,1,0,0,0,20,12ZM17,2H7A3,3,0,0,0,4,5V19a3,3,0,0,0,3,3H17a3,3,0,0,0,3-3V16a1,1,0,0,0-2,0v3a1,1,0,0,1-1,1H7a1,1,0,0,1-1-1V5A1,1,0,0,1,7,4H17a1,1,0,0,1,1,1V8a1,1,0,0,0,2,0V5A3,3,0,0,0,17,2Z"/></svg>
					</a>
				</div>
			</div>

			<button class="header__btn" type="button">
				<span></span>
				<span></span>
				<span></span>
			</button>
		</div>
	</header>
	<!-- end header -->

	<!-- sidebar -->
	<div class="sidebar">
		<!-- sidebar logo -->
		<div class="sidebar__logo">
			<img src="icon/favicon-32x32.png" alt="" width="30" height="30">
		</div>
		<!-- end sidebar logo -->

		<!-- sidebar nav -->
		<ul class="sidebar__nav">
			<li class="sidebar__nav-item">
				<a href="index.php" class="sidebar__nav-link sidebar__nav-link--active"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20,8h0L14,2.74a3,3,0,0,0-4,0L4,8a3,3,0,0,0-1,2.26V19a3,3,0,0,0,3,3H18a3,3,0,0,0,3-3V10.25A3,3,0,0,0,20,8ZM14,20H10V15a1,1,0,0,1,1-1h2a1,1,0,0,1,1,1Zm5-1a1,1,0,0,1-1,1H16V15a3,3,0,0,0-3-3H11a3,3,0,0,0-3,3v5H6a1,1,0,0,1-1-1V10.25a1,1,0,0,1,.34-.75l6-5.25a1,1,0,0,1,1.32,0l6,5.25a1,1,0,0,1,.34.75Z"></path></svg> <span>Home</span></a>
			</li>

			<li class="sidebar__nav-item">
				<a href="artists.php" class="sidebar__nav-link"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12.3,12.22A4.92,4.92,0,0,0,14,8.5a5,5,0,0,0-10,0,4.92,4.92,0,0,0,1.7,3.72A8,8,0,0,0,1,19.5a1,1,0,0,0,2,0,6,6,0,0,1,12,0,1,1,0,0,0,2,0A8,8,0,0,0,12.3,12.22ZM9,11.5a3,3,0,1,1,3-3A3,3,0,0,1,9,11.5Zm9.74.32A5,5,0,0,0,15,3.5a1,1,0,0,0,0,2,3,3,0,0,1,3,3,3,3,0,0,1-1.5,2.59,1,1,0,0,0-.5.84,1,1,0,0,0,.45.86l.39.26.13.07a7,7,0,0,1,4,6.38,1,1,0,0,0,2,0A9,9,0,0,0,18.74,11.82Z"/></svg> <span>Artists</span></a>
			</li>

			<li class="sidebar__nav-item">
				<a href="releases.php" class="sidebar__nav-link"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M21.65,2.24a1,1,0,0,0-.8-.23l-13,2A1,1,0,0,0,7,5V15.35A3.45,3.45,0,0,0,5.5,15,3.5,3.5,0,1,0,9,18.5V10.86L20,9.17v4.18A3.45,3.45,0,0,0,18.5,13,3.5,3.5,0,1,0,22,16.5V3A1,1,0,0,0,21.65,2.24ZM5.5,20A1.5,1.5,0,1,1,7,18.5,1.5,1.5,0,0,1,5.5,20Zm13-2A1.5,1.5,0,1,1,20,16.5,1.5,1.5,0,0,1,18.5,18ZM20,7.14,9,8.83v-3L20,4.17Z"/></svg> <span>Releases</span></a>
			</li>

			<!-- collapse -->
			<li class="sidebar__nav-item">
				<a class="sidebar__nav-link" data-toggle="collapse" href="#collapseMenu1" role="button" aria-expanded="false" aria-controls="collapseMenu1"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M19,5.5H12.72l-.32-1a3,3,0,0,0-2.84-2H5a3,3,0,0,0-3,3v13a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V8.5A3,3,0,0,0,19,5.5Zm1,13a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V5.5a1,1,0,0,1,1-1H9.56a1,1,0,0,1,.95.68l.54,1.64A1,1,0,0,0,12,7.5h7a1,1,0,0,1,1,1Z"/></svg> <span>Pages</span> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M17,9.17a1,1,0,0,0-1.41,0L12,12.71,8.46,9.17a1,1,0,0,0-1.41,0,1,1,0,0,0,0,1.42l4.24,4.24a1,1,0,0,0,1.42,0L17,10.59A1,1,0,0,0,17,9.17Z"/></svg></a>

				<div class="collapse" id="collapseMenu1">
					<ul class="sidebar__menu sidebar__menu--scroll">
						<li><a href="artist.php">Artist</a></li>
						<li><a href="release.php">Release</a></li>
						<li><a href="profile.php">Profile</a></li>
						<li><a href="about.php">About</a></li>
						<li><a href="contacts.php">Contacts</a></li>
						<li><a href="privacy.php">Privacy policy</a></li>
						<li><a href="signin.php">Sign in</a></li>
						<li><a href="signup.php">Sign up</a></li>
						<li><a href="forgot.php">Forgot password</a></li>
						<li><a href="404.php">404 Page</a></li>
					</ul>
				</div>
			</li>
			<!-- end collapse -->


		</ul>
		<!-- end sidebar nav -->
	</div>
	<!-- end sidebar -->
	
	<!-- player -->
	<!-- end player -->

	<!-- main content -->
	<main class="main">
		<div class="container-fluid">
			<!-- artists -->
			<div class="row row--grid">
				<!-- breadcrumb -->
				<div class="col-12">
					<ul class="breadcrumb">
						<li class="breadcrumb__item"><a href="index.php">Home</a></li>
						<li class="breadcrumb__item breadcrumb__item--active">Artists</li>
					</ul>
				</div>
				<!-- end breadcrumb -->

				<!-- title -->
				<div class="col-12">
					<div class="main__title main__title--page">
						<h1>Artists</h1>
					</div>
				</div>
				<!-- end title -->
			</div>

			<div class="row row--grid">
				<div class="col-12">
					<div class="main__filter">
						<form action="#" class="main__filter-search">
							<input type="text" placeholder="Search...">
							<button type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M21.71,20.29,18,16.61A9,9,0,1,0,16.61,18l3.68,3.68a1,1,0,0,0,1.42,0A1,1,0,0,0,21.71,20.29ZM11,18a7,7,0,1,1,7-7A7,7,0,0,1,11,18Z"/></svg></button>
						</form>

						<div class="main__filter-wrap">
							<select class="main__select" name="genres">
								<option value="all">All artists</option>
								<option value="legacy">Legacy artists</option>
								<option value="active">Active artists</option>
							</select>

							<select class="main__select" name="years">
								<option value="All genres">All genres</option>
								<option value="1">Alternative</option>
								<option value="2">Blues</option>
								<option value="3">Classical</option>
								<option value="4">Country</option>
								<option value="5">Electronic</option>
								<option value="6">Hip-Hop/Rap</option>
								<option value="7">Indie</option>
								<option value="8">Jazz</option>
								<option value="8">Latino</option>
								<option value="8">R&B/Soul</option>
								<option value="8">Rock</option>
							</select>
						</div>

						<div class="slider-radio">
							<input type="radio" name="grade" id="featured" checked="checked"><label for="featured">Featured</label>
							<input type="radio" name="grade" id="popular"><label for="popular">Popular</label>
							<input type="radio" name="grade" id="newest"><label for="newest">Newest</label>
						</div>
					</div>

					<div class="row row--grid">
						<div class="col-6 col-sm-4 col-md-3 col-xl-2">
							<a href="artist.php" class="artist">
								<div class="artist__cover">
									<img src="img/artists/artist1.jpg" alt="">
								</div>
								<h3 class="artist__title">BENEE Featuring</h3>
							</a>
						</div>

						<div class="col-6 col-sm-4 col-md-3 col-xl-2">
							<a href="artist.php" class="artist">
								<div class="artist__cover">
									<img src="img/artists/artist2.jpg" alt="">
								</div>
								<h3 class="artist__title">Jason Aldean</h3>
							</a>
						</div>

						<div class="col-6 col-sm-4 col-md-3 col-xl-2">
							<a href="artist.php" class="artist">
								<div class="artist__cover">
									<img src="img/artists/artist3.jpg" alt="">
								</div>
								<h3 class="artist__title">John Doe</h3>
							</a>
						</div>

						<div class="col-6 col-sm-4 col-md-3 col-xl-2">
							<a href="artist.php" class="artist">
								<div class="artist__cover">
									<img src="img/artists/artist4.jpg" alt="">
								</div>
								<h3 class="artist__title">Megan Thee</h3>
							</a>
						</div>

						<div class="col-6 col-sm-4 col-md-3 col-xl-2">
							<a href="artist.php" class="artist">
								<div class="artist__cover">
									<img src="img/artists/artist5.jpg" alt="">
								</div>
								<h3 class="artist__title">Stefflon Don</h3>
							</a>
						</div>

						<div class="col-6 col-sm-4 col-md-3 col-xl-2">
							<a href="artist.php" class="artist">
								<div class="artist__cover">
									<img src="img/artists/artist6.jpg" alt="">
								</div>
								<h3 class="artist__title">Juice WRLD</h3>
							</a>
						</div>

						<div class="col-6 col-sm-4 col-md-3 col-xl-2">
							<a href="artist.php" class="artist">
								<div class="artist__cover">
									<img src="img/artists/artist7.jpg" alt="">
								</div>
								<h3 class="artist__title">LOCASH</h3>
							</a>
						</div>

						<div class="col-6 col-sm-4 col-md-3 col-xl-2">
							<a href="artist.php" class="artist">
								<div class="artist__cover">
									<img src="img/artists/artist8.jpg" alt="">
								</div>
								<h3 class="artist__title">NLE Choppa</h3>
							</a>
						</div>

						<div class="col-6 col-sm-4 col-md-3 col-xl-2">
							<a href="artist.php" class="artist">
								<div class="artist__cover">
									<img src="img/artists/artist1.jpg" alt="">
								</div>
								<h3 class="artist__title">BENEE Featuring</h3>
							</a>
						</div>

						<div class="col-6 col-sm-4 col-md-3 col-xl-2">
							<a href="artist.php" class="artist">
								<div class="artist__cover">
									<img src="img/artists/artist2.jpg" alt="">
								</div>
								<h3 class="artist__title">Jason Aldean</h3>
							</a>
						</div>

						<div class="col-6 col-sm-4 col-md-3 col-xl-2">
							<a href="artist.php" class="artist">
								<div class="artist__cover">
									<img src="img/artists/artist3.jpg" alt="">
								</div>
								<h3 class="artist__title">John Doe</h3>
							</a>
						</div>

						<div class="col-6 col-sm-4 col-md-3 col-xl-2">
							<a href="artist.php" class="artist">
								<div class="artist__cover">
									<img src="img/artists/artist4.jpg" alt="">
								</div>
								<h3 class="artist__title">Megan Thee</h3>
							</a>
						</div>

						<div class="col-6 col-sm-4 col-md-3 col-xl-2">
							<a href="artist.php" class="artist">
								<div class="artist__cover">
									<img src="img/artists/artist5.jpg" alt="">
								</div>
								<h3 class="artist__title">Stefflon Don</h3>
							</a>
						</div>

						<div class="col-6 col-sm-4 col-md-3 col-xl-2">
							<a href="artist.php" class="artist">
								<div class="artist__cover">
									<img src="img/artists/artist6.jpg" alt="">
								</div>
								<h3 class="artist__title">Juice WRLD</h3>
							</a>
						</div>

						<div class="col-6 col-sm-4 col-md-3 col-xl-2">
							<a href="artist.php" class="artist">
								<div class="artist__cover">
									<img src="img/artists/artist7.jpg" alt="">
								</div>
								<h3 class="artist__title">LOCASH</h3>
							</a>
						</div>

						<div class="col-6 col-sm-4 col-md-3 col-xl-2">
							<a href="artist.php" class="artist">
								<div class="artist__cover">
									<img src="img/artists/artist8.jpg" alt="">
								</div>
								<h3 class="artist__title">NLE Choppa</h3>
							</a>
						</div>

						<div class="col-6 col-sm-4 col-md-3 col-xl-2">
							<a href="artist.php" class="artist">
								<div class="artist__cover">
									<img src="img/artists/artist1.jpg" alt="">
								</div>
								<h3 class="artist__title">BENEE Featuring</h3>
							</a>
						</div>

						<div class="col-6 col-sm-4 col-md-3 col-xl-2">
							<a href="artist.php" class="artist">
								<div class="artist__cover">
									<img src="img/artists/artist2.jpg" alt="">
								</div>
								<h3 class="artist__title">Jason Aldean</h3>
							</a>
						</div>
					</div>

					<button class="main__load" type="button">Load more</button>
				</div>
			</div>
			<!-- end artists -->
		</div>
	</main>
	<!-- end main content -->

	<!-- footer -->
	<?php 
	include 'footer.php'; 
		}
	?>
	<!-- end footer -->