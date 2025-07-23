<?php $__env->startSection('extern-css'); ?>
    <title><?php echo e($title); ?></title>
    <link rel="canonical" href="https://bfcpublications.com/book-designing-services">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb px-4 py-2">
            <li class="breadcrumb-item"><a class="text-red-c" href="<?php echo e(url('/')); ?>"><i class="fa fa-home"></i></a></li>
            <li class="breadcrumb-item active fs-6 " aria-current="page">Services</li>
            <li class="breadcrumb-item active fs-6 " aria-current="page">Designing Services</li>
        </ol>
    </nav>



    <section class="editorial pb-2">
        <div class="container">
            <h1>COVER DESIGNING SERVICES</h1>
            <div class="row align-items-stretch flex-wrap-reverse">

                <div class="col-md-6 align-self-center">
                    <h3 class="text-rale text-red-c"> Cover Design </h3>
                    <p class="text-justify"> “Don’t judge a book by its cover”, read the 1944 edition of American Speech, an
                        Africa-based journal. This, ironically, is far from the truth, at least in this digital age, where
                        books catch the public eye through hashtags and viral tweets. This is why BFC makes sure that book
                        covers are eye-catching and interpret the author’s vision adequately.</p>
                </div>
                <div class="col-md-6">
                    <img class="img-fluid" src="<?php echo e(url('assets/img/service/design services.webp')); ?>" alt=""
                        srcset="">
                </div>


            </div>
        </div>
    </section>



    <!--------------------------------------------------->
    <!-- ============= Footer Section ================ -->
    <!--------------------------------------------------->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bfcpublications/public_html/resources/views/designing_services.blade.php ENDPATH**/ ?>