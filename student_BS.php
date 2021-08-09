<? //<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
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
        <title>Jack-我的徒弟</title>
        <link rel="stylesheet" type="text/css" href="Jack_PHP.css" media="screen" />
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
                <!-- 左側欄 -->
                <div class="left">
                    <ul>
                        <li class="pubStyle1"><a href="students.php">碩士研究生</a></li>
                        <li class="pubStyle1"><a href="student_BS.php">大學專題</a></li>
                    </ul>
                </div>
                <!-- 右側欄 -->
                <div class="right">
                    <h1>大學部專題生</h1>
					<h2>學成下山</h2>
					<center>
						<table border=1 width=600>
							<tr align=center>
								<td width=40>編號</td>
								<td width=100>組員</td>
								<td width=360>專題名稱</td>
								<td width=100>備註</td>
							</tr>
							<tr align=center>
								<td>01</td>
								<td><img src="Images/scilent.jpg" border="1" alt="溫峻安" width="150" height="200"/><br />
									<a href="mailto:a123999654@hotmail.com">溫峻安</a>
									<img src="Images/blackgod.jpg" border="1" alt="張祐宸" width="150" height="200"/><br />
									<a href="mailto:blackgod3000@hotmail.com">張祐宸</a><br /></td>
								<td>圖書租借管理系統--以「書鄉出租店」為例</td>
								<td>2011/06/22完成</td>
							</tr>
                            <tr bgcolor="#aaccdd" align=center>
                                <td>02</td>
                                <td><a href="mailto:ghhuang7814@gmail.com">黃國豪</a></td>
                                <td>動態網頁網站製作--以「亞洲大學資訊工程系」為例</td>
                                <td><a href="http://120.108.114.206/~mick99064027/">測試站1</a><br/>
                                	<a href="http://120.108.114.206/~mick99064027/manager/login.php">測試(管理)</a></td>
                            </tr>
                            <tr align=center>
                                <td>03</td>
                                <td><a href="mailto:tt3333.and@msa.hinet.net">謝佳洲</a></td>
                                <td>資訊安全防衛建置­網路防護設計及入侵偵測實作</td>
                                <td></td>
							</tr>
							<tr align=center>
								<td><a href="mailto:w3213536@hotmail.com">李彥甫</a><br />
                                	<a href="mailto:requiem7756@hotmail.com">陳勁舟</a></td>
                                <td>動態網頁網站製作--以「香聞珍咖啡店」為例</td>
                                <td></td>
                            </tr>
                            <tr bgcolor="#aaccdd" align=center>
                                <td>03</td>
                                <td>李皇慶<br />
                                	<a href="mailto:hsinciliao@gmail.com.tw">廖訢琪(Tina)</a></td>
                                <td>待定</td>
                                <td></td>
                            </tr>
                            <tr align=center>
                                <td>04</td>
                                <td><a href="mailto:p04451231@gmail.com">廖家慧(Lala)</a><br />
                                	<a href="mailto:x24683@hotmail.com">黃千育(Yuri)</a></td>
                                <td>待定</td>
                                <td></td>
                            </tr>
						</table>
					</center>
					<br/>
					<hr>
					
                    <h2>練功中</h2>
                    <h3>專題製作</h3>
                    <center>
                        <table border="1" width=600>
                            <tr align=center>
                                <td width=40>編號</td>
                                <td width=70>組員</td>
                                <td width=390>題目</td>
                                <td width=100>備註</td>
                            </tr>

                        </table>
                    </center>
                    <br /><br />
                    <hr />
                    
					<h3>專業證照抵畢業專題</h3>
                    <center>
                        <table border="1" width=600>
                            <tr align=center>
                                <td width=40>編號</td>
                                <td width=90>姓名</td>
                                <td width=370>考取證照</td>
                                <td width=100>備註</td>
                            </tr>
                            <tr align=center>
                                <td>01</td>
                                <td><img src="Images/Joe.jpg" border="1" alt="羅安僑" width="150" height="200"/><br />
                                	<a href="mailto:joe0232002@hotmail.com">羅安僑</a></td>
                                <td></td>
                                <td>2011/06畢業</td>
                            </tr>
                            <tr align=center>
                                <td>02</td>
                                <td><img src="Images/" border="1" alt="邱文偉" width="150" height="200"/><br />
                                	<a href="mailto:">邱文偉</a></td>
                                <td></td>
                                <td>2012/02畢業</td>
                            </tr>
                            <tr align=center>
                                <td>03</td>
                                <td><img src="Images/97441039.jpg" border="1" alt="林孟儀" width="150" height="200"/><br />
                                	<a href="mailto:">林孟儀</a></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr align=center>
                                <td>04</td>
                                <td><img src="Images/97441113.jpg" border="1" alt="黃佩珊" width="150" height="200"/><br />
                                	<a href="mailto:">黃佩珊</a></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr align=center>
                                <td>05</td>
                                <td><img src="Images/97441109.jpg" border="1" alt="林政德" width="150" height="200"/><br />
                                	<a href="mailto:">林政德</a></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr align=center>
                                <td>06</td>
                                <td><img src="Images/97441103.jpg" border="1" alt="吳嘉芳" width="150" height="200"/><br />
                                	<a href="mailto:">吳嘉芳</a></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr align=center>
                                <td>07</td>
                                <td><img src="Images/97441108.jpg" border="1" alt="方澤強" width="150" height="200"/><br />
                                	<a href="mailto:">方澤強</a></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr align=center>
                                <td>08</td>
                                <td><img src="Images/98064057.jpg" border="1" alt="許傳聖" width="150" height="200"/><br />
                                	<a href="mailto:">許傳聖</a></td>
                                <td></td>
                                <td></td>
                            </tr>
						</table>
					</center>
					<br>
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
