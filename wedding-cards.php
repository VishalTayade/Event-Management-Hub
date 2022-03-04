<?php
include './header.php';
$cards = $db->select("cards", "*", ["deleted" => 0]);
?>
<section class="content">
    <div class="breadcrumb">
        <div class="container">
            <ul>
                <li><a href="#">Home</a>/</li>
                <li><a href="#">Wedding cards</a>/</li>
            </ul>                

        </div>
    </div>
    <div class="container pt-15 pb-10">
        <div class="venues-view">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-12">
                    <div class="left-side">
                        <div class="search">
                            <div class="search-icon"><div class="icon icon-search"></div></div>
                            <input type="text" placeholder="Search by name">
                        </div>
                        <div class="left-link">
                            <h2>People also viewed...</h2>
                            <ul>
                                <li><a href="caterers.php">Caterers</a></li>
                                <li><a href="mehandi.php">Mehandi</a></li>
                                <li><a href="decor-florists.php">Decor &amp; Florists</a></li>
                                <li><a href="cakes.php">Cakes</a></li>
                                <li><a href="wedding-planner.php">Wedding Planner</a></li>
                                <li><a href="hotels.php">Hotels</a></li>
                                <li><a href="makeup-hair.php">Make-up and Hair</a></li>
                                <li><a href="music.php">Music</a></li>
                                <li><a href="photo-video-grapher.php">Photographers/ Videographers</a></li>
                                <li><a href="wedding-cards.php">Wedding Cards</a></li>
                            </ul>
                        </div>
                        <div class="left-productBox hidden-sm">
                            <h2>Featured Venues</h2>
                            <div class="product-img"><img src="images/property-img/venues-img8.jpg" alt=""></div>
                            <h3>Hilton Berlin </h3>
                            <p>Mohrenstrasse 30 Berlin, 10117 - Germany</p>
                            <div class="reviews">3.5 <div class="star"><div style="width:70%;" class="fill"></div></div>reviews</div>
                            <a href="#">View all Details <span class="icon icon-arrow-right"></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-9 col-lg-9 col-sm-12">
                    <div class="right-side"><?php
                        foreach ($cards as $card) {
                            ?>

                            <div class="venues-slide first">

                                <div class="img"><img src="./admin/logos/<?php echo $card['logo']; ?>" style="height: 230px;"></div>
                                <div class="text">
                                    <h3><b><?php echo ucwords($card['card_name']); ?></b> </h3>
                                    <div class="address" style="color: red;"><?php echo $card['address']; ?>, <?php echo $card['city']; ?></div>
                                    <div class="address" style="color: red;">Contact No.: <?php echo $card['mobile']; ?></div>
                                    <div class="address" style="color: red;">Type.: <?php echo $card['type']; ?></div>
                                    <div class="address" style="color: red;">Rate.: <?php echo $card['rate']; ?></div>

                                    <br>
                                    <br>
                                    <?php
                                    if (isset($_SESSION['web_user'])) {
                                        ?>
                                        <div class="button">
                                            <a href="card-book.php?register_id=<?php echo $register_id; ?>&card_id=<?php echo $card['card_id']; ?>" class="btn">Book Now</a>
                                        </div>
                                        <?php
                                    } else {
                                        ?>

                                        <div class="button"> <a href="javascript:;" data-toggle="modal" data-target="#loginModal" class="btn">Book Now</a></div>

                                        <?php
                                    }
                                    ?>
                                </div>
                            </div>   <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
include './footer.php'
?>






