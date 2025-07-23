<?php $__env->startSection('extern-css'); ?>
    <title><?php echo e($title); ?></title>
    <style>
        label.error {
            color: #dc3545;
            font-size: 14px;
        }
        .checkbox_content {
            font-size: 14px;
            font-weight: 400;
        }
    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb px-4 py-2">
            <li class="breadcrumb-item"><a class="text-red-c" href="<?php echo e(url('/')); ?>"><i class="fa fa-home"></i></a></li>
            <li class="breadcrumb-item active fs-6 " aria-current="page">Payment</li>
        </ol>
    </nav>
    <section class="about mb-4">
        <div class="container">
            <!-- <h1 class="">WELCOME TO OUR PAYMENT GATEWAY </h1> -->
            <div class="row align-items-center py-2 flex-wrap-reverse">

                <div class="col-12 col-md-6 mt-4">
                    <!-- <table class="table">
                        <tr>
                            <th class="text-poppins">Package Selected</th>
                            <td class="text-red-c text-poppins">e-Book ESSENTIAL</td>
                        </tr>
                        <tr>
                            <th class="text-poppins">Package Amount</th>
                            <td class="text-red-c text-poppins">₹3299 + 18% GST</td>
                        </tr>
                        <tr>
                            <th class="text-poppins">Total Amount</th>
                            <td class="text-red-c text-poppins"> ₹3892.82</td>
                        </tr>
                    </table> -->

                    <p>Please provide details to proceed :</p>

                    <form id="payment_details_form">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name </label>
                            <input type="text" class="form-control" name="name" id="name"
                                placeholder=" Enter Your Name">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" id="email"
                                placeholder="Enter Your Email">
                        </div>
                        <div class="mb-3">
                            <label for="mobile" class="form-label">Phone Number</label>
                            <input type="number" class="form-control" name="mobile" id="mobile"
                                placeholder="Enter Your Phone Number">
                        </div>
                        <div class="mb-3">
                            <input type="checkbox" name="checkbox" id="checkbox">
                                <span class="checkbox_content">I, hereby accord my consent to process my above mentioned personal data by BFC Publications Pvt. Ltd. for the purpose of Author support/Service Promotion, in accordance with the provisions of DPDP Act 2023.</span>
                            <br>
                            To know more <a href="https://bfcpublications.com/DPDP_Act" target="_blank">click here</a>
                            <br>
                            <span class="text-danger" id="check_box_err_payment"> </span>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-custom">Submit</button>
                        </div>
                    </form>
                </div>
                <!-- <div class="col-12 col-md-6 align-self-center">
                    <img src="<?php echo e(url('assets/img/other/payment-svg.webp')); ?>" alt="About" class="img-fluid" />

                </div> -->


            </div>
        </div>

    </section>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('extern-js'); ?>
   
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bfcpublications/public_html/resources/views/payment.blade.php ENDPATH**/ ?>