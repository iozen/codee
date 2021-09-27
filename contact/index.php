<?php include_once '../app/config.php';?>
<?php include_once '../app/index_tools.php';?>
<html>

<head>
    <?php include_once '../view/header.php'; ?>
    <script src="<?php echo $baseurl;?>js/mobile_menu.js"></script>
    <script src="<?php echo $baseurl;?>js/to_top.js"></script>
    <script src="<?php echo $baseurl;?>js/form.js"></script>
</head>

<body id="top_point">
    <section class="mobile_menu_wrapper">
    </section>
    <?php include_once '../view/nav.php'; ?>
    <section class="breadcrumbs_c">
        <div class="breadcrumbs">
            <div class="breadcrumbs_item_h">
                <h2>CONTACT</h2>
            </div>
            <div class="breadcrumbs_item_b"><a href="<?php echo $baseurl; ?>">HOME</a> / CONTACT</div>
        </div>
    </section>
    <form id="contact-form" method="post" action="<?php echo $baseurl;?>mail.php" style="padding:0; margin: 0;">
        <section class="content_s">
            <div class="content_s_cont_rev">
                <div class="c_item">
                    <div class="form_name">
                        <input class="form_input" name="name" placeholder="Name*">
                    </div>
                    <div class="form_email">
                        <input class="form_input" name="email" type="email" placeholder="E-mail*">
                    </div>
                    <div class="form_subj">
                        <input class="form_input" name="subject" placeholder="Subject*">
                    </div>
                    <div class="form_msg">
                        <textarea class="form_input" name="message" placeholder="Type Your message..." rows="7"></textarea>
                    </div>
                    <div class="form_sub">
                        <input class="form_input" id="send_message" name="sub" type="submit" value="SEND MESSAGE">
                    </div>
                </div>
                <div class="c_item">
                    <div class="map_cont">

                        <iframe width="100%" height="360" style="border:0" loading="lazy" allowfullscreen src="https://www.google.com/maps/embed/v1/place?q=place_id:GhIJ0SLb-X4HSUARsXJoke0GNEA&key=AIzaSyBuirWt0IgdrOIk6G40M27lWIxZ34mmlNU"></iframe>
                    </div>
                </div>
            </div>
        </section>
        <div class="form-message" align="center"></div>
    </form>
    <?php include_once '../view/footer.php'; ?>
</body>

</html>
