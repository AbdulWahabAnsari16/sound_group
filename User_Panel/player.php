<?php 
session_start();
include 'header.php';
include 'conn.php';
$id = $_GET['id'];

if($_SESSION['e']){
    
$sqlSelect3 = "SELECT MIN(music.mus_id) AS mus_id, music.title, music.art_id, music.year, music.gen_id, music.lang_id, music.alb_id, music.mus_file, artist.art_name, artist.art_img FROM music JOIN artist ON music.art_id = artist.art_id WHERE mus_id = $id";
$res3 = mysqli_query($conn,$sqlSelect3);
$row3 = mysqli_fetch_array($res3);
}
?>

	<!-- player -->
	<div class="player">
		<div class="player__cover">
			<img src="img/covers/cover.svg" alt="">
		</div>

		<div class="player__content">
			<span class="player__track"><b class="player__title"><?php echo $row3['title']; ?></b> – <span class="player__artist"><?php echo $row3['art_name']; ?></span></span>
			<audio src="music/<?php echo $row3[7]; ?>" id="audio" controls></audio>
		</div>
	</div>

	<button class="player__btn" type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M21.65,2.24a1,1,0,0,0-.8-.23l-13,2A1,1,0,0,0,7,5V15.35A3.45,3.45,0,0,0,5.5,15,3.5,3.5,0,1,0,9,18.5V10.86L20,9.17v4.18A3.45,3.45,0,0,0,18.5,13,3.5,3.5,0,1,0,22,16.5V3A1,1,0,0,0,21.65,2.24ZM5.5,20A1.5,1.5,0,1,1,7,18.5,1.5,1.5,0,0,1,5.5,20Zm13-2A1.5,1.5,0,1,1,20,16.5,1.5,1.5,0,0,1,18.5,18ZM20,7.14,9,8.83v-3L20,4.17Z"/></svg> Player</button>
	<!-- end player -->

	<?php
	include 'footer.php'
	?>