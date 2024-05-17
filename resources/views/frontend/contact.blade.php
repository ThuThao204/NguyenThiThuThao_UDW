@extends('layouts.site')

@section('content')


    <div class="row">
        <div class="col-md-6">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d4693.97491677641!2d106.77427159818406!3d10.830446997401436!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752701a34a5d5f%3A0x30056b2fdf668565!2zQ2FvIMSQ4bqzbmcgQ8O0bmcgVGjGsMahbmcgVFAuSENN!5e0!3m2!1svi!2s!4v1715946521215!5m2!1svi!2s"
                width="600" height="450" style="border:0.5px solid gray;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="col-md-6 px-4">
            <div>
                <h5>Liên hệ</h5>
                <ul style="list-style: none;">
                    <li>Địa chỉ: 20 Tăng Nhơn Phú, Phước Long B, Thủ Đức, Thành phố Hồ Chí Minh, Việt Nam </li>
                    <li>Sđt: 0123456789</li>
                    <li>Email: sachhay@gmail.com</li>
                </ul>
            </div> 
            <div >
                <h5>Gửi tin nhắn cho chúng tôi</h5>
                <form action="">
                    <input class="mb-2 rounded" type="text" placeholder="Họ tên"> <input class="mb-2 rounded"
                        type="text" placeholder="Email">
                    <br>
                    <input class="mb-2 rounded" type="text" placeholder="Điện thoại">
                    <br>
                    <textarea class="rounded" name="" id="" placeholder="Nhập nội dung" cols="49"></textarea>
                    <br>
                    <button class="btn btn-primary" type="submit">Gửi thông tin</button>
                </form>
            </div>
        </div>
    </div>



@endsection

@section('title', 'Liên hệ')

@section('header')
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endsection
