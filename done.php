<?php
require_once 'connect.php';
$username = $_GET['username'];
$delete = "DELETE FROM `account` WHERE `username` ='{$username}'";
mysqli_query($connect, $delete);
// header('location:index.html');
// header('Refresh:3;url=main.php');