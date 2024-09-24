<?php 
session_start();
include 'header.php';
include 'conn.php';
if(!$_SESSION['e']) {

	echo "<script>
    window.location.href = 'signin.php';
  </script>";
}else{
?>

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