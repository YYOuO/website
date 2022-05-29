<?php
$connect = mysqli_connect('localhost', 'root', '', 'try');
// 連接sql  mysqli_connect('ip','帳號','密碼','資料庫名子')
//query 我不知道為甚麼
mysqli_query($connect, 'SET NAMES utf8');