<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("dbConn.inc.php");
session_start();
if(isset($_SESSION['username'])){
	$uID = $_SESSION['username'];
	$pubType = isset($_POST['inputType'])?htmlspecialchars($_POST['inputType'],ENT_QUOTES):"";
	$pubTitle = isset($_POST['inputTitle'])?htmlspecialchars($_POST['inputTitle'],ENT_QUOTES):"";
	$pubSource = isset($_POST['inputSource'])?htmlspecialchars($_POST['inputSource'],ENT_QUOTES):"";
	$pubVol = isset($_POST['inputVol'])?htmlspecialchars($_POST['inputVol'],ENT_QUOTES):"";
	$pubIssue = isset($_POST['inputIssue'])?htmlspecialchars($_POST['inputIssue'],ENT_QUOTES):"";
	$pubPages = isset($_POST['inputPages'])?htmlspecialchars($_POST['inputPages'],ENT_QUOTES):"";
	$pubLocation = isset($_POST['inputLocation'])?htmlspecialchars($_POST['inputLocation'],ENT_QUOTES):"";
	$pubMonth = isset($_POST['inputMonth'])?htmlspecialchars($_POST['inputMonth'],ENT_QUOTES):"";
	$pubYear = isset($_POST['inputYear'])?htmlspecialchars($_POST['inputYear'],ENT_QUOTES):"";
	$seqArray = $_POST['seq'];
	$nameArray = $_POST['name'];
	$communAuthArray = $_POST['communAuth'];

	$sql1 = "SELECT pub_id FROM publication WHERE `user_id` = '$uID' AND `pub_cod' LIKE '$pubType%'";
	$count =  mysqli_query($conn, $sql1) + 1;
	$pubCode = $pubType."-".$count;

	$sql = "INSERT INTO `publication`(`user_id`, `pub_code`, `pub_title`, `pub_source`, 
	          `pub_vol`, `pub_no`, `pub_pp`, `pub_Location`, `pub_year`, `pub_month`) VALUES 
		('$uID', '$pubCode','$pubTitle', '$pubSource', '$pubVol','$pubIssue', '$pubPages', '$pubLocation', $pubYear, $pubMonth);";
    
	$sql2 = "";
	
	if(mysqli_query($conn, $sql) && mysqli_query($conn, $sql2)){
		echo '<h3 align=center>Insert success!<h3>';
		echo '<meta http-equiv=REFRESH CONTENT=1;url=admMain.php>';
	}else{
		echo "Error updating record: " . mysqli_error($conn);
	}
}else{
	echo '<center><font color=red size=+3>You have no permission to read this page!</font></center>';
	echo '<meta http-equiv=REFRESH CONTENT=2;url=login.html>';
	exit();
}
?>
