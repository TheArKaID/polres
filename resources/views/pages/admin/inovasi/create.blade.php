@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Inovasi</h1>
    </div>
    <div class="container-fluid">
        @if ($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </div>
        @endif
    <div class="card shadow">
        <div class="card-body">
            <form action="/admin/inovasi/prosestambah" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="judul" class="bold">Judul</label>
                    <input type="text" class="form-control" name="judul" placeholder="Judul" value="{{old('judul')}}">
                </div>
                <div class="form-group">
                    <label for="deskripsi" class="bold">Deskripsi</label>
                    <textarea name="deskripsi" rows="10">{{old('deskripsi')}}</textarea>
                </div>
                <div class="form-group">
                    <label for="gambar" class="bold">Gambar</label>
                    <input type="file" class="form-control" name="gambar" placeholder="gambar" class="form-control">
                                        <p>*Format gambar .jpg .jpeg .png dan maksimal ukuran 5mb</p>
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
