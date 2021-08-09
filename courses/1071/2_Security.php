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
        .topic {
            max-width: 100%;
            background-image: linear-gradient(rgba(149, 189, 220, 0.8), rgba(129, 129, 220, 0.8));
            -webkit-border-radius: 5px;
            margin-bottom: 3px;
        }
        .topicTitle{
            color: rgb(224, 224, 224);
            padding: 10px 15px;
            background-image: linear-gradient(to bottom, rgba(98, 98, 98, 0.8), rgba(10, 10, 10, 0.8));
            text-shadow: 1px 1px 5px rgb(10, 10, 10);
            -webkit-border-radius: 5px;
        }
        .problem{
            background-image: linear-gradient(rgba(255, 255, 255, 0.8), rgba(255, 255, 255, 0.8));
            padding: 5px 20px auto 20px;
        }
        .problem p {
            font-size: 1.2em;
            line-height: 150%;
            text-align: justify;
            padding-left: 20px;
            padding-right: 20px;
        }
        .problemTitle {
            color: rgb(209, 57, 1);
            margin-left: 10px;
            margin-right: 10px;
            padding: 15px auto 5px 10px;
            text-shadow: 1px 2px 2px rgb(0, 0, 0);
        }
        #problem a.btn, a.btn:visited {
            color: rgb(220, 220, 220);
            width: 4em;
            height: 2em;
            -webkit-border-radius: 10px;
            font-size: 1.1em;
            background-image: linear-gradient(rgba(100, 100, 100, 0.3), rgba(40, 40, 40, 0.8));
        }
        .sampleIOTable {
            margin: 0px auto auto auto;
            width: 90%;
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
        <h1 style='height: 2em; padding-top: 5px'>數位內容資訊安全 (Digital Content Information Security)</h1>
        <h4 style='height: 1.8em;'>106學年 第一學期 (資工數位三A)</h4>
        <h4 style='height: 1.8em;'>上課時間：週三 567(13:10~16:00)</h4>
        <h4 style='height: 1.8em;'>上課地點：資訊大樓 H205</h4>
        <h4 style='height: 1.3em;'>教科書：</h4>
        <ol style='padding: 0 0 1.3em 2.5em;'>
            <li style='font-size: 1.3em;'><a href="http://www.books.com.tw/products/0010642222">
                    資訊與網路安全概論：看見比特幣 第五版</a>，黃明祥, 林詠章/合著，東華出版社</li>
        </ol>
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#home">授課教材</a></li>
            <li><a data-toggle="tab" href="#favResourceLink">相關連結</a></li>
            <li><a data-toggle="tab" href="#reference">參考資料來源</a></li>
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
                            <td>1. </td>
                            <td>Your browser does not support the video tag.</td>
                            <td>JDK安裝與程式編輯器</td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!--------------相關連結------------------->
            <div id="favResourceLink" class="tab-pane fade" style="background: #E9E9E9;">
                <table class='s1'>
                    <tr align="center">
                        <th class='s1' width='5%'>編號</th>
                        <th class='s1' width='15%'>日期</th>
                        <th class='s1' width='60%'>練習題目</th>
                        <th class='s1' width='20%'>備註</th>
                    </tr>
                </table>
            </div>

            <!--------------參考資料來源------------------->
            <div id="reference" class="tab-pane fade" style="background: #E9E9E9;">
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