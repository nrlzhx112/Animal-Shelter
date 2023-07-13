<?php
session_start();
include '../includes/connection.php';


if (!isset($_SESSION['SESSION_EMAIL'])) {
    header("Location: login.php");
    exit();
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Process the form submission to update the user's profile

    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    // Retrieve other form fields as needed

    // Perform the update query
    $originalEmail = $_SESSION['SESSION_EMAIL'];
    $query = mysqli_query($conn, "UPDATE user SET name='$name', email='$email' WHERE email='$originalEmail'");

    if ($query) {
        // Update successful, redirect to profile page
        header("Location: profile.php");
        exit();
    } else {
        // Update failed, display error message
        echo "Error updating profile. Please try again.";
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Profile</title>

    <style>
    body {
        background-color: mistyrose;
        background-image: url('images/backgroundWeb.jpg'); 

    }

    * {
        margin: 0;
        padding: 0;
    }

    header {
        padding: 10px;
        /* background-color: navajowhite; */
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        font-size: large;
    }

    footer {
        background-color: #333;
        color: #fff;
        padding: 10px;
        text-align: center;
    }

    header h1 {
        font-weight: bold;
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
        font-weight: bold;
        font-size: 24px;

    }

    section {
        padding: 20px;
        display: flex;
        justify-content: flex-start;
        align-items: center;
        flex-direction: column;
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

    input[type="text"] {
        width: 300px;
        padding: 10px;
        border-radius: 4px;
        border: 1px solid #ccc;
        box-sizing: border-box;
        font-size: 14px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    th, td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    th {
        background-color: #f2f2f2;
    }

    .container {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      height: 100vh;
      text-align: center;
    }

    .donation-text {
      margin-bottom: 20px;
    }

    .report-button {
      padding: 10px 20px;
      background-color: #4CAF50;
      color: white;
      text-decoration: none;
      border-radius: 4px;
    }

    header {
        background-image: url('images/backgroundHeader.jpg'); /* Add this line to check if the background-image property is working */
        padding: 20px;
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
        <li style="padding-right: 1200px; font-size:10px;">
          <img src="../img/logo.jpg" alt="" class="logo" width="100" height="100"></li>
        <li><a href="userdashboard.php">Home</a></li> &nbsp&nbsp
        <li><a href="profile.php">Profile</a></li>&nbsp&nbsp
        <li><a href="animal-shelter.php">Animal Shelter</a></li>&nbsp&nbsp
        <li><a href="volunteering.php">Volunteering</a></li>&nbsp&nbsp
        <li><a href="donation.php">Donation</a></li><br>
      </ul>
    </nav>
  </div>
  <div>
    <br>
    <hr>
  </div>
</header>

    <section>
        <div class="center">
            <h1>Update Profile Name</h1><br>
            <form action="" method="post">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" required>

                <label for="email">Email:</label>
                
                <input type="email" name="email" id="email" required><br><br><br>

                <button type="submit">Update</button>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                <button type="button" onclick="window.location.href='profile.php'">Cancel</button>
            </form>
        </div>

       
    </section>

    <footer>
    <p>© 2023 PawFriend Animal Rescue. All rights reserved.</p>
</footer>
</body>
</html>
