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
                    <h1>程式設計(2)<br/>(Programming (2))</h1>
					<h2>課號: 64U00057</h2>
                    <h3>99學年第二學期</h3>
                    <h3>上課時間：週四 456 (11:10~15:00)</h3>
                    <h3>上課地點：H103</h3>
                    <h2>教科書：</h2>
                    <ol>
                        <li>Visual C# 2008從零開始，資訊教育研究室著，博碩文化出版</li>
                    </ol>
                    <h2>參考書 (Text Book)：</h2>
                    <ol>
                        <li>Visual C# 2008學習範本，吳明哲、何珮琪、張志成、何嘉益、周家旬編者，松崗出版社</li>
                    </ol>
                    <h2>公告 (Notice)</h2>
                    <table border=1 width="550">
                        <tr align=center>
                            <td width="100">公告日期</td>
                            <td width="300">內容</td>
                            <td width="150">備註</td>
                        </tr>
                        <tr align=center>
                            <td width="100">2011.03.03</td>
                            <td width="300">本課程之教學助教為 張閎翰 (Sica Chang)</td>
                            <td width="150"><a href="mailto:sicachang@gmail.com">sicachang@gmail.com</a></td>
                        </tr>
                        <tr align=center>
                            <td width="100">2011.03.03</td>
                            <td width="300"><font color=red><b>作業缴交方式：</b></font><br>
									將完成的作業的整個資料匣壓縮成壓縮檔後寄給助教。作業壓縮檔命名方式為 \"HW_X_學号\"，例：HW_1_996407328</td>
                            <td width="150"><a href="mailto:sicachang@gmail.com">sicachang@gmail.com</a></td>
                        </tr>
                        <tr align=center>
                            <td width="100">2011.03.03</td>
                            <td width="300">作業每遲交一週最高分遞減 10 分直到 30 為止。</td>
                            <td width="150"></td>
                        </tr>
                        <tr align=center>
                            <td width="100">2011.03.10</td>
                            <td width="300"><font color=red><b>作業不得抄襲，一經查獲不論主從一律0分計算!</b></font></td>
                            <td width="150"></td>
                        </tr>
                        <tr align=center>
                            <td width="100">2011.04.12</td>
                            <td width="300"><font color=blue><b>期中考<br/>
                            	地點: A204<br/>
                            	時間: 2011/04/21  11:00~13:00</b></font></td>
                            <td width="150"><a href="./courses/992_Programming2/Mid_Exam_Sol.pdf">參考解答</a></td>
                        </tr>
                        <tr align=center>
                            <td width="100">2011.06.02</td>
                            <td width="300"><font color=red><b>作業補交至 6/16 日中午十二點以前為止, 逾時不候!!</td>
                        </tr>
                        <tr align=center>
                            <td width="100">2011.06.16</td>
                            <td width="300"><font color=blue><b>期末考<br/>
                            	地點: A204<br/>
                            	時間: 2011/06/23  11:00~13:00</b></font></td>
                            <td width="150"><font color=red>1. 當日 11:40 後不得入場.<br />
                            	2. 考試時不得使用手機, 一經發現期末考以零分計!
                            </font></td>
                        </tr>
                        <tr align=center>
                            <td width="100">2011.06.27</td>
                            <td width="300"><a href="./courses/992_Programming2/finalScore.pdf">學期總成績</a></td>
                        </tr>
                    </table>

                    <h2>投影片 (PPT Slide)</h2>
                    <table border ="1" width="550">
                        <tr align="center">
                            <td width="50">編號</td>
                            <td width="100">上傳日期</td>
                            <td width="250">名稱</td>
							<td width="150">課堂練習</td>
                        </tr>
                        <tr align="center">
                            <td width="50">01.</td>
                            <td width="100">2011.02.22</td>
                            <td width="400"><a href="./courses/992_Programming2/ppt/00_Syllabus.pdf">課程簡介</a></td>
                        </tr>
                        <tr align="center">
                            <td width="50">02.</td>
                            <td width="100">2011.03.03</td>
                            <td width="400"><a href="./courses/992_Programming2/ppt/01_Introduction.pdf">C# 程式設計簡介</a></td>
							<td width="150"><a href="./courses/992_Programming2/Exercise/Ex_Gen_2011.03.03.pdf">練習</a></td>
                        </tr>
                        <tr align="center">
                            <td width="50">03.</td>
                            <td width="100">2011.03.03</td>
                            <td width="400"><a href="./courses/992_Programming2/ppt/02_DataType.pdf">資料型別</a></td>
							<td width="150"><a href="./courses/992_Programming2/Exercise/Ex_2011.03.10.pdf">練習</a></td>
                        </tr>
                        <tr align="center">
                            <td width="50">04.</td>
                            <td width="100">2011.03.10</td>
                            <td width="400"><a href="./courses/992_Programming2/ppt/03_FlowControl">流程控制</a></td>
							<td width="150"><a href="./courses/992_Programming2/Exercise/Ex_2011.03.17.pdf">練習</a><br/>
								<a href="./courses/992_Programming2/Exercise/Ex_2011.03.24.pdf">練習(3/24)</a><BR/>
								<a href="./courses/992_Programming2/Exercise/Ex_2011.03.31.pdf">練習(3/31)</a><BR/>
								<a href="./courses/992_Programming2/Exercise/Ex_2011.04.07.pdf">練習(4/07)</a><br/>
								<a href="./courses/992_Programming2/Exercise/Ex_2011.04.14.pdf">練習(4/14)</a></td>
                        </tr>
                        <tr align="center">
                            <td width="50">05.</td>
                            <td width="100">2011.04.28</td>
                            <td width="400"><a href="./courses/992_Programming2/ppt/04_Array.pdf">陣列</a></td>
							<td width="150"></td>
                        </tr>
                        <tr align="center">
                            <td width="50">06.</td>
                            <td width="100">2011.04.28</td>
                            <td width="400"><a href="./courses/992_Programming2/ppt/07_WinProg.pdf">視窗應用程式開發</a></td>
							<td width="150"><a href="./courses/992_Programming2/Exercise/Ex_2011.04.28.pdf">練習(04/28)</a></td>
                        </tr>
                        <tr align="center">
                            <td width="50">07.</td>
                            <td width="100">2011.05.05</td>
                            <td width="400"><a href="./courses/992_Programming2/ppt/08_IOInterface.pdf">表單輸出入介面設計</a></td>
							<td width="150"><a href="./courses/992_Programming2/Exercise/Ex_2011.05.05.pdf">練習(05/05)</a><br/>
								<a href="./courses/992_Programming2/Exercise/Ex_2011.05.19.pdf">練習(05/19)</a></td>
                        </tr>
                        <tr align="center">
                            <td width="50">08.</td>
                            <td width="100">2011.05.05</td>
                            <td width="400"><a href="./courses/992_Programming2/ppt/09_commonComponent1.pdf">常用控制項(一)</a></td>
							<td width="150"><a href="./courses/992_Programming2/Exercise/Ex_2011.05.26.pdf">練習(05/26)</a></td>
                        </tr>
                        <tr align="center">
                            <td width="50">09.</td>
                            <td width="100">2011.05.05</td>
                            <td width="400"><a href="./courses/992_Programming2/ppt/10_commonComponent2.pdf">常用控制項(二)</a></td>
							<td width="150"></td>
                        </tr>
                        <tr align="center">
                            <td width="50">10.</td>
                            <td width="100">2011.05.12</td>
                            <td width="400"><a href="./courses/992_Programming2/ppt/13_Multimedia.pdf">繪圖與多媒體</a></td>
							<td width="150"></td>
                        </tr>
                        <tr align="center">
                            <td width="50">11.</td>
                            <td width="100">2011.06.02</td>
                            <td width="400"><a href="./courses/992_Programming2/ppt/05_Method.pdf">方法</a></td>
							<td width="150"><a href="./courses/992_Programming2/Exercise/Ex_2011.06.02.pdf">練習(06/02)</a><br />
								<a href="./courses/992_Programming2/Exercise/Ex_2011.06.09.pdf">練習(06/09)</a><br />
								<a href="./courses/992_Programming2/Exercise/Ex_2011.06.16.pdf">練習(06/16)</a></td>
                        </tr>
                    </table>

                    <h2>作業 (Homeworks)</h2>
                    <table border="1" width="550">
                        <tr align="center">
							<td width="60">編號</td>
                            <td width="150">項目</td>
                            <td width="220">繳交期限</td>
                            <td width="60">成績</td>
                            <td width="60">備註</td>
                        </tr>
                        <tr align="center">
                            <td width="6o">01.</td>
							<td width="150"><a href="./courses/992_Programming2/hws/HW01.pdf">兩數相乘</a></td>
                            <td width="220">2011.03.09 中午12:00 前</td>
                            <td width="60"><a href="http://sites.google.com/site/chengshishejicxia">成績</a></td>
                            <td width="60"></td>
                        </tr>
						<tr align="center">
                            <td width="60">02.</td>
							<td width="150"><a href="./courses/992_Programming2/hws/HW02.pdf">成績計算</a></td>
                            <td width="220">2011.03.16 中午12:00 前</td>
                            <td width="60"></td>
                            <td width="60"></td>
                        </tr>
						<tr align="center">
                            <td width="60">03.</td>
							<td width="150"><a href="./courses/992_Programming2/hws/HW03.pdf">數字直角三角形</a></td>
                            <td width="220">2011.03.23 中午12:00 前</td>
                            <td width="60"></td>
                            <td width="60"></td>
                        </tr>
						<tr align="center">
                            <td width="60">04.</td>
							<td width="150"><a href="./courses/992_Programming2/hws/HW04.pdf">流程控制練習</a></td>
                            <td width="220">2011.03.30 中午12:00 前</td>
                            <td width="60"></td>
                            <td width="60"></td>
                        </tr>
						<tr align="center">
                            <td width="60">05.</td>
							<td width="150"><a href="./courses/992_Programming2/hws/HW05.pdf">進制轉換</a></td>
                            <td width="220">2011.04.06 中午12:00 前</td>
                            <td width="60"></td>
                            <td width="60"></td>
                        </tr>
						<tr align="center">
                            <td width="60">06.</td>
							<td width="150"><a href="./courses/992_Programming2/hws/HW06.pdf">不同進制轉成十進制</a></td>
                            <td width="220">2011.04.13 中午12:00 前</td>
                            <td width="60"></td>
                            <td width="60"></td>
                        </tr>
						<tr align="center">
                            <td width="60">07.</td>
							<td width="150"><a href="./courses/992_Programming2/hws/HW07.pdf">LED數字顯示器</a></td>
                            <td width="220">2011.05.04 中午12:00 前</td>
                            <td width="60"></td>
                            <td width="60"></td>
                        </tr>
						<tr align="center">
                            <td width="60">08.</td>
							<td width="150"><a href="./courses/992_Programming2/hws/HW08.pdf">LED計時器</a></td>
                            <td width="220">2011.05.11 中午12:00 前</td>
                            <td width="60"></td>
                            <td width="60"></td>
                        </tr>
						<tr align="center">
                            <td width="60">09.</td>
							<td width="150"><a href="./courses/992_Programming2/hws/HW09.pdf">倒數計時器</a></td>
                            <td width="220">2011.05.18 中午12:00 前</td>
                            <td width="60"></td>
                            <td width="60"></td>
                        </tr>
						<tr align="center">
                            <td width="60">10.</td>
							<td width="150"><a href="./courses/992_Programming2/hws/HW10.pdf">凱撒加密法</a></td>
                            <td width="220">2011.05.25 中午12:00 前</td>
                            <td width="60"></td>
                            <td width="60"></td>
                        </tr>
						<tr align="center">
                            <td width="60">11.</td>
							<td width="150"><a href="./courses/992_Programming2/hws/HW11.pdf">吃角子老虎</a></td>
                            <td width="220">2011.06.01 中午12:00 前</td>
                            <td width="60"></td>
                            <td width="60"></td>
                        </tr>
						<tr align="center">
                            <td width="60">12.</td>
							<td width="150"><a href="./courses/992_Programming2/hws/HW12.pdf">井字遊戲</a></td>
                            <td width="220">2011.06.08中午12:00 前</td>
                            <td width="60"></td>
                            <td width="60"></td>
                        </tr>
						<tr align="center">
                            <td width="60">13.</td>
							<td width="150"><a href="./courses/992_Programming2/hws/HW13.pdf">紙上作業</a></td>
                            <td width="220">2011.06.16上午11:00 前</td>
                            <td width="60"></td>
                            <td width="60"></td>
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
