<?php 
session_start();
if(!isset($_SESSION['username']))
header( 'Location: /dp' );
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
			<span class="logout"><a href="/at/logoff.php">Log out</a></span>		</div>

			<?php include("menu.php"); 
			$username = $_SESSION['username'];
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
<?php

include("db.php");
$query = mysql_query("SELECT * FROM `book_detail` WHERE (( `username` = '$username' ) AND (`status` = '1'))");
while($row = mysql_fetch_array($query))
{
$pnr = $row['pnr'];
$link = "ticket.php?pnr=".$pnr;
echo "<form name='form_cancel' method='post' action='cancel.php?pnr=".$row['pnr']."'>";
echo "
<strong><tr>
<td><center>{$row['passenger']}</center></td><td><center>{$row['doj']}</center></td><td><center>{$row['pnr']}</center></td><td><center>{$row['price']}</center></td>
<td>";
if  ($row['status'] == 1)
echo "Booked";
else echo "Can/mod";
echo "</td>
<td><center><input type='submit' name='Submit' value='Cancel'></center></td>
</form>
<td><center><a href='$link'>Ticket</a></center></td>
</tr></strong>";
}

?>
	<thead>
		<?php

include("db.php");
echo "<strong><tr>
<td><center>Passenger Name</center></td><td><center>Journey Date</center></td><td><center>PNR</center></td><td><center>Price</center></td><td><center>status</center></td><td><center>Cancel</center></td>
<td><center>Ticket</center></td>
</tr></strong>";


?>
	</thead>
	<tbody>
	
	


	
	
	
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