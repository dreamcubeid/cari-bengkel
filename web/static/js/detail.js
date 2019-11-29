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
                        slidesToShow: 3,
                        dots: false
                    }
                },
                {
                    breakpoint: 575,
                    settings: {
                        slidesToShow: 3,
                        dots: false
                    }
                }
            ]
        });
    }
    
 });

    $(document).on('click', '.cn-card-popup > a', function(e){
        e.preventDefault();
        let el = $(this);
        let popupBody = el.next();
        popupBody.stop().slideToggle('fast', function(){
            el.stop().toggleClass('flip');
        });
        return false;
    });