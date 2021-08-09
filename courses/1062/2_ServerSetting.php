<!DOCTYPE html>
<?php  require('../../fun_inc.php');
session_start();  ?>
<html lang="zh-tw">
<head>
    <meta charest="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Yung-Chen Chou's Web</title>
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../bootstrap/css/Cerulean/bootstrap.min.css">
    <link rel="stylesheet" href="../style.css">
    <link rel="SHORTCUT ICON" href="../../Images/jack.png">
    <style>
        .problem p {
            font-size: 1.2em;
            line-height: 150%;
            text-align: justify;
            padding-left: 20px;
            padding-right: 20px;
        }
        #problem a.btn, a.btn:visited {
            color: rgb(220, 220, 220);
            width: 4em;
            height: 2em;
            -webkit-border-radius: 10px;
            font-size: 1.1em;
            background-image: linear-gradient(rgba(100, 100, 100, 0.3), rgba(40, 40, 40, 0.8));
        }
        .sampleIOTable th td{
            /*border-collapse: collapse;*/
            border: solid 1px rgb(0, 0, 0);
            font-size: 1.2em;

        }
        .sampleIOTable th{
            border: solid 1px rgb(0, 0, 0);
            text-align: center;
            font-size: 1.2em;
            font-family: "Times";
        }
        .sampleIOTable td{
            border: solid 1px rgb(0, 0, 0);
            text-align: left;
            vertical-align: top;
            color: rgb(0, 0, 0);
            text-shadow: none;
            font-family: "Times";
        }
    </style>
</head>
<body>
<div class="container">
    <img src="../../Images/banner.png" class="img-responsive hidden-xs" width="100%" style="margin-bottom: 1px; margin-top:3px;">
</div>
<div class="container">
    <?php headerBanner(5); ?>
</div>
<div class="container">
    <h2>106-2 伺服器建置與管理 (Server Setting up and Management)</h2>
    <h3 style="text-shadow: 2px 2px 4px rgb(80, 80, 80); color: rgb(0,0,0);">
        時間: 週三 234 (19:10~12:00) 地點: 資訊大樓 H103 室</h3>

    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#home">授課教材</a></li>
        <li><a data-toggle="tab" href="#Material">重點摘要</a></li>
        <li><a data-toggle="tab" href="#Exercise">練習</a></li>
        <li><a data-toggle="tab" href="#Homeworks">作業</a></li>
    </ul>
    <div class="tab-content">
        <!--------------影片------------------->
        <div id="home" class="tab-pane fade in active">
            <table class="course">
                <thead>
                <tr>
                    <th>No.</th>
                    <th>Title</th>
                    <th>Links</th>
                    <th>Relase date</th>
                    <th>Memo</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td >VirtualBox 安装與 Centos 虛擬機安装</td>
                    <td><a href="http://eplus.asia.edu.tw/channels/335/episodes/1306?locale=zh_tw">
                            <img src="../../Images/videoOnLine.jpg" height=40px></a></td>
                    <td>2016/02/28</td>
                    <td></td>
                </tr>
                <tr class="even">
                    <td>2</td>
                    <td>Putty and XShell</td>
                    <td><a href="http://eplus.asia.edu.tw/channels/335/episodes/1307?locale=zh_tw">
                            <img src="../../Images/videoOnLine.jpg" height=40px></a></td>
                    <td>2016/02/29</td>
                    <td></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Frequently used instructions</td>
                    <td><a href="http://eplus.asia.edu.tw/channels/335/episodes/1308?locale=zh_tw">
                            <img src="../../Images/videoOnLine.jpg" height=40px></a></td>
                    <td>2016/02/29</td>
                    <td></td>
                </tr>
                <tr class="even">
                    <td>4</td>
                    <td>Introduction to Networks</td>
                    <td><a href="http://eplus.asia.edu.tw/channels/335/episodes/1316?locale=zh_tw">
                            <img src="../../Images/videoOnLine.jpg" height=40px></a></td>
                    <td>2016/03/07</td>
                    <td></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Frequently used Computer Network instructions</td>
                    <td><a href="http://eplus.asia.edu.tw/channels/335/episodes/1317?locale=zh_tw">
                            <img src="../../Images/videoOnLine.jpg" height=40px></a></td>
                    <td>2016/03/08</td>
                    <td></td>
                </tr>
                <tr class="even">
                    <td>6</td>
                    <td>Add a new group and set user's group</td>
                    <td><a href="http://eplus.asia.edu.tw/channels/335/episodes/1318?locale=zh_tw">
                            <img src="../../Images/videoOnLine.jpg" height=40px></a></td>
                    <td>2016/03/08</td>
                    <td></td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>yum tutorial</td>
                    <td><a href="http://eplus.asia.edu.tw/channels/335/episodes/1339?locale=zh_tw">
                            <img src="../../Images/videoOnLine.jpg" height=40px></a></td>
                    <td>2016/03/15</td>
                    <td></td>
                </tr>
                <tr class="even">
                    <td>8</td>
                    <td>Web server (httpd) installation and configuration</td>
                    <td><a href="http://eplus.asia.edu.tw/channels/335/episodes/1341?locale=zh_tw">
                            <img src="../../Images/videoOnLine.jpg" height=40px></a></td>
                    <td>2016/03/15</td>
                    <td></td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>Database Server (MySQL) and PHP installation and configuration</td>
                    <td><a href="http://eplus.asia.edu.tw/channels/335/episodes/1340?locale=zh_tw">
                            <img src="../../Images/videoOnLine.jpg" height=40px></a></td>
                    <td>2016/03/18</td>
                    <td></td>
                </tr>
                <tr class="even">
                    <td>10</td>
                    <td>Setting up user's home page</td>
                    <td><a href="http://eplus.asia.edu.tw/channels/335/episodes/1346?locale=zh_tw">
                            <img src="../../Images/videoOnLine.jpg" height=40px></a></td>
                    <td>2016/03/22</td>
                    <td></td>
                </tr>
                <tr>
                    <td>11</td>
                    <td>Missing page handling of Web server</td>
                    <td><a href="http://eplus.asia.edu.tw/channels/335/episodes/1347?locale=zh_tw">
                            <img src="../../Images/videoOnLine.jpg" height=40px></a></td>
                    <td>2016/03/22</td>
                    <td></td>
                </tr>
                <tr class="even">
                    <td>12</td>
                    <td>Setting up SSL protocol for Apache server</td>
                    <td><a href="http://eplus.asia.edu.tw/channels/335/episodes/1349?locale=zh_tw">
                            <img src="../../Images/videoOnLine.jpg" height=40px></a></td>
                    <td>2016/03/22</td>
                    <td></td>
                </tr>
                <tr>
                    <td>13</td>
                    <td>Setting up a protected web page</td>
                    <td><a href="http://eplus.asia.edu.tw/channels/335/episodes/1348?locale=zh_tw">
                            <img src="../../Images/videoOnLine.jpg" height=40px></a></td>
                    <td>2016/03/22</td>
                    <td></td>
                </tr>
                </tbody>
            </table>
        </div>
        <div id="Material" class="tab-pane fade">
        </div>
        <!--------------課堂練習 and Homeworks------------------->
        <div id="Exercise" class="tab-pane fade">
            <table class='s1'>
                <tr align="center">
                    <th class='s1' width='5%'>編號</th>
                    <th class='s1' width='15%'>日期</th>
                    <th class='s1' width='60%'>練習題目</th>
                    <th class='s1' width='20%'>備註</th>
                </tr>
            </table>
        </div>
        <div id="Homeworks" class="tab-pane fade">
            <!--------------作業------------------->
            <table class='s1'>
                <tr align="center">
                    <th class='s1' width='5%'>編號</th>
                    <th class='s1' width='60%'>練習題目</th>
                    <th class='s1' width='15%'>繳交期限</th>
                    <th class='s1' width='20%'>備註</th>
                </tr>
            </table>
        </div>
    </div>
</div>
<?php footering();?>
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="../../showTime.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="../../bootstrap/js/bootstrap.min.js"></script>
<script src="../../bootstrap/js/docs.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="../../bootstrap/js/ie10-viewport-bug-workaround.js"></script>

</body>
</html>