<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('/assets/dashboard/css/core.css') }}">

    <link rel="stylesheet" href="{{ asset('/assets/dashboard/css/bootstrap-datepicker.min.css') }}">

    <link rel="stylesheet" href="{{ asset('/assets/dashboard/fonts/feather-font/css/iconfont.css') }}">

    <link rel="stylesheet" href="{{ asset('/assets/dashboard/css/style.css') }}">

    <link rel="shortcut icon" href="{{ asset('/assets/images/favicon.png') }}" />

    <!-- Scripts -->
    @vite('resources/js/dash.js')
</head>
@php $routeName = Route::currentRouteName(); @endphp

<body >

    <div class="main-wrapper">
    <nav class="sidebar">
            <div class="sidebar-header">
                <a href="../index.html" class="sidebar-brand">
                    <img src="../images/logo.png" alt="logo" class="w-75">
                </a>
                <div class="sidebar-toggler not-active">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            <div class="sidebar-body">
                <ul class="nav">
                    <li class="nav-item active">
                        <a href="dashboard.html" class="nav-link">
                            <i class="link-icon" data-feather="box"></i>
                            <span class="link-title">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="slider.html" class="nav-link">
                            <i class="link-icon" data-feather="sliders"></i>
                            <span class="link-title">Sliders Section</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#category" role="button"
                            aria-expanded="false" aria-controls="category">
                            <i class="link-icon" data-feather="list"></i>
                            <span class="link-title">Category Section</span>
                            <i class="link-arrow" data-feather="chevron-down"></i>
                        </a>
                        <div class="collapse" id="category">
                            <ul class="nav sub-menu">
                                <li class="nav-item">
                                    <a href="main-category.html" class="nav-link">Main Category</a>
                                </li>
                                <li class="nav-item">
                                    <a href="parent-category.html" class="nav-link">Parent Category</a>
                                </li>
                                <li class="nav-item">
                                    <a href="child-category.html" class="nav-link">Child Category</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="about-sec.html" class="nav-link">
                            <i class="link-icon" data-feather="file"></i>
                            <span class="link-title">About Section</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="title-section.html" class="nav-link">
                            <i class="link-icon" data-feather="type"></i>
                            <span class="link-title">Content Management</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="services-list.html" class="nav-link">
                            <i class="link-icon" data-feather="columns"></i>
                            <span class="link-title">Sevices Section</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="gallery.html" class="nav-link">
                            <i class="link-icon" data-feather="image"></i>
                            <span class="link-title">Gallery Section</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#events" role="button" aria-expanded="false"
                            aria-controls="events">
                            <i class="link-icon" data-feather="user"></i>
                            <span class="link-title">Package Management</span>
                            <i class="link-arrow" data-feather="chevron-down"></i>
                        </a>
                        <div class="collapse" id="events">
                            <ul class="nav sub-menu">
                                <li class="nav-item">
                                    <a href="events.html" class="nav-link">All Package Lists</a>
                                </li>
                                <li class="nav-item">
                                    <a href="addevents.html" class="nav-link">Add Package</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="testimonial.html" class="nav-link">
                            <i class="link-icon" data-feather="pocket"></i>
                            <span class="link-title">Testimonial Section</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="appointment.html" class="nav-link">
                            <i class="link-icon" data-feather="table"></i>
                            <span class="link-title">Booking Section</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="coupon.html" class="nav-link">
                            <i class="link-icon" data-feather="gift"></i>
                            <span class="link-title">Coupons</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#users" role="button" aria-expanded="false"
                            aria-controls="users">
                            <i class="link-icon" data-feather="user"></i>
                            <span class="link-title">User Management</span>
                            <i class="link-arrow" data-feather="chevron-down"></i>
                        </a>
                        <div class="collapse" id="users">
                            <ul class="nav sub-menu">
                                <li class="nav-item">
                                    <a href="user-manage.html" class="nav-link">All User Lists</a>
                                </li>
                                <li class="nav-item">
                                    <a href="adduser.html" class="nav-link">Add User</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#setting" role="button"
                            aria-expanded="false" aria-controls="setting">
                            <i class="link-icon" data-feather="settings"></i>
                            <span class="link-title">Settings</span>
                            <i class="link-arrow" data-feather="chevron-down"></i>
                        </a>
                        <div class="collapse" id="setting">
                            <ul class="nav sub-menu">
                                <li class="nav-item">
                                    <a href="company-profile.html" class="nav-link">Company Profile</a>
                                </li>
                                <li class="nav-item">
                                    <a href="role-manange-list.html" class="nav-link">Role Management</a>
                                </li>
                                <li class="nav-item">
                                    <a href="configuration.html" class="nav-link">Configuration</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        
        
    </div>

    <script data-cfasync="false" src="{{ asset('/assets/dashboard/js/email-decode.min.js') }}"></script>
    <script src="{{ asset('/assets/dashboard/js/core.js') }}"></script>

    <script src="{{ asset('/assets/dashboard/js/Chart.min.js') }}"></script>
    <script src="{{ asset('/assets/dashboard/js/jquery.flot.js') }}"></script>
    <script src="{{ asset('/assets/dashboard/js/jquery.flot.resize.js') }}"></script>
    <script src="{{ asset('/assets/dashboard/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('/assets/dashboard/js/apexcharts.min.js') }}"></script>

    <script src="{{ asset('/assets/dashboard/js/feather.min.js') }}"></script>
    <script src="{{ asset('/assets/dashboard/js/template.js') }}"></script>

    <script src="{{ asset('/assets/dashboard/js/dashboard-light.js') }}"></script>
    <script src="{{ asset('/assets/dashboard/js/datepicker.js') }}"></script>

    <script defer
        src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015"
        integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ=="
        data-cf-beacon='{"rayId":"8d6e7b0449717451","version":"2024.10.3","r":1,"token":"e2e296138d64407b8469055f5cbf0b42","serverTiming":{"name":{"cfExtPri":true,"cfL4":true,"cfSpeedBrain":true,"cfCacheStatus":true}}}'
        crossorigin="anonymous"></script>
</body>
</html>
