<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('admin') }}/css/styles.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.ckeditor.com/ckeditor5/42.0.0/ckeditor5.css" />
</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <!-- Sidebar Start -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div>
                <div class="brand-logo d-flex align-items-center justify-content-between">
                    <a href="./index.html" class="text-nowrap logo-img">
                        <img src="{{ asset('admin') }}/images/logos/dark-logo.svg" width="180" alt="" />
                    </a>
                    <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                        <i class="ti ti-x fs-8"></i>
                    </div>
                </div>
                {{-- NAV --}}
                <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
                    <ul id="sidebarnav">
                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                            <span class="hide-menu">Home</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="/admin/home" aria-expanded="false">
                                <span>
                                    <i class="ti ti-layout-dashboard"></i>
                                </span>
                                <span class="hide-menu">Thống Kê</span>
                            </a>
                        </li>
                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                            <span class="hide-menu">Quản Lý</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="index.html" aria-expanded="false">
                                <span>
                                    <i class="fa fa-users"></i>
                                </span>
                                <span class="hide-menu">Người Dùng</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link link-parent" href="#" aria-expanded="false">
                                <span>
                                    <i class="fa-solid fa-blog"></i>
                                </span>
                                <span class="hide-menu">Bài Viết</span>
                            </a>
                            <ul class="list-group list-group-flush nested-list ms-4">
                                <li class="list-group-item"><a class="text-reset"
                                        href="{{ route('admin.category.index') }}">Thể Loại</a></li>
                                <li class="list-group-item"><a class="text-reset"
                                        href="{{ route('admin.post.index') }}">Danh sách bài viết</a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link link-parent" href="#" aria-expanded="false">
                                <span>
                                    <i class="fa-solid fa-list"></i>
                                </span>
                                <span class="hide-menu">Khóa Học</span>
                            </a>
                            <ul class="list-group list-group-flush nested-list ms-4">
                                <li class="list-group-item"><a class="text-reset" href="#">Danh mục</a></li>
                                <li class="list-group-item"><a class="text-reset" href="#">Danh sách bài viết</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!--  Sidebar End -->
        <!--  Main wrapper -->
        <div class="body-wrapper">
            <!--  Header Start -->
            <header class="app-header">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <ul class="navbar-nav">
                        <li class="nav-item d-block d-xl-none">
                            <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse"
                                href="javascript:void(0)">
                                <i class="ti ti-menu-2"></i>
                            </a>
                        </li>
                    </ul>
                    <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
                        <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
                            <li class="nav-item dropdown">
                                <a class="nav-link nav-icon-hover" href="#" id="drop2"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="{{ asset('admin') }}/images/profile/user-1.jpg" alt=""
                                        width="35" height="35" class="rounded-circle">
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up"
                                    aria-labelledby="drop2">
                                    <div class="message-body">
                                        <a href="#" class="d-flex align-items-center gap-2 dropdown-item">
                                            <i class="ti ti-user fs-6"></i>
                                            <p class="mb-0 fs-3">My Profile</p>
                                        </a>
                                        <a href="#" class="d-flex align-items-center gap-2 dropdown-item">
                                            <i class="ti ti-mail fs-6"></i>
                                            <p class="mb-0 fs-3">My Account</p>
                                        </a>
                                        <a href="#" class="d-flex align-items-center gap-2 dropdown-item">
                                            <i class="ti ti-list-check fs-6"></i>
                                            <p class="mb-0 fs-3">My Task</p>
                                        </a>
                                        <a href="./authentication-login.html"
                                            class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <!--  Header End -->
            @yield('content')
        </div>
    </div>
    <script src="{{ asset('admin') }}/libs/jquery/dist/jquery.min.js"></script>
    <script src="{{ asset('admin') }}/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    {{-- <script src="{{ asset('admin') }}/js/sidebarmenu.js"></script> --}}
    <script src="{{ asset('admin') }}/js/app.min.js"></script>
    <script src="{{ asset('admin') }}/libs/apexcharts/dist/apexcharts.min.js"></script>
    <script src="{{ asset('admin') }}/libs/simplebar/dist/simplebar.js"></script>
    <script src="{{ asset('admin') }}/js/dashboard.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $(document).ready(function() {
            $('.link-parent').click(function(e) {
                e.preventDefault();
                $(this).next('.nested-list').slideToggle();
            });
        });
    </script>
    @if (session('ok'))
        <script>
            Swal.fire({
                title: "Thành Công",
                text: "{{ session('ok') }}",
                icon: "success"
            });
        </script>
    @elseif (session('no'))
        <script>
            Swal.fire({
                icon: "error",
                title: "Thất Bại!",
                text: "{{ session('no') }}",
            });
        </script>
    @endif
</body>

</html>
