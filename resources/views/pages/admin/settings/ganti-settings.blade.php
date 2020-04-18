@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Ubah Favicon</h1>
    </div>
    <div class="alert alert-danger">
        <ul>

        </ul>
    </div>
    <div class="card shadow">
        <div class="card-body">
            <form action="/admin/banner/prosestambah" method="POST" enctype="multipart/form-data">

                <div class="form-group">
                    <label for="judul" class="bold">Favicon</label>
                    <input type="file" class="form-control" name="gambar" placeholder="gambar">
                    <p>*Format gambar .ico</p>
                </div>

                <div class="form-group">
                    <label for="judul" class="bold">Logo Navbar</label>
                    <input type="file" class="form-control" name="gambar" placeholder="gambar">
                    <p>*Format gambar .jpg .jpeg .png dan maksimal ukuran 5mb</p>
                </div>

                <div class="form-group">
                    <label for="judul" class="bold">Logo Footer</label>
                    <input type="file" class="form-control" name="gambar" placeholder="gambar">
                    <p>*Format gambar .jpg .jpeg .png dan maksimal ukuran 5mb</p>
                </div>

                <div class="form-group">
                    <label for="judul" class="bold">Alamat</label>
                    <input type="text" class="form-control" name="judul" placeholder="Masukkan Alamat">
                </div>

                <div class="form-group">
                    <label for="judul" class="bold">Background</label>
                    <input type="file" class="form-control" name="gambar" placeholder="gambar">
                    <p>*Format gambar .jpg .jpeg .png dan maksimal ukuran 5mb</p>
                </div>

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
