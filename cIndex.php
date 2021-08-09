<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Jack's Web</title>
	<meta http-equiv="Content-Language" content="zh-tw" />
	<meta http-equiv="Content-Type" content="text/html; charset=Big5" />
	<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
</head>

<script LANGUAGE="JavaScript" TYPE="text/javascript">
	var vn="Microsoft Internet Explorer";
	var some;
	if(navigator.appName!=vn)
		some=1900;
	else
		some=0;
	function montharr(m0, m1, m2, m3, m4, m5, m6, m7, m8, m9, m10, m11){
		this[0] = m0;
		this[1] = m1;
		this[2] = m2;
		this[3] = m3;
		this[4] = m4;
		this[5] = m5;
		this[6] = m6;
		this[7] = m7;
		this[8] = m8;
		this[9] = m9;
		this[10] = m10;
		this[11] = m11;
	}
	function calendar(){
		var monthNames = "JanFebMarAprMayJunJulAugSepOctNovDec";
		var today = new Date();
		var thisDay;
		var monthDays = new montharr(31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31);
		year = today.getYear();
		thisDay = today.getDate();
		if (((year % 4 == 0) && (year % 100 != 0)) || (year % 400 == 0)) 
			monthDays[1] = 29;
		nDays = monthDays[today.getMonth()];
		firstDay = today;
		firstDay.setDate(1); // works fine for most systems
		testMe = firstDay.getDate();
		if (testMe == 2) 
			firstDay.setDate(0);
		startDay = firstDay.getDay();
		document.write('<table border="0" cellspacing="0" cellpadding="2" align="center" bgcolor="#0080FF">');
		document.write('<tr>');
		document.write('<td><table width="100%" border="0" cellspacing="1" cellpadding="2" bgcolor="Silver">');
		document.write('<tr><th colspan="7" bgcolor="#C8E3FF">');
		var dayNames = new Array("��","�@","�G","�T","�|","��","��");
		var monthNames = new Array("1","2","3","4","5","6","7","8","9","10","11","12");
		var now = new Date();
		document.write("<font style=font-size:9pt;Color:#330099>" , "�褸" , "<font color=green>" , now.getYear() + some , "</font>�~" , "<font color=green>" , monthNames[now.getMonth()] , "</font>��<font color=green>" , now.getDate() , "</font>��" , " �P��<font color=green>" , dayNames[now.getDay()] , "</font></FONT>");
		document.writeln('</TH></TR><TR><TH BGCOLOR="#0080FF"><font style="font-size:9pt;Color:White">��</font></th>');
		document.writeln('<th bgcolor="#0080FF"><font style="font-size:9pt;Color:White">�@</font></th>');
		document.writeln('<th BGCOLOR="#0080FF"><font style="font-size:9pt;Color:White">�G</font></th>');
		document.writeln('<th BGCOLOR="#0080FF"><font style="font-size:9pt;Color:White">�T</font></th>');
		document.writeln('<th BGCOLOR="#0080FF"><font style="font-size:9pt;Color:White">�|</font></th>');
		document.writeln('<th BGCOLOR="#0080FF"><font style="font-size:9pt;Color:White">��</font></th>');
		document.writeln('<th BGCOLOR="#0080FF"><font style="font-size:9pt;Color:White">��</font></th>');
		document.writeln("</tr><tr>");
		column = 0;
		for(i=0; i<startDay; i++){
			document.writeln("\n<td><font style=font-size:9pt>&nbsp;</font></td>");
			column++;
		}
		for (i=1; i<=nDays; i++){
			if(i == thisDay){
				document.writeln('</td><td align="CENTER" bgcolor="#FF8040"><font style=font-size:9pt;Color:#ffffff><b>')
			}else{
				document.writeln('</td><td BGCOLOR="#FFFFFF" ALIGN="CENTER"><FONT style=font-size:9pt;font-family:Arial;font-weight:bold;Color:#330066>');
			}
			document.writeln(i);
			if (i == thisDay) document.writeln("</font></td>")
				column++;
			if (column == 7){
				document.writeln("<Tr>"); 
				column = 0;
			}
		}
		document.writeln('<TR><td colspan="7" align="CENTER" valign="TOP" bgcolor="#0080FF">');
		document.writeln('<form name="clock" onSubmit="0"><FONT style=font-size:9pt;Color:#ffffff>');
		document.writeln('�{�b�ɶ��G</font><input type="Text" name="face" ALIGN="TOP"></TD></TR></TABLE>');
		document.writeln('</td></tr></table></form>');
	}
	var timerID = null;
	var timerRunning = false;
	function stopclock (){
		if(timerRunning)
			clearTimeout(timerID);
		timerRunning = false;
	}
	function showtime(){
		var now = new Date();
		var hours = now.getHours();
		var minutes = now.getMinutes();
		var seconds = now.getSeconds();
		var timeValue = "";
		if(hours>=1 && hours <4)
			timeValue += ("���");
		if(hours>=4 && hours<6)
			timeValue += ("�M��");
		if(hours>=6 && hours<9)
			timeValue += ("���W");
		if(hours>=9 && hours<12)
			timeValue += ("�W��");
		if(hours>=12 && hours<13)
			timeValue += ("����");
		if(hours>=13 && hours<18)
			timeValue += ("�U��");
		if(hours>=18 && hours <19)
			timeValue += ("�ı�");
		if(hours>=19 && hours <24)
			timeValue += ("�ߤW");
		if(hours<1)
			timeValue += ("�ȩ]");
		timeValue  += ((hours > 12) ? hours - 12 : hours);
		timeValue  += ((minutes < 10) ? ":0" : ":") + minutes;
		timeValue  += ((seconds < 10) ? ":0" : ":") + seconds;
		document.clock.face.value = timeValue;
		timerID = setTimeout("showtime()",1000);
		timerRunning = true;
	}
	function startclock (){
		stopclock();
		showtime();
	}
</script>

<body>
<div id="wrap">
	<!--���D-->
	<div id="header">
		<h1><a href="cIndex.html">�P�î�</a></h1>
		<h2>Yung-Chen Chou</h2>
	</div>
	<!-- �W��ؿ� �w�T�w ���n�� ()-->
	<!-- <object style="border:0px" data="manu.html" width=100% height=45px></object> -->
	<div id="menu">
		<ul>
			<li><a href="cIndex.php">����</a></li>
			<li><a href="#">�����</a></li>
			<li><a href="#">�ǳN����</a></li>
			<li><a href="#">�½Ҭ���</a></li>
			<li><a href="#">�ڪ��{��</a></li>
			<li><a href="#">�ͬ����v</a></li>
			<li><a href="#">���γs��</a></li>
			<li><a href="#">�U��</a></li>
			<li><a href="#">�����a��</a></li>
			<li><a href="eIndex.html">ENGLISH</a></li>
		</ul>
	</div>

	<!-- ���e���� -->
	<div id="content">
		<div class="right"> 
			<h2>License and terms of use</h2>
			<div class="articles">
				If I have seen father than others, it is because I was standing on the shoulders of giants. -- Newton
			</div>
		</div>
		<div class="left"> 
			<p align=center><img src="images/Jack.png" alt="�ǧJ�P���Ӥ�" style="border: 3px solid #ccc;" /><br /><br /></p>
			<p><script LANGUAGE="JavaScript" TYPE="text/javascript">
				<!--
				calendar();//
				-->
				</script>
			</p>
		</div>
		<div style="clear: both;">
		</div>
	</div>

	<div id="footer">
		Designed by <a href="http://www.free-css-templates.com/">Free CSS Templates</a>, 
		Thanks to <a href="http://www.openwebdesign.org/">website design</a>
	</div>
</div>

</body>
</html>