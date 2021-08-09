<!DOCTYPE html> 
<?php  require('../../fun_inc.php');
session_start();  ?>
<html lang="zh-tw">
    <head>
        <meta charest="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Yung-Chen Chou's Web</title>
        <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">      
        <link rel="stylesheet" href="../../bootstrap/css/Cerulean/bootstrap.min.css">
        <link rel="stylesheet" href="../style.css">
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
  			<h2>視窗程式設計 (Window Programming)</h2>
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
                            <th>No.</th>
                            <th>Topic</th>
                            <th>Release date</th>
                            <th>Memo</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>01</td>
                                <td><a href="https://youtu.be/YGvt30qK6jE">使用 Eclipse 工具編寫 Javafx 之環境設定</a></td>
                                <td>2016/08/10</td>
                                <td></td>
                            </tr>
                            <tr class="even">
                                <td>02</td>
                                <td><a href="https://youtu.be/9e5Kes63d4I" target="_blank">Eclipse編寫環境調校</a></td>
								<td>2016/08/10</td>
								<td></td>
                            </tr>
                            <tr>
								<td>03</td>
								<td><a href="http://eplus.asia.edu.tw/channels/236/episodes/955?locale=zh_tw" target="_blank">
										Java awt 視窗初體驗</a></td>
								<td>2015/09/14</td>
								<td></td>
							</tr>
                            <tr class="even">
								<td>04</td>
								<td><a href="http://eplus.asia.edu.tw/channels/247/episodes/1014?locale=zh_tw" target="_blank">
										Java awt常用元件介紹</a></td>
								<td>2015/09/17</td>
								<td></td>
							</tr>
							<tr>
								<td>05</td>
								<td><a href="https://youtu.be/gFd96T3rcfQ" target="_blank">awt 視窗佈局 BorderLayout</a></td>
								<td>2015/09/29</td>
								<td></td>
							</tr>
                            <tr class="even">
								<td>06</td>
								<td><a href="https://youtu.be/2-ZKYDdBhi4" target="_blank">awt 視窗元件佈局 GridLayout</a></td>
								<td>2015/09/29</td>
								<td></td>
							</tr>
							<tr>
								<td>07</td>
								<td><a href="https://youtu.be/ln9ICM3nbBw" target="_blank">awt 視窗佈局 FlowLayout</a></td>
								<td>2015/09/29</td>
								<td></td>
							</tr>
							<tr class="even">
								<td>08</td>
								<td><a href="https://youtu.be/7nnKH28AQ7c" target="_blank">awt 視窗元件佈局 CardLayout</a></td>
								<td>2015/09/29</td>
								<td></td>
							</tr>
                            <tr>
								<td>09</td>
								<td><a href="http://eplus.asia.edu.tw/channels/278/episodes/1115?locale=zh_tw">Java 視窗 事件處理</a></td>
								<td>2015/09/14</td>
								<td></td>
							</tr>
							<tr class="even">
								<td>10</td>
								<td><a href="http://eplus.asia.edu.tw/channels/281/episodes/1119?locale=zh_tw">AWT其他元件</a></td>
								<td>2015/09/14</td>
								<td>Choice, MenuBar, Menu, Dialog, FileDialog</td>
							</tr>
                            <tr>
								<td>11</td>
								<td><a href="http://eplus.asia.edu.tw/channels/226/episodes/935?locale=zh_tw">Java Swing 初探</a></td>
								<td>2015/09/14</td>
								<td></td>
							</tr>
                            <tr class="even">
								<td>12</td>
								<td><a href="https://youtu.be/UAlxcVwn2lE">BorderLayout 佈局</a></td>
								<td>2015/09/14</td>
								<td></td>
							</tr>
							<tr>
								<td>13</td>
								<td><a href="http://youtu.be/BPNXICwFGpQ">GridLayout 佈局</a></td>
								<td>2015/09/14</td>
								<td></td>
							</tr>
							<tr class="even">
								<td>14</td>
								<td><a href="https://youtu.be/msSy7JUFDlk">教學影片_Java版簡易小畫家</a></td>
								<td>2015/11/18</td>
								<td></td>
							</tr>
                            <tr>
								<td>15</td>
								<td><a href="http://eplus.asia.edu.tw/channels/320/episodes/1254?locale=zh_tw">教學影片_Network 程式設計教學</a></td>
								<td>2016/10/25</td>
								<td></td>
							</tr>
							<tr class="even">
								<td>16</td>
								<td><a href="https://youtu.be/wFVWv9CGYAQ">教學影片_JTable 教學</a></td>
								<td>2016/10/25</td>
								<td></td>
							</tr>
                            <tr>
								<td>17</td>
								<td><a href="http://eplus.asia.edu.tw/channels/299/episodes/1194?locale=zh_tw">教學影片_Java製圖表 JFreeChart</a></td>
								<td>2016/10/25</td>
								<td></td>
							</tr>
							<tr class="even">
								<td>18</td>
								<td><a href="http://eplus.asia.edu.tw/channels/324/episodes/1258?locale=zh_tw">教學影片_Java多執行緒(以水族箱為例)</a></td>
								<td>2016/10/25</td>
								<td></td>
							</tr>
                            
                            <tr>
								<td>19</td>
								<td><a href="http://eplus.asia.edu.tw/channels/320/episodes/1254?locale=zh_tw">教學影片_Java多執行緒(小船慢慢走)</a></td>
								<td>2016/10/25</td>
								<td></td>
							</tr>
							
                        </tbody>
                    </table>
				</div>
				<div id="Material" class="tab-pane fade">
					<h4 style='height: 1.8em;'>104學年 第一學期 (資工數位一A)</h4>
					<h4 style='height: 1.8em;'>上課時間：週一 <del style="color:red;">567(13:10~16:00)</del>ABC(18:30~21:05)</h4>
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