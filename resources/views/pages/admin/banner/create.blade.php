@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Banner</h1>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="card shadow">
        <div class="card-body">
            <form action="/admin/banner/prosestambah" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="judul" class="bold">Judul</label>
                    <input type="text" class="form-control" name="judul" placeholder="Judul (Maks 15 Karakter)" maxlength="15">
                </div>
                <div class="form-group">
                    <label for="deskripsi" class="bold">Deskripsi</label>
                    <textarea class="form-control" name="deskripsi" placeholder="Deskripsi (Maks 200 Karakter)" maxlength="200"></textarea>
                </div>
                <div class="form-group">
                    <label for="gambar" class="bold">Gambar</label>
                    <input type="file" class="form-control" name="gambar" placeholder="gambar">
                </div>
                <button type="submit" class="btn btn-primary btn-block">
                    Simpan
                </button>
            </form>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

@endsection
