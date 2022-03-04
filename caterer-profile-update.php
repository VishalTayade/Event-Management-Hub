<?php
include './header.php';
$user = $db->select("users", "*", ['user_id' => $user_id])[0];
$caterer = $db->select("caterers", "*", ["AND" => ['caterer_id' => $user['caterer_id'], 'deleted' => 0]])[0];
?>

<section class="page-header">
    <div class="container">
        <h1>Profile Update</h1>
    </div>
</section>
<section class="contackForm">
    <div class="container">
        <div class="row">
            <form class="has-validation-callback" action="caterer-profile-update-save.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="caterer_id" value="<?php echo $caterer['caterer_id']; ?>">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="input-box">
                            <label>Caterer Name</label>
                            <input type="text" name="caterer_name" value="<?php echo $caterer['caterer_name']; ?>">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="input-box">
                            <label>Caterer Address</label>
                            <input type="text"  name="address" value="<?php echo $caterer['address']; ?>">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="input-box">
                            <label>City</label>
                            <input type="text"  name="city" value="<?php echo $caterer['city']; ?>">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="input-box">
                            <label>Contact Person Name</label>
                            <input type="text"  name="contact_person" value="<?php echo $caterer['contact_person']; ?>">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="input-box">
                            <label>Mobile</label>
                            <input type="text"  name="mobile" value="<?php echo $caterer['mobile']; ?>" maxlength="10" onkeypress="return event.charCode >= 48 && event.charCode <= 57">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="input-box">
                            <label>Email</label>
                            <input type="text" data-validation="email" data-validation-error-msg="Incorrect e-mail address" name="email" value="<?php echo $caterer['email']; ?>">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="input-box">
                            <label>1 Dish/Rate (Rs.)</label>
                            <input type="text"  name="rate" value="<?php echo $caterer['rate']; ?>">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="input-box">
                            <label>Food Type</label>
                            <select class="form-control b-a-2" name="type" required="">
                                <option value="<?php echo $caterer['type']; ?>" selected=""><?php echo ucwords($caterer['type']); ?></option>
                                <option value="maharashtrian">Maharashtrian</option>
                                <option value="bengali">Bengali</option>
                                <option value="gujrathi">Gujrathi</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="input-box">
                            <label>Logo </label>
                            <input type="file" name="logo_image" id="file" class="form-control" onchange="loadFile(event)" value="<?php echo $hotel['logo']; ?>">
                            <img id="dp1" height="100" width="150"  src="./admin/logos/<?php echo $caterer['logo']; ?>">
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
</section>

<?php
include './footer.php';
?>
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

