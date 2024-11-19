<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'LBB') }} | {{ MetaTag::get('title') }}</title>

    {!! MetaTag::tag('description') !!}
    {!! MetaTag::tag('/favicon/apple-touch-icon.png') !!}

    {!! MetaTag::tag('site_name', config('app.name', 'Experience inoubliable')) !!}
    {!! MetaTag::tag('url', Request::url()) !!}

    {!! MetaTag::openGraph() !!}

    {!! MetaTag::twitterCard() !!}

    {{--Set default share picture after custom section pictures--}}
    {!! MetaTag::tag('image', MetaTag::get('image') || asset('/favicon/apple-touch-icon.png')) !!}


    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/favicon/favicon-16x16.png') }}">

    <link rel="manifest" href="{{ asset('/favicons/manifest.json') }}">

    <meta name="theme-color" content="#ffffff">
    <script src="assets/js/config.js"></script>
    <script src="vendors/simplebar/simplebar.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <!-- @toastr_css -->

    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:300,400,500,600,700,800,900&amp;display=swap"
        rel="stylesheet">
    <link href="{{ asset('assets/dashboard/css/simplebar.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/dashboard/css/theme-rtl.min.css') }}" rel="stylesheet" id="style-rtl">
    <link href="{{ asset('assets/dashboard/css/theme.min.css') }}" rel="stylesheet" id="style-default">
    <link href="{{ asset('assets/dashboard/css/user-rtl.min.css') }}" rel="stylesheet" id="user-style-rtl">
    <link href="{{ asset('assets/dashboard/css/user.min.css') }}" rel="stylesheet" id="user-style-default">

    <script>
    var isRTL = JSON.parse(localStorage.getItem('isRTL'));
    if (isRTL) {
        var linkDefault = document.getElementById('style-default');
        var userLinkDefault = document.getElementById('user-style-default');
        linkDefault.setAttribute('disabled', true);
        userLinkDefault.setAttribute('disabled', true);
        document.querySelector('html').setAttribute('dir', 'rtl');
    } else {
        var linkRTL = document.getElementById('style-rtl');
        var userLinkRTL = document.getElementById('user-style-rtl');
        linkRTL.setAttribute('disabled', true);
        userLinkRTL.setAttribute('disabled', true);
    }
    </script>


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel='stylesheet' id='theme-font-google-fonts-css' href='//fonts.googleapis.com/css?family=Oxygen%3A400normal%2C700normal%7CKaushan+Script%3A400normal&#038;ver=6.0' type='text/css' media='all' />
    <link rel="dns-prefetch" href="//fonts.gstatic.com" />
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        .mr-3 {
            margin-right: 1rem !important;
        }
    
        .ml-3 {
            margin-left: 1rem !important;
        }
        
        
        .navbar-brand{
            font-family: 'Kaushan Script' !important;
            font-size: 1.267em;
        }
    </style>
    
    @vite('resources/js/dash.js')
</head>

@php $route = \Route::currentRouteName() @endphp

<body>
    <main class="main" id="top">
        <div class="container" data-layout="container">
            <script>
            var isFluid = JSON.parse(localStorage.getItem('isFluid'));
            if (isFluid) {
                var container = document.querySelector('[data-layout]');
                container.classList.remove('container');
                container.classList.add('container-fluid');
            }
            </script>

            <nav class="navbar navbar-light navbar-vertical navbar-expand-xl" style="display: none;">
                <script>
                    var navbarStyle = localStorage.getItem("navbarStyle");
                    if (navbarStyle && navbarStyle !== 'transparent') {
                        document.querySelector('.navbar-vertical').classList.add(`navbar-${navbarStyle}`);
                    }
                </script>
                <div class="d-flex align-items-center">
                    <div class="toggle-icon-wrapper">
                        <button class="btn navbar-toggler-humburger-icon navbar-vertical-toggle"
                                data-bs-toggle="tooltip" data-bs-placement="left" title="Toggle Navigation">
                            <span class="navbar-toggle-icon">
                                <span class="toggle-line"></span>
                            </span>
                        </button>
                    </div>
                    <a class="navbar-brand" href="{{ route('welcome') }}">
                        Experience inoubliable
                    </a>
                </div>
            
                <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
                    <div class="navbar-vertical-content scrollbar">
                        <ul class="navbar-nav flex-column mb-3" id="navbarVerticalNav">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('dashboard') }}">
                                    <div class="d-flex align-items-center">
                                        <span class="nav-link-icon">
                                            <span class="fas fa-chart-pie"></span>
                                        </span>
                                        <span class="nav-link-text ps-1">Dashboard</span>
                                    </div>
                                </a>
                            </li>
            
                            <li class="nav-item">
                                <!-- label -->
                                <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                                    <div class="col-auto navbar-vertical-label">App</div>
                                    <div class="col ps-0">
                                        <hr class="mb-0 navbar-vertical-divider" />
                                    </div>
                                </div>
            
                                <a class="nav-link dropdown-indicator" href="#categories" role="button" data-bs-toggle="collapse" aria-expanded="{{ str_contains($route, 'categories') }}" aria-controls="categories">
                                    <div class="d-flex align-items-center">
                                        <span class="nav-link-icon">
                                            <span class="fas fa-braille"></span>
                                        </span>
                                        <span class="nav-link-text ps-1">Categories</span>
                                    </div>
                                </a>
                                <ul class="nav collapse {{ str_contains($route, 'categories') ? 'show' : null }}" id="categories">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('dashboard.categories') }}">
                                            <div class="d-flex align-items-center">
                                                <span class="nav-link-text ps-1">Category list</span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
            
                                <a class="nav-link dropdown-indicator" href="#projects" role="button" data-bs-toggle="collapse" aria-expanded="{{ str_contains($route, 'projects') }}" aria-controls="projects">
                                    <div class="d-flex align-items-center">
                                        <span class="nav-link-icon">
                                            <!-- <span class="fas fa-motorcycle"></span> -->
                                            <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                        </span>
                                        <span class="nav-link-text ps-1">Projects</span>
                                    </div>
                                </a>
                                <ul class="nav collapse {{ str_contains($route, 'projects') ? 'show' : null }}" id="projects">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('dashboard.projects') }}">
                                            <div class="d-flex align-items-center">
                                                <span class="nav-link-text ps-1">Project list</span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <nav class="navbar navbar-light navbar-glass navbar-top navbar-expand-lg" style="display: none;">
                <button class="btn navbar-toggler-humburger-icon navbar-toggler me-1 me-sm-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarStandard" aria-controls="navbarStandard" aria-expanded="false" aria-label="Toggle Navigation">
                    <span class="navbar-toggle-icon">
                        <span class="toggle-line"></span>
                    </span>
                </button>
                <a class="navbar-brand me-1 me-sm-3" href="index.html">
                    <div class="d-flex align-items-center">
                        <img class="me-2" src="assets/img/icons/spot-illustrations/falcon.png" alt="" width="40" />
                        <span class="font-sans-serif">falcon</span>
                    </div>
                </a>
            </nav>

            <div class="content">
                <nav class="navbar navbar-light navbar-glass navbar-top navbar-expand" style="display: none;">
                    <button class="btn navbar-toggler-humburger-icon navbar-toggler me-1 me-sm-3" type="button"
                        data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse"
                        aria-controls="navbarVerticalCollapse" aria-expanded="false"
                        aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span
                                class="toggle-line"></span></span></button>
                    <a class="navbar-brand me-1 me-sm-3" href="index.html">
                        <div class="d-flex align-items-center"><img class="me-2"
                                src="assets/img/icons/spot-illustrations/falcon.png" alt="" width="40" /><span
                                class="font-sans-serif">falcon</span></div>
                    </a>
                    <ul class="navbar-nav align-items-center d-none d-lg-block">
                        <li class="nav-item">
                            <div class="search-box" data-list='{"valueNames":["title"]}'>
                                <form class="position-relative" data-bs-toggle="search" data-bs-display="static"><input
                                        class="form-control search-input fuzzy-search" type="search"
                                        placeholder="Search..." aria-label="Search" />
                                    <span class="fas fa-search search-box-icon"></span>
                                </form>

                                <div class="btn-close-falcon-container position-absolute end-0 top-50 translate-middle shadow-none"
                                    data-bs-dismiss="search">
                                    <button class="btn btn-link btn-close-falcon p-0" aria-label="Close"></button>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <ul class="navbar-nav navbar-nav-icons ms-auto flex-row align-items-center">
                        <li class="nav-item dropdown">
                            <a class="nav-link notification-indicator notification-indicator-primary px-0 fa-icon-wait"
                                id="navbarDropdownNotification" role="button" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false"
                                data-hide-on-body-scroll="data-hide-on-body-scroll"><span class="fas fa-bell"
                                    data-fa-transform="shrink-6" style="font-size: 33px;"></span></a>
                            <div class="dropdown-menu dropdown-caret dropdown-caret dropdown-menu-end dropdown-menu-card dropdown-menu-notification dropdown-caret-bg"
                                aria-labelledby="navbarDropdownNotification">
                                <div class="card card-notification shadow-none">
                                    <div class="card-header">
                                        <div class="row justify-content-between align-items-center">
                                            <div class="col-auto">
                                                <h6 class="card-header-title mb-0">Notifications</h6>
                                            </div>
                                            <div class="col-auto ps-0 ps-sm-3"><a class="card-link fw-normal"
                                                    href="#">Mark all as read</a></div>
                                        </div>
                                    </div>
                                    <div class="scrollbar-overlay" style="max-height:19rem">
                                        <div class="list-group list-group-flush fw-normal fs--1">
                                            <div class="list-group-title border-bottom">NEW</div>
                                            <div class="list-group-item">
                                                <a class="notification notification-flush notification-unread"
                                                    href="#!">
                                                    <div class="notification-avatar">
                                                        <div class="avatar avatar-2xl me-3">
                                                            <img class="rounded-circle"
                                                                src="{{ asset('/assets/dashboard/images/3-thumb.png') }}"
                                                                alt="" />
                                                        </div>
                                                    </div>
                                                    <div class="notification-body">
                                                        <p class="mb-1"><strong>Emma Watson</strong> replied to your
                                                            comment : "Hello world 😍"</p>
                                                        <span class="notification-time"><span class="me-2" role="img"
                                                                aria-label="Emoji">💬</span>Just now</span>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer text-center border-top"><a class="card-link d-block"
                                            href="app/social/notifications.html">View all</a></div>
                                </div>
                            </div>
                        </li>

                        <li class="nav-item dropdown"><a class="nav-link pe-0 ps-2" id="navbarDropdownUser"
                                role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <div class="avatar avatar-xl">
                                    <img class="rounded-circle"
                                        src="{{ asset('/assets/dashboard/images/3-thumb.png') }}" alt="" />
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-caret dropdown-caret dropdown-menu-end py-0"
                                aria-labelledby="navbarDropdownUser">
                                <div class="bg-white dark__bg-1000 rounded-2 py-2">
                                    <a class="dropdown-item" href="">Profile &amp; account</a>
                                    <a class="dropdown-item" href="#!">Feedback</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="">Settings</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a> 
                                </div>
                                
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    </ul>
                </nav>

                <script>
                var navbarPosition = localStorage.getItem('navbarPosition');
                var navbarVertical = document.querySelector('.navbar-vertical');
                var navbarTopVertical = document.querySelector('.content .navbar-top');
                var navbarTop = document.querySelector('[data-layout] .navbar-top:not([data-double-top-nav');
                var navbarDoubleTop = document.querySelector('[data-double-top-nav]');
                var navbarTopCombo = document.querySelector('.content [data-navbar-top="combo"]');

                if (localStorage.getItem('navbarPosition') === 'double-top') {
                    document.documentElement.classList.toggle('double-top-nav-layout');
                }

                navbarVertical.removeAttribute('style');
                navbarTopVertical.removeAttribute('style');
                navbarTop.remove(navbarTop);
                navbarDoubleTop.remove(navbarDoubleTop);
                navbarTopCombo.remove(navbarTopCombo);
                </script>

                @yield('content')

                <footer class="footer">
                    <div class="row g-0 justify-content-between fs--1 mt-4 mb-3">
                        <div class="col-12 col-sm-auto text-center">
                            <p class="mb-0 text-600"><a href="">Experience inoubliable</a> <span
                                    class="d-none d-sm-inline-block">| </span><br class="d-sm-none" /> {{ date('Y') }}
                                &copy;
                            </p>
                        </div>
                        <div class="col-12 col-sm-auto text-center">
                            <p class="mb-0 text-600">v1.0</p>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </main>

    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->
    <script src="{{ asset('assets/dashboard/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/dashboard/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/dashboard/js/anchor.min.js') }}"></script>
    <script src="{{ asset('assets/dashboard/js/is.min.js') }}"></script>
    <script src="{{ asset('assets/dashboard/js/echarts.min.js') }}"></script>
    <script src="{{ asset('assets/dashboard/fontawesome/all.min.js') }}"></script>
    <script src="{{ asset('assets/dashboard/js/lodash.min.js') }}"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="{{ asset('assets/dashboard/js/list.min.js') }}"></script>
    <script src="{{ asset('assets/dashboard/js/theme.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <!-- @jquery
    @toastr_js
    @toastr_render -->
</body>

</html>