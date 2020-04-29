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
                @if ($errors->any())
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </div>
                @endif
                @if (session()->has('Berhasil'))
                    <div class="alert alert-success">
                        {{session()->get('Berhasil')}}
                    </div>
                @endif
                <form class="form-contact comment_form" action="/pengaduan/lapor" method="POST">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="text" class="form-control " name="name" placeholder="Nama Lengkap Anda" value="{{old('name')}}" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" placeholder="Alamat Email Anda" value="{{old('email')}}" required>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <input type="text" class="form-control" name="phone" placeholder="No Telepon Anda" value="{{old('phone')}}" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <select class="form-control select2" name="category" required>
                                    <option selected disabled hidden>- Pilih Kategori</option>
                                    @foreach ($kategori as $k)
                                        <option value="{{$k->id}}">{{$k->kategori}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <select class="form-control" name="gender" required="">
                                    <option hidden disabled selected>- Jenis Kelamin</option>
                                    <option value="L">Laki Laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9"placeholder="Write Comment" required>{{old('comment')}}</textarea>
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
