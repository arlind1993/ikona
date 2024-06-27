<?php
    $mapApi = "AIzaSyDXrqUc7k84GZ0W6P5sMFrKFMVIdN-Nd0w";
    function generateHead($title) {
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
