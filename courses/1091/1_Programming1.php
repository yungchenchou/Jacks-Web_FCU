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
    <!-- <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css"> -->
    <!-- <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script> -->
    <!-- <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script> -->

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
        <h2>基礎程式設計</h2>
        <h3 style="text-shadow: 2px 2px 4px rgb(80, 80, 80); color: rgb(80, 65, 255);">時間: 週三 567 (13:10~16:00) 地點: 資訊大樓 H103 室</h3>
        <div class="sub-nav">
            <ul class="favLink">
                <li><a href="https://github.com/" target="_blank">GitHub</a></li>
                <li><a href="https://cpe.cse.nsysu.edu.tw/" target="_blank">CPE檢定</a></li>
                <li><a href="https://cpe.cse.nsysu.edu.tw/" target="_blank">ITSA &amp; PTC</a></li>

            </ul>
        </div>

        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#home">授課教材</a></li>
            <li><a data-toggle="tab" href="#material">考古練習題</a></li>
            <li><a data-toggle="tab" href="#homeworks">作業</a></li>
        </ul>
        <div class="tab-content">
            <!--------------影片------------------->
            <div id="home" class="tab-pane fade in active">
                <table data-role="table" data-mode="columntoggle" class="ui-responsive" id="myTable" style="margin-bottom: 0.3em; width: 100%;">
                    <thead>
                        <tr style="background-color: #555555;color:#ffffff;text-align:center;font-size: 1.2em;">
                            <th style="border: solid 1px #ffffff;text-align:center;font-size: 1em;">No.</th>
                            <th style="border: solid 1px #ffffff;text-align:center;font-size: 1em;">Topic</th>
                            <th data-priority="1" style="border: solid 1px #ffffff;text-align:center;">Release Date</th>
                            <th data-priority="3" style="border: solid 1px #ffffff;text-align:center;">Memo</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr style="background-color: #dd9955;font-size: 0.9em;">
                            <td style="color: black;text-shadow:1px 1px 2px #ffffff;">00</td>
                            <td><a href="https://youtu.be/uNppkad3DJI" target="_blank">
                                    Python 3.x 的程式編寫環境介紹</a></td>
                            <td style="color: black;text-shadow:1px 1px 2px #ffffff;">2020/05/30</td>
                            <td style="color: black;text-shadow:1px 1px 2px #ffffff;">介紹 Python 3.x 的程式編寫環境介紹</td>
                        </tr>
                        <tr style="background-color: #55dd99;font-size: 0.9em;">
                            <td style="color: black;text-shadow:1px 1px 2px #ffffff;">01</td>
                            <td><a href="https://youtu.be/QM3_zNo2Q58" target="_blank">
                                    Python 3.x 基本指令</a></td>
                            <td style="color: black;text-shadow:1px 1px 2px #ffffff;">2020/05/30</td>
                            <td style="color: black;text-shadow:1px 1px 2px #ffffff;">介紹 Python 3.x 的基本指令
                                1. input, print
                                2. 變數命名
                                3. 運算子</td>
                        </tr>

                        <tr style="background-color: #dd9955;font-size: 0.9em;">
                            <td style="color: black;text-shadow:1px 1px 2px #ffffff;">02</td>
                            <td><a href="https://youtu.be/zsxKEsIuysU" target="_blank">
                                    Python 3.x 資料型態 (整數+布林)</a></td>
                            <td style="color: black;text-shadow:1px 1px 2px #ffffff;">2020/09/28</td>
                            <td style="color: black;text-shadow:1px 1px 2px #ffffff;">介紹 Python 3.x 的整數資料型態與二進制、八進制、十進制與十六進制之間的轉換語法。</td>
                        </tr>

                        <tr style="background-color: #55dd99;font-size: 0.9em;">
                            <td style="color: black;text-shadow:1px 1px 2px #ffffff;">03</td>
                            <td><a href="https://youtu.be/o_3k43cdufc" target="_blank">
                                    Python 基本資料型態 浮點數</a></td>
                            <td style="color: black;text-shadow:1px 1px 2px #ffffff;">2020/09/30</td>
                            <td style="color: black;text-shadow:1px 1px 2px #ffffff;">介紹 Python的浮點數資料型態與數值的四捨五入、無條件進位與無條件捨去</td>
                        </tr>

                        <tr style="background-color: #dd9955;font-size: 0.9em;">
                            <td style="color: black;text-shadow:1px 1px 2px #ffffff;">04</td>
                            <td><a href="https://youtu.be/aAmV9rrUCXM" target="_blank">
                                    Python 運算式</a></td>
                            <td style="color: black;text-shadow:1px 1px 2px #ffffff;">2020/09/28</td>
                            <td style="color: black;text-shadow:1px 1px 2px #ffffff;">本影片主要介紹 Python 的運算式、算術運算子、邏輯運算子、位元運算子</td>
                        </tr>
                        <tr style="background-color: #55dd99;font-size: 0.9em;">
                            <td style="color: black;text-shadow:1px 1px 2px #ffffff;">05</td>
                            <td><a href="https://youtu.be/1X86UAVU0sA" target="_blank">
                                    Python 字串處理</a></td>
                            <td style="color: black;text-shadow:1px 1px 2px #ffffff;">2020/09/30</td>
                            <td style="color: black;text-shadow:1px 1px 2px #ffffff;">本影片主要透過練習題解題介紹字串的處理
                                1. 英文字大小寫轉換
                                2. 字串中的字母替換
                                3. 字串切割
                                4. 取得英文字的 ASCII 碼
                                5. 取得中文字的 萬國碼
                                6. 從萬國碼轉換出中文字</td>
                        </tr>

                        <tr style="background-color: #dd9955;font-size: 0.9em;">
                            <td style="color: black;text-shadow:1px 1px 2px #ffffff;">06</td>
                            <td><a href="https://youtu.be/JSsQP-xVCO0" target="_blank">
                                    Python 流程控制 (if-else)</a></td>
                            <td style="color: black;text-shadow:1px 1px 2px #ffffff;">2020/10/05</td>
                            <td style="text-align:left;color: black;text-shadow:1px 1px 2px #ffffff;">
                                本影片透過解題過程介紹 if-else 或 if-elif ... 等等各種 if-else 的撰寫格式
                            </td>
                        </tr>


                        <tr style="background-color: #55dd99;font-size: 0.9em;">
                            <td style="color: black;text-shadow:1px 1px 2px #ffffff;">06</td>
                            <td><a href="https://youtu.be/a4x18-3_g6M" target="_blank">
                                    Python 3.8 流程控制</a></td>
                            <td style="color: black;text-shadow:1px 1px 2px #ffffff;">2020/05/30</td>
                            <td style="text-align:left;color: black;text-shadow:1px 1px 2px #ffffff;">
                                <ol>
                                    <li>if判斷</li>
                                    <li>for迴圈</li>
                                    <li>while迴圈</li>
                                </ol>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- ---------------  Topics --------------------------------- -->
            <div id="material" class="tab-pane fade">
                <h2>考古練習題</h2>

            </div>
            <!--------------課堂練習 and Homeworks------------------->
            <div id="homeworks" class="tab-pane fade">
                <table class='s1'>
                    <tr style="text-align:center;">
                        <th class='s1' width='5%'>編號</th>
                        <th class='s1' width='15%'>日期</th>
                        <th class='s1' width='60%'>練習題目</th>
                        <th class='s1' width='20%'>備註</th>
                    </tr>
                </table>
                <!--------------作業------------------->
                <table class='s1'>
                    <tr style="text-align: center;">
                        <th class='s1' width='5%'>編號</th>
                        <th class='s1' width='60%'>練習題目</th>
                        <th class='s1' width='15%'>繳交期限</th>
                        <th class='s1' width='20%'>備註</th>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <?php footering(0); ?>
    <script src="../../showTime.js"></script>
</body>

</html>