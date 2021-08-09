<?php

function MyCounter(){
    if (file_exists(dirname(__FILE__)."/_counter")){
        $fp=fopen(dirname(__FILE__)."/_counter","r+");
        $counter=fgets($fp);
        if(!isset($_SESSION["counted"])){
            $counter++;
            $_SESSION["counted"] = 1;
            fseek($fp, 0);
            fputs($fp, $counter);
        }
        fclose($fp);
    }else{
        $fp = fopen("_counter", "w");
        $counter=32893;
        fputs($fp, $counter);
        fclose($fp);
    }
    //echo "<font color=#780B0B>".$counter."</font>";
    echo "<font color=#ffff00>".$counter."</font>";
}

function footering($level){
    ?>
    <div class='container'>
        <div style="width: 100%; background-color: #1995dc; padding: 0.8em; color: white; font-family: '微軟正黑體';">
            <p style="text-align: center; font-size: 1.4em;">您是自 2010 年 5 月以來 第  <?php MyCounter();?> 位 參觀本站的訪客 <br/>
                現在時間: <span id="clock"><script showTime();></script></span></p>
        </div>
    </div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <?php
    switch ($level){
        case 1:
            echo "<script src=\"../showTime.js\"></script>";
            break;
        case 2:
            echo "<script src=\"../../showTime.js\"></script>";
            break;
        case 3:
            echo "<script src=\"../../../showTime.js\"></script>";
            break;
        default:
            echo "<script src=\"showTime.js\"></script>";
    }
    ?>

    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="bootstrap/js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="bootstrap/js/ie10-viewport-bug-workaround.js"></script>
    <?php
}

function headerBanner($flag){
    $url = "http://".$_SERVER['SERVER_ADDR']."/~jackjow/";
    $url1 = "http://".$_SERVER['SERVER_ADDR']."/";
    $url2 = "https://".$_SERVER['SERVER_ADDR']."/";
    ?>
    <!-- Static navbar -->
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">

                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav" style="font-size: 1.3em; font-family: '微軟正黑體'">
                    <li <?php if($flag == 1) echo "class=\"active\"";?>>
                        <a href="<?php echo $url;?>indexEng.php">
                            <span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a></li>
<!--                    <li --><?php //if($flag == 2) echo "class=\"active\"";?><!-->
<!--                        <a href="--><?php //echo $url;?><!--vita.php">-->
<!--                            <span class="glyphicon glyphicon-book" aria-hidden="true"></span> Vita</a></li>-->
<!--                    <li --><?php //if($flag == 3) echo "class=\"active\"";?><!-->
<!--                        <a href="--><?php //echo $url;?><!--acdmActivites.php">-->
<!--                            <span class="glyphicon glyphicon-font" aria-hidden="true"></span> Academic</a></li>-->
                    <li <?php if($flag == 4) echo "class=\"active\"";?>>
                        <a href="<?php echo $url;?>pubList.php">
                            <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Publication</a></li>
                    <li <?php if($flag == 5) echo "class=\"active\"";?>>
                        <a href="<?php echo $url;?>courses.php">
                            <span class="glyphicon glyphicon-education" aria-hidden="true"></span> Teaching</a></li>
                    <li <?php if($flag == 6) echo "class=\"active\"";?>>
                        <a href="<?php echo $url;?>students.php">
                            <span class="glyphicon glyphicon-user" aria-hidden="true"></span> Student</a></li>
                    <li <?php if($flag == 7) echo "class=\"active\"";?>>
                        <a href="<?php echo $url;?>favLink.php">
                            <span class="glyphicon glyphicon-link" aria-hidden="true"></span> Fav. Links</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="admin/login.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
    </nav>
    <?php
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

// PHP 日曆 http://pink0420.pixnet.net/blog/post/4795571
function calender(){
    $year = date("Y");
    $month = date("m");
    $day = date("d");
    $lastday = date("d",mktime (0,0,0,$month+1,0,$year));//本月最後一天
    $firstweek = date("D",mktime (0,0,0,$month,1,$year));//本月第一天星期幾
    $last_month_day = date("d",mktime (0,0,0,$month,0,$year));//上個月最後一天
    $week["Sun"] = 0;
    $week["Mon"] = 1;
    $week["Tue"] = 2;
    $week["Wed"] = 3;
    $week["Thu"] = 4;
    $week["Fri"] = 5;
    $week["Sat"] = 6;

    $first_day = $week[$firstweek];
    $next_month_day =1;
    $run7 = 1;
    $weekNum = ceil(($lastday-7+ $first_day)/7);
    $lasMonthRemain = $last_month_day - $first_day + 1;
    echo "<table align=center>
	<tr>
	<td colspan=7 align=center><b>{$year}-{$month}</b></td>
	</tr>
	<tr>
		<td>Sun</td>
		<td>Mon</td>
		<td>Tue</td>
		<td>Wed</td>
		<td>Thu</td>
		<td>Fri</td>
		<td>Sat</td>
		</tr>
		<tr>";
    $j=1;
    if($first_day != 0){
        for($i=$lasMonthRemain ; $i <= $last_month_day; $i++){
            echo "<td align=center><font color=#666666>".$i."</font></td>";
        }
        for($i=$first_day ; $i < 7; $i++){
            if($j == $day){
                echo "<td align=center><font color=#FF2255>".$j."</font></td>";
            }else{
                echo "<td align=center><font color=#0000CC>".$j."</font></td>";
            }
            $j++;
        }
        echo "</tr><tr>";
    }
    $flag = 0;
    if($j==1)  $weekNum++;
    for($i = 0 ; $i < $weekNum ; $i++){
        for($k=0 ; $k < 7; $k++){
            if($flag == 0){
                if($j == $day){
                    echo "<td align=center><font color=#FF2255>".$j."</font></td>";
                }else{
                    echo "<td align=center><font color=#0000CC>".$j."</font></td>";
                }
            }else{
                echo "<td align=center><font color=#666666>".$j."</font></td>";
            }
            $j++;
            if($j > $lastday){
                $j = 1;
                $flag = 1;
            }
        }
        if($i == ($weekNum-1)){
            echo "</tr>";
        }else{
            echo "</tr><tr>";
        }
    }
    echo "</table>";
}
?>
