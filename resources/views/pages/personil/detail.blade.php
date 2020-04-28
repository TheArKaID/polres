@extends('layouts.app')

@section('title')

Polres Batang

@endsection

@section('content')

<!-- bradcam_area_start -->
<div class="bradcam_area" style="background-image: url('/frontend/img/setting/{{settings()->background}}')">
    <h3>Personil</h3>
</div>
<!-- bradcam_area_end -->

<!--================Blog Area =================-->
<section class="blog_area single-post-area section-padding pt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 posts-list">
                <div class="single-post">
                    <div class="blog_details">
                        <h2>Data Personil
                        </h2>
                        <ul class="blog-info-link mt-5 mb-4">
                            <div class="row d-flex justify-content-center">
                                <img style="width:20%;" src="{{asset('frontend/img/personil/'.$personil->gambar)}}">
                            </div>
                            <div class="row px-4 d-flex justify-content-center">
                                <div class="col-lg-12">
                                    <div class="row mt-5 d-flex justify-content-center">
                                        <h4>{{$personil->nama}}</h4>
                                    </div>
                                    <div class="row d-flex justify-content-center">
                                        <p>{{$personil->deskripsi}}</p>
                                    </div>
                                </div>
                            </div>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog_right_sidebar">
                    <aside class="single_sidebar_widget search_widget">
                        <div class="form-group">
                            <div class="input-group mb-3">
                                <input type="text" name="search" id="search" class="form-control" placeholder='Search Keyword' value="{{isset($keyword) ? $keyword : ''}}" onchange="setSearch(this)" required></form>
                                <div class="input-group-append">
                                    <a id="btnSearch" class="btn" href="#" aria-disabled="true"><i class="ti-search"></i></a>
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================ Blog Area end =================-->

<script>
    function setSearch(that) {
        var value = that.value;
        if(value!=""){
            document.getElementById("btnSearch").href = "../../search/"+value;
        } else{
        document.getElementById("btnSearch").href = "#";
        }
    }

    function enterSearch() {
        var value = document.getElementById("search").value;
        if(value!=""){
            window.location.href="../../search/"+value;
        }
    }
    document.getElementById("search").onkeydown = function () {
        if (event.keyCode === 13) {
            enterSearch();
        }
    };
</script>
@endsection
