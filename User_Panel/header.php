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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

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
				<div class="header__action profile__avatar">
					<a href="profile.php">
						<img src="img/avatar.svg" alt="">
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
				<a href="albums.php" class="sidebar__nav-link"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M21.65,2.24a1,1,0,0,0-.8-.23l-13,2A1,1,0,0,0,7,5V15.35A3.45,3.45,0,0,0,5.5,15,3.5,3.5,0,1,0,9,18.5V10.86L20,9.17v4.18A3.45,3.45,0,0,0,18.5,13,3.5,3.5,0,1,0,22,16.5V3A1,1,0,0,0,21.65,2.24ZM5.5,20A1.5,1.5,0,1,1,7,18.5,1.5,1.5,0,0,1,5.5,20Zm13-2A1.5,1.5,0,1,1,20,16.5,1.5,1.5,0,0,1,18.5,18ZM20,7.14,9,8.83v-3L20,4.17Z"/></svg> <span>Albums</span></a>
			</li>
			<li class="sidebar__nav-item">
				<a href="wishlist.php" class="sidebar__nav-link"><svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 122.88 107.3"><path d="M65.58,90.82l10.49,9.91L65.58,90.82Zm-2.52,5.76a3.06,3.06,0,0,1,0,6.12H7.12a7.09,7.09,0,0,1-5-2.1h0a7.1,7.1,0,0,1-2.09-5V7.12a7.06,7.06,0,0,1,2.1-5h0A7.1,7.1,0,0,1,7.12,0H91.63a7.1,7.1,0,0,1,5,2.09l.21.23a7.16,7.16,0,0,1,1.88,4.8V49a3.06,3.06,0,0,1-6.12,0V7.12a1,1,0,0,0-.22-.62l-.08-.08a1,1,0,0,0-.7-.3H7.12a1,1,0,0,0-.7.3h0a1,1,0,0,0-.29.7V95.58a1,1,0,0,0,.3.7h0a1,1,0,0,0,.7.29ZM95.44,67.42c3.54-3.7,6-6.89,11.5-7.52,10.24-1.17,19.65,9.32,14.47,19.64-1.47,2.94-4.47,6.44-7.78,9.87C110,93.18,106,96.87,103.14,99.67l-7.69,7.63-6.36-6.12C81.44,93.82,69,84.54,68.55,73.06c-.28-8,6.07-13.2,13.37-13.11,6.53.09,9.29,3.33,13.52,7.47Zm-71.66,0A3.62,3.62,0,1,1,20.16,71a3.62,3.62,0,0,1,3.62-3.62Zm14.71,7.27a3.15,3.15,0,0,1,0-6.19h11.8a3.15,3.15,0,0,1,0,6.19ZM23.78,46a3.62,3.62,0,1,1-3.62,3.61A3.62,3.62,0,0,1,23.78,46Zm14.71,6.94a3.1,3.1,0,0,1,0-6.11H62.58a3.1,3.1,0,0,1,0,6.11ZM23.78,24.6a3.62,3.62,0,1,1-3.62,3.62,3.62,3.62,0,0,1,3.62-3.62Zm14.71,6.65a2.84,2.84,0,0,1-2.57-3.05,2.85,2.85,0,0,1,2.57-3.06H72.38A2.85,2.85,0,0,1,75,28.2a2.84,2.84,0,0,1-2.57,3.05Z"/></svg> <span>Wishlist</span></a>
			</li>

			<!-- collapse -->
			<li class="sidebar__nav-item">
				<a class="sidebar__nav-link" data-toggle="collapse" href="#collapseMenu1" role="button" aria-expanded="false" aria-controls="collapseMenu1"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M19,5.5H12.72l-.32-1a3,3,0,0,0-2.84-2H5a3,3,0,0,0-3,3v13a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V8.5A3,3,0,0,0,19,5.5Zm1,13a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V5.5a1,1,0,0,1,1-1H9.56a1,1,0,0,1,.95.68l.54,1.64A1,1,0,0,0,12,7.5h7a1,1,0,0,1,1,1Z"/></svg> <span>Pages</span> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M17,9.17a1,1,0,0,0-1.41,0L12,12.71,8.46,9.17a1,1,0,0,0-1.41,0,1,1,0,0,0,0,1.42l4.24,4.24a1,1,0,0,0,1.42,0L17,10.59A1,1,0,0,0,17,9.17Z"/></svg></a>

				<div class="collapse" id="collapseMenu1">
					<ul class="sidebar__menu sidebar__menu--scroll">
						<!-- <li><a href="artist.php">Artist</a></li> -->
						<li><a href="albums.php">Albums</a></li>
						<li><a href="profile.php">Profile</a></li>
						<li><a href="about.php">About</a></li>
						<li><a href="contacts.php">Contacts</a></li>
						<li><a href="privacy.php">Privacy policy</a></li>
						<!-- <li><a href="signin.php">Sign in</a></li>
						<li><a href="signup.php">Sign up</a></li>
						<li><a href="phpmailer/forgot.php">Forgot password</a></li> -->
						<!-- <li><a href="404.php">404 Page</a></li> -->
					</ul>
				</div>
			</li>
			<!-- end collapse -->


		</ul>
		<!-- end sidebar nav -->
	</div>
	<!-- end sidebar -->

	<!-- player -->
	<!-- <div class="player">
		<div class="player__cover">
			<img src="img/covers/cover.svg" alt="">
		</div>

		<div class="player__content">
			<span class="player__track"><b class="player__title">Epic Cinematic</b> – <span class="player__artist">AudioPizza</span></span>
			<audio src="http://blast.volkovdesign.com/audio/12071151_epic-cinematic-trailer_by_audiopizza_preview.mp3" id="audio" controls></audio>
		</div>
	</div>

	<button class="player__btn" type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M21.65,2.24a1,1,0,0,0-.8-.23l-13,2A1,1,0,0,0,7,5V15.35A3.45,3.45,0,0,0,5.5,15,3.5,3.5,0,1,0,9,18.5V10.86L20,9.17v4.18A3.45,3.45,0,0,0,18.5,13,3.5,3.5,0,1,0,22,16.5V3A1,1,0,0,0,21.65,2.24ZM5.5,20A1.5,1.5,0,1,1,7,18.5,1.5,1.5,0,0,1,5.5,20Zm13-2A1.5,1.5,0,1,1,20,16.5,1.5,1.5,0,0,1,18.5,18ZM20,7.14,9,8.83v-3L20,4.17Z"/></svg> Player</button> -->
	<!-- end player -->