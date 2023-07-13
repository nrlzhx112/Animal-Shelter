<?php
// Check if the volunteer ID is provided in the URL
if(isset($_GET['id'])) {
    // Get the volunteer ID from the URL
    $volunteer_id = $_GET['id'];

    // Include the database connection
    include '../includes/connection.php';

    // Delete the volunteer from the database
    $query = "DELETE FROM volunteer WHERE volunteer_id = $volunteer_id";
    mysqli_query($conn, $query);

    // Redirect back to the previous page
    header("Location: volunteering.php");
    exit();
}
?>
