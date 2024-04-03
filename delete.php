<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "car_gallery";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Get the form data
$id = $_POST['id'];

// Insert the data into the database
$sql = "DELETE FROM cars WHERE id = $id";
if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>