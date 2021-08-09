<!DOCTYPE html> 
<?php  include("adm_fun_inc.php");
include("dbConn.inc.php");
session_start();  
if(isset($_SESSION['username'])){
?>
<html>
	<head>
		<meta charest="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Jack's Admin System</title>
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">      
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="SHORTCUT ICON" href="../Images/jack.png">
	</head>
	<body>
    	<div class="container">
			<?php headerBanner(4); ?>
		</div>
		<div class="container">
			<ul class="nav nav-tabs">
				<li class="active"><a href="#all" data-toggle="tab">All</a></li>
				<li><a href="#IJ" data-toggle="tab">Int. Journal</a></li>
				<li><a href="#IC" data-toggle="tab">Int. Conf.</a></li>
				<li><a href="#BC" data-toggle="tab">Book Chapt.</a></li>
				<li><a href="#LJ" data-toggle="tab">Loc. Journal</a></li>
				<li><a href="#LC" data-toggle="tab">Loc. Journal</a></li>
				<li><a href="#Others" data-toggle="tab">Others</a></li>
			</ul>
			<div id="myTabContent" class="tab-content">
				<div class="tab-pane fade active in" id="all">
					<H2>All articals</H2>
					<p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
				</div>
  				<div class="tab-pane fade" id="IJ">
	  				<H2>Internation Journal paper</H2>
					<p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit.</p>
  				</div>
  				<div class="tab-pane fade" id="IC">
  					<H2>Internation Conference paper</H2>
    				<p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork.</p>
  				</div>
  				<div class="tab-pane fade"  id="BC">
  					<H2>Book chapter</H2>
					<p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater.</p>
				</div>
  				<div class="tab-pane fade" id="LJ">
	  				<H2>Local Journal paper</H2>
					<p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit.</p>
  				</div>
  				<div class="tab-pane fade" id="LC">
  					<H2>Local Conference paper</H2>
    				<p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork.</p>
  				</div>
  				<div class="tab-pane fade"  id="Others">
  					<H2>Others</H2>
					<p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater.</p>
				</div>
			</div>
		</div>
        <?php footering();?>
	    <!-- Bootstrap core JavaScript
	    ================================================== -->
	    <!-- Placed at the end of the document so the pages load faster -->
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	    <script src="../bootstrap/js/bootstrap.min.js"></script>
	    <script src="../bootstrap/js/docs.min.js"></script>
	    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	    <script src="../bootstrap/js/ie10-viewport-bug-workaround.js"></script>
	</body>
</html>
<?php
}else{
	echo '<center><font color=red size=+3>You have no permission to read this page!</font></center>';
	echo '<meta http-equiv=REFRESH CONTENT=2;url=login.html>';
}
?>
