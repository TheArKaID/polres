@extends('layouts.app')

@section('title')

Polrestabes Yogyakarta

@endsection

@section('content')

<!-- bradcam_area_start -->
  <div class="bradcam_area breadcam_bg mb-100">
      <h3>Pelayanan Kami</h3>
  </div>
  <!-- bradcam_area_end -->

<!-- features_room_startt -->
     <!-- offers_area_start -->
    <div class="offers_area pb-0">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-md-4 mb-5">
                    <div class="single_offers">
                        <div class="about_thumb">
                            <img src="{{url('frontend/img/offers/1.png')}}" alt="">
                        </div>
                        <a href="#" class="book_now">SIM</a>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4 mb-5">
                    <div class="single_offers">
                        <div class="about_thumb">
                            <img src="{{url('frontend/img/offers/2.png')}}" alt="">
                        </div>
                        <a href="#" class="book_now">book now</a>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4 mb-5">
                    <div class="single_offers">
                        <div class="about_thumb">
                            <img src="{{url('frontend/img/offers/3.png')}}" alt="">
                        </div>
                        <a href="#" class="book_now">book now</a>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4 mb-5">
                    <div class="single_offers">
                        <div class="about_thumb">
                            <img src="{{url('frontend/img/offers/1.png')}}" alt="">
                        </div>
                        <a href="#" class="book_now">SIM</a>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4 mb-5">
                    <div class="single_offers">
                        <div class="about_thumb">
                            <img src="{{url('frontend/img/offers/2.png')}}" alt="">
                        </div>
                        <a href="#" class="book_now">book now</a>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4 mb-5">
                    <div class="single_offers">
                        <div class="about_thumb">
                            <img src="{{url('frontend/img/offers/3.png')}}" alt="">
                        </div>
                        <a href="#" class="book_now">book now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- offers_area_end -->
           <nav class="blog-pagination justify-content-center d-flex mb-100 mt-0">
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
