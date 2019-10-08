<?php 
    $name = $this->getParam('name') ? $this->getParam('name') : '';
    $id = $this->getParam('id') ? $this->getParam('id') : '';

    $queryParams = array();
    if ($name != '' || $id != '')
        $queryParams = array('name' => $name, 'id' => $id);

    $url = $this->pimcoreUrl($queryParams);
?>
<section class="cn-ornament-body--left">
    <img data-src="/static/images/body-ornament-left.png" class="img-lazy" alt="">
</section>

<section class="cn-ornament-body--right">
    <img data-src="/static/images/body-ornament-right.webp" class="img-lazy" alt="">
</section>

<div class="cn-navbar-wrapper">
    <div class="container">
        <nav class="cn-navbar navbar navbar-expand-lg navbar-light px-0">
            
            <a class="navbar-brand" href="/">
                <img data-src="/static/images/logo.svg" alt="Cari.in" class="img-lazy">
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item <?= $url == '/' ? 'active': '' ?>">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item <?= $url == '/cari/' ? 'active': '' ?>">
                        <a class="nav-link" href="/cari">Cari</a>
                    </li>
                    <!--
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Dropdown
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                    -->
                </ul>
            </div><!--/ .navbar-collapse -->
        </nav>
    </div><!--/ .container -->
</div><!--/ .cn-navbar-wrapper -->