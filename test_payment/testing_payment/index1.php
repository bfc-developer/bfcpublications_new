<?php include 'config.php';

// // $servername = "localhost";
// // $username = "bfcgroup";
// // $password = "FuCjrKCTss3gKyf";
// // $dbname = "bfcpublicationswebsite";
//  $tablename='cashfree_payment';
// //  // Create connection
// //  $conn = new mysqli($servername, $username, $password, $dbname);
// //  // Check connection
// //  if ($conn->connect_error) {
// //    die("Connection failed: " . $conn->connect_error);
// //  }
//  $sql="INSERT INTO `".$tablename."` (`order_id`, `order_amount`) VALUES ( '2ds323', '555')";
//  if ($con->query($sql) === TRUE) {
//      echo "New record created successfully"; die;
//    } else {
//      echo "Error: " . $sql . "<br>" . $conn->error; die;
//    }



?>
<!DOCTYPE html>
<html>
<head>
<title>How to Integrate Cashfree payment gateway in PHP | tutorialswebsite.com</title>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" media="screen">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body style="background-repeat: no-repeat;">
<div class="container">
<div class="row">
<div class="col-xs-12 col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">Charge Rs.10 INR  </h4>
                    </div>
                    <div class="panel-body">
  <form  action="https://bfcpublications.com/payment_details/testing_payment/pay.php" method="post">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" name="cust_name" id="cust_name" placeholder="Enter name" required="" autofocus="">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" required="">
                        </div>
                        
                  <div class="form-group">
                            <label>Mobile Number</label>
                            <input type="number" class="form-control" name="mobile" id="mobile" min-length="10" max-length="10" placeholder="Enter Mobile Number" required="" autofocus="">
                        </div>
                        
                         <div class="form-group">
                            <label>Payment Amount</label>
                            <input type="text" class="form-control" name="amount" id="amount" value="10" placeholder="Enter Amount" required="" autofocus="">
                        </div>
						
	<!-- submit button -->
	<button  id="PayNow" class="btn btn-success btn-lg btn-block" >Submit & Pay</button>
                       </form>
                    </div>
                </div>
            </div>
</div>
</div>
</body>
</html>
