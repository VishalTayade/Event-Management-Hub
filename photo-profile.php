<?php
include './header.php';
$user = $db->select("users", "*", ['user_id' => $user_id])[0];
$photo = $db->select("photographers", "*", ["AND" => ['photo_id' => $user['photo_id'], 'deleted' => 0]])[0];
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
                    <a href="photo-profile-update.php"><span class="icon icon-pencile"></span>Edit Profile</a>
                </div>
                <div class="personal-information">
                    <div class="info-slide">
                        <p><span>Studio Name :</span><?php echo ucwords($photo['studio_name']); ?></p>
                    </div>
                    <div class="info-slide">
                        <p><span> Address :</span><?php echo ucwords($photo['address']); ?> <?php echo $photo['city']; ?></p>
                    </div>
                    <div class="info-slide">
                        <p><span>Contact Person Name :</span><?php echo ucwords($photo['contact_person']); ?></p>
                    </div>
                    <div class="info-slide">
                        <p><span>Mobile Number :</span><?php echo $photo['mobile']; ?></p>
                    </div>
                    <div class="info-slide">
                        <p><span>Email ID :</span><?php echo $photo['email']; ?></p>
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