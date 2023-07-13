<?php
include '../includes/connection.php';

if ($_SERVER["REQUEST_METHOD"] == "GET") {
  // Check if the animalShelterId is provided as a query parameter
  if (isset($_GET["id"])) {
    $animalShelterId = $_GET["id"];

    // Retrieve the animal shelter from the database
    $sql = "SELECT * FROM animal_shelter WHERE animalShel_id = $animalShelterId";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
      $row = mysqli_fetch_assoc($result);

      // Display the animal shelter information in a form for editing
      echo "
        <h2>Edit Animal Shelter</h2>
        <form action='update-animal-shelter.php' method='post'>
          <input type='hidden' name='animalShel_id' value='" . $row['animalShel_id'] . "'>
          <label for='animalShel_name'>Name:</label>
          <input type='text' name='animalShel_name' id='animalShel_name' value='" . $row['animalShel_name'] . "'>
          <br>
          <label for='animalShel_link'>Link:</label>
          <input type='text' name='animalShel_link' id='animalShel_link' value='" . $row['animalShel_link'] . "'>
          <br>
          <label for='animalShel_description'>Description:</label>
          <textarea name='animalShel_description' id='animalShel_description'>" . $row['animalShel_description'] . "</textarea>
          <br>
          <label for='animalShel_email'>Email:</label>
          <input type='email' name='animalShel_email' id='animalShel_email' value='" . $row['animalShel_email'] . "'>
          <br>
          <label for='animalShel_telno'>Telephone Number:</label>
          <input type='tel' name='animalShel_telno' id='animalShel_telno' value='" . $row['animalShel_telno'] . "'>
          <br>
          <input type='submit' name='submit' value='Update Animal Shelter' class='btn'>
        </form>
      ";
    } else {
      echo "Animal shelter not found.";
    }
  } else {
    echo "Animal shelter ID not provided.";
  }
} else {
  echo "Invalid request.";
}

mysqli_close($conn);
?>
<button onclick="location.href='view-all-animal-shelters.php'">Go Back to Animal Shelter</button>
