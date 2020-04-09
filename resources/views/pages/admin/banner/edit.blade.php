@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Banner</h1>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="card shadow">
        <div class="card-body">
            <form action="/admin/banner/prosesedit" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="judul" class="bold">Judul</label>
                    <input type="text" class="form-control" name="judul" placeholder="Judul (Maks 15 Karakter)" maxlength="15" value="{{$banner->judul}}" required>
                </div>
                <div class="form-group">
                    <label for="deskripsi" class="bold">Deskripsi</label>
                    <textarea class="form-control" name="deskripsi" placeholder="Deskripsi (Maks 200 Karakter)" maxlength="200" required>{{$banner->deskripsi}}</textarea>
                </div>
                <div class="form-group">
                    <label for="image"  class="bold">Image</label>
                    <img src="{{url('frontend/img/banner/'.$banner->gambar)}}" width="100%">
                </div>
                <input type="hidden" name="id" value="{{$banner->id}}">
                <button type="submit" class="btn btn-primary btn-block">
                    Update
                </button>
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

@endsection
