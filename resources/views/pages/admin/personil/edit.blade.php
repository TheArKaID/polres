@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Personil</h1>
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
            <form action="/admin/personil/prosesedit" method="POST">
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{$personil->id}}">
                <div class="form-group">
                    <label for="nama" class="bold">Nama Personil</label>
                    <input type="text" class="form-control" name="nama" placeholder="Nama Personil" value="{{$personil->nama}}" required>
                </div>
                <div class="form-group">
                    <label for="deskripsi" class="bold">Deskripsi</label>
                    <textarea class="form-control" name="deskripsi" placeholder="Deskripsi" required>{{$personil->deskripsi}}</textarea>
                </div>
                <div class="form-group">
                    <label for="image"  class="bold">Image</label>
                    <img src="{{asset('frontend/img/personil/'.$personil->gambar)}}" width="100%">
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
