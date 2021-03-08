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
    {{-- <link rel="stylesheet" href="{{url('modules/bootstrap/css/bootstrap.min.css')}}"> --}}
    <link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{url('css/animate.css')}}">
    <link rel="stylesheet" href="{{ url('css/LineIcons.css') }}">
    <link rel="stylesheet" href="{{ url('css/main.css') }}">
    <link rel="stylesheet" href="{{ url('css/responsive.css') }}">
    {{-- <link rel="stylesheet" href="{{url('css/style.min.css')}}"> --}}
    {{-- <link rel="stylesheet" href="{{url('modules/bootstrap-social/bootstrap-social.css')}}"> --}}
    {{-- <link rel="stylesheet" href="{{url('modules/fontawesome/css/all.min.css')}}"> --}}
    {{-- <link rel="stylesheet" href="{{url('css/components.min.css')}}">
    <link rel="stylesheet" href="{{url('css/custom.css')}}">
    <link rel="stylesheet" href="{{url('css/landing.css')}}">
    <link rel="stylesheet" href="{{url('css/aos.css')}}"> --}}
    {{-- <link rel="stylesheet" href="{{url('modules/datatables/datatables.min.css')}}"> --}}

    {{-- Font --}}

</head>

<body>

    <!-- Header Section Start -->
    <header id="home" class="hero-area">
        <div class="overlay">
            <span></span>
            <span></span>
        </div>
        <nav class="navbar navbar-expand-md bg-inverse fixed-top scrolling-navbar">
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
                            <a class="nav-link page-scroll" href="#services">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-singin" href="{{ route('login') }}">Sign in</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container">
            <div class="row space-100">
                <div class="col-lg-6 col-md-12 col-xs-12">
                    <div class="contents">
                        <h2 class="head-title">Sistem Pendukung <br>Keputusan</h2>
                        <p>moora akan mempercepat kamu dalam mengambil keputusan, <br>tentukan kasusmu dan klienmu akan
                            menyukainya.</p>
                        <div class="header-button">
                            <a href="#services" class="btn btn-border-filled page-scroll">Get Started</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-xs-12 p-0">
                    <div class="intro-img">
                        <img src="img/internet_heiwa.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Section End -->


    <!-- Services Section Start -->
    <section id="services" class="section">
        <div class="container">

            <div class="row">
                <!-- Start Col -->
                <div class="col-lg-4 col-md-6 col-xs-12">
                    <div class="services-item text-center">
                        <div class="icon">
                            <i class="lni-cog"></i>
                        </div>
                        <h4>Bootstrap 4</h4>
                        <p>Share processes and data secure lona need to know basis Our team assured your web site is
                            always safe.</p>
                    </div>
                </div>
                <!-- End Col -->
                <!-- Start Col -->
                <div class="col-lg-4 col-md-6 col-xs-12">
                    <div class="services-item text-center">
                        <div class="icon">
                            <i class="lni-brush"></i>
                        </div>
                        <h4>Slick Design</h4>
                        <p>Share processes and data secure lona need to know basis Our team assured your web site is
                            always safe.</p>
                    </div>
                </div>
                <!-- End Col -->
                <!-- Start Col -->
                <div class="col-lg-4 col-md-6 col-xs-12">
                    <div class="services-item text-center">
                        <div class="icon">
                            <i class="lni-heart"></i>
                        </div>
                        <h4>Crafted with Love</h4>
                        <p>Share processes and data secure lona need to know basis Our team assured your web site is
                            always safe.</p>
                    </div>
                </div>
                <!-- End Col -->

            </div>
        </div>
    </section>
    <!-- Services Section End -->



    <!-- Business Plan Section Start -->
    <section id="business-plan">
        <div class="container">

            <div class="row">
                <!-- Start Col -->
                <div class="col-lg-6 col-md-12 pl-0 pt-70 pr-5">
                    <div class="business-item-img">
                        <img src="img/business/business-img.png" class="img-fluid" alt="">
                    </div>
                </div>
                <!-- End Col -->
                <!-- Start Col -->
                <div class="col-lg-6 col-md-12 pl-4">
                    <div class="business-item-info">
                        <h3>Crafted For Business, Startup and Agency Websites</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do <br> tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim <br> veniam, quis nostrud exercitation
                            ullamco laboris nisi ut aliquip ex ea <br> commodo consequat. Duis aute irure dolor in
                            reprehenderit in voluptate <br> velit esse cillum dolore eu fugiat nulla pariatur.</p>

                        <a class="btn btn-common" href="#">download</a>
                    </div>
                </div>
                <!-- End Col -->

            </div>
        </div>
    </section>
    <!-- Business Plan Section End -->


    <!-- Footer Section Start -->
    <footer>
        <!-- Footer Area Start -->
        <section id="footer-Content">
            <div class="container">
                <!-- Start Row -->
                <div class="row">

                    <!-- Start Col -->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-mb-12">

                        <div class="footer-logo">
                            <img src="img/footer-logo.png" alt="">
                        </div>
                    </div>
                    <!-- End Col -->
                    <!-- Start Col -->
                    <div class="col-lg-2 col-md-6 col-sm-6 col-xs-6 col-mb-12">
                        <div class="widget">
                            <h3 class="block-title">Company</h3>
                            <ul class="menu">
                                <li><a href="#"> - About Us</a></li>
                                <li><a href="#">- Career</a></li>
                                <li><a href="#">- Blog</a></li>
                                <li><a href="#">- Press</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Col -->
                    <!-- Start Col -->
                    <div class="col-lg-2 col-md-6 col-sm-6 col-xs-6 col-mb-12">
                        <div class="widget">
                            <h3 class="block-title">Product</h3>
                            <ul class="menu">
                                <li><a href="#"> - Customer Service</a></li>
                                <li><a href="#">- Enterprise</a></li>
                                <li><a href="#">- Price</a></li>
                                <li><a href="#">- Scurity</a></li>
                                <li><a href="#">- Why SLICK?</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Col -->
                    <!-- Start Col -->
                    <div class="col-lg-2 col-md-6 col-sm-6 col-xs-6 col-mb-12">
                        <div class="widget">
                            <h3 class="block-title">Download App</h3>
                            <ul class="menu">
                                <li><a href="#"> - Android App</a></li>
                                <li><a href="#">- IOS App</a></li>
                                <li><a href="#">- Windows App</a></li>
                                <li><a href="#">- Play Store</a></li>
                                <li><a href="#">- IOS Store</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Col -->
                    <!-- Start Col -->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-mb-12">
                        <div class="widget">
                            <h3 class="block-title">Subscribe Now</h3>
                            <p>Appropriately implement calysts for change visa wireless catalysts for change. </p>
                            <div class="subscribe-area">
                                <input type="email" class="form-control" placeholder="Enter Email">
                                <span><i class="lni-chevron-right"></i></span>
                            </div>
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

</body>


</html>