<?php
include '../includes/connection.php';

if (isset($_GET['delete_user'])) {
    $userId = $_GET['delete_user'];
    
    // Perform the delete operation
    $deleteQuery = "DELETE FROM users WHERE user_id = '$userId'";
    $deleteResult = mysqli_query($conn, $deleteQuery);
    
    if ($deleteResult) {
        // Redirect back to the profile page after successful deletion
        header("Location: view_user_profile.php");
        exit();
    } else {
        echo "<div class='alert alert-danger'>Failed to delete the user.</div>";
    }
}

$query = mysqli_query($conn, "SELECT * FROM users");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Profile</title>

    <style>
     body {
		        background-image: url('images/backgroundWeb.jpg'); 
		        background-color: mistyrose;
    		}

        /* Reset default margin and padding */
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
            font-size: 24px;
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

        /* Style the section */
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

        .image-container {
            display: flex;
            justify-content: center;
        }

        .image-container img {
            max-width: 100%;
            height: 200px;
            width: 200px;
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
            padding: 8px 16px;
            margin-top: 10px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            cursor: pointer;
            font-size: 14px;
        }

        .btn:hover {
            background-color: #45a049;
        }
        
        .admin-details {
            background-color: #fff;
            padding: 20px;
            margin-top: 20px;
        }

        .admin-details h2 {
            font-size: 18px;
            margin-bottom: 10px;
        }

        .admin-details p {
            font-size: 14px;
        }
        
        /* Updated button styling */
        a.btn {
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

        a.btn:hover {
            background-color: tan;
        }
        
        .delete-btn {
            background-color: sienna;
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 4px;
            cursor: pointer;
        }

        .delete-btn:hover {
            background-color: tan;
        }

        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        footer {
            margin-top: auto;
        }

        .column-container {
        display: flex;
        justify-content: center;
        align-items: center;
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
        <li><a href="volunteering.php">Volunteering</a></li>
        <li><a href="donation.php">Donation</a></li><br>
	<li><a href="logout.php">Logout</a></li>
      </ul>
    </nav>
  </div>
    
    <br>
    <hr>
</header>

<section>
<h2>User Profiles</h2>
	<table>
		<thead>
			<tr>
				<th>Name</th>
				<th>Email</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php
				include '../includes/connection.php';

				$query = mysqli_query($conn, "SELECT * FROM users");

				while ($row = mysqli_fetch_assoc($query)) {
					echo "<tr>";
					echo "<td>".$row['name']."</td>";
					echo "<td>".$row['email']."</td>";
					echo "<td><button class='delete-btn' onclick='deleteUser(".$row['user_id'].")'>Delete</button></td>";
					echo "</tr>";
				}
			?>
		</tbody>
	</table>
	<br>
    <a href="profile.php" class="btn">Go Back</a>
</section>
<script>
    function deleteUser(userId) {
        if (confirm("Are you sure you want to delete this user?")) {
            // Redirect to the current page with the delete_user parameter
            window.location.href = "view_user_profile.php?delete_user=" + userId;
        }
    }
</script>
<footer>
    <p>© 2023 PawFriend Animal Rescue. All rights reserved.</p>
</footer>
</body>
</html>