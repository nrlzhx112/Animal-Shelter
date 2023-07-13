<?php
include '../includes/connection.php';

if(isset($_POST['submit'])) {
	$animalShel_name = $_POST['animalShel_name'];
	$animalShel_link = $_POST['animalShel_link'];
	$animalShel_description = $_POST['animalShel_description'];
	$animalShel_email = $_POST['animalShel_email'];
	$animalShel_telno = $_POST['animalShel_telno'];

	$sql = "INSERT INTO animal_shelter (animalShel_name, animalShel_link, animalShel_description, animalShel_email, animalShel_telno) VALUES ('$animalShel_name', '$animalShel_link', '$animalShel_description', '$animalShel_email', '$animalShel_telno')";
	$result = mysqli_query($conn, $sql);

	if($result) {
		echo "<p>Animal shelter added successfully.</p>";
	} else {
		echo "<p>Error adding animal shelter.</p>";
	}
}
// close connection
$conn->close();

// redirect to volunteer page
header("Location: animal-shelter.php");
exit();

?>