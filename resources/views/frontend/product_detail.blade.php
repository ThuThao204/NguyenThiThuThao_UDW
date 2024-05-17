@extends('layouts.site')

@section('content')
    <div class="container">
        <div class="row">
            <div class="chitiet col-md-5">
                <div class="card">
                    <span style="margin-bottom: 10px;  display: block;margin-top: 20px;">
                        <img id="ca" src="{{ asset('images/sach2.png') }}" alt="truyện kiều">
                    </span>
                </div>
            </div> 
            <div class="col-md-7 py-5 md-3">
                <h5 class="card-title">Truyện Kiều</h5>
                <p>Tình trạng: Còn hàng</p>
                <p>250.000đ</p>
                <div class="chitietsp">
                    <p>Số lượng <input class="px-2" type="number" value=1></input></p>
                </div>
                <div class="chitietsp px-5">
                    <a href="#" class="btn btn-primary">Thêm giỏ hàng</a>
                    <a href="#" class="btn btn-primary">Mua ngay</a>
                </div>
                <div>
                    <h5>Mô tả sản phẩm</h5>
                    <hr>
                    <p>Đoạn trường tân thanh (chữ Hán: 斷腸新聲), thường được biết đến với cái tên đơn giản là Truyện Kiều (chữ
                        Nôm: 傳翹), là một truyện thơ của đại thi hào Nguyễn Du. Đây được xem là truyện thơ nổi tiếng nhất và
                        xét vào hàng kinh điển trong văn học Việt Nam, tác phẩm được viết bằng chữ Nôm, theo thể lục bát,
                        gồm 3.254 câu.</p>
                </div>
            </div>
        </div>
    </div>

    <span style="margin-right: 15px; margin-bottom: 10px;  margin-top: 20px;">
        <h2>SÁCH CÙNG LOẠI</h2>
    </span>
    <div class="sp row-g px-5 md-3">
        <div class="container-sp card">
            <img id="ca" class="card-img-top" src="{{ asset('images/sach2.png') }}" alt="Card image">
            <div class="card-body">
                <h5 class="card-title">Truyện Kiều</h5>
                <p>250.000đ</p>
                <a href="#" class="btn btn-primary">Chi tiết</a>
            </div>
        </div>
        <div class="container-sp card">
            <img id="ca" class="card-img-top" src="{{ asset('images/sach2.png') }}" alt="Card image">
            <div class="card-body">
                <h5 class="card-title">Truyện Kiều</h5>
                <p>250.000đ</p>
                <a href="#" class="btn btn-primary">Chi tiết</a>
            </div>
        </div>
        <div class="container-sp card">
            <img id="ca" class="card-img-top" src="{{ asset('images/sach2.png') }}" alt="Card image">
            <div class="card-body">
                <h5 class="card-title">Truyện Kiều</h5>
                <p>250.000đ</p>
                <a href="#" class="btn btn-primary">Chi tiết</a>
            </div>
        </div>
        <div class="container-sp card">
            <img id="ca" class="card-img-top" src="{{ asset('images/sach2.png') }}" alt="Card image">
            <div class="card-body">
                <h5 class="card-title">Truyện Kiều</h5>
                <p>250.000đ</p>
                <a href="#" class="btn btn-primary">Chi tiết</a>
            </div>
        </div>
    </div>



@endsection

@section('title', 'Chi tiết sản phẩm')

@section('header')
    <link rel="stylesheet" href="{{ asset('css/product_detail.css') }}">
@endsection
