<?php
include './header.php';
$user1 = $db->select("users", "*", ['user_id' => $user_id])[0];
$booking = $db->select("book", "*", ["AND" => ['card_id' => $user1['card_id'], 'deleted' => 0]]);
?>


<div class="dashboard-banner">
    <div class="container">
        <h2>My Dashboard</h2>
        <div class="breadcrumb">
            <ul>
                <li><a href="#">Home</a>/</li>
                <li class="active"><a href="#">My Orders</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="content">
    <div class="container">
        <div class="my-account">
            <div class="account-tab">
                <ul>
                    <li class="active"><a href="javascript:void(0);" id="profile">Order</a></li>
                </ul>
            </div>
            <?php if (sizeof($booking) != 0) { ?>
                <div class="tab-content profile-con open">
                    <table class="booking-viewTable">
                        <tr>
                            <th>Booking ID</th>
                            <th class="detail">Booking Details</th>
                            <th>Booking Date</th>
                            <th>Booking Time</th>
                            <th>Event Date</th>
                        </tr>
                        <?php
                        foreach ($booking as $book) {
                            $wb_user = $db->select("website_users", "*", ['register_id' => $book['register_id']])[0];
                            $card = $db->select("cards", "*", ["AND" => ['card_id' => $book['card_id'], 'deleted' => 0]])[0];
                            //$user = $db->select("users", "*", ["AND" => ['decor_id' => $decor['decor_id'], 'type' => "decor"]])[0];
                            $timestamp = $book['timestamp'];
                            $splitTimeStamp = explode(" ", $timestamp);
                            $date = $splitTimeStamp[0];
                            $time = $splitTimeStamp[1];
                            ?>

                            <tr>
                                <td><span class="small-heading">Booking ID</span><?php echo $book['book_id']; ?></td>
                                <td class="detail">
                                    <span class="small-heading">Booking Details</span>
                                    <div class="detailTd">
                                        <label><?php echo ucwords($wb_user['Name']); ?></label>
                                        <p><?php echo ucwords($book['venue']); ?></p>
                                        <a href="#">Phone : <?php echo $wb_user['contact']; ?></a>
                                    </div>
                                </td>
                                <td><span class="small-heading">Booking Date</span><?php echo date("d-m-Y", strtotime($date)); ?></td>
                                <td><span class="small-heading">Booking Time</span><?php echo date("H:i:s", strtotime($time)); ?></td>
                                <td><span class="small-heading">Event Date</span><?php echo date("d-m-Y", strtotime($book['date'])); ?></td>
                            </tr>
                        <?php }
                        ?>
                    </table>
                    <div class="booking-status">
                        <a href="order-cancel.php?book_id=<?php echo $book['book_id']; ?>" class="cancel">Cancel your Booking</a>
                        <div class="status">Status :<span> Booked</span></div>
                    </div>
                </div>
            <?php } else { ?>
                <h2>No Orders Found...!!!</h2>
            <?php } ?>
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