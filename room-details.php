

<?php require_once "room-info.php"?>
<?php require_once "generate.php"?>
<!DOCTYPE HTML>
<html lang="en">
    <?php echo generateHead("Ikona Hotel")?>
    <body>
        <?php require_once "loader.php"?>
        <!--  main   -->
        <div id="main">
        <?php require_once "header.php"?>
            <!-- Main --> 
            <div id="room-single" >
                    <!--  section  -->
                        <div class="content-section parallax-section hero-section hidden-section">
                        <div class="media-container video-holder-wrap">
                            <div class="video-container">
                                <video playsinline autoplay  loop muted  class="bgvid">
                                    <source src="video/vid3.mp4" type="video/mp4">
                                </video>
                            </div>
                            <div class="overlay"></div>
                        </div>
                        <div class="overlay"></div>
                        <div class="container">
                            <div class="section-title">
                                <h4 id="enjoy_pleasure_subtitle">Enjoy your time in our Hotel with pleasure.</h4>
                                <h2> <?php echo $name?></h2>
                                <div class="section-separator"><span><img src="images/logo6.png" style="width:30px; height:30px;" alt=""></span></span></div>
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
                                <a href="index.php" id="home">Home</a>
                                <a href="index.php#rooms" id="rooms_title">Rooms</a>
                                <span><?php echo $name?></span> 
                            </div>
                        </div>
                        <!--breadcrumbs-wrap end  -->
                        <!-- section   -->
                        <div class="content-section">
                            <div class="section-dec"></div>
                            <div class="content-dec2 fs-wrapper"></div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <div class="dec-container">
                                            <div class="dc_dec-item_left"><span></span></div>
                                            <div class="text-block">
                                                <div class="text-block-title">
                                                    <h4 id="about_accomodation">About Accommodation</h4>
                                                    <div class="sr-opt">
                                                        <div class="sa-price"><?php echo $price?></div>
                                                    </div>
                                                </div>
                                                <div class="room-card-details rcd-single">
                                                    <ul>
                                                        <?php echo $features?>
                                                    </ul>
                                                </div>
                                                <div class="text-block-container">
                                                    <p class="has-drop-cap">
                                                        <?php echo $description?>
                                                    </p>
                                                </div>
                                                <div class="tbc-separator"></div>
                                                <div class="tbc_subtitle" id="gallery_elegance">Gallery of Elegance  </div>
                                                <!-- gallery-items   -->
                                                <div class="gallery-items  spad list-single-gallery three-coulms lightgallery">
                                                    <!-- 1 -->
                                                    <?php echo $images?>
                                                    <!-- 4 end -->
                                                    
                                                </div>
                                                <!-- end gallery items -->									
                                                <div class="tbc-separator"></div>
                                                <div class="tbc_subtitle" id="room_amenities">Room Amenities  </div>
                                                <div class="meg_aminites">
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <div class="meg_aminites_item"><i class="fa-light thin fa-vacuum"></i><span id="room_service">24 Hour Room Service</span></div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="meg_aminites_item"><i class="fa-light fa-croissant"></i><span id="free_breakfast">Free Breakfast</span></div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="meg_aminites_item"><i class="fa-light fa-dryer"></i><span id="washing_machine">Washing Machine</span></div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="meg_aminites_item"><i class="fa-light fa-wifi"></i><span id="free_wifi">Free  Wi Fi</span></div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="meg_aminites_item"><i class="fa-light fa-air-conditioner"></i><span id="air_conditioned">Air Conditioned</span></div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="meg_aminites_item"><i class="fa-light fa-refrigerator"></i><span id="refrigerator">In-room Refrigerator</span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tbc-separator"></div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="tbc_subtitle" id="suite_includes">What  included in this suite?</div>
                                                        <div class="text-block_list">
                                                            <ul>
                                                                <li id="bathroom_shower">Bathroom with rain shower</li>
                                                                <li id="private_balcony">Private balcony</li>
                                                                <li id="terrace_bar">Terrace and Bar</li>
                                                                <li id="tv_screen">TV-UHD screen for watching</li>
                                                                <li id="writing_desk">Writing desk</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                   
                                                </div>
                                                <div class="tbc-separator"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="fix-bar-init">
                                            <div class="fw-search-wrap">
                                                <div class="fw-search-wrap-title" id="book_this_suite">Book  This Suite</div>
                                                <div class="section-separator"><span><img src="images/logo6.png" style="width:30px; height:30px;" alt=""></span></div>
                                                <form  class="custom-form" action="contact-info.php" name="bookform">
                                                    <fieldset>
                                                        <div class="input-wrap">
                                                            <label id="your_name">Your Name:</label>
                                                            <input type="text" name="name" id="name" placeholder="Your Name *" value="">
                                                        </div>
                                                        <div class="input-wrap">
                                                            <label id="email">Email:</label>
                                                            <input type="text"  name="email" id="email" placeholder="Email Address *" value="">
                                                        </div>
                                                        <textarea name="comments"  id="comments" cols="40" rows="3" placeholder="Your Message:"></textarea>
                                                        <button class="commentssubmit" id="submit_cnt">Send Message  </button>
                                                    </fieldset>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="limit-box"></div>
                                <!--post-related-->
                                <div class="post-related">
                                    <div class="post-related_title">
                                        <h6 id="similar_rooms">Similar Rooms</h6>
                                        <div class="section-separator"><span><img src="images/logo6.png" style="width:30px; height:30px;" alt=""></span></div>
                                    </div>
                                    <!-- post-related -->  
                                    <div class=" row">
                                    <?php echo $suggestions?>                 
                                    </div>
                                </div>
                                <!-- post-related  end--> 						
                            </div>
                </div>
                <!-- section end  -->
                <div class="content-dec"><span></span></div>
                </div>
            </div>

            <?php require_once "footer.php"?>
        </div>
        <!-- Main end -->
        <?php echo generateScripts()?>
    </body>
</html>