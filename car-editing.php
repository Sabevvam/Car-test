<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="car-update.css">
    <title>EDIT CAR</title>
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
    <div class="update-form">
        <form method="post" action="update.php" enctype="multipart/form-data">
            <p>
                Image: <input type="file" name="img"/><br>
                Brand: <input type="text" name="brand"><br>
                Model: <input type="text" name="model"><br>
                Price: <input type="text" name="price"><br>
                ID: <input type="text" name="id"><br>
                <input type="submit" name="submit" value="Update">
            </p>
        </form>
    </div>
</body>
</html>