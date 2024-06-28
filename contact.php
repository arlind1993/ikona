<?php require_once "generate.php"?>
<!DOCTYPE HTML>
<html lang="en">
    <?php echo generateHead("Diamant - Hotel & Resort Booking  Template")?>
    <body>
        <?php require_once "loader.php"?>
        <!--  main   -->
        <div id="main">
            <?php require_once "header.php"?>
            <!--  section  -->
            <div class="content-section parallax-section hero-section hidden-section" data-scrollax-parent="true">
                <div class="bg par-elem " data-bg="images/bg/1.jpg" data-scrollax="properties: { translateY: '30%' }"></div>
                <div class="overlay"></div>
                <div class="container">
                    <div class="section-title">
                        <h4>Enjoy your time in our Hotel with pleasure.</h4>
                        <h2>Our Contacts</h2>
                        <div class="section-separator"><span><i class="fa-thin fa-gem"></i></span></div>
                    </div>
                </div>
                <div class="hero-section-scroll">
                    <div class="mousey">
                        <div class="scroller"></div>
                    </div>
                </div>
                <div class="dec-corner dc_lb"></div>
                <div class="dec-corner dc_rb"></div>
                <div class="dec-corner dc_rt"></div>
                <div class="dec-corner dc_lt"></div>
            </div>
            <!-- section end  -->
            <!--content-->
            <div class="content">
                <!-- breadcrumbs-wrap  -->
                <div class="breadcrumbs-wrap">
                    <div class="container">
                        <a href="#">Home</a><a href="#">Pages</a><span>Contacts</span> 
                    </div>
                </div>
                <!--breadcrumbs-wrap end  -->
                <!-- section   -->
                <div class="content-section">
                    <div class="section-dec"></div>
                    <div class="content-dec2 fs-wrapper"></div>
                    <div class="container">
                        <!-- contacts-cards-wrap  -->	
                        <div class="contacts-cards-wrap">
                            <div class="dec-container">
                                <div class="text-block">
                                    <div class="row">
                                        <!-- contacts-card-item -->	
                                        <div class="col-lg-4">
                                            <div class="contacts-card-item">
                                                <i class="fa-light fa-location-dot"></i>
                                                <span>Our Location</span>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt.</p>
                                                <a href="#">USA 27TH Brooklyn NY</a>
                                            </div>
                                        </div>
                                        <!-- contacts-card-item end-->	
                                        <!-- contacts-card-item -->	
                                        <div class="col-lg-4">
                                            <div class="contacts-card-item">
                                                <i class="fa-light fa-phone-rotary"></i>
                                                <span>Our   Phone</span>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt.</p>
                                                <a href="#"> +489756412322</a>
                                                <a href="#"> +123456789222</a>
                                            </div>
                                        </div>
                                        <!-- contacts-card-item end-->
                                        <!-- contacts-card-item -->	
                                        <div class="col-lg-4">
                                            <div class="contacts-card-item">
                                                <i class="fa-light fa-mailbox"></i>
                                                <span>Our Mail</span>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt.</p>
                                                <a href="#">yourmail@domain.com</a>
                                            </div>
                                        </div>
                                        <!-- contacts-card-item end-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- contacts-cards-wrap end   -->
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="dec-container">
                                    <div class="text-block">
                                        <div class="text-block ">
                                            <div class="tbc_subtitle">Get In Touch</div>
                                            <div class="tbc-separator"></div>
                                            <div class="contactform-wrap">
                                                <form  class="comment-form" action="contact-info.php" name="contactform" id="contactform">
                                                    <fieldset>
                                                        <div id="message"></div>
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <input type="text" name="name" id="name" placeholder="Your Name *" value="">
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <input type="text"  name="email" id="email" placeholder="Email Address *" value="">
                                                            </div>
                                                        </div>
                                                        <textarea name="comments"  id="comments" cols="40" rows="3" placeholder="Your Message:"></textarea>
                                                        <button class="commentssubmit" id="submit_cnt">Send Message  </button>
                                                    </fieldset>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="map-container  mapC_vis">
                                    <div id="singleMap" class="fs-wrapper" data-latitude="42.0675977" data-longitude="19.516481"></div>
                                    <div class="scrollContorl"></div>
                                </div>
                            </div>
                        </div>
                        <div class="dc_dec-item_left"><span></span></div>
                        <div class="dc_dec-item_right"><span></span></div>
                    </div>
                </div>
                <!-- section end  -->
                <div class="content-dec"><span></span></div>
            </div>
            <!--content end-->
            <?php require_once "footer.php"?>
        </div>
        <!-- Main end -->
        <?php echo generateScripts(['maps'=> true])?>
    </body>
</html>