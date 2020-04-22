@extends('layouts.app')

@section('title')

Polres Batang

@endsection

@section('content')

<!-- bradcam_area_start -->
  <div class="bradcam_area" style="background-image: url('http://polres.web/frontend/img/setting/{{settings()->background}}')">
      <h3>Galeri Kami</h3>
  </div>
  <!-- bradcam_area_end -->

<!-- instragram_area_start -->
    <div class="instragram_area">
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
                <div class="single_instagram popup" >
                    <img src="{{url('frontend/img/galeri/polisi-9.jpg')}}" alt="">
                    <div class="ovrelay">
                        <a href="{{url('frontend/img/galeri/polisi-9.jpg')}}">
                            <i class="fa fa-camera"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- instragram_area_end -->
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
@endsection
