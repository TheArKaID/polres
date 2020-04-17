@extends('layouts.app')

@section('title')

Polres Batang

@endsection

@section('content')

<!-- bradcam_area_start -->
  <div class="bradcam_area breadcam_bg">
      <h3>Inovasi Kami</h3>
  </div>
  <!-- bradcam_area_end -->

<!-- features_room_startt -->
    <div class="features_room bg-light mb-100" style="padding-top: 0px;">
        @foreach ($inovasi as $i)
            <div class="rooms_here">
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
            </div>
        @endforeach
    </div>
        <nav class="blog-pagination justify-content-center d-flex mb-100">
            <ul class="pagination">
                <li class="page-item">
                    <a href="#" class="page-link" aria-label="Previous">
                        <i class="ti-angle-left"></i>
                    </a>
                </li>
                <li class="page-item">
                    <a href="#" class="page-link">1</a>
                </li>
                <li class="page-item active">
                    <a href="#" class="page-link">2</a>
                </li>
                <li class="page-item">
                    <a href="#" class="page-link" aria-label="Next">
                        <i class="ti-angle-right"></i>
                    </a>
                </li>
            </ul>
        </nav>
    <!-- features_room_end -->
@endsection
