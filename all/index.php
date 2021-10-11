<?php include_once '../app/config.php';?>
<?php include_once '../app/index_tools.php';?>
<html>

<head>
    <?php include_once '../view/header.php'; ?>
    <script src="<?php echo $baseurl;?>js/mobile_menu.js"></script>
    <script src="<?php echo $baseurl;?>js/to_top.js"></script>
    <script src="<?php echo $baseurl;?>js/prods.js"></script>
</head>

<body id="top_point">
    <section class="mobile_menu_wrapper">
    </section>
    <?php include_once '../view/nav.php'; ?>
    <section class="breadcrumbs_c">
        <div class="breadcrumbs">
            <div class="breadcrumbs_item_h">
                <h2>ALL PRODUCTS</h2>
            </div>
            <div class="breadcrumbs_item_b"><a href="<?php echo $baseurl; ?>">HOME</a> / ALL PRODUCTS </div>
        </div>
    </section>
    <section class="product_wrapper">
        <div class="product_cont">



            <div class="prod_block p_small prod1" id="prod1">
                <div class="prod_item_cont">
                    <div class="prod_item_title">
                        coffee table
                    </div>
                    <div class="prod_item_link"> shop here</div>
                </div>


            <div class="title_block">HIVE</div>
            </div>
            <div class="prod_block p_small prod2">
                <div class="prod_item_cont">
                    <div class="prod_item_title">
                        coffee table
                    </div>
                    <div class="prod_item_link"> shop here</div>
                </div>
            <div class="title_block">HIVE</div>
            </div>
            <div class="prod_block  p_small prod3">
                <div class="prod_item_cont">
                    <div class="prod_item_title">
                        coffee table
                    </div>
                    <div class="prod_item_link"> shop here</div>
                </div>
            <div class="title_block"> HIVE</div>
            </div>
            <div class="prod_block  p_small prod4">
                <div class="prod_item_cont">
                    <div class="prod_item_title">
                        coffee table
                    </div>
                    <div class="prod_item_link"> shop here</div>
                </div>
            <div class="title_block"> HIVE</div>
            </div>
            <div class="prod_block  p_small prod5">
                <div class="prod_item_cont">
                    <div class="prod_item_title">
                        coffee table
                    </div>
                    <div class="prod_item_link"> shop here</div>
                </div>
            <div class="title_block"> HIVE</div>
            </div>
            <div class="prod_block  p_small prod6">
                <div class="prod_item_cont">
                    <div class="prod_item_title">
                        coffee table
                    </div>
                    <div class="prod_item_link"> shop here</div>
                </div>
            <div class="title_block"> HIVE</div>
            </div>

        </div>
    </section>

    <?php include_once '../view/footer.php'; ?>
</body>

</html>
