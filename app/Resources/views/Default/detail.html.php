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

                <div class="cn-detail-image mb-5">
                    <a href="http://placehold.it/660x330px?text=Big+Size" title="">
                        <img data-src="http://placehold.it/660x330px=Smol+Size" alt="" class="img-lazy img-fluid">
                    </a>
                </div><!--/ . -->

                <div class="">
                    <div class="cn-card cn-card--compact cn-card--transparent d-flex flex-row mb-5">
                        <div class="cn-card-header d-flex flex-row align-items-start justify-content-start pt-3">
                            <div class="cn-card-avatar ml-0">
                                <a href="#" title="Bengkel Sumber Bencana">
                                    <img data-src="/static/images/default/default-image.png" alt="Bengkel Sumber Bencana" class="img-lazy">
                                </a>
                            </div><!--/ .cn-card-avatar -->
                        </div><!--/ .cn-card-header -->
                        <div class="cn-card-body mt-0 pt-3 pl-0 d-flex flex-row align-items-start justify-content-start flex-grow-1">
                            <h5 class="cn-card-title m-0 mb-3 p-0 flex-grow-1">
                                <a href="#" title="Bengkel Sumber Bencana">
                                    Bengkel Sumber Bencana
                                </a>
                                <div class="cn-card-tags cn-card-tags--grounded py-0 px-0">
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
                            </h5>
                            <div class="text-right mt-0">
                                <a href="#" class="btn btn-sm btn-cn-primary btn-cn--bold">Temukan Lokasi</a>
                            </div>
                        </div><!--/ .card-body -->
                    </div><!--/ .cn-card-compact -->
                </div><!--/ . -->

                <div class="my-4">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">
                                Detail
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">
                                Contact Info
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">

                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                            <div class="cn-detail-box mt-4">
                                <div class="cn-detail-box__body px-4 pb-4 pt-3">
                                    <ul class="list-unstyled m-0 p-0">
                                        <li>
                                            <span><i class="fas fa-map-marker-alt"></i></span>
                                            <span>Jalan Raya Bogor KM.27, Kota Bogor</span>
                                        </li>
                                        <li>
                                            <span><i class="far fa-clock"></i></span>
                                            <span>
                                                Senin - Jumat | 08.00 - 16.00 WIB<br />
                                                Sabtu - Minggu | 08.00 - 20.00 WIB
                                            </span>
                                        </li>
                                    </ul>
                                </div><!--/ .cn-detail-box__body -->
                            </div><!--/ .cn-detail-box -->

                            <div class="cn-detail-box mt-4">
                                <div class="cn-detail-box__title px-4 pt-4 pb-0">
                                    <h4 class="m-0 p-0">Establishment Info</h4>
                                </div><!--/ .cn-detail-box__title -->
                                <div class="cn-detail-box__body px-4 pb-4 pt-3">
                                    <ul class="list-unstyled m-0 p-0">
                                        <li>
                                            <span><img data-src="/static/images/icon/servis.png" alt="Bengkel Sumber Bencana" class="img-lazy"></span>
                                            <span>Servis</span>
                                        </li>
                                        <li>
                                            <span><img data-src="/static/images/icon/body.png" alt="Bengkel Sumber Bencana" class="img-lazy"></span>
                                            <span>Perbaikan Body</span>
                                        </li>
                                        <li>
                                            <span><img data-src="/static/images/icon/part.png" alt="Bengkel Sumber Bencana" class="img-lazy"></span>
                                            <span>part & aksesoris</span>
                                        </li>
                                        <li>
                                            <span><img data-src="/static/images/icon/ban.png" alt="Bengkel Sumber Bencana" class="img-lazy"></span>
                                            <span>Ban &amp; Velg</span>
                                        </li>
                                    </ul>
                                </div><!--/ .cn-detail-box__body -->
                            </div><!--/ .cn-detail-box -->

                        </div><!--/ .tab-pane -->

                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="cn-detail-box mt-4">
                                <div class="cn-detail-box__body px-4 pb-4 pt-3">
                                    <ul class="list-unstyled m-0 p-0">
                                        <li>
                                            <span><i class="fas fa-phone"></i></span>
                                            <span>08097689076534</span>
                                        </li>
                                        <li>
                                            <span><i class="fab fa-whatsapp"></i></span>
                                            <span> 08097689076534 </span>
                                        </li>
                                        <li>
                                            <span><i class="fas fa-envelope"></i></span>
                                            <span>admin@gmail.com</span>
                                        </li>
                                    </ul>
                                </div><!--/ .cn-detail-box__body -->
                            </div><!--/ .cn-detail-box -->
                        </div><!--/ .tab-pane -->

                    </div><!--/ .tab-content -->
                </div><!--/ . -->

                <div class="cn-section pt-0 mt-3">
                    
                    <div class="cn-section-title">
                        <h2 class=>Kategori</h2>
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
                <div class="cn-section pt-0 mt-3">
                        <div class="cn-ads my-2 my-md-0">
                            <a href="#">
                                <img data-src="http://placehold.it/830x80?text=Google+Ads" alt="Google Ads" title="Google Ads" class="img-fluid img-lazy" style="min-width: 100%; height: auto;">
                            </a>
                        </div><!--/ .cn-ads -->
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

                <div class="cn-card mb-5 cn-list">
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
                                    <img data-src="/static/images/default/default-image.png" alt="Bengkel Sumber Bencana" class="img-lazy">
                                </a>
                            </div><!--/ .cn-card-avatar -->
                        </div>
                    </div><!--/ .cn-card-header -->
                    <div class="cn-card-body cn-det">
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
                        <div class="text-center mt-5 cn-btn-sel">
                            <a href="#" class="btn btn-cn-primary btn-cn--bold">Selengkapnya</a>
                        </div>
                    </div><!--/ .card-body -->
                </div><!--/ .cn-card -->

                <?php endfor; ?>
                <div class="text-center mt-5 cn-button">
                            <a href="#" class="btn btn-cn-primary btn-cn--bold">LIHAT SEMUA</a>
                </div>

            </div><!--/ .col-12 -->

        </div><!--/ .row -->
    </div><!--/ .container -->
</section><!--/ . -->

<?php 
    // Call js file on specific page
    $this->headScript()->appendFile('/static/js/detail.js')
?>