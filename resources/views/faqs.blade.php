@extends('layout.template')
@section('extern-css')
    <title>{{ $title }}</title>
    <link rel="canonical" href="https://bfcpublications.com/faq">
@endsection
@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb px-4 py-2">
            <li class="breadcrumb-item"><a class="text-red-c" href="{{ url('/') }}"><i class="fa fa-home"></i></a></li>
            <li class="breadcrumb-item active fs-6 " aria-current="page">FAQs</li>
        </ol>
    </nav>

    <section class="py-3">
        <div class="container">
            <h1>FAQs</h1>
            <div class="row align-items-center py-5">
                <div class="col-md-12">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <strong>What is self publishing?</strong>
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Self publishing is the act of publishing a manuscript at the author's risk, unlike
                                        traditional publishing wherein the publisher bears the costs and risks of the same.
                                        Under the self publishingmodel, the author takes all the calls concerning the book's
                                        cover, its layout, the price at which the book is to be sold and the marketing
                                        gimmicks to be deployed.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <strong> Since when is BFC active as a publisher?</strong>
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>We are a relatively young publication and we do not hide the fact, primarily because
                                        we believe in building trust and going for the long haul. Despite that, we have
                                        managed to build a significant following and have several reputed authors and books
                                        in our repertoire.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <strong>What is the procedure of manuscript submission and publication? </strong>
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>After initial consultations, the author is to sign a contract with us, which ensures
                                        that both parties uphold their end of the bargain. Following this, a dedicated
                                        project manager shall be assigned to you, who, with his team of proofreaders,
                                        editors, and graphic designers will go to work on your manuscript, based on your
                                        briefings.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                                    <strong>What are the costs involved?</strong>
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>The publishing cost may vary depending upon the a la carte services you choose to
                                        avail, and the publishing format you pick for your manuscript, e-Book or paperback.
                                        You can also pick from the pre-assembled packages listed on the website to zero-in
                                        on the final publishing cost.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseThree">
                                    <strong>Are there any other writing solutions on offer?</strong>
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>There are a bunch of services that authors may choose from, depending upon their
                                        needs. This includes, proofreading the manuscript for errors; copy editing, which
                                        entails revising the written material to improve its readability and making sure
                                        that the manuscript is free of any grammatical or factual errors; and ghostwriting,
                                        wherein the manuscript is written by one of our executives, based on the written
                                        outline and briefings provided by you.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseThree">
                                    <strong>How long does it take to print a book?</strong>
                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>This may vary depending upon the book size, and the amount of work that is to be put
                                        into the manuscript. Usually, however, it takes 45 days to publish a book, starting
                                        from the day of manuscript submission.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingSeven">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseThree">
                                    <strong>How many copies of my book will be printed?</strong>
                                </button>
                            </h2>
                            <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>We work on the Print-On-Demand model, which means copies are printed based on the
                                        demand the book generates. To avoid any dispatch delays, however, as many as 20
                                        copies of the book are stocked up in our warehouse at all times.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
