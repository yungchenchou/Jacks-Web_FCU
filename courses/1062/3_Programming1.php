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
    <h2>106-2 基礎程式設計 (Fundamental Programming)</h2>
    <h3 style="text-shadow: 2px 2px 4px rgb(80, 80, 80); color: rgb(80, 65, 255);">時間: 週一 10-12 (18:30~21:05) 地點: 資訊大樓 H103 室</h3>
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
                    <td><a href="../1051/resources/01_Java_IDE_Intellij.pdf" target="_blank">安裝JDk 與 IntelliJ 程式編輯器</a></td>
                    <td>2016/07/30</td>
                    <td>教學 ppt 安裝過程簡單</td>
                </tr>

                <tr class="even">
                    <td>02</td>
                    <td><a href="https://youtu.be/2zP-Hfgoz8w">JDK安裝與程式編輯器</a></td>
                    <td>2015/09/14</td>
                    <td><a href="https://youtu.be/kxC8Xa-bLsE">Notepad and Path setting</a>
                    </td>
                </tr>

                <tr>
                    <td>03</td>
                    <td><a href="https://youtu.be/9e5Kes63d4I" target="_blank">Eclipse編寫環境調校</a></td>
                    <td>2016/08/10</td>
                    <td></td>
                </tr>

                <tr class="even">
                    <td>04</td>
                    <td><a href="https://youtu.be/PwkK_w2P2iA" target="_blank">程式基本架構與變數命名</a></td>
                    <td>2016/08/01</td>
                    <td></td>
                </tr>
                <tr>
                    <td>05</td>
                    <td><a href="https://youtu.be/E8HE1G1EcPg">Java 基本資料型態介紹, 文字介面下的基本輸入與輸出</a></td>
                    <td>2015/09/14</td>
                    <td></td>
                </tr>
                <tr class="even">
                    <td>06</td>
                    <td><a href="https://youtu.be/aAuA-YIBHP4" target="_blank">基本資料型態  (int, short, long)</a></td>
                    <td>2016/08/01</td>
                    <td></td>
                </tr>
                <tr>
                    <td>07</td>
                    <td><a href="https://youtu.be/CTOQCOzXdlA" target="_blank">基本資料型態  (float, double)</a></td>
                    <td>2016/08/01</td>
                    <td></td>
                </tr>
                <tr class="even">
                    <td>08</td>
                    <td><a href="https://youtu.be/9w23gqLezPs" target="_blank">基本資料型態  (char)</a></td>
                    <td>2016/08/01</td>
                    <td></td>
                </tr>
                <tr>
                    <td>09</td>
                    <td><a href="https://youtu.be/eHMZntbXeRI" target="_blank">基本資料型態  (Boolean, byte)</a></td>
                    <td>2016/08/01</td>
                    <td></td>
                </tr>
                <tr class="even">
                    <td>10</td>
                    <td><a href="https://youtu.be/Xvjids1ccOU" target="_blank">四則運算</a></td>
                    <td>2016/08/01</td>
                    <td>+, -, *, /, %, +=, -=, *=, /= </td>
                </tr>
                <tr>
                    <td>11</td>
                    <td><a href="https://youtu.be/VrYRRZX4gKw" target="_blank">邏輯運算</a></td>
                    <td>2016/08/02</td>
                    <td>&gt;, &gt;=, ==, &lt;=, &lt;, !, &amp;&amp;, || </td>
                </tr>
                <tr class="even">
                    <td>12</td>
                    <td><a href="https://youtu.be/bmjNuYEJOVA" target="_blank">變數生命週期與常數</a></td>
                    <td>2016/08/02</td>
                    <td></td>
                </tr>
                <tr>
                    <td>13</td>
                    <td><a href="https://youtu.be/-8jIYRQUAAE" target="_blank">運算式及運算子優先順序</a></td>
                    <td>2016/08/02</td>
                    <td>
                        <!--                        <img src="resources/Screen%20Shot%202016-08-02%20at%208.27.23%20AM.png" width=400>-->
                    </td>
                </tr>
                <tr class="even">
                    <td>14</td>
                    <td><a href="http://youtu.be/fLm0m73BWG8">If-then-else</a></td>
                    <td>2015/09/14</td>
                    <td></td>
                </tr>
                <tr>
                    <td>15</td>
                    <td><a href="http://youtu.be/V45Oa-LrET0">Switch-case</a></td>
                    <td>2015/09/14</td>
                    <td></td>
                </tr>
                <tr class="even">
                    <td>16</td>
                    <td><a href="https://youtu.be/bXmHnF7k5ns" target="_blank">迴圈 (for)</a></td>
                    <td>2016/08/02</td>
                    <td></td>
                </tr>
                <tr>
                    <td>17</td>
                    <td><a href="https://youtu.be/0xf50-fYbKg" target="_blank">迴圈 (while) 範例一 </a></td>
                    <td>2016/08/03</td>
                    <td>以 a 加到 b 為例</td>
                </tr>
                <tr class="even">
                    <td>18</td>
                    <td><a href="https://youtu.be/Q8euUuRsPlg" target="_blank">迴圈 (while) 範例二</a></td>
                    <td>2016/08/03</td>
                    <td>以程式持續執行直到 使用者決定不玩</td>
                </tr>
                <tr>
                    <td>19</td>
                    <td><a href="https://youtu.be/PoYKtVWREwk" target="_blank">巢狀迴圈</a></td>
                    <td>2016/08/12</td>
                    <td>以 a x b 乘法表產生器為例  </td>
                </tr>
                <tr class="even">
                    <td>20</td>
                    <td><a href="https://youtu.be/_HDweQcQ_-U" target="_blank">一維陣列</a></td>
                    <td>2016/08/16</td>
                    <td>1. 整數陣列<br/>2. 字串陣列<br />3. 字元陣列</td>
                </tr>
                <tr>
                    <td>21</td>
                    <td><a href="https://youtu.be/dxUjDE2cftU" target="_blank">字串與字元陣列</a></td>
                    <td>2016/08/16</td>
                    <td>1. 字串轉字元陣列<br />2. 字元陣列轉字串  </td>
                </tr>
                <tr class="even">
                    <td>22</td>
                    <td><a href="https://youtu.be/eUqnio6ZVpI" target="_blank">字串處理</a></td>
                    <td>2016/08/16</td>
                    <td>1. 子字串<br/>2. 取得字串中的某一個字元</td>
                </tr>
                <tr>
                    <td>23</td>
                    <td><a href="https://youtu.be/7VTzV8lApFY" target="_blank">多維陣列(二維陣列)</a></td>
                    <td>2016/08/18</td>
                    <td></td>
                </tr>
                <tr class="even">
                    <td>24</td>
                    <td><a href="https://youtu.be/cIGpXAThl04" target="_blank">多維陣列(三維陣列)</a></td>
                    <td>2016/08/18</td>
                    <td></td>
                </tr>
                <tr>
                    <td>25</td>
                    <td><a href="https://youtu.be/Emdn4XYE5v0" target="_blank">函式呼叫 (一)</a></td>
                    <td>2016/08/18</td>
                    <td>1. 不傳入參數、不回傳值<br />2. 傳入參數但<mark>不回傳值</mark></td>
                </tr>
                <tr class="even">
                    <td>26</td>
                    <td><a href="https://youtu.be/JcCI_i8MSxk" target="_blank">函式呼叫 (二)</a></td>
                    <td>2016/08/18</td>
                    <td>1. 不傳入參數、但要回傳值<br />2. 傳入參數並將處理結果回傳</td>
                </tr>


                <tr>
                    <td>27</td>
                    <td><a href="" target="_blank">遞迴呼叫</a>(待錄)</td>
                    <td>2016/08/19</td>
                    <td></td>
                </tr>
                <tr class="even">
                    <td>28</td>
                    <td><a href="" target="_blank">類別介紹</a>(待錄)</td>
                    <td>2017/04/13</td>
                    <td></td>
                </tr>
                <tr>
                    <td>29</td>
                    <td><a href="" target="_blank">類別中的函式多載</a>(待錄)</td>
                    <td>2016/08/19</td>
                    <td></td>
                </tr>
                <tr class="even">
                    <td>30</td>
                    <td><a href="https://youtu.be/NSXnHHlVsz0" target="_blank">類別中的繼承</a></td>
                    <td>2017/04/13</td>
                    <td></td>
                </tr>
                <tr>
                    <td>31</td>
                    <td><a href="https://youtu.be/nXS29i8ht58" target="_blank">抽象類別</a></td>
                    <td>2017/04/13</td>
                    <td></td>
                </tr>
                <tr class="even">
                    <td>32</td>
                    <td><a href="" target="_blank">匿名類別</a>(待錄)</td>
                    <td>2016/08/19</td>
                    <td></td>
                </tr>
                <tr>
                    <td>33</td>
                    <td><a href="https://youtu.be/r8f2v9DSs9o" target="_blank">介面</a></td>
                    <td>2017/04/13</td>
                    <td></td>
                </tr>
                <tr class="even">
                    <td>34</td>
                    <td><a href="" target="_blank">物件陣列</a>(待錄)</td>
                    <td>2016/08/19</td>
                    <td></td>
                </tr>
                <tr>
                    <td>35</td>
                    <td><a href="" target="_blank">使用 ArrayList 管理物件</a>(待錄)</td>
                    <td>2016/08/19</td>
                    <td></td>
                </tr>
                <tr class="even">
                    <td>36</td>
                    <td><a href="" target="_blank">例外處理</a>(待錄)</td>
                    <td>2016/08/19</td>
                    <td></td>
                </tr>
                <tr>
                    <td>37</td>
                    <td><a href="" target="_blank">檔案存取</a>(待錄)</td>
                    <td>2016/08/19</td>
                    <td></td>
                </tr>
                <tr class="even">
                    <td>38</td>
                    <td><a href="" target="_blank">多執行緒</a>(待錄)</td>
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
                <h3 class="topicTitle">Topic 04 字串操作與資料型態轉換</h3>
                <div class="problem">
                    <h3 class="problemTitle">字母往前移</h3>
                    <h4>問題描述:</h4>
                    <p>志明跟春嬌是班上的一對情侶，他們有寫交換日記來打發時間的習慣，
                        為了防止他們寫的內容被幫忙傳的同學偷看，或者是不小心被老師沒收，
                        而曝光了裡面寫的東西，他們想到了一個辦法，就是把內容的所有字母
                        都往後數幾次的字母 替代，而往後數幾次的數目就寫在內容的下一行。
                        但是，問題來了，春嬌覺得每 次寫完都要再數來數去的轉化成「加密」
                        格式，實在是太麻煩了。但又礙於不想 被輕易的看到內容，於是她拜託
                        你寫個程式幫忙她可以直接把寫好的內容轉化成 「加密」的型態。加密
                        結果不會影響原字母的大小寫，且數字部分亦作相同處理， 但不處理符
                        號及特殊字元及中文。</p>
                    <h4>輸入說明:</h4>
                    <ul>
                        <li>第一行為想輸入的內容，不超過 100 個字元。</li>
                        <li>第二行為打完你想輸入的內容之後，換行輸入你想要往後替代的數目。</li>
                    </ul>
                    <h4>輸出說明:</h4>
                    <p>印出轉換後的句子，最後必須有換行字元。</p>
                    <h4>範例:</h4>
                    <table class="sampleIOTable">
                        <tr>
                            <th>Sample Input:</th>
                            <th>Sample Output:</th>
                        </tr>
                        <tr>
                            <td>How are you? 123<br/>
                                2</td>
                            <td>Jqy ctg aqw? 345</td>
                        </tr>
                    </table>
                </div>
            </div>



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