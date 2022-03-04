<?php
include './header.php';
$user = $db->select("users", "*", ['user_id' => $user_id])[0];
$parlour = $db->select("parlours", "*", ["AND" => ['parlour_id' => $user['parlour_id'], 'deleted' => 0]])[0];
?>

<section class="page-header">
    <div class="container">
        <h1>Profile Update</h1>
    </div>
</section>
<section class="contackForm">
    <div class="container">
        <div class="row">
            <form class="has-validation-callback" action="parlour-profile-update-save.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="parlour_id" value="<?php echo $parlour['parlour_id']; ?>">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="input-box">
                            <label>Parlour Name</label>
                            <input type="text" name="parlour_name" value="<?php echo $parlour['parlour_name']; ?>">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="input-box">
                            <label>Address</label>
                            <input type="text"  name="address" value="<?php echo $parlour['address']; ?>">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="input-box">
                            <label>City</label>
                            <input type="text"  name="city" value="<?php echo $parlour['city']; ?>">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="input-box">
                            <label>Contact Person Name</label>
                            <input type="text"  name="contact_person" value="<?php echo $parlour['contact_person']; ?>">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="input-box">
                            <label>Mobile</label>
                            <input type="text"  name="mobile" value="<?php echo $parlour['mobile']; ?>" maxlength="10" onkeypress="return event.charCode >= 48 && event.charCode <= 57">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="input-box">
                            <label>Email</label>
                            <input type="text" data-validation="email" data-validation-error-msg="Incorrect e-mail address" name="email" value="<?php echo $parlour['email']; ?>">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="input-box">
                            <label>Rate (Rs.)</label>
                            <input type="text"  name="rate" value="<?php echo $parlour['rate']; ?>">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="input-box">
                            <label>Makeup For</label>
                            <select class="form-control b-a-2" name="for" required="">
                                <option value="<?php echo $parlour['for']; ?>" selected=""><?php echo ucwords($parlour['for']); ?></option>
                                <option value="bride">Bride</option>
                                <option value="groom">Groom</option>
                                <option value="both">Both</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="input-box">
                            <label>Logo </label>
                            <input type="file" name="logo_image" id="file" class="form-control" onchange="loadFile(event)" value="<?php echo $hotel['logo']; ?>">
                            <img id="dp1" height="100" width="150"  src="./admin/logos/<?php echo $parlour['logo']; ?>">
                            <script>
                                var loadFile = function(event) {
                                    var output = document.getElementById('dp1');
                                    output.src = URL.createObjectURL(event.target.files[0]);
                                };
                            </script>
                        </div>
                        <input type="submit" class="btn" value="Update">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</section>

<?php
include './footer.php';
?>
