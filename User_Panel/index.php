<?php 
session_start();
include 'header.php';
include 'conn.php';

if($_SESSION['e']){
$sqlSelect1 = "SELECT * FROM `artist` limit 5";
$res1 = mysqli_query($conn,$sqlSelect1);


$sqlSelect2 = "SELECT * FROM genre,artist WHERE  genre.art_id = artist.art_id ";
$res2 = mysqli_query($conn,$sqlSelect2);
}else{
$sqlSelect1 = "SELECT * FROM `artist` limit 2";
$res1 = mysqli_query($conn,$sqlSelect1);


$sqlSelect2 = "SELECT * FROM genre,artist WHERE  genre.art_id = artist.art_id";
$res2 = mysqli_query($conn,$sqlSelect2);
}
?>
	<!-- main content -->
	<main class="main">
		<div class="container-fluid">
			<!-- releases -->
			<section class="row row--grid">
				<!-- title -->
				<div class="col-12">
					<div class="main__title">
						<h2>New Releases</h2>

						<a href="releases.php" class="main__link">See all <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M17.92,11.62a1,1,0,0,0-.21-.33l-5-5a1,1,0,0,0-1.42,1.42L14.59,11H7a1,1,0,0,0,0,2h7.59l-3.3,3.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l5-5a1,1,0,0,0,.21-.33A1,1,0,0,0,17.92,11.62Z"/></svg></a>
					</div>
				</div>
				<!-- end title -->

				<?php
				$sqlSelect3 = "SELECT * FROM `music`,artist WHERE music.art_id = artist.art_id limit 5;";
				$res3 = mysqli_query($conn,$sqlSelect3);
				
				while($row3 = mysqli_fetch_array($res3)){ ?>
				<div class="col-6 col-sm-4 col-lg-2">
					<div class="album">
						<div class="album__cover">
							<img src="img/covers/cover.svg" alt="">
							<a href=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg></a>
						
						</div>
						<div class="album__title">
							<h3><a href="release.php"><?php echo $row3[1]; ?></a></h3>
							<span><a href="artist.php"><?php echo $row3[9]; ?></a></span>
						</div>
					</div>
				</div>
				<?php } ?>
			</section>
			<!-- end releases -->


		<!-- articts -->
		<section>
			<div class="container-fluid">
			<!-- artists -->
			<div class="row row--grid">
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
					<div class="row row--grid">
						<?php
						while($row1 = mysqli_fetch_array($res1)){
						?>
						<div class="col-6 col-sm-4 col-md-3 col-xl-2">
							<a href="artist.php?id=<?php echo $row1[0]; ?>" class="artist">
								<div class="artist__cover">
									<img src="<?php echo "../ADMIN DASHBOARD/artistImg/".$row1[2]; ?>" alt="" width="161" height="141">
								</div>
								<h3 class="artist__title"><?php echo $row1[1]; ?></h3>
							</a>
						</div>
						<?php
							}
						?>
					<!-- <button class="main__load" type="button">Load more</button> -->
					</div>
				</div>
			</div>
			</div>
		</section>
		<!-- end articts -->

			<section class="row row--grid">
				<div class="col-12 col-md-6 col-xl-4">
					<div class="row row--grid">
						<!-- title -->
						<div class="col-12">
							<div class="main__title">
								<h2><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M21.65,2.24a1,1,0,0,0-.8-.23l-13,2A1,1,0,0,0,7,5V15.35A3.45,3.45,0,0,0,5.5,15,3.5,3.5,0,1,0,9,18.5V10.86L20,9.17v4.18A3.45,3.45,0,0,0,18.5,13,3.5,3.5,0,1,0,22,16.5V3A1,1,0,0,0,21.65,2.24ZM5.5,20A1.5,1.5,0,1,1,7,18.5,1.5,1.5,0,0,1,5.5,20Zm13-2A1.5,1.5,0,1,1,20,16.5,1.5,1.5,0,0,1,18.5,18ZM20,7.14,9,8.83v-3L20,4.17Z"/></svg><a href="#">Music Genre</a></h2>
							</div>
						</div>
						<!-- end title -->

						<div class="col-12">
							<ul class="main__list">
								<?php while($row2 = mysqli_fetch_array($res2)){ ?>
								<li class="single-item">
									<a data-link data-title="Got What I Got" data-artist="Jason Aldean" 	data-img="img/covers/cover.svg" href="http://blast.volkovdesign.com/audio/12071151_epic-cinematic-trailer_by_audiopizza_preview.mp3"    			class="single-item__cover">
										<img src="img/covers/cover.svg" alt="">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M16,2a3,3,0,0,0-3,3V19a3,3,0,0,0,6,0V5A3,3,0,0,0,16,2Zm1,17a1,1,0,0,1-2,0V5a1,1,0,0,1,2,0ZM8,2A3,3,0,0,0,5,5V19a3,3,0,0,0,6,0V5A3,3,0,0,0,8,2ZM9,19a1,1,0,0,1-2,0V5A1,1,0,0,1,9,5Z"/></svg>
									</a>
									<div class="single-item__title">
										<h4><?php echo $row2[1] ?></h4>
										<span><?php echo $row2[4] ?></span>
									</div>
									<span class="single-item__time">2:35</span>
								</li>
								<?php } ?>
							</ul>
						</div>
					</div>
				</div>

				<div class="col-12 col-md-6 col-xl-4">
					<div class="row row--grid">
						<!-- title -->
						<div class="col-12">
							<div class="main__title">
								<h2><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M19.12,2.21A1,1,0,0,0,18.26,2l-8,2A1,1,0,0,0,9.5,5V15.35A3.45,3.45,0,0,0,8,15a3.5,3.5,0,1,0,3.5,3.5V10.78L18.74,9l.07,0L19,8.85l.15-.1a.93.93,0,0,0,.13-.15.78.78,0,0,0,.1-.15.55.55,0,0,0,.06-.18.58.58,0,0,0,0-.19.24.24,0,0,0,0-.08V3A1,1,0,0,0,19.12,2.21ZM8,20a1.5,1.5,0,1,1,1.5-1.5A1.5,1.5,0,0,1,8,20ZM17.5,7.22l-6,1.5V5.78l6-1.5Z"/></svg><a href="#">New Music</a></h2>
							</div>
						</div>
						<!-- end title -->

						<div class="col-12">
							<ul class="main__list">
								<li class="single-item">
									<a data-link data-title="Got What I Got" data-artist="Jason Aldean" data-img="img/covers/cover.svg" href="http://blast.volkovdesign.com/audio/12071151_epic-cinematic-trailer_by_audiopizza_preview.mp3" class="single-item__cover">
										<img src="img/covers/cover.svg" alt="">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M16,2a3,3,0,0,0-3,3V19a3,3,0,0,0,6,0V5A3,3,0,0,0,16,2Zm1,17a1,1,0,0,1-2,0V5a1,1,0,0,1,2,0ZM8,2A3,3,0,0,0,5,5V19a3,3,0,0,0,6,0V5A3,3,0,0,0,8,2ZM9,19a1,1,0,0,1-2,0V5A1,1,0,0,1,9,5Z"/></svg>
									</a>
									<div class="single-item__title">
										<h4><a href="#">Got What I Got</a></h4>
										<span><a href="artist.php">Jason Aldean</a></span>
									</div>
									<span class="single-item__time">2:58</span>
								</li>
								<li class="single-item">
									<a data-link data-title="Supalonely" data-artist="BENEE Featuring" data-img="img/covers/cover7.jpg" href="http://blast.volkovdesign.com/audio/12071151_epic-cinematic-trailer_by_audiopizza_preview.mp3" class="single-item__cover">
										<img src="img/covers/cover7.jpg" alt="">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M16,2a3,3,0,0,0-3,3V19a3,3,0,0,0,6,0V5A3,3,0,0,0,16,2Zm1,17a1,1,0,0,1-2,0V5a1,1,0,0,1,2,0ZM8,2A3,3,0,0,0,5,5V19a3,3,0,0,0,6,0V5A3,3,0,0,0,8,2ZM9,19a1,1,0,0,1-2,0V5A1,1,0,0,1,9,5Z"/></svg>
									</a>
									<div class="single-item__title">
										<h4><a href="#">Supalonely</a></h4>
										<span><a href="artist.php">BENEE Featuring</a></span>
									</div>
									<span class="single-item__time">3:14</span>
								</li>
								<li class="single-item">
									<a data-link data-title="Girls In The Hood" data-artist="Megan Thee" data-img="img/covers/cover8.jpg" href="http://blast.volkovdesign.com/audio/12071151_epic-cinematic-trailer_by_audiopizza_preview.mp3" class="single-item__cover">
										<img src="img/covers/cover8.jpg" alt="">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M16,2a3,3,0,0,0-3,3V19a3,3,0,0,0,6,0V5A3,3,0,0,0,16,2Zm1,17a1,1,0,0,1-2,0V5a1,1,0,0,1,2,0ZM8,2A3,3,0,0,0,5,5V19a3,3,0,0,0,6,0V5A3,3,0,0,0,8,2ZM9,19a1,1,0,0,1-2,0V5A1,1,0,0,1,9,5Z"/></svg>
									</a>
									<div class="single-item__title">
										<h4><a href="#">Girls In The Hood</a></h4>
										<span><a href="artist.php">Megan Thee</a></span>
									</div>
									<span class="single-item__time">3:21</span>
								</li>
								<li class="single-item">
									<a data-link data-title="Got It On Me" data-artist="Summer Walker" data-img="img/covers/cover9.jpg" href="http://blast.volkovdesign.com/audio/12071151_epic-cinematic-trailer_by_audiopizza_preview.mp3" class="single-item__cover">
										<img src="img/covers/cover9.jpg" alt="">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M16,2a3,3,0,0,0-3,3V19a3,3,0,0,0,6,0V5A3,3,0,0,0,16,2Zm1,17a1,1,0,0,1-2,0V5a1,1,0,0,1,2,0ZM8,2A3,3,0,0,0,5,5V19a3,3,0,0,0,6,0V5A3,3,0,0,0,8,2ZM9,19a1,1,0,0,1-2,0V5A1,1,0,0,1,9,5Z"/></svg>
									</a>
									<div class="single-item__title">
										<h4><a href="#">Got It On Me</a></h4>
										<span><a href="artist.php">Summer Walker</a></span>
									</div>
									<span class="single-item__time">3:12</span>
								</li>
								<li class="single-item">
									<a data-link data-title="Righteous" data-artist="Juice WRLD" data-img="img/covers/cover10.jpg" href="http://blast.volkovdesign.com/audio/12071151_epic-cinematic-trailer_by_audiopizza_preview.mp3" class="single-item__cover">
										<img src="img/covers/cover10.jpg" alt="">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M16,2a3,3,0,0,0-3,3V19a3,3,0,0,0,6,0V5A3,3,0,0,0,16,2Zm1,17a1,1,0,0,1-2,0V5a1,1,0,0,1,2,0ZM8,2A3,3,0,0,0,5,5V19a3,3,0,0,0,6,0V5A3,3,0,0,0,8,2ZM9,19a1,1,0,0,1-2,0V5A1,1,0,0,1,9,5Z"/></svg>
									</a>
									<div class="single-item__title">
										<h4><a href="#">Righteous</a></h4>
										<span><a href="artist.php">Juice WRLD</a></span>
									</div>
									<span class="single-item__time">5:04</span>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</section>
		</div>
	</main>
	<!-- end main content -->

	<!-- footer -->
	<?php 
	include 'footer.php'; 
	?>
	<!-- end footer -->