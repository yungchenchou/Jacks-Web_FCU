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
  			<h2>程式設計(一) (Java Programming 1)</h2>
                <div class="sub-nav">
                <ul class="favLink">
                    <li><a href="https://github.com/" target="_blank">GitHub</a></li>
                    <li><a href="https://classroom.github.com/" target="_blank">GitHub Classroom</a></li>
                    <li><a href="http://moodle.asia.edu.tw/" target="_blank">Asia Moodle</a></li>
                    <li><a href="https://docs.oracle.com/javase/7/docs/api/" target="_blank">Java7 API</a></li>
                    <li><a href="http://120.108.111.204" target="_blank">線上練習</a></li>
                    <li><a href="https://cpe.cse.nsysu.edu.tw/" target="_blank">CPE檢定</a></li>
                    <li><a href="https://cpe.cse.nsysu.edu.tw/" target="_blank">ITSA &amp; PTC</a></li>
                    
                </ul>
            </div>
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
                                <td><a href="resources/01_Java_IDE_Intellij.pdf" target="_blank">安裝JDk 與 IntelliJ 程式編輯器</a></td>
                                <td>2016/07/30</td>
                                <td>教學 ppt 安裝過程簡單</td>
                            </tr>
                            
                            <tr class="even">
								<td>02</td>
								<td>JDK安裝與程式編輯器<a href="https://youtu.be/2zP-Hfgoz8w"><img src="../../Images/youtube.jpg" width=70px>       </a>
								<a href="http://eplus.asia.edu.tw/channels/173/episodes/810?locale=zh_tw">
										<img src="../../Images/videoOnLine.jpg" height=40px></a></td>
								<td>2015/09/14</td>
								<td><a href="https://youtu.be/kxC8Xa-bLsE"><img src="../../Images/youtube.jpg" width=70px>Notepad and Path setting</a>
								</td>
							</tr>
                            
                            <tr>
								<td>03</td>
								<td><a href="https://youtu.be/9e5Kes63d4I" target="_blank">Eclipse編寫環境調校</a></td>
								<td>2016/08/10</td>
								<td></td>
							</tr>
                            
                            <tr class="even">
								<td>04</td>
								<td><a href="https://youtu.be/PwkK_w2P2iA" target="_blank">程式基本架構與變數命名</a></td>
								<td>2016/08/01</td>
								<td></td>
							</tr>
                            <tr>
								<td>05</td>
								<td><a href="https://youtu.be/E8HE1G1EcPg">Java 基本資料型態介紹, 文字介面下的基本輸入與輸出</a></td>
								<td>2015/09/14</td>
								<td></td>
							</tr>
                            <tr class="even">
								<td>06</td>
								<td><a href="https://youtu.be/aAuA-YIBHP4" target="_blank">基本資料型態  (int, short, long)</a></td>
								<td>2016/08/01</td>
								<td></td>
							</tr>
                            <tr class="even">
								<td>07</td>
								<td><a href="https://youtu.be/CTOQCOzXdlA" target="_blank">基本資料型態  (float, double)</a></td>
								<td>2016/08/01</td>
								<td></td>
							</tr>
                            <tr class="even">
								<td>08</td>
								<td><a href="https://youtu.be/9w23gqLezPs" target="_blank">基本資料型態  (char)</a></td>
								<td>2016/08/01</td>
								<td></td>
							</tr>
                            <tr>
								<td>09</td>
								<td><a href="https://youtu.be/eHMZntbXeRI" target="_blank">基本資料型態  (Boolean, byte)</a></td>
								<td>2016/08/01</td>
								<td></td>
							</tr>
                            <tr class="even">
								<td>10</td>
								<td><a href="https://youtu.be/Xvjids1ccOU" target="_blank">四則運算</a></td>
								<td>2016/08/01</td>
								<td>+, -, *, /, %, +=, -=, *=, /= </td>
							</tr>
                            <tr>
								<td>11</td>
								<td><a href="https://youtu.be/VrYRRZX4gKw" target="_blank">邏輯運算</a></td>
								<td>2016/08/02</td>
								<td>&gt;, &gt;=, ==, &lt;=, &lt;, !, &amp;&amp;, || </td>
							</tr>
                            <tr class="even">
								<td>12</td>
								<td><a href="https://youtu.be/bmjNuYEJOVA" target="_blank">變數生命週期與常數</a></td>
								<td>2016/08/02</td>
								<td></td>
							</tr>
                            <tr>
								<td>13</td>
								<td><a href="https://youtu.be/-8jIYRQUAAE" target="_blank">運算式及運算子優先順序</a></td>
								<td>2016/08/02</td>
								<td><img src="resources/Screen%20Shot%202016-08-02%20at%208.27.23%20AM.png" width=400></td>
							</tr>
                            <tr class="even">
								<td>14</td>
								<td><a href="http://youtu.be/fLm0m73BWG8">If-then-else</a></td>
								<td>2015/09/14</td>
								<td></td>
							</tr>
							<tr>
								<td>15</td>
								<td><a href="http://youtu.be/V45Oa-LrET0">Switch-case</a></td>
								<td>2015/09/14</td>
								<td></td>
							</tr>
                            <tr class="even">
								<td>16</td>
								<td><a href="https://youtu.be/bXmHnF7k5ns" target="_blank">迴圈 (for)</a></td>
								<td>2016/08/02</td>
								<td></td>
							</tr>
                            <tr>
								<td>17</td>
								<td><a href="https://youtu.be/0xf50-fYbKg" target="_blank">迴圈 (while) 範例一 </a></td>
								<td>2016/08/03</td>
								<td>以 a 加到 b 為例</td>
							</tr>
                            <tr class="even">
								<td>18</td>
								<td><a href="https://youtu.be/Q8euUuRsPlg" target="_blank">迴圈 (while) 範例二</a></td>
								<td>2016/08/03</td>
								<td>以程式持續執行直到 使用者決定不玩</td>
							</tr>
                            <tr>
								<td>19</td>
								<td><a href="https://youtu.be/PoYKtVWREwk" target="_blank">巢狀迴圈</a></td>
								<td>2016/08/12</td>
								<td>以 a x b 乘法表產生器為例  </td>
							</tr>
                            <tr class="even">
								<td>20</td>
								<td><a href="https://youtu.be/_HDweQcQ_-U" target="_blank">一維陣列</a></td>
								<td>2016/08/16</td>
								<td>1. 整數陣列<br/>2. 字串陣列<br />3. 字元陣列</td>
							</tr>
                            <tr>
								<td>21</td>
								<td><a href="https://youtu.be/dxUjDE2cftU" target="_blank">字串與字元陣列</a></td>
								<td>2016/08/16</td>
								<td>1. 字串轉字元陣列<br />2. 字元陣列轉字串  </td>
							</tr>
                            <tr class="even">
								<td>22</td>
								<td><a href="https://youtu.be/eUqnio6ZVpI" target="_blank">字串處理</a></td>
								<td>2016/08/16</td>
								<td>1. 子字串<br/>2. 取得字串中的某一個字元</td>
							</tr>
                            <tr>
								<td>23</td>
								<td><a href="https://youtu.be/7VTzV8lApFY" target="_blank">多維陣列(二維陣列)</a></td>
								<td>2016/08/18</td>
								<td></td>
							</tr>
                            <tr class="even">
								<td>24</td>
								<td><a href="https://youtu.be/cIGpXAThl04" target="_blank">多維陣列(三維陣列)</a></td>
								<td>2016/08/18</td>
								<td></td>
							</tr>
                            <tr>
								<td>25</td>
								<td><a href="https://youtu.be/Emdn4XYE5v0" target="_blank">函式呼叫 (一)</a></td>
								<td>2016/08/18</td>
								<td>1. 不傳入參數、不回傳值<br />2. 傳入參數但<mark>不回傳值</mark></td>
							</tr>
                            <tr class="even">
								<td>26</td>
								<td><a href="https://youtu.be/JcCI_i8MSxk" target="_blank">函式呼叫 (二)</a></td>
								<td>2016/08/18</td>
								<td>1. 不傳入參數、但要回傳值<br />2. 傳入參數並將處理結果回傳</td>
							</tr>
                            
                            
                            <tr>
								<td>27</td>
								<td><a href="" target="_blank">遞迴呼叫</a>(待錄)</td>
								<td>2016/08/19</td>
								<td></td>
							</tr>
                            <tr class="even">
								<td>28</td>
								<td><a href="" target="_blank">類別介紹</a>(待錄)</td>
								<td>2017/04/13</td>
								<td></td>
							</tr>
                            <tr>
								<td>29</td>
								<td><a href="" target="_blank">類別中的函式多載</a>(待錄)</td>
								<td>2016/08/19</td>
								<td></td>
							</tr>
                            <tr class="even">
								<td>30</td>
								<td><a href="https://youtu.be/NSXnHHlVsz0" target="_blank">類別中的繼承</a></td>
								<td>2017/04/13</td>
								<td></td>
							</tr>
                            <tr>
								<td>31</td>
								<td><a href="https://youtu.be/nXS29i8ht58" target="_blank">抽象類別</a></td>
								<td>2017/04/13</td>
								<td></td>
							</tr>
                            <tr class="even">
								<td>32</td>
								<td><a href="" target="_blank">匿名類別</a>(待錄)</td>
								<td>2016/08/19</td>
								<td></td>
							</tr>
                            <tr>
								<td>33</td>
								<td><a href="https://youtu.be/r8f2v9DSs9o" target="_blank">介面</a></td>
								<td>2017/04/13</td>
								<td></td>
							</tr>
                            <tr class="even">
								<td>34</td>
								<td><a href="" target="_blank">物件陣列</a>(待錄)</td>
								<td>2016/08/19</td>
								<td></td>
							</tr>
                            <tr>
								<td>35</td>
								<td><a href="" target="_blank">使用 ArrayList 管理物件</a>(待錄)</td>
								<td>2016/08/19</td>
								<td></td>
							</tr>
                            <tr class="even">
								<td>36</td>
								<td><a href="" target="_blank">例外處理</a>(待錄)</td>
								<td>2016/08/19</td>
								<td></td>
							</tr>
                            <tr>
								<td>37</td>
								<td><a href="" target="_blank">檔案存取</a>(待錄)</td>
								<td>2016/08/19</td>
								<td></td>
							</tr>
                            <tr class="even">
								<td>38</td>
								<td><a href="" target="_blank">多執行緒</a>(待錄)</td>
								<td>2016/08/19</td>
								<td></td>
							</tr>
                        </tbody>
                    </table>
				</div>
				<div id="Material" class="tab-pane fade">
					<h4 style='height: 1.8em;'>105學年 第一學期 (資工數位一A)</h4>
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