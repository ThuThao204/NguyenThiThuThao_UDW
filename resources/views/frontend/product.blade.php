@extends('layouts.site')

@section('content')

<div class="sp row-g px-5 ">
        <div class="container-sp col-md-3">
            <div class="card">
                <img id="ca" class="card-img-top" src="{{ asset('images/sach1.jpg') }}" alt="Card image">
                <div class="card-body">
                    <h5 class="card-title">Mỗi lần vấp ngã là một lần trưởng thành</h5>
                    <p class="card-text"></p>
                    <a href="#" class="btn btn-primary">Chi tiết</a>
                    <a href="#" class="btn btn-primary">Thêm giỏ hàng</a>
                </div>
            </div>
        </div>
        <div class="container-sp col-md-3">
            <div class="card"> 
                <img id="ca" class="card-img-top" src="{{ asset('images/sach2.png') }}" alt="Card image">
                <div class="card-body">
                    <h5 class="card-title">Truyện Kiều</h5>
                    <p class="card-text"></p>
                    <a href="#" class="btn btn-primary">Chi tiết</a>
                    <a href="#" class="btn btn-primary">Thêm giỏ hàng</a>
                </div>
            </div>
        </div>
        <div class="container-sp col-md-3">
            <div class="card">
                <img id="ca" class="card-img-top" src="{{ asset('images/sach3.jpg') }}" alt="Card image">
                <div class="card-body">
                    <h5 class="card-title">Những tấm lòng cao cả</h5>
                    <p class="card-text"></p>
                    <a href="#" class="btn btn-primary">Chi tiết</a>
                    <a href="#" class="btn btn-primary">Thêm giỏ hàng</a>
                </div>
            </div>
        </div>
        <div class="container-sp col-md-3">
            <div class="card">
                <img id="ca" class="card-img-top" src="{{ asset('images/sach1.jpg') }}" alt="Card image">
                <div class="card-body">
                    <h5 class="card-title">Mỗi lần vấp ngã là một lần trưởng thành</h5>
                    <p class="card-text"></p>
                    <a href="#" class="btn btn-primary wig">Chi tiết</a>
                    <a href="#" class="btn btn-primary wig">Thêm giỏ hàng</a>
                </div>
            </div>
        </div>
        <div class="container-sp col-md-3">
            <div class="card">
                <img id="ca" class="card-img-top" src="{{ asset('images/sach2.png') }}" alt="Card image">
                <div class="card-body">
                    <h5 class="card-title">Truyện Kiều</h5>
                    <p class="card-text"></p>
                    <a href="#" class="btn btn-primary">Chi tiết</a>
                    <a href="#" class="btn btn-primary">Thêm giỏ hàng</a>
                </div>
            </div>
        </div>
        <div class="container-sp col-md-3">
            <div class="card">
                <img id="ca" class="card-img-top" src="{{ asset('images/sach3.jpg') }}" alt="Card image">
                <div class="card-body">
                    <h5 class="card-title">Những tấm lòng cao cả</h5>
                    <p class="card-text"></p>
                    <a href="#" class="btn btn-primary">Chi tiết</a>
                    <a href="#" class="btn btn-primary">Thêm giỏ hàng</a>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('title', 'Sản phẩm')

@section('header')
    <link rel="stylesheet" href="{{ asset('css/product.css') }}">
@endsection

