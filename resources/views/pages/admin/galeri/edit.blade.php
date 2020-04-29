@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Galeri</h1>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </div>
    @endif
    <div class="card shadow">
        <div class="card-body">
            <form action="" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="" class="bold">Id Gambar</label>
                </div>
                <div class="form-group">
                    <label for="">1</label>
                </div>
                <div class="form-group">
                    <label for="image" class="bold">Image</label>
                </div>
                <div class="form-group">
                     <img src="{{url('frontend/img/galeri/polisi-9.jpg')}}" alt="" style="width: 150px"
                                    class="img-thumbnail" />
                    <input type="file" class="form-control" name="image" placeholder="Image" class="form-control">
                                   <p>*Format gambar .jpg .jpeg .png dan maksimal ukuran 5mb</p>
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
