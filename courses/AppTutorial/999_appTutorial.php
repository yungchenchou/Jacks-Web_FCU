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
		<style type="text/css">
			hr {
				display: block;
				height: 1px;
				border-top: 2px solid #44ff22;
				margin: 1em 0;
				padding: 0; 
			}
		</style>
    </head>
	<body>
		<div class="container">
			<img src="../../Images/banner.png" class="img-responsive hidden-xs" width="100%" style="margin-bottom: 1px; margin-top:3px;">
		</div>
    	<div class="container">
			<?php headerBanner(5); ?>
		</div>
		<div class="container">
  			<h2 id="top">APP 學習備忘錄</h2>
			<ul class="nav nav-tabs">
				<li class="active"><a data-toggle="tab" href="#home">授課教材</a></li>
				<li><a data-toggle="tab" href="#Reference">參考資料</a></li>
				<li><a data-toggle="tab" href="#Material">備忘</a></li>
			</ul>
			<div class="tab-content">
				<!-- ------------影片----------------- -->
				<div id="home" class="tab-pane fade in active">

					<table class="table table-bordered">
						<caption>學習大綱</caption>
    					<thead>
      						<tr >
						        <th>初階 (Fundamental Android APP Developer)</th>
						        <th>中階 (Android APP Developer)</th>
						        <th>高階 (Professional Android APP Developer)</th>
							</tr>
						</thead>
					    <tbody>
					    	<tr class="success" style="text-align: center;">
					    		<td>Android Studio 編寫環境介紹 (3hrs)</td>
					    		<td>通訊錄使用檔案與資料庫 (3hrs)</td>
								<td>網路程式設計 (3hrs)</td>
					    	</tr>
					    	<tr class="danger" style="text-align: center;">
					    		<td>基本GUI與MVC觀念 (3hrs)</td>
					    		<td>位置與導航 (3hrs)</td>
					    		<td>檔案上傳與下載 (3hrs)</td>
					    	</tr>
					    	<tr class="info" style="text-align: center;">
					    		<td>Android元件使用 (3hrs)</td>
					    		<td>簡訊與日曆 (3hrs)</td>
					    		<td>社群連結整合 (3hrs)</td>
					    	</tr>
					    	<tr class="success" style="text-align: center;">
					    		<td>Activity 與 intent 切換 (3hrs)</td>
								<td></td>
					    		<td>穿戴裝置整合 (3hrs)</td>
					    	</tr>
						</tbody>
					</table>





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
							<tr style="background-color: #aaffaa; color: black;">
								<td align=center>1</td>
								<td>Android Push count example</td>
								<td><a href="https://www.youtube.com/watch?v=25ipFt1968s&feature=youtu.be">
									<img src="../../Images/youtube.jpg" width=70px></a></td>
								<td>2016/03/22</td>
								<td>張健生同學錄製</td>
							</tr>
							<tr style="background-color: #ffaaaa; color: black;">
								<td align=center>2</td>
								<td>兩數四則運算 (使用 spinner 元件)</td>
								<td><a href="https://www.youtube.com/watch?v=487XK-48AEg">
									<img src="../../Images/youtube.jpg" width=70px></a></td>
								<td>2016/03/22</td>
								<td>張健生同學錄製</td>
							</tr>
							<tr style="background-color: #aaaaff; color: black;">
								<td align=center>3</td>
								<td>Android Push count example</td>
								<td><a href="http://eplus.asia.edu.tw/channels/340/episodes/1373?locale=zh_tw">
									<img src="../../Images/videoOnLine.jpg" height=40px></a></td>
								<td>2016/04/04</td>
								<td>周永振錄製</td>
							</tr>
							<tr style="background-color: #aaffaa; color: black;">
								<td align=center>4</td>
								<td>登入系統+註冊帳號 (使用 SQLite)</td>
								<td><a href="https://www.youtube.com/watch?v=kH-nTETrBCA&feature=youtu.be">
									<img src="../../Images/youtube.jpg" width=70px></a></td>
								<td>2016/04/15</td>
								<td>張健生同學錄製</td>
							</tr>
							<tr style="background-color: #ffaaaa; color: black;">
								<td align=center>5</td>
								<td>使用 Eclipse + ADT + Android SDK 寫 APP(一)</td>
								<td><a href="https://youtu.be/eTtynZOgpys">
									<img src="../../Images/youtube.jpg" width=70px></a></td>
								<td>2016/04/24</td>
								<td>王奕勛同學錄製</td>
							</tr>
							<tr style="background-color: #aaaaff; color: black;">
								<td align=center>6</td>
								<td>使用 Eclipse + ADT + Android SDK 寫 APP(二)</td>
								<td><a href="https://youtu.be/oIA-0WG0-14">
									<img src="../../Images/youtube.jpg" width=70px></a></td>
								<td>2016/04/24</td>
								<td>王奕勛同學錄製</td>
							</tr>
							<tr style="background-color: #aaffaa; color: black;">
								<td align=center>7</td>
								<td>Android 使用 Google Map</td>
								<td><a href="https://www.youtube.com/watch?v=Ru_KW0_uS1Q&feature=youtu.be">
									<img src="../../Images/youtube.jpg" width=70px></a></td>
								<td>2016/04/25</td>
								<td>張健生同學錄製</td>
							</tr>
							<tr style="background-color: #ffaaaa; color: black;">
								<td align=center>7</td>
								<td>兩數相加 + Spinner + 限定資料內容 + 按其他地方鍵盤穩藏</td>
								<td><a href="http://eplus.asia.edu.tw/channels/340/episodes/1428?locale=zh_tw">
									<img src="../../Images/videoOnLine.jpg" height=40px></a></td>
								<td>2016/04/25</td>
								<td><a href="ActivityMain.java.html">ActivityMain.java</a><br />
									<a href="res/Compute2Values.pdf">ppt</a></td>
							</tr>
							<tr style="background-color: #ffaaaa; color: black;">
								<td align=center>8</td>
								<td>手機旋轉方向後維持APP畫面佈局</td>
								<td><a href="https://www.youtube.com/watch?v=PE0sW_JxLcM&feature=youtu.be">
									<img src="../../Images/youtube.jpg" width=70px></a></td>
								<td>2016/05/10</td>
								<td>張健生同學錄製</td>
							</tr>
						</tbody>
					</table>
				</div>

				<!-- ------------ 參考資料 ----------------- -->
				<div id="Reference" class="tab-pane fade">
					<ol>
						<li><a href="https://magiclen.org/android-push-notification/">Android Push Notification - 推播通知訊息給Android客戶端</a></li>
						<li><a href="http://gnehcic.azurewebsites.net/android%E4%BD%BF%E7%94%A8google%E6%8E%A8%E6%92%AD%E6%9C%8D%E5%8B%99/">Android使用Google推播服務</a></li>
						<li><a href="https://www.youtube.com/watch?v=HK515-8-Q_w">Android MySQL Database Tutorial 1 - Creating Database And Writing PHP Script</a></li>
						<li><a href="https://www.youtube.com/watch?v=eldh8l8yPew">Android MySQL Database Tutorial 2 - Android Login with PHP MySQL</a></li>
						<li><a href="https://www.youtube.com/watch?v=UqY4DY2rHOs">Android MySQL Database Tutorial 3 - Connecting Android App to Online Mysql Database</a></li>
						<li><a href="https://youtu.be/wG3XPdVPsxU">sharedPreferences Android Tutorial: For Android</a></li>
						<li><a href="http://blog.csdn.net/u011546655/article/details/42523513">Android 之Handle的使用原理理解</a></li>
						<li><a href="http://takuma-nekomayoi-blog.logdown.com/posts/2014/02/12/android-thread-handler-runnable-concept-and-implementation">Android Thread、Handler、Runnable概念與實作</a></li>
						<li><a href="http://www.slideshare.net/eosinchen/android-ui-1">不同尺寸與解析度的螢幕下，Android 程式UI 的設計與解決方式</a></li>
						<li><a href="https://cg2010studio.com/2013/03/13/%E7%B7%9A%E6%80%A7%E8%88%87%E9%9D%9E%E7%B7%9A%E6%80%A7/">
							線性與非線性</a></li>
						<li><a href="http://www.superid.me/developer/developer.html">手機APP人臉辨識(感謝 明萱同學提供)</a></li>
						<li><a href="http://stackoverflow.com/questions/17805040/how-to-create-a-number-picker-dialog">
							How to create a number picker dialog?</a></li>
						<li><a href="http://stackoverflow.com/questions/4165414/how-to-hide-soft-keyboard-on-android-after-clicking-outside-edittext">how to hide soft keyboard on android after clicking outside EditText?</a></li>
						<li><a href="http://www.barryblogs.com/edittext-inputtype-attributes/">EditText中inputType的屬性列表</a></li>
						<li><a href="http://www.3cblog.idv.tw/2015/03/Android-on-Your-PC.html">[整理] 六個 Android 模擬器比一比</a></li>
						<li><a href="http://blog.30sparks.com/material-design-1-navigation-drawer/">Material Design Patterns 教學 (1) - Navigation Drawer</a></li>
						<li><a href="https://designtongue.me/我用-sketch-設計-android-app-的工作流程/">
							我用 Sketch 設計 Android app 的工作流程</a></li>
						<li><a href="https://developer.android.com/design/material/index.html">
							Material Design for Android</a></li>
						<li><a href="http://blog.akanelee.me/posts/169024-my-uiux-design-enter-methods">
							我的 UI/UX 設計入門方式</a></li>
						<li><a href="http://funiphone.pixnet.net/blog/post/38039025-app%E9%96%8B%E7%99%BC%E6%97%A5%E8%A8%98-%E4%BB%8B%E9%9D%A2%E8%A8%AD%E8%A8%88%E7%9A%84%E5%85%AB%E5%80%8B%E9%BB%83%E9%87%91%E6%B3%95%E5%89%87%E4%B8%8A%E9%9B%86">
							APP開發日記-介面設計的八個黃金法則上集</a></li>
						<li><a href="https://webdemo.balsamiq.com/">線上繪製 APP UI網站</a></li>
						<li><a href="http://blog.jeremyhuang.com/2014/03/android_29.html">
							Android 的推播功能實作</a></li>
						<li><a href="https://heywesley.wordpress.com/2015/04/21/useful-tools-for-ui/">
							介面設計實用工具整理</a></li>
						<li><a href="http://www.soft4fun.net/software/internet/design-ios-win8-android-app-ui-with-fluid-ui.htm#axzz464jX3Zmo">
							用 Fluid UI 輕鬆設計 iOS / Win8 / Android App 介面</a></li>
					</ol>
				</div>
				<div id="Material" class="tab-pane fade">
		  			<table border=0>
		  				<tr>
		  					<td style="text-align: center; background-color: #ccddee; padding-left: 5px; padding-right: 5px;">
		  						<a href="#install">Installation<br/>KUbuntu 15.10</a></td>
		  					<td style="text-align: center; background-color: #ddeecc; padding-left: 5px; padding-right: 5px;">
		  						<a href="#creatAPP">APP Project<br/>Create</a></td>
		  					<td style="text-align: center; background-color: #eeccdd; padding-left: 5px; padding-right: 5px;">
		  						<a href="#backImg">Background<br/>image</a></td>
		  					<td style="text-align: center; background-color: #ccddff; padding-left: 5px; padding-right: 5px;">
		  						<a href="#appComponents">Android APP<br/>Components</a></td>
		  				</tr>
		  			</table>
		  			<h4 id="install">Android Studio Installation (Linux (KUbuntu 15.10))</h4>
					<ol type="1">
						<li><a href="http://developer.android.com/sdk/index.html?gclid=Cj0KEQjw2_23BRDb_qbvzK3X8M8BEiQAg87AF7Vlb6GSfLY1Xu8-o1V-VJNTAn8to5pbuJdUUuVkNwkaAq278P8HAQ#top">
							Download</a> Android Studio</li>
						<li>Unzip the downloaded file</li>
						<li>You should using following instruction to install some packages in KUbnut, before running studio.sh. Otherwise you will get "Unable to run mksdcard SDK tool" error.<br />
							<code>sudo apt-get install lib32z1 lib32ncurses5 lib32stdc++6</code></li>
						<li>change folder to <span style="color: #22aa22;">~/android studio/bin/</span> 
		  					and run <span style="color: green;">studio.sh</span> file<br/>
		  					<img src="images/screenShot_1.png" ><br />
		  					<img src="images/screenShot_02.png" width="70%"><br />
							<img src="images/screenShot_03.png" width="70%"><br />
							<img src="images/screenShot_04.png" width="70%"><br />
							<img src="images/screenShot_05.png" width="70%"><br />
							<img src="images/screenShot_10.png" width="70%"><br />
							<img src="images/screenShot_11.png" width="70%"><br />
							<img src="images/screenShot_08.png" width="70%"><br />
							<img src="images/screenShot_09.png" width="70%"><br /></li>
						<li>SDK Manager: set a minimun API level<br />
							<img src="images/screenShot_12.png" width="70%" alt="Choose a minimum API level"><br />
							<img src="images/screenShot_13.png" width="70%"></li>
					</ol>
					<p style="float: right; color: blue; font-size: 1.3em;">
						<a href="#top">Got Top <span class="glyphicon glyphicon-hand-up" aria-hidden="true"></span></a></p><br/>
					<hr>
		<!--  -----------------------------------------  Android APP Project Creation  ------------------------------------ -->
					<h4 id="creatAPP">Android APP Project Creation</h4>
					<ol type="1">
						<li>Start a new Android Studio project<br />
							<img src="images/screenShot_14.png" width="50%"><br /></li>
						<li>Select the form factors your app will run on<br />
							<img src="images/screenShot_15.png" width="50%"><br /></li>
						<li>Add a activity<br />
							<img src="images/screenShot_16.png" width="50%"><br /></li>
						<li>Customize the Activity<br />
							<img src="images/screenShot_17.png" width="50%"><br /></li>
						<li>APP Project created<br />
							<img src="images/screenShot_18.png" width="100%"><br /></li>
					</ol>
					<p style="float: right; color: blue; font-size: 1.3em;">
						<a href="#top"> Got Top <span class="glyphicon glyphicon-hand-up" aria-hidden="true"></span></a></p><br/>
					<hr>
		<!--  -----------------------------------------  Add background image  ------------------------------------ -->
					<h4 id="backImg">Add background image in your app</h4>
					<ol type="1">
						<li><a href="https://www.google.com.tw/search?q=android+app+background+image&biw=1280&bih=910&tbm=isch&tbo=u&source=univ&sa=X&ved=0ahUKEwjBp5aa-_HLAhXDX5QKHRNzDVkQsAQIGQ">Choose</a> 
							a suitable image</li>
						<li>Copy the background image from file manager<br />
							<img src="images/screenShot_19.png" width="40%"><br /></li>
						<li>Past the image into <b>res/drawable</b> folder<br />
							<img src="images/screenShot_20.png" width="60%"><br /></li>
						<li>add <code>android:background="@drawable/backgroundImg"</code> into <b>content_main.xml</b> file<br />
							<img src="images/screenShot_21.png" width="60%"><br /></li>
						<li>The preview when adding the background image<br />
							<img src="images/screenShot_22.png" width="100%"><br /></li>
						<li>Android studio environment<br />
							<img src="images/screenShot_23.png" width="100%"><br /></li>
						<li>APP Layout and Widgets<br />
							<img src="images/screenShot_24.png" width="70%"><br /></li>
					</ol>
					<p style="float: right; color: blue; font-size: 1.3em;">
						<a href="#top"> Got Top <span class="glyphicon glyphicon-hand-up" aria-hidden="true"></span></a></p><br/>
					<hr>
		
		<!--  -----------------------------------------  Add background image  ------------------------------------ -->
					<h4 id="appComponents">Android APP Components</h4>
					<ol type="1">
						<li>Activity (活動):
							<ol type="i">
								<li>定義使用者介面，讓使用者經由此介面與應用程式互動</li>
								<li>每一個 Activity 都是各自獨立的子類別，代表著應用程式的不同畫面</li>
								<li>當應用程式的另一個畫面或去操作其他應用程式時，目前執行的 Activity 將進入暫停狀態並移到背景等待</li>
								<li>Android裝置可以同時執行多個應用程式，亦即可同時啟動多個活動，但只能有一個活動能和使用者互動</li>
							</ol></li>
						<li>Service (服務)
							<ul type="i">
								<li>服務是不需要顯示畫面的應用程式，可以長時間在背景執行，不會被系統回收資源</li>
								<li>一啟動後將持續執行，除非使用者停止</li>
							</ul></li>
						<li>Broadcast Receiver (廣播接收者): 負責接收來自 Android 作業系統、其他應用程式、或自己程式內所傳播的訊息</li>
						<li>Content Provider (內容提供者):
							<ul type="i">
								<li>Android APP 運行於自有的虛擬環境及程序裡, 形成資料無法共享</li>
								<li>Content Provider 提供共用資料的服務</li>
							</ul></li>
						<li>Intents (意圖):</li>
						<li>Notifications (通知):
							<ul type="i">
								<li>發送訊息給使用者</li>
								<li>不用轉移 APP 的 focus, 或中斷目前的 Activities</li>
							</ul></li>
					</ol>
					<p style="float: right; color: blue; font-size: 1.3em;">
						<a href="#top"> Got Top <span class="glyphicon glyphicon-hand-up" aria-hidden="true"></span></a></p><br/>
					<hr>
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