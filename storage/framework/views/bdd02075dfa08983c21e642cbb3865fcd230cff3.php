<?php $__env->startSection('extern-css'); ?>
    <title><?php echo e($title); ?></title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb px-4 py-2">
            <li class="breadcrumb-item"><a class="text-red-c" href="<?php echo e(url('/')); ?>"><i class="fa fa-home"></i></a></li>
            <li class="breadcrumb-item active fs-6 " aria-current="page">Why Us</li>

        </ol>
    </nav>

    <section class="pt-4">
        <div class="container">
            <h1>WHY US</h1>
            <div class="space">
                <div class="row align-items-stretch">
                    <div class="col-md-6">
                        <div class="animate__animated animate__fadeInLeft animate__delay-0.2s d-m-none ani-f">
                            <img src="<?php echo e(url('assets/img/home/1.png')); ?>" alt="" class="img-fluid why-img1" />
                        </div>

                        <div class="img-box1 why-img2">
                            <div class="img1"><img src="<?php echo e(url('assets/img/other/why us.webp')); ?>" alt="About"
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
                        <p class="text-justify">BFC Publications stands out as a leading eBook publisher in India for
                            several compelling reasons. First of all, our commitment to quality is unmatched, ensuring that
                            authors get the kind of service they deserve. Also, unlike some market players, we prioritise
                            transparency by providing clear and concise publishing contracts, making it easy for authors to
                            understand the terms of engagement. Additionally, our team goes above and beyond to exceed
                            author expectations, delivering exceptional results at prices that even top publishing houses
                            struggle to match. </p>


                        <div class="animate__animated animate__fadeIn animate__delay-0.2s d-m-none">
                            <img src="<?php echo e(url('assets/img/home/2.png')); ?>" alt="" class="img-fluid why-img-c" />
                        </div>
                    </div>
                </div>


            </div>
    </section>

    <section class="bg-light-blue py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 ">
                    <div class="ul checklist mt-4 lst-0">
                        <li class="text-justify">
                            <span class="red-circle"><i class="fa fa-check me-2"></i><b> Intellectual Rights:</b>
                                Safeguard the intellectual rights of your work by entering into a contract with BFC
                                publications. This also makes sure that the agreed terms of publishing your work are inked
                                in black and white, and there is no dilly dallying on our part.

                            </span>
                        </li>
                        <li class="mt-3 text-justify">
                            <span class="red-circle"><i class="fa fa-check me-2"></i> <b> Profit Sharing :</b>We make sure
                                that you don’t have to share the spoils when it comes to the profits made through the sale
                                of your book. Authors are entitled to receive almost every penny earned through sales
                                proceeds.</span>
                        </li>
                        <li class="mt-3 text-justify">
                            <span class="red-circle"><i class="fa fa-check me-2"></i><b> Marketing Support :</b>No stone is
                                left unturned to magnify your book’s digital footprint, by putting into action, extensively
                                researched digital marketing gimmicks.</span>
                        </li>
                        <li class="mt-3 text-justify">
                            <span class="red-circle"><i class="fa fa-check me-2"></i><b> Book Interior & Cover : </b>Our
                                team of format editors, illustrators, and graphic designers make sure that the final output
                                is top-notch and the author's vision is interpreted in the best way possible, be it the page
                                layout, its margins, or the cover.</span>
                        </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>


    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bfcpublications/public_html/resources/views/whyus.blade.php ENDPATH**/ ?>