 <!-- header-start -->
 <header>
     <div class="header-area ">
         <div id="sticky-header" class="main-header-area">
             <div class="container-fluid p-0">
                 <div class="row align-items-center no-gutters">
                     <div class="col-xl-5 col-lg-6">
                         <div class="main-menu  d-none d-lg-block">
                             <nav>
                                 <ul id="navigation">
                                     <li class="mr-4"><a class="active" href="{{url('/')}}">beranda</a></li>
                                     <li class="mr-4"><a href="#">profil <i class="ti-angle-down"></i></a>
                                         <ul class="submenu">
                                             <li><a href="{{url('/tupoksi')}}">Tupoksi</a></li>
                                             <li><a href="{{url('/personil')}}">Personil</a></li>
                                             <li><a href="{{url('/galeri/galeri-all')}}">galeri</a></li>
                                             <li><a href="{{url('/inovasi/inovasi-all')}}">inovasi</a></li>
                                             <li><a href="{{url('/berita/berita-all')}}">berita</a></li>
                                         </ul>
                                     </li>
                                     <li class="mr-4"><a href="#">polsek <i class="ti-angle-down"></i></a>
                                         <ul class="submenu">
                                             <li><a>Batang Barat <i class="ti-angle-right"></i></a>
                                                 <ul class="submenu">
                                                     <li class="submenu-right"><a class="py-2 pl-2"
                                                             style="background: white; color: black"
                                                             href="{{url('/polsek/index')}}">Polsek Sukamaju</a></li>
                                                 </ul>
                                             </li>
                                             <li><a>Batang Barat <i class="ti-angle-right"></i></a>
                                                 <ul class="submenu">
                                                     <li class="submenu-right"><a class="py-2 pl-2"
                                                             style="background: white; color: black"
                                                             href="{{url('/polsek/index')}}">Polsek Sukamaju</a></li>
                                                 </ul>
                                             </li>
                                         </ul>
                                     </li>
                                     <li class="mr-4"><a href="#">pelayanan <i class="ti-angle-down"></i></a>
                                         <ul class="submenu">
                                             <li><a href="{{url('/pelayanan/pelayanan-all')}}">Semua Pelayanan</a></li>
                                             <li><a href="{{url('/pengaduan')}}">Pengaduan</a></li>
                                             <li><a href="{{url('/pengaduan/cek-status')}}">Cek Pengaduan</a></li>
                                         </ul>
                                     </li>
                                 </ul>
                             </nav>
                         </div>
                     </div>
                     <div class="col-xl-2 col-lg-2">
                         <div class="logo-img">
                             <a href="{{url('/')}}">
                                 <img class="logo-navbar" src="{{asset('frontend/img/setting/'.settings()->logo)}}" alt="">
                             </a>
                         </div>
                     </div>
                     <div class="col-xl-5 col-lg-4 d-none d-lg-block">
                         <div class="book_room">
                             <li><a style="color: white" href="{{url('/pengaduan/cek-status')}}">Cek Pengaduan</a></li>

                             <div class="d-none d-lg-block">
                                 <li><a class="btn bg-warning px-4 py-2 ml-4 text-white"
                                         href="{{url('/pengaduan')}}">Pengaduan</a></li>
                             </div>
                         </div>
                     </div>
                     <div class="col-12">
                         <div class="mobile_menu d-block d-lg-none"></div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </header>
 <!-- header-end -->
