<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="main.css">
    <title>Car Gallery</title>
</head>
<body>
    <header>
        <div class="navbar">
            <nav>
                <div class="logo">
                    <img src="img/logo car.png" alt="Apple">
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
                            <a href="add-car.php">Add car</a>
                        </li>
                        <li>
                            <a href="car-remove.php">Remove</a>
                        </li>
                        <li>
                            <a href="login.php">Admin</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <main>
        <div class="car-gallary">
            <div class="main-block">
            <?php
            include "datebase.php";
            $result = mysqli_query($induction, "SELECT * FROM `cars`");
            while ($row = mysqli_fetch_assoc($result)) {
            ?>
                <div class="col">
                    <div class="imag-box">
                        <img src="<?=$row['img'];?>" alt="Car Image" class="image">
                    </div>
                    <div class="brand-model">
                        <div class="brand">
                            <p><?=$row['brand'];?></p>
                        </div>
                        <div class="model">
                            <p><?=$row['model'];?></p>
                        </div>
                    </div>
                    
                    <div class="price">
                        <p><?=$row['price'];?></p>
                    </div>
                </div>
            <?php
            }
            ?>
            </div>
        </div>
    </main>
</body>
</html>
