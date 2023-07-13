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
        <img src="images/img3.jpg" alt="Image3">
    </div><br>
    <h2>Provide Resources</h2>
    <p>Donations are necessary for almost all nonprofit organizations to operate, but this is especially true for animal rescue organizations and shelters.
    <br><br>1. Money<br>
        Money is at the top of every shelter’s wish list. Shelters typically work on tight budgets and can always use additional funds to provide better care for more pets. You can make donations in cash or check, or you can donate online in most cases. You can also support some legitimate animal charities that will help shelters most in need.
        Along similar lines, you can donate gift cards, but make sure to donate those that will make the biggest impact. Gift cards to pet-supply stores or Amazon gift cards are the best choice. You can also donate cards to home improvement or office supply stores.

        <br><br>2. Toys<br>
        All animals love toys, so donate any old or new pet toys to keep those homeless dogs and cats entertained and happy. Make sure to donate clean toys or toys that can be disinfected and washed frequently.
        Don’t give inappropriate toys, unsafe or toxic toys, or those that break down immediately. The best to donate are durable brands, like KONG or Nylabone. Stay away from stuffed toys and squeak toys, since strong chewers can swallow the squeaky part.

        <br><br>3. Pet Food and Treats<br>
        The biggest chunk of any shelter’s budget is spent on food, especially if there are many animals in the shelter. Donate pet food or treats to make a difference — just make sure that all the food has not expired or gone bad and hasn’t been recalled.
        You don’t have to donate pet food specifically; you can also donate things like peanut butter, canned tuna, fresh vegetables, etc. Even meat-based baby food is a good choice since shelters often mix it with dry dog food.

        <br><br>4. Cleaning Supplies<br>
        Cleaning up after pets is not easy and requires a lot of cleaning supplies. You can donate bleach, dishwashing liquid, disinfecting wipes, laundry detergent, window cleaners, paper towels, garbage bags, mops, sponges, brooms, rubber and latex gloves, etc. Even plastic shopping bags can come in handy for cleaning up dog mess, as well as for storage purposes.

        <br><br>5. Towels and Blankets<br>
        Towels are a good thing to donate because they can be used both for cleaning and bedding. They are also often used to line the bottoms of the cages. Blankets are needed for bedding and to keep the animals warm when necessary.

        These items don’t have to be in perfect condition, so any old blankets or towels will do just fine, as long as they are usable.

        <br><br>6. Newspapers<br>
        Another common item used to line the bottoms of the cages is newspapers. This might seem like a small contribution, but it is quite helpful since newspapers get soiled quickly so they are always necessary. Instead of throwing newspapers away or recycling them, donate them to your local rescue shelter. Not all shelters will need or ask for this donation, so inquire first.

        <br><br>7. Grooming Supplies<br>
        Animals in shelters must be groomed often to stay healthy and beautiful. Also, most of the animals that come here for the first time are dirty and have long, thick fur that needs to be cut and washed. There are many grooming products you can donate, such as shampoos, combs, brushes, nail clippers, haircutting scissors, etc.

        <br><br>8. Collars and Leashes<br>
        Shelter dogs need to be walked often to keep them in shape physically. Donate collars, leashes and harnesses to make this possible. Whether they are used or new, they will certainly come in handy.

        <br><br>9. Furniture<br>
        If you have any old dog beds, pads or mats lying around in your home, donate them to a rescue shelter instead of throwing them out. Cooling and heating pads and mats are also always welcomed.

        <br><br>10. Crates and Carriers<br>
        Crates and carriers can be expensive, so donate your old ones that are in good condition or buy a new one to donate. This can help tremendously since every shelter needs multiple crates and carriers to transport animals.

        <br><br>11. Food and Water Bowls<br>
        Shelters always need new food bowls to put out food for all the hungry animals they feed. Same goes for water bowls.

        <br><br>12. Flea and Tick Treatment<br>
        Animals that end up in rescue shelters often have fleas or ticks and require treatment. This has to be done as soon as they are admitted to prevent further infections, which means that shelters always need flea and tick treatment products.

        <br><br>13. Toilet Supplies<br>
        Dogs that end up in shelters are often not house trained, and some shelters don’t have enough staff to take dogs for walks as often as necessary. That can lead to many accidents, and things like pee pads or indoor toilets can help keep them to a minimum.
        Shelters also need litter boxes and litter bags. While these are mostly used by cats, dogs can also be trained to use them.

        <br><br>14. Nursing Bottles<br>
        If you had a puppy or a kitten that is all grown up now, you can donate nursing bottles to a rescue shelter. Rescue shelters often give home to puppies and kittens, and they always need nursing bottles.
    </p>
</section>

<footer>
    <p>© 2023 PawFriend Animal Rescue. All rights reserved.</p>
</footer>

</body>
</html>
