@extends('layouts.app')

@section('title')

Polres Batang

@endsection

@section('content')

<!-- bradcam_area_start -->
<div class="bradcam_area" style="background-image: url('http://polres.web/frontend/img/setting/{{settings()->background}}')">
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
                        <h2>Tugas Pokok dan Fungsi</h2>
                        @foreach ($tupoksi as $t)
                            <div class="row bg-light mb-5">
                                <div class="col-lg-3 my-auto py-5" style="border-right: 1px solid black">
                                    <div class="row d-flex justify-content-center ">
                                        <img style="width: 50%"
                                            src="{{url('frontend/img/tupoksi/'.$t->gambar)}}">
                                    </div>
                                </div>
                                <div class="px-5 py-5 col-lg-9 bg-light my-auto">
                                    <div class="row">
                                        <a href="{{url('tupoksi/detail/'.$t->url)}}">{{$t->tupoksi}}</a>
                                    </div>
                                    <div class="row">
                                        <p class="mb-0 mt-2">{{$t->deskripsi}}
                                        </p>
                                    <a href="{{url('tupoksi/detail/'.$t->url)}}">Selengkapnya ></a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
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
