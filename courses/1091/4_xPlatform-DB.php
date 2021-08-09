<!DOCTYPE html>
<?php require('../../fun_inc.php');
session_start();  ?>
<html lang="zh-tw">

<head>
    <meta charest="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Yung-Chen Chou's Web</title>
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../bootstrap/css/Cerulean/bootstrap.min.css">
    <link rel="stylesheet" href="../../vendors/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.2/css/buttons.dataTables.min.css">
    <!-- Custom Fonts -->
    <link href="../../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="../style.css" rel="stylesheet" type="text/css">
    <link rel="SHORTCUT ICON" href="../../Images/jack.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="../../bootstrap/js/bootstrap.min.js"></script>
    <style>
        .topic {
            max-width: 100%;
            background-image: linear-gradient(rgba(149, 189, 220, 0.8), rgba(129, 129, 220, 0.8));
            -webkit-border-radius: 5px;
            margin-bottom: 3px;
        }

        .topicTitle {
            color: rgb(224, 224, 224);
            padding: 10px 15px;
            background-image: linear-gradient(to bottom, rgba(98, 98, 98, 0.8), rgba(10, 10, 10, 0.8));
            text-shadow: 1px 1px 5px rgb(10, 10, 10);
            -webkit-border-radius: 5px;
        }

        .problem {
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

        #problem a.btn,
        a.btn:visited {
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

        .sampleIOTable th td {
            /*border-collapse: collapse;*/
            border: solid 1px rgb(0, 0, 0);
            font-size: 1.2em;

        }

        .sampleIOTable th {
            border: solid 1px rgb(0, 0, 0);
            text-align: center;
            font-size: 1.2em;
            font-family: "Times";
        }

        .sampleIOTable td {
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
        <h2>1091 跨平台APP與資料庫整合應用開發</h2>
        <h3>(Cross-platform Based APP and Database Integration Application Development)</h3>
        <div id="row">
            <ul style="display:inline-block; ">
                <li class="btn">
                    <a class="btn btn-primary" href="http://210.70.80.21/~yungchen/1091_DB/1091-DB-outcome.php"> 學生作品 </a></li>
                <li class="btn">
                    <a class="btn btn-warning" href="https://www.w3schools.com/html/"> W3 Schools </a></li>
            </ul>
        </div>
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#home">授課教材</a></li>
            <li><a data-toggle="tab" href="#Material">授課大綱與公告</a></li>
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
                        <tr script="text-align: center">
                            <td>01</td>
                            <td style="text-align:left;"><a href="https://youtu.be/xehg8YCSg7o">Cordova (Coding Environment Setting)</a></td>
                            <td>2020/09/22</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>02</td>
                            <td style="text-align:left;"><a href="https://youtu.be/EO91N0Uv0TY">Cordova 英文佳句 APP (範例)</a></td>
                            <td>2020/09/22</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>03</td>
                            <td style="text-align:left;"><a href="https://youtu.be/2mTkb-oLtuE">Cordova WebApp DB Demo 01</a></td>
                            <td>2020/09/22</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>04</td>
                            <td style="text-align:left;"><a href="https://youtu.be/8e-ExY8pt1A">Cordova WebApp DB Demo 02</a></td>
                            <td>2020/09/22</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>05</td>
                            <td style="text-align:left;"><a href="https://youtu.be/koBHByv7usQ">Cordova WebApp DB Demo 03</a></td>
                            <td>2020/09/22</td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>

            </div>
            <div id="Material" class="tab-pane fade">
                <h4 style='height: 1.8em;'>109學年 第一學期 (資工數位4A)</h4>
                <h4 style='height: 1.8em;'>上課時間：週二 567(13:10~16:00)</h4>
                <h4 style='height: 1.8em;'>上課地點：資訊大樓 I533</h4>
                <h4 style='height: 1.3em;'>教科書：</h4>
                <ol style='padding: 0 0 1.3em 2.5em;'>
                    <li style='font-size: 1.3em;'>Apache Cordova 4 Programming, John M. Wargo, Addison-Wesley Professional (ISBN: 9780134048277)</li>
                </ol>
                <h2 style='height: 1.3em;'>參考書：</h2>
                <ol style='padding: 0 0 1.3em 2.5em;'>
                    <li style='font-size: 1.3em;'>PhoneGap跨平台Web應用程式開發，饒俠、張堅、趙莉萍，上奇資訊股份有限公司 (ISBN: 978-986-375-291-2)</li>
                    <li style='font-size: 1.3em;'>徹底研究 PhoneGap跨平台手機程式開發實戰，張亞飛，上奇資訊股份有限公司 (ISBN: 978-986-5714-81-9)</li>
                </ol>
            </div>
        </div>
    </div>
    </div>
    </div>
    <?php footering(0); ?>
    <script src="../../showTime.js"></script>
</body>

</html>