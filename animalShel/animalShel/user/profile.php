<?php
session_start();

if (!isset($_SESSION['SESSION_EMAIL'])) {
    header("Location: login.php");
    exit();
}

include '../includes/connection.php';

// Retrieve user details from the database
$email = $_SESSION['SESSION_EMAIL'];
$query = mysqli_query($conn, "SELECT * FROM user WHERE email='$email'");

if (mysqli_num_rows($query) > 0) {
    $row = mysqli_fetch_assoc($query);
    $name = $row['name'];
    $email = $row['email'];
    // Add other user details you want to display

    // Handle update form submission
    if (isset($_POST['update'])) {
        // Redirect to the update page to modify user info
        header("Location: update_profile.php");
        exit();
    }

    // Handle delete button click
    if (isset($_POST['delete'])) {
        // Display confirmation message with cancel and delete buttons
        echo "<script>
                if (confirm('Are you sure you want to delete your account?')) {
                    window.location.href = 'delete_account.php';
                }
            </script>";
    }
} else {
    // Handle the case when the user is not found in the database
    echo "<div class='alert alert-danger'>User not found.</div>";
    exit(); // Terminate further execution of the page
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>

    <style>
    body {
        background-color: mistyrose;
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
</style>


</head>
<body>

<header>
  <!-- <div>
    <h1>PAR</h1>
  </div> -->
  <div>
  <nav>
      <ul>
      <li style="padding-right: 900px; font-size:50px;"><img src="../img/logo.jpg" alt="" class="logo"></a></li>
        <li><a href="userdashboard.php">Home</a></li>
        <li><a href="profile.php">Profile</a></li>
        <li><a href="animal-shelter.php">Animal Shelter</a></li>
        <li><a href="volunteering.php">Volunteering</a></li>
        <li><a href="donation.php">Donation</a></li>


      </ul>
    </nav>
  </div>
    
    <br>
    <hr>
</header>

    <section>
        <div class="center">
            <h1>Welcome, <?php echo $name; ?></h1>

            <h2>User Details</h2>
            <p class="center">Name: <?php echo $name; ?></p>
            <p class="center">Email: <?php echo $email; ?></p>
            <!-- Display other user details here -->

            <form action="" method="post" class="center"><br><br>
                <button type="submit" name="update">Update Profile</button>
            </form>

            <br>

            <form action="" method="post" class="center">
                <button type="submit" name="delete">Delete Account</button>
            </form>
        </div>
    </section>

    <footer>
        <p>© 2023 PawFriend Animal Rescue. All rights reserved.</p>
    </footer>
</body>
</html>
