$(document).ready(function () {
    $('#slider1').slick({
        slidesToScroll: 1,
        autoplay: false,
        autoplaySpeed: 5000,
        arrows: true,
        dots: true,
        adaptiveHeight: false,
        adaptiveHeight: true


    });

    $('#slider2').slick({
        slidesToScroll: 1,
        autoplay: false,
        autoplaySpeed: 5000,
        arrows: true,
        dots: false,
        adaptiveHeight: true

    });

    var pack = 30;
    var timerId = setInterval(function() {
        pack--;
        $('.pack_value').html(pack);
    }, 30000);

    setTimeout(function() {
        clearInterval(timerId);
    }, 150000);

});

$(document).ready(function() {
    $('.change-package-selector2').on('change', (function() {
        $('.item-gift').hide();
        $('.' + $(this).val() + '_pack').show();
        $('.change-package-selector2 [value="' + $(this).val() + '"]').prop("selected", true);

        var package_id = $(this).val();
        // set_package_prices(package_id);
    }));
});