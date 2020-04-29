@extends('layouts.app')

@section('title')

Polres Batang

@endsection

@section('content')

<!-- bradcam_area_start -->
    <div class="bradcam_area" style="background-image: url('/frontend/img/setting/{{settings()->background}}')">
        <h3>Berita</h3>
    </div>
    <!-- bradcam_area_end -->
    <!--================Blog Area =================-->
    <section class="blog_area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">
                        @if ($berita->first()!=NULL)
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
                        @foreach ($berita as $b)
                            <article class="blog_item">
                                <div class="blog_item_img">
                                    <img class="card-img rounded-0" src="{{url('frontend/img/berita/'.$b->gambar)}}" alt="">
                                    <a href="#" class="blog_item_date">
                                        @php
                                            $date = $b->created_at;
                                            $tanggal = substr($date, 8, 2);
                                            $bulan = substr($date, 5, 2);
                                        @endphp
                                        <h3>{{$tanggal}}</h3>
                                        <p>{{$bulans[$bulan]}}</p>
                                    </a>
                                </div>

                                <div class="blog_details">
                                    <a class="d-inline-block" href="{{url('berita/'.$b->url)}}">
                                        <h2>{{$b->judul}}</h2>
                                    </a>
                                    {!!$b->deskripsi!!}
                                    <ul class="blog-info-link">
                                        <li><a href="#"><i class="fa fa-user"></i> Berita</a></li>
                                    </ul>
                                </div>
                            </article>
                        @endforeach
                        <div class="row d-flex justify-content-center">
                            {{$berita->links()}}
                        </div>
                        @else
                            <div class="row">
                                <div class="col-md-12">
                                    <h3><i>Maaf, tidak ada Berita saat ini</i></h3>
                                </div>
                            </div>
                        @endif
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
    <!--================Blog Area =================-->
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
