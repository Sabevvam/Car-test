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
$img = $_FILES['img']['name'];
$brand = $_POST['brand'];
$model = $_POST['model'];
$price = $_POST['price'];
$id = $_POST['id'];

// Insert the data into the database
$sql = "UPDATE cars SET img = '$img', brand = '$brand', model = '$model', price = '$price' WHERE id = $id";
if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?>