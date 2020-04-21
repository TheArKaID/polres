@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Polsek</h1>

    </div>

    <div class="card shadow">
        <div class="card-body">
            <form action="/admin/berita/prosestambah" method="POST" enctype="multipart/form-data">

                <div class="form-group">
                    <label for="judul" class="bold">Judul</label>
                    <input type="text" class="form-control" name="judul" placeholder="Judul" value="">
                </div>
                <div class="form-group">
                    <label for="gambar" class="bold">Gambar</label>
                    <input type="file" class="form-control" name="gambar" placeholder="gambar" class="form-control">
                                    <p>*Format gambar .jpg .jpeg .png dan maksimal ukuran 5mb</p>
                </div>
                <div class="form-group">
                    <label for="alamat" class="bold">Alamat</label>
                    <textarea name="alamat" rows="10"></textarea>
                </div>
                <div class="form-group">
                    <label for="telepon" class="bold">Telepon</label>
                    <input type="number" class="form-control" name="telepon" placeholder="Telepon" value="">
                </div>
                <div class="form-group">
                    <label for="email" class="bold">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Email" value="">
                </div>
                <div class="form-group">
                    <label for="facebook" class="bold">Akun Facebook</label>
                    <input type="text" class="form-control" name="facebook" placeholder="Facebook" value="">
                </div>
                <div class="form-group">
                    <label for="twitter" class="bold">Akun Twitter</label>
                    <input type="text" class="form-control" name="twitter" placeholder="Twitter" value="">
                </div>
                <div class="form-group">
                    <label for="instagram" class="bold">Akun Instagram</label>
                    <input type="text" class="form-control" name="instagram" placeholder="Instagram" value="">
                </div>
                <button type="submit" class="btn btn-primary btn-block">
                    Simpan
                </button>
            </form>
        </div>
    </div>

</div>
<script src="{{asset('ckeditor/ckeditor.js')}}"></script>
<script>
    CKEDITOR.replace('alamat');
</script>
<!-- /.container-fluid -->

@endsection
