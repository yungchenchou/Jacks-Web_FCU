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
	<title>PHP Programming</title>
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
			<h1 style='height: 2em; padding-top: 5px'>PHP 動態網頁製作</h1>
			<h3 style='height: 1.8em;'>102學年 暑期</h3>
			<h3 style='height: 1.8em;'>上課時間：103/7/1 ~ 103/7/24 (09:10~16:00)</h3>
			<h3 style='height: 1.8em;'>上課地點：H103</h3>
			<h2 style='height: 1.3em;'>教科書：最新PHP + MySQL + Ajax 網頁程式設計</h2>
			<div id="tabs">
				<ul>
					<li><a href="#tabs-1">實作站台連結</a></li>
					<li><a href="#tabs-2">公告</a></li>
					<li><a href="#tabs-3">投影片</a></li>
				</ul>
<!--------------公告------------------->
				<div id="tabs-2" style="background: #E9E9E9;">
					<table class='s1'>
						<tr align=center>
							<th class='s1' width="15%">公告日期</th>
							<th class='s1' width="70%">內容</th>
							<th class='s1' width="15%">備註</th>
						</tr>
						<tr align=center>
							<td class='s1' width="15%">103/07/08</td>
							<td class='s1' width="70%"><a href='99_php_v1.pdf'>課堂題目</a></td>
							<td class='s1' width="15%"></td>
						</tr>
						<tr align=center>
							<td class='s1' width="15%">103/07/14</td>
							<td class='s1' width="70%"><a href='http://www.php5.idv.tw/modules.php?mod=books&act=index&cid=2'>PHP5函式庫(php5網管實驗室)</a></td>
							<td class='s1' width="15%"></td>
						</tr>
						<tr align=center>
							<td class='s1' width="15%">103/07/14</td>
							<td class='s1' width="70%"><a href='http://php.net/manual/en/funcref.php'>PHP5函式庫</a></td>
							<td class='s1' width="15%"></td>
						</tr>
						<tr align=center>
							<td class='s1' width="15%">103/07/14</td>
							<td class='s1' width="70%"><a href='http://www.php5.idv.tw/documents/mou/'>PHP4函式庫 (中文)</a></td>
							<td class='s1' width="15%"></td>
						</tr>
						
						<tr align=center>
							<td class='s1' width="15%">103/07/13</td>
							<td class='s1' width="70%">
								<table width=100%>
									<tr align=center>
										<td><a href='http://120.108.116.176:8800/cssTest1.html'>CSS 測試1</a></td>
										<td><a href='http://120.108.116.176:8800/ccsTest1.pdf'>html 原始碼</a></td>
										<td></td>
									</tr>
									<tr align=center>
										<td><a href='http://120.108.116.176:8800/cssTest2.html'>CSS 測試2</a></td>
										<td><a href='http://120.108.116.176:8800/ccsTest2.pdf'>html 原始碼</a></td>
										<td></td>
									</tr>
									<tr align=center>
										<td><a href='http://120.108.116.176:8800/cssTest3.html'>CSS 測試3</a></td>
										<td><a href='http://120.108.116.176:8800/ccsTest3.pdf'>html 原始碼</a></td>
										<td><a href='http://120.108.116.176:8800/ccsTest3.css.pdf'>css 原始碼</a></td>
									</tr>
									<tr align=center>
										<td><a href='http://120.108.116.176:8800/cssTest1.php'>html+php+css 測試4</a></td>
										<td><a href='http://120.108.116.176:8800/ccsTest1.php.pdf'>php 原始碼</a></td>
										<td><a href='http://120.108.116.176:8800/ccsTest3.css.pdf'>css 原始碼</a></td>
									</tr>
									<tr align=center>
										<td><a href='http://120.108.116.176:8800/cssTest2.php'>html+php+css 測試5</a></td>
										<td><a href='http://120.108.116.176:8800/ccsTest2.php.pdf'>php 原始碼</a></td>
										<td><a href='http://120.108.116.176:8800/ccsTest3.css.pdf'>css 原始碼</a></td>
									</tr>
									<tr align=center>
										<td><a href='http://120.108.116.176:8800/cssTest4.html'>html+css 區塊切割 測試6</a></td>
										<td><a href='http://120.108.116.176:8800/ccsTest4.html.pdf'>html 原始碼</a></td>
										<td><a href='http://120.108.116.176:8800/ccsTest4.css.pdf'>css 原始碼</a></td>
									</tr>
								</table>
							</td>
							<td class='s1' width="15%"></td>
						</tr>
                    </table>
				</div>
<!--------------投影片------------------->
				<div id="tabs-3" style="background: #E9E9E9;">
					<table class='s1'>
						<tr align="center">
							<th class='s1' width='5%'>編號</th>
							<th class='s1' width='15%'>上傳日期</th>
							<th class='s1' width='60%'>名稱</th>
							<th class='s1' width='20%'>備註</th>
						</tr>
						<tr align=center>
							<td class='s1'>1.</td>
							<td class='s1'>2014.07.15</td>
							<td class='s1'><a href="FS480-ch05_PHP_Function.pdf">
								活用 PHP 函式</a></td>
							<td class='s1'></td>
						</tr>
						<tr align=center>
							<td class='s1'>2.</td>
							<td class='s1'>2014.07.15</td>
							<td class='s1'><a href="ch08_MySQL.pdf">
								MySQL 資料庫入門</a></td>
							<td class='s1'></td>
						</tr>
						<tr align=center>
							<td class='s1'>3.</td>
							<td class='s1'>2014.07.15</td>
							<td class='s1'><a href="ch09_SQL.pdf">
								SQL 基本語法</a></td>
							<td class='s1'></td>
						</tr>
						<tr align=center>
							<td class='s1'>3.</td>
							<td class='s1'>2014.07.17</td>
							<td class='s1'><a href="FS480-ch10_PHP_MySQL.ppt">
								PHP 存取 MySQL 資料庫</a></td>
							<td class='s1'></td>
						</tr>
						
                    </table>
				</div>
<!--------------課堂練習------------------->
				<div id="tabs-1" style="background: #E9E9E9;">
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
						<tr align="center">
							<td class='s1'>陳宜斌</td>
							<td class='s1'>蔡進發校長</td>
							<td class='s1'><a href='http://120.108.113.215:10080'>WEB</a></td>
							<td class='s1'>a<a href='http://120.108.113.215:10080/siteMap.php'>架構</a></td>
							<td class='s1'>20%</td>
							<td class='s1'>80%</td>
							<td class='s1'>0%</td>
							<td class='s1'>20%</td>
							<td class='s1'>0%</td>
						</tr>
<!-- 
						<tr align="center">
							<td class='s1'><font color=red><del>潘彣昕</del></font></td>
							<td class='s1'>蔡進發校長</td>
							<td class='s1'><a href='http://120.108.113.215:11080'>WEB</a></td>
							<td class='s1'></td>
							<td class='s1'></td>
							<td class='s1'></td>
							<td class='s1'></td>
							<td class='s1'></td>
						</tr>
						<tr align="center">
							<td class='s1'><font color=red><del>林宥嫺</del></font></td>
							<td class='s1'>洪振偉老師</td>
							<td class='s1'><a href='http://120.108.113.215:12080'>WEB</a></td>
							<td class='s1'></td>
							<td class='s1'></td>
							<td class='s1'></td>
							<td class='s1'></td>
							<td class='s1'></td>
						</tr>
 -->
						<tr align="center">
							<td class='s1'>紀承瑋</td>
							<td class='s1'>洪振偉老師</td>
							<td class='s1'><a href='http://120.108.113.215:13080'>WEB</a></td>
							<td class='s1'>a<a href='http://120.108.113.215:13080/siteMap.php'>架構</a></td>
							<td class='s1'>0%</td>
							<td class='s1'></td>
							<td class='s1'></td>
							<td class='s1'></td>
							<td class='s1'></td>
						</tr>
						<tr align="center">
							<td class='s1'>林育佑</td>
							<td class='s1'>楊偉儒老師</td>
							<td class='s1'><a href='http://120.108.113.52:14080'>WEB</a></td>
							<td class='s1'>a<a href='http://120.108.113.52:14080/siteMap.php'>架構</a></td>
							<td class='s1'>50%</td>
							<td class='s1'></td>
							<td class='s1'></td>
							<td class='s1'></td>
							<td class='s1'></td>
						</tr>
<!-- 
						<tr align="center">
							<td class='s1'>張竣硯</td>
							<td class='s1'>楊偉儒老師</td>
							<td class='s1'><a href='http://120.108.113.52:15080'>WEB</a></td>
							<td class='s1'><a href='http://120.108.113.52:15080/siteMap.php'>架構</a></td>
							<td class='s1'>0%</td>
							<td class='s1'></td>
							<td class='s1'></td>
							<td class='s1'></td>
							<td class='s1'></td>
						</tr>
						<tr align="center">
							<td class='s1'><del><font color=red>余承恩</font></del></td>
							<td class='s1'>龔自良老師</td>
							<td class='s1'><a href='http://120.108.113.52:16080'>WEB</a></td>
							<td class='s1'></td>
							<td class='s1'></td>
							<td class='s1'></td>
							<td class='s1'></td>
							<td class='s1'></td>
						</tr>
 -->
						<tr align="center">
							<td class='s1'>王品鈞</td>
							<td class='s1'>龔自良老師</td>
							<td class='s1'><a href='http://120.108.113.52:17080'>WEB</a></td>
							<td class='s1'>a<a href='http://120.108.113.52:17080/siteMap.php'>架構</a></td>
							<td class='s1'>30%</td>
							<td class='s1'></td>
							<td class='s1'></td>
							<td class='s1'></td>
							<td class='s1'></td>
						</tr>
						<tr align="center">
							<td class='s1'>陳敬勛</td>
							<td class='s1'>莊政宏老師</td>
							<td class='s1'><a href='http://120.108.113.237:18080'>WEB</a></td>
							<td class='s1'>a<a href='http://120.108.113.237:18080/siteMap.php'>架構</a></td>
							<td class='s1'>70%</td>
							<td class='s1'></td>
							<td class='s1'></td>
							<td class='s1'></td>
							<td class='s1'></td>
						</tr>
						<tr align="center">
							<td class='s1'>楊松儒</td>
							<td class='s1'>王經篤老師</td>
							<td class='s1'><a href='http://120.108.113.237:19080'>WEB</a></td>
							<td class='s1'>a<a href='http://120.108.113.237:/siteMap.php'>架構</a></td>
							<td class='s1'>70%</td>
							<td class='s1'></td>
							<td class='s1'></td>
							<td class='s1'></td>
							<td class='s1'></td>
						</tr>
<!-- 
						<tr align="center">
							<td class='s1'><del><font color=red>謝佳君</font></del></td>
							<td class='s1'></td>
							<td class='s1'><a href='http://120.108.113.237:20080'>WEB</a></td>
							<td class='s1'></td>
							<td class='s1'></td>
							<td class='s1'></td>
							<td class='s1'></td>
							<td class='s1'></td>
						</tr>
 -->
						<tr align="center">
							<td class='s1'>沈思鎧</td>
							<td class='s1'>陳永欽老師</td>
							<td class='s1'><a href='http://120.108.113.237:21080'><font color=red>WEB</font></a></td>
							<td class='s1'></td>
							<td class='s1'></td>
							<td class='s1'></td>
							<td class='s1'></td>
							<td class='s1'></td>
							<td class='s1'></td>
						</tr>
						<tr align="center">
							<td class='s1'>曾聖勛</td>
							<td class='s1'>陳永欽老師</td>
							<td class='s1'><a href='http://120.108.113.237:22080'>WEB</a></td>
							<td class='s1'>a<a href='http://120.108.113.237:22080/siteMap.php'>架構</a></td>
							<td class='s1'>40%</td>
							<td class='s1'></td>
							<td class='s1'></td>
							<td class='s1'></td>
							<td class='s1'></td>
						</tr>
						<tr align="center">
							<td class='s1'>賴紹瑋</td>
							<td class='s1'>蔡志仁老師</td>
							<td class='s1'><a href='http://120.108.113.52:23080'>WEB</a></td>
							<td class='s1'><a href='http://120.108.113.52:23080/siteMap.php'>架構</a></td>
							<td class='s1'>40%</td>
							<td class='s1'></td>
							<td class='s1'></td>
							<td class='s1'></td>
							<td class='s1'></td>
						</tr>
						<tr align="center">
							<td class='s1'>黃品皓</td>
							<td class='s1'>蔡志仁老師</td>
							<td class='s1'><a href='http://120.108.113.215:24080'>WEB</a></td>
							<td class='s1'><a href='http://120.108.113.215:24080/siteMap.php'>架構</a></td>
							<td class='s1'>40%</td>
							<td class='s1'></td>
							<td class='s1'></td>
							<td class='s1'></td>
							<td class='s1'></td>
						</tr>
<!-- 
						<tr align="center">
							<td class='s1'>張富循</td>
							<td class='s1'>鍾仁宗老師</td>
							<td class='s1'><a href='http://120.108.113.224:10080'>WEB</a></td>
							<td class='s1'><a href='http://120.108.113.224:10080/siteMap.php'>架構</a></td>
							<td class='s1'>0%</td>
							<td class='s1'></td>
							<td class='s1'></td>
							<td class='s1'></td>
							<td class='s1'></td>
						</tr>
 -->
						<tr align="center">
							<td class='s1'>傅心呈</td>
							<td class='s1'>鍾仁宗老師</td>
							<td class='s1'><a href='https://120.108.113.235:27443/'>WEB</a></td>
							<td class='s1'>a<a href='https://120.108.113.235:27443/siteMap.php'>架構</a></td>
							<td class='s1'>0%</td>
							<td class='s1'></td>
							<td class='s1'></td>
							<td class='s1'></td>
							<td class='s1'></td>
						</tr>
						<tr align="center">
							<td class='s1'>王建傑</td>
							<td class='s1'>周永振老師</td>
							<td class='s1'><a href='http://120.108.113.224:12080'>WEB</a></td>
							<td class='s1'>a<a href='http://120.108.113.224:12080/siteMap.php'>架構</a></td>
							<td class='s1'>50%</td>
							<td class='s1'></td>
							<td class='s1'></td>
							<td class='s1'></td>
							<td class='s1'></td>
						</tr>
						<tr align="center">
							<td class='s1'>李大名</td>
							<td class='s1'>施能義老師</td>
							<td class='s1'><a href='http://120.108.113.224:13080'>WEB</a></td>
							<td class='s1'><a href='http://120.108.113.224:13080/siteMap.php'>架構</a></td>
							<td class='s1'>20%</td>
							<td class='s1'></td>
							<td class='s1'></td>
							<td class='s1'></td>
							<td class='s1'></td>
						</tr>
						<tr align="center">
							<td class='s1'>溫智棋</td>
							<td class='s1'>施能義老師</td>
							<td class='s1'><a href='http://120.108.114.207:14080'>WEB</a></td>
							<td class='s1'><a href='http://120.108.114.207:14080/siteMap.php'>架構</a></td>
							<td class='s1'>40%</td>
							<td class='s1'></td>
							<td class='s1'></td>
							<td class='s1'></td>
							<td class='s1'></td>
						</tr>
<!-- 
						<tr align="center">
							<td class='s1'><font color=red><del>吳嘉恩</del></font></td>
							<td class='s1'>沈偉誌老師</td>
							<td class='s1'><a href='http://120.108.114.207:15080'>WEB</a></td>
							<td class='s1'></td>
							<td class='s1'></td>
							<td class='s1'></td>
							<td class='s1'></td>
							<td class='s1'></td>
						</tr>
 -->
						<tr align="center">
							<td class='s1'>王啟豪</td>
							<td class='s1'>沈偉誌老師</td>
							<td class='s1'><a href='http://120.108.114.207:16080'>WEB</a></td>
							<td class='s1'><a href='http://120.108.114.207:16080/siteMap.php'>架構</a></td>
							<td class='s1'>40%</td>
							<td class='s1'></td>
							<td class='s1'></td>
							<td class='s1'></td>
							<td class='s1'></td>
						</tr>
<!-- 
						<tr align="center">
							<td class='s1'><font color=red><del>王俊偉</del></font></td>
							<td class='s1'>陳兆南老師</td>
							<td class='s1'><a href='http://120.108.114.207:17080'>WEB</a></td>
							<td class='s1'></td>
							<td class='s1'></td>
							<td class='s1'></td>
							<td class='s1'></td>
							<td class='s1'></td>
						</tr>
 -->
						<tr align="center">
							<td class='s1'>張簡彥佑</td>
							<td class='s1'>陳兆南老師</td>
							<td class='s1'><a href='http://120.108.114.207:18080'>WEB</a></td>
							<td class='s1'><a href='http://120.108.114.247:18080/siteMap.php'>架構</a></td>
							<td class='s1'>0%</td>
							<td class='s1'></td>
							<td class='s1'></td>
							<td class='s1'></td>
							<td class='s1'></td>
						</tr>
						<tr align="center">
							<td class='s1'>江泓昇</td>
							<td class='s1'>朱學亭老師</td>
							<td class='s1'><a href='http://120.108.114.207:19080'>WEB</a></td>
							<td class='s1'>a<a href='http://120.108.114.207:19080/siteMap.php'>架構</a></td>
							<td class='s1'>40%</td>
							<td class='s1'></td>
							<td class='s1'></td>
							<td class='s1'></td>
							<td class='s1'></td>
						</tr>
						<tr align="center">
							<td class='s1'>鄭依容</td>
							<td class='s1'>朱學亭老師</td>
							<td class='s1'><a href='http://120.108.113.224:20080'>WEB</a></td>
							<td class='s1'>a<a href='http://120.108.113.224:20080/siteMap.php'>架構</a></td>
							<td class='s1'>30%</td>
							<td class='s1'></td>
							<td class='s1'></td>
							<td class='s1'></td>
							<td class='s1'></td>
						</tr>
						<tr align="center">
							<td class='s1'>陳毅峰</td>
							<td class='s1'>關國裕老師</td>
							<td class='s1'><a href='http://120.108.113.224:21080'>WEB</a></td>
							<td class='s1'>a<a href='http://120.108.113.224:21080/siteMap.php'>架構</a></td>
							<td class='s1'>20%</td>
							<td class='s1'></td>
							<td class='s1'></td>
							<td class='s1'></td>
							<td class='s1'></td>
						</tr>
						<tr align="center">
							<td class='s1'>何松蔚</td>
							<td class='s1'>陳瑞奇老師</td>
							<td class='s1'><a href='http://120.108.113.224:22080'>WEB</a></td>
							<td class='s1'>a<a href='http://120.108.113.224:22080/siteMap.php'>架構</a></td>
							<td class='s1'>60%</td>
							<td class='s1'></td>
							<td class='s1'></td>
							<td class='s1'></td>
							<td class='s1'></td>
						</tr>
						<tr align="center">
							<td class='s1'>賴彥安</td>
							<td class='s1'>陳瑞奇老師</td>
							<td class='s1'><a href='http://120.108.114.207:23080'>WEB</a></td>
							<td class='s1'><a href='http://120.108.114.207:23080/siteMap.php'>架構</a></td>
							<td class='s1'>0%</td>
							<td class='s1'></td>
							<td class='s1'></td>
							<td class='s1'></td>
							<td class='s1'></td>
						</tr>
						<tr align="center">
							<td class='s1'>劉俊毅</td>
							<td class='s1'>陳興忠老師</td>
							<td class='s1'><a href='http://120.108.114.207:24080'>WEB</a></td>
							<td class='s1'><a href='http://120.108.114.207:24080/siteMap.php'>架構</a></td>
							<td class='s1'>80%</td>
							<td class='s1'></td>
							<td class='s1'></td>
							<td class='s1'></td>
							<td class='s1'></td>
						</tr>
						<tr align="center">
							<td class='s1'>沈東政</td>
							<td class='s1'>陳興忠老師</td>
							<td class='s1'><a href='http://120.108.113.39:10080'>WEB</a></td>
							<td class='s1'><a href='http://120.108.113.39:10080/siteMap.php'>架構</a></td>
							<td class='s1'>80%</td>
							<td class='s1'></td>
							<td class='s1'></td>
							<td class='s1'></td>
							<td class='s1'></td>
						</tr>

						<tr align="center">
							<td class='s1'>劉庭瑋</td>
							<td class='s1'>楊紹明老師</td>
							<td class='s1'><a href='http://120.108.113.39:11080'>WEB</a></td>
							<td class='s1'></td>
							<td class='s1'></td>
							<td class='s1'></td>
							<td class='s1'></td>
							<td class='s1'></td>
							<td class='s1'></td>
						</tr>
						<tr align="center">
							<td class='s1'>黃名瑋</td>
							<td class='s1'>楊紹明老師</td>
							<td class='s1'><a href='http://120.108.113.39:12080'>WEB</a></td>
							<td class='s1'></td>
							<td class='s1'></td>
							<td class='s1'></td>
							<td class='s1'></td>
							<td class='s1'></td>
							<td class='s1'></td>
						</tr>
						<tr align="center">
							<td class='s1'>黃靖傑</td>
							<td class='s1'>呂威甫老師</td>
							<td class='s1'><a href='http://120.108.113.39:13080'>WEB</a></td>
							<td class='s1'><a href='http://120.108.113.39:13080/siteMap.php'>架構</a></td>
							<td class='s1'>70%</td>
							<td class='s1'></td>
							<td class='s1'></td>
							<td class='s1'></td>
							<td class='s1'></td>
						</tr>
						<tr align="center">
							<td class='s1'>林昀融</td>
							<td class='s1'>呂威甫老師</td>
							<td class='s1'><a href='http://120.108.114.206:14080'>WEB</a></td>
							<td class='s1'><a href='http://120.108.114.206:14080/siteMap.php'>架構</a></td>
							<td class='s1'>80%</td>
							<td class='s1'></td>
							<td class='s1'></td>
							<td class='s1'></td>
							<td class='s1'></td>
						</tr>
<!-- 
						<tr align="center">
							<td class='s1'><font color=red><del>曾暐傑</del></font></td>
							<td class='s1'>許健老師</td>
							<td class='s1'><a href='http://120.108.114.206:15080'>WEB</a></td>
							<td class='s1'></td>
							<td class='s1'></td>
							<td class='s1'></td>
							<td class='s1'></td>
							<td class='s1'></td>
						</tr>
 
						<tr align="center">
							<td class='s1'><font color=red><del>林建揚</del></font></td>
							<td class='s1'>許健老師</td>
							<td class='s1'><a href='http://120.108.114.206:16080'>WEB</a></td>
							<td class='s1'></td>
							<td class='s1'></td>
							<td class='s1'></td>
							<td class='s1'></td>
							<td class='s1'></td>
						</tr>
-->
						<tr align="center">
							<td class='s1'>林成</td>
							<td class='s1'>關國裕老師</td>
							<td class='s1'><a href='http://120.108.114.206:17080'>WEB</a></td>
							<td class='s1'><a href='http://120.108.114.206:17080/siteMap.php'>架構</a></td>
							<td class='s1'>70%</td>
							<td class='s1'></td>
							<td class='s1'></td>
							<td class='s1'></td>
							<td class='s1'></td>
						</tr>
<!-- 
						<tr align="center">
							<td class='s1'><font color=red><del>張正頤</del></font></td>
							<td class='s1'>王經篤老師</td>
							<td class='s1'><a href='http://120.108.113.94:19080'>WEB</a></td>
							<td class='s1'></td>
							<td class='s1'></td>
							<td class='s1'></td>
							<td class='s1'></td>
							<td class='s1'></td>
						</tr>
						<tr align="center">
							<td class='s1'><font color=red><del>陳育生</del></font></td>
							<td class='s1'>莊政宏老師</td>
							<td class='s1'><a href='http://120.108.113.94:20080'>WEB</a></td>
							<td class='s1'></td>
							<td class='s1'></td>
							<td class='s1'></td>
							<td class='s1'></td>
							<td class='s1'></td>
						</tr>
						<tr align="center">
							<td class='s1'><font color=red><del>陳志嘉</del></font></td>
							<td class='s1'>張顥騰老師</td>
							<td class='s1'><a href='http://120.108.113.94:21080'>WEB</a></td>
							<td class='s1'></td>
							<td class='s1'></td>
							<td class='s1'></td>
							<td class='s1'></td>
							<td class='s1'></td>
						</tr>
 -->
						<tr align="center">
							<td class='s1'>鄭勝鴻</td>
							<td class='s1'>張顥騰老師</td>
							<td class='s1'><a href='http://120.108.113.94:22080'>WEB</a></td>
							<td class='s1'><a href='http://120.108.113.94:22080/siteMap.php'>架構</a></td>
							<td class='s1'>30%</td>
							<td class='s1'></td>
							<td class='s1'></td>
							<td class='s1'></td>
							<td class='s1'></td>
						</tr>
						<tr align="center">
							<td class='s1'>莊博任</td>
							<td class='s1'>林智揚老師</td>
							<td class='s1'><a href='http://120.108.114.206:23080'>WEB</a></td>
							<td class='s1'><a href='http://120.108.114.206:23080/siteMap.php'>架構</a></td>
							<td class='s1'></td>
							<td class='s1'></td>
							<td class='s1'></td>
							<td class='s1'></td>
							<td class='s1'></td>
						</tr>
						<tr align="center">
							<td class='s1'>何家俞</td>
							<td class='s1'>林智揚老師</td>
							<td class='s1'><a href='http://120.108.113.39:24080'>WEB</a></td>
							<td class='s1'><a href='http://120.108.113.39:24080/siteMap.php'>架構</a></td>
							<td class='s1'>40%</td>
							<td class='s1'></td>
							<td class='s1'></td>
							<td class='s1'></td>
							<td class='s1'></td>
						</tr>
						<tr align="center">
							<td class='s1'>賴敬勳</td>
							<td class='s1'>周永振 老師</td>
							<td class='s1'><a href='http://120.108.113.94:21080'>WEB</a><br />
								<a href='https://www.clearsky.idv.tw'><b>WEB2</b></a></td>
							<td class='s1'><a href='http://120.108.113.94:21080/siteMap.php'>架構</a></td>
							<td class='s1'>80%</td>
							<td class='s1'>100%</td>
							<td class='s1'>90%</td>
							<td class='s1'>100%</td>
							<td class='s1'>0%</td>
						</tr>
						<tr align="center">
							<td class='s1'>黃昱超</td>
							<td class='s1'>周永振 老師</td>
							<td class='s1'><a href='http://120.108.113.215:25080'>WEB</a></td>
							<td class='s1'><a href='http://120.108.113.215:25080/siteMap.php'>架構</a></td>
							<td class='s1'></td>
							<td class='s1'></td>
							<td class='s1'></td>
							<td class='s1'></td>
							<td class='s1'></td>
						</tr>
						<tr align="center">
							<td class='s1'>吳肇原</td>
							<td class='s1'>黃明祥 老師</td>
							<td class='s1'><a href='http://120.108.113.224:25080'>WEB</a></td>
							<td class='s1'><a href='http://'>架構</a></td>
							<td class='s1'></td>
							<td class='s1'></td>
							<td class='s1'></td>
							<td class='s1'></td>
							<td class='s1'></td>
						</tr>
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
