<!DOCTYPE html>

<?php 
$language = 'en_US' ;
$site_name = 'The Website' ;
$site_url = 'yourwebsite.com' ; 
$author = 'Author Name' ; 
$year = '2016' ;
$site_color = '#000000' ;
$twitter_company = '@username' ;
$twitter_author = '@username' ;
$facebook_id = '000000000' ;
      ?>

    <html lang="<?php echo $language ?>">

    <head>

        <!--Meta must have-->
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="robots" content="All" />
        <meta name="googlebot-news" content="all" />
        <meta name="HandheldFriendly" content="True">

        <!--Meta info-->
        <meta name="keywords" content="<?php echo $keywords ?>" />
        <meta name="description" content="<?php echo $description ?>" />
        <meta name="date" content="<?php echo $year ?>" />
        <meta name="author" content="<?php echo $author ?>" />
        <meta name='generator' content='<?php echo $author ?>'>
        <meta name="application-name" content="<?php echo $site_name ?>">

        <!--Open Graph data -->
        <meta property="fb:app_id" content="<?php echo $facebook_id ?>" />
        <meta property="og:title" content="<?php echo $title ?>" />
        <meta property="og:site_name" content="<?php echo $site_name ?>" />
        <meta property="og:url" content="http://www.<?php echo $site_url ?>" />
        <meta property="og:type" content="website" />
        <meta property="og:image" content="http://www.<?php echo $site_url ?>/assets/facebook-preview.jpg" />
        <meta property="og:image:type" content="image/jpg" />
        <meta property="og:image:width" content="1200" />
        <meta property="og:image:height" content="630" />
        <meta property="og:locale" content="<?php echo $language ?>">
        <meta property="og:description" content="<?php echo $description ?>" />

        <!--Google+ data-->
        <meta itemprop="image" content="http://www.<?php echo $site_url ?>/assets/schema-preview.jpg">
        <meta itemprop="description" content="<?php echo $description ?>">
        <meta itemprop="name" content="<?php echo $title ?>">


        <!-- Twitter Card data -->
        <meta name="twitter:description" content="<?php echo $description ?>">
        <meta name="twitter:title" content="<?php echo $title ?>">
        <meta name="twitter:card" content="summary">
        <meta name="twitter:site" content="<?php echo $twitter_company ?>">
        <meta name="twitter:creator" content="<?php echo $twitter_author ?>">
        <meta name="twitter:image:src" content="http://www.<?php echo $site_url ?>/assets/twitter-preview.jpg">
        <meta name="twitter:image:width" content="870">
        <meta name="twitter:image:height" content="750">

        <!-- Windows 8 and Phone-->
        <meta name="msapplication-TileImage" content="assets/favicon.png">
        <meta name="msapplication-TileColor" content="<?php echo $site_color ?>" />
        <meta name="application-name" content="<?php echo $site_name ?>" />
        <meta name="MobileOptimized" content="320">
        <meta name="msapplication-navbutton-color" content="<?php echo $site_color ?>">

        <!-- IE11 tiles -->
        <meta name="msapplication-square150x150logo" content="assets/tile.png" />
        <meta name="msapplication-wide310x150logo" content="assets/tile-wide.png" />

        <!--
        <link rel="canonical" href="http://www.<?php echo $site_url ?>" />
        -->

        <!--Apple Meta Data-->
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black-traslucent">

        <!--Theming-->
        <meta name="theme-color" content="<?php echo $site_color ?>">
        <link rel="mask-icon" href="assets/safari-pinned-tab.svg" color="<?php echo $site_color ?>">

        <!--Apple Touch Icon-->
        <link rel="apple-touch-icon" sizes="57x57" href="assets/apple-touch-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="assets/apple-touch-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="assets/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="assets/apple-touch-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="assets/apple-touch-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="assets/apple-touch-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="assets/apple-touch-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="assets/apple-touch-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="assets/apple-touch-icon-180x180.png">

        <!--Apple Load Image-->
        <link rel="apple-touch-startup-image" href="http://www.<?php echo $site_url ?>/assets/apple-touch-startup-image-320x460.png" media="(device-width: 320px) and (device-height: 480px) and (-webkit-device-pixel-ratio: 1)">
        <link rel="apple-touch-startup-image" href="http://www.<?php echo $site_url ?>/assets/apple-touch-startup-image-640x920.png" media="(device-width: 320px) and (device-height: 480px) and (-webkit-device-pixel-ratio: 2)">
        <link rel="apple-touch-startup-image" href="http://www.<?php echo $site_url ?>/assets/apple-touch-startup-image-640x1096.png" media="(device-width: 320px) and (device-height: 568px) and (-webkit-device-pixel-ratio: 2)">
        <link rel="apple-touch-startup-image" href="http://www.<?php echo $site_url ?>/assets/apple-touch-startup-image-768x1004.png" media="(device-width: 768px) and (device-height: 1024px) and (orientation: portrait) and (-webkit-device-pixel-ratio: 1)">
        <link rel="apple-touch-startup-image" href="http://www.<?php echo $site_url ?>/assets/apple-touch-startup-image-748x1024.png" media="(device-width: 768px) and (device-height: 1024px) and (orientation: landscape) and (-webkit-device-pixel-ratio: 1)">
        <link rel="apple-touch-startup-image" href="http://www.<?php echo $site_url ?>/assets/apple-touch-startup-image-1536x2008.png" media="(device-width: 768px) and (device-height: 1024px) and (orientation: portrait) and (-webkit-device-pixel-ratio: 2)">
        <link rel="apple-touch-startup-image" href="http://www.<?php echo $site_url ?>/assets/apple-touch-startup-image-1496x2048.png" media="(device-width: 768px) and (device-height: 1024px) and (orientation: landscape) and (-webkit-device-pixel-ratio: 2)">

        <!--Favicon-->
        <link rel="icon" type="image/png" href="assets/favicon-16x16.png" sizes="16x16">
        <link rel="icon" type="image/png" href="assets/favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="assets/favicon-96x96.png" sizes="96x96">
        <link rel="icon" type="image/png" href="assets/android-chrome-192x192.png" sizes="192x192">
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
        <link rel="icon" href="favicon.ico" type="image/x-icon" />

        <!--[if lt IE 8]>
	    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	    <![endif]-->

        <title>
            <?php echo $title ?>
        </title>

        <!--External Stylesheets -->
        <link rel="stylesheet" href="css/normalize.min.css" media="screen" />
        <link rel="stylesheet" href="css/animate.min.css" media="screen" />
        <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" />

        <!--Main Stylesheet-->
        <link rel="stylesheet" href="css/main.min.css" media="screen" />

        <!--jQuery-->
        <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>

        <!--Resizing -->
        <script type="text/javascript" src="js/resize.js"></script>
    </head>

    <body>