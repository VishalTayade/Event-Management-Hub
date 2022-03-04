<?php
include './header.php';
$user = $db->select("users", "*", ['user_id' => $user_id])[0];
$card = $db->select("cards", "*", ["AND" => ['card_id' => $user['card_id'], 'deleted' => 0]])[0];
?>

<section class="page-header">
    <div class="container">
        <h1>Profile Update</h1>
    </div>
</section>
<section class="contackForm">
    <div class="container">
        <div class="row">
            <form class="has-validation-callback" action="card-profile-update-save.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="card_id" value="<?php echo $card['card_id']; ?>">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="input-box">
                            <label>Card Name</label>
                            <input type="text" name="card_name" value="<?php echo $card['card_name']; ?>">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="input-box">
                            <label>Card Address</label>
                            <input type="text"  name="address" value="<?php echo $card['address']; ?>">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="input-box">
                            <label>City</label>
                            <input type="text"  name="city" value="<?php echo $card['city']; ?>">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="input-box">
                            <label>Contact Person Name</label>
                            <input type="text"  name="contact_person" value="<?php echo $card['contact_person']; ?>">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="input-box">
                            <label>Mobile</label>
                            <input type="text"  name="mobile" value="<?php echo $card['mobile']; ?>" maxlength="10" onkeypress="return event.charCode >= 48 && event.charCode <= 57">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="input-box">
                            <label>Email</label>
                            <input type="text" data-validation="email" data-validation-error-msg="Incorrect e-mail address" name="email" value="<?php echo $card['email']; ?>">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="input-box">
                            <label>1 Card per Rate (Rs.)</label>
                            <input type="text"  name="rate" value="<?php echo $card['rate']; ?>">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="input-box">
                            <label>Card Type</label>
                            <select class="form-control b-a-2" name="type" required="">
                                <option value="<?php echo $card['type']; ?>" selected=""><?php echo ucwords($card['type']); ?></option>
                                <option value="letterpress wedding card">Letterpress Wedding Card</option>
                                <option value="pocket wedding card">Pocket Wedding Card</option>
                                <option value="photo wedding card">Photo Wedding Card</option>
                                <option value="thermography wedding card">Thermography Wedding Card</option>
                                <option value="foil wedding card">Foil Wedding Card</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="input-box">
                            <label>Logo </label>
                            <input type="file" name="logo_image" id="file" class="form-control" onchange="loadFile(event)" value="<?php echo $hotel['logo']; ?>">
                            <img id="dp1" height="100" width="150"  src="./admin/logos/<?php echo $card['logo']; ?>">
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
