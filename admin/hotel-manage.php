<?php
include './header.php';

$hotels = $db->select("hotels", "*", ['deleted' => 0]);
?>
<div class="site-content">
    <div class="panel panel-info panel-table">
        <div class="panel-heading">
            <h3 class="m-t-0 m-b-5"> Hotels
                <a href="hotel-add.php"><button class="btn btn-default pull-right">Insert New Hotel</button></a>
            </h3>

        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered dataTable" id="table-33">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Hotel Name</th>
                            <th>Address</th>
                            <th>Contact Person</th>
                            <th>Mobile</th>
                            <th>Email</th>
                            <th>Rate(Rs.)</th>
                            <th>Capacity</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $count = 1;
                        foreach ($hotels as $hotel) {
                            ?>
                            <tr>
                                <td><img class="img-circle" src="./logos/<?php echo $hotel['logo']; ?>" style="height:40px;width: 40px;"></td>
                                <td><?php echo ucwords($hotel['hotel_name']); ?></td>
                                <td><?php echo $hotel['address']; ?> <?php echo $hotel['city']; ?></td>
                                <td><?php echo $hotel['contact_person']; ?></td>
                                <td><?php echo $hotel['mobile']; ?></td>
                                <td><?php echo $hotel['email']; ?></td>
                                <td><?php echo $hotel['rate']; ?></td>
                                <td><?php echo $hotel['capacity']; ?></td>
                                <td><a href="hotel-update.php?hotel_id=<?php echo $hotel['hotel_id']; ?>" title="Update" onclick = "confirm('Do you want to Update ?');"><i class="zmdi zmdi-edit zmdi-hc-fw"></i></a>&nbsp;&nbsp;
                                    <a href="hotel-delete.php?hotel_id=<?php echo $hotel['hotel_id']; ?>" title="Delete" onclick = "confirm('Do you want to Delete ?');"><i style="color: red;" class="zmdi zmdi-delete"></i></a></td>

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