@extends('layouts.app')

@section('title')

Polres Batang

@endsection

@section('content')

<!-- bradcam_area_start -->
  <div class="bradcam_area" style="background-image: url('/frontend/img/setting/{{settings()->background}}')">
      <h3>Galeri Kami</h3>
  </div>
  <!-- bradcam_area_end -->

<!-- instragram_area_start -->
    <div class="instragram_area">
        <div class="row">
            <div class="center-content">
                @foreach ($galeri as $g)
                    <div class="single_instagram popup">
                        <img src="{{url('frontend/img/galeri/'.$g->gambar)}}" alt="">
                        <div class="ovrelay">
                            <a href="#">
                                <i class="fa fa-camera"></i>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- instragram_area_end -->
@endsection
