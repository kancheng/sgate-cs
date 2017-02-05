<?php

$cfgDB_HOST = "localhost"; //主機名稱或ip位址

//主機開放連線的port
$cfgDB_USERNAME = "root";  //登入主機帳號
$cfgDB_PASSWORD = "hokkaidou";  //登入主機密碼
$cfgDB_NAME = "csdb"; //資料庫名稱

//建立資料庫連線
$link = mysql_connect($cfgDB_HOST, $cfgDB_USERNAME, $cfgDB_PASSWORD) or die("Could not connect MySQL");

//選擇資料庫
mysql_select_db($cfgDB_NAME, $link) or die("Could not select database");

//讓中文正常顯示
mysql_query("SET NAMES 'utf8'"); 

?>