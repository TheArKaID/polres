@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Polsek</h1>
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
            <form action="/admin/polsek/prosestambah" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="namapolsek" class="bold">Nama Polsek</label>
                    <input type="text" class="form-control" name="namapolsek" placeholder="Nama Polsek" value="" required>
                </div>
                
                <div class="form-group">
                    <label for="kapolsek" class="bold">Nama Kapolsek</label>
                    <input type="text" class="form-control" name="kapolsek" placeholder="Nama Kapolsek" value="" required>
                </div>

                <div class="form-group">
                    <label for="fotokapolsek" class="bold">Foto Kapolsek</label>
                    <input type="file" class="form-control" name="fotokapolsek" placeholder="fotokapolsek" class="form-control" required>
                    <p>*Format gambar .jpg .jpeg .png dan maksimal ukuran 5mb</p>
                </div>

                <div class="form-group">
                    <label for="alamat" class="bold">Alamat</label>
                    <textarea name="alamat" rows="10" class="form-control" required></textarea>
                </div>

                <div class="form-group">
                    <label for="notelpon" class="bold">No. Telepon</label>
                    <input type="text" class="form-control" name="notelpon" placeholder="notelpon" value="">
                </div>

                <div class="form-group">
                    <label for="email" class="bold">Email</label>
                    <input type="text" class="form-control" name="email" placeholder="email" value="">
                </div>
                
                <div class="form-group">
                    <label for="wilayah">Wilayah</label>
                    <select name="wilayah" class="form-control" required>
                        <option disabled hidden selected>Pilih Wilayah</option>
                        @foreach ($wilayah as $w)
                            <option value="{{$w->id}}">{{$w->wilayah}}</option>
                        @endforeach
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="keterangan" class="bold">Keterangan</label>
                    <textarea name="keterangan" rows="10" class="form-control" required></textarea>
                </div>

                <div class="form-group">
                    <label for="facebook" class="bold">User Facebook</label>
                    <input type="text" class="form-control" name="facebook" placeholder="User Facebook" value="">
                </div>

                <div class="form-group">
                    <label for="twitter" class="bold">User Twitter</label>
                    <input type="text" class="form-control" name="twitter" placeholder="User Twitter" value="">
                </div>

                <div class="form-group">
                    <label for="instagram" class="bold">User Instagram</label>
                    <input type="text" class="form-control" name="instagram" placeholder="User Instagram" value="">
                </div>

                <div class="form-group">
                    <label for="gambar" class="bold">Gambar</label>
                    <input type="file" class="form-control" name="gambar" placeholder="gambar" class="form-control" required>
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
    CKEDITOR.replace('keterangan');
</script>
<!-- /.container-fluid -->

@endsection
