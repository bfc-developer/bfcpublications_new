@extends('layout.template')
@section('extern-css')
    <title>{{ $title }}</title>
    
@endsection
@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb px-4 py-2">
            <li class="breadcrumb-item"><a class="text-red-c" href="{{ url('/') }}"><i class="fa fa-home"></i></a></li>
            <li class="breadcrumb-item active fs-6 " aria-current="page">Shipping and Delivery</li>
        </ol>
    </nav>
    <section class="mb-4 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-text">
                        <h3 class="pb-3">Shipping and Delivery</h3>
                        <p><b>SHIPPING POLICY:</b> BFC publications presently offers shipping services across india. All the orders are shipped through our courier partners/Indian Postal Services (Depending upon location).
                        <br><b>Shipping Charges:</b> The charges depend upon product’s weight and delivery location.
                        </p>
                  
             
                    
                
                
                </div>
            </div>
        </div>
    </section>
@endsection
