        <header class="main-header">
            <div class="container">
                <!--  header-top -->

                <div class="header-top  fl-wrap">
                    <div class="header-top_contacts"><a target="_blank" href="<?php echo "tel:".$phoneNumber ?>"><span id="call_title">Call:</span><?php echo " ".$phoneNumber?></a><a target="_blank" href="<?php echo $mapRedirect?>"><span id="find_us">Find us:</span><?php echo " ".$address?></a></div>
                    <div class="header-social">
                        <ul>
                            <li><a href="<?php echo $socialInstagram?>" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                            <li><a href="<?php echo $socialTikTok?>" target="_blank"><i class="fa-brands fa-tiktok"></i></a></li>
                        </ul>
                    </div>
                    <div class="booking-reviews">
                        <div class="br-counter">
                            <div class="ribbon"></div>
                            <span>4.0</span>
                        </div>
                        <a href="<?php echo $bookingRedirect?>" target="_blank" class="br_link">
                            <div class="star-rating" data-starrating="4"> </div>
                            <p id="our_ratings">Our ratings on Booking.com</p>
                        </a>
                    </div>
                    <div class="lang-wrap">
                        <a id="en_title" onclick="changeLanguage('en')">EN</a>
                        <span>/</span>
                        <a id="al_title" onclick="changeLanguage('al')">AL</a>
                        <span>/</span>
                        <a id="it_title" onclick="changeLanguage('it')">IT</a>
                    </div>
                </div>
                <!--  header-top end  -->
                <div class="nav-holder-wrap init-fix-header  fl-wrap">
                    <a href="index.php" class="logo-holder"><img src="images/logo5.png" alt=""></a>
                    <!--  navigation -->
                    <div class="nav-holder main-menu">
                        <nav>
                            <ul>
                                <li>
                                    <a href="onepage.php" class="act-link" id="home">Home </a>
                              
                                </li>
                                <li><a href="onepage.php#about-us" id="about">About</a></li>
                                <li>
                                    <a href="onepage.php#rooms" id="rooms">Rooms</a>
                                   
                                </li>
                                <li><a href="restaurant.php" id="restaurant">Restaurant</a></li>
                                <li><a href="onepage.php#contact" id="contact">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                    <!-- navigation  end -->  		
                    
                    <!-- nav-button-wrap-->
                    <div class="nav-button-wrap">
                        <div class="nav-button">
                            <span></span><span></span><span></span>
                        </div>
                    </div>
                    <!-- nav-button-wrap end-->					
                    <!-- share-wrapper -->
                    <div class="share-wrapper isShare">
                        <div class="share-container fl-wrap"></div>
                    </div>
                    <!-- share-wrapper-end -->					
                    <!--wish-list-wrap-->
                    <div class="wish-list-wrap novis_cart">
                        <div class="wish-list-close close_cart-init clwl_btn"><i class="fa-regular fa-xmark"></i></div>
                        <div class="wish-list-title">Your Wishlist </div>
                        <div class="wish-list-container">
                            <!--wish-list-item-->
                            <div class="wish-list-item fl-wrap">
                                <div class="wish-list-img"><a href="room-single.php"><img src="images/room/thumbnail/1.jpg" alt=""></a>  
                                </div>
                                
                            </div>
                            <!--wish-list-item end-->
                            <!--wish-list-item-->
                            <div class="wish-list-item fl-wrap">
                                <div class="wish-list-img"><a href="room-single.php"><img src="images/room/thumbnail/1.jpg" alt=""></a>  
                                </div>
                                
                            </div>
                            <!--wish-list-item end-->
                        </div>
                        <div class="wish-list-wrap-btns">
                            <a href="#" class="wl_btn">Clear wishlist</a>
                        </div>
                    </div>
                    <!--wish-list-wrap-->
                </div>
            </div>
        </header>