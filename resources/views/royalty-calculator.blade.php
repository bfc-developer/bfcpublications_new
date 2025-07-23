@extends('layout.template')
@section('extern-css')
    <title>{{ $title }}</title>
    <link rel="canonical" href="https://bfcpublications.com/royalty-calculator">
@endsection
@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb px-4 py-2">
            <li class="breadcrumb-item"><a class="text-red-c" href="{{ url('/') }}"><i class="fa fa-home"></i></a></li>
            <li class="breadcrumb-item active fs-6 " aria-current="page">Royalty Calculator</li>
        </ol>
    </nav>


    <section class="royalty-calculator py-lg-5">

        <div class="container">
        <h1 class="text-uppercase mb-5">Book  Royalty Calculator</h1>
            <div class="royalty-cal">
                <div class="row">
                    <div class="col-md-6">
                        <div class="shadow-pro px-4 p-5">
                            <div class="royalty-title text-center bg-light-blue py-2">
                                <h5 class="mb-0">ENTER BOOK DETAILS</h5>
                            </div>
                            <div class="row mt-4">
                                <div class="col-md-6 mt-1"><label>Number Of Pages</label></div>
                                <div class="col-md-6">
                                    <div class="d-flex inputf transcard">
                                        <input id="noofpage" type="text" class="form-control" minlength="0"
                                            placeholder="0" onkeypress="return isNumber(event)">
                                    </div>
                                </div>
                                <div class="note-text text-center text-danger mb-2" id="error_no_of_page"><span
                                        class="text-danger"></span></div>
                                <div class="col-md-6 mt-1"><label>Book Format</label></div>
                                <div class="col-md-6">
                                    <div class="d-flex inputf transcard">
                                        <select id="book_type" class="form-select" aria-label="Default select example">
                                            <option value="">Select</option>
                                            <option value="1">Paperback</option>
                                            <option value="2">Hardcover</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 mt-1"><label>Book Size</label></div>
                                <div class="col-md-6">
                                    <div class="d-flex inputf transcard">
                                        <select id="book_size" class="form-select" aria-label="Default select example">
                                            <option selected>Select</option>
                                            @foreach ($book_size as $value)
                                                <option value="{{ $value->booksize }}">{{ $value->booksize }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 mt-1"><label>Book Type</label></div>
                                <div class="col-md-6">
                                    <div class="d-flex inputf transcard">
                                        <input type="text" class="form-control" placeholder="Black & White" readonly>
                                    </div>
                                </div>
                                <a onclick="book_calculate();" class="btn btn-custom btn-block"> Calculate</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mt-smc-2">
                        <div class="shadow-pro px-3 p-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="text-label text-center font-weight-600 py-2">Production Cost(₹)</div>
                                    <div class="inputf  bg-light-red py-2 transcard" id="production_cost">0</div>
                                </div>
                                <div class="col-md-6">
                                    <div class="text-label text-center font-weight-600 py-2 ">Recommended Price(₹)</div>
                                    <div class="inputf bg-light-red py-2 transcard" id="recommended_cost">0</div>
                                </div>
                            </div>
                            <div class="result-content-shadow-pro px-4 py-2">
                                <div class="note-text pt-2 pb-2 text-center"><span id="error_mrp"
                                        class="text-danger font-weight-700 fs-13"></span></div>
                                <div class=" row pt-3">
                                    <div class="col-md-3 mt-1 text-center"><label>MRP</label></div>
                                    <div class="col-md-6">
                                        <div class="row inputf transcard">
                                            <input type="text" id="mrp" class="form-control"
                                                placeholder="MRP Here">
                                        </div>
                                    </div>
                                    <div class="col-md-3  text-end">
                                        <a class="btn btn-custom py-2 px-2 col-12" onclick="mrpcalculate();">Calculate</a>
                                    </div>
                                </div>
                                <div class="note-text pb-2 text-center mt-smc-2"><span
                                        class="font-weight-600 text-secondary">Author's Earning Per Copy:</span></div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="text-label text-center font-weight-600 py-2">BFC Publications(₹)</div>
                                        <div class="inputf transcard bg-light-red py-2" id="setbfcprice">0</div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="text-label text-center font-weight-600 py-2 ">Other Stores(₹)</div>
                                        <div class="inputf transcard bg-light-red py-2" id="setohterprice">0</div>
                                    </div>
                                </div>
                                <div class="note-text text-center"><span class="fs-12 text-danger">Note: These Rates are
                                        for
                                        illustration purpose only. Actual earnings may vary.</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <section class="mb-5 mx-3 mt-smc-2">
        <div class="container">
            <div class="row justify-content-center author-result p-3 bg-light-blue">
                <div class="col-md-12">
                    <h5 class="text-center pb-3">Author's Copy - At Subsidised Price : <span class="text-danger"
                            id="subsidisedPrice">₹</span>
                    </h5>
                    <p>Authors can procure their books from us at this exclusive price.</p>
                    <p>The minimum order size for Paperbacks is 20 copies, GST & Delivery Charges excluded.</p>
                    <p> The minimum order size for Hardcovers is 30 copies, GST & Delivery Charges excluded.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="mb-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <p>Use our <b>Book Royalty Calculator</b> to determine the per book publishing cost, and decide the MRP
                        of your book. This <b>Author Royalty Calculator</b> recommends the lowest possible MRP, based on the
                        book’s format, the number of pages it has, and its size.</p>
                    <p>Enter the number of book pages in the left uppermost section of the Royalty Calculator, followed by
                        the book format, paperback or hardcover, and the book size before hitting the calculate tab.
                        Following this, the estimated per book publishing cost and the recommended MRP shall start
                        reflecting on the upper right section of the <b>Book Royalty Calculator.</b></p>
                    <p>Right below the recommended MRP is the tab wherein authors can enter their intended MRP to figure out
                        the earnings they shall receive upon the sale of each book.</p>
                    <p>On the lower left, authors can see the earnings they shall fetch if the book is sold through the BFC
                        Bookstore, and on the right will be the sales proceeds of other stores.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-light-blue pt-3 pb-5">
        <div class="container">
        <div class="page-text">
                <h3 class="text-center fw-bold">FREQUENTLY ASKED QUESTIONS</h3>
            </div>
            <div class="row py-2">
                <div class="col-md-12">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <strong>1. What is the Recommended Price?</strong>
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Recommended Price is the lowest MRP at which the self published book can be sold.
                                        This is determined after taking into account the printing and distribution cost.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <strong>2. How to set the MRP for a book?</strong>
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Authors have complete freedom to sell their book at the price they wish to, provided
                                        it is over and above the Recommended Price.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <strong>3. How are author profits calculated?</strong>
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Profits are derived after deducting the expense incurred in a book’s production and
                                        distribution from the MRP. Profit = MRP- Expense Incurred (Production Cost +
                                        Distribution Cost). Authors are entitled to receive 100% of the profit fetched.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                                    <strong>4. What is the subsidy offered for author copies?</strong>
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Authors are entitled to purchase copies of their books at subsidised prices. The
                                        subsidised price is derived after adding the Production Cost of and the applicable
                                        Distribution Charges.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('extern-js')
    <script src="{{ url('customjs/royalty_calculator.js') }}"></script>
@endsection
