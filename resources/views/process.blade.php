@extends('layout.template')
@section('extern-css')
    <title>{{ $title }}</title>
@endsection
@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb px-4 py-2">
            <li class="breadcrumb-item"><a class="text-red-c" href="{{ url('/') }}"><i class="fa fa-home"></i></a></li>
            <li class="breadcrumb-item active fs-6 " aria-current="page">Our Self Publishing Matrix</li>
        </ol>
    </nav>

    <section class="editorial pb-2">
        <div class="container">
            <h1>OUR SELF PUBLISHING MATRIX </h1>
            <div class="row align-items-stretch py-5 flex-wrap-reverse">

                <div class="col-md-6 align-self-center mt-smc-2">
                    <h3 class="text-rale text-red-c"> Step By Step Publishing </h3>
                    <p class="text-justify"> Follow the steps listed below to climb our self publishing ladder. To ensure
                        that your journey with us is smooth and hassle-free, we have defined every milestone you are going
                        to cross until your book hits the stores.</p>
                </div>
                <div class="col-md-6">
                    <img class="img-fluid" src="{{ url('assets/img/other/process.webp') }}" alt="" srcset="">
                </div>


            </div>
        </div>
    </section>


    <section class="publishing-process py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="timeline">
                        <li class="timeline-item bg-light-blue rounded ms-3 p-4 shadow">
                            <div class="timeline-arrow"></div>
                            <h4 class=" mb-0 "> Consultation & Registration</h4>
                            <p class=" mt-2 ">Leverage the know-how of our expert consultants to identify
                                the publishing solution that best suits your needs, or get one tailored. </p>
                        </li>
                        <li class="timeline-item bg-light-blue rounded ms-3 p-4 shadow">
                            <div class="timeline-arrow"></div>
                            <h4 class=" mb-0  ">Contract Signing </h4>
                            <p class=" mt-2  ">Enter into a contract with us to safeguard the intellectual rights of your
                                manuscript.
                                This also ensures that both parties, you and BFC uphold their end of the bargain,
                                be it pertaining to the specifications of the self publishing package, or the terms of
                                payment. </p>
                        </li>
                        <li class="timeline-item bg-light-blue rounded ms-3 p-4 shadow">
                            <div class="timeline-arrow"></div>
                            <h4 class=" mb-0 ">Manuscript Submission</h4>
                            <p class=" mt-2  ">Submit your manuscript with us to get the ball rolling.
                                A dedicated publishing manager/consultant shall be assigned to you at this stage for guiding
                                and
                                handling the project. The book’s interior, its layout and exteriors shall also be discussed
                                at this
                                point.</p>
                        </li>
                        <li class="timeline-item bg-light-blue rounded ms-3 p-4 shadow">
                            <div class="timeline-arrow"></div>
                            <h4 class=" mb-0 ">Proofreading & Format Editing</h4>
                            <p class=" mt-2  ">Our team of proof-readers and copy-editors will get working on your book,
                                fine-combing the manuscript for errors.</p>
                        </li>
                        <li class="timeline-item bg-light-blue rounded ms-3 p-4 shadow">
                            <div class="timeline-arrow"></div>
                            <h4 class=" mb-0 ">Designing</h4>
                            <p class=" mt-2  ">Our graphic designers and illustrators go to work on the interior and cover
                                of the book.
                                This is done keeping in mind the brief provided by the author, so as to best interpret the
                                author’s
                                imagination.</p>
                        </li>
                        <li class="timeline-item bg-light-blue rounded ms-3 p-4 shadow">
                            <div class="timeline-arrow"></div>
                            <h4 class=" mb-0 ">Marketing & Online Distribution</h4>
                            <p class=" mt-2  ">The team guides authors to make decisions based on prevalent e-marketplace
                                and digital marketing trends.
                                Special emphasis is laid on expanding the book’s digital footprint through Facebook,
                                Instagram campaigns,
                                and other marketing gimmicks. The team also ensures the book’s availability on all relevant
                                platforms,
                                including Amazon Kindle, Google Play Books, Amazon, Flipkart, etc. </p>
                        </li>
                        <li class="timeline-item bg-light-blue rounded ms-3 p-4 shadow">
                            <div class="timeline-arrow"></div>
                            <h4 class=" mb-0 ">Royalty</h4>
                            <p class=" mt-2  ">In BFC, authors have absolute freedom when it comes to determining the worth
                                of their work,
                                even if it is over and above the suggested price. The Royalty Calculator lets authors
                                compute the
                                margins they are to operate on, based on which they can arrive at a selling price that suits
                                them best.</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection
