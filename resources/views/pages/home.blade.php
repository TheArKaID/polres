@extends('layouts.app')

@section('title')

Polres Batang

@endsection

@section('content')

<!-- slider_area_start -->
<div class="slider_area mb-100">
    <div class="slider_active owl-carousel">
        @foreach ($banner as $b)
            <div class="single_slider d-flex align-items-center justify-content-center" style="background-image: url({{'frontend/img/banner/'.$b->gambar}}) !important">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider_text text-center">
                                <h3>{{$b->judul}}</h3>
                                <p>{{$b->deskripsi}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
<!-- slider_area_end -->

<!-- Pelayanan_start -->
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
            @if (count($pelayanan)>0)
                @php
                    $row = 0
                @endphp
                @foreach ($pelayanan as $p)
                    @php
                        $row++;
                    @endphp
                    <div class="col-xl-4 col-md-4">
                        <div class="single_offers">
                            <div class="about_thumb book_now">
                                {{-- <img src="{{url('frontend/img/pelayanan/'.$p->gambar)}}" alt=""> --}}
                                <div class="row" style="margin-top:16px;">

                                    <div class="col-3">
                                        <i class="fas fa-book fa-w-16 fa-3x"></i>
                                    </div>
                                    <div class="col-9">
                                        <a style="color:black; font-weight:bold;" href="{{url('pelayanan/'.$p->url)}}">{{$p->judul}}</a>
                                        <p>Klik Untuk Mengakses</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @if ($row==3)
                        @break
                    @endif
                @endforeach
            @endif
        </div>
        <div class="row">
            @if (count($pelayanan)>3)
                <div class="center-link mt-100">
                    <div class="row">
                        <a class="btn-selengkapnya" href="{{url('/pelayanan/pelayanan-all')}}">Lihat Semua</a>
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>
<!-- Pelayanan_end -->

<!-- Inovasi_startt -->
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
        @if (count($inovasi)>0)
            @php
                $row = 0;
            @endphp
            @foreach ($inovasi as $i)
                @php
                    $row++;
                @endphp
                <div class="single_rooms">
                    <div class="room_thumb">
                        <img src="{{url('frontend/img/inovasi/'.$i->gambar)}}" alt="">
                        <div class="room_heading d-flex justify-content-between align-items-center">
                            <div class="room_heading_inner">
                                <span>Inovasi</span>
                                <h3>{{$i->judul}}</h3>
                            </div>
                            <a href="{{url('inovasi/'.$i->url)}}" class="line-button">Selengkapnya</a>
                        </div>
                    </div>
                </div>
                @if ($row==4)
                    @break
                @endif
            @endforeach
        @endif
    </div>
    @if (count($inovasi)>4)
        <div class="row pt-100 mb-100">
            <div class="center-link">
                <a class="btn-selengkapnya" href="{{url('/inovasi/inovasi-all')}}">Lihat Semua</a>
            </div>
        </div>
    @endif
</div>
<!-- Inovasi_end -->

<!-- Galeri_start -->
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
            @if (count($galeri)>0)
                @php
                    $row = 0
                @endphp
                @foreach ($galeri as $g)
                    @php
                        $row++;
                    @endphp
                    <div class="single_instagram popup">
                        <img src="{{url('frontend/img/galeri/'.$g->gambar)}}" alt="">
                        <div class="ovrelay">
                            <a href="#">
                                <i class="fa fa-camera"></i>
                            </a>
                        </div>
                    </div>
                    @if ($row==5)
                        @break
                    @endif
                @endforeach
            @endif
        </div>
    </div>
    <div class="row pt-100 mb-100">
        <div class="center-link">
            @if (count($galeri)>5)
                <a class="btn-selengkapnya" href="{{url('/galeri/galeri-all')}}">Lihat Semua</a>
            @endif
        </div>
    </div>
</div>
<!-- Galeri_area_end -->

@endsection
