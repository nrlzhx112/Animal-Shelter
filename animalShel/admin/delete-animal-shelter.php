<?php
include '../includes/connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Check if the animalShelterId is provided
  if (isset($_POST["animalShelterId"])) {
    $animalShelterId = $_POST["animalShelterId"];

    // Delete the animal shelter from the database
    $sql = "DELETE FROM animal_shelter WHERE animalShel_id = $animalShelterId";
    if (mysqli_query($conn, $sql)) {
      echo "Animal shelter deleted successfully.";
    } else {
      echo "Error deleting animal shelter: " . mysqli_error($conn);
    }
  } else {
    echo "Animal shelter ID not provided.";
  }
} else {
  echo "Invalid request.";
}

mysqli_close($conn);
header("Location: view-all-animal-shelters.php");

?>
