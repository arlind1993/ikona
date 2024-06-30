<?php
    $deb = "AIzaSyDtg0MNeH1GYaiooHcUNNQac3Nyewma9bw";//null;
    $mapApi = $deb ?? "AIzaSyCubqC3XFVAVPewPQPtUDmPXGETWLebz0";
    $phoneNumber = "+355 68 454 4403";
    $address = "Rruga Gjuhadol, Shkodër, Albania";
    $mapRedirect = "https://maps.app.goo.gl/7ZzwRrYkHZ9WDQQS7";
    $email = "hotelikona@gmail.com";
    $bookingRedirect = "https://www.booking.com/Share-QKiRkoe";
    $socialInstagram = "https://www.instagram.com/hotel.ikona/";
    $socialTikTok = "https://www.tiktok.com/@hotel.ikona";

    function generateHead($title = "Ikona Hotel", $comming = false) {
        // Generate the HTML content
        $html = '
        <head>
            <!--=============== basic  ===============-->
            <meta charset="UTF-8">
            <meta http-equiv="x-ua-compatible" content="ie=edge">
            <title>'.$title.'</title>
            <!--=============== css  ===============-->	
            <link type="text/css" rel="stylesheet" href="css/plugins.css">
            <link type="text/css" rel="stylesheet" href="css/style.css">
            '.($comming ? '<link type="text/css" rel="stylesheet" href="css/cs-style.css">'
                        :'<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>').'
            <!--=============== favicons ===============-->
            <link rel="shortcut icon" href="images/logo6.png">
        </head>
        ';
        return $html;
    }

    function generateScripts($includeScripts = ['maps'=> false, 'cs' => false]) {
        global $mapApi;
        $hasMaps = $includeScripts['maps'] ?? false;
        $hasCs = $includeScripts['cs'] ?? false;
        // Generate the HTML content
        $html = '
            <script src="js/jquery.min.js"></script>
            <script src="js/plugins.js"></script>
            <script src="js/cookie.js"></script>
            <script src="js/scripts.js"></script>
            <script src="js/language.js"></script>
            '.($hasMaps ? ('
                <script src="https://maps.google.com/maps/api/js?key='.$mapApi.'"></script>
                <script src="js/map.js"></script>
            ') : ''
            ).($hasCs? ('<script src="js/cs-scripts.js"></script>') : '').'
        ';

        return $html;
    }

?>
