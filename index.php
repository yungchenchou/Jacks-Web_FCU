<!DOCTYPE html> 
<?php  include("fun_inc.php");
include("admin/dbConn.inc.php");
session_start();
$sql = "SELECT * FROM user WHERE userID = 'jackjow'";
$rs = mysqli_query($conn,$sql);
$row = $rs->fetch_row();
?>

<html>
	<head>
		<meta charest="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Yung-Chen Chou's Web</title>
		
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
		<!-- Latest compiled JavaScript -->
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

		<link rel="stylesheet" href="bootstrap/css/Cerulean/bootstrap.min.css">
<!-- 	<link rel="stylesheet" href="css/Jack_PHP.css" />    -->
		<link rel="SHORTCUT ICON" href="Images/jack.png">
	</head>
	<body>
		<div class="container">
			<img src="Images/banner.png" class="img-responsive hidden-xs" width="100%" style="margin-bottom: 1px; margin-top:3px;">
		</div>
    	<div class="container">
			<?php headerBanner(1); ?>
		</div>
		
		<div class="container">
			<table align=center width=100%>
				<tr>
					<td align=center>
						<span style="font-size: 2em; line-height: 2.5em; font-weight: bold;">
							<?php echo $row[1];?> (<?php echo $row[2];?>)</span>
							<span style="font-size: 1.4em;"> <?php echo $row[7];?></span><br /><br />
							<span style="font-size: 1.6em;"><a href="http://www.asia.edu.tw/">亞洲大學</a>
							<a href="http://csie.asia.edu.tw/">資訊工程學系</a>
								多媒體安全實驗室</font></span>
								<a href='https://github.com/omega87910/106-2-Project-Rockman/blob/master/Rockman.jar'>同學作品<b>洛克人</b></a>
						</h2></center><br /><br /><br />
						<table border="0">
							<tr height="30px" style="font-size: 1.5em; font-family: '微軟體正黑體'">
								<td align="center"><b>研究領域: </b><?php echo $row[8];?></td>
							</tr>
							<tr height="30px" style="font-size: 1.5em; font-family: '微軟體正黑體'">
								<td align="center"><b>聯絡電話:</b> <?php echo $row[5];?></font></td>
							</tr>
							<tr height="30px">
								<td align="center">傳真: 04-2330-5737</td>
							</tr>
							<tr height="70px">
								<td align="center"><font class="style3">電子郵件信箱:</font> 
									<font class="style4"><a href="mailto:yungchen@gmail.com">yungchen@gmail.com</a> 或<br />
									<a href="mailto:yungchen@asia.edu.tw">yungchen@asia.edu.tw</a></font>
								</td>
							</tr>
							<tr style="font-size:1.4em; font-family: '微軟正黑體'; line-height: 1.8em;">
								<td align="center"><font class="style3">郵寄地址: </font>
									<?php echo $row[6];?></td>
							</tr>
						</table>
					</td>
					<td align=center style="vertical-align: top;">
						<img src="Images/Jack_new.png" border="2" alt="Jack"
                             style="margin-top:20px; width: 180px;"/><br /><br />
						<img src="Images/jackWebSite.png" style="margin-top:10px;"/></td>
				</tr>
			</table>
		</div>
        <?php footering(0);?>
	</body>
</html>
