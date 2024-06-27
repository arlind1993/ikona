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
                        <h2>Rooms And Suites</h2>
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
                        <a href="#">Home</a><a href="#">Pages</a><span>Rooms And Suites</span> 
                    </div>
                </div>
                <!--breadcrumbs-wrap end  -->
                <!-- section   -->
                <div class="content-section">
                    <div class="content-dec2 fs-wrapper"></div>
                    <div class="section-dec"></div>
                    <div class="container small-container ">
                        <div class="fw-search-wrap">
                            <form  class="custom-form" action="/" name="searchform">
                                <fieldset>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="date-container input-wrap">
                                                <label>Date:</label>
                                                <input type="text" id="res_date"     name="resdate"   value="">
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="quantity">
                                                <div class="quantity_title">Rooms: </div>
                                                <div class="quantity-item">
                                                    <input type="button" value="-" class="minus">
                                                    <input type="text"    name="quantity"   title="Qty" class="qty color-bg" data-min="1" data-max="10" data-step="1" value="1">
                                                    <input type="button" value="+" class="plus">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="quantity">
                                                <div class="quantity_title">Guests: </div>
                                                <div class="quantity-item">
                                                    <input type="button" value="-" class="minus">
                                                    <input type="text"    name="quantity"   title="Qty" class="qty color-bg" data-min="1" data-max="10" data-step="1" value="1">
                                                    <input type="button" value="+" class="plus">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <button class="searchform-submit" id="searchform-submit">Search Room</button>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                    <div class="container">
                        <div class="dec-container">
                            <div class="dc_dec-item_left"><span></span></div>
                            <div class="dc_dec-item_right"><span></span></div>
                            <div class="text-block">
                                <!-- gallery start -->
                                <div class="gallery-items grid-big-pad  lightgallery  ">
                                    <!-- gallery-item-->
                                    <div class="gallery-item desserts">
                                        <div class="grid-item-holder hov_zoom">
                                            <img  src="images/room/1.jpg"    alt="">
                                            <a href="images/room/1.jpg" class="box-media-zoom   single-popup-image"><i class="fa-light fa-magnifying-glass"></i></a>
                                            <div class="like-btn"><i class="fa-light fa-heart"></i> <span>Add to Wislist</span></div>
                                        </div>
                                        <div class="grid-item-details">
                                            <h3><a href="room-single.php">Garden Family Room</a>  </h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare sem sed quam tempus aliquet vitae eget dolor. Proin eu ultrices libero. Curabitur vulputate vestibulum elementum.  </p>
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
                                    <div class="gallery-item seafood">
                                        <div class="grid-item-holder hov_zoom">
                                            <img  src="images/room/1.jpg"    alt="">
                                            <a href="images/room/1.jpg" class="box-media-zoom   single-popup-image"><i class="fa-light fa-magnifying-glass"></i></a>
                                            <div class="like-btn"><i class="fa-light fa-heart"></i> <span>Add to Wislist</span></div>
                                        </div>
                                        <div class="grid-item-details">
                                            <h3><a href="room-single.php">Premium Panorama Room</a></h3>
                                            <p>Quisque varius eros ac purus dignissim. Proin eu ultrices libero. Curabitur vulputate vestibulum elementum. Suspendisse id neque a nibh mollis blandit. Quisque varius eros ac purus dignissim.</p>
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
                                    <div class="gallery-item desserts">
                                        <div class="grid-item-holder hov_zoom">
                                            <img  src="images/room/1.jpg"    alt="">
                                            <a href="images/room/1.jpg" class="box-media-zoom   single-popup-image"><i class="fa-light fa-magnifying-glass"></i></a>
                                            <div class="like-btn"><i class="fa-light fa-heart"></i> <span>Add to Wislist</span></div>
                                        </div>
                                        <div class="grid-item-details">
                                            <h3><a href="room-single.php">Beach Villa Room</a>  </h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare sem sed quam tempus aliquet vitae eget dolor. Proin eu ultrices libero. Curabitur vulputate vestibulum elementum.  </p>
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
                                    <div class="gallery-item seafood">
                                        <div class="grid-item-holder hov_zoom">
                                            <img  src="images/room/1.jpg"    alt="">
                                            <a href="images/room/1.jpg" class="box-media-zoom   single-popup-image"><i class="fa-light fa-magnifying-glass"></i></a>
                                            <div class="like-btn"><i class="fa-light fa-heart"></i> <span>Add to Wislist</span></div>
                                        </div>
                                        <div class="grid-item-details">
                                            <h3><a href="room-single.php">Comfort Room </a></h3>
                                            <p>Quisque varius eros ac purus dignissim. Proin eu ultrices libero. Curabitur vulputate vestibulum elementum. Suspendisse id neque a nibh mollis blandit. Quisque varius eros ac purus dignissim.</p>
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
                                    <div class="gallery-item desserts">
                                        <div class="grid-item-holder hov_zoom">
                                            <img  src="images/room/1.jpg"    alt="">
                                            <a href="images/room/1.jpg" class="box-media-zoom   single-popup-image"><i class="fa-light fa-magnifying-glass"></i></a>
                                            <div class="like-btn"><i class="fa-light fa-heart"></i> <span>Add to Wislist</span></div>
                                        </div>
                                        <div class="grid-item-details">
                                            <h3><a href="room-single.php"> Presidential Suite</a>  </h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare sem sed quam tempus aliquet vitae eget dolor. Proin eu ultrices libero. Curabitur vulputate vestibulum elementum.  </p>
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
                                    <div class="gallery-item seafood">
                                        <div class="grid-item-holder hov_zoom">
                                            <img  src="images/room/1.jpg"    alt="">
                                            <a href="images/room/1.jpg" class="box-media-zoom   single-popup-image"><i class="fa-light fa-magnifying-glass"></i></a>
                                            <div class="like-btn"><i class="fa-light fa-heart"></i> <span>Add to Wislist</span></div>
                                        </div>
                                        <div class="grid-item-details">
                                            <h3><a href="room-single.php">Superior  Panorama Room</a></h3>
                                            <p>Quisque varius eros ac purus dignissim. Proin eu ultrices libero. Curabitur vulputate vestibulum elementum. Suspendisse id neque a nibh mollis blandit. Quisque varius eros ac purus dignissim.</p>
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
                <!-- section end  -->
                <div class="content-dec"><span></span></div>
            </div>
            <!--content end-->
            <?php require_once "footer.php"?>
        </div>
        <!-- Main end -->
        <?php echo generateScripts()?>
    </body>
</html>