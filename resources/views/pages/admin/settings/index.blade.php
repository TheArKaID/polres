@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Settings</h1>
        <a href="{{url('/admin/settings/ubah')}}" class="btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-pencil-alt fa-sm text-white-50"></i> Edit Settings
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
                    <tr>
                        <th width="150px">Nama Polres</th>
                        <td>{{$setting->namapolres}}</td>
                    </tr>
                    <tr>
                        <th width="150px">Jargon</th>
                        <td>{{$setting->jargon}}</td>
                    </tr>
                    <tr>
                        <th width="150px">No. Telefon</th>
                        <td>{{$setting->notelpon}}</td>
                    </tr>
                    <tr>
                        <th width="150px">Alamat</th>
                        <td>{!!$setting->alamat!!}</td>
                    </tr>
                    <tr>
                        <th width="150px">Logo</th>
                        <td><img src="{{asset('frontend/img/setting/'.$setting->logo)}}" style="width:50%"></td>
                    </tr>
                    <tr>
                        <th width="150px">Favicon</th>
                        <td><img src="{{asset('frontend/img/setting/'.$setting->favicon)}}" style="width:50%"></td>
                    </tr>
                    <tr>
                        <th width="150px">Background</th>
                        <td><img src="{{asset('frontend/img/setting/'.$setting->background)}}" style="width:50%"></td>
                    </tr>
                    <tr>
                        <th width="150px">Instagram</th>
                        <td>{{$setting->instagram}}</td>
                    </tr>
                    <tr>
                        <th width="150px">Facebook</th>
                        <td>{{$setting->facebook}}</td>
                    </tr>
                    <tr>
                        <th width="150px">Twitter</th>
                        <td>{{$setting->twitter}}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Hapus Pengumuman</h5>
                    <button type="button" class="close" data-dismiss="modal"
                        aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Apakah anda yakin menghapus settings ini?
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
