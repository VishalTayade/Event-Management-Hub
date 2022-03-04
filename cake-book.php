<?php
include './header.php';
$cake_id = $_REQUEST['cake_id'];
$register_id = $_REQUEST['register_id'];
?>

<section class="banner">
    <div class="carousel" id="mainBnner">
        <div class="item"><img src="images/banner-img/slider-img.jpg" alt=""></div>
        <div class="item"><img src="images/banner-img/slider-img2.jpg" alt=""></div>
        <div class="item"><img src="images/banner-img/slider-img3.jpg" alt=""></div>
    </div>
    <div class="banner-nav">
        <div class="prev"><span class="icon icon-arrow-left"></span></div>
        <div class="next"><span class="icon icon-arrow-right"></span></div>
    </div>
    <div class="banner-text">
        <div class="container">
            <div class="search-title">
                <h1> Every Event Should be  <span>Perfect</span></h1>
            </div>
            <form action="cake-book-save.php" method="post">
                <div class="banner-search">
                    <input type="hidden" name="register_id" value="<?php echo $register_id; ?>">
                    <input type="hidden" name="cake_id" value="<?php echo $cake_id; ?>">
                    <div class="input-box location">
                        <div class="icon icon-location-1"></div>
                        <input type="text" name="venue" placeholder="Event Location">
                    </div>
                    <div class="input-box date">
                        <div class="icon icon-calander-month"></div>
                        <input type="text" name="date" placeholder="Select Date" id="datepicker2">
                    </div>
                    <div class="submit-slide">
                        <input type="submit" value="Book" class="btn">
                    </div>
                    <p>Create the Perfect Event</p>	
                </div>
            </form>
        </div>
    </div>
</section>
<?php
include './footer.php';
?>

