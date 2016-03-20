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
	$query = mysql_query("SELECT DISTINCT `route_num` FROM `route`");
	echo "<form id='FormAdd_train' name='Add_train' method='post' action='index.php?option=train_detail_station'
	<p>
                                <label for='train_name'>(New) Train Name<br></label>
                                <input id='train_name' name='train_name' />
								
								</p><p>
								
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
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Class 2<input type='radio' name='class_2' value='1'>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Class 3<input type='radio' name='class_3' value='1'>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Class 4<input type='radio' name='class_4' value='1'>
							</p>
						   <button type='submit'>Submit</button>";
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
