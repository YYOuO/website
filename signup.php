<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link type="icon" href="strawberry.jpg">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>註冊中...</title>
</head>

<body>
    <?php
    require_once 'connect.php';
    $username = $_POST['username'];
    $password = $_POST['password'];
    $signup = "INSERT INTO `account` (`username`,`password`) VALUES ('{$username}'  ,'{$password}')";
    $check = "SELECT `username` FROM `account` WHERE username = '{$username}' LIMIT 1";
    $result = mysqli_query($connect, $check);
    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            echo '不要給我一直註冊😠</br>';
        } else {
            echo '請稍後...';
            if (mysqli_query($connect, $signup)) {
                echo '註冊成功！</br>';
                echo '稍後將自動跳轉';
                echo '<script src="signup.js"></script>';
            } else {
                echo '註冊失敗';
            }
        }
    } else {
        echo '</br>出示了阿伯';
    }

    ?>

</body>

</html>