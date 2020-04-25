@extends('layouts.app')

@section('title')

Polres Batang

@endsection

@section('content')

<!-- bradcam_area_start -->
<div class="bradcam_area" style="background-image: url('/frontend/img/setting/{{settings()->background}}')">
<h3>Polsek {{$polsek->namapolsek}}</h3>
</div>
<!-- bradcam_area_end -->

<!--================Blog Area =================-->
<section class="blog_area single-post-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 posts-list">
                <div class="single-post">
                    <div class="feature-img">
                        <img class="img-fluid" src="{{url('frontend/img/polsek/'.$polsek->gambar)}}" alt="">
                    </div>
                    <div class="blog_details">
                        <h2>Polsek {{$polsek->namapolsek}}
                        </h2>
                        <ul class="blog-info-link mt-3 mb-4">
                            <li><i class="fa fa-user"></i>Polsek</li>
                        </ul>
                        <div class="row bg-light">

                            <div class="col-lg-4 bg-primary py-4">
                                <div class="row d-flex justify-content-center">
                                    <img class="img-fluid" src="{{url('frontend/img/polsek/'.$polsek->fotokapolsek)}}" alt="">
                                </div>
                                <div class="row d-flex justify-content-center mt-2">
                                    <h6 style="text-align:center; color: yellow">{{$polsek->kapolsek}}</h6>
                                </div>
                            </div>
                            <div class="pl-5 py-5 col-8 bg-light my-auto">
                                <div class="my-auto">
                                    @if ($polsek->alamat!=NULL||!empty($polsek->alamat))
                                        <div class="row">
                                            <div class="col-lg-1">
                                                <i class="fas fa-map-marker-alt"></i>
                                            </div>
                                            <div class="col-lg-11">
                                                {{$polsek->alamat}}
                                            </div>
                                        </div>
                                    @endif
                                    @if ($polsek->notelpon!=NULL||!empty($polsek->notelpon))
                                        <div class="row">
                                            <div class="col-lg-1">
                                                <i class="fas fa-phone"></i>
                                            </div>
                                            <div class="col-lg-11">
                                                {{$polsek->notelpon}}
                                            </div>
                                        </div>
                                    @endif
                                    @if ($polsek->email!=NULL||!empty($polsek->email))
                                        <div class="row">
                                            <div class="col-lg-1">
                                                <i class="fas fa-envelope"></i>
                                            </div>
                                            <div class="col-lg-11">
                                                {{$polsek->email}}
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col my-5">
                            <div class="row">
                                <h4>Keterangan</h4>
                            </div>
                            <div class="row">
                                {!!$polsek->keterangan!!}
                            </div>
                        </div>

                        <div class="col my-5">
                            <div class="row">
                                {!! $polsek->instagram!=NULL||!empty($polsek->instagram)
                                    ? "<a href='https://instagram.com/".$polsek->instagram."' style='color: #BABABA; text-decoration: none' class='footer_text'>
                                        <i class='fab fa-instagram mr-2'></i>".$polsek->instagram."</a><br>"
                                    : ""!!}

                            </div>
                            <div class="row">
{!! $polsek->twitter!=NULL||!empty($polsek->twitter)
                                    ? "<a href='https://twitter.com/".$polsek->twitter."' style='color: #BABABA; text-decoration: none' class='footer_text'>
                                        <i class='fab fa-twitter mr-2'></i>".$polsek->twitter."</a><br>"
                                    : ""!!}
                            </div>
                            <div class="row">
{!! $polsek->facebook!=NULL||!empty($polsek->facebook)
                                    ? "<a href='https://facebook.com/".$polsek->facebook."' style='color: #BABABA; text-decoration: none' class='footer_text'>
                                        <i class='fab fa-facebook mr-2'></i>".$polsek->facebook."</a><br>"
                                    : ""!!}
                            </div>
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
