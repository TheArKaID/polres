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
                            <div>{{$pengaduan->nama}}</div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="status" class="bold">Status Kasus</label>
                            <select class="form-control" name="gender" required="">
                                <option value="M" {{$pengaduan->status=='M' ? 'selected' : ''}} hidden>Menunggu</option>
                                <option value="P" {{$pengaduan->status=='P' ? 'selected' : ''}}>Proses</option>
                                <option value="S" {{$pengaduan->status=='S' ? 'selected' : ''}}>Selesai</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="title" class="bold">Penjelasan</label>
                            <div>{{$pengaduan->penjelasan}}</div>
                        </div>
                    </div>
                </div>

                <div class="bg-dark" style="overflow: auto; width: 100%; height: 500px;">
                    @foreach ($pengaduan->percakapan as $pesan)
                        @if ($pesan->isadmin==1)
                            <div class="row m-3" style="width: 70%; float: right;">
                                <p class="p-4 text-dark"
                                    style="background: #7befb2; width: 100%; border-radius: 5px 5px 0px 5px;">
                                    {{$pesan->pesan}}
                                </p>
                            </div>
                        @else
                            <div class="row m-3" style="width: 70%;">
                                <p class="bg-light p-4 text-dark" style="width: 100%; border-radius: 5px 5px 5px 0px;">
                                    {{$pesan->pesan}}
                                </p>
                            </div>
                        @endif
                    @endforeach
                </div>
                <div class="row mt-2">
                    <div class="col-10 pr-0">
                        <div class="form-group">
                            <textarea name="tulisan" rows="1" class="d-block w-100 form-control" style="border-radius: 0px 0px 5px 5px;"></textarea>
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
