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
                        <h2>Daftar Personil
                        </h2>
                        <ul class="blog-info-link mt-3 mb-4">
                        </ul>
                        @foreach ($personil as $p)
                            <div class="row bg-light mb-5">
                                <div class="col-lg-3 my-auto py-5" style="border-right: 1px solid black">
                                    <div class="row d-flex justify-content-center ">
                                        <img style="width: 50%"
                                            src="https://polrestabessurabaya.com/images/tupoksi/3d3e5ac227fd2a23b5a4de91453b90f2.png">
                                    </div>
                                </div>
                                <div class="px-5 py-5 col-lg-9 bg-light my-auto">
                                    <div class="row">
                                        <a href="{{url('personil/detail/'.$p->url)}}">{{$p->nama}}</a>
                                    </div>
                                    <div class="row">
                                        <p class="mb-0 mt-2">{{ \Illuminate\Support\Str::limit($p->deskripsi, 60, $end='...') }}</p><br>
                                        <a href="personil/detail/{{$p->url}}">Selengkapnya ></a>
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
