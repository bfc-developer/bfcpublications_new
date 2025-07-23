<?php $__env->startSection('extern-css'); ?>
    <title><?php echo e($title); ?></title>
   
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb px-4 py-2">
            <li class="breadcrumb-item"><a class="text-red-c" href="<?php echo e(url('/')); ?>"><i class="fa fa-home"></i></a></li>
            <li class="breadcrumb-item active fs-6 " aria-current="page"> QR-CODE</li>
        </ol>
    </nav>
    <style>
        .qr-d-flex {
            display: flex;
            justify-content: center;
            flex-wrap: nowrap;
            align-items: center;
            max-width: 900px;
            margin: 0 auto;
        }

        .qr-body-container {
            max-width: 500px;
            height: 100%;
            margin: 0 auto;
            text-align: center;
            padding: 0px;
        }

        .bhim-upi img {
            width: 70%;
            height: auto;
            object-fit: cover;
        }

        .bfc-publication-name h1 {
            font-size: 18px !important;
            font-weight: 800 !important;
            font-family: sans-serif;
            line-height: 30px !important;
            margin-top: 0px !important;
        }

        .qr-image img {
            width: 220px;
            height: auto;
            padding: 0px;
            padding-bottom: 0px;
        }

        .bank-upi-id p {
            font-size: 14px;
            font-family: sans-serif;
            margin: 0px;
            margin-top: 10px;
        }

        .helpdesk-number p {
            margin-bottom: 3px;
            font-size: 14px;
            font-family: sans-serif;
        }

        .flex-icon-helpnumber {
            display: flex;
            gap: 5px;
            justify-self: center;
            align-items: flex-end;
        }

        .set-whatsapp-icon img {
            width: 17px;
            height: 17px;
        }

        .account-heading-area {
            font-size: 16px;
            font-family: sans-serif;
            margin: 5px 0px;
            text-transform: uppercase;
        }

        .account-details {
            font-family: sans-serif;
            font-weight: 400;
            margin: 5px 0px;
            font-size: 17px;
        }

        .tr {
            border-bottom: 1px solid #bfbfbf;
        }

        .tr td {
            margin-bottom: 10px;
            height: 55px;
            padding: 10px;
        }

        .qr-body-container {
            border-right: 1px solid #bfbfbf;
            margin-right: 20px;
        }

        .account-details-table {
            border-collapse: collapse;
        }

        @media  screen and (max-width:768px) {
            .account-details-table {
                max-width: 800px;
                margin: 0 auto;
            }

            .bank-body-container{
                margin-top: 30px;
            }

            .qr-d-flex {
                display: block;
                justify-content: center;
                flex-wrap: nowrap;
                align-items: center;
                max-width: 100%;
                margin: auto;
            }

            .qr-body-container {
                border-right: none;
                margin: 0 auto;
            }
        }

       .bfc-publication-name h1 {
    padding: unset !important;
}

.bfc-publication-name>h1::before {
    content: unset !important;
}

.bfc-publication-name>h1::after {
    content: unset !important;
}
    </style>

<div class="qr-d-flex">
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
            <div class="text-center"><h1>Account Details</h1></div>
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
      
 
    </br>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('extern-js'); ?>
   
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bfcpublications/public_html/resources/views/payment_page.blade.php ENDPATH**/ ?>