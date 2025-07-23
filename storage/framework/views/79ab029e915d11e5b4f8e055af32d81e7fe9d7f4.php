
<?php $__env->startSection('extern-css'); ?>
    <title><?php echo e($title); ?></title>
    <link rel="canonical" href="https://bfcpublications.com/paperback-publishing-packages">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb px-4 py-2">
            <li class="breadcrumb-item"><a class="text-red-c" href="<?php echo e(url('/')); ?>"><i class="fa fa-home"></i></a></li>
            <li class="breadcrumb-item active fs-6 " aria-current="page">Publishing Packages</li>
        </ol>
    </nav>
    <section class="packages  py-3 mt-n2" id="plans">
  <div class="container-fluid">
    <h1>PUBLISHING PACKAGES</h1>
    <div class="row pt-3">
    </div>
    <Tabs>
    <div class="row justify-content-center">
      
      <div class="col-md-6 col-lg-4  pb-5">
        <ul class="nav nav-pills" id="myTab" role="tablist">
          <li class="nav-item" role="presentation">
            <a class="nav-link active" id="nav-home-tab" data-bs-toggle="pill" data-bs-target="#tab1" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Paperback</a>
            
          </li>
          <li class="nav-item" role="presentation">
            <a class="nav-link " id="nav-profile-tab" data-bs-toggle="pill" data-bs-target="#tab2" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">eBook</a>
          </li>
          
        </ul>
        <style>
  .publication_notes p{
    font-size: 16px;
    padding-top: 17px;
    font-weight: 600;
    color: #0c2e8a;
  }
</style>

       
      </div>
    </div>
    <div class="row bg-packages">
      <div class="col-md-12">
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
                     <!-- ============= Mobile View ================= -->
                     <?php if (isset($component)) { $__componentOriginale8e15daf0a33f20d3976e089dea1821532fc16d3 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\PaperBackPackagesMobileView::class, []); ?>
<?php $component->withName('paper-back-packages-mobile-view'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale8e15daf0a33f20d3976e089dea1821532fc16d3)): ?>
<?php $component = $__componentOriginale8e15daf0a33f20d3976e089dea1821532fc16d3; ?>
<?php unset($__componentOriginale8e15daf0a33f20d3976e089dea1821532fc16d3); ?>
<?php endif; ?>
                                <!-- ============= Mobile View End ================= -->
                                <div id="Paperback" class="d-none d-md-block">
                                <div class="text-center publication_notes">
     
       </div>
           
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
                    <li>Author's Social Circle Promotion</li>
                    <li>E-Mail Marketing</li>
                    <li>WhatsApp Marketing</li>

                    <li>KDP </li>
                    <li>Author's E-certificate</li>
                    <li>Weekly Promotional  Graphics Posting: 6 weeks</li>
                    <li>ISBN Barcode</li>
                    <li>Author's Copywrite</li>
                    <li>Paid Facebook + Instagram Marketing</li>
                    <li>Digital Poster</li>
                    <li>Paid Youtube Marketing</li>
                    <li>Online interview</li>
                    <li>Amazon Prime Listing</li>

                    
                    <li>Copyright</li>
                    <li>Facebook + Twitter + Instagram Marketing (Creative Posting)</li>
                    <li>Youtube Marketing - Trailer Launch</li>
                    <li>Establishing a YouTube channel with custom thumbnail and cover</li>
                    <li>Amazon Ads (1 Week Ad on Amazon)</li>
                    <li>Digital Releases</li>
                    <li>Author Website Creation</li>
                    <li>Goodreads Account Set Up</li>
                    <li>Amazon Author Page Set Up</li>
                    <li>Amazon Pre Order</li>
                    <li>Bonafide Amazon Reviews </li>
                    <li>Online Listing & Distribution</li>
                    <li>Offline Distribution</li>
                    <li class="package-title">Sales Report & Profits</li>
                    <li>Online Sales Dashboard</li>
                    <li>Author Profit Share</li>
                    <li>Profit / Royalty Payout</li>
                    <li class="package-title">Author Support Services</li>
                    <li>Inventory Manager</li>
                    <li>Technical Support</li>
                    <li>Dedicated Publishing Manager</li>
                    <li>Non Exclusive Agreement</li>
                    <li>Complimentary Author Copies</li>
                    <li>Additional Author Copies</li>
                    <li class="package-title">Book Specifications</li>
                    <li>Number of Pages Allowed</li>
                    <li>Content Allowed</li>
                    <li class="">Paper Type</li>
                    <li class="">Book Size</li>
                    <li>Lamination</li>
                    <li>Book Interior</li>
                    <li>Book Cover</li>
                    <!-- <li>ISBN Barcode</li>
                    <li>Author's Copywrite</li>
                    <li>Paid Facebook + Instagram Marketing</li>
                    <li>Digital Poster</li>
                    <li>Paid Youtube Marketing</li>
                    <li>Online interview</li>
                    <li>Amazon Prime Listing</li> -->
                    <li class="package-title">eBook Creation & Distribution</li>
                  </ul>
                </div>
                <div class="pricing-card">
                  <h3 class="pricing-card-header">Economy </h3>
                  <div class="price"><span>₹4,999</span>+ GST</div>
                  <ul  class="ps-0">
                    <li>
                      <i class="fa fa-check ms-2 pi "></i>
                      Yes (Two Rounds)
                    </li>
                    <li>
                    <i class="fa fa-times ms-2 pi-n "></i>
                    No
                    </li>
                    <li>
                      <i class="fa fa-check ms-2 pi "></i>
                      Basic  (Two Rounds)
                    </li>
                    <li class="package-title"> Yes</li>
                    <li class="package"></li>
                    <li>
                    <i class="fa fa-times ms-2 pi-n "></i>
                    No
                    </li>
                    <li>
                      <i class="fa fa-times ms-2 pi-n "></i>
                      No
                    </li>
                    <li>
                      <i class="fa fa-times ms-2 pi-n "></i>
                      No
                    </li>
                    <li>
                      <i class="fa fa-times ms-2 pi-n "></i>
                      No
                    </li>
                    <li>
                      <i class="fa fa-check ms-2 pi "></i>
                      Yes
                    </li>
                    <li class="">
                      <i class="fa fa-times ms-2 pi-n "></i>
                      No
                    </li>
                    <li class="">
                      <i class="fa fa-times ms-2 pi-n "></i>
                      No
                    </li>
                    <li class="">
                      <i class="fa fa-times ms-2 pi-n "></i>
                      No

                    </li>
                    <li class="">
                      <i class="fa fa-times ms-2 pi-n "></i>
                      No
                    </li>
                    <li class="">
                      <i class="fa fa-times ms-2 pi-n "></i>
                      No
                    </li>
                    <li class="">
                      <i class="fa fa-times ms-2 pi-n "></i>
                      No
                    </li>
                    <li class="">
                      <i class="fa fa-times ms-2 pi-n "></i>
                      No
                    </li>
                    <li class="">
                      <i class="fa fa-times ms-2 pi-n "></i>
                      No
                    </li>
                    <!-- <li class="mt-2">
                      <i class="fa fa-times ms-2 pi-n "></i>
                      Yes
                    </li> -->
                    <!-- <li class="mt-2">
                      <i class="fa fa-times ms-2 pi-n "></i>
                      Yes
                    </li>
                    <li class="mt-2">
                      <i class="fa fa-times ms-2 pi-n "></i>
                      Yes
                    </li> -->
                    
                    
                    <li>
                    <i class="fa fa-times ms-2 pi-n "></i>
                      No
                    </li>
                    <li class="">
                 
                    <i class="fa fa-times ms-2 pi-n "></i>
                    No
                    
                    </li>
                    <li>
                      <i class="fa fa-times ms-2 pi-n "></i>
                      No
                    </li>
                    <li class="">
                 
                    <i class="fa fa-times ms-2 pi-n "></i>
                      No
                    
                    </li>
                    <li class="">
                      <i class="fa fa-times ms-2 pi-n "></i>
                      No
                    </li>
                    <li>
                    <i class="fa fa-times ms-2 pi-n "></i>
                    No
                    </li>
                    <li>
                      <i class="fa fa-times ms-2 pi-n "></i>
                      No
                    </li>
                    <li>
                      <i class="fa fa-times ms-2 pi-n "></i>
                      No
                    </li>
                    <li>
                      <i class="fa fa-times ms-2 pi-n "></i>
                      No
                    </li>
                    <li>
                      <i class="fa fa-times ms-2 pi-n "></i>
                      No
                    </li>
                    <li class="">
                      <i class="fa fa-times ms-2 pi-n "></i>
                      No
                    </li>
                    <li>
                      <i class="fa fa-check ms-2 pi "></i>
                      Yes
                    </li>
                    <li>
                      <i class="fa fa-times ms-2 pi-n "></i>
                      No
                    </li>
                    <li> </li>
                    <li class="mt-4">
                    <i class="fa fa-check ms-2 pi "></i>
                      Yes
                    <li class="">
                      <i class="fa fa-check ms-2 pi "></i>
                      100%
                    </li>
                    <li class="">
                      <i class="fa fa-check ms-2 pi "></i>
                      Monthly
                    </li>
                    <li> </li>
                    <li class="mt-4">
                      <i class="fa fa-check ms-2 pi "></i>
                      Yes
                    </li>
                    <li class="">
                      <i class="fa fa-check ms-2 pi "></i>
                      Yes
                    </li>
                    <li class="">
                      <i class="fa fa-check ms-2 pi "></i>
                      Yes
                    </li>
                    <li class="">
                      <i class="fa fa-check ms-2 pi "></i>
                      Yes
                    </li>
                    <li class="">
                      <i class="fa fa-check ms-2 pi "></i>
                    2
                    </li>
                    <li class="">
                      <i class="fa fa-check ms-2 pi "></i>
                      Order at Subsidised Price
                    </li>
                    <li> </li>
                    <li class="mt-4">
                      <i class="fa fa-check ms-2 pi "></i>
                     75
                    </li>
                    <li class="">
                      <i class="fa fa-check ms-2 pi "></i>
                      Text and Images
                    </li>
                    <li class="">
                      <i class="fa fa-check ms-2 pi "></i>
                      75 GSM Creamy / 75 GSM White

                    </li>
                    <li class="">
                      <i class="fa fa-check ms-2 pi "></i>
                      5*8 / 5.5*8.5

                    </li>
                    <li class="">
                      <i class="fa fa-check ms-2 pi "></i>
                      Gloss / Matte

                    </li>
                    <li class="">
                      <i class="fa fa-check ms-2 pi "></i>
                      Black & White

                    </li>
                    <li class="">
                      <i class="fa fa-check ms-2 pi "></i>
                      MultiColor 250 GSM

                    </li>
                    <!-- <li class="">
                      <i class="fa fa-times ms-2 pi-n "></i>
                      No
                    </li>
                    <li class="">
                      <i class="fa fa-times ms-2 pi-n "></i>
                      No

                    </li>
                    <li class="">
                      <i class="fa fa-times ms-2 pi-n "></i>
                      No
                    </li>
                    <li class="">
                      <i class="fa fa-times ms-2 pi-n "></i>
                      No
                    </li>
                    <li class="">
                      <i class="fa fa-times ms-2 pi-n "></i>
                      No
                    </li>
                    <li class="">
                      <i class="fa fa-times ms-2 pi-n "></i>
                      No
                    </li>
                    <li class="">
                      <i class="fa fa-times ms-2 pi-n "></i>
                      No
                    </li> -->
                    <li class="package-title">                    
                     YES

                    </li>
                    <li><a href="<?php echo e(url('/standard-package/1/paperback/12')); ?>" class="btn btn-custom">GET NOW</a>
                    </li>
                  </ul>
                </div>
                <div class="pricing-card">
                  <h3 class="pricing-card-header">Essential</h3>
                  <div class="price"><span>₹10,999</span>+ GST</div>
                  <ul  class="ps-0">
                    <li>
                      <i class="fa fa-check ms-2 pi "></i>
                      Yes (Two Rounds)
                    </li>
                    <li>
                      <i class="fa fa-check ms-2 pi "></i>
                      Yes (Two Rounds)
                    </li>
                    <li>
                      <i class="fa fa-check ms-2 pi "></i>
                      Basic  (Two Rounds)
                    </li>
                    <li class="package-title"> Yes</li>
                    <li class="package"></li>
                    <li>
                      <i class="fa fa-check ms-2 pi "></i>
                      Yes
                    </li>
                    <li>
                      <i class="fa fa-times ms-2 pi-n "></i>
                      No
                    </li>
                    <li>
                      <i class="fa fa-times ms-2 pi-n "></i>
                      No
                    </li>
                    <li>
                      <i class="fa fa-times ms-2 pi-n "></i>
                      No
                    </li>
                    <li>
                      <i class="fa fa-check ms-2 pi "></i>
                      Yes
                    </li>
                    <li class="">
                      <i class="fa fa-times ms-2 pi-n "></i>
                      No
                    </li>
                    <!-- <li class="mt-2">
                      <i class="fa fa-times ms-2 pi-n "></i>
                      No
                    </li> -->
                    <li class="">
                      <i class="fa fa-check ms-2 pi "></i>
                      Yes
                    </li>
                    <li class="">
                      <i class="fa fa-check ms-2 pi "></i>
                      Yes

                    </li>
                    <li class="">
                      <i class="fa fa-check ms-2 pi "></i>
                      For 5 Days
                    </li>
                    <li class="">
                      <i class="fa fa-check ms-2 pi "></i>
                       Yes-1
                    </li>
                    <li class="">
                      <i class="fa fa-times ms-2 pi-n "></i>
                      No
                    </li>
                    <li class="">
                      <i class="fa fa-times ms-2 pi-n "></i>
                      No
                    </li>
                    <li class="">
                      <i class="fa fa-times ms-2 pi-n "></i>
                      No
                    </li>
                    <li>
                    <i class="fa fa-times ms-2 pi-n "></i>
                      No
                    </li>
                    <li class="">
                 
                    <i class="fa fa-times ms-2 pi-n "></i>
                      No
                    
                    </li>
                    <li>
                    <i class="fa fa-check ms-2 pi "></i>
                      Yes
                    </l>
                    <li class="">
                 
                    <i class="fa fa-times ms-2 pi-n "></i>
                      No
                    
                    </li>
                    <li class="">
                      <i class="fa fa-times ms-2 pi-n "></i>
                      No
                    </li>
                    <li>
                      <i class="fa fa-check ms-2 pi "></i>
                      Yes - On 2 Website
                    </li>
                    <li>
                      <i class="fa fa-times ms-2 pi-n "></i>
                      No
                    </li>
                    <li>
                      <i class="fa fa-times ms-2 pi-n "></i>
                      No
                    </li>
                    <li>
                      <i class="fa fa-times ms-2 pi-n "></i>
                      No
                    </li>
                    <li>
                      <i class="fa fa-times ms-2 pi-n "></i>
                      No
                    </li>
                    <li class="">
                      <i class="fa fa-times ms-2 pi-n "></i>
                      No
                    </li>
                    <li>
                      <i class="fa fa-check ms-2 pi "></i>
                      Yes
                    </li>
                    <li>
                      <i class="fa fa-times ms-2 pi-n "></i>
                      No
                    </li>
                    <li> </li>
                    <li class="mt-4">
                      <i class="fa fa-check ms-2 pi "></i>
                      Yes
                    </li>
                    <li class="">
                      <i class="fa fa-check ms-2 pi "></i>
                      100%
                    </li>
                    <li class="">
                      <i class="fa fa-check ms-2 pi "></i>
                      Monthly
                    </li>
                    <li> </li>
                    <li class="mt-4">
                      <i class="fa fa-check ms-2 pi "></i>
                      Yes
                    </li>
                    <li class="">
                      <i class="fa fa-check ms-2 pi "></i>
                      Yes
                    </li>
                    <li class="">
                      <i class="fa fa-check ms-2 pi "></i>
                      Yes
                    </li>
                    <li class="">
                      <i class="fa fa-check ms-2 pi "></i>
                      Yes
                    </li>
                    <li class="">
                      <i class="fa fa-check ms-2 pi "></i>
                    10
                    </li>
                    <li class="">
                      <i class="fa fa-check ms-2 pi "></i>
                      Order at Subsidised Price
                    </li>
                    <li> </li>
                    <li class="mt-4">
                      <i class="fa fa-check ms-2 pi "></i>
                     100
                    </li>
                    <li class="">
                      <i class="fa fa-check ms-2 pi "></i>
                      Text and Images
                    </li>
                    <li class="">
                      <i class="fa fa-check ms-2 pi "></i>
                      75 GSM Creamy / 75 GSM White

                    </li>
                    <li class="">
                      <i class="fa fa-check ms-2 pi "></i>
                      5*8 / 5.5*8.5

                    </li>
                    <li class="">
                      <i class="fa fa-check ms-2 pi "></i>
                      Gloss / Matte

                    </li>
                    <li class="">
                      <i class="fa fa-check ms-2 pi "></i>
                      Black & White

                    </li>
                    <li class="">
                      <i class="fa fa-check ms-2 pi "></i>
                      MultiColor 250 GSM

                    </li>
                    <!-- <li class="">
                      <i class="fa fa-check ms-2 pi "></i>
                      Yes
                    </li>
                    <li class="">
                      <i class="fa fa-check ms-2 pi "></i>
                      Yes

                    </li>
                    <li class="">
                      <i class="fa fa-check ms-2 pi "></i>
                      For 5 Days
                    </li>
                    <li class="">
                      <i class="fa fa-check ms-2 pi "></i>
                       Yes-1
                    </li>
                    <li class="">
                      <i class="fa fa-times ms-2 pi-n "></i>
                      No
                    </li>
                    <li class="">
                      <i class="fa fa-times ms-2 pi-n "></i>
                      No
                    </li>
                    <li class="">
                      <i class="fa fa-times ms-2 pi-n "></i>
                      No
                    </li> -->
                    <li class="package-title">                    
                     YES

                    </li>
                    <li><a href="<?php echo e(url('/standard-package/1/paperback/1')); ?>" class="btn btn-custom">GET NOW</a>
                    </li>
                  </ul>
                </div>
                <div class="pricing-card">
                  <h3 class="pricing-card-header">Regular</h3>
                  <div class="price"><span>₹15,999</span>+ GST</div>
                  <ul  class="ps-0">
                  <li>
                      <i class="fa fa-check ms-2 pi "></i>
                      Yes (Two Rounds)
                    </li>
                    <li>
                      <i class="fa fa-check ms-2 pi "></i>
                      Yes (Two Rounds)
                    </li>
                    <li>
                      <i class="fa fa-check ms-2 pi "></i>
                      Basic  (Two Rounds)
                    </li>
                    <li class="package-title"> Yes</li>
                    <li class="package"></li>
                    <li>
                      <i class="fa fa-check ms-2 pi "></i>
                      Yes
                    </li>
                    <li>
                    <i class="fa fa-times ms-2 pi-n "></i>
                    No
                    </li>
                    <li>
                    <i class="fa fa-times ms-2 pi-n "></i>
                    No
                    </li>
                    <li>
                    <i class="fa fa-check ms-2 pi "></i>
                    Yes
                    </li>
                    <li>
                      <i class="fa fa-check ms-2 pi "></i>
                      Yes
                    </li>
                    <li class="">
                      <i class="fa fa-times ms-2 pi-n "></i>
                      No
                    </li>
                    <!-- <li class="mt-2">
                      <i class="fa fa-times ms-2 pi-n "></i>
                      No
                    </li> -->
                    <li class="">
                      <i class="fa fa-check ms-2 pi "></i>
                      Yes
                    </li>
                    <li class="">
                      <i class="fa fa-check ms-2 pi "></i>
                      Yes

                    </li>
                    <li class="">
                      <i class="fa fa-check ms-2 pi "></i>
                      For 7 Days
                    </li>
                    <li class="">
                      <i class="fa fa-check ms-2 pi "></i>
                       Yes-2
                    </li>
                    <li class="">
                      <i class="fa fa-check ms-2 pi "></i>
                      For 5 Days
                    </li>
                    <li class="">
                    <i class="fa fa-times ms-2 pi-n "></i>
                    No
                    </li>
                    <li class="">
                      <i class="fa fa-check ms-2 pi "></i>
                      Yes
                    </li>
                    <li>
                    <i class="fa fa-times ms-2 pi-n "></i>
                      No
                    </li>
                    <li class="">
                    <i class="fa fa-times ms-2 pi-n "></i>
                      No
                    </li>
                    <li>
                    <i class="fa fa-check ms-2 pi "></i>
                    Yes
                    </li>
                    <li class="">
                 
                    <i class="fa fa-times ms-2 pi-n "></i>
                    No 
               
               </li>
                    <li class="">
                    <i class="fa fa-times ms-2 pi-n "></i>
                    No
                    </li>
                    <li>
                      <i class="fa fa-check ms-2 pi "></i>
                      Yes - On 4 Website
                    </li>
                    <li>
                      <i class="fa fa-times ms-2 pi-n "></i>
                      No
                    </li>
                    <li>
                      <i class="fa fa-times ms-2 pi-n "></i>
                      No
                    </li>
                    <li>
                    <i class="fa fa-check ms-2 pi "></i>
                    Yes
                    </li>
                    <li>
                      <i class="fa fa-times ms-2 pi-n "></i>
                      No
                    </li>
                    <li class="">
                      <i class="fa fa-times ms-2 pi-n "></i>
                      No
                    </li>
                    <li>
                      <i class="fa fa-check ms-2 pi "></i>
                      Yes
                    </li>
                    <li>
                      <i class="fa fa-times ms-2 pi-n "></i>
                      No
                    </li>
                    <li> </li>
                    <li class="mt-4">
                      <i class="fa fa-check ms-2 pi "></i>
                      Yes
                    </li>
                    <li class="">
                      <i class="fa fa-check ms-2 pi "></i>
                      100%
                    </li>
                    <li class="">
                      <i class="fa fa-check ms-2 pi "></i>
                      Monthly
                    </li>
                    <li> </li>
                    <li class="mt-4">
                      <i class="fa fa-check ms-2 pi "></i>
                      Yes
                    </li>
                    <li class="">
                      <i class="fa fa-check ms-2 pi "></i>
                      Yes
                    </li>
                    <li class="">
                      <i class="fa fa-check ms-2 pi "></i>
                      Yes
                    </li>
                    <li class="">
                      <i class="fa fa-check ms-2 pi "></i>
                      Yes
                    </li>
                    <li class="">
                      <i class="fa fa-check ms-2 pi "></i>
                    12
                    </li>
                    <li class="">
                      <i class="fa fa-check ms-2 pi "></i>
                      Order at Subsidised Price
                    </li>
                    <li> </li>
                    <li class="mt-4">
                      <i class="fa fa-check ms-2 pi "></i>
                     100
                    </li>
                    <li class="">
                      <i class="fa fa-check ms-2 pi "></i>
                      Text and Images
                    </li>
                    <li class="">
                      <i class="fa fa-check ms-2 pi "></i>
                      75 GSM Creamy / 75 GSM White

                    </li>
                    <li class="">
                      <i class="fa fa-check ms-2 pi "></i>
                      5*8 / 5.5*8.5

                    </li>
                    <li class="">
                      <i class="fa fa-check ms-2 pi "></i>
                      Gloss / Matte

                    </li>
                    <li class="">
                      <i class="fa fa-check ms-2 pi "></i>
                      Black & White

                    </li>
                    <li class="">
                      <i class="fa fa-check ms-2 pi "></i>
                      MultiColor 250 GSM

                    </li>
                    <!-- <li class="">
                      <i class="fa fa-check ms-2 pi "></i>
                      Yes
                    </li>
                    <li class="">
                      <i class="fa fa-check ms-2 pi "></i>
                      Yes

                    </li>
                    <li class="">
                      <i class="fa fa-check ms-2 pi "></i>
                      For 7 Days
                    </li>
                    <li class="">
                      <i class="fa fa-check ms-2 pi "></i>
                       Yes-2
                    </li>
                    <li class="">
                      <i class="fa fa-check ms-2 pi "></i>
                      For 5 Days
                    </li>
                    <li class="">
                      <i class="fa fa-check ms-2 pi "></i>
                      Yes
                    </li>
                    <li class="">
                      <i class="fa fa-check ms-2 pi "></i>
                      Yes
                    </li> -->
                    <li class="package-title">                    
                     YES

                    </li>
                    
                    <li><a href="<?php echo e(url('/standard-package/1/paperback/2')); ?>" class="btn btn-custom">GET NOW</a></li>
                    
                  </ul>
                </div>
                <div class="pricing-card">
                  <h3 class="pricing-card-header">Elite</h3>
                  <div class="price"><span>₹34,999</span>+ GST</div>
                  <ul  class="ps-0">
                  <li>
                      <i class="fa fa-check ms-2 pi "></i>
                      Yes ( Advanced - Four Rounds)
                    </li>
                    <li>
                      <i class="fa fa-check ms-2 pi "></i>
                      Yes (Advanced  - Four Rounds)
                    </li>
                    <li>
                      <i class="fa fa-check ms-2 pi "></i>
                      Premium (Four Rounds)
                    </li>
                    <li class="package-title"> Yes</li>
                    <li class="package"></li>
                    <li>
                      <i class="fa fa-check ms-2 pi "></i>
                      Yes
                    </li>
                    <li>
                      <i class="fa fa-check ms-2 pi "></i>
                      Yes : Reach 5,000
                    </li>
                    <li>
                      <i class="fa fa-check ms-2 pi "></i>
                      Yes : Reach 2,000
                    </li>
                    <li>
                    <i class="fa fa-check ms-2 pi "></i>
                    Yes 
                    </li>
                    <li>
                      <i class="fa fa-check ms-2 pi "></i>
                      Yes
                    </li>
                    <li class="">
                      <i class="fa fa-times ms-2 pi-n "></i>
                      No
                    </li>
                    <!-- <li class="mt-2">
                      <i class="fa fa-times ms-2 pi-n "></i>
                      No
                    </li> -->
                    <li class="">
                      <i class="fa fa-check ms-2 pi "></i>
                      Yes
                    </li>
                    <li class="">
                      <i class="fa fa-check ms-2 pi "></i>
                       Yes
                    </li>

                    </li>
                    <li class="">
                      <i class="fa fa-check ms-2 pi "></i>
                      For 15 Days
                    </li>
                    <li class="">
                      <i class="fa fa-check ms-2 pi "></i>
                      Yes- 4
                    </li>
                    <li class="">
                      <i class="fa fa-check ms-2 pi "></i>
                      For 15 Days 
                    </li>
                    <li class="">
                      <i class="fa fa-check ms-2 pi "></i>
                      Yes
                    </li>
                    <li class="">
                      <i class="fa fa-check ms-2 pi "></i>
                      Yes
                    </li>
                    <li>
                    <i class="fa fa-check ms-2 pi "></i>
                      Yes
                    </li>
                    <li class="">
                     <i class="fa fa-times ms-2 pi-n "></i>
                      No
                    </li>
                    <li>
                    <i class="fa fa-check ms-2 pi "></i>
                      Yes - 2
                    </li>
                    <li class="">
                 
                 <i class="fa fa-check ms-2 pi "></i>
                 Yes 
               
               </li>
                    <li class="">
                      <i class="fa fa-times ms-2 pi-n "></i>
                      No
                    </li>
                    <li> 
                      <i class="fa fa-check ms-2 pi "></i>
                      Yes - On 8 Website
                    </li>
                    <li>
                      <i class="fa fa-check ms-2 pi "></i>
                      Yes (1 Year)
                    </li>
                    <li>
                    <i class="fa fa-check ms-2 pi "></i>
                      Yes
                    </li>
                    <li>
                    <i class="fa fa-check ms-2 pi "></i>
                      Yes
                    </li>
                    <li>
                      <i class="fa fa-times ms-2 pi-n "></i>
                      No 
                    </li>
                    <li class="">
                    <i class="fa fa-check ms-2 pi "></i>
                      Yes -10
                    </li>
                    <li>
                      <i class="fa fa-check ms-2 pi "></i>
                      Yes
                    </li>
                    <li>
                      <i class="fa fa-times ms-2 pi-n "></i>
                      No
                    </li>
                    <li> </li>
                    <li class="mt-4">
                      <i class="fa fa-check ms-2 pi "></i>
                      Yes
                    </li>
                    <li class="">
                      <i class="fa fa-check ms-2 pi "></i>
                      100%
                    </li>
                    <li class="">
                      <i class="fa fa-check ms-2 pi "></i>
                      Monthly
                    </li>
                    <li> </li>
                    <li class="mt-4">
                      <i class="fa fa-check ms-2 pi "></i>
                      Yes
                    </li>
                    <li class="">
                      <i class="fa fa-check ms-2 pi "></i>
                      Yes
                    </li>
                    <li class="">
                      <i class="fa fa-check ms-2 pi "></i>
                      Yes
                    </li>
                    <li class="">
                      <i class="fa fa-check ms-2 pi "></i>
                      Yes
                    </li>
                    <li class="">
                      <i class="fa fa-check ms-2 pi "></i>
                    20
                    </li>
                    <li class="">
                      <i class="fa fa-check ms-2 pi "></i>
                      Order at Subsidised Price
                    </li>
                    <li> </li>
                    <li class="mt-4">
                      <i class="fa fa-check ms-2 pi "></i>
                     150
                    </li>
                    <li class="">
                      <i class="fa fa-check ms-2 pi "></i>
                      Text and Images
                    </li>
                    <li class="">
                      <i class="fa fa-check ms-2 pi "></i>
                      75 GSM Creamy / 75 GSM White

                    </li>
                    <li class="">
                      <i class="fa fa-check ms-2 pi "></i>
                      5*8 / 5.5*8.5

                    </li>
                    <li class="">
                      <i class="fa fa-check ms-2 pi "></i>
                      Gloss / Matte

                    </li>
                    <li class="">
                      <i class="fa fa-check ms-2 pi "></i>
                      Black & White

                    </li>
                    <li class="">
                      <i class="fa fa-check ms-2 pi "></i>
                      MultiColor 250 GSM

                    </li>
                    <!-- <li class="">
                      <i class="fa fa-check ms-2 pi "></i>
                      Yes
                    </li>
                    <li class="">
                      <i class="fa fa-check ms-2 pi "></i>
                       Yes
                    </li>

                    </li>
                    <li class="">
                      <i class="fa fa-check ms-2 pi "></i>
                      Yes
                    </li>
                    <li class="">
                      <i class="fa fa-check ms-2 pi "></i>
                      Yes
                    </li>
                    <li class="">
                      <i class="fa fa-check ms-2 pi "></i>
                      Yes
                    </li>
                    <li class="">
                      <i class="fa fa-check ms-2 pi "></i>
                      Yes
                    </li>
                    <li class="">
                      <i class="fa fa-check ms-2 pi "></i>
                      Yes
                    </li> -->
                    <li class="package-title">                    
                     YES

                    </li>
                    <li>
                    <li><a href="<?php echo e(url('/standard-package/1/paperback/3')); ?>" class="btn btn-custom">GET NOW</a>
                    </li>
                  </ul>
                </div>
                <!-- <div class="pricing-card">
                  <h3 class="pricing-card-header">Premium</h3>
                  <div class="price"><span>₹56,999</span>+ GST</div>
                  <ul  class="ps-0">
                  <li>
                      <i class="fa fa-check ms-2 pi "></i>
                      Yes (Three Rounds)
                    </li>
                    <li>
                      <i class="fa fa-check ms-2 pi "></i>
                      Yes (Three Rounds)
                    </li>
                    <li>
                      <i class="fa fa-check ms-2 pi "></i>
                      Premium(Three Rounds)
                    </li>
                    <li class="package-title"> Yes</li>
                    <li class="package"></li>
                    <li>
                      <i class="fa fa-check ms-2 pi "></i>
                      Yes
                    </li>
                    <li>
                      <i class="fa fa-check ms-2 pi "></i>
                      Yes : Reach 5,000
                    </li>
                    <li>
                      <i class="fa fa-check ms-2 pi "></i>
                      Yes : Reach 5,000
                    </li>
                    <li>
                      <i class="fa fa-check ms-2 pi "></i>
                      Yes : Reach 5,000
                    </li>
                    <li class="mt-2">
                      <i class="fa fa-times ms-2 pi-n "></i>
                      No
                    </li>
                    <li class="my-3">
                      <i class="fa fa-check ms-2 pi "></i>
                      Yes
                    </li>
                    <li>
                      <i class="fa fa-check ms-2 pi "></i>
                      Yes
                    </li>
                    <li>
                      <i class="fa fa-check ms-2 pi "></i>
                      Yes
                    </li>
                    <li>
                      <i class="fa fa-check ms-2 pi "></i>
                      Yes
                    </li>
                    <li>
                      <i class="fa fa-check ms-2 pi "></i>
                      Yes (1 Year)
                    </li>
                    <li>
                      <i class="fa fa-check ms-2 pi "></i>
                      Yes
                    </li>
                    <li>
                      <i class="fa fa-check ms-2 pi "></i>
                      Yes
                    </li>
                    <li>
                      <i class="fa fa-check ms-2 pi "></i>
                      Yes
                    </li>
                    <li class="my-2">
                      <i class="fa fa-times ms-2 pi-n "></i>
                      No
                    </li>
                    <li>
                      <i class="fa fa-check ms-2 pi "></i>
                      Yes
                    </li>
                    <li>
                      <i class="fa fa-times ms-2 pi-n "></i>
                      No
                    </li>
                    <li> </li>
                    <li class="mt-4">
                      <i class="fa fa-check ms-2 pi "></i>
                      Yes
                    </li>
                    <li class="">
                      <i class="fa fa-check ms-2 pi "></i>
                      100%
                    </li>
                    <li class="">
                      <i class="fa fa-check ms-2 pi "></i>
                      Monthly
                    </li>
                    <li> </li>
                    <li class="mt-4">
                      <i class="fa fa-check ms-2 pi "></i>
                      Yes
                    </li>
                    <li class="">
                      <i class="fa fa-check ms-2 pi "></i>
                      Yes
                    </li>
                    <li class="">
                      <i class="fa fa-check ms-2 pi "></i>
                      Yes
                    </li>
                    <li class="">
                      <i class="fa fa-check ms-2 pi "></i>
                      Yes
                    </li>
                    <li class="">
                      <i class="fa fa-check ms-2 pi "></i>
                    10
                    </li>
                    <li class="">
                      <i class="fa fa-check ms-2 pi "></i>
                      Order at Subsidised Price
                    </li>
                    <li> </li>
                    <li class="mt-4">
                      <i class="fa fa-check ms-2 pi "></i>
                     300
                    </li>
                    <li class="">
                      <i class="fa fa-check ms-2 pi "></i>
                      Text and Images
                    </li>
                    <li class="">
                      <i class="fa fa-check ms-2 pi "></i>
                      75 GSM Creamy / 75 GSM White

                    </li>
                    <li class="">
                      <i class="fa fa-check ms-2 pi "></i>
                      5*8 / 5.5*8.5

                    </li>
                    <li class="">
                      <i class="fa fa-check ms-2 pi "></i>
                      Gloss / Matte

                    </li>
                    <li class="">
                      <i class="fa fa-check ms-2 pi "></i>
                      Black & White

                    </li>
                    <li class="">
                      <i class="fa fa-check ms-2 pi "></i>
                      MultiColor 250 GSM

                    </li>
                    <li class="package-title">                    
                     YES

                    </li>
                    <li>
                      <a href="payment.php" class="btn btn-custom">GET NOW</a>
                    </li>
                  </ul>
                </div>
                <div class="pricing-card">
                  <h3 class="pricing-card-header">Elite</h3>
                  <div class="price"><span>₹87,999</span>+ GST</div>
                  <ul  class="ps-0">
                  <li>
                      <i class="fa fa-check ms-2 pi "></i>
                      Yes (Three Rounds)
                    </li>
                    <li>
                      <i class="fa fa-check ms-2 pi "></i>
                      Yes (Three Rounds)
                    </li>
                    <li>
                      <i class="fa fa-check ms-2 pi "></i>
                      Premium(Three Rounds)
                    </li>
                    <li class="package-title"> Yes</li>
                    <li class="package"></li>
                    <li>
                      <i class="fa fa-check ms-2 pi "></i>
                      Yes
                    </li>
                    <li>
                      <i class="fa fa-check ms-2 pi "></i>
                      Yes : Reach 7,000
                    </li>
                    <li>
                      <i class="fa fa-check ms-2 pi "></i>
                      Yes : Reach 7,000
                    </li>
                    <li>
                      <i class="fa fa-check ms-2 pi "></i>
                      Yes : Reach 7,000
                    </li>
                    <li class="mt-2">
                      <i class="fa fa-times ms-2 pi-n "></i>
                      No
                    </li>
                    <li class="my-3">
                      <i class="fa fa-check ms-2 pi "></i>
                      Yes
                    </li>
                    <li>
                      <i class="fa fa-check ms-2 pi "></i>
                      Yes
                    </li>
                    <li>
                      <i class="fa fa-check ms-2 pi "></i>
                      Yes
                    </li>
                    <li>
                      <i class="fa fa-check ms-2 pi "></i>
                      Yes
                    </li>
                    <li>
                      <i class="fa fa-check ms-2 pi "></i>
                      Yes (2 Year)
                    </li>
                    <li>
                      <i class="fa fa-check ms-2 pi "></i>
                      Yes
                    </li>
                    <li>
                      <i class="fa fa-check ms-2 pi "></i>
                      Yes
                    </li>
                    <li>
                      <i class="fa fa-check ms-2 pi "></i>
                      Yes
                    </li>
                    <li class="my-2">
                      <i class="fa fa-check ms-2 pi"></i>
                      Yes
                    </li>
                    <li>
                      <i class="fa fa-check ms-2 pi "></i>
                      Yes
                    </li>
                    <li>
                      <i class="fa fa-check ms-2 pi "></i>
                      Yes
                    </li>
                    <li> </li>
                    <li class="mt-4">
                      <i class="fa fa-check ms-2 pi "></i>
                      Yes
                    </li>
                    <li class="">
                      <i class="fa fa-check ms-2 pi "></i>
                      100%
                    </li>
                    <li class="">
                      <i class="fa fa-check ms-2 pi "></i>
                      Monthly
                    </li>
                    <li> </li>
                    <li class="mt-4">
                      <i class="fa fa-check ms-2 pi "></i>
                      Yes
                    </li>
                    <li class="">
                      <i class="fa fa-check ms-2 pi "></i>
                      Yes
                    </li>
                    <li class="">
                      <i class="fa fa-check ms-2 pi "></i>
                      Yes
                    </li>
                    <li class="">
                      <i class="fa fa-check ms-2 pi "></i>
                      Yes
                    </li>
                    <li class="">
                      <i class="fa fa-check ms-2 pi "></i>
                    10
                    </li>
                    <li class="">
                      <i class="fa fa-check ms-2 pi "></i>
                      Order at Subsidised Price
                    </li>
                    <li> </li>
                    <li class="mt-4">
                      <i class="fa fa-check ms-2 pi "></i>
                     350
                    </li>
                    <li class="">
                      <i class="fa fa-check ms-2 pi "></i>
                      Text and Images
                    </li>
                    <li class="">
                      <i class="fa fa-check ms-2 pi "></i>
                      75 GSM Creamy / 75 GSM White

                    </li>
                    <li class="">
                      <i class="fa fa-check ms-2 pi "></i>
                      5*8 / 5.5*8.5

                    </li>
                    <li class="">
                      <i class="fa fa-check ms-2 pi "></i>
                      Gloss / Matte

                    </li>
                    <li class="">
                      <i class="fa fa-check ms-2 pi "></i>
                      Black & White

                    </li>
                    <li class="">
                      <i class="fa fa-check ms-2 pi "></i>
                      MultiColor 250 GSM

                    </li>
                    <li class="package-title">                    
                     YES

                    </li>
                    <li>
                      <a href="payment.php" class="btn btn-custom">GET NOW</a>
                    </li>
                  </ul>
                </div> -->
                
              </div>
              
              <div class="bfc-custom-plan text-center py-5">
  <h2>Still Can’t find what you're looking for?</h2>
  <p>No problem! you can create your own plan just the way you want it.</p>
  <a href="https://bfcpublications.com/customize-package/paperback" class="bfc-custom-btn text-white">Click Here to Customize Your Plan Now</a>
</div>
              <!-- <p class="text-center" style="color: #000;font-weight: 600;">
                  
                Still Can’t find what you're looking for? No problem! With our Customization Package, you are free to create your own plan just the way you want it. <a  style="color:#f44556;" href="https://bfcpublications.com/customize-package/paperback">Click here</a> to customize your plan now.</p> -->

              <div class="row justify-content-center">
                <div class="col-md-8 ">
              <!-- <div class="pricing-card-elite">
                <div class="sf">
              <h2 class="style-1">Elite</h2>
                  
                  <p class="p-main px-lg-5 pb-2"> <b> If you are really serious about making your masterpiece the next best seller, we recommend you consider our exclusive   <span class="text-red-c">Elite Package priced at ₹65,499 + 18% GST.</span> This premium offering includes: </b></p>
                  <div class="row px-4">
                    <col-12>                  
                 
                  </col-12>
                    <div class="col-12 mt-4">
                   <h4 >Editing Services</h4>
                   <p>Take advantage of our comprehensive editing services, offering multiple rounds of meticulous editing. With ample room for corrections, you'll receive unparalleled attention to detail, ensuring your manuscript reaches its full potential.
                   </p> 
                    </div>
                  
                    <div class="col-5">
                    <p>Advanced formatting & Interior design</p>
                    </div>
                    <div class="col-1">
                      <p>
                   <i class="fa fa-arrow-right me-2 pi "></i>
                                         
                      </p>
                    </div>
                    <div class="col-6">
                    <p>Ensure your work is polished to perfection with two rounds of format editing, providing ample opportunity for meticulous refinement and corrections.
                     </p> 
                    </div>

                 
                    <div class="col-5">
                    <p>Advanced Proof Reading </p>
                    </div>
                    <div class="col-1">
                      <p>
                   <i class="fa fa-arrow-right me-2 pi "></i>
                    
                     
                      </p>
                    </div>
                    <div class="col-6">
                    <p>Ensure impeccable quality with our three-stage proofreading process, guaranteeing ensuring error-free content that shines with professionalism and precision.
                     </p> 
                    </div>
                     
                     <div class="col-5">
                    <p>Advanced theme based Cover Design </p>
                    </div>
                    <div class="col-1">
                      <p>
                   <i class="fa fa-arrow-right me-2 pi "></i>
                    
                     
                      </p>
                    </div>
                    <div class="col-6">
                    <p>Get yourself a captivating cover design, tailored using an array of advanced tools to create a visually stunning exterior that compels readers to purchase your book.
                     </p> 
                    </div>
                    
                     <div class="col-12">
                   <h4 >Marketing your Masterpiece</h4>
                  
                    </div>
                   
                     <div class="col-5">
                    <p>Listing and distribution on Flipkart, Amazon, Google Play Books, and Kindle (Author's account will be created for Kindle). </p>
                    </div>
                    <div class="col-1">
                      <p>
                   <i class="fa fa-arrow-right me-2 pi "></i>
                    
                     
                      </p>
                    </div>
                    <div class="col-6">
                    <p>Gain maximum exposure for your book by listing it on major platforms such as Flipkart, Amazon, Google Play Books, and Kindle
                     </p> 
                    </div>
                
                     <div class="col-5">
                    <p>Designing author certificates and e-certificates of publishing.</p>
                    </div>
                    <div class="col-1">
                      <p>
                   <i class="fa fa-arrow-right me-2 pi "></i>
                    
                     
                      </p>
                    </div>
                    <div class="col-6">
                    <p>Receive a beautifully framed certificate/e-certificate to proudly showcase your literary achievement.
                     </p> 
                    </div>
                  
                    <div class="col-5">
                    <p>WhatsApp Marketing: Reach 10,000 contacts in 5 weeks, 2000 weekly, including purchase links subject to author approval.</p>
                    </div>
                    <div class="col-1">
                      <p>
                   <i class="fa fa-arrow-right me-2 pi "></i>
                    
                     
                      </p>
                    </div>
                    <div class="col-6">
                    <p>
Elevate your visibility with a strategic five-week promotional campaign through WhatsApp and email, targeting relevant communities and ensuring maximum exposure for your book.
                     </p> 
                    </div>
                
                     <div class="col-5">
                    <p>Conducting email marketing campaigns using exclusive author data to promote books within the literary community, featuring captivating creatives; if authors provide data, campaigns will include them. Distributing 25,000 emails over 5 weeks, with 5,000 sent weekly, including purchase links subject to author approval.</p>
                    </div>
                    <div class="col-1">
                      <p>
                   <i class="fa fa-arrow-right me-2 pi "></i>
                    
                     
                      </p>
                    </div>
                    <div class="col-6">
                    <p>
                    Harness the power of email marketing with our exclusive data-driven email marketing campaign, designed to promote your books within the literary community. Our campaigns feature captivating creatives tailored to engage readers and drive sales. Also, If you provide data, we'll incorporate it into the campaigns, ensuring personalised outreach. With 25,000 emails distributed over 5 weeks – 5,000 sent weekly – including purchase links, you'll reach a vast audience, maximising your book's visibility and sales potential.
                     </p> 
                    </div>
                    
                    <div class="col-5">
                    <p>Creating and posting six creatively designed graphics on BFC Publications' social media platforms and authors' profiles over six weeks, with one post per week, including purchase links, creative is subject to author approval</p>
                    </div>
                    <div class="col-1">
                      <p>
                   <i class="fa fa-arrow-right me-2 pi "></i>
                    
                     
                      </p>
                    </div>
                    <div class="col-6">
                    <p>
                    Capture attention and drive sales with custom-designed creatives tailored for social media engagement. Each post will feature a compelling call-to-action button, strategically crafted to entice your audience and maximise sales.
                     </p> 
                    </div>
                    
                     <div class="col-5">
                    <p>Paid Facebook and Instagram marketing campaign for one month</p>
                    </div>
                    <div class="col-1">
                      <p>
                   <i class="fa fa-arrow-right me-2 pi "></i>
                    
                     
                      </p>
                    </div>
                    <div class="col-6">
                    <p>
                    Ignite excitement and generate buzz for your book with a dynamic one-month-long Facebook and Instagram marketing campaign (paid). Utilising targeted ads and engaging content, we'll captivate your audience, spark interest, and drive traffic to your book's promotion.
                     </p> 
                    </div>
                     <div class="col-5">
                    <p>YouTube Trailer launch - 2 </p>
                    </div>
                    <div class="col-1">
                      <p>
                   <i class="fa fa-arrow-right me-2 pi "></i>
                    
                     
                      </p>
                    </div>
                    <div class="col-6">
                    <p>
                    Rev up the excitement for your book with 2 dynamic YouTube trailers, produced in close collaboration with you, the author. These trailers, a perfect blend of your vision and our creativity, will be shared across social media platforms, including our handles, maximising exposure and generating excitement among your audience.

                     </p> 
                    </div>
                    
                    <div class="col-5">
                    <p>Establishing a YouTube channel with custom thumbnail and cover. </p>
                    </div>
                    <div class="col-1">
                      <p>
                   <i class="fa fa-arrow-right me-2 pi "></i>
                    
                     
                      </p>
                    </div>
                    <div class="col-6">
                    <p>
                    Moving forward, content is king. Therefore, it's imperative to establish your own YouTube channel, tailored to showcase reels and videos aimed at engaging your audience of readers.

                     </p> 
                    </div>
                    
                    <div class="col-5">
                    <p>Amazon advertising campaign for 15 days. </p>
                    </div>
                    <div class="col-1">
                      <p>
                   <i class="fa fa-arrow-right me-2 pi "></i>
                    
                     
                      </p>
                    </div>
                    <div class="col-6">
                    <p>
                    Supercharge your book sales with targeted Amazon ads designed to give your masterpiece the kickstart it deserves.


                     </p> 
                    </div>
                   
                    <div class="col-5">
                    <p>Digital release on 10 websites with provided purchase links
 </p>
                    </div>
                    <div class="col-1">
                      <p>
                   <i class="fa fa-arrow-right me-2 pi "></i>
                    
                     
                      </p>
                    </div>
                    <div class="col-6">
                    <p>
                    Launch your masterpiece with a widespread digital release (with direct purchase links to your book), guaranteeing it captures the attention of audiences far and wide.

                     </p> 
                    </div>
                    
                     <div class="col-5">
                    <p>Author Website Creation
</p>
                    </div>
                    <div class="col-1">
                      <p>
                   <i class="fa fa-arrow-right me-2 pi "></i>
                    
                     
                      </p>
                    </div>
                    <div class="col-6">
                    <p>
                    Take the first step in establishing your digital footprint by securing your own professional website. With two years of hosting included, you'll have the platform you need to effectively promote your literary works and engage with your audience.
                     </p> 
                    </div>
                    
                     <div class="col-5">
                    <p>Goodreads Account Set Up
</p>
                    </div>
                    <div class="col-1">
                      <p>
                   <i class="fa fa-arrow-right me-2 pi "></i>
                    
                  
                      </p>
                    </div>
                    <div class="col-6">
                    <p>
                    Forge your authorial identity on the world's largest literary platform, engaging with a diverse community of avid readers.
                     </p> 
                    </div>
                  
                    <div class="col-5">
                    <p>Amazon Author Page Set Up
</p>
                    </div>
                    <div class="col-1">
                      <p>
                   <i class="fa fa-arrow-right me-2 pi "></i>
                    
                     
                      </p>
                    </div>
                    <div class="col-6">
                    <p>
                    Set yourself up for success by creating your very own Amazon Author Page. This essential platform is where readers can learn more about you and your works.

                     </p> 
                    </div>
                  
                    <div class="col-5">
                    <p>Copyright
</p>
                    </div>
                    <div class="col-1">
                      <p>
                    <i class="fa fa-arrow-right me-2 pi "></i>
                    
                     
                      </p>
                    </div>
                    <div class="col-6">
                    <p>
                    Rest assured, we offer unwavering support throughout the copyright application process, from initial filing to the moment you receive your certificate. Our goal is to ensure your intellectual rights remain protected, provided your work is original and not plagiarised.

                     </p> 
                    </div>
                     
                     <div class="col-5">
                    <p>ISBN Allocation
 </p>
                    </div>
                    <div class="col-1">
                      <p>
                    <i class="fa fa-arrow-right me-2 pi "></i>
                    
                     
                      </p>
                    </div>
                    <div class="col-6">
                    <p>
                    
                    ISBN allocation is the process of obtaining a unique identifier for a book.
                     </p> 
                    </div>
                    
                 
                     <div class="col-12">
                   <h4 >Other Services</h4>
                  
                    </div>

                     
                     <div class="col-12 text-start">
                   <h6>Sales Report & Profits</h6>
                    </div>
                   
                   
                    <div class="col-12 text-start">
                 <p>Online Sales Dashboard</p>
                    </div>
                    <div class="col-12 text-start">
                 <p>Royalty - 100%</p>
                    </div>
                    <div class="col-12 text-start">
                 <p>Profit / Royalty Payout - Monthly</p>
                    </div>
                    <div class="col-12 text-start">
                   <h6>Author Support Services</h6>
                    </div>
                    <div class="col-12 text-start">
                 <p>Inventory Management</p>
                    </div>
                    <div class="col-12 text-start">
                 <p>Elevate your book promotion with a dedicated social media virtuoso</p>
                    </div>
                    <div class="col-12 text-start">
                 <p>Technical Support</p>
                    </div>
                    <div class="col-12 text-start">
                 <p>Dedicated Publishing Manager</p>
                    </div>
                    <div class="col-12 text-start">
                 <p>Non Exclusive Agreement</p>
                    </div>
                    <div class="col-12 text-start">
                 <p>A sample of a printed author copy post-proofreading, providing a genuine reading experience.</p>
                    </div>
                    <div class="col-12 text-start">
                 <p>Complimentary Author Copies - 20</p>
                    </div>
                    <div class="col-12 text-start">
                 <p>Additional Author Copies - Order at Subsidised Price</p>
                    </div>
                    <div class="col-12 text-start">
                 <h6>Book Specifications</h6>
                    </div>
                    <div class="col-12 text-start">
                 <p>Number of Pages Allowed Upto - 250</p>
                    </div>
                    <div class="col-12 text-start">
                 <p>Content Allowed - Text and Images</p>
                    </div>
                    <div class="col-12 text-start">
                 <p>Paper Type - Creamy / White(60 GSM or 70 GSM)</p>
                    </div>
                    <div class="col-12 text-start">
                 <p>Book Size - 5*8 /5.5*8.5</p>
                    </div>
                    <div class="col-12 text-start">
                 <p>Lamination - Gloss / Matte</p>
                    </div>
                    <div class="col-12 text-start">
                 <p>Book Interior - Black&White</p>
                    </div>
                    <div class="col-12 text-start">
                 <p>Book Cover - MultiColor 250 GSM</p>
                    </div>
                    <div class="col-12 text-start">
              <h6>E Book Creation & Distribution</h6>
                    </div>
                    <div class="col-12 text-center mb-4">
                    <a href="<?php echo e(url('/standard-package/1/paperback/5')); ?>" class="btn btn-custom">GET NOW</a>
                    </div>
                  </div>
                  </div>
                  
                </div> -->
                </div>
                </div>
            </div>
          </div>
          <div  class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
            
              <!-- ============= Mobile View ================= -->
              <?php if (isset($component)) { $__componentOriginale2da5aaa4f46e907ad3f7bb2fcd58f7c99dd17a8 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\EbookPackagesMobileView::class, []); ?>
<?php $component->withName('ebook-packages-mobile-view'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale2da5aaa4f46e907ad3f7bb2fcd58f7c99dd17a8)): ?>
<?php $component = $__componentOriginale2da5aaa4f46e907ad3f7bb2fcd58f7c99dd17a8; ?>
<?php unset($__componentOriginale2da5aaa4f46e907ad3f7bb2fcd58f7c99dd17a8); ?>
<?php endif; ?>
                                <!-- ============= Mobile View End ================= -->
                                <div id="eBook" class="d-none d-md-block">
                                <div class="text-center publication_notes">
      
       </div>
              <div class="pricing-table row-feature-des">
                <div class="pricing-card ebook-wd">
                  <h3 class="pricing-card-header">Feature Description</h3>
                  <ul  class="ps-0">
                    <li class="package-title pt-5 mt-3">Publishing Support</li>
                    <li>Content Uploading Allowed - Unlimited</li>
                    <li class="package-title">Editing Services</li>
                    <li>Format Editing</li>
                    <li>Proof Reading</li>
                    <li>Cover Design</li>
                    <li class="package-title mt-1">ISBN Allocation</li>
                    <li class="package-title">Marketing your Masterpiece</li>
                    <li>Online Distribution</li>
                    <li> Author's E-certificate</li>
                    <li>Author's Social Circle Promotion</li>
                    <li>E Mail Marketing</li>
                    <li>WhatsApp Marketing</li>
                    <li>Facebook + Twitter + Instagram Marketing (Creative Posting)</li>
                    <li>Digital Releases</li>
                    <li class="package-title">Sales Report & Profits</li>
                    <li>Online Sales Dashboard</li>
                    <li>Author Profit Share</li>
                    <li>Profit / Royalty Payout</li>
                    <li class="package-title">Author Support Services</li>
                    <li>Publishing Support</li>
                    <li>Technical Support</li>
                    <li>Dedicated Publishing Manager</li>
                  </ul>
                </div>
                <div class="pricing-card">
                  <h3 class="pricing-card-header">Essential</h3>
                  <div class="price"><span>₹1,999</span>+ GST</div>
                  <ul  class="ps-0">
                    <li>
                      <i class="fa fa-check ms-2 pi "></i>
                      Yes
                    </li>
                    <li class="package"></li>
                    <li>
                      <i class="fa fa-check ms-2 pi "></i>
                     Yes -(Upto 50 Pages)
                    </li>
                    <!-- <li>
                      <i class="fa fa-check ms-2 pi "></i>
                      Yes (Two Rounds)
                    </li> -->
                    <li>
                      <i class="fa fa-check ms-2 pi "></i>
                     Yes -(Upto 50 Pages)
                    </li>
                    <!-- <li>
                      <i class="fa fa-xmark ms-2 pi-n"></i>
                      No
                    </li> -->
                    <li>
                      <i class="fa fa-check ms-2 pi "></i>
                     Yes - Basic
                    </li>
                    <!-- <li>
                      <i class="fa fa-xmark ms-2 pi-n"></i>
                      No
                    </li> -->
                    <li class="package-title"> Yes</li>

                    <li class="mb-4"> </li>
                    <li>
                      <i class="fa fa-check ms-2 pi "></i>
                      Yes
                    </li>
                    <li>
                      <i class="fa fa-check ms-2 pi "></i>
                      Yes
                    </li>
                    <li>
                      <i class="fa fa-xmark ms-2 pi-n"></i>
                      No
                    </li>
                    <li>
                      <i class="fa fa-xmark ms-2 pi-n"></i>
                      No
                    </li>
                    <li>
                      <i class="fa fa-xmark ms-2 pi-n"></i>
                      No
                    </li>
                    <li class="">
                      <i class="fa fa-xmark ms-2 pi-n"></i>
                      No
                    </li>
                    <li>
                      <i class="fa fa-xmark ms-2 pi-n"></i>
                      No
                    </li>
                    <li class="mb-4"> </li>
                    <li>
                      <i class="fa fa-check ms-2 pi "></i>
                      Yes
                    </li>
                    <li>
                      <i class="fa fa-check ms-2 pi "></i>
                      100%
                    </li>
                    <li>
                      <i class="fa fa-check ms-2 pi "></i>
                      Monthly
                    </li>
                    <li class="mb-4"> </li>
                    <li>
                      <i class="fa fa-check ms-2 pi "></i>
                      Yes
                    </li>
                    <li>
                      <i class="fa fa-check ms-2 pi "></i>
                      Yes
                    </li>
                    <li>
                      <i class="fa fa-check ms-2 pi "></i>
                      Yes
                    </li>
                    <li><a href="<?php echo e(url('/standard-package/1/ebook/1')); ?>" class="btn btn-custom">GET NOW</a>
</li>
                  </ul>
                </div>
                <div class="pricing-card">
                  <h3 class="pricing-card-header">Regular</h3>
                  <div class="price"><span>₹6,499</span>+ GST</div>
                  <ul  class="ps-0">
                  <li>
                      <i class="fa fa-check ms-2 pi "></i>
                      Yes 
                    </li>
                    <li class="package"></li>
                    <li>
                      <i class="fa fa-check ms-2 pi "></i>
                      Yes - (Upto 100 Pages)
                    </li>
                    <li>
                      <i class="fa fa-check ms-2 pi"></i>
                      Yes  - (Upto 100 Pages)
                    </li>
                    <li>
                      <i class="fa fa-check ms-2 pi"></i>
                      Yes - Basic
                    </li>
                    <li class="package-title"> Yes</li>

                    <li class="mb-4"> </li>
                    <li>
                      <i class="fa fa-check ms-2 pi "></i>
                      Yes
                    </li>
                    <li>
                      <i class="fa fa-check ms-2 pi "></i>
                      Yes
                    </li>
                    <li>
                      <i class="fa fa-check ms-2 pi "></i>
                      Yes
                    </li>
                    <li>
                      <i class="fa fa-xmark ms-2 pi-n"></i>
                      No
                    </li>
                    <li>
                      <i class="fa fa-xmark ms-2 pi-n"></i>
                      No
                    </li>
                    <li class="">
                      <i class="fa fa-check ms-2 pi "></i>
                      Yes
                    </li>
                    <li>
                      <i class="fa fa-xmark ms-2 pi-n"></i>
                      No
                    </li>
                    <li class="mb-4"> </li>
                    <li>
                      <i class="fa fa-check ms-2 pi "></i>
                      Yes
                    </li>
                    <li>
                      <i class="fa fa-check ms-2 pi "></i>
                      100%
                    </li>
                    <li>
                      <i class="fa fa-check ms-2 pi "></i>
                      Monthly
                    </li>
                    <li class="mb-4"> </li>
                    <li>
                      <i class="fa fa-check ms-2 pi "></i>
                      Yes
                    </li>
                    <li>
                      <i class="fa fa-check ms-2 pi "></i>
                      Yes
                    </li>
                    <li>
                      <i class="fa fa-check ms-2 pi "></i>
                      Yes
                    </li>
                    <li><a href="<?php echo e(url('/standard-package/1/ebook/2')); ?>" class="btn btn-custom">GET NOW</a></li>
                  </ul>
                </div>
                <div class="pricing-card">
                  <h3 class="pricing-card-header">Superior</h3>
                  <div class="price"><span>₹16,499</span>+ GST</div>
                  <ul  class="ps-0">
                  <li>
                      <i class="fa fa-check ms-2 pi "></i>
                      Yes
                    </li>
                    <li class="package"></li>
                    <li>
                      <i class="fa fa-check ms-2 pi "></i>
                      Yes - (Upto 100 Pages)
                    </li>
                    <li>
                      <i class="fa fa-check ms-2 pi"></i>
                      Yes - (Upto 100 Pages)
                    </li>
                    <li>
                      <i class="fa fa-check ms-2 pi"></i>
                      Yes - Premium
                    </li>
                    <li class="package-title"> Yes</li>

                    <li class="mb-4"> </li>
                    <li>
                      <i class="fa fa-check ms-2 pi "></i>
                      Yes
                    </li>
                    <li>
                      <i class="fa fa-check ms-2 pi "></i>
                      Yes
                    </li>
                    <li>
                    <i class="fa fa-check ms-2 pi "></i>
                      Yes
                    </li>
                    <li>
                    <i class="fa fa-check ms-2 pi "></i>
                      Yes : Reach 10,000
                    </li>
                    <li>
                    <i class="fa fa-check ms-2 pi "></i>
                      Yes : Reach 1,000
                    </li>
                    
                    <li class="">
                      <i class="fa fa-check ms-2 pi "></i>
                      Yes
                    </li>
                    <li>
                      <i class="fa fa-check ms-2 pi "></i>
                      Yes - on 10 websites
                    </li>
                    <li class="mb-4"> </li>
                  
                    <li>
                      <i class="fa fa-check ms-2 pi "></i>
                      Yes
                    </li>
                    <li>
                      <i class="fa fa-check ms-2 pi "></i>
                      100%
                    </li>
                    <li>
                      <i class="fa fa-check ms-2 pi "></i>
                      Monthly
                    </li>
                    <li class="mb-4"> </li>
                    <li>
                      <i class="fa fa-check ms-2 pi "></i>
                      Yes
                    </li>
                    <li>
                      <i class="fa fa-check ms-2 pi "></i>
                      Yes
                    </li>
                    <li>
                      <i class="fa fa-check ms-2 pi "></i>
                      Yes
                    </li>
                    <li><a href="<?php echo e(url('/standard-package/1/ebook/3')); ?>" class="btn btn-custom">GET NOW</a></li>
                  </ul>
                </div>
                
                <!-- <div class="pricing-card">
                  <h3 class="pricing-card-header">Premium</h3>
                  <div class="price"><span>₹18,499</span>+ GST</div>
                  <ul  class="ps-0">
                  <li>
                      <i class="fa fa-check ms-2 pi "></i>
                      Yes
                    </li>
                    <li class="package"></li>
                    <li>
                      <i class="fa fa-check ms-2 pi "></i>
                      Yes (Two Rounds)
                    </li>
                    <li>
                      <i class="fa fa-check ms-2 pi"></i>
                      Yes (Two Rounds)
                    </li>
                    <li>
                      <i class="fa fa-check ms-2 pi"></i>
                      Yes Premium (Two Rounds)
                    </li>
                    <li class="package-title"> Yes</li>

                    <li class="mb-4"> </li>
                    <li>
                      <i class="fa fa-check ms-2 pi "></i>
                      Yes
                    </li>
                    <li>
                      <i class="fa fa-check ms-2 pi "></i>
                      Yes
                    </li>
                    <li>
                    <i class="fa fa-check ms-2 pi "></i>
                    Yes : Reach 3,000
                    </li>
                    <li>
                    <i class="fa fa-check ms-2 pi "></i>
                    Yes : Reach 3,000
                    </li>
                    <li>
                    <i class="fa fa-check ms-2 pi "></i>
                      Yes
                    </li>
                    <li>
                    <i class="fa fa-check ms-2 pi "></i>
                      Yes
                    </li>
                    <li class="mb-4"> </li>
                    <li>
                      <i class="fa fa-check ms-2 pi "></i>
                      Yes
                    </li>
                    <li>
                      <i class="fa fa-check ms-2 pi "></i>
                      100%
                    </li>
                    <li>
                      <i class="fa fa-check ms-2 pi "></i>
                      Monthly
                    </li>
                    <li class="mb-4"> </li>
                    <li>
                      <i class="fa fa-check ms-2 pi "></i>
                      Yes
                    </li>
                    <li>
                      <i class="fa fa-check ms-2 pi "></i>
                      Yes
                    </li>
                    <li>
                      <i class="fa fa-check ms-2 pi "></i>
                      Yes
                    </li>
                    <li><a href="<?php echo e(url('/payment')); ?>" class="btn btn-custom">GET NOW</a></li>
                  </ul>
                </div> -->
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
                        <div class="form-group has-search mb-3">
                            <input type="checkbox" name="checkbox" id="checkbox">
                            <span class="checkbox_content">I, hereby accord my consent to process my above mentioned personal data by BFC Publications Pvt. Ltd. for the purpose of Author support/Service Promotion, in accordance with the provisions of DPDP Act 2023.</span>
                            <br>
                          
                            To know more <a href="https://bfcpublications.com/DPDP_Act" target="_blank">click here</a>
                          
                            <!-- To Know more <a href="#">"Click Here"</a> -->
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
        // $(window).on('load',function(){
        //     setTimeout(function(){
        //     $('#pub-popup').modal('show');
        //     }, 1500);
        //     setTimeout(function(){
        //       $('#pub-popup').modal('hide');
        //     }, 15000);
        // });

        $(document).ready(function() {
          $("#publishing_start_form").validate({
              rules: {
                  name: "required",
                  email: "required",
                  checkbox: "required",
                  mobileno: {
                      required: true,
                      minlength: 10,
                      maxlength: 10,
                  },
              },
              messages: {
                  checkbox: "Checkbox required.",
              },
              errorPlacement: function(error, element) {
                  if (element.attr("name") == "checkbox") {
                      error.appendTo("#check_box_err");
                  } else {
                      error.insertAfter(element);
                  }
              }
          });
        });
//   setTimeout(function(){
//     $('#pub-popup').modal('hide');
// }, 2000);
  //setTimeout(function() {
  //  $('#pub-popup').modal('hide');}, 4000);
  
        </script>

    <!--------------------------------------------------->
    <!-- ============= Footer Section ================ -->
    <!--------------------------------------------------->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\bfcpub\resources\views/paperbackpackages.blade.php ENDPATH**/ ?>