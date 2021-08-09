<!DOCTYPE html> 
<?php
include("fun_inc.php");
include("node_modules/bootstrap/js/*.js");
//include("mycounter.php");
// 瀏覽人數計數器
session_start();
?>
<html>
    <head>
        <meta charest="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Yung-Chen Chou's Web</title>
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="css/Jack_PHP.css" />
	<link rel="SHORTCUT ICON" href="Images/jack.png">
    </head>
    <body>
        <div id="wrap">
		<?php headerBanner(); 
			sideNav(1); ?>
		<div id="content">
			<table align=center width=100%>
				<tr>
					<td align=center>
						<span style="font-size: 2em; line-height: 2.5em; font-weight: bold;">
							周永振 (Yung-Chen Chou)</span>
							<span style="font-size: 1.4em;"> 助理教授</span><br /><br />
							<span style="font-size: 1.6em;"><a href="http://www.asia.edu.tw/">亞洲大學</a>
							<a href="http://csie.asia.edu.tw/">資訊工程學系</a>
								多媒體安全實驗室</font></span>
						</h2></center><br /><br /><br />
						<table border="0">
							<tr height="30px">
								<td align="center"><font class="style3">研究領域:</font> 
									<font class="style4">數位浮水印, 資訊隱藏, 影像擷取, 資訊安全</font></td>
							</tr>
							<tr height="30px">
								<td align="center"><font class="style3">聯絡電話:</font> 
									<font class="style4">04-2332-3456 分機: 48005</font></td>
							</tr>
							<tr height="30px">
								<td align="center"><font class="style3">傳真:</font> 
									<font class="style4">04-2330-5737</font></td>
							</tr>
							<tr height="70px">
								<td align="center"><font class="style3">電子郵件信箱:</font> 
									<font class="style4"><a href="mailto:yungchen@gmail.com">yungchen@gmail.com</a> 或<br />
									<a href="mailto:yungchen@asia.edu.tw">yungchen@asia.edu.tw</a></font>
								</td>
							</tr>
							<tr height="30px">
								<td align="center"><font class="style3">郵寄地址: </font>
									<font class="style4">41354 台中市霧峰區柳豐路500號</font></td>
							</tr>
						</table>
					</td>
					<td align=center style="vertical-align: top;">
						<img src="Images/Jack.png" border="2" alt="Jack" style="margin-top:20px;"/></td>
				</tr>
			</table>
		</div>
		<?php footering();?>
	</div>
</body>
</html>

