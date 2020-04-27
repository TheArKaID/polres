@extends('layouts.app')

@section('title')

Polres Batang

@endsection

@section('content')

<!-- bradcam_area_start -->
<div class="bradcam_area breadcam_bg mb-100">
    <h3>Cek Pengaduan</h3>
</div>
<!-- bradcam_area_end -->
<section class="blog_area single-post-area section-padding pt-0">
    <div class="container mb-100">
        <div class="row" style="margin-right: 0px; margin-left: 0px;">
            <div class="comment-form" style="margin: auto;">
                <h4>Masukkan Kode</h4>
                <form class="form-contact comment_form" action="prosescekstatus" id="commentForm" method="POST">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <input type="text" class="form-control " name="kode" required placeholder="Kode Pengaduan">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-warning px-5 py-3 text-white">Periksa</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

<div class="row container" style="margin: auto">
        <div class="card-body" style="overflow: auto">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" collspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Kategori</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                            @php
                                $no=1;
                            @endphp
                            @foreach ($pengaduan as $p)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{substr($p->nama, 0, 1)}}*********</td>
                                <td>{{$p->kategori->kategori}}</td>
                                <td>{{$p->status}}</td>
                            </tr>
                            @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection
