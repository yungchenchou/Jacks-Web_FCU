<!DOCTYPE html>
<?php  include("eng_fun_inc.php");
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
							<?php echo $row[2];?> Ph.D.</span><br /><br />
                <span style="font-size: 1.6em;"><a href="http://www.asia.edu.tw/">Asia University</a> <br/>
							<a href="http://csie.asia.edu.tw/">Department of Computer Science and Information Engineering</a>
								</font></span>
                </h2></center><br /><br /><br />
                <table border="0">
                    <tr height="30px" style="font-size: 1.5em; font-family: '微軟體正黑體'">
                        <td align="center"><b>Interest research topics: </b>Digital Watermarking, Information Hiding
                            Image Retrieval, Information Security</td>
                    </tr>
                    <tr height="30px" style="font-size: 1.5em; font-family: '微軟體正黑體'">
                        <td align="center"><b>Telephone:</b> <?php echo $row[5];?></font></td>
                    </tr>
                    <tr height="30px">
                        <td align="center">Fax: 04-2330-5737</td>
                    </tr>
                    <tr height="70px">
                        <td align="center"><font class="style3">E-mail:</font>
                            <font class="style4"><a href="mailto:yungchen@gmail.com">yungchen@gmail.com</a> also<br />
                                <a href="mailto:yungchen@asia.edu.tw">yungchen@asia.edu.tw</a></font>
                        </td>
                    </tr>
                    <tr style="font-size:1.4em; font-family: '微軟正黑體'; line-height: 1.8em;">
                        <td align="center"><font class="style3">Post Address: </font>
                            No. 500, Lioufeng Rd., Wufeng, Taichung 41354, Taiwan, R.O.C.</td>
                    </tr>
                </table>
            </td>
            <td align=center style="vertical-align: top;">
                <img src="Images/Jack.png" border="2" alt="Jack" style="margin-top:20px;"/><br /><br />
                <img src="Images/jackWebSite.png" style="margin-top:10px;"/></td>
        </tr>
    </table>
</div>
<div class='container'>
    <div style="width: 100%; background-color: #1995dc; padding: 0.8em; color: white; font-family: '微軟正黑體';">
        <p style="text-align: center; font-size: 1.4em;">You are <?php MyCounter();?>th visitor since May 2010<br/>
            Current Time: <span id="clock"><script showTime();></script></span></p>
    </div>
</div>
<?php footering(0);?>
</body>
</html>
