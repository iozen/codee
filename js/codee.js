$(document).ready(function() {

    /*header menu */
       $(".meanmenu-reveal").click(function() {
           $(".mobile_menu").slideToggle("medium");
           $(".mm-span").toggle();
           $(".mm-x").toggle();
       });

       $(".tg").click(function() {
          ids = $(this).attr("open_id");
           $("#sub_" + ids).slideToggle("fast");
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
