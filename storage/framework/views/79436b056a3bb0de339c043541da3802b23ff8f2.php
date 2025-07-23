<?php $__env->startSection('extern-css'); ?>
    <title><?php echo e($title); ?></title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb px-4 py-2">
            <li class="breadcrumb-item"><a class="text-red-c" href="<?php echo e(url('/')); ?>"><i class="fa fa-home"></i></a></li>
            <li class="breadcrumb-item active fs-6 " aria-current="page">BFC Lounge</li>

        </ol>
    </nav>

    <section id="video" class="pb-lg-5 bfc_lounge">
        <div class="container">
            <h1>BFC LOUNGE</h1>
            <p class="short-desc text-center py-4">
                BFC Lounge was an effort by Team BFC Publications to connect with its authors, hear their writing
                experiences, and offer them a showcase worthy of their books.

            </p>
            <div class="row pt-5">
                <div class="col-12 col-md-4 box  text-center">
                    <div class="shadow-c">
                        <a href="https://youtu.be/Fnzs2Wfl068" class="mediabox"><span class="zoom-pic"><i
                                    class="fab fa-youtube"></i></span><img class="img-fluid"
                                src="<?php echo e(url('assets/img/bfc-lounge/Dr. Arun.webp')); ?>"></a>
                        <div class="yt-video-cont  pt-2">
                            Dr Arun Chandra Dwivedi discusses his book "Amawas ka Chand" at BFC Lounge, KLF-Awadh
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 box text-center">
                    <div class="shadow-c">
                        <a href="https://youtu.be/f4Vu9UZV8GI" class="mediabox"><span class="zoom-pic"><i
                                    class="fab fa-youtube"></i></span><img class="img-fluid"
                                src="<?php echo e(url('assets/img/bfc-lounge/Heera Lal.webp')); ?>"></a>
                        <div class="yt-video-cont  pt-2">
                            Author Heera Lal discusses his book "Dynamic DM" at BFC Lounge, KLF-Awadh
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 box  text-center">
                    <div class="shadow-c">
                        <a href="https://youtu.be/VuCKk40LHOE" class="mediabox"><span class="zoom-pic"><i
                                    class="fab fa-youtube"></i></span><img class="img-fluid"
                                src="<?php echo e(url('assets/img/bfc-lounge/K B Rao.webp')); ?>"></a>
                        <div class="yt-video-cont  pt-2">
                            Author KB Rao discusses his book "Invest in Yourself" at BFC Lounge, KLF-Awadh
                        </div>
                    </div>

                </div>







            </div>

            <div class="row mt-lg-5">
                <div class="col-12 col-md-4 box  text-center">
                    <div class="shadow-c">
                        <a href="https://youtu.be/pf4or5e6jgg" class="mediabox"><span class="zoom-pic"><i
                                    class="fab fa-youtube"></i></span><img class="img-fluid"
                                src="<?php echo e(url('assets/img/bfc-lounge/Trivendra.webp')); ?>"></a>
                        <div class="yt-video-cont  pt-2">
                            Author Trivendra discusses his book "Maharang" at BFC Lounge, KLF-Awadh
                        </div>
                    </div>

                </div>
                <div class="col-12 col-md-4 box  text-center">
                    <div class="shadow-c">
                        <a href="https://youtu.be/klQHW7-8APQ" class="mediabox"><span class="zoom-pic"><i
                                    class="fab fa-youtube"></i></span><img class="img-fluid"
                                src="<?php echo e(url('assets/img/bfc-lounge/Pratibha.webp')); ?>"></a>
                        <div class="yt-video-cont  pt-2">
                            Author & Poetess Pratibha Paul discusses her book "Love & Peace" at BFC Lounge, KLF-Awadh
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </section>







    <!--------------------------------------------------->
    <!-- ============= Footer Section ================ -->
    <!--------------------------------------------------->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bfcpublications/public_html/resources/views/bfc_lounge.blade.php ENDPATH**/ ?>