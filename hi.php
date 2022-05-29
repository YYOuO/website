<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="strawberry.jpg">
    <link rel="stylesheet" href="hi.css">
    <title>Profile</title>
</head>

<body style="color:white">
    <?php
    require_once 'connect.php';
    $username = $_GET['id']; ?>
    <h1><?php echo $username; ?></h1>
    <p>這是他的登入資料(最近10筆)</p>
    <p>順便告訴你他的密碼</p>
    <p>但是現在技術有點出了問題所以晚點再說</p>
    <?php
    $pwd = "SELECT `password` FROM  `account` WHERE username='{$username}'";
    $result2 = mysqli_query($connect, $pwd);
    $a = mysqli_fetch_assoc($result2); ?>
    <p style="background-color:black ;"><?php echo $a['password']; ?></p>
    <p>月/日/時/分</p>
    <?php

    $form = "SELECT `logintime` FROM  `qwer` WHERE `username` = '{$username}' ORDER BY `logintime` DESC LIMIT 10";
    $result = mysqli_query($connect, $form);
    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            while ($a = mysqli_fetch_assoc($result)) {
    ?>
    <p style="color:orange;margin:3px;padding:3px;"><?php echo $a['logintime']; ?></p>
    <?php
                echo '</br>';
            }
        }
        mysqli_free_result($result);
    }
    ?>



</body>

</html>