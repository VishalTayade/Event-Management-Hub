<?php
include './header.php';
$event_id = $_REQUEST['event_id'];
$event = $db->select("event_planners", "*", ["AND" => ['event_id' => $event_id, 'deleted' => 0]])[0];
?>
<div class="site-content">
    <div class="panel panel-info">
        <div class="panel-heading">
            <h3 class="m-y-0">Update Event Planner</h3>
        </div>
        <div class="panel-body">
            <form id="reg-form" data-toggle="validator" action="event-planner-update-save.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="event_id" value="<?php echo $event_id; ?>">
                <div class="row">
                    <div class="col-sm-4">
                        <span class="form-group">
                            <label  for="form-control-3">Company Name<span style="color: red">&nbsp;*</span></label>
                            <input id="name" class="form-control b-a-2" name="company_name" placeholder="Enter Company Name" type="text" required value="<?php echo $event['company_name']; ?>">
                        </span>
                    </div>
                    <div class="col-sm-4">
                        <span class="form-group">
                            <label  for="form-control-3">Address<span style="color: red">&nbsp;*</span></label>
                            <input id="name" class="form-control b-a-2" name="address" placeholder="Enter Address" type="text" required value="<?php echo $event['address']; ?>">
                        </span>
                    </div>
                    <div class="col-sm-4">
                        <span class="form-group">
                            <label  for="form-control-3">City</label>
                            <input id="city" class="form-control b-a-2" name="city" placeholder="Enter City" type="text" value="<?php echo $event['city']; ?>">
                        </span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <span class="form-group">
                            <label class="" for="form-control-1">Contact Person Name<span style="color: red">&nbsp;*</span></label>
                            <input  class="form-control b-a-2" name="contact_person" placeholder="Enter Contact Person Name" required="" value="<?php echo $event['contact_person']; ?>">
                        </span>
                    </div>
                    <div class="col-sm-4">
                        <span class="form-group">
                            <label  for="form-control-3">Mobile Number<span style="color: red">&nbsp;*</span></label>
                            <input id="mobile" class="form-control b-a-2" name="mobile" placeholder="Enter Mobile Number" type="text" required="" maxlength="10" onkeypress="return event.charCode >= 48 && event.charCode <= 57" value="<?php echo $event['mobile']; ?>">
                        </span>
                    </div>
                    <div class="col-sm-4">
                        <span class="form-group">
                            <label  for="form-control-3">Email-id</label>
                            <input id="email" class="form-control b-a-2" name="email" placeholder="Enter Email-id" type="email" value="<?php echo $event['email']; ?>">
                        </span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <span class="form-group">
                            <label  for="form-control-3">Company Logo</label>
                            <input type="file" name="logo_image" id="file"  class="form-control" onchange="loadFile(event)" value="<?php echo $event['logo']; ?>">
                            <img id="dp1" height="100" width="150"  src="./logos/<?php echo $event['logo']; ?>">
                            <script>
                                var loadFile = function(event) {
                                    var output = document.getElementById('dp1');
                                    output.src = URL.createObjectURL(event.target.files[0]);
                                };
                            </script>
                        </span>
                    </div>
                </div>
                <div class="col-sm-3">
                    <span class="form-group">
                        <label  for="form-control-3"></label>
                        <center><button type="submit" value="Save" class="btn btn-success btn-block">Update</button></center>
                    </span>
                </div>
            </form>
        </div>
    </div>
</div>
<?php
include './footer.php';
?>


