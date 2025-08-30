<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactUsEmail;
use App\Mail\ContactUsUserMail;
use App\Mail\HRcareerMail;
use App\Mail\UserCareerMail;
use App\Mail\PackageThanksMail;
use App\Mail\PublishingThanksMail;
use App\Models\Order;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use App\Mail\PackageConfirmation;

use Session;
use File;
use Validator;
use DB;
use PDF;

class HomeController extends Controller{
   
    public function index(){
        $data['title'] ='Self Book Publisher in India | Online Publishing | BFC Publications';

        $data['description'] = "BFC Publications - India leading Self Publisher. Our emphasis on quality has
        expeditiously propelled us as one of the most trusted online publishing houses";

        $data['keyword'] = "self publisher in india, how to publish a book in india, print on demand india, how to self publish, publishing a book in india, self publishing in india, book publishing india, how to self publish a book, publishing in india, publishing a book, book publishers in india, book publishing in india, online book publishing india, how to publish book in india, books publishers in india, publish a book in india, ebook publisher india";
        
        // $curl = curl_init();
        // curl_setopt($curl, CURLOPT_URL, "https://basicfundeclear.com/api/QissonKiKitab");
        // curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        // $output = curl_exec($curl);
        // $record=json_decode($output);
        // $data['bfccontent']=$record->data;

        $curls = curl_init();
        curl_setopt($curls, CURLOPT_URL, "https://admin.bookstore.bfcpublications.com/api/get_banner");
        curl_setopt($curls, CURLOPT_RETURNTRANSFER, 1);
        $outputs = curl_exec($curls);
        $records=json_decode($outputs);
        // $data['bookstore']=$records->data;
$data['bookstore']=NULL;

        $curls = curl_init();
        curl_setopt($curls, CURLOPT_URL, "https://bfcgroup.in/Backend_notification/prodcastApi");
        curl_setopt($curls, CURLOPT_RETURNTRANSFER, 1);
        $outputs = curl_exec($curls);
        $data['prodcastApi']=json_decode($outputs);
        //$data['prodcastApi']=$prodcastApi->data;

        // echo "<pre>";
        // print_r($data['prodcastApi']);
        // exit;

        return view('index',$data);
    }//end of function

    public function savePublishingModal(Request $request){
        $vallidat_arr = Validator::make($request->all(),[

            'name' => 'required',
            'email' => 'required',
            'mobileno' => 'required',
            'checkbox' => 'required',
        ]);
        if($vallidat_arr->passes()){

            $formdata['name'] = $request->name;
            $formdata['email'] = $request->email;
            $formdata['phone'] = $request->mobileno;
            $formdata['type'] = 1;

           
            Mail::to($request->email)->send(new PublishingThanksMail($formdata));
            $res = DB::table('refer_friends')->insertGetId($formdata);
            if($res){
                return ['status_code'=>200, 'message'=>'Submitted Successfully'];
            }else{
                return ['status_code'=>200, 'message'=>'Something Went Wrong'];
            }
        }
        return ['message'=>$vallidat_arr->errors()->all(),'status_code'=>301];  

    }//end of function

    public function savePaymentform(Request $request){

        $vallidat_arr = Validator::make($request->all(),[

            'name' => 'required',
            'email' => 'required',
            'mobile' => 'required',
            'checkbox' => 'required',
        ]);
        if($vallidat_arr->passes()){

            $formdata['name'] = $request->name;
            $formdata['email'] = $request->email;
            $formdata['phone'] = $request->mobile;
            $formdata['type'] = 2;

            $res = DB::table('refer_friends')->insertGetId($formdata);
            Mail::to($request->email)->send(new PackageThanksMail($formdata));

            if($res){
                return ['status_code'=>200, 'message'=>'Submitted Successfully'];
            }else{
                return ['status_code'=>200, 'message'=>'Something Went Wrong'];
            }
        }
        return ['message'=>$vallidat_arr->errors()->all(),'status_code'=>301]; 


    }//end of function

    public function ContactUsPage(){
        //$title = 'Contact Us';
        $data['title'] ="Contact Us";
        $data['description'] = "";
        $data['keyword'] = "";
        return view('contact',$data);
    }//End of function

    public function sendMailContactUs(Request $request){

        $validatedData = Validator::make($request->all(),[
            'inputname' => 'required',
            'inputemail' => 'required|email',
            'inputnumber' => 'required',
            'checkbox' => 'required',
        ]);

        if($validatedData->passes()){

            $formdata['name'] = $request->inputname;
            $formdata['email'] = $request->inputemail;
            $formdata['phone'] = $request->inputnumber;
            $formdata['type'] = 3;
            $formdata['user_id'] = 1;
            $formdata1['subject'] = $request->subject;
            $formdata1['message'] = $request->message;

            $res = DB::table('refer_friends')->insertGetId($formdata);
            
            Mail::to('support@bfcpublications.com')->send(new ContactUsEmail($formdata,$formdata1));
    
            $user = [
                'name' => $request->inputname
            ];
            $user_email = $request->inputemail;
            Mail::to($user_email)->send(new ContactUsUserMail($user));
            if($res){
                return ['status_code'=>200, 'message'=>'Submitted Successfully'];
            }else{
                return ['status_code'=>200, 'message'=>'Something Went Wrong'];
            }
        }
        return ['message'=>$validatedData->errors()->all(),'status_code'=>301];  

       

        // Return a success response
        return response()->json(['status_code'=>200,'message' => 'Submitted Successfully']);

    }//End of function

    function sendEmailToHRAndUser(Request $request){
        $validatedData = $request->validate([
            'inputname' => 'required',
            'inputEmail' => 'required|email',
            'inputnumber' => 'required',
            'inputPost' => 'required',
            'checkbox' => 'required',
            // 'resume_file' => 'required',
        ]);
        // Send email to HR
            $hrEmail = 'hrd@bfcpublications.com';
            $hrData = [
                'inputname' => $validatedData['inputname'],
                'inputEmail' => $validatedData['inputEmail'],
                'inputnumber' => $validatedData['inputnumber'],
                'inputPost' => $validatedData['inputPost'],
                // 'resume_file' => $validatedData['resume_file'],
            ];
            $path = public_path('uploads');
            $attachment = $request->file('file');

            $name = time().'.'.$attachment->getClientOriginalExtension();

            // create folder
            if(!File::exists($path)) {
                File::makeDirectory($path, $mode = 0777, true, true);
            }
            $attachment->move($path, $name);

            $filename = $path.'/'.$name;
            Mail::to($hrEmail)->send(new HRcareerMail($hrData,$filename));

            // Send email to the user
            $user_email = $request->inputEmail;
            $userData = [
                'inputname' => $validatedData['inputname'],
                'inputEmail' => $validatedData['inputEmail'],
                'inputnumber' => $validatedData['inputnumber'],
                'inputPost' => $validatedData['inputPost'],
                // 'resume_file' => $validatedData['resume_file'],
            ];
             Mail::to($user_email)->send(new UserCareerMail($userData));
             
        return response()->json(['status_code'=>200,'message' => 'Submitted Successfully']);

    }//End of Function

    public function royalty_calculator(){
        $data['title'] ='Book Royalty Calculator | Author Royalty Calculator ';

        $data['description'] = "Calculate Your Book Royalties Easily with BFC Publications Author Royalty Calculator. Evaluate your earnings on per book to get maximum royalty.";
        
        $data['keyword'] = "Book royalty calculator, Author Royalty calculator, Book cost calculator, Book earning calculator, Self Publisher in India, Publishing a Book in India, Self Publishing in India, Book Publishers in India, Book Publishing in India.";
        $data['book_size']=DB::table('tbl_booksize')->get();
        return view("royalty-calculator",$data);
       
    }//end of function
   
    public function royalty_calculate_data(Request $request){
   //print_r($_POST); die;
     $book_size=$request->book_size;
     $book_type=$request->book_type;
     $noofpage=$request->noofpage;
    
     $data_get = DB::table('tbl_pageroyaltiy')->where('book_size',$book_size)->get();
     //print_r($data_get); die;
     foreach ($data_get as $pageroyaltiys) {
    
        if ($noofpage >= $pageroyaltiys->page_start && $noofpage <= $pageroyaltiys->page_end) {
          //  echo 'sd0'; die;
          if ($book_size == $pageroyaltiys->book_size) {
              $book_rate=$pageroyaltiys->rate;
          }
        }
      }
     // echo $book_rate; die; 
      if($book_type=='1'){
        $data['production_cost'] = ($noofpage * $book_rate) + 4;
      }
      else{
        $data['production_cost'] = ($noofpage * $book_rate)+130;
      }
      
      $data['prodsubpercentage'] = ($data['production_cost'] * 10) / 100;
      $data['subsidisedPrice'] = $data['production_cost'] + $data['prodsubpercentage'];
      // old calulation  22 june 2023//
    // $data['recommendedPrice'] = $data['production_cost'] * 2.5;
      $data['recommendedPrice'] = $data['production_cost'] * 1.7; 
      $data['brfmrppercent']  = $data['recommendedPrice'] * 0.10;
    // $data['othermrppercent']  = $data['recommendedPrice'] * 0.50;
     $data['othermrppercent']  = $data['recommendedPrice'] * 0.31;
      $data['setbfcprice'] = $data['recommendedPrice'] - ($data['production_cost'] + $data['brfmrppercent']);
      $data['setohterprice'] = $data['recommendedPrice'] - ($data['production_cost'] + $data['othermrppercent']);
     // print_r($data); die;
      echo json_encode($data); die;
      
    }//end of function

    public function mrp_calculate_data(Request $request){
    
            // $book_size=$request->book_size;
            // $book_type=$request->book_type;
            // $noofpage=$request->noofpage;
            $mrp=$request->mrp;
            $production_cost=$request->production_cost;
           
             $data['prodsubpercentage'] = ($production_cost * 10) / 100;
             $data['subsidisedPrice'] = $production_cost + $data['prodsubpercentage'];
             $data['recommendedPrice'] = $production_cost * 1.70;
             $data['brfmrppercent']  = $mrp * 0.15;
             $data['othermrppercent']  = $mrp * 0.31;
             $data['setbfcprice'] = $mrp - ($production_cost + $data['brfmrppercent']);
             $data['setohterprice'] = $mrp - ($production_cost + $data['othermrppercent']) ;
             echo json_encode($data); die;
           
    }//End of Function


    public function aboutUsPage(){
        $data['title'] ='About BFC Publications: Best Self Book Publisher in India';

        $data['description'] = "Uncover the captivating journey of BFC Publications. Commitment to excellence and passion for Self Book Publishing . Experience the essence of Self Book Publisher in India.";
        
        $data['keyword'] = "Self Book Publisher, Book Publishing in India, Book Publishing House, Book Publishing Companies, Self Book Publishing in Lucknow, Publishing Houses in India, Publish Your Book,  Online Book Publishers, Self Publishing Companies in India, Publishing Companies in India, Publication Houses in India, Self Book Publishers in India, Book Publishing Services, Self Published Authors, Book Publishing Services, Self Publishing Book Companies.";
        return view('about', $data);
    }//End of function

    public function e_bookPage(){
        $data['title'] ='Ebook Publishing Packages - BFC Publications';

        $data['description'] = "Discover BFC Publications comprehensive ebook publishing packages, designed to make your book a success in the digital world.";
        
        $data['keyword'] = "ebook publishing packages , ebook publishing cost, ebook publisher in India, eBook Publisher, how to publish an ebook, ebook publishing, how to publish ebook on kindle, kindle self publishing, self publishing package, book publishing cost, online publishing package, Amazon kdp,";
        return view("ebookpackages", $data);
    }//End of function

    public function paperBack(){
        $data['title'] ='Paperback Publishing Packages - BFC Publications';

        $data['description'] = "Explore BFC Publications comprehensive paperback publishing packages for aspiring authors.";
        
        $data['keyword'] = "book publishing packages, publishing packages, self publishing packages, book marketing packages, book coaching packages, best self publishing packages, cheap self publishing packages, book launch package, cheap publishing packages, self publishing book packages
        ";
        return view("paperbackpackages", $data);
    }//End of function

    public function servicesPage(){
        $data['title'] ='Services';

        $data['description'] = "Find our services made just for you! Our team is here to help and make things awesome.";
        
        $data['keyword'] = "Author Support, Book publishing guide, Book publishing support, Online Book Promotions, Book Online Marketing, Book Design, Self Publisher in India, Publishing a Book in India, Self Publishing in India";

        return view("services", $data);
    }//End of function

    public function editorialServicesPage(){
        $data['title'] ='Book editing services India | Book editing and Proof Reading';

        $data['description'] = "BFC Publications provide one of the best book editing services in India. Let Our Editorial Services Transform Your Written Materials. Polish Your Content with our Top-Notch Editorial Solutions";
        
        $data['keyword'] = "Book Editing Services, Online editor, Proofreading services,  Self Publisher in India, Publishing a Book in India, Self Publishing in India, Book Publishers in India, Book Publishing in India, Books Publishers in India, Publish a Book in India, Ebook Publisher India";

        return view("editorial_services", $data);
    }//End of function

    public function designingServices(){
        $data['title'] ='Designing Services | Book Cover Designers | Book Cover Design in India';

        $data['description'] = "Designing Services: Get professional Book cover design. BFC Publications designers are experts in book cover design, get best cover design for your next best sellers.";
        
        $data['keyword'] = "Book cover designing, Book designing services, Book design, Self Publisher in India, Publishing a Book in India, Self Publishing in India, Book Publishers in India, Book Publishing in India, Books Publishers in India, Publish a Book in India, Ebook Publisher India";

        return view("designing_services", $data);
    }//End of function

    public function marketingServices(){
        $data['title'] ='Book Marketing Services - Success your Book with BFC Publications Services';

        $data['description'] = "Promotion of self-published books can be hard. Let BFC Publications do the book marketing and promotion for your book. Best book marketing services to make your book successful.";
        
        $data['keyword'] = "Book Marketing Services, Book Promotion services, Online book promotions, Book online marketing, Book design, Self Publisher in India, Publishing a Book in India, Self Publishing in India, Book Publishers in India, Book Publishing in India, Books Publishers in India, Publish a Book in India, Ebook Publisher India";
        return view("marketing_services", $data);
    }//End of function

    public function distributionServices(){
        $data['title'] ='Book Distribution Services in India - Online Book Distribution';

        $data['description'] = "Reach a Wider Audience with BFC Publications Expert Book Distribution Services.  Sell your book with Amazon, Flipkart, Kindle, and Google Play.";
        
        $data['keyword'] = "How to Publish on Amazon, Sell Book on Online, Kindle Book Publication, Book listing Services, Book Distribution Services, Online Book Promotions, Book Online Marketing, Book Design, Self Publisher in India, Publishing a Book in India, Self Publishing in India, Book Publishers in India, Book Publishing in India, Books Publishers in India, Publish a Book in India, Ebook Publisher India";
        return view("distribution_services", $data);
    }//End of function

    public function authorSupport(){
        $data['title'] ='Dedicated Author Support | Elevate Your Writing Journey';

        $data['description'] = "BFC Publications Expert Author Support Services. We assigned dedicated support to authors that make their publishing dreams viable throughout and hand-hold the entire journey.";
        
        $data['keyword'] = "Author Support, Book publishing guide, Book publishing support, Online Book Promotions, Book Online Marketing, Book Design, Self Publisher in India, Publishing a Book in India, Self Publishing in India";
        return view("author_support", $data);
    }//End of function

    public function ebookPublisher(){
        $data['title'] ='eBook Publisher In India | eBook Publication | eBook Publishing';

        $data['description'] = "Self publish your manuscript with the best ebook publisher in India and offer it for reading to readers across the globe.
        ";
        
        $data['keyword'] = "ebook publisher in India, eBook Publisher, how to publish an ebook, ebook publishing, how to publish ebook on kindle, kindle self publishing,ebook marketing, ebook distribution,
        ebook publishing platforms, ebook publications, Amazon kdp.";
        return view("ebook-publisher",$data);
    }//End of function

    public function bookPublisher(){
        $data['title'] ='Book Publisher in India|BFC Publications|Self Publishing Company';

        $data['description'] = "Book publisher in India. BFC Publications is your one-stop for all your publishing needs. We offers wide range of services: editing, design, printing and distribution.";
        
        $data['keyword'] = "self publishing companies, publishing companies, book publishers, publishing house, best self publishing companies, book publishing companies, book publisher, publishers, self publishing a book, self publishing in india, book publishers in india, publishing houses in india";
        return view("book-publisher", $data);
    }//End of function
    
    public function careerPage(){
        //$title = 'Career';
        $data['title'] ="Career";
        $data['description'] = "";
        $data['keyword'] = "";
        return view("career",$data);
    }//End of function

    public function printOndemandPage(){
        $data['title'] ='Print-on-Demand Book publishing | POD services';

        $data['description'] = "Print-on-Demand is a book printing service, wherein books are stored in an online database and copies are printed only on demand to reduce overhead costs.";
        
        $data['keyword'] = "Book POD Services, Print on demand Books, Print on demand publishing, Self Publisher in India, Publishing a Book in India, Self Publishing in India, Book Publishers in India, Book Publishing in India, Books Publishers in India, Publish a Book in India.";
        return view("print-on-demand",$data);
    }//End of function

    public function faqPage(){
        $data['title'] ="FAQ";
        $data['description'] = "";
        $data['keyword'] = "";
        return view("faqs",$data);
    }//End of function

    public function termsAndCondition(){
       // $title = 'Terms & Condition';
        $data['title'] ="Terms and Condition";
        $data['description'] = "";
        $data['keyword'] = "";
        return view("terms-and-condition",$data);
    }//End of function

    public function privacyPolicy(){
        $data['title'] ="Privacy-Policy";
        $data['description'] = "";
        $data['keyword'] = "";
       
        return view("privacy-policy",$data);
    }//End of function

    public function legalDisclaimer(){
        $data['title'] ="Legal-Disclaimer";
        $data['description'] = "";
        $data['keyword'] = "";
        //$title = 'Legal-Disclaimer';
        return view("legal-disclaimer",$data);
    }//End of function

    public function refundAndCancellationPolicy(){
     //   $title = 'Refund-And-Cancellation-Policy';
        $data['title'] ="Refund-And-Cancellation-Policy";
        $data['description'] = "";
        $data['keyword'] = "";
        return view("refund-and-cancellation-policy",$data);
    }//End of function

    public function bookStall(){
        $data['title'] ="Book_Stall";
        $data['description'] = "";
        $data['keyword'] = "";
        return view("book_stall",$data);
    }//End of function

    public function bfcLounge(){
        $data['title'] ="BFC-Lounge";
        $data['description'] = "";
        $data['keyword'] = "";
        return view("bfc_lounge",$data);
    }//End of function

    // public function klfSessions(){
    //     echo 'sd'; die;
    //     $title = 'KLF-Sessions';
    //     return view("klf_sessions", compact('title'));
    // }//End of function 
    public function klfsession(){
       // $title = 'KLF-Sessions';
        $data['title'] ="KLF-Sessions";
        $data['description'] = "";
        $data['keyword'] = "";
        return view("klf_sessions",$data);
    //End of function
    }
    public function galleryPage(){
        //$title = 'Gallery';
        $data['title'] ="Gallery";
        $data['description'] = "";
        $data['keyword'] = "";
        return view("gallery",$data);
    }//End of function

    public function processPage(){
       // $title = 'Process';
        $data['title'] ="Process";
        $data['description'] = "";
        $data['keyword'] = "";
        return view("process",$data);
    }//End of function

    public function paymentPage(){
        //$title = 'Payment';
        $data['title'] ="Payment";
        $data['description'] = "";
        $data['keyword'] = "";
        return view("payment",$data);
    }//End of function
    public function paymentShow(){
        //$title = 'Payment';
        $data['title'] ="Payment";
        $data['description'] = "";
        $data['keyword'] = "";
        return view("payment_page",$data);
    }//End of function

    public function whyPage(){
        //$title = 'Why-Us';
        $data['title'] ="Why-Us";
        $data['description'] = "";
        $data['keyword'] = "";
        return view("whyus",$data);
    }//End of function

    public function legal(){
        $data['title'] ="Legal";
        $data['description'] = "";
        $data['keyword'] = "";
        return view("legal",$data);
    }//End of function

    public function thankYouPage(){
        return view("thank_you");
    }//End of function
    public function payment_details(){
        $data['state'] = DB::table('states')->where('country_id','105')->get();
        return view("payment.payment",$data); 
    }
  //Functions for Book Publisher
  
  public function bookPubAhemdabad(){
    $data['title'] ="Best Book Publisher in Ahmedabad | Self Book Publishing Company";
    $data['description'] = "BFC Publications is a well-known book publisher in Ahmedabad, helping aspiring writers achieve their dream of making a name in the literary sector.";
    $data['keyword'] = "Best Book Publisher in Ahmedabad, Best Book Publisher in Ahmedabad, Self-book publisher in Ahmedabad, Book Publisher in Ahmedabad";
    return view("book-publisher.book-publisher-ahmedabad",$data);
}//End of function

public function bookPubBhubaneswar(){
    $data['title'] ='Best Book Publisher in Bhubaneswar | Self Book Publishing Company';

    $data['description'] = "BFC Publications is a well-known book publisher in  Bhubaneswar, helping aspiring writers achieve their dream of making a name in the literary sector.";
    
    $data['keyword'] = "Best Book Publisher in Bhubaneswar, Best Book Publisher in  Bhubaneswar, Self-book publisher in Bhubaneswar, Book Publisher in Bhubaneswar";
    return view("book-publisher.book-publisher-bhubaneswar",$data);
}//End of function

public function bookPubChennai(){
    $data['title'] ="Best Book Publisher in Chennai | Self Book Publishing Company";
    $data['description'] = "BFC Publications is a well-known book publisher in Chennai, helping aspiring writers achieve their dream of making a name in the literary sector.";
    $data['keyword'] = "Best Book Publisher in Chennai, Best Book Publisher in Chennai, Self-book publisher in Chennai, Book Publisher in  Chennai";
    return view("book-publisher.book-publisher-chennai",$data);
}//End of function

public function bookPubJaipur(){
    $data['title'] ="Best Book Publisher in Jaipur | Self Book Publishing Company";
    $data['description'] = "BFC Publications is a well-known book publisher in Jaipur, helping aspiring writers achieve their dream of making a name in the literary sector.";
    $data['keyword'] = "Best Book Publisher in Jaipur, Best Book Publisher in Jaipur, Self-book publisher in Jaipur, Book Publisher in Jaipur";
    return view("book-publisher.book-publisher-jaipur",$data);
}//End of function

public function bookPubLucknow(){
    $data['title'] ="Best Book Publisher in Lucknow | Self Book Publishing Company";
    $data['description'] = "BFC Publications is a well-known book publisher in Lucknow, helping aspiring writers achieve their dream of making a name in the literary sector.";
    $data['keyword'] = "Best Book Publisher in Lucknow, Best Book Publisher in Lucknow, Self-book publisher in Lucknow,Book Publisher in Lucknow";
   
    return view("book-publisher.book-publisher-lucknow",$data);
}//End of function

public function bookPubPune(){
    $data['title'] ="Best Book Publisher in Pune | Self Book Publishing Company";
    $data['description'] = "BFC Publications is a well-known book publisher in Pune, helping aspiring writers achieve their dream of making a name in the literary sector.";
    $data['keyword'] = "Best Book Publisher in Pune, Best Book Publisher in Pune, Self-book publisher in Pune, Book Publisher in Pune";
    return view("book-publisher.book-publisher-pune",$data);
}
//End of function
   //Namrata's Code Start From

   public function bookPubBengaluru(){
       
    $data['title'] ='Best Book Publisher in Bengaluru | Self Book Publishing Company';

    $data['description'] = "BFC Publications is a well-known book publisher in  Bengaluru, helping aspiring writers achieve their dream of making a name in the literary sector.";
    
    $data['keyword'] = "Best Book Publisher in Bengaluru, Best Book Publisher in  Bengaluru, Self-book publisher in Bengaluru, Book Publisher in Bengaluru";
    return view("book-publisher.book-publisher-bengaluru",$data);
}//End of function

public function bookPubBhopal(){
    $data['title'] ="Best Book Publisher in Bhopal | Self Book Publishing Company";
    $data['description'] = "BFC Publications is a well-known book publisher in Bhopal, helping aspiring writers achieve their dream of making a name in the literary sector.";
    $data['keyword'] = "Best Book Publisher in Bhopal, Best Book Publisher in Bhopal, Self-book publisher in Bhopal, Book Publisher in  Bhopal";
    return view("book-publisher.book-publisher-bhopal",$data);
}//End of function

public function bookPubChandigarh(){
    $data['title'] ="Best Book Publisher in Chandigarh | Self Book Publishing Company";
    $data['description'] = "BFC Publications is a well-known book publisher in Chandigarh, helping aspiring writers achieve their dream of making a name in the literary sector.";
    $data['keyword'] = "Best Book Publisher in Chandigarh, Best Book Publisher in Chandigarh, Self-book publisher in Chandigarh, Book Publisher in Chandigarh";
    return view("book-publisher.book-publisher-chandigarh",$data);
}//End of function

public function bookPubDehradun(){
    $data['title'] ="Best Book Publisher in Dehradun | Self Book Publishing Company";
    $data['description'] = "BFC Publications is a well-known book publisher in Dehradun, helping aspiring writers achieve their dream of making a name in the literary sector.";
    $data['keyword'] = "Best Book Publisher in Dehradun, Best Book Publisher in Dehradun, Self-book publisher in Dehradun,Book Publisher in Dehradun";
   
    return view("book-publisher.book-publisher-dehradun",$data);
}//End of function 
public function bookPubDelhi(){
    $data['title'] ='Best Book Publisher in Delhi | Self Book Publishing Company';

    $data['description'] = "BFC Publications is a well-known book publisher in  Delhi, helping aspiring writers achieve their dream of making a name in the literary sector.";
    
    $data['keyword'] = "Best Book Publisher in Delhi, Best Book Publisher in  Delhi, Self-book publisher in Delhi, Book Publisher in Delhi";
    return view("book-publisher.book-publisher-delhi",$data);
}//End of function

public function bookPubHyderabad(){
    $data['title'] ="Best Book Publisher in Hyderabad | Self Book Publishing Company";
    $data['description'] = "BFC Publications is a well-known book publisher in Hyderabad, helping aspiring writers achieve their dream of making a name in the literary sector.";
    $data['keyword'] = "Best Book Publisher in Hyderabad, Best Book Publisher in Hyderabad, Self-book publisher in Hyderabad, Book Publisher in  Hyderabad";
    return view("book-publisher.book-publisher-hyderabad",$data);
}//End of function

public function bookPubIndore(){
    $data['title'] ="Best Book Publisher in Jaipur | Self Book Publishing Company";
    $data['description'] = "BFC Publications is a well-known book publisher in Indore, helping aspiring writers achieve their dream of making a name in the literary sector.";
    $data['keyword'] = "Best Book Publisher in Indore, Best Book Publisher in Indore, Self-book publisher in Indore, Book Publisher in Indore";
    return view("book-publisher.book-publisher-indore",$data);
}//End of function

public function bookPubKolkata(){
    $data['title'] ="Best Book Publisher in Kolkata | Self Book Publishing Company";
    $data['description'] = "BFC Publications is a well-known book publisher in Kolkata, helping aspiring writers achieve their dream of making a name in the literary sector.";
    $data['keyword'] = "Best Book Publisher in Kolkata, Best Book Publisher in Kolkata, Self-book publisher in Kolkata,Book Publisher in Kolkata";
   
    return view("book-publisher.book-publisher-kolkata",$data);
}//End of function

public function bookPubMumbai(){
    $data['title'] ='Best Book Publisher in Mumbai | Self Book Publishing Company';

    $data['description'] = "BFC Publications is a well-known book publisher in  Mumbai, helping aspiring writers achieve their dream of making a name in the literary sector.";
    
    $data['keyword'] = "Best Book Publisher in Mumbai, Best Book Publisher in  Mumbai, Self-book publisher in Mumbai, Book Publisher in Bhubaneswar";
    return view("book-publisher.book-publisher-mumbai",$data);
}//End of function

public function bookPubNoida(){
    $data['title'] ="Best Book Publisher in Noida | Self Book Publishing Company";
    $data['description'] = "BFC Publications is a well-known book publisher in Noida, helping aspiring writers achieve their dream of making a name in the literary sector.";
    $data['keyword'] = "Best Book Publisher in Noida, Best Book Publisher in Noida, Self-book publisher in Noida, Book Publisher in  Noida";
    return view("book-publisher.book-publisher-noida",$data);
}//End of function

public function bookPubPatna(){
    $data['title'] ="Best Book Publisher in Patna | Self Book Publishing Company";
    $data['description'] = "BFC Publications is a well-known book publisher in Patna, helping aspiring writers achieve their dream of making a name in the literary sector.";
    $data['keyword'] = "Best Book Publisher in Patna, Best Book Publisher in Patna, Self-book publisher in Patna, Book Publisher in Patna";
    return view("book-publisher.book-publisher-patna",$data);
}//End of function

public function bookPubGuwahati(){
    $data['title'] ="Best book publishers in Guwahati | Self Book Publishing Company";
    $data['description'] = "BFC Publications is a well-known book publisher in Guwahati, helping aspiring writers achieve their dream of making a name in the literary sector.";
    $data['keyword'] = "Best book publishers in guwahati,Book publishing companies in guwahati,Top publishers for authors in guwahati,Self book publishing services in guwahati,Book Publisher in guwahati";
    return view("book-publisher.book-publisher-guwahati",$data);
}//End of function

public function bookPubKerala(){
    $data['title'] ="Best book publishers in Kerala | Self Book Publishing Company";
    $data['description'] = "BFC Publications is a well-known book publisher in Kerala, helping aspiring writers achieve their dream of making a name in the literary sector.";
    $data['keyword'] = "Best Book publishing companies in kerala,Book publishing companies in kerala,Top publishers for authors in kerala,Self book publishing services in kerala";
    return view("book-publisher.book-publisher-kerala",$data);
}//End of function


public function bookPubMeerut(){
    $data['title'] ="Best book publishers in Meerut | Self Book Publishing Company";
    $data['description'] = "BFC Publications is one of the best book publishers in meerut, helping aspiring authors publish their books and build a name in the literary field.";
    $data['keyword'] = "Best book publisher in meerut,Book publishing companies in meerut,Top publishers for authors in meerut,Self book publishing services in meerut,Book Publishing service in meerut";
    return view("book-publisher.book-publisher-meerut",$data);
}//End of function

public function bookPubBangalore(){
    $data['title'] ="Best Book Publisher in Bangalore | Self Book Publishing Company";
    $data['description'] = "BFC Publications is one of the best book publishers in Bangalore, helping aspiring writers turn their ideas into professionally published books.";
    $data['keyword'] = "Best Book publishing companies in bangalore,Book publishing companies in bangalore,Top publishers for authors in Bangalore,Self-publishing services in bangalore";
    return view("book-publisher.book-publisher-bangalore",$data);
}//End of function

public function bookPubNagpur(){
    $data['title'] ="Best Book Publisher in Nagpur | Self Book Publishing Company";
    $data['description'] = "BFC Publications is one of the best book publishers in Nagpur, helping aspiring authors publish their books and build a name in the literary field.";
    $data['keyword'] = "Best Book Publisher in nagpur,Book publishing companies in nagpur,Top publishers for authors in nagpur,Self book publishing services in nagpur,Book Publisher in nagpur";
    return view("book-publisher.book-publisher-nagpur",$data);
}//End of function

public function bookPubOdisha(){
    $data['title'] ="Best Book Publisher in Odisha | Self Book Publishing Company";
    $data['description'] = "BFC Publications ranks high among the best book publishers in Odisha, supporting writers across genres with end-to-end publishing solutions.";
    $data['keyword'] = "Best Book Publishers in Odisha,Book Publishers in Odisha,Book publishing companies in odisha,Top publishers for authors in odisha,Self book publishing services in odisha";

    return view("book-publisher.book-publisher-odisha",$data);
}//End of function 
public function bookPubPunjab(){
    $data['title'] ='Best Book Publisher in Punjab | Self Book Publishing Company';

    $data['description'] = "BFC Publications is one of the best book publishers in Punjab, helping aspiring authors publish their work and succeed in the literary world.";

    $data['keyword'] = "Best Book Publisher in Punjab,Book Publisher in Punjab,Book publishing companies in punjab,Top publishers for authors in punjab,Self book publishing services in punjab";
    return view("book-publisher.book-publisher-punjab",$data);
}//End of function

public function bookPubAndhraPradesh(){
    $data['title'] ="Best Book Publisher in Andhra Pradesh | Self Book Publishing Company";
    $data['description'] = "BFC Publications is one of the best book publishers in Andhra Pradesh, helping aspiring authors publish their books and shine in the literary world.";
    $data['keyword'] = "Best Book Publisher in andhra pradesh,Book Publisher in andhra pradesh,Book publishing companies in andhra pradesh,Top publishers for authors in andhra pradesh,Self book publishing services in andhra pradesh";
    return view("book-publisher.book-publisher-andhra-pradesh",$data);
}//End of function

public function bookPubMadhyaPradesh(){
    $data['title'] ="Best Book Publisher in Madhya Pradesh | Self Book Publishing Company";
    $data['description'] = "BFC Publications is one of the best book publishers in Madhya Pradesh, helping aspiring writers publish their work and build a successful author career.";
    $data['keyword'] = "Best Book Publisher in madhya pradesh,Book Publisher in madhya pradesh,Book publishing companies in madhya pradesh,Top publishers for authors in madhya pradesh,Self book publishing services in madhya pradesh";
    return view("book-publisher.book-publisher-madhya-pradesh",$data);
}//End of function

public function bookPubVijayawada(){
    $data['title'] ="Best Book Publisher in Vijayawada | Self Book Publishing Company";
    $data['description'] = "BFC Publications is one of the best book publishers in Vijayawada, helping aspiring authors publish their books and achieve success in the literary world.";
    $data['keyword'] = "Best Book Publisher in vijayawada,Book Publisher in vijayawada,Book publishing companies in vijayawada,Top publishers for authors in vijayawada,Self book publishing services in vijayawada";

    return view("book-publisher.book-publisher-vijayawada",$data);
}//End of function

public function bookPubDaryaganjDelhi(){
    $data['title'] ='Best Book Publisher in Daryaganj Delhi | Self Book Publishing Company';

    $data['description'] = "BFC Publications is one of the best book publishers in darya ganj delhi, helping aspiring authors publish their books and achieve success in the literary world.";

    $data['keyword'] = "Best Book Publisher in darya ganj delhi,Book Publisher in darya ganj delhi,Book publishing companies in darya ganj delhi,Top publishers for authors in darya ganj delhi,Self book publishing services in darya ganj delhi";
    return view("book-publisher.book-publisher-daryaganj-delhi",$data);
}//End of function

public function bookPubAssam(){
    $data['title'] ="Best Book Publisher in Assam | Self Book Publishing Company";
    $data['description'] = "BFC Publications is one of the best book publishers in Assam, helping aspiring writers publish their work and establish themselves in the literary world.";
    $data['keyword'] = "Best Book Publisher in assam,Book Publisher in assam,Book publishing companies in assam,Top publishers for authors in assam,Self book publishing services in assam";
    return view("book-publisher.book-publisher-assam",$data);
}//End of function

public function bookPubRanchi(){
    $data['title'] ="Best Book Publisher in Ranchi | Self Book Publishing Company";
    $data['description'] = "BFC Publications is one of the best book publishers in Ranchi, helping aspiring authors publish their books and achieve recognition in the literary world.";
    $data['keyword'] = "Best Book Publisher in ranchi,Book Publisher in ranchi,Book publishing companies in ranchi,Top publishers for authors in ranchi,Self book publishing services in ranchi,Self Book Publisher in Ranchi";
    return view("book-publisher.book-publisher-ranchi",$data);
}//End of function

public function bookPubTamilnadu(){
    $data['title'] ="Best book publishers in Tamil Nadu | Self Book Publishing Company";
    $data['description'] = "BFC Publications is one of the best book publishers in Tamilnadu, helping aspiring writers publish their work and establish their voice in the literary world.";
    $data['keyword'] = "Best Book Publisher in tamilnadu,Book Publisher in tamilnadu,Book publishing companies in tamilnadu,Top publishers for authors in tamilnadu,Self book publishing services in tamilnadu";
    return view("book-publisher.book-publisher-tamil-nadu",$data);
}//End of function

public function bookPubFaridabad(){
    $data['title'] ="Best book publishers in Faridabad | Self Book Publishing Company";
    $data['description'] = "BFC Publications is one of the best book publishers in Faridabad, helping aspiring writers publish their work and make a mark in the literary world.";
    $data['keyword'] = "Best Book Publisher in faridabad,Book Publisher in faridabad,Book publishing companies in faridabad,Top publishers for authors in faridabad,Self book publishing services in faridabad";
    return view("book-publisher.book-publisher-faridabad",$data);
}//End of function


public function bookPubJodhpur(){
    $data['title'] ="Best book publishers in Jodhpur | Self Book Publishing Company";
    $data['description'] = "BFC Publications is one of the best book publishers in Jodhpur, helping new and aspiring authors turn their ideas into professionally published books.";
    $data['keyword'] = "Best Book Publisher in jodhpur,Book Publisher in jodhpur,Book publishing companies in jodhpur,Top publishers for authors in jodhpur,Self book publishing services in jodhpur";
    return view("book-publisher.book-publisher-jodhpur",$data);
}//End of function

public function bookPubMadurai(){
    $data['title'] ="Best book publishers in Madurai | Self Book Publishing Company";
    $data['description'] = "BFC Publications is one of the best book publishers in Madurai, helping aspiring authors bring their stories to life through expert publishing support.";
    $data['keyword'] = "Madurai,Book Publisher in madurai,Book publishing companies in madurai,Top publishers for authors in madurai,Self book publishing services in madurai";
    return view("book-publisher.book-publisher-madurai",$data);
}//End of function
public function bookPubRaipur(){  
    $data['title'] ="Best book publishers in Raipur | Self Book Publishing Company";
    $data['description'] = "BFC Publications is one of the best book publishers in Raipur, helping aspiring authors publish their books and make their mark in the literary world.";
    $data['keyword'] = "Best Book Publisher in raipur,Book Publisher in raipur,Book publishing companies in raipur,Top publishers for authors in raipur,Self book publishing services in raipur";
    return view("book-publisher.book-publisher-raipur",$data);
}//End of function



   public function bookPubRajahmundry(){
       
    $data['title'] ='Best Book Publisher in Rajahmundry | Self Book Publishing Company';

    $data['description'] = "BFC Publications is one of the best book publishers in Rajahmundry, helping aspiring authors publish their work and grow in the literary world.";

    $data['keyword'] = "Best Book Publisher in rajahmundry,Book Publisher in rajahmundry,Book publishing companies in rajahmundry,Top publishers for authors in rajahmundry,Self book publishing services in rajahmundry";
    return view("book-publisher.book-publisher-rajahmundry",$data);
}//End of function

public function bookPubAgra(){
    $data['title'] ="Best Book Publisher in Agra | Self Book Publishing Company";
    $data['description'] = "BFC Publications is one of the best book publishers in Agra, helping aspiring authors turn their manuscripts into professionally published books.";
    $data['keyword'] = "Best Book Publisher in agra,Book Publisher in agra,Book publishing companies in agra,Top publishers for authors in agra,Self book publishing services in agra";
    return view("book-publisher.book-publisher-agra",$data);
}//End of function

public function bookPubAligarh(){
    $data['title'] ="Best Book Publisher in Aligarh | Self Book Publishing Company";
    $data['description'] = "BFC Publications is one of the best book publishers in Aligarh, helping authors publish their stories and achieve success in the literary world.";
    $data['keyword'] = "Best Book Publisher in aligarh,Book publishing companies in aligarh,Top publishers for authors in aligarh,Self book publishing services in aligarh,Book Publisher in aligarh";
    return view("book-publisher.book-publisher-aligarh",$data);
}//End of function

public function bookPubCalicut(){
    $data['title'] ="Best Book Publisher in Calicut | Self Book Publishing Company";
    $data['description'] = "BFC Publications stands among the best book publishers in calicut, offering complete publishing solutions for writers across genres.";
    $data['keyword'] = "Best Book Publisher in calicut,Book publishing companies in calicut,Top publishers for authors in calicut,Self book publishing services in calicut,Book Publisher in calicut";  

    return view("book-publisher.book-publisher-calicut",$data);
}//End of function
public function bookPubCoimbatore(){
    $data['title'] ='Best Book Publisher in Coimbatore | Self Book Publishing Company';

    $data['description'] = "BFC Publications stands among the best book publishers in Coimbatore, offering complete publishing solutions for writers across genres.";

    $data['keyword'] = "Best Book Publisher in  coimbatore,Book publishing companies in coimbatore,Top publishers for authors in coimbatore,Self book publishing services in coimbatore,Book Publisher in coimbatore";
    return view("book-publisher.book-publisher-coimbatore",$data);
}//End of function

public function bookPubCuttack(){
    $data['title'] ="Best Book Publisher in Cuttack | Self Book Publishing Company";
    $data['description'] = "Recognized as one of the best book publishers in Cuttack, BFC Publications supports authors with end-to-end publishing and promotional services.";
    $data['keyword'] = "Best Book Publisher in cuttack,Book publishing companies in cuttack,Top publishers for authors in cuttack,Self book publishing services in cuttack,Book Publisher in cuttack";
    return view("book-publisher.book-publisher-cuttack",$data);
}//End of function

public function bookPubDaryaganj(){
    $data['title'] ="Best Book Publisher in Daryaganj | Self Book Publishing Company";
    $data['description'] = "BFC Publications is one of the best book publishers in Daryaganj, providing expert guidance to aspiring authors on their publishing journey.";
    $data['keyword'] = "Best Book Publisher in daryaganj,Book publishing companies in daryaganj,Top publishers for authors in daryaganj,Self book publishing services in daryaganj,Book Publisher in daryaganj";
    return view("book-publisher.book-publisher-daryaganj",$data);
}//End of function

public function bookPubGhaziabad(){
    $data['title'] ="Best Book Publisher in Ghaziabad | Self Book Publishing Company";
    $data['description'] = "BFC Publications is a trusted name among the best book publishers in Ghaziabad, offering professional publishing support for new and experienced writers.";
    $data['keyword'] = "Book publishing companies in ghaziabad,Top publishers for authors in ghaziabad,Self book publishing services in ghaziabad,Book Publisher in ghaziabad";

    return view("book-publisher.book-publisher-ghaziabad",$data);
}//End of function

public function bookPubGoa(){
    $data['title'] ='Best Book Publisher in Goa | Self Book Publishing Company';

    $data['description'] = "Counted among the best book publishers in Goa, BFC Publications helps authors turn ideas into impactful books with global reach.";

    $data['keyword'] = "Best Book Publisher in goa,Book publishing companies in goa,Top publishers for authors in goa,Self book publishing services in goa,Book Publisher in goa";
    return view("book-publisher.book-publisher-goa",$data);
}//End of function

public function bookPubGujarat(){
    $data['title'] ="Best Book Publisher in Gujarat | Self Book Publishing Company";
    $data['description'] = "BFC Publications ranks among the best book publishers in Gujarat, delivering quality publishing services for fiction, non-fiction, and academic books.";
    $data['keyword'] = "Best Book Publisher in gujarat,Book publishing companies in gujarat,Top publishers for authors in gujarat,Self book publishing services in gujarat,Book Publisher in gujarat";
    return view("book-publisher.book-publisher-gujarat",$data);
}//End of function

public function bookPubGurgaon(){
    $data['title'] ="Best Book Publisher in Gurgaon | Self Book Publishing Company";
    $data['description'] = "Recognized among the best book publishers in Gurgaon, BFC Publications empowers writers with personalized publishing support and global distribution.";
    $data['keyword'] = "Best Book Publisher in gurgaon,Book publishing companies in gurgaon,Top publishers for authors in gurgaon,Self book publishing services in gurgaon,Book Publisher in gurgaon";
    return view("book-publisher.book-publisher-gurgaon",$data);
}//End of function

public function bookPubJalandhar(){
    $data['title'] ="Best book publishers in Jalandhar | Self Book Publishing Company";
    $data['description'] = "BFC Publications is one of the best book publishers in Jalandhar, committed to helping authors publish and promote their work effectively.";
    $data['keyword'] = "Best Book Publisher in jalandhar,Book publishing companies in jalandhar,Top publishers for authors in jalandhar,Self book publishing services in jalandhar,Book Publisher in jalandhar";
    return view("book-publisher.book-publisher-jalandhar",$data);
}//End of function

public function bookPubKanpur(){
    $data['title'] ="Best book publishers in Kanpur | Self Book Publishing Company";
    $data['description'] = "BFC Publications stands out among the best book publishers in Kanpur, offering expert publishing services to bring your story to life.";
    $data['keyword'] = "Best Book Publisher in kanpur,Book publishing companies in kanpur,Top publishers for authors in kanpur,Self book publishing services in kanpur,Book Publisher in kanpur";
    return view("book-publisher.book-publisher-kanpur",$data);
}//End of function


public function bookPubKarnataka(){
    $data['title'] ="Best book publishers in Karnataka | Self Book Publishing Company";
    $data['description'] = "BFC Publications is one of the best book publishers in Karnataka, offering end-to-end publishing services for writers across multiple genres.";
    $data['keyword'] = "Best Book Publisher in karnataka,Book publishing companies in karnataka,Top publishers for authors in karnataka,Self book publishing services in karnataka,Book Publisher in karnataka";
    return view("book-publisher.book-publisher-karnataka",$data);
}//End of function

public function bookPubKathmandu(){
    $data['title'] ="Best Book Publisher in Kathmandu | Self Book Publishing Company";
    $data['description'] = "Recognized as one of the best book publishers in Kathmandu, BFC Publications helps authors publish their books with global reach and professional quality.";
    $data['keyword'] = "Best Book Publisher in kathmandu,Book publishing companies in kathmandu,Top publishers for authors in kathmandu,Self book publishing services in kathmandu,Book Publisher in kathmandu";
    return view("book-publisher.book-publisher-kathmandu",$data);
}//End of function

public function bookPubKochi(){
    $data['title'] ="Best Book Publisher in Kochi | Self Book Publishing Company";
    $data['description'] = "BFC Publications stands among the best book publishers in Kochi, guiding authors from manuscript to market with expert publishing support.";
    $data['keyword'] = "Best Book Publisher in kochi,Book publishing companies in kochi,Top publishers for authors in kochi,Self book publishing services in kochi,Book Publisher in kochi";
    return view("book-publisher.book-publisher-kochi",$data);
}//End of function

public function bookPubKottayam(){
    $data['title'] ="Best Book Publisher in Kottayam | Self Book Publishing Company";
    $data['description'] = "BFC Publications is a leading name among the best book publishers in Kottayam, delivering quality publishing for both regional and English authors.";
    $data['keyword'] = "Best Book Publisher in kottayam,Book publishing companies in kottayam,Top publishers for authors in kottayam,Self book publishing services in kottayam,Book Publisher in kottayam";

    return view("book-publisher.book-publisher-kottayam",$data);
}//End of function
public function bookPubLudhiana(){
    $data['title'] ='Best Book Publisher in Ludhiana | Self Book Publishing Company';

    $data['description'] = "BFC Publications is one of the best book publishers in Ludhiana, empowering writers with full publishing support and professional guidance.";

    $data['keyword'] = "Best Book Publisher in ludhiana,Book publishing companies in ludhiana,Top publishers for authors in ludhiana,Self book publishing services in ludhiana,Book Publisher in ludhiana";
    return view("book-publisher.book-publisher-ludhiana",$data);
}//End of function

public function bookPubMaharashtra(){
    $data['title'] ="Best Book Publisher in Maharashtra | Self Book Publishing Company";
    $data['description'] = "Recognized among the best book publishers in Maharashtra, BFC Publications offers complete publishing services tailored to every author’s needs.";
    $data['keyword'] = "Best Book Publisher in maharashtra,Book publishing companies in maharashtra,Top publishers for authors in maharashtra,Self book publishing services in maharashtra,Book Publisher in maharashtra";
    return view("book-publisher.book-publisher-maharashtra",$data);
}//End of function

public function bookPubNashik(){
    $data['title'] ="Best Book Publisher in Nashik | Self Book Publishing Company";
    $data['description'] = "BFC Publications is one of the best book publishers in Nashik, providing professional publishing, editing, and distribution support to authors.";
    $data['keyword'] = "Best Book Publisher in nashik,Book publishing companies in nashik,Top publishers for authors in nashik,Self book publishing services in nashik,Book Publisher in nashik";
    return view("book-publisher.book-publisher-nashik",$data);
}//End of function

public function bookPubNewDelhi(){
    $data['title'] ="Best Book Publisher in New Delhi | Self Book Publishing Company";
    $data['description'] = "BFC Publications stands among the best book publishers in New Delhi, offering premium publishing services for authors at every stage of their journey.";
    $data['keyword'] = "Best Book Publisher in new delhi,Book publishing companies in new delhi,Top publishers for authors in new delhi,Self book publishing services in new delhi,Book Publisher in new delhi";

    return view("book-publisher.book-publisher-new-delhi",$data);
}//End of function

public function bookPubRajasthan(){
    $data['title'] ='Best Book Publisher in Rajasthan | Self Book Publishing Company';

    $data['description'] = "BFC Publications is a trusted name among the best book publishers in Rajasthan, supporting writers with quality publishing and marketing solutions.";

    $data['keyword'] = "Best Book Publisher in rajasthan,Book publishing companies in rajasthan,Top publishers for authors in rajasthan,Self book publishing services in rajasthan,Book Publisher in rajasthan";
    return view("book-publisher.book-publisher-rajasthan",$data);
}//End of function

public function bookPubSurat(){
    $data['title'] ="Best Book Publisher in Surat | Self Book Publishing Company";
    $data['description'] = "Recognized as one of the best book publishers in Surat, BFC Publications helps authors across genres publish and promote their books with confidence.";
    $data['keyword'] = "Best Book Publisher in surat,Book publishing companies in surat,Top publishers for authors in surat,Self book publishing services in surat,Book Publisher in surat";
    return view("book-publisher.book-publisher-surat",$data);
}//End of function

public function bookPubThrissur(){
    $data['title'] ="Best Book Publisher in Thrissur | Self Book Publishing Company";
    $data['description'] = "BFC Publications is one of the best book publishers in Thrissur, offering personalized support and publishing services to regional and English authors alike.";
    $data['keyword'] = "Best Book Publisher in thrissur,Book publishing companies in thrissur,Top publishers for authors in thrissur,Self book publishing services in thrissur,Book Publisher in thrissur";
    return view("book-publisher.book-publisher-thrissur",$data);
}//End of function

public function bookPubTrivandrum(){
    $data['title'] ="Best book publishers in Trivandrum | Self Book Publishing Company";
    $data['description'] = "Counted among the best book publishers in Trivandrum, BFC Publications provides expert guidance from editing to global book distribution.";
    $data['keyword'] = "Best Book Publisher in  trivandrum,Book publishing companies in  trivandrum,Top publishers for authors in  trivandrum,Self book publishing services in  trivandrum,Book Publisher in  trivandrum";
    return view("book-publisher.book-publisher-trivandrum",$data);
}//End of function

public function bookPubVadodara(){
    $data['title'] ="Best book publishers in Vadodara | Self Book Publishing Company";
    $data['description'] = "BFC Publications is one of the best book publishers in Vadodara, helping writers publish high-quality books with national and international reach.";
    $data['keyword'] = "Best Book Publisher in vadodara,Book publishing companies in vadodara,Top publishers for authors in vadodara,Self book publishing services in vadodara,Book Publisher in vadodara";
    return view("book-publisher.book-publisher-vadodara",$data);
}//End of function


public function bookPubVaranasi(){
    $data['title'] ="Best book publishers in Varanasi | Self Book Publishing Company";
    $data['description'] = "BFC Publications ranks among the best book publishers in Varanasi, offering end-to-end publishing support for authors of all backgrounds.";
    $data['keyword'] = "Best Book Publisher in varanasi,Book publishing companies in varanasi,Top publishers for authors in varanasi,Self book publishing services in varanasi,Book Publisher in varanasi";
    return view("book-publisher.book-publisher-varanasi",$data);
}//End of function

public function bookPubChhattisgarh(){
    $data['title'] ="Best book publishers in Chhattisgarh | Self Book Publishing Company";
    $data['description'] = "helping writers turn their ideas into professionally published books.";
    $data['keyword'] = "Best Book Publisher in chhattisgarh,Book publishing companies in chhattisgarh,Top publishers for authors in chhattisgarh,Self book publishing services in chhattisgarh,Book Publisher in chhattisgarh";
    return view("book-publisher.book-publisher-chhattisgarh",$data);
}//End of function












public function shippinganddelivery(){
     $data['title'] ="shipping-and-delivery";
    $data['description'] = "";
    $data['keyword'] = "";
    return view("shipping",$data);
}//End of function


public function DPDP_Act(){


    return view("DPDP_Act");
}//End of function

//Namrata's Code End

    public function payment_save()
    {
        //instantiate the class
        $order = new Order();
        //prepare the order details
        //NOTE: Prepare a route for returnUrl and notifyUrl (something like a webhook). However, if you have webhook setup in your cashfree dashboard, no need for notifyUrl. But if notifyUrl is set, it will be called instead.
        $od["orderId"] = "ORDER-".rand(1000,9999);
        $od["orderAmount"] = 25;
        $od["orderNote"] = "Payment_Description_here";
        $od["customerPhone"] = "your_mobile";
        $od["customerName"] = "your_name";
        $od["customerEmail"] = "your@email.com";
        $od["returnUrl"] = route('order.status');
        //call the create method
        $order->create($od);
        //get the payment link of this order for your customer
        $link = $order->getLink($od['orderId']);
        return redirect()->away($link->paymentLink);
    }
    public function payment_saveds(Request $request){
        $mode = "PROD"; 
        $name=$request->name;
        $email=$request->email;
        $mobileno=$request->mobileno;
       //$orderId1=request('orderId');
        $amount=$request->amount;
        $state=$request->state;
        $orderNote1=request('orderNote');
        $orderCurrency = 'INR';
        $notifyUrl = 'https://bfcpublications.com/paymentResponse';
        $returnUrl = 'https://bfcpublications.com/paymentResponse';
        $secretKey = "224701d6a17cdeb599b49c40bf54d0fda2b5d3d4";
        //$secretKey = "8baa20c2ad12fac79793950414e21a3d92934f0b";

        $postData = array( 
          "appId" => '733936538bd77bb9b19ec42f039337', 
          "orderId" => 'Bfc_Pub'.rand(10,10000), 
          "orderAmount" => $amount, 
          "orderCurrency" => $orderCurrency, 
         
          "customerName" => $name, 
          "customerPhone" => $mobileno, 
          "customerEmail" => $email,
          "returnUrl" => $returnUrl, 
          "notifyUrl" => $notifyUrl,
        );

            ksort($postData);
            $signatureData = "";
            foreach ($postData as $key => $value){
                $signatureData .= $key.$value;
            }
            $signature = hash_hmac('sha256', $signatureData, $secretKey,true);
            $postData['signature'] = base64_encode($signature);
           // print_r($postData); die;
            if ($mode == "PROD") {  
             //   echo 'gfgh'; die;
            $postData['url'] = "https://www.cashfree.com/checkout/post/submit";
            } else {   
            $postData['url'] = "https://test.cashfree.com/billpay/checkout/post/submit";
            }
    
        } 



    public function customize_package($book_format){

/*        $formdata['name'] ="Vivek Kumar";
        $formdata['email'] = "vivekkumarbfcinfotech@gmail.com";
        $formdata['phone'] = "904347548";
        $formdata['type'] = 2;

        $mail = Mail::to("vivekkumarbfcinfotech@gmail.com")->send(new PackageThanksMail($formdata));
        
        if( count(Mail::failures()) > 0 ) {

           echo "There was one or more failures. They were: <br />";

           foreach(Mail::failures() as $email_address) {
               echo " - $email_address <br />";
            }

        } else {
            echo "No errors, all sent successfully!";
        }

        exit();
        */
        $response = Http::post('https://admin.bookstore.bfcpublications.com/api/customizedPackage', [
            'package_id' => "2",
            'book_format' => $book_format,
            'service_id' => "6",
        ]);

        $data['service'] = $response->json();

        $response2 = Http::get('https://admin.bookstore.bfcpublications.com/api/get_states', []);

        $data['get_states'] = $response2->json();

        // return $data['get_states'];
        // exit;
        $data['title'] ="Customize Package";
        $data['description'] = "";
        $data['book_type'] = $book_format;
        $data['keyword'] = "";
        return view('customize_package',$data);
    }//End of function


    public function standard_package($package_id,$book_format,$service_id){

        $response = Http::post('https://admin.bookstore.bfcpublications.com/api/standardPackage', [
            'package_id' => $package_id,
            'book_format' => $book_format,
            'service_id' => $service_id,
        ]);

        $data['service'] = $response->json();


        $response2 = Http::get('https://admin.bookstore.bfcpublications.com/api/get_states', []);

        $data['get_states'] = $response2->json();
        // return $data['get_states'];
        // exit;
        $data['title'] ="Standard Package";
        $data['book_type'] = $book_format;
        $data['description'] = "";
        $data['keyword'] = "";

         // echo "<pre>";
         // print_r($data);
        return view('standard_package',$data);
    }

    public function save_leads(Request $request){
        
        $name =  $request->author_name;
        $email =  $request->email;
        $mobile =  $request->phonenumber;

        $APIURL = "https://api.cashfree.com/pg/orders";
        $order_id = 'order_' . rand(1111111111, 9999999999);
        $cust_id = 'cust_' . rand(1111111111, 9999999999);

        $userData = DB::connection('admin_bookstore_bfcpublications_com')->table('users')->where('email', $email)->first();

        if($userData){
            $password = $userData->password_save;
        }else{
            $response = Http::post('https://admin.bookstore.bfcpublications.com/api/register', [
                'name' => $name,
                'email' => $email,
                'mobile' => $mobile,
                'password' => "123456",
                'confirm_password' => "123456",
            ]);
            $data1 = $response->json();
            $password = "123456";
        }

        

        $data['name'] = $name;
        $data['email'] = $email;
        $data['mobile'] = $mobile;
        $data['password'] = $password;
        $data['adname'] = "bookstore";
        $data['assigned'] = '2';    
        $data['created_at'] = date('Y-m-d H:i:s');

        $data['no_of_page'] =   $request->no_page_1;
        $data['number_of_pages_1'] =   $request->no_page_1;
        $data['number_of_pages_2'] =   $request->no_page_2;
        $data['number_of_pages_3'] =   $request->no_page_3;

        $data['complimentry_copies'] =  $request->complimentary;
        $data['complimentary'] =  $request->complimentary;

        $data['packages_id'] =  $request->packages_id;
        $data['book_type'] =  $request->book_type;
        $data['msstatus'] =  $request->msstatus;
        $data['service_id'] =  $request->service_id;

        foreach ($request->sub_services as $key => $value) {

            $service_get= DB::connection('bfcgroup')->table('services_level_two')->where('id', $value)->first();

            $cart[] = $service_get?->services_level_nm_1; 
                
            $service_val = 'service_val_'.$value;

            if($request->$service_val){
                $servicen_nm = 'servicen_nm_'.$value;
                if($request->$servicen_nm =="Book Cover Type"){
                    $data['book_cover'] = $request->$service_val;
                }else if($request->$servicen_nm  =="Paper Type"){
                    $data['paper_type'] =$request->$service_val;
                }else if($request->$servicen_nm  =="Book Size"){
                    $data['book_size'] =$request->$service_val;
                }else if($request->$servicen_nm  =="Lamination"){
                    $data['lamination'] =$request->$service_val;
                }
            }
        }

        $data['service'] = implode(",", array_unique($cart));
        $data['sub_services'] =  implode(",", array_unique( $request->sub_services));
                
        $data['color_pages'] =  $request->color_pages;
        $data['color_pages_cost'] =  $request->color_pages_cost;
        $data['additionalPages']=$request->additionalPages;
        $data['add_cost_value'] = $request->add_cost_value;
        $data['bookSizeVal'] = $request->bookSizeVal;
        $data['book_rate'] = $request->book_rate;

        $data['package_value_final'] = $request->package_value_final;
        $data['package_value'] = $request->package_value;
        $data['discount'] = $request->discount;
        $data['cost_of_additional_copy'] = $request->cost_of_additional;
        $data['gross_amt'] = $request->gross_amt;
        $data['create_p_offer']= $request->create_p_offer;
        $data['gst'] = $request->gst;
        $data['packagecost'] = $request->package_cost;
        $data['first_packege_value'] = $request->package_cost;
        $data['payment_status'] = 1;
        $data['payment_int_status'] = $request->payment_int_status;

        if($data['payment_int_status'] =="full"){
            $data['book_amt'] = $request->book_amt;
            $data['first_int'] = "0";
            $data['final_int'] ="0";
        }else{
            $data['book_amt'] = $request->book_amt;
            $data['first_int'] = $request->first_int;
            $data['final_int'] = $request->final_int;
        }
                
        $data['state'] = $request->state;
        $data['book_amt_date'] = date('Y-m-d');

        $data['pack_create_date'] = date('Y-m-d_H-i');
        $data['order_id'] = $order_id;

        Session::put('data', $data);

        $curl = curl_init();
        $postData = json_encode([
            'order_id' => $order_id,
            'order_amount' => $request->book_amt,  
            'order_currency' => 'INR',
            'customer_details' => [
                'customer_id' => $cust_id,
                'customer_name' => $name,
                'customer_email' => $email,
                'customer_phone' =>$mobile ,
            ],
            'order_meta' => [
                'return_url' => url('packege-payment-callback') . '?order_id=' . $order_id,
                'notify_url' => url('payment-notify'), 
               'payment_methods' => 'cc,dc,upi,nb,emi'
            ]
        ]);
    
        curl_setopt_array($curl, [
            CURLOPT_URL => $APIURL,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HTTPHEADER => [
                'X-Client-Secret: 224701d6a17cdeb599b49c40bf54d0fda2b5d3d4',
                'X-Client-Id: 733936538bd77bb9b19ec42f039337',
                'Content-Type: application/json',
                'Accept: application/json',
                'x-api-version: 2022-01-01'
            ],
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => $postData,
        ]);
    
        $response = curl_exec($curl);
    
        if ($error = curl_error($curl)) {
            curl_close($curl);
            return response()->json(['error' => 'cURL error: ' . $error]);
        }
        curl_close($curl);
        $response_data = json_decode($response, true);
    
        if (json_last_error() === JSON_ERROR_NONE) {
            if (isset($response_data['payment_link'])) {
               
                // exit($response_data['payment_link']);
                return redirect($response_data['payment_link']);
            } else {
                exit("Payment link not found in the response.");
                //return redirect()->back()->with('error', 'Payment link not found in the response.');
            }
        } else {
            exit("Invalid JSON response from API.");
            //return redirect()->back()->with('error', 'Invalid JSON response from API.');
        }
    }

    public function packagePayment(){

        $APIURL = "https://api.cashfree.com/pg/orders";
        $order_id = 'order_' . rand(1111111111, 9999999999);
        $cust_id = 'cust_' . rand(1111111111, 9999999999);
        
    }

    public function packegePaymentCallback(Request $request){
        $order_id = $request->input('order_id');
        $value = Session::get('data');

           try {
                $client = new Client();
                $response = $client->request('POST', "https://api.cashfree.com/pg/orders/{$order_id}/payments", [
                    'headers' => [
                        'Accept' => 'application/json',
                        'x-api-version' => '2022-01-01',
                        'x-client-id' => '733936538bd77bb9b19ec42f039337',
                        'x-client-secret' => '224701d6a17cdeb599b49c40bf54d0fda2b5d3d4',
                    ]
                ]);
    
                $body = $response->getBody();
                $contents = json_decode($body->getContents(), true);

                if (!empty($contents) && is_array($contents) && isset($contents[0]['payment_status'])) {

                    $payment_status = $contents[0]['payment_status'];
                    $bank_reference = $contents[0]['bank_reference'];
                    $cf_payment_id = $contents[0]['cf_payment_id'];
                    $payment_time = $contents[0]['payment_time'];

                    $payment_message = ($payment_status === 'SUCCESS') ? 'Payment was successful.' : 'Payment failed.';
                    
                    if($payment_status === 'SUCCESS'){
                        // exit("hello");
                        $filename = str_replace(' ', '', $value['name']).".pdf";

                        $storeData = DB::connection('admin_bookstore_bfcpublications_com')->table('users')->where('email', $value['email'])->first();

                        if($storeData){
                            $password = $storeData->password_save;
                        }else{
                            $response = Http::post('https://admin.bookstore.bfcpublications.com/api/register', [
                                'name' => $value['name'],
                                'email' => $value['email'],
                                'mobile' => $value['mobile'],
                                'password' => "123456",
                                'confirm_password' => "123456",
                            ]);
                            $data1 = $response->json();
                            $password = "123456";
                        }

                        $leads = DB::connection('bfcgroup')->table('tblleads')->select('id')->where('email',$value['email'])->first();
                        
                        $userData = DB::connection('admin_bookstore_bfcpublications_com')->table('users')->where('email', $value['email'])->first();

                        if(empty($leads)){
                            $dd = array('assigned' => "2",'lead_created_date' =>date('Y-m-d H:i:s'),'email' => $value['email'],'lead_adname' => "bookstore",'lead_author_msstatus' => $value['msstatus'],'lead_author_name' => $value['name'],'phonenumber' => $value['mobile'],'lead_new'=>4,'designation'=>'','data_source'=>'','calling_objective'=>'','source'=>"0",'addedfrom'=>'1','user_email'=>$value['email'],'user_password'=>$password);

                            DB::connection('bfcgroup')->table('tblleads')->insert($dd);
                            $leads_id = DB::connection('bfcgroup')->getPdo()->lastInsertId();
                            $package_type =1;
                        }else{
                            $package_type =3;
                            $leads_id = $leads->id;                            
                        }

                        $start_date =date('Y-m-01');
                        $currentdate = date('Y-m-d');
                        $pm_assign = DB::connection('bfcgroup')->table('tbl_pm_assign')->where('start_date','>=',$start_date)->first();

                        $pm_assign_email = DB::connection('bfcgroup')->table('tbl_rediff_userinfo')->where('staffid',$pm_assign->pm_id)->first();

                        // echo $leads_id; exit;

                        $value['create_lead_id']=$leads_id;
                        $value['category_id'] = 39;
                        $value['booking_amt_pay'] = $value['book_amt'];
                        $value['acquired_date'] = date('Y-m-d');
                        $value['pdf_data'] = $filename;
                        $value['pack_create_date'] = date('Y-m-d H-i-s');
                        $value['author_send_mail'] = 1;
                        $value['createPackEmailDate'] = date('Y-m-d H-i-s');
                        $value['approvePackage'] = 1;
                        $value['approvePackageDate'] = date('Y-m-d H-i-s');
                                
                        $value['pm_project_status'] = 1;
                        $value['pm_assigned_id'] = $pm_assign->pm_id;
                        $value['pm_assign_date'] = $currentdate;

                        $name =  $value['name'];
                        $email =  $value['email'];
                        $mobile =  $value['mobile'];
                        $order_id =  $value['order_id'];

                        unset($value['name']); 
                        unset($value['email']);
                        unset($value['password']);
                        unset($value['mobile']);
                        unset($value['order_id']);

                        $pdf = PDF::loadView('pdf/packagePdf', $value);
                        $pdfContent = $pdf->output();               
                        $localPath = storage_path('demo/' . $filename);
                        file_put_contents($localPath, $pdfContent);

                        DB::connection('bfcgroup')->table('create_package_leads')->insert($value);
                        $create_leads_id = DB::connection('bfcgroup')->getPdo()->lastInsertId();

                        $mail =Mail::to($email)->cc([$pm_assign_email->email_id,'projectcoordinator@bfcpublications.com'])->send(new PackageConfirmation($name,$localPath));

                        $dd['orderNo'] = $order_id;
                        $dd['transaction_id'] = $cf_payment_id;
                        $dd['payment_status'] = $payment_status;
                        $dd['lead_id'] =1;
                        $dd['amount'] = $value['book_amt'];
                        $dd['packages'] = $value['packages_id'];
                        $dd['orderDate'] = $currentdate;
                        $dd['email'] = $email;
                        $dd['name'] = $name;
                        $dd['mobileNo'] = $mobile;

                        DB::connection('bfcgroup')->table('tbl_appPackege_payment')->insert($dd);

                        try {
                            $response = $client->post('https://bfcgroup.in/admin/Asf_new_controller/demopdf', [
                                'multipart' => [
                                    [
                                        'name' => 'file',
                                        'contents' => fopen($localPath, 'r'),
                                        'filename' => $filename,
                                    ],
                                ],
                            ]);

                            if ($response->getStatusCode() == 200) {
                                
                                Storage::delete($filename);
                                return view('payment/payment-status', [
                                    'order_id' => $order_id,
                                    'payment_status' => $payment_status,
                                    'payment_message' => $payment_message,
                                    'order_amount' =>  $value['book_amt'],
                                ]);
                                // return response()->json(['message' => 'Payment succesfull'], 200);
                            } else {
                                return response()->json(['message' => 'Payment succesfull and PDF upload failed', 'details' => $response->getBody()->getContents()], $response->getStatusCode());
                            }
                        } catch (\Exception $e) {
                             return response()->json(['message' => 'Payment succesfull and PDF upload failed', 'error' => $e->getMessage()], 500);
                        }

                    }else{
                        return view('payment/payment-status', [
                            'order_id' => $order_id,
                            'payment_status' => $payment_status,
                            'payment_message' => $payment_message,
                        ]);
                    }
    
                   
                } else {
                    return view('payment/payment-status', [
                        'order_id' => $order_id,
                        'payment_status' => 'UNKNOWN',
                        'payment_message' => 'Payment status could not be determined.',
                    ]);
                }
            } catch (\Exception $e) {
                return view('payment/payment-status', [
                    'order_id' => $order_id,
                    'payment_status' => 'ERROR',
                    'payment_message' => 'An error occurred: ' . $e->getMessage(),
                ]);
            }
    }

}//End of Class
