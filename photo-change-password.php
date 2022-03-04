<?php
include './header.php';
?>


<div class="dashboard-banner">
    <div class="container">
        <h2>My Dashboard</h2>
        <div class="breadcrumb">
            <ul>
                <li><a href="#">Home</a>/</li>
                <li class="active"><a href="#">Change Password</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="content">
    <div class="container">
        <div class="my-account">
            <div class="account-tab">
                <ul>
                    <li class="active"><a href="javascript:void(0);" id="profile">Change Password</a></li>
                </ul>
            </div>
            <div class="tab-content profile-con open">
                <form action="photo-change-password-save.php" method="post">
                    <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
                    <div class="change-password ">
                        <div class="input-box">
                            <input type="password" placeholder="Current Password" name="old-password">
                        </div>
                        <div class="input-box">
                            <input type="password" placeholder="New Password" name="new-password">
                        </div>
                        <div class="input-box">
                            <input type="password" placeholder="Confirm Password" name="retype-password">
                        </div>
                        <div class="submit-box">
                            <input type="submit" value="Reset" class="btn">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="functionality-view">
        <div class="row">
            <div class="col-sm-6 col-md-3">
                <div class="functionality-box">
                    <div class="iconBox"><div class="icon icon-lead-management"></div></div>
                    <h3>Lead Management</h3>
                    <p>Increase occupancy, automate the lead management process, grow your  customer relationships, match sales-ready leads to the appropriate sales people.</p>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="functionality-box">
                    <div class="iconBox"><div class="icon icon-sales"></div></div>
                    <h3>Sales</h3>
                    <p>Track sales opportunities, manage the sales process and generate proposals. Built-in process provides an aggregate view of account activity from the past, present and future.</p>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="functionality-box">
                    <div class="iconBox"><div class="icon icon-booking"></div></div>
                    <h3>Booking</h3>
                    <p>Manage calendars , share availability, easily view events color-coded by status, type or location. Book and manage multiple spaces, venues, and sites all from one master calendar.</p>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="functionality-box">
                    <div class="iconBox"><div class="icon icon-operations"></div></div>
                    <h3>Operations</h3>
                    <p>Assign resources and review stock alerts. Create detailed reports, work orders, and generate invoices. Receive alerts on changes as they take place.</p>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<?php
include './footer.php';
?>