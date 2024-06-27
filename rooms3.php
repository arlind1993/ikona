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
                        <h2>Rooms And Suites 2</h2>
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
                        <a href="#">Home</a><a href="#">Pages</a><span>Rooms And Suites 2</span> 
                    </div>
                </div>
                <!--breadcrumbs-wrap end  -->
                <!-- section   -->
                <div class="content-section">
                    <div class="section-dec"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="fix-bar-init">
                                    <div class="fw-search-wrap">
                                        <div class="fw-search-wrap-title">Search Filters</div>
                                        <div class="section-separator"><span><i class="fa-thin fa-gem"></i></span></div>
                                        <form  class="custom-form" action="/" name="searchform">
                                            <fieldset>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="date-container input-wrap">
                                                            <label>Date:</label>
                                                            <input type="text" id="res_date"     name="resdate"   value="">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="quantity input-wrap ">
                                                            <div class="quantity_title">Rooms: </div>
                                                            <div class="quantity-item">
                                                                <input type="button" value="-" class="minus">
                                                                <input type="text"    name="quantity"   title="Qty" class="qty color-bg" data-min="1" data-max="10" data-step="1" value="1">
                                                                <input type="button" value="+" class="plus">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="quantity input-wrap ">
                                                            <div class="quantity_title">Guests: </div>
                                                            <div class="quantity-item">
                                                                <input type="button" value="-" class="minus">
                                                                <input type="text"    name="quantity"   title="Qty" class="qty color-bg" data-min="1" data-max="10" data-step="1" value="1">
                                                                <input type="button" value="+" class="plus">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <button class="searchform-submit" id="searchform-submit">Search Room</button>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="shop-header ">
                                    <h4>Showing <span>1 - 6</span> of 19 results</h4>
                                    <div class="shop-header_opt">
                                        <select name="persons" id="list" data-placeholder="Persons" class="chosen-select no-search-select">
                                            <option>Popularity</option>
                                            <option>Average rating</option>
                                            <option>Price: low to high</option>
                                            <option>Price: high to low</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="dec-container">
                                    <div class="dc_dec-item_left"><span></span></div>
                                    <div class="dc_dec-item_right"><span></span></div>
                                    <div class="text-block">
                                        <!-- gallery start -->
                                        <div class="gallery-items fw-gi grid-big-pad  two-column   lightgallery  ">
                                            <!-- gallery-item-->
                                            <div class="gallery-item">
                                                <div class="grid-item-holder hov_zoom">
                                                    <img  src="images/room/1.jpg"    alt="">
                                                    <a href="images/room/1.jpg" class="box-media-zoom   single-popup-image"><i class="fa-light fa-magnifying-glass"></i></a>
                                                    <div class="like-btn"><i class="fa-light fa-heart"></i> <span>Add to Wislist</span></div>
                                                </div>
                                                <div class="grid-item-details">
                                                    <h3><a href="room-single.php">Garden Family Room</a>  </h3>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare sem sed quam tempus aliquet vitae eget dolor. Proin eu ultrices libero.  </p>
                                                    <div class="room-card-details">
                                                        <ul>
                                                            <li><i class="fa-light fa-user"></i><span>2 Guest</span></li>
                                                            <li><i class="fa-light fa-bed-front"></i><span>1 Bed</span></li>
                                                            <li><i class="fa-light fa-bath"></i><span>1 Bath</span></li>
                                                        </ul>
                                                    </div>
                                                    <div class="grid-item_price">
                                                        <span>$129/Night</span>
                                                    </div>
                                                    <a href="room-single.php" class="gid_link"><span>View Details</span> <i class="fa-light fa-arrow-right-long"></i></a>
                                                </div>
                                            </div>
                                            <!-- gallery-item end-->
                                            <!-- gallery-item-->
                                            <div class="gallery-item">
                                                <div class="grid-item-holder hov_zoom">
                                                    <img  src="images/room/1.jpg"    alt="">
                                                    <a href="images/room/1.jpg" class="box-media-zoom   single-popup-image"><i class="fa-light fa-magnifying-glass"></i></a>
                                                    <div class="like-btn"><i class="fa-light fa-heart"></i> <span>Add to Wislist</span></div>
                                                </div>
                                                <div class="grid-item-details">
                                                    <h3><a href="room-single.php">Premium Panorama Room</a></h3>
                                                    <p>Quisque varius eros ac purus dignissim. Proin eu ultrices libero. Curabitur vulputate vestibulum elementum. Suspendisse id neque a nibh mollis blandit.  </p>
                                                    <div class="room-card-details">
                                                        <ul>
                                                            <li><i class="fa-light fa-user"></i><span>4 Guest</span></li>
                                                            <li><i class="fa-light fa-bed-front"></i><span>2 Bed</span></li>
                                                            <li><i class="fa-light fa-bath"></i><span>2 Bath</span></li>
                                                        </ul>
                                                    </div>
                                                    <div class="grid-item_price">
                                                        <span>$230/Night</span>
                                                    </div>
                                                    <a href="room-single.php" class="gid_link"><span>View Details</span> <i class="fa-light fa-arrow-right-long"></i></a>
                                                </div>
                                            </div>
                                            <!-- gallery-item end-->
                                            <!-- gallery-item-->
                                            <div class="gallery-item">
                                                <div class="grid-item-holder hov_zoom">
                                                    <img  src="images/room/1.jpg"    alt="">
                                                    <a href="images/room/1.jpg" class="box-media-zoom   single-popup-image"><i class="fa-light fa-magnifying-glass"></i></a>
                                                    <div class="like-btn"><i class="fa-light fa-heart"></i> <span>Add to Wislist</span></div>
                                                </div>
                                                <div class="grid-item-details">
                                                    <h3><a href="room-single.php">Beach Villa Room</a>  </h3>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare sem sed quam tempus aliquet vitae eget dolor. Proin eu ultrices libero.  </p>
                                                    <div class="room-card-details">
                                                        <ul>
                                                            <li><i class="fa-light fa-user"></i><span>2 Guest</span></li>
                                                            <li><i class="fa-light fa-bed-front"></i><span>1 Bed</span></li>
                                                            <li><i class="fa-light fa-bath"></i><span>1 Bath</span></li>
                                                        </ul>
                                                    </div>
                                                    <div class="grid-item_price">
                                                        <span>$321/Night</span>
                                                    </div>
                                                    <a href="room-single.php" class="gid_link"><span>View Details</span> <i class="fa-light fa-arrow-right-long"></i></a>
                                                </div>
                                            </div>
                                            <!-- gallery-item end-->
                                            <!-- gallery-item-->
                                            <div class="gallery-item">
                                                <div class="grid-item-holder hov_zoom">
                                                    <img  src="images/room/1.jpg"    alt="">
                                                    <a href="images/room/1.jpg" class="box-media-zoom   single-popup-image"><i class="fa-light fa-magnifying-glass"></i></a>
                                                    <div class="like-btn"><i class="fa-light fa-heart"></i> <span>Add to Wislist</span></div>
                                                </div>
                                                <div class="grid-item-details">
                                                    <h3><a href="room-single.php">Comfort Room </a></h3>
                                                    <p>Quisque varius eros ac purus dignissim. Proin eu ultrices libero. Curabitur vulputate vestibulum elementum. Suspendisse id neque a nibh mollis blandit. </p>
                                                    <div class="room-card-details">
                                                        <ul>
                                                            <li><i class="fa-light fa-user"></i><span>1 Guest</span></li>
                                                            <li><i class="fa-light fa-bed-front"></i><span>1 Bed</span></li>
                                                            <li><i class="fa-light fa-bath"></i><span>1 Bath</span></li>
                                                        </ul>
                                                    </div>
                                                    <div class="grid-item_price">
                                                        <span>$84/Night</span>
                                                    </div>
                                                    <a href="room-single.php" class="gid_link"><span>View Details</span> <i class="fa-light fa-arrow-right-long"></i></a>
                                                </div>
                                            </div>
                                            <!-- gallery-item end-->					
                                            <!-- gallery-item-->
                                            <div class="gallery-item">
                                                <div class="grid-item-holder hov_zoom">
                                                    <img  src="images/room/1.jpg"    alt="">
                                                    <a href="images/room/1.jpg" class="box-media-zoom   single-popup-image"><i class="fa-light fa-magnifying-glass"></i></a>
                                                    <div class="like-btn"><i class="fa-light fa-heart"></i> <span>Add to Wislist</span></div>
                                                </div>
                                                <div class="grid-item-details">
                                                    <h3><a href="room-single.php"> Presidential Suite</a>  </h3>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare sem sed quam tempus aliquet vitae eget dolor. Proin eu ultrices libero.  </p>
                                                    <div class="room-card-details">
                                                        <ul>
                                                            <li><i class="fa-light fa-user"></i><span>2 Guest</span></li>
                                                            <li><i class="fa-light fa-bed-front"></i><span>1 Bed</span></li>
                                                            <li><i class="fa-light fa-bath"></i><span>1 Bath</span></li>
                                                        </ul>
                                                    </div>
                                                    <div class="grid-item_price">
                                                        <span>$543/Night</span>
                                                    </div>
                                                    <a href="room-single.php" class="gid_link"><span>View Details</span> <i class="fa-light fa-arrow-right-long"></i></a>
                                                </div>
                                            </div>
                                            <!-- gallery-item end-->
                                            <!-- gallery-item-->
                                            <div class="gallery-item">
                                                <div class="grid-item-holder hov_zoom">
                                                    <img  src="images/room/1.jpg"    alt="">
                                                    <a href="images/room/1.jpg" class="box-media-zoom   single-popup-image"><i class="fa-light fa-magnifying-glass"></i></a>
                                                    <div class="like-btn"><i class="fa-light fa-heart"></i> <span>Add to Wislist</span></div>
                                                </div>
                                                <div class="grid-item-details">
                                                    <h3><a href="room-single.php">Superior  Panorama Room</a></h3>
                                                    <p>Quisque varius eros ac purus dignissim. Proin eu ultrices libero. Curabitur vulputate vestibulum elementum. Suspendisse id neque a nibh mollis blandit. </p>
                                                    <div class="room-card-details">
                                                        <ul>
                                                            <li><i class="fa-light fa-user"></i><span>3 Guest</span></li>
                                                            <li><i class="fa-light fa-bed-front"></i><span>2 Bed</span></li>
                                                            <li><i class="fa-light fa-bath"></i><span>1 Bath</span></li>
                                                        </ul>
                                                    </div>
                                                    <div class="grid-item_price">
                                                        <span>$1030/Night</span>
                                                    </div>
                                                    <a href="room-single.php" class="gid_link"><span>View Details</span> <i class="fa-light fa-arrow-right-long"></i></a>
                                                </div>
                                            </div>
                                            <!-- gallery-item end-->										
                                        </div>
                                    </div>
                                </div>
                                <!-- pagination-->
                                <div class="pagination">
                                    <a href="#" class="prevposts-link"><i class="fa fa-caret-left"></i></a>
                                    <a href="#" >1</a>
                                    <a href="#" class="current-page">2</a>
                                    <a href="#">3</a>
                                    <a href="#">4</a>
                                    <a href="#" class="nextposts-link"><i class="fa fa-caret-right"></i></a>
                                </div>
                                <!-- pagination end-->	
                            </div>
                        </div>
                        <div class="limit-box"></div>
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
        <?php echo generateScripts()?>
    </body>
</html>