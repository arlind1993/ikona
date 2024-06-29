<?php

// Get the room ID from the URL
$roomId = isset($_GET['room']) ? $_GET['room'] : null;

$roomName = [
    'soloSerenity' => 'Solo Serenity Room',
    'couplesDelight' => 'Couples Delight Room',
    'family' => 'Family Room',
    'familyDeluxe' => 'Family Deluxe Room',
    'triosRetreat' => 'Trios Retreat Room',
    'duosComfort' =>  'Duo\'s Comfort Room'
];

$roomPrice = [
    'soloSerenity' => 49,
    'couplesDelight' => 60,
    'family' => 80,
    'familyDeluxe' => 110,
    'triosRetreat' => 80,
    'duosComfort' =>  60
];

$roomInventory = [
    'soloSerenity' => '
        <li><i class="fa-light fa-user"></i><span>1 Guest</span></li>
        <li><i class="fa-light fa-bed-front"></i><span>1 Bed</span></li>
        <li><i class="fa-light fa-bath"></i><span>1 Bath</span></li>
    ',
    'couplesDelight' => '
        <li><i class="fa-light fa-user"></i><span>5 Guest</span></li>
        <li><i class="fa-light fa-bed-front"></i><span>1 Bed</span></li>
        <li><i class="fa-light fa-bed-empty" style="color: #E2CBAD;"></i><span>1 Bed</span></li>
        <li><i class="fa-light fa-bed-bunk" style="color: #E2CBAD;"></i><span>1 Bed</span></li>
        <li><i class="fa-light fa-bath"></i><span>1 Bath</span></li>
        ',
    'family' => '
        <li><i class="fa-light fa-user"></i><span>3 Guest</span></li>
        <li><i class="fa-light fa-bed-front"></i><span>1 Bed</span></li>
        <li><i class="fa-light fa-bed-empty" style="color: #E2CBAD;"></i><span>1 Bed</span></li>
        <li><i class="fa-light fa-bath"></i><span>1 Bath</span></li>
    ',
    'familyDeluxe' => '
        <li><i class="fa-light fa-user"></i><span>5 Guest</span></li>
        <li><i class="fa-light fa-bed-front"></i><span>1 Bed</span></li>
        <li><i class="fa-light fa-bed-empty" style="color: #E2CBAD;"></i><span>1 Bed</span></li>
        <li><i class="fa-light fa-bed-bunk" style="color: #E2CBAD;"></i><span>1 Bed</span></li>
        <li><i class="fa-light fa-bath"></i><span>1 Bath</span></li>
        ',
    'triosRetreat' => '
        <li><i class="fa-light fa-user"></i><span>3 Guest</span></li>
        <li><i class="fa-light fa-bed-empty" style="color: #E2CBAD;"></i><span>3 Beds</span></li>
        <li><i class="fa-light fa-bath"></i><span>1 Bath</span></li>
    ',
    'duosComfort' =>  '
        <li><i class="fa-light fa-user"></i><span>2 Guest</span></li>
        <li><i class="fa-light fa-bed-empty" style="color: #E2CBAD;"></i><span>2 Beds</span></li>
        <li><i class="fa-light fa-bath"></i><span>1 Bath</span></li>
    '
];

$roomDescriptions = [
    'soloSerenity' => '
        <p class="has-drop-cap">
            Welcome to our elegantly designed Solo Serenity Room, where modern rustic charm harmonizes with contemporary elegance to create a perfect haven for solo travelers. This room, ideal for those seeking a peaceful retreat, offers a plush twin-sized bed in an intimate space perfect for relaxation and luxury. Soft ambient lighting sets a serene mood, perfect for unwinding after a day of adventure. Our design, incorporating modern elements with wood accents, captures the essence of balance between the bustling modern world and the serenity of nature, reflecting the natural beauty of Shkodra and adding an authentic local touch to your stay.
            <br>For those with an adventurous spirit, our room provides stunning views and direct access to the garden, inviting you to immerse yourself in the vibrant flora and tranquility just outside your door. Enjoy the convenience of air conditioning and a room refrigerator to keep your favorite beverages and snacks chilled. With ample storage space for your belongings, a dedicated desk for any work you might need to catch up on, and reliable internet access, we cater to all your needs. Our 24-hour room service is always available to ensure that your requests are met promptly, at any time of day or night.
            <br>Additionally, the room includes a fully equipped bathroom, providing all the essentials for a relaxing and refreshing stay. We are dedicated to creating a peaceful and comfortable environment for our guests, with thoughtfully designed interiors and amenities that enhance your comfort and convenience. Whether you\'re here for a brief escape or a longer retreat, our goal is to make you feel at home from the moment you arrive.
            <br>Your comfort and satisfaction are our top priorities! We aim to provide a seamless blend of luxury and practicality, allowing you to relax, recharge, and enjoy a perfect balance of style and functionality. For your peace of mind, our hotel is equipped with advanced security systems, including surveillance cameras and secure entry points, ensuring the safety of both you and your belongings throughout your stay.
            <br>Payments are accepted in cash at the reception. For further information, please contact us via the email address or phone number provided on this page. Keep in mind that the price may vary from the number of the persons or the time you make your reservation. So we very strongly reccomend you contact us, to make sure no missunderstandings are made.
        </p>
    ',

    'couplesDelight' => '
        <p class="has-drop-cap">
            Welcome to our elegantly designed Couples Retreat Room, where modern rustic charm harmonizes with contemporary elegance to create a perfect haven for you and your special someone. We understand the importance of a tranquil and romantic getaway, and our room is designed to offer just that. Featuring a plush queen-sized bed, this intimate space is ideal for couples seeking relaxation and a touch of luxury. Soft ambient lighting sets a serene mood, perfect for unwinding together after a long day. Our design, incorporating modern elements with wood accents, captures the essence of balance between the bustling modern world and the serenity of nature, reflecting the natural beauty of Shkodra and adding an authentic local touch to your stay.
            <br>Enjoy the convenience of air conditioning and a room refrigerator to keep your favorite beverages and snacks chilled. With ample storage space for your belongings, a dedicated desk for any work you might need to catch up on, and reliable internet access, we cater to all your needs. Our 24-hour room service is always available to ensure that your requests are met promptly, at any time of day or night.
            <br>Additionally, the room includes a fully equipped bathroom, providing all the essentials for a relaxing and refreshing stay. We are dedicated to creating a peaceful and comfortable environment for our guests, with thoughtfully designed interiors and amenities that enhance your comfort and convenience. Whether you\'re here for a brief escape or a longer retreat, our goal is to make you feel at home from the moment you arrive.
            <br>Your comfort and satisfaction are our top priorities! We aim to provide a seamless blend of luxury and practicality, allowing you to relax, recharge, and enjoy a perfect balance of style and functionality. For your peace of mind, our hotel is equipped with advanced security systems, including surveillance cameras and secure entry points, ensuring the safety of both you and your belongings throughout your stay.
            <br>Payments are accepted in cash at the reception. For further information, please contact us via the email address or phone number provided on this page. Keep in mind that the price may vary from the number of the persons or the time you make your reservation. So we very strongly reccomend you contact us, to make sure no missunderstandings are made.
        </p>
    ',

    'family' => '
        <p class="has-drop-cap">
            Welcome to our elegantly designed hotel room, where modern rustic charm meets contemporary comfort. We know that traveling as a family can be tiring, and we want to offer you the best place to relax and rest. This serene space features a queen-sized bed and a twin-sized bed, making it ideal for families. The soft ambient lighting creates a calming atmosphere, perfect for unwinding after a busy day. The combination of modern design and wood accents aims to illustrate the harmony between our contemporary world and our connection to nature. Nature is very important for the citizens of Shkodra, so we tried to bring every prism, to make the experience more authentic. 
            <br>Enjoy the convenience of air conditioning and a room refrigerator to keep your beverages and snacks fresh. There\'s ample storage space for your belongings and a dedicated desk for catching up on work, supported by reliable internet access. Our 24-hour room service ensures that all your needs are met at any time, day or night.
            <br>Additionally, the room includes a fully equipped bathroom, providing everything you need for a relaxing stay. We are committed to creating a peaceful and comfortable environment for all our guests, especially those traveling with family. Our thoughtfully designed interiors and amenities cater to your comfort and convenience, ensuring a memorable and restful experience. Whether you’re here for a short stay or an extended visit, our goal is to make you feel at home.
            <br>Our purpose is your comfort! From the moment you step into our room, we aim to provide a seamless blend of luxury and practicality. Relax, recharge, and enjoy the perfect balance of style and functionality in a setting designed to meet the needs of every traveler.
            <br>Payment is completed at the recepsion in cash. For more information contact us at our email addres or phone number enlisted in this page. Keep in mind that the price may vary from the number of the persons or the time you make your reservation. So we very strongly reccomend you contact us, to make sure no missunderstandings are made.
        </p>
    ',

    'familyDeluxe' => '
         <p class="has-drop-cap">
            Welcome to our beautifully designed Family Deluxe Room, where modern rustic charm seamlessly blends with contemporary comfort. Understanding the exhaustion that comes with family travel, we strive to provide the perfect sanctuary for relaxation and rest. This tranquil space features a queen-sized bed, a twin-sized bed, and a bunk bed, comfortably accommodating up to five guests. The soft ambient lighting fosters a soothing atmosphere, ideal for unwinding after a long day. Our design, combining modern elements with wood accents, reflects the balance between our fast-paced world and the natural environment, a homage to the importance of nature in Shkodra, bringing an authentic local experience to your stay.
            <br>Benefit from the convenience of air conditioning and a room refrigerator to keep your beverages and snacks fresh. With ample storage space for your belongings, a dedicated desk for work, and reliable internet access, we cater to all your needs. Our 24-hour room service ensures that your requests are met promptly, any time of day or night.
            <br>Furthermore, the room includes a fully equipped bathroom, ensuring you have everything necessary for a relaxing stay. We are dedicated to creating a peaceful and comfortable environment for all our guests, especially families. Our thoughtfully designed interiors and amenities are tailored to provide comfort and convenience, guaranteeing a memorable and restful experience, whether your visit is short or extended. We want you to feel at home from the moment you arrive.
            <br>Your comfort is our priority! We aim to offer a seamless blend of luxury and practicality, allowing you to relax, recharge, and enjoy a perfect balance of style and functionality. Safety is paramount, and our hotel is equipped with advanced security systems, including surveillance cameras and secure entry points, ensuring your peace of mind and the security of your belongings throughout your stay.
            <br>Payments are accepted in cash at the reception. For further information, please contact us via the email address or phone number provided on this page. Keep in mind that the price may vary from the number of the persons or the time you make your reservation. So we very strongly reccomend you contact us, to make sure no missunderstandings are made.
        </p>
    ',

    'triosRetreat' => '
        <p class="has-drop-cap">
        Welcome to our stylishly appointed Trios Retreat Room, where modern design meets comfort, perfect for your group\'s adventure. Recognizing the fun and camaraderie of friends traveling together, we\'ve created an ideal space for relaxation and enjoyment. This vibrant room features three twin-sized beds, accommodating up to three guests comfortably. The contemporary decor with subtle pops of color creates an inviting atmosphere, perfect for unwinding after a day of exploring Shkodra\'s vibrant culture.
        <br>Enjoy the convenience of air conditioning and a room refrigerator to keep your drinks and snacks cool. Ample storage space ensures everyone\'s belongings are neatly organized, while high-speed internet access keeps you connected throughout your stay. Our 24-hour room service ensures your needs are promptly met, day or night.
        <br>Additionally, the room includes a well-appointed bathroom with all essential amenities, ensuring a refreshing stay. We\'re committed to providing a relaxed and enjoyable environment for all our guests, especially groups of friends. Our thoughtful design and amenities cater to comfort and convenience, ensuring a memorable and rejuvenating experience, whether your stay is short or extended. We want you to feel at ease from the moment you arrive.
        <br>Your comfort is our priority! We strive to blend luxury with practicality, allowing you to relax, recharge, and enjoy a perfect balance of style and functionality. Safety is paramount, and our hotel features advanced security systems, including surveillance cameras and secure entry points, ensuring your peace of mind and the safety of your belongings throughout your stay.
        <br>Cash payments are accepted at the reception. For more details, please contact us via the email or phone number provided on this page. Keep in mind that the price may vary from the number of the persons or the time you make your reservation. So we very strongly reccomend you contact us, to make sure no missunderstandings are made.
        </p>
    ',

    'duosComfort' => '
        <p class="has-drop-cap">
            Welcome to our inviting Duo\'s Comfort Room, designed with modern flair and cozy touches, perfect for your best friends\' getaway. Celebrating the bond and adventures of friends traveling together, we\'ve crafted an ideal space for relaxation and fun. This lively room features two twin-sized beds, comfortably accommodating two guests. The stylish decor with vibrant accents creates a warm and welcoming atmosphere, ideal for unwinding after a day of exploring the charms of Shkodra.
            <br>Enjoy the convenience of air conditioning and a room refrigerator to keep your drinks and snacks chilled. With ample storage space for all your belongings and high-speed internet access, you\'ll have everything you need for a comfortable stay. Our 24-hour room service ensures that your requests are met promptly, day or night.
            <br>The room also includes a fully equipped bathroom with all essential amenities, ensuring a refreshing and enjoyable stay. We\'re dedicated to providing a relaxed and enjoyable environment for all our guests, especially pairs of friends. Our thoughtful design and amenities are tailored to offer both comfort and convenience, ensuring a memorable and rejuvenating experience, whether your stay is brief or extended. We aim to make you feel at home from the moment you arrive.
            <br>Your comfort is our priority! We strive to blend luxury with practicality, allowing you to relax, recharge, and enjoy the perfect balance of style and functionality. Safety is paramount, and our hotel is equipped with advanced security systems, including surveillance cameras and secure entry points, ensuring your peace of mind and the safety of your belongings throughout your stay.
            <br>Cash payments are accepted at the reception. For more details, please contact us via the email or phone number provided on this page. Keep in mind that the price may vary from the number of the persons or the time you make your reservation. So we very strongly reccomend you contact us, to make sure no missunderstandings are made.
        </p>
    ',
    
];

$roomImages = [
    'soloSerenity' => '<div class="gallery-item">
                                                        <div class="grid-item-holder hov_zoom">
                                                            <img  src="images/services/garden.jpg"   alt="">
                                                            <a href="images/services/garden.jpg" class="box-media-zoom popup-image"><i class="fa fa-search"></i></a>
                                                        </div>
                                                    </div>
                                                    <!-- 2 end -->
                                                    <!-- 3 -->
                                                    <div class="gallery-item gallery-item-second">
                                                        <div class="grid-item-holder hov_zoom">
                                                            <img  src="images/room/family_room/bath1.jpeg"   alt="">
                                                            <a href="images/room/family_room/bath1.jpeg" class="box-media-zoom popup-image"><i class="fa fa-search"></i></a>
                                                        </div>
                                                    </div>
                                                    <!-- 3 end -->
                                                    <!-- 4 -->
                                                    <div class="gallery-item">
                                                        <div class="grid-item-holder hov_zoom">
                                                            <img  src="images/room/solo.jpeg"   alt="">
                                                            <a href="images/room/solo.jpeg" class="box-media-zoom popup-image"><i class="fa fa-search"  ></i></a>
                                                        </div>
                                                    </div>
                                                    <!-- 4 end -->
                                                    <div class="gallery-item">
                                                        <div class="grid-item-holder hov_zoom">
                                                            <img  src="images/room/family_room/bath2.jpeg"   alt="">
                                                            <a href="images/room/family_room/bath2.jpeg" class="box-media-zoom popup-image"><i class="fa fa-search"  ></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="gallery-item">
                                                        <div class="grid-item-holder hov_zoom">
                                                            <img  src="images/room/image5.jpeg"   alt="">
                                                            <a href="images/room/image5.jpeg" class="box-media-zoom popup-image"><i class="fa fa-search"  ></i></a>
                                                        </div>
                                                    </div>',
    'couplesDelight' => '<div class="gallery-item ">
                                                        <div class="grid-item-holder">
                                                            <img  src="images/room/couple.jpg"   alt="">
                                                            <a href="images/room/couple.jpg" class="box-media-zoom popup-image"><i class="fa fa-search"></i></a>
                                                        </div>
                                                    </div>
                                                    <!-- 1 end -->
                                                    <!-- 2 -->
                                                    <div class="gallery-item">
                                                        <div class="grid-item-holder hov_zoom">
                                                            <img  src="images/room/family_room/family2.jpg"   alt="">
                                                            <a href="images/room/family_room/family2.jpg" class="box-media-zoom popup-image"><i class="fa fa-search"></i></a>
                                                        </div>
                                                    </div>
                                                    <!-- 2 end -->
                                                    <!-- 3 -->
                                                    <div class="gallery-item gallery-item-second">
                                                        <div class="grid-item-holder hov_zoom">
                                                            <img  src="images/room/family_room/bath1.jpeg"   alt="">
                                                            <a href="images/room/family_room/bath1.jpeg" class="box-media-zoom popup-image"><i class="fa fa-search"></i></a>
                                                        </div>
                                                    </div>
                                                    <!-- 3 end -->
                                                    <!-- 4 -->
                                                    <div class="gallery-item">
                                                        <div class="grid-item-holder hov_zoom">
                                                            <img  src="images/room/family_room/bath2.jpeg"   alt="">
                                                            <a href="images/room/family_room/bath2.jpeg" class="box-media-zoom popup-image"><i class="fa fa-search"  ></i></a>
                                                        </div>
                                                    </div>',
    'family' => '<div class="gallery-item ">
                                                        <div class="grid-item-holder">
                                                            <!-- imazhet -->
                                                            <img  src="images/room/family_room/family.jpg"   alt="">
                                                            <a href="images/room/family_room/family.jpg" class="box-media-zoom popup-image"><i class="fa fa-search"></i></a>
                                                        </div>
                                                    </div>
                                                    <!-- 1 end -->
                                                    <!-- 2 -->
                                                    <div class="gallery-item">
                                                        <div class="grid-item-holder hov_zoom">
                                                            <img  src="images/room/family_room/family2.jpg"   alt="">
                                                            <a href="images/room/family_room/family2.jpg" class="box-media-zoom popup-image"><i class="fa fa-search"></i></a>
                                                        </div>
                                                    </div>
                                                    <!-- 2 end -->
                                                    <!-- 3 -->
                                                    <div class="gallery-item gallery-item-second">
                                                        <div class="grid-item-holder hov_zoom">
                                                            <img  src="images/room/family_room/bath1.jpeg"   alt="">
                                                            <a href="images/room/family_room/bath1.jpeg" class="box-media-zoom popup-image"><i class="fa fa-search"></i></a>
                                                        </div>
                                                    </div>
                                                    <!-- 3 end -->
                                                    <!-- 4 -->
                                                    <div class="gallery-item">
                                                        <div class="grid-item-holder hov_zoom">
                                                            <img  src="images/room/family_room/bath2.jpeg"   alt="">
                                                            <a href="images/room/family_room/bath2.jpeg" class="box-media-zoom popup-image"><i class="fa fa-search"  ></i></a>
                                                        </div>
                                                    </div>',
    'familyDeluxe' => '<div class="gallery-item ">
                                                        <div class="grid-item-holder">
                                                            <img  src="images/room/family-deluxe.jpg"   alt="">
                                                            <a href="images/room/family-deluxe.jpg" class="box-media-zoom popup-image"><i class="fa fa-search"></i></a>
                                                        </div>
                                                    </div>
                                                    <!-- 1 end -->
                                                    <!-- 2 -->
                                                    <div class="gallery-item">
                                                        <div class="grid-item-holder hov_zoom">
                                                            <img  src="images/room/family_room/family2.jpg"   alt="">
                                                            <a href="images/room/family_room/family2.jpg" class="box-media-zoom popup-image"><i class="fa fa-search"></i></a>
                                                        </div>
                                                    </div>
                                                    <!-- 2 end -->
                                                    <!-- 3 -->
                                                    <div class="gallery-item gallery-item-second">
                                                        <div class="grid-item-holder hov_zoom">
                                                            <img  src="images/room/family_room/bath1.jpeg"   alt="">
                                                            <a href="images/room/family_room/bath1.jpeg" class="box-media-zoom popup-image"><i class="fa fa-search"></i></a>
                                                        </div>
                                                    </div>
                                                    <!-- 3 end -->
                                                    <!-- 4 -->
                                                    <div class="gallery-item">
                                                        <div class="grid-item-holder hov_zoom">
                                                            <img  src="images/room/family_room/bath2.jpeg"   alt="">
                                                            <a href="images/room/family_room/bath2.jpeg" class="box-media-zoom popup-image"><i class="fa fa-search"  ></i></a>
                                                        </div>
                                                    </div>',
    'triosRetreat' => '<div class="gallery-item ">
                                                        <div class="grid-item-holder">
                                                            <img  src="images/room/trio.jpg"   alt="">
                                                            <a href="images/room/trio.jpg" class="box-media-zoom popup-image"><i class="fa fa-search"></i></a>
                                                        </div>
                                                    </div>
                                                    <!-- 1 end -->
                                                    <!-- 2 -->
                                                    <div class="gallery-item">
                                                        <div class="grid-item-holder hov_zoom">
                                                            <img  src="images/room/duos.jpg"   alt="">
                                                            <a href="images/room/duos.jpg" class="box-media-zoom popup-image"><i class="fa fa-search"></i></a>
                                                        </div>
                                                    </div>
                                                    <!-- 2 end -->
                                                    <!-- 3 -->
                                                    <div class="gallery-item gallery-item-second">
                                                        <div class="grid-item-holder hov_zoom">
                                                            <img  src="images/room/family_room/bath1.jpeg"   alt="">
                                                            <a href="images/room/family_room/bath1.jpeg" class="box-media-zoom popup-image"><i class="fa fa-search"></i></a>
                                                        </div>
                                                    </div>
                                                    <!-- 3 end -->
                                                    <!-- 4 -->
                                                    <div class="gallery-item">
                                                        <div class="grid-item-holder hov_zoom">
                                                            <img  src="images/room/family_room/bath2.jpeg"   alt="">
                                                            <a href="images/room/family_room/bath2.jpeg" class="box-media-zoom popup-image"><i class="fa fa-search"  ></i></a>
                                                        </div>
                                                    </div>',
    'duosComfort' =>  '<div class="gallery-item ">
                                                        <div class="grid-item-holder">
                                                            <img  src="images/room/trio.jpg"   alt="">
                                                            <a href="images/room/trio.jpg" class="box-media-zoom popup-image"><i class="fa fa-search"></i></a>
                                                        </div>
                                                    </div>
                                                    <!-- 1 end -->
                                                    <!-- 2 -->
                                                    <div class="gallery-item">
                                                        <div class="grid-item-holder hov_zoom">
                                                            <img  src="images/room/duos.jpg"   alt="">
                                                            <a href="images/room/duos.jpg" class="box-media-zoom popup-image"><i class="fa fa-search"></i></a>
                                                        </div>
                                                    </div>
                                                    <!-- 2 end -->
                                                    <!-- 3 -->
                                                    <div class="gallery-item gallery-item-second">
                                                        <div class="grid-item-holder hov_zoom">
                                                            <img  src="images/room/family_room/bath1.jpeg"   alt="">
                                                            <a href="images/room/family_room/bath1.jpeg" class="box-media-zoom popup-image"><i class="fa fa-search"></i></a>
                                                        </div>
                                                    </div>
                                                    <!-- 3 end -->
                                                    <!-- 4 -->
                                                    <div class="gallery-item">
                                                        <div class="grid-item-holder hov_zoom">
                                                            <img  src="images/room/family_room/bath2.jpeg"   alt="">
                                                            <a href="images/room/family_room/bath2.jpeg" class="box-media-zoom popup-image"><i class="fa fa-search"  ></i></a>
                                                        </div>
                                                    </div>',
];

$roomSuggestions = [
    'soloSerenity' => ' <!-- 1  --> 
                                        <div class="item-related col-lg-4">
                                            <a href="room-single3.php?room=familyDeluxe" class="item-related_img">
                                                <img src="images/room/family-deluxe.jpg" class="respimg"   alt="">
                                                <div class="overlay"></div>
                                                <span>View Details</span>
                                            </a>
                                            <h3><a href="room-single3.php?room=familyDeluxe">Family Deluxe Room</a></h3>
                                            <span class="post-date post-price">€110/Night</span>
                                            <div class="room-card-details">
                                                <ul>
                                                            <li><i class="fa-light fa-user"></i><span>5 Guest</span></li>
                                                            <li><i class="fa-light fa-bed-front"></i><span>1 Bed</span></li>
                                                            <li><i class="fa-light fa-bed-empty" style="color: #E2CBAD;"></i><span>1 Bed</span></li>
                                                            <li><i class="fa-light fa-bed-bunk" style="color: #E2CBAD;"></i><span>1 Bed</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- 1 end--> 
                                        <!-- 2  --> 
                                        <div class="item-related col-lg-4">
                                            <a href="room-single3.php?room=duosComfort" class="item-related_img">
                                                <img src="images/room/duos.jpg" class="respimg"   alt="">
                                                <div class="overlay"></div>
                                                <span>View Details</span>
                                            </a>
                                            <h3><a href="room-single3.php?room=duosComfort">Duo\'s Comfort</a></h3>
                                            <span class="post-date post-price">€60/Night</span>
                                            <div class="room-card-details">
                                                <ul>
                                                    <li><i class="fa-light fa-user"></i><span>2 Guest</span></li>
                                                    <li><i class="fa-light fa-bed-empty" style="color: #E2CBAD;"></i><span>2 Beds</span></li>
                                                    <li><i class="fa-light fa-bath"></i><span>1 Bath</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- 2 end-->  
                                        <!-- 3  --> 
                                        <div class="item-related col-lg-4">
                                            <a href="room-single3.php?room=triosRetreat" class="item-related_img">
                                                <img src="images/room/trio.jpg" class="respimg"   alt="">
                                                <div class="overlay"></div>
                                                <span>View Details</span>
                                            </a>
                                            <h3><a href="room-single3.php?room=triosRetreat">Trios Retreat</a></h3>
                                            <span class="post-date post-price">€80/Night</span>
                                            <div class="room-card-details">
                                                <ul>
                                                        <li><i class="fa-light fa-user"></i><span>3 Guest</span></li>
                                                        <li><i class="fa-light fa-bed-empty" style="color: #E2CBAD;"></i><span>3 Beds</span></li>
                                                        <li><i class="fa-light fa-bath"></i><span>1 Bath</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- 3 end-->                                        
                                    ',
    'couplesDelight' => '<div class="item-related col-lg-4">
                                            <a href="room-single3.php?room=familyDeluxe" class="item-related_img">
                                                <img src="images/room/family-deluxe.jpg" class="respimg"   alt="">
                                                <div class="overlay"></div>
                                                <span>View Details</span>
                                            </a>
                                            <h3><a href="room-single3.php?room=familyDeluxe">Family Deluxe Room</a></h3>
                                            <span class="post-date post-price">€110/Night</span>
                                            <div class="room-card-details">
                                                <ul>
                                                            <li><i class="fa-light fa-user"></i><span>5 Guest</span></li>
                                                            <li><i class="fa-light fa-bed-front"></i><span>1 Bed</span></li>
                                                            <li><i class="fa-light fa-bed-empty" style="color: #E2CBAD;"></i><span>1 Bed</span></li>
                                                            <li><i class="fa-light fa-bed-bunk" style="color: #E2CBAD;"></i><span>1 Bed</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- 1 end--> 
                                        <!-- 2  --> 
                                        <div class="item-related col-lg-4">
                                            <a href="room-single3.php?room=duosComfort" class="item-related_img">
                                                <img src="images/room/duos.jpg" class="respimg"   alt="">
                                                <div class="overlay"></div>
                                                <span>View Details</span>
                                            </a>
                                            <h3><a href="room-single3.php?room=duosComfort">Duo\'s Comfort</a></h3>
                                            <span class="post-date post-price">€60/Night</span>
                                            <div class="room-card-details">
                                                <ul>
                                                    <li><i class="fa-light fa-user"></i><span>2 Guest</span></li>
                                                    <li><i class="fa-light fa-bed-empty" style="color: #E2CBAD;"></i><span>2 Beds</span></li>
                                                    <li><i class="fa-light fa-bath"></i><span>1 Bath</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- 2 end-->  
                                        <!-- 3  --> 
                                        <div class="item-related col-lg-4">
                                            <a href="room-single3.php?room=triosRetreat" class="item-related_img">
                                                <img src="images/room/trio.jpg" class="respimg"   alt="">
                                                <div class="overlay"></div>
                                                <span>View Details</span>
                                            </a>
                                            <h3><a href="room-single3.php?room=triosRetreat">Trios Retreat</a></h3>
                                            <span class="post-date post-price">€80/Night</span>
                                            <div class="room-card-details">
                                                <ul>
                                                        <li><i class="fa-light fa-user"></i><span>3 Guest</span></li>
                                                        <li><i class="fa-light fa-bed-empty" style="color: #E2CBAD;"></i><span>3 Beds</span></li>
                                                        <li><i class="fa-light fa-bath"></i><span>1 Bath</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- 3 end-->   ',
    'family' => ' <!-- 1  --> 
                                        <div class="item-related col-lg-4">
                                            <a href="room-single3.php?room=familyDeluxe" class="item-related_img">
                                                <img src="images/room/family-deluxe.jpg" class="respimg"   alt="">
                                                <div class="overlay"></div>
                                                <span>View Details</span>
                                            </a>
                                            <!-- sugjerimet -->
                                            <h3><a href="room-single3.php?room=familyDeluxe">Family Deluxe Room</a></h3>
                                            <span class="post-date post-price">€110/Night</span>
                                            <div class="room-card-details">
                                                <ul>
                                                            <li><i class="fa-light fa-user"></i><span>5 Guest</span></li>
                                                            <li><i class="fa-light fa-bed-front"></i><span>1 Bed</span></li>
                                                            <li><i class="fa-light fa-bed-empty" style="color: #E2CBAD;"></i><span>1 Bed</span></li>
                                                            <li><i class="fa-light fa-bed-bunk" style="color: #E2CBAD;"></i><span>1 Bed</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- 1 end--> 
                                        <!-- 2  --> 
                                        <div class="item-related col-lg-4">
                                            <a href="room-single3.php?room=duosComfort" class="item-related_img">
                                                <img src="images/room/duos.jpg" class="respimg"   alt="">
                                                <div class="overlay"></div>
                                                <span>View Details</span>
                                            </a>
                                            <h3><a href="room-single3.php?room=duosComfort">Duo\'s Comfort</a></h3>
                                            <span class="post-date post-price">€60/Night</span>
                                            <div class="room-card-details">
                                                <ul>
                                                    <li><i class="fa-light fa-user"></i><span>2 Guest</span></li>
                                                    <li><i class="fa-light fa-bed-empty" style="color: #E2CBAD;"></i><span>2 Beds</span></li>
                                                    <li><i class="fa-light fa-bath"></i><span>1 Bath</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- 2 end-->  
                                        <!-- 3  --> 
                                        <div class="item-related col-lg-4">
                                            <a href="room-single3.php?room=triosRetreat" class="item-related_img">
                                                <img src="images/room/trio.jpg" class="respimg"   alt="">
                                                <div class="overlay"></div>
                                                <span>View Details</span>
                                            </a>
                                            <h3><a href="room-single3.php?room=triosRetreat">Trios Retreat</a></h3>
                                            <span class="post-date post-price">€80/Night</span>
                                            <div class="room-card-details">
                                                <ul>
                                                        <li><i class="fa-light fa-user"></i><span>3 Guest</span></li>
                                                        <li><i class="fa-light fa-bed-empty" style="color: #E2CBAD;"></i><span>3 Beds</span></li>
                                                        <li><i class="fa-light fa-bath"></i><span>1 Bath</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- 3 end-->      ',
    'familyDeluxe' => '<!-- 1  --> 
                                        <div class="item-related col-lg-4">
                                            <a href="room-single3.php?room=family" class="item-related_img">
                                                <img src="images/room/family.jpg" class="respimg"   alt="">
                                                <div class="overlay"></div>
                                                <span>View Details</span>
                                            </a>
                                            <h3><a href="room-single3.php?room=family">Family Room</a></h3>
                                            <span class="post-date post-price">€80/Night</span>
                                            <div class="room-card-details">
                                                <ul>
                                                <li><i class="fa-light fa-user"></i><span>3 Guest</span></li>
                                                    <li><i class="fa-light fa-bed-front"></i><span>1 Bed</span></li>
                                                    <li><i class="fa-light fa-bed-empty" style="color: #E2CBAD;"></i><span>1 Bed</span></li>
                                                    <li><i class="fa-light fa-bath"></i><span>1 Bath</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- 1 end--> 
                                        <!-- 2  --> 
                                        <div class="item-related col-lg-4">
                                            <a href="room-single3.php?room=couplesDelight" class="item-related_img">
                                                <img src="images/room/duos.jpg" class="respimg"   alt="">
                                                <div class="overlay"></div>
                                                <span>View Details</span>
                                            </a>
                                            <h3><a href="room-single3.php?room=couplesDelight">Couples Delight</a></h3>
                                            <span class="post-date post-price">€60/Night</span>
                                            <div class="room-card-details">
                                                <ul>
                                                <li><i class="fa-light fa-user"></i><span>2 Guest</span></li>
                                                    <li><i class="fa-light fa-bed-front"></i><span>1 Bed</span></li>
                                                    <li><i class="fa-light fa-bath"></i><span>1 Bath</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- 2 end-->  
                                        <!-- 3  --> 
                                        <div class="item-related col-lg-4">
                                            <a href="room-single3.php?room=soloSerenity" class="item-related_img">
                                                <img src="images/room/trio.jpg" class="respimg"   alt="">
                                                <div class="overlay"></div>
                                                <span>View Details</span>
                                            </a>
                                            <h3><a href="room-single3.php?room=soloSerenity">Solo Serenity</a></h3>
                                            <span class="post-date post-price">€49/Night</span>
                                            <div class="room-card-details">
                                                <ul>
                                                <li><i class="fa-light fa-user"></i><span>2 Guest</span></li>
                                                    <li><i class="fa-light fa-bed-front"></i><span>1 Bed</span></li>
                                                    <li><i class="fa-light fa-bath"></i><span>1 Bath</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- 3 end--> ',
    'triosRetreat' => ' <!-- 1  --> 
                                        <div class="item-related col-lg-4">
                                            <a href="room-single3.php?room=duosComfort" class="item-related_img">
                                                <img src="images/room/duos.jpg" class="respimg"   alt="">
                                                <div class="overlay"></div>
                                                <span>View Details</span>
                                            </a>
                                            <h3><a href="room-single3.php?room=duosComfort">Duo\'s Comfort</a></h3>
                                            <span class="post-date post-price">€60/Night</span>
                                            <div class="room-card-details">
                                                <ul>
                                                    <li><i class="fa-light fa-user"></i><span>2 Guest</span></li>
                                                    <li><i class="fa-light fa-bed-empty" style="color: #E2CBAD;"></i><span>2 Beds</span></li>
                                                    <li><i class="fa-light fa-bath"></i><span>1 Bath</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- 1 end--> 
                                        <!-- 2  --> 
                                        <div class="item-related col-lg-4">
                                            <a href="room-single3.php?room=couplesDelight" class="item-related_img">
                                                <img src="images/room/couple2.jpeg" class="respimg"   alt="">
                                                <div class="overlay"></div>
                                                <span>View Details</span>
                                            </a>
                                            <h3><a href="room-single3.php?room=couplesDelight">Couples Delight</a></h3>
                                            <span class="post-date post-price">€60/Night</span>
                                            <div class="room-card-details">
                                                <ul>
                                                <li><i class="fa-light fa-user"></i><span>2 Guest</span></li>
                                                    <li><i class="fa-light fa-bed-front"></i><span>1 Bed</span></li>
                                                    <li><i class="fa-light fa-bath"></i><span>1 Bath</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- 2 end-->  
                                        <!-- 3  --> 
                                        <div class="item-related col-lg-4">
                                            <a href="room-single3.php?room=soloSerenity" class="item-related_img">
                                                <img src="images/room/garden2.jpeg" class="respimg"   alt="">
                                                <div class="overlay"></div>
                                                <span>View Details</span>
                                            </a>
                                            <h3><a href="room-single3.php?room=soloSerenity">Solo Serenity</a></h3>
                                            <span class="post-date post-price">€49/Night</span>
                                            <div class="room-card-details">
                                                <ul>
                                                <li><i class="fa-light fa-user"></i><span>1 Guest</span></li>
                                                    <li><i class="fa-light fa-bed-front"></i><span>1 Bed</span></li>
                                                    <li><i class="fa-light fa-bath"></i><span>1 Bath</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- 3 end-->       ',
    'duosComfort' =>  ' <!-- 1  --> 
                                        <div class="item-related col-lg-4">
                                            <a href="room-single3.php?room=duosComfort" class="item-related_img">
                                                <img src="images/room/trio.jpg" class="respimg"   alt="">
                                                <div class="overlay"></div>
                                                <span>View Details</span>
                                            </a>
                                            <h3><a href="room-single3.php?room=triosRetreat">Trios Retreat</a></h3>
                                            <span class="post-date post-price">€80/Night</span>
                                            <div class="room-card-details">
                                                <ul>
                                                    <li><i class="fa-light fa-user"></i><span>3 Guest</span></li>
                                                    <li><i class="fa-light fa-bed-empty" style="color: #E2CBAD;"></i><span>3 Beds</span></li>
                                                    <li><i class="fa-light fa-bath"></i><span>1 Bath</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- 1 end--> 
                                        <!-- 2  --> 
                                        <div class="item-related col-lg-4">
                                            <a href="room-single3.php?room=couplesDelight" class="item-related_img">
                                                <img src="images/room/couple2.jpeg" class="respimg"   alt="">
                                                <div class="overlay"></div>
                                                <span>View Details</span>
                                            </a>
                                            <h3><a href="room-single3.php?room=couplesDelight">Couples Delight</a></h3>
                                            <span class="post-date post-price">€60/Night</span>
                                            <div class="room-card-details">
                                                <ul>
                                                <li><i class="fa-light fa-user"></i><span>2 Guest</span></li>
                                                    <li><i class="fa-light fa-bed-front"></i><span>1 Bed</span></li>
                                                    <li><i class="fa-light fa-bath"></i><span>1 Bath</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- 2 end-->  
                                        <!-- 3  --> 
                                        <div class="item-related col-lg-4">
                                            <a href="room-single3.php?room=soloSerenity" class="item-related_img">
                                                <img src="images/room/garden2.jpeg" class="respimg"   alt="">
                                                <div class="overlay"></div>
                                                <span>View Details</span>
                                            </a>
                                            <h3><a href="room-single3.php?room=soloSerenity">Solo Serenity</a></h3>
                                            <span class="post-date post-price">€49/Night</span>
                                            <div class="room-card-details">
                                                <ul>
                                                <li><i class="fa-light fa-user"></i><span>2 Guest</span></li>
                                                    <li><i class="fa-light fa-bed-front"></i><span>1 Bed</span></li>
                                                    <li><i class="fa-light fa-bath"></i><span>1 Bath</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- 3 end-->  '
];


    $description = isset($roomDescriptions[$roomId]) ? $roomDescriptions[$roomId] : '<p>Room description not found.</p>';
    $name = isset($roomName[$roomId]) ? $roomName[$roomId] : 'Room not found.';
    $price = isset($roomPrice[$roomId]) ? $roomPrice[$roomId] : 'XXX';
    $inventory = isset($roomInventory[$roomId]) ? $roomInventory[$roomId] : '<li>Room inventory not found.</li>';
    $images = isset($roomImages[$roomId]) ? $roomImages[$roomId] : 'Images not found';
    $suggestions = isset($roomSuggestions[$roomId]) ? $roomSuggestions[$roomId] : $roomSuggestions['family'];
?>