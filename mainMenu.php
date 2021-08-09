<?php
function headerBanner(){
	echo "<div id='header'></div>";
}
function mainMenu(){
	echo "<ul id='nav'>
				<li><a href='index.php'>首頁</a></li>
				<li><a href='vita.php'>簡歷</a></li>
				<li><a href='activities.php'>學術活動</a></li>
				<li><a href='pubList.php'>著作</a></li>
				<li><a href='courses.php'>授課</a></li>
				<li><a href='students.php'>徒弟</a></li>
				<li><a href='favLink.php'>有用連結</a></li>
				<li><a href='http://mslab.csie.asia.edu.tw/doku' target='_blank'>傑克獨酷</a></li>
				<li><a href='wordpress' target='_blank'>璞學草堂</a></li>
				<li><a href='https://120.108.116.237/~jackjow/login.html'>管理者</a></li>
				<li><a href='eIndex.php'>ENGLISH</a></li>
				<li><img source='images/S69PEBHJO7.png'></li>
			</ul>";
}

function sideNav($flag){
echo "  <div id='sideNav'>
			<ul>
				<li "; if ($flag == 1) echo "id='active'"; echo "><a href='index.php'>首頁</a></li>";
		echo	"<li "; if ($flag == 2) echo "id='active'"; echo "><a href='vita.php'>簡歷</a></li>";
		echo	"<li "; if ($flag == 3) echo "id='active'"; echo "><a href='activities.php'>學術活動</a></li>";
		echo	"<li "; if ($flag == 4) echo "id='active'"; echo "><a href='pubList.php'>著作</a></li>";
		echo	"<li "; if ($flag == 5) echo "id='active'"; echo "><a href='courses.php'>授課</a>";
		echo	"<li "; if ($flag == 6) echo "id='active'"; echo "><a href='students.php'>徒弟</a></li>";
		echo	"<li "; if ($flag == 7) echo "id='active'"; echo "><a href='favLink.php'>有用連結</a></li>";
		echo	"<li "; if ($flag == 8) echo "id='active'"; echo "><a href='http://mslab.csie.asia.edu.tw/doku' target='_blank'>傑克獨酷</a></li>";
		echo	"<li "; if ($flag == 9) echo "id='active'"; echo "><a href='wordpress' target='_blank'>璞學草堂</a></li>";
		echo	"<li "; if ($flag == 10) echo "id='active'"; 
			echo "><a href='https://120.108.116.237/~jackjow/login.html'>管理者</a></li>";
		echo	"<li "; if ($flag == 11) echo "id='active'"; echo "><a href='eIndex.php'>ENGLISH</a></li>
			</ul>
			<center><img src='Images/72CHF558Y8.png'></center>
		</div>";
}

function sideNavEng($flag){
echo "  <div id='sideNav'>
			<ul>
				<li "; if ($flag == 1) echo "id='active'"; echo "><a href='eIndex.php'>Home</a></li>";
		echo	"<li "; if ($flag == 2) echo "id='active'"; echo "><a href='eVita.php'>Vita</a></li>";
		echo	"<li "; if ($flag == 3) echo "id='active'"; echo "><a href='eActivities.php'>Activities</a></li>";
		echo	"<li "; if ($flag == 4) echo "id='active'"; echo "><a href='ePubList.php'>Publications</a></li>";
		echo	"<li "; if ($flag == 5) echo "id='active'"; echo "><a href='eCourses.php'>Courses</a></li>";
		echo	"<li "; if ($flag == 6) echo "id='active'"; echo "><a href='eStudents.php'>Students</a></li>";
		echo	"<li "; if ($flag == 7) echo "id='active'"; echo "><a href='eFavLink.php'>Hot links</a></li>";
		echo	"<li "; if ($flag == 8) echo "id='active'"; echo "><a href='http://mslab.csie.asia.edu.tw/doku' target='_blank'>Jack Wiki</a></li>";
		echo	"<li "; if ($flag == 9) echo "id='active'"; echo "><a href='index.php'>中文</a></li>
			</ul>
			<center><img src='Images/RLO742SLFQ.png'></center>
		</div>";
}
	
function mainMenu_old(){
    echo "<!-- <ul>
            <li><a onclick=\"window.location='index.php'\" style=\"cursor:pointer\">首頁</a></li>
            <li><a onclick=\"window.location='vita.php'\" style=\"cursor:pointer\">簡歷</a></li>
            <li><a onclick=\"window.location='activities.php'\" style=\"cursor:pointer\">學術活動</a></li>
            <li><a onclick=\"window.location='pubList.php'\" style=\"cursor:pointer\">著作</a></li>
            <li><a onclick=\"window.location='courses.php'\" style=\"cursor:pointer\">授課</a></li>
            <li><a onclick=\"window.location='students.php'\" style=\"cursor:pointer\">徒弟</a></li>
            <li><a onclick=\"window.location='photos.html'\" style=\"cursor:pointer\">翦影</a></li>
            <li><a onclick=\"window.location='favLink.php'\" style=\"cursor:pointer\">有用連結</a></li>
            <li><a onclick=\"window.location='mslab.csie.asia.edu.tw/doku'\" style=\"cursor:pointer\">傑克獨酷</a></li>
            <li><a onclick=\"window.location='wordpress'\" style=\"cursor:pointer\">璞學草堂</a></li>
            <li><a onclick=\"window.location='login.html'\" style=\"cursor:pointer\">管理者</a></li>
            <li><a onclick=\"window.location='eIndex.php'\" style=\"cursor:pointer\">ENGLISH</a></li>
        </ul>  -->";
}
?>
