<?php
$fp=fopen("/home/jackjow/public_html/admin/dbConn.cnf","r");
$dbServer = rtrim(fgets($fp));
$dbName = rtrim(fgets($fp));
$dbUser = rtrim(fgets($fp));
$dbUPW = rtrim(fgets($fp));
fclose($fp);
//對資料庫連線
$conn = new mysqli($dbServer, $dbUser, $dbUPW);
// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";

//資料庫連線採UTF8
mysqli_query($conn,"SET NAMES utf8");
//選擇資料庫
$db_selected =mysqli_select_db($conn,$dbName);
if (!$db_selected) {
	die ('無法使用資料庫  (Can not use Database!!)' . mysql_error());
}
?> 