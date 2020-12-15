<?php 
require_once 'includes/dbh.inc.php';

		/* 														/*
				Check if customer is on USERS table:
		/*														*/ 


$sql = "SELECT usersId, usersName FROM users WHERE usersId = '31' ";
$result = $conn->query($sql);

if ($result->num_rows > 0){
// output data of each row
  while($row = $result->fetch_assoc()) {
    $customerId = $row["usersId"];
    $customerName = $row["usersName"];
  			}
		}
else{
  echo "0 results";
	}
		/* 														/*
				Check if customer is on MEMBERSHIP table:
		/*														*/ 

$sql2 = "SELECT memberType FROM membership WHERE $customerId = usersId ";
$result2 = $conn->query($sql2);

if ($result2->num_rows > 0) {
// output data of each row
  while($row = $result2->fetch_assoc()) {
   $title = $row["memberType"];
  	  			}
	    	}
 else {
  $title = "Free";
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
					    <a href="#" class="list-group-item list-group-item-action active"> Membership </a> <!-- active CLASS-->
					    <a href="plans.php" class="list-group-item list-group-item-action ">Billing</a>
					    <a href="charges.php" class="list-group-item list-group-item-action ">Charges</a>
					</div><!--"list-group" --> 
	    		<br>
    		</div><!--"col-md-3 sidenav" -->
			<div class="col-md-9" id = "myDIV">
    			<div class = "middle-section">  
      				<hr style="width:60%;margin-left:0;background: black;">
      				<h2>Membership</h2>
      				<h4 style="color: #14b5d0;">Your membership</h4><br> <!-- #DAA520 GOLD COLOUR-->
      				<h5>Plan: 
      				<?php echo "<b>" . $title . "</b>" ?>
      				</h5> <!-- -->      
      				<form><a href="plans.php"> <button type="button" class="btn btn-primary">Change Subscription</button><br></a></form>
      				<br><h5>Questions? <span class="label label-success" style="color: #14b5d0;"> Contact us here!</span></h5>
      				<hr style="width:60%;margin-left:0;background: black;">
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
	
		</style> 
	 </div><!-- Row Content -->
   </div><!-- Container-Fluid -->		
</html>
