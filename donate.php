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
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
<header>
    <nav>
        <h3>SABB</h3>
        <div>
            <ul class = "menu-main">
                <li><a href = "index.php">Home</a></li>
                <li><a href = "#">Services</a></li>
                <li><a href = "#">Projects</a></li>
                <li><a href = "">Donate</a></li>
                <li><a href = "#">About</a></li>
            </ul>
        </div>
        <ul class = "logout">
            <h3><?php echo $_SESSION["name"]?></h3>
            <form action = "logout.php" method = "POST">
                <button type = "submit" name = "logout">Logout</button>
            </form>
        </ul>
    </nav>
</header>

<section class = "description">
    <h2>Where Can I Donate?</h2>
</section>


<section class = "operations">
    <h3>How blood donating works:</h3>
    <p>If you're donating whole blood, we'll cleanse an area on your arm and insert a brand new sterile needle for the blood draw. (This feels like a quick pinch and is over in seconds.)
        Other types of donations, such as platelets, are made using an apheresis machine which will be connected to both arms.
        A whole blood donation takes about 8-10 minutes, during which you'll be seated comfortably or lying down.
        When approximately a pint of whole blood has been collected, the donation is complete and a staff person will place a bandage on your arm.
        For platelets, the apheresis machine will collect a small amount of blood, remove the platelets, and return the rest of the blood through your other arm; this cycle will be repeated several times over about 2 hours.</p>
    <iframe width="800" height="600" src="https://www.youtube.com/embed/oK6OqphSbjU" title="How Does Blood Donation Work? | Earth Lab" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</section>


</body>
</html>