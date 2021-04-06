<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no">
    <meta name="keywords" content="Bootstrap, Landing page, Template, Business, Service">
    <meta name="author" content="Grayrids">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>moora</title>

    {{-- Icon --}}
    <link rel="shortcut icon" href="{{ url('img/3.png') }}" type="image/png">

    {{-- CSS --}}
    <link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/animate.css')}}">
    <link rel="stylesheet" href="{{ url('css/LineIcons.css') }}">
    <link rel="stylesheet" href="{{ url('css/main.css') }}">
    <link rel="stylesheet" href="{{ url('css/responsive.css') }}">
    <link rel="stylesheet" href="{{ url('modules/datatables/datatables.min.css') }}">

    {{-- Font --}}

</head>

<body>

    <!-- Header Section Start -->
    <header id="home" class="hero-area">
        <div class="overlay">
            <span></span>
            <span></span>
        </div>
        <nav class="navbar navbar-expand-md fixed-top bg-inverse">
            <div class="container">
                <a href="{{ route('guest.home') }}" class="navbar-brand"><img src="img/logo.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="lni-menu"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav mr-auto w-100 justify-content-end">
                        <li class="nav-item">
                            <a class="nav-link page-scroll" href="#home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link page-scroll" href="#pricing">Data</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link page-scroll" href="#features">Terms</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link page-scroll" href="#services">MOORA</a>
                        </li>
                        @guest
                        <li class="nav-item">
                            <a class="btn btn-singin" href="{{ route('login') }}">Sign in</a>
                        </li>
                        @else
                        <li class="nav-item">
                            <a class="btn btn-singin" href="{{ route('login') }}">Go to Admin</a>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container">
            <div class="row space-100">
                <div class="col-lg-6 col-md-12 col-xs-12">
                    <div class="contents">
                        <h2 class="head-title">Decision Support <br>System</h2>
                        <p>Moora is designed for you to choose the best candidate <br>for small dam location based on
                            their criteria.</p>
                        <div class="header-button">
                            <a href="#services" class="btn btn-border-filled page-scroll">Get Started</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-xs-12 p-0">
                    <div class="intro-img">
                        <img src="img/irasutoya/internet_heiwa.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Section End -->


    <!-- Data Section Start -->
    <section id="pricing" class="section">
        <div class="container">
            <!-- Start Row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="pricing-text section-header text-center">
                        <div>
                            <h2 class="section-title">Data Count</h2>
                            <div class="desc-text">
                                <p>From the results of data processing carried out by admin and users,</p>
                                <p>the following numbers are obtained. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Row -->
            <!-- Start Row -->
            <div class="row pricing-tables">
                <!--  Start Col -->
                <div class="col-lg-3 col-md-4 col-xs-12">
                    <div class="pricing-table text-center nav-link page-scroll" href="#features">
                        <div class="pricing-details">
                            <h1>{{ $countValues }}</h1>
                            <h3>Values</h3>
                        </div>
                    </div>
                </div>
                <!--  End Col -->
                <!--  Start Col -->
                <div class="col-lg-3 col-md-4 col-xs-12">
                    <div class="pricing-table text-center">
                        <div class="pricing-details">
                            <h1>{{ $countAlternatives }}</h1>
                            <h3>Alternatives</h3>
                        </div>
                    </div>
                </div>
                <!--  End Col -->
                <!--  Start Col -->
                <div class="col-lg-3 col-md-4 col-xs-12">
                    <div class="pricing-table text-center">
                        <div class="pricing-details">
                            <h1>{{ $countCriterias }}</h1>
                            <h3>Criterias</h3>
                        </div>
                    </div>
                </div>
                <!--  End Col -->
                <!--  Start Col -->
                <div class="col-lg-3 col-md-4 col-xs-12">
                    <div class="pricing-table text-center">
                        <div class="pricing-details">
                            <h1>{{ $countUsers }}</h1>
                            <h3>Users</h3>
                        </div>
                    </div>
                </div>
                <!--  End Col -->


            </div>
            <!-- End Row -->

        </div>
    </section>
    <!-- Data Section End -->

    <!-- Services Section Start -->
    <section id="features" class="section">
        <div class="container">
            <!-- Start Row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="features-text section-header text-center">
                        <div>
                            <h2 class="section-title">Terms</h2>
                            <div class="desc-text">
                                <p>Below are the terms that we use in this application <br> and their explanation.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- End Row -->
            <!-- Start Row -->
            <div class="row featured-bg">
                <!-- Start Col -->
                <div class="col-lg-6 col-md-6 col-xs-12 p-0">
                    <!-- Start Fetatures -->
                    <div class="feature-item featured-border1">
                        <div class="feature-icon float-left">
                            <i class="lni lni-dashboard"></i>
                        </div>
                        <div class="feature-info float-left">
                            <h4>Alternatives</h4>
                            <p>Alternatives in general are the candidates <br> between two or more possibilities. In
                                this case, <br> the alternatives are the location of the small dam.</p>
                        </div>
                    </div>
                    <!-- End Fetatures -->
                </div>
                <!-- End Col -->

                <!-- Start Col -->
                <div class="col-lg-6 col-md-6 col-xs-12 p-0">
                    <!-- Start Fetatures -->
                    <div class="feature-item featured-border2">
                        <div class="feature-icon float-left">
                            <i class="lni lni-files"></i>
                        </div>
                        <div class="feature-info float-left">
                            <h4>Criterias</h4>
                            <p>Criteria is a collection of principles used to judge <br> or assess something. In this
                                case, the criterias are <br> the characteristics of the small dam.</p>
                        </div>
                    </div>
                    <!-- End Fetatures -->
                </div>
                <!-- End Col -->

                <!-- Start Col -->
                <div class="col-lg-6 col-md-6 col-xs-12 p-0">
                    <!-- Start Fetatures -->
                    <div class="feature-item featured-border1">
                        <div class="feature-icon float-left">
                            <i class="lni-invention"></i>
                        </div>
                        <div class="feature-info float-left">
                            <h4>Values</h4>
                            <p>Values are the result of the calculation of <br> alternatives with existing criterias.
                                You must <br> login first to see the process of finding this value.
                            </p>
                        </div>
                    </div>
                    <!-- End Fetatures -->
                </div>
                <!-- End Col -->

                <!-- Start Col -->
                <div class="col-lg-6 col-md-6 col-xs-12 p-0">
                    <!-- Start Fetatures -->
                    <div class="feature-item featured-border2">
                        <div class="feature-icon float-left">
                            <i class="lni lni-map"></i>
                        </div>
                        <div class="feature-info float-left">
                            <h4>Carto Map</h4>
                            <p>Carto Map is a map system developed by CARTO. <br> In this case, Carto Map is used to
                                display data <br> alternative and more in the form of a map.</p>
                        </div>
                    </div>
                    <!-- End Fetatures -->
                </div>
                <!-- End Col -->

                <!-- Start Col -->
                <div class="col-lg-6 col-md-6 col-xs-12 p-0">
                    <!-- Start Fetatures -->
                    <div class="feature-item featured-border2">
                        <div class="feature-icon float-left">
                            <i class="lni lni-cup"></i>
                        </div>
                        <div class="feature-info float-left">
                            <h4>Ranking</h4>
                            <p>Ranking is the final result of the calculation <br> process. The results are obtained
                                through sorting <br> the optimization value from largest to smallest</p>
                        </div>
                    </div>
                    <!-- End Fetatures -->
                </div>
                <!-- End Col -->

                <!-- Start Col -->
                <div class="col-lg-6 col-md-6 col-xs-12 p-0">
                    <!-- Start Fetatures -->
                    <div class="feature-item featured-border2">
                        <div class="feature-icon float-left">
                            <i class="lni lni-users"></i>
                        </div>
                        <div class="feature-info float-left">
                            <h4>Users</h4>
                            <p>Users are registered users in this decision support <br> system. Users can modify
                                alternatives, criterias, <br> and values. You can also do this by registering!</p>
                        </div>
                    </div>
                    <!-- End Fetatures -->
                </div>
                <!-- End Col -->


            </div>
            <!-- End Row -->
        </div>
    </section>
    <!-- Services Section End -->

    <!-- Services Section Start -->
    <section id="services" class="section">
        <div class="container">
            <!-- Start Row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="team-text section-header text-center">
                        <div>
                            <h2 class="section-title">MOORA</h2>
                            <div class="desc-text">
                                <p>Below are some of the data processed by MOORA. <br> Click to see the details!</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- End Row -->

            <div class="row">
                <!-- Start Col -->
                <div class="col-lg-3 col-md-6 col-xs-12">
                    <div class="services-item text-center" data-toggle="modal" data-target="#dataKriteria">
                        <div class="icon">
                            <i class="lni lni-files"></i>
                        </div>
                        <h4>Criterias</h4>
                    </div>
                </div>
                <!-- End Col -->
                <!-- Start Col -->
                <div class="col-lg-3 col-md-6 col-xs-12">
                    <div class="services-item text-center" data-toggle="modal" data-target="#dataEvaluasi">
                        <div class="icon">
                            <i class="lni-invention"></i>
                        </div>
                        <h4>Values</h4>
                    </div>
                </div>
                <!-- End Col -->
                <!-- Start Col -->
                <div class="col-lg-3 col-md-6 col-xs-12">
                    <div class="services-item text-center" data-toggle="modal" data-target="#dataPeta">
                        <div class="icon">
                            <i class="lni lni-map"></i>
                        </div>
                        <h4>Carto Map</h4>
                    </div>
                </div>
                <!-- End Col -->
                <!-- Start Col -->
                <div class="col-lg-3 col-md-6 col-xs-12">
                    <div class="services-item text-center" data-toggle="modal" data-target="#dataRanking">
                        <div class="icon">
                            <i class="lni lni-cup"></i>
                        </div>
                        <h4>Ranking</h4>
                    </div>
                </div>
                <!-- End Col -->

            </div>

            <!-- Modal -->
            <!-- Modal Data Kriteria -->
            <div class="modal fade" id="dataKriteria">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
                    <div class="modal-content" style="border-top:2px solid #3ECF8E !important;">
                        <div class="modal-body">
                            <span style="padding:18px; font-size:14px; color: black">Criterias</span>
                            <div class="table-responsive">
                                <table class="table table-borderless table-striped" style="color: black" width="100%">
                                    <thead style="text-align:center; font-size:13px; background-color:#d6d6d6">
                                        <tr align="center">
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Type</th>
                                            <th>Weight</th>
                                        </tr>
                                    </thead>
                                    <tbody style="text-align:center">
                                        @foreach ($criterias as $criteria)
                                        <tr align="center">
                                            <td>{{ $criteria->id }}</td>
                                            <td>{{ $criteria->nama }}</td>
                                            <td>{{ $criteria->tipe }}</td>
                                            <td>{{ $criteria->bobot }}%</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal Data Evaluasi -->
            <div class="modal fade" id="dataEvaluasi">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
                    <div class="modal-content" style="border-top:2px solid #3ECF8E !important;">
                        <div class="modal-body">
                            <span style="padding:18px; font-size:14px; color: black">Values</span>
                            <div class="table-responsive">
                                <table class="table table-borderless table-striped" style="color: black" width="100%">
                                    <thead style="text-align:center; font-size:13px; background-color:#d6d6d6">
                                        <tr align="center">
                                            <th>Alternative</th>
                                            @foreach (array_keys(current($matrix)) as $indexCriteria)
                                            <th>C{{ $indexCriteria }}</th>
                                            @endforeach
                                        </tr>
                                    </thead>
                                    <tbody style="text-align:center; font-size:13px">
                                        @foreach (array_keys($matrix) as $indexAlternative)
                                        <tr align="center">
                                            <td>A{{ $indexAlternative }}</td>
                                            @foreach (array_keys($matrix[$indexAlternative]) as $indexCriteria)
                                            <td>{{ $matrix[$indexAlternative][$indexCriteria] }}</td>
                                            @endforeach
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <span style="padding:18px; font-size:14px; color: black">Information</span>
                            <div class="row">
                                <div class="col-md-6">
                                    <div style="padding:5px; border-radius:5px; font-size:14px;" class="table-responsive">
                                        <table class="table table-striped" style="color: black" width="100%">
                                            <thead style="text-align:center; font-size:13px; background-color:#d6d6d6">
                                                <tr>
                                                    <th>Code</th>
                                                    <th>Alternatives</th>
                                                </tr>
                                            </thead>
                                            <tbody style="text-align:center; font-size:13px">
                                                @foreach ($alternatives as $data)
                                                <tr>
                                                    <td>A{{ $data->id }}</td>
                                                    <td>{{ $data->nama }}</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div style="padding:5px; border-radius:5px; font-size:14px;" class="table-responsive">
                                        <table class="table table-striped" style="color: black" width="100%">
                                            <thead style="text-align:center; font-size:13px; background-color:#d6d6d6">
                                                <tr>
                                                    <th>Code</th>
                                                    <th>Criteria</th>
                                                </tr>
                                            </thead>
                                            <tbody style="text-align:center; font-size:13px">
                                                @foreach ($criterias as $criteria)
                                                <tr>
                                                    <td>C{{ $criteria->id }}</td>
                                                    <td>{{ $criteria->nama }}</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal Data Ranking -->
            <div class="modal fade" id="dataRanking">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
                    <div class="modal-content" style="border-top:2px solid #3ECF8E !important;">
                        <div class="modal-body">
                            <span style="padding:18px; font-size:14px; color: black">Optimization Ranked</span>
                            <div class="table-responsive">
                                <table class="table table-borderless table-striped" style="color: black" width="100%">
                                    <thead style="text-align:center; font-size:13px;background-color:#d6d6d6">
                                        <tr>
                                            <th>Rank</th>
                                            <th>Alternatives</th>
                                            <th>Optimization</th>
                                        </tr>
                                    </thead>
                                    <tbody style="text-align:center; font-size:13px">
                                        @foreach ($optimization as $optimization_id => $val)
                                        <tr align="center">
                                            <td>{{ $rank++ }}</td>
                                            <td>{{ $alternative[$optimization_id][0] }}</td>
                                            <td>{{ number_format((float)$optimization[$optimization_id], 4, '.', '') }}
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal Data Peta -->
            <div class="modal fade bd-example-modal-lg" tabindex="1" role="dialog" id="dataPeta" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                    <div style="border-top:2px solid #3ECF8E !important;" class="modal-content">
                        <div style="box-shadow:0 4px 8px rgba(0, 0, 0, 0.03); border-radius:3px" class="card-body">
                            <span style="padding:18px; font-size:14px; color: black">Map</span>
                            <div style="padding:15px; border-radius:5px; font-size:14px;">
                                <iframe width="100%" height="475" frameborder="0"
                                    src="https://farrellp43.carto.com/builder/b589733c-fa91-4016-88d1-300793286cf8/embed"
                                    allowfullscreen webkitallowfullscreen mozallowfullscreen oallowfullscreen
                                    msallowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- Services Section End -->

    <!-- Footer Section Start -->
    <footer>
        <!-- Footer Area Start -->
        <section id="footer-Content">
            <div class="container">
                <!-- Start Row -->
                <div class="row">

                    <!-- Start Col -->
                    <div class="col-lg-12">
                        <div class="site-info text-center">
                            <img src="img/footer-logo.png" alt="">
                        </div>
                    </div>
                    <!-- End Col -->

                </div>
                <!-- End Row -->
            </div>
            <!-- Copyright Start  -->

            <div class="copyright">
                <div class="container">
                    <!-- Star Row -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="site-info text-center">
                                <p>Crafted by <a href="http://uideck.com" rel="nofollow">UIdeck</a></p>
                            </div>

                        </div>
                        <!-- End Col -->
                    </div>
                    <!-- End Row -->
                </div>
            </div>
            <!-- Copyright End -->
        </section>
        <!-- Footer area End -->

    </footer>
    <!-- Footer Section End -->

    <!-- Go To Top Link -->
    <a href="#" class="back-to-top">
        <i class="lni-chevron-up"></i>
    </a>

    <!-- Preloader -->
    <div id="preloader">
        <div class="loader" id="loader-1"></div>
    </div>
    <!-- End Preloader -->

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="{{url('modules/jquery.min.js')}}"></script>
    <script src="{{ url('js/popper.min.js') }}"></script>
    <script src="{{url('modules/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{ url('js/owl.carousel.js') }}"></script>
    <script src="{{ url('js/jquery.nav.js') }}"></script>
    <script src="{{ url('js/scrolling-nav.js') }}"></script>
    <script src="{{ url('js/jquery.easing.min.js') }}"></script>
    <script src="{{ url('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ url('js/main.js') }}"></script>
    <script src="{{asset('modules/datatables/datatables.min.js')}}"></script>
    <script>
        $(document).ready(function() {
            //Pagination numbers
            $('#tableKriteria').DataTable({
                "pagingType": "simple_numbers",
                "searching": false,
                "ordering": false,
                "paging": false
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            //Pagination numbers
            $('#tableEvaluasi').DataTable({
                "pagingType": "simple_numbers",
                "ordering": false,
                "searching": false,
                "paging": false
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            //Pagination numbers
            $('#tableKeterangan').DataTable({
                "pagingType": "simple_numbers",
                "searching": false,
                "ordering": false,
                "paging": false
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            //Pagination numbers
            $('#tableRanking').DataTable({
                "pagingType": "simple_numbers",
                "searching": false,
                "paging": false
            });
        });
    </script>

</body>



</html>