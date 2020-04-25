<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{url('/admin')}}">
    <div class="sidebar-brand-icon rotate-n-15">
    </div>
    <div class="sidebar-brand-text mx-3">Polres</div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Nav Item - Dashboard -->
  <li class="nav-item {{ Request::is('admin') ? 'active' : '' }}">
    <a class="nav-link" href="{{url('/admin')}}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
  </li>

  <li class="nav-item {{ Request::is('admin/pengumuman*') ? 'active' : '' }}">
    <a class="nav-link" href="{{url('/admin/pengumuman')}}">
      <i class="fas fa-fw fa-bullhorn"></i>
      <span>Pengumuman</span></a>
  </li>

  <!-- Nav Item - Dashboard -->
  <li class="nav-item {{ Request::is('admin/banner*') ? 'active' : '' }}">
    <a class="nav-link" href="{{url('/admin/banner')}}">
      <i class="fas fa-newspaper"></i>
      <span>Banner</span></a>
  </li>

  <!-- Nav Item - Dashboard -->
  <li class="nav-item {{ Request::is('admin/pelayanan*') ? 'active' : '' }}">
    <a class="nav-link" href="{{url('/admin/pelayanan')}}">
      <i class="fas fa-fw fa-id-card"></i>
      <span>Pelayanan</span></a>
  </li>

  <!-- Nav Item - Dashboard -->
  <li class="nav-item {{ Request::is('admin/inovasi*') ? 'active' : '' }}">
    <a class="nav-link" href="{{url('/admin/inovasi')}}">
      <i class="fas fa-fw fa-chart-line"></i>
      <span>Inovasi</span></a>
  </li>

  <!-- Nav Item - Dashboard -->
  <li class="nav-item {{ Request::is('admin/galeri*') ? 'active' : '' }}">
    <a class="nav-link" href="{{url('/admin/galeri')}}">
      <i class="fas fa-fw fa-images"></i>
      <span>Galeri</span></a>
  </li>

  <!-- Nav Item - Dashboard -->
  <li class="nav-item {{ Request::is('admin/berita*') ? 'active' : '' }}">
    <a class="nav-link" href="{{url('/admin/berita')}}">
      <i class="fas fa-fw fa-copy"></i>
      <span>Berita</span></a>
  </li>

  <!-- Nav Item - Dashboard -->
  <li class="nav-item {{ Request::is('admin/pengaduan*') ? 'active' : '' }}">
    <a class="nav-link" href="{{url('/admin/pengaduan')}}">
      <i class="fas fa-fw fa-comments"></i>
      <span>Pengaduan</span></a>
  </li>

  <!-- Nav Item - Dashboard -->
  <li class="nav-item {{ Request::is('admin/polsek*') ? 'active' : '' }}">
    <a class="nav-link" href="{{url('/admin/polsek')}}">
      <i class="fas fa-home"></i>
      <span>Polsek</span></a>
  </li>

  <!-- Nav Item - Dashboard -->
  <li class="nav-item {{ Request::is('admin/tupoksi*') ? 'active' : '' }}">
    <a class="nav-link" href="{{url('/admin/tupoksi')}}">
      <i class="fas fa-paperclip"></i>
      <span>Tupoksi</span></a>
  </li>

  <!-- Nav Item - Dashboard -->
  <li class="nav-item {{ Request::is('admin/personil*') ? 'active' : '' }}">
    <a class="nav-link" href="{{url('/admin/personil')}}">
      <i class="fas fa-user-alt"></i>
      <span>Personil</span></a>
  </li>

  <li class="nav-item {{ Request::is('admin/settings*') ? 'active' : '' }}">
    <a class="nav-link" href="{{url('/admin/settings')}}">
      <i class="fas fa-fw fa-cog"></i>
      <span>Settings</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

</ul>
<!-- End of Sidebar -->