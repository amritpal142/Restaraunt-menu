<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Menu</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<header>
    <nav class="navbar">
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Menu</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </nav>
        <h1>Menu</h1>
    </header>
    <div class="menu-container">
        <?php
        include 'database.php';

        $sql = "SELECT id, name, description, price FROM menu_items";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<div class='menu-item'>
                        <div class='menu-item-details'>
                            <div class='menu-item-name'>" . $row["name"] . "</div>
                            <div class='menu-item-description'>" . $row["description"] . "</div>
                            <div class='menu-item-price'>$" . $row["price"] . "</div>
                        </div>
                      </div>";
            }
        } else {
            echo "0 results";
        }
        $conn->close();
        ?>
    </div>
</body>
</html>
