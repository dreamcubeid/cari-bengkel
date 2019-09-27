/**
 * /js/detail.js
 * JavaScript for detail page
 */

$(function(){

    /**
     * Categories slider
     * http://kenwheeler.github.io/slick/
     */

    if($('.cn-categories').length > 0) {

        $('.cn-categories').slick({
            slidesToShow: 5,
            slidesToScroll: 1,
            dots: false,
            arrows: false,
            infinite: true,
            prevArrow: '<button type="button" class="slick-prev"><i class="fas fa-chevron-left"></i></button>',
            nextArrow: '<button type="button" class="slick-next"><i class="fas fa-chevron-right"></i></button>',
            responsive: [
                {
                    breakpoint: 1199,
                    settings: {
                        slidesToShow: 4
                    }
                },
                {
                    breakpoint: 991,
                    settings: {
                        slidesToShow: 3
                    }
                },
                {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 2,
                        dots: false
                    }
                },
                {
                    breakpoint: 575,
                    settings: {
                        slidesToShow: 1,
                        dots: false
                    }
                }
            ]
        });
    }
    
 });