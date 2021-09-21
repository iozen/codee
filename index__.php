<?php include_once 'app/config.php';?>
<?php include_once 'app/index_tools.php';?>
<html>

<head>
    <title>Codee | Home </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $baseurl;?>img/favicon.png">
    <link rel="stylesheet" href="<?php echo $baseurl;?>css/s.css">
    <link rel="stylesheet" href="<?php echo $baseurl;?>css/font-awesome/css/font-awesome.min.css">
    <script src="jquery/jquery-3.1.1.min.js"></script>
    <script src="js/main_codee.js"></script>
    <script src="js/to_top.js"></script>
</head>

<body id="top_point">
    <section class="header__wrapper">
        <header class="top">
            <div class="wrapper">
                <div class="top_block">
                    <div class="item logo"><a href="<?php echo $baseurl;?>"><img src="<?php echo $baseurl;?>img/logo.svg"></a></div>
                    <div class="item menu">
                        <ul class="header_menu_h">
                            <li><a href="#">HOME</a></li>
                            <li><a href="#">ABOUT</a></li>
                            <li class="dropdown">PRODUCTS
                                <ul class="header_menu_h_sub">
                                    <li><a href="#">All</a></li>
                                    <li><a href="#">Seating</a></li>
                                    <li><a href="#">Tables</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">INFO
                                <ul class="header_menu_h_sub">
                                    <li><a href="#">Shippig</a></li>
                                    <li><a href="#">Privacy</a></li>
                                    <li><a href="#">Terms</a></li>
                                </ul>
                            </li>
                            <li>CONTACT</li>
                        </ul>
                    </div>
                    <div class="item menu_mobile">
                        <b href="#nav" class="meanmenu-reveal mm-span">
                            <span></span>
                            <span></span>
                            <span></span>
                        </b>
                        <b href="#nav" class="meanmenu-reveal mm-x">
                            <b class="nav_x">X</b>
                        </b>
                    </div>
                </div>
                <nav class="mobile_menu">
                    <div class="mobile_menu_block">
                        <a href="<?php echo $baseurl;?>">
                            <div>HOME</div>
                        </a>
                        <a href="<?php echo $baseurl;?>">
                            <div>ABOUT US</div>
                        </a>
                        <a open_id="prod" class="tg">
                            <div>PRODUCTS
                                <i class="fa fa-angle-down" aria-hidden="true"></i>
                            </div>
                        </a>

                        <div class="mobile_menu_sub" id="sub_prod">
                            <a href="#">
                                <div>All</div>
                            </a>
                            <a href="#">
                                <div>Seating</div>
                            </a>
                            <a href="#">
                                <div>Tables</div>
                            </a>
                        </div>

                        <a open_id="info" class="tg">
                            <div>INFO
                                <i class="fa fa-angle-down" aria-hidden="true"></i>
                            </div>
                        </a>

                        <div class="mobile_menu_sub" id="sub_info">
                            <a href="#">
                                <div>Shippig</div>
                            </a>
                            <a href="#">
                                <div>Privacy</div>
                            </a>
                            <a href="#">
                                <div>Terms</div>
                            </a>
                        </div>

                        <a href="<?php echo $baseurl;?>">
                            <div>CONTACT</div>
                        </a>
                    </div>
                </nav>
            </div>
        </header>

        <div class="s-slider-wrap_temp">
            <div class="slider-text-block">
                <h2 class="slider-text-h2" id="slider_action">
                    <span id="slider_bt">
                        <a href="#point" class="slider_bt_a">
                            <span class="headline-text-el">the spirit </span><br>
                            <span class="headline-text-el">of</span><br>
                            <span class="headline-text-el" style="padding-right:15px;"> home</span>
                        </a>
                    </span>
                </h2>
            </div>
        </div>

    </section>
    <div class="pointer_wrapper" align="center">
        <a href="#point"> <span id="pointer"><img src="img/icon.svg"></span></a>
    </div>

    <section class="portfolio_wrapper">
        <div class="portfolio_block block1" id="point"><img src="img/portfolio/2.jpg"></div>
        <div class="portfolio_block block2"><img src="img/portfolio/1.jpg"></div>
        <div class="portfolio_block block3"><img src="img/portfolio/9.jpg"></div>
        <div class="portfolio_block block4"><img src="img/portfolio/10.jpg"></div>
        <div class="portfolio_block block5"><img src="img/portfolio/3.jpg"></div>
        <div class="portfolio_block block6"><img src="img/portfolio/6.jpg"></div>
        <div class="portfolio_block block7"><img src="img/portfolio/7.jpg"></div>
        <div class="portfolio_block block8"><img src="img/portfolio/8.jpg"></div>
        <div class="portfolio_block block9"><img src="img/portfolio/11.jpg"></div>
        <div class="portfolio_block block10"><img src="img/portfolio/2.jpg"></div>
        <div class="portfolio_block block11"><img src="img/portfolio/3.jpg"></div>
    </section>
    <footer>
        <div>
            <a href="<?php echo $baseurl;?>">
                <img src="<?php echo $baseurl;?>img/logo.svg"></a>
        </div>

        <div>Phone : +48796301383</div>
        <div>Email : info@codeehome.com</div>
        <div>Address : Your address goes here.</div>

        <div class="social_icon">
            <a href="https://www.instagram.com/codeehome/?hl=en" target="_blank">
                <i class="fa fa-instagram"></i>
            </a>
        </div>
    </footer>
    <!-- start scrollUp  -->
    <div id="toTop">
        <a href="#top_point"> <i class="fa fa-chevron-up"></i></a>
    </div>
</body>

</html>
