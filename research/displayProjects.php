<?php
if (isset($_SESSION["email"])) {

        $conn = mysqli_connect('localhost', 'root', '', 'blooddonation') or die("Connection failed:" .mysqli_connect_error());

        $email = $_SESSION["email"];

        $sql = "SELECT projects.path FROM projects WHERE projects.email = ?";

        $stmt = $conn->prepare($sql);
        $stmt -> bind_param('s', $email);
        $stmt -> execute();
        $stmt -> store_result();
        $stmt -> bind_result($path);

        if ($stmt->num_rows > 0) {
            while($stmt -> fetch()) {
                echo ("<h2>$path</h2>");
                $filepath = "uploads/".$path;
                echo '<img src="'.$filepath.'">'; 
            }
        }
    }    
?>