<!DOCTYPE html>
<meta charset="utf-8" name="viewport">

<html lang="en">

<head>
    <title>Great CCP login</title>
    <link rel="stylesheet" type="text/css" href="./assets/style/home.css">
    <link rel="shortcut icon" href="assets/images/troll.webp">

    <script>
        function toRegister() {
            document.getElementById("inlog-inhoudJS").style.display = "none";
            document.getElementById("register-inhoudJS").style.display = "block";
        }

        function toLogin() {
            document.getElementById("inlog-inhoudJS").style.display = "block";
            document.getElementById("register-inhoudJS").style.display = "none";
        }
    </script>
</head>

<body class="homebody">
    <div class="content" id="inlog-inhoudJS" >
        <form class="inlogform" action="index.php" method="post">
            <img class="ccp" src="assets/images/ccp.png">
            <br>
            <br>
            <label for="username">Username</label> <br>
            <input class="inlog-field" type="text" name="username" required>
            <br>
            <br>
            <label for="wachtwoord">Password</label> <br>
            <input class="inlog-field" type="password" name="wachtwoord" required>
            <br>
            <br>
            <input class="inlog-button" type="submit" value="Login" name="login-btn">
            <br>
            <p><a onclick="toRegister()">Click here to register</a></p>
        </form>
    </div>
    
    <div class="content" id="register-inhoudJS" style="display: none;">
        <img class="ccp" src="assets/images/ccp.png">
        <br>
        <br>
        <form class="registerform" action="index.php" method="post">
            <label for="regUsername">Username</label> <br>
            <input class="register-field" type="text" name="regUsername" required>
            <br>
            <br>
            <label for="regEmail">Email</label> <br>
            <input class="register-field" type="email" name="regEmail" required>
            <br>
            <br>
            <label for="regWachtwoord">Password</label> <br>
            <input class="register-field" type="text" name="regWachtwoord" required>
            <br>
            <br>
            <input class="register-button" type="submit" value="Register" name="reg-btn">
            <br>
            <p><a onclick="toLogin()">Click here to login</a></p>
        </form>
    </div>

    <script src="./assets/scripts/audio_player.js"></script> 
</body>
</html>
