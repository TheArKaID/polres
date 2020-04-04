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
                                     <li><a class="active" href="{{url('/')}}">beranda</a></li>
                                     <li><a href="#">profil</a></li>
                                     <li><a href="#">polsek</a></li>
                                     <li><a href="#">pelayanan <i class="ti-angle-down"></i></a>
                                         <ul class="submenu">
                                             <li><a href="{{url('/pelayanan/pelayanan-all')}}">Semua Pelayanan</a></li>
                                             <li><a href="{{url('/pengaduan')}}">Pengaduan</a></li>
                                             <li><a href="{{url('/pengaduan/cek-status')}}">Cek Pengaduan</a></li>

                                         </ul>
                                     </li>
                                     <li><a href="#">tupoksi <i class="ti-angle-down"></i></a>
                                         <ul class="submenu">
                                             <li><a href="elements.html">elements</a></li>
                                         </ul>
                                     </li>
                                     <li><a href="{{url('/berita/berita-1')}}">berita</a></li>
                                     <li><a href="{{url('/galeri/galeri-all')}}">galeri</a></li>
                                     <li><a href="#">personil</a></li>
                                 </ul>
                             </nav>
                         </div>
                     </div>
                     <div class="col-xl-2 col-lg-2">
                         <div class="logo-img">
                             <a href="{{url('/')}}">
                                 <img src="{{url('frontend/img/logo-polda-jatim.png')}}" alt="">
                             </a>
                         </div>
                     </div>
                     <div class="col-xl-5 col-lg-4 d-none d-lg-block">
                         <div class="book_room">
                             <li><a style="color: white" href="{{url('/pengaduan/cek-status')}}">cek pengaduan</a></li>

                             <div class="book_btn d-none d-lg-block">
                                 <li><a href="{{url('/pengaduan')}}">Pengaduan</a></li>
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
