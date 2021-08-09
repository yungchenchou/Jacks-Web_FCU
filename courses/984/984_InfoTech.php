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
                    <script language="javascript">treeCreate();</script>
                </div>
                <div class="right">
                    <h1>資訊與科技</h1>
                    <h3>98學年暑期進修</h3>
                    <h2>參考書目：</h2>
                    <ol>
                        <li>曾憲雄、呂克明、張榮吉、廖冠捷、劉光勝、陳興忠，資訊概論與應用，東華書局出版，ISBN: 9789574833979</li>
                        <li>陳惠貞，新世代計算機概論(第五版)，學貫出版社，ISBN:9789866800498</li>
                    </ol>
                    <h2>公告</h2>
		    <table border=1>
			<tr align=center>
			    <td>公告日期</td>
			    <td>內容</td>
			    <td>備註</td>
			<tr>
			<tr align=center>
			    <td>2010/08/26</td>
			    <td><font color=red><b>作業繳交(包括補交)最後期限是2010/08/29晚上十二點之前</b></font></td>
			    <td></td>
			</tr>
			<tr>
			    <td>2010/08/26</td>
			    <td>期末考日期：2010/09/01<br/>地點：行政大樓L007</td>
			    <td></td>
			</tr>
			<tr>
			    <td>2010/09/01</td>
			    <td><a href="courses/984_InfoTech/FinalScore.pdf">期末考成績</a></td>
			    <td><a href="courses/984_InfoTech/FinalExam_Solution.pdf">期末考參考解答</a></td>
			</tr>
		    </table>
                    <h2>投影片</h2>
                    <table border ="1">
                        <tr>
                            <td>編號</td>
                            <td>上傳日期</td>
                            <td>名稱</td>
                        </tr>
                        <tr>
                            <td align="center">1.</td>
                            <td>2010/08/02</td>
                            <td><a href="courses/984_InfoTech/InfoTechnique_01.pdf">課程介紹</a></td>
                        </tr>
                        <tr>
                            <td align="center">2.</td>
                            <td>2010/08/02</td>
                            <td><a href="courses/984_InfoTech/Ch01.pdf">資訊檢索</a></td>
                        </tr>
                       <tr>
                            <td align="center">3.</td>
                            <td>2010/08/02</td>
                            <td><a href="courses/984_InfoTech/002_hardware.pdf">電腦軟硬體簡介</a></td>
                        </tr>
                       <tr>
                            <td align="center">4.</td>
                            <td>2010/08/08</td>
                            <td><a href="courses/984_InfoTech/003_Network.pdf">網際網路</a></td>
                        </tr>
                       <tr>
                            <td align="center">5.</td>
                            <td>2010/08/18</td>
                            <td><a href="courses/984_InfoTech/004_EC.pdf">資訊倫理與社會</a></td>
                        </tr>
                        <tr>
                            <td align="center">6.</td>
                            <td>2010/08/25</td>
                            <td><a href="courses/984_InfoTech/005_Security.pdf">資訊安全</a></td>
                        </tr>
			<tr>
			    <td align="center">7.</td>
			    <td>2010/08/30</td>
			    <td><a href="courses/984_InfoTech/006_OS.pdf">作業系統</a></td>
			</tr>
			<tr>
			    <td align="center">8.</td>
			    <td>2010/08/30</td>
			    <td><a href="courses/984_InfoTech/007_NumberSystem.pdf">數字系統與資料表示法</a></td>
			</tr>
                    </table>
                    <h2>作業</h2>
                    <table border="1">
                        <tr>
                            <td>作業</td>
                            <td>繳交期限</td>
                            <td>成績</td>
                        </tr>
                        <tr>
                            <td><a href="courses/984_InfoTech/hws/hw01.pdf">作業1</a></td>
                            <td>2010/08/03 晚上十二點之前 </td>
                            <td><a href="courses/984_InfoTech/hws/score_hw1.pdf">成績</a></td>
                        </tr>
                        <tr>
                            <td><a href="courses/984_InfoTech/hws/hw02.pdf">作業2</a></td>
                            <td>2010/08/08 晚上十二點之前 </td>
                            <td><a href="courses/984_InfoTech/hws/score_hw2.pdf">成績</a></td>
                        </tr>
                        <tr>
                            <td><a href="courses/984_InfoTech/hws/hw03.pdf">作業3</a></td>
                            <td>2010/08/11 晚上十二點之前 </td>
                            <td><a href="courses/984_InfoTech/hws/score_hw3.pdf">成績</a></td>
                        </tr>
                        <tr>
                            <td><a href="courses/984_InfoTech/hws/hw04.pdf">作業4</a></td>
                            <td>2010/08/15 晚上十二點之前 </td>
                            <td><a href="courses/984_InfoTech/hws/score_hw4.pdf">成績</a></td>
                        </tr>
                        <tr>
                            <td><a href="courses/984_InfoTech/hws/hw05.pdf">作業5</a></td>
                            <td>2010/08/17 晚上十二點之前 </td>
                            <td><a href="courses/984_InfoTech/hws/score_hw5.pdf">成績</a></td>
                        </tr>
                        <tr>
                            <td><a href="courses/984_InfoTech/hws/hw06.pdf">作業6</a></td>
                            <td>2010/08/22 晚上十二點之前 </td>
                            <td><a href="courses/984_InfoTech/hws/score_hw6.pdf">成績</a></td>
                        </tr>
                        <tr>
                            <td><a href="courses/984_InfoTech/hws/hw07.pdf">作業7</a></td>
                            <td>2010/08/24 晚上十二點之前 </td>
                            <td><a href="courses/984_InfoTech/hws/score_hw7.pdf">成績</a></td>
                        </tr>
                        <tr>
                            <td><a href="courses/984_InfoTech/hws/hw08.ppt">作業8</a></td>
                            <td>2010/08/29 晚上十二點之前</td>
                            <td><a href="courses/984_InfoTech/hws/score_hw8.pdf">成績</a></td>
                        </tr>
                    </table>
                    <h2>小考</h2>
                    <table border="1">
                        <tr>
                            <td>日期</td>
                            <td>成績</td>
                        </tr>
                        <tr>
                            <td><a href="courses/984_InfoTech/quiz/quiz_result_20100804.pdf">2010/08/04</a></td>
                            <td><a href="courses/984_InfoTech/quiz/quiz_score_20100804.pdf">成績</a></td>
                        </tr>
                        <tr>
                            <td><a href="courses/984_InfoTech/quiz/quiz_result_20100809.pdf">2010/08/09</a></td>
                            <td><a href="courses/984_InfoTech/quiz/quiz_score_20100809.pdf">成績</a></td>
                        </tr>
                        <tr>
                            <td><a href="courses/984_InfoTech/quiz/quiz_result_20100811.pdf">2010/08/11</a></td>
                            <td><a href="courses/984_InfoTech/quiz/quiz_score_20100811.pdf">成績</a></td>
                        </tr>
                        <tr>
                            <td><a href="courses/984_InfoTech/quiz/quiz_result_20100816.pdf">2010/08/16</a></td>
                            <td><a href="courses/984_InfoTech/quiz/quiz_score_20100816.pdf">成績</a></td>
                        </tr>
                        <tr>
                            <td><a href="courses/984_InfoTech/quiz/quiz_result_20100818.pdf">2010/08/18</a></td>
                            <td><a href="courses/984_InfoTech/quiz/quiz_score_20100818.pdf">成績</a></td>
                        </tr>
                        <tr>
                            <td><a href="courses/984_InfoTech/quiz/quiz_result_20100823.pdf">2010/08/23</a></td>
                            <td><a href="courses/984_InfoTech/quiz/quiz_score_20100823.pdf">成績</a></td>
                        </tr>
                        <tr>
                            <td><a href="courses/984_InfoTech/quiz/quiz_result_20100825.pdf">2010/08/25</a></td>
                            <td><a href="courses/984_InfoTech/quiz/quiz_score_20100825.pdf">成績</a></td>
                        </tr>
			<tr>
			    <td><a href="courses/984_InfoTech/quiz/quiz_result_20100830.pdf">2010/08/30</a></td>
			    <td><a href="courses/984_InfoTech/quiz/quiz_score_20100830.pdf">成績</a></td>
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
