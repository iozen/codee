$(document).ready(function() {
    $(".meanmenu-reveal, .mobile_menu_close_point").click(function() {
        if ($('.mobile_menu').is(':visible')) {} else {
            var height = window.innerHeight;
            $(".mobile_menu").animate({
                height: height + "px"
            }, 0);
        }
        $(".mobile_menu").slideToggle("medium");
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

    var scroll = new SmoothScroll('a[href*="#"]', {
        speed: 250
    });
});
