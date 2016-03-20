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
	
	if (isset($_POST["route_station0"]) && isset($_POST["route_distance0"]) && isset($_POST["route_number"]))
	{$i=0; 
	$count = 1;
	$route_number = $_POST["route_number"];
	//echo $route_number;
	//$query_1 = mysql_query("SELECT * FROM `route` WHERE `route_num` = '{$route_number}'");
	//if ((mysql_num_rows($query_1) > 0))
	//{ echo "A route with the same name already exists<br> <a href='index.php?option=exist_route'>Edit route: {$_POST['route_number']}</a>. 
	//Or <p><form><input type=\'button\' value=\'Go Back and try again\' onclick=\'history.go(-1)\'></form>";
	//}
	//else
	{
		$x=route_station0;
		$y=route_distance0;
		
		while ($_POST["$x"] && $_POST["$y"])
					{
					$xx = $_POST["$x"];
					$yy = $_POST["$y"];
					
					$query=mysql_query("INSERT INTO `route` (route_num, station, station_number, distance)
					VALUES ('{$route_number}', '{$xx}', '{$count}', '{$yy}')");
					if ($query) $flag=1; else $flag=0;
					
					$i = ($i+1);
					$count++;
					$x=route_station."$i";$y=route_distance."$i";
					}
					if ($flag==1)
					echo "Successfully updated the database with your newly added route";
					else
					echo "Sorry, there was an error in updating the database. Give us some time to fix the problem";
	}
	}
	else if (isset($_POST['route_number']) && isset($_POST['station_count'])) 
	{
	$route_number = $_POST["route_number"];
	//echo $route_number;
	
	$query_1 = mysql_query("SELECT * FROM `route` WHERE `route_num` = '{$route_number}'");
	if ((mysql_num_rows($query_1) > 0))
	{ echo "A route with the same name already exists<br> <a href='index.php?option=exist_route'><strong>Edit route</strong></a>. 
	 <p>";
	}
	else
	
	{
	$i=0;
	echo "<form id='FormAdd_route' name='Add_Route' method='post' action='index.php?option=new_route'";
	echo "<p>Station Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Distance from starting station</p>";
                                while ($i < (($_POST['station_count'])))
								{
								$x=route_station.$i;
								$y=route_distance.$i;
								echo "
								<p><label for='{$x}'> </label>
                                <input id='{$x}' name='{$x}' />
								<label for='{$y}'> </label>
                                <input id='{$y}' name='{$y}' />
                            </p>";
							$i = ($i+1);}
							
							echo "
							<input type ='hidden' name='route_number' value='{$route_number}'>
							<button type='submit'>Submit</button>";
	}}
	else
	{
	echo "<form id='FormAdd_route' name='Add_Route' method='post' action='index.php?option=new_route'
	<p>
                                <label for='route_number'>(New) Route Number<br></label>
                                <input id='route_number' name='route_number' />
                            </p>
							<p>
                                <label for='station_count'>Number of Stations<br></label>
                                <input id='station_count' name='station_count' />
                            </p>
                            <button type='submit'>Submit</button>";
	}
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