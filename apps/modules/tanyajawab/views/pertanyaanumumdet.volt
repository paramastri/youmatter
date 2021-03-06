<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
   <title>You Matter Website</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
        <link rel="shortcut icon" type="image/x-icon" href="../../assets/img/logo/logogo.png">
    <!-- Place favicon.ico in the root directory -->
    
  <!-- CSS here -->
  <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../assets/css/owl.carousel.min.css">
  <link rel="stylesheet" href="../../assets/css/slicknav.css">
  <link rel="stylesheet" href="../../assets/css/animate.min.css">
  <link rel="stylesheet" href="../../assets/css/magnific-popup.css">
  <link rel="stylesheet" href="../../assets/css/fontawesome-all.min.css">
  <link rel="stylesheet" href="../../assets/css/themify-icons.css">
  <link rel="stylesheet" href="../../assets/css/themify-icons.css">
  <link rel="stylesheet" href="../../assets/css/slick.css">
  <link rel="stylesheet" href="../../assets/css/nice-select.css">
  <link rel="stylesheet" href="../../assets/css/style.css">
  <link rel="stylesheet" href="../../assets/css/responsive.css">
</head>

<body>
    
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="../../assets/img/logo/logogo.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->

    <header>
        <!-- Header Start -->
       <div class="header-area header-transparrent ">
            <div class="main-header header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-2 col-lg-2 col-md-2">
                            <div class="logo">
                                <a href="{{ url('/') }}"><img style="width: 30%;" src="../../assets/img/logo/logogo.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-10 col-lg-10 col-md-10">
                            <!-- Main-menu -->
                            <div class="main-menu f-right d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">    
                                      <li><a href="{{ url('/') }}">Beranda</a></li>
                                        <li class="active"><a href="{{ url('pertanyaanumum') }}">Pertanyaan</a></li>
                                        <li><a href="#">Artikel</a>
                                          <ul class="submenu">
                                                <li><a href="{{ url('artikel') }}">Semua Artikel</a></li>
                                                <li><a href="{{ url('artikelsaya') }}">Artikel Saya</a></li>
                                            </ul>
                                        </li>
                                        {% if (session.get('psikolog')['username']) %}
                                        <li><a href="#">Hai, {{ session.get('psikolog')['username'] }}!</a>
                                            <ul class="submenu">
                                            {% endif %}
                                                <li><a href="{{ url('logoutpsikolog') }}">Logout</a></li>
                                            </ul>
                                        </li>

                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
       </div>
        <!-- Header End -->
    </header>

    <!-- Slider Area Start-->
<!--     <div class="services-area"> -->
        <div style="margin-top: 9%;" class="container">
            <!-- Section-tittle -->
            
        </div>
    </div>
    <!-- Slider Area End-->

    <!--================Blog Area =================-->
    <section class="blog_area section-paddingr">
        <div class="container">
         


                        <article style="width: 50%;" class="blog_item">
                            <div class="blog_details">
                                    <h2>Detail Pertanyaan</h2>
                                <div style="color: red; font-weight: bold;">
                                  <p><?php echo $this->flashSession->output() ?></p>
                                </div>

                                <table>
                                  <tr>
                                    <td><b>Kode Pertanyaan<b></td>
                                  </tr>
                                  <tr>
                                    <td>{{data.id}} <i>(ingat-ingat untuk menuliskan kodenya pada artikel)<i></td>
                                  </tr>
                                  <tr>
                                    <td><b>Topik<b></td>
                                  </tr>
                                  <tr>
                                    <td>{{data.topik}}</td>
                                  </tr>
                                  <tr>
                                    <td><b>Pertanyaan<b></td>
                                  </tr>
                                  <tr>
                                    <td>{{data.pertanyaan}}</td>
                                  </tr>
                                  
                                </table>
                            </div>
                            
                            {% if (data.status == 1) %}
                            <a style="margin-top: 20px;" href="{{ url('pertanyaanumum') }}" class="genric-btn default">Kembali</a>
                            <a style="margin-top: 20px;" href="../urungkanjawab/{{data.id}}" class="genric-btn danger">Urungkan Jawab*</a>
                            <a style="margin-top: 20px;" href="{{ url('tulisartikel') }}" class="genric-btn success">Tulis Artikel (Kode {{data.id}})</a>
                            {% else %}
                            <a style="margin-top: 20px;" href="{{ url('pertanyaanumum') }}" class="genric-btn default">Kembali</a>
                            <a style="margin-top: 20px;" href="../jawab/{{data.id}}" class="genric-btn success">Jawab*</a>
                            {% endif %}
                            <p style="margin-top: 20px;">*Setelah menekan jawab, anda harus langsung menulis artikelnya. Urungkan apabila belum siap menulis.</p>
                            
                        </article>


            

                    
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->

     <footer style="background-color: #f4feff;">
    <!-- Footer Start-->
     <div class="footer-main">
     <div class="footer-area footer-padding2">
       <div class="container">
         <div class="row  justify-content-between">
           <div class="col-lg-3 col-md-4 col-sm-8">
              <div class="single-footer-caption mb-30">
                 <!-- logo -->
                <div class="footer-logo">
                                 <a href="/"><img style="width:30%;" src="../assets/img/logo/logogo.png" alt=""></a>
                             </div>
                <div class="footer-tittle">
                  <div class="footer-pera">
                    <p class="info1">Just a reminder in case your mind is playing tricks on you today: You matter. You're important. You're loved. And your presence on this earth makes a difference whether you see it or not.</p>
                 </div>
                </div>
              </div>
           </div>
           <div class="col-lg-2 col-md-4 col-sm-5">
             <div class="single-footer-caption mb-50">
               <div class="footer-tittle">
                 <h4>Quick Links</h4>
                 <ul>
                   <li><a href="{{ url('artikel') }}">Artikel</a></li>
                   <li><a href="{{ url('psikolog') }}">Daftar Psikolog</a></li>
                   <li><a href="{{ url('pasien') }}">Daftar Pasien</a></li>
                 </ul>
               </div>
             </div>
           </div>
           <div class="col-lg-2 col-md-4 col-sm-7">
             <div class="single-footer-caption mb-50">
               <div class="footer-tittle">
                 <h4>Support</h4>
                 <ul>
                   <li><a href="#">Report a bug</a></li>
                   <li><a href="#">Privacy Policy</a></li>
                   <li><a href="#">Terms & Conditions</a></li>
                   <li><a href="#">Sitemap</a></li>
                   <li><a href="#">FAQs</a></li>
                 </ul>
               </div>
             </div>
           </div>
           <div class="col-lg-3 col-md-6 col-sm-8">
             <div class="single-footer-caption mb-50">
               <div class="footer-tittle">
                 <h4>Kontak</h4>
                 <div class="footer-pera footer-pera2">
                  <p>Surabaya, Indonesia</p>
                  <p>+62 81572 9372</p>
                </div>
               </div>
             </div>
           </div>
         </div>
         <!-- Copy-Right -->
        
       </div>
     </div>
     </div>
    <!-- Footer End-->
 
  </footer>
<!-- JS here -->
	
		<!-- All JS Custom Plugins Link Here here -->
        <script src="../../assets/js/vendor/modernizr-3.5.0.min.js"></script>
		
		<!-- Jquery, Popper, Bootstrap -->
		<script src="../../assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="../../assets/js/popper.min.js"></script>
        <script src="../../assets/js/bootstrap.min.js"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="../../assets/js/jquery.slicknav.min.js"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="../../assets/js/owl.carousel.min.js"></script>
        <script src="../../assets/js/slick.min.js"></script>

		<!-- One Page, Animated-HeadLin -->
        <script src="../../assets/js/wow.min.js"></script>
		<script src="../../assets/js/animated.headline.js"></script>
		
		<!-- Scrollup, nice-select, sticky -->
        <script src="../../assets/js/jquery.scrollUp.min.js"></script>
        <script src="../../assets/js/jquery.nice-select.min.js"></script>
		<script src="../../assets/js/jquery.sticky.js"></script>
        <script src="../../assets/js/jquery.magnific-popup.js"></script>

        <!-- contact js -->
        <script src="../../assets/js/contact.js"></script>
        <script src="../../assets/js/jquery.form.js"></script>
        <script src="../../assets/js/jquery.validate.min.js"></script>
        <script src="../../assets/js/mail-script.js"></script>
        <script src="../../assets/js/jquery.ajaxchimp.min.js"></script>
        
		<!-- Jquery Plugins, main Jquery -->	
        <script src="../../assets/js/plugins.js"></script>
        <script src="../../assets/js/main.js"></script>

</body>
</html>