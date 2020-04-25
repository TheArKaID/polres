@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Pengaduan</h1>
    </div>

    <div class="row" style="display:block">
        <div class="card-body" style="overflow: auto">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" collspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Lengkap</th>
                            <th>Email</th>
                            <th>No Telepon</th>
                            <th>Kategori Pengaduan</th>
                            <th>Jenis Kelamin</th>
                            <th>Penjelasan</th>
                            <th>Status</th>
                             <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($pengaduan as $p)
                            <tr>
                                <td>{{$no}}</td>
                                <td>{{$p->nama}}</td>
                                <td>{{$p->email}}</td>
                                <td>{{$p->notelpon}}</td>
                                <td>{{$p->kategori->kategori}}</td>
                                <td>{{$p->jeniskelamin}}</td>
                                <td>{!!$p->penjelasan!!}</td>
                                <td>{{$p->status}}</td>


                                <td>
                                    <a href="{{url('/admin/pengaduan/balas/'.$p->id)}}" class="btn btn-primary">
                                        <i class="fas fa-comments"></i>
                                    </a>
                                </td>
                            </tr>
                            @php
                                $no++;
                            @endphp
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="card-body">
            <a href="pengaduan/tambahKategori" class="btn btn-primary mb-2" style="float:right">Tambah Kategori</a>
            <table class="table table-sm table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>Kategori</th>
                        <th style="width: 50px">Action</th>
                    </tr>
                </thead>
                @foreach ($kategori as $k)
                    <tr>
                        <td>{{$k->kategori}}</td>
                        <td><a href="pengaduan/hapusKategori/{{$k->id}}" class="btn btn-danger">Hapus</a></td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
@endsection
