<!doctype html>
<html class="no-js" lang="zxx">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>You Matter Website</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- <link rel="manifest" href="site.webmanifest"> -->
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
   <link rel="stylesheet" href="../../assets/css/slick.css">
   <link rel="stylesheet" href="../../assets/css/nice-select.css">
   <link rel="stylesheet" href="../../assets/css/style.css">
   <link rel="stylesheet" href="../../assets/css/responsive.css">
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
                                <a href="/"><img style="width: 30%;" src="../../assets/img/logo/logogo.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-10 col-lg-10 col-md-10">
                            <!-- Main-menu -->
                            <div class="main-menu f-right d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">    
                                    	<li><a href="/">Beranda</a></li>
                                        <li><a href="pertanyaanumum">Pertanyaan</a></li>
                                        <li class="active"><a href="#">Artikel</a>
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
					<!-- TANYA -->
					<div class="col-lg-8 col-md-8">
						<h3 class="mb-30">Ubah Pertanyaan</h3>
						<form action="{{ url("storeeditartikel") }}" method="post">
							<div class="mt-10">
								<input type="text" name="penulis" placeholder="Penulis" value="{{data.penulis}}"
									onfocus="this.placeholder = ''" onblur="this.placeholder = 'Penulis'" required
									class="single-input">
							</div>
							<div class="mt-10">
								<input type="text" name="kode" placeholder="Kode Pertanyaan" value="{{data.kode}}"
									onfocus="this.placeholder = ''" onblur="this.placeholder = 'Kode Pertanyaan'" required
									class="single-input">
							</div>
							<div class="mt-10">
								<input type="text" name="judul" placeholder="Judul Artikel" value="{{data.judul}}"
									onfocus="this.placeholder = ''" onblur="this.placeholder = 'Judul Artikel'" required
									class="single-input">
							</div>

							<div class="mt-10">
								<textarea name="isi" class="single-textarea" placeholder="Isi artikel..." onfocus="this.placeholder = ''"
									onblur="this.placeholder = 'Isi artikel...'" required>{{data.isi}}</textarea>
							</div>
							<div class="form-group">
					            <input type="hidden" name="id" id="id" value={{data.id}}>
					        </div>
							<a style="margin-top: 40px;" href="../pertanyaansayadet/{{data.id}}" class="genric-btn default">Kembali</a>
							<button style="margin-top: 40px;" type="submit" class="genric-btn success">Selesai</button>
						
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
                                 <a href="/"><img style="width:30%;" src="../../assets/img/logo/logogo.png" alt=""></a>
                             </div>
							  <div class="footer-tittle">
								  <div class="footer-pera">
									  <p class="info1">Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore.</p>
								 </div>
							  </div>
						  </div>
					 </div>
					 <div class="col-lg-2 col-md-4 col-sm-5">
						 <div class="single-footer-caption mb-50">
							 <div class="footer-tittle">
								 <h4>Quick Links</h4>
								 <ul>
									 <li><a href="#">About</a></li>
									 <li><a href="#">Features</a></li>
									 <li><a href="#">Pricing</a></li>
									 <li><a href="#">Download</a></li>
									 <li><a href="#">Reviews</a></li>
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
								 <h4>Newsletter</h4>
								 <div class="footer-pera footer-pera2">
								  <p>Heaven fruitful doesn't over lesser in days. Appear </p>
							  </div>
							  <!-- Form -->
							  <div class="footer-form">
								  <div id="mc_embed_signup">
									  <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscribe_form relative mail_part" novalidate="true">
										  <input type="email" name="EMAIL" id="newsletter-form-email" placeholder=" Email Address " class="placeholder hide-on-focus" onfocus="this.placeholder = ''" onblur="this.placeholder = ' Email Address '">
										  <div class="form-icon">
											  <button type="submit" name="submit" id="newsletter-submit" class="email_icon newsletter-submit button-contactForm"><img src="../../assets/img/shape/form_icon.png" alt=""></button>
										  </div>
										  <div class="mt-10 info"></div>
									  </form>
								  </div>
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
		<script src="../../assets/js/jquery.magnific-popup.js"></script>
		
		<!-- Scrollup, nice-select, sticky -->
        <script src="../../assets/js/jquery.scrollUp.min.js"></script>
        <script src="../../assets/js/jquery.nice-select.min.js"></script>
		<script src="../../assets/js/jquery.sticky.js"></script>
        
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