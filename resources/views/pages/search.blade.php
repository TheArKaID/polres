@extends('layouts.app')

@section('title')

Pencarian 

@endsection

@section('content')
<style>
    #searchRow{
        text-align:left; 
        text-decoration: none;
    }
    #searchRow p{
        padding-left: 5px
    }
    #searchRow p:hover{
        background-color: #ffc107 !important;
    }
</style>
    <div class="slider_area mb-100">
        <div class="slider_active owl-carousel">
            @foreach ($banner as $b)
            <div class="single_slider d-flex align-items-center justify-content-center"
                style="background-image: url({{'../frontend/img/banner/'.$b->gambar}}) !important">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider_text text-center">
                                <h3>{{$b->judul}}</h3>
                                <p>{{$b->deskripsi}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="offers_area pb-0">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-12">
                    <div class="form-group">
                        <div class="input-group mb-3">
                            <input type="text" name="search" class="form-control" placeholder='Search Keyword' value="{{$keyword}}" onchange="setSearch(this)">
                            <div class="input-group-append">
                                <a id="btnSearch" class="btn" href="{{$keyword}}"><i class="ti-search"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="single_offers">
                        <div class="col-md-12">
                            <p><h3>Hasil Pencarian untuk "{{$keyword}}"</h3></p>
                        </div>
                        <div class="about_thumb" style="background: #f1f1f1; border: 1px solid #ddd; padding: 20px;">
                            <div class="row" style="margin-top:16px;">
                                <div class="col-md-12">
                                    <h4>Pelayanan</h4>
                                </div>
                                @if ($pelayanan->first()!=NULL)
                                    @foreach ($pelayanan as $s)
                                        <div class="col-md-12">
                                            <a id="searchRow" href="#"><p>{{$s->judul}} <i> - Selengkapnya >></i></p></a>
                                        </div>
                                    @endforeach
                                @else
                                    <div class="col-md-12">
                                        <p><i>Maaf, Data Tidak ditemukan di sini.</i></p>
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="about_thumb" style="background: #f1f1f1; border: 1px solid #ddd; padding: 20px;">
                            <div class="row" style="margin-top:16px;">
                                <div class="col-md-12">
                                    <h4>Inovasi</h4>
                                </div>
                                @if ($inovasi->first()!=NULL)
                                    @foreach ($inovasi as $s)
                                        <div class="col-md-12">
                                            <a id="searchRow" href="#"><p>{{$s->judul}} <i> - Selengkapnya >></i></p></a>
                                        </div>
                                    @endforeach
                                @else
                                    <div class="col-md-12">
                                        <p><i>Maaf, Data Tidak ditemukan di sini.</i></p>
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="about_thumb" style="background: #f1f1f1; border: 1px solid #ddd; padding: 20px;">
                            <div class="row" style="margin-top:16px;">
                                <div class="col-md-12">
                                    <h4>Berita</h4>
                                </div>
                                @if ($berita->first()!=NULL)
                                    @foreach ($berita as $s)
                                        <div class="col-md-12">
                                            <a id="searchRow" href="#"><p>{{$s->judul}} <i> - Selengkapnya >></i></p></a>
                                        </div>
                                    @endforeach
                                @else
                                    <div class="col-md-12">
                                        <p><i>Maaf, Data Tidak ditemukan di sini.</i></p>
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="about_thumb" style="background: #f1f1f1; border: 1px solid #ddd; padding: 20px;">
                            <div class="row" style="margin-top:16px;">
                                <div class="col-md-12">
                                    <h4>Tupoksi</h4>
                                </div>
                                @if ($tupoksi->first()!=NULL)
                                    @foreach ($tupoksi as $s)
                                        <div class="col-md-12">
                                            <a id="searchRow" href="#"><p>{{$s->tupoksi}} <i> - Selengkapnya >></i></p></a>
                                        </div>
                                    @endforeach
                                @else
                                    <div class="col-md-12">
                                        <p><i>Maaf, Data Tidak ditemukan di sini.</i></p>
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="about_thumb" style="background: #f1f1f1; border: 1px solid #ddd; padding: 20px;">
                            <div class="row" style="margin-top:16px;">
                                <div class="col-md-12">
                                    <h4>Personil</h4>
                                </div>
                                @if ($personil->first()!=NULL)
                                    @foreach ($personil as $s)
                                        <div class="col-md-12">
                                            <a id="searchRow" href="#"><p>{{$s->nama}} <i> - Selengkapnya >></i></p></a>
                                        </div>
                                    @endforeach
                                @else
                                    <div class="col-md-12">
                                        <p><i>Maaf, Data Tidak ditemukan di sini.</i></p>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function setSearch(that) {
            var value = that.value;
            document.getElementById("btnSearch").href = ""+value;
        }
    </script>
@endsection
