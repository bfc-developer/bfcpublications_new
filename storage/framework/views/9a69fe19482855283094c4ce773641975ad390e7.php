<?php $__env->startSection('extern-css'); ?>
    <title><?php echo e($title); ?></title>
    
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb px-4 py-2">
            <li class="breadcrumb-item"><a class="text-red-c" href="<?php echo e(url('/')); ?>"><i class="fa fa-home"></i></a></li>
            <li class="breadcrumb-item active fs-6 " aria-current="page">Services</li>

        </ol>
    </nav>

    <section class="mb-4 serve">
        <div class="container">
            <h1>SERVICES WE OFFER </h1>

            <div class="row pt-5 align-items-stretch flex-wrap-reverse">
                <div class="col-md-6 align-self-center mt-smc-2">
                    <h3 class="text-rale text-red-c">Our Services</h3>
                    <p class="text-justify"> BFC Publications helps authors' works reach every nook and corner by leveraging
                        its collaborations with a huge network of book distributors. Authors have the option of choosing
                        from the already-assembled publishing packages listed on the website or get one tailored based on
                        their requirements, by handpicking the services they wish to avail, including :</p>
                    <ul class="lst-0 circle ps-0">
                        <li><i class="fa fa-check me-2"></i> <a class="text-blue-c"
                                href="<?php echo e(url('/book-editorial-services')); ?>">Editorial
                                Services</a></li>
                        <li><i class="fa fa-check me-2 "></i> <a
                                class="text-blue-c"href="<?php echo e(url('/book-designing-services')); ?>">Designing
                                Services</a></li>
                        <li><i class="fa fa-check me-2"></i> <a
                                class="text-blue-c"href="<?php echo e(url('/book-marketing-services')); ?>">Marketing
                                Services</a></li>
                        <li><i class="fa fa-check me-2"></i> <a
                                class="text-blue-c"href="<?php echo e(url('/book-distribution-services')); ?>">Distribution
                                Services</a></li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <img class="img-fluid rounded" src="<?php echo e(url('assets/img/other/our services.webp')); ?>" alt=""
                        srcset="">
                </div>
            </div>


        </div>


    </section>

    <section class="py-5 bg-light-blue">
        <div class="container">
            <p class="text-red-c"><b>OUR SELF PUBLICATION SERVICES BROADLY INCLUDE -</b></p>

            <div class="row ">
                <div class="col-md-6">
                    <ul class="lst-0 circle ps-0">
                        <li><i class="fa fa-check me-2"></i> Basic & Customised Interior Formatting & Design</li>
                        <li><i class="fa fa-check me-2 "></i>Basic & Customised Cover Design </li>
                        <li><i class="fa fa-check me-2"></i>Customised Exterior With Basic, Enhanced & Superior
                            Illustrations </li>
                        <li><i class="fa fa-check me-2"></i>Basic & Enhanced Layout </li>
                        <li><i class="fa fa-check me-2"></i>Copyright & Digital Proof </li>
                        <li><i class="fa fa-check me-2"></i>ISBN & Barcode </li>
                        <li><i class="fa fa-check me-2"></i> eBook & Paperback Creation</li>
                        <li><i class="fa fa-check me-2"></i>Hardcover </li>
                        <li><i class="fa fa-check me-2"></i>Hardcover with Jacket </li>
                        <li><i class="fa fa-check me-2"></i>Typing </li>
                        <li><i class="fa fa-check me-2"></i> Proofreading of Scripts</li>
                        <li><i class="fa fa-check me-2"></i> Copy Editing</li>

                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="lst-0 circle ps-0">
                        <li><i class="fa fa-check me-2"></i>Print On Demand / Inventory Management </li>
                        <li><i class="fa fa-check me-2"></i>Complimentary Copies </li>
                        <li><i class="fa fa-check me-2"></i> Author Promotions & Interviews</li>
                        <li><i class="fa fa-check me-2"></i>National Online Distribution & Marketing </li>
                        <li><i class="fa fa-check me-2"></i>Social Media Setup – Facebook, Instagram and Twitter </li>
                        <li><i class="fa fa-check me-2"></i>Author Page Setup – Amazon & Goodreads </li>
                        <li><i class="fa fa-check me-2"></i> Author Website Creation</li>
                        <li><i class="fa fa-check me-2"></i>Amazon Sponsored Ads & Prime </li>
                        <li><i class="fa fa-check me-2"></i>Digital Release </li>
                        <li><i class="fa fa-check me-2"></i>Consumer / Blogger Reviews </li>
                        <li><i class="fa fa-check me-2"></i> Social Media Ad Campaign – Facebook, Instagram, Twitter, Email
                            and WhatsApp </li>

                    </ul>
                </div>
            </div>
            <p class="short-desc">Authors have the liberty to compile customised plans based on their requirements, by
                choosing from the publishing services listed above/below, be it creating a video teaser for the book or
                executing an elaborate PR campaign for maximizing outreach. They also have the freedom to decide the selling
                price of the book after approximating the sales proceeds through our Royalty Calculator, even if it is over
                and above the recommended MRP.</p> 

        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bfcpublications/public_html/resources/views/services.blade.php ENDPATH**/ ?>