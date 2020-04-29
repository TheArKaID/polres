@extends('layouts.app')

@section('title')

Layanan Pengaduan - {{settings()->namapolres}}

@endsection

@section('content')

<!-- bradcam_area_start -->
<div class="bradcam_area breadcam_bg mb-100">
    <h3>Pelayanan Kami</h3>
</div>
<!-- bradcam_area_end -->
<section class="blog_area single-post-area section-padding pt-0">
    <div class="container mb-100">
        <div class="row" style="margin-right: 0px; margin-left: 0px;">
            <div class="comment-form" style="margin: auto;">
                <h4>Layanan Pengaduan</h4>
                <form class="form-contact comment_form" action="/pengaduan/lapor" method="POST">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="text" class="form-control " name="name" required=""
                                    placeholder="Nama Lengkap Anda">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" required=""
                                    placeholder="Alamat Email Anda">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <input type="text" class="form-control" name="phone" required=""
                                    placeholder="No Telepon Anda">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <select class="form-control select2" name="category" required="">
                                    <option selected hidden>- Pilih Kategori</option>
                                    @foreach ($kategori as $k)
                                        <option value="{{$k->id}}">{{$k->kategori}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <select class="form-control" name="gender" required="">
                                    <option value="">- Jenis Kelamin</option>
                                    <option value="L">Laki Laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9"
                                    placeholder="Write Comment" required></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-warning px-5 py-3 text-white">Send Message</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="mt-5">
            <h4>Daftar Pengaduan</h4>
        </div>

        <div class="blog-author">
            <div class="media align-items-center">
                <img src="img/blog/author.png" alt="">
                <div class="media-body">
                    <a href="#">
                        <h4>Harvard milan</h4>
                    </a>
                    <p>Second divided from form fish beast made. Every of seas all gathered use saying you're, he
                        our dominion twon Second divided from</p>
                </div>
            </div>
        </div>

        <div class="comments-area">
            <div class="comment-list">
                <div class="single-comment justify-content-between d-flex">
                    <div class="user justify-content-between d-flex">
                        <div class="thumb">
                            <img src="img/comment/comment_1.png" alt="">
                        </div>
                        <div class="desc">
                            <p class="comment">
                                Multiply sea night grass fourth day sea lesser rule open subdue female fill which them
                                Blessed, give fill lesser bearing multiply sea night grass fourth day sea lesser
                            </p>
                            <div class="d-flex justify-content-between">
                                <div class="d-flex align-items-center">
                                    <h5>
                                        <a href="#">Emilly Blunt</a>
                                    </h5>
                                    <p class="date">December 4, 2017 at 3:12 pm </p>
                                </div>
                                <div class="reply-btn">
                                    <a href="#" class="btn-reply text-uppercase">reply</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="blog-author">
            <div class="media align-items-center">
                <img src="img/blog/author.png" alt="">
                <div class="media-body">
                    <a href="#">
                        <h4>Harvard milan</h4>
                    </a>
                    <p>Second divided from form fish beast made. Every of seas all gathered use saying you're, he
                        our dominion twon Second divided from</p>
                </div>
            </div>
        </div>

        <div class="comments-area">
            <div class="comment-list">
                <div class="single-comment justify-content-between d-flex">
                    <div class="user justify-content-between d-flex">
                        <div class="thumb">
                            <img src="img/comment/comment_1.png" alt="">
                        </div>
                        <div class="desc">
                            <p class="comment">
                                Multiply sea night grass fourth day sea lesser rule open subdue female fill which them
                                Blessed, give fill lesser bearing multiply sea night grass fourth day sea lesser
                            </p>
                            <div class="d-flex justify-content-between">
                                <div class="d-flex align-items-center">
                                    <h5>
                                        <a href="#">Emilly Blunt</a>
                                    </h5>
                                    <p class="date">December 4, 2017 at 3:12 pm </p>
                                </div>
                                <div class="reply-btn">
                                    <a href="#" class="btn-reply text-uppercase">reply</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
