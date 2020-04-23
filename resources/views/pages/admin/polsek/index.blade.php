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
        <div class="card-body" style="overflow: auto">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" collspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul</th>
                            <th>Alamat</th>
                            <th>Foto</th>
                            <th>Telepon</th>
                            <th>Email</th>
                            <th>Wilayah</th>
                            <th>Akun Facebook</th>
                            <th>Akun Twitter</th>
                            <th>Akun Instagram</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $no=0;
                        @endphp
                        @foreach ($polsek as $p)
                            <tr>
                                <td>{{++$no}}</td>
                                <td>{{$p->namapolsek}}</td>
                                <td>{!!$p->alamat!!}</td>
                                <td>
                                    <img src="{{asset('frontend/img/polsek/'.$p->gambar)}}" alt="" style="width: 150px; max-width: none;"
                                    class="img-thumbnail" />
                                </td>
                                <td>{{$p->notelpon}}</td>
                                <td>{{$p->email}}</td>
                                <td>{{$p->wilayah->wilayah}}</td>
                                <td>{{$p->facebook}}</td>
                                <td>{{$p->twitter}}</td>
                                <td>{{$p->instagram}}</td>
                                <td>
                                    <a href="{{url('/admin/polsek/edit/'.$p->id)}}" class="btn btn-info">
                                        <i class="fas fa-pencil-alt"></i>
                                    </a>
                                    <form class="d-inline">
                                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal" onclick="hapus('{{$p->id}}')">
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
                                                        <a href="" id="deleteButton" type="button" class="btn btn-danger">Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="card-body">
            <a href="polsek/tambahwilayah" class="btn btn-primary mb-2" style="float:right">Tambah Wilayah</a>
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
                        <td><a href="polsek/hapuswilayah/{{$w->id}}" class="btn btn-danger btn-sm">Hapus</a></td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
<script>
    function hapus(id) {
        var deleteButton = document.getElementById('deleteButton');
        deleteButton.href = "/admin/polsek/hapus/"+id;
    }
</script>
@endsection
