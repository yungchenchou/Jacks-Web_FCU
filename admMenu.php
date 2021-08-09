<?php
function headerBanner(){
	echo "<div id='header'></div>";
}

function sideNavEng($flag){
echo "  <div id='sideNav'>
			<ul>
				<li "; if ($flag == 1) echo "id='active'"; echo "><a href='index.php'>Home</a></li>";
		echo	"<li "; if ($flag == 2) echo "id='active'"; echo "><a href='vita.php'>Vita</a></li>";
		echo	"<li "; if ($flag == 3) echo "id='active'"; echo "><a href='activities.php'>Activities</a></li>";
		echo	"<li "; if ($flag == 4) echo "id='active'"; echo "><a href='admMain.php'>Papers</a></li>";
		echo	"<li "; if ($flag == 5) echo "id='active'"; echo "><a href='courses.php'>Courses</a></li>";
		echo	"<li "; if ($flag == 6) echo "id='active'"; echo "><a href='students.php'>Students</a></li>";
		echo	"<li "; if ($flag == 7) echo "id='active'"; echo "><a href='favLink.php'>Hot links</a></li>";
		echo	"<li "; if ($flag == 8) echo "id='active'"; echo "><a href='logout.php'>Logout</a></li>";
		echo   "</ul>
		</div>";
}
?>
