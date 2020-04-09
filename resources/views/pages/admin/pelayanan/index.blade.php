@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Pelayanan</h1>
        <a href="{{url('/admin/pelayanan/tambah')}}" class="btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-plus fa-sm text-white-50"></i> Tambah Pelayanan
        </a>
    </div>

    <div class="row">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" collspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul</th>
                            <th>Tulisan</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1
                        @endphp
                        @foreach ($pelayanan as $p)
                            <tr>
                                <td>{{$no}}</td>
                                <td>{{$p->judul}}</td>
                                <td>{!!$p->deskripsi!!}</td>
                                <td>
                                    <img src="{{url('frontend/img/pelayanan/'.$p->gambar)}}" alt="" style="width: 150px"
                                        class="img-thumbnail" />
                                </td>
                                <td>
                                    <a href="/admin/pelayanan/ubah/{{$p->id}}" class="btn btn-info">
                                        <i class="fas fa-pencil-alt"></i>
                                    </a>
                                    <form class="d-inline">
                                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal" onclick="hapus('{{$p->id}}')">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                        <!-- Modal -->
                                        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog"
                                            aria-labelledby="deleteModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="deleteModalLabel">Hapus Pelayanan</h5>
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
                                                        <a id="deleteButton" href="" type="button" class="btn btn-danger">Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
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
</div>
<script>
    function hapus(id) {
        var deleteButton = document.getElementById('deleteButton');
        deleteButton.href = "/admin/pelayanan/hapus/"+id;
    }
</script>
<!-- /.container-fluid -->
@endsection
