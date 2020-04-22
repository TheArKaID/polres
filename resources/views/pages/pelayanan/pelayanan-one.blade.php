@extends('layouts.app')

@section('title')

Polres Batang

@endsection

@section('content')

 <!-- bradcam_area_start -->
  <div class="bradcam_area" style="background-image: url('http://polres.web/frontend/img/setting/{{settings()->background}}')">
      <h3>Pelayanan</h3>
  </div>
  <!-- bradcam_area_end -->

   <!--================Blog Area =================-->
   <section class="blog_area single-post-area section-padding">
      <div class="container">
         <div class="row">
            <div class="col-lg-8 posts-list">
               <div class="single-post">
                  <div class="feature-img">
                     <img class="img-fluid" src="{{url('frontend/img/pelayanan/'.$pelayanan->gambar)}}">
                  </div>
                  <div class="blog_details">
                     <h2>{{$pelayanan->judul}}
                     </h2>
                     <ul class="blog-info-link mt-3 mb-4">
                        <li><a href="#"><i class="fa fa-user"></i> Pelayanan</a></li>
                     </ul>
                     {!!$pelayanan->deskripsi!!}
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
                                            onfocus="this.placeholder = ''"
                                            onblur="this.placeholder = 'Search Keyword'">
                                        <div class="input-group-append">
                                            <button class="btn" type="button"><i class="ti-search"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-warning text-white px-5"
                                    type="submit">Search</button>
                            </form>
                        </aside>
                    </div>
            </div>
         </div>
      </div>
   </section>
   <!--================ Blog Area end =================-->

   @endsection
