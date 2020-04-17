@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Tupoksi</h1>
    </div>
        <div class="alert alert-danger">
            <ul>

            </ul>
        </div>
    <div class="card shadow">
        <div class="card-body">
            <form action="/admin/tupoksi/prosesedit" method="POST">

                <div class="form-group">
                    <label for="nama" class="bold">Nama Tupoksi</label>
                    <input type="text" class="form-control" name="nama" placeholder="Nama Tupoksi" value="" required>
                </div>
                <div class="form-group">
                    <label for="deskripsi" class="bold">Deskripsi</label>
                    <textarea class="form-control" name="deskripsi" placeholder="Deskripsi" required></textarea>
                </div>
                <div class="form-group">
                    <label for="image"  class="bold">Image</label>
                    <img src="" width="100%">
                                   <p>*Format gambar .jpg .jpeg .png dan maksimal ukuran 5mb</p>
                </div>
                <input type="hidden" name="id" value="">
                <button type="submit" class="btn btn-primary btn-block">
                    Update
                </button>
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

@endsection
