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
			<span class="logout"><a href="/at/logoff.php">Log out</a></span>		</div>
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
    
	<class='center'>
	<br><center><form id="FormTrainBook" name="formElem" method="post" action="home.php">
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<td>
							<label for="from">From : </label>
                            <input id="from" name="from" value="<?php echo $_POST['from'] ?>"/>
                            </td>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<td>
							<label for="to">To : </label>
                            <input id="to" name="to" value="<?php echo $_POST['to'] ?>"/>
                            </td>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<td>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <label for="date">Date : </label>
                                <input id="date" name="date" value="<?php echo $_POST['date'] ?>"/>
                            </td>
							<td>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <label for="quota">Quota : </label>
                                <input id="quota" name="quota" value="<?php echo $_POST['quota'] ?>"/>
                            </td>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<button type="submit">Submit</button></form></center><br>
	<?php
	$to = $_POST['to'];
	$from = $_POST['from'];
	?>
	
<table class="adminlist">	
	<thead>
		<tr>
			<th>
				<strong>Journey Details</strong>
			</th>
			<th>
				<strong>Train Number</strong>
			</th>
			<th>
				<strong>Train Name</strong>
			</th>
			<th>
				<strong>Arrival</strong>
			</th>
			<th>
				<strong>Departure</strong>
			</th>
			</th>
			<th>
				<strong>Availability</strong>
			</th>
			</th>
			<th>
				<strong>Book</strong>
			</th>
			</tr>
	</thead>
	
	<?php
	
	$query = mysql_query("SELECT t1.*, t2.*, t3.*, t4.* FROM `dp`.`route` AS `t1`, `dp`.`route` AS `t2`, `train_station` AS `t3`, `train_station` AS `t4` WHERE ( (t1.`station` = '".$to."') AND (t2.`station` = '".$from."') AND (t1.`route_num` = t2.`route_num`) AND (t3.`station` = '".$to."') AND (t4.`station` = '".$from."') AND (t3.`stop_number` > t4.`stop_number`) AND (t3.`train_num` = t4.`train_num`))");
	if ($query){
	
			while($row = mysql_fetch_array($query)){
	echo "<form name='form_book' method='post' action='book.php?trainum=".$row['train_num']."'>";
	//$aa=$row['train_num'];
	$query_count = mysql_query("SELECT count(*) FROM `book_detail` WHERE `train_num`='".$row['train_num']."' AND `doj`='".$_POST['date']."' AND `status`='1'");
	while ($row_c = mysql_fetch_array($query_count))
	{
	$avail = 72 - $row_c[0];
	}
	
	//$result = mysql_query("SELECT availa FROM avail WHERE train_num=$aa"); //Shows availability
	echo "<tr><td><center>{$_POST['date']}</center></td><td><center>{$row['train_num']}</center></td><td><center>{$row['train_name']}</center></td><td><center>{$row['time_arr']}</center></td><td><center>{$row['time_dep']}</center></td><td><center>".$avail."</center></td><td>
	
	<input type ='hidden' name='to' value='$to'>
	<input type ='hidden' name='from' value='$from'>
	<input type ='hidden' name='doj' value='{$_POST['date']}'>
			
	<center><input type='submit' name='Submit' value='Book'></center></td></tr>";
		
}

}
else
echo "<tr><center>No Train Found</center></tr>";
			
			
	?>
	
	<tr>
	<td class='center'>
		<?php
			
		?>
	
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
