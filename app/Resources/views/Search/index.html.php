<?php

    $this->extend('Layouts/layout.html.php');

    $sampler_texts = array(
        'Lorem ipsum dolor sit amet',
        'Maecenas interdum arcu sit amet ipsum pharetra, a euismod metus gravida.',
        'Vivamus tincidunt maximus neque. Nunc sed metus in augue pulvinar blandits. A euismod metus sangu goreng cihuy'
    );

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
                    <li class="breadcrumb-item active">
                        <span>Result</span>
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
                                <input type="search" class="form-control" placeholder="Cari berdasarkan daerah atau nama bengkel" required maxlength="70" value="Jalan raya bogor">
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

            <?php for($i = 0; $i < 4; $i++): ?>

            <div class="col-12 col-lg-6">
                <div class="cn-card cn-card--compact d-flex flex-row mb-5">
                    <div class="cn-card-header d-flex flex-row align-items-start justify-content-start pt-3">
                        <div class="cn-card-avatar">
                            <a href="#" title="Bengkel Sumber Bencana">
                                <img data-src="/static/images/default/default-image.png" alt="Bengkel Sumber Bencana" class="img-lazy">
                            </a>
                        </div><!--/ .cn-card-avatar -->
                    </div><!--/ .cn-card-header -->

                    <div class="cn-card-body d-flex flex-column align-items-start justify-content-center flex-grow-1 mt-0 pt-3 pl-0 pr-3">
                        <div class="cn-card-tags pt-3 text-right">
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
                        <h5 class="cn-card-title m-0 mb-3 p-0">
                            <a href="#" title="Bengkel Sumber Bencana">
                                Bengkel Sumber Bencana
                            </a>
                        </h5>
                        <ul class="cn-card-info m-0 p-0 list-unstyled flex-grow-1 w-100">
                            <li class="d-flex flex-row align-items-start justify-content-start">
                                <span>
                                    <i class="fa fa-map-marker-alt"></i>
                                </span>
                                <span class="flex-grow-1 pl-2 pr-3"><?php echo $sampler_texts[rand(0, count($sampler_texts) -1)]; ?></span>
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
                        <div class="text-left mt-4">
                            <a href="#" class="btn btn-cn-primary btn-cn--bold">Selengkapnya</a>
                        </div>
                    </div><!--/ .card-body -->
                </div><!--/ .cn-card-compact -->
            </div><!--/ .col-12 -->

            <?php endfor; ?>

        </div><!--/ .row -->
        
        <div class="row mt-3">
            <div class="col-12 text-center">
                <ul class="pagination cn-pagination justify-content-center">
                    <li class="page-item">
                        <a class="page-link" href="#">
                            <i class="fas fa-arrow-left"></i>
                        </a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </li>
                </ul>
            </div><!--/ .col-12 -->
        </div><!--/ .row -->

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

</script>