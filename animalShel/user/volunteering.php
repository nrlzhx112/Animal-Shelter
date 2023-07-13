<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Volunteer Page</title>

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
<body>
    <br><br><div class="image-container">
      <img src="images/img5.jpg" alt="Image1">
  </div>
    <div class="container">
        <div class="left">
            <h2>Volunteer Work</h2>
            <p>When you volunteer at PawFriend, you can choose to spend time with any animal that you want and do the work that you enjoy. If you do not have any specific activities you would like to carry out at the shelter, you will be assigned to the activities which may include cleaning the shelter area and spending time with the animals.

            As a volunteer, you must be able to work independently as there will be minimal supervision and guidance during the volunteering activities.</p>
            <br><p><b>Volunteer Times</b>
            <br>The duration of volunteering is entirely up to you.
            <br><br> Volunteering hours are open from:-

            <br><br><b>Monday – Sunday  (except Wednesdays and Public Holidays):
            <br>10.00 a.m. – 12.00 p.m.</b>

            <br><br>Wednesdays and Public Holidays:
            CLOSED for maintenance</p>
        </div>

        <div class="right">
            <div class="contact-info">
                <h3>Contact Us</h3>
                <p>Will help a lot if you are willing to volunteer for PawFriend</p>
                <p>Email: PawFriend@example.com</p>
                <p>Phone: +60 123-456-7890</p>
                <p>Address: 123 Ayer Keroh, Melaka, Malaysia</p>
            </div>
        </div>
    </div>
    <footer>
    <p>© 2023 PawFriend Animal Rescue. All rights reserved.</p>
  </footer>
    
</body>
</html>
