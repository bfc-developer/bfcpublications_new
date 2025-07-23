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

  .mxw-100 {
    max-width: 100%;
  }

  .form-check-input {
    cursor: pointer;
  }

  .btn-info:hover {
    color: #ffffff;
    background-color: #F06D70;
    border-color: #F06D70;
  }

  .btn:focus {
    outline: none;
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
    .col-md-6 {
      margin: 1em 0px;
    }

    .img-bfcbrand-logo {
      width: 90%;
    }

    .form-data {
      padding: 10px;
    }

    .panel_s .panel-body {
      padding: 25px 6px;
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

    select {
      max-width: 100%;
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

  .text-redh {
    color: #f44556;
  }
  .mr-top{
    margin-top: 20px;
  }
</style>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb px-4 py-2">
    <li class="breadcrumb-item"><a class="text-red-c" href="{{ url('/') }}"><i class="fa fa-home"></i></a></li>
    <li class="breadcrumb-item active fs-6 " aria-current="page">Standard package</li>
  </ol>
</nav>
<!-- start -->
<div class="content custom-pack mb-5">
  <div class="container main-top-responsive-update">
    <div class="row justify-content-center">
      <div class="col-md-12 col-lg-10">
        <div class="panel-body my-5">
          <div class="panel_s">
            <div class="panel-body">
              <div class="_buttons">
                <!-- ==================  editorial-services Start ========================== -->
                  <form action="https://bfcpublications.com/save-leads" method="post" id="packegeForm" enctype="multipart/form-data">
                  @csrf

                  <?php // echo "<pre>";  print_r($service['services_1']); 
                     $cost=0;
                    foreach($service['services_1'] as $services_1){
                      
                   ?>
                  <div class="form-data">
                    <section id="editorial-services">
                      <h3 class="text-center"><strong><?php echo $services_1['services_level_nm'];?></strong></h3>
                      <input type='checkbox' checked style='display:none' name='services[]' class='servicesstand  <?php if($services_1['services_level_nm']=="Marketing your Masterpiece"){  echo "mar_serval"; }?>' data-name='<?php echo $services_1['services_level_nm']; ?>' data-count='<?php echo count($services_1['sub_services']); ?>' value="<?php echo $services_1['id']; ?>"   >
                      <hr>
                      <div class="row my-md-4">

                        <!-- <div class="col-md-6">
                          <div class="form-group" app-field-wrapper="email">
                            <label for="email" class="control-label">Cover Design</label> <span
                              style="color:red;">*</span>
                            <select id="city" name="city" class="form-control" required>
                              <option value="">Select</option>
                            </select>
                          </div>
                        </div>  -->
                          
                        <?php 
                            $i=1; $c=1;
                            foreach ($services_1['sub_services'] as $sub_services) { 
                              $val = $sub_services['services_cost']*$sub_services['value'];
                              $cost +=$val;

                              if(strpos($sub_services['services_level_nm_2'],'Format Editing') !== false){ ?>
                                  <input type="hidden" class="form-control" id="no_page_1" name="no_page_1" value="<?php echo $sub_services['value']; ?>">
                              <?php } ?>
                              
                         <div class="col-md-6 align-self-center mt-md-4">
                              <div class="form-check row">
                                <label class="form-check-label">
                                <input type="checkbox" name="sub_services[]"  id="services_<?php echo $sub_services['id']; ?>" class=" form-check-input subservicesstand "  data-name='<?php echo $sub_services['services_level_nm_2']; ?>' data-service='<?php echo $services_1['services_level_nm']; ?>' data-id='<?php echo $sub_services['id']; ?>' value="<?php echo $sub_services['id']; ?>" checked onclick="return false;" >
                               
                                 <?php echo $sub_services['services_level_nm_2'];?>
                                
                                </label>

                                <input type="hidden" class="form-control" id="serviceCost_<?php echo $sub_services['id']; ?>" name="serviceCost_<?php echo $sub_services['id']; ?>" value="<?php echo $val; ?>" readonly>
                                <input type="hidden" class="form-control" id="servicen_nm_<?php echo $sub_services['id']; ?>" name="servicen_nm_<?php echo $sub_services['id']; ?>" value="<?php echo $sub_services['services_level_nm_2']; ?>" readonly>

                                <input type="hidden" class="form-control servicepage" id="servicepage_<?php echo $sub_services['id']; ?>" name="servicepage_<?php echo $sub_services['id']; ?>" value="<?php echo $val; ?>" readonly>

                                <input type="hidden" class="form-control" id="box_type_<?php echo $sub_services['id']; ?>" name="box_type_<?php echo $sub_services['id']; ?>" value="0" readonly>

                              </div>
                            </div>
                          <?php  }    ?>
                      </div>
                    </section>
                  </div>
                  <hr>

                <?php  } echo '<input type="hidden" class="form-control" id="standard_cost" name="standard_cost" value="'.$cost.'">'; ?>
                 <div class="form-data">
                    <section id="e-book-s">
                      <input type="hidden" id="bookSizeVal" name="bookSizeVal" class="form-control" value="0" placeholder="0" >
                      <input type="hidden" id="complimentary" name="complimentary" class="form-control" value="0" placeholder="0" >
                      <input type="hidden" class="form-control" id="package_value" name="package_value" value="0" readonly>
                    <div class="row">
                      <div class="col-md-4 pt-30 pb-20">
                        <label class="form-check-label">Package Value </label>
                        <input type="text" class="form-control" id="package_value_final" name="package_value_final" value="0" readonly>
                      </div>
                       <div class="col-md-4 pt-30 pb-20">
                      <label class="form-check-label">GST </label>
                      <input type="text" class="form-control" id="gst" name="gst" value="0" readonly>
                    </div>
                     <div class="col-md-4 pt-30 pb-20">
                      <label class="form-check-label">Gross Amount</label>
                      <input type="text" class="form-control" id="package_cost" name="package_cost" value="0" readonly>
                      <input type="hidden" id="book_amt" name="book_amt" value="0">
                      <input type="hidden" id="first_int" name="first_int" value="0">
                      <input type="hidden" id="final_int" name="final_int" value="0">
                      <input type="hidden" id="msstatus" name="msstatus" value="">
                      <input type="hidden" id="payment_int_status" name="payment_int_status" value="full">

                      <input type="hidden" id="author_name" name="author_name" value="">
                      <input type="hidden" id="phonenumber" name="phonenumber" value="">
                      <input type="hidden" id="email" name="email" value="">

                      <input type="hidden" id="packages_id" name="packages_id" value="2">
                      <input type="hidden" id="book_type" name="book_type" value="<?php echo $book_type; ?>">
                      <input type="hidden" id="service_id" name="service_id" value="6">

                      <input type="hidden" id="discount" name="discount" value="10">
                    </div>
                    </div>
                      <div class="row">
                        <div class="col-md-12 pt-30 pb-20">
                          <button type="button" style="text-align: center;" class="btn  btn-custom float-right"
                            onclick="seven();">Continue</button>
                        </div>
                      </div>
                    </section>
                  </div>
              </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<!-- ================== checkout start ========================== -->
<section id="checkout" class="mb-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-10">
        <div class="panel_s">
          <div class="panel-body">
            <button class="btn btn-custom" onclick="back();">
              <i class="fa fa-arrow-left me-2"></i> Back
            </button>
            <div class="row justify-content-center">
              <div class="col-lg-5 col-md-8">
                <h5 class="text-redh text-center my-3"><b>Checkout</b></h5>
                <div class="maniscript d-flex box justify-content-between">
                  <h6>Is your manuscript ready</h6>
                  <div class="checkbox-wrapper-3">
                   <input type="checkbox" id="cbx-3" value="1" onclick="maniscript();" />
                    <label for="cbx-3" class="toggle"><span></span></label>
                  </div>
                </div>
                 <div class="maniscript box justify-content-between">
                  <h6>Name <span class="text-danger">*</span></h6>
                  <div class="checkbox-wrapper-3">
                    <input type="text" class="form-control" id="name" name="name" value="" onkeyup="authorDetails();" />
                    <!-- <label for="cbx-3" class="toggle"><span></span></label> -->
                  </div>
                </div>
                 <div class="maniscript box justify-content-between">
                  <h6>Mobile No <span class="text-danger">*</span></h6>
                  <div class="checkbox-wrapper-3">
                    <input type="text" class="form-control" id="mobile" name="mobile" value="" onkeyup="authorDetails();"/>
                    <!-- <label for="cbx-3" class="toggle"><span></span></label> -->
                  </div>
                </div>
                <div class="maniscript box justify-content-between">
                  <h6>Email <span class="text-danger">*</span></h6>
                  <div class="checkbox-wrapper-3">
                    <input type="text" class="form-control" id="emailId" name="emailId" value="" onkeyup="authorDetails();"/>
                    <!-- <label for="cbx-3" class="toggle"><span></span></label> -->
                  </div>
                </div>
                <div class="box mt-3">
                  <h6><b>Payment Mode</b></h6>
                  <hr>
                  <div class="d-flex justify-content-between">
                    <h6 class="fw-600">Full Payment </h6>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked onclick="installment('full');">
                    </div>
                  </div>
                   <p id="full_amt">₹ 50359.14</p>
                  <p>Get flat 10% discount on full payment</p>
                  <hr>
                  <div class="d-flex justify-content-between">
                    <h6 class="fw-600">Flexi Payment </h6>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" onclick="installment('inst');">
                    </div>
                  </div>
                   <p>Pay using flexible option as :</p>
                  <div class="d-flex justify-content-between">
                    <p>First Installment</p>
                    <p id="book_amt_p">00.0 (40%)</p>

                  </div>
                  <div class="d-flex justify-content-between">
                    <p>Second Installment</p>
                    <p id="first_int_p">00.0 (40%)</p>
                    
                  </div>
                  <div class="d-flex justify-content-between">
                    <p>Final Installment</p>
                    <p id="final_int_p">00.0 (20%)</p>
                   
                  </div>
                </div>
                <select name="state" id="state" class="box form-control mt-3 mxw-100">
                  <option value="">Select State</option>

                  <?php foreach($get_states['data'] as $state){  
                    ?>
                      <option value="<?php echo $state['id'];?>"><?php echo $state['name'];?></option>
                  <?php }?>

                </select>
                <div class="d-flex justify-content-between box mt-3">
                  <div>
                    <h6 id="pay_amt">₹ 00.0 </h6>
                    <p class="mb-0" style="font-size:10px">*18% GST included</p>
                  </div>
                  <button type="button" class="btn btn-custom" onclick="submit();">
                    Buy Now
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ==================  checkout End ========================== -->

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
<script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
<!-- end -->
<script>

  function validation(text){
      Toastify({
          text: text,
          duration: 3000, // Time in milliseconds
          gravity: "top", // `top` or `bottom`
          position: "right", // `left`, `center`, or `right`
          backgroundColor: "#dc3545", // Custom background color
          close: true // Adds a close button
        }).showToast();
  }

  function submit(){
    
    let dataErr = [];
    var name = $("#name").val();
    var mobile = $("#mobile").val();
    var emailId = $("#emailId").val();
    var state = $("#state").val();


    const emailRegex = /^[^@ ]+@[^@ ]+\.[^@ ]+$/;  // Email Validation
    const EmailValid = emailRegex.test(emailId)

    if(name==""){
        validation("Name Mandatory field")
        var isValid = {err:"1"};
        dataErr.push(isValid);
    }else{
        
    }

    if(emailId==""){
        validation("Email Id Mandatory field")
        var isValid = {err:"1"};
        dataErr.push(isValid);
    }else if (EmailValid == false) {
        validation("Email Id is Invalid")
        var isValid = {err:"1"};
        dataErr.push(isValid);
    }else{

    }

    var mobPattern = /^(?:(?:\\+|0{0,2})91(\s*[\\-]\s*)?|[0]?)?[6789]\d{9}$/;   // Mobile Validation
    const PhoneValid = mobPattern.test(mobile);

      if(mobile==""){
        validation("Mobile No Mandatory field")
        var isValid = {err:"1"};
        dataErr.push(isValid);
      }else if (PhoneValid == false) {
        validation("Mobile No is Invalid.")
        var isValid = {err:"1"};
        dataErr.push(isValid);
      }else{

      }

      if(state==""){
        validation("State Mandatory field")
        var isValid = {err:"1"};
        dataErr.push(isValid);
      }else{
         
      }
    
      if(dataErr.length==0){
        $("#packegeForm").submit();
      }   
  }

  function authorDetails(){

    var name = $("#name").val();
    var mobile = $("#mobile").val();
    var emailId = $("#emailId").val();

    $("#author_name").val(name)
    $("#phonenumber").val(mobile)
    $("#email").val(emailId);
  }

  function maniscript(){
    
    var isChecked = $("#cbx-3").prop('checked');
    if(isChecked==true){
      $("#msstatus").val("completed");
    }else{
      $("#msstatus").val("inprocess");
    }
  }

  function seven() {
    let selectBoxIds = [];

    $(".select_service_val").each(function() {
      selectBoxIds.push($(this).attr('id'));
    }).get();

    var final_total = $("#package_value_final").val();
    var total = $("#package_value").val();
    var gst_amt = $("#gst").val();
    var package_cost = $("#package_cost").val();

    var discount_amt =  (final_total*10)/100;
    var gross_amt = final_total - discount_amt;
    var gst_amt =  (gross_amt*18)/100;
    var after_package_cost =  parseInt(gross_amt) + parseInt(gst_amt);

    $("#gst").val(gst_amt);
    $("#package_cost").val(after_package_cost);
    $("#full_amt").html("₹ "+after_package_cost);


    var inst_40 = (40 / 100) * package_cost;
    var inst_20 = (package_cost - (inst_40 + inst_40)).toFixed(2);

    $("#pay_amt").html("₹ "+after_package_cost);
        // alert(pay_amt)
    $("#book_amt_p").html(inst_40.toFixed(2)+" (40%)");
    $("#first_int_p").html(inst_40.toFixed(2)+" (40%)");
    $("#final_int_p").html(inst_20+" (20%)");

    $("#book_amt").val(after_package_cost);

    $("#checkout").css("display", "block");
    $(".custom-pack").css("display", "none");


  }

  function back() {
    $("#checkout").css("display", "none");
    $(".custom-pack").css("display", "block");
  }

   function installment(inst){

    var final_total = $("#package_value_final").val();
    var total = $("#package_value").val();
    var gst_amt = $("#gst").val();
    var package_cost = $("#package_cost").val();

    if(inst=="full"){
      // payment_int_status
        var discount_amt =  (final_total*10)/100;
        var gross_amt = final_total - discount_amt;
        var gst_amt =  (gross_amt*18)/100;
        var package_cost =  parseInt(gross_amt) + parseInt(gst_amt);

        $("#gst").val(gst_amt);
        $("#package_cost").val(package_cost);
        $("#full_amt").html("₹ "+package_cost);
        $("#pay_amt").html("₹ "+package_cost);

        $("#book_amt").val(package_cost);
        $("#first_int").val(0);
        $("#final_int").val(0);
        $("#payment_int_status").val("full");
    }else{

        var gross_amt = parseInt(final_total)
        var gst_amt =  (gross_amt*18)/100;
        var package_cost =  parseInt(gross_amt) + parseInt(gst_amt);

        $("#gst").val(gst_amt);
        $("#package_cost").val(package_cost);

        var inst_40 = (40 / 100) * package_cost;
        var inst_20 = (package_cost - (inst_40 + inst_40)).toFixed(2);
        $("#pay_amt").html("₹ "+inst_40.toFixed(2));

        $("#book_amt").val(inst_40.toFixed(2));
        $("#first_int").val(inst_40.toFixed(2));
        $("#final_int").val(inst_20);
        $("#payment_int_status").val("inst");
    }   

  }


   $(document).ready(function(){
        var standard_cost = $("#standard_cost").val();
        var standard_cost = $("#standard_cost").val();
        var final_total = parseInt(standard_cost) + (standard_cost*40)/100;
        $("#package_value_final").val(final_total.toFixed(0))
                        // alert(final_total.toFixed(0))
        var package_value_final =  $("#package_value_final").val();
        var final_total = parseInt(package_value_final)

                        /*if(discount!=''){
                            var discount = (discount * 100) / 100;
                            var discount_p = (final_total * discount) / 100;
                            var gross_amt = final_total - discount_p;
                            // alert(discount_p)
                        }else{
                            // alert("hello-1")
                            var gross_amt = final_total;
                        }*/
                        
        // var gst_amt =  (final_total*18)/100;
        // var package_cost =  parseInt(final_total) + parseInt(gst_amt);

         var gross_amt = parseInt(final_total)
        var gst_amt =  (gross_amt*18)/100;
        var package_cost =  parseInt(gross_amt) + parseInt(gst_amt);


        $("#gross_amt").val(gross_amt);
        $("#package_value").val(standard_cost);
        $("#gst").val(parseInt(gst_amt));
        $("#package_cost").val(package_cost);
    }); 

</script>

@endsection