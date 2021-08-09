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
                    <script language="javascript" type="text/javascript">treeCreate();</script>
                </div>
                <div class="right">
                    <h1>作業系統 <br/>(Operating Systems)</h1>
                    <h3>99學年第一學期</h3>
                    <h3>上課時間：週二 BCD (19:25~22:00)</h3>
                    <h3>上課地點：M 512</h3>
                    <h2>教科書：</h2>
                    <ol>
                        <li>作業系統 Operating System，薛智文，旗標出版股份有限公司 ISBN: 9577179061</li>
                    </ol>
                    <h2>參考書 (Text Book)：</h2>
                    <ol>
                        <li>Peter B. Galvin, Greg Gagne, Operating System Concepts (8th Edition),
                            Abraham Silberschatz, WILEY, ISBN: 9780470233993 (東華代理)</li>
                    </ol>
                    <h2>公告 (Notice)</h2>
                    <table border=1 width="550">
                        <tr align=center>
                            <td width="100">公告日期</td>
                            <td width="300">內容</td>
                            <td width="150">備註</td>
                        </tr>
                        <tr align=center>
                            <td width="100">2010/11/16</td>
                            <td width="300"><a href="courses/991_OS/MidExam_Results.pdf">期中考參考解答</a></td>
                            <td width="150">-</td>
                        </tr>
                        <tr align=center>
                            <td width="100">2011/01/04</td>
                            <td width="300"><b><font color="red">期末考日期：2011/01/11<br/>
                                地點：I107<br/>
                                時間：18:30~21:30</font></b>
                            </td>
                            <td width="150">-</td>
                        </tr>
                        <tr align=center>
                            <td width="100">2011/01/04</td>
                            <td width="300"><a href="courses/991_OS/OS_20100529.pdf">參考資料</a>(檔案很大，請按右鍵下載)</td>
                            <td width="150">-</td>
                        </tr>
                        <tr align=center>
                            <td width="100">2011/01/12</td>
                            <td width="300"><a href="courses/991_OS/FinalScore.pdf">學期成績</a></td>
                            <td width="150"><font color="red"><b>期末考成績複查至2011/1/14止</b></font></td>
                        </tr>
                    </table>
                    <h2>投影片 (PPT Slide)</h2>
                    <table border ="1" width="550">
                        <tr align="center">
                            <td width="50">編號</td>
                            <td width="100">上傳日期</td>
                            <td width="400">名稱</td>
                        </tr>
                        <tr>
                            <td align="center">1.</td>
                            <td align="center">2010/09/14</td>
                            <td><a href="courses/991_OS/ppt/00_Syllabus.pdf">課程介紹 (Syllabus)</a></td>
                        </tr>
                        <tr>
                            <td align="center">2.</td>
                            <td align="center">2010/09/14</td>
                            <td><a href="courses/991_OS/ppt/01_Introduction.pdf">簡介 (Introduction)</a></td>
                        </tr>
                        <tr>
                            <td align="center">3.</td>
                            <td align="center">2010/09/21</td>
                            <td><a href="courses/991_OS/ppt/02_Hardware.pdf">電腦硬體 (Computer Hardware)</a></td>
                        </tr>
                        <tr>
                            <td align="center">4.</td>
                            <td align="center">2010/09/21</td>
                            <td><a href="courses/991_OS/ppt/03_SystemStructure.pdf">作業系統架構 (OS Structure)</a></td>
                        </tr>
                        <tr>
                            <td align="center">5.</td>
                            <td align="center">2010/10/04</td>
                            <td><a href="courses/991_OS/ppt/04_Process.pdf">行程 (Processes)</a></td>
                        </tr>
                        <tr>
                            <td align="center">6.</td>
                            <td align="center">2010/10/19</td>
                            <td><a href="courses/991_OS/ppt/05_Scheduler.pdf">排程 (Scheduler)</a></td>
                        </tr>
                        <tr>
                            <td align="center">7.</td>
                            <td align="center">2010/11/02</td>
                            <td><a href="courses/991_OS/ppt/06_SynDeadLock.pdf">同步與死結 (Synchronization and Deadlock)</a></td>
                        </tr>
                        <tr>
                            <td align="center">8.</td>
                            <td align="center">2010/11/23</td>
                            <td><a href="courses/991_OS/ppt/08_MemoryManagement.pdf">記憶體管理 (Memory Management)</a></td>
                        </tr>
                        <tr>
                            <td align="center">9.</td>
                            <td align="center">2010/12/21</td>
                            <td><a href="courses/991_OS/ppt/09_VirtualMemory.pdf">虛擬記憶體 (Virtual Memory)</a></td>
                        </tr>
                        <tr>
                            <td align="center">10.</td>
                            <td align="center">2010/12/21</td>
                            <td><a href="courses/991_OS/ppt/11_FileSystems.pdf">檔案系統簡介 (File Systems)</a></td>
                        </tr>
                    </table>
                    <h2>作業 (Homeworks)</h2>
                    <table border="1" width="550">
                        <tr align="center">
                            <td width="60"">項目</td>
                            <td width="220">繳交期限</td>
                            <td width="60">成績</td>
                            <td width="210">備註</td>
                        </tr>
                        <tr align="center">
                            <td><a href="courses/991_OS/hws/hw01.pdf">作業1</a></td>
                            <td>2010/09/19 晚上十二點之前 </td>
                            <td><a href="courses/991_OS/hws/hw01_score.pdf">成績</a></td>
                            <td></td>
                        </tr>
                        <tr align="center">
                            <td><a href="courses/991_OS/hws/hw02.pdf">作業2</a></td>
                            <td>2010/09/26 晚上十二點之前 </td>
                            <td><a href="courses/991_OS/hws/hw02_score.pdf">成績</a></td>
                            <td></td>
                        </tr>
                        <tr align="center">
                            <td><a href="courses/991_OS/hws/hw03.pdf">作業3</a></td>
                            <td>2010/10/04 中午十二點之前 </td>
                            <td><a href="courses/991_OS/hws/hw03_score.pdf">成績</a></td>
                            <td></td>
                        </tr>
                        <tr align="center">
                            <td><a href="courses/991_OS/hws/hw04.pdf">作業4</a></td>
                            <td>2010/10/18 中午十二點之前 </td>
                            <td><a href="courses/991_OS/hws/hw04_score.pdf">成績</a></td>
                            <td></td>
                        </tr>
                        <tr align="center">
                            <td><a href="courses/991_OS/hws/hw05.pdf">作業5</a></td>
                            <td>2010/11/29 中午十二點之前 </td>
                            <td><a href="courses/991_OS/hws/hw05_score.pdf">成績</a></td>
                            <td></td>
                        </tr>
                    </table>
                    <h2>小考</h2>
                    <table border="1" width="550">
                        <tr align="center">
                            <td width="50">編號</td>
                            <td width="160">日期</td>
                            <td width="60">成績</td>
                            <td width="280">備註</td>
                        </tr>
                        <tr align="center">
                            <td>1.</td>
                            <td><a href="courses/991_OS/quiz/quiz_20100921.pdf">2010/09/21</a></td>
                            <td><a href="courses/991_OS/quiz/quiz_score_20100921.pdf">成績</a></td>
                            <td></td>
                        </tr>
                        <tr align="center">
                            <td>2.</td>
                            <td><a href="courses/991_OS/quiz/quiz_20100928.pdf">2010/09/28</a></td>
                            <td><a href="courses/991_OS/quiz/quiz_score_20100928.pdf">成績</a></td>
                            <td></td>
                        </tr>
                        <tr align="center">
                            <td>3.</td>
                            <td><a href="courses/991_OS/quiz/quiz_20101005.pdf">2010/10/05</a></td>
                            <td><a href="courses/991_OS/quiz/quiz_score_20101005.pdf">成績</a></td>
                            <td></td>
                        </tr>
                        <tr align="center">
                            <td>4.</td>
                            <td><a href="courses/991_OS/quiz/quiz_20101012.pdf">2010/10/12</a></td>
                            <td><a href="courses/991_OS/quiz/quiz_score_20101012.pdf">成績</a></td>
                            <td></td>
                        </tr>
                        <tr align="center">
                            <td>5.</td>
                            <td><a href="courses/991_OS/quiz/quiz_20101019.pdf">2010/10/19</a></td>
                            <td><a href="courses/991_OS/quiz/quiz_score_20101019.pdf">成績</a></td>
                            <td></td>
                        </tr>
                        <tr align="center">
                            <td>6.</td>
                            <td><a href="courses/991_OS/quiz/quiz_20101102.pdf">2010/11/02</a></td>
                            <td><a href="courses/991_OS/quiz/quiz_score_20101102.pdf">成績</a></td>
                            <td></td>
                        </tr>
                        <tr align="center">
                            <td>7.</td>
                            <td><a href="courses/991_OS/quiz/quiz_20101123.pdf">2010/11/23</a></td>
                            <td><a href="courses/991_OS/quiz/quiz_score_20101123.pdf">成績</a></td>
                            <td></td>
                        </tr>
                        <tr align="center">
                            <td>8.</td>
                            <td><a href="courses/991_OS/quiz/quiz_20101130.pdf">2010/11/30</a></td>
                            <td><a href="courses/991_OS/quiz/quiz_score_20101130.pdf">成績</a></td>
                            <td></td>
                        </tr>
                        <tr align="center">
                            <td>9.</td>
                            <td><a href="courses/991_OS/quiz/quiz_20101207.pdf">2010/12/07</a></td>
                            <td><a href="courses/991_OS/quiz/quiz_score_20101207.pdf">成績</a></td>
                            <td></td>
                        </tr>
                        <tr align="center">
                            <td>10.</td>
                            <td><a href="courses/991_OS/quiz/quiz_20101221.pdf">2010/12/21</a></td>
                            <td><a href="courses/991_OS/quiz/quiz_score_20101221.pdf">成績</a></td>
                            <td></td>
                        </tr>
                        <tr align="center">
                            <td>11.</td>
                            <td><a href="courses/991_OS/quiz/quiz_20101228.pdf">2010/12/28</a></td>
                            <td><a href="courses/991_OS/quiz/quiz_score_20101228.pdf">成績</a></td>
                            <td></td>
                        </tr>
                        <tr align="center">
                            <td>12.</td>
                            <td><a href="courses/991_OS/quiz/quiz_20110104.pdf">2011/01/04</a></td>
                            <td><a href="courses/991_OS/quiz/quiz_score_20110104.pdf">成績</a></td>
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