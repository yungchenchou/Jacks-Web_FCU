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
    </head>
	<body>
		<div class="container">
			<img src="../../Images/banner.png" class="img-responsive hidden-xs" width="100%" style="margin-bottom: 1px; margin-top:3px;">
		</div>
    	<div class="container">
			<?php headerBanner(5); ?>
		</div>
		<div class="container">
  			<h2>視窗程式設計 (Java Window Programming)</h2>
			<ul class="nav nav-tabs">
				<li class="active"><a data-toggle="tab" href="#home">授課教材</a></li>
				<li><a data-toggle="tab" href="#Material">授課大綱與公告</a></li>
				<li><a data-toggle="tab" href="#Homeworks">作業</a></li>
			</ul>
			<div class="tab-content">
				<!--------------影片------------------->
				<div id="home" class="tab-pane fade in active">
					<table class="table table-bordered">
						<thead>
							<tr>
								<th>No.</th>
								<th>Title</th>
								<th>Links</th>
								<th>Relase date</th>
								<th>Memo</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>Java awt 視窗初體驗</td>
								<td><a href="http://eplus.asia.edu.tw/channels/236/episodes/955?locale=zh_tw" 
									title="簡單介紹 awt 視窗程式如何撰寫與執行">
										<img src="../../Images/videoOnLine.jpg" height=40px></a></td>
								<td>2015/09/14</td>
								<td></td>
							</tr>
							<tr style="background: #E0FFFF;">
								<td>2</td>
								<td>Java awt常用元件介紹</td>
								<td><a href="http://eplus.asia.edu.tw/channels/247/episodes/1014?locale=zh_tw">
										<img src="../../Images/videoOnLine.jpg" height=40px></a></td>
								<td>2015/09/17</td>
								<td></td>
							</tr>
							<tr>
								<td>3</td>
								<td>awt 視窗佈局 BorderLayout</td>
								<td><a href="https://youtu.be/gFd96T3rcfQ"><img src="../../Images/youtube.jpg" width=70px></a></td>
								<td>2015/09/29</td>
								<td></td>
							</tr>
							<tr style="background: #E0FFFF;">
								<td>4</td>
								<td>awt 視窗元件佈局 GridLayout</td>
								<td><a href="https://youtu.be/2-ZKYDdBhi4"><img src="../../Images/youtube.jpg" width=70px></a></td>
								<td>2015/09/29</td>
								<td></td>
							</tr>
							<tr>
								<td>5</td>
								<td>awt 視窗佈局 FlowLayout</td>
								<td><a href="https://youtu.be/ln9ICM3nbBw"><img src="../../Images/youtube.jpg" width=70px></a></td>
								<td>2015/09/29</td>
								<td></td>
							</tr>
							<tr style="background: #E0FFFF;">
								<td>6</td>
								<td>awt 視窗元件佈局 CardLayout</td>
								<td><a href="https://youtu.be/7nnKH28AQ7c"><img src="../../Images/youtube.jpg" width=70px></a></td>
								<td>2015/09/29</td>
								<td></td>
							</tr>
							<tr>
								<td>7</td>
								<td>Java 視窗 事件處理</td>
								<td><a href="http://eplus.asia.edu.tw/channels/278/episodes/1115?locale=zh_tw">
										<img src="../../Images/videoOnLine.jpg" height=40px></a></td>
								<td>2015/09/14</td>
								<td></td>
							</tr>
							<tr style="background: #E0FFFF;">
								<td>8</td>
								<td>AWT其他元件</td>
								<td><a href="http://eplus.asia.edu.tw/channels/281/episodes/1119?locale=zh_tw">
										<img src="../../Images/videoOnLine.jpg" height=40px></a></td>
								<td>2015/09/14</td>
								<td>Choice, MenuBar, Menu, Dialog, FileDialog</td>
							</tr>
							
							<tr>
								<td>9</td>
								<td>Java Swing 初探</td>
								<td><a href="http://eplus.asia.edu.tw/channels/226/episodes/935?locale=zh_tw">
										<img src="../../Images/videoOnLine.jpg" height=40px></a></td>
								<td>2015/09/14</td>
								<td></td>
							</tr>
							<tr style="background: #E0FFFF;">
								<td>10</td>
								<td>BorderLayout 佈局</td>
								<td><a href="https://youtu.be/UAlxcVwn2lE"><img src="../../Images/youtube.jpg" width=70px></a></td>
								<td>2015/09/14</td>
								<td></td>
							</tr>
							<tr>
								<td>11</td>
								<td>GridLayout 佈局</td>
								<td><a href="http://youtu.be/BPNXICwFGpQ"><img src="../../Images/youtube.jpg" width=70px></a></td>
								<td>2015/09/14</td>
								<td></td>
							</tr>
							<tr style="background: #E0FFFF;">
								<td>12</td>
								<td>教學影片_Java版簡易小畫家</td>
								<td><a href="https://youtu.be/msSy7JUFDlk"><img src="../../Images/youtube.jpg" width=70px></a></td>
								<td>2015/11/18</td>
								<td></td>
							</tr>
							<tr>
								<td>13</td>
								<td>教學影片_JTable 教學</td>
								<td><a href="https://youtu.be/wFVWv9CGYAQ"><img src="../../Images/youtube.jpg" width=70px></a></td>
								<td>2015/12/01</td>
								<td></td>
							</tr>
							<tr style="background: #E0FFFF;">
								<td>14</td>
								<td>教學影片_Java製圖表 JFreeChart</td>
								<td><a href="http://eplus.asia.edu.tw/channels/299/episodes/1194?locale=zh_tw">
									<img src="../../Images/videoOnLine.jpg" height=40px></a></td>
								<td>2015/12/02</td>
								<td></td>
							</tr>
							<tr>
								<td>15</td>
								<td>教學影片_Network 程式設計教學</td>
								<td><a href="http://eplus.asia.edu.tw/channels/320/episodes/1254?locale=zh_tw">
									<img src="../../Images/videoOnLine.jpg" height=40px></a></td>
								<td>2015/12/08</td>
								<td></td>
							</tr>
							<tr style="background: #E0FFFF;">
								<td>16</td>
								<td>教學影片_Java多執行緒(以水族箱為例)</td>
								<td><a href="http://eplus.asia.edu.tw/channels/324/episodes/1258?locale=zh_tw">
									<img src="../../Images/videoOnLine.jpg" height=40px></a></td>
								<td>2015/12/15</td>
								<td></td>
							</tr>
							<tr>
								<td>17</td>
								<td>教學影片_Java多執行緒(小船慢慢走)</td>
								<td><a href="http://eplus.asia.edu.tw/channels/320/episodes/1254?locale=zh_tw">
									<img src="../../Images/videoOnLine.jpg" height=40px></a></td>
								<td>2015/12/23</td>
								<td></td>
							</tr>
							
						</tbody>
					</table>
				</div>
				
				<div id="Material" class="tab-pane fade">
					<h4 style='height: 1.8em;'>104學年 第一學期 (資工數位二A)</h4>
					<h4 style='height: 1.8em;'>上課時間：週三 234(19:10~12:00)</h4>
					<h4 style='height: 1.8em;'>上課地點：資訊大樓 H103</h4>
					<h4 style='height: 1.3em;'>教科書：</h4>
					<ol style='padding: 0 0 1.3em 2.5em;'>
						<li style='font-size: 1.3em;'></li>
					</ol>
					<h2 style='height: 1.3em;'>參考書：</h2>
					<ol style='padding: 0 0 1.3em 2.5em;'>
						<li style='font-size: 1.3em;'></li>
					</ol>
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

