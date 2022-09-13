<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styleProfile.css">
</head>
<body>
    
<header>
    <nav class = "nav-bar">
        <div class = "icon">
            <img src="icon.jpg" alt="icon: blood drop">
        </div>
        <div>
            <ul class = "menu-main">
                <li><a href = "index.php">Home</a></li>
                <li><a href = "#">Services</a></li>
                <li><a href = "research/projects.php">Projects</a></li>
                <li><a href = "#">About</a></li>
            </ul>
        </div>
        
        <div class = "menu-member">
            <h3><?php echo $_SESSION["name"]?></h3>
            <form action = "logout.php" method = "POST">
                <button type = "submit" name = "logout">Logout</button>
            </form>
        </div>
    </nav>
</header>

<section class = "donations-sec">
    <div class = "donations">
        <h2>Donations Made</h2>
        <div class = "donations-made">
            <p>We're here to help charities change the world, so our global fundraising service is free. We cover our costs by taking a 5% donation fee which donors can cover</p>
            <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "blooddonation";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $email = $_SESSION["email"];
            $sql = "SELECT donations.date, donations.location FROM donations INNER JOIN users ON donations.user_id = users.id WHERE users.email = ?";
            $stmt = $conn->prepare($sql);
            $stmt -> bind_param('s', $email);
            $stmt -> execute();
            $stmt -> store_result();
            $stmt -> bind_result($date, $location);

            if ($stmt->num_rows > 0) {
            // output data of each row
            $count = 1;
            while($stmt -> fetch()) {
                echo $count. ".   Date: " . $date. " - Location: " . $location;
                $count++;
            }
            } else {
                echo "0 results";
            }
            $stmt -> close();
            ?>
        </div>
        <div class = "image-pos">
            <img src="blood.jpg" alt="Italian Trulli" class = "image-stuff">
        </div>
    </div>
    <div class = "booking">
        <h2>Book Blood Donation</h2>
        <div class = "book-donation">
            <p>We're here to help charities change the world, so our global fundraising service is free. We cover our costs by taking a 5% donation fee which donors can cover</p>
            <form action = "#" method = "POST">
                <input type = "date" name = "date" placeholder = "Date">
                <input type = "text" name = "location" placeholder = "Location">
                <br>
                <button type = "submit" name = "confirm">SIGN UP</button>
            </form>
        </div>
    </div>
</section> 




</body>
</html>