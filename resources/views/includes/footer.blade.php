<footer class="footer">
    <div class="footer_top">
        <div class="container">
            <div class="row">
                 <div class="col-xl-5 col-md-6 col-lg-5">
                    <div class="footer_widget">
                        <div class="logo-img">
                            <div class="row align-items-center">
                                <div class="col-5">
                                    <a href="{{url('/')}}">
                                        <img class="logo-navbar" src="{{asset('frontend/img/setting/'.settings()->logo)}}" alt="">
                                    </div>
                                </a>
                                    <div class="col-7">
                                        <div class="row" style="text-align: left;">
                                            <h5 style="color: white" >Polres <br>{{settings()->namapolres}}</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <p class="footer_text">"{{settings()->jargon}}"</p>
                                </div>
                         </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="footer_widget">
                        <h3 class="footer_title">
                            alamat
                        </h3>
                        <p class="footer_text" style="color: white">{!!settings()->alamat!!}<br>
                            {{ settings()->notelpon }}
                        </p>
                        {{-- <a href="https://www.google.com/maps/place/Polres+Batang/@-6.9182675,109.7299067,15z/data=!4m5!3m4!1s0x0:0x8f4f99463cfb2ab4!8m2!3d-6.9182675!4d109.7299067"
                            target="_blank" class="line-button">Get Direction</a> --}}
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-lg-3">
                    <div class="footer_widget">
                        <h3 class="footer_title">
                            Social Media
                        </h3>

                        {!! settings()->instagram!=NULL||!empty(settings()->instagram)
                            ? "<a href='https://instagram.com/".settings()->instagram."' style='color: #BABABA; text-decoration: none' class='footer_text'>
                                <i class='fab fa-instagram mr-2'></i>".settings()->instagram."</a><br>"
                            : ""!!}

                        {!! settings()->twitter!=NULL||!empty(settings()->twitter)
                            ? "<a href='https://twitter.com/".settings()->twitter."' style='color: #BABABA; text-decoration: none' class='footer_text'>
                                <i class='fab fa-twitter mr-2'></i>".settings()->twitter."</a><br>"
                            : ""!!}

                        {!! settings()->facebook!=NULL||!empty(settings()->facebook)
                            ? "<a href='https://facebook.com/".settings()->facebook."' style='color: #BABABA; text-decoration: none' class='footer_text'>
                                <i class='fab fa-facebook mr-2'></i>".settings()->facebook."</a><br>"
                            : ""!!}

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copy-right_text">
        <div class="container pb-5">
            <div class="footer_border"></div>
            <div class="row">
                <div class="col-xl-8 col-md-7 col-lg-9">
                    <p class="copy_right">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>
                            document.write(new Date().getFullYear());

                        </script> All rights reserved | ruanghalal.com
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </div>
            </div>
        </div>
    </div>
</footer>
