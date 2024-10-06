<?php
include 'header.php';
include 'conn.php';
$sqlSelect = "SELECT * FROM `music`,`artist` WHERE music.art_id = artist.art_id";
$res = mysqli_query($conn, $sqlSelect);
?>
<style>
    a{text-decoration: none;color: white;}
    a:hover{color: white;text-decoration: none;}
</style>
<div class="row">
    <div class="grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <p class="card-title mb-0">All Music</p>
                <div class="table-responsive">
                    <table class="table table-striped table-borderless">
                        <thead>
                            <tr>
                                <th>Music ID</th>
                                <th>Title</th>
                                <th>Artist Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            if(mysqli_num_rows($res) > 0){
                                while ($row = mysqli_fetch_array($res)) { 
                            ?>
                                <tr>
                                    <td><?php echo $row['mus_id']; ?></td>
                                    <td><?php echo $row['title']; ?></td>
                                    <td><?php echo $row['art_name']; ?></td>
                                    <td><a class="btn btn-primary mr-2" href="music_del.php?mus_id=<?php echo $row[0]; ?>">Delete</a></td>
                                </tr>
                            <?php
                                }
                            }
                            else{
                                echo "<td colspan='3'> <center>No Record Found</center> </td>";
                            }
                            ?>  
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>