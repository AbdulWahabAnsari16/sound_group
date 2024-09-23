<?php
include 'header.php';
include 'conn.php';

$fetchArt = "SELECT * FROM `artist`";
$resultArt = mysqli_query($conn,$fetchArt);

$fetchGen = "SELECT * FROM `genre`";
$resultGen = mysqli_query($conn,$fetchGen);

$fetchLang = "SELECT * FROM `language`";
$resultLang = mysqli_query($conn,$fetchLang);

if(isset($_POST['addVid'])){
    $title1 = $_POST['title1'];
    $art1 = $_POST['art_1'];
    $year = $_POST['year1'];
    $gen1 = $_POST['gen_1'];
    $lang1 = $_POST['lang_1'];
    $vid_Name = $_FILES['mus_file']['name'];
    $vid_Tmp = $_FILES['mus_file']['tmp_name'];
    move_uploaded_file($vid_Tmp,"video/".$vid_Name);

    $sqlAddVid = "INSERT INTO `video`(`vid_title`, `art_id`, `year`, `gen_id`, `language`, `vid_file`) VALUES ('$title1','$art1','$year','$gen1','$lang1','$vid_Name')";
    $result1 = mysqli_query($conn,$sqlAddVid);
    if($result1){
        echo "<script>
        window.location.href='index.php'
        </script>";
    }
}
?>
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-md-6 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Video form</h4>
                                    <form class="forms-sample">
                                        <div class="form-group">
                                            <label for="exampleInputUsername1">Title</label>
                                            <input type="text" class="form-control" id="exampleInputUsername1"
                                                placeholder="Title" name="title1">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputUsername1">Select Artist</label>
                                            <select name="art_1" id="" class="form-control" >
                                                <option value="">Artists</option>
                                                <?php
                                                    while($row1 = mysqli_fetch_array($resultArt)){
                                                ?>
                                                <option value="<?php echo $row1['art_id']?>"><?php echo $row1['art_name']?></option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Year</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1"
                                                placeholder="Year" name="year1">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Select Genre</label>
                                            <select name="gen_1" id="" class="form-control" >
                                                <option value="">Genres</option>
                                                <?php
                                                    while($row2 = mysqli_fetch_array($resultGen)){
                                                ?>
                                                <option value="<?php echo $row2['gen_id']?>"><?php echo $row2['gen_name']?></option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Select Language</label>
                                            <select name="lang_1" id="" class="form-control" >
                                                <option value="">Languages</option>
                                                <?php
                                                    while($row3 = mysqli_fetch_array($resultLang)){
                                                ?>
                                                <option value="<?php echo $row3['lang_id']?>"><?php echo $row3['lang_name']?></option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <!-- <div class="form-group">
                                            <label for="exampleInputPassword1">Video Description</label>
                                            <textarea name="" id="" class="form-control"></textarea>
                                        </div> -->
                                        <div class="form-group">
                                            <label for="video_file">Video File</label>
                                            <input type="file" class="form-control" id="video_file" name="vid_file">
                                        </div>
                                        <button type="submit" class="btn btn-primary mr-2" name="addVid">Add Video</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
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
</body>

</html>