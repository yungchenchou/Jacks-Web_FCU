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
                    <h3>上課時間：週五 456 (11:10~15:00)</h3>
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
                    <table border=1  width="550">
                        <tr align=center>
                            <td>公告日期</td>
                            <td>內容</td>
                            <td>備註</td>
                        </tr>
                        <tr align=center>
                            <td>2010/09/24</td>
                            <td>作業繳交給助教 <font color="green"><b>張閎翰</b></font><a href="mailto:sicachang@gmail.com">sicachang@gmail.com</a></td>
                            <td><font color="red">寄信時務必註明<b>學號</b>與<b>姓名</b></font></td>
                        </tr>
                        <tr align=center>
                            <td>2010/11/08</td>
                            <td><font color="Blue"><b>期中考日期：2010/11/12<br/>
                                    地點：資訊大樓 H113<br/>
                                    時間：11:10~14:00<br />
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
                            <td><font color="Blue"><b>期末考日期：2011/01/14<br/>
                                    地點：資訊大樓 H113<br/>
                                    時間：11:10~14:00<br />
                                    <font color="red">遲到超過30分不得進場</font></b></font></td>
                            <td></td>
                        </tr>
                        <tr align=center>
                            <td>2011/01/04</td>
                            <td><font color="green"><a href="courses/991_WinProgA/MidExam_Sol.pdf">期中考參考解答</a>
                                    </font></td>
                            <td></td>
                        </tr>
                        <tr align=center>
                            <td>2011/01/17</td>
                            <td><a href="courses/991_WinProgA/991_WinProgram2A_Final_Score.pdf">學期成績</a></td>
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
                            <td><a href="courses/991_WinProgA/ppt/00_Syllabus.pdf">課程介紹</a></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td align="center">2.</td>
                            <td align="center">2010/09/14</td>
                            <td><a href="courses/991_WinProgA/ppt/01_Introduction.pdf">簡介</a></td>
                            <td align="center"><a href="courses/991_WinProgA/Exercise_20100917.pdf">練習</a></td>
                        </tr>
                        <tr>
                            <td align="center">3.</td>
                            <td align="center">2010/09/23</td>
                            <td><a href="courses/991_WinProgA/ppt/02_DataType.pdf">資料型態</a></td>
                            <td align="center"><a href="courses/991_WinProgA/Exercise_20100924.pdf">練習</a></td>
                        </tr>
                        <tr>
                            <td align="center">4.</td>
                            <td align="center">2010/09/23</td>
                            <td><a href="courses/991_WinProgA/ppt/07_WinProg.pdf">視窗程式設計</a></td>
                            <td align="center"><a href="courses/991_WinProgA/Exercise_20101001.pdf">10/1練習</a></td>
                        </tr>
                        <tr>
                            <td align="center">5.</td>
                            <td align="center">2010/10/01</td>
                            <td><a href="courses/991_WinProgA/ppt/03_FlowControl.pdf">流程控制</a></td>
                            <td align="center"><a href="courses/991_WinProgA/Exercise_20101008.pdf">10/08練習</a></td>
                        </tr>
                        <tr>
                            <td align="center">6.</td>
                            <td align="center">2010/10/07</td>
                            <td><a href="courses/991_WinProgA/ppt/08_IOInterface.pdf">表單輸出入介面</a></td>
                            <td align="center"><a href="courses/991_WinProgA/Exercise_20101015.pdf">10/15練習</a></td>
                        </tr>
                        <tr>
                            <td align="center">7.</td>
                            <td align="center">2010/10/14</td>
                            <td><a href="courses/991_WinProgA/ppt/04_Array.pdf">陣列</a></td>
                            <td align="center"><a href="courses/991_WinProgA/Exercise_20101022.pdf">10/22練習</a></td>
                        </tr>
                        <tr>
                            <td align="center">8.</td>
                            <td align="center">2010/10/21</td>
                            <td><a href="courses/991_WinProgA/ppt/05_Method.pdf">方法</a></td>
                            <td align="center"><a href="courses/991_WinProgA/Exercise_20101029.pdf">10/29練習</a><br/>
                            <a href="courses/991_WinProgA/Exercise_20101105.pdf">11/05練習</a><br/>
                            <a href="courses/991_WinProgA/Exercise_20101119.pdf">11/19練習</a><br/>
                            <a href="courses/991_WinProgA/Exercise_20101126.pdf">11/26練習</a><br/>
                            <a href="courses/991_WinProgA/Exercise_20101203.pdf">12/03練習</a></td>
                        </tr>
                        <tr>
                            <td align="center">9.</td>
                            <td align="center">2010/12/16</td>
                            <td><a href="courses/991_WinProgA/ppt/06_Object.pdf">物件與類別</a></td>
                            <td align="center"><a href="courses/991_WinProgA/Exercise_20101217.pdf">12/17練習</a></td>
                        </tr>
                        <tr>
                            <td align="center">10.</td>
                            <td align="center">2010/12/15</td>
                            <td><a href="courses/991_WinProgA/ppt/10_commonComponent2.pdf">常用控制項(二)</a></td>
                            <td align="center"></td>
                        </tr>
                        <tr>
                            <td align="center">11.</td>
                            <td align="center">2010/12/15</td>
                            <td><a href="courses/991_WinProgA/ppt/12_DialogMenuBar.pdf">對話方塊與功能表控制項</a></td>
                            <td align="center"></td>
                        </tr>
                        <tr>
                            <td align="center">12.</td>
                            <td align="center">2010/12/24</td>
                            <td><a href="courses/991_WinProgA/ppt/11_EventHandle.pdf">視窗事件處理技巧</a></td>
                            <td align="center"><a href="courses/991_WinProgA/Exercise_20101224.pdf">12/24練習</a><br/>
                                <img src="courses/991_WinProgA/hws/down.gif"/><br/>
                                <img src="courses/991_WinProgA/hws/up.gif"/><br/>
                                <img src="courses/991_WinProgA/hws/left.gif"/><br/>
                                <img src="courses/991_WinProgA/hws/right.gif"/>
                            </td>
                        </tr>
                        <tr>
                            <td align="center">13.</td>
                            <td align="center">2010/12/31</td>
                            <td><a href="courses/991_WinProgA/ppt/09_commonComponent1.pdf">常用控制項(一)</a></td>
                            <td align="center"><a href="courses/991_WinProgA/Exercise_20101231.pdf">12/31練習</a><br/>
                                <a href="courses/991_WinProgA/Images.zip">圖集</a>
                            </td>
                        </tr>
                        <tr>
                            <td align="center">14.</td>
                            <td align="center">2011/01/06</td>
                            <td><a href="courses/991_WinProgA/ppt/13_Drawing.pdf">繪圖與多媒體</a></td>
                            <td align="center"><a href="courses/991_WinProgA/Exercise_20110107.pdf">01/07練習</a></td>
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
                        <tr>
                            <td align="center">1.</td>
                            <td><a href="courses/991_WinProgA/hws/hwA01.pdf">簡易數字顯示</a></td>
                            <td>2010/09/30 中午 12:00 前</td>
                            <td><a href="http://120.108.114.248/csharpA/">成績</a></td>
                        </tr>
                        <tr>
                            <td align="center">2.</td>
                            <td><a href="courses/991_WinProgA/hws/hwA02.pdf">閏年判斷</a></td>
                            <td>2010/10/07 中午 12:00 前</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td align="center">3.</td>
                            <td><a href="courses/991_WinProgA/hws/hwA03.pdf">小算盤</a></td>
                            <td>2010/10/14 中午 12:00 前</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td align="center">4.</td>
                            <td><a href="courses/991_WinProgA/hws/hwA04.pdf">井字游戲</a></td>
                            <td>2010/10/21 中午 12:00 前</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td align="center">5.</td>
                            <td><a href="courses/991_WinProgA/hws/hwA05.pdf">簡易圖片顯示器</a></td>
                            <td>2010/10/28 中午 12:00 前</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td align="center">6.</td>
                            <td><a href="courses/991_WinProgA/hws/hwA06.pdf">碼錶</a></td>
                            <td>2010/11/04 中午 12:00 前</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td align="center">7.</td>
                            <td><a href="courses/991_WinProgA/hws/hwA07.pdf">凱撒加解密系統</a></td>
                            <td>2010/11/25 中午 12:00 前</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td align="center">8.</td>
                            <td><a href="courses/991_WinProgA/hws/hwA08.pdf">猜數字遊戲</a></td>
                            <td>2010/12/02 中午12:00前</td>
                            <td></td>
                        </tr>
                        <tr align="center">
                            <td>9.</td>
                            <td><a href="courses/991_WinProgA/hws/hwA09.pdf">佈景主題設定</a></td>
                            <td>2010/12/09 中午12:00前</td>
                            <td></td>
                        </tr>
                        <tr align="center">
                            <td>10.</td>
                            <td><a href="courses/991_WinProgA/hws/hwA10.pdf">迴圈練習</a></td>
                            <td>2010/12/16 中午12:00前</td>
                            <td></td>
                        </tr>
                        <tr align="center">
                            <td>11.</td>
                            <td><a href="courses/991_WinProgA/hws/hwA11.pdf">簡易筆記本</a></td>
                            <td>2010/12/23 中午12:00前</td>
                            <td></td>
                        </tr>
                        <tr align="center">
                            <td>12.</td>
                            <td><a href="courses/991_WinProgA/hws/hwA12.pdf">老鼠走迷宮</a></td>
                            <td>2010/12/30 中午12:00前</td>
                            <td><a href="courses/991_WinProgA/hws/map.png">地圖</a></td>
                        </tr>
                        <tr align="center">
                            <td>13.</td>
                            <td><a href="courses/991_WinProgA/hws/hwA13.pdf">紙上作業</a></td>
                            <td>2011/01/07 上課時</td>
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