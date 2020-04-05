@extends('layouts.app')

@section('title')

Polrestabes Yogyakarta

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
                <form class="form-contact comment_form" action="#" id="commentForm">
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <input type="text" class="form-control " name="name" required=""
                                    placeholder="Nama Lengkap Anda">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-warning px-5 py-3 text-white">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

<div class="row container" style="margin: auto">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" collspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Kategori</th>
                            <th>Pengaduan</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Paijo</td>
                            <td>Curanmor</td>
                            <td>kok motor saya hilang?</td>
                            <td>Proses</td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <nav class="blog-pagination justify-content-center d-flex">
        <ul class="pagination">
            <li class="page-item">
                <a href="#" class="page-link" aria-label="Previous">
                    <i class="ti-angle-left"></i>
                </a>
            </li>
            <li class="page-item">
                <a href="#" class="page-link">1</a>
            </li>
            <li class="page-item active">
                <a href="#" class="page-link">2</a>
            </li>
            <li class="page-item">
                <a href="#" class="page-link" aria-label="Next">
                    <i class="ti-angle-right"></i>
                </a>
            </li>
        </ul>
    </nav>

</section>
@endsection
