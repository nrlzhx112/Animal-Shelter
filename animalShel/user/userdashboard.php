<?php
    session_start();

    if (!isset($_SESSION['SESSION_EMAIL'])) {
        header("Location: login.php");
        //die();
    }

    include '../includes/connection.php';

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>userdashboard</title>

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

/* Style the header */
header {
  padding: 20px;
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

/* Style the section */
section {
  padding: 20px;
}

section h2 {
  font-size: 21px;
  margin-bottom: 10px;
}

/* Style the footer */
footer {
  background-color: #333;
  color: #fff;
  padding: 10px;
  text-align: center;
}

.image-container {
  display: flex;
  justify-content: center;
}

.image-container img {
  max-width: 100%;
  height: auto;
}

.container {
    display: flex;
    margin-top: 20px;
}

.left {
    flex: 1;
    padding: 20px;
}

.right {
    flex: 1;
    background-color: #FFEEDE;
    padding: 20px;
}

h2 {
    margin-bottom: 10px;
}

p {
    margin-bottom: 20px;
}

.contact-info {
    margin-top: 20px;
}

.contact-info h3 {
    margin-bottom: 10px;
}

.contact-info p {
    margin-bottom: 10px;
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
  <div class="image-container">
      <img src="images/img1.jpg" alt="Image1">
  </div>
  <div>
    <br><br><p>The following paragraph is an example of a simple paragraph that follows the basic paragraph form. 
      1 There are many different kinds of animals that live in China. 2 Tigers and leopards are animals 
      that live in China's forests in the north.</p>
  </div>
</section>

  <footer>
    <p>© 2023 PawFriend Animal Rescue. All rights reserved.</p>
  </footer>
    

    <a class="btn btn-primary" href="logout.php"><?php
    if (!isset($_SESSION['SESSION_EMAIL'])) {
        header("Location: userdashboard.php");
        die();
    }

    $query = mysqli_query($conn, "SELECT * FROM user WHERE email='{$_SESSION['SESSION_EMAIL']}'");

    if (mysqli_num_rows($query) > 0) {
        $row = mysqli_fetch_assoc($query);

        echo "Logout";
        // $_SESSION[SESSION_EMAIL] - <a href='logout.php'>LOGOUT</a>
        // echo"
        // <div class='btn btn-outline-dark' style='margin-left:10px'>
        //     <a href='logout.php'>Log Out</a>
        // </div>
        // ";
    }

    ?>
    </a>

</body>
</html>