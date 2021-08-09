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
                    <h3>99學年暑期進修</h3>
                    <h3>上課時間：週二 08:00~12:00, 13:00~17:00)</h3>
                    <h3>彰化平和國小</h3>
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
                            <td width="100">2011/07/15</td>
                            <td width="300"><a href="courses/993_OS/os.png">Xmind</a></td>
                            <td width="150"></td>
                        </tr>
                        <tr align=center>
                            <td width="100">2011/07/25</td>
                            <td width="300">期中考<br/>
                            	日期：2011/08/02<br />
                            	時間：9:00~11:00 AM</td>
                            <td width="150"></td>
                        </tr>
                        <tr align=center>
                            <td width="100">2011/07/25</td>
                            <td width="300"><a href="courses/993_OS/Final_Report.pdf">期末報告</a><br/>
                            	日期：2011/08/15<br />
                            	時間：8:00~17:00 </td>
                            <td width="150"></td>
                        </tr>
                        <tr align=center>
                            <td width="100">2011/08/08</td>
                            <td width="300"><a href="courses/993_OS/report_list.pdf">期末報告列表</a></td>
                            <td width="150"></td>
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
                            <td align="center">2011/07/04</td>
                            <td><a href="courses/993_OS/ppt/00_Syllabus.pdf">課程介紹 (Syllabus)</a></td>
                        </tr>
                        <tr>
                            <td align="center">2.</td>
                            <td align="center">2011/07/04</td>
                            <td><a href="courses/993_OS/ppt/01_Introduction.pdf">簡介 (Introduction)</a></td>
                        </tr>
                        <tr>
                            <td align="center">3.</td>
                            <td align="center">2011/07/15</td>
                            <td><a href="courses/993_OS/ppt/02_Hardware.pdf">硬體 (Hardware)</a></td>
                        </tr>
                        <tr>
                            <td align="center">4.</td>
                            <td align="center">2011/07/15</td>
                            <td><a href="courses/993_OS/ppt/03_SystemStructure.pdf">作業系統架構 (OS Structure)</a></td>
                        </tr>
                        <tr>
                            <td align="center">5.</td>
                            <td align="center">2011/07/15</td>
                            <td><a href="courses/993_OS/ppt/04_Process.pdf">行程 (Process)</a></td>
                        </tr>
                        <tr>
                            <td align="center">6.</td>
                            <td align="center">2011/07/15</td>
                            <td><a href="courses/993_OS/ppt/05_Scheduler.pdf">排程</a> (Scheduling)</td>
                        </tr>
                        <tr>
                            <td align="center">7.</td>
                            <td align="center">2011/07/15</td>
                            <td><a href="courses/993_OS/ppt/06_SynDeadLock.pdf">同步與死結 (Synchronization and Deadlock)</a></td>
                        </tr>
                        <tr>
                            <td align="center">8.</td>
                            <td align="center">2011/08/10</td>
                            <td><a href="courses/993_OS/ppt/07_Memory_Management.pdf">記憶體管理</a>(Memory Management)</td>
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
                            <td width="60"">01</td>
                            <td width="220">2011/07/18</td>
                            <td width="60"><a href="courses/993_OS/hws/HW_01.pdf">作業1</a></td>
                            <td width="210"></td>
                        </tr>
                        <tr align="center">
                            <td width="60"">02</td>
                            <td width="220">2011/07/25</td>
                            <td width="60"><a href="courses/993_OS/hws/HW_02.pdf">作業2</a></td>
                            <td width="210"></td>
                        </tr>
                        <tr align="center">
                            <td width="60"">03</td>
                            <td width="220">2011/08/02</td>
                            <td width="60"><a href="courses/993_OS/hws/HW_03.pdf">作業3</a></td>
                            <td width="210"></td>
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
