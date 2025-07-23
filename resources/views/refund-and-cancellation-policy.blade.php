@extends('layout.template')
@section('extern-css')
    <title>{{ $title }}</title>
    
@endsection
@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb px-4 py-2">
            <li class="breadcrumb-item"><a class="text-red-c" href="{{ url('/') }}"><i class="fa fa-home"></i></a></li>
            <li class="breadcrumb-item active fs-6 " aria-current="page">Refund and Cancellation Policy</li>
        </ol>
    </nav>
    <section class="mb-4 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-text">
                        <h3 class="pb-3">Refund and Cancellation Policy</h3>
                        <!-- <p>Our focus is complete customer satisfaction. In the event, if you are displeased with the
                            services provided, we will refund back the money, provided the reasons are genuine and proved
                            after investigation. Please read the fine prints of each deal before buying it, it provides all
                            the details about the services or the product you purchase.
                            In case of dissatisfaction from our services, clients have the liberty to cancel their projects
                            and request a refund from us. Our Policy for the cancellation and refund will be as follows:</p> -->
                   <p>BFC Publications retains the right to terminate/cancel a project under specific circumstances. 
                    This includes situations where the author has outstanding payments, has failed to settle dues according to the agreed-upon schedule, has not submitted the manuscript within six months of the booking, or has not provided approvals within six months of the booking, for drafts submitted by the editorial team.
<p><b>The refund terms are outlined as follows:</b><p>
<b>Full Refund:</b> Within seven days of the initial payment, the author is eligible for a complete refund of the total amount paid to BFC Publications.
</p><p><b>No Refund:</b> Authors will not be eligible for any refund after submitting the manuscript or if the refund request is made more than seven days after the booking.
</p><p><b>Note: All refund amounts will be subject to GST deductions.</b>
</p>
                        </div>
                    <!-- <hr class="pb-2">
                    <div class="page-text">
                        <h3 class="pb-3">Cancellation Policy</h3>
                        <p>We allow cancellations if the service has not been commenced or the order has not been shipped
                            for a full refund minus applicable charges, if any.</p>
                    </div>
                    <hr class="pb-2">
                    <div class="page-text">
                        <h3 class="pb-3">Refund Policy</h3>
                        <p>Refunds will be issued to the original account provided at the time of purchase and in case of
                            payment gateway, refund will be made to the source account.</p>
                    </div> -->
                    <hr class="pb-2">
                </div>
            </div>
        </div>
    </section>
@endsection
