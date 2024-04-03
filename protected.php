<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: login.html');
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Protected Page</title>
</head>
<body>
    <h1>Welcome to the Protected Page!</h1>
    <p>You have successfully logged in.</p>
    <p><a href="login.html">Logout</a></p>
</body>
</html>