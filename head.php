<!DOCTYPE html>
    <html lang="cs">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <meta name="theme-color" content="#4285f4">

            <title><?php echo $title ?></title>

            <link rel="apple-touch-icon" sizes="180x180" href="/favicons/apple-touch-icon.png">
            <link rel="icon" type="image/png" sizes="32x32" href="/favicons/favicon-32x32.png">
            <link rel="icon" type="image/png" sizes="16x16" href="/favicons/favicon-16x16.png">
            <link rel="manifest" href="/favicons/site.webmanifest">
            <link rel="mask-icon" href="/favicons/safari-pinned-tab.svg" color="#603cba">
            <link rel="shortcut icon" href="/favicons/favicon.ico">
            <meta name="msapplication-TileColor" content="#603cba">
            <meta name="msapplication-config" content="/favicons/browserconfig.xml">
            <meta name="theme-color" content="#ffffff">

            <meta property="og:image" content="/img/og-image.jpg">
            <meta property="og:image:width" content="279">
            <meta property="og:image:height" content="279">
            <meta property="og:title" content="<?php $title ?> - Tomas Vykoukal">
            <meta property="og:description" content="<?php echo $desc ?>">
            <meta property="og:url" content="<?php echo parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH); ?>">

            <link rel="stylesheet" href="/css/normalize.css">
            <link rel="stylesheet" href="/css/burger-menu.css">
            <link rel="stylesheet" href="/css/custom.css">
            <link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">

            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <script>
                $(document).ready(function(){
                    $("#nav-icon3").click(function(){
                        $("body").toggleClass("sidemenu--open");
                    });

                    $("#darker").click(function(){
                        $("body").removeClass("sidemenu--open");
                    });
                });
            </script>
        </head>
