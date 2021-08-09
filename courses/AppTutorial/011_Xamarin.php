<!DOCTYPE html> 
<?php  include("../../fun_inc.php"); 	session_start();  ?>
<html>
    <head>
        <meta charest="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Yung-Chen Chou's Web</title>
        <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">      
        <link rel="stylesheet" href="../../bootstrap/css/Cerulean/bootstrap.min.css">
		<link rel="SHORTCUT ICON" href="../../Images/jack.png">
    </head>
    <body>
		<div class="container">
			<img src="../../Images/banner.png" class="img-responsive hidden-xs" width="100%" style="margin-bottom: 1px; margin-top:3px;">
		</div>
    	<div class="container">
			<?php headerBanner(5); ?>
		</div>
		<div class="container">
  			<h2>課程</h2>
			<ul class="nav nav-tabs">
				<li class="active"><a data-toggle="tab" href="#AppTutorial">App Tutorial</a></li>
				<li><a data-toggle="tab" href="#home">學與思</a></li>
			</ul>
			<div class="tab-content">
				<div id="home" class="tab-pane fade">
					<p style='font-size: 1.3em; line-height: 1.8em;'>「師者，所以傳道授業解惑也。」--《師說》韓愈</p>
					<p style='font-size: 1.5em; line-height: 1.8em; font-family: "Times New Roman";'>
							唸了二十幾年的書，從課堂學到的知識的確很多，但是從來沒有一位老師是教我如何 "讀書"。
							"讀書" 這件事真的要有 "天份" 才行嗎？或許十個人裡有八、九個是認同的。
							其實學習是有技巧有方法的，介紹幾本書給各位，並不是讓各位從此在考場所向無敵，而是希望能樂於閱讀進而享受閱讀!!</p>
					<ol style='list-style-type: square; padding-left: 2.5em; padding-bottom: 1em; font-size: 1.3em; line-height: 1.8em;'>
						<li><a href='http://www.books.com.tw/products/0010444985'>讀書別靠意志力──風靡德國的邏輯K書法</a>, 克里斯迪安．格綠寧, 究竟出版社</li>
						<li><a href='http://www.books.com.tw/products/0010475578'>大量閱讀的重要性</a>, 李家同, 博雅書屋</li>
						<li><a href='http://www.books.com.tw/products/0010126310'>講理</a>，王鼎鈞, 大地出版</li>
						<li><a href='http://www.kingstone.com.tw/book/book_Page.asp?kmcode=2018051082799'>
							英文魔法書之文法俱樂部</a>，施元佑, 經典傳訊出版</li>
					</ol>
					<center><img src="../../Images/C1GAOFJG6N.png" style="margin-top:10px;"/><br />
					傑克木豆 (moodle)</center>
    			</div>
    			
				<!-- *********************  App Tutorial **************************************-->
				<div id="AppTutorial" class="tab-pane fade  in active">
					<h3>APP Tutorial</h3>
					<div class="clt">
						<ul>
							<li>簡介 (0)
								<ul>
									<li style="color: #0000ff;">Native (原生型) (00)
										<ul>
											<li>Cherry</li>
											<li>Strawberry</li>
										</ul>
									</li>
									<li style="color: #0000ff;">Cross Platform (跨平台) (01) 
										<ul>
											<li style="color: #004d00;">HTML5 + CSS 3 + Bootstrap + Javascript + jQuery Mobile + Phone Gap (010)
												<ul>
													<li>HTML5</li>
													<li>CSS 3</li>
													<li>Bootstrapt</li>
													<li>JS node</li>
													<li>Javascript</li>
													<li>jQuery Mobile</li>
													<li>Phone Gap</li>
												</ul>
											</li>
											<li style="color: #004d00;"><a href="AppTutorial/011_Xamarin.php">Xamarin (MS Visual Studio)(011)</a></li>
												<ul>
													<li>參考來源:</li>
														<ul>
															<li><a href=""></a></li>
														</ul>
												</ul>
										</ul>
									</li>
								</ul>
							</li>
							<li>Android APP
								<ul>
									<li>Development Environment (開發環境)</li>
									<li>Self study material (Video)</li>
									<li>Self study exercises (練習題)</li>
								</ul>
							</li>
							<li>iOS APP
								<ul>
									<li>Development Environment (開發環境)</li>
									<li>Self study material (Video)</li>
									<li>Self study exercises (練習題)</li>
								</ul>
							</li>
						</ul>
					 </div>
				</div>
			</div>
		</div>
	    <?php footering(2);?>
	</body>
</html>
