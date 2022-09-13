<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SABB</title>
    <link rel="stylesheet" href="research.css">
</head>
<body>
    
<header>
    <nav>
        <h3>SABB</h3>
        <div>
            <ul class = "menu-main">
                <li><a href = "../index.php">Home</a></li>
                <li><a href = "stripe-php/fundDonation.php">Services</a></li>
                <li><a href = "#">Projects</a></li>
                <?php
                    if (isset($_SESSION["name"])) { ?>
                        <li><a href = "donate.php">Donate</a></li>
                    <?php } ?>
                <li><a href = "#">About</a></li>
            </ul>
        </div>
        <ul class = "menu-member">
            <?php 
                if (!isset($_SESSION["name"])) { ?>
                    <li><a href = "login.php">Sign up</a></li>
                    <li><a href = "login.php">Login</a></li>
                <?php } else { ?>
                    <h3><?php echo $_SESSION["name"]?></h3>
                    <form action = "logout.php" method = "POST">
                        <button type = "submit" name = "logout">Logout</button>
                    </form>
                <?php }
            ?>
        </ul>
    </nav>
</header>


<section class = "upload">
    <h2>Upload Research</h2>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        Select image to upload:
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload Image" name="submit">
    </form>
</section>





<section class = "projects">
    
    <div class = "project-images">
    <?php include 'displayProjects.php';?>
    </div>
    <div class = "description">
        A cat is a furry animal that has a long tail and sharp claws. Cats are often kept as pets. 2. countable noun. Cats are lions, tigers, and other wild animals in the same family
    </div>
    <div class = "view"></div>
    
</section>




</body>
</html>