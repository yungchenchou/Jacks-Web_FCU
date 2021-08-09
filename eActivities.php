<? //<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
include("calender.php");
include("eManu.php");
include("actLManu.php");
// 瀏覽人數計數器
session_start();
session_register("counted");
function MyCounter(){
    $fp = fopen("_counter", "r+");
    $counter = (int) fgets($fp);
    if(!isset($_SESSION["counted"])){
        $counter++;
        $_SESSION["counted"] = 0;
    }
    fseek($fp, 0);
    fputs($fp, $counter);
    fclose($fp);
    echo "<font color=blue>".$counter."</font>";
}
?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Jack-Activities</title>
        <link rel="stylesheet" type="text/css" href="Jack_PHP.css" media="screen" />
    </head>
    <body>
        <div id="wrap">
            <div id="header">
                <h1><a href="eIndex.php">Yung-Chen Chou</a></h1>
                <h2>周永振</h2>
            </div>
            <div id="menu">
                <?php eManu(); ?>
            </div>
            <div id="content">
                <div class="left">
                    <p align="center"><img src="Images/Jack.png" border="2" alt="Jack"/></p>
                    <p align="center">
                        <?php calender(); ?>
                    </p>
                </div>
                <div class="right">
                    <h2>Acdamemic Organization Member:</h2>
                    <hr />
                    <ol>
                        <li class="pubStyle1">The Institute of Electrical and Electronics Engineers (IEEE),
                            (90545874), 2009/02~present</li  >
                        <li class="pubStyle1">The Institution of Engineering and Technology, (1100179532), UK, 2010/08~present</li>
                    </ol>
                    <br/><br/>
                    <h2>Technical Program Committee Member:</h2>
                    <hr />
                    <ol>
                        <li class="pubStyle1">International Conference on Advanced Information Technologies (AIT2010),
                            Taichung, Taiwan, Apr. 2010</li>
                        <li class="pubStyle1">The IET International Conference on Frontier Computing – Theory,
                            Technologies and Applications (IET FC2010), Taichung, Taiwan, Aug. 2010</li>
                    </ol>
                    <br/><br/>
                    <h2>Workshop Organizer:</h2>
                    <hr />
                    <ol>
                        <li class="pubStyle1">2009 International Workshop on Mobile E-commerce, Mobile Payment,
                            Mobile Content Service Systems and Technologies, Security Issues and
                            Applications, Aug. 2009, Seoul, Korea</li>
                        <li class="pubStyle1">Guest Editor of the Special Issue－Journal of Networks (JNW), Finland, 2009/08-2010/04 </li>
                    </ol>
                    <br/><br/>
                    <h2>Technique Review:</h2>
                    <hr />
                    <ol>
                        <li class="pubStyle1">IET Image Processing, UK, 2008/08-present</li>
                        <li class="pubStyle1">Asia Journal of Health and Information Sciences, Taiwan, 2009/02-present</li>
                        <li class="pubStyle1">International Journal of Image Processing, Malaysia, 2009/06-present</li>
                        <li class="pubStyle1">Taiwan Academic Network Conference (TANET 2010), Tainan, Taiwna, 2010/08~present</li>
                    </ol>
                    <br/><br/>
                    <h2>Projects:</h2>
                    <hr />
                    <table border="1" width="100%">
                        <tr bgcolor="#ccddaa">
                            <td align="center" width="8%">No.</td>
                            <td align="center" width="32%">Title</td>
                            <td align="center" width="25%">Project Code</td>
                            <td align="center" width="23%">Period</td>
                            <td align="center" width="12%">Sponsor</td>
                        </tr>
                        <tr>
                            <td align="center">1</td>
                            <td align="center">Low Compuation Cost Data Hiding Techniques and Applications</td>
                            <td align="left">NSC 98-2218-E-468-004-MY2</td>
                            <td align="center">2009/09/01 ~ 2011/07/31</td>
                            <td align="center"><a href="http://web1.nsc.gov.tw/mp.aspx?mp=7">
                                    National Science Council</a></td>
                        </tr>
                    </table>
                    <br/><br/>
                    <h2>Lectures:</h2>
                    <hr />
                    <table border="1" width="100%">
                        <tr bgcolor="#aaccdd">
                            <td align="center" width="8%">No.</td>
                            <td align="center" width="17%">Date</td>
                            <td align="center" width="45%">Title</td>
                            <td align="center" width="30%">Location</td>
                        </tr>
                        <tr>
                            <td align="center">1</td>
                            <td align="center">2010/04/29</td>
                            <td align="left">Information Hiding Techniques</td>
                            <td align="center">Information College</td>
                        </tr>
                    </table>
                </div>
                <div style="clear: both;"></div>
            </div>
        </div>
        <p align="center">You are <? MyCounter();?>'th visitor since May 2010</p>
        <p align="center">
            Current time: <script language="JavaScript" type="text/javascript">
            <!--
                    document.write("<span id='clock'></span>");
                    var now,hours,minutes,seconds,timeValue;
                    function showtime(){
                            now = new Date();
                            hours = now.getHours();
                            minutes = now.getMinutes();
                            seconds = now.getSeconds();
                            timeValue = (hours >= 12) ? "PM " : "AM ";
                            timeValue += ((hours > 12) ? hours - 12 : hours) + ":";
                            timeValue += ((minutes < 10) ? "0" : "") + minutes + ":";
                            timeValue += ((seconds < 10) ? "0" : "") + seconds;
                            clock.innerHTML = timeValue;
                            setTimeout("showtime()",100);
                    }
                    showtime();
            -->
            </script>
        </p>
    </body>
</html>
