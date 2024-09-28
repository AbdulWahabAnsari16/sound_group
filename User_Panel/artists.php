<?php 
session_start();
include 'header.php';
include 'conn.php';

$sqlSelect = "SELECT * FROM `artist`";
$res = mysqli_query($conn,$sqlSelect);
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
						<!-- <div class="slider-radio">
							<input type="radio" name="grade" id="featured" checked="checked"><label for="featured">Featured</label>
							<input type="radio" name="grade" id="popular"><label for="popular">Popular</label>
							<input type="radio" name="grade" id="newest"><label for="newest">Newest</label>
						</div> -->
					</div>
					<div class="row row--grid">
						<?php while($row = mysqli_fetch_array($res)){ ?>
						<div class="col-6 col-sm-4 col-md-3 col-xl-2">
							<a href="artist.php?id=<?php echo $row['art_id']; ?>" class="artist">
								<div class="artist__cover">
									<img src="<?php echo "../ADMIN DASHBOARD/artistImg/".$row['art_img']; ?>" alt="" height="140" width="140">
								</div>
								<h3 class="artist__title"><?php echo $row['art_name']; ?></h3>
							</a>
						</div>
						<?php } ?>
					</div>
					<!-- <button class="main__load" type="button">Load more</button> -->
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