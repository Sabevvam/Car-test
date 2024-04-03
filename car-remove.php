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
                            <a href="#about">Remove</a>
                        </li>
                        <li>
                            <a href="#about">Contact</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <div class="remove-form">
        <form method="post" action="delete.php">
            <p>
                ID: <input type="text" name="id"><br>
                <input type="submit" name="submit" value="Delete">
            </p>
        </form>
    </div>
</body>
</html>