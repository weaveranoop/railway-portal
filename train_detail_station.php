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
if ($train_name == NULL && $train_number == NULL && $total_stops == NULL && $train_route == NULL && ($mon == NULL || $tues == NULL || $wed == NULL || $thurs == NULL || $fri == NULL || $sat == NULL ) && ( $class_1 == NULL || $class_2 == NULL || $class_3 == NULL || $class_4 == NULL ))
	{
	echo "
<strong>Invalid</strong> or <strong>Incomplete</strong> entry in fields";
echo "<p><form><input type=\"button\" value=\"Go Back and try again\" onclick=\"history.go(-1)\"></form>";
    }
else
{

$query_check1 = mysql_query("select * from `train_detail` WHERE `train_name` = '{$train_name}'");
$query_check2 = mysql_query("select * from `train_detail` WHERE `train_num` = '{$train_number}'");
if ( (mysql_num_rows($query_check1) >0 ) || (mysql_num_rows($query_check2) >0 ) )
echo "<strong>A train with the same name/number already exists.</strong>";

else
{
	echo "<form id='FormAdd_train_input' name='Add_train_input' method='post' action='index.php?option=train_detail_done'>";
     $i=0;
	$z=station_add0;
	$arr=arr0;
	$dep=dep0;
	$day=day0;
	while ($i < ($total_stops))
					{
			echo"<p>";
			$query = mysql_query("SELECT `station` FROM `route` WHERE `route_num` = '{$train_route}'");
							echo "<label for='station_add'>"; 
							if ($i=='0') echo "<strong>Starting station</strong>"; 
								else echo " <strong>Station $i</strong>";
								
								echo "<br></label><select name='{$z}'>";
								while($row=mysql_fetch_array($query))
									{
										echo "
										<option value='{$row['station']}'>{$row['station']} </option>";
										}	
									echo "<br> </select>";
								
											
										{
												echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
												<label for='{$arr}'>Arrival <i>(hr : min | 24 hours schedule)</i></label>
												<input id='{$arr}' name='{$arr}' />
                                
												&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
												<label for='{$dep}'>Departure <i>(hr : min | 24 hours schedule)</i></label>
												<input id='{$dep}' name='{$dep}' />
												
												&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
												<label for='{$day}'>Day </label>
												<input id='{$day}' name='{$day}' />";
												}

									$i = ($i+1);
									$z=station_add."$i";
									$arr=arr."$i";
									$dep=dep."$i";
									$day=day."$i";
							echo "</p>";
					}
	 echo "
	 <input type ='hidden' name='train_name' value='$train_name'>
	 <input type ='hidden' name='train_number' value='$train_number'>
	<input type ='hidden' name='total_stops' value='$total_stops'>
	<input type ='hidden' name='train_route' value='$train_route'>
	<input type ='hidden' name='train_type' value='$train_type'>
	<input type ='hidden' name='sun' value='$sun'>
	<input type ='hidden' name='mon' value='$mon'>
	<input type ='hidden' name='tues' value='$tues'>
	<input type ='hidden' name='wed' value='$wed'>
	<input type ='hidden' name='thurs' value='$thurs'>
	<input type ='hidden' name='fri' value='$fri'>
	<input type ='hidden' name='sat' value='$sat'>
	<input type ='hidden' name='class_1' value='$class_1'>
	<input type ='hidden' name='class_2' value='$class_2'>
	<input type ='hidden' name='class_3' value='$class_3'>
	<input type ='hidden' name='class_4' value='$class_4'>
	 <input type ='hidden' name='route_number' value='{$_POST['route_number']}'>";
		echo "</p>	   <button type='submit'>Submit</button>";
	}
	}/*<p>echo "<form id='FormAdd_train' name='Add_train' method='post' action='index.php?option=train_detail_station'
	<p>
                                <label for='train_number'>(New) Train Number<br></label>
                                <input id='train_number' name='train_number' />
                            </p>
							<p>
                                <label for='total_stops'>Number of Stations<br></label>
                                <input id='total_stops' name='total_stops' />
                            </p>
							<p>
                                <label for='train_route'>Route number<br></label>
                           		<select name='train_route'>";
								while($row=mysql_fetch_array($query))
									{
										echo "<option value='{$row['route_num']}'>Route {$row['route_num']} </option>";
									}
									echo "</p><br> </select>
							<p>
                                <label for='train_type'>Type of train<br></label>
                           		<select name='train_type'>
								<option value='1'> Type 1 </option><option value='2'> Type 2 </option><option value='3'> Type 3 </option><option value='4'> Type 4 </option>
								</select></p><br>
							<p>
							Day of run(from the starting station)<br></label>
							Sunday<input type='radio' name='sun' value='1'>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Monday<input type='radio' name='mon' value='1'>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tuesday<input type='radio' name='tues' value='1'>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Wednesday<input type='radio' name='wed' value='1'>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thursday<input type='radio' name='thurs' value='1'>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Friday<input type='radio' name='fri' value='1'>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Saturday<input type='radio' name='sat' value='1'>
							
							</p>
							<br>
							<p>
							Classes present on train<br>
							Class 1<input type='radio' name='class_1' value='1'>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Class 2<input type='radio' name='class_2' value='2'>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Class 3<input type='radio' name='class_3' value='3'>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Class 4<input type='radio' name='class_4' value='4'>
							</p>
						   <button type='submit'>Submit</button>";*/
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
