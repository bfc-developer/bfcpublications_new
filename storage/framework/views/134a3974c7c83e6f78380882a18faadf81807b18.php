<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>

html {
  font-family: "Lucida Sans", sans-serif;
}    
* {
  box-sizing: border-box;
}

.row::after {
  content: "";
  clear: both;
/*  display: table;*/
  display: flex;
}

[class*="col-"] {
  float: left;
  padding: 15px;
}

/* For mobile phones: */
[class*="col-"] {
  width: 100%;
}

@media  only screen and (min-width: 600px) {
  /* For tablets: */
  .col-s-1 {width: 8.33%;}
  .col-s-2 {width: 16.66%;}
  .col-s-3 {width: 25%;}
  .col-s-4 {width: 33.33%;}
  .col-s-5 {width: 41.66%;}
  .col-s-6 {width: 50%;}
  .col-s-7 {width: 58.33%;}
  .col-s-8 {width: 66.66%;}
  .col-s-9 {width: 75%;}
  .col-s-10 {width: 83.33%;}
  .col-s-11 {width: 91.66%;}
  .col-s-12 {width: 100%;}
}
@media  only screen and (min-width: 768px) {
  /* For desktop: */
  .col-1 {width: 8.33%;}
  .col-2 {width: 16.66%;}
  .col-3 {width: 25%;}
  .col-4 {width: 33.33%;}
  .col-5 {width: 41.66%;}
  .col-6 {width: 50%;}
  .col-7 {width: 58.33%;}
  .col-8 {width: 66.66%;}
  .col-9 {width: 75%;}
  .col-10 {width: 83.33%;}
  .col-11 {width: 91.66%;}
  .col-12 {width: 100%;}
}
    
    .heading{
          text-align: center;
        padding: .7rem;
        background-color: #ffc952;
        font-weight:700;
    }
    
   
    .padding-3{
        padding: 1rem;
    }
    
    .padding-2{
        padding: .5rem;
    }
    
    .bg-color-blue{
        background-color: yellowgreen;
    }
    
    .color-blue{
        color: cadetblue;
    }
    
     .text-center{
        text-align: center;
    }
    .margin-0{
        margin: 0;
    }
    .padding-0{
        padding: 0;
    }
     .padding-bottom-0{
        padding-bottom: 0;
    }
    .margin-top-0{
        margin-top: 0;
    }
    
/*
    .contain{
       padding-left: 30px;
        padding-right: 30px;
    }
*/
/*
    .jumbo {
    padding-top: 50px;
    padding-bottom: 50px;
    margin-bottom: 30px;
    color: inherit;
    background-color: #eee;
}
    
*/
/* css for table class   */
    
table {
    border-collapse: collapse;
}
    
.table {
    width: 100%;
    margin-bottom: 1rem;
    background-color: transparent;
}    

*, ::after, ::before {
    box-sizing: border-box;
}    
    
.table thead th {
    vertical-align: bottom;
    border: 1px solid #dee2e6;
}
.table td, .table th {
    padding: .50rem;
    vertical-align: top;
    border: 1px solid #dee2e6;
}
th {
    text-align: inherit;
}
.table td, .table th {
    padding: .50rem;
    vertical-align: top;
    border: 1px solid #dee2e6;
}
*, ::after, ::before {
    box-sizing: border-box;
} 
   
    .table-address{
        text-align: right;
        padding-bottom: 0;
        margin-bottom: 0;
    }
    
/*
    .table-auto-responsive{
        overflow-x: auto;
        overflow-y: auto;
       display: block;
        width: 100%;
      
    }    
*/
    
    .profile-img{
        height: 200px;
        width: 100%px;
        border-radius: 10px;
    }
    .table-content{
        text-align: center;
    }
    .table-content thead th{
        background-color: #eee;
         border: 1px solid #dee2e6 !important;
    }
    .table-content thead td{
       border: 1px solid #dee2e6;
     
    }
     
    .no-border{
        border:none !important;
    }
    .no-border td, th{
         border:none !important;
    }
    
  @media  only screen and (max-width: 600px) {
  .img-small {
   display: none;
  }
}  
</style>
</head>
<body>
    

        <h3 class="heading margin-0">Package Details</h3>
    
    <div class="row">
  <div class="col-7 col-s-12">
    <div class="client-info">
        <h4>Author's Information</h4>
        <table class="table table-auto-responsive no-border">
            <?php 

                $leadData = DB::connection('bfcgroup')->table('tblleads')->select('lead_author_name','email','phonenumber')->where('id', $create_lead_id)->first();

            ?>
            <tr><th>Name:</th> <td> <?php echo $leadData->lead_author_name; ?> </td></tr>
            <tr><th>Email:</th> <td><?php echo $leadData->email; ?></td></tr>
            <tr><th>Mobile: </th> <td><?php echo $leadData->phonenumber; ?></td></tr>
        </table>
        <h4>Package Information</h4>
         <table class="table table-auto-responsive no-border">
        <tr>
            <th>Package Name : </th> 
            <?php 

                $query = DB::connection('bfcgroup')->table('servicesdetail')->select('services_nm')->where('id', $service_id)->first();

            ?>
            <td><?php echo $query->services_nm; ?></td>
        </tr>
                <tr><th>Book Type :</th> <td> <?php echo $book_type; ?>  </td></tr>
                <?php if($payment_int_status == 'def'){ ?>
                    <tr>
                        <th>40% Booking Amount :</th> 
                        <td> <?php echo 'Rs. '.number_format($book_amt,0); ?>  </td>
                    </tr>
                    <tr>
                        <th><strong>First Installment :</strong> (Payable within 45 days from the date of booking or date of submission of manuscript, whichever is earlier)</th> 
                        <td> <?php echo 'Rs. '.number_format($first_int,0); ?>  </td>
                    </tr>
                    <tr>
                        <th>Final Installment : </strong>( Payable within 90 days from the date of booking or date of final approval of  manuscript, whichever is earlier)</th> 
                        <td> <?php echo 'Rs. '.number_format($final_int,0); ?>  </td>
                    </tr>
                    <?php }elseif ($payment_int_status == 'full') { ?>
                    <tr>
                        <th>Full Payment :</th> 
                        <td> <?php echo 'Rs. '.number_format($book_amt,0); ?>  </td>
                    </tr>
                    <?php }else if($payment_int_status == 'inst'){?>
                    <tr>
                        <th>Booking Amount :</th> 
                        <td> <?php echo 'Rs. '.number_format($book_amt,0); ?>  </td>
                    </tr>
                    <tr>
                        <th><strong>First Installment :</strong> (Payable within 45 days from the date of booking or date of submission of manuscript, whichever is earlier)</th> 
                        <td> <?php echo 'Rs. '.number_format($first_int,0); ?>  </td>
                    </tr>
                    <tr>
                        <th><strong>Final Installment : </strong>( Payable within 90 days from the date of booking or date of final approval of  manuscript, whichever is earlier)</th> 
                        <td> <?php echo 'Rs. '.number_format($final_int,0); ?>  </td>
                    </tr>
                    <?php } ?>
                    <tr>
                        <th>Package Value </th> 
                        <?php 
                            if($add_cost_value){
                                $package_value_final = $package_value_final + $add_cost_value;
                            }else{
                                $package_value_final = $package_value_final;
                            }
                            // $package_value_final = $package_value_final + $add_cost_value;
                        ?>
                        <td> <?php echo 'Rs. '.number_format($package_value_final,0); ?></td>
                    </tr>
                     <tr>
                        <th>Cost of additional copy :</th> 
                        <td> <?php echo 'Rs. '.number_format($cost_of_additional_copy,0); ?></td>
                    </tr>
                    <?php if($discount==0){}else{
                    
                        /*if($cost_of_additional_copy){
                            $package_value_final = $package_value_final + $cost_of_additional_copy;
                        }*/

                        $new_width = ($discount / 100) * $package_value_final; ?>

                    <tr>
                        <th>Discount :</th> 
                        <td> <?php echo 'Rs. '.number_format($new_width,0); ?></td>
                    </tr>

                    <?php }?>
                    <?php if ($cost_of_additional_copy != 0 && $gross_amt != 0) { ?>
                   
                    <tr>
                        <th>Gross Amount :</th> 
                        <td> <?php echo 'Rs. '.number_format($gross_amt,0); ?></td>
                    </tr>
                   <?php } ?>
                    <tr>
                        <th>GST (18%) :</th> 
                        <td> <?php echo 'Rs. '.number_format($gst,0); ?></td>
                    </tr>
                    <tr>
                        <th>Total Amount :</th> 
                        <td> <?php echo 'Rs. '.$packagecost; ?></td>
                    </tr>
                    
        </table>
    </div>  
  </div>
  <div class="col-5 col-s-12 img-small">
  </div> 
</div>  
 
        <h3 class="heading margin-top-0">Services</h3>
 
 <div class="row">
  <div class="col-12 col-s-12">
       <table class="table table-auto-responsive table-content">
        <thead>
            <tr style=" text-align: justify; text-align-last: justify;">
                <th>Services</th>
                <th>Sub-Services</th>
                      
            </tr>
        </thead>
           
        <tbody>
              <?php  $service_name ='';
                $sub_services = explode(",", $sub_services);
                foreach ($sub_services as $sub_service_data) {

                    $result = DB::connection('bfcgroup')->table('services_level_two')->select('services_level_two.services_level_nm_2','s.services_level_nm')->join('services_level_one as s', 's.id', '=', 'services_level_two.services_level_nm_1')->where('services_level_two.id' ,$sub_service_data)->first();

                    $data_sub_service = $result;

                   // print_r($data_sub_service->services_level_nm_2);

                    if($data_sub_service){
            ?>
             <tr style=" text-align: justify;">
                <td><span class="heading-color">

                        <?php if ($service_name == $data_sub_service->services_level_nm) {
                   
                        }else{
                           $service_name = $data_sub_service->services_level_nm;
                           echo $service_name;
                        }  ?>
                    </span>
                </td>
               <td><?php if ($data_sub_service->services_level_nm_2 == 'Format Editing') {
                  if ($number_of_pages_1) {
                   echo $data_sub_service->services_level_nm_2.' - '.$number_of_pages_1.' Pages';
                  }else{
                    echo $data_sub_service->services_level_nm_2;
                  }
                }else if ($data_sub_service->services_level_nm_2 == 'English to Hindi translation (250-300 words in a page)') {
                  if ($number_of_pages_2) {
                   echo $data_sub_service->services_level_nm_2.' - '.$number_of_pages_2.' Pages';
                  }else{
                    echo $data_sub_service->services_level_nm_2;
                  }
                }elseif ($data_sub_service->services_level_nm_2 == 'Complimentary Author Copies') {
                 if ($complimentry_copies) {
                   echo $data_sub_service->services_level_nm_2.'('.$complimentary.')';
                  }else{
                    echo $data_sub_service->services_level_nm_2;
                  }
                }elseif ($data_sub_service->services_level_nm_2 == 'Additional Author Copies - Order at Subsidised Price') {
                  if ($complimentry_copies) {
                    echo $data_sub_service->services_level_nm_2.'('.$additionalPages.')';
                   }else{
                     echo $data_sub_service->services_level_nm_2;
                   }
                 }elseif ($data_sub_service->services_level_nm_2 == 'Number of Pages Allowed') {
                 if ($number_of_pages_1) {
                   echo $data_sub_service->services_level_nm_2.' - '.$number_of_pages_1.' Pages';
                  }else{
                    echo $data_sub_service->services_level_nm_2;
                  }
                } elseif ($data_sub_service->services_level_nm_2 == 'Color Pages') {
                  if ($color_pages) {
                    echo $data_sub_service->services_level_nm_2.'('.$color_pages.')';
                   }else{
                     echo $data_sub_service->services_level_nm_2;
                   }
                 }elseif ($data_sub_service->services_level_nm_2 == 'Paper Type') {
                 if ($paper_type) {
                   echo $data_sub_service->services_level_nm_2.'('.$paper_type.')';
                  }else{
                    echo $data_sub_service->services_level_nm_2;
                  }
                }elseif ($data_sub_service->services_level_nm_2 == 'Book Size') {
                 if ($book_size) {
                   echo $data_sub_service->services_level_nm_2.'('.$book_size.')';
                  }else{
                    echo $data_sub_service->services_level_nm_2;
                  }
                }elseif ($data_sub_service->services_level_nm_2 == 'Lamination') {
                 if ($book_cover) {
                   echo $data_sub_service->services_level_nm_2.'('.$lamination.')';
                  }else{
                    echo $data_sub_service->services_level_nm_2;
                  }
                }elseif ($data_sub_service->services_level_nm_2 == 'Book Cover Type') {
                 if ($book_cover) {
                   echo $data_sub_service->services_level_nm_2.'('.$book_cover.')';
                  }else{
                    echo $data_sub_service->services_level_nm_2;
                  }
                }else{
                    echo $data_sub_service->services_level_nm_2;
                } ?></td>
            </tr>
           
            <?php } } ?>
            
        </tbody>
    </table>
    <div>
      <center><u><b>Terms & Conditions</b></u></center>
    <!--   <p><b>Payment Terms: </b> The Author is required to pay the agreed package value for the services he/she seeks to avail. The Publication process shall commence only after receipt of package value as per selected plan & payment option. Further all the outstanding payments have to be settled in accordance with the timeline mentioned in this Package. Any defaults or delays shall be treated as the breach of contract leading to suspension of services.</p>
      <p><b>Time line for Completion of the Project: </b>BFC Publications shall complete the project within sixty working days. This time line shall start from the date of submission of manuscript. The period of sixty days shall not include period of delayed response to inquiries or requests made by BFC Publication to the Author, or delays caused due to Act of God/natural calamities/government regulations owing to pandemics/public holidays, or due to untimely release of payment. Also, the sixty-day Timeline shall not include the days required to complete any typing or translation work as requisitioned by the author. </p> -->
        <p><b>Escalation in package price: </b>The above package value is valid for a period of six months from the date of booking. In case the Author fails to pay agreed amount within this timeline and there is any revision in package tariff after six months, the differential amount would be payable by the author at that time. </p>
      <p><b>Cancellation of Project: </b> BFC Publications reserves the right to cancel the project if the Author has not cleared any outstanding payments as per the payment schedule.</p>

      <p><b>Refund Policy -</b></p>
      <p><b>The terms of refund under Full Payment Plan:</b>
        <ul>
          <li><b>Full Refund:</b> The Author is eligible for a refund of entire amount paid to BFC Publications within seven days of making the payment.</li>
         <!--  <li><b>Partial Refund: </b> The Author is eligible for a refund of sixty percent of the amount paid to BFC Publications in case the refund request has been submitted between 8 to 180 days of making the payment, provided the author failed to submit the manuscript.</li> -->
          <li><b>No Refund:</b> The Author is not eligible for any refund after submission of the Manuscript or if the refund request has been submitted after seven days of the payment.</li>
        </ul>
      </p>

      <!-- <p><b>The terms of refund under Instalment Plan:</b>
        <ul>
          <li><b>Full Refund:</b> The Author is eligible for a refund of entire amount paid to BFC Publications within seven days of making the payment.</li>
          <li><b>No Refund:</b> Subsequent Instalments are not eligible for any refund.</li>
        </ul>
      </p> -->
  <p><b>Note - All refunds shall be subject to GST deductions.</b></p>
    </div>
  </div>
</div>
</body>
</html>

<?php /**PATH /home/bfcpublications/public_html/resources/views/pdf/packagePdf.blade.php ENDPATH**/ ?>