<?php
include './header.php';
?>
<div class="site-content">
    <div class="panel panel-info">
        <div class="panel-heading">
            <h3 class="m-y-0">Add Caterer</h3>
        </div>
        <div class="panel-body">
            <form id="reg-form" data-toggle="validator" action="caterer-save.php" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-sm-4">
                        <span class="form-group">
                            <label  for="form-control-3">Caterer Name<span style="color: red">&nbsp;*</span></label>
                            <input id="name" class="form-control b-a-2" name="caterer_name" placeholder="Enter Caterer Name" type="text" required>
                        </span>
                    </div>
                    <div class="col-sm-4">
                        <span class="form-group">
                            <label  for="form-control-3">Caterer Address<span style="color: red">&nbsp;*</span></label>
                            <input id="name" class="form-control b-a-2" name="address" placeholder="Enter Caterer Address" type="text" required>
                        </span>
                    </div>
                    <div class="col-sm-4">
                        <span class="form-group">
                            <label  for="form-control-3">City</label>
                            <input id="city" class="form-control b-a-2" name="city" placeholder="Enter City" type="text">
                        </span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <span class="form-group">
                            <label class="" for="form-control-1">Contact Person Name<span style="color: red">&nbsp;*</span></label>
                            <input  class="form-control b-a-2" name="contact_person" placeholder="Enter Contact Person Name" required="">
                        </span>
                    </div>
                    <div class="col-sm-4">
                        <span class="form-group">
                            <label  for="form-control-3">Mobile Number<span style="color: red">&nbsp;*</span></label>
                            <input id="mobile" class="form-control b-a-2" name="mobile" placeholder="Enter Mobile Number" type="text" required="" maxlength="10" onkeypress="return event.charCode >= 48 && event.charCode <= 57">
                        </span>
                    </div>
                    <div class="col-sm-4">
                        <span class="form-group">
                            <label  for="form-control-3">Email-id</label>
                            <input id="email" class="form-control b-a-2" name="email" placeholder="Enter Email-id" type="email">
                        </span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <span class="form-group">
                            <label  for="form-control-3">Food Type<span style="color: red">&nbsp;*</span></label>
                            <select class="form-control b-a-2" name="type" required="">
                                <option value="">Select Type</option>
                                <option value="maharashtrian">Maharashtrian</option>
                                <option value="bengali">Bengali</option>
                                <option value="gujrathi">Gujrathi</option>
                            </select>
                        </span>
                    </div>
                    <div class="col-sm-4">
                        <span class="form-group">
                            <label class="" for="form-control-1">1 Dish Rate (Rs.)<span style="color: red">&nbsp;*</span></label>
                            <input  class="form-control b-a-2" name="rate" placeholder="Enter Dish Rate" required="">
                        </span>
                    </div>
                    <div class="col-sm-4">
                        <span class="form-group">
                            <label  for="form-control-3">Photo</label>
                            <input type="file" id="file" name="logo_image" class="form-control" onchange="preview_image(event);">
                            <img id="dp1" height="100" width="150"  src="">
                            <script>
                                var preview_image = function(event) {
                                    //alert(event);
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
                        <center><button type="submit" value="Save" class="btn btn-success btn-block">Save</button></center>
                    </span>
                </div>
            </form>
        </div>
    </div>
</div>
<?php
include './footer.php';
?>


