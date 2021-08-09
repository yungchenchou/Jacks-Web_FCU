<!DOCTYPE html>
<?php include("fun_inc.php");
session_start();  ?>
<html>

<head>
    <meta charest="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Yung-Chen Chou's Web</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/css/Cerulean/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/fontawesome/css/all.min.css">
    <link rel="SHORTCUT ICON" href="Images/jack.png">
    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <style>
        .clt,
        .clt ul,
        .clt li {
            position: relative;
            line-height: 1.7em;
            font-size: 1.05em;
            color: black;
            /* text-shadow: 2px 2px 2px #223344; */
        }

        .clt ul {
            list-style: none;
            padding-left: 32px;
        }

        .clt li::before,
        .clt li::after {
            content: "";
            position: absolute;
            left: -12px;
        }

        .clt li::before {
            border-top: 2px solid #000;
            top: 9px;
            width: 8px;
            height: 0;
        }

        .clt li::after {
            border-left: 2px solid #000;
            height: 100%;
            width: 0px;
            top: 2px;
        }

        .clt ul>li:last-child::after {
            height: 8px;
        }

        .clt a:link,
        .clt a:visited {
            text-decoration: none;
            color: black;
            background-color: #ccddee;
        }

        .clt a:hover,
        .clt a:active {
            background-color: #44ff22;
            color: #0000ff;
        }

        .btn:link,
        .btn:visited {
            display: inline-block;
            padding: 5px 10px;
            margin-left: 10px;
            margin-bottom: 10px;
            font-weight: 300;
            text-decoration: none;
            border-radius: 120px;
            transition: background-color 0.8s, border 0.3s, color 0.3s;
        }

        .btn-full:link,
        .btn-full:visited {
            background-color: coral;
            border: 1px solid #00ff00;
            color: #fff;
        }

        .btn:hover,
        .btn:active {
            background-color: #cf6d17;
            color: #00ff00;
        }

        .fbbtn:link,
        .fbbtn:visited {
            display: inline-block;
            padding: 5px 10px;
            margin-left: 10px;
            margin-bottom: 10px;
            font-weight: 300;
            text-decoration: none;
            border-radius: 120px;
            transition: background-color 0.8s, border 0.3s, color 0.3s;
        }

        .fbbtn-full:link,
        .fbbtn-full:visited {
            background-color: #5050ff;
            border: 1px solid #00ff00;
            color: #fff;
        }

        .fbbtn:hover,
        .fbbtn:active {
            background-color: rgba(14, 24, 137, 0.92);
            color: #00ff00;
        }
    </style>
</head>

<body>
    <div class="container">
        <img src="Images/banner.png" class="img-responsive hidden-xs" width="100%" style="margin-bottom: 1px; margin-top:3px;">
    </div>
    <div class="container">
        <?php headerBanner(5); ?>
    </div>
    <div class="container">
        <h2>課程</h2>
        <ul class="nav nav-tabs">
            <li><a data-toggle="tab" href="#home">學與思</a></li>
            <li class="active"><a data-toggle="tab" href="#videoList">教學影片</a></li>
            <li><a data-toggle="tab" href="#Undergraduate">大學部</a></li>
            <li><a data-toggle="tab" href="#Graduate">研究所</a></li>
            <li><a data-toggle="tab" href="#LicenseClass">證照班</a></li>
            <li><a data-toggle="tab" href="#E-Books">E-Books</a></li>
            <li><a data-toggle="tab" href="#AppTutorial">App Tutorial</a></li>
        </ul>
        <div class="tab-content">
            <div id="home" class="tab-pane fade">
                <p style='font-size: 1.3em; line-height: 1.8em;'>「師者，所以傳道授業解惑也。」--《師說》韓愈</p>
                <p style='font-size: 1.5em; line-height: 1.8em; font-family: "Times New Roman";'>
                    唸了二十幾年的書，從課堂學到的知識的確很多，但是從來沒有一位老師是教我如何 "讀書"。
                    "讀書" 這件事真的要有 "天份" 才行嗎？或許十個人裡有八、九個是認同的。
                    其實學習是有技巧有方法的，介紹幾本書給各位，並不是讓各位從此在考場所向無敵，而是希望能樂於閱讀進而享受閱讀!!</p>
                <ol style='list-style-type: square; padding-left: 2.5em; padding-bottom: 1em; font-size: 1.3em; line-height: 1.8em;'>
                    <li><a href='http://www.books.com.tw/products/0010444985'>讀書別靠意志力──風靡德國的邏輯K書法</a>, 克里斯迪安．格綠寧, 究竟出版社</li>
                    <li><a href='http://www.books.com.tw/products/0010475578'>大量閱讀的重要性</a>, 李家同, 博雅書屋</li>
                    <li><a href='http://www.books.com.tw/products/0010126310'>講理</a>，王鼎鈞, 大地出版</li>
                    <li><a href='http://www.kingstone.com.tw/book/book_Page.asp?kmcode=2018051082799'>
                            英文魔法書之文法俱樂部</a>，施元佑, 經典傳訊出版</li>
                </ol>
                <center><img src="Images/C1GAOFJG6N.png" style="margin-top:10px;" /><br />
                    傑克木豆 (moodle)</center>
            </div>

            <!-- ================= 教學影片列表  ================= -->
            <div id="videoList" class="tab-pane fade in active">
                <h3>Video List</h3>
                <div class="clt">
                    <ul>
                        <li><span style="font-size: 1.5em; color: rgb(0, 38, 255); 
                                        background-color: rgb(255, 175, 0);">Java語言</span>
                            <ul>
                                <li><span style="font-size: 1.1em; color: rgb(0, 38, 255); 
                                        background-color: rgb(0, 255, 128);">Java 基礎</span>
                                    <ul>
                                        <li><a href="https://youtu.be/PV2dEYjFj1U" target="_blank">
                                                00_Windows 10 安裝JDK 11.0.2與環境變數設定</a></li>
                                        <li><a href="https://youtu.be/5CZj57ADLfI" target="_blank">
                                                01_Java 程式編輯器(VS Code)介紹</a></li>
                                        <li><a href="https://youtu.be/xh4-MtFDjKU" target="_blank">
                                                02_Java程式基礎架構與print使用</a></li>
                                        <li><a href="https://youtu.be/8OnNldpo5k8" target="_blank">
                                                03_錯誤訊息與解決</a></li>
                                        <li><a href="https://youtu.be/zgdx1DYvSYo" target="_blank">
                                                04_變數與常數</a></li>
                                        <li><a href="https://youtu.be/HmaovpO9JcQ" target="_blank">
                                                05_Java 變數命名法</a></li>
                                        <li><a href="https://youtu.be/qig-GaJX2ow" target="_blank">
                                                06_Java 基本資料型態 (位元組 Byte, 短整數 short, 整數 int, 長整數 long)</a></li>
                                        <li><a href="https://youtu.be/pSCbn0XyVs0" target="_blank">
                                                07_Java 基本資料型態 (浮點數 float, 倍精準浮點數 double</a></li>
                                        <li><a href="https://youtu.be/9w23gqLezPs" target="_blank">
                                                08 Java 基本資料型態 (字元 Char)</a></li>
                                        <li><a href="https://youtu.be/eHMZntbXeRI" target="_blank">
                                                09 Java 基本資料型態 (布林 Boolean, 位元組 Byte)</a></li>
                                        <li><a href="https://youtu.be/Xvjids1ccOU" target="_blank">
                                                10 Java 算數運算</a></li>
                                        <li><a href="https://youtu.be/VrYRRZX4gKw" target="_blank">
                                                11 Java 邏輯運算</a></li>
                                        <li><a href="https://youtu.be/-8jIYRQUAAE" target="_blank">
                                                12 Java 運算式優先權</a></li>
                                        <li><a href="https://youtu.be/fLm0m73BWG8" target="_blank">
                                                13 Java 條件決策 (if-else)</a></li>
                                        <li><a href="https://youtu.be/V45Oa-LrET0" target="_blank">
                                                14 Java 條件決策 (Switch case)</a></li>
                                        <li><a href="https://youtu.be/bXmHnF7k5ns" target="_blank">
                                                15 Java for迴圈</a></li>
                                        <li><a href="https://youtu.be/0xf50-fYbKg" target="_blank">
                                                16 Java while 迴圈 1</a></li>
                                        <li><a href="https://youtu.be/Q8euUuRsPlg" target="_blank">
                                                17 Java while 迴圈 2</a></li>
                                        <li><a href="https://youtu.be/PoYKtVWREwk" target="_blank">
                                                18 Java 巢狀迴圈</a></li>
                                        <li><a href="https://youtu.be/_HDweQcQ_-U" target="_blank">
                                                19 Java 一維陣列</a></li>
                                        <li><a href="https://youtu.be/dxUjDE2cftU" target="_blank">
                                                20 Java 字串與字元陣列</a></li>
                                        <li><a href="https://youtu.be/dxUjDE2cftU" target="_blank">
                                                21 Java 子字串處理函數</a></li>
                                        <li><a href="https://youtu.be/eUqnio6ZVpI" target="_blank">
                                                22 Java 二維陣列</a></li>
                                        <li><a href="https://youtu.be/cIGpXAThl04" target="_blank">
                                                23 Java 三維陣列</a></li>
                                        <li><a href="https://youtu.be/lncnIKL8TRo" target="_blank">
                                                24 Java 函數呼叫 </a></li>
                                        <li><a href="https://youtu.be/Emdn4XYE5v0" target="_blank">
                                                25 Java 函數呼叫 1</a></li>
                                        <li><a href="https://youtu.be/JcCI_i8MSxk" target="_blank">
                                                26 Java 函數呼叫 2</a></li>
                                    </ul>
                                </li>
                                <li><span style="font-size: 1.1em; color: rgb(0, 38, 255); 
                                        background-color: rgb(0, 255, 128);">解題範例</span>
                                    <ul>
                                        <li><a href="https://youtu.be/5yiQQ668duw" target="_blank">
                                                00 矩陣數字顯示器 (Java)</a></li>
                                        <li><a href="https://youtu.be/JkAcmSgkRPk" target="_blank">
                                                01 汽泡排序法 (Java)</a></li>
                                        <li><a href="https://youtu.be/eiiyGSjyDuc" target="_blank">
                                                02 矩陣相乘 (Java)</a></li>
                                        <li><a href="https://youtu.be/nEpXUahAmBQ" target="_blank">
                                                03 遞迴呼叫計算數值位數 (Java)</a></li>
                                        <li><a href="https://youtu.be/cflH2Jh4WeQ" target="_blank">
                                                04 遞迴呼叫 poewr(a, n) (Java)</a></li>
                                        <li><a href="https://youtu.be/CaNVG80mfqQ" target="_blank">
                                                05 ISBN驗證 (Java)</a></li>
                                        <li><a href="https://youtu.be/cc9lCkqzIAo" target="_blank">
                                                06 身份證號碼驗證器 (Java)</a></li>
                                        <li><a href="https://youtu.be/FlyclHRmHYM" target="_blank">
                                                07 使用遞迴呼叫實作輾轉相除法求兩數最大公因數 (Java)</a></li>
                                        <li><a href="https://youtu.be/haMki5qWBcw" target="_blank">
                                                08 函式呼叫找出連續整數 (Java)</a></li>
                                        <li><a href="https://youtu.be/ZKwX0_2S-tI" target="_blank">
                                                09 函式呼叫判斷是否為質數 (Java)</a></li>
                                        <li><a href="https://youtu.be/Q2NfOgj5W5A" target="_blank">
                                                10 遞迴呼叫求兩數之最小公倍數 (Java)</a></li>
                                        <li><a href="https://youtu.be/87T2irKYyjM" target="_blank">
                                                11 函數呼叫計算 1*(1+1) + 2*(2+1) + 3*(3+1) + ... + n*(n+1)</a></li>
                                    </ul>
                                </li>
                                <li><span style="font-size: 1.1em; color: rgb(0, 38, 255); 
                                        background-color: rgb(0, 255, 128);">Java 進階</span>
                                    <ul>
                                        <li><a href="https://youtu.be/P9ymfaRNmg0" target="_blank">
                                                00 Java 類別介紹 1</a></li>
                                        <li><a href="https://youtu.be/z-oFyPaO3zY" target="_blank">
                                                01 Java 類別介紹 2</a></li>
                                        <li><a href="https://youtu.be/SUSeptMuCV8" target="_blank">
                                                02 Java 類別函數成員</a></li>
                                        <li><a href="https://youtu.be/Vrkvpkuse_4" target="_blank">
                                                03 Java 類別 (以 Student類別為例)</a></li>
                                        <li><a href="https://youtu.be/6rU4NGuOBqQ" target="_blank">
                                                04 Java 類別範例</a></li>
                                        <li><a href="https://youtu.be/vn0WTlgUyZE" target="_blank">
                                                05 Java 物件陣列 1</a></li>
                                        <li><a href="https://youtu.be/fDNhH8XMluA" target="_blank">
                                                07 Java 物件陣列 2</a></li>
                                        <li><a href="https://youtu.be/NSXnHHlVsz0" target="_blank">
                                                08 類別繼承</a></li>
                                        <li><a href="https://youtu.be/nXS29i8ht58" target="_blank">
                                                09 抽象類別 (new)</a></li>
                                        <li><a href="https://youtu.be/r8f2v9DSs9o" target="_blank">
                                                10 介面 (Interface) (new)</a></li>
                                        <li><a href="https://youtu.be/janGWSQBo_0" target="_blank">
                                                11 抽象類別與介面 </a></li>
                                    </ul>
                                </li>
                                <li><span style="font-size: 1.1em; color: rgb(0, 38, 255); 
                                        background-color: rgb(0, 255, 128);">Java 視窗程式</span>
                                    <ul>
                                        <li><a href="https://youtu.be/gFd96T3rcfQ" target="_blank">
                                                00 AWT BorderLayout</a></li>
                                        <li><a href="https://youtu.be/2-ZKYDdBhi4" target="_blank">
                                                01 AWT GridLayout</a></li>
                                        <li><a href="https://youtu.be/7nnKH28AQ7c" target="_blank">
                                                02 AWT CardLayout</a></li>
                                        <li><a href="https://youtu.be/ln9ICM3nbBw" target="_blank">
                                                03 AWT FlowLayout</a></li>
                                        <li><a href="https://youtu.be/msSy7JUFDlk" target="_blank">
                                                04 AWT 簡易小畫家</a></li>
                                        <li><a href="https://youtu.be/UAlxcVwn2lE" target="_blank">
                                                05 Swing BorderLayout</a></li>
                                        <li><a href="https://youtu.be/BPNXICwFGpQ" target="_blank">
                                                06 Swing GridLayout</a></li>
                                        <li><a href="https://youtu.be/C61MymWNtt4" target="_blank">
                                                07 Swing Layout 以簡易計算機為例</a></li>
                                        <li><a href="https://youtu.be/wFVWv9CGYAQ" target="_blank">
                                                08 JTable 視窗表格</a></li>

                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <li><span style="font-size: 1.5em; color: rgb(0, 38, 255); 
                                        background-color: rgb(255, 175, 0);">網頁系統開發</span>
                            <ul>
                                <li><a href="https://youtu.be/L28gcipynRA" target="_blank">
                                        00 HTML5 介紹</a></li>
                                <li><a href="https://youtu.be/spd4Y6rryTc" target="_blank">
                                        01 HTML5 frameset介紹</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>


            <div id="Undergraduate" class="tab-pane fade">
                <h3>大學部</h3>

                <!--  ----------------------- 109_1 ---------------------- -->
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <span class="glyphicon glyphicon-bookmark"></span> 109 學年第 1 學期</h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-4 col-md-4">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <div class="row">
                                            <div class="col-xs-3">
                                                <i class="fa fa-code fa-5x"></i>
                                            </div>
                                            <div class="col-xs-9 text-right">
                                                <h3 style="color: rgb(255, 255, 255);">基礎程式設計</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-footer">
                                        <span class="pull-left" style="font-size: 2em;">Python</span>
                                        <div class="clearfix text-right">
                                            <a href="courses/1091/1_Programming1.php">
                                                <i class="fa fa-arrow-right fa-2x" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4">
                                <div class="panel panel-success">
                                    <div class="panel-heading">
                                        <div class="row">
                                            <div class="col-xs-3">
                                                <i class="fa fa-windows fa-5x"></i>
                                            </div>
                                            <div class="col-xs-9 text-right">
                                                <h3 style="color: rgb(255, 255, 255);">視窗程式設計</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-footer">
                                        <span class="pull-left" style="font-size: 2em;">Windows Programming</span>
                                        <div class="clearfix text-right"><a href="courses/1091/2_WindowProgramming.php">
                                                <i class="fa fa-arrow-right fa-2x" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-lg-4 col-md-4">
                                <div class="panel panel-warning">
                                    <div class="panel-heading">
                                        <div class="row">
                                            <div class="col-xs-3">
                                                <i class="fa fa-globe fa-5x"></i>
                                            </div>
                                            <div class="col-xs-9 text-right">
                                                <h3 style="color: rgb(255, 255, 255);">HTML 5 Web APP 設計與開發</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-footer">
                                        <span class="pull-left">Design and Development of HTML 5 Web APP</span>
                                        <div class="clearfix text-right"><a href="courses/1091/3_WebApp.php">
                                                <i class="fa fa-arrow-right fa-2x" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-4">
                                <div class="panel panel-info">
                                    <div class="panel-heading">
                                        <div class="row">
                                            <div class="col-xs-3">
                                                <i class="fa fa-globe fa-5x"></i>
                                            </div>
                                            <div class="col-xs-9 text-right">
                                                <h3 style="color: rgb(255, 255, 255);">跨平台APP與資料庫整合應用開發</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-footer">
                                        <span class="pull-left">Cross-platform Based APP and Database Integration Application Development</span>
                                        <div class="clearfix text-right"><a href="courses/1091/4_xPlatform-DB.php">
                                                <i class="fa fa-arrow-right fa-2x" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!--  ----------------------- 108_2 ---------------------- -->
                <div class="panel panel-danger">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <span class="glyphicon glyphicon-bookmark"></span> 108 學年第 2 學期</h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-4 col-md-4">
                                <div class="panel panel-success">
                                    <div class="panel-heading">
                                        <div class="row">
                                            <div class="col-xs-3">
                                                <i class="fa fa-coffee fa-5x"></i>
                                            </div>
                                            <div class="col-xs-9 text-right">
                                                <h3 style="color: rgb(255, 255, 255);">進階程式設計</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-footer">
                                        <span class="pull-left">Advanced Programming</span>
                                        <div class="clearfix text-right">
                                            <a href="courses/1082/1_Advanced_Programming.php">
                                                <i class="fa fa-arrow-right fa-2x" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <div class="row">
                                            <div class="col-xs-3">
                                                <i class="fa fa-server fa-5x"></i>
                                            </div>
                                            <div class="col-xs-9 text-right">
                                                <h3 style="color: rgb(255, 255, 255);">伺服器建置與管理</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-footer">
                                        <span class="pull-left">Server Setting Up</span>
                                        <div class="clearfix text-right">
                                            <a href="courses/1082/2_ServerSetting.php">
                                                <i class="fa fa-arrow-right fa-2x" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="panel panel-info">
                                    <div class="panel-heading">
                                        <div class="row">
                                            <div class="col-xs-3">
                                                <i class="fa fa-shield fa-5x"></i>
                                            </div>
                                            <div class="col-xs-9 text-right">
                                                <h3 style="color: rgb(255, 255, 255);">數位內容資訊安全</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-footer">
                                        <span class="pull-left">Digital Content Security</span>
                                        <div class="clearfix text-right">
                                            <a href="courses/1082/3_Security.php">
                                                <i class="fa fa-arrow-right fa-2x" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--  ----------------------- 108_1 ---------------------- -->
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <span class="glyphicon glyphicon-bookmark"></span> 108 學年第 1 學期</h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-4 col-md-4">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <div class="row">
                                            <div class="col-xs-3">
                                                <i class="fa fa-coffee fa-5x"></i>
                                            </div>
                                            <div class="col-xs-9 text-right">
                                                <h3 style="color: rgb(255, 255, 255);">基礎程式設計</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-footer">
                                        <span class="pull-left">Java Programming</span>
                                        <div class="clearfix text-right">
                                            <a href="courses/1081/1_Programming1.php">
                                                <i class="fa fa-arrow-right fa-2x" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4">
                                <div class="panel panel-success">
                                    <div class="panel-heading">
                                        <div class="row">
                                            <div class="col-xs-3">
                                                <i class="fa fa-windows fa-5x"></i>
                                            </div>
                                            <div class="col-xs-9 text-right">
                                                <h3 style="color: rgb(255, 255, 255);">視窗程式設計</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-footer">
                                        <span class="pull-left">Windows Programming</span>
                                        <div class="clearfix text-right"><a href="courses/1081/2_WindowProgramming.php">
                                                <i class="fa fa-arrow-right fa-2x" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="panel panel-warning">
                                    <div class="panel-heading">
                                        <div class="row">
                                            <div class="col-xs-3">
                                                <i class="fa fa-globe fa-5x"></i>
                                            </div>
                                            <div class="col-xs-9 text-right">
                                                <h3 style="color: rgb(255, 255, 255);">HTML 5 Web APP 設計與開發</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-footer">
                                        <span class="pull-left">Design and Development of HTML 5 Web APP</span>
                                        <div class="clearfix text-right"><a href="courses/1081/3_WebApp.php">
                                                <i class="fa fa-arrow-right fa-2x" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--  ----------------------- 107_2 ---------------------- -->
                <div class="panel panel-danger">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <span class="glyphicon glyphicon-bookmark"></span> 107 學年第 2 學期</h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-4 col-md-4">
                                <div class="panel panel-success">
                                    <div class="panel-heading">
                                        <div class="row">
                                            <div class="col-xs-3">
                                                <i class="fa fa-coffee fa-5x"></i>
                                            </div>
                                            <div class="col-xs-9 text-right">
                                                <h3 style="color: rgb(255, 255, 255);">進階程式設計</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-footer">
                                        <span class="pull-left">Advanced Programming</span>
                                        <div class="clearfix text-right">
                                            <a href="courses/1072/1_Advanced_Programming.php">
                                                <i class="fa fa-arrow-right fa-2x" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <div class="row">
                                            <div class="col-xs-3">
                                                <i class="fa fa-server fa-5x"></i>
                                            </div>
                                            <div class="col-xs-9 text-right">
                                                <h3 style="color: rgb(255, 255, 255);">伺服器建置與管理</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-footer">
                                        <span class="pull-left">Server Setting Up</span>
                                        <div class="clearfix text-right">
                                            <a href="courses/1072/2_ServerSetting.php">
                                                <i class="fa fa-arrow-right fa-2x" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="panel panel-info">
                                    <div class="panel-heading">
                                        <div class="row">
                                            <div class="col-xs-3">
                                                <i class="fa fa-shield fa-5x"></i>
                                            </div>
                                            <div class="col-xs-9 text-right">
                                                <h3 style="color: rgb(255, 255, 255);">數位內容資訊安全</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-footer">
                                        <span class="pull-left">Digital Content Security</span>
                                        <div class="clearfix text-right">
                                            <a href="courses/1072/3_Security.php">
                                                <i class="fa fa-arrow-right fa-2x" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--  ----------------------- 107_1 ---------------------- -->
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <span class="glyphicon glyphicon-bookmark"></span> 107 學年第 1 學期</h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-4 col-md-4">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <div class="row">
                                            <div class="col-xs-3">
                                                <i class="fa fa-coffee fa-5x"></i>
                                            </div>
                                            <div class="col-xs-9 text-right">
                                                <h3 style="color: rgb(255, 255, 255);">基礎程式設計</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-footer">
                                        <span class="pull-left">Java Programming</span>
                                        <div class="clearfix text-right">
                                            <a href="courses/1071/1_Programming1.php">
                                                <i class="fa fa-arrow-right fa-2x" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4">
                                <div class="panel panel-info">
                                    <div class="panel-heading">
                                        <div class="row">
                                            <div class="col-xs-3">
                                                <i class="fa fa-shield fa-5x"></i>
                                            </div>
                                            <div class="col-xs-9 text-right">
                                                <h3 style="color: rgb(255, 255, 255);">數位內容資訊安全</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-footer">
                                        <span class="pull-left">Digital Content Security</span>
                                        <div class="clearfix text-right">
                                            <a href="courses/1061/2_Security.php">
                                                <i class="fa fa-arrow-right fa-2x" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4">
                                <div class="panel panel-success">
                                    <div class="panel-heading">
                                        <div class="row">
                                            <div class="col-xs-3">
                                                <i class="fa fa-windows fa-5x"></i>
                                            </div>
                                            <div class="col-xs-9 text-right">
                                                <h3 style="color: rgb(255, 255, 255);">視窗程式設計</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-footer">
                                        <span class="pull-left">Windows Programming</span>
                                        <div class="clearfix text-right"><a href="courses/1061/3_WindowProgramming.php">
                                                <i class="fa fa-arrow-right fa-2x" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-4 col-md-4">
                                <div class="panel panel-warning">
                                    <div class="panel-heading">
                                        <div class="row">
                                            <div class="col-xs-3">
                                                <i class="fa fa-globe fa-5x"></i>
                                            </div>
                                            <div class="col-xs-9 text-right">
                                                <h3 style="color: rgb(255, 255, 255);">網頁系統開發</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-footer">
                                        <span class="pull-left">Web System Development</span>
                                        <div class="clearfix text-right"><a href="courses/1071/4_WebSystemDevelop.php">
                                                <i class="fa fa-arrow-right fa-2x" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4">
                                <div class="panel panel-danger">
                                    <div class="panel-heading">
                                        <div class="row">
                                            <div class="col-xs-3">
                                                <i class="fa fa-gavel fa-5x"></i>
                                            </div>
                                            <div class="col-xs-9 text-right">
                                                <h3 style="color: rgb(255, 255, 255);">自造實務</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-footer">
                                        <span class="pull-left">Web System Development</span>
                                        <div class="clearfix text-right"><a href="courses/1061/4_WebSystemDevelop.php">
                                                <i class="fa fa-arrow-right fa-2x" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!--  ----------------------- 106_2 ---------------------- -->
                <div class="panel panel-danger">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <span class="glyphicon glyphicon-bookmark"></span> 106 學年第 2 學期</h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-4 col-md-4">
                                <div class="panel panel-success">
                                    <div class="panel-heading">
                                        <div class="row">
                                            <div class="col-xs-3">
                                                <i class="fa fa-coffee fa-5x"></i>
                                            </div>
                                            <div class="col-xs-9 text-right">
                                                <h3 style="color: rgb(255, 255, 255);">進階程式設計</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-footer">
                                        <span class="pull-left">Advanced Programming</span>
                                        <div class="clearfix text-right">
                                            <a href="courses/1062/1_Advanced_Programming.php">
                                                <i class="fa fa-arrow-right fa-2x" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <div class="row">
                                            <div class="col-xs-3">
                                                <i class="fa fa-server fa-5x"></i>
                                            </div>
                                            <div class="col-xs-9 text-right">
                                                <h3 style="color: rgb(255, 255, 255);">伺服器建置與管理</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-footer">
                                        <span class="pull-left">Server Setting Up</span>
                                        <div class="clearfix text-right">
                                            <a href="courses/1062/2_ServerSetting.php">
                                                <i class="fa fa-arrow-right fa-2x" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4">
                                <div class="panel panel-warning">
                                    <div class="panel-heading">
                                        <div class="row">
                                            <div class="col-xs-3">
                                                <i class="fa fa-code fa-5x"></i>
                                            </div>
                                            <div class="col-xs-9 text-right">
                                                <h3 style="color: rgb(255, 255, 255);">基礎程式設計</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-footer">
                                        <span class="pull-left">Fundamental Programming</span>
                                        <div class="clearfix text-right"><a href="courses/1062/3_Programming1.php">
                                                <i class="fa fa-arrow-right fa-2x" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--  ----------------------- 106_1 ---------------------- -->
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <span class="glyphicon glyphicon-bookmark"></span> 106 學年第 1 學期</h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-4 col-md-4">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <div class="row">
                                            <div class="col-xs-3">
                                                <i class="fa fa-coffee fa-5x"></i>
                                            </div>
                                            <div class="col-xs-9 text-right">
                                                <h3 style="color: rgb(255, 255, 255);">基礎程式設計</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-footer">
                                        <span class="pull-left">Java Programming</span>
                                        <div class="clearfix text-right">
                                            <a href="courses/1061/1_Programming1.php">
                                                <i class="fa fa-arrow-right fa-2x" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4">
                                <div class="panel panel-info">
                                    <div class="panel-heading">
                                        <div class="row">
                                            <div class="col-xs-3">
                                                <i class="fa fa-shield fa-5x"></i>
                                            </div>
                                            <div class="col-xs-9 text-right">
                                                <h3 style="color: rgb(255, 255, 255);">數位內容資訊安全</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-footer">
                                        <span class="pull-left">Digital Content Security</span>
                                        <div class="clearfix text-right">
                                            <a href="courses/1061/2_Security.php">
                                                <i class="fa fa-arrow-right fa-2x" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4">
                                <div class="panel panel-success">
                                    <div class="panel-heading">
                                        <div class="row">
                                            <div class="col-xs-3">
                                                <i class="fa fa-windows fa-5x"></i>
                                            </div>
                                            <div class="col-xs-9 text-right">
                                                <h3 style="color: rgb(255, 255, 255);">視窗程式設計</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-footer">
                                        <span class="pull-left">Windows Programming</span>
                                        <div class="clearfix text-right"><a href="courses/1061/3_WindowProgramming.php">
                                                <i class="fa fa-arrow-right fa-2x" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-4 col-md-4">
                                <div class="panel panel-warning">
                                    <div class="panel-heading">
                                        <div class="row">
                                            <div class="col-xs-3">
                                                <i class="fa fa-globe fa-5x"></i>
                                            </div>
                                            <div class="col-xs-9 text-right">
                                                <h3 style="color: rgb(255, 255, 255);">網頁系統開發</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-footer">
                                        <span class="pull-left">Web System Development</span>
                                        <div class="clearfix text-right"><a href="courses/1061/4_WebSystemDevelop.php">
                                                <i class="fa fa-arrow-right fa-2x" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4">
                                <div class="panel panel-danger">
                                    <div class="panel-heading">
                                        <div class="row">
                                            <div class="col-xs-3">
                                                <i class="fa fa-gavel fa-5x"></i>
                                            </div>
                                            <div class="col-xs-9 text-right">
                                                <h3 style="color: rgb(255, 255, 255);">自造實務</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-footer">
                                        <span class="pull-left">Web System Development</span>
                                        <div class="clearfix text-right"><a href="courses/1061/4_WebSystemDevelop.php">
                                                <i class="fa fa-arrow-right fa-2x" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--  ----------------------- 106_Summer ---------------------- -->
                <div class="panel panel-warning">
                    <div class="panel-heading">106 年夏季先修班 </div>
                    <div class="panel-body">
                        <ol>
                            <li><a href="courses/106_Summer/1_html5System.php">HTML5 + CSS + JQuery Mobile</a></li>
                            <li><a href="courses/106_Summer/2_PreJava.php">Java程式先修班</a></li>
                        </ol>
                    </div>
                </div>

                <!--  ----------------------- 105_2 ---------------------- -->
                <div class="panel panel-primary">
                    <div class="panel-heading">105 學年第 2 學期</div>
                    <div class="panel-body">
                        <ol>
                            <li><a href="">程式設計(二)(數位內容組)</a></li>
                            <li><a href="">程式設計(二)(資電組)</a></li>
                            <li><a href="">數位影像處理(Ph.D.)</a></li>
                            <li><a href="">伺服器建置與管理</a></li>
                        </ol>
                    </div>
                </div>

                <!--  ----------------------- 105_1 ---------------------- -->
                <div class="panel panel-success">
                    <div class="panel-heading">105 學年第 1 學期</div>
                    <div class="panel-body">
                        <ol>
                            <li><a href="courses/1051/1_Programming1.php">程式設計(一)(數位內容組)</a>
                                <a class="btn btn-full" href="https://classroom.github.com/classrooms/21956682-105_1_java-programming-1">GitHub Classroom</a>
                                <a class="fbbtn fbbtn-full" href="https://www.facebook.com/groups/asiacsieprogram1051/" target="_blank">Facebook</a></li>
                            <li><a href="courses/1051/2_Security.php">數位內容資訊安全</a></li>
                            <li><a href="courses/1051/3_WindowProgramming.php">視窗程式設計 (數位內容組)</a>
                                <a class="btn btn-full" href="https://classroom.github.com/classrooms/22132229-105_1_java-window-programming">GitHub Classroom</a>
                                <a class="fbbtn fbbtn-full" href="https://www.facebook.com/groups/csiewindowprogram1051/" target="_blank">Facebook</a></li>
                            <li><a href="courses/1051/4_WebAPP.php">HTML5 跨平台程式開發(數位3A)</a>
                                <a class="btn btn-full" href="https://classroom.github.com/classrooms/21963732-105_1_html5-web-app">GitHub Classroom</a>
                                <a class="fbbtn fbbtn-full" href="https://www.facebook.com/groups/asiacsie1051html5/" target="_blank">Facebook</a></li>

                        </ol>
                    </div>
                </div>

                <!--  ----------------------- 105_Summer ---------------------- -->
                <div class="panel panel-primary">
                    <div class="panel-heading">105 年夏季班 </div>
                    <div class="panel-body">
                        <ol>
                            <li><a href="courses/105_Summer/0_preCourse.php">新生菁英班</a></li>
                            <li><a href="courses/105_Summer/1_webAPP.php">HTML5 + CSS + JQuery Mobile</a></li>
                            <li><a href="courses/105_Summer/2_PreJava.php">程式先修班</a></li>
                        </ol>
                    </div>
                </div>

                <!--  ----------------------- 104_2 ---------------------- -->
                <div class="panel panel-success">
                    <div class="panel-heading">104 學年第 2 學期</div>
                    <div class="panel-body">
                        <ol>
                            <li><a href="courses/1042/0_Programming2.php">程式設計(二)(數位內容組)</a></li>
                            <li><a href="courses/1042/1_Server.php">伺服器建置與管理</a></li>
                            <li><a href="courses/1042/2_DigitalImageProcessing.php">數位影像處理（Ph.D）</a></li>
                        </ol>
                    </div>
                </div>
                <!--  ----------------------- 104_1 ---------------------- -->
                <div class="panel panel-primary">
                    <div class="panel-heading">104 學年第 1 學期</div>
                    <div class="panel-body">
                        <ol>
                            <li><a href="courses/1041/0_Programming1.php">程式設計(一)(數位內容組)</a></li>
                            <li><a href="courses/1041/1_WindowProgramming.php">視窗程式設計(一)(數位內容組)</a></li>
                            <li><a href="courses/1041/2_DigitContentSecurity.php">數位內容資訊安全</a></li>
                            <li><a href="courses/1041/3_HTML5.php">HTML5 跨平台程式開發(數位3A)</a></li>
                        </ol>
                    </div>
                </div>
                <!--  ----------------------- 104_Summer ---------------------- -->
                <div class="panel panel-success">
                    <div class="panel-heading">104 學年 暑期</div>
                    <div class="panel-body">
                        <ol>
                            <li><a href="courses/1033/0_phpProgramming.php" target="_blank">PHP 動態網頁製作</a></li>
                            <li><a href="courses/1033/1_JavaProgramming.php" target="_blank">JAVA 程式加強班</a></li>
                        </ol>
                    </div>
                </div>
                <!--  ----------------------- 103_2 ---------------------- -->
                <div class="panel panel-primary">
                    <div class="panel-heading">103 學年第 2 學期</div>
                    <div class="panel-body">
                        <ol>
                            <li><a href="courses/1032/0_ImageProcessing(PHD)/00_Main.php">數位影像處理 (博士班)</a></li>
                            <li><a href="courses/1032/1_Programming2/00_Main.php">程式設計(二)(數位內容組)</a></li>
                            <li><a href="courses/1032/2_Programming1_ReTrain/00_Main.php">程式設計(一)(重修)</a></li>
                            <li><a href="courses/1032/3_ServerSetupMaintain/00_Main.php">伺服器建置與管理 (數位內容組2A)</a></li>
                        </ol>
                    </div>
                </div>
                <!--  ----------------------- 103_1 ---------------------- -->
                <div class="panel panel-success">
                    <div class="panel-heading">103 學年第 1 學期</div>
                    <div class="panel-body">
                        <ol>
                            <li><a href="courses/1031/0_WindowProgramming.php">視窗程式設計</a></li>
                            <li><a href="courses/1031/1_JavaProgramming.php">程式設計(一)</a></li>
                            <li><a href="courses/1031/2_DigitContentSecurity.php">數位內容資訊安全</a></li>
                            <li><a href="courses/1031/3_cyut_Steganography.php">資訊隱藏概論 (朝陽科大_資管3A)</a></li>
                        </ol>
                    </div>
                </div>
                <!--  ----------------------- 103_Summer ---------------------- -->
                <div class="panel panel-primary">
                    <div class="panel-heading">103 學年 暑期</div>
                    <div class="panel-body">
                        <ol>
                            <li><a href="courses/1023/0_phpProgramming.php" target="_blank">PHP 動態網頁製作</a></li>
                            <li><a href="courses/1023/1_JavaProgramming.php" target="_blank">JAVA 程式加強班</a></li>
                        </ol>
                    </div>
                </div>
                <!--  ----------------------- 102_2 ---------------------- -->
                <div class="panel panel-success">
                    <div class="panel-heading">102 學年 第 2 學期</div>
                    <div class="panel-body">
                        <ol>
                            <li><a href="courses/1022/0_DigitalImageProcessing.php">數位影像處理 (博士班)</a></li>
                            <li><a href="courses/1022/1_ServerSetOnMaintain.php">伺服器建置與管理 (數位內容組2A)</a></li>
                            <li><a href="courses/1022/2_AdvVideoAudioCoding.php">進階影音編碼技術 (跨領域學程)</a></li>
                        </ol>
                    </div>
                </div>
                <!--  ----------------------- 102_1 ---------------------- -->
                <div class="panel panel-primary">
                    <div class="panel-heading">102 學年 第 1 學期</div>
                    <div class="panel-body">
                        <ol>
                            <li><a href="courses/1021/0_WindowsProgramIA.php">視窗程式設計 (資電應用組2A)</a></li>
                            <li><a href="courses/1021/1_WindowsProgramDC.php">視窗程式設計 (數位內容組2A)</a></li>
                            <li><a href="courses/1021/2_DCSecurity.php">數位內容資訊安全 (數位內容組3A)</a></li>
                            <li><a href="courses/1021/3_cyut_Steganography.php">資訊隱藏概論 (朝陽科大_資管3A)</a></li>
                        </ol>
                    </div>
                </div>
                <!--  ----------------------- 101_2 ---------------------- -->
                <div class="panel panel-success">
                    <div class="panel-heading">101 學年 第 2 學期</div>
                    <div class="panel-body">
                        <ol>
                            <li>數位影像處理 (資工數位內容組2A)</li>
                            <li>資訊與科技 (基礎課程 1年級)</li>
                            <li>進階影音編碼技術 (數位匯流學程 資工系2年級)</li>
                        </ol>
                    </div>
                </div>
                <!--  ----------------------- 101_1 ---------------------- -->
                <div class="panel panel-primary">
                    <div class="panel-heading">101 學年 第 1 學期</div>
                    <div class="panel-body">
                        <ol>
                            <li>視窗程式設計 (資電應用組2A)</li>
                            <li>視窗程式設計 (數位內容組2A)</li>
                        </ol>
                    </div>
                </div>
                <!--  ----------------------- 100_2 ---------------------- -->
                <div class="panel panel-success">
                    <div class="panel-heading">100 學年 第 2 學期</div>
                    <div class="panel-body">
                        <ol>
                            <li>數位影像處理 (資工數位內容組2A)</li>
                            <li>網路資訊安全 (數位內容組4A)</li>
                            <li>進階影音編碼技術 (數位匯流學程 資工系4年級)</li>
                            <li>訓輔時間四 (資工4A)</li>
                        </ol>
                    </div>
                </div>
                <!--  ----------------------- 100_1 ---------------------- -->
                <div class="panel panel-primary">
                    <div class="panel-heading">100 學年 第 1 學期</div>
                    <div class="panel-body">
                        <ol>
                            <li>視窗程式設計 (數位內容組2A)</li>
                            <li>管理資訊系統 (經管系 3年級)</li>
                            <li>訓輔時間四 (資工4A)</li>
                        </ol>
                    </div>
                </div>
                <!--  ----------------------- 99_2 ---------------------- -->
                <div class="panel panel-success">
                    <div class="panel-heading">99 學年 第 2 學期</div>
                    <div class="panel-body">
                        <ol>
                            <li>程式設計二 (資工系2年級)</li>
                            <li>資訊安全 (資工系碩專班1年級)</li>
                            <li>資料探勘 (生醫系3年級)</li>
                            <li>訓輔時間三 (資工3A)</li>
                        </ol>
                    </div>
                </div>
                <!--  ----------------------- 99_1 ---------------------- -->
                <div class="panel panel-primary">
                    <div class="panel-heading">99 學年 第 1 學期</div>
                    <div class="panel-body">
                        <ol>
                            <li>視窗程式設計 (資電應用組2A)</li>
                            <li>視窗程式設計 (數位內容組2A)</li>
                            <li>訓輔時間三 (資工3A)</li>
                        </ol>
                    </div>
                </div>
                <!--  ----------------------- 98_Summer ---------------------- -->
                <div class="panel panel-success">
                    <div class="panel-heading">98 學年 暑修</div>
                    <div class="panel-body">
                        <ol>
                            <li>資訊與科技 (基礎課程 1年級)</li>
                        </ol>
                    </div>
                </div>
                <!--  ----------------------- 98_2 ---------------------- -->
                <div class="panel panel-primary">
                    <div class="panel-heading">98 學年 第 2 學期</div>
                    <div class="panel-body">
                        <ol>
                            <li>Java程式設計 (資工系3年級)</li>
                            <li>資訊庫系統 (資工系3年級)</li>
                        </ol>
                    </div>
                </div>
                <!--  ----------------------- 98_1 ---------------------- -->
                <div class="panel panel-success">
                    <div class="panel-heading">98 學年 第 1 學期</div>
                    <div class="panel-body">
                        <ol>
                            <li>作業系統 (資工系3年級)</li>
                        </ol>
                    </div>
                </div>
                <!--  ----------------------- 97_2 ---------------------- -->
                <div class="panel panel-primary">
                    <div class="panel-heading">97 學年 第 2 學期</div>
                    <div class="panel-body">
                        <ol>
                            <li>機率 (資工系2年級)</li>
                            <li>Java程式設計 (資工系2年級)</li>
                            <li>資訊安全與管理 (資通系2年級)</li>
                        </ol>
                    </div>
                </div>
            </div>

            <!-- ############################ Graduate Program   #################################### -->
            <div id="Graduate" class="tab-pane fade">
                <h3>研究所</h3>
                <!--  ----------------------- 103_2 ---------------------- -->
                <div class="panel panel-primary">
                    <div class="panel-heading">103 學年第 2 學期</div>
                    <div class="panel-body">
                        <ol>
                            <li><a href="courses/1032/1032_ImageProcessing(PHD)/00_Main.php">數位影像處理 (博士班)</a></li>
                        </ol>
                    </div>
                </div>
                <!--  ----------------------- 101_1 ---------------------- -->
                <div class="panel panel-success">
                    <div class="panel-heading">101 學年 第 1 學期</div>
                    <div class="panel-body">
                        <ol>
                            <li>作業系統 (資工系碩專班1年級)</li>
                        </ol>
                    </div>
                </div>
                <!--  ----------------------- 100_1 ---------------------- -->
                <div class="panel panel-primary">
                    <div class="panel-heading">100 學年 第 1 學期</div>
                    <div class="panel-body">
                        <ol>
                            <li>作業系統 (資工系碩專班1年級)</li>
                        </ol>
                    </div>
                </div>
                <!--  ----------------------- 99_1 ---------------------- -->
                <div class="panel panel-success">
                    <div class="panel-heading">99 學年 第 1 學期</div>
                    <div class="panel-body">
                        <ol>
                            <li>作業系統 (資工系博士班1年級)</li>
                        </ol>
                    </div>
                </div>
                <!--  ----------------------- 98_2 ---------------------- -->
                <div class="panel panel-primary">
                    <div class="panel-heading">98 學年 第 2 學期</div>
                    <div class="panel-body">
                        <ol>
                            <li>資訊安全 (資工系碩專班1年級)</li>
                        </ol>
                    </div>
                </div>
                <!--  ----------------------- 98_1 ---------------------- -->
                <div class="panel panel-success">
                    <div class="panel-heading">98 學年 第 1 學期</div>
                    <div class="panel-body">
                        <ol>
                            <li>資訊安全 (資工系碩士班1年級)</li>
                            <li>作業系統 (資工系博士班1年級)</li>
                        </ol>
                    </div>
                </div>
            </div>
            <!-- *********************  License Classes **************************************-->
            <div id="LicenseClass" class="tab-pane fade">
                <h3>證照班</h3>
                <!--  ----------------------- 103_2 ---------------------- -->
                <div class="panel panel-primary">
                    <div class="panel-heading">103 學年 第 2 學期</div>
                    <div class="panel-body">
                        <ol>
                            <li>ISMS 專業建置管理師 (ISO27001:2013 implementer)</li>
                        </ol>
                    </div>
                </div>
                <!--  ----------------------- 101_2 ---------------------- -->
                <div class="panel panel-success">
                    <div class="panel-heading">101 學年 第 2 學期</div>
                    <div class="panel-body">
                        <ol>
                            <li>PIMS 專業建置管理師 (ISO29100 implementer)</li>
                        </ol>
                    </div>
                </div>
            </div>

            <!-- *********************  E-book Classes **************************************-->
            <div id="E-Books" class="tab-pane fade">

                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-4 col-md-4">
                            <!-- ***** React Native ******* -->
                            <div class="panel panel-warning">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-television fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <h3 style="color: rgb(255, 255, 255);">React Native</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-footer">
                                    <span class="pull-left">React Native</span>
                                    <div class="clearfix text-right">
                                        <a href="E-Books/React_Native/index.html">
                                            <i class="fa fa-arrow-right fa-2x" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4">
                            <!-- ***** Java ******* -->
                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fab fa-java fa-5x"></i>
                                            <!-- <i class="fa fa-coffee fa-5x"></i> -->
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <h3 style="color: rgb(255, 255, 255);">Java</h3>
                                        </div>

                                    </div>
                                </div>
                                <div class="panel-footer">
                                    <span class="pull-left">Java</span>
                                    <div class="clearfix text-right">
                                        <a href="E-Books/Java/_book/index.html">
                                            <i class="fa fa-arrow-right fa-2x" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <!-- ***** Laravel ******* -->
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fab fa-laravel fa-5x"></i>
                                            <!-- <i class="fa fa-terminal fa-5x"></i> -->
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <h3 style="color: rgb(255, 255, 255);">Laravel</h3>
                                        </div>

                                    </div>
                                </div>
                                <div class="panel-footer">
                                    <span class="pull-left">Laravel</span>
                                    <div class="clearfix text-right">
                                        <a href="E-Books/Laravel/_book/index.html">
                                            <i class="fa fa-arrow-right fa-2x" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <!-- ***** AI ******* -->
                            <div class="panel panel-danger">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-university fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <h3 style="color: rgb(255, 255, 255);">AI</h3>
                                        </div>

                                    </div>
                                </div>
                                <div class="panel-footer">
                                    <span class="pull-left">Artificial Intelligence</span>
                                    <div class="clearfix text-right">
                                        <a href="E-Books/AI/_book/index.html">
                                            <i class="fa fa-arrow-right fa-2x" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- *********************  App Tutorial **************************************-->
                <div id="AppTutorial" class="tab-pane fade">
                    <h3>APP Tutorial</h3>
                    <div class="clt">
                        <ul>
                            <li>簡介 (0)
                                <ul>
                                    <li style="color: #0000ff;">Native (原生型) (00)
                                        <ul>
                                            <li>Android</li>
                                            <li>iOS</li>
                                        </ul>
                                    </li>
                                    <li style="color: #0000ff;">Cross Platform (跨平台) (01)
                                        <ul>
                                            <li style="color: #004d00;">HTML5 + CSS 3 + Bootstrap + Javascript + jQuery Mobile + Phone Gap (010)
                                                <ul>
                                                    <li>HTML5</li>
                                                    <li>CSS 3</li>
                                                    <li>Bootstrapt</li>
                                                    <li>JS node</li>
                                                    <li>Javascript</li>
                                                    <li>jQuery Mobile</li>
                                                    <li>Phone Gap</li>
                                                </ul>
                                            </li>
                                            <li style="color: #004d00;">Unity</li>
                                            <li style="color: #004d00;">Cordova</li>
                                            <li style="color: #004d00;"><a href="courses/AppTutorial/011_Xamarin.php">Xamarin (MS Visual Studio)(011)</a>
                                                <ul>
                                                    <li>參考來源:
                                                        <ul>
                                                            <li><a href="">ss</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>Android APP (1)
                                <ul>
                                    <li style="color: #0000ff;">Development Environment (開發環境) (10)</li>
                                    <li style="color: #0000ff;">Self study material (Video) (11)
                                        <ul>
                                            <li><a href=""></a></li>
                                        </ul>
                                    </li>
                                    <li style="color: #0000ff;">Self study exercises (練習題) (12)
                                        <ul>
                                            <li style="color: #004d00;">1. 點擊次數統計</li>
                                            <li style="color: #004d00;">2. 兩數四則運算</li>
                                            <li style="color: #004d00;">3. 小算盤</li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>iOS APP (2)
                                <ul>
                                    <li style="color: #0000ff;">Development Environment (開發環境)</li>
                                    <li style="color: #0000ff;">Self study material (Video)</li>
                                    <li style="color: #0000ff;">Self study exercises (練習題)</li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <h4><a href="courses/AppTutorial/999_appTutorial.php">學習的備忘錄</a></h4>
                </div>
            </div>
        </div>
        <?php footering(0); ?>
        <script src="../showTime.js"></script>
</body>

</html>