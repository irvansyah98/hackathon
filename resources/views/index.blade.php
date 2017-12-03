<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BangJas - Teman mudah untuk mencari lokasi barang atau jasa</title>

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts -->
    <link href="/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="/css/magnific-popup.css" rel="stylesheet" type="text/css">

    <!-- Custom styles -->
    <link href="/css/freelancer.min.css" rel="stylesheet">

    <!-- BangJas style -->
    <link href="/css/bangjas.css?v=<?= rand(0, 9999) ?>" rel="stylesheet">
</head>

<body id="page-top">
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top"><span>Bang</span> <small><i class="fa fa-star" aria-hidden="true"></i></small> JAS <img class="img-responsive img-head" src="/img/mustache.png" alt=""></a>
            <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu <i class="fa fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item mx-0 mx-lg-1">
                        <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#cari_barang"><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp; Cari Barang</a>
                    </li>
                    <li class="nav-item mx-0 mx-lg-1">
                        <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#tentang"><i class="fa fa-question-circle" aria-hidden="true"></i>&nbsp; Tentang</a>
                    </li>
                    <li class="nav-item mx-0 mx-lg-1">
                        <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#kontak"><i class="fa fa-phone-square" aria-hidden="true"></i>&nbsp; Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Header -->
    <header class="masthead bg-primary text-white text-center" id="cari_barang">
        <div class="container">
            <!-- Gambar Lagi -->
            <div class="row" style="margin-bottom: 20px;">
                <div class="col-md-6 hidden-xs">
                    <img class="img-fluid mb-5 mx-auto" src="/img/map.png" alt="">
                </div>
                <div class="col-md-6">
                    <h1 class="text-uppercase mb-0 slogan">Temukan barang yang kamu cari disini !!</h1>
                </div>
            </div>
            <!-- Panel Pencarian -->
            <form class="" action="" method="post">
            <div class="panel panel-primary">
                <div class="panel-body">
                    <div class="row text-left">
                        <div class="col-md-4">
                            <!-- <div class="form-group"> -->
                                <label for="" class="label-cari">Jenis Pencarian</label>
                                <select class="form-control form-cari-awal" name="" style="height: 70px" required>
                                    <option value="barang">Barang</option>
                                    <option value="jasa">Jasa</option>
                                </select>
                            <!-- </div> -->
                        </div>
                        <div class="col-md-8">
                            <!-- <div class="form-group"> -->
                                <label for="" class="label-cari">Nama Barang/Jasa</label>
                                <input type="text" class="form-control form-cari-awal" id="" placeholder="Cari barang/jasa di sekitar anda..." required>
                            <!-- </div> -->
                        </div>
                        <div class="col-md-12 text-right">
                            <button type="submit" class="btn btn-primary btn-lg btn-home-cari" name="submit"><i class="fa fa-search"></i>&nbsp; Cari Barang!</button>
                        </div>
                    </div>
                </div>
            </div>
            </form>
            <!-- <h1 class="text-uppercase mb-0">Start Bootstrap</h1> -->
            <hr class="star-light" style="margin-top: 80px;">
            <!-- <h2 class="font-weight-light mb-0">Web Developer - Graphic Artist - User Experience Designer</h2> -->
        </div>
    </header>

    <!-- Tentang Section -->
    <section class="portfolio" id="tentang">
        <div class="container">
            <h2 class="text-center text-uppercase text-secondary mb-0">Tentang <span style="color: #e8901e">BangJAS</span></h2>
            <hr class="star-dark mb-5">
            <div class="row">
                <div class="col-md-12">
                    <p class="txt-1">
                        BangJAS adalah sebuah platform Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-primary text-white" id="kontak">
        <div class="container">
            <h2 class="text-center text-uppercase text-white">Kontak</h2>
            <hr class="star-light mb-5">
            <div class="row">
                <div class="col-lg-4 ml-auto">
                    <p class="txt-1">
                        BangJAS adalah sebuah platform Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                </div>
                <div class="col-lg-4 mr-auto">
                    <p class="txt-1">
                        BangJAS adalah sebuah platform Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-5 mb-lg-0">
                    <h4 class="text-uppercase mb-4">Kantor Pusat</h4>
                    <p class="lead mb-0">
                        Keputih, Sukolilo, <br>
                        Surabaya - Jawa Timur
                    </p>
                </div>
                <div class="col-md-4 mb-5 mb-lg-0">
                    <h4 class="text-uppercase mb-4">Ikuti Kita</h4>
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item">
                            <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                                <i class="fa fa-fw fa-facebook"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                                <i class="fa fa-fw fa-google-plus"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                                <i class="fa fa-fw fa-twitter"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                                <i class="fa fa-fw fa-linkedin"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                                <i class="fa fa-fw fa-dribbble"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h4 class="text-uppercase mb-4">Pengajuan Mitra</h4>
                    <p class="lead mb-0">
                        BangJAS memberikan kemudahan pada pedagang untuk blablabla <br>
                        <a href="mailto:bangjas?subject=pengajuan_mitra">cs@bangjas.com</a>.
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <div class="copyright py-4 text-center text-white">
        <div class="container">
            <small>Copyright &copy; BangJas.dev and team - <?= date('Y') ?></small>
        </div>
    </div>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-to-top d-lg-none position-fixed ">
        <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
        <i class="fa fa-chevron-up"></i>
      </a>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="/js/jquery.easing.min.js"></script>
    <script src="/js/jquery.magnific-popup.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="/js/freelancer.min.js"></script>

</body>

</html>
