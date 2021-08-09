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
		var dayNames = new Array("日","一","二","三","四","五","六");
		var monthNames = new Array("1","2","3","4","5","6","7","8","9","10","11","12");
		var now = new Date();
		document.write("<font style=font-size:9pt;Color:#330099>" , "西元" , "<font color=green>" , now.getYear() + some , "</font>年" , "<font color=green>" , monthNames[now.getMonth()] , "</font>月<font color=green>" , now.getDate() , "</font>日" , " 星期<font color=green>" , dayNames[now.getDay()] , "</font></FONT>");
		document.writeln('</TH></TR><TR><TH BGCOLOR="#0080FF"><font style="font-size:9pt;Color:White">日</font></th>');
		document.writeln('<th bgcolor="#0080FF"><font style="font-size:9pt;Color:White">一</font></th>');
		document.writeln('<th BGCOLOR="#0080FF"><font style="font-size:9pt;Color:White">二</font></th>');
		document.writeln('<th BGCOLOR="#0080FF"><font style="font-size:9pt;Color:White">三</font></th>');
		document.writeln('<th BGCOLOR="#0080FF"><font style="font-size:9pt;Color:White">四</font></th>');
		document.writeln('<th BGCOLOR="#0080FF"><font style="font-size:9pt;Color:White">五</font></th>');
		document.writeln('<th BGCOLOR="#0080FF"><font style="font-size:9pt;Color:White">六</font></th>');
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
		document.writeln('現在時間：</font><input type="Text" name="face" ALIGN="TOP"></TD></TR></TABLE>');
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
			timeValue += ("凌晨");
		if(hours>=4 && hours<6)
			timeValue += ("清晨");
		if(hours>=6 && hours<9)
			timeValue += ("早上");
		if(hours>=9 && hours<12)
			timeValue += ("上午");
		if(hours>=12 && hours<13)
			timeValue += ("中午");
		if(hours>=13 && hours<18)
			timeValue += ("下午");
		if(hours>=18 && hours <19)
			timeValue += ("傍晚");
		if(hours>=19 && hours <24)
			timeValue += ("晚上");
		if(hours<1)
			timeValue += ("午夜");
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
	<!--標題-->
	<div id="header">
		<h1><a href="cIndex.html">周永振</a></h1>
		<h2>Yung-Chen Chou</h2>
	</div>
	<!-- 上方目錄 已固定 不要改 ()-->
	<!-- <object style="border:0px" data="manu.html" width=100% height=45px></object> -->
	<div id="menu">
		<ul>
			<li><a href="cIndex.php">首頁</a></li>
			<li><a href="#">關於我</a></li>
			<li><a href="#">學術活動</a></li>
			<li><a href="#">授課相關</a></li>
			<li><a href="#">我的徒弟</a></li>
			<li><a href="#">生活翦影</a></li>
			<li><a href="#">有用連結</a></li>
			<li><a href="#">下載</a></li>
			<li><a href="#">網路地圖</a></li>
			<li><a href="eIndex.html">ENGLISH</a></li>
		</ul>
	</div>

	<!-- 內容分為 -->
	<div id="content">
		<div class="right"> 
			<h2>License and terms of use</h2>
			<div class="articles">
				If I have seen father than others, it is because I was standing on the shoulders of giants. -- Newton
			</div>
		</div>
		<div class="left"> 
			<p align=center><img src="images/Jack.png" alt="傑克周的照片" style="border: 3px solid #ccc;" /><br /><br /></p>
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