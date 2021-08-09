<?php
    include("checkLogin.php");
    include("calender.php");
    $ID = $_POST['userID'];
    $PW = $_POST['userPW'];
    if(!checkUser($ID, $PW)){
        echo "<center>Incorrect user name or password!!<br/>";
        echo "Returen to <a href=\"login.html\">login</a> page!</center>";
        exit();
    }
?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Maintain</title>
        <link rel="stylesheet" type="text/css" href="Jack_PHP.css" media="screen" />
    </head>
    <body>
        <div id="wrap">
            <div id="header">
                <h1>資料維護</h1>
            </div>
            <div id="menu">
                <ul>
                    <li><a href="index.php">首頁</a></li>
                    <?php
                    //header("location:maintainPubList.php?userID=".$ID."&userPW=".$PW."");
                    echo "<li><a OnClick=\"window.location='maintainPubList.php?userID=".$ID."&userPW=".$PW."'\">著作</a></li>";
                    ?>
                    <li><a OnClick="window.location='conferenceCFP.php'">研討會CFP</a></li>
                </ul>
            </div>
            <div id="content">
                <div class="left">
                    <center>
                    <img src="Images/Jack.png" border="2" alt="Jack"/>
                    <?php calender();?>
                    </center>
                </div>
                <div id="right">
                    <table border="0" align="center" width="400">
                        <tr bgcolor="#CC99CC">
                            <td width="50%" align="center">著作維護</td>
                            <td width="50%" align="center">研討會資訊</td>
                        </tr>
                        <tr>
                            <?php
                            echo "<td align=\"center\"><input type=\"button\" value=\"新增\" onclick=\"window.location='addPub.php?userID=".$ID."&userPW=".$PW."'\"/></td>";
                            ?>
                            <td align="center"><input type="button" value="新增"/></td>
                        </tr>
                        <tr bgcolor="#AABBCC">
                            <td><input type="button" value="查詢"/></td>
                            <td><input type="button" value="查詢"/></td>
                        </tr>
                        <tr>
                            <td><input type="button" value="修改"/></td>
                            <td><input type="button" value="修改"/></td>
                        </tr>
                        <tr bgcolor="#AABBCC">
                            <td><input type="button" value="刪除"/></td>
                            <td><input type="button" value="刪除"/></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <center>
            現在時間：<script language="JavaScript" type="text/javascript">
            <!--
                    document.write("<span id='clock'></span>");
                    var now,hours,minutes,seconds,timeValue;
                    function showtime(){
                            now = new Date();
                            hours = now.getHours();
                            minutes = now.getMinutes();
                            seconds = now.getSeconds();
                            timeValue = (hours >= 12) ? "PM " : "AM ";
                            timeValue += ((hours > 12) ? hours - 12 : hours) + ":";
                            timeValue += ((minutes < 10) ? "0" : "") + minutes + ":";
                            timeValue += ((seconds < 10) ? "0" : "") + seconds;
                            clock.innerHTML = timeValue;
                            setTimeout("showtime()",100);
                    }
                    showtime();
            -->
            </script>
        </center>
    </body>
</html>