<?php $__env->startSection('extern-css'); ?>
    <title><?php echo e($title); ?></title>
    <link rel="canonical" href="https://bfcpublications.com/">
    <meta property="og:title" content="Self Book Publisher in India | Online Publishing | BFC Publications">
    <meta property="og:site_name" content="BFC Publications">
    <meta property="og:url" content="https://bfcpublications.com /">
    <meta property="og:description"
        content="BFC Publications - India's leading Self Publisher. Our emphasis on
        quality has expeditiously propelled us as one of the most trusted online publishing houses">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://bfcpublications.com/assets/img/logo/bfc-logo.png">

    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@BfcPublications">
    <meta name="twitter:title" content="Self Book Publisher in India | Online Publishing | BFC Publications">
    <meta name="twitter:description"
        content="BFC Publications - India's leading Self Publisher. Our emphasis on quality has expeditiously propelled us as one of the most trusted online publishing houses"">
    <meta name="twitter:image" content="https://bfcpublications.com/assets/img/logo/bfc-logo.png">
    <style>
        label.error {
            color: #dc3545;
            font-size: 14px;
        }
    </style>
    <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "Corporation",
          "name": "BFC PUBLICATIONS",
          "url": "https://bfcpublications.com/",
          "logo": "https://bfcpublications.com/assets/img/logo/bfc-logo.png",
          "sameAs": [
            "https://www.facebook.com/bfcpublications/",
            "https://twitter.com/BfcPublications",
            "https://www.instagram.com/bfc_publications/",
            "https://www.youtube.com/channel/UC0Yi0oA1UDSoJjU20-1_brQ",
            "https://www.linkedin.com/company/bfc-publications/",
            "https://bfcpublications.com/"
          ]
        }
        </script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

    <section class="home" id="home">
        <div class="container px-lg-0">
            <div class="row  align-items-stretch flex-wrap-reverse">
                <div class="col-md-6 ">
                    <div class="content py-lg-5 mt-lg-3">
                        <div data-aos="fade-right" class="animate__animated animate__fadeInLeft animate__delay-0.9s">
                            <h2 class="freshGlow">IF WRITING IS YOUR PASSION,</h2>
                        </div>
                        <div class="animate__animated animate__flipInX animate__delay-1s">
                            <h2 class="freshGlow">PUBLISHING IS OURS.</h2>
                        </div>
                        <div class="animate__animated animate__fadeInUp animate__delay-0.9s">
                            <p class="short-desc fs-sm-13">A publishing house that's committed to discovering stories, <br>
                                one bestseller at a time.</p>
                        </div>
                        <div class="mb-4">
                            <img src="assets/img/home/label.webp" alt="" class="img-fluid mx-90" />
                            <img src="assets/img/home/label-2.webp" alt="" class="ms-5 img-fluid max-125" />
                            <img src="assets/img/home/label-3.webp" alt="" class="ms-5 img-fluid max-125" />
                        </div>
                        <div class="animate__animated animate__fadeInDown animate__delay-0.5s mt-4">
                            <a href="#" class="btn btn-custom " data-bs-toggle="modal" data-bs-target="#start-pub"><i
                                    class="fa fa-book-open pe-2 fa-1x"></i>Start Publishing Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 align-self-center">
                    <div class="home-slider owl-carousel owl-theme">
                        <?php if(!empty($bookstore)){
                            foreach($bookstore as $values)
                            {
                            ?>
                                <div class="item">
                            <div class="swiper books-slider pt-lg-5 mt-3">
                                <div class="swiper-wrapper">
                                    <a href="#" class="swiper-slide"><img src="https://bookstoreassets.s3.ap-southeast-1.amazonaws.com/banners/<?php echo $values->url;?>"
                                            alt="" /></a>
                                </div>
                            </div>
                        </div>
                            <?php }}?>
                        <!-- <div class="item">
                            <div class="swiper books-slider pt-lg-5 mt-3">
                                <div class="swiper-wrapper">
                                    <a href="#" class="swiper-slide"><img src="assets/img/home/books/book-1.webp"
                                            alt="" /></a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="swiper books-slider pt-lg-5 mt-3">
                                <div class="swiper-wrapper">
                                    <a href="#" class="swiper-slide"><img src="assets/img/home/books/book-2.webp"
                                            alt="" /></a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="swiper books-slider pt-lg-5 mt-3">
                                <div class="swiper-wrapper">
                                    <a href="#" class="swiper-slide"><img src="assets/img/home/books/book-3.webp"
                                            alt="" class="pt-2" /></a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="swiper books-slider pt-lg-5 mt-3">
                                <div class="swiper-wrapper">
                                    <a href="#" class="swiper-slide"><img src="assets/img/home/books/book-4.webp"
                                            alt="" /></a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="swiper books-slider pt-lg-5 mt-3">
                                <div class="swiper-wrapper">
                                    <a href="#" class="swiper-slide"><img src="assets/img/home/books/book-5.webp"
                                            alt="" /></a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="swiper books-slider pt-lg-5 mt-3">
                                <div class="swiper-wrapper">
                                    <a href="#" class="swiper-slide"><img src="assets/img/home/books/book-6.webp"
                                            alt="" /></a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="swiper books-slider pt-lg-5 mt-3">
                                <div class="swiper-wrapper">
                                    <a href="#" class="swiper-slide"><img src="assets/img/home/books/book-7.webp"
                                            alt="" /></a>
                                </div>
                            </div>
                        </div> -->
                        <!-- <div class="item">
                            <div class="swiper books-slider pt-lg-5 mt-3">
                                <div class="swiper-wrapper">
                                    <a href="#" class="swiper-slide"><img src="assets/img/home/books/book-8.webp"
                                            alt="" /></a>
                                </div>
                            </div>
                        </div> -->
                    </div>
                    <img src="assets/img/banner/stand.webp" class="img-fluid" alt="" />
                </div>
            </div>
        </div>
        </div>
    </section>
    <!--------------------------------------------------->
<!-- ============ Book of Record Section ========= -->
<!--------------------------------------------------->
<section class="py-5 bg-light-blue "> 
  <div class="container px-lg-0">
    <div class="row align-items-stretch flex-wrap-reverse">
      
     
      <div class="col-md-6 align-self-center mt-4 mt-lg-0">
      <div class="klf-caption">
          <h3 class="text-uppercase">BFC Publications enters <span class="text-red-c">the Asia Book of Records!</span></h3>        
          <p class="mb-4 text-justify">We have secured a prestigious spot in the Asia Book of Records by publishing the maximum number of E-Books in just one day. With innovation as our compass, we have redefined publishing, empowering readers worldwide. Our unwavering dedication to attaining literary excellence has brought us this far, but we have not come this far to only come this far.
        
          </p>
        </div>
</div>

<div class="col-md-1"></div>
<div class="col-md-5 ab-of-r">
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/recordimg/1.webp" class="d-block w-100 img-fluid klf-img" alt="...">
    </div>
    <div class="carousel-item">
    <img src="assets/recordimg/2.webp" class="d-block w-100 img-fluid klf-img" alt="...">
    </div>
    <div class="carousel-item">
    <img src="assets/recordimg/3.webp" class="d-block w-100 img-fluid klf-img" alt="...">
    </div>
    <div class="carousel-item">
    <img src="assets/recordimg/4.webp" class="d-block w-100 img-fluid klf-img" alt="...">
    </div>
  </div>
  
</div>
      
      </div>
</div>

</div>

</section>
<section class="container py-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="portfolio-title text-center pb-2">
        <h1 class="text-uppercase">BFC Publications Podcast</h1>
      </div>
    </div>
  </div>
  <div class="row border-topads-slide justify-content-evenly py-4">
    <div class="col-md-5">
      <div class="owl-carousel owl-theme slide-ads-banner">
        <?php 
         if(!empty($bfccontent)){
         foreach($bfccontent as $key=>$value){
        ?>
        <!--div class="item ads-banner-items">
          <img class="ads-image-thums" src="https://basicfundeassests.s3.ap-southeast-1.amazonaws.com/<?php echo $value->thumbnail; ?>" alt="Please Refresh">
          <div class="play-btn-here">
            <a class="watch-link-here banner-btn btn mediabox wow fadeInUp" href="<?php echo $value->url; ?>" data-wow-delay=".8s" data-wow-duration="1.8s">Play</a>
          </div>
        </div> -->
        <?php }}?>
        <?php 
        // Prodcast Api 
         if(!empty($prodcastApi)){
         foreach($prodcastApi as $key=>$value){
        ?>
        <!--  <div class="item ads-banner-items">
          <img class="ads-image-thums" src="https://bfcgroup.in/<?php echo $value->file_name;?>" alt="Please Refresh">
          <div class="play-btn-here">
            <a class="watch-link-here banner-btn btn mediabox wow fadeInUp" href="<?php echo $value->link;?>" data-wow-delay=".8s" data-wow-duration="1.8s">Play</a>
          </div>
        </div> -->
         <?php }}?>

        <div class="item ads-banner-items">
          <img class="ads-image-thums" src="assets/img/podcast/publication-podcast-1.webp" alt="Please Refresh">
          <div class="play-btn-here">
            <a class="watch-link-here banner-btn btn mediabox wow fadeInUp" href="https://www.youtube.com/embed/4Rvn_o72NtI?si=7rCXBpift3NB_-0O" data-wow-delay=".8s" data-wow-duration="1.8s">Play</a>
          </div>
        </div>

        <div class="item ads-banner-items">
          <img class="ads-image-thums" src="assets/img/podcast/publication-podcast-2.webp" alt="Please Refresh">
          <div class="play-btn-here">
            <a class="watch-link-here banner-btn btn mediabox wow fadeInUp" href="https://www.youtube.com/embed/7S4XPs9h0zA?si=uSqJASnWE-SZQ-s1" data-wow-delay=".8s" data-wow-duration="1.8s">Play</a>
          </div>
        </div>

        <div class="item ads-banner-items">
          <img class="ads-image-thums" src="assets/img/podcast/publication-podcast-3.webp" alt="Please Refresh">
          <div class="play-btn-here">
            <a class="watch-link-here banner-btn btn mediabox wow fadeInUp" href="https://www.youtube.com/embed/z_ImVo9DjHw?si=MYpLuL_WTov_J2N0" data-wow-delay=".8s" data-wow-duration="1.8s">Play</a>
          </div>
        </div>

        <div class="item ads-banner-items">
          <img class="ads-image-thums" src="assets/img/podcast/publication-podcast-4.webp" alt="Please Refresh">
          <div class="play-btn-here">
            <a class="watch-link-here banner-btn btn mediabox wow fadeInUp" href="https://www.youtube.com/embed/1il-T_RbXZ4?si=sMgrIUuci0WBAMi-" data-wow-delay=".8s" data-wow-duration="1.8s">Play</a>
          </div>
        </div>

      </div>
    </div>
    <div class="col-md-6">
      <div class="video-summary-content">
        <!-- <div class="">
          <h3>Qisson Ki Kitab</h3>
        </div> -->
        <div class="text-justify">
         
          Welcome to the BFC Publications Podcast, where we bring you inspiring conversations with authors from diverse genres! 📚✨
         </br>
In this series, we invite writers to share the stories behind their books, their creative journeys, and the inspirations that fueled their writing. Whether you're an aspiring author or an avid reader, these candid discussions offer valuable insights into the world of storytelling, publishing, and personal growth.
</br>
🔹 Meet bestselling & debut authors</br>
🔹 Discover the ideas that shaped their books
</br>
Subscribe now and dive into the minds of incredible storytellers! 
          </P>
        </div>
        <div class="py-4"> 
          <a target="_blank" href="https://www.youtube.com/playlist?list=PL_3-JMsvsLTwtS4Luw9IgPz9Y2hV_Fggi" class="btn btn-custom">Watch Now</a>
        </div>
      </div>
    </div>
  </div>

</section>
    <!--------------------------------------------------->
    <!-- ============ Our KLF Section ================ -->
    <!--------------------------------------------------->
    <section class=" py-5">
        <div class="container px-lg-0">
            <div class="row align-items-stretch">
                <div class="col-md-5 align-self-center">
                    <img src="assets/img/klf/klf.gif" alt="" class="img-fluid klf-img" />
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-6 mt-smc-2">
                    <div class="klf-caption">
                        <h3>BFC PUBLICATIONS PRESENTS</h3>
                        <h2>KOSHALA LITERATURE FESTIVAL 2022</h2>
                        <p class="mb-4">Held between 4-6 November 2022, KLF-Awadh was a three-day long celebration
                            revolving around the rich heritage of Awadh, featuring the biggest names in the fields of Arts,
                            Literature, Music, Filmmaking, and much more.
                            <a href="https://bfcpublications.com/klf" target="_blank">Read more</a>
                        </p>
                    </div>     
                    <div>
                        <div class="row">
                            <div class="col-md-6 pb-3 ">
                                <a href="<?php echo e(url('/book-stall')); ?>" class="ba">
                                    <span>
                                        <div class="klf-link d-flex klf-icon_box align-items-stretch">
                                            <img src="<?php echo e(url('assets/img/klf/books.webp')); ?>" class="img-fluid" />
                                            <p class="align-self-center">Book Stall</p>
                                        </div>
                                    </span>
                                </a>
                            </div>
                            <div class="col-md-6 pb-3">
                                <a href="<?php echo e(url('/bfc-lounge')); ?>" class="ba">
                                    <span>
                                        <div class="klf-link d-flex">
                                            <img src="<?php echo e(url('assets/img/klf/lounge.webp')); ?>" class="img-fluid" />
                                            <p>BFC Lounge</p>
                                        </div>
                                    </span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="<?php echo e(url('/sessions-klf')); ?>" class="ba">
                                    <span>
                                        <div class="klf-link d-flex">
                                            <img src="<?php echo e(url('assets/img/klf/interview.webp')); ?>" class="img-fluid" />
                                            <p>KLF Sessions</p>
                                        </div>
                                    </span>
                                </a>
                            </div>
                            <div class="col-md-6 ">

                                <a href="<?php echo e(url('/gallery')); ?>" class="ba">
                                    <span>
                                        <div class="klf-link d-flex">
                                            <img src="<?php echo e(url('assets/img/klf/image-gallery.webp')); ?>" class="img-fluid" />
                                            <p>Gallery</p>
                                        </div>
                                    </span>
                                </a>

                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>

<!-- video-popup  -->

    <!--------------------------------------------------->
    <!-- =========== About Us Section ================ -->
    <!--------------------------------------------------->

    <section class="bg-light-blue py-3">
        <div class="container">
            <h2 class="headm">ABOUT BFC PUBLICATIONS</h2>
            <div class="row align-items-center py-2 flex-wrap-reverse">
                <div class="col-md-6">
                    <p class="text-justify">
                        At BFC Publications, we help authors succeed by providing the resources and support needed to get
                        their stories out there. Our team of experts educates authors on the ways of publishing, while our
                        digital marketing specialists make sure their books achieve the kind of visibility they deserve.
                        Also, we stay in constant touch with our authors, guiding them through the publishing process,
                        because we believe in their unique vision and strive to meet their expectations.
                    </p>
                    <a href="<?php echo e(url('/about')); ?>" class="btn btn-custom">Read More</a>
                </div>
                <div class="col-md-6">
                    <div class="img-box1">
                        <div class="img1"><img src="assets/img/other/Publications.webp" alt="About"
                                class="img-fluid" /></div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--------------------------------------------------->
    <!-- =========== Services Section ================ -->
    <!--------------------------------------------------->

    <section class="py-4 service-we-offer">
        <div class="container">
            <h2 class="headm">SERVICES WE OFFER</h2>
            <div class="row py-5">
                <div class="col-md-4 px-lg-0 mb-4">
                    <a href="<?php echo e(url('/book-editorial-services')); ?>">
                        <div class="card border-0">
                            <div class="card-img">
                                <div class="flip-card-inner ">
                                    <div class="flip-card-front p-2">
                                        <img src="<?php echo e(url('assets/img/home/about_2_3.webp')); ?>" alt="" />
                                    </div>
                                    <div class="flip-card-back p-3">
                                        <p>Our editorial services include format editing and proofreading to enhance the
                                            readability and professionalism of your manuscript. Our experts focus on
                                            improving grammar, sentence structure, word choice, and page layout. We
                                            meticulously comb through your work, eliminating errors and ensuring a polished
                                            final copy free from grammatical, spelling, and typographical mistakes.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body ">
                                <h6> Editorial Services</h6>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 pe-lg-0 mb-4">
                    <a href="<?php echo e(url('/book-designing-services')); ?>">
                        <div class="card border-0">
                            <div class="card-img">
                                <div class="flip-card-inner">
                                    <div class="flip-card-front p-2">
                                        <img src="<?php echo e(url('assets/img/other/designing.webp')); ?>" alt="" />
                                    </div>
                                    <div class="flip-card-back p-3">
                                        <p>The saying "Don't judge a book by its cover" may have been true in the past, but
                                            in today's digital age, books attract attention through hashtags and viral
                                            tweets. BFC understands the importance of eye-catching book covers that
                                            accurately convey the author's vision. We ensure that your book cover grabs the
                                            public's attention and represents your work effectively.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <h6>Designing Services</h6>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 pe-lg-0 mb-4">
                    <a href="<?php echo e(url('/book-marketing-services')); ?>">
                        <div class="card border-0">
                            <div class="card-img">
                                <div class="flip-card-inner">
                                    <div class="flip-card-front p-2">
                                        <img src="<?php echo e(url('assets/img/home/marketing.webp')); ?>" alt="" />
                                    </div>
                                    <div class="flip-card-back p-3">
                                        <p>BFC's Book Marketing Services are designed to support both established and
                                            emerging authors in navigating the complexities of modern-day marketing. Our
                                            team of experts has crafted a robust and foolproof strategy that leverages viral
                                            hashtags, engaging Facebook and Instagram campaigns, and other innovative
                                            marketing techniques to maximise the visibility of our authors' works.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <h6>Marketing Services</h6>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 ps-lg-0 mt-3 mb-4">
                    <a href="<?php echo e(url('/book-distribution-services')); ?>">
                        <div class="card border-0">
                            <div class="card-img">
                                <div class="flip-card-inner">
                                    <div class="flip-card-front p-2">
                                        <img src="<?php echo e(url('assets/img/home/distribution.webp')); ?>" alt="" />
                                    </div>
                                    <div class="flip-card-back p-3">
                                        <p>We have meticulously woven an extensive network of bookstores and e-marketplaces,
                                            guaranteeing widespread availability of your book. From the smallest to the
                                            largest platforms and bookstores, your book will be showcased to eager buyers
                                            across India and beyond. This includes renowned platforms like Amazon Kindle,
                                            Google Play Books, Flipkart, Amazon, Kobo, ShopClues, Snapdeal, Smashwords, and
                                            many more.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <h6> Distribution Services</h6>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 pe-lg-0 mt-3 mb-4">
                    <a href="<?php echo e(url('/author-support')); ?>">
                        <div class="card border-0 ">
                            <div class="card-img ">
                                <div class="flip-card-inner">
                                    <div class="flip-card-front p-2">
                                        <img src="<?php echo e(url('assets/img/home/as.webp')); ?>" alt="" />
                                    </div>
                                    <div class="flip-card-back p-3">
                                        <p>At BFC Publications, we offer 360-degree support to authors, including direct
                                            access to our publishing consultants via the "Call Us" tab on our website. Also,
                                            our Author Dashboard provides real-time sales proceeds information. From writing
                                            guidance to marketing assistance, we're here to help you succeed in your
                                            publishing journey.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <h6> Author Support</h6>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 pe-lg-0 mt-3">
                    <a href="<?php echo e('/legal'); ?>">
                        <div class="card border-0 ">
                            <div class="card-img ">
                                <div class="flip-card-inner">
                                    <div class="flip-card-front p-2">
                                        <img src="<?php echo e(url('assets/img/other/AGREEMENT.webp')); ?>" alt="" />
                                    </div>
                                    <div class="flip-card-back p-3">
                                        <p>Our legal services at BFC Publications encompass crucial elements of the
                                            publishing process. We not only provide a comprehensive publishing agreement to
                                            safeguard your rights but also allocate ISBN for proper book identification.
                                            Additionally, we handle the copyright registration for all books published with
                                            us, ensuring protection for your intellectual property.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <h6>Legal (Agreement, Isbn, Copyright And Barcode)</h6>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-12 text-center pt-4">
                    <a href="<?php echo e(url('/services')); ?>" class="btn btn-custom"> Explore More</a>
                </div>
            </div>
        </div>
    </section>
    <!--------------------------------------------------->
    <!-- ========= Publishing Matrix Section ========= -->
    <!--------------------------------------------------->

    <section class="bg-light-blue py-4">
        <div class="container ">
            <h2 class="headm">OUR SELF PUBLISHING MATRIX</h2>
            <div class="row py-5">
                <div class="col-md-12">
                    <div class="main-timeline">
                        <div class="timeline">
                            <a href="<?php echo e(url('/process')); ?>" class="timeline-content tc-1">
                                <div class="timeline-icon"><i class="fa fa-pencil-alt img"></i> </div>
                                <h3 class="title">Consultation & Registration</h3>
                                <p class="description">
                                    Leverage the know-how of our expert consultants to identify the publishing solution that
                                    best suits your needs, or get one tailored. <span class="text-red-c">Read more</span>
                                </p>
                            </a>
                        </div>
                        <div class="timeline">
                            <a href="<?php echo e(url('/process')); ?>" class="timeline-content tc-2">
                                <div class="timeline-icon"><i class="fa fa-file-signature img"></i></div>
                                <h3 class="title">Contract Signing</h3>
                                <p class="description">
                                    Enter into a contract with us to safeguard the intellectual rights of your manuscript.
                                    This also ensures that both parties, you and BFC uphold <span class="text-red-c">Read
                                        more</span>
                                </p>
                            </a>
                        </div>
                        <div class="timeline">
                            <a href="<?php echo e(url('/process')); ?>" class="timeline-content tc-3">
                                <div class="timeline-icon"><i class="fa fa-check-double img"></i></div>
                                <h3 class="title">Manuscript Submission</h3>
                                <p class="description">
                                    Submit your manuscript with us to get the ball rolling. A dedicated publishing
                                    manager/consultant shall be assigned to you at this <br><span class="text-red-c">Read
                                        more</span>
                                </p>
                            </a>
                        </div>
                        <div class="timeline">
                            <a href="<?php echo e(url('/book-editorial-services')); ?>" class="timeline-content tc-4">
                                <div class="timeline-icon"><i class="fa fa-pen-fancy img"></i></div>
                                <h3 class="title">Proofreading and Format Editing </h3>
                                <p class="description">
                                    Our team of proof-readers and copy-editors will get working on your book, fine-combing
                                    the manuscript for errors. <span class="text-red-c">Read more</span>
                                </p>
                            </a>
                        </div>
                        <div class="timeline">
                            <a href="<?php echo e(url('/book-designing-services')); ?>" class="timeline-content tc-1">
                                <div class="timeline-icon"><i class="fas fa-paint-brush img"></i></div>
                                <h3 class="title">Designing</h3>
                                <p class="description">
                                    Our graphic designers and illustrators go to work on the interior and cover of the book.
                                    This is done keeping in mind the brief provided <span class="text-red-c">Read
                                        more</span>
                                </p>
                            </a>
                        </div>
                        <div class="timeline">
                            <a href="<?php echo e(url('/book-marketing-services')); ?>" class="timeline-content tc-2">
                                <div class="timeline-icon"><img src="<?php echo e(url('assets/img/matrix/social-media.png')); ?>"
                                        alt="" class="img-fluid img" /></div>
                                <h3 class="title">Marketing & Online Distribution</h3>
                                <p class="description">
                                    The team guides authors to make decisions based on prevalent e-marketplace and digital
                                    marketing trends. Special emphasis is laid <span class="text-red-c">Read more</span>
                                </p>
                            </a>
                        </div>
                        <div class="timeline">
                            <a href="<?php echo e(url('/royalty-calculator')); ?>" class="timeline-content tc-3">
                                <div class="timeline-icon"><i class="fa-solid fa-indian-rupee-sign img"></i></div>
                                <h3 class="title">Royalty</h3>
                                <p class="description">
                                    In BFC, authors have absolute freedom when it comes to determining the worth of their
                                    work, even if it is over and above the suggested price. <span class="text-red-c">Read
                                        more</span>
                                </p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--------------------------------------------------->
    <!-- ============= Why Us Section ================ -->
    <!--------------------------------------------------->

    <section class="pt-4">
        <div class="container">
            <h2 class="headm">WHY US</h2>
            <div class="space">
                <div class="row align-items-stretch">
                    <div class="col-md-6 mt-smc-2">
                        <div class="animate__animated animate__fadeInLeft animate__delay-0.2s" class="ani-f">
                            <img src="assets/img/home/1.png" alt="" class="img-fluid why-img1" />
                        </div>
                        <div class="img-box1 why-img2">
                            <div class="img1"><img src="assets/img/other/why us.webp" alt="About"
                                    class="img-fluid w-90" /></div>

                            <div class="year-counter why">
                                <div class="animate__animated animate__zoomIn animate__delay-0.2s">
                                    <h3 class="year-counter_number"><span class="counter-number text-poppins counter"
                                            data-countto="2" data-duration="2000"></span>K+</h3>
                                    <p class="year-counter_text text-rale">Project</p>
                                </div>
                            </div>
                            <div class="year-counter why counter2">
                                <div class="animate__animated animate__zoomIn animate__delay-0.2s">
                                    <h3 class="year-counter_number"><span class="counter-number text-poppins counter"
                                            data-countto="5" data-duration="2000"></span>K+</h3>
                                    <p class="year-counter_text text-rale">client</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6  pt-5 mt-2 align-self-center">
                        <p class="text-justify">BFC Publications stands out as a leading Book publisher in India for
                            several compelling reasons. First of all, our commitment to quality is unmatched, ensuring that
                            authors get the kind of service they deserve. Also, unlike some market players, we prioritise
                            transparency by providing clear and concise publishing contracts, making it easy for authors to
                            understand the terms of engagement. Additionally, our team goes above and beyond to exceed
                            author expectations, delivering exceptional results at prices that even top publishing houses
                            struggle to match.</p>

                        <div class="col-md-12  pt-4 mb-5">
                            <a href="<?php echo e(url('/why-us')); ?>" class="btn btn-custom"> Explore More</a>
                        </div>
                        <div class="animate__animated animate__fadeIn animate__delay-0.2s">
                            <img src="<?php echo e(url('assets/img/home/2.png')); ?>" alt="" class="img-fluid why-img-c" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--------------------------------------------------->
    <!-- ============= Plans Section ================= -->
    <!--------------------------------------------------->

    <section class="packages bg-light-blue py-3 mt-n2" id="plans">
        <div class="container-fluid">
            <h2 class="headm">PLANS</h2>



            <Tabs class="">
                <div class="row justify-content-center mt-4">

                    <!-- <div class="col-md-3  pb-5"> -->
                    <div class="col-md-6  pb-5">
                        <ul class="nav nav-pills" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="nav-home-tab" data-bs-toggle="pill"
                                    data-bs-target="#tab1" type="button" role="tab" aria-controls="nav-home"
                                    aria-selected="true">Paperback</a>

                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="nav-profile-tab" data-bs-toggle="pill" data-bs-target="#tab2"
                                    type="button" role="tab" aria-controls="nav-profile"
                                    aria-selected="false">eBook</a>
                            </li>
                        </ul>
    
                    </div>
                </div>
                <div class="row bg-packages">
                    <div class="col-md-12">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="tab1" role="tabpanel"
                                aria-labelledby="nav-home-tab" tabindex="0">
                                <!-- ============= Mobile View ================= -->
                                <?php if (isset($component)) { $__componentOriginal3e428f87aa3ad4d0cb2b617c6cc438c5717affc0 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\PlansMobileView::class, []); ?>
<?php $component->withName('plans-mobile-view'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3e428f87aa3ad4d0cb2b617c6cc438c5717affc0)): ?>
<?php $component = $__componentOriginal3e428f87aa3ad4d0cb2b617c6cc438c5717affc0; ?>
<?php unset($__componentOriginal3e428f87aa3ad4d0cb2b617c6cc438c5717affc0); ?>
<?php endif; ?>
                                <!-- ============= Mobile View End ================= -->
                                <div id="Paperback" class="d-none d-md-block">
                                    <div class="pricing-table row-feature-des">
                                        <div class="pricing-card paperback-wd ">
                                            <h3 class="pricing-card-header">Feature Description</h3>
                                            <ul class="ps-0">
                                                <li class="package-title pt-5 mt-3"> Editing Services</li>
                                                <li>Format Editing</li>
                                                <li>Proof Reading</li>
                                                <li>Cover Design</li>
                                                <li class="package-title">ISBN Allocation</li>
                                                <li class="package-title"> Marketing your Masterpiece</li>
                                                <li>Online Listing & Distribution</li>
                                            </ul>
                                        </div>
                                        <div class="pricing-card">
                                        <h3 class="pricing-card-header">Economy </h3>
                                        <div class="price"><span>₹4,999</span>+ GST</div>
                                            <ul class="ps-0">
                                                <li>
                                                    <i class="fa-solid fa-check ms-2 pi "></i>
                                                    Yes (Two Rounds)
                                                </li>
                                                <li>
                                                <i class="fa fa-times ms-2 pi-n "></i>
                                                No
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-check ms-2 pi "></i>
                                                    Basic (Two Rounds)
                                                </li>
                                                <li class="package-title"> Yes</li>
                                                <li class="package"></li>
                                                <li>
                                                    <i class="fa-solid fa-check ms-2 pi "></i>
                                                    Yes
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="pricing-card">
                                            <h3 class="pricing-card-header">Essential</h3>
                                            <div class="price"><span>₹10,999</span>+ GST</div>
                                            <ul class="ps-0">
                                                <li>
                                                    <i class="fa-solid fa-check ms-2 pi "></i>
                                                    Yes (Two Rounds)
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-check ms-2 pi "></i>
                                                    Yes (Two Rounds)
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-check ms-2 pi "></i>
                                                    Basic (Two Rounds)
                                                </li>
                                                <li class="package-title"> Yes</li>
                                                <li class="package"></li>
                                                <li>
                                                    <i class="fa-solid fa-check ms-2 pi "></i>
                                                    Yes
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="pricing-card">
                                            <h3 class="pricing-card-header">Regular</h3>
                                            <div class="price"><span>₹15,999</span>+ GST</div>
                                            <ul class="ps-0">
                                                <li>
                                                    <i class="fa-solid fa-check ms-2 pi "></i>
                                                    Yes (Two Rounds)
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-check ms-2 pi "></i>
                                                    Yes (Two Rounds)
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-check ms-2 pi "></i>
                                                    Basic (Two Rounds)
                                                </li>
                                                <li class="package-title"> Yes</li>
                                                <li class="package"></li>
                                                <li>
                                                    <i class="fa-solid fa-check ms-2 pi "></i>
                                                    Yes
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="pricing-card">
                                            <h3 class="pricing-card-header">Elite</h3>
                                            <div class="price"><span>₹34,999</span>+ GST</div>
                                            <ul class="ps-0">
                                                <li>
                                                    <i class="fa-solid fa-check ms-2 pi "></i>
                                                    Yes (Advanced - Four Rounds)
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-check ms-2 pi "></i>
                                                    Yes (Advanced - Four Rounds)
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-check ms-2 pi "></i>
                                                    Premium (Four Rounds)
                                                </li>
                                                <li class="package-title"> Yes</li>
                                                <li class="package"></li>
                                                <li>
                                                    <i class="fa-solid fa-check ms-2 pi "></i>
                                                    Yes
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- <div class="pricing-card">
                                            <h3 class="pricing-card-header">Premium</h3>
                                            <div class="price"><span>₹56,999</span>+ GST</div>
                                            <ul class="ps-0">
                                                <li>
                                                    <i class="fa-solid fa-check ms-2 pi "></i>
                                                    Yes (Three Rounds)
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-check ms-2 pi "></i>
                                                    Yes (Three Rounds)
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-check ms-2 pi "></i>
                                                    Premium (Three Rounds)
                                                </li>
                                                <li class="package-title"> Yes</li>
                                                <li class="package"></li>
                                                <li>
                                                    <i class="fa-solid fa-check ms-2 pi "></i>
                                                    Yes
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="pricing-card">
                                            <h3 class="pricing-card-header">Elite</h3>
                                            <div class="price"><span>₹87,999</span>+ GST</div>
                                            <ul class="ps-0">
                                                <li>
                                                    <i class="fa-solid fa-check ms-2 pi "></i>
                                                    Yes (Three Rounds)
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-check ms-2 pi "></i>
                                                    Yes (Three Rounds)
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-check ms-2 pi "></i>
                                                    Premium (Three Rounds)
                                                </li>
                                                <li class="package-title"> Yes</li>
                                                <li class="package"></li>
                                                <li>
                                                    <i class="fa-solid fa-check ms-2 pi "></i>
                                                    Yes
                                                </li>
                                            </ul>
                                        </div> -->
                                    </div>
                                </div>
                                <div class="row  bg-packages">
                                    <div class="col-md-12">
                                        <div class="text-center">
                                            <a href="<?php echo e(url('/paperback-publishing-packages')); ?>"
                                                class="btn btn-custom">Explore
                                                More</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="bfc-custom-plan text-center py-5">
  <h2>Still Can’t find what you're looking for?</h2>
  <p>No problem! you can create your own plan just the way you want it.</p>
  <a href="https://bfcpublications.com/customize-package/paperback" class="bfc-custom-btn text-white">Click Here to Customize Your Plan Now</a>
</div>
                            </div>
                            <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="nav-profile-tab"
                                tabindex="0">
                                <!-- ============= Mobile View ================= -->
                                <?php if (isset($component)) { $__componentOriginale587b447cd98bafbd7f47705fcd336ba7fd4f604 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\PlansEbookMobileView::class, []); ?>
<?php $component->withName('plans-ebook-mobile-view'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale587b447cd98bafbd7f47705fcd336ba7fd4f604)): ?>
<?php $component = $__componentOriginale587b447cd98bafbd7f47705fcd336ba7fd4f604; ?>
<?php unset($__componentOriginale587b447cd98bafbd7f47705fcd336ba7fd4f604); ?>
<?php endif; ?>
                                <!-- ============= Mobile View End ================= -->
                                <div id="eBook" class="d-none d-md-block">
                                    <div class="pricing-table row-feature-des">
                                        <div class="pricing-card ebook-wd">
                                            <h3 class="pricing-card-header">Feature Description</h3>
                                            <ul class="ps-0">
                                                <li class="package-title pt-5 mt-3">Publishing Support</li>
                                                <li>Content Uploading Allowed - Unlimited</li>
                                                <li class="package-title">Editing Services</li>
                                                <li>Format Editing (Upto 100 Pages)</li>
                                                <li>Proof Reading</li>
                                                <li>Cover Design</li>
                                                <li class="package-title">ISBN Allocation</li>
                                            </ul>
                                        </div>
                                        <div class="pricing-card">
                                            <h3 class="pricing-card-header">Essential</h3>
                                            <div class="price"><span>₹1,999</span>+ GST</div>
                                            <ul class="ps-0">
                                                <li>
                                                    <i class="fa-solid fa-check ms-2 pi "></i>
                                                    Yes
                                                </li>
                                                <li class="package"></li>
                                                <li>
                                                    <i class="fa-solid fa-check ms-2 pi "></i>
                                                    Yes -(Upto 50 Pages)
                                                </li>
                                                <li>
                                                <i class="fa-solid fa-check ms-2 pi "></i>
                                                    Yes -(Upto 50 Pages)
                                                </li>
                                                <li>
                                                <i class="fa-solid fa-check ms-2 pi "></i>
                                                    Yes - Basic
                                                </li>
                                                <li class="package-title"> Yes</li>
                                            </ul>
                                        </div>
                                        <div class="pricing-card">
                                            <h3 class="pricing-card-header">Regular</h3>
                                            <div class="price"><span>₹6,499</span>+ GST</div>
                                            <ul class="ps-0">
                                                <li>
                                                    <i class="fa-solid fa-check ms-2 pi "></i>
                                                    Yes
                                                </li>
                                                <li class="package"></li>
                                                <li>
                                                    <i class="fa-solid fa-check ms-2 pi "></i>
                                                    Yes -(Upto 100 Pages)
                                                </li>
                                                <li>
                                                <i class="fa-solid fa-check ms-2 pi "></i>
                                                    Yes -(Upto 100 Pages)
                                                </li>
                                                <li>
                                                <i class="fa-solid fa-check ms-2 pi "></i>
                                                    Yes - Basic
                                                </li>
                                                <li class="package-title"> Yes</li>
                                            </ul>
                                        </div>
                                        <div class="pricing-card">
                                            <h3 class="pricing-card-header">Superior</h3>
                                            <div class="price"><span>₹16,499</span>+ GST</div>
                                            <ul class="ps-0">
                                                <li>
                                                    <i class="fa-solid fa-check ms-2 pi "></i>
                                                    Yes
                                                </li>
                                                <li class="package"></li>
                                                <li>
                                                    <i class="fa-solid fa-check ms-2 pi "></i>
                                                    Yes -(Upto 100 Pages)
                                                </li>
                                                <li>
                                                <i class="fa-solid fa-check ms-2 pi "></i>
                                                    Yes -(Upto 100 Pages)
                                                </li>
                                                <li>
                                                <i class="fa-solid fa-check ms-2 pi "></i>
                                                    Yes - Premium
                                                </li>
                                                <li class="package-title"> Yes</li>
                                            </ul>
                                        </div>
                                        <!-- <div class="pricing-card">
                                            <h3 class="pricing-card-header">Premium</h3>
                                            <div class="price"><span>₹18,499</span>+ GST</div>
                                            <ul class="ps-0">
                                                <li>
                                                    <i class="fa-solid fa-check ms-2 pi "></i>
                                                    Yes
                                                </li>
                                                <li class="package"></li>
                                                <li>
                                                    <i class="fa-solid fa-check ms-2 pi "></i>
                                                    Yes (Two Rounds)
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-check ms-2 pi "></i>
                                                    Yes (Two Rounds)
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-check ms-2 pi "></i>
                                                    Premium (Two Rounds)
                                                </li>
                                                <li class="package-title"> Yes</li>
                                            </ul>
                                        </div> -->
                                    </div>
                                </div>
                                <div class="row  bg-packages">
                                    <div class="col-md-12">
                                        <div class="text-center">
                                            <a href="<?php echo e(url('/ebook-publishing-packages')); ?>"
                                                class="btn btn-custom">Explore More</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="bfc-custom-plan text-center py-5">
  <h2>Still Can’t find what you're looking for?</h2>
  <p>No problem! you can create your own plan just the way you want it.</p>
  <a href="https://bfcpublications.com/customize-package/ebook" class="bfc-custom-btn text-white">Click Here to Customize Your Plan Now</a>
</div>
                            </div>
                        </div>
                    </div>


                </div>
            </Tabs>
        </div>

    </section>
    <div class="text-center pt-4">
        <h1>Payment Details</h1>
    </div>
    <div class="qr-d-flex pb-5 pt-3">
        <div class="qr-body-container">
            <div class="bhim-upi">
                <img src="<?php echo e(url('assets/payment_image/bhim-upi.jpeg')); ?>" alt="">
            </div>
            <div class="bfc-publication-name">
                <h1>BFC PUBLICATION PVT LTD</h1>
            </div>
            <div class="qr-image">
                <img src="<?php echo e(url('assets/payment_image/qr-code.png')); ?>" alt="">
            </div>
            <div class="bank-upi-id">
                <p>KOTAK UPI UPA STATIC <br>
                    079519640056288 <br>
                    1403528A
                    <br> 
                    079519600056288.bgr@kotak
                </p>
            </div>

            <!-- <div class="flex-icon-helpnumber">
                <div class="set-whatsapp-icon">
                    <img src="./whatsapp-icon.png" alt="">
                </div>
                <div class="helpdesk-number">
                    <p>Worldline Helpdesk No: 12345678900/12346687</p>
                </div>
            </div> -->
        </div>
        <div class="bank-body-container">
            <div class="text-center"><h1 style="font-size: 25px !important;padding-bottom: 8px !important;">Account Details</h1></div>
            <table class="account-details-table">
            <tr class="tr">
                    <td>
                        <h2 class="account-heading-area">Bank Name: </h2>
                    </td>
                    <td>
                        <h3 class="account-details">Kotak Bank</h3>
                    </td>
                </tr>
                <tr class="tr">
                    <td>
                        <h2 class="account-heading-area">Branch Name: </h2>
                    </td>
                    <td> 
                        <h3 class="account-details">4/34, Vivek Khand, Gomti Nagar Lucknow 226002, Uttar Pradesh, India</h3>
                    </td>
                </tr>
                <tr class="tr">
                    <td>
                        <h2 class="account-heading-area">Account No: </h2>
                    </td>
                    <td>
                        <h3 class="account-details">2814002782</h3>
                    </td>
                </tr>
                <tr class="tr">
                    <td>
                        <h2 class="account-heading-area">IFSC Code: </h2>
                    </td>
                    <td>
                        <h3 class="account-details">KKBK0005196</h3>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <!--------------------------------------------------->
    <!-- ============= Featured Books ================= -->
    <!--------------------------------------------------->
    <section class="pt-3">
        <div class="container pb-5 febook">
            <h2 class="mb-5 text-uppercase headm">Featured Books</h2>
            <div class="featured-book owl-carousel owl-theme">
                <div class="item">
                    <a href="https://store.bfcpublications.com/">
                        <div class="book">

                            <ul>
                                <li class="page page3"></li>
                                <li class="page page2"></li>
                                <li class="page page1"></li>
                                <li class="cover cover2"></li>
                            </ul>

                        </div>
                        <div class="text-start mt-50">
                            <h5>Stupid Stories</h5>
                            <span>₹350</span>
                            <ul class="d-flex lst-0 ps-0 fb">
                                <li>
                                    <FaStar class="ms-0" />
                                </li>
                                <li>
                                    <i class="fa fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star"></i>
                                </li>
                            </ul>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="https://store.bfcpublications.com/">
                        <div class="book">

                            <ul>
                                <li class="page page3"></li>
                                <li class="page page2"></li>
                                <li class="page page1"></li>
                                <li class="cover cover3"></li>
                            </ul>

                        </div>
                        <div class="text-start mt-50">
                            <h5>Abhivaykti</h5>
                            <span>₹240</span>
                            <ul class="d-flex lst-0 ps-0 fb">
                                <li>
                                    <FaStar class="ms-0" />
                                </li>
                                <li>
                                    <i class="fa fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star"></i>
                                </li>
                            </ul>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="https://store.bfcpublications.com/">
                        <div class="book">

                            <ul>
                                <li class="page page3"></li>
                                <li class="page page2"></li>
                                <li class="page page1"></li>
                                <li class="cover cover1"></li>
                            </ul>

                        </div>
                        <div class="text-start mt-50">
                            <h5>Percipience" Poetry To Perceive"</h5>
                            <span>₹115</span>
                            <ul class="d-flex lst-0 ps-0 fb">
                                <li>
                                    <FaStar class="ms-0" />
                                </li>
                                <li>
                                    <i class="fa fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star"></i>
                                </li>
                            </ul>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="https://store.bfcpublications.com/">
                        <div class="book">

                            <ul>
                                <li class="page page3"></li>
                                <li class="page page2"></li>
                                <li class="page page1"></li>
                                <li class="cover cover4"></li>
                            </ul>

                        </div>
                        <div class="text-start mt-50">
                            <h5>Amavas ka Chand</h5>
                            <span>₹295</span>
                            <ul class="d-flex lst-0 ps-0 fb">
                                <li>
                                    <FaStar class="ms-0" />
                                </li>
                                <li>
                                    <i class="fa fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star"></i>
                                </li>
                            </ul>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="https://store.bfcpublications.com/">
                        <div class="book">

                            <ul>
                                <li class="page page3"></li>
                                <li class="page page2"></li>
                                <li class="page page1"></li>
                                <li class="cover cover5"></li>
                            </ul>

                        </div>
                        <div class="text-start mt-50">
                            <h5>Reiki - Bramhand Ki Urja Se Hone Wali Rahasyamai Chikitsa</h5>
                            <span>₹300</span>
                            <ul class="d-flex lst-0 ps-0 fb">
                                <li>
                                    <FaStar class="ms-0" />
                                </li>
                                <li>
                                    <i class="fa fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star"></i>
                                </li>
                            </ul>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="https://store.bfcpublications.com/">
                        <div class="book">

                            <ul>
                                <li class="page page3"></li>
                                <li class="page page2"></li>
                                <li class="page page1"></li>
                                <li class="cover cover6"></li>
                            </ul>

                        </div>
                        <div class="text-start mt-50">
                            <h5> Life Blooms@ 70 Power of Human Networking</h5>
                            <span>₹480</span>
                            <ul class="d-flex lst-0 ps-0 fb">
                                <li>
                                    <FaStar class="ms-0" />
                                </li>
                                <li>
                                    <i class="fa fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star"></i>
                                </li>
                            </ul>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="https://store.bfcpublications.com/">
                        <div class="book">

                            <ul>
                                <li class="page page3"></li>
                                <li class="page page2"></li>
                                <li class="page page1"></li>
                                <li class="cover cover7"></li>
                            </ul>

                        </div>
                        <div class="text-start mt-50">
                            <h5>Gandhi Haar Gaye ?</h5>
                            <span>₹251</span>
                            <ul class="d-flex lst-0 ps-0 fb">
                                <li>
                                    <FaStar class="ms-0" />
                                </li>
                                <li>
                                    <i class="fa fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star"></i>
                                </li>
                            </ul>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="https://store.bfcpublications.com/">
                        <div class="book">

                            <ul>
                                <li class="page page3"></li>
                                <li class="page page2"></li>
                                <li class="page page1"></li>
                                <li class="cover cover8"></li>
                            </ul>

                        </div>
                        <div class="text-start mt-50">
                            <h5>Hai Bhi Nhi Bhi</h5>
                            <span>₹235</span>
                            <ul class="d-flex lst-0 ps-0 fb">
                                <li>
                                    <FaStar class="ms-0" />
                                </li>
                                <li>
                                    <i class="fa fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star"></i>
                                </li>
                            </ul>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="https://store.bfcpublications.com/">
                        <div class="book">

                            <ul>
                                <li class="page page3"></li>
                                <li class="page page2"></li>
                                <li class="page page1"></li>
                                <li class="cover cover9"></li>
                            </ul>

                        </div>
                        <div class="text-start mt-50">
                            <h5>Sales & More Sales</h5>
                            <span>₹300</span>
                            <ul class="d-flex lst-0 ps-0 fb">
                                <li>
                                    <FaStar class="ms-0" />
                                </li>
                                <li>
                                    <i class="fa fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star"></i>
                                </li>
                            </ul>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="https://store.bfcpublications.com/">
                        <div class="book">

                            <ul>
                                <li class="page page3"></li>
                                <li class="page page2"></li>
                                <li class="page page1"></li>
                                <li class="cover cover10"></li>
                            </ul>

                        </div>
                        <div class="text-start mt-50">
                            <h5>Spirituality Through Happiness</h5>
                            <span>₹299</span>
                            <ul class="d-flex lst-0 ps-0 fb">
                                <li>
                                    <FaStar class="ms-0" />
                                </li>
                                <li>
                                    <i class="fa fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star"></i>
                                </li>
                            </ul>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="https://store.bfcpublications.com/">
                        <div class="book">

                            <ul>
                                <li class="page page3"></li>
                                <li class="page page2"></li>
                                <li class="page page1"></li>
                                <li class="cover cover11"></li>
                            </ul>

                        </div>
                        <div class="text-start mt-50">
                            <h5>Relationship Mysteries</h5>
                            <span>₹299</span>
                            <ul class="d-flex lst-0 ps-0 fb">
                                <li>
                                    <FaStar class="ms-0" />
                                </li>
                                <li>
                                    <i class="fa fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star"></i>
                                </li>
                            </ul>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="https://store.bfcpublications.com/">
                        <div class="book">

                            <ul>
                                <li class="page page3"></li>
                                <li class="page page2"></li>
                                <li class="page page1"></li>
                                <li class="cover cover12"></li>
                            </ul>

                        </div>
                        <div class="text-start mt-50">
                            <h5>Maharang</h5>
                            <span>₹550</span>
                            <ul class="d-flex lst-0 ps-0 fb">
                                <li>
                                    <FaStar class="ms-0" />
                                </li>
                                <li>
                                    <i class="fa fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star"></i>
                                </li>
                            </ul>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="https://store.bfcpublications.com/">
                        <div class="book">

                            <ul>
                                <li class="page page3"></li>
                                <li class="page page2"></li>
                                <li class="page page1"></li>
                                <li class="cover cover13"></li>
                            </ul>

                        </div>
                        <div class="text-start mt-50">
                            <h5>Door To Death</h5>
                            <span>₹200</span>
                            <ul class="d-flex lst-0 ps-0 fb">
                                <li>
                                    <FaStar class="ms-0" />
                                </li>
                                <li>
                                    <i class="fa fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star"></i>
                                </li>
                            </ul>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="https://store.bfcpublications.com/">
                        <div class="book">

                            <ul>
                                <li class="page page3"></li>
                                <li class="page page2"></li>
                                <li class="page page1"></li>
                                <li class="cover cover14"></li>
                            </ul>

                        </div>
                        <div class="text-start mt-50">
                            <h5>The Yogini A Bride In Need</h5>
                            <span>₹295</span>
                            <ul class="d-flex lst-0 ps-0 fb">
                                <li>
                                    <FaStar class="ms-0" />
                                </li>
                                <li>
                                    <i class="fa fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star"></i>
                                </li>
                            </ul>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="https://store.bfcpublications.com/">
                        <div class="book">

                            <ul>
                                <li class="page page3"></li>
                                <li class="page page2"></li>
                                <li class="page page1"></li>
                                <li class="cover cover15"></li>
                            </ul>

                        </div>
                        <div class="text-start mt-50">
                            <h5>The Hero Of Kalinga</h5>
                            <span>₹150</span>
                            <ul class="d-flex lst-0 ps-0 fb">
                                <li>
                                    <FaStar class="ms-0" />
                                </li>
                                <li>
                                    <i class="fa fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star"></i>
                                </li>
                            </ul>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!--------------------------------------------------->
    <!-- ========== Featured Authors Section ============== -->
    <!--------------------------------------------------->

    <section class="pt-3 bg-light-blue">
        <div class="container pb-5 ">
            <h2 class="mb-5 text-uppercase headm">FEATURED AUTHORS</h2>
            <div class="featured-authors owl-carousel owl-theme">
                <div class="item">
                    <div class="card-authors px-0 mx-2 effect4">
                        <img class="d-block w-100" src="assets/img/home/author's image/abu malik/abumalik.webp"
                            alt="First slide" />
                        <h5 class="px-2 py-3 mb-0 text-center">Abu Malik</h5>
                        <!-- <p class="text-red-c text-rale text-center ">Music Composer Singer</p> -->
                    </div>
                </div>
                <div class="item">
                    <div class=" card-authors px-0 mx-2 effect4">
                        <img class="d-block w-100" src="assets/img/home/author's image/alka singh/pic.webp"
                            alt="First slide" />

                        <h5 class="px-2 py-3 mb-0 text-center">Alka Singh</h5>
                        <p class="text-red-c text-rale text-center "></p>
                    </div>
                </div>
                <div class="item">
                    <div class=" card-authors px-0 mx-2 effect4">
                        <img class="d-block w-100" src="assets/img/home/author's image/antra roy/pic.webp"
                            alt="First slide" />

                        <h5 class="px-2 py-3 mb-0 text-center">Antra Roy</h5>
                    </div>
                </div>
                <div class="item">
                    <div class=" card-authors px-0 mx-2 effect4">
                        <img class="d-block w-100" src="assets/img/home/author's image/Arun C/arun.webp"
                            alt="First slide" />

                        <h5 class="px-2 py-3 mb-0 text-center">Arun C Dwivedi</h5>
                        <!-- <p class="text-red-c text-rale text-center ">Surgeon,Dr RMLIMS,Lucknow</p> -->
                    </div>
                </div>
                <div class="item">
                    <div class=" card-authors px-0 mx-2 effect4">
                        <img class="d-block w-100" src="assets/img/home/author's image/ayush gupta/pic.webp"
                            alt="First slide" />

                        <h5 class="px-2 py-3 mb-0 text-center">Ayush Gupta</h5>
                    </div>
                </div>
                <div class="item">
                    <div class=" card-authors px-0 mx-2 effect4">
                        <img class="d-block w-100"
                            src="assets/img/home/author's image/Baiyanti Pandit/Baijyanti_Pandit.webp"
                            alt="First slide" />

                        <h5 class="px-2 py-3 mb-0 text-center">Dr. Vaijayanti Pandit</h5>
                        <!-- <p class="text-red-c text-rale text-center ">Independent Director </p> -->
                    </div>
                </div>
                <div class="item">
                    <div class=" card-authors px-0 mx-2 effect4">
                        <img class="d-block w-100" src="assets/img/home/author's image/durgesh/pic.webp"
                            alt="First slide" />

                        <h5 class="px-2 py-3 mb-0 text-center">Durgesh Pandey</h5>
                        <p class="text-red-c text-rale text-center "></p>
                    </div>
                </div>
                <div class="item">
                    <div class=" card-authors px-0 mx-2 effect4">
                        <img class="d-block w-100" src="assets/img/home/author's image/Punit/punit.webp"
                            alt="First slide" />

                        <h5 class="px-2 py-3 mb-0 text-center">Punit Chandra</h5>
                        <!-- <p class="text-red-c text-rale text-center">Principal Scientist (Biochemistry) </p> -->
                    </div>
                </div>
                <div class="item">
                    <div class=" card-authors px-0 mx-2 effect4">
                        <img class="d-block w-100 pb-3" src="assets/img/home/author's image/rajan kalra/pic.webp"
                            alt="First slide" />

                        <h5 class="px-2 py-3 mb-0 text-center">Rajan Kalra</h5>
                        <!-- <p class="text-red-c text-rale text-center">Hotelier and Sales Guru</p> -->
                    </div>
                </div>
                <div class="item">
                    <div class=" card-authors px-0 mx-2 effect4">
                        <img class="d-block w-100" src="assets/img/home/author's image/ravindra dey/Dr. Ravindra Dey.webp"
                            alt="First slide" />

                        <h5 class="px-2 py-3 mb-0 text-center">Dr. Ravindra Dey</h5>
                        <p class="text-red-c text-rale text-center "> </p>
                    </div>
                </div>
                <div class="item">
                    <div class=" card-authors px-0 mx-2 effect4">
                        <img class="d-block w-100" src="assets/img/home/author's image/trivendra/trivendra.webp"
                            alt="First slide" />

                        <h5 class="px-2 py-3 mb-0 text-center">Trivendra chauhan</h5>
                        <!-- <p class="text-red-c text-rale text-center ">Director,  Grins Entertainment</p> -->
                    </div>
                </div>
                <div class="item">
                    <div class=" card-authors px-0 mx-2 effect4">
                        <img class="d-block w-100" src="assets/img/home/author's image/yashodhara p/yashodhara.webp"
                            alt="First slide" />

                        <h5 class="px-2 py-3 mb-0 text-center">Yashodhara</h5>
                        <p class="text-red-c text-rale text-center"></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!--------------------------------------------------->
<!-- ========== author testimonials Video ============== -->
<!--------------------------------------------------->
<section class="container py-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="portfolio-title text-center pb-2">
        <h1 class="text-uppercase">Author's Testimonial</h1>
      </div>
    </div>
  </div>
  <div class="row border-topads-slide justify-content-evenly py-4">
    <div class="col-md-5 align-self-center">
      <div class="owl-carousel owl-theme slide-ads-banner">

        <div class="item ads-banner-items">
          <img class="ads-image-thums" src="assets/img/testimonial/author's-testimonial-1.webp" alt="Please Refresh">
          <div class="play-btn-here">
            <a class="watch-link-here banner-btn btn mediabox wow fadeInUp" href="https://www.youtube.com/embed/LkGHcZ43Kgk?si=nwoH3hvJ9P0B45ly" data-wow-delay=".8s" data-wow-duration="1.8s">Play</a>
          </div>
        </div>

        <div class="item ads-banner-items">
          <img class="ads-image-thums" src="assets/img/testimonial/author's-testimonial-2.webp" alt="Please Refresh">
          <div class="play-btn-here">
            <a class="watch-link-here banner-btn btn mediabox wow fadeInUp" href="https://www.youtube.com/embed/BKIWzVAa0Y8?si=dQJx4UtPyS2yoCaj" data-wow-delay=".8s" data-wow-duration="1.8s">Play</a>
          </div>
        </div>

        <div class="item ads-banner-items">
          <img class="ads-image-thums" src="assets/img/testimonial/author's-testimonial-3.webp" alt="Please Refresh">
          <div class="play-btn-here">
            <a class="watch-link-here banner-btn btn mediabox wow fadeInUp" href="https://www.youtube.com/embed/jxe2Nvl9mGE?si=nU6XKFPk27D9wW_h" data-wow-delay=".8s" data-wow-duration="1.8s">Play</a>
          </div>
        </div>

        <div class="item ads-banner-items">
          <img class="ads-image-thums" src="assets/img/testimonial/author's-testimonial-4.webp" alt="Please Refresh">
          <div class="play-btn-here">
            <a class="watch-link-here banner-btn btn mediabox wow fadeInUp" href="https://www.youtube.com/embed/kMczRXHaNHU?si=RlHTajFCE3GxA3fx" data-wow-delay=".8s" data-wow-duration="1.8s">Play</a>
          </div>
        </div>

      </div>
    </div>
    <div class="col-md-6">
      <div class="video-summary-content">
        <div class="text-justify">
          <p>
            Welcome to our Author's Testimonial playlist!
          </p>
          <p>
            Hear inspiring stories from authors who turned their dreams into reality with our publishing services. From debut writers to seasoned storytellers, they share their experiences, challenges, and the incredible journey of bringing their books to life.
          </p>
          <p>
            Get insights into our premium editing, marketing strategies, and the personalized support that helped them achieve their goals. If you're an aspiring author, these testimonials will motivate you to take the next step in your writing journey!
          </p>
          <p>
            👉 Ready to publish your story? Let us help you make it unforgettable!
          </p>
        </div>
        <div class="py-4">
          <a href="https://www.youtube.com/playlist?list=PL_3-JMsvsLTwwfRuuhNKrOjRXFeSc1e8Q" class="btn btn-custom" target="_blank">View More</a>
        </div>
      </div>
    </div>  
  </div>

</section>

    <!--------------------------------------------------->
    <!-- ========== Testimonial Section ============== -->
    <!--------------------------------------------------->
    <!-- <section class="py-4 testi-s">
        <div class="container ">
            <h2 class="headm">APPLAUSES</h2>
            <div class="shape-mockup1 jump  text-end"><img src="assets/img/testimonial/line_2.png" alt="shape"
                    class="" /></div>
            <div class="testimonial owl-carousel owl-theme">
                <div class="item">
                    <div class="testi-box">
                        <div class="testi-box_img">
                            <img src="assets/img/testimonial/Samarjeetsingh.webp" alt="Avater">
                            <div class="testi-box_quote"><img src="assets/img/testimonial/quote_left_2.svg"
                                    alt="quote" /></div>
                        </div>
                        <div class="testi-box_content">
                            <p class="testi-box_text">It was a really wonderful experience which I have gone through with
                                BFC Publications and special thanks to my Project Manager as I really appreciate the way she
                                worked in a professional manner and patiently dealt with new authors like me and it
                                astonished me that the outcome and quality of my book was much more than I expected. I will
                                be very soon coming up with more of my books in 2021. </p>
                            <div class="text-center">
                                <h5 class="box-title">Samarjeet Singh</h5>
                                <div class="testi-box_review ">
                                    <i class="fa fa-star star "></i>
                                    <i class="fa fa-star star ms-1"></i>
                                    <i class="fa fa-star star ms-1"></i>
                                    <i class="fa fa-star star ms-1"></i>
                                    <i class="fa fa-star star ms-1"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testi-box">
                        <div class="testi-box_img">
                            <img src="assets/img/testimonial/subhash.webp" alt="Avater">
                            <div class="testi-box_quote"><img src="assets/img/testimonial/quote_left_2.svg"
                                    alt="quote" /></div>
                        </div>
                        <div class="testi-box_content">
                            <p class="testi-box_text">BFC Publications Private Limited, Lucknow is one of the renowned
                                publications of India that have published my two books namely - Gustakhi and Preyasi. I
                                express my gratitude towards my Publishing Consultant for all his dedicated help and support
                                on this project and also my Project Manager whose experience and knowledge in the publishing
                                field was indispensable.</p>
                            <div class="text-center">
                                <h5 class="box-title">Subhash Kumar</h5>
                                <div class="testi-box_review">
                                    <i class="fa fa-star star "></i>
                                    <i class="fa fa-star star ms-1"></i>
                                    <i class="fa fa-star star ms-1"></i>
                                    <i class="fa fa-star star ms-1"></i>
                                    <i class="fa fa-star star ms-1"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testi-box">
                        <div class="testi-box_img">
                            <img src="assets/img/testimonial/adarsh.webp" alt="Avater">
                            <div class="testi-box_quote"><img src="assets/img/testimonial/quote_left_2.svg"
                                    alt="quote" /></div>
                        </div>
                        <div class="testi-box_content">
                            <p class="testi-box_text">It was nice to come in contact with BFC Publications, they assisted
                                me in all possible ways, handling all queries and grievances at their topmost priority. I am
                                grateful to my Project Manager for her consistent guidance and humility throughout this
                                journey. During this pandemic time, she was always available virtually to help me with
                                everything I needed for my book. I look forward to work in association with BFC Publications
                                again for my new literary works. </p>
                            <div class="text-center">
                                <h5 class="box-title">Adarsh Singh</h5>
                                <div class="testi-box_review ">
                                    <i class="fa fa-star star "></i>
                                    <i class="fa fa-star star ms-1"></i>
                                    <i class="fa fa-star star ms-1"></i>
                                    <i class="fa fa-star star ms-1"></i>
                                    <i class="fa fa-star star ms-1"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testi-box">
                        <div class="testi-box_img">
                            <img src="assets/img/testimonial/nitin.webp" alt="Avater">
                            <div class="testi-box_quote"><img src="assets/img/testimonial/quote_left_2.svg"
                                    alt="quote" /></div>
                        </div>
                        <div class="testi-box_content">
                            <p class="testi-box_text">Experience is very good. The BFC Publications team delivered
                                everything that was promised. As a first-time author, I could find nothing to criticize.</p>
                            <div class="text-center">
                                <h5 class="box-title">Nitin Sharma</h5>
                                <div class="testi-box_review ">
                                    <i class="fa fa-star star "></i>
                                    <i class="fa fa-star star ms-1"></i>
                                    <i class="fa fa-star star ms-1"></i>
                                    <i class="fa fa-star star ms-1"></i>
                                    <i class="fa fa-star star ms-1"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testi-box">
                        <div class="testi-box_img">
                            <img src="assets/img/testimonial/sadmin.webp" alt="Avater" />
                            <div class="testi-box_quote"><img src="assets/img/testimonial/quote_left_2.svg"
                                    alt="quote" /></div>
                        </div>
                        <div class="testi-box_content">
                            <p class="testi-box_text">My book came out better than I have imagined. The cover, layout,
                                interior, everything was just spot on, especially the way my project manager guided me
                                throughout the procedure of publishing, that's what a first time author like me needs the
                                most. I want to thank BFC publications and the entire team for their constant support and
                                dedicated work. </p>
                            <div class="text-center">
                                <h5 class="box-title">Sadmin Sadique</h5>
                                <div class="testi-box_review ">
                                    <i class="fa fa-star star "></i>
                                    <i class="fa fa-star star ms-1"></i>
                                    <i class="fa fa-star star ms-1"></i>
                                    <i class="fa fa-star star ms-1"></i>
                                    <i class="fa fa-star star ms-1"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testi-box">
                        <div class="testi-box_img">
                            <img src="assets/img/testimonial/roshan.webp" alt="Avater" />
                            <div class="testi-box_quote"><img src="assets/img/testimonial/quote_left_2.svg"
                                    alt="quote" /></div>
                        </div>
                        <div class="testi-box_content">
                            <p class="testi-box_text">First of all, I want to thank all the BFC Publications team members
                                for giving their hands to make my dream come true. As it was my first attempt to write a
                                book, I really appreciate your good rapport with the authors and the publication's neat and
                                rapid process.</p>
                            <div class="text-center">
                                <h5 class="box-title">Roshan Pandey</h5>
                                <div class="testi-box_review">
                                    <i class="fa fa-star star "></i>
                                    <i class="fa fa-star star ms-1"></i>
                                    <i class="fa fa-star star ms-1"></i>
                                    <i class="fa fa-star star ms-1"></i>
                                    <i class="fa fa-star star ms-1"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testi-box">
                        <div class="testi-box_img">
                            <img src="assets/img/testimonial/priya.webp" alt="Avater" />
                            <div class="testi-box_quote"><img src="assets/img/testimonial/quote_left_2.svg"
                                    alt="quote" /></div>
                        </div>
                        <div class="testi-box_content">
                            <p class="testi-box_text">As an author, I can say that I am glad and satisfied with the working
                                style of BFC Publications. The assigned project manager is so hardworking and sincere. The
                                work is very perfect overall. </p>
                            <div class="text-center">
                                <h5 class="box-title">Priya Singh</h5>
                                <div class="testi-box_review ">
                                    <i class="fa fa-star star "></i>
                                    <i class="fa fa-star star ms-1"></i>
                                    <i class="fa fa-star star ms-1"></i>
                                    <i class="fa fa-star star ms-1"></i>
                                    <i class="fa fa-star star ms-1"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testi-box">
                        <div class="testi-box_img">
                            <img src="assets/img/testimonial/shweta.webp" alt="Avater" />
                            <div class="testi-box_quote"><img src="assets/img/testimonial/quote_left_2.svg"
                                    alt="quote" /></div>
                        </div>
                        <div class="testi-box_content">
                            <p class="testi-box_text">BFC Publications is one of the best publications in the market. They
                                gave good facilities to the author as per their need. The work done in the book is
                                incredible, which encourages me to publish more books from BFC Publications. They have made
                                a fabulous design for the cover of the book, and the interior matter is likewise in effect.
                                If I have to grade this publication, I would like to give 9 out of 10 for their immense
                                support and smooth working.</p>
                            <div class="text-center">
                                <h5 class="box-title">Shweta Gaur</h5>
                                <div class="testi-box_review">
                                    <i class="fa fa-star star "></i>
                                    <i class="fa fa-star star ms-1"></i>
                                    <i class="fa fa-star star ms-1"></i>
                                    <i class="fa fa-star star ms-1"></i>
                                    <i class="fa fa-star star ms-1"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testi-box">
                        <div class="testi-box_img">
                            <img src="assets/img/testimonial/KaliDasPandey.webp" alt="Avater" />
                            <div class="testi-box_quote"><img src="assets/img/testimonial/quote_left_2.svg"
                                    alt="quote" /></div>
                        </div>
                        <div class="testi-box_content">
                            <p class="testi-box_text">My book came out better than I had imagined. The cover, layout,
                                interior, everything was awesome. Bravo!! BFC. My name has also been added to the history of
                                the long-grossing film 'Sholay' in the 70s. This is the gift of the BFC Publication. </p>
                            <div class="text-center">
                                <h5 class="box-title">Kali Das Pandey (Film Journalist/Advocate)</h5>
                                <div class="testi-box_review ">
                                    <i class="fa fa-star star "></i>
                                    <i class="fa fa-star star ms-1"></i>
                                    <i class="fa fa-star star ms-1"></i>
                                    <i class="fa fa-star star ms-1"></i>
                                    <i class="fa fa-star star ms-1"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testi-box">
                        <div class="testi-box_img">
                            <img src="assets/img/testimonial/ManayaHarsha.webp" alt="Avater" />
                            <div class="testi-box_quote"><img src="assets/img/testimonial/quote_left_2.svg"
                                    alt="quote" /></div>
                        </div>
                        <div class="testi-box_content">
                            <p class="testi-box_text">BRight from the first talks with the consultant to the publishing
                                part, my experience with BFC publications has been a happy one. From editing to designing
                                everything has gone smoothly. My Project Manager has been extremely helpful in the entire
                                process. I'm glad I made a right choice. A happy Author.</p>
                            <div class="text-center">
                                <h5 class="box-title">Manaya Harsha</h5>
                                <div class="testi-box_review">
                                    <i class="fa fa-star star "></i>
                                    <i class="fa fa-star star ms-1"></i>
                                    <i class="fa fa-star star ms-1"></i>
                                    <i class="fa fa-star star ms-1"></i>
                                    <i class="fa fa-star star ms-1"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testi-box">
                        <div class="testi-box_img">
                            <img src="assets/img/testimonial/VaradAgrawal.webp" alt="Avater" />
                            <div class="testi-box_quote"><img src="assets/img/testimonial/quote_left_2.svg"
                                    alt="quote" /></div>
                        </div>
                        <div class="testi-box_content">
                            <p class="testi-box_text">I would definitely endorse BFC publications because it is a team of
                                professionals . Your services are really nice and deserve a five star. My queries were very
                                well entertained and I am satisfied with the work. </p>
                            <div class="text-center">
                                <h5 class="box-title">Varad Agrawal</h5>
                                <div class="testi-box_review ">
                                    <i class="fa fa-star star "></i>
                                    <i class="fa fa-star star ms-1"></i>
                                    <i class="fa fa-star star ms-1"></i>
                                    <i class="fa fa-star star ms-1"></i>
                                    <i class="fa fa-star star ms-1"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testi-box">
                        <div class="testi-box_img">
                            <img src="assets/img/testimonial/Ashok-author.webp" alt="Avater" />
                            <div class="testi-box_quote"><img src="assets/img/testimonial/quote_left_2.svg"
                                    alt="quote" /></div>
                        </div>
                        <div class="testi-box_content">
                            <p class="testi-box_text">I had a very good experience with BFC Publications, for the
                                publication of my book, the response was always given in a transparent manner for all my
                                queries since it was my first book.</p>
                            <div class="text-center">
                                <h5 class="box-title">Ashok Kumar</h5>
                                <div class="testi-box_review">
                                    <i class="fa fa-star star "></i>
                                    <i class="fa fa-star star ms-1"></i>
                                    <i class="fa fa-star star ms-1"></i>
                                    <i class="fa fa-star star ms-1"></i>
                                    <i class="fa fa-star star ms-1"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testi-box">
                        <div class="testi-box_img">
                            <img src="assets/img/testimonial/CB-Sharma.webp" alt="Avater" />
                            <div class="testi-box_quote"><img src="assets/img/testimonial/quote_left_2.svg"
                                    alt="quote" /></div>
                        </div>
                        <div class="testi-box_content">
                            <p class="testi-box_text">Thank you team BFC. Only you guys could have pulled this off in
                                time.
                                You have earned a repeat customer. </p>
                            <div class="text-center">
                                <h5 class="box-title">C.B. Sharma</h5>
                                <div class="testi-box_review ">
                                    <i class="fa fa-star star "></i>
                                    <i class="fa fa-star star ms-1"></i>
                                    <i class="fa fa-star star ms-1"></i>
                                    <i class="fa fa-star star ms-1"></i>
                                    <i class="fa fa-star star ms-1"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testi-box">
                        <div class="testi-box_img">
                            <img src="assets/img/testimonial/mahesh-bhatt.webp" alt="Avater" />
                            <div class="testi-box_quote"><img src="assets/img/testimonial/quote_left_2.svg"
                                    alt="quote" /></div>
                        </div>
                        <div class="testi-box_content">
                            <p class="testi-box_text">बीएफसी पब्लिकेशंस का कार्य सहयोग पूर्ण रहना पुस्तक के मुख्य पृष्ठ को
                                आकर्षित करता है। काव्य को ठीक तरह से छापा गया है। सहयोग पूर्ण वातावरण से ही पुस्तक को छापने
                                में सफलता मिली है। पुस्तक की एडिटिंग / प्रिंटिंग / प्रूफरीडिंग अच्छी है।</p>
                            <div class="text-center">
                                <h5 class="box-title">महेश चंद्र भट्ट</h5>
                                <div class="testi-box_review">
                                    <i class="fa fa-star star "></i>
                                    <i class="fa fa-star star ms-1"></i>
                                    <i class="fa fa-star star ms-1"></i>
                                    <i class="fa fa-star star ms-1"></i>
                                    <i class="fa fa-star star ms-1"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testi-box">
                        <div class="testi-box_img">
                            <img src="assets/img/testimonial/pradeep.webp" alt="Avater" />
                            <div class="testi-box_quote"><img src="assets/img/testimonial/quote_left_2.svg"
                                    alt="quote" /></div>
                        </div>
                        <div class="testi-box_content">
                            <p class="testi-box_text">BFC Publications is undoubtedly a very reliable publishing platform.
                                The team is extremely helpful and well coordinated. I am especially happy with the quality
                                of editing, and my book cover. Job well-done team. </p>
                            <div class="text-center">
                                <h5 class="box-title">Pradeep Chaturvedi</h5>
                                <div class="testi-box_review ">
                                    <i class="fa fa-star star "></i>
                                    <i class="fa fa-star star ms-1"></i>
                                    <i class="fa fa-star star ms-1"></i>
                                    <i class="fa fa-star star ms-1"></i>
                                    <i class="fa fa-star star ms-1"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testi-box">
                        <div class="testi-box_img">
                            <img src="assets/img/testimonial/sharad-singh.webp" alt="Avater" />
                            <div class="testi-box_quote"><img src="assets/img/testimonial/quote_left_2.svg"
                                    alt="quote" /></div>
                        </div>
                        <div class="testi-box_content">
                            <p class="testi-box_text">यह पुस्तक बीएफसी पब्लिकेशंस द्वारा प्रकाशित हुई है। इसका पेपर वर्क
                                एवं प्रकाशन कार्य उत्तम है। कवर पृष्ठ भी सुंदर रूप से बनाया गया है। अनसुलझे प्रश्न (कथा
                                संग्रह), जीवन संघर्ष (उपन्यास), लालसा, मेरी स्मृतियां ( काव्य संग्रह ) के पश्चात मेरी एक और
                                त्वरित प्रकाशित पुस्तक अहसास (कथा संग्रह) आपके समक्ष प्रस्तुत है। यह पुस्तक आपको अमेजान,
                                फ्लिपकार्ट आदि पर मिल जायेगी। पढ़कर अपनी प्रतिक्रिया दें।</p>
                            <div class="text-center">
                                <h5 class="box-title">शरद सिंह</h5>
                                <div class="testi-box_review">
                                    <i class="fa fa-star star "></i>
                                    <i class="fa fa-star star ms-1"></i>
                                    <i class="fa fa-star star ms-1"></i>
                                    <i class="fa fa-star star ms-1"></i>
                                    <i class="fa fa-star star ms-1"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="shape-mockup2 moving "><img src="assets/img/testimonial/line_1.png" alt="shape" /></div>
        </div>
    </section> -->

    <!--------------------------------------------------->
    <!-- ==== Distribution Platforms Section ========= -->
    <!--------------------------------------------------->

    <section class="distribution-platforms mb-5">
        <div class="container dist">
            <h2 class="mb-5 headm">OUR DISTRIBUTION PLATFORMS</h2>
            <div class="distribution owl-carousel owl-theme">
                <div class="item">
                    <div class="mb-4 text-center">
                        <div class="distribution-logo">
                            <img src="assets/img/distribution-platform/1.webp" class="img-fluid" />
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="mb-4 text-center">
                        <div class="distribution-logo">
                            <img src="assets/img/distribution-platform/2.webp" class="img-fluid" />
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="mb-4 text-center">
                        <div class="distribution-logo">
                            <img src="assets/img/distribution-platform/Google-Play-Books.jpg" class="img-fluid" />
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="mb-4 text-center">
                        <div class="distribution-logo">
                            <img src="assets/img/distribution-platform/4.webp" class="img-fluid" />
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="mb-4 text-center">
                        <div class="distribution-logo">
                            <img src="assets/img/distribution-platform/5.webp" class="img-fluid" />
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="mb-4 text-center">
                        <div class="distribution-logo">
                            <img src="assets/img/distribution-platform/6.webp" class="img-fluid" />
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="mb-4 text-center">
                        <div class="distribution-logo">
                            <img src="assets/img/distribution-platform/7.webp" class="img-fluid" />
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="mb-4 text-center">
                        <div class="distribution-logo ">
                            <img src="assets/img/distribution-platform/8.webp" class="img-fluid" />
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="mb-4 text-center">
                        <div class="distribution-logo ">
                            <img src="assets/img/distribution-platform/9.webp" class="img-fluid" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- start publishing MODAL start-->
    <div tabindex="-1" id="start-pub"
        class='modal animate__animated animate__zoomIn animate__delay-0.9s start-publish'>
        <div class="modal-dialog modal-dialog-centered" id="lead_id">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-uppercase fs-5">Start Publishing Now </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="publishing_start_form" class='p-3'>
                        <div class="form-group has-search mb-3">
                            <label htmlFor="name">Your Name</label>
                            <i class="fa fa-user fa-1x form-control-feedback"></i>
                            <input type="text" name="name" id="popup_name" class="form-control"
                                placeholder="Your Name" />
                            <span class="text-danger" id="name_err"> </span>
                        </div>
                        <div class="form-group has-search mb-3">
                            <label htmlFor="email">Email</label>
                            <i class="fa fa-envelope form-control-feedback"></i>
                            <input type="email" name="email" id="popup_email" class="form-control"
                                placeholder="Email" />
                            <span class="text-danger" id="email_err"> </span>
                        </div>
                        <div class="form-group has-search mb-3">
                            <label htmlFor="contact">Contact Number</label>
                            <i class="fa fa-phone form-control-feedback"></i>
                            <input type="number" name="mobileno" id="popup_mobileno" class="form-control"
                                placeholder="Contact Number" />
                            <span class="text-danger" id="mobileno_err"> </span>
                        </div>
                        <div class="form-group has-search mb-3 checkbox_content">
                            <input type="checkbox" name="checkbox" id="checkbox">
                            <span class="checkbox_content">I, hereby accord my consent to process my above mentioned personal data by BFC Publications Pvt. Ltd. for the purpose of Author support/Service Promotion, in accordance with the provisions of DPDP Act 2023.</span>
                            <br>
                            To know more <a href="https://bfcpublications.com/DPDP_Act" target="_blank">click here</a>
                            <br>
                            <span class="text-danger" id="check_box_err"> </span>
                        </div>
                        <div class="form-group text-end mt-2">
                            <button type="submit" class="btn btn-custom py-2">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    
    <!-- start publishing end-->

      <!-- publishing now MODAL start-->
      <div tabindex="-1" id="pub-popup" class='modal  start-publish mansoon-main'>
      <div class="modal-dialog modal-dialog-centered modal-md" id="offer_modal_id">
        <div class="modal-content">
          
          <div class="modal-body p-0 pop">
            <div class="row align-items-stretch">
              <!-- <div class="col-6 px-0 d-smc-none">
                <img src="<?php echo e(url('uploads/monsoon.jpg')); ?>" alt="" class='img-fluid h-100' />
              </div> -->
              
              
              <div class="col-12 col-md-12 py-3  ">
                <button type="button" class="btn-close border-0 py-0 float-right pe-3" data-bs-dismiss="modal" aria-label="Close"></button>
                
                <div class="bg-ani" id="offer">
                  <div class='text-center '>
                    <!-- <img src="<?php echo e(url('uploads/limit.webp')); ?>" alt="" class='img-fluid max-45' />
                    <h4 class="text-mansoon ">Monsoon Offer Upto</h4>
                    <p class='offer-h mt-4'> <img src="<?php echo e(url('uploads/offer.png')); ?>" alt="" class='img-fluid max-16' /> </p>
                    <h5 class="text-mansoon ">Ending Soon</h5> -->
                    <img src="<?php echo e(url('uploads/monsoon.jpg')); ?>" alt="" class='img-fluid mansoon h-100' />
                  </div>
                  <div class="form-group text-center mt-2">
                    <!-- <a href="#" class="btn btn-custom py-2 " id="ani">c</a> -->
                    <a href="#" class="btn btn-custom " data-bs-toggle="modal" data-bs-target="#start-pub">Click here</a>
                  </div>
                </div>
                <!-- <div class="Formbook" id="formbook">
                  <form id="publishing_start_form2" class='px-3 mt-5'>
                    <p class='text-red-c text-rale mb-4'>Sign up today for these amazing benefits.</p>
                    <div class="form-group has-search mb-4 ">
                      <i class="fa fa-user form-control-feedback"></i>
                      <input type="text" name="name" id="popup_name" class="form-control" placeholder="Your Name" />
                      <span class="text-danger" id="name_err"> </span>
                    </div>
                    <div class="form-group has-search mb-4">
                      <i class="fa fa-envelope form-control-feedback"></i>
                      <input type="email" name="email" id="popup_email" class="form-control" placeholder="Email" />
                      <span class="text-danger" id="email_err"> </span>
                    </div>
                    <div class="form-group has-search mb-4">
                      <i class="fa fa-phone form-control-feedback"></i>
                      <input type="number" name="mobileno" id="popup_mobileno" class="form-control" placeholder="Contact Number" />
                      <span class="text-danger" id="mobileno_err"> </span>
                    </div>
                    <div class="form-group text-center mt-5">
                      <button type="submit" class="btn btn-custom py-2">I Want To Publish My Book</button>
                    </div>
                  </form>
                </div> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- publishing now MODAL end-->
     <script>
//         $(window).on('load',function(){
//   setTimeout(function(){
//   $('#pub-popup').modal('show');
//   }, 1500);
//   setTimeout(function(){
//     $('#pub-popup').modal('hide');
// }, 15000);
//   });
//   setTimeout(function(){
//     $('#pub-popup').modal('hide');
// }, 2000);
  //setTimeout(function() {
  //  $('#pub-popup').modal('hide');}, 4000);
  
        </script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('extern-js'); ?>
   
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bfcpublications/public_html/resources/views/index.blade.php ENDPATH**/ ?>