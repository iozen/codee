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
                <h2>PRIVACY</h2>
            </div>
            <div class="breadcrumbs_item_b"><a href="<?php echo $baseurl; ?>">HOME</a> / PRIVACY </div>
        </div>
    </section>
    <section class="content_s">
        <div class="content_s_cont block_cont">
            <div class="c_item">
                <p class="title">
 Privacy Policy
                </p>
            </div>
            <div class="c_item">
                    <p>
We respect your privacy and will keep your private data safe. We will never sell, rent, lease or give away your information (name, address, email, etc.) to any third party. Our privacy policy follows these principles: 
</p>
<p>
All information provided by you is only used to ensure the best possible shopping experience. All information is strictly confidential and is treated in accordance with consumer and data protection legislation.
</p>
<p>
If you place an order with us, we request certain personal information. You must provide contact information (such as name, e-mail and delivery address) and financial information (such as credit card number, expiration date and the three digit security code). We use this information for billing purposes and to complete your order. If we have trouble processing an order, we will use this information to contact you. Your telephone number is required for shipping purposes – in case the shipping company needs to contact you regarding the delivery.
</p>
<p>
We use third party web beacons (e.g. Google Analytics) to help analyze where visitors go and what they do while visiting our website. We reserve the right to modify this privacy policy at any time, so please review it frequently. If we make significant changes to this policy, we will notify you here and by a notice on the website in general.
                    </p>
            </div>
        </div>
    </section>
    <?php include_once '../view/footer.php'; ?>
</body>

</html>
