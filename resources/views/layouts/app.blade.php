<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    
    
    <link rel="shortcut icon" href="{{ asset('/assets/images/favicon/favicon.ico') }}" />

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="{{ asset('/assets/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/font-awesome.min.css') }}">
    <!-- Slider Revolution CSS Files -->
    <link rel="stylesheet" href="{{ asset('/assets/css/settings.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/layers.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/navigation.css') }}">
    <!-- ARCHIVES CSS -->
    <link href="{{ asset('/assets/css/bootstrap.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/assets/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/aos2.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/slick.css') }}">
    <link href="{{ asset('/assets/css/animate.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/assets/css/lightcase.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/owl.carousel.min.css') }}">
    <link href="{{ asset('/assets/css/menu.css') }}" rel="stylesheet">
    
    <!-- <link rel="stylesheet" href="{{ asset('/assets/css/main-styles.css') }}"> -->
    
    <!-- Scripts -->
    @vite('resources/js/app.js')
</head>
@php $routeName = Route::currentRouteName(); @endphp

<body class="homepage-1 int_white_bg {{ $routeName !== 'welcome' ? 'inner-page' : null }}" data-aos-easing="ease" data-aos-duration="1000" data-aos-delay="170">
    <!-- Wrapper -->
    <div id="wrapper">
        <!-- START SECTION HEADINGS -->
        <!-- Header Container
        ================================================== -->
        <header id="header-container" class="header">
            <!-- Header -->
            <div id="header" class="bottom">
                <div class="container">
                    <!-- Left Side Content -->
                    <div class="left-side">
                        <!-- Logo -->
                        <div id="logo" class="col-lg-2 logo-white">
                            <a href="{{ route('welcome') }}"><img src="{{ asset('/assets/images/logo-heard.png') }}" data-sticky-logo="{{ asset('/assets/images/logo-heard.png') }}" alt=""></a>
                        </div>
                        <!-- Mobile Navigation -->
                        <div class="mmenu-trigger">
                            <button class="hamburger hamburger--collapse" type="button">
                                <span class="hamburger-box">
							<span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                        <!-- Main Navigation -->
                        <nav id="navigation" class="style-1">
                            <ul id="responsive">
                                <li><a href="{{ route('welcome') }}" class="{{ $routeName == 'welcome' ? 'current' : null }}">Home</a></li>
                                <li><a href="{{ route('projects') }}" class="{{ str_contains($routeName, 'projects') ? 'current' : null }}">Projects</a></li>
                                <li><a href="{{ route('services') }}" class="{{ str_contains($routeName, 'services') ? 'current' : null }}">Services</a>
                                    <ul>
                                        @foreach (getServices() as $service)
                                            <li><a href="{{ route('services.show', $service->slug) }}">{{ str_limit($service->name, 20) }}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li><a href="{{ route('about') }}" class="{{ $routeName == 'about' ? 'current' : null }}">About Us</a></li>
                                <li><a href="{{ route('contact') }}" class="{{ $routeName == 'contact' ? 'current' : null }}">Contact</a></li>
                            </ul>
                        </nav>
                        <div class="clearfix"></div>
                        <!-- Main Navigation / End -->
                    </div>
                    <!-- Left Side Content / End -->
                    
                    <!-- Right Side Content -->
                    <div class="right-side">
                        <a href="{{ route('contact') }}" class="btn btn-dark btn-theme-colored btn-xl">Get a Quote</a>
                    </div>

                </div>
            </div>
            <!-- Header / End -->

        </header>
        <div class="clearfix"></div>
        <!-- Header Container / End -->
        
        @yield('content')
        
        
        <!-- START FOOTER -->
        <footer class="first-footer">
            <div class="top-footer bg-white-5">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="netabout">
                                <a href="" class="logo">
                                    <img src="{{ asset('/assets/images/logo.png') }}" alt="netcom">
                                </a>
                                <!-- <p>Experience Inoubliable creates unforgettable moments with exceptional decor and personalized service, turning your vision into cherished memories.</p> -->
                            </div>
                            <div class="contactus">
                                <ul>
                                    <li>
                                        <div class="info">
                                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                                            <p class="in-p">Bradenton, USA</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="info">
                                            <i class="fa fa-phone" aria-hidden="true"></i>
                                            <p class="in-p">+1 941 877-4753</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="info">
                                            <i class="fa fa-envelope" aria-hidden="true"></i>
                                            <p class="in-p ti"><a href="mailto:experienceinoubliable@gmail.com">experienceinoubliable@gmail.com</a></p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="navigation">
                                <h3>Navigation</h3>
                                <div class="nav-footer">
                                    <ul>
                                        <li><a href="{{ route('welcome') }}">Home</a></li>
                                        <li><a href="{{ route('projects') }}">Projects</a></li>
                                        <li><a href="{{ route('services') }}">Services</a>
                                    </ul>
                                    <ul class="nav-right">
                                        <li><a href="{{ route('about') }}">About</a></li>
                                        <li><a href="{{ route('contact') }}">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="newsletters">
                                <h3>Newsletters</h3>
                                <p>Sign Up for Our Newsletter to get Latest Updates and Offers. Subscribe to receive news in your inbox.</p>
                            </div>
                            <form class="bloq-email mailchimp form-inline" method="post">
                                <label for="subscribeEmail" class="error"></label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Enter Your Email" aria-label="Enter Your Email" aria-describedby="button-addon2">
                                    <button class="btn btn-primary" type="button" id="button-addon2">Button</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="second-footer bg-white-3">
                <div class="container">
                    <p>{{ now()->format('Y') }} © Copyright - All Rights Reserved.</p>
                    <p>Made With <i class="fa fa-heart" aria-hidden="true"></i> By <a href="https://mazanbel.com/" target="_blanc">Mazanbel</a></p>
                </div>
            </div>
        </footer>

        
        <a data-scroll href="#wrapper" class="go-up"><i class="fa fa-angle-double-up" aria-hidden="true"></i></a>
        <!-- END FOOTER -->

        <!-- START PRELOADER -->
        <div id="preloader">
            <div id="status">
                <div class="status-mes"></div>
            </div>
        </div>
        <!-- END PRELOADER -->

        <!-- ARCHIVES JS -->
        <script src="{{ asset('/assets/js/jquery.min.js') }}"></script>
        <script src="{{ asset('/assets/js/tether.min.js') }}"></script>
        <script src="{{ asset('/assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('/assets/js/mmenu.min.js') }}"></script>
        <script src="{{ asset('/assets/js/mmenu.js') }}"></script>
        <script src="{{ asset('/assets/js/aos.js') }}"></script>
        <script src="{{ asset('/assets/js/aos2.js') }}"></script>
        <script src="{{ asset('/assets/js/slick.min.js') }}"></script>
        <script src="{{ asset('/assets/js/slick.js') }}"></script>
        <script src="{{ asset('/assets/js/jquery.easing.min.js') }}"></script>
        <script src="{{ asset('/assets/js/smooth-scroll.min.js') }}"></script>
        <script src="{{ asset('/assets/js/typed.min.js') }}"></script>
        <script src="{{ asset('/assets/js/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('/assets/js/lightcase.js') }}"></script>
        <script src="{{ asset('/assets/js/owl.carousel.js') }}"></script>
        <script src="{{ asset('/assets/js/jquery.waypoints.min.js') }}"></script>
        
        
        <!-- ARCHIVES JS -->
        <script src="{{ asset('/assets/js/jquery.counterup.min.js') }}"></script>
        <script src="{{ asset('/assets/js/inner-script.js') }}"></script>
        
        <script>
            $('.home5-right-slider').owlCarousel({
                loop: true,
                margin: 30,
                dots: false,
                nav: true,
                rtl: false,
                autoplayHoverPause: false,
                autoplay: false,
                singleItem: true,
                smartSpeed: 1200,
                navText: ["<i class='fa fa-long-arrow-left'></i>", "<i class='fa fa-long-arrow-right'></i>"],
                responsive: {
                    0: {
                        items: 1,
                        center: false
                    },
                    480: {
                        items: 1,
                        center: false
                    },
                    520: {
                        items: 2,
                        center: false
                    },
                    600: {
                        items: 2,
                        center: false
                    },
                    768: {
                        items: 2
                    },
                    992: {
                        items: 3
                    },
                    1200: {
                        items: 5
                    },
                    1366: {
                        items: 5
                    },
                    1400: {
                        items: 5
                    }
                }
            });

        </script>
        
        <script>
            $(window).on('scroll load', function() {
                $("#header.cloned #logo img").attr("src", $('#header #logo img').attr('data-sticky-logo'));
            });

        </script>
        
        <script>
        var typed = new Typed('.typed', {
            strings: ["Wedding ^4000", "Wedding ^4000", "Baby Shower ^4000", "Graduation ^4000", "Birthday Party ^4000"],
            smartBackspace: false,
            loop: true,
            showCursor: true,
            cursorChar: "|",
            typeSpeed: 50,
            backSpeed: 30,
            startDelay: 800
        });

    </script>

        <!-- Slider Revolution scripts -->
        <script src="{{ asset('/assets/js/jquery.themepunch.tools.min.js') }}"></script>
        <script src="{{ asset('/assets/js/jquery.themepunch.revolution.min.js') }}"></script>
        <script src="{{ asset('/assets/js/extensions/revolution.extension.actions.min.js') }}"></script>
        <script src="{{ asset('/assets/js/extensions/revolution.extension.carousel.min.js') }}"></script>
        <script src="{{ asset('/assets/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
        <script src="{{ asset('/assets/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
        <script src="{{ asset('/assets/js/extensions/revolution.extension.migration.min.js') }}"></script>
        <script src="{{ asset('/assets/js/extensions/revolution.extension.navigation.min.js') }}"></script>
        <script src="{{ asset('/assets/js/extensions/revolution.extension.parallax.min.js') }}"></script>
        <script src="{{ asset('/assets/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
        <script src="{{ asset('/assets/js/extensions/revolution.extension.video.min.js') }}"></script>

        <!-- MAIN JS -->
        <script src="{{ asset('/assets/js/script.js') }}"></script>

    </div>
    <!-- Wrapper / End -->
</body>
</html>
