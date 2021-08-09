<!DOCTYPE html> 
<?php  require('../../fun_inc.php');
session_start();  ?>
<html>
    <head>
        <meta charest="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Yung-Chen Chou's Web</title>
        <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">      
        <link rel="stylesheet" href="../../bootstrap/css/Cerulean/bootstrap.min.css">
		<link rel="SHORTCUT ICON" href="../../Images/jack.png">
        <link rel="stylesheet" href="../style.css">
    </head>
	<body>
		<div class="container">
			<img src="../../Images/banner.png" class="img-responsive hidden-xs" width="100%" style="margin-bottom: 1px; margin-top:3px;">
		</div>
    	<div class="container">
			<?php headerBanner(5); ?>
		</div>
		<div class="container">
  			<h2>HTML5 跨平台程式開發 <br/>(HTML5 Cross-Platform Programing)</h2>
			<ul class="nav nav-tabs">
				<li class="active"><a data-toggle="tab" href="#home">授課教材</a></li>
				<li><a data-toggle="tab" href="#Material">授課大綱與公告</a></li>
				<li><a data-toggle="tab" href="#Homeworks">作業</a></li>
			</ul>
			<div class="tab-content">
				<!--------------影片------------------->
				<div id="home" class="tab-pane fade in active">
					<table class="course">
						<thead>
							<tr>
								<th>No.</th>
								<th>Topic</th>
								<th>Relase date</th>
								<th>Memo</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>01</td>
								<td><a href="https://youtu.be/L28gcipynRA" target="_blank">HTML5介紹</a></td>
								<td>2015/09/14</td>
								<td><a href="http://www.w3schools.com/html/html5_intro.asp">HTML5 Introduction (w3schools)</a><br/>
								    <a href="http://itchen.class.kmu.edu.tw/HTML/content.htm">HTML 教學目錄</a></td>
							</tr>
							<tr class="even">
								<td>02</td>
								<td><a href="http://eplus.asia.edu.tw/channels/248/episodes/1015?locale=zh_tw" target="_blank">HTML5 常用標籤介紹</a></td>
								<td>2015/09/19</td>
								<td></td>
							</tr>
							<tr>
								<td>03</td>
								<td><a href="https://youtu.be/spd4Y6rryTc" target="_blank">HTML 框架設定</a></td>
								<td>2015/09/30</td>
								<td></td>
							</tr>
							<tr class="even">
								<td>04</td>
								<td><a href="http://eplus.asia.edu.tw/channels/279/episodes/1116?locale=zh_tw" target="_blank">CSS 格式樣版套用</a></td>
								<td>2015/09/30</td>
								<td></td>
							</tr>
							<tr>
								<td>05</td>
								<td><a href="https://youtu.be/OG4Hgohrg0w" target="_blank">sublime text Editor Tutorial</a></td>
								<td>2015/09/30</td>
								<td></td>
							</tr>
                            <tr class="even">
								<td>06</td>
								<td><a href="https://youtu.be/AKt0ouTSnek" target="_blank">Brackets Editor 教學</a></td>
								<td>2016/10/06</td>
								<td></td>
							</tr>
                            
						</tbody>
					</table>
				</div>
				
				<div id="Material" class="tab-pane fade">
					<h4 style='height: 1.8em;'>105學年 第一學期 (資工數位 3A)</h4>
					<h4 style='height: 1.8em;'>上課時間：週五 567(13:10~16:00)</h4>
					<h4 style='height: 1.8em;'>上課地點：資訊大樓 I628</h4>
					<h4 style='height: 1.3em;'>教科書：</h4>
					<ol style='padding: 0 0 1.3em 2.5em;'>
						<li style='font-size: 1.3em;'></li>
					</ol>
					<h2 style='height: 1.3em;'>參考書：</h2>
					<ol style='padding: 0 0 1.3em 2.5em;'>
						<li style='font-size: 1.3em;'></li>
					</ol>
					<div id=article>
						<h2>公告</h2>
						<ul>
 							<li><a href="Html5MidExam.html">期中考題目</a></li>  
						</ul>
					</div>
				</div>
				<!--------------課堂練習 and Homeworks------------------->
				<div id="Homeworks" class="tab-pane fade">
					<table class='s1'>
						<tr align="center">
							<th class='s1' width='5%'>編號</th>
							<th class='s1' width='15%'>日期</th>
							<th class='s1' width='60%'>練習題目</th>
							<th class='s1' width='20%'>備註</th>
						</tr>
                    </table>
					<!--------------作業------------------->
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
	    <!-- Bootstrap core JavaScript
	    ================================================== -->
	    <!-- Placed at the end of the document so the pages load faster -->
	    <script src="../../showTime.js"></script>
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	    <script src="../../bootstrap/js/bootstrap.min.js"></script>
	    <script src="../../bootstrap/js/docs.min.js"></script>
	    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	    <script src="../../bootstrap/js/ie10-viewport-bug-workaround.js"></script>
	    
	</body>
</html>
