
jQuery(document).ready(function($){
    jQuery('.slider-logo-js').slick({
        centerMode: true,
        centerPadding: '120px',
        slidesToShow: 5,
        arrows: false,
        autoplay:true,
        responsive: [
            {
            breakpoint: 768,
            settings: {
                arrows: false,
                centerMode: true,
                centerPadding: '40px',
                slidesToShow: 3
            }
            },
            {
            breakpoint: 480,
            settings: {
                arrows: false,
                centerMode: false,
                centerPadding: '0px',
                slidesToShow: 1,
                rows: 5,
            }
            }
        ]
    });
    jQuery('.slider-logo-mobile-js').slick({
        autoplay:true,
        rows: 5,
        adaptiveHeight: true,

        arrows: false,
        centerMode: false,
        centerPadding: '0px',
        slidesToShow: 1,
/*         responsive: [
            {
            breakpoint: 768,
            settings: {
                arrows: false,
                centerMode: true,
                centerPadding: '40px',
                slidesToShow: 3
            }
            },
            {
            breakpoint: 480,
            settings: {
                arrows: false,
                centerMode: false,
                centerPadding: '0px',
                slidesToShow: 1,
               
            }
            }
        ] */
    });
    jQuery('.event-click-open').click(function(){
        if(jQuery('.menu-list-content').hasClass('active-menu')){
            jQuery('.menu-list-content').removeClass('active-menu');
        }else{
            jQuery('.menu-list-content').addClass('active-menu');
        }
    });
    //menu-main-content
    jQuery('.menu-main-content a').click(function(){
        if(jQuery(this).parent().hasClass('active-menu-mobile')){
            jQuery(this).parent().removeClass('active-menu-mobile');
        }else{
            jQuery(this).parent().addClass('active-menu-mobile');
        }
    });


    jQuery('.count').each(function () {
        jQuery(this).prop('Counter',0).animate({
            Counter: jQuery(this).attr('counter-data')
        }, {
            duration: 1000,
            easing: 'swing',
            step: function (now) {
                jQuery(this).text(Math.ceil(now));
            }
        });
    });

});