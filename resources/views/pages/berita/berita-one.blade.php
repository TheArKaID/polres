 @extends('layouts.app')

@section('title')

{{$berita->judul}} - {{settings()->namapolres}}

@endsection

@section('content')
 <!-- bradcam_area_start -->
  <div class="bradcam_area" style="background-image: url('/frontend/img/setting/{{settings()->background}}')">
      <h3>
          Berita
    </h3>
  </div>
  <!-- bradcam_area_end -->

   <!--================Blog Area =================-->
   <section class="blog_area single-post-area section-padding">
      <div class="container">
         <div class="row">
            <div class="col-lg-8 posts-list">
               <div class="single-post">
                  <div class="feature-img">
                     <img class="img-fluid" style="width: 100%" src="{{url('frontend/img/berita/'.$berita->gambar)}}">
                  </div>
                  <div class="blog_details">
                     <h2>
                         {{$berita->judul}}
                     </h2>
                     <ul class="blog-info-link mt-3 mb-4">
                        <li><a href="#"><i class="fa fa-user"></i>Berita</a></li>
                     </ul>
                     {!!$berita->deskripsi!!}
                  </div>
               </div>
               @if (Session::has('Berhasil'))
                  <div class="alert alert-info">{{ Session::get('Berhasil') }}</div>
               @endif

               <div class="comments-area">
                  <h4>{{count($komentar)}} Comments</h4>
                  @php
                     $bulans = [
                        '01' => 'Jan',
                        '02' => 'Feb',
                        '03' => 'Mar',
                        '04' => 'Apr',
                        '05' => 'May',
                        '06' => 'Jun',
                        '07' => 'Jul',
                        '08' => 'Aug',
                        '09' => 'Sep',
                        '10' => 'Oct',
                        '11' => 'Nov',
                        '12' => 'Des'
                     ]
                  @endphp
                  @foreach ($komentar as $k)
                     <div class="comment-list">
                        <div class="single-comment justify-content-between d-flex">
                           <div class="user justify-content-between d-flex">
                              <div class="thumb">
                                 <i class="fas fa-user fa-3x"></i>
                              </div>
                              <div class="desc">
                                 <p class="comment">
                                    {{$k->komentar}}
                                 </p>
                                 <div class="d-flex justify-content-between">
                                    <div class="d-flex align-items-center">
                                       <h5>
                                          <a href="#">{{$k->nama}}</a>
                                       </h5>
                                       @php
                                          $date = $k->created_at;
                                          $tanggal = substr($date, 8, 2);
                                          $bulan = substr($date, 5, 2);
                                          $tahun = substr($date, 0, 4);
                                          $jam = substr($date, 11, 8);
                                       @endphp
                                       
                                       <h3></h3>
                                       <p></p>
                                       <p class="date">{{$bulans[$bulan] ." ".$tanggal .", ". $tahun ." ". $jam}}</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  @endforeach
               </div>
               <div class="comment-form">
                  <h4>Leave a Reply</h4>
                  <form class="form-contact comment_form" action="/berita/komentar" id="commentForm" method="POST">
                     {{ csrf_field() }}
                     <div class="row">
                        <div class="col-12">
                           <div class="form-group">
                              <textarea class="form-control w-100" name="komentar" id="komentar" cols="30" rows="9"
                                 placeholder="Tulisa Komentar Anda" required></textarea>
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="form-group">
                              <input class="form-control" name="nama" id="nama" type="text" placeholder="Nama Lengkap" required>
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="form-group">
                              <input class="form-control" name="email" id="email" type="email" placeholder="Email" required>
                           </div>
                        </div>
                     </div>
                     <input type="hidden" name="berita_id" value="{{$berita->id}}">
                     <div class="form-group">
                        <button type="submit" class="btn btn-warning px-5 py-3 text-white">Kirim Komentar</button>
                     </div>
                  </form>
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
