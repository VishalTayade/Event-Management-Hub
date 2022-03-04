<?php
include './header.php';
$user = $db->select("users", "*", ['user_id' => $user_id])[0];
$hotel = $db->select("hotels", "*", ["AND" => ['hotel_id' => $user['hotel_id'], 'deleted' => 0]])[0];
?>

<section class="page-header">
    <div class="container">
        <h1>Profile Update</h1>
    </div>
</section>
<section class="contackForm">
    <div class="container">
        <div class="row">
            <form class="has-validation-callback" action="hotel-profile-update-save.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="hotel_id" value="<?php echo $hotel['hotel_id']; ?>">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="input-box">
                            <label>Hotel Name</label>
                            <input type="text" name="hotel_name" value="<?php echo $hotel['hotel_name']; ?>">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="input-box">
                            <label>Hotel Address</label>
                            <input type="text"  name="address" value="<?php echo $hotel['address']; ?>">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="input-box">
                            <label>City</label>
                            <input type="text"  name="city" value="<?php echo $hotel['city']; ?>">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="input-box">
                            <label>Contact Person Name</label>
                            <input type="text"  name="contact_person" value="<?php echo $hotel['contact_person']; ?>">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="input-box">
                            <label>Mobile</label>
                            <input type="text"  name="mobile" value="<?php echo $hotel['mobile']; ?>" maxlength="10" onkeypress="return event.charCode >= 48 && event.charCode <= 57">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="input-box">
                            <label>Email</label>
                            <input type="text" data-validation="email" data-validation-error-msg="Incorrect e-mail address" name="email" value="<?php echo $hotel['email']; ?>">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="input-box">
                            <label>Rate (Rs.)</label>
                            <input type="text"  name="rate" value="<?php echo $hotel['rate']; ?>">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="input-box">
                            <label>Seating Capacity</label>
                            <input type="text"  name="capacity" value="<?php echo $hotel['capacity']; ?>">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="input-box">
                            <label>Logo </label>
                            <input type="file" name="logo_image" id="file" class="form-control" onchange="loadFile(event)" value="<?php echo $hotel['logo']; ?>">
                            <img id="dp1" height="100" width="150"  src="./admin/logos/<?php echo $hotel['logo']; ?>">
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
