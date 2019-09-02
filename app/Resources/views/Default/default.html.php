<?php $this->extend('Layouts/layout.html.php')?>

<!-- 
    Add your html script code here
-->

<section class="mb-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-8 col-lg-6">
                <h1>Temukan Kebutuhan Kendaraanmu Dengan Mudah</h1>
                <p>Segala kebutuhan untuk kendaraanmu dapat dengan mudah ditemukan lewat orang dalam</p>
            </div><!--/ .col-12 -->
        </div><!--/ .row -->
    </div><!--/ .container -->
</section><!--/ . -->

<section class="mb-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="">
                    <form role="form" class="d-flex flex-row align-items-center align-content-center justify-content-between">
                        <div class="form-group flex-grow-1 mr-3">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fas fa-search"></i>
                                    </span>
                                </div>
                                <input type="search" class="form-control" placeholder="Cari berdasarkan daerah atau nama bengkel" required maxlength="70">
                                <div class="input-group-append">
                                    <span class="input-group-text">
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
                <a href="#">
                    <img src="http://placehold.it/830x80?text=Google+Ads" alt="Google Ads" title="Google Ads" class="img-fluid" style="min-width: 100%; height: auto;">
                </a>
            </div><!--/ .col-12 -->
        </div><!--/ .row -->
    </div><!--/ .container -->
</section><!--/ . -->

<section class="">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="mb-4">
                    <h2>Sekitar Anda</h2>
                </div>
            </div><!--/ .col-12 -->
        </div><!--/ .row -->
        <div class="row">
            <div class="col-12">

            </div><!--/ .col-12 -->
        </div><!--/ .row -->
    </div><!--/ .container -->
</section><!--/ . -->

<section class="">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="mb-4">
                    <h2>Kategori</h2>
                </div>
            </div><!--/ .col-12 -->
        </div><!--/ .row -->
        <div class="row">
            <div class="col-12">

            </div><!--/ .col-12 -->
        </div><!--/ .row -->
    </div><!--/ .container -->
</section><!--/ . -->

<section class="">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="mb-4">
                    <h2>Rekomendasi</h2>
                </div>
            </div><!--/ .col-12 -->
        </div><!--/ .row -->
        <div class="row">
            
            <?php for($i = 0; $i < 3; $i++): ?>

            <div class="col-12 col-md-4">
                <div class="card" style="width:100%;">
                    <img src="http://placehold.it/640x480" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Bengkel Sumber Bencana</h5>
                        <p class="card-text">

                        </p>
                        <div class="text-center">
                            <a href="#" class="btn btn-primary">Selengkapnya</a>
                        </div>
                    </div><!--/ .card-body -->
                </div><!--/ .card -->
            </div><!--/ .col-12 -->

            <?php endfor; ?>

        </div><!--/ .row -->
    </div><!--/ .container -->
</section><!--/ . -->
