
<?php
    session_start();

    if (!isset($_SESSION['SESSION_EMAIL'])) {
        header("Location: ../login.php");
        //die();
    }

    include '../includes/connection.php';

?> 

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin Dashboard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="includes/style.css">

</head>

<body>

<?php include('includes/header.php');?>


<section>

<?php

                $fundraisers_query = "SELECT SUM(fund_amount) AS total_amount FROM fundraisers";
                $fundraisers_result = $conn->query($fundraisers_query);
                $row_fundraisers = $fundraisers_result->fetch_assoc();
                $total_amount = $row_fundraisers['total_amount'];

                // Query to calculate total donation from donation table
                $donation_query = "SELECT SUM(donation_amount) AS total_donation FROM donation";
                $donation_result = $conn->query($donation_query);
                $row_donation = $donation_result->fetch_assoc();
                $total_donation = $row_donation['total_donation'];

                // Calculate total need
                $total_need = $total_amount - $total_donation;

                // Close the database connection
 
                ?>


            <h2 style="text-align: center;">Total Fund Amount: <?php echo $total_amount; ?></h2>
            
            </div>
            
            <div class="donatable-item">
            <h2 style="text-align: center;">Total Donation: <?php echo $total_donation; ?></h2>
            </div>
            
            <div class="donatable-item">
            <h2 style="text-align: center;">Total Need: <?php echo $total_need; ?></h2>
            <br>
            </div>

            <h2 style="text-align: center;">Visit Now! </h2>
    <table>
    <thead>
        <tr>
        <th>No</th>
        <th>Name</th>
        <th>Link</th>

        </tr>
    </thead>
    <?php

        $ret="SELECT * FROM animal_shelter"; 
        $stmt= $conn->prepare($ret) ;
        $stmt->execute() ;//ok
        $res=$stmt->get_result();
        $cnt=1;
        while($row=$res->fetch_object())
    {
    ?>
    <tbody>
        <tr>
        <td><?php echo $cnt;?></td>
        <td><?php echo $row->animalShel_name;?></td>
        <td><a href="<?php echo $row->animalShel_link; ?>"><?php echo $row->animalShel_link; ?></a></td>
        </tr>
    </tbody>
    <?php $cnt = $cnt+1; }?>

    </table>
</section>

  <footer>
    <p>© 2023 PawFriend Animal Rescue. All rights reserved.</p>
  </footer>





</body>
</html>


