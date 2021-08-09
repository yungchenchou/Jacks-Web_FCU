<!DOCTYPE html>
<?php include("fun_inc.php");
session_start();  ?>
<html>

<head>
	<meta charest="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Yung-Chen Chou's Web</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="bootstrap/css/Cerulean/bootstrap.min.css">
	<link rel="SHORTCUT ICON" href="Images/jack.png">

</head>

<body>
	<div class="container">
		<img src="Images/banner.png" class="img-responsive hidden-xs" width="100%" style="margin-bottom: 1px; margin-top:3px;">
	</div>
	<div class="container">
		<?php headerBanner(7); ?>
	</div>
	<div class="container">
		<ul>
			<li><a href="https://goo.gl/caaH4e" target="_blank">新生入學問卷調查</a></li>
			<li><a href="https://goo.gl/forms/LmOaAlxzPLIYVL8o1" target="_blank">107學年新生問卷 (導師想瞭解的)</a></li>
		</ul>
		<ul class="nav nav-tabs">
			<li class="active"><a data-toggle="tab" href="#tabs-1">找論文</a></li>
			<li><a data-toggle="tab" href="#tabs-2">期刊索引</a></li>
			<li><a data-toggle="tab" href="#tabs-3">期刊列表</a></li>
			<li><a data-toggle="tab" href="#tabs-4">網路銀行&amp;ATM</a></li>
			<li><a data-toggle="tab" href="#tabs-5">其他</a></li>
		</ul>
		<div class="tab-content">
			<!-- -------------- 線上論文查找 ----------------------- -->
			<div id="tabs-1" class="tab-pane fade in active">
				<div class="panel panel-primary">
					<div class="panel-heading">線上論文查找</div>
					<div class="panel-body">
						<ul>
							<li class='hotlink'>
								<a href="http://ieeexplore.ieee.org/search/advsearch.jsp" target='_blank'>
									IEL(IEEE)</a></li>
							<li class='hotlink'>
								<a href="http://sdos.ejournal.ascc.net/cgi-bin/search.pl?template_search_form.advanced=" target='_blank'>
									SDOS</a></li>
							<li class='hotlink'>
								<a href="http://www.sciencedirect.com/science?_ob=JournalListURL&_type=all&_auth=y&_btn=Y&_acct=C000053901&_version=1&_urlVersion=0&_userid=1588067&md5=9a08e69698c2adb9162db57d8ec51046" target='_blank'>
									ELSEVIER</a></li>
							<li class='hotlink'>
								<a href="http://portal.acm.org/dl.cfm" target='_blank'>ACM</a></li>
						</ul>
					</div>
				</div>
			</div>
			<!-- -------------- 期刊索引查找  ----------------------- -->
			<div id="tabs-2" class="tab-pane fade">
				<div class="panel panel-primary">
					<div class="panel-heading">期刊索引查找</div>
					<div class="panel-body">
						<ul>
							<li class='hotlink'>
								<a href="http://admin-apps.webofknowledge.com/JCR/JCR" target='_blank'>
									查 SCI (JCR)(需訂閱)</a></li>
							<li class='hotlink'>
								<a href="http://ip-science.thomsonreuters.com/cgi-bin/jrnlst/jloptions.cgi?PC=D" target='_blank'>
									查 SCI (官網)</a></li>
							<li class='hotlink'>
								<a href="http://www.thomsonscientific.com/cgi-bin/jrnlst/jloptions.cgi?PC=J" target='_blank'>
									查 SSCI (官網)</a></li>
							<li class='hotlink'>
								<a href="http://publik.tuwien.ac.at/info/sci_search.php?lang=2" target='_blank'>
									維也納大學網站(查SCI、SSCI、A&HCI)</a></li>
							<li class='hotlink'>
								<a href="http://apps.isiknowledge.com/WOS_GeneralSearch_input.do?product=WOS&search_mode=GeneralSearch&preferencesSaved=" target='_blank'>
									Web of Science資料庫(需訂閱)</a></li>
							<li class='hotlink'>
								<a href="http://www.engineeringvillage.com/search/quick.url" target='_blank'>
							<li class='hotlink'>
								<a href="http://www.engineeringvillage.com/search/quick.url" target='_blank'>
									查 EI Journal list</a></li>
						</ul>
					</div>
				</div>
			</div>
			<!-- --------------  期刊  ----------------------- -->
			<div id="tabs-3" class="tab-pane fade">
				<div class="panel panel-primary">
					<div class="panel-heading">國際學術期刊</div>
					<div class="panel-body">
						<ol>
							<li class='hotlink'>
								<a href="http://comjnl.oxfordjournals.org/" target='_blank'>
									The Computer Journal</a></li>
						</ol>
					</div>
				</div>
			</div>
			<!-- --------------   網路ATM & 網路銀行  ----------------------- -->
			<div id="tabs-4" class="tab-pane fade">
				<div class="panel panel-primary">
					<div class="panel-heading">網路 ATM</div>
					<div class="panel-body">
						<ul>
							<li class='hotlink'>
								<a href="https://webatm.post.gov.tw/postatm/index.jsp?_portal=login" target='_blank'>
									中華郵政ATM</a></li>
							<li class='hotlink'>
								<a href="https://www.mybank.com.tw/myatm/cathaybk_myatm.asp" target='_blank'>
									國泰世華ATM</a></li>
							<li class='hotlink'>
								<a href="https://ebank.bot.com.tw/NNBank/Default.asp?Mode=NA">
									臺灣銀行ATM</a></li>
						</ul>
					</div>
				</div>

				<div class="panel panel-success">
					<div class="panel-heading">網路銀行</div>
					<div class="panel-body">
						<ul>
							<li class='hotlink'><a href="https://ebank.bot.com.tw/Default.asp?ITrnTm=1235976375520"><b>台銀</b>網路銀行</a></li>
							<li class='hotlink'><a href="https://www.mybank.com.tw/pweb/"><b>國泰</b>網路銀行</a></li>
							<li class='hotlink'><a href="https://ipost.post.gov.tw/web/index.htm">網路郵局</a></li>
						</ul>
					</div>
				</div>
			</div>
			<!-- --------------   其他  ----------------------- -->
			<div id="tabs-5" class="tab-pane fade">
				<div class="panel panel-primary">
					<div class="panel-heading">學術機構</div>
					<div class="panel-body">
						<ul>
							<li><a href="https://www.most.gov.tw">科技部人才庫登入</a></li>
							<li><a href="http://www.oracle.com/technetwork/java/javase/downloads/javafxscenebuilder-1x-archive-2199384.html">JavaFX Scene Builder Archive</a></li>
							<li class='hotlink'><a href="http://www.eclipse.org/efxclipse/install.html">e(fx)clipse</a></li>
							<li class='hotlink'><a href='https://arspb.most.gov.tw/NSCWeb/slogin.jsp' target='_blank'>科技部--學術研發服務網</a></li>
							<li class='hotlink'><a href='http://statistics.most.gov.tw/was2/award/AsAwardMultiQuery.aspx' target='_blank'>科技部補助獎勵查詢</a></li>
							<li class='hotlink'><a href='http://academy.techknowledgeservices.com/' target='_blank'>TUV NORD</a></li>
							<li class='hotlink'><a href='http://tuvaptraining.techknowledgeservices.com/' target='_blank'>TUV NORD (Exam)</a></li>

							<li class='hotlink'><a href='http://lrs.itsa.org.tw/' target='_blank'>ITSA 學習資源服務平台</a></li>
							<li class='hotlink'><a href='https://github.com/doggy8088/Learn-Git-in-30-days' target='_blank'>Learn-Git-in-30-days</a></li>
							<li class='hotlink'><a href='https://github.com/login' target='_blank'>GitHub</a></li>
							<li class='hotlink'><a href='http://zachary0926.blogspot.tw/2013/04/20130428.html' target='_blank'>札客雜記</a></li>
						</ul>
					</div>
				</div>

				<div class="panel panel-success">
					<div class="panel-heading">亞大</div>
					<div class="panel-body">
						<ul>

							<li class='hotlink'><a href='http://120.108.113.57/moodle/login/index.php' target='_blank'>菁英魔豆</a></li>
							<li class='hotlink'><a href='http://cip.asia.edu.tw/' target='_blank'>校園入口</a></li>
							<li class='hotlink'><a href='http://webs.asia.edu.tw/teacherinfo/main.aspx' target='_blank'>
									教師資訊系統</a></li>
							<li class='hotlink'><a href='http://moodle.asia.edu.tw/dlcmoodle/' target='_blank'>Moodle教學系統</a></li>
							<li class='hotlink'><a href='http://research.asia.edu.tw/login_chk.asp' target='_blank'>
									學術研究成果管理</a></li>
							<li class='hotlink'><a href='http://eplus.asia.edu.tw/podcasts/1466?locale=zh_tw' target='_blank'>
									亞洲大學 社群學習站</a></li>
							<li class='hotlink'><a href='https://120.108.117.245/owncloud' target='_blank'>
									傑克的嗡雲</a></li>
							<li class='hotlink'><a href='https://www.dropbox.com/' target='_blank'>
									丟盒子</a></li>
						</ul>
					</div>
				</div>

				<div class="panel panel-warning">
					<div class="panel-heading">朝陽</div>
					<div class="panel-body">
						<ul>
							<li class='hotlink'><a href='http://teacher.cyut.edu.tw/EmpLogin.aspx' target='_blank'>
									教職員資訊系統</a></li>
							<li class='hotlink'><a href='http://lms.ctl.cyut.edu.tw/' target='_blank'>iLMS 系統</a></li>
						</ul>
					</div>
				</div>

				<div class="panel panel-warning">
					<div class="panel-heading">E-Book備忘</div>
					<div class="panel-body">
						<ul>
							<li><a href="http://120.108.113.56/ebook/">平台測試頁面</a></li>
							<li><a href="http://web.etop.org.tw/eTop_Alliance/">科技部工程中心 (產學聯盟登入介面)</a></li>
							<li><a href="https://wastemobile.gitbooks.io/gitbook-chinese/content/book/gitbook-cli.html">GitBook 終端機指令</a></li>
							<li><a href="https://www.gitbook.com/editor">GitBook 桌面版編輯器</a></li>
						</ul>
					</div>
				</div>

				<div class="panel panel-warning">
					<div class="panel-heading">備忘</div>
					<div class="panel-body">
						<ul>
							<li><a href="https://leetcode.com">程式練習 Leet code 刷題區</a></li>
							<li><a href="https://bpmn.io">Open source 流程圖繪製</a></li>
							<li class="hotlink"><a href="https://codecombat.com/">Code Combat</a></li>
							<li class='hotlink'><a href='https://www.gnu.org/software/octave/doc/interpreter/Installing-and-Removing-Packages.html' target='_blank'>GNU Octave -- Installing and Removing Packages</a></li>
							<li class='hotlink'><a href='http://octave.sourceforge.net/' target='_blank'>Octave-Forge - Extra packages for GNU Octave</a></li>
							<li class='hotlink'><a href='https://www.the-qrcode-generator.com/' target='_blank'>QR Code generation (free)</a></li>
							<li class='hotlink'><a href='https://www.youtube.com/audiolibrary/music' target='_blank'>Youtube 的免費配樂用音樂</a></li>
							<li class='hotlink'><a href='http://www.cs.usfca.edu/~galles/JavascriptVisual/Algorithms.html' target='_blank'>Data Structure Visualizations</a></li>
							<li class='hotlink'><a href='https://sec.openedu.tw/' target='_blank'>軟體工程聯盟線上教學</a></li>
							<li class='hotlink'><a href='https://www.aescrypt.com/download/' target='_blank'>AES Crypt Software</a></li>
							<li class='hotlink'><a href='https://sites.google.com/site/itsancku/' target='_blank'>ITSA & PTC程式設計競賽</a></li>
							<li class='hotlink'><a href='http://algorithm.csie.ncku.edu.tw/ITSA_PTC/index_ITSA.php' target='_blank'>ITSA & PTC (線上程式解題與題庫)</a></li>
							<li class='hotlink'><a href='https://cpe.cse.nsysu.edu.tw/' target='_blank'>大學程式能力檢定(Collegiate Programming Examination, CPE)</a></li>
							<li class='hotlink'><a href='https://cpe.cse.nsysu.edu.tw/environment.php#starList' target='_blank'>CPE 一顆星選集</a></li>
							<li class='hotlink'><a href='https://cpe.cse.nsysu.edu.tw/grade.php' target='_blank'>CPE 成績分級標準</a></li>
							<li class='hotlink'><a href='http://120.108.113.38/itsa/' target='_blank'>亞洲大學 資訊工程學系 程式設計競賽平台</a></li>
							<li><a href="http://studio.twgg.org/aps/login.php">Anny's case site</a>
						</ul>
					</div>
				</div>
				<div class="panel panel-warning">
					<div class="panel-heading">網路備忘</div>
					<div class="panel-body">
						<ul>
							<li class='hotlink'><a href='https://www.youtube.com/playlist?list=PLy8_9NKBm_n2aExdqV93VlXn0Zz1bsvrG' target='_blank'>蕭志明老師 CCNA 教學 YouTube</a></li>
							<li class='hotlink'><a href='http://www.csie.sju.edu.tw/cm/course/ccnateach.htm' target='_blank'>蕭老師 CCNA教學 課程</a></li>
						</ul>
					</div>
				</div>
				<div class="panel panel-warning">
					<div class="panel-heading">資安備忘</div>
					<div class="panel-body">
						<ul>
							<li><a href="https://web.archive.org">漏洞資料庫</a></li>
							<li><a href="http://newaurora.pixnet.net/blog/post/166231341-sql-injection-範例(登入範例)">SQL injection 基本介紹</a></li>
							<li><a href="http://www.puritys.me/docs-blog/article-11-SQL-Injection-常見的駭客攻擊方式.html">SQL Injection 常見的駭客攻擊方式</a></li>
							<li><a href="https://www.owasp.org/index.php/Testing_for_SQL_Injection_(OTG-INPVAL-005)#Standard_SQL_Injection_Testing">Testing for SQL Injection (OTG-INPVAL-005)</a></li>
							<li><a href="http://www.sqlinjection.net/union/">SQL Injection Using UNION</a></li>
							<li><a href="http://s90304a123.pixnet.net/blog/post/44565577-php%E6%BC%8F%E6%B4%9E%E9%98%B2%E7%AF%84-(%E4%B8%89)---%E5%AE%A2%E6%88%B6%E7%AB%AF%E8%85%B3%E6%9C%AC%E6%A4%8D%E5%85%A5%E6%94%BB%E6%93%8A">漏洞防範-(三)---客戶端腳本植入攻擊</a></li>
							<li><a href="https://www.youtube.com/watch?v=BjAvyfjssSk">SQLMAP TUTORIAL BEGINNERS/DÉBUTANT SUR MAC OSX10.10</a></li>
							<li><a href="http://www.binarytides.com/sqlmap-hacking-tutorial/">Sqlmap tutorial for beginners – hacking with sql injection</a></li>
							<li><a href="https://www.youtube.com/watch?v=YHBoNFIPfY0">SQLMap Secure setup OSX</a></li>
							<li><a href="http://anti-hacker.blogspot.tw/2007/04/sql-injectionweb-server.html">網路攻防戰(呂守箴)</a></li>
							<li><a href="https://www.archlinux.org">archlinux</a></li>
							<li><a href="https://id.wikipedia.org/wiki/BlackBuntu">BlackBuntu</a></li>
							<li><a href="https://backbox.org">BackBox</a></li>
							<li class='hotlink'><a href='http://mozart.cc.ntu.edu.tw/video/video.html' target='_blank'>教育機構網站應用程式弱點監測平台-教學影片</a></li>
							<li class='hotlink'><a href='http://anti-hacker.blogspot.tw/2008/01/xss.html' target='_blank'>網路攻防戰</a></li>
							<li class='hotlink'><a href='https://www-ssl.intel.com/content/www/us/en/forms/passwordwin.html' target='_blank'>How Strong is Your Password? (INTEL)</a></li>
							<li class='hotlink'><a href='http://download.ithome.com.tw/download/result/id/6492#' target='_blank'>Ultimate ZIP Cracker</a></li>
							<li class='hotlink'><a href='https://www.aescrypt.com/download/' target='_blank'>AES Crypt Software</a></li>
							<li class='hotlink'><a href='http://www.trendmicro.tw/tw/about-us/secure-elite/research/' target='_blank'>趨勢贊助</a></li>
							<li class='hotlink'><a href='https://achive.org/web/' target='_blank'>WayBackMachine</a></li>
							<li class='hotlink'><a href='http://www.wooyun.org/bugs/' target='_blank'>WooYun (CN)</a></li>
							<li class='hotlink'><a href='http://www.zone-h.org/archive/' target='_blank'>Zone-h</a></li>
							<li class='hotlink'><a href='https://www.exploit-db.com/' target='_blank'>Exploit DB</a></li>
							<li class='hotlink'><a href='http://sebug.net/' target='_blank'>sebug (CN)</a></li>
							<li class='hotlink'><a href='http://new.serversniff.de/' target='_blank'>Serversniff</a></li>
							<li class='hotlink'><a href='http://cve.mitre.org' target='_blank'>CVE mitre</a></li>
							<li class='hotlink'><a href='http://cve.mitre.org/cve/cve.html' target='_blank'>CVE mitre (Search)</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php footering(0); ?>
	<!-- Bootstrap core JavaScript
	    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<script src="bootstrap/js/docs.min.js"></script>
	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	<script src="bootstrap/js/ie10-viewport-bug-workaround.js"></script>
</body>

</html>