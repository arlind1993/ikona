        <header class="main-header">
            <div class="container">
                <!--  header-top -->

                <div class="header-top  fl-wrap">
                    <div class="header-top_contacts"><a target="_blank" href="<?php echo "tel:".$phoneNumber ?>"><span id="call_title">Call:</span><?php echo " ".$phoneNumber?></a><a target="_blank" href="<?php echo $mapRedirect?>"><span>Find us:</span><?php echo " ".$address?></a></div>
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
                            <p>Our ratings on Booking.com</p>
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
                                    <a href="index.php" class="act-link">Home </a>
                                </li>
                                <li><a href="index.php#about-us">About</a></li>
                                <li>
                                    <a href="index.php#rooms">Rooms</a>
                                </li>
                                <li><a href="restaurant.php">Restaurant</a></li>
                                <li><a href="index.php#contact">Contact</a></li>
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
                </div>
            </div>
        </header>