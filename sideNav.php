<?php
function sideNav($flag){
echo "  <div class='vMenu'>
			<ul>
				<li "; if ($flag == 1) echo "id='active'"; echo "><a href='index.php'>首頁</a></li>";
		echo	"<li "; if ($flag == 2) echo "id='active'"; echo "><a href='vita.php'>簡歷</a></li>";
		echo	"<li "; if ($flag == 3) echo "id='active'"; echo "><a href='activities.php'>學術活動</a></li>";
		echo	"<li "; if ($flag == 4) echo "id='active'"; echo "><a href='pubList.php'>著作</a></li>";
		echo	"<li "; if ($flag == 5) echo "id='active'"; echo "><a href='courses.php'>授課</a></li>";
		echo	"<li "; if ($flag == 6) echo "id='active'"; echo "><a href='students.php'>徒弟</a></li>";
		echo	"<li "; if ($flag == 7) echo "id='active'"; echo "><a href='favLink.php'>有用連結</a></li>";
		echo	"<li "; if ($flag == 8) echo "id='active'"; echo "><a href='http://mslab.csie.asia.edu.tw/doku' target='_blank'>傑克獨酷</a></li>";
		echo	"<li "; if ($flag == 9) echo "id='active'"; echo "><a href='wordpress' target='_blank'>璞學草堂</a></li>";
		echo	"<li "; if ($flag == 10) echo "id='active'"; echo "><a href='login.html'>管理者</a></li>";
		echo	"<li "; if ($flag == 11) echo "id='active'"; echo "><a href='eIndex.php'>ENGLISH</a></li>
			</ul>
		</div>";
}
?>
