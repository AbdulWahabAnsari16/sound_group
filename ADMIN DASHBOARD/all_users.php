<?php
include 'header.php';
include 'conn.php';
$sqlSelect = "SELECT * FROM `user`";
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
                <p class="card-title mb-0">All Users</p>
                <div class="table-responsive">
                    <table class="table table-striped table-borderless">
                        <thead>
                            <tr>
                                <th>User ID</th>
                                <th>User Name</th>
                                <th>User Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            if(mysqli_num_rows($res) > 0){
                                while ($row = mysqli_fetch_array($res)) { 
                            ?>
                                <tr>
                                    <td><?php echo $row[0]; ?></td>
                                    <td><?php echo $row[1]; ?></td>
                                    <td><?php echo $row[2]; ?></td>
                                    <td><a class="btn btn-primary mr-2" href="del_user.php?id=<?php echo $row[0]; ?>">Delete</a></td>
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