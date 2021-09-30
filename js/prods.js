$(document).ready(function() {

    var width_w = window.innerWidth;

    if (width_w <= 1000) {

        var elmnt = document.getElementById("prod1");
        var offsetWidth = elmnt.offsetWidth;
        var prop = 1.184;
        height_s = prop * offsetWidth;
        height_s = Math.round(height_s);

        $('.prod_block').css('height', height_s);
    }

});
