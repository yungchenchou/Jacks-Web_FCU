<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
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
			<h1 style='height: 2em; padding-top: 5px'>資訊隱藏概論 (Introduction to Steganography)</h1>
			<h3 style='height: 1.8em;'>102學年 第一學期 (資管3A)</h3>
			<h3 style='height: 1.8em;'>上課時間：週一 234(09:25~12:10)</h3>
			<h3 style='height: 1.8em;'>上課地點：T2-505</h3>
			<h2 style='height: 1.3em;'>教科書：</h2>
			<ol style='padding: 0 0 1.3em 2.5em;'>
				<li style='font-size: 1.3em;'>多媒體安全技術, 呂慈純、陸哲明、張真誠, 全華圖書股份有限公司, 書號: 060207</li>
			</ol>
			<h2 style='height: 1.3em;'>參考書：</h2>
			<ol style='padding: 0 0 1.3em 2.5em;'>
				<li style='font-size: 1.3em;'>
					Ingemar J. Cox, Matthew L. Miller, Jeffery A. Bloom, Jessica Fridrich, and Ton Kalker, “Digital Watermarking and Steganography,” The Morgan Kaufmann Series in Multimedia Information and Systems, ISBN: 978-0-12-372585-1</li>
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
						<tr align=center>
							<td class='s1'>1.</td>
							<td class='s1'>2013.09.17</td>
							<td class='s1'><a href="courses/1021_cyut_steganography/ppt/00_Syllabus.pptx">
								課程介紹</a></td>
							<td class='s1'></td>
						</tr>
						<tr align=center>
							<td class='s1'>2.</td>
							<td class='s1'>2013.09.17</td>
							<td class='s1'><a href="courses/1021_cyut_steganography/ppt/01_Octave Tutorial.pptx">
								Octave 介紹</a></td>
							<td class='s1'></td>
						</tr>
						<tr align=center>
							<td class='s1'>3.</td>
							<td class='s1'>2013.09.17</td>
							<td class='s1'><a href="courses/1021_cyut_steganography/ppt/Chapter 1.pptx">
								資訊隱藏介紹</a></td>
							<td class='s1'></td>
						</tr>
<!--
                        <tr>
                            <td align="center">2.</td>
                            <td align="center">2011/09/17</td>
                            <td><a href="courses/1021_WindowsProgram/ppt/Netbeans701_Tutorial.pdf">NetBeans 7.0.1 入門教學</a></td>
                            <td align="center"></td>
                        </tr>
                        <tr>
                            <td align="center">3.</td>
                            <td align="center">2011/09/09</td>
                            <td><a href="courses/1001_WindowsProgram/ppt/01_Introduction.pdf">簡介</a></td>
                            <td align="center"></td>
                        </tr>
                        <tr>
                            <td align="center">4.</td>
                            <td align="center">2011/09/21</td>
                            <td><a href="courses/1001_WindowsProgram/ppt/02_CodingStyle.pdf">簡單的Java程式</a></td>
                            <td align="center"></td>
                        </tr>
                        <tr>
                            <td align="center">5.</td>
                            <td align="center">2011/09/21</td>
                            <td><a href="courses/1001_WindowsProgram/ppt/03_Variable.pdf">變數與資料型態</a></td>
                            <td align="center"></td>
                        </tr>
                        <tr>
                            <td align="center">6.</td>
                            <td align="center">2011/09/21</td>
                            <td><a href="courses/1001_WindowsProgram/ppt/04_Express.pdf">運算子、運算式與敘述</a></td>
                            <td align="center"></td>
                        </tr>
                        <tr>
                            <td align="center">7.</td>
                            <td align="center">2011/09/21</td>
                            <td><a href="courses/1001_WindowsProgram/ppt/05_FlowControl.pdf">選擇性敘述與迴圈</a></td>
                            <td align="center"></td>
                        </tr>
                        <tr>
                            <td align="center">8.</td>
                            <td align="center">2011/09/21</td>
                            <td><a href="courses/1001_WindowsProgram/ppt/06_Array.pdf">陣列</a></td>
                            <td align="center"></td>
                        </tr>
                        <tr>
                            <td align="center">9.</td>
                            <td align="center">2011/09/21</td>
                            <td><a href="courses/1001_WindowsProgram/ppt/07_Function.pdf">函數</a></td>
                            <td align="center"></td>
                        </tr>
                        <tr>
                            <td align="center">10.</td>
                            <td align="center">2011/09/21</td>
                            <td><a href="courses/1001_WindowsProgram/ppt/08_Class.pdf">認識類別</a></td>
                            <td align="center"></td>
                        </tr>
                        <tr>
                            <td align="center">11.</td>
                            <td align="center">2011/09/21</td>
                            <td><a href="courses/1001_WindowsProgram/ppt/09_Adv_Class.pdf">類別的進階認識</a></td>
                            <td align="center"></td>
                        </tr>
                        <tr>
                            <td align="center">12.</td>
                            <td align="center">2011/09/21</td>
                            <td><a href="courses/1001_WindowsProgram/ppt/10_ClassInheri.pdf">類別的繼承</a></td>
                            <td align="center"></td>
                        </tr>
                        <tr>
                            <td align="center">13.</td>
                            <td align="center">2011/09/21</td>
                            <td><a href="courses/1001_WindowsProgram/ppt/11_Abstract.pdf">抽象類別與介面</a></td>
                            <td align="center"></td>
                        </tr>
                        <tr>
                            <td align="center">14.</td>
                            <td align="center">2011/09/21</td>
                            <td><a href="courses/1001_WindowsProgram/ppt/12_Package.pdf">大型程式的發展與常用的類別庫</a></td>
                            <td align="center"></td>
                        </tr>
                        <tr>
                            <td align="center">15.</td>
                            <td align="center">2011/09/21</td>
                            <td><a href="courses/1001_WindowsProgram/ppt/13_Exception.pdf">例外處理</a></td>
                            <td align="center"></td>
                        </tr>
                        <tr>
                            <td align="center">16.</td>
                            <td align="center">2011/09/21</td>
                            <td><a href="courses/1001_WindowsProgram/ppt/14_File.pdf">檔案處理</a></td>
                            <td align="center"></td>
                        </tr>
                        <tr>
                            <td align="center">17.</td>
                            <td align="center">2011/09/21</td>
                            <td><a href="courses/1001_WindowsProgram/ppt/15_multiThread.pdf">多執行緒</a></td>
                            <td align="center"></td>
                        </tr>
                        <tr>
                            <td align="center">18.</td>
                            <td align="center">2011/09/21</td>
                            <td><a href="courses/1001_WindowsProgram/ppt/16_Java collection.pdf">Java collection集合物件</a></td>
                            <td align="center"></td>
                        </tr>
                        <tr>
                            <td align="center">19.</td>
                            <td align="center">2011/09/21</td>
                            <td><a href="courses/1001_WindowsProgram/ppt/17_AWT.pdf">AWT視窗物件</a></td>
                            <td align="center"></td>
                        </tr>
                        <tr>
                            <td align="center">20.</td>
                            <td align="center">2011/09/21</td>
                            <td><a href="courses/1001_WindowsProgram/ppt/18_Event.pdf">事件處理</a></td>
                            <td align="center"></td>
                        </tr>
                        <tr>
                            <td align="center">21.</td>
                            <td align="center">2011/09/21</td>
                            <td><a href="courses/1001_WindowsProgram/ppt/19_AWT_advance.pdf">AWT的其它物件</a></td>
                            <td align="center"></td>
                        </tr>
                        <tr>
                            <td align="center">22.</td>
                            <td align="center">2011/09/21</td>
                            <td><a href="courses/1001_WindowsProgram/ppt/20_AWT_Drawing.pdf">AWT的繪圖</a></td>
                            <td align="center"></td>
                        </tr>
                        <tr>
                            <td align="center">23.</td>
                            <td align="center">2011/09/21</td>
                            <td><a href="courses/1001_WindowsProgram/ppt/21_Applet.pdf">網頁的精靈-applet</a></td>
                            <td align="center"></td>
                        </tr>
                        <tr>
                            <td align="center">24.</td>
                            <td align="center">2011/09/21</td>
                            <td><a href="courses/1001_WindowsProgram/ppt/22_Network.pdf">網路程式設計</a></td>
                            <td align="center"></td>
                        </tr>
                        <tr>
                            <td align="center">25.</td>
                            <td align="center">2011/09/21</td>
                            <td><a href="courses/1001_WindowsProgram/ppt/23_Swing.pdf">認識Swing</a></td>
                            <td align="center"></td>
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
 
						<tr align=center>
							<td class='s1'>1.</td>
							<td class='s1'>2013.09.17</td>
							<td class='s1'><a href="courses/1021_WindowsProgramming/DC_Ex_HW/Ex_20130917.pdf">簡易視窗練習</a></td>
							<td class='s1'></td>
						</tr>
<!--                        

                        <tr align="center">
                            <td width="50">2011/09/15</td>
                            <td width="280"><a href="courses/1001_WindowsProgram/Ex/Ex_2011_09_15.pdf">練習</a>
								<a href="courses/1001_WindowsProgram/Ex/Ex_2011_09_15_1.pdf">進階練習</a></td>
                            <td width="250"></td>
                        </tr>
                        <tr align="center">
                            <td width="50">2011/09/22</td>
                            <td width="280"><a href="courses/1001_WindowsProgram/Ex/Ex_2011_09_22.pdf">練習</a></td>
                            <td width="250"></td>
                        </tr>
                        <tr align="center">
                            <td width="50">2011/09/29</td>
                            <td width="280"><a href="courses/1001_WindowsProgram/Ex/Ex_2011_09_29.pdf">度量衡轉換</a></td>
                            <td width="250"><a href="courses/1001_WindowsProgram/Ex/ref_2011_09_29.pdf">參考</a></td>
                        </tr>
                        <tr align="center">
                            <td width="50">2011/10/06</td>
                            <td width="280"><a href="courses/1001_WindowsProgram/Ex/Ex_2011_10_06.pdf">迴圈練習</a>    
                            	<a href="courses/1001_WindowsProgram/Ex/Ex_2011_10_06_Adv.pdf">進階迴圈練習</a></td>
                            <td width="250"><a href="courses/1001_WindowsProgram/Ex/ref_2011_10_06.pdf">參考</a></td>
                        </tr>
                        <tr align="center">
                            <td width="50">2011/10/13</td>
                            <td width="280"><a href="courses/1001_WindowsProgram/Ex/Ex_2011_10_13.pdf">閏年判斷</a>    
                            	<a href="courses/1001_WindowsProgram/Ex/Ex_2011_10_13_Adv.pdf">進階閏年判斷</a></td>
                            <td width="250"><a href="courses/1001_WindowsProgram/Ex/ref_2011_10_13.pdf">參考</a></td>
                        </tr>
                        <tr align="center">
                            <td width="50">2011/10/20</td>
                            <td width="280"><a href="courses/1001_WindowsProgram/Ex/Ex_2011_10_20.pdf">簡易計時器</a></td>
                            <td width="250"><a href="courses/1001_WindowsProgram/Ex/ref_2011_10_20.pdf">參考</a></td>
                        </tr>
                        <tr align="center">
                            <td width="50">2011/10/27</td>
                            <td width="280"><a href="courses/1001_WindowsProgram/Ex/Ex_2011_10_27.pdf">無條件安全加密</a>    
								<a href="courses/1001_WindowsProgram/Ex/Ex_2011_10_27_Adv.pdf">進階</a></td>
    		                <td width="250"><a href="courses/1001_WindowsProgram/Ex/ref_2011_10_27.pdf">參考</a><br>
								<a href="courses/1001_WindowsProgram/Ex/noCondEncryption.pdf">無條件安全密碼系統</a></td>
                        </tr>
                        <tr align="center">
                            <td width="50">2011/11/03</td>
                            <td width="280"><a href="courses/1001_WindowsProgram/Ex/Ex_2011_11_03.pdf">練習</a></td>
                            <td width="250"></td>
                        </tr>
                        <tr align="center">
                            <td width="50">2011/11/17</td>
                            <td width="280"><a href="courses/1001_WindowsProgram/Ex/Ex_2011_11_17.pdf">期末成績預算</a><br/>
	                            <a href="courses/1001_WindowsProgram/Ex/Ex_2011_11_17_Adv.pdf">進階</a></td>
                            <td width="250"><a href="courses/1001_WindowsProgram/Ex/ref_2011_11_17.pdf">參考</a></td>
                        </tr>
                        <tr align="center">
                            <td width="50">2011/11/24</td>
                            <td width="280"><a href="courses/1001_WindowsProgram/Ex/Ex_2011_11_24.pdf">類別練習</a></td>
                            <td width="250"><a href="courses/1001_WindowsProgram/Ex/ref_2011_11_24.pdf">參考</a></td>
                        </tr>
                        <tr align="center">
                            <td width="50">2011/12/01</td>
                            <td width="280"><a href="courses/1001_WindowsProgram/Ex/Ex_2011_12_01.pdf">簡易數字顯示器(使用物件陣列)</a></td>
                            <td width="250"><a href="courses/1001_WindowsProgram/Ex/ref_2011_12_01.pdf">參考</a></td>
                        </tr>
                        <tr align="center">
                            <td width="50">2011/12/08</td>
                            <td width="280"><a href="courses/1001_WindowsProgram/Ex/Ex_2011_12_08.pdf">影像檢視器</a></td>
                            <td width="250"><a href="courses/1001_WindowsProgram/Ex/ref_2011_12_08.pdf">參考</a></td>
                        </tr>
						<tr align="center">
							<td>2011/12/15</td>
							<td><a href="courses/1001_WindowsProgram/Ex/Ex_2011_12_15.pdf">簡易記事本</a></td>
							<td><a href="courses/1001_WindowsProgram/Ex/ref_2011_12_15.pdf">參考</a></td>
						</tr>
						<tr align="center">
							<td>2011/12/22</td>
							<td><a href="courses/1001_WindowsProgram/Ex/Ex_2011_12_22.pdf">課堂練習</a></td>
							<td></td>
						</tr>
						<tr align="center">
							<td>2011/12/29</td>
							<td><a href="courses/1001_WindowsProgram/Ex/Ex_2011_12_29.pdf">課堂練習</a></td>
							<td><a href="courses/1001_WindowsProgram/Ex/ref_2011_12_29.pdf">參考</a><br/>
								<a href="courses/1001_WindowsProgram/tutorial_2011.12.29.pdf">補救教學</a></td>
						</tr>
						<tr align="center">
							<td>2012/01/05</td>
							<td><a href="courses/1001_WindowsProgram/Ex/Ex_2012_01_05.pdf">課堂練習</a></td>
							<td></td>
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

						<tr align=center>
							<td class='s1'>1.</td>
							<td class='s1'><a href="courses/1021_cyut_steganography/hw/hw_2013_09_16.pdf">簡易繪圖</a></td>
							<td class='s1'>2013.09.22<br />(中午12:00前)</td>
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
