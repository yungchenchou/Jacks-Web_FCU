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
    <h2>106-2 進階程式設計 (Advanced Programming)</h2>
    <h3 style="text-shadow: 2px 2px 4px rgb(80, 80, 80); color: rgb(0,0,0);">
        時間: 週二 34N (10:10~13:00) 地點: 資訊大樓 H103 室</h3>
    <div class="sub-nav">
        <ul class="favLink">
            <li><a href="https://github.com/" target="_blank">GitHub</a></li>
            <li><a href="https://classroom.github.com/" target="_blank">GitHub Classroom</a></li>
            <li><a href="http://moodle.asia.edu.tw/" target="_blank">Asia Moodle</a></li>
            <li><a href="https://docs.oracle.com/javase/7/docs/api/" target="_blank">Java7 API</a></li>
            <li><a href="https://cpe.cse.nsysu.edu.tw/" target="_blank">CPE檢定</a></li>
            <li><a href="https://cpe.cse.nsysu.edu.tw/" target="_blank">ITSA &amp; PTC</a></li>
        </ul>
    </div>
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#home">授課教材</a></li>
        <li><a data-toggle="tab" href="#Material">考古練習題</a></li>
        <li><a data-toggle="tab" href="#Exercise">練習</a></li>
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
                    <td>1</td>
                    <td><a href="../1051/resources/01_Java_IDE_Intellij.pdf" target="_blank">安裝JDk 與 IntelliJ 程式編輯器</a></td>
                    <td>2016/07/30</td>
                    <td>教學 ppt 安裝過程簡單</td>
                </tr>

                <tr class="even">
                    <td>2</td>
                    <td><a href="https://youtu.be/2zP-Hfgoz8w">JDK安裝與程式編輯器</a></td>
                    <td>2015/09/14</td>
                    <td><a href="https://youtu.be/kxC8Xa-bLsE">Notepad and Path setting</a>
                    </td>
                </tr>

                <tr>
                    <td>3</td>
                    <td><a href="https://youtu.be/9e5Kes63d4I" target="_blank">Eclipse編寫環境調校</a></td>
                    <td>2016/08/10</td>
                    <td></td>
                </tr>

                <tr class="even">
                    <td>4</td>
                    <td><a href="https://youtu.be/Vrkvpkuse_4" target="_blank">類別介紹</a></td>
                    <td>2017/04/13</td>
                    <td></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td><a href="https://youtu.be/z-oFyPaO3zY" target="_blank">多載與資料成員存取控制</a></td>
                    <td>2016/08/19</td>
                    <td></td>
                </tr>
                <tr class="even">
                    <td>6</td>
                    <td><a href="https://youtu.be/SUSeptMuCV8" target="_blank">類別函式</a></td>
                    <td>2016/08/19</td>
                    <td></td>
                </tr>
                <tr>
                    <td>7</td>
                    <td><a href="https://youtu.be/NSXnHHlVsz0" target="_blank">類別中的繼承</a></td>
                    <td>2017/04/13</td>
                    <td></td>
                </tr>
                <tr class="even">
                    <td>8</td>
                    <td><a href="https://youtu.be/nXS29i8ht58" target="_blank">抽象類別</a></td>

                    <td>2017/04/13</td>
                    <td></td>
                </tr>
                <tr>
                    <td>9</td>
                    <td><a href="https://youtu.be/janGWSQBo_0" target="_blank">抽象類別與介面</a></td>
                    <td>2017/04/13</td>
                    <td></td>
                </tr>
                <tr class="even">
                    <td>10</td>
                    <td><a href="" target="_blank">匿名類別</a>(待錄)</td>
                    <td>2016/08/19</td>
                    <td></td>
                </tr>
                <tr>
                    <td>11</td>
                    <td><a href="https://youtu.be/r8f2v9DSs9o" target="_blank">介面</a></td>
                    <td>2017/04/13</td>
                    <td></td>
                </tr>
                <tr class="even">
                    <td>12</td>
                    <td><a href="https://youtu.be/vn0WTlgUyZE" target="_blank">物件陣列</a></td>
                    <td>2016/08/19</td>
                    <td></td>
                </tr>
                <tr>
                    <td>13</td>
                    <td><a href="http://eplus.asia.edu.tw/episodes/embed/d4598a6a5c00b370fb1e4caa0d940b8780eab3b5" target="_blank">使用 ArrayList 管理物件</a></td>
                    <td>2016/08/19</td>
                    <td></td>
                </tr>
                <tr class="even">
                    <td>14</td>
                    <td><a href="" target="_blank">例外處理</a>(待錄)</td>
                    <td>2016/08/19</td>
                    <td></td>
                </tr>
                <tr>
                    <td>15</td>
                    <td><a href="" target="_blank">檔案存取</a>(待錄)</td>
                    <td>2016/08/19</td>
                    <td></td>
                </tr>
                <tr class="even">
                    <td>16</td>
                    <td><a href="http://eplus.asia.edu.tw/episodes/embed/331e8326a900d94f8fe035b6fbd4cda1196962e0" target="_blank">
                            Java多執行緒(以水族箱為例)</a></td>
                    <td>2016/08/19</td>
                    <td></td>
                </tr>
                <tr>
                    <td>17</td>
                    <td><a href="https://youtu.be/UAlxcVwn2lE" target="_blank">
                            BorderLayout 佈局</a></td>
                    <td>2016/08/19</td>
                    <td></td>
                </tr>
                <tr class="even">
                    <td>18</td>
                    <td><a href="http://eplus.asia.edu.tw/episodes/embed/99487246a33f7023e73cefb3481d334d60879820" target="_blank">
                            Java Swing 初探</a></td>
                    <td>2016/08/19</td>
                    <td></td>
                </tr>

                <tr>
                    <td>19</td>
                    <td><a href="https://youtu.be/BPNXICwFGpQ" target="_blank">
                            GridLayout 佈局</a></td>
                    <td>2016/08/19</td>
                    <td></td>
                </tr>

                <tr class="even">
                    <td>20</td>
                    <td><a href="http://eplus.asia.edu.tw/episodes/embed/c2ef3f6cb297df21ebb5eba311637af62ab1c99f" target="_blank">Java 網路程式設計</a></td>
                    <td>2016/08/19</td>
                    <td></td>
                </tr>

                </tbody>
            </table>
        </div>
        <!-- ---------------  Topics --------------------------------- -->
        <div id="Material" class="tab-pane fade">
            <!--            <h2>考古練習題</h2>-->
            <div class="topic">
            </div>
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