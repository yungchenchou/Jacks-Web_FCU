<!DOCTYPE html>
<?php  include("fun_inc.php");
include("admin/dbConn.inc.php");
include("bsStudentList.php");
include("msStudentList.php");
session_start();
$sql = "SELECT * FROM user WHERE userID = 'jackjow'";
$rs = mysqli_query($conn,$sql);
$row = $rs->fetch_row();
?>

<html xmlns:-webkit-border-radius="http://www.w3.org/1999/xhtml"
      xmlns:-moz-border-radius="http://www.w3.org/1999/xhtml" xmlns:border-radius="http://www.w3.org/1999/xhtml">
	<head>
		<meta charest="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Yung-Chen Chou's Web</title>
<!--        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="bootstrap/css/Cerulean/bootstrap.min.css">
<!-- 	<link rel="stylesheet" href="css/Jack_PHP.css" />    -->
		<link rel="SHORTCUT ICON" href="Images/jack.png">
		<style>
            .demo6 {
                width: 300px;
                height: 300px;
                line-height: 300px;
                border: 1px dashed red;
                border-radius: 300px;	/* 高度 */
            }
            .studentImg{
                border: solid 1px rgb(158,158,158);
                box-shadow: 2px 2px 3px rgb(120, 120, 120);"
            }
            .centerTDtext {
                display: inline-block;
                vertical-align: middle;
                float: none;
            }
			table tr th td{
				border-collapse: collapse;
				border: 1px solid #000000;
			}
        </style>
	</head>
	<body>
		<div class="container">
			<img src="Images/banner.png" class="img-responsive hidden-xs" width="100%" style="margin-bottom: 1px; margin-top:3px;">
		</div>
    	<div class="container">
			<?php headerBanner(6); ?>
		</div>
		<div class="container">
			<ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#Master">碩士班</a></li>
                <li><a data-toggle="tab" href="#home">大學部</a></li>
				<li><a data-toggle="tab" href="#PHD">博士班</a></li>
			</ul>
			<div class="tab-content">

    			<!-- ======================== 碩士班 =============================================== -->
                <?php msStudent(); ?>

                <!-- -------------------- 大學部 ------------------------------------ -->
                <div id="home" class="tab-pane fade">
                    <?php bsStudentList();?>
                </div>

    			<!-- ======================== 博士班 =============================================== -->
				<div id="PHD" class="tab-pane fade">
					<div class="panel panel-primary">
						<div class="panel-heading">學成下山</div>
						<div class="panel-body">
	                        <table border="1" width=100%>
	                            <tr align=center>
	                                <td width=40>編號</td>
	                                <td width=60>姓名</td>
	                                <td width=80>指導教授</td>
	                                <td width=330>論文題目</td>
	                                <td width=80>畢業日期</td>
	                            </tr>
	                            <tr align=center>
	                                <td>01</td>
	                                <td><a href="http://120.108.116.237/~sica/">
										<img src="Images/SicaChang.jpg" border="1" alt="張閎翰" width="150" height="200"/></a><br />
										<a href="mailto:sicachang@gmail.com">張閎翰</a></td>
	                                <td>施國琛</td>
	                                <td>待定</td>
	                                <td>2017年7月畢業</td>
	                            </tr>
							</table>
						</div>
					</div>
    			</div>
			</div>
		</div>
        <?php footering();?>
	    <!-- Bootstrap core JavaScript
	    ================================================== -->
	    <script src="showTime.js"></script>
	    <!-- Placed at the end of the document so the pages load faster -->
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	    <script src="bootstrap/js/bootstrap.min.js"></script>
	    <script src="bootstrap/js/docs.min.js"></script>
	    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	    <script src="bootstrap/js/ie10-viewport-bug-workaround.js"></script>
    </body>
</html>
