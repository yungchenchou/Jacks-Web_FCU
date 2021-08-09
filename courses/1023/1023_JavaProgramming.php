<!DOCTYPE HTML>
<?php
include("calender.php");
include("mycounter.php");
include("mainMenu.php");
// 瀏覽人數計數器
session_start();
$_SESSION['counted'] = 1;
?>

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Java Programming</title>
	<link rel="stylesheet" type="text/css" href="css/Jack_PHP.css" media="screen" />
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
	<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
	<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
	<script>
		$(function() {
		$( "#tabs" ).tabs();
		});
	</script>
</head>
<body>
	<div id="wrap">
		<?php headerBanner(); 
			sideNav(5); ?>
		<div id="content">
			<h1 style='height: 2em; padding-top: 5px'>Java 程式設計加強班</h1>
			<h3 style='height: 1.8em;'>102學年 暑期</h3>
			<h3 style='height: 1.8em;'>上課時間：103/8/1 ~ 103/8/22 (09:10~16:00)</h3>
			<h3 style='height: 1.8em;'>上課地點：H103</h3>
			<h2 style='height: 1.3em;'>教科書：</h2>
			<div id="tabs">
				<ul>
					<li><a href="#tabs-1">公告</a></li>
					<li><a href="#tabs-2">投影片</a></li>
				</ul>
<!--------------公告------------------->
				<div id="tabs-1" style="background: #E9E9E9;">
					<table class='s1'>
						<tr align=center>
							<th class='s1' width="15%">公告日期</th>
							<th class='s1' width="70%">內容</th>
							<th class='s1' width="15%">備註</th>
						</tr>
                                                <tr align=center>
                                                        <td class='s1'>2014/08/04</td>
                                                        <td class='s1'><a href='Java_Loc_Map.pdf'>座位表</a></td>
                                                        <td class='s1'></td>
                                                </tr>
                    </table>
				</div>
<!--------------投影片------------------->
				<div id="tabs-2" style="background: #E9E9E9;">
					<table class='s1'>
						<tr align="center">
							<th class='s1' width='5%'>編號</th>
							<th class='s1' width='15%'>上傳日期</th>
							<th class='s1' width='60%'>名稱</th>
							<th class='s1' width='20%'>備註</th>
						</tr>
						<tr align="center">
							<td class='s1'>1</td>
							<td class='s1'>Aug. 1, 2014</td>
							<td class='s1'><a href='01_Editor_HelloJAVA_v1'>投影片</a></td>
							<td class='s1'><a href='Java_Exe_2014080101.pdf'>練習1</a></td>
						</tr>
						<tr align=center>
							<td class='s1'>2</td>
							<td class='s1'>Aug. 4, 2014</td>
							<td class='s1'><a href='02_ErrorMsg_Debug_v1.pdf'>錯誤訊息與解決</a></td>
							<td class='s1'><a href='Java_Exe_20140804m.pdf'>練習2</a><br/>
								<a href='Java_Exe_20140804a.pdf'>練習3</a></td>
						</tr>
						<tr align=center>
							<td class='s1'>3</td>
							<td class='s1'>Aug. 5, 2014</td>
							<td class='s1'></td>
							<td class='s1'><a href='Java_Exe_20140805m.pdf'>練習4</a><br />
								<a href='Java_Exe_20140805a.pdf'>練習5</a></td>
                        </tr>
						<tr align=center>
							<td class='s1'>4</td>
							<td class='s1'>Aug. 5, 2014</td>
							<td class='s1'><a href='ppts/ch01_Java.zip'>Ch01_認識Java</a></td>
							<td class='s1'><a href='Java_Exe_20140806m.pdf'>練習6</a><br />
								<a href='Java_Exe_20140806a.pdf'>練習7</a><br />
								<a href='Java_Exe_20140807m.pdf'>練習8</a><br />
								<a href='Java_Exe_20140807a.pdf'>練習9</a></td>
						</tr>
						<tr align=center>
							<td class='s1'>5</td>
							<td class='s1'>Aug. 6, 2014</td>
							<td class='s1'><a href='ppts/ch04_OperatorExpression.7z'>ch4_運算子、運算式與敘述</a></td>
							<td class='s1'><a href='Java_Exe_20140811m.pdf'>練習10</a><br />
								<a href='Java_Exe_20140811a.pdf'>練習11</a><br />
								<a href='Java_Exe_20140812m.pdf'>練習12</a></td>
						</tr>
						<tr align=center>
							<td class='s1'>6</td>
							<td class='s1'>Aug. 6, 2014</td>
							<td class='s1'><a href='ppts/ch05_if_loop.7z'>ch5_選擇性敘述與迴圈</a></td>
							<td class='s1'><a href='Java_Exe_20140813m1.pdf'>練習12</a><br />
								<a href='Java_Exe_20140813m2.pdf'>練習13</a><br />
								<a href='Java_Exe_20140813a1.pdf'>練習14</a><br />
								<a href='Java_Exe_20140813a2.pdf'>練習15</a></td>
						</tr>

						<tr align=center>
							<td class='s1'>7</td>
							<td class='s1'>Aug. 19, 2014</td>
							<td class='s1'><a href='ppts/ch06_Array.zip'>ch06_陣列</a></td>
							<td class='s1'><a href='Java_Exe_20140814m1.pdf'>練習16</a><br />
								<a href='Java_Exe_20140814m2.pdf'>練習17</a><br />
								<a href='Java_Exe_20140814a.pdf'>練習18</a><br />
								<a href='Java_Exe_20140815m1.pdf'>練習19</a><br />
								<a href='Java_Exe_20140815m2.pdf'>練習20</a></td>
						</tr>
						<tr align=center>
							<td class='s1'>8</td>
							<td class='s1'>Aug. 19, 2014</td>
							<td class='s1'><a href='ppts/ch07_Method.zip'>ch07_函式</a></td>
							<td class='s1'><a href='Java_Exe_20140818m1.pdf'>練習 21</a><br />
								<a href='Java_Exe_20140818m2.pdf'>練習 22</a><br />
								<a href='Java_Exe_20140818a1.pdf'>練習 23</a><br />
								<a href='Java_Exe_20140818a2.pdf'>練習 24</a></td>
						</tr>
						<tr align=center>
							<td class='s1'>9</td>
							<td class='s1'>Aug. 19, 2014</td>
							<td class='s1'><a href='ppts/ch08_class.zip'>ch08_認識類別</a></td>
							<td class='s1'><a href='Java_Exe_20140819m1.pdf'>練習 25</a><br />
								<a href='Java_Exe_20140819m2.pdf'>練習 26</a><br />
								<a href='Java_Exe_20140819a1.pdf'>練習 27</a><br />
								<a href='Java_Exe_20140819a2.pdf'>練習 28</a></td>
						</tr>
						<tr align=center>
							<td class='s1'>10</td>
							<td class='s1'>Aug. 19, 2014</td>
							<td class='s1'><a href='ppts/ch09_ClassAdvance.zip'>ch09_類別進階</a></td>
							<td class='s1'><a href='Java_Exe_20140820m1.pdf'>練習 29</a><br />
								<a href='Java_Exe_20140820m2.pdf'>練習 30</a><br />
								<a href='Java_Exe_20140820a1.pdf'>練習 29</a><br />
								<a href='Java_Exe_20140820a2.pdf'>練習 30</a></td>
						</tr>
						<tr align=center>
							<td class='s1'>11</td>
							<td class='s1'>Aug. 19, 2014</td>
							<td class='s1'><a href='ppts/ch13_Exception.zip'>ch13_例外處理</a></td>
							<td class='s1'><a href='Java_Exe_20140821m1.pdf'>練習 31</a></td>
						</tr>
						<tr align=center>
							<td class='s1'>12</td>
							<td class='s1'>Aug. 19, 2014</td>
							<td class='s1'><a href='ppts/ch14_File.zip'>ch14_檔案處理</a></td>
							<td class='s1'></td>
						</tr>
						<tr align=center>
							<td class='s1'>13</td>
							<td class='s1'>Aug. 19, 2014</td>
							<td class='s1'><a href='ppts/ch15_MultiThread.zip'>ch15_多執行緒</a></td>
							<td class='s1'></td>
						</tr>
						<tr align=center>
							<td class='s1'>14</td>
							<td class='s1'>Aug. 19, 2014</td>
							<td class='s1'><a href='ppts/ch17_AWT.7z'>ch17_AWT視窗物件</a></td>
							<td class='s1'></td>
						</tr>
						<tr align=center>
							<td class='s1'>15</td>
							<td class='s1'>Aug. 19, 2014</td>
							<td class='s1'><a href='ppts/ch18_event.7z'>ch18_事件處理</a></td>
							<td class='s1'></td>
						</tr>
						<tr align=center>
							<td class='s1'>16</td>
							<td class='s1'>Aug. 19, 2014</td>
							<td class='s1'><a href='ppts/ch19_AWT_Other.zip'>ch19_AWT的其他元件</a></td>
							<td class='s1'></td>
						</tr>
						<tr align=center>
							<td class='s1'>17</td>
							<td class='s1'>Aug. 19, 2014</td>
							<td class='s1'><a href='ppts/ch20_AWTPaint.7z'>ch20_AWT的繪圖</a></td>
							<td class='s1'></td>
						</tr>
						<tr align=center>
							<td class='s1'>18</td>
							<td class='s1'>Aug. 19, 2014</td>
							<td class='s1'><a href='ppts/ch21_applet.zip'>ch21_網頁精靈</a></td>
							<td class='s1'></td>
						</tr>
						<tr align=center>
							<td class='s1'>19</td>
							<td class='s1'>Aug. 19, 2014</td>
							<td class='s1'><a href='ppts/ch22_NetProgramming.zip'>ch22_網路程式設計</a></td>
							<td class='s1'></td>
						</tr>
						<tr align=center>
							<td class='s1'>20</td>
							<td class='s1'>Aug. 19, 2014</td>
							<td class='s1'><a href='ppts/ch23_Swing.7z'>ch23_認識Swing</a></td>
							<td class='s1'></td>
						</tr>
                    </table>
				</div>
				
<!--------------課堂練習------------------->
<!-- 
				<div id="tabs-3" style="background: #E9E9E9;">
					<table class='s1'>
						<tr align="center">
							<th class='s1' width='15%'>作者</th>
							<th class='s1' width='15%'>老師</th>
							<th class='s1' width='10%'>連結</th>
							<th class='s1' width='10%'>網站架構</th>
							<th class='s1' width='10%'>首頁成果</th>
							<th class='s1' width='10%'>後台登入</th>
							<th class='s1' width='10%'>後台管理</th>
							<th class='s1' width='10%'>CSS使用</th>
							<th class='s1' width='10%'>架構圖</th>
						</tr>

                    </table>
				</div>
 -->
			</div>
		</div>
		<div id="footer">
			您是自2010年5月以來 第  <? MyCounter();?> 位 參觀本站的訪客 <br/>
			現在時間: <span id="clock"><script type ="text/javascript" src="showTime.js"></script></span>
		</div>
	</div>
</body>
</html>
