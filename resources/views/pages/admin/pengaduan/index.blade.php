@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Pengaduan</h1>
    </div>

    <div class="row">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" collspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama Lengkap</th>
                            <th>Email</th>
                            <th>No Telepon</th>
                            <th>Kategori Pengaduan</th>
                            <th>Jenis Kelamin</th>
                            <th>Pengaduan</th>
                            <th>Status</th>
                             <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Admin Mantap</td>
                            <td>0000000000000</td>
                            <td>Admin@google.com</td>
                            <td>Curanmor</td>
                            <td>Laki-laki</td>
                            <td>kenapa motor saya dicuri?</td>
                            <td>Menunggu</td>


                            <td>
                                <a href="{{url('/admin/pengaduan/ubah')}}" class="btn btn-primary">
                                    <i class="fas fa-comments"></i>
                                </a>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
@endsection
