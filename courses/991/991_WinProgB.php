<? //<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
include("calender.php");
include("mainMenu.php");
// 瀏覽人數計數器
session_start();
session_register("counted");
function MyCounter(){
    $fp = fopen("_counter", "r+");
    $counter = (int) fgets($fp);
    if(!isset($_SESSION["counted"])){
        $counter++;
        $_SESSION["counted"] = 0;
    }
    fseek($fp, 0);
    fputs($fp, $counter);
    fclose($fp);
    echo "<font color=blue>".$counter."</font>";
}
?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Jack's Web</title>
        <link rel="stylesheet" type="text/css" href="Jack_PHP.css" media="screen" />
        <script type="text/javascript" src="courseMenu.js"></script>
    </head>
    <body>
        <div id="wrap">
            <div id="header">
                <h1><a href="index.php">周永振</a></h1>
                <h2>Yung-Chen Chou</h2>
            </div>
            <div id="menu">
                <?php mainMenu(); ?>
            </div>
            <div id="content">
                <div class="left">
                    <script type="text/javascript" language="javascript">treeCreate();</script>
                </div>
                <div class="right">
                    <h1>視窗程式設計<br/>(Windows Programming)</h1>
                    <h3>99學年第一學期</h3>
                    <h3>上課時間：週四 234 (09:10~12:00)</h3>
                    <h3>上課地點：H103</h3>
                    <h2>教科書：</h2>
                    <ol>
                        <li>Visual C# 2008從零開始，資訊教育研究室，博碩文化出版社 (ISBN：9789862012604)</li>
                    </ol>
                    <h2>參考書：</h2>
                    <ol>
                        <li>VISUAL C# 2008程式設計範例教本，洪國勝，旗標出版份有限公司 (ISBN：9574426432)</li>
                    </ol>
                    <h2>公告</h2>
                    <table border=1 width="580">
                        <tr align=center>
                            <td>公告日期</td>
                            <td>內容</td>
                            <td>備註</td>
                        </tr>
                        <tr align=center>
                            <td>2010/09/23</td>
                            <td>作業請壓縮後寄給<font color="blue"><b>李宜錚助教</b></font>
                                (<a href="mailto:lec5335@gmail.com">lec5535@gmail.com</a>)</td>
                            <td><font color="red">寄信務必寫上<b>姓名</b>與<b>學號</b></font></td>
                        </tr>
                        <tr align=center>
                            <td>2010/09/30</td>
                            <td><font color="red"><b>作業不可抄襲，一旦查獲，不論主從一律 0 分。</b></font></td>
                            <td></td>
                        </tr>
                        <tr align=center>
                            <td>2010/11/08</td>
                            <td><font color="Blue"><b>期中考日期：2010/11/11<br/>
                                    地點：資訊大樓 I221<br/>
                                    時間：9:10~12:00<br />
                                    <font color="red">遲到超過30分不得進場</font></b></font></td>
                            <td></td>
                        </tr>
                        <tr align=center>
                            <td>2010/11/28</td>
                            <td><font color="green"><b>補救教學<br/>
                                    地點：H103<br/></b></font>
                                <font color="Red"><a href="courses/991_WinProgA/refresh_course_991WP.pdf">點我</a>
                                    </font>查看補救教學名單與時段</td>
                            <td></td>
                        </tr>
                        <tr align=center>
                            <td>2011/01/04</td>
                            <td><font color="Blue"><b>期末考日期：2011/01/13<br/>
                                    地點：資訊大樓 H416<br/>
                                    時間：9:10~12:00<br />
                                    <font color="red">遲到超過30分不得進場</font></b></font></td>
                            <td></td>
                        </tr>
                        <tr align=center>
                            <td>2011/01/04</td>
                            <td><font color="green"><a href="courses/991_WinProgB/MidExam_Result.pdf">期中考參考解答</a>
                                    </font></td>
                            <td></td>
                        </tr>
                        <tr align=center>
                            <td>2011/01/14</td>
                            <td><a href="courses/991_WinProgB/991_WinProgram2B_FinalScore.pdf">學期成績</a></td>
                            <td><b><font color="red">期末考成績複查至2011/1/19中午十二點</font></b></td>
                        </tr>
                    </table>
                    <h2>投影片</h2>
                    <table border ="1" width="580">
                        <tr align="center">
                            <td width="50">編號</td>
                            <td width="100">上傳日期</td>
                            <td width="330">名稱</td>
                            <td width="100">備註</td>
                        </tr>
                        <tr>
                            <td align="center">1.</td>
                            <td align="center">2010/09/14</td>
                            <td><a href="courses/991_WinProgB/ppt/00_Syllabus.pdf">課程介紹</a></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td align="center">2.</td>
                            <td align="center">2010/09/14</td>
                            <td><a href="courses/991_WinProgB/ppt/01_Introduction.pdf">簡介</a></td>
                            <td align="center"><a href="courses/991_WinProgB/Exercise_20100916.pdf">練習</a></td>
                        </tr>
                        <tr>
                            <td align="center">3.</td>
                            <td align="center">2010/09/22</td>
                            <td><a href="courses/991_WinProgB/ppt/02_DataType.pdf">資料型態</a></td>
                            <td align="center"><a href="courses/991_WinProgB/Exercise_20100923.pdf">練習</a></td>
                        </tr>
                        <tr>
                            <td align="center">4.</td>
                            <td align="center">2010/09/22</td>
                            <td><a href="courses/991_WinProgB/ppt/07_WinProg.pdf">視窗程式設計</a></td>
                            <td align="center"><a href="courses/991_WinProgB/Exercise_20100930.pdf">9/30練習</a></td>
                        </tr>
                        <tr>
                            <td align="center">5.</td>
                            <td align="center">2010/09/30</td>
                            <td><a href="courses/991_WinProgB/ppt/03_FlowControl.pdf">流程控制</a></td>
                            <td align="center"><a href="courses/991_WinProgB/Exercise_20101007.pdf">10/07練習</a></td>
                        </tr>
                        <tr>
                            <td align="center">6.</td>
                            <td align="center">2010/10/06</td>
                            <td><a href="courses/991_WinProgB/ppt/08_IOInterface.pdf">表單輸出入介面設計</a></td>
                            <td align="center"><a href="courses/991_WinProgB/Exercise_20101014.pdf">10/14練習</a></td>
                        </tr>
                        <tr>
                            <td align="center">7.</td>
                            <td align="center">2010/10/13</td>
                            <td><a href="courses/991_WinProgB/ppt/04_Array.pdf">陣列</a></td>
                            <td align="center"><a href="courses/991_WinProgB/Exercise_20101021.pdf">10/21練習</a></td>
                        </tr>
                        <tr>
                            <td align="center">8.</td>
                            <td align="center">2010/10/20</td>
                            <td><a href="courses/991_WinProgB/ppt/05_Method.pdf">方法</a></td>
                            <td align="center"><a href="courses/991_WinProgB/Exercise_20101028.pdf">10/28練習</a><br/>
                            <a href="courses/991_WinProgB/Exercise_20101104.pdf">11/04練習</a><br/>
                            <a href="courses/991_WinProgB/Exercise_20101118.pdf">11/18練習</a><br/>
                            <a href="courses/991_WinProgB/Exercise_20101125.pdf">11/25練習</a><br/>
                            <a href="courses/991_WinProgB/Exercise_20101202.pdf">12/02練習</a><br/>
                            <a href="courses/991_WinProgB/Exercise_20101209.pdf">12/09練習</a></td>
                        </tr>
                        <tr>
                            <td align="center">9.</td>
                            <td align="center">2010/12/16</td>
                            <td><a href="courses/991_WinProgB/ppt/06_Object.pdf">物件與類別</a></td>
                            <td align="center"><a href="courses/991_WinProgB/Exercise_20101216.pdf">12/16練習</a></td>
                        </tr>
                        <tr>
                            <td align="center">10.</td>
                            <td align="center">2010/12/15</td>
                            <td><a href="courses/991_WinProgB/ppt/10_commonComponent2.pdf">常用控制項(二)</a></td>
                            <td align="center"></td>
                        </tr>
                        <tr>
                            <td align="center">11.</td>
                            <td align="center">2010/12/15</td>
                            <td><a href="courses/991_WinProgB/ppt/12_DialogMenuBar.pdf">對話方塊與功能表控制項</a></td>
                            <td align="center"></td>
                        </tr>
                        <tr>
                            <td align="center">12.</td>
                            <td align="center">2010/12/15</td>
                            <td><a href="courses/991_WinProgB/ppt/11_EventHandle.pdf">視窗事件處理技巧</a></td>
                            <td align="center"><a href="courses/991_WinProgB/Exercise_20101223.pdf">12/23練習</a><br/>
                                <img src="courses/991_WinProgB/hws/down.gif"/><br/>
                                <img src="courses/991_WinProgB/hws/up.gif"/><br/>
                                <img src="courses/991_WinProgB/hws/left.gif"/><br/>
                                <img src="courses/991_WinProgB/hws/right.gif"/>
                            </td>
                        </tr>
                        <tr>
                            <td align="center">13.</td>
                            <td align="center">2010/12/30</td>
                            <td><a href="courses/991_WinProgB/ppt/09_commonComponent1.pdf">常用控制項(一)</a></td>
                            <td align="center"><a href="courses/991_WinProgB/Exercise_20101230.pdf">12/30練習</a><br/>
                                <a href="courses/991_WinProgB/Images.zip">圖集</a>
                            </td>
                        </tr>
                        <tr>
                            <td align="center">14.</td>
                            <td align="center">2011/01/06</td>
                            <td><a href="courses/991_WinProgB/ppt/13_Drawing.pdf">繪圖與多媒體</a></td>
                            <td align="center"><a href="courses/991_WinProgB/Exercise_20110106.pdf">01/06練習</a></td>
                        </tr>
                    </table>
                    <h2>作業</h2>
                    <table border="1" width="580">
                        <tr align="center">
                            <td width="50">編號</td>
                            <td width="280">作業</td>
                            <td width="200">繳交期限</td>
                            <td width="50">成績</td>
                        </tr>
                        <tr align="center">
                            <td>1.</td>
                            <td><a href="courses/991_WinProgB/hws/hw01.pdf">簡易數字顯示器</a></td>
                            <td>2010/09/29 中午12:00前</td>
                            <td><a href="http://120.108.114.248/csharpB/">成績</a></td>
                        </tr>
                        <tr align="center">
                            <td>2.</td>
                            <td><a href="courses/991_WinProgB/hws/hw02.pdf">閏年判斷</a></td>
                            <td>2010/10/06 中午12:00前</td>
                            <td></td>
                        </tr>
                        <tr align="center">
                            <td>3.</td>
                            <td><a href="courses/991_WinProgB/hws/hw03.pdf">小算盤</a></td>
                            <td>2010/10/13 中午12:00前</td>
                            <td></td>
                        </tr>
                        <tr align="center">
                            <td>4.</td>
                            <td><a href="courses/991_WinProgB/hws/hw04.pdf">井字遊戲</a></td>
                            <td>2010/10/20 中午12:00前</td>
                            <td></td>
                        </tr>
                        <tr align="center">
                            <td>5.</td>
                            <td><a href="courses/991_WinProgB/hws/hw05.pdf">簡易圖片顯示器</a></td>
                            <td>2010/10/27 中午12:00前</td>
                            <td></td>
                        </tr>
                        <tr align="center">
                            <td>6.</td>
                            <td><a href="courses/991_WinProgB/hws/hw06.pdf">碼錶</a></td>
                            <td>2010/11/03 中午12:00前</td>
                            <td></td>
                        </tr>
                        <tr align="center">
                            <td>7.</td>
                            <td><a href="courses/991_WinProgB/hws/hw07.pdf">凱撒加解密系統</a></td>
                            <td>2010/11/24 中午12:00前</td>
                            <td></td>
                        </tr>
                        <tr align="center">
                            <td>8.</td>
                            <td><a href="courses/991_WinProgB/hws/hw08.pdf">猜數字遊戲</a></td>
                            <td>2010/12/01 中午12:00前</td>
                            <td></td>
                        </tr>
                        <tr align="center">
                            <td>9.</td>
                            <td><a href="courses/991_WinProgB/hws/hw09.pdf">佈景主題設定</a></td>
                            <td>2010/12/08 中午12:00前</td>
                            <td></td>
                        </tr>
                        <tr align="center">
                            <td>10.</td>
                            <td><a href="courses/991_WinProgB/hws/hw10.pdf">迴圈練習</a></td>
                            <td>2010/12/15 中午12:00前</td>
                            <td></td>
                        </tr>
                        <tr align="center">
                            <td>11.</td>
                            <td><a href="courses/991_WinProgB/hws/hw11.pdf">簡易筆記本</a></td>
                            <td>2010/12/22 中午12:00前</td>
                            <td></td>
                        </tr>
                        <tr align="center">
                            <td>12.</td>
                            <td><a href="courses/991_WinProgB/hws/hw12.pdf">老鼠走迷宮</a></td>
                            <td>2010/12/29 中午12:00前</td>
                            <td><a href="courses/991_WinProgB/hws/map.png">地圖</a></td>
                        </tr>
                        <tr align="center">
                            <td>13.</td>
                            <td><a href="courses/991_WinProgB/hws/hw13.pdf">紙上作業</a></td>
                            <td>2011/01/06 上課時</td>
                            <td></td>
                        </tr>
                    </table>
                </div>
                <div style="clear: both;"></div>
            </div>
        </div>
        <center>
            <p>您是自2010年5月以來 第  <? MyCounter();?> 位 參觀本站的訪客</p>
            <p>現在時間： <script type type ="text/javascript" src="showTime.js"></script></p>
        </center>
    </body>
</html>
