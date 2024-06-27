<?php
    function generateHead($title) {
        // Generate the HTML content
        $html = '<head>
            <!--=============== basic  ===============-->
            <meta charset="UTF-8">
            <meta http-equiv="x-ua-compatible" content="ie=edge">
            <title>'.$title.'</title>
            <!--=============== css  ===============-->	
            <link type="text/css" rel="stylesheet" href="css/plugins.css">
            <link type="text/css" rel="stylesheet" href="css/style.css">
            <!--=============== favicons ===============-->
            <link rel="shortcut icon" href="images/logo2.jpeg">
        </head>
        ';
        return $html;
    }
?>
