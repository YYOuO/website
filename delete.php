<?php
session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>刪除</title>
    <link rel="icon" href="strawberry.jpg">
    <link rel="stylesheet" href="delete.css">
    <script src="delete.js"></script>
</head>


<body>
    <?php
    require_once 'connect.php';
    $value = "SELECT username FROM `account` ORDER BY `username`";
    ini_set('memory_limit', '44M');
    $result = mysqli_query($connect, $value);
    $list = array();
    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            while ($a = mysqli_fetch_assoc($result)) {
                $list[] = $a;
            }
            mysqli_free_result($result);
        }
    } else {
        echo '出示了阿伯';
    }
    ?>

    <div>
        <h1 style="text-align: center;font-size:larger ;color:violet;">刪除帳號</h1>
        </br>
        <span>選一個刪掉吧</span>
        <form type="get" action="done.php">
            <select name="username">
                <?php
                foreach ($list as $uu => $a) {
                    echo '<option>' . $a['username'] . '</option>';
                }
                ?>
            </select>

            <button type="submit" id="submit">你是不是看他不爽</button>
        </form>
    </div>
</body>

</html>