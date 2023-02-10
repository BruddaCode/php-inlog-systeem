<!DOCTYPE html>
<html>
<head>
    <title>Great CCP login</title>
    <link rel="stylesheet" type="text/css" href="./assets/style/home.css">
    <script src="./assets/scripts/audio_player.js"></script> 
    <link rel="shortcut icon" href="assets/images/troll.webp">
</head>
<body class="homebody">
    <div class="content">
        <form class="inlog" action="index.php" method="post">
            <img class='ccp' src="assets/images/ccp.png">
            <br>
            <label for="username">Username</label> <br>
            <input type="text" name="username" required>
            <br>
            <br>
            <label for="wachtwoord">Password</label> <br>
            <input type="password" name="wachtwoord" required>
            <br>
            <br>
            <input id="inlog-button" type="submit" value="Login" name="login-btn">
            <br>
            <p><a onclick="naarRegister()">Click here to register</a></p>
        </form>
    </div>
</body>
</html>
