<!DOCTYPE html> 
<?php
include("../../fun_inc.php");
// 瀏覽人數計數器
session_start();
?>

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Jack's Web</title>
	<link rel="stylesheet" type="text/css" href="../../css/Jack_PHP.css" media="screen" />
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
			<h1 style='height: 2em; padding-top: 5px'>程式設計(一) (Java Programming 1)</h1>
			<h3 style='height: 1.8em;'>103學年 第一學期 (資工數位一A)</h3>
			<h3 style='height: 1.8em;'>上課時間：週一 567(13:10~16:00)</h3>
			<h3 style='height: 1.8em;'>上課地點：資訊大樓 H103</h3>
			<h2 style='height: 1.3em;'>教科書：</h2>
			<ol style='padding: 0 0 1.3em 2.5em;'>
				<li style='font-size: 1.3em;'></li>
			</ol>
			<h2 style='height: 1.3em;'>參考書：</h2>
			<ol style='padding: 0 0 1.3em 2.5em;'>
				<li style='font-size: 1.3em;'></li>
			</ol>
			<div id="tabs">
				<ul>
					<li><a href="#tabs-1">教學影片</a></li>
					<li><a href="#tabs-2">公告</a></li>
					<li><a href="#tabs-3">課堂練習</a></li>
					<li><a href="#tabs-4">作業</a></li>
				</ul>
<!--------------影片------------------->
				<div id="tabs-1" style="background: #E9E9E9;">
					<table class='s1'>
						<tr align="center">
							<th class='s1' width='5%'>編號</th>
							<th class='s1' width='15%'>上傳日期</th>
							<th class='s1' width='60%'>名稱</th>
							<th class='s1' width='20%'>備註</th>
						</tr>
						<tr align="center">
							<td class='s1' width='5%'>01</td>
							<td class='s1' width='15%'>2014/12/01</td>
							<td class='s1' width='60%'>
								<video width="240" height="120" controls>
 	  								<source src="../videos/Java_JDK_Eclipse.ogv" type="video/ogg">  
									Your browser does not support the video tag.
								</video>
							</td>
							<td class='s1' width='20%'>JDK安裝與程式編輯器</td>
						</tr>
						<tr align="center">
							<td class='s1' width='5%'>02</td>
							<td class='s1' width='15%'>2014/12/04</td>
							<td class='s1' width='60%'>
								<video width="240" height="120" controls>
 	  								<source src="../videos/03_DataType_IN_OUT.ogv" type="video/ogg">  
									Your browser does not support the video tag.
								</video>
							</td>
							<td class='s1' width='20%'>基本資料型態與輸出輸入</td>
						</tr>
						<tr align="center">
							<td class='s1' width='5%'>03</td>
							<td class='s1' width='15%'>2014/12/01</td>
							<td class='s1' width='60%'>
								<video width="240" height="120" controls>
<!-- 	  								<source src="course_videos/Java_20141201_01.mp4" type="video/mp4">  -->
 	  								<source src="../videos/java_20141201_1.ogv" type="video/ogg">  
									Your browser does not support the video tag.
								</video>
							</td>
							<td class='s1' width='20%'>字元大小寫判斷</td>
						</tr>
						<tr align="center">
							<td class='s1' width='5%'>04</td>
							<td class='s1' width='15%'>2014/12/08</td>
							<td class='s1' width='60%'>
								<video width="240" height="120" controls>
 	  								<source src="../videos/Java_RandomNoDup.ogv" type="video/ogg">  
									Your browser does not support the video tag.
								</video>
							</td>
							<td class='s1' width='20%'>如何產生不重覆的亂數</td>
						</tr>
						<tr align="center">
							<td class='s1' width='5%'>05</td>
							<td class='s1' width='15%'>2014/12/29</td>
							<td class='s1' width='60%'>
								<video width="240" height="120" controls>
 	  								<source src="../videos/05_Java_InsertionSort.ogv" type="video/ogg">  
									Your browser does not support the video tag.
								</video>
							</td>
							<td class='s1' width='20%'>插入排序法(無聲版)</td>
						</tr>
                    </table>  
				</div>
<!--------------公告------------------->
				<div id="tabs-2" style="background: #E9E9E9;">
					<table class='s1'>
						<tr align=center>
							<th class='s1' width="15%">公告日期</th>
							<th class='s1' width="70%">內容</th>
							<th class='s1' width="15%">備註</th>
						</tr>
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
                    </table>
				</div>
			</div>
		</div>
		<?php footering();?>
	</div>
</body>
</html>