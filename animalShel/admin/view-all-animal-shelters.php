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
		<?php
		include '../includes/connection.php';
		// Check if the View All button is clicked
		$sql = "SELECT * FROM animal_shelter";
		$result = mysqli_query($conn, $sql);

		if(mysqli_num_rows($result) > 0) {
			echo "<h3>All Animal Shelters</h3>";
			echo "<table border='1'>";
			echo "<tr><th>Name</th><th>Link</th><th>Description</th><th>Email</th><th>Telephone Number</th><th>Action</th></tr>";

			while($row = mysqli_fetch_assoc($result)) {
				echo "<tr>";
				echo "<td>" . $row['animalShel_name'] . "</td>";
				echo "<td>" . $row['animalShel_link'] . "</td>";
				echo "<td>" . $row['animalShel_description'] . "</td>";
				echo "<td>" . $row['animalShel_email'] . "</td>";
				echo "<td>" . $row['animalShel_telno'] . "</td>";
				echo "<td><a href='edit-animal-shelter.php?id=" . $row['animalShel_id'] . "' class='btn update-btn'>Update</a> <button class='btn delete-btn' onclick='deleteAnimalShelter(" . $row['animalShel_id'] . ")'>Delete</button></td>";
				echo "</tr>";
			}

			echo "</table>";
		} else {
			echo "<p>No animal shelters found.</p>";
		}
		?>

	</section>
	
	<script>
	    function deleteAnimalShelter(animalShelterId) {
	        if (confirm("Are you sure you want to delete this animal shelter?")) {
	            // You can use AJAX or form submission to handle the delete functionality
	            // For simplicity, let's use a form submission
	            var form = document.createElement("form");
	            form.setAttribute("method", "post");
	            form.setAttribute("action", "delete-animal-shelter.php");
	
	            var input = document.createElement("input");
	            input.setAttribute("type", "hidden");
	            input.setAttribute("name", "animalShelterId");
	            input.setAttribute("value", animalShelterId);
	
	            form.appendChild(input);
	
	            document.body.appendChild(form);
	
	            form.submit();
	        }
	    }
	</script>

	<footer>
		<p>&copy; 2021 Animal Shelter</p>
	</footer>

</body>
</html>