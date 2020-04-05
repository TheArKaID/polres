@extends('layouts.app')

@section('title')

Polrestabes Yogyakarta

@endsection

@section('content')

<!-- slider_area_start -->
<div class="slider_area">
    <div class="slider_active owl-carousel">
        <div class="single_slider d-flex align-items-center justify-content-center slider_bg_1">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        {{-- <div class="slider_text text-center">
                            <h3>Montana Resort</h3>
                            <p>Unlock to enjoy the view of Martine</p>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="single_slider  d-flex align-items-center justify-content-center slider_bg_2">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        {{-- <div class="slider_text text-center">
                            <h3>Life is Beautiful</h3>
                            <p>Unlock to enjoy the view of Martine</p>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- slider_area_end -->

<!-- Awal Pengumuman -->
<div class="p-2 bg-warning mb-100">
    <div class="container">
        <div class="row">
            <h6>Pengumuman: </h6>
        </div>
    </div>
</div>
<!-- Akhir Pengumuman -->

<!-- offers_area_start -->
<div class="offers_area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="section_title text-center mb-100">
                    <h3>Pelayanan Kami</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-md-4">
                <div class="single_offers">
                    <div class="about_thumb">
                        <img src="{{url('frontend/img/offers/1.png')}}" alt="">
                    </div>
                    <a href="{{url('/pelayanan/pelayanan-sim')}}" class="book_now">SIM</a>
                </div>
            </div>
            <div class="col-xl-4 col-md-4">
                <div class="single_offers">
                    <div class="about_thumb">
                        <img src="{{url('frontend/img/offers/2.png')}}" alt="">
                    </div>
                    <a href="#" class="book_now">book now</a>
                </div>
            </div>
            <div class="col-xl-4 col-md-4">
                <div class="single_offers">
                    <div class="about_thumb">
                        <img src="{{url('frontend/img/offers/3.png')}}" alt="">
                    </div>
                    <a href="#" class="book_now">book now</a>
                </div>
            </div>
            <div class="center-link mt-100">
                <div class="row">
                    <a class="btn-selengkapnya" href="{{url('/pelayanan/pelayanan-all')}}">Lihat Semua</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- offers_area_end -->

<!-- features_room_startt -->
<div class="features_room bg-light mb-100">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="section_title text-center mb-100">
                    <h3>Inovasi Kami</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="rooms_here">
        <div class="single_rooms">
            <div class="room_thumb">
                <img src="{{url('frontend/img/inovasi/polisi-3.jpg')}}" alt="">
                <div class="room_heading d-flex justify-content-between align-items-center">
                    <div class="room_heading_inner">
                        <span>Inovasi</span>
                        <h3>Polisi Kerja Sama</h3>
                    </div>
                    <a href="{{url('/inovasi/inovasi-1')}}" class="line-button">Selengkapnya</a>
                </div>
            </div>
        </div>
        <div class="single_rooms">
            <div class="room_thumb">
                <img src="{{url('frontend/img/inovasi/polisi-4.jpg')}}" alt="">
                <div class="room_heading d-flex justify-content-between align-items-center">
                    <div class="room_heading_inner">
                        <span>Inovasi</span>
                        <h3>Polisi Kerja Sama</h3>
                    </div>
                    <a href="#" class="line-button">Selengkapnya</a>
                </div>
            </div>
        </div>
        <div class="single_rooms">
            <div class="room_thumb">
                <img src="{{url('frontend/img/inovasi/polisi-5.jpg')}}" alt="">
                <div class="room_heading d-flex justify-content-between align-items-center">
                    <div class="room_heading_inner">
                        <span>Inovasi</span>
                        <h3>Polisi Kerja Sama</h3>
                    </div>
                    <a href="#" class="line-button">Selengkapnya</a>
                </div>
            </div>
        </div>
        <div class="single_rooms">
            <div class="room_thumb">
                <img src="{{url('frontend/img/inovasi/polisi-6.jpeg')}}" alt="">
                <div class="room_heading d-flex justify-content-between align-items-center">
                    <div class="room_heading_inner">
                        <span>Inovasi</span>
                        <h3>Polisi Kerja Sama</h3>
                    </div>
                    <a href="#" class="line-button">Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row pt-100 mb-100">
        <div class="center-link">

            <a class="btn-selengkapnya" href="{{url('/inovasi/inovasi-all')}}">Lihat Semua</a>

        </div>
    </div>
</div>
<!-- features_room_end -->

<!-- instragram_area_start -->
<div class="instragram_area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="section_title text-center mb-100">
                    <h3>Galeri Kegiatan</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="center-content">
            <div class="single_instagram popup">
                <img src="{{url('frontend/img/galeri/polisi-7.jpg')}}" alt="">
                <div class="ovrelay">
                    <a href="#">
                        <i class="fa fa-camera"></i>
                    </a>
                </div>
            </div>
            <div class="single_instagram popup">
                <img src="{{url('frontend/img/galeri/polisi-8.jfif')}}" alt="">
                <div class="ovrelay">
                    <a href="#">
                        <i class="fa fa-camera"></i>
                    </a>
                </div>
            </div>
            <div class="single_instagram popup">
                <img src="{{url('frontend/img/galeri/polisi-9.jpg')}}" alt="">
                <div class="ovrelay">
                    <a href="{{url('frontend/img/galeri/polisi-9.jpg')}}">
                        <i class="fa fa-camera"></i>
                    </a>
                </div>
            </div>
            <div class="single_instagram popup">
                <img src="{{url('frontend/img/galeri/polisi-7.jpg')}}" alt="">
                <div class="ovrelay">
                    <a href="#">
                        <i class="fa fa-camera"></i>
                    </a>
                </div>
            </div>
            <div class="single_instagram popup">
                <img src="{{url('frontend/img/galeri/polisi-8.jfif')}}" alt="">
                <div class="ovrelay">
                    <a href="#">
                        <i class="fa fa-camera"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="row pt-100 mb-100">
        <div class="center-link">

            <a class="btn-selengkapnya" href="{{url('/galeri/galeri-all')}}">Lihat Semua</a>

        </div>
    </div>
</div>
<!-- instragram_area_end -->

@endsection
