<!DOCTYPE html>
<?php 
 header('Content-Type: text/html; charset=ISO-8859-1');
?>
<html>

<head>
<meta name="google-site-verification" content="yC0R2GyOW3CWjT7KJSobv3H7qGoPsnQz24Bhm2CaGgI" />
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            function applyLazyLoading() {
                $('img').attr('loading', 'lazy');
            }

            applyLazyLoading();
        });
    </script>
<script>
    
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-TSGPNDT');
    </script>
   
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="google-adsense-account" content="ca-pub-5199420647975066">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="{{ $description }}"  />
    <meta name="keywords" content="{{ $keyword }}">

    <meta name="csrf-token" content="{{ csrf_token() }}" />
    @yield('extern-css')
 
    <link rel="icon" href="{{ url('favicon.png') }}" />
    
    <link rel="stylesheet" href="{{ url('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ url('plugins/toastr/toastr.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/video-popup.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="{{ url('assets/gallery/style.css') }}">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.green.min.css" />
    <script>
        var host = "{{ url('') }}";
    </script>
    <style>
        .toast-error {
            background-color: #bd362f;
        }

        .toast-success {
            background-color: #2fbd36;
        }
    </style>
</head>

<body>
<!-- <a href="tel:+91 6389700888" class="call" >
        <i class="fa fa-phone-volume my-call"></i>
    </a> -->
    <a href="https://api.whatsapp.com/send?phone=916389700888" class="whatsappfloat" target="_blank">
        <i class="fab fa-whatsapp my-float"></i>  
    </a>
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TSGPNDT" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- <nav class="custom-shadow navbar navbar-expand-lg navbar-light sticky-top"> -->
    <nav class="custom-shadow navbar navbar-expand-xl navbar-light sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ url('assets/img/logo/bfc-logo.png') }}"
                    alt='logo' class="img-fluid logo" /></a>
            <button aria-controls="basic-navbar-nav" type="button" aria-label="Toggle navigation"
                class="navbar-toggler collapsed">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="justify-content-end navbar-collapse collapse" id="basic-navbar-nav">
            <ul class="navbar-nav main-menu ms-auto " id="menu">
                    <li><a class="{{ request()->is('/') ? 'active' : '' }}" href="{{ url('/') }}">Home</a></li>
                    <li><a class="{{ request()->is('about') ? 'active' : '' }}" href="{{ url('/about') }}">About</a>
                    </li>
                    <li class="menu_has_children"><a href="#">Packages</a>
                        <ul class="sub-menu lst-0">
                           
                            <li><a href="{{ url('/paperback-publishing-packages') }}">Paperback</a></li>
                            <li><a href="{{ url('/ebook-publishing-packages') }}">eBook</a></li>
                        </ul>
                    </li>

                    <li class="menu_has_children"><a class="{{ request()->is('services') ? 'active' : '' }}"
                            href="{{ '/services' }}">Services</a>
                        <ul class="sub-menu lst-0">
                            <li><a href="{{ url('/book-editorial-services') }}"> Editorial Services</a></li>
                            <li><a href="{{ url('/book-designing-services') }}">Designing Services</a></li>
                            <li><a href="{{ url('/book-marketing-services') }}">Marketing
                                    Services</a></li>
                            <li><a href="{{ url('/book-distribution-services') }}"> Distribution Services</a></li>
                            <li><a href="{{ url('/author-support') }}"> Author Support</a></li>
                        </ul>
                    </li>
                    <li><a class="{{ request()->is('royalty-calculator') ? 'active' : '' }}"
                            href="{{ url('/royalty-calculator') }}">Royalty Calculator</a></li>
                    <li><a href="https://authordashboard.bfcpublications.com" class="">Author Dashboard</a>
                    </li>
                    <li><a href="https://store.bfcpublications.com/">Book Store</a></li>
                    <li><a href="https://bfcpublications.com/blog/">Blogs</a></li>
                    <li><a class="" href="https://play.google.com/store/apps/details?id=com.bfc.publications" target="_blank" >Download App
                            </a></li>
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')


    <section class=" footer-section ">
        <footer>
            <div class="container">
                <div class="row pt-5 footer">
                    <div class="col-lg-3 col-md-6">
                        <div class="mt-n20"> <img src="{{ url('assets/img/logo/bfc-logo.png') }}" alt='logo'
                                class="img-fluid foot-logo" /></div>
                        <p class="text-justify text-rale">Since its inception, BFC Publications has been fast gaining mileage over other self publishers in India. If online comparisons are to be believed, even the most prominent publishing houses across India have been struggling to match our quality, largely because we are a team groomed to exceed expectations.</p>
                        <div class="social pb-smc-4 py-3">
                            <a href="https://www.facebook.com/bfcpublications/" class="social-icon" target="_blank">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="https://twitter.com/BfcPublications" class="social-icon" target="_blank">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="https://www.instagram.com/bfc_publications/" class="social-icon" target="_blank">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="https://www.linkedin.com/company/bfc-publications/" class="social-icon"
                                target="_blank">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a href="https://www.youtube.com/channel/UC0Yi0oA1UDSoJjU20-1_brQ" class="social-icon"
                                target="_blank">
                                <i class="fab fa-youtube"></i>
                            </a>
                            <a href="https://mail.google.com/mail/u/0/?fs=1&to=support@bfcpublications.com&body=BODY&tf=cm"
                                class="social-icon" target="_blank">
                                <i class="fas fa-envelope"></i>
                            </a>
                        </div>
                    </div>
                    <ul class="col-lg-2 col-md-6 foot-link">
                        <li>
                            <div class="h5"> OUR SERVICES</div>
                        </li>
                        <li> <a href="{{ url('/book-editorial-services') }}"><i class="fas fa-angle-right"></i>
                                Editorial Services</a>
                        </li>
                        <li> <a href="{{ url('/book-designing-services') }}"><i class="fas fa-angle-right"></i>
                                Designing
                                Services</a></li>
                        <li> <a href="{{ url('/book-marketing-services') }}"><i class="fas fa-angle-right"></i>
                                Marketing
                                Services</a></li>
                        <li> <a href="{{ url('/book-distribution-services') }}"><i
                                    class="fas fa-angle-right"></i> Distribution
                                Services</a></li>
                        <li> <a href="{{ url('/author-support') }}"><i class="fas fa-angle-right"></i>
                                Author Support</a></li>
                    </ul>
                    <ul class="col-lg-2 col-md-6 foot-link">
                        <li>
                            <div class="h5"> QUICK LINKS</div>
                        </li>
                        <li> <a href="{{ url('/ebook-publishing-packages') }}"><i class="fas fa-angle-right"></i> Packages</a>
                        </li>
                        <li> <a href="{{ '/services' }}"><i class="fas fa-angle-right"></i> Services</a></li>
                        <li> <a href="{{ url('/ebook-publisher-in-india') }}"><i class="fas fa-angle-right"></i> eBook
                                Publisher</a></li>
                        <li> <a href="{{ url('/book-publisher-in-india') }}"><i class="fas fa-angle-right"></i> Book
                                Publisher</a></li>
                        <li> <a href="https://store.bfcpublications.com/"> <i class="fas fa-angle-right"></i> Book
                                Store</a></li>
                    </ul> 
                    <ul class="col-lg-2 col-md-6 foot-link mt-lg-2 pt-lg-1">
                        <li class="d-none d-md-block">
                            <div class="pb-4"></div>
                        </li>
                        <li className="mt-2"><a href="https://bfcpublications.com/klf" target="_blank"><i
                                    class="fas fa-angle-right"></i> KLF </a></li>
                        <li> <a href="{{ url('/career') }}"><i class="fas fa-angle-right"></i> Career</a></li>
                        <!-- <li> <a href="{{ url('/royalty-calculator') }}"><i class="fas fa-angle-right"></i> Royalty
                                Calculator</a></li> -->
                        <li> <a href="{{ url('/print-on-demand-book-publishing') }}"><i class="fas fa-angle-right"></i> Print On
                                Demand</a></li>
                        <li> <a href="{{ url('/faq') }}"><i class="fas fa-angle-right"></i> FAQs</a></li>
                        <li><a class="{{ request()->is('contact') ? 'active' : '' }}" href="{{ url('/contact') }}"> <i class="fas fa-angle-right"></i>Contact
                            Us</a></li>
                    </ul>
                    <ul class="col-lg-3 col-md-6 foot-link ">
                        <li>
                            <div class="h5">OFFICE ADDRESS</div>
                        </li>
                        <li><a href="https://goo.gl/maps/2XGLU6FL84gL4jF48" target="_blank"><i
                                    class="fas fa-map-marker-alt me-2 text-red-c"></i> BFC Publications Pvt
                                Ltd,<br />CP-61, Viraj Khand, Gomti Nagar,<br />Lucknow, Uttar Pradesh 226010</a>
                                <p class="mb-0 fs-14"><b>Hours</b>: Mon - Sat :- 09:30 am - 6:30 pm</p>
                                <p class="fs-14 mb-0">(Second & Fourth Saturday Closed)</p>
                            </li>
                        <li><a href="tel:5223514141"><i class="fa fa-phone me-2 text-red-c" target="_blank"></i>
                                +915223514141</a></li>
                                
                        <li><a href="mailto:support@bfcpublications.com"><i class="fas fa-envelope me-2 text-red-c"
                                    target="_blank"></i> support@bfcpublications.com</a></li>

                    </ul> 
                </div>
            </div>
            <section class="copyright">
                <div class="row">
                    <div class="col-md-4">
                        <p class="text-white"><span>©</span> All Rights Reserved.BFC Publications</p>
                    </div>
                    <div class="col-md-8 text-end">
                        <p>
                            <a href="{{ url('/terms-and-condition') }}">Terms and Conditions</a>
                            <span class="text-white"> | </span>
                            <a href="{{ url('/privacy-policy') }}">Privacy Policy</a>
                            <span class="text-white"> | </span>
                            <a href="{{ url('/legal-disclaimer') }}"> Legal Disclaimer</a>
                            <span class="text-white"> | </span>
                            <a href="{{ '/refund-and-cancellation-policy' }}">Refund and Cancellation Policy</a>
                        </p>

                    </div>
                </div>
            </section>

        </footer>
    </section>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="{{ url('plugins/toastr/toastr.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ url('assets/js/main.js') }}"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="{{ url('assets/js/videos.js') }}"></script>
    <script src="{{ url('assets/gallery/script.js') }}"></script>
    <script>
        AOS.init();
    </script>
    <script src="{{ url('customjs/jquery.validate.min.js') }}"></script>
    <script src="{{ url('customjs/home.js') }}"></script>
    @yield('extern-js')
    <script>
        $(document).ready(function() {

        });
    </script>
</body>

</html>
