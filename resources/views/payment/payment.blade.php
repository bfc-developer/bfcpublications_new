

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
			rel="stylesheet">
			<title>BFC Publications</title>
            <link rel="icon" href="https://bfcpublications.com/public/favicon.png" />
			<!-- <link rel="stylesheet" href=""> -->
		</head>
		<style>
            .error{
  color:red;
}
			body{
				font-family: 'Poppins', sans-serif;
			}
			.custom-shodow{
				box-shadow: rgba(0, 0, 0, 0.02) 0px 1px 3px 0px, rgba(27, 31, 35, 0.15) 0px 0px 0px 1px;
				padding: 30px;
				border-radius: 8px;
				background: aliceblue;
			}
			.center {
		position: absolute;
		top: 50%;
		left: 50%;
		transform: translate(-50%, -50%);
		}
			.logo{
				max-width: 220px !important;
			}
			.bg-color{
		background: #F06D70;
		margin: 20px 0;
		}
			.heading h2 {
		margin-top: 0px;
		margin-bottom: 0px;
		font-size: 24px;
		padding: 8px 0;
		color: #fff;
		}
		.pt-30{
		padding-top: 30px;
		}
		.pb-20{
		padding-bottom: 20px;
		}
		.pl-2{
			padding-left: 12px !important;
		}
		.bg-img {
		background-image: url('bg.png');
		background-position: center;
		background-size: cover;
		height: 100vh;
		}
		.btn {
		padding: 10px 40px;
		font-size: 14px;
		font-weight: 600;
		border-radius: 16px;
		background: #F06D70;
		box-shadow: rgb(0 0 0 / 35%) 0px 5px 15px;
		border: none;
		color: #fff;
		}
		.btn.focus, .btn:focus, .btn:hover {
		color: #fff !important;
		text-decoration: none;
		box-shadow: rgb(0 0 0 / 35%) 0px 5px 15px !important;}
		@media only screen and (max-width: 768px) {
		.personalHeading{
		width: 1000px !important;
		color: red;
		font-size: 18px;
		}
		}
		</style>
		<body>
			<section class="bg-img">
				<div class="container">
					<div class="row justify-content-center center">
						<div class="col-md-12 custom-shodow">
							<div class="row">
								<div class="col-md-12 text-center">
									<img src="logo.png" class="img-fluid logo">
								</div>
							</div>
							<div class="row">
								<div class="col-md-12 text-center heading bg-color">
									<h2 class="personalHeading">Welcome To Our Payment Channel</h2>
								</div>
							</div>
							<div class="payment-form pt-30">
								<form action="request.php" method="POST" id="paymentform">
									<div class="form-row">
										<div class="form-group col-md-6">
											<label for="inputAmount">Amount</label>
											
											<input type="number" maxlength="6" minlength="1"   class="form-control" name="orderAmount" id="inputAmount" placeholder="" required/>
										</div>
										<div class="form-group col-md-6">
											<label for="inputName">Name</label>
                                            
                                            <input class="form-control" name="orderId" type="hidden" value="<?php echo rand(10,100000);?>" placeholder="Enter App ID here (Ex. 123456a7890bc123defg4567)"/>
                                            <input class="form-control" name="appId" type="hidden" value="733936538bd77bb9b19ec42f039337" placeholder="Enter App ID here (Ex. 123456a7890bc123defg4567)"/>
                                            <input class="form-control" name="orderNote" type="hidden" value="4444" placeholder="Enter Order Note here (Ex. Test order)"/>
                                            <input class="form-control" name="notifyUrl" type="hidden" value="http://localhost/cashfree/response.php" placeholder="Enter the URL to which customer will be redirected (Ex. www.example.com)"/>
                                            <input class="form-control" name="returnUrl" type="hidden" value="http://localhost/cashfree/response.php" placeholder="Enter the URL to which customer will be redirected (Ex. www.example.com)"/>
                                            <input class="form-control" type="hidden" name="orderCurrency" value="INR" placeholder="Enter Currency here (Ex. INR)"/>
											<input type="text" maxlength="50" minlength="5" class="form-control" name="customerName" id="inputName" placeholder="" >
										</div>
										<div class="form-group col-md-6">
											<label for="inputEmail">Email</label>
											<input type="email" maxlength="40" class="form-control" name="customerEmail" id="inputEmail" placeholder="" />
										</div>
										<div class="form-group col-md-6">
											<label for="inputPhone">Phone</label>
											<input type="number" minlength="10"  maxlength="10" class="form-control" name="customerPhone" id="inputPhone" placeholder="" />
										</div>
										<div class="form-group col-md-6">
											<label for="inputState">State</label>
											<select id="inputState" class="form-control" name="state">
												<option value="">Select</option>
												@foreach ($state as $states)
												<option value="{{ $states->name }}">{{ $states->name }}</option>
												@endforeach
											</select>
										</div>
										<div class="form-group col-md-6 pl-2">
											<label for="inputPassword4" style="display:block;">GST Registered ?</label>
											<div class="form-check form-check-inline">
												<input class="form-check-input" name="gst" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
												<label class="form-check-label" for="inlineRadio1">YES</label>
											</div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" name="gst" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
												<label class="form-check-label" for="inlineRadio2">No</label>
											</div>
										</div>
									</div>
									
								</div>
								<div class="col-md-12 pt-30 pb-20">
									<a href="https://bfcpublications.com/" class="btn  category-save-btn"> Back</a>
									<button type="submit" class="btn  category-save-btn float-right">Submit</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.14.0/jquery.validate.js"></script>
		<script>
            $(document).ready(function($) {
        
        $("#paymentform").validate({
        rules: {
            orderAmount:"required",  
            customerName: "required",                    
            customerEmail: {
                required: true,
                email: true,
            },
            customerPhone: {
                required: true,
                maxlength: 10,
            },
            
            state: "required",
            gst: "required"
         
        },
        messages: {
            orderAmount: "Please enter  amount", 
            customerName: "Please enter  Name",                   
            customerEmail: {
                required: "Please enter email",
                email: "Please enter valid email"
            },
            customerPhone: {
                required: 'Please enter mobile no',
                maxlength: "Please enter mobile no 10 digit",
            },
            state: "Please enter your state",
            gst: "This field is required"
        },
         errorPlacement: function(error, element) 
{
    if ( element.is(":radio") ) 
    {
        error.appendTo( element.parents('.form-group') );
    }
    else 
    { // This is the default behavior 
        error.insertAfter( element );
    }
 },
        submitHandler: function(form) {
            form.submit();
        }
        
    });
});
        </script>
		<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
      
		<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
	</body>
</html>