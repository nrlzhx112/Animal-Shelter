<?php
    session_start();

    if (!isset($_SESSION['SESSION_EMAIL'])) {
        header("Location: ../login.php");
        //die();
    }

    include '../includes/connection.php';

    if(isset($_POST['add_fundraiser']))
    {

            $fund_name=$_POST['fund_name'];
            $fund_desc = $_POST['fund_desc'];
            $fund_amount=$_POST['fund_amount'];

            if ($fund_amount >= 1 && $fund_amount <= 9999999) {
            $query="insert into fundraisers (fund_name, fund_desc, fund_amount) values(?,?,?)";
            $stmt = $conn->prepare($query);
            $rc=$stmt->bind_param('sss', $fund_name, $fund_desc, $fund_amount);
            $stmt->execute();
                if($stmt)
                {
                    echo "<script>alert('Fundraiser Added!');</script>";

                }
                else 
                {
                    echo "<script>alert('Please Try Again Later!');</script>";

                }
            
            } else {
                echo "<script>alert('Please Enter Correct Amount!');</script>";
            }
        }
            

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animal Shelter</title>

    <style>
    body {
        background-color: mistyrose;
    }

    /* Add overlay background */
    .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5); /* Adjust the opacity as needed */
            z-index: 9999;
            display: flex;
            align-items: center;
            justify-content: center;
        }

    * {
        margin: 0;
        padding: 0;
    }

    header {
        padding: 10px;
        background-color: navajowhite;
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
<?php include('includes/header.php');?>

<section>

<div class="container">
    <div class="column">
        
    <h1 class="donation-text">Donation</h1>
    <form method ="POST" enctype="multipart/form-data"> 
        <div class="form-group">
            <label for="exampleInputEmail1">Fundraiser Name</label>
            <input type="text" required class="form-control" id="exampleInputEmail1" name="fund_name">
        </div>
        <br>
        <div class="form-group">
            <label for="exampleInputEmail1">Description</label>
            <!-- <input type="text" class="form-control" id="exampleInputEmail1" name="fund_link" required> -->
            <textarea name="fund_desc" id="fund_desc" cols="30" rows="10" required></textarea>
        </div>
        <br>
        <div class="form-group">
            <label for="exampleInputEmail1">Amount Need</label>
            <input type="number" min="1" max="9999999" class="form-control" id="exampleInputEmail1" name="fund_amount" required>
        </div>
        <br>
        <button type="submit" name="add_fundraiser" class="btn btn-success">Add Fundraiser</button>
    </form>
    <br>
    <hr>
    <br>

    <?php

    // Calculate total amount from fundraisers table
    $ret_fundraisers = "SELECT SUM(fund_amount) AS total_amount FROM fundraisers"; 
    $stmt_fundraisers = $conn->prepare($ret_fundraisers);
    $stmt_fundraisers->execute();
    $res_fundraisers = $stmt_fundraisers->get_result();
    $row_fundraisers = $res_fundraisers->fetch_object();
    $total_amount = $row_fundraisers->total_amount;

    // Calculate total donation from donation table
    $ret_donation = "SELECT SUM(donation_amount) AS total_donation FROM donation"; 
    $stmt_donation = $conn->prepare($ret_donation);
    $stmt_donation->execute();
    $res_donation = $stmt_donation->get_result();
    $row_donation = $res_donation->fetch_object();
    $total_donation = $row_donation->total_donation;

    // Calculate total need
    $total_need = $total_amount - $total_donation;
?>

<h3>Total Fund Amount: <?php echo $total_amount; ?></h3>
<h3>Total Donation: <?php echo $total_donation; ?></h3>
<h3>Total Need: <?php echo $total_need; ?></h3>

    <br>
    <hr>
    <br>
    <h3>View Fundraisers:</h3>
    <table>
    <thead>
        <tr>
        <th>No</th>
        <th>Name</th>
        <th>Description</th>
        <th>Amount</th>

        </tr>
    </thead>
    <?php

        $ret="SELECT * FROM fundraisers"; 
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
        <td><?php echo $row->fund_name;?></td>
        <td><?php echo $row->fund_desc;?></td>
        <td><?php echo $row->fund_amount;?></td>
        </tr>
    </tbody>
    <?php $cnt = $cnt+1; }?>

    </table>
    </div>
</div>
</section>
<footer>
    <p>© 2023 PawFriend Animal Rescue. All rights reserved.</p>
</footer>
<script>
    function navigateTo(url) {
        window.location.href = url;
    }
</script>
</body>
</html>
