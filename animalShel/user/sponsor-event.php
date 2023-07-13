<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resources Page</title>

    <style>
    body {
        background-image: url('images/backgroundWeb.jpg'); 
        background-color: mistyrose;
    }

    * {
        margin: 0;
        padding: 0;
    }


    footer {
        background-color: #333;
        color: #fff;
        padding: 10px;
        text-align: center;
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
    <div class="image-container">
        <img src="images/img2.jpg" alt="Image2">
    </div><br>
    <h2>Sponsor Event</h2>
        Fundraisers and sponsors to help the animals that need shelter and care.
    Animal shelters are very important because they care for abandoned or neglected animals. They also provide temporary homes for animals on the street. Animal shelters are invaluable to communities around the world. They work for a noble cause, helping those who have no voice.
    
    <br><br>Sadly, nowadays doing good doesn’t guarantee funding. Having good intentions and working hard doesn’t necessarily mean that your animal shelter will meet its fundraising goals.
    Another thing to remember is that fundraising is not an outcome, it’s a process. There’s no one-shot solution! What’s needed is a combination of a sound fundraising strategy, creative fundraising ideas, and passionate staff.
    Dog walks or runs are the simplest animal shelter fundraising idea to start with. There are several ways to go about organizing a dog walk or a dog run.
    You can mobilize your own staff or volunteers from your local community and have them walk the local dogs in exchange for donations.
    You can also organize a morning run with the dogs. Design a running route that makes sense in your local community, and then have participants pay to enter the run. Pooches come along, of course!</p>
</section>

<footer>
    <p>© 2023 PawFriend Animal Rescue. All rights reserved.</p>
</footer>

</body>
</html>
