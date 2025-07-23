<?php $__env->startSection('extern-css'); ?>
    <title><?php echo e($title); ?></title>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb px-4 py-2">
            <li class="breadcrumb-item"><a class="text-red-c" href="<?php echo e(url('/')); ?>"><i class="fa fa-home"></i></a></li>
            <li class="breadcrumb-item active fs-6 " aria-current="page">Legal Disclaimer</li>
        </ol>
    </nav>
    <section class="mb-4 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-text">
                        <h3 class="pb-3">Legal Disclaimer</h3>
                        <p>If you require any more information or have any questions about our site's disclaimer, please
                            feel free to contact us by email at support@bfcpublications.com</p>
                    </div>
                    <hr class="pb-2">
                    <div class="page-text">
                        <h3 class="pb-3">Disclaimers for BFC Publications</h3>
                        <p>All the information on this website - https://bfcpublications.com/ - is published in good faith
                            and for general information purpose only. BFC Publications does not make any warranties about
                            the completeness, reliability and accuracy of this information. Any action you take upon the
                            information you find on this website (BFC Publications), is strictly at your own risk. BFC
                            Publications will not be liable for any losses and/or damages in connection with the use of our
                            website.<br>
                            From our website, you can visit other websites by following hyperlinks to such external sites.
                            While we strive to provide only quality links to useful and ethical websites, we have no control
                            over the content and nature of these sites. These links to other websites do not imply a
                            recommendation for all the content found on these sites. Site owners and content may change
                            without notice and may occur before we have the opportunity to remove a link which may have gone
                            'bad'.<br>
                            Please be also aware that when you leave our website, other sites may have different privacy
                            policies and terms which are beyond our control. Please be sure to check the Privacy Policies of
                            these sites as well as their "Terms of Service" before engaging in any business or uploading any
                            information.</p>
                    </div>
                    <hr class="pb-2">
                    <div class="page-text">
                        <h3 class="pb-3">Consent</h3>
                        <p>By using our website, you hereby consent to our disclaimer and agree to its terms.</p>
                    </div>
                    <hr class="pb-2">
                    <div class="page-text">
                        <h3 class="pb-3">Update</h3>
                        <p>Should we update, amend or make any changes to this document, those changes will be prominently
                            posted here.</p>
                    </div>
                    <hr class="pb-2">
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bfcpublications/public_html/resources/views/legal-disclaimer.blade.php ENDPATH**/ ?>