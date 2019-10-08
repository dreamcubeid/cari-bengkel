<?php 
    $this->extend('Layouts/layout.html.php');

    // Call css file on specific page
    $this->headLink()->appendStylesheet('/static/css/detail.css');

    //call Url helper
    use AppBundle\Utils\Url;

    $urlHelper = new Url();

    $data = $this->data;
    $category = $this->category;
    $similarGarage = $this->similarGarage;
?>

<section class="my-4">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <ol class="breadcrumb cn-breadcrumb px-0">
                    <li class="breadcrumb-item">
                        <a href="/">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="/cari">Cari</a>
                    </li>
                    <li class="breadcrumb-item active">
                        <span><?= $data->getName() ?></span>
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
                    <a href="<?= $data->getBanner() ? ($data->getBanner()->getPath() . $data->getBanner()->getFilename()) : '/static/images/default/default-banner.webp' ?>" title="">
                        <img data-src="<?= $data->getBanner() ? ($data->getBanner()->getPath() . $data->getBanner()->getFilename()) : '/static/images/default/default-banner.webp' ?>" alt="" class="img-lazy img-fluid">
                    </a>
                </div><!--/ . -->

                <div class="">
                    <div class="cn-card cn-card--compact cn-card--transparent d-flex flex-row mb-5">
                        <div class="cn-card-header d-flex flex-row align-items-start justify-content-start pt-3">
                            <div class="cn-card-avatar ml-0">
                                <a href="#" title="<?= $data->getName() ?>">
                                    <img data-src="<?= $data->getLogo() ? ($data->getLogo()->getPath() . $data->getLogo()->getFilename()) : '/static/images/default/default-image.png' ?>" alt="<?= $data->getName() ?>" class="img-lazy">
                                </a>
                            </div><!--/ .cn-card-avatar -->
                        </div><!--/ .cn-card-header -->
                        <div class="cn-card-body mt-0 pt-3 pl-0 d-flex flex-row align-items-start justify-content-start flex-grow-1">
                            <h5 class="cn-card-title m-0 mb-3 p-0 flex-grow-1">
                                <a href="#" title="<?= $data->getName() ?>">
                                    <?= $data->getName() ?>
                                </a>
                                <div class="cn-card-tags cn-card-tags--grounded py-0 px-0">
                                    <ul class="list-inline m-0 p-0">
                                    <?php 
                                        if ($data->getGarageType()) { 
                                            foreach ($data->getGarageType() as $key => $value) {
                                                if ($value->getName() == 'Mobil') {
                                    ?>
                                                    <li class="list-inline-item">
                                                        <span class="cn-card-tags__item">
                                                            <i class="fa fa-car-side"></i>
                                                        </span>
                                                    </li>
                                    <?php 
                                                } 
                                                if ($value->getName() == 'Motor') {
                                    ?>
                                                    <li class="list-inline-item">
                                                        <span class="cn-card-tags__item">
                                                            <i class="fa fa-motorcycle"></i>
                                                        </span>
                                                    </li>
                                    <?php       }
                                            }
                                        } 
                                    ?>
                                    </ul>
                                </div>
                            </h5>
                            <div class="text-right mt-0">
                                <a href="https://www.google.com/maps/dir/?api=1&destination=<?= $data->getLatitude()?>, <?= $data->getLongitude() ?>" target="_blank" class="btn btn-sm btn-cn-primary btn-cn--bold">Temukan Lokasi</a>
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
                                    <li class="d-flex flex-row align-items-start justify-content-start"> 
                                            <span>
                                                <i class="fas fa-map-marker-alt"></i>
                                            </span>
                                                <span class="flex-grow-1 pl-2" style="margin-left: 4px;"><?= $data->getAddress() . ($data->getCity() ? (', ' . $data->getCity()->getName() . ', ' . $data->getCity()->getProvince()->getName()) : '') ?></span>
                                        </li>                                       
                                        <li class="d-flex flex-row align-items-start justify-content-start">
                                            <span><i class="far fa-clock"></i></span>
                                            <p class="cn-par">
                                            <?php 
                                                if ($data->getOperatingHours()) { 
                                                    foreach ($data->getOperatingHours()->getItems() as $key => $value) {
                                            ?>
                                                <span class="flex-grow-1 pl-2">
                                                    <?= $value->getOperationalDay() ?> | <?= $value->getOpenHour() ?> - <?= $value->getCloseHour() ?> WIB</br>
                                                </span>
                                            <?php 
                                                    } 
                                                } else { 
                                            ?>
                                                <span class="flex-grow-1 pl-2">Jadwal Belum Tersedia</span>
                                            <?php } ?>
                                        </p>
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
                                    <?php
                                        if (!empty($data->getCategory())) {
                                            foreach ($data->getCategory() as $key => $value) {
                                    ?>
                                     <li class="d-flex flex-row align-items-start justify-content-start"> 
                                            <span>
                                            <img data-src="<?= $value->getIcon() ? ($value->getIcon()->getPath() . $value->getIcon()->getFilename()) : '' ?>" alt="" class="img-lazy" style="width: 15px; filter: grayscale(100%) brightness(10%);">
                                            </span>
                                            <span class="flex-grow-1 pl-2"><?= $value->getName() ?></span>
                                        </li>  
                                    <?php 
                                            }
                                        }
                                    ?>
                                    </ul>
                                </div><!--/ .cn-detail-box__body -->
                            </div><!--/ .cn-detail-box -->

                        </div><!--/ .tab-pane -->

                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="cn-detail-box mt-4">
                                <div class="cn-detail-box__body px-4 pb-4 pt-3">
                                    <ul class="list-unstyled m-0 p-0">
                                        <?php if ($data->getContactPerson()) { ?>
                                        <li class="d-flex flex-row align-items-start justify-content-start"> 
                                            <span>
                                                <i class="fas fa-user"></i>
                                            </span>
                                            <span class="flex-grow-1 pl-2"><?= $data->getContactPerson() ?></span>
                                        </li>
                                        <?php } ?>
                                        <?php if ($data->getPhone()) { ?>
                                        <li class="d-flex flex-row align-items-start justify-content-start">
                                            <span><i class="fas fa-phone" style="transform: rotate(90deg);"></i></span>
                                            <p class="cn-par">
                                            <?php foreach ($data->getPhone()->getItems() as $key => $value) { ?>
                                                <span class="flex-grow-1 pl-2"><?= $value->getPhone() ?></span></br>
                                            <?php } ?>
                                            </p>
                                        </li>
                                        <?php } ?>
                                        <?php if ($data->getEmail()) { ?>
                                        <li class="d-flex flex-row align-items-start justify-content-start"> 
                                            <span>
                                                <i class="far fa-envelope"></i>
                                            </span>
                                            <span class="flex-grow-1 pl-2"><?= $data->getEmail() ?></span>
                                        </li>
                                        <?php } ?>
                                    </ul>
                                </div><!--/ .cn-detail-box__body -->
                            </div><!--/ .cn-detail-box -->
                        </div><!--/ .tab-pane -->

                    </div><!--/ .tab-content -->
                </div><!--/ . -->

                <div class="cn-section pt-0 mt-3">
                    
                    <div class="cn-section-title">
                        <h2 class="">Kategori</h2>
                    </div><!--/ .cn-section-title -->

                    <div class="cn-categories">

                        <?php 
                            if ($category) {
                                foreach ($category as $key => $value) {
                                    $url    = '/cari/?category=' . str_replace('-', '_', $value->getSlug());
                                    $icon   = 'http://placehold.it/72x72';
                                    $name   = $value->getName();

                                    try{
                                        $icon = $value->getIcon()->getPath() . $value->getIcon()->getFilename();
                                    }
                                    catch(Throwable $t)
                                    {
                                        // Do nothing when fail
                                    }
                        ?>
                                    <a href="<?= $url; ?>" title="<?= $name; ?>" class="cn-categories-item">
                                        <div class="cn-categories-item__inner d-flex flex-column align-items-center justify-content-center">
                                            <div class="cn-categories-item__icon">
                                                <img data-src="<?= $icon; ?>" alt="<?= $name; ?>" class="img-lazy">
                                            </div><!--/ .cn-categories-item__icon -->
                                            <div class="cn-categories-item__text mt-2">
                                                <span><?= $name; ?></span>
                                            </div><!--/ .cn-categories-item__text -->
                                        </div><!--/ .cn-categories-item__inner -->
                                    </a><!--/ .cn-categories-item -->
                        <?php } } ?>

                    </div><!--/ .cn-categories -->
                </div>
                <!-- <div class="cn-section pt-0 mt-3">
                    <div class="cn-ads my-2 my-md-0">
                        <a href="#">
                            <img data-src="http://placehold.it/830x80?text=Google+Ads" alt="Google Ads" title="Google Ads" class="img-fluid img-lazy" style="min-width: 100%; height: auto;">
                        </a>
                    </div>
                </div> -->
            </div><!--/ .col-12 -->
          

            <div class="col-12 col-md-4">


                <!-- <div class="cn-ads cn-ads--rounded mb-5">
                    <a href="#">
                        <img data-src="http://placehold.it/320x450?text=Google+Ads" alt="Google Ads" title="Google Ads" class="img-fluid img-lazy" style="min-width: 100%; height: auto;">
                    </a>
                </div> --><!--/ .cn-ads -->

                <div class="mb-5">
                    <h2 class="m-0 p-0">Bengkel Serupa</h2>
                </div>

                <?php 
                    if ($similarGarage) {
                        foreach ($similarGarage as $key => $value) {
                ?>

                <div class="cn-card mb-5 cn-list">
                    <div class="cn-card-header">
                        <div class="cn-card-tags text-right">
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
                            </ul>
                        </div>
                        <div class="pt-5">
                            <div class="cn-card-avatar cn-card-avatar--grounded">
                                <a href="/detail/<?= $value['Slug'] ? $value['Slug'] : ($urlHelper->convertToFriendlyUrl($value['Name'])) ?>/<?= $value['o_id'] ?>" title="<?= $value['Name'] ?>">
                                    <img data-src="<?= $value['LogoPath'] ? $value['LogoPath'] : '/static/images/default/default-image.png' ?>" alt="<?= $value['Name'] ?>" class="img-lazy">
                                </a>
                            </div><!--/ .cn-card-avatar -->
                        </div>
                    </div><!--/ .cn-card-header -->
                    <div class="cn-card-body cn-det">
                        <h5 class="cn-card-title m-0 mb-3 p-0">
                            <a href="/detail/<?= $value['Slug'] ? $value['Slug'] : ($urlHelper->convertToFriendlyUrl($value['Name'])) ?>/<?= $value['o_id'] ?>" title="<?= $value['Name'] ?>">
                                <?= $value['Name'] ?>
                            </a>
                        </h5>
                        <ul class="cn-card-info m-0 p-0 list-unstyled">
                            <li class="d-flex flex-row align-items-start justify-content-start"> 
                                <span>
                                    <i class="fa fa-map-marker-alt"></i>
                                </span>
                                <span class="flex-grow-1 pl-2"><?= $value['Address'] . ', ' . $value['City'] ?></span>
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
                        <div class="text-center mt-5 ">
                            <a href="/detail/<?= $value['Slug'] ? $value['Slug'] : ($urlHelper->convertToFriendlyUrl($value['Name'])) ?>/<?= $value['o_id'] ?>" class="btn btn-cn-primary btn-cn--bold cn-btn-sel">Selengkapnya</a>
                        </div>
                    </div><!--/ .card-body -->
                </div><!--/ .cn-card -->

                <?php }} ?>

                <div class="text-center mt-5 cn-button">
                    <a href="/cari" class="btn btn-cn-primary btn-cn--bold">LIHAT SEMUA</a>
                </div>

            </div><!--/ .col-12 -->

        </div><!--/ .row -->
    </div><!--/ .container -->
</section><!--/ . -->

<?php 
    // Call js file on specific page
    $this->headScript()->appendFile('/static/js/detail.js')
?>