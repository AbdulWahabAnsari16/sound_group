<?php 
session_start();
include 'header.php';
include 'conn.php';
$sqlSelect = "SELECT * FROM `album`,`music` WHERE album.art_id = music.art_id AND album.art_id= 1";
$res = mysqli_query($conn,$sqlSelect);
$sqlSelect2 = "SELECT * FROM artist,album WHERE artist.art_id = album.art_id AND artist.art_id = 1";
$res2 = mysqli_query($conn,$sqlSelect2);
$row2 = mysqli_fetch_array($res2);
if(!$_SESSION['e']){
	echo "<script>
    window.location.href = 'signin.php';
  </script>";
}else{
?>

<div class="player">
		<div class="player__cover">
			<img src="img/covers/cover.svg" alt="">
		</div>

		<div class="player__content">
			<span class="player__track"><b class="player__title">Epic Cinematic</b> – <span class="player__artist"><?php echo $row2['art_name']; ?></span></span>
			<audio src="http://blast.volkovdesign.com/audio/12071151_epic-cinematic-trailer_by_audiopizza_preview.mp3" id="audio" controls></audio>
		</div>
	</div>

	<!-- main content -->
	<main class="main">
		<div class="container-fluid">
			<div class="row row--grid">
				<!-- breadcrumb -->
				<div class="col-12">
					<ul class="breadcrumb">
						<li class="breadcrumb__item"><a href="index.php">Home</a></li>
						<li class="breadcrumb__item"><a href="releases.php">Albums</a></li>
						<li class="breadcrumb__item breadcrumb__item--active">Songs</li>
					</ul>
				</div>
				<!-- end breadcrumb -->

				<!-- title -->
				<div class="col-12">
					<div class="main__title main__title--page">
						<h1>Wishlist</h1>
					</div>
				</div>
				<!-- end title -->

				<div class="col-10">
					<div class="release">
						<div class="release__list">
							<ul class="main__list main__list--playlist main__list--dashbox">
								<?php while($row = mysqli_fetch_array($res)){ ?>
								<li class="single-item">
									<a data-playlist data-title="<?php echo $row['title'] ?>" data-artist="<?php echo $row2['art_name'] ?>" data-img="img/covers/cover.svg" href="music/<?php echo $row['mus_file']; ?>" id="audio"
									class="single-item__cover">
										<img src="img/covers/cover.svg" alt="">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M16,2a3,3,0,0,0-3,3V19a3,3,0,0,0,6,0V5A3,3,0,0,0,16,2Zm1,17a1,1,0,0,1-2,0V5a1,1,0,0,1,2,0ZM8,2A3,3,0,0,0,5,5V19a3,3,0,0,0,6,0V5A3,3,0,0,0,8,2ZM9,19a1,1,0,0,1-2,0V5A1,1,0,0,1,9,5Z"/></svg>
									</a>
									<div class="single-item__title">
										<h4><a href="#"><?php echo $row['title'] ?></a></h4>
										<span><a href="artist.php"><?php echo $row2['art_name']; ?></a></span>
									</div>
									<a href="#" class="single-item__add">
										<i class="fa-solid fa-heart"></i>
									<a href="#" class="single-item__export">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M21,14a1,1,0,0,0-1,1v4a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V15a1,1,0,0,0-2,0v4a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V15A1,1,0,0,0,21,14Zm-9.71,1.71a1,1,0,0,0,.33.21.94.94,0,0,0,.76,0,1,1,0,0,0,.33-.21l4-4a1,1,0,0,0-1.42-1.42L13,12.59V3a1,1,0,0,0-2,0v9.59l-2.29-2.3a1,1,0,1,0-1.42,1.42Z"></path></svg>
									</a>
									<span class="single-item__time">2:58</span>
								</li>
								<?php } ?>
							</ul>
						</div>
					</div>
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