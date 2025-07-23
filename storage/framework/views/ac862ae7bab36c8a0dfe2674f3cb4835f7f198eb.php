<?php $__env->startSection('extern-css'); ?>
    <title><?php echo e($title); ?></title>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb px-4 py-2">
            <li class="breadcrumb-item"><a class="text-red-c" href="<?php echo e(url('/')); ?>"><i class="fa fa-home"></i></a></li>
            <li class="breadcrumb-item active fs-6 " aria-current="page">Services</li>
            <li class="breadcrumb-item active fs-6 " aria-current="page">Author Support</li>
        </ol>
    </nav>



    <section class="editorial pb-2">
        <div class="container">
            <h1>AUTHOR SUPPORT</h1>
            <div class="row align-items-stretch flex-wrap-reverse">

                <div class="col-md-6 align-self-center">
                    <h3 class="text-rale text-red-c"> Support Structure </h3>
                    <p class="text-justify">We at BFC Publications try and offer 360-degree support to our authors,
                        especially first-timers. This is exactly why we have in place a dedicated support team, always at
                        the ready to help authors understand the nuances of writing a book and publishing it. The team helps
                        you identify the aspects you will need help with, be it copy editing, proofreading, ghostwriting, or
                        marketing. Besides this, you can also access the Author Dashboard to fetch information about the
                        sales proceeds of your book.</p>
                </div>
                <div class="col-md-6">
                    <img class="img-fluid" src="<?php echo e(url('assets/img/service/support.webp')); ?>" alt="" srcset="">
                </div>


            </div>
        </div>
    </section>



    <!--------------------------------------------------->
    <!-- ============= Footer Section ================ -->
    <!--------------------------------------------------->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bfcpublications/public_html/resources/views/author_support.blade.php ENDPATH**/ ?>