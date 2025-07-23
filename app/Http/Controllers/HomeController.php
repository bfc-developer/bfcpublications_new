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
