<?php
include './header.php';

$music = $db->select("music", "*", ['deleted' => 0]);
?>
<div class="site-content">
    <div class="panel panel-info panel-table">
        <div class="panel-heading">
            <h3 class="m-t-0 m-b-5"> Catering
                <a href="music-add.php"><button class="btn btn-default pull-right">Insert New Music</button></a>
            </h3>

        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered dataTable" id="table-33">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Music Name</th>
                            <th>Address</th>
                            <th>Contact Person</th>
                            <th>Mobile</th>
                            <th>Email</th>
                            <th>Rate(Rs.)</th>
                            <th>Type</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $count = 1;
                        foreach ($music as $val) {
                            ?>
                            <tr>
                                <td><img class="img-circle" src="./logos/<?php echo $val['photo']; ?>" style="height:40px;width: 40px;"></td>
                                <td><?php echo ucwords($val['music_name']); ?></td>
                                <td><?php echo $val['address']; ?> <?php echo $val['city']; ?></td>
                                <td><?php echo $val['contact_person']; ?></td>
                                <td><?php echo $val['contact']; ?></td>
                                <td><?php echo $val['email']; ?></td>
                                <td><?php echo $val['rate']; ?></td>
                                <td><?php echo ucwords($val['music_type']); ?></td>
                                <td><a href="music-update.php?music_id=<?php echo $val['music_id']; ?>" title="Update" onclick = "confirm('Do you want to Update ?');"><i class="zmdi zmdi-edit zmdi-hc-fw"></i></a>&nbsp;&nbsp;
                                    <a href="music-delete.php?music_id=<?php echo $val['music_id']; ?>" title="Delete" onclick = "confirm('Do you want to Delete ?');"><i style="color: red;" class="zmdi zmdi-delete"></i></a></td>

                            </tr>
                            <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>

        </div>

    </div>
</div>
<?php
include './footer.php';
?>

