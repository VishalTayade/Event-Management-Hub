<?php
include './header.php';
$user = $db->select("users", "*", ['user_id' => $user_id])[0];
$music = $db->select("music", "*", ["AND" => ['music_id' => $user['music_id'], 'deleted' => 0]])[0];
?>

<section class="page-header">
    <div class="container">
        <h1>Profile Update</h1>
    </div>
</section>
<section class="contackForm">
    <div class="container">
        <div class="row">
            <form class="has-validation-callback" action="music-profile-update-save.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="music_id" value="<?php echo $music['music_id']; ?>">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="input-box">
                            <label>Music Name</label>
                            <input type="text" name="music_name" value="<?php echo $music['music_name']; ?>">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="input-box">
                            <label>Decor Address</label>
                            <input type="text"  name="address" value="<?php echo $music['address']; ?>">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="input-box">
                            <label>City</label>
                            <input type="text"  name="city" value="<?php echo $music['city']; ?>">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="input-box">
                            <label>Contact Person Name</label>
                            <input type="text"  name="contact_person" value="<?php echo $music['contact_person']; ?>">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="input-box">
                            <label>Mobile</label>
                            <input type="text"  name="contact" value="<?php echo $music['contact']; ?>" maxlength="10" onkeypress="return event.charCode >= 48 && event.charCode <= 57">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="input-box">
                            <label>Email</label>
                            <input type="text" data-validation="email" data-validation-error-msg="Incorrect e-mail address" name="email" value="<?php echo $music['email']; ?>">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="input-box">
                            <label>Rate (Rs.)</label>
                            <input type="text"  name="rate" value="<?php echo $music['rate']; ?>">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="input-box">
                            <label>Music Type</label>
                            <select class="form-control b-a-2" name="music_type" required="">
                                <option value="<?php echo $music['music_type']; ?>" selected=""><?php echo ucwords($music['music_type']); ?></option>
                                <option value="DJ">DJ</option>
                                <option value="ORCHESTRA">ORCHESTRA</option>
                                <option value="BAND">BAND</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="input-box">
                            <label>Logo </label>
                            <input type="file" name="logo_image" id="file" class="form-control" onchange="loadFile(event)" value="<?php echo $hotel['logo']; ?>">
                            <img id="dp1" height="100" width="150"  src="./admin/logos/<?php echo $music['photo']; ?>">
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
