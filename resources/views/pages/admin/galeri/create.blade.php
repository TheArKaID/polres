@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    @if ($errors->any())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </div>
    @endif
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Galeri</h1>
    </div>
    <div class="card shadow">
        <div class="card-body">
            <form action="/admin/galeri/prosestambah" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="gambar" class="bold">Gambar</label>
                    <input type="file" class="form-control" name="gambar" placeholder="gambar" class="form-control">
                                    <p>*Format gambar .jpg .jpeg .png dan maksimal ukuran 5mb</p>
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
