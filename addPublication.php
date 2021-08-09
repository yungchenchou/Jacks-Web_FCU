<?php
session_start(); 
include("admMenu.php");
require_once('dbconnection/connection.php');

if($_SESSION['username'] != null){
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Maintain</title>
	<link rel="stylesheet" type="text/css" href="css/jack_style.css" media="screen" />
</head>
<body>
	<div id="wrap">
		<?php headerBanner(); 
			sideNavEng(1); ?>
		<div id="content">
			<form name="searchForm" method="get" action="searchPaper.php">
				<ul style='list-style-type: none;font-size: 1.1em; line-height: 1.8em;'>
					<li><b>Paper ID:</b> <input type='text' name='paperID'></li>
					<li><b>Status:</b> <input type='radio' name='paperStatus' value='Submitted' checked='true'>Submitted
							<input type='radio' name='paperStatus' value='Pending'>Pending
							<input type='radio' name='paperStatus' value='Accepted'>Accepted
							<input type='radio' name='paperStatus' value='Published'>Published</li>
					<li><b>Authors:</b> <input type='text' name='authors' size=50></li>
					<li><b>Title:</b> <input type='text' name='titles' size=80></li>
					<li><b>Submit date:</b> <input type='date' name='submitDate'></li>
					<li><b>Accept date:</b> <input type='date' name='acceptDate'></li>
					<li><b>Publish date:</b> <input type='date' name='publishDate'></li>
					<li><b>Source:</b> <input type='text' name='source' size=90></li>
					<li><b>Location:</b> <input type='text' name='location' size=50></li>
					<li><b>Volumn:</b> <input type='text' name='volumn' size=20></li>
					<li><b>Issue:</b> <input type='text' name='issue' size=20></li>
					<li><b>Pages:</b> <input type='text' name='pages' size=20></li>
				</ul>
				<p align=center><button type='submit' name='submit' value='save'>Save</button>
					<button type='reset' name='reset' value='reset'>Reset</button>
					<button type='cancel' method=post formaction='admMain.php?userID=jackjow&userPW=amitof0'>Cancel</button>
				</p>
			</form>
		</div>
		<div id="footer">
			Current time: <span id="clock"><script type ="text/javascript" src="showTime.js"></script></span>
		</div>
	</div>
</body>
</html>
<?php
}else{
	echo '<center><font color=red size=+3>You don\'t have permission to read this page!</font></center>';
	echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
}
?>
