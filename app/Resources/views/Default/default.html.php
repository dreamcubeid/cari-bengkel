<?php 
    $this->extend('Layouts/layout.html.php');

    $category = $this->category;

    $sampler_texts = array(
        'Lorem ipsum dolor sit amet',
        'Maecenas interdum arcu sit amet ipsum pharetra, a euismod metus gravida.',
        'Vivamus tincidunt maximus neque. Nunc sed metus in augue pulvinar blandits. A euismod metus sangu goreng cihuy'
    );
?>

<!-- 
    Add your html script code here
-->

<section class="mb-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-8 col-lg-6 py-5">
                <div class="cn-hero">
                    <h1>Temukan Kebutuhan Kendaraanmu Dengan Mudah</h1>
                    <p>Segala kebutuhan untuk kendaraanmu dapat dengan mudah ditemukan lewat orang dalam</p>
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
                                <input type="search" name="keyword" class="form-control" placeholder="Cari berdasarkan daerah atau nama bengkel" required maxlength="70">
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
                    <img src="/static/images/biker.png" alt="" title="" class="img-fluid mt-5 d-block mx-auto">
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

                    <a href="#" title="" class="cn-categories-item">
                        <div class="cn-categories-item__inner d-flex flex-column align-items-center justify-content-center">
                            <div class="cn-categories-item__icon">
                                <img data-src="<?= $icon; ?>" class="img-lazy" alt="<?= $name; ?>" title="<?= $name; ?>" style="width:72px;height:72px;">
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
        <div class="row">
            
            <?php for($i = 0; $i < 3; $i++): ?>

            <div class="col-12 col-lg-4">
                <div class="cn-card mb-5 mb-lg-0 d-flex flex-column">
                    <div class="cn-card-header">
                        <div class="cn-card-tags text-right">
                            <ul class="list-inline m-0 p-0">
                                <li class="list-inline-item">
                                    <span class="cn-card-tags__item">
                                        <i class="fa fa-car-side"></i>
                                    </span>
                                </li>
                                <li class="list-inline-item">
                                    <span class="cn-card-tags__item">
                                        <i class="fa fa-motorcycle"></i>
                                    </span>
                                </li>
                            </ul>
                        </div>
                        <div class="cn-card-image">
                            <img data-src="http://placehold.it/640x480" class="card-img-top img-lazy" alt="">
                        </div><!--/ .cn-card-image -->
                        <div class="cn-card-avatar">
                            <a href="#" title="Bengkel Sumber Bencana">
                                <img data-src="/static/images/default/default-image.png" alt="Bengkel Sumber Bencana" class="img-lazy">
                            </a>
                        </div><!--/ .cn-card-avatar -->
                    </div><!--/ .cn-card-header -->
                    <div class="cn-card-body d-flex flex-column align-items-start justify-content-center flex-grow-1">
                        <h5 class="cn-card-title m-0 mb-3 p-0 w-100 text-center">
                            <a href="#" title="Bengkel Sumber Bencana">
                                Bengkel Sumber Bencana
                            </a>
                        </h5>
                        <ul class="cn-card-info m-0 p-0 list-unstyled flex-grow-1 w-100">
                            <li class="d-flex flex-row align-items-start justify-content-start">
                                <span>
                                    <i class="fa fa-map-marker-alt"></i>
                                </span>
                                <span class="flex-grow-1 pl-2"><?php echo $sampler_texts[$i]; ?></span>
                                <span class="d-none">Jalan Raya Bogor KM 27, Kota Bogor</span>
                            </li>
                            <li class="d-flex flex-row align-items-start justify-content-start">
                                <span>
                                    <i class="far fa-clock"></i>
                                </span>
                                <span class="flex-grow-1 pl-2">Jadwal Buka</span>

                                <div class="cn-card-popup">
                                    <a href="#" title="Klik untuk melihat jadwal" class="ml-auto mr-0">
                                        <i class="fas fa-chevron-down"></i>
                                    </a>
                                    <div class="cn-card-popup__body py-2 px-3 ml-auto mr-0 mt-1">
                                        <p class="m-0 p-0 d-flex flex-row align-items-center justify-content-start">
                                            <span class="align-self-start flex-grow-1">Senin - Jum'at</span>
                                            <span class="align-self-end text-right">09:00 - 16:00 WIB</span>
                                        </p>
                                        <p class="m-0 p-0 d-flex flex-row align-items-center justify-content-start">
                                            <span class="align-self-start flex-grow-1">Sabtu - Minggu</span>
                                            <span class="align-self-end text-right">09:00 - 16:00 WIB</span>
                                        </p>
                                    </div><!--/ .cn-card-popup__body -->
                                </div><!--/ .cn-card-popup -->

                            </li>
                        </ul>
                        <div class="text-center mt-5 mx-auto">
                            <a href="#" class="btn btn-cn-primary btn-cn--bold">Selengkapnya</a>
                        </div>
                    </div><!--/ .card-body -->
                </div><!--/ .cn-card -->
            </div><!--/ .col-12 -->

            <?php endfor; ?>

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

    });

    function getLocation() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(
                function(position) {
                    currentPosition = {'latitude' : position.coords.latitude, 'longitude' : position.coords.longitude};
                    allowLocation = true;

                    loadData(5);
                },
                function(error) {
                    loadData(0);
                }
            );
        } else {
            loadData(0);
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
                                        ele += '<img data-src="' + (value.BannerPath ? value.BannerPath : '/static/images/default/default-banner.png') + '" class="card-img-top img-lazy" alt="">';
                                    ele += '</div><!--/ .cn-card-image -->';

                                    ele += '<div class="cn-card-avatar">';
                                        ele += '<a href="#" title="' + value.Name + '">';
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
                                        ele += '<a href="#" class="btn btn-cn-primary btn-cn--bold">Selengkapnya</a>';
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

</script>
