
<?php
include './header.php';

$contacts = $db->select("contact", "*", ['deleted' => 0]);
?>
<div class="site-content">
    <div class="panel panel-info panel-table">
        <div class="panel-heading">
            <h3 class="m-t-0 m-b-5">Contacts</h3>
        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered dataTable" id="table-33">
                    <thead>
                        <tr>
                            <th>Sr.No</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Subject</th>
                            <th>Message</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $count = 1;
                        foreach ($contacts as $value) {
                            ?>
                            <tr>
                                <td><?php echo $count++; ?></td>
                                <td><?php echo ucwords($value['name']); ?></td>
                                <td><?php echo $value['email']; ?></td>
                                <td><?php echo $value['subject']; ?></td>
                                <td><?php echo $value['message']; ?></td>
                                <td><a href="contact-delete.php?id=<?php echo $value['id']; ?>" title="Delete" onclick = "confirm('Do you want to Delete ?');"><i style="color: red;" class="zmdi zmdi-delete"></i></a></td>

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