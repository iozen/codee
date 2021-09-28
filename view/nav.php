<header class="top">
    <div class="wrapper">
        <div class="top_block">
            <div class="item logo"><a href="<?php echo $baseurl;?>"><img src="<?php echo $baseurl;?>img/logo.svg"></a></div>
            <div class="item menu">
                <ul class="header_menu_h">
                    <li><a href="<?php echo $baseurl; ?>">HOME</a></li>
                    <li><a href="<?php echo $baseurl; ?>about/">ABOUT</a></li>
                    <li class="dropdown">PRODUCTS
                        <ul class="header_menu_h_sub">
                            <li><a href="#">All</a></li>
                            <li><a href="#">Seating</a></li>
                            <li><a href="#">Tables</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">INFO
                        <ul class="header_menu_h_sub">
                            <li> <a href="<?php echo $baseurl;?>shipping/">
                                    <div> Shipping</div>
                                </a></li>

                            <li> <a href="<?php echo $baseurl;?>privacy/">
                                    <div> Privacy</div>
                                </a> </li>
                            <li> <a href="<?php echo $baseurl;?>terms/">
                                    <div> Terms </div>
                                </a> </li>
                        </ul>
                    </li>
                    <li><a href="<?php echo $baseurl; ?>contact/">CONTACT</a></li>
                </ul>
            </div>
            <div class="item menu_mobile">
                <b href="#nav" class="meanmenu-reveal mm-span">
                    <span id="istart_span"></span>
                    <span id="imiddle_span"></span>
                    <span id="ilast_span"></span>
                </b>
            </div>
        </div>



        <nav class="mobile_menu">

            <div class="mobile_menu_block">
                <a href="<?php echo $baseurl;?>">
                    <div>HOME</div>
                </a>
                <a href="<?php echo $baseurl;?>about/">
                    <div>ABOUT</div>
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
                    <a href="<?php echo $baseurl; ?>shipping/">
                        <div>Shippig</div>
                    </a>
                    <a href="<?php echo $baseurl; ?>privacy/">
                        <div>Privacy</div>
                    </a>
                    <a href="<?php echo $baseurl; ?>terms/">
                        <div>Terms</div>
                    </a>
                </div>

                <a href="<?php echo $baseurl;?>contact/" class="mobile_menu_last">
                    <div>CONTACT</div>
                </a>
            </div>
        </nav>

        <div align="center" class="mobile_menu_close_point">
            <img src="<?php echo $baseurl; ?>img/icon_white.svg">
        </div>

    </div>
</header>
