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
				$sqlSelect3 = "SELECT MIN(music.mus_id) AS mus_id, music.title, music.art_id, music.year, music.gen_id, music.lang_id, music.alb_id, music.mus_file, artist.art_name, artist.art_img FROM music JOIN artist ON music.art_id = artist.art_id GROUP BY artist.art_name ";
				$res3 = mysqli_query($conn,$sqlSelect3);
				
				while($row3 = mysqli_fetch_array($res3)){
					?>
				<div class="col-6 col-sm-4 col-lg-2">
					<div class="album">
						<div class="album__cover">
							<img src="img/covers/cover.svg" alt="">
							
							<a href="player.php?id=<?php echo $row3[0]; ?>"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg></a>
						</div>
						<div class="album__title">
							<h3><a href="release.php"><?php echo $row3['title']; ?></a></h3>
							<span><a href="artist.php"><?php echo $row3['art_name']; ?></a></span>
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
			</section>
		</div>
	</main>
	<!-- end main content -->

	<!-- footer -->
	<?php 
	include 'footer.php'; 
	?>
	<!-- end footer -->