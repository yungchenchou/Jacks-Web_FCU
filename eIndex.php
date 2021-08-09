<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<?
include("calender.php");
include("mycounter.php");
include("mainMenu.php");
// 瀏覽人數計數器
session_start();
$_SESSION['counted'] = 1;
?>

<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-TW">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Jack's Web</title>
	<link rel="stylesheet" type="text/css" href="css/Jack_PHP.css" media="screen" />
</head>
<body>
	<div id="wrap">
		<?php headerBanner();
		 sideNavEng(1); ?>
		<div id="content">
			<table align=center width=100%>
				<tr>
					<td align=center>
						<span style="font-size: 2em; line-height: 2em; font-weight: bold;">
							Yung-Chen Chou (周永振)</span>
							<span style="font-size: 1.4em;">  Ph.D.</span><br /><br />
						<span style="font-size: 1.6em; line-height: 1.6em;"><a href="http://mslab.csie.asia.edu.tw/doku">
							Multimedia Security Laboratory,</a><br />
							<a href="http://csie.asia.edu.tw/">Department of Computer Science and Information Engineering,</a><br />
							<a href="http://www.asia.edu.tw/">Asia University</a></span><br />
						<table border="0">
							<tr align=center>
								<td>
									<span style="font-size: 1.5em; line-height: 1.4em; font-family: 'Times New Romans';">
										<b>Research fields:</b> Digital Watermarking, Image Retrieval,
									Image Processing, Steganography, and Information Security<br /><br />
									<b>TEL:</b> +886-4-2332-3456 Ext: 48005<br />
									<b>FAX:</b> +886-4-2330-5737<br />
									<b>E-mail:</b> <a href="mailto:yungchen@gmail.com">yungchen@gmail.com</a> also
									<a href="mailto:yungchen@asia.edu.tw">yungchen@asia.edu.tw</a><br />
									<b>Post address:</b> No. 500, Lioufeng Rd., Wufeng, Taichung 41354, Taiwan, R.O.C.</span>
								</td>
							</tr>
						</table>
					</td>
					<td align=center style="vertical-align: top;">
						<img src="Images/Jack.png" border="2" alt="Jack" style="margin-top:20px;"/></td>
				</tr>
			</table>
		</div>
		<div id="footer">
			You are <? MyCounter();?>'th visitor since May 2010<br/>
			Current time: <span id="clock"><script type ="text/javascript" src="showTime.js"></script></span>
		</div>
	</div>
</body>
</html>
