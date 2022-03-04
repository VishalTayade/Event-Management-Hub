<?php
include './header.php';

$photographers = $db->select("photographers", "*", ['deleted' => 0]);
?>
<div class="site-content">
    <div class="panel panel-info panel-table">
        <div class="panel-heading">
            <h3 class="m-t-0 m-b-5"> Photographers
                <a href="photographers-add.php"><button class="btn btn-default pull-right">Insert New Photographers</button></a>
            </h3>

        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered dataTable" id="table-33">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Studio Name</th>
                            <th>Address</th>
                            <th>Contact Person</th>
                            <th>Mobile</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $count = 1;
                        foreach ($photographers as $photo) {
                            ?>
                            <tr>
                                <td><img class="img-circle" src="./logos/<?php echo $photo['logo']; ?>" style="height:40px;width: 40px;"></td>
                                <td><?php echo ucwords($photo['studio_name']); ?></td>
                                <td><?php echo $photo['address']; ?> <?php echo $photo['city']; ?></td>
                                <td><?php echo $photo['contact_person']; ?></td>
                                <td><?php echo $photo['mobile']; ?></td>
                                <td><?php echo $photo['email']; ?></td>
                                <td><a href="photographer-update.php?photo_id=<?php echo $photo['photo_id']; ?>" title="Update" onclick = "confirm('Do you want to Update ?');"><i class="zmdi zmdi-edit zmdi-hc-fw"></i></a>&nbsp;&nbsp;
                                    <a href="photographer-delete.php?photo_id=<?php echo $photo['photo_id']; ?>" title="Delete" onclick = "confirm('Do you want to Delete ?');"><i style="color: red;" class="zmdi zmdi-delete"></i></a></td>

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