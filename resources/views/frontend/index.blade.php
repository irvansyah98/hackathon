<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BangJas - Teman mudah untuk mencari lokasi barang atau jasa</title>

    <link rel="shortcut icon" type="image/png" href="/img/_icon.png"/>

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
    <style>
    .controls {
        margin-top: 10px;
        border: 1px solid transparent;
        border-radius: 2px 0 0 2px;
        box-sizing: border-box;
        -moz-box-sizing: border-box;
        height: 32px;
        outline: none;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
    }

    #pac-input {
        background-color: #fff;
        font-family: Roboto;
        font-size: 15px;
        font-weight: 300;
        margin-left: 12px;
        padding: 0 11px 0 13px;
        text-overflow: ellipsis;
        width: 300px;
    }

    #pac-input:focus {
        border-color: #4d90fe;
    }

    .pac-container {
        font-family: Roboto;
    }

    #type-selector {
        color: #fff;
        background-color: #4d90fe;
        padding: 5px 11px 0px 11px;
    }

    #type-selector label {
        font-family: Roboto;
        font-size: 13px;
        font-weight: 300;
    }
    #target {
        width: 345px;
    }
    </style>
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
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <div class="" style="height: 300px; width:100%;">
                                <input id="pac-input" class="controls" type="text" placeholder="Search Box">
                                <div id="map">

                                </div>
                            </div>

                            <input type="hidden" name="lat" id="lat" value="">
                            <input type="hidden" name="long" id="long" value="">
                            <input type="hidden" name="loc_name" id="loc_name" value="">
                            <input type="hidden" name="loc_des" id="loc_des" value="">
                        </div>
                    </div>
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
                        BangJAS adalah sebuah platform yang ditujukan untuk memudahkan masyarakat dalam menemukan sebuah toko yang menjual barang yang dibutuhkan.
                        Dengan adanya BangJAS masyarakat akan dimudahkan dalam menemukan lokasi pedagang tanpa harus bingung mencari kesana kemari.
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
                        BangJAS meyediakan fitur premium untuk para pedagang yang ingin menjadi mitra kita. Salah satu keunggulan menjadi mitra dari BangJAS adalah meningkatkan penjualan dari pedagang itu sendiri
                        karena BangJAS akan memprioritaskan para pedagang mitra untuk muncul di pencarian paling atas jika ditemukan banyak toko yang menjual barang yang sama. <br>
                        Hubungi CS BangJAS untuk informasi mejadi mitra yang lebih lanjut.
                    </p>
                </div>
                <div class="col-lg-4 mr-auto">
                    <p class="txt-1">
                        <i class="fa fa-phone" aria-hidden="true"></i>&nbsp; 0812-330-045-619 <br>
                        <i class="fa fa-envelope" aria-hidden="true"></i>&nbsp; CS@BangJAS.com <br>
                        <i class="fa fa-building" aria-hidden="true"></i>&nbsp; Sukolilo, Surabaya, Jawa Timur <br>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <header class="masthead bg-primary text-white" id="cari_barang" style="padding-top: 10px;">
        <div class="container">
            <div class="row">
            <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="panel panel-default" style="color: black">
                        <div class="panel-heading text-center">
                            <h2>Login</h2>
                        </div>
                        <div class="panel-body">
                            <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                                {{ csrf_field() }}

                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                    <div class="col-md-12">
                                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label for="password" class="col-md-4 control-label">Password</label>

                                    <div class="col-md-12">
                                        <input id="password" type="password" class="form-control" name="password" required>

                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-8 col-md-offset-4">
                                        <button type="submit" class="btn btn-primary">
                                            Login
                                        </button>

                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            Forgot Your Password?
                                        </a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
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
                        BangJAS memberikan kemudahan pada pedagang untuk menjadi mitra, hubungi CS kami untuk informasi lebih lanjut<br>
                        <a href="mailto:bangjas?subject=pengajuan_mitra">cs@bangjas.com</a>.
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <div class="copyright py-4 text-center text-white">
        <div class="container">
            <small>Copyright &copy; BangJAS DEV Team - <?= date('Y') ?></small>
        </div>
    </div>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-to-top d-lg-none position-fixed ">
        <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
        <i class="fa fa-chevron-up"></i>
      </a>
    </div>

    <!-- GMAPS API -->

    <!-- Bootstrap core JavaScript -->
    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="/js/jquery.easing.min.js"></script>
    <script src="/js/jquery.magnific-popup.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="/js/freelancer.min.js"></script>

    <script>

        // The following example creates a marker in Stockholm, Sweden using a DROP
        // animation. Clicking on the marker will toggle the animation between a BOUNCE
        // animation and no animation.

        var marker;
        var geocoder;
        var respon;

        function initMap() {
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 15,
                center: {lat: -7.2457901, lng: 112.735386}
            });

            geocoder = new google.maps.Geocoder();

            var markers = [];

            var input = document.getElementById('pac-input');
            var searchBox = new google.maps.places.SearchBox(input);
            map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

            // Bias the SearchBox results towards current map's viewport.
            map.addListener('bounds_changed', function() {
                searchBox.setBounds(map.getBounds());
            });

            searchBox.addListener('places_changed', function() {
                var places = searchBox.getPlaces();

                if (places.length == 0) {
                    return;
                }

                // Clear out the old markers.
                markers.forEach(function(marker) {
                    marker.setMap(null);
                });
                markers = [];

                // For each place, get the icon, name and location.
                var bounds = new google.maps.LatLngBounds();
                places.forEach(function(place) {
                    if (!place.geometry) {
                        console.log("Returned place contains no geometry");
                        return;
                    }
                    var icon = {
                        url: place.icon,
                        size: new google.maps.Size(71, 71),
                        origin: new google.maps.Point(0, 0),
                        anchor: new google.maps.Point(17, 34),
                        scaledSize: new google.maps.Size(25, 25)
                    };

                    // Create a marker for each place.
                    // markers.push(new google.maps.Marker({
                    //     map: map,
                    //     icon: icon,
                    //     title: place.name,
                    //     position: place.geometry.location
                    // }));

                    if (place.geometry.viewport) {
                        // Only geocodes have viewport.
                        bounds.union(place.geometry.viewport);
                    } else {
                        bounds.extend(place.geometry.location);
                    }
                });
                map.fitBounds(bounds);
            });

            marker = new google.maps.Marker({
                map: map,
                draggable: true,
                animation: google.maps.Animation.DROP,
                position: {lat: -7.2457901, lng: 112.735386}
            });

            marker.addListener('click', toggleBounce);
            marker.addListener('dragend', function() {
                $('#lat').val(marker.position.lat());
                $('#long').val(marker.position.lng());
                geocodePosition(marker.getPosition());
                console.log(marker.position);
            });

            google.maps.event.addListener(map, 'click', function(event) {
                placeMarker(event.latLng);
            });

            function placeMarker(location) {
                if (marker == undefined){
                    marker = new google.maps.Marker({
                        position: location,
                        map: map,
                        animation: google.maps.Animation.DROP,
                    });
                }
                else{
                    marker.setPosition(location);
                }
                map.setCenter(location);
            }

            console.log(marker.position.lat());
        }

        function geocodePosition(pos) {
            geocoder.geocode({
                latLng: pos
            }, function(responses) {
                if (responses && responses.length > 0) {
                    $('#loc_des').val(responses[0].formatted_address);
                    // $('#loc_name').val(responses[0].address_components[7].long_name);
                    respon = responses[0];
                    if ( respon.address_components.length == 10 ) {
                        $('#loc_name').val(responses[0].address_components[6].long_name);
                    } else if ( respon.address_components.length == 8 ) {
                        $('#loc_name').val(responses[0].address_components[4].long_name);
                    } else if ( respon.address_components.length == 7 ) {
                        $('#loc_name').val(responses[0].address_components[3].long_name);
                    } else if ( respon.address_components.length == 6 ) {
                        $('#loc_name').val(responses[0].address_components[2].long_name);
                    }
                } else {
                    log('Cannot determine address at this location.');
                }
            });
        }

        function toggleBounce() {
            if (marker.getAnimation() !== null) {
                marker.setAnimation(null);
            } else {
                marker.setAnimation(google.maps.Animation.BOUNCE);
            }
        }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCNKQdqKdPSHngzfG3wFZxA8eBZeZ9dmzs&callback=initMap&libraries=places"></script>

</body>

</html>
