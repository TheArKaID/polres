@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Ubah Alamat</h1>
    </div>
        <div class="alert alert-danger">
            <ul>

            </ul>
        </div>
    <div class="card shadow">
        <div class="card-body">
            <form action="/admin/banner/prosestambah" method="POST" enctype="multipart/form-data">

                <div class="form-group">
                    <label for="judul" class="bold">Alamat</label>
                    <input type="text" class="form-control" name="judul" placeholder="Masukkan Alamat">
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
