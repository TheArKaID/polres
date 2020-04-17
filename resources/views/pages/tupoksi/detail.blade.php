@extends('layouts.app')

@section('title')

Polres Batang

@endsection

@section('content')

<!-- bradcam_area_start -->
<div class="bradcam_area breadcam_bg">
    <h3>Tupoksi</h3>
</div>
<!-- bradcam_area_end -->

<!--================Blog Area =================-->
<section class="blog_area single-post-area section-padding pt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 posts-list">
                <div class="single-post">

                    <div class="blog_details">
                        <h2>Tugas Pokok dan Fungsi
                        </h2>
                        <ul class="blog-info-link mt-5 mb-4">
                            <div class="row d-flex justify-content-center">
                                <img style="width:20%;" src="https://polrestabessurabaya.com/images/tupoksi/3d3e5ac227fd2a23b5a4de91453b90f2.png">
                            </div>
                            <div class="row px-4 d-flex justify-content-center">
                                <p>Kapolres bertugas:<br>
                                    a. Memimpin, membina, mengawasi, dan mengendalikan satuan organisasi di lingkungan Polres dan   unsur pelaksana kewilayahan dalam jajarannya; dan <br>
                                    b. Memberikan saran pertimbangan kepada Kapolda yang terkait dengan pelaksanaan tugasnya.</p>
                            </div>
                            <div class="row d-flex justify-content-center">
                                <p>Di Publikasikan Tanggal - 16 September 2016</p>
                            </div>
                        </ul>
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
