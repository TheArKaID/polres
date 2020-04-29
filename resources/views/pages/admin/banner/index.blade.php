@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Banner</h1>
        <a href="{{url('/admin/banner/tambah')}}" class="btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-plus fa-sm text-white-50"></i> Tambah Banner
        </a>
    </div>
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
    <div class="row">
        <div class="card-body" style="overflow: auto">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" collspacing="0">
                    <thead>
                        <tr>
                            <th style="width: 40px">No</th>
                            <th>Judul</th>
                            <th style="width: 500px">Deskripsi</th>
                            <th style="width: 200px">Gambar</th>
                            <th style="width: 150px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $row = 1;
                        @endphp
                        @foreach ($banner as $b)
                        <tr>
                            <td>{{$row}}</td>
                            <td>{{$b->judul}}</td>
                            <td>{{$b->deskripsi}}</td>
                            <td>
                                <img src="{{url('frontend/img/banner/'.$b->gambar)}}" alt="" style="width: 200px" class="img-thumbnail" />
                            </td>
                            <td>
                                <a href="/admin/banner/ubah/{{$b->id}}" class="btn btn-info">
                                    <i class="fas fa-pencil-alt"></i>
                                </a>
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal" onclick="hapus('{{$b->id}}')">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                        @php
                            $row++;
                        @endphp
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Hapus Banner</h5>
                <button type="button" class="close" data-dismiss="modal"
                    aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Apakah anda yakin menghapus banner ini?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary"
                    data-dismiss="modal">Close</button>
                <a id="deleteButton" href="#" type="button" class="btn btn-danger">Delete</a>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
<script>
    function hapus(id) {
        var deleteButton = document.getElementById('deleteButton');
        deleteButton.href = "/admin/banner/hapus/"+id;
    }
</script>
@endsection
