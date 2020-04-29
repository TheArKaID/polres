@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Polsek</h1>
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
            <form action="/admin/polsek/prosesedit" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{$polsek->id}}">
                <div class="form-group">
                    <label for="namapolsek" class="bold">Nama Polsek</label>
                    <input type="text" class="form-control" name="namapolsek" placeholder="Nama Polsek" value="{{$polsek->namapolsek}}" required>
                    <p>*Masukkan Full Nama Kepolisian Sektor. Misal, <b>Kepolisian Sektor Indonesia Raya</b></p>
                </div>
                
                <div class="form-group">
                    <label for="kapolsek" class="bold">Nama Kapolsek</label>
                    <input type="text" class="form-control" name="kapolsek" placeholder="Nama Kapolsek" value="{{$polsek->kapolsek}}" required>
                    <p>*Masukkan Nama Lengkap dan Gelar dari Kapolsek. Misal, <i><b>Jenderal (Pol) Idham Azis</b></i> atau <i><b>Jenderal Pol. Drs. Idham Azis M.Si</b></i></p>
                </div>

                <div class="form-group">
                    <label for="fotokapolsek" class="bold">Foto Kapolsek</label>
                    <input type="file" class="form-control" name="fotokapolsek" placeholder="fotokapolsek" class="form-control">
                    <p>*Format gambar .jpg .jpeg .png dan maksimal ukuran 5mb</p>
                </div>

                <div class="form-group">
                    <label for="alamat" class="bold">Alamat</label>
                    <textarea name="alamat" rows="10" class="form-control" required>{{$polsek->alamat}}</textarea>
                </div>

                <div class="form-group">
                    <label for="notelpon" class="bold">No. Telepon</label>
                    <input type="text" class="form-control" name="notelpon" placeholder="08XXXXXXXXXX" value="{{$polsek->notelpon}}">
                </div>

                <div class="form-group">
                    <label for="email" class="bold">Email</label>
                    <input type="text" class="form-control" name="email" placeholder="polsek@polsek.id" value="{{$polsek->email}}">
                </div>

                <div class="form-group">
                    <label for="wilayah">Wilayah</label>
                    <select name="wilayah" class="form-control" required>
                        @foreach ($wilayah as $w)
                            <option value="{{$w->id}}" {{$w->id==$polsek->wilayah_id ? "selected" : ""}}>{{$w->wilayah}}</option>
                        @endforeach
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="keterangan" class="bold">Keterangan</label>
                    <textarea name="keterangan" rows="10" class="form-control" required>{{$polsek->keterangan}}</textarea>
                </div>

                <div class="form-group">
                    <label for="facebook" class="bold">Facebook</label>
                    <input type="text" class="form-control" name="facebook" placeholder="facebook" value="{{$polsek->facebook}}">
                    <p>Username Facebook berada setelah url Facebook. Misal, <i>https://facebook.com/<b>DivHumasPolri</b></i></p>
                </div>

                <div class="form-group">
                    <label for="twitter" class="bold">Twitter</label>
                    <input type="text" class="form-control" name="twitter" placeholder="twitter" value="{{$polsek->twitter}}">
                    <p>Username Twitter berada setelah url Twitter. Misal, <i>https://twitter.com/<b>DivHumas_Polri</b></i></p>
                </div>

                <div class="form-group">
                    <label for="instagram" class="bold">Instagram</label>
                    <input type="text" class="form-control" name="instagram" placeholder="instagram" value="{{$polsek->instagram}}">
                    <p>Username Instagram berada setelah url Instagram. Misal, <i>https://www.instagram.com/<b>divisihumaspolri</b></i></p>
                </div>

                <div class="form-group">
                    <label for="gambar" class="bold">Gambar</label>
                    <input type="file" class="form-control" name="gambar" placeholder="gambar" class="form-control">
                    <p>*Format gambar .jpg .jpeg .png dan maksimal ukuran 5mb</p>
                    <p>*Tambahkan gambar untuk mengganti</p>
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
