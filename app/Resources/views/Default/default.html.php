<?php 
    $this->extend('Layouts/layout.html.php');

    //Call js helper
    $this->headScript()->prependFile('/static/js/helper.js');

    $category = $this->category;
?>

<section class="mb-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-8 col-lg-6 py-5">
                <div class="cn-hero">
                    <h1>Temukan Kebutuhan Kendaraanmu Dengan Mudah</h1>
                    <p>Segala kebutuhan untuk kendaraanmu dapat dengan mudah ditemukan di Kemudi</p>
                </div><!--/ .cn-hero -->
            </div><!--/ .col-12 -->
        </div><!--/ .row -->
    </div><!--/ .container -->
</section><!--/ . -->

<section class="mb-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="cn-search">
                    <form role="form" class="d-flex flex-column flex-md-row align-items-center align-content-center justify-content-between" method="GET" action="/cari/">
                        <div class="form-group flex-grow-1 mx-0 mr-md-3 mb-3 mb-md-0">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fas fa-search"></i>
                                    </span>
                                </div>
                                <input id="keywordLocation" type="search" name="keyword" class="form-control" placeholder="Cari berdasarkan daerah atau nama bengkel" required maxlength="70">
                                <input type="hidden" name="page" value="">
                                <div class="input-group-append">
                                    <span class="input-group-text text-primary cn-search-city__trigger">
                                        <i class="fas fa-crosshairs"></i>
                                    </span>
                                </div>
                            </div>
                        </div><!--/ .form-group -->
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">
                                Cari
                            </button>
                        </div><!--/ .form-group -->
                    </form>
                </div><!--/ . -->
            </div><!--/ .col-12 -->
        </div><!--/ .row -->
    </div><!--/ .container -->
</section><!--/ . -->

<!-- <section class="mb-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="cn-ads my-2 my-md-0">
                    <a href="#">
                        <img data-src="http://placehold.it/830x80?text=Google+Ads" alt="Google Ads" title="Google Ads" class="img-fluid img-lazy" style="min-width: 100%; height: auto;">
                    </a>
                </div><!--/ .cn-ads -->
            <!-- </div>/ .col-12  -->
        <!-- </div>/ .row  -->
    <!-- </div>/ .container  -->
<!-- </section>/ .  -->

<section class="cn-section">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="cn-section-title">
                    <h2>Sekitar Anda</h2>
                </div>
            </div><!--/ .col-12 -->
        </div><!--/ .row -->

        <div class="row py-5" id="info-empty-garage" hidden="true">
            <div class="col-12 text-center">

                <h2 style="font-weight: 300; color: #414141;" class="m-0 p-0">
                    Maaf tidak ada bengkel di sekitar Anda.<br />Silahkan cari bengkel pada kolom pencarian.
                </h2>

                <div class="d-block mw-100 w-50 mt-5 py-3 text-center mx-auto">
                    <img src="/static/images/biker.webp" alt="" title="" class="img-fluid mt-5 d-block mx-auto">
                </div>

            </div><!--/ .col-12 -->
        </div><!--/ .row -->

        <div class="row">
            <div class="col-12">

                <div class="cn-card-slider">

                    <div class="cn-card-slider__items cn-card-slider--same-height" id="nearest-garage-list">

                    </div><!--/ .cn-card-slider__items -->

                    <div class="cn-card-slider__control">

                    </div><!--/ .cn-card-slider__control -->

                </div><!--/ .cn-card-slider -->

            </div><!--/ .col-12 -->
        </div><!--/ .row -->
    </div><!--/ .container -->
</section><!--/ .cn-section -->

<section class="cn-section">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="cn-section-title">
                    <h2>Kategori</h2>
                </div>
            </div><!--/ .col-12 -->
        </div><!--/ .row -->
        <div class="row">
            <div class="col-12">

                <div class="cn-categories">

                    <?php 
                        if(isset($category)): 

                            /**
                             * Dibikin gini biar gak error di local yang gak ada assetnya
                             * @falmesino
                             */

                            foreach($category as $key => $value):
                                $url = '/cari/?category=' . str_replace('-', '_', $value->getSlug());
                                $icon = 'http://placehold.it/72x72';
                                $name = $value->getName();

                                try{
                                    $icon = $value->getIcon()->getPath() . $value->getIcon()->getFilename();
                                }
                                catch(Throwable $t)
                                {
                                    // Do nothing when fail
                                }
                    ?>

                    <a href="<?= $url; ?>" title="<?= $name; ?>" class="cn-categories-item">
                        <div class="cn-categories-item__inner d-flex flex-column align-items-center justify-content-center">
                            <div class="cn-categories-item__icon">
                                <img data-src="<?= $icon; ?>" class="img-lazy" alt="<?= $name; ?>" title="<?= $name; ?>">
                            </div><!--/ .cn-categories-item__icon -->
                            <div class="cn-categories-item__text mt-2">
                                <span><?= $name; ?></span>
                            </div><!--/ .cn-categories-item__text -->
                        </div><!--/ .cn-categories-item__inner -->
                    </a><!--/ .cn-categories-item -->

                    <?php
                            endforeach;
                        endif;
                    ?>

                </div><!--/ .cn-categories -->

            </div><!--/ .col-12 -->
        </div><!--/ .row -->
    </div><!--/ .container -->
</section><!--/ .cn-section -->

<section class="cn-section">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="cn-section-title">
                    <h2>Rekomendasi</h2>
                </div>
            </div><!--/ .col-12 -->
        </div><!--/ .row -->
        <div class="row" id="recommended-garage">

        </div><!--/ .row -->
    </div><!--/ .container -->
</section><!--/ .cn-section -->

<script>
    var allowLocation;
    var currentPosition;

    $( document ).ready(function() {

        getLocation();

        /**
         * Schedule popup mechanic
         */

        $(document).on('click', '.cn-card-popup > a', function(e){
            e.preventDefault();
            let el = $(this);
            let popupBody = el.next();
            popupBody.stop().slideToggle('fast', function(){
                el.stop().toggleClass('flip');
            });
            return false;
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

    function getLocation() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(
                function(position) {
                    currentPosition = {'latitude' : position.coords.latitude, 'longitude' : position.coords.longitude};
                    allowLocation = true;

                    loadData(5);
                    loadRecommendation();
                },
                function(error) {
                    loadData(0);
                    loadRecommendation();
                }
            );
        } else {
            loadData(0);
            loadRecommendation();
        }
    }

    function loadData() {
        var data = new Object();
        var condition;

        if (currentPosition && allowLocation) {
            data.location = currentPosition;
            data.orderBy = 'Distance';
            data.sortBy = 'ASC';
            condition = {'radius' : 5};
        } else {
            data.limit = 5;
            data.random = true;
        }

        data.q = condition;

        $.ajax({
            type : "GET",
            url  : "/api/garage/get-by-location",
            data : data,
            success:function(response) {

                if (response.data.count) {
                    $.each(response.data.data, function(key, value) {
                        var ele = '';
                        
                        ele += '<div class="cn-card-slider__item">';

                            ele += '<div class="cn-card mb-5 mb-lg-0">';
                                
                                ele += '<div class="cn-card-header">';
                                    ele += '<div class="cn-card-tags text-right">';
                                        ele += '<ul class="list-inline m-0 p-0">';

                                        if (value.GarageTypeName.includes("Mobil")) {
                                            ele += '<li class="list-inline-item">';
                                                ele += '<span class="cn-card-tags__item">';
                                                    ele += '<i class="fa fa-car-side"></i>';
                                                ele += '</span>';
                                            ele += '</li>';
                                        }

                                        if (value.GarageTypeName.includes("Motor")) {
                                            ele += '<li class="list-inline-item">';
                                                ele += '<span class="cn-card-tags__item">';
                                                    ele += '<i class="fa fa-motorcycle"></i>';
                                                ele += '</span>';
                                            ele += '</li>';
                                        }                                 

                                        ele += '</ul>';
                                    ele += '</div>';

                                    ele += '<div class="cn-card-image">';
                                        ele += '<img data-src="' + (value.BannerPath ? value.BannerPath : '/static/images/default/default-banner.webp') + '" class="card-img-top img-lazy" alt="">';
                                    ele += '</div><!--/ .cn-card-image -->';

                                    ele += '<div class="cn-card-avatar">';
                                        ele += '<a href="/detail/' + (value.Slug ? value.Slug : slugify(value.Name)) + '/' + value.o_id + '" title="' + value.Name + '">';
                                            ele += '<img data-src="' + (value.LogoPath ? value.LogoPath : '/static/images/default/default-image.png') + '" alt="' + value.Name + '" class="img-lazy">';
                                        ele += '</a>';
                                    ele += '</div><!--/ .cn-card-avatar -->';
                                ele += '</div><!--/ .cn-card-header -->';

                                ele += '<div class="cn-card-body">';
                                    ele += '<h5 class="cn-card-title m-0 mb-3 p-0">';
                                        ele += '<a href="#" title=' + value.Name + '">';
                                            ele += value.Name;
                                        ele += '</a>';
                                    ele += '</h5>';
                                    ele += '<ul class="cn-card-info m-0 p-0 list-unstyled">';
                                        ele += '<li class="d-flex flex-row align-items-start justify-content-start">';
                                            ele += '<span>';
                                                ele += '<i class="fa fa-map-marker-alt"></i>';
                                            ele += '</span>';
                                            ele += '<span class="flex-grow-1 pl-2">' + value.Address.concat(', ', value.City) + '</span>';
                                        ele += '</li>';
                                        
                                        ele += '<li class="d-flex flex-row align-items-start justify-content-start">';
                                            ele += '<span>';
                                                ele += '<i class="far fa-clock"></i>';
                                            ele += '</span>';
                                            ele += '<span class="flex-grow-1 pl-2">Jadwal Buka</span>';
                                            ele += '<div class="cn-card-popup">';
                                                ele += '<a href="#" title="Klik untuk melihat jadwal" class="ml-auto mr-0">';
                                                    ele += '<i class="fas fa-chevron-down"></i>';
                                                ele += '</a>';
                                                ele += '<div class="cn-card-popup__body py-2 px-3 ml-auto mr-0 mt-1">';

                                                    if (value.OperatingHours.length > 0) {
                                                        $.each(value.OperatingHours, function(keyOp, valOp) {
                                                            ele += '<p class="m-0 p-0 d-flex flex-row align-items-center justify-content-start">';
                                                                ele += '<span class="align-self-start flex-grow-1">' + valOp.OperationalDay + '</span>';
                                                                ele += '<span class="align-self-end text-right">' + valOp.OpenHour + ' - ' + valOp.CloseHour + ' WIB</span>';
                                                            ele += '</p>';
                                                        });
                                                    } else {
                                                        ele += '<p class="m-0 p-0 d-flex flex-row align-items-center justify-content-start">';
                                                            ele += '<span class="align-self-start flex-grow-1">Jadwal Belum Tersedia</span>';
                                                            ele += '<span class="align-self-end text-right"></span>';
                                                        ele += '</p>';
                                                    }

                                                ele += '</div><!--/ .cn-card-popup__body -->';
                                            ele += '</div><!--/ .cn-card-popup -->';
                                        ele += '</li>';

                                    ele += '</ul>';
                                    ele += '<div class="text-center mt-5">';
                                        ele += '<a href="/detail/' + (value.Slug ? value.Slug : slugify(value.Name)) + '/' + value.o_id + '" class="btn btn-cn-primary btn-cn--bold">Selengkapnya</a>';
                                    ele += '</div>';
                                ele += '</div><!--/ .card-body -->';
                            ele += '</div><!--/ .cn-card -->';

                        ele += '</div><!--/ .cn-card-slider__item -->';

                        $('#nearest-garage-list').append(ele);

                    });

                    if($('.cn-card-slider__items').length > 0) {
                        $('.cn-card-slider__items').slick({
                            slidesToShow: 3,
                            slidesToScroll: 3,
                            dots: true,
                            arrows: true,
                            infinite: false,
                            prevArrow: '<button type="button" class="slick-prev"><i class="fas fa-arrow-left"></i></button>',
                            nextArrow: '<button type="button" class="slick-next"><i class="fas fa-arrow-right"></i></button>',
                            appendArrows: $('.cn-card-slider__control'),
                            appendDots: $('.cn-card-slider__control'),
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

                    $('.img-lazy').Lazy({
                        // Options
                    });
                } else {
                    $("#info-empty-garage").removeAttr('hidden');
                }

            },
            error:function(response) {

            }
        });
    }

    function loadRecommendation() {
        var data = new Object();
        var condition;

        if (currentPosition && allowLocation) {
            data.location = currentPosition;
            data.orderBy = 'Distance';
            data.sortBy = 'ASC';
        } else {
            data.random = true;
        }

        data.q = {'Recommended' : 1};
        data.limit = 3;

        $.ajax({
            type : "GET",
            url  : "/api/garage/get-by-location",
            data : data,
            success:function(response) {

                if (response.data.count) {
                    $.each(response.data.data, function(key, value) {
                        var ele = '';

                        ele += '<div class="col-12 col-lg-4">';
                            ele += '<div class="cn-card mb-5 mb-lg-0 d-flex flex-column">';
                                ele += '<div class="cn-card-header">';
                                    ele += '<div class="cn-card-tags text-right">';
                                        ele += '<ul class="list-inline m-0 p-0">';
                                            
                                            if (value.GarageTypeName.includes("Mobil")) {
                                                ele += '<li class="list-inline-item">';
                                                    ele += '<span class="cn-card-tags__item">';
                                                        ele += '<i class="fa fa-car-side"></i>';
                                                    ele += '</span>';
                                                ele += '</li>';
                                            }

                                            if (value.GarageTypeName.includes("Motor")) {
                                                ele += '<li class="list-inline-item">';
                                                    ele += '<span class="cn-card-tags__item">';
                                                        ele += '<i class="fa fa-motorcycle"></i>';
                                                    ele += '</span>';
                                                ele += '</li>';
                                            }

                                        ele += '</ul>';
                                    ele += '</div>';
                                    ele += '<div class="cn-card-im=age">';
                                        ele += '<img data-src="' + (value.BannerPath ? value.BannerPath : '/static/images/default/default-banner.webp') + '" class="card-img-top img-lazy" alt="">';
                                    ele += '</div><!--/ .cn-card-image -->';
                                    ele += '<div class="cn-card-avatar">';
                                        ele += '<a href="/detail/' + (value.Slug ? value.Slug : slugify(value.Name)) + '/' + value.o_id + '" title="' + value.Name + '">';
                                            ele += '<img data-src="' + (value.LogoPath ? value.LogoPath : '/static/images/default/default-image.png') + '" alt="' + value.Name + '" class="img-lazy">';
                                        ele += '</a>';
                                    ele += '</div><!--/ .cn-card-avatar -->';
                                ele += '</div><!--/ .cn-card-header -->';
                                ele += '<div class="cn-card-body d-flex flex-column align-items-start justify-content-center flex-grow-1">';
                                    ele += '<h5 class="cn-card-title m-0 mb-3 p-0 w-100 text-center">';
                                        ele += '<a href="/detail/' + (value.Slug ? value.Slug : slugify(value.Name)) + '/' + value.o_id + '" title="' + value.Name + '">';
                                            ele += value.Name;
                                        ele += '</a>';
                                    ele += '</h5>';
                                    ele += '<ul class="cn-card-info m-0 p-0 list-unstyled flex-grow-1 w-100">';
                                        ele += '<li class="d-flex flex-row align-items-start justify-content-start">';
                                            ele += '<span>';
                                                ele += '<i class="fa fa-map-marker-alt"></i>';
                                            ele += '</span>';
                                            ele += '<span class="flex-grow-1 pl-2">' + value.Address.concat(', ', value.City) + '</span>';
                                        ele += '</li>';
                                        ele += '<li class="d-flex flex-row align-items-start justify-content-start">';
                                            ele += '<span>';
                                                ele += '<i class="far fa-clock"></i>';
                                            ele += '</span>';
                                            ele += '<span class="flex-grow-1 pl-2">Jadwal Buka</span>';

                                            ele += '<div class="cn-card-popup">';
                                                ele += '<a href="#" title="Klik untuk melihat jadwal" class="ml-auto mr-0">';
                                                    ele += '<i class="fas fa-chevron-down"></i>';
                                                ele += '</a>';
                                                ele += '<div class="cn-card-popup__body py-2 px-3 ml-auto mr-0 mt-1">';

                                                    if (value.OperatingHours.length > 0) {
                                                        $.each(value.OperatingHours, function(keyOp, valOp) {
                                                            ele += '<p class="m-0 p-0 d-flex flex-row align-items-center justify-content-start">';
                                                                ele += '<span class="align-self-start flex-grow-1">' + valOp.OperationalDay + '</span>';
                                                                ele += '<span class="align-self-end text-right">' + valOp.OpenHour + ' - ' + valOp.CloseHour + ' WIB</span>';
                                                            ele += '</p>';
                                                        });
                                                    } else {
                                                        ele += '<p class="m-0 p-0 d-flex flex-row align-items-center justify-content-start">';
                                                            ele += '<span class="align-self-start flex-grow-1">Jadwal Belum Tersedia</span>';
                                                            ele += '<span class="align-self-end text-right"></span>';
                                                        ele += '</p>';
                                                    }

                                                ele += '</div><!--/ .cn-card-popup__body -->';
                                            ele += '</div><!--/ .cn-card-popup -->';

                                        ele += '</li>';
                                    ele += '</ul>';
                                    ele += '<div class="text-center mt-5 mx-auto">';
                                        ele += '<a href="/detail/' + (value.Slug ? value.Slug : slugify(value.Name)) + '/' + value.o_id + '" class="btn btn-cn-primary btn-cn--bold">Selengkapnya</a>';
                                    ele += '</div>';
                                ele += '</div><!--/ .card-body -->';
                            ele += '</div><!--/ .cn-card -->';
                        ele += '</div><!--/ .col-12 -->';

                        $('#recommended-garage').append(ele);

                        $('.img-lazy').Lazy({});

                    });

                }

            },
            error:function(response) {

            }
        });
    }

    $(document).on('click', '.cn-search-city__trigger', function(e) {
        e.preventDefault();
        navigator.geolocation.getCurrentPosition(successCallback, errorCallback, options);
    });

    function displayLocation(latitude, longitude) {
        var request = new XMLHttpRequest();

        var method = 'GET';
        var url = 'https://maps.googleapis.com/maps/api/geocode/json?latlng=' + latitude + ',' + longitude + '&sensor=true&key=AIzaSyBLaJS_Zjjsk-bmLJyWyyAx5pNOs1Mft6w';
        var async = true;

        request.open(method, url, async);
        request.onreadystatechange = function() {
            if (request.readyState == 4 && request.status == 200) {
                var data = JSON.parse(request.responseText);
                var address = data.results[0];
                $('#keywordLocation').val(data.results[0].address_components[4].long_name.split(" ").pop().toLowerCase());
            }else{
                $('#keywordLocation').val('jakarta');
            }
        };
        request.send();
    };

    var successCallback = function(position) {
        var x = position.coords.latitude;
        var y = position.coords.longitude;
        displayLocation(x, y);
    };

    var errorCallback = function(error) {
        $('#keywordLocation').val('jakarta');
    };

    var options = {
        enableHighAccuracy: true,
        timeout: 1000,
        maximumAge: 0
    };
</script>
