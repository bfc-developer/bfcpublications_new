<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckUnnecessaryURLs
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
         // Define an array of allowed URLs
         $allowedURLs = [
            '/save_data',
            '/save_payment_details',
            '/send_contact_us_mail',
            '/send_mail_hr_user',
            '/contact',
            '/send_contact_us_mail',
            '/royalty-calculator',
            '/royalty_calculate_data',
            '/mrp_calculate_data',
            '/about',
            '/ebook-publishing-packages',
            '/paperback-publishing-packages',
            '/services',
            '/book-editorial-services',
            '/book-designing-services',
            '/book-marketing-services',
            '/book-distribution-services',
            '/author-support',
            '/ebook-publisher-in-india',
            '/book-publisher-in-india',
            '/career',
            '/print-on-demand-book-publishing',
            '/faq',
            '/terms-and-condition',
            '/privacy-policy',
            '/legal-disclaimer',
            '/refund-and-cancellation-policy',
            '/book-stall',
            '/bfc-lounge',
            '/gallery',
            '/process',
            '/why-us',
            '/payment',
            '/paymentshow',
            '/legal',
            '/thank-you',
            '/sessions-klf',
            '/best-book-publisher-in-ahmedabad',
            '/best-book-publisher-in-bhubaneswar',
            '/best-book-publisher-in-chennai',
            '/best-book-publisher-in-jaipur',
            '/best-book-publisher-in-lucknow',
            '/best-book-publisher-in-pune',
            '/best-book-publisher-in-bengaluru',
            '/best-book-publisher-in-bhopal',
            '/best-book-publisher-in-chandigarh',
            '/best-book-publisher-in-dehradun',
            '/best-book-publisher-in-delhi',
            '/best-book-publisher-in-hyderabad',
            '/best-book-publisher-in-indore', 
            '/best-book-publisher-in-kolkata',
            '/best-book-publisher-in-mumbai',
            '/best-book-publisher-in-noida',
            '/best-book-publisher-in-patna', 
            '/DPDP_Act',
            '/payment_details',
            '/shipping-and-delivery',
            '/customize-package/{book_format}',
        ];
   
        // Get the requested URL
        $requestedURL = $request->getRequestUri();

        // Check if the requested URL is not in the allowed list
        if (!in_array($requestedURL, $allowedURLs)) {
            // If the URL is not allowed, you can redirect to the home page or show an error page
            return redirect('/')->with('error', 'Unauthorized Access');
            // Alternatively, you can abort the request with a 403 Forbidden error
            //abort(403, 'Unauthorized Access');
        }

        // If the requested URL is allowed, proceed with the request
        return $next($request);
    }
}
