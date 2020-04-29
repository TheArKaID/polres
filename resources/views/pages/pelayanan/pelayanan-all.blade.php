@extends('layouts.app')

@section('title')

Daftar Pelayanan - {{settings()->namapolres}}

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
        <div class="row mb-5">
            @if ($pelayanan->first()!=NULL)
                @foreach ($pelayanan as $p)
                    <div class="col-xl-4 col-md-4 mb-3">
                        <div class="single_offers">
                            <div class="about_thumb book_now">
                                <div class="row" style="margin-top:16px;">
                                    <div class="col-3">
                                        <i class="fas fa-book fa-w-16 fa-3x"></i>
                                    </div>
                                    <div class="col-9">
                                        <a style="color:black; font-weight:bold;" href="{{url('pelayanan/'.$p->url)}}">{{$p->judul}}</a>
                                        <p>Klik Untuk Mengakses</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="row">
                    <div class="col-md-12">
                        <h3><i>Maaf, tidak ada Pelayanan saat ini</i></h3>
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>
<!-- offers_area_end -->
@endsection
