@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Polsek</h1>
        <a href="{{url('/admin/polsek/create')}}" class="btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-plus fa-sm text-white-50"></i> Tambah Polsek
        </a>
    </div>

    <div class="row" style="display:block">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" collspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul</th>
                            <th>Foto</th>
                            <th>Alamat</th>
                            <th>Telepon</th>
                            <th>Email</th>
                            <th>Akun Facebook</th>
                            <th>Akun Twitter</th>
                            <th>Akun Instagram</th>
                            <th>Lokasi</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php

                        @endphp
                            <tr>
                                <td>1</td>
                                <td>Polsek Tegalsari</td>
                                <td>
                                    <img src="" alt="" style="width: 150px"
                                    class="img-thumbnail" />
                                </td>
                                <td>AAAAAAAAAAAAAAA</td>
                                <td>082222222</td>
                                <td>polisi@google.com</td>
                                <td>RuangHalalIndonesia</td>
                                <td>RuangHalalIndonesia</td>
                                <td>RuangHalalIndonesia</td>
                                <td><iframe style="width: 100%;"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.768407239798!2d109.72771801477279!3d-6.918267495001245!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7024995fccab67%3A0x8f4f99463cfb2ab4!2sPolres%20Batang!5e0!3m2!1sid!2sid!4v1587120204846!5m2!1sid!2sid"
                                width="400" height="300" frameborder="0" style="border:0;" allowfullscreen=""
                                aria-hidden="false" tabindex="0"></iframe></td>
                                <td>
                                    <a href="{{url('/admin/polsek/edit')}}" class="btn btn-info">
                                        <i class="fas fa-pencil-alt"></i>
                                    </a>
                                    <form class="d-inline">
                                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Hapus Polsek</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Apakah anda yakin menghapus file ini?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Close</button>
                                                        <a href="" type="button" class="btn btn-danger">Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </td>
                            </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="card-body">
            <a href="tambahwilayah" class="btn btn-primary mb-2" style="float:right">Tambah Wilayah</a>
            <table class="table table-sm table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>Wilayah</th>
                        <th style="width: 50px">Action</th>
                    </tr>
                </thead>
                @foreach ($wilayah as $w)
                    <tr>
                        <td>{{$w->wilayah}}</td>
                        <td><a href="hapuswilayah/{{$w->id}}" class="btn btn-danger btn-sm">Hapus</a></td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
@endsection
