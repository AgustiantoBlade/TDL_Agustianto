<html>

<head>
    <title>register</title>
</head>

<body>
    <form action="sv_register.php" method="POST">
        <table>
        <tr>
            <td>Username</td>
            <td><input type="text" name="username" id="username" placeholder="input username"></td>
        </tr>
        <tr>
            <td>Fullname</td>
            <td><input type="text" name="fullname" id="fullname" placeholder="input fullname"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="email" name="email" id="email" placeholder="input email"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" name="password" id="password" placeholder="input password" onkeyup="cek_password"></td>
        </tr>
        <tr>
            <td>Confirm Password</td>
            <td><input type="password" name="confirm_pw" id="confirm_pw" placeholder="input password" onkeyup="cek_password"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" value="Sign In" id="button_submit"></td>
        </tr>
        </table>
    </form>
    Have any account? <a href="login.php">Login</a>
</body>
<script>
    function cek_password(){
        var password = document.getElementById("password").value;
        var confirmed_password= document.getElementById("confirm_pw").value;

        if(password == confirmed_password && password !== ""){
            document.getElementById("button_submit").disable = false;
        }else{
            document.getElementById("button_submit").disable = true;
        }
    }
</script>
</html>