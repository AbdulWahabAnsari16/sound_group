<?php
include 'header.php';
include 'conn.php';
// Add Artist
if(isset($_POST['addArt'])){
    $an = $_POST['aname'];

    $imgName1 = $_FILES['artimg']['name'];
    $tmp1 = $_FILES['artimg']['tmp_name'];
    move_uploaded_file($tmp1,'artistImg/'.$imgName1);

    $sqlAddArt = "INSERT INTO `artist`(`art_name`, `art_img`) VALUES ('$an','$imgName1')";
    $res1 = mysqli_query($conn,$sqlAddArt);
    if($res1){
        echo "<script>window.location.href='add_categories.php'</script>";
    }
}

$fetchArt1 = "SELECT * FROM `artist`";
$result1 = mysqli_query($conn,$fetchArt1);

$fetchArt2 = "SELECT * FROM `artist`";
$result2 = mysqli_query($conn,$fetchArt2);

// Add Album
if(isset($_POST['addAlb'])){
    $albn = $_POST['albname'];
    $art1 =  $_POST['artist1'];
    $albName = $_FILES['alb_c_img']['name'];
    $albTmp = $_FILES['alb_c_img']['tmp_name'];
    move_uploaded_file($albTmp,'albumcover/'.$albName);
    
    $sqlAddAlb = "INSERT INTO `album`(`alb_name`, `art_id`, `alb_c_img`) VALUES ('$albn','$art1','$albName')";
    $res2 = mysqli_query($conn,$sqlAddAlb);
    if($res2){
        echo "<script>window.location.href='add_categories.php'</script>";
    }
}

// Add Genre
if(isset($_POST['addGen'])){
    $gn = $_POST['gen_name'];
    $art2 =  $_POST['artist2'];
    $sqlAddGen = "INSERT INTO `genre`(`gen_name`, `art_id`) VALUES ('$gn','$art2')";
    $res3 = mysqli_query($conn,$sqlAddGen);
    if($res3){
        echo "<script>window.location.href='add_categories.php'</script>";
    }
}

//Add language
if(isset($_POST['addLang'])){
    $langN = $_POST['langn'];
    $sqlAddLang = "INSERT INTO `language`(`lang_name`) VALUES ('$langN')";
    $res4 = mysqli_query($conn,$sqlAddLang);
    if($res4){
        echo "<script>window.location.href='add_categories.php'</script>";
    }
}
?>
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <!-- Artist Form -->
                        <div class="col-md-6 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Artist form</h4>
                                    <form class="forms-sample" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="exampleInputUsername1">Artist Name</label>
                                            <input type="text" class="form-control" id="exampleInputUsername1"
                                            placeholder="Artist Name" name="aname">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputUsername1">Artist Image</label>
                                            <input type="file" class="form-control" name="artimg">
                                        </div>
                                        <button type="submit" class="btn btn-primary mr-2" name="addArt">Add Artist</button>
                                        <!-- <button class="btn btn-light">Cancel</button> -->
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- Artist Form -->
                        
                        <!-- Album Form -->
                        <div class="col-md-6 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Album form</h4>
                                    <form class="forms-sample" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="exampleInputUsername1">Album Name</label>
                                            <input type="text" class="form-control" id="exampleInputUsername1"
                                            placeholder="Album Name" name="albname">
                                        </div>
                                        <div class="form-group">
                                            <select name="artist1" id="" class="form-control" >
                                                <option value="">Select Artist</option>
                                                <?php
                                                    while($option1 = mysqli_fetch_array($result1)){
                                                ?>
                                                <option value="<?php echo $option1['art_id']?>"><?php echo $option1['art_name']?></option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Album Cover Image</label>
                                            <input type="file" class="form-control" name="alb_c_img">
                                        </div>
                                        <button type="submit" class="btn btn-primary mr-2" name="addAlb">Add Album</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- Album Form -->
                    </div>


                    <!-- Genre Form -->
                    <div class="row">
                        <div class="col-md-6 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Genre form</h4>
                                    <form class="forms-sample" method="post">
                                        <div class="form-group">
                                            <label for="exampleInputUsername1">Genre Name</label>
                                            <input type="text" class="form-control" id="exampleInputUsername1"
                                            placeholder="Genre Name" name="gen_name">
                                        </div>
                                        <div class="form-group">
                                            <select name="artist2" id="" class="form-control" >
                                                <option value="">Select Artist</option>
                                                <?php
                                                    while($option2 = mysqli_fetch_array($result2)){
                                                ?>
                                                <option value="<?php echo $option2['art_id']?>"><?php echo $option2['art_name']?></option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <button type="submit" class="btn btn-primary mr-2" name="addGen">Add Genre</button>
                                        <!-- <button class="btn btn-light">Cancel</button> -->
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!-- language Form -->
                        <div class="col-md-6 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">language Form</h4>
                                    <form class="forms-sample" method="post">
                                        <div class="form-group">
                                            <label for="exampleInputUsername1">language Name</label>
                                            <input type="text" class="form-control" id="exampleInputUsername1"
                                            placeholder="language Name" name="langn">
                                        </div>
                                        <button type="submit" class="btn btn-primary mr-2" name="addLang">Add language</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- language Form -->

                </div>
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>

    <!-- footer -->
    <?php
    include 'script.php'
    ?>
    <!-- footer -->
</body>

</html>