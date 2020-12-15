<?php 

require_once 'includes/dbh.inc.php';

		/* 														/*
				Check if customer is on USERS table:
		/*														*/ 

$sql = "SELECT usersId, usersName FROM users WHERE usersId = '31' "; /* Where customerId = '1' */
$result0 = $conn->query($sql);

if ($result0->num_rows > 0) {
// output data of each row
  while($row = $result0->fetch_assoc()) {
  	$customerId = $row["usersId"];
    $customerName = $row["usersName"];
  }//Closing WHILE
}//Closing IF
 else {
  echo "0 results"; 
}//Closing ELSE

				/* 														/*
				Payment table:
		/*														*/ 


$sqlInsert = "SELECT usersId, numberCard, monthCard, yearCard, ccvCard, PaymentDate, nameOnCard FROM payment 

WHERE $customerId = usersId ";

$result = $conn->query($sqlInsert);

if ($result->num_rows > 0){

// output data of each row
  while($row = $result->fetch_assoc()) {

    $customerId = $row["usersId"];
    $numberCard = $row["numberCard"];
	$monthCard = $row["monthCard"];
	$yearCard = $row["yearCard"];
	$ccvCard = $row["ccvCard"];
	$paymentDate = $row["PaymentDate"];
	$nameOnCard = $row["nameOnCard"];

  			}
		}
else{
  echo "0 results";
	}

$conn->close();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <link href="product.css" rel="stylesheet">
    <title>Sit2Fit</title>
    <!-- Bootstrap core CSS -->
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  </head>
  <body>
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
			    <i class='fas fa-user-circle' style='font-size:100px;color:black; margin-left: 34%'></i>
			    <br>
			    <h4 class='position' style="margin-left: 26%; margin-top: 5%">
			    <?php echo $customerName ?>
			    </h4>
					<div class="list-group">
					    <a href="mindex.php" class="list-group-item list-group-item-action"> Membership </a> <!-- active CLASS-->
					    <a href="plans.php" class="list-group-item list-group-item-action">Billing</a>
					    <a href="#" class="list-group-item list-group-item-action active disabled">Charges</a>
					</div><!--"list-group" --> 
	    		<br>
    		</div><!--"col-md-3 sidenav" -->
			<div class="col-lg-9" id = "myDIV">
    			<div class = "middle-section">  
    				<div class="table-responsive">
		    			<table style="width:100%" class="table table-hover">
						  <tr>
						    <th>User ID</th>
						    <th>Card Number</th> 
						    <th>Expiry Date - Month </th>
						    <th>Expiry Date - Year </th>
						    <th>CCV</th> 
						    <th>Name on the Card</th>	
						    <th>Payment Date</th>			    
						  </tr>
						  <tr>
						    <td><?php echo $customerId ?></td>
						    <td><?php echo $numberCard ?></td> 
						    <td><?php echo $monthCard ?></td>
						    <td><?php echo $yearCard ?></td>
						    <td><?php echo $ccvCard ?></td> 
						    <td><?php echo $nameOnCard ?></td>	
						    <td><?php echo $paymentDate ?></td>				    			    
						  </tr>
						</table>
					</div>
    			</div> <!--"Middle section" -->
			</div> <!--"col-med-9" -->
			<footer class="container py-5">
  		<div class="row">
    		<div class="col-12 col-md">
	     		<img src="thumbnail.jpeg" width="100" height="100" alt="" loading="lazy">
	      		<small class="d-block mb-3 text-muted">&copy; 2017-2020</small>
    		</div> <!--"col-12 col-md" -->
	    	<div class="col-6 col-md">
	      		<h5>Dashboard</h5>
	      		<ul class="list-unstyled text-small">
			        <li><a class="text-muted" href="#">Manage Exercises</a></li>
			        <li><a class="text-muted" href="#">Contact our Team</a></li>
			        <li><a class="text-muted" href="#">Exercise Tracker</a></li>
			        <li><a class="text-muted" href="#">My Weekly Goal</a></li>
	      		</ul>
	    	</div> <!--"col-6 col-md" -->
	    	<div class="col-6 col-md">
	      		<h5>Work-Out</h5>
	      		<ul class="list-unstyled text-small">
		        	<li><a class="text-muted" href="#">Select an Exercise</a></li>
			        <li><a class="text-muted" href="#">View my work-outs</a></li>
			        <li><a class="text-muted" href="#">Choose a work-out</a></li>
			        <li><a class="text-muted" href="#">My points</a></li>
	      		</ul>
	    	</div> <!--"col-6 col-md" -->
	    	<div class="col-6 col-md">
	      		<h5>Personal Trainer</h5>
	      		<ul class="list-unstyled text-small">
			        <li><a class="text-muted" href="#">Choose a PT</a></li>
			        <li><a class="text-muted" href="#">My Diet</a></li>
			        <li><a class="text-muted" href="#">Contact your PT</a></li>
			        <li><a class="text-muted" href="#">Prices</a></li>
	     		</ul>
	    	</div><!--"col-6 col-md" -->
	    	<div class="col-6 col-md">
	      		<h5>About</h5>
		      	<ul class="list-unstyled text-small">
			        <li><a class="text-muted" href="#">Team</a></li>
			        <li><a class="text-muted" href="#">Our Mission</a></li>
			        <li><a class="text-muted" href="#">Privacy</a></li>
			        <li><a class="text-muted" href="#">Terms</a></li>
	      		</ul>
	    	</div><!--"col-6 col-md" -->
  		</div> <!--"row" -->
			</footer>
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
		<style type="text/css">
			.form-group{margin-right: 20%;}
			.py-2{font-color: black;}
			.site-header a:hover {color: white;}
			.fas{margin-top: 15%;}
			.py-5{margin-top: 0.5%;}
			.middle-section{margin-right: 5%; padding-right: 6%; margin-left: 3%; margin-top: 10%}
		</style> 
	 </div><!-- Row Content -->
   </div><!-- Container-Fluid -->		
</html>
