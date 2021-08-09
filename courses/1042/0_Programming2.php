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
  			<h2>程式設計(二) (Java Programming 2)</h2>
			<ul class="nav nav-tabs">
				<li class="active"><a data-toggle="tab" href="#home">授課教材</a></li>
				<li><a data-toggle="tab" href="#Material">授課大綱與公告</a></li>
				<li><a data-toggle="tab" href="#Homeworks">作業</a></li>
			</ul>
			<div class="tab-content">
				<!-- ------------影片----------------- -->
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
							<tr style="background-color: #aaaaff; color: black;">
								<td>1</td>
								<td>Java 物件基本觀念</td>
								<td><a href="https://youtu.be/Vrkvpkuse_4"><img src="../../Images/youtube.jpg" width=70px></a></td>
								<td>2016/02/24</td>
								<td>以 Student 為例子</td>
							</tr>
							<tr style="background-color: #aaffaa; color: black;">
								<td>2</td>
								<td>物件陣列</td>
								<td><a href="https://youtu.be/vn0WTlgUyZE"><img src="../../Images/youtube.jpg" width=70px></a></td>
								<td>2016/02/24</td>
								<td></td>
							</tr>
							<tr style="background-color: #aaaaff; color: black;">
								<td>3</td>
								<td>使用 ArrayList 管理物件</td>
								<td><a href="http://eplus.asia.edu.tw/channels/334/episodes/1305?locale=zh_tw">
									<img src="../../Images/videoOnLine.jpg" height=40px></a></td>
								<td>2016/02/25</td>
								<td>以 Student 為例子</td>
							</tr>
							<tr style="background-color: #aaffaa; color: black;">
								<td>4</td>
								<td>多載與資料成員存取控制</td>
								<td><a href="https://youtu.be/z-oFyPaO3zY"><img src="../../Images/youtube.jpg" width=70px></a></td>
								<td>2016/03/02</td>
								<td></td>
							</tr>
							<tr style="background-color: #aaaaff; color: black;">
								<td>5</td>
								<td>類別函式</td>
								<td><a href="https://youtu.be/SUSeptMuCV8">
									<img src="../../Images/youtube.jpg" width=70px></a></td>
								<td>2016/03/02</td>
								<td></td>
							</tr>
							<tr style="background-color: #aaffaa; color: black;">
								<td>6</td>
								<td>Class Inheritance</td>
								<td><a href="https://youtu.be/5Od_H9toBko"><img src="../../Images/youtube.jpg" width=70px></a></td>
								<td>2016/03/16</td>
								<td></td>
							</tr>
							<tr style="background-color: #aaaaff; color: black;">
								<td>7</td>
								<td>Abstract Class and Interface</td>
								<td><a href="https://youtu.be/janGWSQBo_0">
									<img src="../../Images/youtube.jpg" width=70px></a></td>
								<td>2016/03/16</td>
								<td></td>
							</tr>
							<tr style="background-color: #aaffaa; color: black;">
								<td>8</td>
								<td>教學影片_Network 程式設計教學</td>
								<td><a href="http://eplus.asia.edu.tw/channels/320/episodes/1254?locale=zh_tw">
									<img src="../../Images/videoOnLine.jpg" height=40px></a></td>
								<td>2016/03/16</td>
								<td></td>
							</tr>
							
							<tr>
								<td>1</td>
								<td>JDK安裝與程式編輯器</td>
								<td><a href="https://youtu.be/2zP-Hfgoz8w"><img src="../../Images/youtube.jpg" width=70px></a>
									<a href="http://eplus.asia.edu.tw/channels/173/episodes/810?locale=zh_tw">
										<img src="../../Images/videoOnLine.jpg" height=40px></a></td>
								<td>2015/09/14</td>
								<td><a href="https://youtu.be/kxC8Xa-bLsE"><img src="../../Images/youtube.jpg" width=70px>Notepad and Path setting</a>
									<a href="http://eplus.asia.edu.tw/channels/173/episodes/810?locale=zh_tw">
								</td>
							</tr>
							<tr style="background: #E0FFFF;">
								<td>2</td>
								<td>Java 基本資料型態介紹, 文字介面下的基本輸入與輸出</td>
								<td><a href="https://youtu.be/E8HE1G1EcPg"><img src="../../Images/youtube.jpg" width=70px></a>
									<a href="http://eplus.asia.edu.tw/channels/216/episodes/922?locale=zh_tw">
										<img src="../../Images/videoOnLine.jpg" height=40px></a></td>
								<td>2015/09/14</td>
								<td></td>
							</tr>
							<tr>
								<td>3</td>
								<td>Java 變數命名與程式除錯</td>
								<td><a href="http://youtu.be/MG0MkiMqBx4"><img src="../../Images/youtube.jpg" width=70px></a>
									<a href="http://eplus.asia.edu.tw/channels/218/episodes/923?locale=zh_tw">
										<img src="../../Images/videoOnLine.jpg" height=40px></a></td>
								<td>2015/09/14</td>
								<td></td>
							</tr>
							<tr style="background: #E0FFFF;">
								<td>4</td>
								<td>If-then-else</td>
								<td><a href="http://youtu.be/fLm0m73BWG8"><img src="../../Images/youtube.jpg" width=70px></a>
									<a href="http://eplus.asia.edu.tw/channels/218/episodes/925?locale=zh_tw">
										<img src="../../Images/videoOnLine.jpg" height=40px></a></td>
								<td>2015/09/14</td>
								<td></td>
							</tr>
							<tr>
								<td>5</td>
								<td>Switch-case</td>
								<td><a href="http://youtu.be/V45Oa-LrET0"><img src="../../Images/youtube.jpg" width=70px></a>
									<a href="http://eplus.asia.edu.tw/channels/218/episodes/926?locale=zh_tw">
										<img src="../../Images/videoOnLine.jpg" height=40px></a></td>
								<td>2015/09/14</td>
								<td></td>
							</tr>
							<tr style="background: #E0FFFF;">
								<td>6</td>
								<td>for迴圈</td>
								<td><a href="https://youtu.be/8zb_PuEGm54"><img src="../../Images/youtube.jpg" width=70px></a>
									<a href="http://eplus.asia.edu.tw/channels/219/episodes/927?locale=zh_tw">
										<img src="../../Images/videoOnLine.jpg" height=40px></a></td>
								<td>2015/09/14</td>
								<td></td>
							</tr>
							<tr>
								<td>7</td>
								<td>While 迴圈</td>
								<td><a href="https://youtu.be/KQVP6szda0I"><img src="../../Images/youtube.jpg" width=70px></a></td>
								<td>2015/09/14</td>
								<td></td>
							</tr>
							<tr style="background: #E0FFFF;">
								<td>8</td>
								<td>陣列Array</td>
								<td><a href="http://youtu.be/I3qkqyOX8P4"><img src="../../Images/youtube.jpg" width=70px></a>
									<a href="http://eplus.asia.edu.tw/channels/221/episodes/929?locale=zh_tw">
										<img src="../../Images/videoOnLine.jpg" height=40px></a></td>
								<td>2015/09/14</td>
								<td></td>
							</tr>
							<tr>
								<td>9</td>
								<td>2維陣列</td>
								<td><a href="http://youtu.be/sf5I8jcwqEM"><img src="../../Images/youtube.jpg" width=70px></a>
									<a href="http://eplus.asia.edu.tw/channels/222/episodes/930?locale=zh_tw">
										<img src="../../Images/videoOnLine.jpg" height=40px></a></td>
								<td>2015/09/14</td>
								<td></td>
							</tr>
							<tr style="background: #E0FFFF;">
								<td>10</td>
								<td>函式呼叫</td>
								<td><a href="http://youtu.be/lncnIKL8TRo"><img src="../../Images/youtube.jpg" width=70px></a>
									<a href="http://eplus.asia.edu.tw/channels/223/episodes/931?locale=zh_tw">
										<img src="../../Images/videoOnLine.jpg" height=40px></a></td>
								<td>2015/09/14</td>
								<td></td>
							</tr>
							<tr>
								<td>11</td>
								<td>遞迴呼叫</td>
								<td><a href="https://youtu.be/CFXG-_9hOV8"><img src="../../Images/youtube.jpg" width=70px></a>
									<a href="http://eplus.asia.edu.tw/channels/224/episodes/932?locale=zh_tw">
										<img src="../../Images/videoOnLine.jpg" height=40px></a></td>
								<td>2015/09/14</td>
								<td></td>
							</tr>
							<tr style="background: #E0FFFF;">
								<td>12</td>
								<td>類別介紹</td>
								<td><a href="https://youtu.be/P9ymfaRNmg0"><img src="../../Images/youtube.jpg" width=70px></a>
									<a href="http://eplus.asia.edu.tw/channels/225/episodes/934?locale=zh_tw">
										<img src="../../Images/videoOnLine.jpg" height=40px></a></td>
								<td>2015/09/14</td>
								<td></td>
							</tr>
							<tr>
								<td>13</td>
								<td>類別-物件陣列</td>
								<td><a href="http://youtu.be/fDNhH8XMluA"><img src="../../Images/youtube.jpg" width=70px></a>
									<a href="http://eplus.asia.edu.tw/channels/225/episodes/933?locale=zh_tw">
										<img src="../../Images/videoOnLine.jpg" height=40px></a></td>
								<td>2015/09/14</td>
								<td></td>
							</tr>
							<tr style="background: #E0FFFF;">
								<td>14</td>
								<td>Java Swing 初探</td>
								<td><a href="http://eplus.asia.edu.tw/channels/226/episodes/935?locale=zh_tw">
										<img src="../../Images/videoOnLine.jpg" height=40px></a></td>
								<td>2015/09/14</td>
								<td></td>
							</tr>
							<tr>
								<td>15</td>
								<td>BorderLayout 佈局</td>
								<td><a href="https://youtu.be/UAlxcVwn2lE"><img src="../../Images/youtube.jpg" width=70px></a></td>
								<td>2015/09/14</td>
								<td></td>
							</tr>
							<tr style="background: #E0FFFF;">
								<td>16</td>
								<td>GridLayout 佈局</td>
								<td><a href="http://youtu.be/BPNXICwFGpQ"><img src="../../Images/youtube.jpg" width=70px></a></td>
								<td>2015/09/14</td>
								<td></td>
							</tr>
							<tr>
								<td>17</td>
								<td>解題_01</td>
								<td><a href="https://youtu.be/87T2irKYyjM"><img src="../../Images/youtube.jpg" width=70px></a></td>
								<td>2015/12/14</td>
								<td>讓使用者輸入一正整數n，利用函數呼叫計算1*(1+1) + 2*(2+1) + 3*(3+1) + … + n*(n+1)<br />
								並回傳計算結果並將輸出印出。</td>
							</tr>
							<tr style="background: #E0FFFF;">
								<td>18</td>
								<td>解題_02</td>
								<td><a href="https://youtu.be/Q2NfOgj5W5A"><img src="../../Images/youtube.jpg" width=70px></a></td>
								<td>2015/12/14</td>
								<td>寫一遞迴呼叫 lcm(x, y),求兩數之最小公倍數</td>
							</tr>
							<tr>
								<td>19</td>
								<td>解題_03</td>
								<td><a href="https://youtu.be/ZKwX0_2S-tI"><img src="../../Images/youtube.jpg" width=70px></a></td>
								<td>2015/12/21</td>
								<td>讓使用者輸入一正整數n，利用函式呼叫輸出n的所有正因數，並判斷該整數是否為質數</td>
							</tr>
							<tr style="background: #E0FFFF;">
								<td>20</td>
								<td>解題_04</td>
								<td><a href="https://youtu.be/haMki5qWBcw"><img src="../../Images/youtube.jpg" width=70px></a></td>
								<td>2015/12/21</td>
								<td>讓使用者輸入一正整數，利用函式呼叫找出一連續整數數列讓該數列的和為此一正整數，有些正整數並不能找出連續整數，若找不到時，請印出 “No”<br/>
        例如：15=1+2+3+4+5<br/>
                =4+5+6<br/>
                =7+8</td>
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