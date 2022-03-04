<?php
include './header.php';

$parlours = $db->select("parlours", "*", ['deleted' => 0]);
?>
<div class="site-content">
    <div class="panel panel-info panel-table">
        <div class="panel-heading">
            <h3 class="m-t-0 m-b-5"> Beauty Parlours
                <a href="parlour-add.php"><button class="btn btn-default pull-right">Insert New Parlour</button></a>
            </h3>

        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered dataTable" id="table-33">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Parlour Name</th>
                            <th>Address</th>
                            <th>Contact Person</th>
                            <th>Mobile</th>
                            <th>Email</th>
                            <th>For</th>
                            <th>Rate(Rs.)</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $count = 1;
                        foreach ($parlours as $parlour) {
                            ?>
                            <tr>
                                <td><img class="img-circle" src="./logos/<?php echo $parlour['logo']; ?>" style="height:40px;width: 40px;"></td>
                                <td><?php echo ucwords($parlour['parlour_name']); ?></td>
                                <td><?php echo $parlour['address']; ?> <?php echo $parlour['city']; ?></td>
                                <td><?php echo $parlour['contact_person']; ?></td>
                                <td><?php echo $parlour['mobile']; ?></td>
                                <td><?php echo $parlour['email']; ?></td>
                                <td><?php echo $parlour['for']; ?></td>
                                <td><?php echo $parlour['rate']; ?></td>
                                <td><a href="parlour-update.php?parlour_id=<?php echo $parlour['parlour_id']; ?>" title="Update" onclick = "confirm('Do you want to Update ?');"><i class="zmdi zmdi-edit zmdi-hc-fw"></i></a>&nbsp;&nbsp;
                                    <a href="parlour-delete.php?parlour_id=<?php echo $parlour['parlour_id']; ?>" title="Delete" onclick = "confirm('Do you want to Delete ?');"><i style="color: red;" class="zmdi zmdi-delete"></i></a></td>

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

