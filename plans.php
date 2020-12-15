<?php 
require_once 'includes/dbh.inc.php';

// GET USER INSIDE USERS TABLE
$sql = "SELECT usersId, usersName FROM users WHERE usersId = '31' "; /* Where customerId = '1' */
$result = $conn->query($sql);

if ($result->num_rows > 0) {
// output data of each row
  while($row = $result->fetch_assoc()) {
  	$customerId = $row["usersId"];
    $customerName = $row["usersName"];
  }//Closing WHILE
}//Closing IF
 else {
  echo "0 results"; 
}//Closing ELSE
	
//SEND PAYMENT DETAILS TO DATABASE:

//if(isset($_POST['submit'])) {

$cardNumber = isset($_POST["numberCard"]) ? $_POST['numberCard'] : '';
$nameCard = isset($_POST["nameCard"]) ? $_POST['nameCard'] : '';
$monthCard = isset($_POST["monthCard"]) ? $_POST['monthCard'] : '';
$yearCard = isset($_POST["yearCard"]) ? $_POST['yearCard'] : '';
$ccvCard = isset($_POST["ccvCard"]) ? $_POST['ccvCard'] : '';
$paymentDate = date("d/m/y");

if ($cardNumber == "" && $nameCard == "" && $monthCard == "" && $yearCard == "" && $ccvCard == "") {
	
}

else {

  $conn= mysqli_connect($serverName, $dbUsername, $dBPassword, $dBName);
  // Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 
			/*
			Payment
			*/

	$sqlInsert = "INSERT INTO payment (usersId, numberCard, monthCard, yearCard, ccvCard, PaymentDate, nameOnCard) VALUES ('$customerId', '$cardNumber', '$monthCard','$yearCard','$ccvCard','$paymentDate', '$nameCard')";
			
	if(mysqli_query($conn, $sqlInsert)) {
	  //echo "New record created successfully";
	} 
	else {
	  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		} 
			/*
			Membership
			*/

	$sqlInsert2 = "INSERT INTO membership (usersId, memberType) VALUES ('$customerId', 'Premium')";

	if(mysqli_query($conn, $sqlInsert2)) {
	  //echo "New record created successfully";
	} 
	else {
	  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			} 
		}
	

	
$conn->close();
?>
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Sit2Fit</title>
    <link href="product.css" type="text/css" rel="stylesheet"/>
    <!-- <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/product/"> -->
    <!-- Bootstrap core CSS -->
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script>
    	function disableElement(){
		document.getElementById("btnNext").disabled = true;
		//document.getElementsByClassName("blockk").disabled = true;
		}

		function goBack() {
		alert("Your payment has been successfull");
		disableElement();
		window.close();
  		//window.open("mindex.php");
  		
		}

	</script>
    <!-- Custom styles for this template -->
  </head>
  <body>

<!--NAV BAR -->
<!-- **** **** **** **** < left section > **** **** **** **** -->
<nav class="site-header sticky-top py-1">
	  	<div class="container d-flex flex-column flex-md-row justify-content-between">
		    <a class="py-2 d-none d-md-inline-block" href="#">Sit2Fit</a>    
			<a class="navbar-brand" href="#"></a><br>  
			<a class="py-2 d-none d-md-inline-block" href="index.php">Home</a>
			<a class="py-2 d-none d-md-inline-block" href="profile.php">Profile</a>
		    <a class="py-2 d-none d-md-inline-block" href="workouts.php">Workout</a>
		    <a class="py-2 d-none d-md-inline-block" href="api.php">Gym Finder</a>
		    <a class="py-2 d-none d-md-inline-block" href="ptindex.php">PT login</a>
		    <a class="py-2 d-none d-md-inline-block" href="mindex.php">Membership</a>
	 	</div>
	</nav>

<div class="container-fluid">
  <div class="row content">
    <div class="col-md-3 sidenav">
      <i class='fas fa-user-circle' style='font-size:100px;color:black;margin-left: 34%'></i>
      <br>
      <h4 class='position' style="margin-left: 26%; margin-top: 5%">
      	<?php echo $customerName; ?>
      </h4>
           <a href="mindex.php"><button type="button" class="btn btn2 btn-link">Back</button></a>
    <div class="list-group">
       <a href="mindex.php" class="list-group-item list-group-item-action"> Membership </a> <!-- active  CLASS-->
       <a href="#" class="list-group-item list-group-item-action active">Billing</a>
       <a href="charges.php" class="list-group-item list-group-item-action">Charges</a>
    </div>
      <br>
    </div>
<!-- 

**** **** **** **** < middle section > **** **** **** ****

-->
<div class="col-md-9">
    <div class = "row"> 
        <div class="col-lg-6">
          <!-- CARD 1 -->
          <div class="card" style="width: 18rem; margin-top: 17%;margin-left: 20%">
          <img src="premium.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"></h5>
              <p class="card-text">We have the best training facilities and experience possible to our valued members. Become a PREMIUM member !</p>
             <!-- <a href="#" class="btn btn-primary">Go</a> -->
            </div>
          </div>
        </div>
        <div class="col-lg-6">
         <form action="plans.php" method="post" style="margin-top: 5%;">
  			<div class="form-group">
   				<label class="oi" for="formGroupExampleInput">Credit Card Number</label>
    			<input type="text" class="form-control" id="formGroupExampleInput" placeholder="Enter your 16 digit card" maxlength="16" name="numberCard">
  			</div> <!-- End 1--> 
  			 <div class="form-group">
   				<label for="formGroupExampleInput">Name on the Card</label>
    			<input type="text" class="form-control blockk" id="formGroupExampleInput" placeholder="Same name on the card" name="nameCard">
  			</div> <!-- End 2-->   
  			<div class="form-group">
   				<label for="formGroupExampleInput">Expiry Date - Month</label>
    			<input type="text" class="form-control" id="formGroupExampleInput" placeholder="MM" maxlength="2" name="monthCard">
  			</div> <!-- End 3-->  
  			<div class="form-group">
   				<label for="formGroupExampleInput">Expiry Date - Year</label>
    			<input type="text" class="form-control" id="formGroupExampleInput" placeholder="YY" maxlength="2" name="yearCard">
  			</div> <!-- End 4-->
  		 	<div class="form-group">
   				<label for="formGroupExampleInput">CCV</label>
    			<input type="text" class="form-control" id="formGroupExampleInput" placeholder="XXX" maxlength="3" name="ccvCard">
  			</div> <!-- End 5-->  
  			<a href="www.google.com"><button type="button submit" id="btnNext" class="btn btn-primary btn-md">Next</button> </a>			 			
  		</form>
        </div> <!-- End Column 6-->        
      </div>
    </div>
</div> 
<style type="text/css">
	.form-group{margin-right: 20%;}
	.oi{margin-top: 13%}
	.btn{width: 80%}
	.btn2{width: 100%; margin-top: 4%;}
	.py-2{font-color: black;}
    .site-header a:hover {color: white;}
    .fas{margin-top: 15%;}
    .py-5{margin-top: 0.5%;}

</style>    
      <!-- 
      <hr style="width:60%;margin-left:0;background: black;">
      <h2>Plans</h2>
      -->


<footer class="container py-5" style="margin-left: 15%">
  <div class="row">
    <div class="col-12 col-md">
     <img src="thumbnail.jpeg" width="100" height="100" alt="" loading="lazy">
      <small class="d-block mb-3 text-muted">&copy; 2017-2020</small>
    </div>
    <div class="col-6 col-md">
      <h5>Dashboard</h5>
      <ul class="list-unstyled text-small">
        <li><a class="text-muted" href="#">Manage Exercises</a></li>
        <li><a class="text-muted" href="#">Contact our Team</a></li>
        <li><a class="text-muted" href="#">Exercise Tracker</a></li>
        <li><a class="text-muted" href="#">My Weekly Goal</a></li>
      </ul>
    </div>
    <div class="col-6 col-md">
      <h5>Work-Out</h5>
      <ul class="list-unstyled text-small">
        <li><a class="text-muted" href="#">Select an Exercise</a></li>
        <li><a class="text-muted" href="#">View my work-outs</a></li>
        <li><a class="text-muted" href="#">Choose a work-out</a></li>
        <li><a class="text-muted" href="#">My points</a></li>
      </ul>
    </div>
    <div class="col-6 col-md">
      <h5>Personal Trainer</h5>
      <ul class="list-unstyled text-small">
        <li><a class="text-muted" href="#">Choose a PT</a></li>
        <li><a class="text-muted" href="#">My Diet</a></li>
        <li><a class="text-muted" href="#">Contact your PT</a></li>
        <li><a class="text-muted" href="#">Prices</a></li>
      </ul>
    </div>
    <div class="col-6 col-md">
      <h5>About</h5>
      <ul class="list-unstyled text-small">
        <li><a class="text-muted" href="#">Team</a></li>
        <li><a class="text-muted" href="#">Our Mission</a></li>
        <li><a class="text-muted" href="#">Privacy</a></li>
        <li><a class="text-muted" href="#">Terms</a></li>
      </ul>
    </div>
  </div>
</footer>
</html>