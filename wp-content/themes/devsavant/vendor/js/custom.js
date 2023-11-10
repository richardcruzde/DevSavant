
jQuery(document).ready(function($){
    jQuery('.slider-logo').slick({
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
                centerMode: true,
                centerPadding: '40px',
                slidesToShow: 1
            }
            }
        ]
    });
});