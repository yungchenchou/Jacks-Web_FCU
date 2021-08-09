<? //<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
include("calender.php");
include("mainMenu.php");
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
        <title>Jack's Web</title>
        <link rel="stylesheet" type="text/css" href="Jack_PHP.css" media="screen" />
        <script type="text/javascript" src="courseMenu.js"></script>
    </head>
    <body>
        <div id="wrap">
            <div id="header">
                <h1><a href="index.php">周永振</a></h1>
                <h2>Yung-Chen Chou</h2>
            </div>
            <div id="menu">
                <?php mainMenu(); ?>
            </div>
            <div id="content">
                <div class="left">
                    <script language="javascript" type="text/javascript">treeCreate();</script>
                </div>
                <div class="right">
                    <h1>資料庫系統概論<br/>(Introduction to Database Systems)</h1>
					<h2>課號: 64U00212</h2>
                    <h3>99學年第二學期</h3>
                    <h3>上課時間：週二 123 (08:10~11:00)</h3>
                    <h3>上課地點：H103</h3>
                    <h2>教科書：</h2>
                    <ol>
                        <li>資料庫系統理論與實務，陳祥輝，旗標出版股份有限公司</li>
                    </ol>
                    <h2>參考書 (Text Book)：</h2>
                    <ol>
                        <li>資料庫系統原理<<第五版>>，陳玄玲譯，碁峰股份有限公司</li>
						<li>資料庫系統理論與應用，陳良弼編、梁錫卿、李華富譯，高立圖書有限公司</li>
                    </ol>
                    <h2>公告 (Notice)</h2>
                    <table border=1 width="550">
                        <tr align=center>
                            <td width="100">公告日期</td>
                            <td width="300">內容</td>
                            <td width="150">備註</td>
                        </tr>
                        <tr align=center>
                            <td width="100">2011/02/21</td>
                            <td width="300"><font color=red><b>本課程因選課人數未達最低開課人數, 因此停開此課程. </b></font></td>
                            <td width="150"> </td>
                        </tr>
                    </table>

                    <h2>投影片 (PPT Slide)</h2>
                    <table border ="1" width="550">
                        <tr align="center">
                            <td width="50">編號</td>
                            <td width="100">上傳日期</td>
                            <td width="400">名稱</td>
                        </tr>
                    </table>

                    <h2>作業 (Homeworks)</h2>
                    <table border="1" width="550">
                        <tr align="center">
                            <td width="60"">項目</td>
                            <td width="220">繳交期限</td>
                            <td width="60">成績</td>
                            <td width="210">備註</td>
                        </tr>
                    </table>
                </div>
                <div style="clear: both;"></div>
            </div>
        </div>
        <center>
            <p>您是自2010年5月以來 第  <? MyCounter();?> 位 參觀本站的訪客</p>
            <p>現在時間： <script type type ="text/javascript" src="showTime.js"></script></p>
        </center>
    </body>
</html>
