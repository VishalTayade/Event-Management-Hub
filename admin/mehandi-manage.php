
<?php
include './header.php';

$mehandi = $db->select("mehandi", "*", ['deleted' => 0]);
?>
<div class="site-content">
    <div class="panel panel-info panel-table">
        <div class="panel-heading">
            <h3 class="m-t-0 m-b-5"> Wedding Cards
                <a href="mehandi-add.php"><button class="btn btn-default pull-right">Insert New Mehandi</button></a>
            </h3>

        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered dataTable" id="table-33">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Mehandi Class Name</th>
                            <th>Address</th>
                            <th>Contact Person</th>
                            <th>Mobile</th>
                            <th>Email</th>
                            <th>Type</th>
                            <th>Rate(Rs.)</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $count = 1;
                        foreach ($mehandi as $value) {
                            ?>
                            <tr>
                                <td><img class="img-circle" src="./logos/<?php echo $value['logo']; ?>" style="height:40px;width: 40px;"></td>
                                <td><?php echo ucwords($value['mehandi_class_name']); ?></td>
                                <td><?php echo $value['address']; ?> <?php echo $value['city']; ?></td>
                                <td><?php echo $value['contact_person']; ?></td>
                                <td><?php echo $value['mobile']; ?></td>
                                <td><?php echo $value['email']; ?></td>
                                <td><?php echo ucwords($value['type']); ?></td>
                                <td><?php echo $value['rate']; ?></td>
                                <td><a href="mehandi-update.php?mehandi_id=<?php echo $value['mehandi_id']; ?>" title="Update" onclick = "confirm('Do you want to Update ?');"><i class="zmdi zmdi-edit zmdi-hc-fw"></i></a>&nbsp;&nbsp;
                                    <a href="mehandi-delete.php?mehandi_id=<?php echo $value['mehandi_id']; ?>" title="Delete" onclick = "confirm('Do you want to Delete ?');"><i style="color: red;" class="zmdi zmdi-delete"></i></a></td>

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