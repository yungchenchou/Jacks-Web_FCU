<?php
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
