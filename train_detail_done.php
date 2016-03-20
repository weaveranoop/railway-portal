<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr" xml:lang="en-gb" xmlns="http://www.w3.org/1999/xhtml" lang="en-gb"><head>


  <title>Railway Portal</title>
  <script type="text/javascript" src="js/core.js"></script>
  <script type="text/javascript" src="js/mootools-core.js"></script>
  <script type="text/javascript" src="js/mootools-more.js"></script>
  <script type="text/javascript">
	window.addEvent('domready', function(){ new Accordion($$('div#panel-sliders.pane-sliders .panel h3.jpane-toggler'), $$('div#panel-sliders.pane-sliders .panel div.jpane-slider'), {onActive: function(toggler, i) {toggler.addClass('jpane-toggler-down');toggler.removeClass('jpane-toggler');Cookie.write('jpanesliders_panel-sliders',$$('div#panel-sliders.pane-sliders .panel h3').indexOf(toggler));},onBackground: function(toggler, i) {toggler.addClass('jpane-toggler');toggler.removeClass('jpane-toggler-down');if($$('div#panel-sliders.pane-sliders .panel h3').length==$$('div#panel-sliders.pane-sliders .panel h3.jpane-toggler').length) Cookie.write('jpanesliders_panel-sliders',-1);},duration: 300,opacity: false,alwaysHide: true}); });
  </script>


<link rel="stylesheet" href="css/system.css" type="text/css">
<link href="css/template.css" rel="stylesheet" type="text/css">


	<link rel="stylesheet" type="text/css" href="css/rounded.css">




</head><body id="minwidth-body">
	<div id="border-top" class="h_blue">
		<div>
			<div>
				<span class="logo"><a href="#">&nbsp;</a></span>
				<span class="title"><a href="http://localhost/dp/index.php">Railway Portal</a></span>
			</div>
		</div>
	</div>
	<div id="header-box">
		<div id="module-status">
			<span class="loggedin-users">&nbsp;</span><span class="backloggedin-users">&nbsp;</span><span class="no-unread-messages"><a href="#">&nbsp;</a></span><span class="viewsite"><a href="#" target="_blank">&nbsp;</a></span>
			<span class="logout"><a href="index.php?option=logout">Log out</a></span>		</div>
<?php
include("menu.php");
include("db.php");
			$username = $_SESSION['username'];
			$name = mysql_query("SELECT `name` FROM `profile` WHERE username='{$username}'");
			?>
		<div class="clr"></div>
	</div>
	<div id="content-box">
		<div class="border">
			<div class="padding">
				<div id="element-box">
					
					<div class="t">
						<div class="t">
							<div class="t"></div>
						</div>
					</div>
					<div class="m">
					<div class="adminform">
						<div class="cpanel-right" style = "width:100%">
							
<div id="panel-sliders" class="pane-sliders">
<div class="panel"><h3 class="jpane-toggler title" id="cpanel-panel-popular">Welcome <?php echo $name; ?>
</h3>
<div style="padding-top: 0px; border-top: medium none; padding-bottom: 0px; border-bottom: medium none; overflow: hidden; height: 0px;" class="jpane-slider content">
<table class="adminlist">
	<thead>
		
	</thead>
	<tbody>
	
	<tr>



	<tr>
	<td class='center'>
	<br><br><br>
	<?php
	include("db.php");
	$train_name = $_POST['train_name'];
	$train_number = $_POST['train_number'];
	$total_stops = $_POST['total_stops'];
	$train_route = $_POST['train_route'];
	$train_type = $_POST['train_type'];
	$sun = $_POST['sun'];
	$mon = $_POST['mon'];
	$tues = $_POST['tues'];
	$wed = $_POST['wed'];
	$thurs = $_POST['thurs'];
	$fri = $_POST['fri'];
	$sat = $_POST['sat'];
	$class_1 = $_POST['class_1'];
	$class_2 = $_POST['class_2'];
	$class_3 = $_POST['class_3'];
	$class_4 = $_POST['class_4'];
	$t = 0;
	$z = station_add0;
	$arr = arr0;
	$dep = dep0;
	$day = day0;
	$start_station = $_POST["$z"];
	$flag = TRUE;
	
	
	$query = mysql_query("INSERT INTO train_detail (train_num, start, train_name, class1, class2, class3, class4, route_num, type)
	VALUES ('$train_number', '$start_station', '$train_name', '$class_1', '$class_2', '$class_3', '$class_4', '$train_route', '$train_type')"); 
	if (!$query) $flag = FALSE;
		
	$query1 = mysql_query("INSERT INTO days_run (train_num, sun, mon, tues, wed, thurs, fri, sat)
	VALUES ('$train_number', '$sun', '$mon', '$tues', '$wed', '$thurs', '$fri', '$sat')"); 
	if (!$query1) $flag = FALSE;
	
	while ($_POST["$z"])
	{
	$show = $_POST["$z"];
	$arr1 = $_POST["$arr"];
	$dep1 = $_POST["$dep"];
	$day1 = $_POST["$day"];
	$stop_number = ($t+1);
	$query4=mysql_query("INSERT INTO train_station (train_num, train_name, station, stop_number, time_arr, time_dep, day)
	VALUES ('$train_number','$train_name', '$show', '$stop_number', '$arr1', '$dep1', '$day1')");
	

	
	//echo $show; echo "<br>";
	$t++;
	$z = station_add."$t";
	$arr = arr."$t";
	$dep = dep."$t";
	$day = day."$t";
	}
	
	if ($flag == TRUE)
	echo "Successufully updated the database with your newly added train";
	else echo "There was some error updating the database. Please try again later";
	?>						
	<br><br><br>
	</td>
	
			</tbody>
</table>
</div></div>


						</div>
					</div>
						<div class="clr"></div>
					</div>
					<div class="b">
						<div class="b">
							<div class="b"></div>
						</div>
					</div>
				</div>
				<div class="clr"></div>
			</div>
		</div>
	</div>
	<div id="border-bottom"><div><div></div></div></div>
		
	<div id="footer">
		<p class="copyright">
			<b>Railway Portal</b>   Data Processing </a>.			<span class="version"><i>V (beta0.0.1)</i></span>
		</p>
	</div>
</body></html>