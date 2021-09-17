<?php include_once 'app/config.php';?>
<?php include_once 'app/index_tools.php';?>
<html>

<head>
    <title>codde</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $baseurl;?>img/favicon.png">
    <link rel="stylesheet" href="<?php echo $baseurl;?>css/s.css">
    <link rel="stylesheet" href="<?php echo $baseurl;?>css/font-awesome/css/font-awesome.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">

    <script src="jquery/jquery-3.1.1.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/to_top.js"></script>
</head>

<body>
    <section class="header__wrapper">
        <header class="top">
            <div class="wrapper">
                <div class="top_block">
                    <div class="item logo"><a href="<?php echo $baseurl;?>"><img src="<?php echo $baseurl;?>img/logo.svg"></a></div>
                    <div class="item menu">
                        <ul class="header_menu_h">
                            <li><a href="#">HOME</a></li>
                            <li><a href="#">ABOUT US</a></li>
                            <li class="dropdown">PRODUCTS
                                <i class="fa fa-angle-down" aria-hidden="true"></i>
                                <ul class="header_menu_h_sub">
                                    <li><a href="#">All</a></li>
                                    <li><a href="#">Seating</a></li>
                                    <li><a href="#">Tables</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">INFO

                                <i class="fa fa-angle-down" aria-hidden="true"></i>
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
            </div>
        </header>
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
        <div class="s-slider-wrap_temp">
            <div class="slider-text-block">
                <a href="#point">
                    <h2 class="slider-text-h2" id="slider_action"><span id="slider_bt">
                            <span class="headline-text-el">the spirit </span>
                            <span class="headline-text-el">of</span>
                            <span class="headline-text-el" style="padding-right:15px;"> home</span>
                        </span></h2>
                </a>
            </div>
        </div>
        <div class="pointer_wrapper" align="center">
            <a href="#point"> <span id="pointer"><img src="img/icon.svg"></span></a>
            <span id="point"></span>
        </div>
        <div>
        </div>
    </section>






<section class="categories_wrap">


    <div class="categories_block cat_wrap_col">
        <div class="categories_item cat_col_1" >jkj</div>
        <div class="categories_item cat_col_1" >kjkj</div>
        <div class="categories_item cat_col_2" >ljkj</div>
    </div>

    <div class="categories_block cat_wrap_col">
        <div class="categories_item cat_col_2" >jkj</div>
        <div class="categories_item cat_col_1" >kjkj</div>
        <div class="categories_item cat_col_1" >ljkj</div>
    </div>

    <div class="categories_block cat_wrap_col">
        <div class="categories_item cat_col_1" >jkj</div>
        <div class="categories_item cat_col_1" >jkj</div>
        <div class="categories_item cat_col_2" >kjkj</div>
        <div class="categories_item cat_col_1" >ljkj</div>
        <div class="categories_item cat_col_1" >jkj</div>
    </div>
</section>

    <footer>
        <div>
            <a href="<?php echo $baseurl;?>">
                <img src="<?php echo $baseurl;?>img/logo.svg"></a>
        </div>

        <div>Phone : +48796301383</div>
        <div>Email : info@codeehome.com</div>
        <div>Address : Your address goes here. Victoria</div>

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
