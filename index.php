<!DOCTYPE html>
<html>
<head>
    <title>Great CCP login</title>
    <link rel="stylesheet" type="text/css" href="./assets/style/home.css">
    <link rel="shortcut icon" href="assets/images/troll.webp">
</head>
<body class="homebody">
    <div class="content">
        <form class="inlog" action="index.php" method="post">
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
            <p><a onclick="naarRegister()">Click here to register</a></p>
        </form>
    </div>
    
    
    <script src="./assets/scripts/audio_player.js"></script> 
</body>
</html>
