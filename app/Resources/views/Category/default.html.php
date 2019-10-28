<?php 
      $this->extend('Layouts/layout.html.php');

    //Call js helper
        // Call css file on specific page
    $this->headLink()->appendStylesheet('/static/css/category.css');
?>

<section class="mb-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-8 col-lg-6 py-5">
                <div class="cn-hero">
                    <h1>Kategori</h1>
                    <p>Pilih salah satu kategori untuk kebutuhan kendaraan Anda</p>
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
                    <form role="form" class="d-flex flex-column flex-md-row align-items-center align-content-center justify-content-between" method="GET" action="/cari">
                        <div class="form-group flex-grow-1 mx-0 mr-md-3 mb-3 mb-md-0">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fas fa-search"></i>
                                    </span>
                                </div>
                                <input id="keywordLocation" type="search" name="keyword" class="form-control" placeholder="Cari berdasarkan daerah atau nama bengkel" required maxlength="70">
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

<section class="cn-section">
    <div class="container">
        <div class="row">
            <div class="col-12 com">
            <div class="container">
                <div class="row">
                        <div class="cn-categories cate" >
                            <a href="" title="" class="cn-categories-item">
                                <div class="cn-categories-item__inner d-flex flex-column align-items-center justify-content-center">
                                    <div class="cn-categories-item__icon">
                                        <img data-src="" class="img-lazy" alt="" title="">
                                    </div><!--/ .cn-categories-item__icon -->
                                    <div class="cn-categories-item__text mt-2">
                                        <span>Ban & Velg</span>
                                    </div><!--/ .cn-categories-item__text -->
                                </div><!--/ .cn-categories-item__inner -->
                            </a><!--/ .cn-categories-item -->
                        </div><!--/ .cn-categories -->

                        <div class="cn-categories cate">
                            <a href="" title="" class="cn-categories-item">
                                <div class="cn-categories-item__inner d-flex flex-column align-items-center justify-content-center">
                                    <div class="cn-categories-item__icon">
                                        <img data-src="" class="img-lazy" alt="" title="">
                                    </div><!--/ .cn-categories-item__icon -->
                                    <div class="cn-categories-item__text mt-2">
                                        <span>Part & Aksesoris</span>
                                    </div><!--/ .cn-categories-item__text -->
                                </div><!--/ .cn-categories-item__inner -->
                            </a><!--/ .cn-categories-item -->
                        </div><!--/ .cn-categories -->

                        <div class="cn-categories cate">
                            <a href="" title="" class="cn-categories-item">
                                <div class="cn-categories-item__inner d-flex flex-column align-items-center justify-content-center">
                                    <div class="cn-categories-item__icon">
                                        <img data-src="" class="img-lazy" alt="" title="">
                                    </div><!--/ .cn-categories-item__icon -->
                                    <div class="cn-categories-item__text mt-2">
                                        <span> Servis </span>
                                    </div><!--/ .cn-categories-item__text -->
                                </div><!--/ .cn-categories-item__inner -->
                            </a><!--/ .cn-categories-item -->
                        </div><!--/ .cn-categories -->
                  
                         <div class="cn-categories cate">
                            <a href="" title="" class="cn-categories-item">
                                <div class="cn-categories-item__inner d-flex flex-column align-items-center justify-content-center">
                                    <div class="cn-categories-item__icon">
                                        <img data-src="" class="img-lazy" alt="" title="">
                                    </div><!--/ .cn-categories-item__icon -->
                                    <div class="cn-categories-item__text mt-2">
                                        <span>Perbaikan Body</span>
                                    </div><!--/ .cn-categories-item__text -->
                                </div><!--/ .cn-categories-item__inner -->
                            </a><!--/ .cn-categories-item -->
                        </div><!--/ .cn-categories -->
                  
                        <div class="cn-categories cate">
                            <a href="" title="" class="cn-categories-item">
                                <div class="cn-categories-item__inner d-flex flex-column align-items-center justify-content-center">
                                    <div class="cn-categories-item__icon">
                                        <img data-src="" class="img-lazy" alt="" title="">
                                    </div><!--/ .cn-categories-item__icon -->
                                    <div class="cn-categories-item__text mt-2">
                                        <span>Helm</span>
                                    </div><!--/ .cn-categories-item__text -->
                                </div><!--/ .cn-categories-item__inner -->
                            </a><!--/ .cn-categories-item -->
                        </div><!--/ .cn-categories -->
                        <div class="cn-categories cate">
                            <a href="" title="" class="cn-categories-item">
                                <div class="cn-categories-item__inner d-flex flex-column align-items-center justify-content-center">
                                    <div class="cn-categories-item__icon">
                                        <img data-src="" class="img-lazy" alt="" title="">
                                    </div><!--/ .cn-categories-item__icon -->
                                    <div class="cn-categories-item__text mt-2">
                                        <span>Ban & Velg</span>
                                    </div><!--/ .cn-categories-item__text -->
                                </div><!--/ .cn-categories-item__inner -->
                            </a><!--/ .cn-categories-item -->
                        </div><!--/ .cn-categories -->

                        <div class="cn-categories cate" >
                            <a href="" title="" class="cn-categories-item">
                                <div class="cn-categories-item__inner d-flex flex-column align-items-center justify-content-center">
                                    <div class="cn-categories-item__icon">
                                        <img data-src="" class="img-lazy" alt="" title="">
                                    </div><!--/ .cn-categories-item__icon -->
                                    <div class="cn-categories-item__text mt-2">
                                        <span>Part & Aksesoris</span>
                                    </div><!--/ .cn-categories-item__text -->
                                </div><!--/ .cn-categories-item__inner -->
                            </a><!--/ .cn-categories-item -->
                        </div><!--/ .cn-categories -->

                        <div class="cn-categories cate" >
                            <a href="" title="" class="cn-categories-item">
                                <div class="cn-categories-item__inner d-flex flex-column align-items-center justify-content-center">
                                    <div class="cn-categories-item__icon">
                                        <img data-src="" class="img-lazy" alt="" title="">
                                    </div><!--/ .cn-categories-item__icon -->
                                    <div class="cn-categories-item__text mt-2">
                                        <span> Servis </span>
                                    </div><!--/ .cn-categories-item__text -->
                                </div><!--/ .cn-categories-item__inner -->
                            </a><!--/ .cn-categories-item -->
                        </div><!--/ .cn-categories -->
                  
                         <div class="cn-categories cate" >
                            <a href="" title="" class="cn-categories-item">
                                <div class="cn-categories-item__inner d-flex flex-column align-items-center justify-content-center">
                                    <div class="cn-categories-item__icon">
                                        <img data-src="" class="img-lazy" alt="" title="">
                                    </div><!--/ .cn-categories-item__icon -->
                                    <div class="cn-categories-item__text mt-2">
                                        <span>Perbaikan Body</span>
                                    </div><!--/ .cn-categories-item__text -->
                                </div><!--/ .cn-categories-item__inner -->
                            </a><!--/ .cn-categories-item -->
                        </div><!--/ .cn-categories -->
                  
                        <div class="cn-categories cate">
                            <a href="" title="" class="cn-categories-item">
                                <div class="cn-categories-item__inner d-flex flex-column align-items-center justify-content-center">
                                    <div class="cn-categories-item__icon">
                                        <img data-src="" class="img-lazy" alt="" title="">
                                    </div><!--/ .cn-categories-item__icon -->
                                    <div class="cn-categories-item__text mt-2">
                                        <span>Helm</span>
                                    </div><!--/ .cn-categories-item__text -->
                                </div><!--/ .cn-categories-item__inner -->
                            </a><!--/ .cn-categories-item -->
                        </div><!--/ .cn-categories -->
                        <div class="cn-categories cate">
                            <a href="" title="" class="cn-categories-item">
                                <div class="cn-categories-item__inner d-flex flex-column align-items-center justify-content-center">
                                    <div class="cn-categories-item__icon">
                                        <img data-src="" class="img-lazy" alt="" title="">
                                    </div><!--/ .cn-categories-item__icon -->
                                    <div class="cn-categories-item__text mt-2">
                                        <span>Ban & Velg</span>
                                    </div><!--/ .cn-categories-item__text -->
                                </div><!--/ .cn-categories-item__inner -->
                            </a><!--/ .cn-categories-item -->
                        </div><!--/ .cn-categories -->

                        <div class="cn-categories cate">
                            <a href="" title="" class="cn-categories-item">
                                <div class="cn-categories-item__inner d-flex flex-column align-items-center justify-content-center">
                                    <div class="cn-categories-item__icon">
                                        <img data-src="" class="img-lazy" alt="" title="">
                                    </div><!--/ .cn-categories-item__icon -->
                                    <div class="cn-categories-item__text mt-2">
                                        <span>Part & Aksesoris</span>
                                    </div><!--/ .cn-categories-item__text -->
                                </div><!--/ .cn-categories-item__inner -->
                            </a><!--/ .cn-categories-item -->
                        </div><!--/ .cn-categories -->

                        <div class="cn-categories cate">
                            <a href="" title="" class="cn-categories-item">
                                <div class="cn-categories-item__inner d-flex flex-column align-items-center justify-content-center">
                                    <div class="cn-categories-item__icon">
                                        <img data-src="" class="img-lazy" alt="" title="">
                                    </div><!--/ .cn-categories-item__icon -->
                                    <div class="cn-categories-item__text mt-2">
                                        <span> Servis </span>
                                    </div><!--/ .cn-categories-item__text -->
                                </div><!--/ .cn-categories-item__inner -->
                            </a><!--/ .cn-categories-item -->
                        </div><!--/ .cn-categories -->
                  
                         <div class="cn-categories cate">
                            <a href="" title="" class="cn-categories-item">
                                <div class="cn-categories-item__inner d-flex flex-column align-items-center justify-content-center">
                                    <div class="cn-categories-item__icon">
                                        <img data-src="" class="img-lazy" alt="" title="">
                                    </div><!--/ .cn-categories-item__icon -->
                                    <div class="cn-categories-item__text mt-2">
                                        <span>Perbaikan Body</span>
                                    </div><!--/ .cn-categories-item__text -->
                                </div><!--/ .cn-categories-item__inner -->
                            </a><!--/ .cn-categories-item -->
                        </div><!--/ .cn-categories -->
                  
                        <div class="cn-categories cate">
                            <a href="" title="" class="cn-categories-item">
                                <div class="cn-categories-item__inner d-flex flex-column align-items-center justify-content-center">
                                    <div class="cn-categories-item__icon">
                                        <img data-src="" class="img-lazy" alt="" title="">
                                    </div><!--/ .cn-categories-item__icon -->
                                    <div class="cn-categories-item__text mt-2">
                                        <span>Helm</span>
                                    </div><!--/ .cn-categories-item__text -->
                                </div><!--/ .cn-categories-item__inner -->
                            </a><!--/ .cn-categories-item -->
                        </div><!--/ .cn-categories -->
                        </div>
                    </div>
            </div><!--/ .col-12 -->
        </div><!--/ .row -->
    </div><!--/ .container -->
</section><!--/ .cn-section -->

<section class="cn-section">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="cn-section-title">
                    
                </div>
            </div><!--/ .col-12 -->
        </div><!--/ .row -->
        </div><!--/ .row -->
    </div><!--/ .container -->
</section><!--/ .cn-section -->
