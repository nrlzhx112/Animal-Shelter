<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donation Page</title>

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
    <div class="container">
        <div class="right">
            <div class="contact-info">
                <h1>Contact Us</h1><br><br>
                <p>Email: PawFriend@example.com</p>
                <p>Phone: +60 123-456-7890</p>
                <p>Address: 123 Ayer Keroh, Melaka, Malaysia</p>
            </div>
        </div>

        <div class="left">
            <div class="donatable-item">
                <img src="images/item1.jpg" alt="toys">
                <h2>Toys</h2>
                <p>All animals love toys, so donate any old or new pet toys to keep those homeless dogs and cats entertained and happy. Make sure to donate clean toys or toys that can be disinfected and washed frequently.

Don’t give inappropriate toys, unsafe or toxic toys, or those that break down immediately. The best to donate are durable brands, like KONG or Nylabone. Stay away from stuffed toys and squeak toys, since strong chewers can swallow the squeaky part.

</p>
            </div>
            
            <div class="donatable-item">
                <img src="images/item2.jpg" alt="food">
                <h2>Pet Food</h2>
                <p>The biggest chunk of any shelter’s budget is spent on food, especially if there are many animals in the shelter. Donate pet food or treats to make a difference — just make sure that all the food has not expired or gone bad and hasn’t been recalled.

You don’t have to donate pet food specifically; you can also donate things like peanut butter, canned tuna, fresh vegetables, etc. Even meat-based baby food is a good choice since shelters often mix it with dry dog food.</p>
            </div>
            
            <div class="donatable-item">
                <img src="images/item3.jpg" alt="cleaning">
                <h2>Cleaning stuffs</h2>
                <p>Cleaning up after pets is not easy and requires a lot of cleaning supplies. You can donate bleach, dishwashing liquid, disinfecting wipes, laundry detergent, window cleaners, paper towels, garbage bags, mops, sponges, brooms, rubber and latex gloves, etc. Even plastic shopping bags can come in handy for cleaning up dog mess, as well as for storage purposes.</p>
            </div>

            <div class="donatable-item">
                <img src="images/item4.jpg" alt="personal care">
                <h2>Hygiene stuffs</h2>
                <p>Animals in shelters must be groomed often to stay healthy and beautiful. Also, most of the animals that come here for the first time are dirty and have long, thick fur that needs to be cut and washed. There are many grooming products you can donate, such as shampoos, combs, brushes, nail clippers, haircutting scissors, etc.</p>
            </div>

            <div class="donatable-item">
                <img src="images/item5.jpg" alt="collar">
                <h2>Collar and Leashes</h2>
                <p>Shelter dogs need to be walked often to keep them in shape physically. Donate collars, leashes and harnesses to make this possible. Whether they are used or new, they will certainly come in handy.</p>
            </div>
        </div>
    </div>
    <footer>
    <p>© 2023 PawFriend Animal Rescue. All rights reserved.</p>
  </footer>
</body>
</html>
