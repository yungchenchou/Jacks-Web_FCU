<? //<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
include("calender.php");
include("eManu.php");
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

<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-TW">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Jack's Publication List</title>
	<link rel="stylesheet" type="text/css" href="css/Jack_PHP.css" media="screen" />
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
	<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
	<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
	<script>
		$(function() {
		$( "#tabs" ).tabs();
		});
	</script>
</head>
<body>
	<div id="wrap">
		<div id="header">
			<h1><a href="index.php">Yung-Chen Chou</a></h1>
			<h2>周永振</h2>
		</div>
		<?php sideNav(4); ?>
		<div id="content">
			<div id="tabs">
				<ul>
					<li><a href="#tabs-1">Int. Journal</a></li>
					<li><a href="#tabs-2">Book Chapter</a></li>
					<li><a href="#tabs-3">Int. Conference</a></li>
					<li><a href="#tabs-4">Local Journal</a></li>
					<li><a href="#tabs-5">Local Conference</a></li>
				</ul>
				<div id="tabs-1" style="background: #E9E9E9;">
					<span class='articleTitle'>International Journal Papers</span>
					<ol class='pubList'>
						<li>Chang, Chin-Chen, <b>Chou, Yung-Chen</b>, Yu, Yuan-Hui and Shih, Kai-Jung, (2005):
							"An Image Zooming Technique Based on Vector Quantization Approximation,"
							<i>Image and Vision Computing</i>,
							Vol. 23, No. 13, Nov. 2005, pp. 1214-1225.
							(<font color="blue"><a href="IJ-01_SCI.pdf">SCI</a> / EI,
							Impact Factor: 1.383, Journal Ranking: 17 / 79</font>)</li>

						<li>Chang, Chin-Chen, <b>Chou, Yung-Chen</b> and Lin, Chih-Yang, (2007):
							"Reversible Data Hiding in the VQ-Compressed Domain,"
							<i>IEICE Transactions on Information and Systems</i>,
							Vol. E90-D No. 9, Sept. 2007, pp.1422-1429.
							(<font color="blue"><a href="IJ-02_SCI.pdf">SCI</a> / EI,
							Impact Factor: 0.280, Journal Ranking: 82 / 87</font>)</li>

						<li>Chang, Chin-Chen, Kieu, The Duc and <b>Chou, Yung-Chen</b>, (2008):
							"Reversible Data Embedding for Color Images,"
							<i>Journal of Digital Information Management</i>,
							Vol, 6, No. 2, Apr. 2008, pp. 143-150.
							(<font color="blue">EI</font>)</li>

						<li>Chang, Chin-Chen, <b>Chou, Yung-Chen</b> and Kieu, The Duc, (2008):
							"High Capacity Data Hiding for Grayscale Images,"
							<i>Fundamenta Informaticae</i>,
							Vol. 86, No. 4, Jul. 2008, pp. 435-446.
							(<font color="blue"><a href="IJ-04_SCI.pdf">SCI</a> / EI,
							Impact Factor: 0.693, Journal Ranking: 53 / 84</font>)</li>

						<li>Chang, Chin-Chen, <b>Chou, Yung-Chen</b> and Hsieh, Yi-Pei, (2009):
							"Search-Order Coding Method with Indicator-elimination Property,"
							<i>Journal of Systems and Software</i>,
							Vol. 82, No. 3, Feb. 2009, pp. 516-525.
							(<font color="blue"><a href="IJ-05_SCI.pdf">SCI</a> / EI,
								Impact Factor: 0.799, Journal Ranking: 43 / 84 </font>)</li>

						<li>Chang, Chin-Chen, Kieu, The Duc, and <b>Chou, Yung-Chen</b>, (2008):
							"Reversible Information Hiding for VQ Indices Based on Locally Adaptive Coding,"
							<i>Journal of Visual Communication and Image Representation</i>,
							Vol. 20, No. 1, Jan. 2009, pp. 57-64.
							(<font color="blue"><a href="IJ-06_SCI.pdf">SCI</a> / EI,
								Impact Factor: 0.832, Journal Ranking: 45 / 92 </font>)</li>

						<li><b>Chou, Yung-Chen</b>, Chang, Chin-Chen, and Li, K. M., (2008):
							"A Large Payload Data Embedding Technique for Color Images,"
							<i>Fundamenta Informaticae</i>, Vol. 88, No. 1-2, Sept. 2008, pp. 47-61.
							(<font color="blue"><a href="IJ-07_SCI.pdf">SCI</a> / EI,
								Impact Factor: 0.693, Journal Ranking: 53 / 84</font>)</li>

						<li>Chang, Chin-Chen and <b>Chou, Yung-Chen</b>, (2008):
							"A Fragile Digital Image Authentication Scheme Inspired by Wet Paper Codes,"
							<i>Fundamenta Informaticae</i>,
							Vol. 90, No. 1-2, Feb. 2009, pp. 17-26.
							(<font color="blue"><a href="IJ-08_SCI.pdf">SCI</a> / EI,
								Impact Factor: 0.693, Journal Ranking: 53 / 84</font>)</li>
						
						<li>Lin, Chih-Yang*, Chang, Wei-Wen, and <b>Chou, Yung-Chen</b>, (2012): 
							"Bidirectional Background Modeling for Video Surveillance," 
							Journal of Electronic Science and Technology，Vol. 10, No. 3, Sept. 2012, pp. 232-237.
							(<font color="blue">EI Inspec</font>)</li>
							
						<li><b>Chou, Yung-Chen</b>*, Li, Huang-Ching, (2013):
							"High Payload Reversible Data Hiding Scheme Using Difference Segmentation and Histogram Shifting," 
							<i>Journal of Electronic Science and Technology</i>, Vol. 11, No. 1, Mar. 2013, pp. 9-14.
							(<font color="blue">EI Inspec</font>)</li>
							
						<li><b>Chou, Yung-Chen</b>, Lo, Ya-Hsin, and Shen, Jaui-Ji*, (2013): 
							"A New Quality Improving Scheme for VQ Decompressed Images Based on DWT," 
							<i>Journal of Electronic Science and Technology</i>, Vol. 11, No. 1, Mar. 2013, pp. 51-57. 
							(<font color="blue">EI Inspec</font>)</li>

						<li><b>Chou, Yung-Chen*</b>, Lin, Iuon-Chang, and Hsu, Ping-Kun, (2013): 
							"A Watermarking for HTML Files Based on Multi-channel System," 
							<i>International Journal of Security and Its Applications</i>, Vol. 7, No. 3, May 2013,  pp. 163--174. 
							(<font color="blue">EI Inspec ????</font>)</li>

						<li>Chang, Chin-Chen*, <b>Chou, Yung-Chen</b>, Lin, Chih-Yang, (2013): 
							"An Indicator Elimination Method for Side-match Vector Quantization," 
							<i>Journal of Information Hiding and Multimedia Signal Processing</i>,  
							(<font color="blue">Accepted on Apr. 13, 2013</font>)</li>
					</ol>
				</div>
				<div id="tabs-2" style="background: #E9E9E9;">
					<span class='articleTitle'>Book Chapter</span>
					<ol class='pubList'>
						<li>Chang, Chin-Chen, Shen, Jau-Ji and <b>Chou, Yung-Chen</b>, (2005):
							"FA-Tree--A Dynamic Indexing Structure for Spatial Data,"
							<i>Soft Computing as Transdisciplinary Science and Technology:
								4th IEEE International Workshop on Soft Computing as Transdisciplinary Science and
								Technology (WSTST05)</i>,
							(Dote, A., Koppen, F. and Ohsawa, O. Eds.),	Springer-Verlag GmbH,
							Muroran, Japan, May 2005, pp. 1071-1080.
							(<font color="blue">Springer-Verlag, Accepted rate: ?? %</font>)</li>

						<li>Chang, Chin-Chen, <b>Chou, Yung-Chen</b> and Shen, Jau-Ji, (2005):
							"Improving Image Quality for JPEG Compression,"
							<i>Knowledge-Based Intelligent Information and Engineering Systems:
								9th International Conference (KES 2005)</i>,
							(R. Khosla, R.J. Howlett, and L.C. Jain Eds.),
							Springer-Verlag GmbH, Melbourne, Australia, Part III, Vol. 3683, Sept. 2005, pp. 442-448.
							(<font color="blue">SCI / EI, Impact Factor: 0.251, Ranking: 70 / 78;
								Springer-Verlag, Accepted rate: regular 181 / 570 = 31.8 %</font>)</li>

						<li>Chang, Chin-Chen, <b>Chou, Yung-Chen</b> and Wu, Wen-Chuan, (2005):
							"Image Retrieval Using Spatial Color and Edge Detection,"
							<i>Advances in Mulitmedia Information Processing:
								6th Pacific Rim Conference on Multimedia (PCM 2005)</i>,
							(Ho, Y. S. and Kim, H. J. Eds.),
							Springer-Verlag GmbH, Jeju, Korea, Vol. 2767, Part I, Nov. 2005, pp. 981-992.
							(<font color="blue">SCI / EI, Impact Factor: 0.513, Ranking: 53 / 70;
								Springer-Verlag, Accepted rate: ??</font>)</li>

						<li>Shen, Jau-Ji, Chang, Chin-Chen and <b>Chou, Yung-Chen</b>, (2006):
							"Absorber Filter--A New Efficient and Cost Reduced Search Filter,"
							<i>Advances in Natural Computation and Data Mining--Proceedings of the 3rd International
								Conference on Fuzzy Systems and Knowledge Discovery (FSKD'06)</i>,
							(Jiao, L., Shi, G., Gao, X.,Wang, L., Wang, S. and Liu, J. Eds.),
							Xidan University Press, China, Sept. 2006, pp. 346-357.</li>

						<li>Chang, Chin-Chen, Chen, Yi-Hui and <b>Chou, Yung-Chen</b>, (2007):
							"Reversible Data Embedding Technique for Palette Images Using De-clustering,"
							<i>Multimedia Content Analysis and Mining (MCAM'07)</i>,
							(Sebe, N., Liu, Y., Zhuang, Y., and Huang, T. S. Eds.),
							Springer Verlag, Germany, Jun. 2007, pp. 130-139.</li>

						<li>Chang, Chin-Chen, Tsou, Chih-Chiang and <b>Chou, Yung-Chen</b>, (2007): 
							"A Remediable Image Authentication Scheme Based on Feature Extraction and Clustered VQ,"
							<i>Advances in Multimedia Information Processing-PMC2007--Proceedings of 8th Pacific-Rim
								Conference on Multimedia</i>,
								(Ip, H. S., Au, O. C., Leung, H., Sun, M. T., Ma, W. Y. and Hu, M. Eds.),
								Springer Verlag, Germany, Dec. 2007, pp. 446-449.</li>

						<li>Chang, Chin-Chen, <b>Chou, Yung-Chen</b> and Lu, Tzu-Chuen, (2007):
							"A Semi-blind Watermarking Based on Discrete Wavelet Transform,"
							<i>Information and Communications Security--Proceedings of the 9th International
								Conference on Information and Communications Security (ICICS 2007)</i>,
								(Qing S. Imai, H., and Wang, G. Eds.),
								Springer Verlag, Zhengzhou, China, Dec. 2007, pp. 164-176.</li>

						<li><b>Chou, Yung-Chen</b> and Chang, Chin-Chen, (2008):
							"Restoring Objects for Digital Inpainting,"
							<i>Information Hiding and Applications</i>,
							(Pan, J. S., Huang, H. C., and Jain, L. C. Eds.),
							Springer Verlag, Germany, Jul. 2009, Chapter 3, pp. 47-61.</li>
					</ol>
				</div>
				
				<div id="tabs-3" style="background: #E9E9E9;">
					<span class='articleTitle'>International Conference Papers</span>
					<ol class='pubList'>
						<li>Chang, Chin-Chen, <b>Chou, Yung-Chen</b>, and Shen, Jau-Ji, (2006):
							"A Discrete Wavelet Transform Based State-codebook Search Algorithm for Vector Quantization,"
							<i>Proceedings of 2006 International Conference on Innovative Computing,
								Information and Control (ICICIC2006)</i>,
							Vol. 1, Beijing, China, Aug. 2006, pp. 197-200.</li>

						<li>Chang, Chin-Chen and <b>Chou, Yung-Chen</b>, (2006):
							"Quantization Index Modulation Using Vector Quantization with DWT Based State-Codebook Search,"
							<i>Proceedings of 2006 IEEE International Conference on Intelligent Information Hiding and
								Multimedia Signal Processing (IIHMSP-2006)</i>,
							Pasadena, California, USA, Dec. 2006, pp. 549-552.</li>

						<li>Chang, Chin-Chen, <b>Chou, Yung-Chen</b>, and Shen, Jau-Ji, (2006):
							"A Novel Image Compression Algorithm Based on Sixteen Most Lately Used Encoded Codewords,"
							<i>Proceedings of 2006 IEEE International Conference on Intelligent Information Hiding and
								Multimedia Signal Processing (IIHMSP-2006)</i>,
							Pasadena, California, USA, Dec. 2006, pp. 545-548.</li>

						<li>Chang, Chin-Chen, <b>Chou, Yung-Chen</b>, and Shen, Jau-Ji, (2006):
							"A Heuristic Method for Extracting Enhanced Watermarks from Digital Images,"
							<i>Proceedings of 2006 IEEE International Conference on Intelligent Information Hiding and
								Multimedia Signal Processing (IIHMSP-2006)</i>,
							Pasadena, California, USA, Dec. 2006, pp. 453-456.</li>

						<li>Chang, Chin-Chen and <b>Chou, Yung-Chen</b>, (2007):
							"High Payload Data Embedding with Hybrid Strategy,"
							<i>Proceedings of Third International Conference on Intelligent Information Hiding and
								Multimedia Signal Processing (IIHMSP07)</i>,
							Kaohsiung, Taiwan, Nov. 2007, Vol. 1, pp. 505-508.</li>

						<li>Chang, Chin-Chen, <b>Chou, Yung-Chen</b>, and Lin, Chia-Chen(2007):
							"A New Image Compression Scheme Based on Locally Adaptive Coding,"
							<i>Proceedings of Ninth IEEE International Symposium on Multimedia (ISM 2007)</i>,
							Taichung, Taiwan, Dec. 2007, pp. 14-21.</li>

						<li>Chang, Chin-Chen, Kieu, The Duc and <b>Chou, Yung-Chen</b>, (2007):
							"Reversible Data Hiding Scheme Using Two Steganographic Images,"
							<i>Proceedings of IEEE TENCON 2007</i>,
							Taipei, Taiwan, Oct. 2007, pp. 1-4.</li>

						<li>Chang, Chin-Chen, Kieu, The Duc, and <b>Chou, Yung-Chen</b>, (2007):
							"Using Nearest Covering Codes to Embed Secret Information in Grayscale Images,"
							<i>Proceedings of Second International Conference on Ubiquitous Information
								Management and Communication (ICUIMC 2008)</i>,
								Suwon, Korea, Jan. 2008, pp. 315-320.</li>

						<li>Chang, Chin-Chen, <b>Chou, Yung-Chen</b>, and Kieu, The Duc, (2008):
							"An Information Hiding Scheme Using Sudoku,"
							<i>Proceedings of Third International Conference on Innovative Computing, Information
								and Control (ICICIC2008)</i>,
							Dalian, China, Jun. 2008, pp. 17-1--17-5.</li>

						<li>Chang, Chin-Chen, Kieu, The Duc, and <b>Chou, Yung-Chen</b>, (2008):
							"A High Payload Steganographic Scheme Based on (7, 4) Hamming Code for Digital Images,"
							<i>Proceedings of International Symposium on Electronic Commerce and Security (ISECS 2008)</i>,
							Guangzhou, China, Aug. 2008, pp. 16-21.</li>

						<li>Chang, Chin-Chen, <b>Chou, Yung-Chen</b>, and Lin, Chia-Chen, (2009):
							"A Steganographic Scheme Based on Wet Paper Codes Suitable for Uniformly Distributed Wet Pixels,"
							<i>Proceedings of the IEEE International Symposium on Circuits and Systems (ISCAS 2009)</i>,
							Taipei, Taiwan, May 2009, pp. 501-504.</li>

						<li>Chang, Chin-Chen, <b>Chou, Yung-Chen</b>, and Kieu, The Duc, (2009):
							"Information Hiding in Dual Images with Reversibility,"
							<i>Proceedings of the 3rd International Conference on Multimedia and Ubiquitous
								Engineering (MUE 2009)</i>,
							Qingdao, China, Jun. 2009, pp. 145-152.</li>

						<li>Chang, Chin-Chen, <b>Chou, Yung-Chen</b>*, and Hsieh, Ming-Huang, (2009):
							"A Simple and Efficient Data Hiding Scheme Suitable for Low Power Computation Environments,"
							<i>Proceedings of the Fifth International Conference on Intelligent Information Hiding and
								Multimedia Signal Processing (IIHMSP-2009)</i>,
							Kyoto, Japan, Sept. 2009, pp. 624-627.</li>

						<li>Lee, Jung-San*, Li, Bo, and <B>Chou, Yung-Chen</B>, (2009):
							"A Brand-new Mobile Value-added Service: M-Check,"
							<i>Proceedings of 5th International Joint Conference on INC, IMS and IDC (NCM 2009)</i>,
							Seoul, Korea, Aug. 2009, pp. 2050-2055.</li>

						<li><b>Chou, Yung-Chen</b>* and Chang, Hon-Hang, (2010):
							"A Data Hiding Scheme for Color Image Using BTC Compression Technique,"
							<i>Proceedings of The 9th IEEE International Conference on Cognitive Informatics</i>,
							Beijing, China, Jul. 2010, pp. 845-850.</li>

						<li>Chang, Chin-Chen, <b>Chou, Yung-Chen</b>*, and Kieu, The Duc, (2010):
							"Embedding Data and Sharing Original Image in Two Stego Images Using Sudoku,"
							<i>Proceedings of the IET International Conference on Frontier Computing - Theory,
								Technologies and Applications (IET FC 2010)</i>,
							Taichung, Taiwan, Aug. 2010, pp. 163-168.</li>

						<li><b>Chou, Yung-Chen</b>, Lin, Chih-Hung*, Li, Po-Chin, and Li, Yu-Chiang, (2010):
							"A (2, 3) Threshold Secret Sharing Scheme Using Sudoku,"
							<i>Proceedings of the 6th International Conference on Intelligent Information Hiding and
								Multimedia Signal Processing (IIHMSP 2010)</i>,
							Darmstade, Germany, Oct. 2010, pp. 43-46.</li>
						
						<li><b>Chou, Yung-Chen</b>* and Chang, Hon-Hang, (2010):
							"A High Payload Data Hiding Scheme for Color Image Based on BTC Compression Technique,"
							<i>Proceedings of the Fourth International Conference on Genetic and Evolutionary Computing (ICGEC - 2010)</i>,
							Shenzhen, China, Dec. 2010, pp. 626-629.</li>
							
						<li><b>Chou, Yung-Chen</b>, Huang, Chun-Yi, and Hu, Yu-Chen*, (2012):
							"A Reversible Data Hiding Scheme Using Segmentation Strategy and Histogram Adjustment,"
							<i>Proceedings of the 2010 International Conference on Information Security and Assurance (ISA 2012)</i>, 
							Shanghai, China, Apr. 2012, Vol. 1, pp. 197-199.</li>
							
						<li><b>Chou, Yung-Chen</b>*, Huang, Chun-Yi, and Liao, Hsin-Chi, (2012):
							"A Reversible Data Hiding Scheme Using Cartesian Product for HTML File,"
							<i>Proceedings of the Sixth International Conference on Genetic and Evolutionary Computing (ICGEC - 2012)</i>,
							Kitakyushu, Japan, Aug. 2012, pp. 153-156.</li>

						<li><b>Chou, Yung-Chen</b>, Wang, Chih-Chao, and Shen, Jau-Ji* (2012):
							"A Robust Information Hiding Scheme with Range Coding on Color-Image,"
							<i>Proceedings of the Sixth International Conference on Genetic and Evolutionary Computing (ICGEC - 2012)</i>,
							Kitakyushu, Japan, Aug. 2012, pp. 173-176.</li>
					</ol>
				</div>

				<div id="tabs-4" style="background: #E9E9E9;">
					<span class='articleTitle'>Local Journal Papers</span>
					<ol class='pubList'>
						<li>Lu, Tzu-Chuen, <b>Chou, Yung-Chen</b>*, Lin, W. H., and Yu, Yong-Jin, (2012):
							"A Data Hiding Scheme Using Neighboring Pixels Prediction,"
							<i>Communications of the CCISA -- Special Issue: Techniques and Applications of Image Security</i>,
							Vol. 18, No. 4, Oct. 2012, pp. 56-68.</li>
					</ol>
				</div>
					
				<div id="tabs-5" style="background: #E9E9E9;">
					<span class='articleTitle'>Local Conference Papers</span>
					<ol class='pubList'>
						<li><b>Chou, Yung-Chen</b>*, Li, Pao-Ching, and Li, Yi-Jheng, (2010):
							"A (2, 3) Threshold Secret Sharing Scheme with Reversibility Using Sudoku,"
							<i>Proceedings of 2010 Workshop on Consumer Electronics (WCE 2010)</i>,
							Tainan, Taiwan, Nov. 2010, pp. 626-632.</li>
						<li><b>Chou, Yung-Chen</b>*, Huang, Chun-Yi, and Chang, Hon-Hang, (2011):
							"A Reversible Data Hiding Scheme by Using BTC and Histogram Modification,"
							<i>Proceedings of First National Conference on Web Intelligence and Applications</i>,
							Kaohsiung, Taiwan, Apr. 2011, pp. 6-11.</li>
					</ol>
				</div>
			</div>
		</div>
		<div id="footer">
			You are <? MyCounter();?>'th visitor since May 2010<br/>
			Current time: <span id="clock" style='color: #008000;'><script type ="text/javascript" src="showTime.js"></script></span>
		</div>
	</div>
</body>
</html>
