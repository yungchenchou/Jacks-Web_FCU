<!DOCTYPE HTML>
<?
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
	<title>Jack's Web</title>
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
			<h1 style='height: 2em; padding-top: 5px'>數位影像處理 (Digital Image Processing)</h1>
			<h3 style='height: 1.8em;'>102學年 第二學期 (博士班)</h3>
			<h3 style='height: 1.8em;'>Course ID: 67D00007</h3>
			<h3 style='height: 1.8em;'>上課時間：週三 2-4(09:10~12:00)</h3>
			<h3 style='height: 1.8em;'>上課地點：I533</h3>
			<h2 style='height: 1.3em;'>教科書：</h2>
			<ol style='padding: 0 0 1.3em 2.5em;'>
				<li style='font-size: 1.3em;'>Introduction to Digital Image Processing with MATLAB, Alasdair McAndrew, Thomson, 2004 </li>
			</ol>
			<h2 style='height: 1.3em;'>參考書：</h2>
			<ol style='padding: 0 0 1.3em 2.5em;'>
				<li style='font-size: 1.3em;'>Digital Image Processing, 3rd Ed., Gonzalez and Woods, Prentice Hall, 2008</li>
			</ol>
			<div id="tabs">
				<ul>
					<li><a href="#tabs-1">公告</a></li>
					<li><a href="#tabs-2">投影片</a></li>
					<li><a href="#tabs-3">課堂練習</a></li>
					<li><a href="#tabs-4">作業</a></li>
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
							<td class='s1'>2014.03.25</td>
							<td class='s1' align=left>
								<table class='s2'>
									<tr align=center>
										<th class='s2' width='20%'>報告者</th>
										<th class='s2' width='60%'>論文名稱與出處</th>
										<th class='s2' width='20%'>報告日期</th>
									</tr>
									<tr>
										<td class='s2' align=center>林瑾玟</td>
										<td class='s2'> 
										"Effective Hierarchical background modeling and foreground detection in surveillance systems," 
										<emph>14th International CSI Computer Conference(CSICC'09)</emph></td>
										<td class='s2' align=center>2014.06.??</td>
									</tr>
									<tr>
										<td class='s2' align=center>傅靖桐</td>
										<td class='s2'>Yi-Min Tsai,Yu-Lin Chang,and Liang-Gee Chen, 
										"Block-based Vanishing Line and Vanishing Point Detection for 3D Scene Reconstruction,"</td>
										<td class='s2' align=center>2014.06.??</td>
									</tr>
									<tr>
										<td class='s2' align=center>宋承瑋</td>
										<td class='s2'>Jiwon Choi, Wonjun Kim, Haejung Kong, and Changick Kim, 
										"REAL-TIME VANISHING POINT DETECTION USING THE LOCAL DOMINANT ORIENTATION SIGNATURE,"</td>
										<td class='s2' align=center>2014.06.??</td>
									</tr>
									<tr>
										<td class='s2' align=center>郭佳霖</td>
										<td class='s2'>S. Krit, 
										"Boundary Detection in Medical Images Using Edge Following Algorithm Based on Intensity Gradient and Texture Gradient Features,"
										IEEE TRANSACTIONS ON BIOMEDICAL ENGINEERING, Vol. 58, NO. 3, MARCH 2011</td>
										<td class='s2' align=center>2014.06.??</td>
									</tr>
									<tr>
										<td class='s2' align=center>洪家偉</td>
										<td class='s2'>Yi-Che Chen, Yi-Chin Wu, Chih-Hung Liu, Wei-Chih Sun, Yung-Chang Chen: 
										"Depth map generation based on depth from focus" </td>
										<td class='s2' align=center>2014.06.??</td>
									</tr>
								</table>
								</td>
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
<!--
						<tr align=center>
							<td class='s1'>1.</td>
							<td class='s1'>2013.09.12</td>
							<td class='s1'><a href="courses/1021_WindowsProgramming/ppt/00_Syllabus.pdf">
								課程介紹</a></td>
							<td class='s1'></td>
						</tr>
-->
                    </table>
				</div>
<!--------------課堂練習------------------->
				<div id="tabs-3" style="background: #E9E9E9;">
					<table class='s1'>
						<tr align="center">
							<th class='s1' width='5%'>編號</th>
							<th class='s1' width='15%'>日期</th>
							<th class='s1' width='60%'>練習題目</th>
							<th class='s1' width='20%'>備註</th>
						</tr>
<!--						 
						<tr align=center>
							<td class='s1'>1.</td>
							<td class='s1'>2013.09.17</td>
							<td class='s1'><a href="courses/1021_WindowsProgramming/IA_Ex_HW/Ex_20130917.pdf">簡易視窗練習</a></td>
							<td class='s1'></td>
						</tr>
-->
                    </table>
				</div>
<!--------------作業------------------->
				<div id="tabs-4" style="background: #E9E9E9;">
					<table class='s1'>
						<tr align="center">
							<th class='s1' width='5%'>編號</th>
							<th class='s1' width='60%'>練習題目</th>
							<th class='s1' width='15%'>繳交期限</th>
							<th class='s1' width='20%'>備註</th>
						</tr>
<!--
						<tr align=center>
							<td class='s1'>1.</td>
							<td class='s1'><a href="courses/1021_WindowsProgramming/IA_Ex_HW/hw_20130917.pdf">簡易視窗練習</a></td>
							<td class='s1'>2013.09.23<br />(中午12:00前)</td>
							<td class='s1'></td>
						</tr>
-->
                    </table>
				</div>
			</div>
		</div>
		<div id="footer">
			您是自2010年5月以來 第  <? MyCounter();?> 位 參觀本站的訪客 <br/>
			現在時間: <span id="clock"><script type ="text/javascript" src="showTime.js"></script></span>
		</div>
	</div>
</body>
</html>
