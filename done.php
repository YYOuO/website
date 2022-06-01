<?php
session_start();
require_once 'connect.php';
$username = $_GET['username'];
$delete = "DELETE FROM `account`  WHERE `username` ='{$username}'";
mysqli_query($connect, $delete);
$bad = "INSERT INTO `bad` (`badguy`,`killed`,`time`) VALUES ('{$_SESSION["username"]}','{$username}',now())";
mysqli_query($connect, $bad);
if ($_SESSION["username"] == $username) {
    require_once 'a.php';
} else {
    header('location:delete.php');
}
// header('Refresh:3;url=main.php');