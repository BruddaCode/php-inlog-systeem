<!DOCTYPE html>
<html>
<head>
    <title>Inlog Systeem</title>
    <link rel="stylesheet" type="text/css" href="./assets/style/home.css">
    <link rel="shortcut icon" href="assets/style/troll.webp">
</head>
<body class="homebody">
    <div class="header">
        <h1>Inlog Systeem</h1>
    </div>
    <div class="content">
        <form method="post" action="login.php">
            <table>
                <tr>
                    <td>Gebruikersnaam:</td>
                    <td><input type="text" name="username" class="textInput"></td>
                </tr>
                <tr>
                    <td>Wachtwoord:</td>
                    <td><input type="password" name="password" class="textInput"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="login_btn" value="Inloggen"></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>
