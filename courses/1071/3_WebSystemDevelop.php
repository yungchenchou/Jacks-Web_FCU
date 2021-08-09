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
        .thumb {
            /*float:left; /* must be floated for same cross browser position of larger image */
            position:relative;
            margin:3px;
        }
        .thumb img {
            border:1px solid #000;
            vertical-align:bottom;
        }
        .thumb:hover {
            border:0; /* IE6 needs this to show large image */
            z-index:1;
        }
        .thumb span {
            position:absolute;
            visibility:hidden;
        }
        .thumb:hover span {
            visibility:visible;
            top:37px; left:37px;
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
    <h2>網頁系統開發 (Web System Development)</h2>
    <div class="sub-nav">
        <ul class="favLink">
            <li><a href="http://210.70.80.21/~yungchen/1071_WebDevelop/index1.php" target="_blank">學生作品</a></li>
            <li><a href="https://github.com/" target="_blank">GitHub</a></li>
            <li><a href="https://classroom.github.com/" target="_blank">GitHub Classroom</a></li>
            <li><a href="https://www.w3schools.com/php/" target="_blank">PHP Tutorial</a></li>
            <li><a href="https://www.w3schools.com/sql/default.asp" target="_blank">SQL Tutorial</a></li>
            <li><a href="http://moodle.asia.edu.tw/" target="_blank">Asia Moodle</a></li>
            <li><a href="https://mslab.csie.asia.edu.tw/moodle" target="_blank">Jack Moodle</a></li>
        </ul>
    </div>
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#home">授課教材</a></li>
        <li><a data-toggle="tab" href="#Material">授課大綱與公告</a></li>
        <li><a data-toggle="tab" href="#Homeworks">作業</a></li>
    </ul>
    <div class="tab-content">
        <!--------------影片------------------->
        <div id="home" class="tab-pane fade in active">

            <table class="course">
                <thead>
                <th>No.</th>
                <th>Topic</th>
                <th>Release date</th>
                <th>Memo</th>
                </thead>
                <tbody>
                <tr>
                    <td>01</td>
                    <td><a href="https://youtu.be/fUxmVdS1dvA">GitHub 帳號申請與 GitHub Desktop 使用</a>
                        <a class="thumb" href="#"><img src="../../Images/S1UNWT8Q5B.png" alt="" style="text-align: right;"><span>
                                <img src="../../Images/3RKGC8MMJR.png" alt=""></span></a></td>
                    <td>2017/09/01</td>
                    <td></td>
                </tr>

                <tr>
                    <td>02</td>
                    <td><a href="https://youtu.be/r85xHFVD9gk">PhpStorm 程式編輯器安裝</a>
                        <a class="thumb" href="#"><img src="../../Images/Z63TL2QK3X.png" alt="" style="text-align: right;"><span>
                                <img src="../../Images/0ZYN9PF90L.png" alt=""></span></a></td>
                    <td>2017/09/01</td>
                    <td></td>
                </tr>

                <tr>
                    <td>03</td>
                    <td><a href="https://youtu.be/3EIygDMBgUU" target="_blank">
                        PhpStorm 使用 GitHub Desktop 及 WebServer 連結</a>
                        <a class="thumb" href="#"><img src="../../Images/SV05WMFUZW.png" alt="" style="text-align: right;"><span>
                                <img src="../../Images/H9AI8JPEJJ.png" alt=""></span></a></td>
                    <td>2017/09/01</td>
                    <td></td>
                </tr>

                <tr>
                    <td>04</td>
                    <td><a href="https://youtu.be/Ltzets79OTw" target="_blank">HTML網頁基礎架構</a>
                        <a class="thumb" href="#"><img src="../../Images/AMYREZLC7N.png" alt="" style="text-align: right;"><span>
                                <img src="../../Images/0GAINX9MPJ.png" alt=""></span></a></td>
                    <td>2017/09/01</td>
                    <td></td>
                </tr>

                <tr>
                    <td>05</td>
                    <td><a href="https://youtu.be/tY9kex_lWGg" target="_blank">背景色與字體、表格及超連結製作導覽列</a>
                        <a class="thumb" href="#"><img src="../../Images/Q453EANZS9.png" alt="" style="text-align: right;"><span>
                                <img src="../../Images/IRUN49X8XI.png" alt=""></span></a></td>
                    <td>2017/09/11</td>
                    <td></td>
                </tr>

                <tr>
                    <td>06</td>
                    <td><a href="https://youtu.be/M7Ulu4Ds0LA" target="_blank">html 網頁背景圖 插入圖片</a>
                        <a class="thumb" href="#"><img src="../../Images/Y6GS6N1LCA.png" alt="" style="text-align: right;"><span>
                                <img src="../../Images/JJS660L46S.png" alt=""></span></a></td>
                    <td>2017/09/11</td>
                    <td></td>
                </tr>

                <tr>
                    <td>07</td>
                    <td><a href="https://youtu.be/c1gZ9sqvpd8" target="_blank">HTML Table 以課表為例</a>
                        <a class="thumb" href="#"><img src="../../Images/F31REVZG3O.png" alt="" style="text-align: right;"><span>
                                <img src="../../Images/Q3NCFALFOT.png" alt=""></span></a></td>
                    <td>2017/09/11</td>
                    <td></td>
                </tr>

                </tbody>
            </table>

        </div>
        <div id="Material" class="tab-pane fade">
            <h4 style='height: 1.8em;'>106學年 第一學期 (資工數位二A)</h4>
            <h4 style='height: 1.8em;'>上課時間：週二 345(10:10~14:00)</h4>
            <h4 style='height: 1.8em;'>上課地點：資訊大樓 H103</h4>
            <h4 style='height: 1.3em;'>教科書：</h4>
            <ol style='padding: 0 0 1.3em 2.5em;'>
                <li style='font-size: 1.3em;'></li>
            </ol>
            <h2 style='height: 1.3em;'>參考書：</h2>
            <ol style='padding: 0 0 1.3em 2.5em;'>
                <li style='font-size: 1.3em;'></li>
            </ol>
        </div>
        <!--------------課堂練習 and Homeworks------------------->
        <div id="Homeworks" class="tab-pane fade">
            <table class='s1'>
                <tr align="center">
                    <th class='s1' width='5%'>編號</th>
                    <th class='s1' width='15%'>日期</th>
                    <th class='s1' width='60%'>練習題目</th>
                    <th class='s1' width='20%'>備註</th>
                </tr>
            </table>
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