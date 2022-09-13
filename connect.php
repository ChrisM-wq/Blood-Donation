<?php
    session_start();
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['signup'])) {
        $conn = mysqli_connect('localhost', 'root', '', 'blooddonation') or die("Connection failed:" .mysqli_connect_error());
      
        if (isset($_POST['name']) && isset($_POST['pwd']) && isset($_POST['pwdRepeat']) && isset($_POST['email']) && isset($_POST['bgroup'])){
            $name = $_POST['name'];
            $password = $_POST['pwd'];
            $passwordRepeat = $_POST['pwdRepeat'];
            $email = $_POST['email'];
            $bgroup = $_POST['bgroup'];
            $sql = "INSERT INTO `users` (`name`, `email`, `password`, `bgroup`) VALUES ('$name', '$email', '$password', '$bgroup')";

            $query = mysqli_query($conn, $sql);
            if ($query){
                echo 'Entry successful!';
                $_SESSION["name"] = $name;
                $_SESSION["email"] = $email;
            } else {
                echo 'Error occured';
            }
        }
        header('Location:profile.php'.$_GET['previouspage']);
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login'])) {
        $conn = mysqli_connect('localhost', 'root', '', 'blooddonation') or die("Connection failed:" .mysqli_connect_error());
      
        if (isset($_POST['email']) && isset($_POST['pwd'])){
            $input_password = $_POST['pwd'];
            $input_email = $_POST['email'];

            //validate input


            $sql = "SELECT users.name, users.email, users.password FROM users WHERE users.email = ?";
            $stmt = $conn->prepare($sql);
            $stmt -> bind_param('s', $input_email);
            $stmt -> execute();
            $stmt -> store_result();
            $stmt -> bind_result($n, $e, $pwd);

           

            if ($stmt->num_rows > 0) {
                while($stmt -> fetch()) {
                    $name = $n;
                    $email = $e;
                    $password = $pwd;
                }
            }

            if ($input_password == $password) {
                $_SESSION["name"] = $name;
                $_SESSION["email"] = $email;
                header('Location:profile.php'.$_GET['previouspage']);
            } else {
                header('Location:index.php'.$_GET['previouspage']);
            }
            
               
    
        }
        
    }
?>