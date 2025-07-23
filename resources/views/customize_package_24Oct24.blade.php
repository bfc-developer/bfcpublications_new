@extends('layout.template')
@section('extern-css')
    <title>{{ $title }}</title>
    <link rel="canonical" href="https://bfcpublications.com/book-designing-services">
@endsection
@section('content')
<style type="text/css">
   body {
   font-family: 'Poppins', sans-serif;
   }
   .error {
   color: red;
   }
   .form-data {
   height: 500px;
   overflow-y: scroll;
   overflow-x: hidden;
   }
   ._buttons .btn:hover {
   color: #f44556 !important;
   }
   .fw-600 {
   font-weight: 600;
   }
   #checkout .form-check-input:checked {
   background-color: #f44556;
   border-color: #f44556;
   }
   #checkout .box {
   box-shadow: rgba(0, 0, 0, 0.18) 0px 2px 4px;
   padding: 13px;
   border-radius: 10px;
   }
   .custom-pack .form-control {
   box-shadow: rgba(0, 0, 0, 0.12) 0px 1px 3px, rgba(0, 0, 0, 0.24) 0px 1px 2px;
   border-color: #fff !important;
   }
   #isbn-allocation,
   #marketing-s,
   #sales-s,
   #author-s,
   #book-s,
   #e-book-s,
   #checkout {
   display: none;
   }
   select {
   border: unset;
   /* Style */
   width: 100%;
   max-width: 400px;
   padding: 0.75rem;
   border: 1px solid rgba(0, 0, 0, 0.1);
   /* Arrow */
   appearance: none;
   background-image: url("data:image/svg+xml;charset=US-ASCII,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%22292.4%22%20height%3D%22292.4%22%3E%3Cpath%20fill%3D%22%23131313%22%20d%3D%22M287%2069.4a17.6%2017.6%200%200%200-13-5.4H18.4c-5%200-9.3%201.8-12.9%205.4A17.6%2017.6%200%200%200%200%2082.2c0%205%201.8%209.3%205.4%2012.9l128%20127.9c3.6%203.6%207.8%205.4%2012.8%205.4s9.2-1.8%2012.8-5.4L287%2095c3.5-3.5%205.4-7.8%205.4-12.8%200-5-1.9-9.2-5.5-12.8z%22%2F%3E%3C%2Fsvg%3E");
   background-repeat: no-repeat;
   background-position: right 0.7rem top 50%;
   background-size: 0.65rem auto;
   }
   label,
   .control-label {
   font-weight: 500;
   font-size: 15px;
   color: #000000;
   margin-bottom: 7px;
   }
   .panel_s .panel-body {
   background: #ffffff;
   border: 1px solid #dce1ef;
   border-radius: 16px;
   padding: 25px 25px;
   position: relative;
   }
   .btn {
   padding: 10px 40px;
   font-size: 14px;
   font-weight: 600;
   border-radius: 5px;
   background: #F06D70;
   box-shadow: rgb(0 0 0 / 35%) 0px 5px 15px;
   border: none;
   color: #fff;
   }
   .btn.focus,
   .btn:focus,
   .btn:hover {
   color: #fff !important;
   text-decoration: none;
   box-shadow: rgb(0 0 0 / 35%) 0px 5px 15px !important;
   }
   .bg-color {
   background: #F06D70;
   margin: 30px 0;
   }
   .heading h2 {
   margin-top: 0px;
   margin-bottom: 0px;
   font-size: 24px;
   padding: 8px 0;
   color: #fff;
   }
   #progressbar li {
   list-style-type: none;
   font-size: 11px;
   width: 14%;
   position: relative;
   font-weight: 400;
   float: left;
   }
   #progressbar .active {
   color: #13b1a2;
   }
   #progressbar {
   overflow: hidden;
   color: #b1b1b1;
   }
   #progressbar #editorial:before {
   font-family: FontAwesome;
   content: "1";
   }
   #progressbar #isbn:before {
   font-family: FontAwesome;
   content: "2";
   }
   #progressbar #marketing:before {
   font-family: FontAwesome;
   content: "3";
   }
   .form-check-input
   {
   cursor: pointer;
   }
   #progressbar #sales:before {
   font-family: FontAwesome;
   content: "4";
   }
   #progressbar #author:before {
   font-family: FontAwesome;
   content: "5";
   }
   #progressbar #book:before {
   font-family: FontAwesome;
   content: "6";
   }
   #progressbar #e-book:before {
   font-family: FontAwesome;
   content: "7";
   }
   #progressbar li.active:before,
   #progressbar li.active:after {
   background: #13b1a2;
   }
   #progressbar li:after {
   content: '';
   width: 100%;
   height: 2px;
   background: lightgray;
   position: absolute;
   left: 0;
   top: 18px;
   z-index: 0;
   }
   #progressbar li:before {
   width: 35px;
   height: 35px;
   line-height: 36px;
   display: block;
   font-size: 18px;
   color: #ffffff;
   background: lightgray;
   border-radius: 50%;
   margin: 0 auto 10px auto;
   padding: 2px;
   position: relative;
   z-index: 1;
   }
   .btn-info:hover {
   color: #ffffff;
   background-color: #F06D70;
   border-color: #F06D70;
   }
   .btn:focus {
   outline: none;
   }
   #bank-details,
   #book-details,
   #cover-details {
   display: none;
   }
   .personalHeading {
   color: red;
   }
   .pt-20 {
   padding-top: 20px;
   }
   .pt-30 {
   padding-top: 30px;
   }
   .pt-40 {
   padding-top: 40px;
   }
   .pb-20 {
   padding-bottom: 20px;
   }
   .pb-30 {
   padding-bottom: 30px;
   }
   .pb-40 {
   padding-bottom: 40px;
   }
   .responsive-traking-fields {
   padding-left: 0px;
   }
   @media only screen and (max-width: 768px) {
   #progressbar li {
   font-size: 6px;
   }
   .img-bfcbrand-logo {
   width: 90%;
   }
   #progressbar li:before {
   width: 26px;
   height: 26px;
   line-height: 24px;
   font-size: 14px;
   }
   .form-data {
   padding: 10px;
   }
   .panel_s .panel-body {   
   padding: 25px 6px;
   }
   #progressbar li:after {   
   top: 13px;
   }
   .personalHeading {
   width: 100% !important;
   color: red;
   font-size: 18px;
   }
   .provideHeading {
   font-size: 19px;
   }
   }
   @media only screen and (max-width: 600px) {
   .main-top-responsive-update {
   padding-left: 0px;
   padding-right: 0px;
   }
   }
   /* button */
   .checkbox-wrapper-3 input[type="checkbox"] {
   visibility: hidden;
   display: none;
   }
   .checkbox-wrapper-3 .toggle {
   position: relative;
   display: block;
   width: 40px;
   height: 20px;
   cursor: pointer;
   -webkit-tap-highlight-color: transparent;
   transform: translate3d(0, 0, 0);
   }
   .checkbox-wrapper-3 .toggle:before {
   content: "";
   position: relative;
   top: 3px;
   left: 3px;
   width: 34px;
   height: 14px;
   display: block;
   background: #9A9999;
   border-radius: 8px;
   transition: background 0.2s ease;
   }
   .checkbox-wrapper-3 .toggle span {
   position: absolute;
   top: 0;
   left: 0;
   width: 20px;
   height: 20px;
   display: block;
   background: white;
   border-radius: 10px;
   box-shadow: 0 3px 8px rgba(154, 153, 153, 0.5);
   transition: all 0.2s ease;
   }
   .checkbox-wrapper-3 .toggle span:before {
   content: "";
   position: absolute;
   display: block;
   margin: -18px;
   width: 56px;
   height: 56px;
   background: rgba(79, 46, 220, 0.5);
   border-radius: 50%;
   transform: scale(0);
   opacity: 1;
   pointer-events: none;
   }
   .checkbox-wrapper-3 #cbx-3:checked+.toggle:before {
   background: #f44556a1;
   }
   .checkbox-wrapper-3 #cbx-3:checked+.toggle span {
   background: #f44556;
   transform: translateX(20px);
   transition: all 0.2s cubic-bezier(0.8, 0.4, 0.3, 1.25), background 0.15s ease;
   box-shadow: 0 3px 8px rgba(79, 46, 220, 0.2);
   }
   .checkbox-wrapper-3 #cbx-3:checked+.toggle span:before {
   transform: scale(1);
   opacity: 0;
   transition: all 0.4s ease;
   }
   .text-redh
   {
    color:#f44556;
   }
</style>
<nav aria-label="breadcrumb">
   <ol class="breadcrumb px-4 py-2">
      <li class="breadcrumb-item"><a class="text-red-c" href="{{ url('/') }}"><i class="fa fa-home"></i></a></li>
      <li class="breadcrumb-item active fs-6 " aria-current="page">customize package</li>
   </ol>
</nav>
<!-- start -->
<div class="content custom-pack mb-5">
   <div class="container main-top-responsive-update">
      <div class="row">
         <div class="col-md-12">
            <div class="panel-body my-5" >
               <div class="panel_s">
                  <div class="panel-body" >
                     <div class="_buttons">
                        <div class="row">
                           <div class="col-md-12 text-center">
                              <ul id="progressbar" class="text-center mb-4 responsive-traking-fields">
                                 <li class="active" id="editorial"><strong>Editorial Services</strong></li>
                                 <li id="isbn"><strong>ISBN Allocation</strong></li>
                                 <li id="marketing"><strong>Marketing your Masterpiece</strong></li>
                                 <li id="sales"><strong>Sales Report & Profit</strong></li>
                                 <li id="author"><strong>Author Support Services</strong></li>
                                 <li id="book"><strong>Book Specifications</strong></li>
                                 <li id="e-book"><strong>E Book Creation & Distribution</strong></li>
                                 
                              </ul>
                              <hr>
                           </div>
                        </div>
                        <!-- ==================  editorial-services Start ========================== -->
                        <form action="https://bfcgroup.in/admin/asf_new_controller/save_data" method="post"
                           id="asf_form" enctype="multipart/form-data">
                           <div class="form-data">
                              <section id="editorial-services">
                                 <div class="row justify-content-center">
                                    <div class="col-md-4">
                                       <div class="form-group" app-field-wrapper="email">
                                          <label for="email" class="control-label">Cover Design</label> <span
                                             style="color:red;">*</span>
                                          <select id="city" name="city" class="form-control" required>
                                             <option value="">Select</option>
                                          </select>
                                       </div>
                                    </div>
                                 </div>
                                 <hr>
                                 <div class="row justify-content-center mt-3">
                                    <div class="col-md-2">
                                       <div class="form-group" app-field-wrapper="Pin Code">
                                          <label for="Pin Code" class="control-label">No of pages</label>
                                          <span style="color:red;">*</span>
                                          <input type="number" id="pincode" name="pincode"
                                             class="form-control" value="" required>
                                          <span style="color:red;" id="error_pincode"></span>
                                       </div>
                                    </div>
                                    <div class="col-md-2 align-self-center mt-4">
                                       <div class="form-check">
                                          <input class="form-check-input" type="checkbox" value=""
                                             id="flexCheckDefault">
                                          <label class="form-check-label" for="flexCheckDefault">
                                          Proof Reading
                                          </label>
                                       </div>
                                    </div>
                                    <div class="col-md-2 align-self-center mt-4">
                                       <div class="form-check">
                                          <input class="form-check-input" type="checkbox" value=""
                                             id="flexCheckDefault">
                                          <label class="form-check-label" for="flexCheckDefault">
                                          Proof Reading
                                          </label>
                                       </div>
                                    </div>
                                 </div>
                                 <hr>
                                 <div class="row justify-content-center mt-3">
                                    <div class="col-md-2">
                                       <div class="form-group" app-field-wrapper="Pin Code">
                                          <label for="Pin Code" class="control-label">No of pages</label>
                                          <span style="color:red;">*</span>
                                          <input type="number" id="pincode" name="pincode"
                                             class="form-control" value="" required>
                                          <span style="color:red;" id="error_pincode"></span>
                                       </div>
                                    </div>
                                    <div class="col-md-2 align-self-center mt-4">
                                       <div class="form-check">
                                          <input class="form-check-input" type="checkbox" value=""
                                             id="flexCheckDefault">
                                          <label class="form-check-label" for="flexCheckDefault">
                                          Hindi Typing
                                          </label>
                                       </div>
                                    </div>
                                    <div class="col-md-2 align-self-center mt-4">
                                       <div class="form-check">
                                          <input class="form-check-input" type="checkbox" value=""
                                             id="flexCheckDefault">
                                          <label class="form-check-label" for="flexCheckDefault">
                                          English Typing
                                          </label>
                                       </div>
                                    </div>
                                    <div class="col-md-2 align-self-center mt-4">
                                       <div class="form-check">
                                          <input class="form-check-input" type="checkbox" value=""
                                             id="flexCheckDefault">
                                          <label class="form-check-label" for="flexCheckDefault">
                                          Urdu Typing
                                          </label>
                                       </div>
                                    </div>
                                 </div>
                                 <hr>
                                 <div class="row justify-content-center mt-3">
                                    <div class="col-md-2">
                                       <div class="form-group" app-field-wrapper="Pin Code">
                                          <label for="Pin Code" class="control-label">No of pages</label>
                                          <span style="color:red;">*</span>
                                          <input type="number" id="pincode" name="pincode"
                                             class="form-control" value="" required>
                                          <span style="color:red;" id="error_pincode"></span>
                                       </div>
                                    </div>
                                    <div class="col-md-3 align-self-center mt-4">
                                       <div class="form-check">
                                          <input class="form-check-input" type="checkbox" value=""
                                             id="flexCheckDefault">
                                          <label class="form-check-label" for="flexCheckDefault">
                                          English to Hindi translation<br>(250-300 words in a page)
                                          </label>
                                       </div>
                                    </div>
                                    <div class="col-md-3 align-self-center mt-4">
                                       <div class="form-check">
                                          <input class="form-check-input" type="checkbox" value=""
                                             id="flexCheckDefault">
                                          <label class="form-check-label" for="flexCheckDefault">
                                          Hindi to English translation <br>(250-300 words in a page)
                                          </label>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-md-12 pt-30 pb-20 text-end">
                                       <button type="button" class="btn  category-save-btn"
                                          style="text-align: center;" onclick="first();">Continue</button>
                                    </div>
                                 </div>
                              </section>
                              <!-- ==================  editorial-services End ========================== -->
                              <!-- ==================  isbn-allocation Start ========================== -->
                              <section id="isbn-allocation">
                                 <div class="row justify-content-center">
                                    <div class="col-md-5 align-self-center ">
                                       <div class="form-check">
                                          <input class="form-check-input" type="checkbox" value=""
                                             id="flexCheckDefault" checked>
                                          <label class="form-check-label" for="flexCheckDefault">
                                          ISBN Allocation
                                          </label>
                                       </div>
                                    </div>
                                 </div>
                                 <hr>
                                 <div class="row">
                                    <div class="col-md-12 pt-30 pb-20">
                                       <button type="button" class="btn  category-save-btn"
                                          onclick="showps();">Prev</button>
                                       <button type="button" style="text-align: center;"
                                          class="btn  category-save-btn float-right"
                                          onclick="second();">Continue</button>
                                    </div>
                                 </div>
                              </section>
                              <!-- ==================  isbn-allocation End ========================== -->
                              <!-- ==================  Marketing Start ========================== -->
                              <section id="marketing-s">
                                 <div class="row justify-content-center">
                                    <div class="col-md-5 align-self-center ">
                                       <div class="form-check">
                                          <input class="form-check-input" type="checkbox" value=""
                                             id="flexCheckDefault">
                                          <label class="form-check-label" for="flexCheckDefault">
                                          Author Social circle Promotion
                                          </label>
                                       </div>
                                    </div>
                                 </div>
                                 <hr>
                                 <div class="row justify-content-center">
                                    <div class="col-md-5 align-self-center ">
                                       <div class="form-check">
                                          <input class="form-check-input" type="checkbox" value=""
                                             id="flexCheckDefault">
                                          <label class="form-check-label" for="flexCheckDefault">
                                          Online Distribution
                                          </label>
                                       </div>
                                    </div>
                                 </div>
                                 <hr>
                                 <div class="row justify-content-center">
                                    <div class="col-md-5">
                                       <div class="form-group" app-field-wrapper="email">
                                          <label for="email" class="control-label">E-Mail Marketing </label>
                                          <span style="color:red;">*</span>
                                          <select id="city" name="city" class="form-control" required>
                                             <option value="">Select</option>
                                             <option value="2">E-Mail Marketing : Reach 2,000</option>
                                             <option value="3">E-Mail Marketing : Reach 3,000</option>
                                             <option value="4">E-Mail Marketing : Reach 5,000</option>
                                          </select>
                                       </div>
                                    </div>
                                 </div>
                                 <hr>
                                 <div class="row justify-content-center">
                                    <div class="col-md-5">
                                       <div class="form-group" app-field-wrapper="email">
                                          <label for="email" class="control-label">WhatsApp Marketing </label>
                                          <span style="color:red;">*</span>
                                          <select id="city" name="city" class="form-control" required>
                                             <option value="">Select</option>
                                             <option value="2">WhatsApp Marketing : Reach 2,000</option>
                                             <option value="3">WhatsApp Marketing : Reach 3,000</option>
                                             <option value="4">WhatsApp Marketing : Reach 5,000</option>
                                          </select>
                                       </div>
                                    </div>
                                 </div>
                                 <hr>
                                 <div class="row justify-content-center">
                                    <div class="col-md-5">
                                       <div class="form-group" app-field-wrapper="email">
                                          <label for="email" class="control-label">SMS Marketing </label>
                                          <span style="color:red;">*</span>
                                          <select id="city" name="city" class="form-control" required>
                                             <option value="">Select</option>
                                             <option value="2">SMS Marketing : Reach 5,000</option>
                                             <option value="3">SMS Marketing : Reach 1,000</option>
                                             <option value="4">SMS Marketing : Reach 3,000</option>
                                          </select>
                                       </div>
                                    </div>
                                 </div>
                                 <hr>
                                 <div class="row justify-content-center">
                                    <div class="col-md-5 align-self-center ">
                                       <div class="form-check">
                                          <input class="form-check-input" type="checkbox" value=""
                                             id="flexCheckDefault" checked>
                                          <label class="form-check-label" for="flexCheckDefault">
                                          Author E-certificate
                                          </label>
                                       </div>
                                    </div>
                                 </div>
                                 <hr>
                                 <div class="row justify-content-center">
                                    <div class="col-md-5 align-self-center ">
                                       <div class="form-check">
                                          <input class="form-check-input" type="checkbox" value=""
                                             id="flexCheckDefault" checked>
                                          <label class="form-check-label" for="flexCheckDefault">
                                          Facebook + Twitter + Instagram Marketing (Creative Posting)
                                          </label>
                                       </div>
                                    </div>
                                 </div>
                                 <hr>
                                 <div class="row justify-content-center">
                                    <div class="col-md-5 align-self-center ">
                                       <div class="form-check">
                                          <input class="form-check-input" type="checkbox" value=""
                                             id="flexCheckDefault" checked>
                                          <label class="form-check-label" for="flexCheckDefault">
                                          Youtube Marketing - Trailer Launch
                                          </label>
                                       </div>
                                    </div>
                                 </div>
                                 <hr>
                                 <div class="row justify-content-center">
                                    <div class="col-md-5 align-self-center ">
                                       <div class="form-check">
                                          <input class="form-check-input" type="checkbox" value=""
                                             id="flexCheckDefault">
                                          <label class="form-check-label" for="flexCheckDefault">
                                          Amazon Ads (1 Week Ad on Amazon)
                                          </label>
                                       </div>
                                    </div>
                                 </div>
                                 <hr>
                                 <div class="row justify-content-center">
                                    <div class="col-md-5 align-self-center ">
                                       <div class="form-check">
                                          <input class="form-check-input" type="checkbox" value=""
                                             id="flexCheckDefault">
                                          <label class="form-check-label" for="flexCheckDefault">
                                          Digital Releases
                                          </label>
                                       </div>
                                    </div>
                                 </div>
                                 <hr>
                                 <div class="row justify-content-center">
                                    <div class="col-md-5 align-self-center ">
                                       <div class="form-check">
                                          <input class="form-check-input" type="checkbox" value=""
                                             id="flexCheckDefault">
                                          <label class="form-check-label" for="flexCheckDefault">
                                          Author Website Creation - 1 Year
                                          </label>
                                       </div>
                                    </div>
                                 </div>
                                 <hr>
                                 <div class="row justify-content-center">
                                    <div class="col-md-5 align-self-center ">
                                       <div class="form-check">
                                          <input class="form-check-input" type="checkbox" value=""
                                             id="flexCheckDefault">
                                          <label class="form-check-label" for="flexCheckDefault">
                                          Goodreads Account Set Up
                                          </label>
                                       </div>
                                    </div>
                                 </div>
                                 <hr>
                                 <div class="row justify-content-center">
                                    <div class="col-md-5  align-self-center ">
                                       <div class="form-check">
                                          <input class="form-check-input" type="checkbox" value=""
                                             id="flexCheckDefault">
                                          <label class="form-check-label" for="flexCheckDefault">
                                          Amazon Author Page Set Up
                                          </label>
                                       </div>
                                    </div>
                                 </div>
                                 <hr>
                                 <div class="row justify-content-center">
                                    <div class="col-md-5 align-self-center ">
                                       <div class="form-check">
                                          <input class="form-check-input" type="checkbox" value=""
                                             id="flexCheckDefault">
                                          <label class="form-check-label" for="flexCheckDefault">
                                          Amazon Pre Order
                                          </label>
                                       </div>
                                    </div>
                                 </div>
                                 <hr>
                                 <div class="row justify-content-center">
                                    <div class="col-md-5 align-self-center ">
                                       <div class="form-check">
                                          <input class="form-check-input" type="checkbox" value=""
                                             id="flexCheckDefault">
                                          <label class="form-check-label" for="flexCheckDefault">
                                          Google Ads + Kindle Ads + Youtube Bumper Ads <br> (With Wallet
                                          Recharge of 2,000 each)
                                          </label>
                                       </div>
                                    </div>
                                 </div>
                                 <hr>
                                 <div class="row justify-content-center">
                                    <div class="col-md-5 align-self-center ">
                                       <div class="form-check">
                                          <input class="form-check-input" type="checkbox" value=""
                                             id="flexCheckDefault">
                                          <label class="form-check-label" for="flexCheckDefault">
                                          Youtube Bumper Ads<br> (Wallet cost Additional)
                                          </label>
                                       </div>
                                    </div>
                                 </div>
                                 <hr>
                                 <div class="row justify-content-center">
                                    <div class="col-md-5 align-self-center ">
                                       <div class="form-check">
                                          <input class="form-check-input" type="checkbox" value=""
                                             id="flexCheckDefault">
                                          <label class="form-check-label" for="flexCheckDefault">
                                          Offline Distribution
                                          </label>
                                       </div>
                                    </div>
                                 </div>
                                 <hr>
                                 <div class="row justify-content-center">
                                    <div class="col-md-5 align-self-center ">
                                       <div class="form-check">
                                          <input class="form-check-input" type="checkbox" value=""
                                             id="flexCheckDefault">
                                          <label class="form-check-label" for="flexCheckDefault">
                                          Copyright
                                          </label>
                                       </div>
                                    </div>
                                 </div>
                                 <hr>
                                 <div class="row justify-content-center">
                                    <div class="col-md-5 align-self-center ">
                                       <div class="form-check">
                                          <input class="form-check-input" type="checkbox" value=""
                                             id="flexCheckDefault">
                                          <label class="form-check-label" for="flexCheckDefault">
                                          Establishing a YouTube channel with custom thumbnail and cover
                                          </label>
                                       </div>
                                    </div>
                                 </div>
                                 <hr>
                                 <div class="row justify-content-center">
                                    <div class="col-md-5 align-self-center ">
                                       <div class="form-check">
                                          <input class="form-check-input" type="checkbox" value=""
                                             id="flexCheckDefault">
                                          <label class="form-check-label" for="flexCheckDefault">
                                          Designed graphics on BFC Publications social media platforms
                                          </label>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-md-12 pt-30 pb-20">
                                       <button type="button" class="btn  category-save-btn"
                                          onclick="showps();">Cancel</button>
                                       <button type="button" style="text-align: center;"
                                          class="btn  category-save-btn float-right"
                                          onclick="third();">Continue</button>
                                    </div>
                                 </div>
                              </section>
                              <!-- ==================  Marketing End ========================== -->
                              <!-- ==================  sales-s Start ========================== -->
                              <section id="sales-s">
                                 <div class="row justify-content-center">
                                    <div class="col-md-5 align-self-center ">
                                       <div class="form-check">
                                          <input class="form-check-input" type="checkbox" value=""
                                             id="flexCheckDefault" checked>
                                          <label class="form-check-label" for="flexCheckDefault">
                                          Online Sales Dashboard
                                          </label>
                                       </div>
                                    </div>
                                 </div>
                                 <hr>
                                 <div class="row justify-content-center">
                                    <div class="col-md-5 align-self-center ">
                                       <div class="form-check">
                                          <input class="form-check-input" type="checkbox" value=""
                                             id="flexCheckDefault" checked>
                                          <label class="form-check-label" for="flexCheckDefault">
                                          Author Profit Share - 100%
                                          </label>
                                       </div>
                                    </div>
                                 </div>
                                 <hr>
                                 <div class="row justify-content-center">
                                    <div class="col-md-5 align-self-center ">
                                       <div class="form-check">
                                          <input class="form-check-input" type="checkbox" value=""
                                             id="flexCheckDefault" checked>
                                          <label class="form-check-label" for="flexCheckDefault">
                                          Profit / Royalty Payout - Monthly
                                          </label>
                                       </div>
                                    </div>
                                 </div>
                                 <hr>
                                 <div class="row">
                                    <div class="col-md-12 pt-30 pb-20">
                                       <button type="button" class="btn  category-save-btn"
                                          onclick="showps();">Prev</button>
                                       <button type="button" style="text-align: center;"
                                          class="btn  category-save-btn float-right"
                                          onclick="fourth();">Continue</button>
                                    </div>
                                 </div>
                              </section>
                              <!-- ==================  sales-s End ========================== -->
                              <!-- ==================  Author-s Start ========================== -->
                              <section id="author-s">
                                 <div class="row justify-content-center">
                                    <div class="col-md-5 align-self-center ">
                                       <div class="form-check">
                                          <input class="form-check-input" type="checkbox" value=""
                                             id="flexCheckDefault" checked>
                                          <label class="form-check-label" for="flexCheckDefault">
                                          Publishing Support
                                          </label>
                                       </div>
                                    </div>
                                 </div>
                                 <hr>
                                 <div class="row justify-content-center">
                                    <div class="col-md-5 align-self-center ">
                                       <div class="form-check">
                                          <input class="form-check-input" type="checkbox" value=""
                                             id="flexCheckDefault" checked>
                                          <label class="form-check-label" for="flexCheckDefault">
                                          Technical Support
                                          </label>
                                       </div>
                                    </div>
                                 </div>
                                 <hr>
                                 <div class="row justify-content-center">
                                    <div class="col-md-5 align-self-center ">
                                       <div class="form-check">
                                          <input class="form-check-input" type="checkbox" value=""
                                             id="flexCheckDefault" checked>
                                          <label class="form-check-label" for="flexCheckDefault">
                                          Dedicated Publishing Manager
                                          </label>
                                       </div>
                                    </div>
                                 </div>
                                 <hr>
                                 <div class="row justify-content-center">
                                    <div class="col-md-5 align-self-center ">
                                       <div class="form-check">
                                          <input class="form-check-input" type="checkbox" value=""
                                             id="flexCheckDefault" checked>
                                          <label class="form-check-label" for="flexCheckDefault">
                                          Complimentary Author Copies
                                          </label>
                                       </div>
                                    </div>
                                 </div>
                                 <hr>
                                 <div class="row">
                                    <div class="col-md-12 pt-30 pb-20">
                                       <button type="button" class="btn  category-save-btn"
                                          onclick="showps();">Prev</button>
                                       <button type="button" style="text-align: center;"
                                          class="btn  category-save-btn float-right"
                                          onclick="five();">Continue</button>
                                    </div>
                                 </div>
                              </section>
                              <!-- ==================  Author-s End ========================== -->
                              <!-- ==================  book Start ========================== -->
                              <section id="book-s">
                                 <div class="row justify-content-center">
                                    <div class="col-md-5 align-self-center ">
                                       <div class="form-check">
                                          <input class="form-check-input" type="checkbox" value=""
                                             id="flexCheckDefault" checked>
                                          <label class="form-check-label" for="flexCheckDefault">
                                          Number of pages Allowed
                                          </label>
                                       </div>
                                    </div>
                                 </div>
                                 <hr>
                                 <div class="row justify-content-center">
                                    <div class="col-md-5">
                                       <div class="form-group" app-field-wrapper="email">
                                          <label for="email" class="control-label">Book Size </label> <span
                                             style="color:red;">*</span>
                                          <select id="city" name="city" class="form-control" required>
                                             <option value="">Select</option>
                                             <option value="2">5*8</option>
                                             <option value="3">5.5*8.5</option>
                                             <option value="4">8*11</option>
                                             <option value="4">6*9</option>
                                          </select>
                                       </div>
                                    </div>
                                 </div>
                                 <hr>
                                 <div class="row justify-content-center">
                                    <div class="col-md-5">
                                       <div class="form-group" app-field-wrapper="email">
                                          <label for="email" class="control-label">Lamination </label> <span
                                             style="color:red;">*</span>
                                          <select id="city" name="city" class="form-control" required>
                                             <option value="">Select</option>
                                             <option value="2">Gloss</option>
                                             <option value="3">Matte</option>
                                          </select>
                                       </div>
                                    </div>
                                 </div>
                                 <hr>
                                 <div class="row justify-content-center">
                                    <div class="col-md-5 align-self-center ">
                                       <div class="form-check">
                                          <input class="form-check-input" type="checkbox" value=""
                                             id="flexCheckDefault" checked>
                                          <label class="form-check-label" for="flexCheckDefault">
                                          Book Interior - Black & White
                                          </label>
                                       </div>
                                    </div>
                                 </div>
                                 <hr>
                                 <div class="row justify-content-center">
                                    <div class="col-md-5">
                                       <div class="form-group" app-field-wrapper="email">
                                          <label for="email" class="control-label">Book Cover Type</label>
                                          <span style="color:red;">*</span>
                                          <select id="city" name="city" class="form-control" required>
                                             <option value="">Select</option>
                                             <option value="2">Multicolor 250 GSM - Paperback</option>
                                             <option value="3">Hardbound</option>
                                             <option value="3">Hardbound-jacket</option>
                                          </select>
                                       </div>
                                    </div>
                                 </div>
                                 <hr>
                                 <div class="row justify-content-center">
                                    <div class="col-md-5">
                                       <div class="form-group" app-field-wrapper="email">
                                          <label for="email" class="control-label">Paper Type</label> <span
                                             style="color:red;">*</span>
                                          <select id="city" name="city" class="form-control" required>
                                             <option value="">Select</option>
                                             <option value="2">75 GSM Creamy</option>
                                             <option value="3">75 GSM White</option>
                                          </select>
                                       </div>
                                    </div>
                                 </div>
                                 <hr>
                                 <div class="row">
                                    <div class="col-md-12 pt-30 pb-20">
                                       <button type="button" class="btn  category-save-btn"
                                          onclick="showps();">Prev</button>
                                       <button type="button" style="text-align: center;"
                                          class="btn  category-save-btn float-right"
                                          onclick="six();">Continue</button>
                                    </div>
                                 </div>
                              </section>
                              <!-- ==================  book End ========================== -->
                              <!-- ==================  e-book Start ========================== -->
                              <section id="e-book-s">
                                 <div class="row justify-content-center">
                                    <div class="col-md-5 align-self-center ">
                                       <div class="form-check">
                                          <input class="form-check-input" type="checkbox" value=""
                                             id="flexCheckDefault" checked>
                                          <label class="form-check-label" for="flexCheckDefault">
                                          E Book Creation & Distribution
                                          </label>
                                       </div>
                                    </div>
                                 </div>
                                 <hr>
                                 <div class="row">
                                    <div class="col-md-12 pt-30 pb-20">
                                       <button type="button" class="btn  category-save-btn"
                                          onclick="showps();">Prev</button>
                                       <button type="button" style="text-align: center;"
                                          class="btn  category-save-btn float-right"
                                          onclick="seven();">Continue</button>
                                    </div>
                                 </div>
                              </section>
                              <!-- ==================  e-book End ========================== -->
                           </div>
                        </form>
                     </div>
                     <!-- ================== checkout start ========================== -->
                     <section id="checkout">
                        <div class="row justify-content-center">
                           <div class="col-md-4">
                            <h5 class="text-redh text-center my-3"><b>Checkout</b></h5>
                              <div class="maniscript d-flex box justify-content-between">
                                 <h6>Is your manuscript ready</h6>
                                 <div class="checkbox-wrapper-3">
                                    <input type="checkbox" id="cbx-3" />
                                    <label for="cbx-3" class="toggle"><span></span></label>
                                 </div>
                              </div>
                              <div class="box mt-3">
                                 <h6><b>Payment Mode</b></h6>
                                 <hr>
                                 <div class="d-flex justify-content-between">
                                    <h6 class="fw-600">Full Payment </h6>
                                    <div class="form-check">
                                       <input class="form-check-input" type="radio" name="flexRadioDefault"
                                          id="flexRadioDefault1">
                                    </div>
                                 </div>
                                 <p>₹ 50359.14</p>
                                 <p>Get flat 10% discount on full payment</p>
                                 <hr>
                                 <div class="d-flex justify-content-between">
                                    <h6 class="fw-600">Flexi Payment </h6>
                                    <div class="form-check">
                                       <input class="form-check-input" type="radio" name="flexRadioDefault"
                                          id="flexRadioDefault1">
                                    </div>
                                 </div>
                                 <p>Pay using flexible option as :</p>
                                 <div class="d-flex justify-content-between">
                                    <p>First Installment</p>
                                    <p>25454.14 (40%)</p>
                                 </div>
                                 <div class="d-flex justify-content-between">
                                    <p>Second Installment</p>
                                    <p>25454.14 (40%)</p>
                                 </div>
                                 <div class="d-flex justify-content-between">
                                    <p>Final Installment</p>
                                    <p>10454.14 (20%)</p>
                                 </div>
                              </div>
                              <select name="" id="" class="box form-control mt-3">
                                 <option value="1">Select State</option>
                              </select>
                              <div class="d-flex justify-content-between box mt-3">
                                 <div>
                                    <h6>₹ 50359.14 </h6>
                                    <p class="mb-0" style="font-size:10px">*18% GST included</p>
                                 </div>
                                 <button class="btn btn-custom">
                                 Buy Now
                                 </button>
                              </div>
                           </div>
                        </div>
                     </section>
                     <!-- ==================  checkout End ========================== -->
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<script>
function first() {
$("#isbn-allocation").css("display", "block");
$("#editorial-services").css("display", "none");
$("#isbn").addClass("active");

}
function showps() {
      $("#editorial-services").css("display", "block");
      $("#isbn-allocation").css("display", "none");
      $("#isbn").removeClass("active");
     
    }
    function second() {
$("#marketing-s").css("display", "block");
$("#isbn-allocation").css("display", "none");
$("#marketing").addClass("active");

}
function third() {
$("#sales-s").css("display", "block");
$("#marketing-s").css("display", "none");
$("#sales").addClass("active");

}
function fourth() {
$("#author-s").css("display", "block");
$("#sales-s").css("display", "none");
$("#author").addClass("active");

}
function five() {
$("#book-s").css("display", "block");
$("#author-s").css("display", "none");
$("#book").addClass("active");

}
function six() {
$("#e-book-s").css("display", "block");
$("#book-s").css("display", "none");
$("#e-book").addClass("active");

}
function seven() {
$("#checkout").css("display", "block");
$("._buttons").css("display", "none");


}
</script>

@endsection
