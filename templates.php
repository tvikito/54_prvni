<?php

function template_home($title, $obsah) {
    ?>

    <!DOCTYPE html>
    <html lang="cs">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">

            <title><?php echo $title ?></title>

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

            <div id="page" class="h-100 flex flex-column center">
                <div id="darker"></div>

                <header class="sm-d-flex flex_align--center padding-15" id="header-bar">
                    <div class="container">
                        <div class="margin_right--auto padding-tb-10" id="logo">
                            <a href="/">
                                <img class="inline-block-center" src="img/tomas-vykoukal.png" alt="Tomáš Vykoukal">
                                <h1 class="inline-block-center">Tomáš Vykoukal</h1>
                            </a>
                        </div>
                        <div class="padding-tb-10" id="menu-toogle" >
                            <div id="nav-icon3">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                    </div>
                </header>

                <div class="container">
                    <article class="row margin_left-right--auto margin_top-bottom--auto padding-15 padding-tb-20" id="main-content-front">
                        <?php echo $obsah; ?>
                    </article>
                </div>

                <footer class="padding-10" role="contentinfo">
                    <div class="container">
                        <p>© <?php echo date("Y"); ?> created with my youngest sister and oldest grandma by <abbr title="papa means Italian father">papa</abbr> Tomas</p>
                    </div>
                </footer>
            </div>

            <script>
                $(document).ready(function(){
                $('#nav-icon1,#nav-icon2,#nav-icon3,#nav-icon4').click(function(){
                    $(this).toggleClass('open');
                });
                });
            </script>

        </body>
    </html>
    <?php
}

function template_contact($title, $obsah) {
    ?>

    <!DOCTYPE html>
    <html lang="cs">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">

            <title><?php echo $title ?></title>

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
                        $("#nav-icon3").removeClass("open");
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
                <div id="darker"></div>
                <div class="container h-100 flex flex-column center">

                    <header class="sm-d-flex flex_align--center padding-15" id="header">
                        <div class="margin_right--auto padding-tb-10" id="logo">
                            <a href="/">
                                <img class="inline-block-center" src="img/tomas-vykoukal.png" alt="Tomáš Vykoukal">
                                <h1 class="inline-block-center">Tomáš Vykoukal</h1>
                            </a>
                        </div>
                        <div class="padding-tb-10" id="menu-toogle" >
                            <div id="nav-icon3">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                    </header>

                    <article class="row margin_left-right--auto margin_top-bottom--auto padding-15 padding-tb-20" id="main-content-front">
                        <?php echo $obsah; ?>
                    </article>

                    <footer class="padding-15" role="contentinfo">
                        <p>© <?php echo date("Y"); ?> created with my youngest sister and oldest grandma by <abbr title="papa means Italian father">papa</abbr> Tomas</p>
                    </footer>
                </div>
            </div>
        </body>
    </html>
    <?php
}
