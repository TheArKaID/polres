@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Banner</h1>
    </div>

    <div class="card shadow">
        <div class="card-body">
            <form action="" enctype="multipart/form-data">
                <div class="form-group">
                    <label for=""  class="bold">Id Gambar</label>
                </div>
                <div class="form-group">
                    <label for="">1</label>
                </div>
                <div class="form-group">
                    <label for="image"  class="bold">Image</label>
                    <input type="file" class="form-control" name="image" placeholder="Image" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary btn-block">
                    Update
                </button>
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

@endsection
