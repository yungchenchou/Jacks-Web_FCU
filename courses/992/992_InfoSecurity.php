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
                    <h1>資訊安全(碩專) <br/>(Information Security)</h1>
					<h2>課號: 66E00043</h2>
                    <h3>99學年第二學期</h3>
                    <h3>上課時間：週一 ABC (18:30~21:05)</h3>
                    <h3>上課地點：S002</h3>
                    <h2>教科書：</h2>
                    <ol>
                        <li>資訊與網路安全概論，黃明祥、林詠章，高立圖書有限公司</li>
                    </ol>
                    <h2>參考書 (Text Book)：</h2>
                    <ol>
                        <li>近代密碼學及其應用，賴溪松、韓亮、張真誠，旗標出版公司</li>
                    </ol>
                    <h2>公告 (Notice)</h2>
                    <table border=1 width="550">
                        <tr align=center>
                            <td width="100">公告日期</td>
                            <td width="300">內容</td>
                            <td width="150">備註</td>
                        </tr>
                        <tr align=center>
                            <td width="100">2011.04.18</td>
                            <td width="300">期中報告: 題目：「<font color=blue>論雲端環境下的資訊安全</font>」</td>
                            <td width="150">依論文撰寫格式製作。4/30前繳交，至少五頁以上</td>
                        </tr>
                        <tr align=center>
                            <td width="100">2011.04.25</td>
                            <td width="300"><a href="./courses/992_InfoSecurity/InformationSecurity.png">資訊安全心智圖</a></td>
                            <td width="150"></td>
                        </tr>
                        <tr align=center>
                            <td width="100">2011.04.25</td>
                            <td width="300"><a href="./courses/992_InfoSecurity/ppts/presentList.pdf">報告順序</a></td>
                            <td width="150"></td>
                        </tr>
                        <tr align=center>
                            <td width="100">2011.06.22</td>
                            <td width="300"><a href="./courses/992_InfoSecurity/finalScore.pdf">學期總成績</a></td>
                            <td width="150"></td>
                        </tr>
                    </table>
                    
					<hr>
                    <h2><b>報告列表</b></h2>
					<ol>
					    <li>Wang, Z. H., Chang, C. C., Chen, K. N. and Li, M. C., 
					        "An Encoding Method for Both Image Compression and Data Lossless Information Hiding," 
					        <i>Journal of Systems and Software</i>, 
					        Vol. 83, No. 11, pp. 2073-2082, Nov. 2010 (報告人: <b>方文君</b>)</li>
					    <li>Lou, D. C., Hua, M. C., and Liua, J. L., 
					        "Multiple Layer Data Hiding Scheme for Medical Images," 
					        <i>Computer Standards & Interfaces</i>, 
					        Vol. 31, No. 2, pp. 329-335, Feb. 2009 (報告人: <b>吳世能</b>)</li>
					    <li>Lee, C. F., Chen, H. L., and Tso, H. K., 
					        "Embedding Capacity Raising in Reversible Data Hiding based on Prediction of Difference Expansion," 
					        <i>Journal of Systems and Software</i>, 
					        Vol. 83, No. 10, Oct. 2010, pp. 1864-1872 (報告人: <b>施仲彥</b>)</li>
					    <li>Kieu, T. D. and Chang, C. C., 
					        "A High Stego-Image Quality Steganographic Scheme with Reversibility and High Payload Using Multiple Embeddin Strategy"
					        The Journal of Systems and Software, Vol. 82, 2009, pp. 1743-1752 (報告人: <b>蘇文茜</b>)</li> 
				        <li>Luo, L., Chen, Z., Chen, M., Zeng, X., and Xiong, Z.,
					        "Reversible Image Watermarking Using Interpolation Technique ," 
					        <i>IEEE Transactions on Information Forensics and Security,</i>, 
					        Vol. 5, No. 1, pp. 187-193, 2010 (報告人: <b>黃君怡</b>)</li>
					    <li>Tseng, H. W. and Hsieh, C. P.,
					        "Prediction-based Reversible Data Hiding," 
					        <i>Information Sciences</i>, 
					        Vol. 179, No. 14, pp. 2460-2469, Jun. 2009 (報告人: <b>蔡維珊</b>)</li>
					</ol>

                    <h2>投影片 (PPT Slide)</h2>
                    <table border ="1" width="550">
                        <tr align="center">
                            <td width="50">編號</td>
                            <td width="100">上傳日期</td>
                            <td width="400">名稱</td>
                        </tr>
                        <tr align="center">
                            <td width="50">01</td>
                            <td width="100">2011.02.21</td>
                            <td width="400"><a href="./courses/992_InfoSecurity/ppts/00_Syllabus.pdf">課程說明</a></td>
                        </tr>
                        <tr align="center">
                            <td width="50">02</td>
                            <td width="100">2011.03.06</td>
                            <td width="400"><a href="./courses/992_InfoSecurity/ppts/01_Introduction.pdf">簡介</a></td>
                        </tr>
                        <tr align="center">
                            <td width="50">03</td>
                            <td width="100">2011.03.06</td>
                            <td width="400"><a href="./courses/992_InfoSecurity/ppts/02_crime_security.pdf">電腦網路犯罪與安全</a></td>
                        </tr>
                        <tr align="center">
                            <td width="50">04</td>
                            <td width="100">2011.03.14</td>
                            <td width="400"><a href="./courses/992_InfoSecurity/ppts/04_Cryptography_1.pdf">密碼學</a></td>
                        </tr>
                        <tr align="center">
                            <td width="50">05</td>
                            <td width="100">2011.03.14</td>
                            <td width="400"><a href="./courses/992_InfoSecurity/ppts/04_Cryptography_2.pdf">DES 加密系統</a></td>
                        </tr>
                        <tr align="center">
                            <td width="50">06</td>
                            <td width="100">2011.04.25</td>
                            <td width="400"><a href="./courses/992_InfoSecurity/ppts/IS_RSA.pdf">RSA 加密系統</a></td>
                        </tr>
                        <tr align="center">
                            <td width="50">07</td>
                            <td width="100">2011.04.25</td>
                            <td width="400"><a href="./courses/992_InfoSecurity/ppts/IS_DigitalImage.pdf">數位影像</a></td>
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
