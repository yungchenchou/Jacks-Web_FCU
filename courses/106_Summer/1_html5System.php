<!DOCTYPE html>
<?php  require('../../fun_inc.php');
session_start();  ?>
<html>
<head>
    <meta charest="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Yung-Chen Chou's Web</title>
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Open+Sans' type='text/css'>
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../bootstrap/css/Cerulean/bootstrap.min.css">
    <link rel="SHORTCUT ICON" href="../../Images/jack.png">
    <style>
        a.btn, a.btn:visited  {
            padding: 5px 10px;
            line-height: 1.1em;
            background-image: linear-gradient(rgba(189, 255, 89, 0.8), rgba(255, 189, 89, 0.8));
            -webkit-border-radius: 10px;
            font-size: 1.2em;
            color: rgb(0, 0, 0);
            border: solid 1px rgb(128, 0, 128);
            text-shadow: 1px 1px 2px  rgb(0, 28, 28);
        }
        a.btn:hover  {
            background-image: linear-gradient(rgba(255, 189, 89, 0.8), rgba(189, 255, 89, 0.8));
            -webkit-box-shadow: 2px 2px 2px rgb(128, 128, 25);
        }
        a.homebtn, a.homebtn:visited  {
            line-height: 1.1em;
            padding: 5px 10px;
            background-image: linear-gradient(rgba(255, 177, 66, 0.8), rgba(155, 137, 222, 0.8));
            -webkit-border-radius: 10px;
            font-size: 1.2em;
            color: rgb(0, 0, 215);
            border: solid 1px rgb(128, 0, 128);
            text-shadow: 1px 1px 2px  rgb(220, 220, 220);
        }
        a.homebtn:hover  {
            background-image: linear-gradient(rgba(255, 189, 89, 0.8), rgba(189, 255, 89, 0.8));
            -webkit-box-shadow: 2px 2px 2px rgb(128, 128, 25);
        }
        a.btn1, a.btn1:visited  {
            padding: 8px 10px;
            background-image: linear-gradient(rgba(32, 148, 0, 0.8), rgba(48, 221, 27, 0.8));
            -webkit-border-radius: 20px;
            font-size: 1.2em;
            color: rgb(24, 4, 93);
            border: solid 1px rgb(223, 184, 0);
            text-shadow: 1px 1px 2px  rgb(220, 220, 220);
        }
        a.btn1:hover  {
            background-image: linear-gradient(rgba(48, 221, 27, 0.8), rgba(32, 148, 0, 0.8));
            -webkit-box-shadow: 2px 2px 2px rgb(128, 128, 25);
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
    <h2>106 學年 網頁系統開發先修班</h2>
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#home">成果</a></li>
        <li><a data-toggle="tab" href="#Material1">授課教材</a></li>
        <li><a data-toggle="tab" href="#Material">授課大綱與公告</a></li>
        <li><a data-toggle="tab" href="#Homeworks">作業</a></li>
    </ul>
    <h3>評分說明</h3>
    <ul>
        <li>美觀：實際職場上，此項目為依業主角度主觀評選。</li>
        <li>功能：每一個項目10分，共10項（e博士，公益微電影，故事大綱，人物介紹，雲端助學，愛心捐款，主控台，login，sign up，綜合項目），依照完成項目給予評分。</li>
        <li>操作：流暢度</li>
        <li>創意：依照業主指定規劃完成，基本分60分，倘若再加上自己的想法，並滿足業主，方再往上加分，一個新點子項目10分，依此類推。</li>
    </ul>
    <h2 align="center" style="color: rgb(189, 20, 20); text-shadow: 1px 2px 2px rgb(0, 0, 0); font-weight: 300;">
        QR-Code 是給各位用手機掃描後測試響應式頁面的效果</h2>
    <div class="tab-content">
        <div id="home" class="tab-pane fade in active">
            <h3>成果</h3>
            <div style="float: right;display: block; margin-top: -30px;">
                <a class="btn1" href="https://mslab.csie.asia.edu.tw/moodle/" target="_blank">
                    教材網站</a>
                <a class="btn" href="http://120.108.111.146/yungchen/ephd/index.php" target="_blank">
                    完成範例</a>
            </div>
            <table class="table">
                <thead>
                <tr>
                    <th>No.</th>
                    <th>姓名</th>
                    <th>站台</th>
                    <th>QR-code</th>
                    <th>Memo</th>
                </tr>
                </thead>
                <tbody>
                    <tr class="success">
                        <td>1</td>
                        <td>謝量 (透抽)</td>
                        <td><a class="homebtn" href="http://120.108.111.146/smileo5566/">
                                Home</a>
                            <a class="btn" href="http://120.108.111.146/smileo5566/9/">
                                e博士</a></td>
                        <td align="right"><img src="BL85K33DH3.png"></td>
                        <td>大一新生</td>
                    </tr>
                    <tr class="info">
                        <td>2</td>
                        <td>吳尚婕 (Janny)</td>
                        <td><a class="homebtn" href="http://120.108.111.146/smile097575/">
                                Home</a>
                            <a class="btn" href="http://120.108.111.146/smile097575/20170717/movie.php">
                                e博士</a></td>
                        <td align="left"><img src="G62UWJ08R4.png" alt=""></td>
                        <td>大一新生</td>
                    </tr>
                    <tr class="success">
                        <td>3</td>
                        <td>楊旻錡 (米奇)</td>
                        <td><a class="homebtn" href="http://120.108.111.146/omega87910/">
                                Home</a>
                            <a class="btn" href="http://120.108.111.146/omega87910/phdsay">
                                e博士</a></td>
                        <td align="right"><img src="ORO0VKX0UX.png" alt=""></td>
                        <td>大一新生</td>
                    </tr>
                    <tr class="info">
                        <td>4</td>
                        <td>林仲廷</td>
                        <td><a class="homebtn" href="http://120.108.111.146/jeremy333999222/">
                                Home</a>
                            <!--                            <a class="btn" href="http://120.108.111.146/smile097575/20170717/movie.php">-->
                            <!--                                e博士</a>-->
                        </td>
                        <td></td>
                        <td>大一新生</td>
                    </tr>
                    <tr class="success">
                        <td>5</td>
                        <td>薛佾展 (阿薛)</td>
                        <td><a class="homebtn" href="http://120.108.111.146/showxd/">
                                Home</a>
                            <a class="btn" href="http://120.108.111.146/showxd/finally%20exam/page/">
                                e博士</a></td>
                        <td><img src="TIZI389BBK.png" alt=""></td>
                        <td>大一新生</td>
                    </tr>
                    <tr class="info">
                        <td>6</td>
                        <td>洪煒傑</td>
                        <td><a class="homebtn" href="http://120.108.111.146/ag150300/test.html">
                                Home</a>
                            <a class="btn" href="http://120.108.111.146/ag150300/wrongEX">
                                e博士</a></td>
                        <td align="right"><img src="G4QNFBYXV0.png" alt=""></td>
                        <td>大一新生</td>
                    </tr>
                    <tr class="success">
                        <td>7</td>
                        <td>楊永聖</td>
                        <td><a class="homebtn" href="http://120.108.111.146/ams7758/test2/">
                                Home</a>
                            <a class="btn" href="http://120.108.111.146/ams7758/test2/doctorE/index.php">
                                e博士</a></td>
                        <td><img src="MYGLKVM1LB.png" alt=""></td>
                        <td>資工數位組2A</td>
                    </tr>
                    <tr class="info">
                        <td>8</td>
                        <td>陳畯程</td>
                        <td>
<!--                            <a class="homebtn" href="http://120.108.111.146/ams7758/test2/">-->
<!--                                Home</a>-->
                            <!--                            <a class="btn" href="http://120.108.111.146/smile097575/20170717/movie.php">-->
                            <!--                                e博士</a>-->
                        </td>
                        <td></td>
                        <td>資工數位組2A</td>
                    </tr>
                    <tr class="success">
                        <td>9</td>
                        <td>詹佩郡</td>
                        <td><a class="homebtn" href="http://120.108.111.146/105021026/123.php">
                                Home</a></td>
                        <td></td>
                        <td>資工數位組2A</td>
                    </tr>
                    <tr class="info">
                        <td>10</td>
                        <td>洪立宇</td>
                        <td></td>
                        <td></td>
                        <td>資工數位組2A</td>
                    </tr>
                    <tr class="success">
                        <td>11</td>
                        <td>林郁憲</td>
                        <td><a class="homebtn" href="http://120.108.111.146/105021023/">
                                Home</a>
                            <a class="btn" href="http://120.108.111.146/105021023/Edoctor/movie.php">
                                e博士</a></td>
                        <td align="right"><img src="J0SU6ZHUQK.png" alt=""></td>
                        <td>資工資電組2A</td>
                    </tr>
                    <tr class="info">
                        <td>12</td>
                        <td>林昱成</td>
                        <td><a class="homebtn" href="http://120.108.111.146/sunny30109/">
                                Home</a>
                            <a class="btn" href="http://120.108.111.146/sunny30109/sunny30109/20170717/movie.html">
                                e博士</a></td>
                        <td><img src="CMPT3OGQKK.png" alt=""></td>
                        <td>資工資電組2A</td>
                    </tr>
                    <tr class="success">
                        <td>13</td>
                        <td>任韋丞</td>
                        <td>
                            <a class="homebtn" href="http://120.108.111.146/wily125227/">
                                Home</a>
                            <a class="btn" href="http://120.108.111.146/wily125227/Public%20welfare/page.html">
                                e博士</a></td>
                        <td align="right"><img src="ADI44ZXP3O.png" alt=""></td>
                        <td>資工資電組2A</td>
                    </tr>
                    <tr class="info">
                        <td>14</td>
                        <td>陳仕峰</td>
                        <td><a class="homebtn" href="http://120.108.111.146/105021054/feng.html">
                                Home</a>
                            <!--                            <a class="btn" href="http://120.108.111.146/smile097575/20170717/movie.php">-->
                            <!--                                e博士</a>-->
                        </td>
                        <td></td>
                        <td>資工資電組2A</td>
                    </tr>
                    <tr class="success">
                        <td>15</td>
                        <td>郭家源</td>
                        <td><a class="homebtn" href="http://120.108.111.146/105021051/">
                                Home</a>
                            <!--                            <a class="btn" href="http://120.108.111.146/smile097575/20170717/movie.php">-->
                            <!--                                e博士</a>-->
                        </td>
                        <td></td>
                        <td>資工資電組2A</td>
                    </tr>
                    <tr class="info">
                        <td>16</td>
                        <td>藍子朋</td>
                        <td><a class="homebtn" href="http://120.108.111.146/105021018/">
                                Home</a>
                            <a class="btn" href="http://120.108.111.146/105021018/ephd/ephd.php">
                                e博士</a></td>
                        <td><img src="IF99UHZ7JZ.png" alt=""></td>
                        <td>資工資電組2A</td>
                    </tr>
                    <tr class="success">
                        <td>17</td>
                        <td>陳晏湘</td>
                        <td><a class="homebtn" href="http://120.108.111.146/105021027/practice.html">
                                Home</a>
                            <!--                            <a class="btn" href="http://120.108.111.146/smile097575/20170717/movie.php">-->
                            <!--                                e博士</a>-->
                        </td>
                        <td></td>
                        <td>資工資電組2A</td>
                    </tr>
                    <tr class="info">
                        <td>18</td>
                        <td>張廷毓</td>
                        <td><a class="homebtn" href="http://120.108.111.146/105021030/">
                                Home</a>
                            <a class="btn" href="http://120.108.111.146/105021030/ephd/index.php">
                                e博士</a></td>
                        <td align="right"><img src="Z1A1JVIIVY.png" alt=""></td>
                        <td>資工資電組2A</td>
                    </tr>
                    <tr class="success">
                        <td>19</td>
                        <td>熊柏誠</td>
                        <td><a class="homebtn" href="http://120.108.111.146/xiong/Test/">
                                Home</a>
<!--                            <a class="btn" href="http://120.108.111.146/105021030/ephd/index.php">-->
<!--                                e博士</a>-->
                        </td>
                        <td></td>
                        <td>資工資電組2A</td>
                    </tr>
                    <tr class="success">
                        <td>20</td>
                        <td>陳子晴</td>
                        <td>
                            <a class="homebtn" href="http://120.108.111.146/105021004/">
                                Home</a>
                            <!--                            <a class="btn" href="http://120.108.111.146/105021030/ephd/index.php">-->
                            <!--                                e博士</a>-->
                        </td>
                        <td></td>
                        <td>資工資電組2A</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div id="Material1" class="tab-pane fade">
            <table class="table table-bordered">
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
                <tr style="background-color: #aaaaff; color: black;">
                    <td>1</td>
                    <td>Filezilla + Geany + HTML5</td>
                    <td><a href="http://eplus.asia.edu.tw/channels/343/episodes/1408?locale=zh_tw">
                            <img src="../../Images/videoOnLine.jpg" height=40px></a></td>
                    <td>2016/05/07</td>
                    <td><a href="example.html">html 範例</a></td>
                </tr>
                <tr style="background-color: #aaaaff; color: black;">
                    <td>2</td>
                    <td>css 範例</td>
                    <td><a href="http://eplus.asia.edu.tw/channels/279/episodes/1116?locale=zh_tw">
                            <img src="../../Images/videoOnLine.jpg" height=40px></a></td>
                    <td>2016/05/07</td>
                    <td><a href="cssExample.html">css 範例</a></td>
                </tr>
                </tbody>
            </table>
        </div>

        <div id="Material" class="tab-pane fade">
            <h4 style='height: 1.8em;'>104學年 第一學期 (資工數位一A)</h4>
            <h4 style='height: 1.8em;'>上課時間：週一 <del style="color:red;">567(13:10~16:00)</del>ABC(18:30~21:05)</h4>
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

        <!-- ------------課堂練習 and Homeworks----------------- -->
        <div id="Homeworks" class="tab-pane fade">
            <table class='s1'>
                <tr align="center">
                    <th class='s1' width='5%'>編號</th>
                    <th class='s1' width='15%'>日期</th>
                    <th class='s1' width='60%'>練習題目</th>
                    <th class='s1' width='20%'>備註</th>
                </tr>
            </table>
            <!-- ------------作業----------------- -->
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