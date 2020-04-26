<!doctype html>
<html class="no-js" lang="zxx">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>You Matter Website</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- <link rel="manifest" href="site.webmanifest"> -->
	<link rel="shortcut icon" type="image/x-icon" href="../assets/img/logo/logogo.png">
	<!-- Place favicon.ico in the root directory -->

	
 <!-- CSS here -->
   <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
   <link rel="stylesheet" href="../assets/css/owl.carousel.min.css">
   <link rel="stylesheet" href="../assets/css/slicknav.css">
   <link rel="stylesheet" href="../assets/css/animate.min.css">
   <link rel="stylesheet" href="../assets/css/magnific-popup.css">
   <link rel="stylesheet" href="../assets/css/fontawesome-all.min.css">
   <link rel="stylesheet" href="../assets/css/themify-icons.css">
   <link rel="stylesheet" href="../assets/css/slick.css">
   <link rel="stylesheet" href="../assets/css/nice-select.css">
   <link rel="stylesheet" href="../assets/css/style.css">
   <link rel="stylesheet" href="../assets/css/responsive.css">
   <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

    <script>
      tinymce.init({
        selector: '#mytextarea'
      });
    </script>
</head>

<body>
	
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="../assets/img/logo/logogo.png" alt="">
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
                                <a href="/"><img style="width: 30%;" src="../assets/img/logo/logogo.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-10 col-lg-10 col-md-10">
                            <!-- Main-menu -->
                            <div class="main-menu f-right d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">    
                                    	<li class="active"><a href="/">Beranda</a></li>
                                        <li><a href="pertanyaanumum">Pertanyaan</a></li>
                                        <li><a href="#">Artikel</a>
                                        	<ul class="submenu">
                                                <li><a href="artikel">Semua Artikel</a></li>
                                                <li><a href="artikelsaya">Artikel Saya</a></li>
                                            </ul>
                                        </li>
                                        {% if (session.get('psikolog')['username']) %}
                                        <li><a href="#">Hai, {{ session.get('psikolog')['username'] }}!</a>
                                            <ul class="submenu">
                                        		{% endif %}
                                                <li><a href="logoutpsikolog">Logout</a></li>
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

<div>
<!-- 	<div class="services-area sky-blue">
		
	</div> -->
	<!-- Slider Area End-->

	<!-- Start Sample Area -->
	
	<!-- End Sample Area -->

	<!-- Start Button -->
	
	<!-- End Button -->

	<!-- Start Align Area -->
	<div style="margin-top: 200px;" class="whole-wrap">
		<div class="container box_1170">
			
			

	
				<div class="row">
					<!-- TULIS ARTIKEL -->
					<div class="col-lg-8 col-md-8">
						<h3 class="mb-30">Tulis Artikel</h3>
            <div style="color: red; font-weight: bold;">
              <p><?php echo $this->flashSession->output() ?></p>
            </div>
						<form action="storeartikel" method="post">
              <div class="mt-10">
                <input type="text" name="kode" placeholder="Kode Pertanyaan"
                  onfocus="this.placeholder = ''" onblur="this.placeholder = 'Kode Pertanyaan'" required
                  class="single-input">
              </div>
							<!-- <div class="mt-10">
								<input type="text" name="penulis" placeholder="Penulis"
									onfocus="this.placeholder = ''" onblur="this.placeholder = 'Penulis'" required
									class="single-input">
							</div> -->
							
							<div class="mt-10">
								<input type="text" name="judul" placeholder="Judul Artikel"
									onfocus="this.placeholder = ''" onblur="this.placeholder = 'Judul Artikel'" required
									class="single-input">
							</div>

							<div class="mt-10">
								<textarea name="isi" class="single-textarea" placeholder="Isi artikel..." onfocus="this.placeholder = ''"
									onblur="this.placeholder = 'Isi artikel...'" required></textarea>
							</div>
							<a style="margin-top: 40px;" href="artikelsaya" class="genric-btn default">Kembali</a>
						<button style="margin-top: 40px;" type="submit" class="genric-btn success">Bagikan</button>
						</form>
						
					</div>

					

				
				</div>
			</div>
		</div>
	</div>
	<!-- End Align Area -->
	<div style="margin-top: 200px;">
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
                   <li><a href="artikel">Artikel</a></li>
                   <li><a href="pasien">Daftar Pasien</a></li>
                   <li><a href="psikolog">Daftar Psikolog</a></li>
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
	</div>
<!-- JS here -->
	
		<!-- All JS Custom Plugins Link Here here -->
        <script src="../assets/js/vendor/modernizr-3.5.0.min.js"></script>
		
		<!-- Jquery, Popper, Bootstrap -->
		<script src="../assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="../assets/js/popper.min.js"></script>
        <script src="../assets/js/bootstrap.min.js"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="../assets/js/jquery.slicknav.min.js"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="../assets/js/owl.carousel.min.js"></script>
		<script src="../assets/js/slick.min.js"></script>
		
		<!-- One Page, Animated-HeadLin -->
        <script src="../assets/js/wow.min.js"></script>
		<script src="../assets/js/animated.headline.js"></script>
		<script src="../assets/js/jquery.magnific-popup.js"></script>
		
		<!-- Scrollup, nice-select, sticky -->
        <script src="../assets/js/jquery.scrollUp.min.js"></script>
        <script src="../assets/js/jquery.nice-select.min.js"></script>
		<script src="../assets/js/jquery.sticky.js"></script>
        
        <!-- contact js -->
        <script src="../assets/js/contact.js"></script>
        <script src="../assets/js/jquery.form.js"></script>
        <script src="../assets/js/jquery.validate.min.js"></script>
        <script src="../assets/js/mail-script.js"></script>
        <script src="../assets/js/jquery.ajaxchimp.min.js"></script>
        
		<!-- Jquery Plugins, main Jquery -->	
        <script src="../assets/js/plugins.js"></script>
        <script src="../assets/js/main.js"></script>
        
</body>
</html>