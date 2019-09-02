<?php $this->extend('Layouts/layout.html.php')?>

<!-- 
    Add your html script code here
-->

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
