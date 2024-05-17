<?php use App\Http\Controllers\frontend\HomeController; ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css') }}">
    <script src="{{ asset('jquery/jquery.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body>
    <header class="section_hearder bg-lightblue py-2">
        <div class="container ">
            <div class="row">
                <div class="col-md-3">
                    <a href="">
                        <img src="{{ asset('images/logo_sach.png') }}" alt="" style="height: 100px; width: 175px;
                        border-radius: 5px">
                    </a>
                </div>
                <!-- ------------------------------------------------------------------------------------------------------------------------------------ -->

                <!-- ------------------------------------------------------------------------------------------------------------------------------------ -->
                <!--  -->
                <!-- <div class="col-xl-1 col-lg-1 col-md-1 hidden-sm d-block d-sm-none d-md-none d-lg-block d-xl-block"></div> -->
                <div class="col-md-5 py-2">
                    <div class="serachpc hidden-xs hidden-sm hidden-md d-none d-lg-block d-xl-block">
                        <div class="searchform m-2">
                            <form action="/search" method="get" class="input-group search-bar" role="search">
                                <input type="text" aria-label="Tìm sản phẩm" name="query" value=""
                                    autocomplete="off" placeholder="Tìm kiếm..."
                                    class="search-auto input-group-field auto-search" required=""
                                    style="width: 85%;">
                                <button type="submit" class="visible_index btn icon-fallback-text">
                                    <i class="fa fa-search"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

                <!--  -->
                <div class="col-md-4 py-3 ">
                    <ul class=" nav justify-content-center ">
                        <li class="nav-item ">
                            <a href="#" class="btn border"><i class="fa-regular fa-user"></i></a>
                        </li>
                        <li class="nav-item  position-relative">
                            <a href="#" class="btn border"><i class="fa-regular fa-bell"></i></a>
                            <span
                                class="position-absolute top-0 start-100 translate-middle p-2 bg-danger border border-light rounded-circle">
                            </span>
                        </li>
                        <li class="nav-item ">
                            <a href="#" class="btn border"> <i class="fa-solid fa-bag-shopping"></i></a>
                        </li>
                    </ul>
                </div>
                <!--  -->
                <div class="col-md-6" style="width: 100%;">
                    <nav
                        class="navbar navbar-expand-lg bg-body-tertiary col-12 col-md-12 col-lg-12 header_menu header_menunav">

                        <ul class="navbar-nav ">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Trang chủ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Giới thiệu</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Sản phẩm
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Sách Giáo khoa</a></li>
                                    <li><a class="dropdown-item" href="#">Sách Văn học</a></li>
                                    <li><a class="dropdown-item" href="#">Dụng cụ học tập</a></li>
                                    <li><a class="dropdown-item" href="#">Dụng cụ văn phòng</a></li>
                                    <li><a class="dropdown-item" href="#">Phụ kiện</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="#">Liên hệ</a>
                            </li>
                        </ul>


                        <!-- </div> -->
                    </nav>
                </div>
            </div>
        </div>
        @yield('header')
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="section_footer bg-dark text-white pt-4">
        <div class="container text-center">
            <div class="row align-items-center">
                <div class="col-4 toggle-mn">
                    <h4>Thông tin</h4><br>
                    <a class="ft" href="#">Trang chủ</a><br>
                    <a class="ft" href="#">Giới thiệu</a><br>
                    <a class="ft" href="#">Sản phẩm</a><br>
                    <a class="ft" href="#">Liên hệ</a><br>
                </div>
                <div class="col-md">
                    <h4>Giới thiệu</h4><br>
                    <a class="ft" href="#">Trang chủ</a><br>
                    <a class="ft" href="#">Giới thiệu</a><br>
                    <a class="ft" href="#">Sản phẩm</a><br>
                    <a class="ft" href="#">Liên hệ</a><br>
                </div>
                <div class="col-md">
                    <h4>Thông tin khách hàng</h4><br>
                    <a class="ft" href="#">Trang chủ</a><br>
                    <a class="ft" href="#">Giới thiệu</a><br>
                    <a class="ft" href="#">Sản phẩm</a><br>
                    <a class="ft" href="#">Liên hệ</a><br>
                </div>
                <div class="col-md-3">
                    <h4>Thông tin</h4><br>
                    <a class="ft" href="#">Trang chủ</a><br>
                    <a class="ft" href="#">Giới thiệu</a><br>
                    <a class="ft" href="#">Sản phẩm</a><br>
                    <a class="ft" href="#">Liên hệ</a><br>
                </div>
            </div>
            <hr class="m-0 p-0">
            <div class="row py-2">
                <div class="col-12 text-center">
                    Bản quyền bởi Nguyễn Thị Thu Thảo_MSSV:2122110360
                </div>
            </div>
        </div>
        @yield('footer')
    </footer>

    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/style.js') }}"></script>
</body>

</html>
