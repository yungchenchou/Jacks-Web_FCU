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
                    <h1>資料探勘 <br/>(Data Mining)</h1>
					<h2>課號: I4U00393</h2>
                    <h3>99學年第二學期</h3>
                    <h3>上課時間：週二 678 (14:10~17:00)</h3>
                    <h3>上課地點：H406</h3>
                    <h2>教科書(Text Book)：</h2>
                    <ol>
                        <li>資料探勘 (Introduction to Data mining), 施雅月、賴錦慧譯, 歐亞書局有限公司, ISBN: 978-9860154-657-5</li>
						<li>Pang-Ning Tan, Michael Steinbach, Vipin Kumar, Introduction to Data Mining, Pearson Education Asia LTD, 2006.</li>
                    </ol>
                    <h2>參考書 (Reference Book)：</h2>
                    <ol>
                        <li>資料探礦概念與技術 (Data Mining: Concepts and Techniques, 2/e), 曾龍譯,維科圖書出版, ISBN:957-8675-92-5</li>
						<li>資料探勘 (Data Mining: A Tutorial-Based Primer), Richard J. Roiger, Michael W. Geatz, 東華書局 (ISBN: 986-7594-01-0)</li>
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
                            <td width="300">期中考地點: <font color=blue><b>管理大樓 (M003)</b></font><br/>
                            	考試時間: <font color=blue><b>16:00~18:00</b></font></td>
                            <td width="150"><font color=red><b>遲到30分鐘不得入場<br/>
                            	考試時不得使用手機</b></font></td>
                        </tr>
                        <tr align=center>
                            <td width="100">2011.04.26</td>
                            <td width="300"><a href="./courses/992_DataMining/Mid_Exam_Sol.pdf">期中考參考解答</a></td>
                            <td width="150"></td>
                        </tr>
                        <tr align=center>
                            <td width="100">2011.05.02</td>
                            <td width="300" align=left>補救教學名單(週一, 14:00~17:00), <br/>
                                            地點: 惜福學苑 8005 室<br/>
                                            季霖, 筱婷, 雨涵, 詩盈, 文偉</td>
                            <td width="150"></td>
                        </tr>
                        <tr align=center>
                            <td width="100">2011.05.02</td>
                            <td width="300" align=left>補救教學名單(週二, 12:00~14:00), <br/>
                                            地點: 健康大樓 H406<br/>
                                            駿偉, 銘傑, 信綸, 偉業, 晁偉, 永皓, 威呈, 教伯, 鈺中</td>
                            <td width="150"></td>
                        </tr>
                        <tr align=center>
                            <td width="100">2011.05.10</td>
                            <td width="300" align=left><a href="./courses/992_DataMining/reportList.pdf">報告日期名單</a></td>
                            <td width="150"></td>
                        </tr>
                        <tr align=center>
                            <td width="100">2011.06.22</td>
                            <td width="300" align=left><a href="./courses/992_DataMining/finalScore.pdf">學期總成績</a></td>
                            <td width="150"></td>
                        </tr>
                    </table>

                    <h2>投影片 (PPT Slide)</h2>
                    <table border ="1" width="550">
                        <tr align="center">
                            <td width="50">編號</td>
                            <td width="100">上傳日期</td>
                            <td width="250">名稱</td>
                            <td width="150">備註</td>
                        </tr>
                        <tr align="center">
                            <td width="50">01.</td>
                            <td width="100">2011.02.22</td>
                            <td width="250"><a href="./courses/992_DataMining/ppt/00_Syllabus.pdf">課程簡介</a></td>
                            <td width="150"></td>
                        </tr>
                        <tr align="center">
                            <td width="50">02.</td>
                            <td width="100">2011.03.01</td>
                            <td width="250"><a href="./courses/992_DataMining/ppt/01_Introduction.pdf">資料探勘</a></td>
                            <td width="150"></td>
                        </tr>
                        <tr align="center">
                            <td width="50">03.</td>
                            <td width="100">2011.03.08</td>
                            <td width="250"><a href="./courses/992_DataMining/ppt/02_Data.pdf">資料</a></td>
                            <td width="150"><a href="./courses/992_DataMining/Exercise/Ex_2011.3.22.pdf">練習</a>
	                            <a href="./courses/992_DataMining/Exercise/Ex1_Solution.pdf">參考解答</a></td>
                        </tr>
                        <tr align="center">
                            <td width="50">04.</td>
                            <td width="100">2011.03.29</td>
                            <td width="250"><a href="./courses/992_DataMining/ppt/03_DataExplor.pdf">資料探索</a></td>
                            <td width="150"><a href="./courses/992_DataMining/Exercise/Ex_2011.3.29.pdf">練習(3/29)</a>
                            	<a href="./courses/992_DataMining/Exercise/Ex_2011_03_29_Sol.pdf">參考解答</a><br/>
                            	<a href="./courses/992_DataMining/Exercise/Ex_2011_04_12.pdf">練習(4/12)</a>
                            	<a href="./courses/992_DataMining/Exercise/Ex_2011_04_12_Sol.pdf">參考解答</a><br/>
                            	<a href="./courses/992_DataMining/Exercise/Ex_2011_04_26.pdf">練習(4/26)</a></td>
                        </tr>
                        <tr align="center">
                            <td width="50">05.</td>
                            <td width="100">2011.03.29</td>
                            <td width="250"><a href="./courses/992_DataMining/ppt/04_classfication_new.pdf">分類法</a></td>
                            <td width="150"><a href="./courses/992_DataMining/Exercise/Ex_2011_05_03.pdf">練習(5/3)</a><br/>
                            	<a href="./courses/992_DataMining/Exercise/Ex_2011_05_10.pdf">練習(5/10)</a></td>
                        </tr>
                        <tr align="center">
                            <td width="50">06.</td>
                            <td width="100">2011.05.31</td>
                            <td width="250"><a href="./courses/992_DataMining/ppt/06_Data_Warehouse.pdf">資料倉儲</a></td>
                            <td width="150"></td>
                        </tr>
                    </table>

					<hr>
                    <h2><b>報告列表</b></h2>
					<ol>
					    <li>陳淑萍, 資料探勘應用於財務危機預警模式, 資訊管理研究所碩士論文(91), 銘傳大學, (報告人: <b>王晁偉</b>)</li>
					    <li>溫國政, 癌症相關基因探勘與預測, 資訊工程學系碩士論文(94), 亞洲大學, (報告人: <b>許文嘉</b>)</li>
					    <li>陳威豪, 智慧型代理人於癌症相關基因之文獻資料探勘之整合與應用, 資訊工程學系碩士論文(91), 亞洲大學, (報告人: <b>沈偉業</b>)</li>
					    <li>張敏亮, 應用資料探勘於交通事故環境之關聯規則與預測, 資訊科學與應用學系碩士論文(94), 亞洲大學, (報告人: <b>邱華偉</b>)</li>
					    <li>賴建龍, 中西藥交互作用知識管理資訊系統架構之研究－利用資料探勘技術建置, 資訊工程學系碩士論文(98), 亞洲大學, (報告人: <b>艾永皓</b>)</li>
					    <li>鄭景邁, 資料探勘技術於學童補救教學之研究, 應用資訊研究所碩士論文(96), 立德管理學院, (報告人: <b>陳彥華</b>)</li>
					    <li>陳銘樹、王建智、王麗雁, 應用決策樹演算法以探究高科技員工潛在的糖尿病之危險因子, 健康管理學刊, 6卷2期(2008/12/01), (報告人: <b>陳紫薇</b>)</li>
					    <li>陳麗帆、周繡玲、周雨青、楊燦、簡戊鑑、白璐、孫建安、曾知浩、朱基銘, 使用比較資料探勘演算法預測非小細胞肺癌患者預後因子、存活情形及其效能, 健康管理學刊, 6卷2期(2008/12/01), (報告人: <b>陳紫薇</b>)</li>
					    <li>吳偉誠, 運用資料探勘技術之視覺式火焰偵測, 資訊工程學系碩士論文(98), 南台科技大學, (報告人: <b>賴羽涵</b>)</li>
					    <li>邱志洲、田政祺、周宇超, 資料探勘中集群模式與分類模式之建構-模糊自適應共振理論綱路、分類迴歸樹與類神經綱路之整合與應用, 工業工程學刊論文, 22卷2期(2005/03/01), (報告人: <b>謝佩純</b>)</li>
					    <li>吳仲涵, 資料探勘應用於自行車之文化差異性行銷, 資訊傳播學系碩士論文, 亞洲大學(98), (報告人: <b>陳鈺中</b>)</li>
					    <li>林逢春, 降低資料參數以提高學習效率, 資訊科學與應用學系碩士班, 亞洲大學(98), (報告人: <b>鄧教伯</b>)</li>
					    <li>顏博文, 應用資料探勘技術分析學生選課特性與學業表現, 資訊管理學系碩士, 中原大學(92), (報告人: <b>王伯鈞</b>)</li>
					    <li>謝佳容, 以資料探勘技術探討醫療費用之結構-以某區域醫院為例, 資訊教育研究所碩士班, 國立高雄師範大學(99), (報告人: <b>楊駿緯</b>)</li>
					    <li>李博智, 資料探勘在慢性病預測模式之建構, 資訊管理學系碩士論文, 元智大學(91) (報告人: <b>徐筱婷</b>)</li>
   					    <li>楊欣明, 資料探勘在健康檢查後續追蹤之應用, 工業管理系所碩士班, 屏東科技大學(98), (報告人: <b>黃瓊儀</b>)</li>
					    <li>陳垂呈, 利用資料探勘技術發掘圖書館個人化之書籍推薦, 教育資料與圖書館學, (報告人: <b>徐詩盈</b>)</li>
					    <li>林彥廷, 資料探勘技術應用於垃圾郵件分析, 資訊管理學系碩士論文, 華梵大學(97), (報告人: <b>鄭銘傑</b>)</li>
					    <li>朱國豪, 資料採礦應用於乳癌患者之遺傳基因及生活因素探討, 應用統計學研究所, 輔仁大學(98), (報告人: <b>梁睜雯</b>)</li>
					    <li>歐宗殷, 資料探勘為基礎之零售業銷售預測模式-以連鎖超商鮮食商品為例, 工業工程與工程管理學系博士班, 國立清華大學(98), (報告人: <b>邱文偉</b>)</li>
					    <li>阮玉華, 資料探勘應用於筆記型電腦電池組備料決策, 資訊管理學系碩士班, 華梵大學(97), (報告人: <b>韓京葳</b>)</li>
					    <li>楊詠喬, 應用資料探勘技術於圖書館藏推薦之研究, 資訊科技應用研究所碩士班, 醒吾技術學院(98), (報告人: <b>許淳淵</b>)</li>
					    <li>陳俊賓,  資料挖掘技術應用於外來入侵植物研究-以恆春地區銀合歡為例, 土木工程研究所, 國立中央大學(92), (報告人: <b>洪巧臻</b>)</li>
					</ol>

                    <h2>小考 (Quizzes)</h2>
                    <table border="1" width="550">
                        <tr align="center">
                            <td width="60">項目</td>
                            <td width="220">日期</td>
                            <td width="60">成績</td>
                            <td width="210">備註</td>
                        </tr>
                        <tr align="center">
                            <td width="60">01</td>
                            <td width="220"><a href="./courses/992_DataMining/quiz_2011_03_08.pdf">2011.03.08</a></td>
                            <td width="60"><a  href="./courses/992_DataMining/quiz_score.pdf">成績</td>
                            <td width="210"></td>
                        </tr>
                        <tr align="center">
                            <td width="60">02</td>
                            <td width="220"><a href="./courses/992_DataMining/quiz_2011_03_15.pdf">2011.03.15</a></td>
                            <td width="60"></td>
                            <td width="210"></td>
                        </tr>
                        <tr align="center">
                            <td width="60">03</td>
                            <td width="220"><a href="./courses/992_DataMining/quiz_2011_03_22.pdf">2011.03.22</a></td>
                            <td width="60"></td>
                            <td width="210"></td>
                        </tr>
                        <tr align="center">
                            <td width="60">04</td>
                            <td width="220"><a href="./courses/992_DataMining/quiz_2011_03_29.pdf">2011.03.29</a></td>
                            <td width="60"></td>
                            <td width="210"></td>
                        </tr>
                        <tr align="center">
                            <td width="60">05</td>
                            <td width="220"><a href="./courses/992_DataMining/quiz_2011_04_12.pdf">2011.04.12</a></td>
                            <td width="60"></td>
                            <td width="210"></td>
                        </tr>
                        <tr align="center">
                            <td width="60">06</td>
                            <td width="220"><a href="./courses/992_DataMining/quiz_2011_05_03.pdf">2011.05.03</a></td>
                            <td width="60"></td>
                            <td width="210"></td>
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
