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
                        <img class="inline-block-center" src="/img/tomas-vykoukal.png" alt="Tomáš Vykoukal">
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

            <section class="row margin_left-right--auto margin_top-bottom--auto padding-15 padding-tb-20" id="main-content-front">
                <article>
                    <?php echo $obsah; ?>
                </article>
            </section>

            <?php include_once 'footer.php'; ?>
        </div>
    </div>
</body>
</html>
