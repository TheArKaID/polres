@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Tupoksi</h1>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </div>
    @endif
    <div class="card shadow">
        <div class="card-body">
            <form action="/admin/tupoksi/prosesedit" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="tupoksi" class="bold">Nama Tupoksi</label>
                    <input type="text" class="form-control" name="tupoksi" placeholder="Nama Tupoksi" value="{{$tupoksi->tupoksi}}" required>
                    <p>*Nama dari Jabatan yang ada di Polres. Misal, <i><b>Kapolres</b></i> atau <i><b>Divisi Humas Polres</b></i></p>
                </div>
                <div class="form-group">
                    <label for="deskripsi" class="bold">Deskripsi</label>
                    <textarea class="form-control" name="deskripsi" placeholder="Deskripsi" required>{{$tupoksi->deskripsi}}</textarea>
                    <p>*Tugas Pokok dan Fungsi dari Jabatan yang disebutkan di atas.</p>
                </div>
                <div class="form-group">
                    <label for="image"  class="bold">Image</label>
                    <img src="{{asset('/frontend/img/tupoksi/'.$tupoksi->gambar)}}" width="100%">
                </div>
                <input type="hidden" name="id" value="{{$tupoksi->id}}">
                <button type="submit" class="btn btn-primary btn-block">
                    Update
                </button>
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

@endsection
