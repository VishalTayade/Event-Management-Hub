<?php
include './header.php';

$decorations = $db->select("decorations", "*", ['deleted' => 0]);
?>
<div class="site-content">
    <div class="panel panel-info panel-table">
        <div class="panel-heading">
            <h3 class="m-t-0 m-b-5"> Decors & Florists
                <a href="decor-add.php"><button class="btn btn-default pull-right">Insert New Decor</button></a>
            </h3>

        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered dataTable" id="table-33">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Decor Name</th>
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
                        foreach ($decorations as $decor) {
                            ?>
                            <tr>
                                <td><img class="img-circle" src="./logos/<?php echo $decor['logo']; ?>" style="height:40px;width: 40px;"></td>
                                <td><?php echo ucwords($decor['decor_name']); ?></td>
                                <td><?php echo $decor['address']; ?> <?php echo $decor['city']; ?></td>
                                <td><?php echo $decor['contact_person']; ?></td>
                                <td><?php echo $decor['mobile']; ?></td>
                                <td><?php echo $decor['email']; ?></td>
                                <td><?php echo $decor['rate']; ?></td>
                                <td><?php echo $decor['type']; ?></td>
                                <td><a href="decor-update.php?decor_id=<?php echo $decor['decor_id']; ?>" title="Update" onclick = "confirm('Do you want to Update ?');"><i class="zmdi zmdi-edit zmdi-hc-fw"></i></a>&nbsp;&nbsp;
                                    <a href="decor-delete.php?decor_id=<?php echo $decor['decor_id']; ?>" title="Delete" onclick = "confirm('Do you want to Delete ?');"><i style="color: red;" class="zmdi zmdi-delete"></i></a></td>

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