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
            <form action="/admin/settings/prosestambah" method="POST" enctype="multipart/form-data">

                <div class="form-group">
                    <label for="favicon" class="bold">Favicon</label>
                    <input type="file" class="form-control" name="favicon" placeholder="favicon">
                    <p>*Format gambar .ico</p>
                </div>

                <div class="form-group">
                    <label for="nama-polres" class="bold">Nama Polres</label>
                    <input type="text" class="form-control" name="nama-polres" placeholder="Masukkan Nama Polres">
                </div>

                <div class="form-group">
                    <label for="logo-navbar" class="bold">Logo Navbar</label>
                    <input type="file" class="form-control" name="logo-navbar" placeholder="Logo Navbar">
                    <p>*Format gambar .jpg .jpeg .png dan maksimal ukuran 5mb</p>
                </div>

                <div class="form-group">
                    <label for="logo-footer" class="bold">Logo Footer</label>
                    <input type="file" class="form-control" name="logo-footer" placeholder="Logo Footer">
                    <p>*Format gambar .jpg .jpeg .png dan maksimal ukuran 5mb</p>
                </div>

                <div class="form-group">
                    <label for="alamat" class="bold">Alamat</label>
                    <textarea name="alamat" rows="10"></textarea>
                </div>

                <div class="form-group">
                    <label for="background" class="bold">Background</label>
                    <input type="file" class="form-control" name="background" placeholder="background">
                    <p>*Format gambar .jpg .jpeg .png dan maksimal ukuran 5mb</p>
                </div>

                <div class="form-group">
                    <label for="instagram" class="bold">Instagram</label>
                    <input type="text" class="form-control" name="instagram" placeholder="Masukkan URL Instagram">
                </div>
                <div class="form-group">
                    <label for="facebook" class="bold">Facebook</label>
                    <input type="text" class="form-control" name="facebook" placeholder="Masukkan URL Facebook">
                </div>
                <div class="form-group">
                    <label for="twitter" class="bold">Twitter</label>
                    <input type="text" class="form-control" name="twitter" placeholder="Masukkan URL Twitter">
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
