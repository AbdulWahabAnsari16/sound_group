<?php
include 'header.php';
include 'conn.php';

$fetchArt = "SELECT * FROM `artist`";
$resultArt = mysqli_query($conn,$fetchArt);

$fetchGen = "SELECT * FROM `genre`";
$resultGen = mysqli_query($conn,$fetchGen);

$fetchLang = "SELECT * FROM `language`";
$resultLang = mysqli_query($conn,$fetchLang);

$fetchAlb = "SELECT * FROM `album`";
$resultAlb = mysqli_query($conn,$fetchAlb);

if(isset($_POST['addMus'])){
    $title = $_POST['title'];
    $art = $_POST['art'];
    $year = $_POST['year'];
    $gen = $_POST['gen'];
    $lang = $_POST['lang'];
    $alb = $_POST['alb'];

    $mus_Name = $_FILES['mus_file']['name'];
    $mus_Tmp = $_FILES['mus_file']['tmp_name'];
    move_uploaded_file($mus_Tmp,"music/".$mus_Name);

    $sqlAddMus = "INSERT INTO `music`(`title`, `art_id`, `year`, `gen_id`, `language`, `alb_id`, `mus_file`) VALUES ('$title','$art','$year','$gen','$lang','$alb','$mus_Name')";
    $result1 = mysqli_query($conn,$sqlAddMus);
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
                                    <h4 class="card-title">Music form Without Album</h4>
                                    <form class="forms-sample" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="exampleInputUsername1">Title</label>
                                            <input type="text" class="form-control" id="exampleInputUsername1"
                                                placeholder="Title" name="title">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputUsername1">Select Artist</label>
                                            <select name="art" id="" class="form-control" >
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
                                                placeholder="Year" name="year">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Select Genre</label>
                                            <select name="gen" id="" class="form-control" >
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
                                            <select name="lang" id="" class="form-control" >
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
                                        <div class="form-group">
                                            <label for="">Select Album</label>
                                            <select name="alb" id="" class="form-control" >
                                                <option value="">Albums</option>
                                                <option value="">Null</option>
                                                <?php
                                                    while($row4 = mysqli_fetch_array($resultAlb)){
                                                ?>
                                                <option value="<?php echo $row4['alb_id']?>"><?php echo $row4['alb_name']?></option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Music File</label>
                                            <input type="file" class="form-control" name="mus_file">
                                        </div>
                                        <button type="submit" class="btn btn-primary mr-2" name="addMus">Add Music</button>
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