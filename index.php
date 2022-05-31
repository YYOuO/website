<?php
session_start();
if ($_SESSION["username"]) {
    header('location:main.php');
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="index1.css">
    <link rel="icon" href="strawberry.jpg">
    <title>早安</title>
    <html lang="zh-TW">

    </html>
</head>

<body>
    <a href="https://wall.alphacoders.com/big.php?i=1132140" style="text-align:left; " target="_blank">圖源</a>
    <div>
        <h1>Welcome!</h1>
        <form method="post" action="form.php">
            <span>Username: </span><input type="text" name="username" placeholder="username" required>
            </br>
            <span>Password: </span><input type="password" name="password" placeholder="password" required>
            </br>
            <button type="submit" style="border: 2; margin:2;color:purple">Sign in</button>
        </form>
        <a href="register.html">Register</a>
        </br>
    </div>


</body>

</html>