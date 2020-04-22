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
                    <input type="text" class="form-control" name="namapolres" placeholder="Masukkan Nama Polres (255)" maxlength="255" value="{{$setting->namapolres}}" required>
                </div>

                <div class="form-group">
                    <label for="jargon" class="bold">Jargon</label>
                    <input type="text" class="form-control" name="jargon" placeholder="Masukkan Jargon Polres (255)" maxlength="255" value="{{$setting->jargon}}" required>
                </div>

                <div class="form-group">
                    <label for="notelpon" class="bold">No. Telefon</label>
                    <input type="number" class="form-control" name="notelpon" placeholder="Masukkan No Telfon Polres" maxlength="255" value="{{$setting->notelpon}}" required>
                </div>

                <div class="form-group">
                    <label for="alamat" class="bold">Alamat</label>
                    <textarea name="alamat" rows="10" required>{{$setting->alamat}}</textarea>
                </div>

                <div class="form-group">
                    <label for="logo" class="bold">Logo</label>
                    <input type="file" class="form-control" name="logo" placeholder="Logo">
                    <p>*Format gambar .jpg .jpeg .png dan maksimal ukuran 5mb</p>
                    <p>*ukuran logo 315 x 120 mm</p>
                    <p>*Tambahkan untuk Mengganti, tidak diisi berarti tida mengubah Logo</p>
                </div>

                <div class="form-group">
                    <label for="favicon" class="bold">Favicon</label>
                    <input type="file" class="form-control" name="favicon" placeholder="favicon">
                    <p>*Format gambar .ico</p>
                    <p>*Tambahkan untuk Mengganti, tidak diisi berarti tida mengubah Favicon</p>
                </div>

                <div class="form-group">
                    <label for="background" class="bold">Background</label>
                    <input type="file" class="form-control" name="background" placeholder="background">
                    <p>*Format gambar .jpg .jpeg .png dan maksimal ukuran 5mb</p>
                    <p>*Tambahkan untuk Mengganti, tidak diisi berarti tida mengubah Background</p>
                </div>

                <div class="form-group">
                    <label for="instagram" class="bold">Instagram</label>
                    <input type="text" class="form-control" name="instagram" placeholder="Username Instagram" value="{{$setting->instagram}}" >
                    <p>*Username bisa dilihat setelah url yang mengarah ke profile</p>
                </div>

                <div class="form-group">
                    <label for="facebook" class="bold">Facebook</label>
                    <input type="text" class="form-control" name="facebook" placeholder="Username Facebook" value="{{$setting->facebook}}" >
                    <p>*Username bisa dilihat setelah url yang mengarah ke profile</p>
                </div>

                <div class="form-group">
                    <label for="twitter" class="bold">Twitter</label>
                    <input type="text" class="form-control" name="twitter" placeholder="Username Twitter" value="{{$setting->twitter}}" >
                    <p>*Username bisa dilihat setelah url yang mengarah ke profile</p>
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
