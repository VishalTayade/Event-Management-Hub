<?php
include './header.php';
?>
<div class="modal modal-vcenter fade" id="loginModal" tabindex="-1" role="dialog">
    <div class="modal-dialog login-popup" role="document">
        <div class="modal-content">
            <div class="close-icon" aria-label="Close" data-dismiss="modal" ><img src="images/close-icon.png" alt=""></div>
            <div class="left-img"><img src="images/login-leftImg.png" alt=""></div>
            <div class="right-info">
                <h1>Login</h1>
                <div class="sosal-midiyaLogin">
                    <div class="facebook-link">
                        <a href="#"><span class="icon icon-facebook"></span>Sign in with Facebook</a>
                    </div>
                    <div class="google-link">
                        <a href="#"><span class="icon icon-google-plus"></span>Sign in with Google+</a>
                    </div>
                </div>
                <div class="or-text"><span>OR</span></div>
                <div class="input-form">
                    <div class="input-box">
                        <div class="icon icon-user"></div>
                        <input type="text" placeholder="Username">
                    </div>
                    <div class="input-box">
                        <div class="icon icon-lock"></div>
                        <input type="text" placeholder="Password">
                    </div>
                    <div class="check-slide">
                        <div class="check">
                            <label class="label_check" for="checkbox-02"><input type="checkbox" name="sample-checkbox-01" id="checkbox-02" value="1" checked="">Remember me</label>

                        </div>
                        <a href="#">Forgot password ?</a>
                    </div>
                    <div class="submit-slide">
                        <input type="submit" value="Login" class="btn">
                    </div>
                </div>
                <div class="signUp-link">Haven’t signed up yet? <a href="javascript:void(0);">Sign Up</a></div>
            </div>
        </div>
    </div>
</div>
<div class="modal modal-vcenter fade" id="registrationModal" tabindex="-1" role="dialog">
    <div class="modal-dialog registration-popup" role="document">
        <div class="modal-content">
            <div class="close-icon" aria-label="Close" data-dismiss="modal" ><img src="images/close-icon.png" alt=""></div>
            <h1>New Member Registration</h1>
            <div class="registration-form">
                <div class="info">
                    <h2>Why to sign up</h2>
                    <ul>
                        <li>Exclusive discounts for all bookings</li>
                        <li>Full access all discounted prices</li>
                        <li>Dedicated wed-ordinator for your event</li>
                        <li>Custom event planner for your event</li>
                    </ul>
                </div>
                <div class="form-filde">
                    <div class="input-box">
                        <input type="text" placeholder="Email ID">
                    </div>
                    <div class="input-box">
                        <input type="text" placeholder="Username">
                    </div>
                    <div class="input-box">
                        <input type="text" placeholder="Password">
                    </div>
                    <div class="input-box">
                        <input type="text" placeholder="Phone">
                    </div>
                    <div class="captcha-box">
                        <input type="text" placeholder="Enter Captcha">
                        <div class="captcha-img"><img src="images/capcha-img.png" alt=""></div>
                    </div>
                    <div class="note">Can’t Read ?<a href="#">Refresh</a></div>
                    <div class="check-slide">
                        <label class="label_check" for="checkbox-03"><input type="checkbox" name="sample-checkbox-01" id="checkbox-03" value="1" checked="">By signing up, I agree to EventPlanning terms of services</label>
                    </div>
                    <div class="submit-slide">
                        <input type="submit" value="Register" class="btn">
                    </div>
                </div>
            </div>
        </div>    
    </div>
</div>

<section class="banner">
    <div class="carousel" id="mainBnner">
        <div class="item"><img src="images/banner-img/slider-img6.jpg" alt="" style="height:600px;"></div>
        <div class="item"><img src="images/banner-img/slider-img4.jpg" alt="" style="height:600px;"></div>
        <div class="item"><img src="images/banner-img/slider-img5.jpg" alt="" style="height:600px;"></div>
    </div>
    <div class="banner-nav">
        <div class="prev"><span class="icon icon-arrow-left"></span></div>
        <div class="next"><span class="icon icon-arrow-right"></span></div>
    </div>

</section>
<section class="service-type">
    <div class="container">
        <div class="heading">
            <div class="icon"><em class="icon icon-heading-icon"></em></div>
            <div class="text">
                <h2>Our Services</h2>
            </div>
            <div class="info-text">It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</div>
        </div>
        <div class="service-catagari">
            <ul>
                <li>
                    <a href="caterers.php">
                        <span class="icon icon-caterers"></span>
                        <span class="text">Caterers</span>
                    </a>
                </li>
                <li>
                    <a href="decor-florists.php">
                        <span class="icon icon-flower-pot"></span>
                        <span class="text">Decor & Florists</span>
                    </a>
                </li>
                <li>
                    <a href="wedding-planner.php">
                        <span class="icon icon-calander"></span>
                        <span class="text">Event Planner</span>
                    </a>
                </li>
                <li>
                    <a href="makeup-hair.php">
                        <span class="icon icon-beauty"></span>
                        <span class="text">Make-up and Hair</span>
                    </a>
                </li>
                <li>
                    <a href="wedding-cards.php">
                        <span class="icon icon-wedding-card"></span>
                        <span class="text">Wedding Cards</span>
                    </a>
                </li>
                <li>
                    <a href="mehandi.php">
                        <span class="icon icon-mehandi"></span>
                        <span class="text">Mehandi</span>
                    </a>
                </li>
                <li>
                    <a href="cakes.php">
                        <span class="icon icon-cake"></span>
                        <span class="text">Cakes</span>
                    </a>
                </li>
                <li>
                    <a href="music.php">
                        <span class="icon icon-music"></span>
                        <span class="text">Music</span>
                    </a>
                </li>
                <li>
                    <a href="photo-video-grapher.php">
                        <span class="icon icon-camera"></span>
                        <span class="text">Photographers &amp; Videographers</span>
                    </a>
                </li>
                <li>
                    <a href="hotels.php">
                        <span class="icon icon-hotel"></span>
                        <span class="text">Hotel</span>
                    </a>
                </li>
            </ul>

        </div>
    </div>
</section>
<section class="our-history">
    <div class="container">
        <div class="history-slider">
            <div class="item"><img src="images/about-us/about-sliderImg1.jpg" alt=""></div>
            <div class="item"><img src="images/about-us/about-sliderImg2.jpg" alt=""></div>
            <div class="item"><img src="images/about-us/about-sliderImg3.jpg" alt=""></div>
            <div class="item"><img src="images/about-us/about-sliderImg4.jpg" alt=""></div>
        </div>
        <div class="col-sm-6 pull-right col-md-5">
            <div class="sub-title2 left-text">
                <h2>Who we are ?</h2>
                <div class="icon"><em class="icon icon-heading-icon"></em></div>
                <p>Remaining essentially unchanged.</p>
            </div>
            <p>Wedding Design are the international luxury wedding planners of choice for those seeking authentic and unique celebrations. We have built a global reputation for creating outstanding luxury weddings. From small intimate gatherings to large and lavish affairs, we offer first class service and plan world class events. Passionate about what we do, we strive to ensure all our celebrations are exceptional. Across the world we work with the best in the business, and together we set trends rather than follow them.</p>

        </div>
    </div>
</section>
<section class="gallery-viewHome">
    <div class="container">
        <div class="sub-title2">
            <h2>Our Gallery</h2>
            <div class="icon"><em class="icon icon-heading-icon"></em></div>
        </div>
        <ul class="gallery-filter">
            <li data-filter=".wedding" class="active">Wedding</li>

        </ul>
        <div class="grid">
            <div class="row">
                <div class="col-sm-3 filtr-item wedding" data-category="1"><div class="gallery-img"><img src="images/gallery-img/home2-galleryImg1.jpg" alt=""></div></div>
                <div class="col-sm-6 filtr-item wedding" data-category="1"><div class="gallery-img"><img src="images/gallery-img/home2-galleryImg2.jpg" alt=""></div></div>
                <div class="col-sm-3 filtr-item wedding" data-category="1"><div class="gallery-img"><img src="images/gallery-img/home2-galleryImg3.jpg" alt=""></div></div>
                <div class="col-sm-3 filtr-item wedding" data-category="1"><div class="gallery-img"><img src="images/gallery-img/home2-galleryImg4.jpg" alt=""></div></div>
                <div class="col-sm-3 filtr-item wedding" data-category="1"><div class="gallery-img"><img src="images/gallery-img/home2-galleryImg5.jpg" alt=""></div></div>
                <div class="col-sm-3 filtr-item wedding" data-category="1"><div class="gallery-img"><img src="images/gallery-img/home2-galleryImg6.jpg" alt=""></div></div>

            </div>
        </div>
    </div>
</section>
<?php
include './footer.php';
?>

