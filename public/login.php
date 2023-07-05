<html>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/2c04a65836.js" crossorigin="anonymous"></script>
    <title>Login</title>
    <link rel="icon" type="image/x-icon" href="./assets/faviconTK.ico">
    <link rel="stylesheet" href="../style/login1.css">

</head>

<body>
    <div class="container">
        <div class="containerForm"><br>
            <h1>Login</h1>
            <form method="post" action="sv_login.php">
                <h3>Username</h3>
                <div class="inputText">
                    <i class="fa-solid fa-user" style="color: #c0c0c2;"></i>
                    <input class="textField" type="text" name="username" id="username" placeholder="Type your username..."
                        required />
                </div>
                <h3>Email</h3>
                <div class="inputText">
                    <i class="fa-solid fa-user" style="color: #c0c0c2;"></i>
                    <input class="textField" type="email" name="email" id="email" placeholder="Type your email..."
                        required />
                </div>
                <h3>Fullname</h3>
                <div class="inputText">
                    <i class="fa-solid fa-user" style="color: #c0c0c2;"></i>
                    <input class="textField" type="text" name="fullname" id="fullname" placeholder="Type your full name..."
                        required />
                </div>
                <h3>Password</h3>
                <div class="inputText">
                    <i class="fa-solid fa-lock" style="color: #c0c0c2;"></i>
                    <input class="textField" type="password" name="password" id="password"
                        placeholder="Type your password..." required />
                </div>
                <div class="button_submit">
                    <center>
                        <td colspan="2"><input class="button" type="submit" value="Login" name="submit"></td>
                    </center>
                </div>
            </form>
            <div class="register">Don't have an account? <a href="register.php" style="font-weight: bold">Sign up
                    now!</a></div><br>
        </div>
    </div>
</body>

</html>