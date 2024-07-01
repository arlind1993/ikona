<?php 
include_once "room-info.php";

$genereateRoom = function (string $roomId): string{
    global $rooms;
    if(isset($rooms[$roomId])){
        $roomObject = $rooms[$roomId];
        return '
        <div class="gallery-item">
            <div class="grid-item-holder hov_zoom">
                <img src="'.getImage($roomObject).'" data-alt="image-alt-'.getImage($roomObject).'" alt="">
            </div>
            <div class="grid-item-details">
                <h3><a href="room-details.php?room='.$roomId.'" data-id="name-'.$roomId.'">'.getName($roomObject).'</a>  </h3>
                <p data-id="mini-description-'.$roomId.'" data-id="mini-description-'.$roomId.'">'.getMiniDescription($roomObject).'</p>
                <div class="room-card-details">
                    <ul>
                        '.getFeatures($roomObject).'
                    </ul>
                </div>
                <div class="grid-item_price">
                    <span data-value="'.$roomObject["price"].'" data-id="price-title">'.getPrice($roomObject).'</span>
                </div>
                <a href="room-details.php?room='.$roomId.'" class="gid_link room-link" id="view_details" data-id="'.$roomId.'"><span>View Details</span> <i class="fa-light fa-arrow-right-long"></i></a>
            </div>
        </div>
        ';
    }else{
        return "";
    }
};

?>

                <!-- section   -->
                <div class="content-section" id="rooms">
                    <div class="content-dec2 fs-wrapper"></div>
                    <div class="section-dec"></div>
                    <div class="section-title">
                        <h4 data-id="room-subtitle">Enjoy your time in our Hotel with pleasure.</h4>
                        <h2 data-id="room-see">Take a look at the rooms that we offer.</h2>
                        <div class="section-separator"><span><img src="images/logo6.png" data-alt="image-alt-images/logo.png" style="width:30px; height:30px;" alt=""></span></div>
                    </div>
                   
                    <div class="container">
                        <div class="dec-container">
                            <div class="dc_dec-item_left"><span></span></div>
                            <div class="dc_dec-item_right"><span></span></div>
                            <div class="text-block">
                                <!-- gallery start -->
                                <div class="gallery-items grid-big-pad  lightgallery  ">
                                    <?php echo join("\n", array_map($genereateRoom, [
                                        "couples_delight", 
                                        "solo_serenity",
                                        "family",
                                        "family_deluxe",
                                        "duos_comfort",
                                        "trios_retreat",
                                    ]))?>							
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content-dec"><span></span></div>
                </div>
                <!-- section end  -->	