<!DOCTYPE html>
<?php include("fun_inc.php");
include("admin/dbConn.inc.php");
session_start();
$sql = "SELECT * FROM user WHERE userID = 'jackjow'";
$rs = mysqli_query($conn, $sql);
$row = $rs->fetch_row();
?>

<html>

<head>
    <meta charest="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Yung-Chen Chou's Web</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/css/Cerulean/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/fontawesome/css/all.min.css">
    <link rel="SHORTCUT ICON" href="Images/jack.png">
    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <style>
        ol {
            line-height: 1.4em;
            font-size: 1.4em;
            text-align: justify;
            font-family: "Times New Roman";
        }

        ol li {
            margin-top: 0.8em;
        }
    </style>
</head>

<body>
    <div class="container">
        <img src="Images/banner.png" class="img-responsive hidden-xs" width="100%" style="margin-bottom: 1px; margin-top:3px;">
    </div>
    <div class="container">
        <?php headerBanner(4); ?>
    </div>

    <div class="container">
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#home">Int. Journal</a></li>
            <li><a data-toggle="tab" href="#BC">Book Chapters</a></li>
            <li><a data-toggle="tab" href="#IC">Int. Conference</a></li>
            <li><a data-toggle="tab" href="#LJ">Local Journal</a></li>
            <li><a data-toggle="tab" href="#LC">Local Conference</a></li>
            <li><a data-toggle="tab" href="#Others">Others</a></li>
        </ul>
        <div class="tab-content">
            <!-- -------------------- International Journal  ------------------------------------ -->
            <div id="home" class="tab-pane fade in active">
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

                    <li>Chang, Chin-Chen, Kieu, The Duc, and <b>Chou, Yung-Chen</b>, (2009):
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

                    <li>Chang, Chin-Chen and <b>Chou, Yung-Chen</b>, (2009):
                        "A Fragile Digital Image Authentication Scheme Inspired by Wet Paper Codes,"
                        <i>Fundamenta Informaticae</i>,
                        Vol. 90, No. 1-2, Feb. 2009, pp. 17-26.
                        (<font color="blue"><a href="IJ-08_SCI.pdf">SCI</a> / EI,
                            Impact Factor: 0.693, Journal Ranking: 53 / 84</font>)</li>

                    <li>Lin, Chih-Yang*, Chang, Wei-Wen, and <b>Chou, Yung-Chen</b>, (2012):
                        "Bidirectional Background Modeling for Video Surveillance,"
                        <i>Journal of Electronic Science and Technology</i>,
                        Vol. 10, No. 3, Sept. 2012, pp. 232-237.
                        (<font color="blue">EI Inspec</font>)</li>

                    <li><b>Chou, Yung-Chen</b>*, and Li, Huang-Ching, (2013):
                        "High Payload Reversible Data Hiding Scheme Using Difference Segmentation and Histogram Shifting,"
                        <i>Journal of Electronic Science and Technology</i>,
                        Vol. 11, No. 1, Mar. 2013, pp. 9-14.
                        (<font color="blue">EI Inspec</font>)</li>

                    <li><b>Chou, Yung-Chen</b>, Lo, Ya-Hsin, and Shen, Jaui-Ji*, (2013):
                        "A New Quality Improving Scheme for VQ Decompressed Images Based on DWT,"
                        <i>Journal of Electronic Science and Technology</i>,
                        Vol. 11, No. 1, Mar. 2013, pp. 51-57.
                        (<font color="blue">EI Inspec</font>)</li>

                    <li><b>Chou, Yung-Chen*</b>, Lin, Iuon-Chang, and Hsu, Ping-Kun, (2013):
                        "A Watermarking for HTML Files Based on Multi-channel System,"
                        <i>International Journal of Security and Its Applications</i>,
                        Vol. 7, No. 3, May 2013, pp. 163--174.
                        (<font color="blue">EI</font>)</li>

                    <li>Chang, Chin-Chen*, <b>Chou, Yung-Chen</b>, and Lin, Chih-Yang, (2013):
                        "An Indicator Elimination Method for Side-match Vector Quantization,"
                        <i>Journal of Information Hiding and Multimedia Signal Processing</i>,
                        Vol. 4, No. 4, Oct. 2013, pp. 233--249.
                        (<font color="blue">EI Compendex</font>)</li>

                    <li><b>Chou, Yung-Chen</b>*, Hsu, Ping-Kun, and Lin, Iuon-Chang, (2013):
                        "Data Hiding for HTML Files Using Character Coding Table and Index Coding Table,"
                        <i>KSII Transactions on Internet and Information Systems</i>,
                        Vol. 7, No. 11, Nov. 2013, pp. 2913--2927.
                        (<font color="blue">SCI / EI</font>)</li>

                    <li>Chan, Chi-Shiang, <b>Chou, Yung-Chen</b>, Chen, Yi-Hui, and Tsai, Yuan-Yu*, (2014):
                        "Role-Balance Based Multi-Secret Images Sharing using Boolean Operations,"
                        <i>KSII Transactions on Internet and Information Systems</i>,
                        Vol. 8, No. 5, May 2014, pp. 1785--1800.
                        (<font color=blue>SCI / EI</font>)</li>

                    <li>Chang, Hon-Hang, <b>Chou, Yung-Chen*</b>, and Shih, Timothy K., (2014):
                        "Indicator Elimination for Locally Adaptive Scheme Using Data Hiding Technique,"
                        <i>KSII Transactions on Internet and Information Systems</i>,
                        Vol. 8, No. 12, Dec. 2014, pp. 4624--4642.
                        (<font color=blue>SCI / EI</font>)</li>

                    <li>Chang, Hon-Hang, <b>Chou, Yung-Chen</b>*, Tseng, Chiung-Chen, and Shih, Timothy K. (2015):
                        "A High Payload Steganography Scheme for Color Images Based on BTC and Hybrid Strategy,"
                        <i>JOURNAL OF COMPUTERS (Special Issue on Mobile Computing in Digital Forensics, Security and Privacy)</i>,
                        Vol. 26 No. 2, July 2015, pp. 46--55.
                        (<font color=blue>EI</font>)</li>
                    <li>Chuang, Cheng-Hung, Lee, Chao-Ching, Wu, Ye-Chi, Huang, Kuan-Kai, Lo, Ching-Kan, and <b>Yung-Chen Chou*</b>, (2016):
                        "Multi-Target Segmentation in a Multi-Camera Surveillance Environment,"
                        <i>ICIC Express Letters, Part B: Applications (ICIC-ELB)</i>,
                        Vol. 7, No. 6, Jun. 2016, pp. 1359-1364.
                        (<span style="color: blue;">EI</span>)</li>

                    <li>Chuang, Cheng-Hung*, Chen, Jui-Chi, and <b>Chou, Yung-Chen</b>, (2016):
                        "A Simulation of Natural Wolfberry Recognition Based on Color Classification,"
                        <i>ICIC Express Letters (ICIC-EL)</i>,
                        Vol. 10, No. 6, June 2016, pp. 1273-1278.
                        (<span style="color:blue">EI</span>)</li>

                    <li><b>Chou, Yung-Chen</b>, Yeh, Chun-Hsiu*, Shen, Jau-Ji, and Jan, Jinn-Ke, (2018):
                        "A New Blind Image Authentication for Image Tampering Detection and Recovery Based on Block-wise Feature Classification,"
                        <i>Journal of Internet Technology</i>,
                        Vol. 19, No. 6, Nov. 2018, pp. 1907-1917.
                        (<span style="color: blue">SCI/EI</span>)</li>

                    <li>Tsai, Cheng‐Yen Fang, Hsin‐Yuan, Marthandam Asokan Shibu, Lin, Yueh‐Min, Chou, Yung‐Chen, Chen, Yi‐Hui, Day, Cecilia‐Hsuan, Shen, Chia‐Yao, Bo Ban, and Huang, Chih‐Yang*, (2019):
                        "Taiwanin C elicits apoptosis in arecoline and 4‐nitroquinoline‐1‐oxide‐induced oral squamous cell carcinoma cells and hinders proliferation via epidermal growth factor receptor/PI3K suppression,"
                        <i>Environmental Toxicology, </i>
                        Vol. 34, Issue 6, Jun. 2019, pp. 760-767. DOI: 10.1002/tox.22742</li>

                    <li>Chen, Yi-Cheng, Chou, Yueh-Peng, and <b>Chou, Yung-Chen*</b>, (2019):
                        "An Image Authentication Scheme Using Merkle Tree Mechanisms,"
                        <i>Future Internet -- Special Issue: Blockchain Theory and Its Applications, </i>
                        Vol. 11, No. 149, Jul. 1, 2019, pp. 1-18, DOI:10.3390/fi11070149 <span style="color: blue;">(SCOPUS SCI, EI)</span></li>

                    <li><b>Chou, Yung-Chen</b>, Nien, Yu-Wei, Chen, Ying-Chin, Li, Bo, and Lee, Jung-San*, (2020):
                        "Learning Salient Seeds Refer to the Manifold Ranking and Background-Prior Strategy",
                        <i>Multimedia Tools and Applications</i>,
                        Vol. 79, Issue: 9-10, Mar. 2020, pp. 5859-5879. (<span style="color:blue;"> SCOPUS SCI, EI (Compendex)</span>)</li>
                </ol>
            </div>
            <!-- -------------------- Book Chapter  ------------------------------------ -->
            <div id="BC" class="tab-pane fade">
                <ol class='pubList'>
                    <li>Chang, Chin-Chen*, Shen, Jau-Ji and <b>Chou, Yung-Chen</b>, (2005):
                        "FA-Tree--A Dynamic Indexing Structure for Spatial Data,"
                        <i>Soft Computing as Transdisciplinary Science and Technology:
                            4th IEEE International Workshop on Soft Computing as Transdisciplinary Science and
                            Technology (WSTST05)</i>,
                        (Dote, A., Koppen, F. and Ohsawa, O. Eds.), Springer-Verlag GmbH,
                        Muroran, Japan, May 2005, pp. 1071-1080.
                        (<font color="blue">Springer-Verlag, Accepted rate: ?? %</font>)</li>

                    <li>Chang, Chin-Chen*, <b>Chou, Yung-Chen</b> and Shen, Jau-Ji, (2005):
                        "Improving Image Quality for JPEG Compression,"
                        <i>Knowledge-Based Intelligent Information and Engineering Systems:
                            9th International Conference (KES 2005)</i>,
                        (R. Khosla, R.J. Howlett, and L.C. Jain Eds.),
                        Springer-Verlag GmbH, Melbourne, Australia, Part III, Vol. 3683, Sept. 2005, pp. 442-448.
                        (<font color="blue">SCI / EI, Impact Factor: 0.251, Ranking: 70 / 78;
                            Springer-Verlag, Accepted rate: regular 181 / 570 = 31.8 %</font>)</li>

                    <li>Chang, Chin-Chen*, <b>Chou, Yung-Chen</b> and Wu, Wen-Chuan, (2005):
                        "Image Retrieval Using Spatial Color and Edge Detection,"
                        <i>Advances in Mulitmedia Information Processing:
                            6th Pacific Rim Conference on Multimedia (PCM 2005)</i>,
                        (Ho, Y. S. and Kim, H. J. Eds.),
                        Springer-Verlag GmbH, Jeju, Korea, Vol. 2767, Part I, Nov. 2005, pp. 981-992.
                        (<font color="blue">SCI / EI, Impact Factor: 0.513, Ranking: 53 / 70;
                            Springer-Verlag, Accepted rate: ??</font>)</li>

                    <li>Shen, Jau-Ji, Chang, Chin-Chen* and <b>Chou, Yung-Chen</b>, (2006):
                        "Absorber Filter--A New Efficient and Cost Reduced Search Filter,"
                        <i>Advances in Natural Computation and Data Mining--Proceedings of the 3rd International
                            Conference on Fuzzy Systems and Knowledge Discovery (FSKD'06)</i>,
                        (Jiao, L., Shi, G., Gao, X.,Wang, L., Wang, S. and Liu, J. Eds.),
                        Xidan University Press, China, Sept. 2006, pp. 346-357.</li>

                    <li>Chang, Chin-Chen*, Chen, Yi-Hui and <b>Chou, Yung-Chen</b>, (2007):
                        "Reversible Data Embedding Technique for Palette Images Using De-clustering,"
                        <i>Multimedia Content Analysis and Mining (MCAM'07)</i>,
                        (Sebe, N., Liu, Y., Zhuang, Y., and Huang, T. S. Eds.),
                        Springer Verlag, Germany, Jun. 2007, pp. 130-139.</li>

                    <li>Chang, Chin-Chen*, Tsou, Chih-Chiang and <b>Chou, Yung-Chen</b>, (2007):
                        "A Remediable Image Authentication Scheme Based on Feature Extraction and Clustered VQ,"
                        <i>Advances in Multimedia Information Processing-PMC2007--Proceedings of 8th Pacific-Rim
                            Conference on Multimedia</i>,
                        (Ip, H. S., Au, O. C., Leung, H., Sun, M. T., Ma, W. Y. and Hu, M. Eds.),
                        Springer Verlag, Germany, Dec. 2007, pp. 446-449.</li>

                    <li>Chang, Chin-Chen*, <b>Chou, Yung-Chen</b> and Lu, Tzu-Chuen, (2007):
                        "A Semi-blind Watermarking Based on Discrete Wavelet Transform,"
                        <i>Information and Communications Security--Proceedings of the 9th International
                            Conference on Information and Communications Security (ICICS 2007)</i>,
                        (Qing S. Imai, H., and Wang, G. Eds.),
                        Springer Verlag, Zhengzhou, China, Dec. 2007, pp. 164-176.</li>

                    <li><b>Chou, Yung-Chen</b> and Chang, Chin-Chen*, (2008):
                        "Restoring Objects for Digital Inpainting,"
                        <i>Information Hiding and Applications</i>,
                        (Pan, J. S., Huang, H. C., and Jain, L. C. Eds.),
                        Springer Verlag, Germany, Jul. 2009, Chapter 3, pp. 47-61.</li>

                    <li><b>Chou, Yung-Chen</b>*, Chen, Shu-Huan, and Hou, Min-Rui, (2014)
                        "A Quality Improving Scheme for VQ Decompressed Image Based on DCT,"
                        <i>Genetic and Evolutionary Computing
                            (Proceeding of the Eighth International Conference on Genetic and Evolutionary Computing, October 18-20, 2014, Nanchang, China)</i>,
                        (Sun, H., Yang, C.-Y., Lin, C.-W., Pan, J.-S., Snasel, V., Abraham, A. (Eds.)),
                        Springer Verlag, Germany, Oct. 2014, Chapter 20, pp. 197--206.</li>
                    (DOI: https://doi.org/10.1007/978-3-319-12286-1_20, copyright: Springer International Publishing Switzerland 2015)
                </ol>
            </div>
            <!-- -------------------- International Conference  ------------------------------------ -->
            <div id="IC" class="tab-pane fade">
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

                    <li>Chang, Chin-Chen* and <b>Chou, Yung-Chen</b>, (2007):
                        "High Payload Data Embedding with Hybrid Strategy,"
                        <i>Proceedings of Third International Conference on Intelligent Information Hiding and
                            Multimedia Signal Processing (IIHMSP07)</i>,
                        Kaohsiung, Taiwan, Nov. 2007, Vol. 1, pp. 505-508.</li>

                    <li>Chang, Chin-Chen*, <b>Chou, Yung-Chen</b>, and Lin, Chia-Chen(2007):
                        "A New Image Compression Scheme Based on Locally Adaptive Coding,"
                        <i>Proceedings of Ninth IEEE International Symposium on Multimedia (ISM 2007)</i>,
                        Taichung, Taiwan, Dec. 2007, pp. 14-21.</li>

                    <li>Chang, Chin-Chen*, Kieu, The Duc and <b>Chou, Yung-Chen</b>, (2007):
                        "Reversible Data Hiding Scheme Using Two Steganographic Images,"
                        <i>Proceedings of IEEE TENCON 2007</i>,
                        Taipei, Taiwan, Oct. 2007, pp. 1-4.</li>

                    <li>Chang, Chin-Chen*, Kieu, The Duc, and <b>Chou, Yung-Chen</b>, (2007):
                        "Using Nearest Covering Codes to Embed Secret Information in Grayscale Images,"
                        <i>Proceedings of Second International Conference on Ubiquitous Information
                            Management and Communication (ICUIMC 2008)</i>,
                        Suwon, Korea, Jan. 2008, pp. 315-320.</li>

                    <li>Chang, Chin-Chen*, <b>Chou, Yung-Chen</b>, and Kieu, The Duc, (2008):
                        "An Information Hiding Scheme Using Sudoku,"
                        <i>Proceedings of Third International Conference on Innovative Computing, Information
                            and Control (ICICIC2008)</i>,
                        Dalian, China, Jun. 2008, pp. 17-1--17-5.</li>

                    <li>Chang, Chin-Chen*, Kieu, The Duc, and <b>Chou, Yung-Chen</b>, (2008):
                        "A High Payload Steganographic Scheme Based on (7, 4) Hamming Code for Digital Images,"
                        <i>Proceedings of International Symposium on Electronic Commerce and Security (ISECS 2008)</i>,
                        Guangzhou, China, Aug. 2008, pp. 16-21.</li>

                    <li>Chang, Chin-Chen*, <b>Chou, Yung-Chen</b>, and Lin, Chia-Chen, (2009):
                        "A Steganographic Scheme Based on Wet Paper Codes Suitable for Uniformly Distributed Wet Pixels,"
                        <i>Proceedings of the IEEE International Symposium on Circuits and Systems (ISCAS 2009)</i>,
                        Taipei, Taiwan, May 2009, pp. 501-504.</li>

                    <li>Chang, Chin-Chen*, <b>Chou, Yung-Chen</b>, and Kieu, The Duc, (2009):
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

                    <li><b>Chou, Yung-Chen</b>*, Lee, Huang-Ching, and Yu, Yong-Jin (2014):
                        "A Novel Reversible Data Hiding Scheme Using Ripple Strategy and Histogram Shifting,"
                        <i>Proceedings of the Tenth International Conference on Intelligent Information Hiding and Multimedia Signal Processing (IIHMSP 2014)</i>,
                        Kitakyushu, Japan, Aug. 27-29, 2014, pp. 138-141.</li>

                    <li><b>Chou, Yung-Chen</b>*, Huang, Guo-Hao, Lee, Huang-Ching, and Lin, Ke-Jhen (2014):
                        "A Reversible Data Hiding Method Using Inverse S-scan Order and Histogram Shifting,"
                        <i>Proceedings of the Tenth International Conference on Intelligent Information Hiding and Multimedia Signal Processing (IIHMSP 2014)</i>,
                        Kitakyushu, Japan, Aug. 27-29, 2014, pp. 69-72</li>

                    <li><b>Chou, Yung-Chen</b>* and Liao, Hsin-Chi (2014):
                        "A Webpage Data Hiding Method by Using Tag and CSS Attribute Setting,"
                        <i>Proceedings of the Tenth International Conference on Intelligent Information Hiding and Multimedia Signal Processing (IIHMSP 2014)</i>,
                        Kitakyushu, Japan, Aug. 27-29, 2014, pp. 122-125</li>

                    <li>Tseng, Chiung-Chen, Chiu, Yu-Hsuan, and <b>Chou, Yung-Chen</b>* (2015):
                        "A Histogram Shifting-based Reversible Data Hiding Scheme Using Multi-pattern Strategy,"
                        <i>The Eleventh International Conference on Intelligent Information Hiding and Multimedia Signal Processing (IIHMSP 2015)</i>,
                        Adelaide, Australia, Sept. 23-25, 2015, pp. 125-128 </li>

                    <li><b>Chou, Yung-Chen</b>, Lu, Tzu-Chuen*, and Wu, Jhih-Huei, (2016):
                        "A Data Hiding Method based on Multi-predictor and Pixel Value Ordering,"
                        <i>The Twelfth International Conference on Intelligent Information Hiding and Multimedia Signal Processing (IIHMSP 2016)</i>,
                        Kaohsiung, Taiwan, Nov. 21-23, 2016, pp. 75-82.</li>

                    <li>Lai, Jing-Xun, <b>Chou, Yung-Chen*</b>, Tseng, Chiung-Chen, and Liao, Hsin-Chi, (2016):
                        "A Large Payload Webpage Data Embedding Method Using CSS Attributes Modification,"
                        <i>Advances in Intelligent Information Hiding and Multimedia Signal Processing,
                            (The Twelfth International Conference on Intelligent Information Hiding and Multimedia Signal Processing (IIHMSP 2016)</i>,
                        Kaohsiung, Taiwan, Nov. 21-23, 2016, pp. 91--98 </li>

                    <li>Chiu, Yu-Hsaun, Hou, Min-Rui, and <b>Chou, Yung-Chen</b>⋆, (2016):
                        "A High Performance Compression Method Using SOC and LAS,"
                        <i>The Twelfth International Conference on Intelligent Information Hiding and Multimedia Signal Processing (IIHMSP 2016)</i>,
                        Kaohsiung, Taiwan, Nov. 21-23, 2016, pp. 195--202 </li>

                    <li>Yeh, Chun-Hsiu, Lai, Jing-Xun, and <b>Chou, Yung-Chen</b>⋆, (2017):
                        "A Web Page Watermarking Method using Hybrid Watermark Hiding Strategy,"
                        <i>Advances in Intelligent Information Hiding and Multimedia Signal Processing,
                            (Proceedings of The Thirteenth International Conference on Intelligent Information
                            Hiding and Multimedia Signal Processing (IIHMSP2017)</i>
                        Matsue, Shimane, Japan, Aug. 13-15, 2017, pp. 36--43</li>

                    <li>Hwang, Min-Shiang*, <b>Chou, Yung-Chen</b>, Wu, Chia-Chun, and Yang, Cheng-Ying, (2017):
                        "An Improvement of Tseng-Wu Group Key Exchange Protocol,"
                        <i>Recent Developments in Intelligent Computing, Communication and Devices,
                            (Publications: ICCD-2017 will be published in Advances in Intelligent Systems and Computing by Springer-Verlag. ISSN: 2194-5357.) (EI/Scopus)</i>
                        Shenzhen, China, Dec. 9-10, 2017, pp.693-698</li>

                    <li>Hwang, Min-Shiang, Cahyadi, Eko Fajar, <b>Chou, Yung-Chen</b>, and Yang, Cheng-Ying, (2018):
                        "Cryptanalysis of Kumar's Remote User Authentication Scheme with Smart Cards,"
                        <i>2018 14th International Conference on Computational Intelligence and Security (CIS2018)</i>,
                        Hangzhou, China, Nov. 16-19, 2018, pp. 416-420.
                        <a href="http://conferences.computer.org/cis/2018">IEEExPlore</a> (EI/Scopus)
                    </li>
                </ol>
            </div>
            <!-- -------------------- Local Journal  ------------------------------------ -->
            <div id="LJ" class="tab-pane fade">
                <ol class='pubList'>
                    <li>Lu, Tzu-Chuen, <b>Chou, Yung-Chen</b>*, Lin, W. H., and Yu, Yong-Jin, (2012):
                        "A Data Hiding Scheme Using Neighboring Pixels Prediction,"
                        <i>Communications of the CCISA -- Special Issue: Techniques and Applications of Image Security</i>,
                        Vol. 18, No. 4, Oct. 2012, pp. 56-68.</li>
                </ol>
            </div>
            <!-- -------------------- Local Conference  ------------------------------------ -->
            <div id="LC" class="tab-pane fade">
                <ol class='pubList'>
                    <li><b>Chou, Yung-Chen</b>*, Li, Pao-Ching, and Li, Yi-Jheng, (2010):
                        "A (2, 3) Threshold Secret Sharing Scheme with Reversibility Using Sudoku,"
                        <i>Proceedings of 2010 Workshop on Consumer Electronics (WCE 2010)</i>,
                        Tainan, Taiwan, Nov. 2010, pp. 626-632.</li>
                    <li><b>Chou, Yung-Chen</b>*, Huang, Chun-Yi, and Chang, Hon-Hang, (2011):
                        "A Reversible Data Hiding Scheme by Using BTC and Histogram Modification,"
                        <i>Proceedings of First National Conference on Web Intelligence and Applications</i>,
                        Kaohsiung, Taiwan, Apr. 2011, pp. 6-11.</li>
                    <li><b>Chou, Yung-Chen</b>*, Yu, Yong-Jin, and Lee, Huang-Ching, (2013):
                        "A Wave Based Data Hiding Scheme with Reversibility,"
                        <i>Proceedings of the 26th IPPR Conference on Computer Vision, Graphics, and Image Processing</i>,
                        Ilan, Taiwan, Aug. 2013, pp. C3-2-1--C3-2-7.</li>
                    <li>許妙芬、李皇慶、<b>周永振</b>* (2015):
                        "使用反S掃描順序與滑動視窗之可逆式資訊隱藏方法,"
                        <i>第二十五屆全國資訊安全會議</i>, 高雄, 台灣, 2015/5/28~29, pp. </li>
                    <li><b>Chou, Yung-Chen</b> and Min-Rui Hou* (2016):
                        "A Reversible Data Hiding Method by Combining SOC and LAS,"
                        <i>Proceedings of the 2016 Cryptology and Information Security Conference (CISC 2016)</i>, Taichung Taiwan, 2016/5/26~27, pp.435—443 </li>
                    <li>王建傑、<b>周永振</b>, ``基於 SOC 與 LAS 之高壓縮率可還原資訊隱藏方法 (A Reversible Data Hiding Method Based on SOC and LAS with High Compression Rate)",
                        <i>第二十七屆全國資訊安全會議(CISC 2017) Cryptology and Information Security Conference 2017</i>,
                        義守大學, 高雄, 台灣, 2017/5/27~28, pp. 105--115</li>
                    <li>王竣平、<b>周永振</b>, ``具資訊保密機制之計程車呼叫平台實作 (Implementation of Taxi Platform with Information Confidentiality Mechanism)",
                        <i>第二十七屆全國資訊安全會議(CISC 2017) Cryptology and Information Security Conference 2017</i>,
                        義守大學, 高雄, 台灣, 2017/5/27~28, pp. 277--286</li>
                </ol>
            </div>
            <!-- -------------------- Others  ------------------------------------ -->
            <div id="Others" class="tab-pane fade">
                <ol class='pubList'>
                    <li class="pubStyle1"><b>周永振</b>* (2011):
                        "誰是履歷堆裡的寶貝?"
                        <i>道德月刊</i>, Jul. 2011, pp. 7-8.</li>
                </ol>
            </div>
        </div>
    </div>

    <?php footering(0); ?>
    <!-- Bootstrap core JavaScript
	    ================================================== -->
    <script src="showTime.js"></script>
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="bootstrap/js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="bootstrap/js/ie10-viewport-bug-workaround.js"></script>
</body>

</html>