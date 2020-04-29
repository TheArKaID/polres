@extends('layouts.app')

@section('title')

Polres Batang

@endsection

@section('content')

<!-- bradcam_area_start -->
  <div class="bradcam_area" style="background-image: url('/frontend/img/setting/{{settings()->background}}')">
      <h3>Inovasi Kami</h3>
  </div>
  <!-- bradcam_area_end -->

<!-- features_room_startt -->
    <div class="features_room bg-light mb-100" style="padding-top: 0px;">
        @if ($inovasi->first()!=NULL)
            @foreach ($inovasi as $i)
                <div class="rooms_here">
                    <div class="single_rooms">
                        <div class="room_thumb">
                            <img src="{{url('frontend/img/inovasi/'.$i->gambar)}}" alt="">
                            <div class="room_heading d-flex justify-content-between align-items-center">
                                <div class="room_heading_inner">
                                    <span>Inovasi</span>
                                    <h3><a href="{{url('inovasi/'.$i->url)}}" style="opacity: unset; visibility: unset;">{{$i->judul}}</a></h3>
                                </div>
                                <a href="{{url('inovasi/'.$i->url)}}" class="line-button">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <div class="row">
                <div class="col-md-12">
                    <h3><i>Maaf, tidak ada Inovasi saat ini</i></h3>
                </div>
            </div>
        @endif
    </div>
    <div class="row d-flex justify-content-center">
        {{ $inovasi->links() }}
    </div>
    <!-- features_room_end -->
@endsection
