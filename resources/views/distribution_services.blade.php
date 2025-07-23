@extends('layout.template')
@section('extern-css')
    <title>{{ $title }}</title>
    <link rel="canonical" href="https://bfcpublications.com/book-distribution-services">
@endsection
@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb px-4 py-2">
            <li class="breadcrumb-item"><a class="text-red-c" href="{{ url('/') }}"><i class="fa fa-home"></i></a></li>
            <li class="breadcrumb-item active fs-6 " aria-current="page">Services</li>
            <li class="breadcrumb-item active fs-6 " aria-current="page">Distribution Services</li>
        </ol>
    </nav>



    <section class="editorial pb-2">
        <div class="container">
            <h1>DISTRIBUTION SERVICES</h1>
            <div class="row align-items-stretch flex-wrap-reverse">

                <div class="col-md-6 align-self-center">
                    <h3 class="text-rale text-red-c"> Book Distribution </h3>
                    <p class="text-justify">We have knit together a very intricate and elaborate network of bookstores and
                        e-marketplaces to ensure your book’s availability across the country. Starting from the smallest to
                        the biggest, all relevant e-marketplaces will showcase your book to buyers across India and abroad,
                        including Amazon Kindle, Google Play Books, Flipkart, Amazon, Kobo, ShopClues, Snapdeal, Smashwords
                        etc.</p>
                </div>
                <div class="col-md-6">
                    <img class="img-fluid" src="{{ url('assets/img/service/distribution services.webp') }}" alt=""
                        srcset="">
                </div>


            </div>
        </div>
    </section>



    <!--------------------------------------------------->
    <!-- ============= Footer Section ================ -->
    <!--------------------------------------------------->
@endsection
