@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Settings</h1>
        <a href="{{url('/admin/settings/ubah')}}" class="btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-plus fa-sm text-white-50"></i> Edit Settings
        </a>
    </div>

 <h6 class="bold mb-0 mt-5">Favicon</h6>
    <div class="row">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" collspacing="0">
                    <thead>
                        <tr>
                            <th>Favicon</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><img></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <h6 class="bold mb-0 mt-5">Nama Polres</h6>
    <div class="row">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" collspacing="0">
                    <thead>
                        <tr>
                            <th>Polres Batang</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><img></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

 <h6 class="bold mb-0 mt-5">Logo Navbar</h6>
    <div class="row">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" collspacing="0">
                    <thead>
                        <tr>
                            <th>Logo Navbar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><img></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

     <h6 class="bold mb-0 mt-5">Logo Footer</h6>
    <div class="row">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" collspacing="0">
                    <thead>
                        <tr>
                            <th>Logo Footer</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><img></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

     <h6 class="bold mb-0 mt-5">Logo Polres di Admin</h6>
    <div class="row">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" collspacing="0">
                    <thead>
                        <tr>
                            <th>Logo Polres di Admin</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><img></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <h6 class="bold mb-0 mt-5">Ganti Alamat</h6>
    <div class="row">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" collspacing="0">
                    <thead>
                        <tr>
                            <th>Alamat</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><img></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <h6 class="bold mb-0 mt-5">Background Header</h6>
    <div class="row">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" collspacing="0">
                    <thead>
                        <tr>
                            <th>Background</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Polisi siaga 1</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <h6 class="bold mb-0 mt-5">Media Sosial</h6>
    <div class="row">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" collspacing="0">
                    <thead>
                        <tr>
                            <th>Instagram</th>
                            <th>Facebook</th>
                            <th>Twitter</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>http://instagram.com</td>
                            <td>http://facebook.com</td>
                            <td>http://twitter.com</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Hapus Pengumuman</h5>
                <button type="button" class="close" data-dismiss="modal"
                    aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Apakah anda yakin menghapus settings ini?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary"
                    data-dismiss="modal">Close</button>
                <a id="deleteButton" href="#" type="button" class="btn btn-danger">Delete</a>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
<script>
    function hapus(id) {
        var deleteButton = document.getElementById('deleteButton');
        deleteButton.href = "/admin/banner/hapus/"+id;
    }
</script>
@endsection
