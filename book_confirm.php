<?php

?>

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

	
	<tbody>
	
	<tr>
    </tr>
	<class='center'>
	<tr> </tr>
	
<table class="adminlist">	
	<thead>
	<br>
	<font color = "red"><center><strong><u>Railway Ticket booking Form</u> </strong></center></font>
	<br>
	</thead>
	
	<?php
	$z=0;
	$query_a = mysql_query("SELECT `sl` FROM `book_detail` WHERE ((`train_num` = '{$_POST['train_num']}') AND (`doj` = '{$_POST['doj']}') AND (`class` = '{$_POST['c1']}'))");
	while($row_a = mysql_fetch_array($query_a))
	{
	$z++;
	}
	$avail = ( 72 - ( $z ));
	
		$query_type = mysql_query("SELECT `type` FROM `train_detail` WHERE (`train_num` = '{$_POST['train_num']}')");
		$row_type=mysql_fetch_array($query_type);
	
		$query_route = mysql_query("SELECT `route_num` FROM `train_detail` WHERE (`train_num` = '{$_POST['train_num']}')");
		$row_route=mysql_fetch_array($query_route);
		//$row_route['route_num']
		
		$query_dist1 = mysql_query("SELECT `distance` FROM `route` WHERE ((`station` = '{$_POST['to']}') AND (`route_num` = '{$row_route['route_num']}'))");
		$row_dist1=mysql_fetch_array($query_dist1);
		$dist1 = $row_dist1['distance'];
		
		$query_dist2 = mysql_query("SELECT `distance` FROM `route` WHERE ((`station` = '{$_POST['from']}') AND (`route_num` = '{$row_route['route_num']}'))");
		$row_dist2=mysql_fetch_array($query_dist2);
		$dist2 = $row_dist2['distance'];
		
		if ( $dist1 > $dist2)
		{
		$dist = (($dist1)-($dist2));
		}
		else
		$dist = (($dist2)-($dist1));
		$class = $_POST['c1'];
		$type = $row_type['type'];
		//echo $class;
		
		$query_factor = mysql_query("SELECT `multiply_factor` FROM `price_factor` WHERE ((`class` = '$class') AND (`type` = '$type'))");
		$row_factor=mysql_fetch_array($query_factor);
		$factor = $row_factor['multiply_factor'];
		//echo "{$class}<br>{$factor}<br>{$type}";
		
		$distf = (( $dist )+( 25 - ( $dist ) % 25 ));
		$query_price = mysql_query("SELECT `base_fare` FROM `price` WHERE (`distance` = '$distf')");
		$row_price=mysql_fetch_array($query_price);
		$base = $row_price['base_fare'];
		
		
		$pricef = (($base)*($factor));
		//echo $pricef;echo "<br>";
		$price = (1.124 * ($pricef));
		//echo $price;
	?>
	
	<tr>
	<td class='center'>
		<?php
			echo "<center><strong> Availability : $avail </strong>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<strong>
			Price per passenger : <font color = 'red'>$price INR </font>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<strong>
			Train Number : <font color = 'red'>{$_POST['train_num']}</font>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			Train Name : 
			<br><br>
			From :  <font color = 'red'>{$_POST['from']}</font>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			To :  <font color = 'red'>{$_POST['to']}</font>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			Date Of Book : <font color = 'red'>";echo  date('Y \- m \- d'); echo "</font>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			Date of Journey : <font color = 'red'>{$_POST['doj']}</font>
			</strong></center><br><br><br>";

			?>
	<center>
							<p>
							Class : <?php echo "{$_POST['c1']}"; ?>
							</p>
							<br>
							<p>
							Passenger1 : <?php echo "{$_POST['p1']}"; ?>
                			Age : <?php echo "{$_POST['a1']}"; ?>
							Gender : <?php echo "{$_POST['g1']}"; ?>
							</p>
							
							<p>
							Passenger2 : <?php echo "{$_POST['p2']}"; ?>
                			Age : <?php echo "{$_POST['a2']}"; ?>
							Gender : <?php echo "{$_POST['g2']}"; ?>
                            </p>
							
							<p>
							Passenger3 : <?php echo "{$_POST['p3']}"; ?>
                			Age : <?php echo "{$_POST['a3']}"; ?>
							Gender : <?php echo "{$_POST['g3']}"; ?>
							</p>
							
							<p>
							Passenger4 : <?php echo "{$_POST['p4']}"; ?>
                			Age : <?php echo "{$_POST['a4']}"; ?>
							Gender : <?php echo "{$_POST['g4']}"; ?>
							</p>
							
							<p>
							Passenger5 : <?php echo "{$_POST['p5']}"; ?>
                			Age : <?php echo "{$_POST['a5']}"; ?>
							Gender : <?php echo "{$_POST['g5']}"; ?>
							</p>
							
							<p>
							Passenger6 : <?php echo "{$_POST['p6']}"; ?>
                			Age : <?php echo "{$_POST['a6']}"; ?>
							Gender : <?php echo "{$_POST['g6']}"; ?>
							</p>
							<?php echo "<form id='FormTicketconfirm' name='formElem' method='post' action='book_update.php'>
							
							<input type ='hidden' name='c1' value='{$_POST['c1']}'>
							<input type ='hidden' name='price' value='$price'>
							
							<input type ='hidden' name='p1' value='{$_POST['p1']}'>
							<input type ='hidden' name='a1' value='{$_POST['a1']}'>
							<input type ='hidden' name='g1' value='{$_POST['g1']}'>
							
							<input type ='hidden' name='p2' value='{$_POST['p2']}'>
							<input type ='hidden' name='a2' value='{$_POST['a2']}'>
							<input type ='hidden' name='g2' value='{$_POST['g2']}'>
							
							<input type ='hidden' name='p3' value='{$_POST['p3']}'>
							<input type ='hidden' name='a3' value='{$_POST['a3']}'>
							<input type ='hidden' name='g3' value='{$_POST['g3']}'>
							
							<input type ='hidden' name='p4' value='{$_POST['p4']}'>
							<input type ='hidden' name='a4' value='{$_POST['a4']}'>
							<input type ='hidden' name='g4' value='{$_POST['g4']}'>
							
							<input type ='hidden' name='p5' value='{$_POST['p5']}'>
							<input type ='hidden' name='a5' value='{$_POST['a5']}'>
							<input type ='hidden' name='g5' value='{$_POST['g5']}'>
							
							<input type ='hidden' name='p6' value='{$_POST['p6']}'>
							<input type ='hidden' name='a6' value='{$_POST['a6']}'>
							<input type ='hidden' name='g6' value='{$_POST['g6']}'>
							
							
							<input type ='hidden' name='from' value='{$_POST['from']}'>
							<input type ='hidden' name='train_num' value='{$_POST['train_num']}'>
							<input type ='hidden' name='to' value='{$_POST['to']}'>
							<input type ='hidden' name='doj' value='{$_POST['doj']}'>";
							?>
							<input type="submit" name="Submit" value="Book my ticket"></form></center>
	
	<br><br><br>
	</td>
	</tr>



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
