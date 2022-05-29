<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="strawberry.jpg">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>更新中</title>
</head>

<body>
    <?php
    require_once 'connect.php';
    $username = $_POST['username'];
    $password = $_POST['password'];
    $change = $_POST['change'];
    $select = "SELECT `username`,`password` FROM `account` WHERE `username` ='{$username}'AND`password`='{$password}'";
    $result = mysqli_query($connect, $select);
    if (mysqli_num_rows($result) > 0) {
        $update = "UPDATE `account` SET `password`='{$change}' WHERE username='{$username}'";
        if (mysqli_query($connect, $update)) {
            echo '更新成功</br>稍後將自動跳轉';
            echo '<script src="change1.js"></script>';
        } else {
            echo '發生錯誤！請重新嘗試！';
        }
    } else {
        echo 'error';
    }
    ?>
</body>

</html>