@extends('layouts.app')

@section('title')

Polres Batang

@endsection

@section('content')

<!-- bradcam_area_start -->
<div class="bradcam_area breadcam_bg">
    <h3>Polsek Sukamaju</h3>
</div>
<!-- bradcam_area_end -->

<!--================Blog Area =================-->
<section class="blog_area single-post-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 posts-list">
                <div class="single-post">
                    <div class="feature-img">
                        <img class="img-fluid" src="{{url('frontend/img/inovasi/polisi-3.jpg')}}" alt="">
                    </div>
                    <div class="blog_details">
                        <h2>Kepolisian Sektor Tegalsari
                        </h2>
                        <ul class="blog-info-link mt-3 mb-4">
                            <li><a href="#"><i class="fa fa-user"></i> Travel, Lifestyle</a></li>
                        </ul>
                        <div class="row bg-light">

                            <div class="col-lg-4 bg-primary py-4">
                                <div class="row d-flex justify-content-center">
                                    <img style="width: 50%"
                                        src="https://polrestabessurabaya.com/images/polsek/Screenshot_37.jpg">
                                </div>
                                <div class="row d-flex justify-content-center mt-2">
                                    <h6 style="text-align:center; color: yellow">Kompol Argya Satriya Bhawana, S.H.,
                                        S.I.K.</h6>
                                </div>
                                <div class="row d-flex justify-content-center">
                                    <p class="mb-0 text-white">Kapolsek Tegalsari</p>
                                </div>
                            </div>
                            <div class="pl-5 py-5 col-8 bg-light my-auto">
                                <div class="my-auto">
                                    <div class="row">
                                        <div class="col-lg-1">
                                            <i class="fas fa-map-marker-alt"></i>
                                        </div>
                                        <div class="col-lg-11">
                                            Jl. Basuki Rahmat 40, Surabaya - 68485
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-1">
                                            <i class="fas fa-phone"></i>
                                        </div>
                                        <div class="col-lg-11">
                                            031 - 5341052
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-1">
                                            <i class="fas fa-envelope"></i>
                                        </div>
                                        <div class="col-lg-11">
                                            polrestabessurabaya@gmail.com
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col my-5">
                            <div class="row">
                                <h4>Keterangan</h4>
                            </div>
                            <div class="row">

                                <p>Jumlah penduduk : 93.465 jiwa <br>
                                    Luas wilayah : 4,29 km2 <br><br>

                                    Kelurahan <br>
                                    1. Kelurahan Kedungdoro <br>
                                    2. Kelurahan Keputran <br>
                                    3. Kelurahan Tegalsari <br>
                                    4. Kelurahan Dr. Sutomo <br>
                                    5. Kelurahan Wonorejo <br><br>

                                    Akun Facebook : Polsek Tegalsari Polrestabes Surabaya<br>
                                    Akun Twitter : @Tegalsaripolice<br>
                                    Akun Instagram : @polsek_tegalsari_sby<br>
                                </p>
                            </div>
                        </div>
                        <div class="col mb-5">
                            <h4>Lokasi</h4>
                            <iframe style="width: 100%;"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.768407239798!2d109.72771801477279!3d-6.918267495001245!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7024995fccab67%3A0x8f4f99463cfb2ab4!2sPolres%20Batang!5e0!3m2!1sid!2sid!4v1587120204846!5m2!1sid!2sid"
                                width="400" height="300" frameborder="0" style="border:0;" allowfullscreen=""
                                aria-hidden="false" tabindex="0"></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog_right_sidebar">
                    <aside class="single_sidebar_widget search_widget">
                        <form action="#" style="text-align: center;">
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder='Search Keyword'
                                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Keyword'">
                                    <div class="input-group-append">
                                        <button class="btn" type="button"><i class="ti-search"></i></button>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-warning text-white px-5" type="submit">Search</button>
                        </form>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================ Blog Area end =================-->

@endsection
