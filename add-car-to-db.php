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

// Insert the data into the database
$sql = "INSERT INTO cars (img, brand, model, price) VALUES ('$img', '$brand', '$model', '$price')";
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>