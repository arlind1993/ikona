<?php

// Get the room ID from the URL
$roomId = isset($_GET['room']) ? $_GET['room'] : null;

$rooms = [
    'solo_serenity' => [
        "name" => "Solo Serenity Room",
        "price" => 49,
        "capacity" => 1,
        "bath" => 1,
        "single_bed" => 1,
        "mini_description" => "For solo travelers , we invite you to experience rest and relaxation in our single rooms. Wake up to the serene beauty of blooming flowers right outside your window.<br><br>",
        "description" => [
            "Welcome to our elegantly designed Solo Serenity Room, where modern rustic charm harmonizes with contemporary elegance to create a perfect haven for solo travelers. This room, ideal for those seeking a peaceful retreat, offers a plush twin-sized bed in an intimate space perfect for relaxation and luxury. Soft ambient lighting sets a serene mood, perfect for unwinding after a day of adventure. Our design, incorporating modern elements with wood accents, captures the essence of balance between the bustling modern world and the serenity of nature, reflecting the natural beauty of Shkodra and adding an authentic local touch to your stay.",
            "For those with an adventurous spirit, our room provides stunning views and direct access to the garden, inviting you to immerse yourself in the vibrant flora and tranquility just outside your door. Enjoy the convenience of air conditioning and a room refrigerator to keep your favorite beverages and snacks chilled. With ample storage space for your belongings, a dedicated desk for any work you might need to catch up on, and reliable internet access, we cater to all your needs. Our 24-hour room service is always available to ensure that your requests are met promptly, at any time of day or night.",
            "Additionally, the room includes a fully equipped bathroom, providing all the essentials for a relaxing and refreshing stay. We are dedicated to creating a peaceful and comfortable environment for our guests, with thoughtfully designed interiors and amenities that enhance your comfort and convenience. Whether you're here for a brief escape or a longer retreat, our goal is to make you feel at home from the moment you arrive.",
            "We provide the Washing machine privileges, however with extra cost. If you need to wash your personal clothes, you can ask the staff from 08:00 am to 04:00pm to assist you. The fee will be based on the quantity of the items you bring to clean."
            "Your comfort and satisfaction are our top priorities! We aim to provide a seamless blend of luxury and practicality, allowing you to relax, recharge, and enjoy a perfect balance of style and functionality. For your peace of mind, our hotel is equipped with advanced security systems, including surveillance cameras and secure entry points, ensuring the safety of both you and your belongings throughout your stay.",
            "Payments are accepted in cash at the reception. For further information, please contact us via the email address or phone number provided on this page. Keep in mind that the price may vary from the number of the persons or the time you make your reservation. So we very strongly reccomend you contact us, to make sure no missunderstandings are made."
        ],
        "image" => "images/room/solo.jpg",
        "suggestions"=> [
            "family_deluxe",
            "duos_comfort",
            "trios_retreat",
        ],
        "display" => [
            [
                'src' => "images/services/garden.jpg",
                'alt' => "",
            ],
            [
                'src' => "images/room/family_room/bath1.jpeg",
                'extra' => "gallery-item-second",
                'alt' => "",
            ],
            [
                'src' => "images/room/solo.jpg",
                'alt' => "",
            ],
            [
                'src' => "images/room/family_room/bath2.jpeg",
                'alt' => "",
            ],
            [
                'src' => "images/room/image5.jpeg",
                'alt' => "",
            ],
        ],
    ],
    'couples_delight' => [
        "name" => "Couples Delight Room",
        "price" => 60,
        "capacity" => 2,
        "double_bed" => 1,
        "bath" => 1,
        "mini_description" => "For the perfect stay with your special someone, we provide a room featuring a queen bed, a workspace for catching up on work, ample storage for your belongings, and a private bathroom.",
        "description" => [
            "Welcome to our elegantly designed Couples Retreat Room, where modern rustic charm harmonizes with contemporary elegance to create a perfect haven for you and your special someone. We understand the importance of a tranquil and romantic getaway, and our room is designed to offer just that. Featuring a plush queen-sized bed, this intimate space is ideal for couples seeking relaxation and a touch of luxury. Soft ambient lighting sets a serene mood, perfect for unwinding together after a long day. Our design, incorporating modern elements with wood accents, captures the essence of balance between the bustling modern world and the serenity of nature, reflecting the natural beauty of Shkodra and adding an authentic local touch to your stay.",
            "Enjoy the convenience of air conditioning and a room refrigerator to keep your favorite beverages and snacks chilled. With ample storage space for your belongings, a dedicated desk for any work you might need to catch up on, and reliable internet access, we cater to all your needs. Our 24-hour room service is always available to ensure that your requests are met promptly, at any time of day or night.",
            "Additionally, the room includes a fully equipped bathroom, providing all the essentials for a relaxing and refreshing stay. We are dedicated to creating a peaceful and comfortable environment for our guests, with thoughtfully designed interiors and amenities that enhance your comfort and convenience. Whether you're here for a brief escape or a longer retreat, our goal is to make you feel at home from the moment you arrive.",
            "We provide the Washing machine privileges, however with extra cost. If you need to wash your personal clothes, you can ask the staff from 08:00 am to 04:00pm to assist you. The fee will be based on the quantity of the items you bring to clean."
            "Your comfort and satisfaction are our top priorities! We aim to provide a seamless blend of luxury and practicality, allowing you to relax, recharge, and enjoy a perfect balance of style and functionality. For your peace of mind, our hotel is equipped with advanced security systems, including surveillance cameras and secure entry points, ensuring the safety of both you and your belongings throughout your stay.",
            "Payments are accepted in cash at the reception. For further information, please contact us via the email address or phone number provided on this page. Keep in mind that the price may vary from the number of the persons or the time you make your reservation. So we very strongly reccomend you contact us, to make sure no missunderstandings are made."
        ],
        "image" => "images/room/couple.jpg",
        "suggestions"=> [
            "family_deluxe",
            "duos_comfort",
            "trios_retreat",
        ],
        "display" => [
            [
                'src' => "images/room/couple.jpg",
                'alt' => "",
            ],
            [
                'src' => "images/room/family_room/family2.jpg",
                'alt' => "",
            ],
            [
                'src' => "images/room/family_room/bath1.jpeg",
                'extra' => "gallery-item-second",
                'alt' => "",
            ],
            [
                'src' => "images/room/family_room/bath2.jpeg",
                'alt' => "",
            ],
        ],
    ],
    'family' => [
        "name" => "Family Room",
        "price" => 80,
        "capacity" => 3,
        "single_bed" => 1,
        "double_bed" => 1,
        "bath" => 1,
        "mini_description" => "Traveling with family? Our spacious room includes a queen-sized bed and a twin-sized bed, ensuring a comfortable and enjoyable stay for everyone.<br><br>",
        "description" => [
            "Welcome to our elegantly designed hotel room, where modern rustic charm meets contemporary comfort. We know that traveling as a family can be tiring, and we want to offer you the best place to relax and rest. This serene space features a queen-sized bed and a twin-sized bed, making it ideal for families. The soft ambient lighting creates a calming atmosphere, perfect for unwinding after a busy day. The combination of modern design and wood accents aims to illustrate the harmony between our contemporary world and our connection to nature. Nature is very important for the citizens of Shkodra, so we tried to bring every prism, to make the experience more authentic.",
            "Enjoy the convenience of air conditioning and a room refrigerator to keep your beverages and snacks fresh. There's ample storage space for your belongings and a dedicated desk for catching up on work, supported by reliable internet access. Our 24-hour room service ensures that all your needs are met at any time, day or night.",
            "Additionally, the room includes a fully equipped bathroom, providing everything you need for a relaxing stay. We are committed to creating a peaceful and comfortable environment for all our guests, especially those traveling with family. Our thoughtfully designed interiors and amenities cater to your comfort and convenience, ensuring a memorable and restful experience. Whether you're here for a short stay or an extended visit, our goal is to make you feel at home.",
            "We provide the Washing machine privileges, however with extra cost. If you need to wash your personal clothes, you can ask the staff from 08:00 am to 04:00pm to assist you. The fee will be based on the quantity of the items you bring to clean."
            "Our purpose is your comfort! From the moment you step into our room, we aim to provide a seamless blend of luxury and practicality. Relax, recharge, and enjoy the perfect balance of style and functionality in a setting designed to meet the needs of every traveler.",
            "Payment is completed at the recepsion in cash. For more information contact us at our email addres or phone number enlisted in this page. Keep in mind that the price may vary from the number of the persons or the time you make your reservation. So we very strongly reccomend you contact us, to make sure no missunderstandings are made."
        ],
        "image" => "images/room/family_room/family.jpg",
        "suggestions"=> [
            "family_deluxe",
            "duos_comfort",
            "trios_retreat",
        ],
        "display" => [
            [
                'src' => "images/room/family_room/family.jpg",
                'alt' => "",
            ],
            [
                'src' => "images/room/family_room/family2.jpg",
                'alt' => "",
            ],
            [
                'src' => "images/room/family_room/bath1.jpeg",
                'extra' => "gallery-item-second",
                'alt' => "",
            ],
            [
                'src' => "images/room/family_room/bath2.jpeg",
                'alt' => "",
            ],
        ],
    ],
    'family_deluxe' => [
        "name" => "Family Deluxe Room",
        "price" => 110,
        "capacity" => 5,
        "single_bed" => 1,
        "double_bed" => 1,
        "bunk_bed" => 1,
        "bath" => 1,
        "mini_description" => "Traveling as a big family is always a hassle. Let us help you! The Family Deluxe Room includes one queen bed, one twin bed and one bunk bed, and a capacity of holding 5 persons.",
        "description" => [
            "Welcome to our beautifully designed Family Deluxe Room, where modern rustic charm seamlessly blends with contemporary comfort. Understanding the exhaustion that comes with family travel, we strive to provide the perfect sanctuary for relaxation and rest. This tranquil space features a queen-sized bed, a twin-sized bed, and a bunk bed, comfortably accommodating up to five guests. The soft ambient lighting fosters a soothing atmosphere, ideal for unwinding after a long day. Our design, combining modern elements with wood accents, reflects the balance between our fast-paced world and the natural environment, a homage to the importance of nature in Shkodra, bringing an authentic local experience to your stay.",
            "Benefit from the convenience of air conditioning and a room refrigerator to keep your beverages and snacks fresh. With ample storage space for your belongings, a dedicated desk for work, and reliable internet access, we cater to all your needs. Our 24-hour room service ensures that your requests are met promptly, any time of day or night.",
            "Furthermore, the room includes a fully equipped bathroom, ensuring you have everything necessary for a relaxing stay. We are dedicated to creating a peaceful and comfortable environment for all our guests, especially families. Our thoughtfully designed interiors and amenities are tailored to provide comfort and convenience, guaranteeing a memorable and restful experience, whether your visit is short or extended. We want you to feel at home from the moment you arrive.",
            "We provide the Washing machine privileges, however with extra cost. If you need to wash your personal clothes, you can ask the staff from 08:00 am to 04:00pm to assist you. The fee will be based on the quantity of the items you bring to clean."
            "Your comfort is our priority! We aim to offer a seamless blend of luxury and practicality, allowing you to relax, recharge, and enjoy a perfect balance of style and functionality. Safety is paramount, and our hotel is equipped with advanced security systems, including surveillance cameras and secure entry points, ensuring your peace of mind and the security of your belongings throughout your stay.",
            "Payments are accepted in cash at the reception. For further information, please contact us via the email address or phone number provided on this page. Keep in mind that the price may vary from the number of the persons or the time you make your reservation. So we very strongly reccomend you contact us, to make sure no missunderstandings are made."
        ],
        "image" => "images/room/family-deluxe.jpg",
        "suggestions"=> [
            "family",
            "couples_delight",
            "solo_serenity",
        ],
        "display" => [
            [
                'src' => "images/room/family-deluxe.jpg",
                'alt' => "",
            ],
            [
                'src' => "images/room/family_room/family2.jpg",
                'alt' => "",
            ],
            [
                'src' => "images/room/family_room/bath1.jpeg",
                'extra' => "gallery-item-second",
                'alt' => "",
            ],
            [
                'src' => "images/room/family_room/bath2.jpeg",
                'alt' => "",
            ],
        ],
    ],
    'trios_retreat' => [
        "name" => "Trios Retreat Room",
        "price" => 80,
        "capacity" => 3,
        "single_bed" => 3,
        "bath" => 1,
        "mini_description" => "Having a trio vacation with your friends? Reserve now the Trios Retreat room, where each one gets a twin bed, enough storage space for your belongings and a private bathroom.",
        "description" => [
            "Welcome to our stylishly appointed Trios Retreat Room, where modern design meets comfort, perfect for your group's adventure. Recognizing the fun and camaraderie of friends traveling together, we've created an ideal space for relaxation and enjoyment. This vibrant room features three twin-sized beds, accommodating up to three guests comfortably. The contemporary decor with subtle pops of color creates an inviting atmosphere, perfect for unwinding after a day of exploring Shkodra's vibrant culture.",
            "Enjoy the convenience of air conditioning and a room refrigerator to keep your drinks and snacks cool. Ample storage space ensures everyone's belongings are neatly organized, while high-speed internet access keeps you connected throughout your stay. Our 24-hour room service ensures your needs are promptly met, day or night.",
            "Additionally, the room includes a well-appointed bathroom with all essential amenities, ensuring a refreshing stay. We're committed to providing a relaxed and enjoyable environment for all our guests, especially groups of friends. Our thoughtful design and amenities cater to comfort and convenience, ensuring a memorable and rejuvenating experience, whether your stay is short or extended. We want you to feel at ease from the moment you arrive.",
            "We provide the Washing machine privileges, however with extra cost. If you need to wash your personal clothes, you can ask the staff from 08:00 am to 04:00pm to assist you. The fee will be based on the quantity of the items you bring to clean."
            "Your comfort is our priority! We strive to blend luxury with practicality, allowing you to relax, recharge, and enjoy a perfect balance of style and functionality. Safety is paramount, and our hotel features advanced security systems, including surveillance cameras and secure entry points, ensuring your peace of mind and the safety of your belongings throughout your stay.",
            "Cash payments are accepted at the reception. For more details, please contact us via the email or phone number provided on this page. Keep in mind that the price may vary from the number of the persons or the time you make your reservation. So we very strongly reccomend you contact us, to make sure no missunderstandings are made."
        ],
        "image" => "images/room/trio.jpg",
        "suggestions"=> [
            "duos_comfort",
            "couples_delight",
            "solo_serenity",
        ],
        "display" => [
            [
                'src' => "images/room/trio.jpg",
                'alt' => "",
            ],
            [
                'src' => "images/room/duos.jpg",
                'alt' => "",
            ],
            [
                'src' => "images/room/family_room/bath1.jpeg",
                'extra' => "gallery-item-second",
                'alt' => "",
            ],
            [
                'src' => "images/room/family_room/bath2.jpeg",
                'alt' => "",
            ],
        ],
    ],
    'duos_comfort' =>  [
        "name" => "Duo's Comfort Room",
        "price" => 60,
        "capacity" => 2,
        "beds" => 2,
        "bath" => 1,
        "mini_description" => "Duo's Room for every dynamic duo. Where you can find 2 twin beds, individual storage space and a private bathroom. Enjoy your stay in the beautiful city of Shkodra, carefree.",
        "description" => [
            "Welcome to our inviting Duo's Comfort Room, designed with modern flair and cozy touches, perfect for your best friends' getaway. Celebrating the bond and adventures of friends traveling together, we've crafted an ideal space for relaxation and fun. This lively room features two twin-sized beds, comfortably accommodating two guests. The stylish decor with vibrant accents creates a warm and welcoming atmosphere, ideal for unwinding after a day of exploring the charms of Shkodra.",
            "Enjoy the convenience of air conditioning and a room refrigerator to keep your drinks and snacks chilled. With ample storage space for all your belongings and high-speed internet access, you'll have everything you need for a comfortable stay. Our 24-hour room service ensures that your requests are met promptly, day or night.",
            "The room also includes a fully equipped bathroom with all essential amenities, ensuring a refreshing and enjoyable stay. We're dedicated to providing a relaxed and enjoyable environment for all our guests, especially pairs of friends. Our thoughtful design and amenities are tailored to offer both comfort and convenience, ensuring a memorable and rejuvenating experience, whether your stay is brief or extended. We aim to make you feel at home from the moment you arrive.",
            "We provide the Washing machine privileges, however with extra cost. If you need to wash your personal clothes, you can ask the staff from 08:00 am to 04:00pm to assist you. The fee will be based on the quantity of the items you bring to clean."
            "Your comfort is our priority! We strive to blend luxury with practicality, allowing you to relax, recharge, and enjoy the perfect balance of style and functionality. Safety is paramount, and our hotel is equipped with advanced security systems, including surveillance cameras and secure entry points, ensuring your peace of mind and the safety of your belongings throughout your stay.",
            "Cash payments are accepted at the reception. For more details, please contact us via the email or phone number provided on this page. Keep in mind that the price may vary from the number of the persons or the time you make your reservation. So we very strongly reccomend you contact us, to make sure no missunderstandings are made."
        ],
        "image" => "images/room/duos.jpg",
        "suggestions"=> [
            "duos_comfort",
            "couples_delight",
            "solo_serenity",
        ],
        "display" => [
            [
                'src' => "images/room/trio.jpg",
                'alt' => "",
            ],
            [
                'src' => "images/room/duos.jpg",
                'alt' => "",
            ],
            [
                'src' => "images/room/family_room/bath1.jpeg",
                'extra' => "gallery-item-second",
                'alt' => "",
            ],
            [
                'src' => "images/room/family_room/bath2.jpeg",
                'alt' => "",
            ],
        ],
    ]
];

    
$roomObject = isset($rooms[$roomId]) ? $rooms[$roomId] : null;
function getName($object){
    return $object["name"];
}

function getImage($object){
    return $object["image"];
}

function getFeatures($object){
    $feature = "";
    if(isset($object["capacity"])) $feature.= '<li><i class="fa-light fa-user"></i><span data-value="'.$object["capacity"].'" data-id="feature-guest-title">'.$object["capacity"].' Guest'.($object["capacity"]==1?"": "s").'</span></li>';
    if(isset($object["double_bed"])) $feature.= '<li><i class="fa-light fa-bed-front"></i><span data-value="'.$object["double_bed"].'" data-id="feature-double-bed-title">'.$object["double_bed"].' Bed'.($object["double_bed"]==1?"": "s").'</span></li>';
    if(isset($object["single_bed"])) $feature.= '<li><i class="fa-light fa-bed-empty" style="color: #E2CBAD;"></i><span data-value="'.$object["single_bed"].'" data-id="feature-single-bed-title">'.$object["single_bed"].' Bed'.($object["single_bed"]==1?"": "s").'</span></li>';
    if(isset($object["bunk_bed"])) $feature.= '<li><i class="fa-light fa-bed-bunk" style="color: #E2CBAD;"></i><span data-value="'.$object["bunk_bed"].'" data-id="feature-bunk-bed-title">'.$object["bunk_bed"].' Bed'.($object["bunk_bed"]==1?"": "s").'</span></li>';
    if(isset($object["bath"])) $feature.= '<li><i class="fa-light fa-bath"></i><span data-value="'.$object["bath"].'" data-id="feature-bath-title">'.$object["bath"].' Bath'.($object["bath"]==1?"": "s").'</span></li>';
    return $feature;
}

function getDescription($object){
    return join("\n<br>\n",$object["description"]);
}

function getMiniDescription($object){
    return $object["mini_description"];
}

$translateSuggestion = function(string $suggestion): string {
    global $rooms;
    if(isset($rooms[$suggestion])){
        $suggestionObject = $rooms[$suggestion];
        return '
            <div class="item-related col-lg-4">
                <a href="room-details.php?room='.$suggestion.'" class="item-related_img">
                    <img src="'.getImage($suggestionObject).'" class="respimg" data-alt="img-alt-'.getImage($suggestionObject).'" alt="">
                    <div class="overlay"></div>
                    <span>View Details</span>
                </a>
                <h3><a href="room-details.php?room='.$suggestion.'" data-id="name-'.$suggestion.'">'.getName($suggestionObject).'</a></h3>
                <span class="post-date post-price" data-value="'.$suggestionObject["price"].'" data-id="price-title">'.getPrice($suggestionObject).'</span>
                <div class="room-card-details">
                    <ul>
                        '.getFeatures($suggestionObject).'
                    </ul>
                </div>
            </div>
        ';
    }else{
        return "";
    }
};

$translatePhotos = function(array $photoData): string {
    return '
        <div class="gallery-item'.(isset($photoData["extra"]) ? " ".$photoData["extra"] : "").'">
            <div class="grid-item-holder hov_zoom">
                <img src="'.(isset($photoData["src"])? $photoData["src"] :"404.jpg").'" data-alt="image-alt-'.$photoData["alt"].'" alt="'.(isset($photoData["alt"])? $photoData["alt"] :"").'">
                <a href="'.(isset($photoData["src"])? $photoData["src"] :"404.jpg").'" class="box-media-zoom popup-image"><i class="fa fa-search"></i></a>
            </div>
        </div>
    ';
};


function getPrice($object){
    return "€".$object["price"]."/Night";
}

function getPhotos($object){
    global $translatePhotos;
    $res = array_map($translatePhotos, $object["display"]);
    return join("\n", $res);
}

function getSuggestions($object){
    global $translateSuggestion;
    $res = array_map($translateSuggestion, $object["suggestions"]);
    return join("\n", $res);
}    
$name = $description = $price = $features = $images = $suggestions = null; 
if(isset($roomObject)){
    $name = getName($roomObject);
    $description = getDescription($roomObject);
    $price = getPrice($roomObject);
    $features = getFeatures($roomObject);
    $suggestions = getSuggestions($roomObject);
    $images = getPhotos($roomObject);
}else{
    if(strpos($_SERVER['PHP_SELF'], "room-details.php")!== false){
        header("Location: index.php#rooms");
        exit();
    }
}

?>