@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Inovasi</h1>

    </div>

    <div class="card shadow">
        <div class="card-body">
            <form action="">
                <div class="form-group">
                    <label for="judul" class="bold">Judul</label>
                    <input type="text" class="form-control" name="judul" placeholder="Judul" value="">
                </div>
                <div class="form-group">
                    <label for="tulisan" class="bold">Tulisan</label>
                    <textarea name="tulisan" rows="10" class="d-block w-100 form-control"></textarea>
                </div>
                <div class="form-group">
                    <label for="image" class="bold">Image</label>
                    <input type="file" class="form-control" name="image" placeholder="Image" class="form-control">
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
