<?php
include 'header.php';
$user_id = $_SESSION['admin']['user_id'];
?>
<script src="jquery.validate.js" type="text/javascript"></script>
<script src="datatables.min.js" type="text/javascript"></script>
<script src="uniform.min.js" type="text/javascript"></script>
<script>
    $().ready(function() {
        // validate the comment form when it is submitted
        $("#reg-form").validate();

        // validate signup form on keyup and submit

    });
</script>
<style>
    label.error {
        color:red;
    }
    select.error,input.error { border: 1px dotted red; }
    input[type=number]::-webkit-inner-spin-button,
    input[type=number]::-webkit-outer-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }
</style>
<div class="site-content">
    <div class="panel panel-info">
        <div class="panel-heading">
            <h3 class="m-y-0">Reset Password</h3>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-12">
                    <form id="inputmasks" data-toggle="validator" class="form-horizontal" action="change-password-save.php" method="post">
                        <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
                        <div class="form-group">
                            <div class="col-sm-4">
                                <label  for="form-control-3">Old Password</label>
                                <input id="old-password" class="form-control b-a-2"  name="old-password" placeholder="Enter Old Password" type="password" required="">
                            </div>
                            <div class="col-sm-4">
                                <label  for="form-control-3">New Password</label>
                                <input id="new-password" class="form-control b-a-2" name="new-password" placeholder="Enter New Password" type="password" required="">
                            </div>
                            <div class="col-sm-4">
                                <label  for="form-control-3">Re-Type Password</label>
                                <input id="retype-password" class="form-control b-a-2"  name="retype-password" placeholder="ReType Password" type="password" required="">
                            </div>

                            <div class="col-sm-3">
                                <button type="submit" style="margin-top: 10%;" class="btn btn-success btn-block">Submit</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php
    include 'footer.php';
    ?>