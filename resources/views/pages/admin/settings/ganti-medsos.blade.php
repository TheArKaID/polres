@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Ubah Media Sosial</h1>
    </div>
        <div class="alert alert-danger">
            <ul>

            </ul>
        </div>
    <div class="card shadow">
        <div class="card-body">
            <form action="/admin/banner/prosestambah" method="POST" enctype="multipart/form-data">

                <div class="form-group">
                    <label for="judul" class="bold">Instagram</label>
                    <input type="text" class="form-control" name="judul" placeholder="Masukkan URL Instagram">
                </div>
                <div class="form-group">
                    <label for="judul" class="bold">Facebook</label>
                    <input type="text" class="form-control" name="judul" placeholder="Masukkan URL Facebook">
                </div>
                <div class="form-group">
                    <label for="judul" class="bold">Twitter</label>
                    <input type="text" class="form-control" name="judul" placeholder="Masukkan URL Twitter">
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
