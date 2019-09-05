/**
 * js/global.js
 * Javascript that applies to all pages
 */

$(function(){

    /**
     * jQuery lazy load images
     * jquery.eisbehr.de/lazy/
     */

    $('.img-lazy').Lazy({
        // Options
    });

    /**
     * Categories slider
     * http://kenwheeler.github.io/slick/
     */

    if($('.cn-categories').length > 0) {
        $('.cn-categories').slick({
            slidesToShow: 5,
            slidesToScroll: 1,
            dots: false,
            arrows: true,
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
                        slidesToShow: 2
                    }
                },
                {
                    breakpoint: 575,
                    settings: {
                        slidesToShow: 1
                    }
                }
            ]
        });
    }

    if($('.cn-card-slider').length > 0) {
        $('.cn-card-slider').slick({
            slidesToShow: 3,
            slidesToScroll: 3,
            dots: true,
            arrows: true,
            infinite: false,
            prevArrow: '<button type="button" class="slick-prev"><i class="fas fa-chevron-left"></i></button>',
            nextArrow: '<button type="button" class="slick-next"><i class="fas fa-chevron-right"></i></button>',
            responsive: [
                {
                    breakpoint: 991,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });
    }

});