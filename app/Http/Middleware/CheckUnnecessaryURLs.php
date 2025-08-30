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
            '/best-book-publisher-in-guwahati',
            '/best-book-publisher-in-kerala',
            '/best-book-publisher-in-meerut',
            '/best-book-publisher-in-bangalore',
            '/best-book-publisher-in-nagpur',
            '/best-book-publisher-in-odisha',
            '/best-book-publisher-in-punjab',
            '/best-book-publisher-in-andhra-pradesh',
            '/best-book-publisher-in-madhya-pradesh',
            '/best-book-publisher-in-vijayawada',
            '/best-book-publisher-in-daryaganjdelhi',
            '/best-book-publisher-in-assam',
            '/best-book-publisher-in-ranchi',
            '/best-book-publisher-in-tamilnadu',
            '/best-book-publisher-in-faridabad',
            '/best-book-publisher-in-jodhpur',
            '/best-book-publisher-in-madurai',
            '/best-book-publisher-in-raipur',
            '/best-book-publisher-in-rajahmundry',
            '/best-book-publisher-in-agra',
            '/best-book-publisher-in-aligarh',
            '/best-book-publisher-in-calicut',
            '/best-book-publisher-in-coimbatore',
            '/best-book-publisher-in-cuttack',
            '/best-book-publisher-in-daryaganj',
            '/best-book-publisher-in-ghaziabad',
            '/best-book-publisher-in-goa',
            '/best-book-publisher-in-gujarat',
            '/best-book-publisher-in-gurgaon',
            '/best-book-publisher-in-jalandhar',
            '/best-book-publisher-in-kanpur',
            '/best-book-publisher-in-karnataka',
            '/best-book-publisher-in-kathmandu',
            '/best-book-publisher-in-kochi',
            '/best-book-publisher-in-kottayam',
            '/best-book-publisher-in-ludhiana',
            '/best-book-publisher-in-maharashtra',
            '/best-book-publisher-in-nashik',
            '/best-book-publisher-in-new-delhi',
            '/best-book-publisher-in-rajasthan',
            '/best-book-publisher-in-surat',
            '/best-book-publisher-in-thrissur',
            '/best-book-publisher-in-trivandrum',
            '/best-book-publisher-in-vadodara',
            '/best-book-publisher-in-varanasi',
            '/best-book-publisher-in-chhattisgarh',

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
