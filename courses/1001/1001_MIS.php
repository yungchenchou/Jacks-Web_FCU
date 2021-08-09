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
                    <h1>管理資訊系統<br/>(Management Information Systems)</h1>
                    <h3>100學年 第一學期 (經管3A)</h3>
                    <h3>上課時間：週三 234 (09:10~12:00)</h3>
                    <h3>上課地點：I117</h3>
                    <h2>教科書：</h2>
                    <ol>
                        <li>資訊管理概論 Web 2.0思維 (第二版)，湯宗泰、劉文良著，旗標出版股份有限公司 (ISBN: 978-957-442-950-9)</li>
                    </ol>
                    <h2>參考書：</h2>
                    <ol>
                        <li>管理資訊系統，David M. Kroenke 著, 陳宇芬譯，何英治審閱，培生教育出版集團 (ISBN:978-986-154-663-6)</li>
                    </ol>
                    <h2>公告</h2>
                    <table border=1 width="580">
                        <tr align=center>
                            <td>公告日期</td>
                            <td>內容</td>
                            <td>備註</td>
                        </tr>
                        <tr align=center>
                            <td>2011/10/12</td>
                            <td><a href="courses/1001_MIS/Xmind.zip">XMind 筆記</a></td>
                            <td width="150"><a href="http://www.xmind.net/downloads/">軟體下載</a><br>
                            	<a href="http://actsmind.com/blog/">介紹</a><br>
                            	<a href="http://120.115.11.4/course/xmind/">錄影教學(安南國中李蕙珍老師)</a></td>
                        </tr>
                        <tr align=center>
                            <td>2011/11/01</td>
                            <td><font color=red><b>期中考</b></font><br/>
                                <font color=red><b>遲到三十分鐘不得入場!!</b></font></td>
                            <td width="150">日期: 2011/11/09 上午 9:10~12:00 <br/>
                                地點: I117</td>
                        </tr>
                        <tr align=center>
                            <td>2011/11/15</td>
                            <td><a href="courses/1001_MIS/rescu.pdf">補救教學</a></td>
                            <td width="150"></td>
                        </tr>
                        <tr align=center>
                            <td>2012/01/07</td>
                            <td><a href="courses/1001_MIS/tutorial/tutorial_final_new.pdf">2011/01/04考前抓題</a></td>
                            <td width="150"></td>
                        </tr>
                        <tr align=center>
                            <td>2012/01/13</td>
                            <td><a href="courses/1001_MIS/final_Score.pdf">學期成績</a></td>
                            <td width="150"><font color=red>期末考卷複查至1/17日下午16:00前，欲複查者請先E-mail聯絡!</font></td>
                        </tr>
                    </table>
                    
                    <!------------------------   ppts      ------------------------------------>
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
                            <td align="center">2011/08/31</td>
                            <td><a href="courses/1001_MIS/ppt/00_Syllabus.pdf">課程介紹</a></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td align="center">2.</td>
                            <td align="center">2011/09/27</td>
                            <td><a href="courses/1001_MIS/ppt/01_Introduction.pdf">第一章_資訊管理導論</a></td>
                            <td><a href="courses/1001_MIS/ppt/Ref_01.pdf">參考_01</a></td>
                        </tr>
                        <tr>
                            <td align="center">3.</td>
                            <td align="center">2011/09/27</td>
                            <td><a href="courses/1001_MIS/ppt/02_ApplicationSystems.pdf">第二章_資訊管理的應用系統</a></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td align="center">4.</td>
                            <td align="center">2011/11/15</td>
                            <td><a href="courses/1001_MIS/ppt/03_ECommance2EBusiness.pdf">第三章_從電子商務到電子商業</a></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td align="center">5.</td>
                            <td align="center">2011/11/22</td>
                            <td><a href="courses/1001_MIS/ppt/MIS_AI.pdf">人工智慧</a></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td align="center">6.</td>
                            <td align="center">2011/11/22</td>
                            <td><a href="courses/1001_MIS/ppt/MIS_ES.pdf">專家系統</a></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td align="center">7.</td>
                            <td align="center">2011/11/22</td>
                            <td><a href="courses/1001_MIS/ppt/MIS_DataWareHouse.pdf">資料倉儲</a></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td align="center">8.</td>
                            <td align="center">2011/11/22</td>
                            <td><a href="courses/1001_MIS/ppt/MIS_DataMining.pdf">資料探勘</a></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td align="center">9.</td>
                            <td align="center">2011/11/22</td>
                            <td><a href="courses/1001_MIS/ppt/MIS_GSS.pdf">群體決策</a></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td align="center">10.</td>
                            <td align="center">2011/12/13</td>
                            <td><a href="courses/1001_MIS/ppt/06_IM_KnowledgeManagement.pdf">第六章_資訊管理與知識管理--商業智慧</a></td>
                            <td></td>
                        </tr>
                    </table>

                    <h2>小考與補救教學</h2>
                    <table border="1" width="580">
                        <tr align="center">
                            <td width="50">日期</td>
                            <td width="280">小考</td>
                            <td width="200">補救教學</td>
                            <td width="50">備註</td>
                        </tr>
                        <tr align="center">
                            <td width="50">2011/11/30</td>
                            <td width="280"></td>
                            <td width="200"><a href="courses/1001_MIS/tutorial/tutorial_2011_11_30.pdf">補救</a></td>
                            <td width="50"></td>
                        </tr>
                        <tr align="center">
                            <td width="50">2011/12/07</td>
                            <td width="280"><a href="courses/1001_MIS/quiz/quiz_2011_12_07.pdf">小考</a>
                            	<a href="courses/1001_MIS/quiz/quizScore_2011_12_07.pdf">成績</a></td>
                            <td width="200"><a href="courses/1001_MIS/tutorial/tutorial_2011_12_07.pdf">補救</a></td>
                            <td width="50"></td>
                        </tr>
                        <tr align="center">
                            <td width="50">2011/12/14</td>
                            <td width="280"><a href="courses/1001_MIS/quiz/quiz_2011_12_14.pdf">小考</a>
                            	<a href="courses/1001_MIS/quiz/quizScore_2011_12_14.pdf">成績</a></td>
                            <td width="200"><a href="courses/1001_MIS/tutorial/tutorial_2011_12_14.pdf">補救</a></td>
                            <td width="50"></td>
                        </tr>
                        <tr align="center">
                            <td width="50">2011/12/21</td>
                            <td width="280"><a href="courses/1001_MIS/quiz/quiz_2011_12_21.pdf">小考</a>
                            	<a href="courses/1001_MIS/quiz/quizScore_2011_12_21.pdf">成績</a></td>
                            <td width="200"><a href="courses/1001_MIS/tutorial/tutorial_2011_12_21.pdf">補救</a></td>
                            <td width="50"></td>
                        </tr>
                        <tr align="center">
                            <td width="50">2011/12/28</td>
                            <td width="280"><a href="courses/1001_MIS/quiz/quiz_2011_12_28.pdf">小考</a>
                            	<a href="courses/1001_MIS/quiz/quizScore_2011_12_28.pdf">成績</a></td>
                            <td width="200"><a href="courses/1001_MIS/tutorial/tutorial_2011_12_28.pdf">補救</a></td>
                            <td width="50"></td>
                        </tr>
                        <tr align="center">
                            <td width="50">2012/01/04</td>
                            <td width="280"><a href="courses/1001_MIS/quiz/quiz_2012_01_04.pdf">小考</a>
                            	<a href="courses/1001_MIS/quiz/quizScore_2012_01_04.pdf">成績</a></td>
                            <td width="200"></td>
                            <td width="50"></td>
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
                            <td width="50">01</td>
                            <td width="280"><a href="courses/1001_MIS/hws/hw01.pdf">個案討論 PC Home 上市</a></td>
                            <td width="200">2011/10/04 中午十二點前</td>
                            <td width="50"><a href="courses/1001_MIS/hws/hw1_score.pdf">成績</a></td>
                        </tr>
                        <tr align="center">
                            <td width="50">02</td>
                            <td width="280"><a href="courses/1001_MIS/hws/hw02.pdf">電腦硬體介紹</a></td>
                            <td width="200">2011/10/25 中午十二點前</td>
                            <td width="50"><a href="courses/1001_MIS/hws/hw2_score.pdf">成績</a></td>
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
