<?php
# FileName="connection.htm"
# Type="MYSQL"
# HTTP="true"
    $hostname = "localhost";
    $database = "jackjow";
    $username = "jackjow";
    $password = "amitof0dam0";
    $link = mysql_pconnect($hostname, $username, $password) or trigger_error(mysql_error(),E_USER_ERROR);
    mysql_select_db($database) or die("Could not select database");
?>
