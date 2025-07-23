@extends('layout.template')
@section('extern-css')
    <title>{{ $title }}</title>
    <link rel="canonical" href="https://bfcpublications.com/book-editorial-services">
@endsection
@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb px-4 py-2">
            <li class="breadcrumb-item"><a class="text-red-c" href="{{ url('/') }}"><i class="fa fa-home"></i></a></li>
            <li class="breadcrumb-item active fs-6 " aria-current="page">Services</li>
            <li class="breadcrumb-item active fs-6 " aria-current="page">Editorial Services</li>
        </ol>
    </nav>



    <section class="editorial pb-2">
        <div class="container">
            <h1>EDITORIAL SERVICES </h1>
            <div class="row align-items-stretch flex-wrap-reverse">

                <div class="col-12 col-md-6 align-self-center">
                    <h3 class="text-rale text-red-c"> Format Editing </h3>
                    <p class="text-justify"> Consider this an important step in enhancing the readability of your
                        manuscript. The textual content of a book pertains to the grammar used, structuring of sentences,
                        the author’s choice of words, etc. Book formatting, on the other hand, is about fixing the page
                        layout, its margins, citations, text casing, and capitalisation, among other things.</p>
                </div>
                <div class="col-12 col-md-6 ">
                    <img class="img-fluid" src="{{ url('assets/img/service/format editing.webp') }}" alt=""
                        srcset="">
                </div>


            </div>
        </div>
    </section>


    <section class="bg-light-blue">
        <div class="container">
            <div class="row align-items-stretch">
                <div class="col-12 col-md-6 ">
                    <img class="img-fluid" src="{{ url('assets/img/service/proofreading.webp') }}" alt=""
                        srcset="">
                </div>
                <div class="col-12 col-md-6  align-self-center">
                    <h3 class="text-rale text-red-c"> Proofreading </h3>
                    <p class="text-justify">A well-proofed manuscript is a mirror reflecting the author’s craftsmanship.
                        When polished with precision, it can have a last positive impact on how the author is perceived by
                        their target audience, especially in the digital marketplace, where each review is worth its weight
                        in gold. This is why your manuscript is given a thorough combing by our proofreaders, ensuring that
                        the final copy is free of errors, be it grammatical, spelling or typographical.</p>
                </div>



            </div>
        </div>

    </section>
    <!--------------------------------------------------->
    <!-- ============= Footer Section ================ -->
    <!--------------------------------------------------->
@endsection
