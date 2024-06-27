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
                                    <div id="singleMap" class="fs-wrapper" data-latitude="40.7427837" data-longitude="-73.11445617"></div>
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
            <!--footer  -->
            <div class="height-emulator"></div>
            <footer class="main-footer">
                <div class="footer-inner">
                    <div class="container">
                        <!-- footer-widget-wrap -->
                        <div class="footer-widget-wrap">
                            <div class="footer-separator-wrap">
                                <div class="footer-separator"><span></span></div>
                            </div>
                            <div class="row">
                                <!-- footer-widget -->
                                <div class="col-lg-3">
                                    <div class="footer-widget">
                                        <div class="footer-widget-title">About us</div>
                                        <div class="footer-widget-content">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Eaque ipsa quae ab illo inventore veritatis et quasi architecto. Consectetur adipiscing elit. </p>
                                            <a href="about.php" class="footer-widget-content-link"><span>Read more</span></a>                                                    	
                                        </div>
                                    </div>
                                </div>
                                <!-- footer-widget  end-->
                                <!-- footer-widget -->
                                <div class="col-lg-3">
                                    <div class="footer-widget">
                                        <div class="footer-widget-title">Contact info  </div>
                                        <div class="footer-widget-content">
                                            <div class="footer-contacts footer-box">
                                                <ul>
                                                    <li><span>Call :</span><a href="#">+489756412322</a> , <a href="#">+56897456123</a></li>
                                                    <li><span>Write  :</span><a href="#">yourmail@domain.com</a></li>
                                                    <li><span>Find us : </span><a href="#">USA 27TH Brooklyn NY</a></li>
                                                </ul>
                                            </div>
                                            <a href="contacts.php" class="footer-widget-content-link"><span>Get in Touch</span></a>                                                    	
                                        </div>
                                    </div>
                                </div>
                                <!-- footer-widget  end-->
                                <!-- footer-widget -->
                                <div class="col-lg-2">
                                    <div class="footer-widget">
                                        <div class="footer-widget-title">Helpful links</div>
                                        <div class="footer-widget-content">
                                            <div class="footer-list footer-box  ">
                                                <ul>
                                                    <li><a href="#">Our last News</a></li>
                                                    <li><a href="#">Rooms</a></li>
                                                    <li><a href="#">Contacts</a></li>
                                                    <li><a href="#">About</a></li>
                                                    <li><a href="#">Privacy Policy</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- footer-widget  end-->								
                                <!-- footer-widget -->
                                <div class="col-lg-4">
                                    <div class="footer-widget">
                                        <div class="footer-widget-title">Subscribe</div>
                                        <div class="footer-widget-content">
                                            <div class="subcribe-form">
                                                <p>Want to be notified when we launch a new template or an udpate. Just sign up and we'll send you a notification by email.</p>
                                                <form id="subscribe">
                                                    <input class="enteremail" name="email" id="subscribe-email" placeholder="Your Email" spellcheck="false" type="text">
                                                    <button type="submit" id="subscribe-button" class="subscribe-button color-bg">Send </button>
                                                    <label for="subscribe-email" class="subscribe-message"></label>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- footer-widget  end-->
                            </div>
                        </div>
                        <!-- footer-widget-wrap end-->					
                    </div>
                    <div class="footer-title-dec">Diamant Hotel</div>
                </div>
                <div class="footer-social">
                    <div class="container">
                        <ul>
                            <li><a href="#" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fa-brands fa-x-twitter"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fa-brands fa-tiktok"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="footer-bottom">
                    <div class="container">
                        <a href="index.php" class="footer-logo"><img src="images/logo.png" alt=""></a>
                        <div class="copyright">&#169; Diamant 2024 . All rights reserved. </div>
                        <div class="to-top"><span>Back To Top </span><i class="fal fa-angle-double-up"></i></div>
                    </div>
                </div>
            </footer>
            <!--footer end-->
        </div>
        <!-- Main end -->
        <?php echo generateScripts(['maps'=> true])?>
    </body>
</html>