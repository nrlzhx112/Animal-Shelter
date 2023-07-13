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

	<?php
	include '../includes/connection.php';
	
	$admin_id = 5; // Assigning the admin_id directly
	
	$query = mysqli_query($conn, "SELECT * FROM admin WHERE admin_id='$admin_id'");
	
	if (mysqli_num_rows($query) > 0) {
	    $row = mysqli_fetch_assoc($query);
	    $name = $row['name'];
	    $email = $row['email'];
	} else {
	    echo "<div class='alert alert-danger'>Admin not found.</div>";
	    exit();
	}
	?>

        <h2>Admin Details</h2>
        <br>
        <p>Name: <?php echo $name; ?></p>
        <p>Email Address: <?php echo $email; ?></p>
    <br>
    <a href="view_user_profile.php" class="btn">View User Profile</a>
</section>
<footer>
    <p>© 2023 PawFriend Animal Rescue. All rights reserved.</p>
</footer>
</body>
</html>