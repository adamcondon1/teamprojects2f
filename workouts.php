<!DOCTYPE html>
<html>
	<head>
	<!-- Use of header and connection file to set up database -->
		<?php
		require 'header.php';
		?>
		<title>
		Workouts
		</title>
		
	</head>
	<body>
	<!-- Body of page to display tables -->
	<div class="wrapper">
		<div class="bodyWrapper">
			<div class="bodyWrapper1">
				<h2 id="titleWorkout">Beginner: Lower Body</h2>
				<div id="container">
					<?php
						require_once 'includes/dbh.inc.php';
						$sql = "SELECT * FROM workoutsetsreps WHERE workoutLevel= 'Beginner' AND workoutBodySection='Lower'";
						$result = $conn->query($sql);
						
						if ($result->num_rows > 0) {
							while($row = $result->fetch_assoc()) {
								echo "<div class='workout'>";
									echo "Name: " . $row['workoutName'] . "<br>";
									echo "Sets Total - " . $row['workoutSets']. "<br>" . "Reps Total - " . $row['workoutReps'];
									echo "<br>" . "Workout Description: " . $row["workoutDesc"] . "<br>";	
								echo "</div>";
							}
						}
						else{
							echo "0 results";
						}
					?>
				</div>
				<br></br>
				<h2 id="titleWorkout">Beginner: Upper Body</h2>
				<div id="container">
					<?php
						require_once 'includes/dbh.inc.php';
						$sql = "SELECT * FROM workoutsetsreps WHERE workoutLevel= 'Beginner' AND workoutBodySection='Upper'";
						$result = $conn->query($sql);
						
						if ($result->num_rows > 0) {
							while($row = $result->fetch_assoc()) {
								echo "<div class='workout'>";
									echo "Name: " . $row['workoutName'] . "<br>";
									echo "Sets Total - " . $row['workoutSets']. "<br>" . "Reps Total - " . $row['workoutReps'];
									echo "<br>" . "Workout Description: " . $row["workoutDesc"] . "<br>";	
								echo "</div>";
							}
						}
						else{
							echo "0 results";
						}
					?>
				</div>
				<br></br>
				<h2 id="titleWorkout">Intermediate: Lower Body</h2>
				<div id="container">
					<?php
						require_once 'includes/dbh.inc.php';
						$sql = "SELECT * FROM workoutsetsreps WHERE workoutLevel= 'Intermediate' AND workoutBodySection='Lower'";
						$result = $conn->query($sql);
						
						if ($result->num_rows > 0) {
							while($row = $result->fetch_assoc()) {
								echo "<div class='workout'>";
									echo "Name: " . $row['workoutName'] . "<br>";
									echo "Sets Total - " . $row['workoutSets']. "<br>" . "Reps Total - " . $row['workoutReps'];
									echo "<br>" . "Workout Description: " . $row["workoutDesc"] . "<br>";	
								echo "</div>";
							}
						}
						else{
							echo "0 results";
						}
					?>
				</div>
				<br></br>
				<h2 id="titleWorkout">Intermediate: Upper Body</h2>
				<div id="container">
					<?php
						require_once 'includes/dbh.inc.php';
						$sql = "SELECT * FROM workoutsetsreps WHERE workoutLevel= 'Intermediate' AND workoutBodySection='Upper'";
						$result = $conn->query($sql);
						
						if ($result->num_rows > 0) {
							while($row = $result->fetch_assoc()) {
								echo "<div class='workout'>";
									echo "Name: " . $row['workoutName'] . "<br>";
									echo "Sets Total - " . $row['workoutSets']. "<br>" . "Reps Total - " . $row['workoutReps'];
									echo "<br>" . "Workout Description: " . $row["workoutDesc"] . "<br>";	
								echo "</div>";
							}
						}
						else{
							echo "0 results";
						}
					?>
				</div>
				<br></br>
				<h2 id="titleWorkout">Professional: Lower Body</h2>
				<div id="container">
					<?php
						require_once 'includes/dbh.inc.php';
						$sql = "SELECT * FROM workoutsetsreps WHERE workoutLevel= 'Professional' AND workoutBodySection='Lower'";
						$result = $conn->query($sql);
						
						if ($result->num_rows > 0) {
							while($row = $result->fetch_assoc()) {
								echo "<div class='workout'>";
									echo "Name: " . $row['workoutName'] . "<br>";
									echo "Sets Total - " . $row['workoutSets']. "<br>" . "Reps Total - " . $row['workoutReps'];
									echo "<br>" . "Workout Description: " . $row["workoutDesc"] . "<br>";	
								echo "</div>";
							}
						}
						else{
							echo "0 results";
						}
					?>
				</div>
				<br></br>
				<h2 id="titleWorkout">Professional: Upper Body</h2>
				<div id="container">
					<?php
						require_once 'includes/dbh.inc.php';
						$sql = "SELECT * FROM workoutsetsreps WHERE workoutLevel= 'Professional' AND workoutBodySection='Upper'";
						$result = $conn->query($sql);
						
						if ($result->num_rows > 0) {
							while($row = $result->fetch_assoc()) {
								echo "<div class='workout'>";
									echo "Name: " . $row['workoutName'] . "<br>";
									echo "Sets Total - " . $row['workoutSets']. "<br>" . "Reps Total - " . $row['workoutReps'];
									echo "<br>" . "Workout Description: " . $row["workoutDesc"] . "<br>";	
								echo "</div>";
							}
						}
						else{
							echo "0 results";
						}
					?>
				</div>
			</div>
			<div class="bodyWrapper2">
			
			</div>
			<div class="bodyWrapper3">
			</div>
		</div>
	</div>
	</body>
	<!-- Use of footer -->
	<?php
    require 'footer.php';
	?>
</html>

