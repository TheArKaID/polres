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
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="nama" class="bold">Nama Lengkap</label>
                        </div>
                        <div class="form-group">
                            <label for="nama">Paijo</label>
                        </div>
                    </div>
                    <div class="col">
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
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="title" class="bold">Pertanyaan</label>
                        </div>
                        <div class="form-group">
                            <label for="id">Kenapa motor saya hilang?</label>
                        </div>
                    </div>
                </div>

                <div class="bg-dark" style="overflow: auto; width: 100%; height: 300px;">
                    <div class="row m-3" style="width: 70%;">
                        <p class="bg-light p-4 text-dark" style="width: 100%; border-radius: 5px 5px 5px 0px;">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                            galley of type and scrambled it to make a type specimen book. It has survived not only five
                            centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                            It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
                            passages, and more recently with desktop publishing software like Aldus PageMaker including
                            versions of Lorem Ipsum.
                        </p>
                    </div>
                    <div class="row m-3" style="width: 70%; float: right;">
                        <p class="p-4 text-dark"
                            style="background: #7befb2; width: 100%; border-radius: 5px 5px 0px 5px;">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                            galley of type and scrambled it to make a type specimen book. It has survived not only five
                            centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                            It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
                            passages, and more recently with desktop publishing software like Aldus PageMaker including
                            versions of Lorem Ipsum.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-10 pr-0">
                        <div class="form-group">
                            <textarea name="tulisan" rows="1" class="d-block w-100 form-control" style="
            border-radius: 0px 0px 5px 5px;"></textarea>
                        </div>
                    </div>
                    <div class="col-2 pl-0">
                        <button type="submit" class="btn btn-primary btn-block">
                            Kirim
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

@endsection
