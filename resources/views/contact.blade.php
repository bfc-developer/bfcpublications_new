@extends('layout.template')
@section('extern-css')
    <title>{{ $title }}</title>
   
    <style>
        label.error {
            color: #dc3545;
            font-size: 14px;
        }
    </style>
@endsection
@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb px-4 py-2">
            <li class="breadcrumb-item"><a class="text-red-c" href="{{ url('/') }}"><i class="fa fa-home"></i></a></li>
            <li class="breadcrumb-item active fs-6 " aria-current="page">Contact</li>

        </ol>
    </nav>

    <section class=" mb-4">
        <div class="container">
            <h1>CONTACT US </h1>

            <div class="row mt-5">
                <div class="col-md-5 pe-4">
                    <h4>ADDRESS</h4>
                    <hr>
                    <div class="row">
                        <div class="col-2">
                            <i class="fas fa-map-marker-alt  fa-2x text-red-c"></i>
                        </div>
                        <div class="col-10 pe-5">
                            <h6><a class="text-blue-c" href="https://goo.gl/maps/2XGLU6FL84gL4jF48" target="_blank">BFC
                                    Publications Pvt Ltd </a></h6>
                            <p>CP-61, Viraj Khand, Gomti Nagar, Lucknow Uttar Pradesh, 226010.</p>
                            <p class="mb-0"><b>Hours</b>: Mon - Sat :- 09:30 am - 6:30 pm</p>
                            <p>(Second & Fourth Saturday Closed)</p>
                        </div>
                        <div class="col-2">
                            <i class="fa fa-phone fa-2x text-red-c"></i>
                        </div>
                        <div class="col-10">
                            <h6><a class="text-blue-c" href="tel:5223514141" target="_blank">+91-5223514141 </a></h6>
                            <h6><a class="text-blue-c" href="tel:6389700888" target="_blank">+91-6389700888 </a></h6>
                            
                        </div>
                        <div class="col-2">
                            <i class="fa fa-envelope fa-2x text-red-c"></i>
                        </div>
                        <div class="col-10">
                            <h6><a class="text-blue-c" href="mailto:support@bfcpublications.com"
                                    target="_blank">support@bfcpublications.com</a></h6>
                            <p>24/7 online support</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 mt-smc-2">
                    <h4>GET IN TOUCH</h4>
                    <hr>
                    <form id="contact_us_form" class="row g-3">
                        <div class="col-md-6">
                            <label for="inputname" class="form-label">Name</label>
                            <input type="text" class="form-control" id="inputname" name="inputname"
                                placeholder="Enter Your Name">
                        </div>
                        <div class="col-md-6">
                            <label for="inputEmail" class="form-label">Email</label>
                            <input type="email" class="form-control" id="inputEmail" name="inputemail"
                                placeholder="Enter Your Email">
                        </div>

                        <div class="col-md-6">
                            <label for="inputnumber" class="form-label">Phone Number</label>
                            <input type="number" class="form-control" id="inputnumber" name="inputnumber"
                                placeholder="Enter Your Phone Number">
                        </div>
                        <div class="col-md-6">
                            <label for="inputPost" class="form-label">Subject</label>
                            <input type="text" class="form-control" id="subject" name="subject"
                                placeholder="Enter Subject">
                        </div>
                        <div class="col-12">
                            <label for="inputPost" class="form-label">Message</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" name="message"
                                rows="3"placeholder="Type here......."></textarea>
                        </div>
                        <div class="col-12">
                            <input type="checkbox" name="checkbox" id="checkbox">
                            I, hereby accord my consent to process my above mentioned personal data by BFC Publications Pvt. Ltd. for the purpose of Author support/Service Promotion, in accordance with the provisions of DPDP Act 2023.
                            <br>
                            To know more <a href="https://bfcpublications.com/DPDP_Act" target="_blank">click here</a>
                            <br>
                            <span class="text-danger" id="check_box_err"> </span>
                        </div>

                        <div class="col-12">
                            <button type="submit" class="btn btn-custom">Submit</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="row py-5">

                <div class="col-12 map">

                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1779.8199414332546!2d81.02661567611074!3d26.851404005352553!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399be3cae4ed6733%3A0x91ec369254659c77!2sBFC%20Publications%20Private%20Limited!5e0!3m2!1sen!2sin!4v1606460562944!5m2!1sen!2sin"
                        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>

                </div>


            </div>
        </div>

    </section>
@endsection
@section('extern-js')
    <script src="{{ url('customjs/mail.js') }}"></script>
@endsection
