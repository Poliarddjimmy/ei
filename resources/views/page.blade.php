<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Travelin Responsive HTML Admin Dashboard Template based on Bootstrap 5">
    <meta name="author" content="Travelin">

    <title>Travelin - Travel Tour Booking HTML Templates</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <!-- End fonts -->

    <!-- core:css -->
    <link rel="stylesheet" href="assets/vendors/core/core.css">
    <!-- endinject -->

    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
    <!-- End plugin css for this page -->

    <!-- inject:css -->
    <link rel="stylesheet" href="assets/fonts/feather-font/css/iconfont.css">
    <!-- endinject -->

    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->

    <link rel="shortcut icon" href="../images/favicon.png" />
</head>

<body>
    <div class="main-wrapper">

        <!-- sidebar starts -->
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
                    <li class="nav-item">
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

                    <li class="nav-item active">
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
                            <span class="link-title">Events Management</span>
                            <i class="link-arrow" data-feather="chevron-down"></i>
                        </a>
                        <div class="collapse" id="events">
                            <ul class="nav sub-menu">
                                <li class="nav-item">
                                    <a href="events.html" class="nav-link">All Events Lists</a>
                                </li>
                                <li class="nav-item">
                                    <a href="addevents.html" class="nav-link">Add Events</a>
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
        <!-- sidebar Ends -->

        <div class="page-wrapper">

            <!-- navbar Starts -->
            <nav class="navbar">
                <a href="#" class="sidebar-toggler">
                    <i data-feather="menu"></i>
                </a>
                <div class="navbar-content">
                    <form class="search-form w-25">
                        <div class="input-group">
                            <div class="input-group-text">
                                <i data-feather="search"></i>
                            </div>
                            <input type="text" class="form-control" id="navbarForm" placeholder="Search here...">
                        </div>
                    </form>
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="notificationDropdown" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i data-feather="bell"></i>
                                <div class="indicator">
                                    <div class="circle"></div>
                                </div>
                            </a>
                            <div class="dropdown-menu p-0" aria-labelledby="notificationDropdown">
                                <div class="px-3 py-2 d-flex align-items-center justify-content-between border-bottom">
                                    <p>6 New Notifications</p>
                                    <a class="text-muted">Clear all</a>
                                </div>
                                <div class="p-1">
                                    <a class="dropdown-item d-flex align-items-center py-2">
                                        <div
                                            class="wd-30 ht-30 d-flex align-items-center justify-content-center bg-primary rounded-circle me-3">
                                            <i class="icon-sm text-white" data-feather="gift"></i>
                                        </div>
                                        <div class="flex-grow-1 me-2">
                                            <p>New Order Recieved</p>
                                            <p class="tx-12 text-muted">30 min ago</p>
                                        </div>
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center py-2">
                                        <div
                                            class="wd-30 ht-30 d-flex align-items-center justify-content-center bg-primary rounded-circle me-3">
                                            <i class="icon-sm text-white" data-feather="alert-circle"></i>
                                        </div>
                                        <div class="flex-grow-1 me-2">
                                            <p>Server Limit Reached!</p>
                                            <p class="tx-12 text-muted">1 hrs ago</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="px-3 py-2 d-flex align-items-center justify-content-center border-top">
                                    <a>View all</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="wd-30 ht-30 rounded-circle" src="../images/reviewer/1.jpg" alt="profile">
                            </a>
                            <div class="dropdown-menu p-0" aria-labelledby="profileDropdown">
                                <div class="d-flex flex-column align-items-center border-bottom px-5 py-3">
                                    <div class="mb-3">
                                        <img class="wd-80 ht-80 rounded-circle" src="../images/reviewer/1.jpg" alt="">
                                    </div>
                                    <div class="text-center">
                                        <p class="tx-16 fw-bolder">Nelson Kelly Burton</p>
                                        <p class="tx-12 text-muted"><a href="/cdn-cgi/l/email-protection"
                                                class="__cf_email__"
                                                data-cfemail="4d2328213e2223230d2a202c2421632e2220">[email&#160;protected]</a>
                                        </p>
                                    </div>
                                </div>
                                <ul class="list-unstyled p-1">
                                    <li class="dropdown-item py-2">
                                        <a href="profile.html" class="text-body ms-0">
                                            <i class="me-2 icon-md" data-feather="user"></i>
                                            <span>Profile</span>
                                        </a>
                                    </li>
                                    <li class="dropdown-item py-2">
                                        <a class="text-body ms-0">
                                            <i class="me-2 icon-md" data-feather="edit"></i>
                                            <span>Edit Profile</span>
                                        </a>
                                    </li>
                                    <li class="dropdown-item py-2">
                                        <a class="text-body ms-0">
                                            <i class="me-2 icon-md" data-feather="repeat"></i>
                                            <span>Switch User</span>
                                        </a>
                                    </li>
                                    <li class="dropdown-item py-2">
                                        <a class="text-body ms-0">
                                            <i class="me-2 icon-md" data-feather="log-out"></i>
                                            <span>Log Out</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- navbar Ends -->

            <!-- Page Content Starts -->
            <div class="page-content">

                <nav class="page-breadcrumb d-flex align-items-center justify-content-between">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="dashboard.html">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="popup-ads.html">Category section</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Main Category</li>
                    </ol>
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addslider"><i
                            class="link-icon" data-feather="plus"></i> Add Main Category</button>
                </nav>

                <div class="search-box p-4 bg-white rounded mb-3 box-shadow">
                    <form class="forms-sample">
                        <div class="row align-items-center">
                            <div class="col-lg-3">
                                <h5>Main Category Lists</h5>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <input type="text" placeholder="Search by category title" class="form-control">
                            </div>
                            <div class="col-lg-3 col-md-4">
                                <select class="form-select form-select-lg">
                                    <option selected>Category</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="col-lg-2 col-md-4">
                                <select class="form-select form-select-lg">
                                    <option selected>Show Entries</option>
                                    <option value="1">10</option>
                                    <option value="2">20</option>
                                    <option value="3">30</option>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="row">
                    <div class="col-md-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="dataTableExample" class="table">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Start date</th>
                                                <th class="text-center">Icon</th>
                                                <th>Category</th>
                                                <th>Tags</th>
                                                <th class="text-center">Published</th>
                                                <th class="text-center">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>travel12</td>
                                                <td>2022/04/25</td>
                                                <td class="text-center">
                                                    <i class="link-icon" data-feather="award">
                                                </td>
                                                <td>Top Destination</td>
                                                <td>
                                                    <span class="tags">trip</span>
                                                    <span class="tags">tour</span>
                                                    <span class="tags">journey</span>
                                                    <span class="tags">trending</span>
                                                    <span class="tags">scenary</span>
                                                </td>
                                                <td class="text-center">
                                                    <span class="form-check form-switch"><input type="checkbox"
                                                            class="form-check-input" id="formSwitch1"></span>
                                                </td>
                                                <td class="text-center">
                                                    <ul class="d-flex list-unstyled mb-0">
                                                        <li class="me-2"><a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#addslider"><i class="link-icon"
                                                                    data-feather="edit"></i></a></li>
                                                        <li><a href="#"><i class="link-icon"
                                                                    data-feather="delete"></i></a></li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>travel12</td>
                                                <td>2022/04/25</td>
                                                <td class="text-center">
                                                    <i class="link-icon" data-feather="award">
                                                </td>
                                                <td>Top Destination</td>
                                                <td>
                                                    <span class="tags">trip</span>
                                                    <span class="tags">tour</span>
                                                    <span class="tags">journey</span>
                                                    <span class="tags">trending</span>
                                                    <span class="tags">scenary</span>
                                                </td>
                                                <td class="text-center">
                                                    <span class="form-check form-switch"><input type="checkbox"
                                                            class="form-check-input" id="formSwitch1"></span>
                                                </td>
                                                <td class="text-center">
                                                    <ul class="d-flex list-unstyled mb-0">
                                                        <li class="me-2"><a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#addslider"><i class="link-icon"
                                                                    data-feather="edit"></i></a></li>
                                                        <li><a href="#"><i class="link-icon"
                                                                    data-feather="delete"></i></a></li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>travel12</td>
                                                <td>2022/04/25</td>
                                                <td class="text-center">
                                                    <i class="link-icon" data-feather="award">
                                                </td>
                                                <td>Top Destination</td>
                                                <td>
                                                    <span class="tags">trip</span>
                                                    <span class="tags">tour</span>
                                                    <span class="tags">journey</span>
                                                    <span class="tags">trending</span>
                                                    <span class="tags">scenary</span>
                                                </td>
                                                <td class="text-center">
                                                    <span class="form-check form-switch"><input type="checkbox"
                                                            class="form-check-input" id="formSwitch1"></span>
                                                </td>
                                                <td class="text-center">
                                                    <ul class="d-flex list-unstyled mb-0">
                                                        <li class="me-2"><a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#addslider"><i class="link-icon"
                                                                    data-feather="edit"></i></a></li>
                                                        <li><a href="#"><i class="link-icon"
                                                                    data-feather="delete"></i></a></li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>travel12</td>
                                                <td>2022/04/25</td>
                                                <td class="text-center">
                                                    <i class="link-icon" data-feather="award">
                                                </td>
                                                <td>Top Destination</td>
                                                <td>
                                                    <span class="tags">trip</span>
                                                    <span class="tags">tour</span>
                                                    <span class="tags">journey</span>
                                                    <span class="tags">trending</span>
                                                    <span class="tags">scenary</span>
                                                </td>
                                                <td class="text-center">
                                                    <span class="form-check form-switch"><input type="checkbox"
                                                            class="form-check-input" id="formSwitch1"></span>
                                                </td>
                                                <td class="text-center">
                                                    <ul class="d-flex list-unstyled mb-0">
                                                        <li class="me-2"><a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#addslider"><i class="link-icon"
                                                                    data-feather="edit"></i></a></li>
                                                        <li><a href="#"><i class="link-icon"
                                                                    data-feather="delete"></i></a></li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>travel12</td>
                                                <td>2022/04/25</td>
                                                <td class="text-center">
                                                    <i class="link-icon" data-feather="award">
                                                </td>
                                                <td>Top Destination</td>
                                                <td>
                                                    <span class="tags">trip</span>
                                                    <span class="tags">tour</span>
                                                    <span class="tags">journey</span>
                                                    <span class="tags">trending</span>
                                                    <span class="tags">scenary</span>
                                                </td>
                                                <td class="text-center">
                                                    <span class="form-check form-switch"><input type="checkbox"
                                                            class="form-check-input" id="formSwitch1"></span>
                                                </td>
                                                <td class="text-center">
                                                    <ul class="d-flex list-unstyled mb-0">
                                                        <li class="me-2"><a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#addslider"><i class="link-icon"
                                                                    data-feather="edit"></i></a></li>
                                                        <li><a href="#"><i class="link-icon"
                                                                    data-feather="delete"></i></a></li>
                                                    </ul>
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="dataTables_paginate">
                        <ul class="pagination">
                            <li class="paginate_button page-item">
                                <a href="#" class="page-link">Previous</a>
                            </li>
                            <li class="paginate_button page-item active"><a href="#" class="page-link">1</a></li>
                            <li class="paginate_button page-item"><a href="#" class="page-link">2</a></li>
                            <li class="paginate_button page-item"><a href="#" class="page-link">3</a></li>
                            <li class="paginate_button page-item"><a href="#" class="page-link">Next</a></li>
                        </ul>
                    </div>
                </div>

            </div>
            <!-- Page Content Ends -->

            <!-- footer Starts -->
            <footer
                class="footer d-flex flex-column flex-md-row align-items-center justify-content-between px-4 py-3 border-top small">
                <p class="text-muted mb-1 mb-md-0">Copyright © 2022 <a href="../index.html"
                        target="_blank">Travelin</a>.</p>
                <p class="text-muted">Powered By <i class="mb-1 text-primary ms-1 icon-sm" data-feather="heart"></i>
                    Bizberg Themes</p>
            </footer>
            <!-- footer Ends -->

        </div>
    </div>

    <div class="modal fade" id="addslider" tabindex="-1" aria-labelledby="addslider" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h5 class="modal-title" id="exampleModalLabel">Add Main Category</h5>
                </div>
                <div class="modal-body">
                    <form class="forms-sample">
                        <div class="mb-3">
                            <label for="upload" class="form-label">Upload Category Icon</label>
                            <input class="form-control" type="file" id="upload">
                        </div>
                        <div class="mb-3">
                            <label for="category" class="form-label"> Main Category</label>
                            <input type="text" class="form-control" id="category" autocomplete="off" placeholder="">
                        </div>
                        <div class="mb-3">
                            <label for="tags" class="form-label">Category tags</label>
                            <input name="tags" type="text" class="form-control" id="tags" placeholder="tags"
                                value="New York,Texas,Florida,New Mexico" />
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary"><i class="link-icon" data-feather="plus"></i>
                                Create Category</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- core:js -->
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="assets/vendors/core/core.js"></script>
    <!-- endinject -->

    <!-- Plugin js for this page -->
    <script src="assets/vendors/jquery-tags-input/jquery.tagsinput.min.js"></script>
    <script src="assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <!-- End plugin js for this page -->

    <!-- inject:js -->
    <script src="assets/vendors/feather-icons/feather.min.js"></script>
    <script src="assets/js/template.js"></script>
    <!-- endinject -->

    <!-- Custom js for this page -->
    <script src="assets/js/datepicker.js"></script>
    <script src="assets/js/tags-input.js"></script>
    <!-- End custom js for this page -->

    <script defer
        src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015"
        integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ=="
        data-cf-beacon='{"rayId":"8d9c9fa3182167e6","version":"2024.10.4","r":1,"token":"e2e296138d64407b8469055f5cbf0b42","serverTiming":{"name":{"cfExtPri":true,"cfL4":true,"cfSpeedBrain":true,"cfCacheStatus":true}}}'
        crossorigin="anonymous"></script>
</body>

</html>