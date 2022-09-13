


<section class = "index-login">
    <div class = "wrapper">
        <div class = "index-login-signup">
            <h4>SIGN UP</h4>
            <p>Don't have an account yet? Sign up here!</p>
            <form action = "connect.php" method = "POST">
                <input type = "text" name = "name" placeholder = "Name">
                <input type = "password" name = "pwd" placeholder = "Password">
                <input type = "password" name = "pwdRepeat" placeholder = "Confirm Password">
                <input type = "text" name = "email" placeholder = "E-mail">
                <input type = "text" name = "bgroup" placeholder = "Blood group">
                <br>
                <button type = "submit" name = "signup">SIGN UP</button>
            </form>
        </div>
        <div class = "index-login-login">
            <h4>LOGIN</h4>
            <p>Login here!</p>
            <form action = "connect.php" method = "POST">
                <input type = "text" name = "email" placeholder = "Email">
                <input type = "password" name = "pwd" placeholder = "Password">
                <br>
                <button type = "submit" name = "login">LOGIN</button>
            </form>
        </div>
    </div>

 

</section>