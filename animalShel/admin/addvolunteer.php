<?php
// Include the connection file
include '../includes/connection.php';

// Retrieve form data
$volunteerId = $_POST['volunteer_id'];
$name = $_POST['volunteer_name'];
$telephone = $_POST['volunteer_telno'];

// Validate input
if (!empty($volunteerId) && !empty($name) && !empty($telephone)) {
    // Prepare the SQL statement
    $stmt = $conn->prepare("UPDATE volunteer SET volunteer_name = ?, volunteer_telno = ? WHERE volunteer_id = ?");
    $stmt->bind_param("ssi", $name, $telephone, $volunteerId);

    // Execute the prepared statement
    if ($stmt->execute()) {
        // Volunteer updated successfully
        echo "<p>Volunteer updated successfully!</p>";
    } else {
        // Error occurred
        echo "Error: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
} else {
    // Validation failed
    echo "Please fill in all the fields.";
}

// Close the connection
$conn->close();

// Redirect to the volunteer page
header("Location: volunteering.php");
exit();
?>
