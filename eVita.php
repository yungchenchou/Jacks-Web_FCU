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
	<title>Jack Vita</title>
	<link rel="stylesheet" type="text/css" href="css/Jack_PHP.css" media="screen" />
</head>
<body>
	<div id="wrap">
		<?php headerBanner(); 
			sideNavEng(2); ?>
		<div id="content">
			<div class="article">
				<span class='articleTitle'>Education</span>
				<ol>
					<li><a href="http://www.cs.ccu.edu.tw>">Department of Computer Science and Information Engineering</a>,
						<a href="http://www.ccu.edu.tw/">National Chung Cheng University</a>, Ph.D., 2002/09~2008/12</li>
					<li><a href="http://www.im.cyut.edu.tw>">Department of Information Management</a>, 
						<a href="http://www.cyut.edu.tw/">Chaoyang University of Technology</a>, Master，2000/09~2002/06</li>
					<li><a href="http://www.mis.npust.edu.tw>">Department of Management Information Systems</a>，
						<a href="http://www.npust.edu.tw/">National Pingtung University of Science and Technology</a>, Bachelor, 1996/09~1998/06</li>
				</ol>
			</div>

			<div class="article">
				<span class='articleTitle'>Experience</span>
				<ol>
					<li>Department of Computer Science and Information Engineering, Asia University, Assistant Professor, 2009/02 ~ present</li>
				</ol>
			</div>
			
			<h2>校內服務</h2>
			<hr />
			<ol>
				<li class="pubStyle1">擔任亞洲大學資訊工程學系學習導師，2009/08~2010/07</li>
				<li class="pubStyle1">擔任亞洲大學資訊工程學系IEET認證推動小組(規範2)，2009/02~迄今</li>
				<li class="pubStyle1">擔任亞洲大學資訊工程學系招生委員會委員，2010/02~2010/08</li>
				<li class="pubStyle1">擔任亞洲大學資訊工程學系課程委員會委員，2010/09~迄今</li>
			</ol>
			<br/><br/>
			<h2>校外服務</h2>
			<hr />
			<ol>
				<li class="pubStyle1">擔任<a href="http://www.cyut.edu.tw">朝陽科技大學</a>
					學生發展中心職涯諮詢顧問，2010/09~2011/01</li>
			</ol>
			<br/><br/>
			<h2>Projects</h2>
			<hr />
			<table border="1" width="100%">
				<tr bgcolor="#ccddaa">
					<td align="center" width="8%">No.</td>
					<td align="center" width="32%">Project Title</td>
					<td align="center" width="25%">Project Code</td>
					<td align="center" width="23%">Period</td>
					<td align="center" width="12%">Sponsor</td>
				</tr>
				<tr>
					<td align="center">1</td>
					<td align="center">具低計算量之資訊隱藏技術及應用</td>
					<td align="left">NSC 98-2218-E-468-004-MY2</td>
					<td align="center">2009/09/01 ~ 2011/07/31</td>
					<td align="center">National Science Council</td>
				</tr>
			</table>
			<br/><br/>
			<h2>Lecture</h2>
			<hr />
			<table border="1" width="100%">
				<tr bgcolor="#aaccdd">
					<td align="center" width="8%">No.</td>
					<td align="center" width="17%">Date</td>
					<td align="center" width="40%">Title</td>
					<td align="center" width="35%">Location</td>
				</tr>
				<tr>
					<td align="center">1</td>
					<td align="center">2010/04/29</td>
					<td align="left">Information Hiding Techniques</td>
					<td align="center">College of Computer Science</td>
				</tr>
				<tr>
					<td align="center">2</td>
					<td align="center">2010/11/02</td>
					<td align="left">Information Hiding Technique and Its Application</td>
					<td align="center">Departemnet of Computer Science and Information Engineering, Asia University</td>
				</tr>
			</table>
			<br/><br/>
			<h2>個人榮譽</h2>
			<hr />
			<ol>
				<li class="pubStyle1"><a href="http://www.pntcv.ntct.edu.tw/">
						國立南投高級商業職業學校</a>傑出校友獎，2010/04/17</li>
			</ol>
		</div>
		<div id="footer">
			You are <? MyCounter();?>'th visitor since May 2010<br/>
			Current time: <span id="clock"><script type ="text/javascript" src="showTime.js"></script></span>
		</div>
	</div>
</body>
</html>
