<?php
include './header.php';

$caterers = $db->select("caterers", "*", ['deleted' => 0]);
?>
<div class="site-content">
    <div class="panel panel-info panel-table">
        <div class="panel-heading">
            <h3 class="m-t-0 m-b-5"> Catering
                <a href="caterer-add.php"><button class="btn btn-default pull-right">Insert New Caterer</button></a>
            </h3>

        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered dataTable" id="table-33">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Caterer Name</th>
                            <th>Address</th>
                            <th>Contact Person</th>
                            <th>Mobile</th>
                            <th>Email</th>
                            <th>1 Dish<br>Rate(Rs.)</th>
                            <th>Type</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $count = 1;
                        foreach ($caterers as $caterer) {
                            ?>
                            <tr>
                                <td><img class="img-circle" src="./logos/<?php echo $caterer['logo']; ?>" style="height:40px;width: 40px;"></td>
                                <td><?php echo ucwords($caterer['caterer_name']); ?></td>
                                <td><?php echo $caterer['address']; ?> <?php echo $caterer['city']; ?></td>
                                <td><?php echo $caterer['contact_person']; ?></td>
                                <td><?php echo $caterer['mobile']; ?></td>
                                <td><?php echo $caterer['email']; ?></td>
                                <td><?php echo $caterer['rate']; ?></td>
                                <td><?php echo ucwords($caterer['type']); ?></td>
                                <td><a href="caterer-update.php?caterer_id=<?php echo $caterer['caterer_id']; ?>" title="Update" onclick = "confirm('Do you want to Update ?');"><i class="zmdi zmdi-edit zmdi-hc-fw"></i></a>&nbsp;&nbsp;
                                    <a href="caterer-delete.php?caterer_id=<?php echo $caterer['caterer_id']; ?>" title="Delete" onclick = "confirm('Do you want to Delete ?');"><i style="color: red;" class="zmdi zmdi-delete"></i></a></td>

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