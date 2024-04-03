<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="add-car.css">
    <title>Add CAR</title>
</head>
<body>
    <header>
        <div class="navbar">
            <nav>
                <div class="logo">
                        <a href="index.php"><img src="img/logo car.png" alt="Apple"></a>
                </div>
                <div class="menu_list">
                    <ul>
                        <li>
                            <a href="#home">Store</a>
                        </li>
                        <li>
                            <a href="#news">New Cars</a>
                        </li>
                        <li>
                            <a href="#news">Car Gallery</a>
                        </li>
                        <li>
                            <a href="#contact">Used Cars</a>
                        </li>
                        <li>
                            <a href="#about">Rent a car</a>
                        </li>
                        <li>
                            <a href="car-editing.php">Edit</a>
                        </li>
                        <li>
                            <a href="add-car.html">Add car</a>
                        </li>
                        <li>
                            <a href="car-remove.php">Remove</a>
                        </li>
                        <li>
                            <a href="#about">Contact</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <div class="add-form">
        <form action="add-car-to-db.php" method="post" enctype="multipart/form-data">
            <label for="img">Image:</label><br>
            <input type="file" id="img" name="img" required><br>
            <label for="brand">Brand:</label><br>
            <input type="text" id="brand" name="brand" required><br>
            <label for="model">Model:</label><br>
            <input type="text" id="model" name="model" required><br>
            <label for="price">Price:</label><br>
            <input type="number" id="price" name="price" required><br>
            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>