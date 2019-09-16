<?php 
    $this->extend('Layouts/layout.html.php');

    $category = $this->category;
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
                    <form role="form" class="d-flex flex-column flex-md-row align-items-center align-content-center justify-content-between">
                        <div class="form-group flex-grow-1 mx-0 mr-md-3 mb-3 mb-md-0">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fas fa-search"></i>
                                    </span>
                                </div>
                                <input type="search" class="form-control" placeholder="Cari berdasarkan daerah atau nama bengkel" required maxlength="70">
                                <div class="input-group-append">
                                    <span class="input-group-text text-primary">
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

<section class="mb-5">
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

<section class="cn-section">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="cn-section-title">
                    <h2>Sekitar Anda</h2>
                </div>
            </div><!--/ .col-12 -->
        </div><!--/ .row -->
        <div class="row">
            <div class="col-12">

                <div class="cn-card-slider">

                    <div class="cn-card-slider__items">

                        <?php for($i = 0; $i < 12; $i++): ?>

                        <div class="cn-card-slider__item">

                            <div class="cn-card mb-5 mb-lg-0">
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
                                <div class="cn-card-body">
                                    <h5 class="cn-card-title m-0 mb-3 p-0">
                                        <a href="#" title="Bengkel Sumber Bencana">
                                            Bengkel Sumber Bencana
                                        </a>
                                    </h5>
                                    <ul class="cn-card-info m-0 p-0 list-unstyled">
                                        <li>
                                            <span>
                                                <i class="fa fa-map-marker-alt"></i>
                                            </span>
                                            <span>Jalan Raya Bogor KM 27, Kota Bogor</span>
                                        </li>
                                        <li>
                                            <span>
                                                <i class="far fa-clock"></i>
                                            </span>
                                            <span>Buka Setiap Hari | 08:00 - 21:00 WIB</span>
                                        </li>
                                    </ul>
                                    <div class="text-center mt-5">
                                        <a href="#" class="btn btn-cn-primary btn-cn--bold">Selengkapnya</a>
                                    </div>
                                </div><!--/ .card-body -->
                            </div><!--/ .cn-card -->

                        </div><!--/ .cn-card-slider__item -->

                        <?php endfor; ?>

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

                    <?php foreach ($category as $key => $value) { ?>

                    <a href="#" title="" class="cn-categories-item">
                        <div class="cn-categories-item__inner d-flex flex-column align-items-center justify-content-center">
                            <div class="cn-categories-item__icon">
                                <img data-src="<?= $value->getIcon()->getPath() . $value->getIcon()->getFilename() ?>" class="img-lazy" alt="" style="width:72px;height:72px;">
                            </div><!--/ .cn-categories-item__icon -->
                            <div class="cn-categories-item__text mt-2">
                                <span><?= $value->getName() ?></span>
                            </div><!--/ .cn-categories-item__text -->
                        </div><!--/ .cn-categories-item__inner -->
                    </a><!--/ .cn-categories-item -->

                    <?php } ?>

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
                <div class="cn-card mb-5 mb-lg-0">
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
                    <div class="cn-card-body">
                        <h5 class="cn-card-title m-0 mb-3 p-0">
                            <a href="#" title="Bengkel Sumber Bencana">
                                Bengkel Sumber Bencana
                            </a>
                        </h5>
                        <ul class="cn-card-info m-0 p-0 list-unstyled">
                            <li>
                                <span>
                                    <i class="fa fa-map-marker-alt"></i>
                                </span>
                                <span>Jalan Raya Bogor KM 27, Kota Bogor</span>
                            </li>
                            <li>
                                <span>
                                    <i class="far fa-clock"></i>
                                </span>
                                <span>Buka Setiap Hari | 08:00 - 21:00 WIB</span>
                            </li>
                        </ul>
                        <div class="text-center mt-5">
                            <a href="#" class="btn btn-cn-primary btn-cn--bold">Selengkapnya</a>
                        </div>
                    </div><!--/ .card-body -->
                </div><!--/ .cncard -->
            </div><!--/ .col-12 -->

            <?php endfor; ?>

        </div><!--/ .row -->
    </div><!--/ .container -->
</section><!--/ .cn-section -->
