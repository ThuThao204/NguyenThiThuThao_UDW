@extends('layouts.site')

@section('content')
<div class="row">
    <nav class="nav-category aside-content nav-menu col-3">
        <ul style="text-align: left; padding-left:5px;">
                <h4 style="text-align: left; padding-left:35px;">DANH MỤC</h4>
            <li class="nav-item relative" style="text-align: left;">
                <a class="nav-link" href="#">
                    <span>Sách tâm lý</span>
                </a>
            </li>
            <li class="nav-item relative">
                <a class="nav-link" href="#" >
                    <span>Sách văn học</span>
                </a>
            </li>
            <li class="nav-item relative">
                <a class="nav-link" href="#" >
                    <span>Sách khoa học </span>
                </a>
            </li>
            <li class="nav-item relative">
                <a class="nav-link" href="#" >
                    <span>Tiểu sử, tự truyện</span>
                </a>
            </li>
            <li class="nav-item relative">
                <a class="nav-link" href="#" >
                    <span>Kinh dị, bí ẩn</span>
                </a>
            </li>
            <li class="nav-item relative">
                <a class="nav-link" href="#" >
                    <span>Khoa học công nghệ</span>
                </a>
            </li>
            <li class="nav-item relative">
                <a class="nav-link" href="#" >
                    <span>Sách ký năng</span>
                </a>
            </li>
        </ul>
    </nav>
    <div class="sp row-g px-2 col-md-9 ">
        <div class="container-sp col-md-3">
            <div class="card" >
            <img id="ca" class="card-img-top" src="{{ asset('images/sach1.jpg') }}" alt="Card image">
                <div class="card-body" style="text-align: left;">
                    <h6 class="card-title" >Mỗi lần vấp ngã là một lần trưởng thành</h6>
                    <a href="#" class="btn btn-primary">Chi tiết</a>
                    <a href="#" class="btn btn-primary">Thêm giỏ hàng</a>
                </div>
            </div>
        </div>
        <div class="container-sp col-md-3">
            <div class="card" >
            <img id="ca" class="card-img-top" src="{{ asset('images/sach2.png') }}" alt="Card image">
                <div class="card-body" style="text-align: left;">
                    <h6 class="card-title" >Truyện Kiều</h6>
                    <a href="#" class="btn btn-primary">Chi tiết</a>
                    <a href="#" class="btn btn-primary">Thêm giỏ hàng</a>
                </div>
            </div>
        </div>
        <div class="container-sp col-md-3">
            <div class="card" >
            <img id="ca" class="card-img-top" src="{{ asset('images/sach3.jpg') }}" alt="Card image">
                <div class="card-body" style="text-align: left;">
                    <h6 class="card-title" >Những tấm lòng cao cả</h6>
                    <a href="#" class="btn btn-primary">Chi tiết</a>
                    <a href="#" class="btn btn-primary">Thêm giỏ hàng</a>
                </div>
            </div>
        </div>
        <div class="container-sp col-md-3">
            <div class="card" >
            <img id="ca" class="card-img-top" src="{{ asset('images/sach1.jpg') }}" alt="Card image">
                <div class="card-body" style="text-align: left;">
                    <h6 class="card-title" >Mỗi lần vấp ngã là một lần trưởng thành</h6>
                    <a href="#" class="btn btn-primary wig">Chi tiết</a>
                    <a href="#" class="btn btn-primary wig">Thêm giỏ hàng</a>
                </div>
            </div>
        </div>
        <div class="container-sp col-md-3">
            <div class="card" >
            <img id="ca" class="card-img-top" src="{{ asset('images/sach2.png') }}" alt="Card image">
                <div class="card-body" style="text-align: left;">
                    <h6 class="card-title" >Truyện Kiều</h6>
                    <a href="#" class="btn btn-primary">Chi tiết</a>
                    <a href="#" class="btn btn-primary">Thêm giỏ hàng</a>
                </div>
            </div>
        </div>
        <div class="container-sp col-md-3">
            <div class="card" >
            <img id="ca" class="card-img-top" src="{{ asset('images/sach3.jpg') }}" alt="Card image">
                <div class="card-body" style="text-align: left;">
                    <h6 class="card-title" >Những tấm lòng cao cả</h6>
                    <a href="#" class="btn btn-primary">Chi tiết</a>
                    <a href="#" class="btn btn-primary">Thêm giỏ hàng</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('title', 'Trang chủ')

@section('header')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endsection
