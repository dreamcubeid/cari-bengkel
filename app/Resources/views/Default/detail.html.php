<?php $this->extend('Layouts/layout.html.php')?>

<?php 
    // Call css file on specific page
    $this->headLink()->appendStylesheet('/static/css/detail.css');
?>

<!-- 
    Add your html script code here
-->

<section class="my-4">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <ol class="breadcrumb cn-breadcrumb px-0">
                    <li class="breadcrumb-item">
                        <a href="#">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="#">Result</a>
                    </li>
                    <li class="breadcrumb-item active">
                        <span>Detail</span>
                    </li>
                </ol>

            </div><!--/ .col-12 -->
        </div><!--/ .row -->
    </div><!--/ .container -->
</section><!--/ . -->

<section class="">
    <div class="container">
        <div class="row">

            <div class="col-12 col-md-8">

                <div class="cn-section">
                    
                    <div class="cn-section-title">
                        <h2>Kategori</h2>
                    </div><!--/ .cn-section-title -->

                    <div class="cn-categories">

                        <?php for($i = 0; $i < 15; $i++): ?>

                        <a href="#" title="" class="cn-categories-item">
                            <div class="cn-categories-item__inner d-flex flex-column align-items-center justify-content-center">
                                <div class="cn-categories-item__icon">
                                    <img data-src="http://placehold.it/72x72" class="img-lazy" alt="">
                                </div><!--/ .cn-categories-item__icon -->
                                <div class="cn-categories-item__text mt-2">
                                    <span>Ban &amp; Velg</span>
                                </div><!--/ .cn-categories-item__text -->
                            </div><!--/ .cn-categories-item__inner -->
                        </a><!--/ .cn-categories-item -->

                        <?php endfor; ?>

                    </div><!--/ .cn-categories -->
                </div>

            </div><!--/ .col-12 -->

            <div class="col-12 col-md-4">


                <div class="cn-ads cn-ads--rounded mb-5">
                    <a href="#">
                        <img data-src="http://placehold.it/320x450?text=Google+Ads" alt="Google Ads" title="Google Ads" class="img-fluid img-lazy" style="min-width: 100%; height: auto;">
                    </a>
                </div><!--/ .cn-ads -->

                <div class="mb-5">
                    <h2 class="m-0 p-0">Bengkel Serupa</h2>
                </div>

                <?php for($i = 0; $i < 2; $i++): ?>

                <div class="cn-card mb-5">
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
                        <div class="pt-5">
                            <div class="cn-card-avatar cn-card-avatar--grounded">
                                <a href="#" title="Bengkel Sumber Bencana">
                                    <img data-src="http://placehold.it/80x80" alt="Bengkel Sumber Bencana" class="img-lazy">
                                </a>
                            </div><!--/ .cn-card-avatar -->
                        </div>
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

                <?php endfor; ?>

            </div><!--/ .col-12 -->

        </div><!--/ .row -->
    </div><!--/ .container -->
</section><!--/ . -->

<?php 
    // Call js file on specific page
    $this->headScript()->appendFile('/static/js/detail.js')
?>