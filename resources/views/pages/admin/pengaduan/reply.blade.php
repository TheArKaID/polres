@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tanggap Pengaduan</h1>

    </div>

    <div class="card shadow">
        <div class="card-body">
            <form action="">
                <div class="form-group">
                    <label for="id" class="bold">Id</label>
                </div>
                <div class="form-group">
                    <label for="id">1</label>
                </div>
                <div class="form-group">
                    <label for="nama" class="bold">Nama Lengkap</label>
                </div>
                <div class="form-group">
                    <label for="nama">Paijo</label>
                </div>
                <div class="form-group">
                    <label for="telp" class="bold">No Telepon</label>
                </div>
                <div class="form-group">
                    <label for="telp">000000000</label>
                </div>
                <div class="form-group">
                    <label for="status" class="bold">Status Kasus</label>
                </div>
                <div class="form-group">
                    <select class="form-control" name="gender" required="">
                        <option value="">- Status</option>
                        <option value="M">Menunggu</option>
                        <option value="P">Proses</option>
                        <option value="S">Selesai</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="jk" class="bold">Jenis Kelamin</label>
                </div>
                <div class="form-group">
                    <label for="jk">Laki-Laki</label>
                </div>
                <div class="form-group">
                    <label for="title" class="bold">Pertanyaan</label>
                </div>
                <div class="form-group">
                    <label for="id">Kenapa motor saya hilang?</label>
                </div>
                <div class="form-group">
                    <label for="tulisan" class="bold">Jawaban</label>
                    <textarea name="tulisan" rows="10" class="d-block w-100 form-control"></textarea>
                </div>
                <button type="submit" class="btn btn-primary btn-block">
                    Simpan
                </button>
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

@endsection
