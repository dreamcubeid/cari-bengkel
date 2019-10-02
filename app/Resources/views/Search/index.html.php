<?php
    $this->extend('Layouts/layout.html.php');

    use AppBundle\Utils\Pagination;
    use AppBundle\Utils\Url;

    $result = $this->result;
    $count = $this->count;
    $params = $this->params;

    $paginationHelper = new Pagination();
    $pagination = $paginationHelper->generate((ceil($count / $params['limit'])), ($params['page'] ? $params['page'] : 1));

    $urlHelper = new Url();
?>

<section class="my-4">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <ol class="breadcrumb cn-breadcrumb px-0">
                    <li class="breadcrumb-item">
                        <a href="/">Home</a>
                    </li>
                    <li class="breadcrumb-item active">
                        <span>Cari</span>
                    </li>
                </ol>

            </div><!--/ .col-12 -->
        </div><!--/ .row -->
    </div><!--/ .container -->
</section><!--/ . -->

<section class="mb-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="cn-search">
                    <form role="form" class="d-flex flex-column flex-md-row align-items-center align-content-center justify-content-between">
                        <div class="form-group flex-grow-1 mx-0 mr-md-3 mb-3 mb-md-0">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fas fa-search"></i>
                                    </span>
                                </div>
                                <input id="keywordLocation" type="search" class="form-control" placeholder="Cari berdasarkan daerah atau nama bengkel" required maxlength="70" name="keyword" value="<?= $this->escape($params['keyword']) ?>">
                                <input type="hidden" name="page" value="<?= $params['page'] ?>">
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

<section class="mb-5 d-none">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="cn-ads my-2 my-md-0">
                    <a href="#">
                        <img data-src="http://placehold.it/830x80?text=Google+Ads" alt="Google Ads" title="Google Ads" class="img-fluid img-lazy" style="min-width: 100%; height: auto;">
                    </a>
                </div><!--/ .cn-ads -->
            </div><!--/ .col-12 -->
        </div><!--/ .row -->
    </div><!--/ .container -->
</section><!--/ . -->

<section class="mb-5">
    <div class="container">

        <div class="row">

            <?php 
                if ($result) {
                    foreach ($result as $key => $value) { 
            ?>

                        <div class="col-12 col-lg-6">
                            <div class="cn-card cn-card--compact d-flex flex-row mb-5">
                                <div class="cn-card-header d-flex flex-row align-items-start justify-content-start pt-3">
                                    <div class="cn-card-avatar">
                                        <a href="#" title="<?= $value['Name'] ?>">
                                            <img data-src="<?= $value['LogoPath'] ? $value['LogoPath'] : '/static/images/default/default-image.png' ?>" alt="<?= $value['Name'] ?>" class="img-lazy">
                                        </a>
                                    </div><!--/ .cn-card-avatar -->
                                </div><!--/ .cn-card-header -->

                                <div class="cn-card-body d-flex flex-column align-items-start justify-content-center flex-grow-1 mt-0 pt-3 pl-0 pr-3">
                                    <div class="cn-card-tags pt-3 text-right">
                                        <ul class="list-inline m-0 p-0">
                                        <?php if (strpos($value['GarageTypeName'], 'Mobil') !== false) { ?>
                                            <li class="list-inline-item">
                                                <span class="cn-card-tags__item">
                                                    <i class="fa fa-car-side"></i>
                                                </span>
                                            </li>
                                        <?php } ?>
                                        <?php if (strpos($value['GarageTypeName'], 'Motor') !== false) { ?>
                                            <li class="list-inline-item">
                                                <span class="cn-card-tags__item">
                                                    <i class="fa fa-motorcycle"></i>
                                                </span>
                                            </li>
                                        </ul>
                                        <?php } ?>
                                    </div>
                                    <h5 class="cn-card-title m-0 mb-3 p-0">
                                        <a href="/detail/<?= $value['Slug'] ? $value['Slug'] : ($urlHelper->convertToFriendlyUrl($value['Name'])) ?>/<?= $value['o_id'] ?>" title="<?= $value['Name'] ?>">
                                            <?= $value['Name'] ?>
                                        </a>
                                    </h5>
                                    <ul class="cn-card-info m-0 p-0 list-unstyled flex-grow-1 w-100">
                                        <li class="d-flex flex-row align-items-start justify-content-start">
                                            <span>
                                                <i class="fa fa-map-marker-alt"></i>
                                            </span>
                                            <span class="flex-grow-1 pl-2 pr-3"><?= $value['Address'] . ', ' . $value['City'] ?></span>
                                        </li>
                                        <li class="d-flex flex-row align-items-start justify-content-start">
                                            <span>
                                                <i class="far fa-clock"></i>
                                            </span>
                                            <span class="flex-grow-1 pl-2 pr-3">Jadwal Buka</span>

                                            <div class="cn-card-popup">
                                                <a href="#" title="Klik untuk melihat jadwal" class="ml-auto mr-0">
                                                    <i class="fas fa-chevron-down"></i>
                                                </a>
                                                <div class="cn-card-popup__body py-2 px-3 ml-auto mr-0 mt-1">
                                                <?php 
                                                    if ($value['OperatingHours']) {
                                                        foreach ($value['OperatingHours'] as $keyOp => $valOp) {
                                                ?>
                                                            <p class="m-0 p-0 d-flex flex-row align-items-center justify-content-start">
                                                                <span class="align-self-start flex-grow-1"><?= $valOp['OperationalDay'] ?></span>
                                                                <span class="align-self-end text-right"><?= $valOp['OpenHour'] ?> - <?= $valOp['CloseHour'] ?> WIB</span>
                                                            </p>
                                                <?php 
                                                        }
                                                    } else { 
                                                ?>
                                                        <p class="m-0 p-0 d-flex flex-row align-items-center justify-content-start">
                                                            <span class="align-self-start flex-grow-1">Jadwal Belum Tersedia</span>
                                                            <span class="align-self-end text-right"></span>
                                                        </p>
                                                <?php 
                                                    }
                                                ?>
                                                </div><!--/ .cn-card-popup__body -->
                                            </div><!--/ .cn-card-popup -->

                                        </li>
                                    </ul>
                                    <div class="text-left mt-4">
                                        <a href="/detail/<?= $value['Slug'] ? $value['Slug'] : ($urlHelper->convertToFriendlyUrl($value['Name'])) ?>/<?= $value['o_id'] ?>" class="btn btn-cn-primary btn-cn--bold">Selengkapnya</a>
                                    </div>
                                </div><!--/ .card-body -->
                            </div><!--/ .cn-card-compact -->
                        </div><!--/ .col-12 -->

            <?php   
                    } 
                }
            ?>

        </div><!--/ .row -->

        <?= $count > 0 ? $pagination : '' ?>

    </div><!--/ .container -->
</section>

<script type="text/javascript">
    
    $(function(){

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