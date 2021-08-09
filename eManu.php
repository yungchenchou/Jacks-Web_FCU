<?php
function headerBanner(){
	echo "<div id='header'></div>";
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
		</div>";
}

function eManu(){
    echo "<ul>
            <li><a onclick=\"window.location='eIndex.php'\" style=\"cursor:pointer\">Home</a></li>
            <li><a onclick=\"window.location='eVita.php'\" style=\"cursor:pointer\">Vita</a></li>
            <li><a onclick=\"window.location='eActivities.php'\" style=\"cursor:pointer\">Activities</a></li>
            <li><a onclick=\"window.location='ePubList.php'\" style=\"cursor:pointer\">Publication</a></li>
            <li><a onclick=\"window.location='eCourses.php'\" style=\"cursor:pointer\">Course</a></li>
            <li><a onclick=\"window.location='eStudents.html'\" style=\"cursor:pointer\">Student</a></li>
            <li><a onclick=\"window.location='ePhotos.html'\" style=\"cursor:pointer\">Photo</a></li>
            <li><a onclick=\"window.location='eFavLink.html'\" style=\"cursor:pointer\">Links</a></li>
            <li><a onclick=\"window.location='index.php'\" style=\"cursor:pointer\">中文</a></li>
        </ul>";
}
?>
