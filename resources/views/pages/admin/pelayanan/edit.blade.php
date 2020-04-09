@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Pelayanan</h1>

    </div>

    <div class="card shadow">
        <div class="card-body">
            <form action="">
                <div class="form-group">
                    <label for="judul" class="bold">Judul</label>
                    <input type="text" class="form-control" name="judul" placeholder="Judul" value="">
                </div>
                <div class="form-group">
                    <label for="deskripsi" class="bold">Deskripsi</label>
                    <textarea name="deskripsi" rows="10"></textarea>
                </div>
                <div class="form-group">
                    <label for="gambar" class="bold">Gambar</label>
                </div>
                <div class="form-group">
                     <img src="{{url('frontend/img/galeri/polisi-9.jpg')}}" alt="" style="width: 150px"
                                    class="img-thumbnail" />
                    <input type="file" class="form-control" name="gambar" placeholder="gambar" class="form-control">
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
    CKEDITOR.replace('deskripsi');
</script>
<!-- /.container-fluid -->

@endsection
