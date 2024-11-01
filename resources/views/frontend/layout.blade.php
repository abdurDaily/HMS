<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title> Hospital and Health </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
        <!-- Place favicon.ico in the root Internist, General Practitonery -->

		<!-- CSS here -->
        <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/animate.min.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/magnific-popup.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/fontawesome/css/all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/dripicons.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/slick.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/default.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/meanmenu.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/responsive.css') }}">
    </head>
    <body>


        <!-- header -->
        <header class="header-area">  
			<div class="header-top second-header d-none d-md-block">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-md-3 d-none d-lg-block">
                        </div>                       
                        <div class="col-lg-4 col-md-8 d-none  d-md-block">
                            <div class="header-cta">
                                <ul>                                   
                                    <li>
                                        <i class="icon dripicons-mail"></i>
                                        <span>info@example.com</span>
                                    </li>
                                     <li>
                                        <i class="icon dripicons-phone"></i>
                                        <span>+8 12 3456897</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                         <div class="col-lg-5 col-md-3 d-none d-lg-block">
                             <div class="header-social text-right">
                            <span>
                                <a href="index.html#" title="Facebook"><i class="fab fa-facebook"></i></a>
                                <a href="index.html#" title="Twitter"><i class="fab fa-twitter"></i></a>
                                <a href="index.html#" title="LinkedIn"><i class="fab fa-linkedin-in"></i></a>                               
                               </span>                    
                               <!--  /social media icon redux -->                               
                        </div>
                        </div>
                         
                    </div>
                </div>
            </div>		
            <div id="header-sticky" class="menu-area">
                <div class="container">
                    <div class="second-menu">
                        <div class="row align-items-center">
                            <div class="col-xl-2 col-lg-2">
                                <div class="logo">
                                    <a href="index.html"><img src="{{ asset('frontend/img/logo/logo.png') }}" alt="logo"></a>
                                </div>
                            </div>
                            <div class="col-xl-8 col-lg-8">                               
                                <div class="main-menu text-right pr-15">
                                    <nav id="mobile-menu">
                                        <ul>
                                            <li class="has-sub">
												<a href="index.html">Home</a>
												<ul>													
													<li><a href="index.html">Home Page 01</a></li>
													<li><a href="index-2.html">Home Page 02</a></li>													
													<li><a href="index-3.html">Home Page 03</a></li>													
												</ul>
											</li>
                                            <li><a href="about.html">About Us</a></li>
                                            <li class="has-sub">
                                                <a href="services.html">Services</a>
                                                <ul>													
													<li><a href="services.html">Services</a></li>
													<li><a href="services-detail.html">Services Details</a></li>
												</ul>
                                            </li>                                                                                     
											<li class="has-sub"><a href="index.html#">Other Page</a>
												<ul>													
													<li><a href="pricing.html">Pricing</a></li>
													<li><a href="team.html">Team</a></li>
                                                    <li><a href="shop.html">Shop</a></li>
													<li><a href="shop-details.html">Shop Details</a></li>
												</ul>
											</li>
                                            <li class="has-sub"> 
                                                <a href="departments.html">Departments</a>
                                                <ul>													
													<li><a href="departments.html">Departments</a></li>
													<li><a href="departments-detail.html">Departments Details</a></li>
												</ul>
                                            </li>
                                           
											<li class="has-sub"> 
                                                <a href="blog.html">Blog</a>
                                                <ul>													
													<li><a href="blog.html">Blog</a></li>
													<li><a href="blog-details.html">Blog Details</a></li>
												</ul>
                                            </li>               
                                        </ul>
                                    </nav>
                                </div>
                            </div>    
                             <div class="col-xl-2 col-lg-2 d-none d-lg-block">
                                 <a href="contact.html" class="top-btn">Get A Quote <i class="fas fa-chevron-right"></i></a>
                                 
                            </div>
                             <div class="col-12">
                            <div class="mobile-menu"></div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header-end -->


        @yield('frontend-contains')

        <!-- footer -->
        <footer class="footer-bg footer-p" >
            <div class="overly"><img src="{{ asset('frontend/img/an-bg/footer-bg.png') }}" alt="rest"></div>
            <div class="footer-top pb-30" style="background-color: #ECF1FA;">
                <div class="container">
                    <div class="row justify-content-between">
                        
                        <div class="col-xl-3 col-lg-3 col-sm-6">
                            <div class="footer-widget mb-30">
                                <div class="flog mb-35">
                                    <a href="index.html#"><img src="{{ asset('frontend/img/logo/logo.png') }}" alt="logo"></a>
                                </div>
                                <div class="footer-text mb-20">
                                    <p>Sed ut perspiciatis unde om is nerror sit voluptatem accustium dolorem tium totam rem aperam eaque ipsa quae ab illose
                                    inntore veritatis</p>
                                </div>
                                <div class="footer-social">
                                    <a href="index.html#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="index.html#"><i class="fab fa-twitter"></i></a>
                                    <a href="index.html#"><i class="fab fa-instagram"></i></a>
                                    <a href="index.html#"><i class="fab fa-google-plus-g"></i></a>
                                </div>
                            </div>
                        </div>
                        
                        
                        <div class="col-xl-2 col-lg-2 col-sm-6">
                            <div class="footer-widget mb-30">
                                <div class="f-widget-title">
                                    <h5>Our Links</h5>
                                </div>
                                <div class="footer-link">
                                    <ul>                                        
                                        <li><a href="index.html#"><i class="fas fa-chevron-right"></i> Partners</a></li>
                                        <li><a href="index.html#"><i class="fas fa-chevron-right"></i> About Us</a></li>
                                        <li><a href="index.html#"><i class="fas fa-chevron-right"></i> Career</a></li>
                                        <li><a href="index.html#"><i class="fas fa-chevron-right"></i> Reviews</a></li>
                                        <li><a href="index.html#"><i class="fas fa-chevron-right"></i> Terms & Conditions</a></li>
                                        <li><a href="index.html#"><i class="fas fa-chevron-right"></i> Help</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-sm-6">
                            <div class="footer-widget mb-30">
                                <div class="f-widget-title">
                                    <h5>Other Links</h5>
                                </div>
                                <div class="footer-link">
                                    <ul>
                                        <li><a href="index.html#"><i class="fas fa-chevron-right"></i> Home</a></li>
                                        <li><a href="index.html#"><i class="fas fa-chevron-right"></i> About Us</a></li>
                                        <li><a href="index.html#"><i class="fas fa-chevron-right"></i> Services</a></li>
                                        <li><a href="index.html#"><i class="fas fa-chevron-right"></i> Project</a></li>
                                        <li><a href="index.html#"><i class="fas fa-chevron-right"></i> Our Team</a></li>
                                        <li><a href="index.html#"><i class="fas fa-chevron-right"></i> Latest Blog</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>  
                        <div class="col-xl-3 col-lg-3 col-sm-6">
                            <div class="footer-widget mb-30">
                                <div class="f-widget-title">
                                    <h5>Contact Us</h5>
                                </div>
                                <div class="footer-link">
                                    <div class="f-contact">
                                    <ul>
                                    <li>
                                        <i class="icon dripicons-phone"></i>
                                        <span>1800-121-3637<br>+91 555 234-8765</span>
                                    </li>
                                    <li>
                                        <i class="icon dripicons-mail"></i>
                                        <span><a href="mailto:info@example.com">info@example.com</a><br><a href="mailto:sale@example.com">sale@example.com</a></span>
                                    </li>
                                    <li>
                                    <i class="fal fa-map-marker-alt"></i>
                                        <span>380 St Kilda Road, Melbourne<br>VIC 3004, Australia</span>
                                    </li>
                                </ul>
                                    
                                    </div>
                                
                                    
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="copyright-wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="copyright-text text-center">
                                <p>&copy; Abdur Rahman</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer-end -->


<!-- JS here -->
    <!-- JS here -->
<script src="{{ asset('frontend/js/vendor/modernizr-3.5.0.min.js') }}"></script>
<script src="{{ asset('frontend/js/vendor/jquery-1.12.4.min.js') }}"></script>
<script src="{{ asset('frontend/js/popper.min.js') }}"></script>
<script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('frontend/js/one-page-nav-min.js') }}"></script>
<script src="{{ asset('frontend/js/jquery.meanmenu.min.js') }}"></script>
<script src="{{ asset('frontend/js/slick.min.js') }}"></script>
<script src="{{ asset('frontend/js/ajax-form.js') }}"></script>
<script src="{{ asset('frontend/js/paroller.js') }}"></script>
<script src="{{ asset('frontend/js/wow.min.js') }}"></script>
<script src="{{ asset('frontend/js/js_isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('frontend/js/imagesloaded.min.js') }}"></script>
<script src="{{ asset('frontend/js/parallax.min.js') }}"></script>
<script src="{{ asset('frontend/js/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('frontend/js/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('frontend/js/jquery.scrollUp.min.js') }}"></script>
<script src="{{ asset('frontend/js/parallax-scroll.js') }}"></script>
<script src="{{ asset('frontend/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('frontend/js/element-in-view.js') }}"></script>
<script src="{{ asset('frontend/js/main.js') }}"></script>
</body>
</html>