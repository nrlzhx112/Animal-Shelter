<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Animal Shelter</title>

	<style>
		body {
		        background-image: url('images/backgroundWeb.jpg'); 
		        background-color: mistyrose;
    		}

		* {
			margin: 0;
			padding: 0;
		}

		header {
		        background-image: url('images/backgroundHeader.jpg'); /* Add this line to check if the background-image property is working */
		        padding: 20px;
		}


		footer {
			background-color: #333;
			color: #fff;
			padding: 10px;
			text-align: center;
		}

		header h1 {
			font-size: 30px;
		}

		nav ul {
			list-style-type: none;
			text-align: right;
		}

		nav ul li {
			display: inline;
			margin-right: 10px;
		}

		nav ul li a {
			color: black;
			text-decoration: none;
		}

		section {
			padding: 20px;
		}

		section h2 {
			font-size: 18px;
			margin-bottom: 10px;
		}

		.image-container {
			display: flex;
			justify-content: center;
		}

		.image-container img {
			max-width: 100%;
			height: auto;
		}

		img.logo {
			height: 80px;
			width:80px;
		}

		section h3 {
			font-size: 18px;
			margin-bottom: 10px;
		}

		.image-container {
			display: flex;
			justify-content: center;
		}

		.image-container img {
			max-width: 100%;
			height: auto;
		}

		.column-container {
			display: flex;
		}

		.column {
			flex: 1;
			padding: 20px;
		}

		.column img {
			max-width: 100%;
			height: auto;
		}

		.column h3 {
			font-size: 16px;
			margin-bottom: 10px;
		}

		.column p {
			font-size: 14px;
		}

		.btn {
			display: inline-block;
			padding: 10px 15px;
			margin-top: 10px;
			background-color: sienna;
			color: white;
			border: none;
			border-radius: 4px;
			cursor: pointer;
			text-decoration: none;
		}

		.btn:hover {
			background-color: tan;
		}

		.delete-btn {
			background-color: sienna;
		}
		
		.view-btn{
			background-color: sienna;
		}
		.update-btn {
			background-color: sienna;
		}
		.search-btn {
			background-color: sienna;
		}

		body {
			display: flex;
			flex-direction: column;
			min-height: 100vh;
		}

		footer {
			margin-top: auto;
		}

		input[type="text"] {
			width: 300px;
			padding: 10px;
			border-radius: 4px;
			border: 1px solid #ccc;
			box-sizing: border-box;
			font-size: 14px;
		}

		select {
			width: 300px;
			padding: 10px;
			border-radius: 4px;
			border: 1px solid #ccc;
			box-sizing: border-box;
			font-size: 14px;
			margin-bottom: 10px;
		}
		
		/* Style the table */
	        table {
	            width: 100%;
	            border-collapse: collapse;
	            margin-top: 20px;
	        }
	
	        th, td {
	            padding: 10px;
	            text-align: left;
	            border-bottom: 1px solid #ddd;
	        }
	        
	        th {
	            background-color: sienna;
	            color: white;
	        }
	
	        tbody tr:hover {
	            background-color: #f5f5f5;
	        }
		</style>

</head>
<body>

	<header>
	<div style="background-image: url('images/background.jpeg');"></div>
	<div>
		<h1>PawFriend Animal Rescue</h1><br>
	</div>
		<div>
			<nav>
				<ul>
					<li style="padding-right: 900px; font-size:50px;"><img src="../img/logo.jpg" alt="" class="logo"></a></li>
					<li><a href="admindashboard.php">Home</a></li>
					<li><a href="profile.php">Profile</a></li>
					<li><a href="animal-shelter.php">Animal Shelter</a></li>
					<li><a href="volunteer.php">Volunteers</a></li>
					<li><a href="donation.php">Donation</a></li>
					<li><a href="logout.php">Logout</a></li>
				</ul>
			</nav>
		</div>
	</header>

	<section>
		<h2>Animal Shelter</h2>
		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
			<label for="animal_shelter">Select Animal Shelter:</label>
			<select animalShel_id="animal_shelter" animalShel_name="animal_shelter">
				<option value="">--Lists Animal Shelter--</option>
				<?php 
	    			include '../includes/connection.php';
				$sql = "SELECT * FROM animal_shelter";
				$result = mysqli_query($conn, $sql);
				if(mysqli_num_rows($result) > 0) {
					while($row = mysqli_fetch_assoc($result)) {
						echo "<option value='" . $row['animalShel_id'] . "'>" . $row['animalShel_name'] . "</option>";
					}
				}
				?>
			</select>
			<input type="text" name="animalShel_name" placeholder="Enter Animal Shelter Name">
			<input type="submit" name="search_name" value="Search by Name" class="btn search-btn">
		        <a href="../admin/view-all-animal-shelters.php" class="btn view-btn">View All Animal Shelters</a>

		</form>
		<br>
		<?php
		include '../includes/connection.php';
        
		if(isset($_POST['search_name'])) {
		$animalShel_name = $_POST['animalShel_name'];
		$sql = "SELECT * FROM animal_shelter WHERE animalShel_name='$animalShel_name'";
		$result = mysqli_query($conn, $sql);
			if(mysqli_num_rows($result) == 1) {
				$row = mysqli_fetch_assoc($result);
				echo "<h3>Animal Shelter Information</h3>";
				echo "<table border='1'>";
				echo "<tr><th>Name</th><th>Link</th><th>Description</th><th>Email</th><th>Telephone Number</th></tr>";
				echo "<tr><td>" . $row['animalShel_name'] . "</td><td>" . $row['animalShel_link'] . "</td><td>" . $row['animalShel_description'] . "</td><td>" . $row['animalShel_email'] . "</td><td>" . $row['animalShel_telno'] . "</td></tr>";
				echo "</table>";
			} else {
				echo "<p>Animal shelter not found.</p>";
			}
		}

		?>
		<br>
		<br>
		<div class="container">
			<h2>Add Animal Shelter</h2>
			<form action="add-animal-shelter.php" method="post">
				<label for="animalShel_name">Name:</label>
				<input type="text" name="animalShel_name" id="animalShel_name">
				<br>
				<label for="animalShel_link">Link:</label>
				<input type="text" name="animalShel_link" id="animalShel_link">
				<br>
				<label for="animalShel_description">Description:</label>
				<textarea name="animalShel_description" id="animalShel_description"></textarea>
				<br>
				<label for="animalShel_email">Email:</label>
				<input type="email" name="animalShel_email" id="animalShel_email">
				<br>
				<label for="animalShel_telno">Telephone Number:</label>
				<input type="tel" name="animalShel_telno" id="animalShel_telno">
				<br>
				<input type="submit" name="submit" value="Add Animal Shelter" class="btn">
			</form>
			
		</div>

	</section>

	<footer>
		<p>&copy; 2021 Animal Shelter</p>
	</footer>

</body>
</html>