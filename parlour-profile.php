<?php
include './header.php';
$user = $db->select("users", "*", ['user_id' => $user_id])[0];
$parlour = $db->select("parlours", "*", ["AND" => ['parlour_id' => $user['parlour_id'], 'deleted' => 0]])[0];
?>


<div class="dashboard-banner">
    <div class="container">
        <h2>My Dashboard</h2>
        <div class="breadcrumb">
            <ul>
                <li><a href="#">Home</a>/</li>
                <li class="active"><a href="#">My Account</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="content">
    <div class="container">
        <div class="my-account">
            <div class="account-tab">
                <ul>
                    <li class="active"><a href="javascript:void(0);" id="profile">Profile</a></li>
                </ul>
            </div>
            <div class="tab-content profile-con open">
                <div class="personal-edit">
                    <a href="parlour-profile-update.php"><span class="icon icon-pencile"></span>Edit Profile</a>
                </div>
                <div class="personal-information">
                    <div class="info-slide">
                        <p><span>Parlour Name :</span><?php echo ucwords($parlour['parlour_name']); ?></p>
                    </div>
                    <div class="info-slide">
                        <p><span>Parlour Address :</span><?php echo ucwords($parlour['address']); ?> <?php echo $parlour['city']; ?></p>
                    </div>
                    <div class="info-slide">
                        <p><span>Contact Person Name :</span><?php echo ucwords($parlour['contact_person']); ?></p>
                    </div>
                    <div class="info-slide">
                        <p><span>Mobile Number :</span><?php echo $parlour['mobile']; ?></p>
                    </div>
                    <div class="info-slide">
                        <p><span>Email ID :</span><?php echo $parlour['email']; ?></p>
                    </div>
                    <div class="info-slide">
                        <p><span>Makeup For :</span><?php echo $parlour['for']; ?></p>
                    </div>
                    <div class="info-slide">
                        <p><span>Rate :</span>Rs.<?php echo $parlour['rate']; ?>/-</p>
                    </div>
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