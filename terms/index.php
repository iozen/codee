<?php include_once '../app/config.php';?>
<?php include_once '../app/index_tools.php';?>
<html>

<head>
    <?php include_once '../view/header.php'; ?>
    <script src="<?php echo $baseurl;?>js/mobile_menu.js"></script>
    <script src="<?php echo $baseurl;?>js/to_top.js"></script>
</head>

<body id="top_point">
    <section class="mobile_menu_wrapper">
    </section>
    <?php include_once '../view/nav.php'; ?>
    <section class="breadcrumbs_c">
        <div class="breadcrumbs">
            <div class="breadcrumbs_item_h">
                <h2>TERMS</h2>
            </div>
            <div class="breadcrumbs_item_b"><a href="<?php echo $baseurl; ?>">HOME</a> / TERMS </div>
        </div>
    </section>
    <section class="content_s">
        <div class="content_s_cont block_cont">
            <div class="c_item">
                <p class="title">
                    Terms & Conditions
                </p>
            </div>
            <div class="c_item">

                <p>All product designs, product names and content included on this website are protected by international copyright and trademark laws. You are not permitted to use any product designs, product names or trademarks presented on this site without prior written consent from CODEE.</p>

                <p>Requests for information should be made to: info@codeehome.com</p>
            </div>

        </div>
    </section>
    <?php include_once '../view/footer.php'; ?>
</body>

</html>
