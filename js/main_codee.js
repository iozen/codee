$(document).ready(function() {

    var elmnt = document.getElementById("point");
    var offsetWidth = elmnt.offsetWidth;

    var prop = 1.184;
    height_s = prop * offsetWidth;
    height_s = Math.round(height_s);
    height_b = height_s * 2;
    height_bot = height_b + 14;

    $('.p_small').css('height', height_s);
    $('.p_big').css('height', height_b);
    $('.p_big').css('height', height_b);
    $('.p_big_bot').css('height', height_bot);

    /*header menu */
    $(".meanmenu-reveal, .mobile_menu_close_point").click(function() {
        $(".mobile_menu").slideToggle("medium");
     /*   $(".mm-span").toggle();
        $(".mm-x").toggle();*/
        if ($('#toTop').is(':visible')) {
            $("#toTop").toggle();
        }
        $(".wrapper").toggleClass('wrapper_100h');

        $("#istart_span").toggleClass('first_span');
        $("#imiddle_span").toggleClass('middle_span');
        $("#ilast_span").toggleClass('last_span');



    });

    $(".tg").click(function() {
        ids = $(this).attr("open_id");
        $("#sub_" + ids).slideToggle("fast");
    });

    /* Smooth Scrolling */
    $(function() {
        // $('a[href*=#]:not([href=#])').click(function() {
        $("a[href*='#']:not([href='#'])").click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top - 70
                    }, 1000);
                    return false;
                }
            }
        });
    });

    /* form  */
    $('#form_body').submit(function(e) {
        e.preventDefault();
        pib = $('#pib').val();
        mobile = $('#mobile').val();
        email = $('#email').val();
        msg = $('#msg').val();
        $.ajax({
            method: "POST",
            url: "action/form.php?type=js",
            dataType: "json",
            beforeSend: function() {
                //    new_bar.beforesend_start();
            },
            data: {
                pib: pib,
                mobile: mobile,
                email: email,
                msg: msg
            }
        }).done(function(data) {
            if (data.status === 'success') {
                // location.href = 'thanks.php';
                $('#contact').hide();
                $('.thanks').show();
            } else {
                $('.pib_error').hide();
                $('.mobile_error').hide();
                pib_data = data.pib;
                mobile_data = data.mobile;
                console.log(mobile_data);
                if (pib_data.status == true) {
                    $('.pib_error').show();
                    $('.pib_error').html(pib_data.message);
                }
                if (mobile_data.status == true) {
                    $('.mobile_error').show();
                    $('.mobile_error').html(mobile_data.message);
                }
            }
        }).fail(function(data) {
            alert('Помилка передачі... ): ');
        });
    });
});
