<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SitemapXmlController;
use App\Http\Middleware\CheckUnnecessaryURLs;
use App\Http\Controllers\PaymentController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Route::redirect('/', '/home');
// Route::get('/robots.txt', [SitemapXmlController::class, 'robots']);
Route::get('/sitemap.xml', [SitemapXmlController::class, 'index']);

Route::get('/',[HomeController::class,'index']);
Route::middleware([CheckUnnecessaryURLs::class])->group(function () {

    Route::post('/save_data',[HomeController::class,'savePublishingModal']);
    Route::post('/save_payment_details',[HomeController::class,'savePaymentform']);
    Route::post('/send_contact_us_mail',[HomeController::class,'sendMailContactUs']);
    Route::post('/send_mail_hr_user',[HomeController::class,'sendEmailToHRAndUser']);
    Route::get('/contact',[HomeController::class,'ContactUsPage']);
    Route::post('/send_contact_us_mail',[HomeController::class,'sendMailContactUs']);

    Route::get('/royalty-calculator',[HomeController::class, 'royalty_calculator']);
    Route::post('/royalty_calculate_data',[HomeController::class,'royalty_calculate_data']);
    Route::post('/mrp_calculate_data',[HomeController::class,'mrp_calculate_data']);

    /*Show All Page View Route*/
    Route::get('/about',[HomeController::class,'aboutUsPage']);
    Route::get('/ebook-publishing-packages',[HomeController::class,'e_bookPage']);
    Route::get('/paperback-publishing-packages',[HomeController::class,'paperBack']);
    Route::get('/services',[HomeController::class,'servicesPage']);
    Route::get('/book-editorial-services',[HomeController::class,'editorialServicesPage']);
    Route::get('/book-designing-services',[HomeController::class,'designingServices']);
    Route::get('/book-marketing-services',[HomeController::class,'marketingServices']);
    Route::get('/book-distribution-services',[HomeController::class,'distributionServices']);
    Route::get('/author-support',[HomeController::class,'authorSupport']);
    Route::get('/ebook-publisher-in-india',[HomeController::class,'ebookPublisher']);
    Route::get('/book-publisher-in-india',[HomeController::class,'bookPublisher']);
    Route::get('/career',[HomeController::class,'careerPage']);
    Route::get('/print-on-demand-book-publishing',[HomeController::class,'printOndemandPage']);
    Route::get('/faq',[HomeController::class,'faqPage']); 
    Route::get('/terms-and-condition',[HomeController::class,'termsAndCondition']);
    Route::get('/privacy-policy',[HomeController::class,'privacyPolicy']);
    Route::get('/legal-disclaimer',[HomeController::class,'legalDisclaimer']);
    Route::get('/refund-and-cancellation-policy',[HomeController::class,'refundAndCancellationPolicy']);
    Route::get('/book-stall',[HomeController::class,'bookStall']);
    Route::get('/bfc-lounge',[HomeController::class,'bfcLounge']);
    Route::get('/klf-sessions',[HomeController::class,'klfSessions']);
    Route::get('/gallery',[HomeController::class,'galleryPage']);
    Route::get('/process',[HomeController::class,'processPage']);
    Route::get('/why-us',[HomeController::class,'whyPage']);
    Route::get('/payment',[HomeController::class,'paymentPage']);
    Route::get('/paymentshow',[HomeController::class,'paymentshow']);
    Route::get('/thank-you',[HomeController::class,'aboutUsPage']);
    Route::get('/legal',[HomeController::class,'legal']);
    Route::get("/thank-you",[HomeController::class,'thankYouPage']);
    Route::get("/sessions-klf",[HomeController::class,'klfsession']);
    // Route::get('/payment_details',[HomeController::class,'payment_details']);
    // Route::post('/payment_save',[HomeController::class,'payment_save']);
    Route::get('/best-book-publisher-in-ahmedabad',[HomeController::class,'bookPubAhemdabad']);
    Route::get('/best-book-publisher-in-bhubaneswar',[HomeController::class,'bookPubBhubaneswar']);
    Route::get('/best-book-publisher-in-chennai',[HomeController::class,'bookPubChennai']);
    Route::get('/best-book-publisher-in-jaipur',[HomeController::class,'bookPubJaipur']);
    Route::get('/best-book-publisher-in-lucknow',[HomeController::class,'bookPubLucknow']);
    Route::get('/best-book-publisher-in-pune',[HomeController::class,'bookPubPune']);

    // Namrata's Code start from here

    Route::get('/best-book-publisher-in-bengaluru',[HomeController::class,'bookPubBengaluru']);
    Route::get('/best-book-publisher-in-bhopal',[HomeController::class,'bookPubBhopal']);
    Route::get('/best-book-publisher-in-chandigarh',[HomeController::class,'bookPubChandigarh']);
    Route::get('/best-book-publisher-in-dehradun',[HomeController::class,'bookPubDehradun']);
    Route::get('/best-book-publisher-in-delhi',[HomeController::class,'bookPubDelhi']);
    Route::get('/best-book-publisher-in-hyderabad',[HomeController::class,'bookPubHyderabad']);
    Route::get('/best-book-publisher-in-indore',[HomeController::class,'bookPubIndore']);
    Route::get('/best-book-publisher-in-kolkata',[HomeController::class,'bookPubKolkata']);
    Route::get('/best-book-publisher-in-mumbai',[HomeController::class,'bookPubMumbai']);
    Route::get('/best-book-publisher-in-noida',[HomeController::class,'bookPubNoida']);
    Route::get('/best-book-publisher-in-patna',[HomeController::class,'bookPubPatna']);
    Route::get('/DPDP_Act',[HomeController::class,'DPDP_Act']);
    Route::get('/shipping-and-delivery',[HomeController::class,'shippinganddelivery']);
    

    // Namrata's Code start from here

});
Route::get('/customize-package/{book_format}',[HomeController::class,'customize_package']);
Route::post('/save-leads', [HomeController::class, 'save_leads']);
Route::get('/standard-package/{package_id}/{book_format}/{service_id}',[HomeController::class,'standard_package']);
Route::get('/packagePayment',[HomeController::class,'packagePayment']);
Route::get('/packege-payment-callback',[HomeController::class,'packegePaymentCallback']);

Route::get('/payment_details',[PaymentController::class,'paymentDetailSavePub']);
Route::post('/create-payment', [PaymentController::class, 'createPayment']);
Route::get('payment-callback', [PaymentController::class, 'paymentCallback']);
