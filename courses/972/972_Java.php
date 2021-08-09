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
                    <script type="text/javascript" language="javascript">treeCreate();</script>
                </div>
                <div class="right">
                    <h1>Java 程式設計<br/>(Java Programming)</h1>
                    <h3>97學年第二學期</h3>
                    <h3>上課地點：H103</h3>
                    <h2>教科書：</h2>
                    <ol>
                        <li></li>
                    </ol>
                    <h2>參考書：</h2>
                    <ol>
                        <li></li>
                    </ol>
                    <h2>公告</h2>
		    <table border=1>
                <tr align=center>
                    <td>公告日期</td>
                    <td>內容</td>
                    <td>備註</td>
                </tr>
                <tr>
                    <td align="center">2009/02/23</td>
                    <td><a href="http://download.oracle.com/javase/6/docs/api/">Java 6 API 指令參考(英文版)</a></td>
                    <td></td>
                </tr>
                <tr>
                    <td align="center">2009/04/11</td>
                    <td><a href="courses/972_Java/describe.pdf">Java 邏輯運算子 & 與 && 及 | 與 || 的差別</a></td>
                    <td></td>
                </tr>
                <tr>
                    <td align="center">2009/04/13</td>
                    <td>考試時間：4月14日 下午 一點十分<br/>
                        考試地點：H103</td>
                    <td></td>
                </tr>
                <tr>
                    <td align="center">2009/04/21</td>
                    <td><a href="courses/972_Java/MidExam_Sol.pdf">期中考參考解答</a></td>
                    <td><a href="courses/972_Java/ME_Score.pdf">期中考成績</a></td>
                </tr>
                <tr>
                    <td align="center">2009/04/22</td>
                    <td><font color="red">期中考考卷有問題的同學請於週五(4/24)16:00 前到二宿8005室查看</font></td>
                    <td></td>
                </tr>
                <tr>
                    <td>2009/06/14</td>
                    <td><font color="red">作業繳交期限截止。</font></td>
                    <td></td>
                </tr>
                <tr>
                    <td>2009/06/18</td>
                    <td><a href="courses/972_Java/FinalScore.pdf">學期總成績</a></td>
                    <td><font color="red">期末考成績複查至6/24 中午 12:00 止</font></td>
                </tr>
		    </table>
                    <h2>投影片</h2>
                    <table border ="1">
                        <tr>
                            <td>編號</td>
                            <td>上傳日期</td>
                            <td>名稱</td>
                            <td>備註</td>
                        </tr>
                        <tr>
                            <td align="center">1.</td>
                            <td>2009/02/16</td>
                            <td><a href="courses/972_Java/ppt/00_Syllabus.ppt">課程介紹</a></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td align="center">2.</td>
                            <td>2009/02/16</td>
                            <td><a href="courses/972_Java/ppt/01_Introduction.ppt">簡介</a></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td align="center">3.</td>
                            <td>2009/03/01</td>
                            <td><a href="courses/972_Java/ppt/02_JavaComponent.ppt">Java 程式的構成與變數</a></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td align="center">4.</td>
                            <td>2009/03/03</td>
                            <td><a href="courses/972_Java/ppt/03.ppt">變數與流程控制(一)</a></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td align="center">5.</td>
                            <td>2009/03/10</td>
                            <td><a href="courses/972_Java/ppt/04.ppt">流程控制(二)</a></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td align="center">6.</td>
                            <td>2009/03/17</td>
                            <td><a href="courses/972_Java/ppt/05.ppt">陣列(一)</a></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td align="center">7.</td>
                            <td>2009/03/24</td>
                            <td><a href="courses/972_Java/ppt/06.ppt">陣列(二)</a></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td align="center">8.</td>
                            <td>2009/03/31</td>
                            <td><a href="courses/972_Java/ppt/07_OOP.ppt">物件導向程式設計</a></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td align="center">9.</td>
                            <td>2009/04/21</td>
                            <td><a href="courses/972_Java/ppt/08_VarScope.pdf">變數有效範圍、匿名陣列</a></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td align="center">10.</td>
                            <td>2009/04/28</td>
                            <td><a href="courses/972_Java/ppt/08_Recursive.pdf">遞迴及多重定義方法</a></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td align="center">11.</td>
                            <td>2009/05/05</td>
                            <td><a href="courses/972_Java/ppt/09_Constructor.pdf">物件的建構</a></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td align="center">12.</td>
                            <td>2009/05/05</td>
                            <td><a href="courses/972_Java/ppt/17_JavaAPI.pdf">Java標準類別庫</a></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td align="center">13.</td>
                            <td>2009/05/12</td>
                            <td><a href="courses/972_Java/ppt/10_String.pdf">字串</a></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td align="center">14.</td>
                            <td>2009/05/26</td>
                            <td><a href="courses/972_Java/ppt/18_GUI.pdf">圖形介面</a></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td align="center">15.</td>
                            <td>2009/06/02</td>
                            <td><a href="courses/972_Java/ppt/18_GUI.pdf">版面控制管理員</a></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td align="center">16.</td>
                            <td>2009/06/02</td>
                            <td><a href="courses/972_Java/ppt/12_Interface.pdf">介面</a></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td align="center">16.</td>
                            <td>2009/06/02</td>
                            <td><a href="courses/972_Java/ppt/00_GenJAR.pdf">產生可執行的JAR檔</a></td>
                            <td></td>
                        </tr>
                    </table>
                    <h2>作業</h2>
                    <table border="1">
                        <tr>
                            <td>作業</td>
                            <td>繳交期限</td>
                            <td>成績</td>
                        </tr>
                        <tr>
                            <td><a href="courses/991_WinProgB/hws/hw01.pdf">作業1</a></td>
                            <td>2010/09/19 晚上十二點之前 </td>
                            <td><a href="courses/991_WinProgB/hws/score_hw1.pdf">成績</a></td>
                        </tr>
                    </table>
                    <h2>小考</h2>
                    <table border="1">
                        <tr>
                            <td>日期</td>
                            <td>成績</td>
                        </tr>
                        <tr>
                            <td><a href="courses/972_Java/quiz_0421.pdf">Apr. 21, 2009</a></td>
                             <td><a href="courses/972_Java/quiz_0421_score.pdf">成績</a></td>
                        </tr>
                        <tr>
                            <td><a href="courses/972_Java/quiz_0505.pdf">May 5, 2009</a></td>
                             <td><a href="courses/972_Java/quiz_0505_score.pdf">成績</a></td>
                        </tr>
                        <tr>
                            <td><a href="courses/972_Java/quiz_0512.pdf">May 12, 2009</a></td>
                             <td><a href="courses/972_Java/quiz_0512_score.pdf">成績</a></td>
                        </tr>
                        <tr>
                            <td><a href="courses/972_Java/quiz_0519.pdf">May 19, 2009</a></td>
                             <td><a href="courses/972_Java/quiz_0519_score.pdf">成績</a></td>
                        </tr>
                        <tr>
                            <td><a href="courses/972_Java/quiz_0526.pdf">May 26, 2009</a></td>
                             <td><a href="courses/972_Java/quiz_0526_score.pdf">成績</a></td>
                        </tr>
                        <tr>
                            <td><a href="courses/972_Java/quiz_0602.pdf">Jun. 2, 2009</a></td>
                             <td><a href="courses/972_Java/quiz_0602_score.pdf">成績</a></td>
                        </tr>
                        <tr>
                            <td><a href="courses/972_Java/quiz_0609.pdf">Jun. 9, 2009</a></td>
                             <td><a href="courses/972_Java/quiz_0609_score.pdf">成績</a></td>
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