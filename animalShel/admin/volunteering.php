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
            width: 80px;
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

        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        footer {
            margin-top: auto;
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

        input[type="text"] {
            width: 300px;
            padding: 10px;
            border-radius: 4px;
            border: 1px solid #ccc;
            box-sizing: border-box;
            font-size: 14px;
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
                    <li style="padding-right: 900px; font-size:50px;"><img src="../img/logo.jpg" alt=""
                            class="logo"></a></li>
                    <li><a href="admindashboard.php">Home</a></li>
                    <li><a href="profile.php">Profile</a></li>
                    <li><a href="animal-shelter.php">Animal Shelter</a></li>
                    <li><a href="volunteering.php">Volunteering</a></li>
                    <li><a href="donation.php">Donation</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section>
        <h2>Add Volunteer</h2>

        <form method="POST" action="addvolunteer.php">
            <label>Name:</label>
            <input type="volunteer_name" name="volunteer_name"><br>

            <label>Telephone Number:</label>
            <input type="volunteer_telno" name="volunteer_telno"><br>

            <button type="submit" class="btn">Add Volunteer</button>
        </form>
        <br>
        <form method="GET" action="volunteering.php">
	    <label for="search">Search by Name or ID:</label>
	    <input type="text" id="search" name="search">
	    <button type="submit" class="btn">Search</button>
	</form>
	<br>
	<h2>Volunteers List</h2>

        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Telephone Number</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
	            include '../includes/connection.php';
			
			// Check if search query is set
			if (isset($_GET['search']) && !empty($_GET['search'])) {
			    $search = $_GET['search'];
			
			    // Fetch volunteers data from database where name or ID matches search query
			    $query = "SELECT * FROM volunteer WHERE volunteer_name LIKE '%$search%' OR volunteer_telno LIKE '%$search%'";
			} else {
			    // Fetch all volunteers data from database
			    $query = "SELECT * FROM volunteer";
			}
			
			$result = $conn->query($query);
			
			if ($result->num_rows > 0) {
			    while ($row = $result->fetch_assoc()) {
			        echo "<tr>";
			        echo "<td>" . $row['volunteer_name'] . "</td>";
			        echo "<td>" . $row['volunteer_telno'] . "</td>";
			        echo "<td><a href='deletevolunteer.php?id=" . $row['volunteer_id'] . "' class='btn'>Delete</a></td>";
			        echo "</tr>";
			    }
			} else {
			    echo "No volunteers found.";
			}
			
			$conn->close();
	        ?>
            </tbody>
        </table>

    </section>

    <footer>
        <p>&copy; 2021 Animal Shelter</p>
    </footer>

</body>

</html>