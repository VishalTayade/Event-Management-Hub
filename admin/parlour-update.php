<?php
include './header.php';
$parlour_id = $_REQUEST['parlour_id'];
$parlour = $db->select("parlours", "*", ["AND" => ['parlour_id' => $parlour_id, 'deleted' => 0]])[0];
?>
<div class="site-content">
    <div class="panel panel-info">
        <div class="panel-heading">
            <h3 class="m-y-0">Update Beauty Parlour</h3>
        </div>
        <div class="panel-body">
            <form id="reg-form" data-toggle="validator" action="parlour-update-save.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="parlour_id" value="<?php echo $parlour_id; ?>">
                <div class="row">
                    <div class="col-sm-4">
                        <span class="form-group">
                            <label  for="form-control-3">Parlour Name<span style="color: red">&nbsp;*</span></label>
                            <input id="name" class="form-control b-a-2" name="parlour_name" placeholder="Enter Parlour Name" type="text" required value="<?php echo $parlour['parlour_name']; ?>">
                        </span>
                    </div>
                    <div class="col-sm-4">
                        <span class="form-group">
                            <label  for="form-control-3">Parlour Address<span style="color: red">&nbsp;*</span></label>
                            <input id="name" class="form-control b-a-2" name="address" placeholder="Enter Parlour Address" type="text" required value="<?php echo $parlour['address']; ?>">
                        </span>
                    </div>
                    <div class="col-sm-4">
                        <span class="form-group">
                            <label  for="form-control-3">City</label>
                            <input id="city" class="form-control b-a-2" name="city" placeholder="Enter City" type="text" value="<?php echo $parlour['city']; ?>">
                        </span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <span class="form-group">
                            <label class="" for="form-control-1">Contact Person Name<span style="color: red">&nbsp;*</span></label>
                            <input  class="form-control b-a-2" name="contact_person" placeholder="Enter Contact Person Name" required="" value="<?php echo $parlour['contact_person']; ?>">
                        </span>
                    </div>
                    <div class="col-sm-4">
                        <span class="form-group">
                            <label  for="form-control-3">Mobile Number<span style="color: red">&nbsp;*</span></label>
                            <input id="mobile" class="form-control b-a-2" name="mobile" placeholder="Enter Mobile Number" type="text" required="" maxlength="10" onkeypress="return event.charCode >= 48 && event.charCode <= 57" value="<?php echo $parlour['mobile']; ?>">
                        </span>
                    </div>
                    <div class="col-sm-4">
                        <span class="form-group">
                            <label  for="form-control-3">Email-id</label>
                            <input id="email" class="form-control b-a-2" name="email" placeholder="Enter Email-id" type="email" value="<?php echo $parlour['email']; ?>">
                        </span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <span class="form-group">
                            <label  for="form-control-3">Makeup For<span style="color: red">&nbsp;*</span></label>
                            <select class="form-control b-a-2" name="for" required="">
                                <option value="<?php echo $parlour['for']; ?>" selected=""><?php echo ucwords($parlour['for']); ?></option>
                                <option value="bride">Bride</option>
                                <option value="groom">Groom</option>
                                <option value="both">Both</option>
                            </select>
                        </span>
                    </div>
                    <div class="col-sm-4">
                        <span class="form-group">
                            <label class="" for="form-control-1">Rate (Rs.)<span style="color: red">&nbsp;*</span></label>
                            <input  class="form-control b-a-2" name="rate" placeholder="Enter Rate" required="" value="<?php echo $parlour['rate']; ?>">
                        </span>
                    </div>
                    <div class="col-sm-4">
                        <span class="form-group">
                            <label  for="form-control-3">Photo</label>
                            <input type="file" name="logo_image" id="file"  class="form-control" onchange="loadFile(event)" value="<?php echo $parlour['logo']; ?>">
                            <img id="dp1" height="100" width="150"  src="./logos/<?php echo $parlour['logo']; ?>">
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


