<?php

function headerOneColumn($title, $obsah) {
    ?>

    <!DOCTYPE html>
    <html lang="cs">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title><?php echo $title ?></title>
        <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        -->
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
    <body>
        <nav id="menu" role="navigation">
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/about">About us</a>
                <ul>
                    <li><a href="/about/history">History</a></li>
                    <li><a href="/about/team">The team</a></li>
                    <li><a href="/about/address">Our address</a></li>
                </ul>
                </li>
                <li><a href="/contact">Contact</a></li>
            </ul>
        </nav>

        <div id="page">
            <div class="container flex flex-column center">
                <header class="flex flex_align--center padding-25" id="header">
                    <div class="margin_right--auto" id="logo">
                        <a href="/">
                            <img class="inline-block-center" src="img/tomas-vykoukal.png" alt="Tomáš Vykoukal">
                            <h1 class="inline-block-center">Tomáš Vykoukal</h1>
                        </a>
                    </div>
                    <div class="padding-lr-25" id="menu-toogle" >
                        <div id="nav-icon3">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </header>
                <article class="row margin_left-right--auto margin_top-bottom--auto padding-25" id="main-content-front">
                        <?php echo $obsah; ?>
                </article>
                <footer class="padding-lr-25" role="contentinfo">
                    <p>© <?php echo date("Y"); ?> by <abbr title="papa means Italian father">papa</abbr> Tomas</p>
                </footer>
            </div>
        </div>

    <!--<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>-->
    <!--<script id="__bs_script__">//<![CDATA[
        document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.js?v=2.23.6'><\/script>".replace("HOST", location.hostname));
     //]]>
    </script>-->
    </body>
    </html>
    <?php
}
