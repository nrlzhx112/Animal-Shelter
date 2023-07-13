<?php
include '../includes/connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if(isset($_POST['submit'])) {
    $animalShel_id = $_POST['animalShel_id'];
    $animalShel_name = $_POST['animalShel_name'];
    $animalShel_link = $_POST['animalShel_link'];
    $animalShel_description = $_POST['animalShel_description'];
    $animalShel_email = $_POST['animalShel_email'];
    $animalShel_telno = $_POST['animalShel_telno'];

    // Update the animal shelter in the database
    $sql = "UPDATE animal_shelter SET animalShel_name='$animalShel_name', animalShel_link='$animalShel_link', animalShel_description='$animalShel_description', animalShel_email='$animalShel_email', animalShel_telno='$animalShel_telno' WHERE animalShel_id='$animalShel_id'";
    
    $result = mysqli_query($conn, $sql);

    if ($result) {
      header("Location: animal-shelter.php");
      exit();
    } else {
      echo "An error occurred while updating the animal shelter.";
    }
  }
}

mysqli_close($conn);
?>
