@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Ubah Setting</h1>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </div>
    @endif
    <div class="card shadow">
        <div class="card-body">
            <form action="/admin/settings/prosesedit" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="polres" class="bold">Nama Polres</label>
                    <input type="text" class="form-control" name="namapolres" placeholder="Masukkan Nama Polres (255)" maxlength="255" required>
                </div>

                <div class="form-group">
                    <label for="jargon" class="bold">Jargon</label>
                    <input type="text" class="form-control" name="jargon" placeholder="Masukkan Jargon Polres (255)" maxlength="255" required>
                </div>

                <div class="form-group">
                    <label for="notelpon" class="bold">No. Telefon</label>
                    <input type="number" class="form-control" name="notelpon" placeholder="Masukkan No Telfon Polres" maxlength="255" required>
                </div>

                <div class="form-group">
                    <label for="alamat" class="bold">Alamat</label>
                    <textarea name="alamat" rows="10" required></textarea>
                </div>

                <div class="form-group">
                    <label for="logo" class="bold">Logo</label>
                    <input type="file" class="form-control" name="logo" placeholder="Logo" required>
                    <p>*Format gambar .jpg .jpeg .png dan maksimal ukuran 5mb</p>
                </div>

                <div class="form-group">
                    <label for="favicon" class="bold">Favicon</label>
                    <input type="file" class="form-control" name="favicon" placeholder="favicon" required>
                    <p>*Format gambar .ico</p>
                </div>

                <div class="form-group">
                    <label for="background" class="bold">Background</label>
                    <input type="file" class="form-control" name="background" placeholder="background" required>
                    <p>*Format gambar .jpg .jpeg .png dan maksimal ukuran 5mb</p>
                </div>

                <div class="form-group">
                    <label for="instagram" class="bold">Instagram</label>
                    <input type="text" class="form-control" name="instagram" placeholder="Masukkan URL Instagram (https://www.instagram.com/polres/)">
                </div>

                <div class="form-group">
                    <label for="facebook" class="bold">Facebook</label>
                    <input type="text" class="form-control" name="facebook" placeholder="Masukkan URL Facebook (https://web.facebook.com/polres)">
                </div>

                <div class="form-group">
                    <label for="twitter" class="bold">Twitter</label>
                    <input type="text" class="form-control" name="twitter" placeholder="Masukkan URL Twitter (https://twitter.com/polres)">
                </div>

                <button type="submit" class="btn btn-primary btn-block">
                    Simpan
                </button>
            </form>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
<script src="{{asset('ckeditor/ckeditor.js')}}"></script>
<script>
    CKEDITOR.replace('alamat');
</script>
@endsection
