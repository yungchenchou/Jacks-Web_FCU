<?php
function footering(){
?>
	<div class='container'>
		<div style="width: 100%; background-color: #004B97; padding: 0.8em; color: white; font-family: '微軟正黑體';">	
			<p style="text-align: center; font-size: 1.4em;">現在時間: 
				<span id="clock"><script type ="text/javascript" src="../showTime.js"></script></span></p>
		</div>
	</div>
<?php 
}

function headerBanner($flag){
	?>
	      <!-- Static navbar -->
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
<!-- 			<a class="navbar-brand" href="#">璞學草堂</a>  -->
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav" style="font-size: 1.3em; font-family: '微軟正黑體'">
              <li <?php if($flag == 1) echo "class=\"active\"";?>><a href="admMain.php">設定</a></li>
              <li <?php if($flag == 2) echo "class=\"active\"";?>><a href="admVita.php">簡歷</a></li>
              <li <?php if($flag == 3) echo "class=\"active\"";?>><a href="admActivites.php">學術活動</a></li>
              <li <?php if($flag == 4) echo "class=\"active\"";?>><a href="admPublist.php">著作</a></li>
              <li <?php if($flag == 5) echo "class=\"active\"";?>><a href="admTeaching.php">教學</a></li>
              <li <?php if($flag == 6) echo "class=\"active\"";?>><a href="admStudent.php">徒弟</a></li>
              <li <?php if($flag == 7) echo "class=\"active\"";?>><a href="admfavLink.php">有用連結</a></li>
             </ul>
			<ul class="nav navbar-nav navbar-right">
				<li><form class="navbar-form navbar-left" role="search">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Search">
					</div>
					<button type="submit" class="btn btn-default">Submit</button>
				</form></li>
            <li class="dropdown">
				<a href="#" class="dropdown-toggle glyphicon glyphicon-edit" data-toggle="dropdown" role="button" aria-expanded="false" style="color: lightgreen; font-size: 1.1em;"> 
				功能 <span class="caret"></span></a>
				<ul class="dropdown-menu" role="menu">
					<li><a href="<?php if($flag == 4) echo "pubInsert.php";?>">Insert</a></li>
					<li><a href="<?php if($flag == 4) echo "pubUpdate.php";?>">Update</a></li>
				</ul>
			</li>
        		<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"> Logout</span></a></li>
      		</ul>
          </div><!--/.nav-collapse -->
         </div><!--/.container-fluid -->
      </nav>
      <div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-right">

				</ul>
			</div><!--/.nav-collapse -->
	<?php 
}