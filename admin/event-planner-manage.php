<?php
include './header.php';

$planners = $db->select("event_planners", "*", ['deleted' => 0]);
?>
<div class="site-content">
    <div class="panel panel-info panel-table">
        <div class="panel-heading">
            <h3 class="m-t-0 m-b-5"> Event Planners
                <a href="event-planner-add.php"><button class="btn btn-default pull-right">Insert New Event Planner</button></a>
            </h3>

        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered dataTable" id="table-33">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Company Name</th>
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
                        foreach ($planners as $planner) {
                            ?>
                            <tr>
                                <td><img class="img-circle" src="./logos/<?php echo $planner['logo']; ?>" style="height:40px;width: 40px;"></td>
                                <td><?php echo ucwords($planner['company_name']); ?></td>
                                <td><?php echo $planner['address']; ?> <?php echo $planner['city']; ?></td>
                                <td><?php echo $planner['contact_person']; ?></td>
                                <td><?php echo $planner['mobile']; ?></td>
                                <td><?php echo $planner['email']; ?></td>
                                <td><a href="event-planner-update.php?event_id=<?php echo $planner['event_id']; ?>" title="Update" onclick = "confirm('Do you want to Update ?');"><i class="zmdi zmdi-edit zmdi-hc-fw"></i></a>&nbsp;&nbsp;
                                    <a href="event-planner-delete.php?event_id=<?php echo $planner['event_id']; ?>" title="Delete" onclick = "confirm('Do you want to Delete ?');"><i style="color: red;" class="zmdi zmdi-delete"></i></a></td>

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