@extends('layouts.admin')

@section('content')
      <!-- Begin Page Content -->
  <div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    </div>

    <!-- Content Row -->
    <div class="row">

      <!-- Earnings (Monthly) Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
        <a href="/admin/banner" style="text-decoration:none">
        <div class="card border-left-primary shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Banner</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
              <h2>{{$banner}}</h2>
              </div>
              <div class="col-auto">
                <i class="fas fa-newspaper fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </div>
        </a>
      </div>

      <!-- Earnings (Monthly) Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
        <a href="/admin/pelayanan" style="text-decoration:none">
        <div class="card border-left-success shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Pelayanan</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
            <h2>{{$pelayanan}}</h2>
            </div>
              <div class="col-auto">
                <i class="fas fa-id-card fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </div>
        </a>
      </div>

      <!-- Earnings (Monthly) Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
        <a href="/admin/inovasi" style="text-decoration:none">
        <div class="card border-left-info shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Inovasi</div>
                <div class="row no-gutters align-items-center">
                  <h2>{{$inovasi}}</h2>
                    <div class="col-auto">
                  <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"></div>
                  </div>
                </div>
              </div>
              <div class="col-auto">
                <i class="fas fa-chart-line fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </div>
        </a>
      </div>

      <!-- Pending Requests Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
        <a href="/admin/galeri" style="text-decoration:none">
        <div class="card border-left-warning shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Galeri</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
            <h2>{{$galeri}}</h2>
            </div>
              <div class="col-auto">
                <i class="fas fa-images fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </div>
        </a>
      </div>

       <!-- Earnings (Monthly) Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
        <a href="/admin/berita" style="text-decoration:none">
        <div class="card border-left-dark shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">Berita</div>
                <div class="row no-gutters align-items-center">
                  <h2>{{$berita}}</h2>
                    <div class="col-auto">
                  <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"></div>
                  </div>
                </div>
              </div>
              <div class="col-auto">
                <i class="fas fa-copy fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </div>
        </a>
      </div>

      <!-- Pending Requests Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
        <a href="/admin/pengaduan" style="text-decoration:none">
        <div class="card border-left-danger shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Pengaduan</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
            <h2>{{$pengaduan}}</h2>
            </div>
              <div class="col-auto">
                <i class="fas fa-comments fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </div>
        </a>
      </div>

    </div>



  </div>
  <!-- /.container-fluid -->

@endsection
