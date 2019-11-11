<?php
    $this->extend('Layouts/layout.html.php');

    $this->headScript()->prependFile('https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js');
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
                        <span>Hubungi Kami</span>
                    </li>
                </ol>

            </div>
            <!--/ .col-12 -->
        </div>
        <!--/ .row -->
    </div>
    <!--/ .container -->
</section>
<!--/ . -->

<section class="mb-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-8 col-lg-6 pb-5">
                <div class="cn-hero">
                    <h1>Hubungi Kami</h1>
                    <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magnaaliqua.</p> -->
                </div>
                <!--/ .cn-hero -->
            </div>
            <!--/ .col-12 -->
        </div>
        <!--/ .row -->
    </div>
    <!--/ .container -->
</section>
<!--/ . -->

<section class="mb-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-5">

                <form id="contactUs" role="form" class="cn-form">
                    <div class="form-group">
                        <input id="name" name="name" type="text" class="form-control" tabindex="1" placeholder="Nama Lengkap">
                    </div>
                    <!--/ .form-group -->
                    <div class="form-group">
                        <input id="email" name="email" type="email" class="form-control" tabindex="2" placeholder="Email">
                    </div>
                    <!--/ .form-group -->
                    <div class="form-group">
                        <input id="phone" name="phone" type="number" class="form-control" tabindex="3" placeholder="Nomor Telepon">
                    </div>
                    <!--/ .form-group -->
                    <div class="form-group">
                        <textarea id="message" name="message" class="form-control" tabindex="4" placeholder="Tuliskan pesan anda" rows="5"></textarea>
                    </div>
                    <!--/ .form-group -->
                    <div class="form-group">
                        <p class="my-5 p-0 text-center">
                            Taro captcha di marih
                        </p>
                    </div>
                    <!--/ .form-group -->
                    <div class="form-group mb-5 mb-lg-0 text-center text-lg-left">
                        <button id="send" type="submit" class="btn btn-cn-primary btn-cn--bold" tabindex="5">
                            Kirim Pesan
                        </button>
                    </div>
                    <!--/ .form-group -->
                </form>

            </div>
            <!--/ .col-12 -->
            <!-- <div class="col-12 col-lg-5 offset-lg-2 d-flex flex-row align-items-end">
                <div class="cn-ads p-0 mx-auto my-2 my-lg-0 mr-lg-0 ml-lg-auto">
                    <a href="#">
                        <img data-src="http://placehold.it/320x250?text=Google+Ads" alt="Google Ads" title="Google Ads" class="img-fluid img-lazy" style="min-width: 100%; height: auto;">
                    </a>
                </div>
            </div> -->
            <!--/ .col-12 -->
        </div>
        <!--/ .row -->
       <!--  <div class="row">
            <div class="col-12">
                <div class="cn-section py-0 mt-5">
                    <div class="cn-ads my-2 my-md-0">
                        <a href="#">
                            <img data-src="http://placehold.it/1000x150?text=Google+Ads" alt="Google Ads" title="Google Ads" class="img-fluid img-lazy" style="min-width: 100%; height: auto;">
                        </a>
                    </div>
                </div> -->
                <!--/ .cn-section -->
            <!-- </div> -->
            <!--/ .col-12 -->
        <!-- </div> -->
        <!--/ .row -->
    </div>
    <!--/ .container -->
</section>
<!--/ . -->

<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script> -->

<script>

    $(function(){

        $("#send").click(function() {
            var form = $("#contactUs");

            form.validate({
                rules: {
                    name: "required",
                    email: {
                        required: true,
                        email: true
                    },
                    phone : "required",
                    message : "required"
                },
                messages: {
                    name: "Nama harus diisi",
                    email: {
                        required: "Email harus diisi",
                        email: "Format email belum sesuai"
                    },
                    phone: "Nomor Telepon harus diisi",
                    message: "Pesan harus diisi"
                },
                submitHandler: function(form) {
                    send();
                }
            });
        });

    });

    function send() {

        var data = {
            name: $("#name").val(),
            email: $("#email").val(),
            phone: $("#phone").val(),
            message: $("#message").val(),
        }

        $.ajax({
            type: 'POST',
            data: data,
            url: '/api/contact-us/add',
            success: function(res) {
                alert('Pesan Anda telah terkirimkan, silahkan tunggu balasan email dari kami untuk mengetahui langkah selanjutnya. Terima kasih');
                $('#contactUs').each(function() {
                    this.reset();
                });
            }
        });

    }

</script>