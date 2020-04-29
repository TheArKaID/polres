@extends('layouts.app')

@section('title')

Layanan Pengaduan - {{settings()->namapolres}}

@endsection

@section('content')

<!-- bradcam_area_start -->
<div class="bradcam_area breadcam_bg mb-100">
    <h3>Cek Pengaduan</h3>
</div>
<!-- bradcam_area_end -->
<section class="blog_area single-post-area section-padding pt-0">
    <div class="container mb-100">
        @if ($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </div>
        @endif
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
</section>
@endsection
