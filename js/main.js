$(document).ready(function() {

    var header = document.getElementById('header');
    var headroom = new Headroom(header);
    headroom.init();


    // menu responsive
    // Calculamos el ancho de la página
    var ancho = $(window).width(),
        // nombre = $('#nombre'),
        enlaces = $('#enlaces'),
        btnMenu = $('#btn-menu'),
        icono = $('#btn-menu .icono');

    if (ancho < 900) {
        // nombre.hide();
        enlaces.hide();
        btnMenu.show();
        icono.addClass('fa-bars');
    }

    btnMenu.on('click', function(e) {
        e.preventDefault();
        enlaces.slideToggle();
        icono.toggleClass('fa-bars');
        // nombre.slideToggle();
        // icono.toggleClass('fa-times');
        // if (ancho < 400) {
        //     $('.main').animate({
        //         'padding-top': '45%'
        //     }, 500);
        // }



    });

    $(window).on('resize', function() {
        if ($(this).width() > 900) {
            // nombre.show();
            enlaces.show();
            // btnMenu.hide();
            // icono.addClass('fa-times');
            // icono.removeClass('fa-bars');

        } else {
            // nombre.hide();
            enlaces.hide();
            // icono.addClass('fa-bars');
            // icono.removeClass('fa-times');
        }
    });

});