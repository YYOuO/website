<?php
$username = $_POST['username'];
$password = $_POST['password'];
require_once 'connect.php';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>回應網站</title>
    <link rel="icon" href="strawberry.jpg">
    <link rel="stylesheet" href="form.css">
</head>

<body>
    <h1 style="text-align: center; color:aqua">早安</h1>
    <div style="text-align: left;">
        <?php
        date_default_timezone_set('Asia/Taipei'); ?>
        <span>Hello! <?php echo $username; ?></span>
        </br>
        <p>I know your password:)</p>
        </br>
        <span>It is : <?php echo $password; ?></span>
    </div>
    <?php
    echo '</br>';
    echo '想不到吧' . '<br />';
    echo '登入時間：' . date('Y-m-d H:i:s');
    echo '</br>';
    echo '如果沒有跳到下一頁請仔細檢查喔' . '</br>';
    $input = "INSERT INTO `qwer` (`username` ,`logintime`) VALUES ('{$username}',now())";
    $user = "SELECT `username` , `password` FROM `account` WHERE `username` = '{$username}' ";
    $check = "SELECT `username` , `password` FROM `account` WHERE `username` = '{$username}' AND  `password` ='{$password}'";
    $result = mysqli_query($connect, $user);
    ?>
    <p style="text-align: center;font-size:larger;color:lightblue;background-color:darkolivegreen;opacity:0.8;">
        <?php
        if ($result) {
            if (mysqli_num_rows($result) > 0) {
                $result = mysqli_query($connect, $check);
                if (mysqli_num_rows($result)) {
                    echo '密碼正確</br>';
                    if (mysqli_query($connect, $input)) {
                        echo '登入資料儲存成功！</br>';
                        echo '<script src="form.js"></script>';
                        echo '如果你不想等，就點<a href="wait.html" style="font-size:x-large;">我</a>吧';
                    } else {
                        echo '登入資料儲存失敗！</br>';
                    }
                } else {
                    echo '密碼錯了給你機會重打喔';
                }
            } else {
                echo '<a href="register.html">先註冊</a>';
            }
        }
        //無法解釋

        echo '<br>';
        ?>
        </br>
    </p>
    <p>10秒後跳轉網頁</p>
    <span>還有</span>
    <span id="countdown" style="font-size: xx-large;">10</span>
    <span>秒</span>
    </br>

</body>

</html>