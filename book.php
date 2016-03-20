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
			
	?>
	
	<tr>
	<td class='center'>
		<?php
			echo "<center><strong>
			Train Number : <font color = 'red'>{$_GET['trainum']}</font>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			Train Name : 
			<br><br>
			From :  <font color = 'red'>{$_POST['from']}</font>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			To :  <font color = 'red'>{$_POST['to']}</font>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			Date Of Book : <font color = 'red'>";echo  date('Y \- m \- d'); echo "</font>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			Date of Journey : <font color = 'red'>{$_POST['doj']}</font>
			</strong></center><br><br><br>";

			?>
	<center><form id="FormTicketBook" name="formElem" method="post" action="book_confirm.php">
							
							<p>
							
							<label for="c1">Class : </label>
                            <input id="c1" name="c1" />
							</p>
							<br>
							<p>
							<label for="p1">Passenger1 : </label>
                            <input id="p1" name="p1" />
							
							<label for="a1">Age : </label>
                            <input id="a1" name="a1" />
                            
							<label for="g1">Gender : </label>
                            <input id="g1" name="g1" />
							</p>
							
							<p>
							<label for="p2">Passenger2 : </label>
                            <input id="p2" name="p2" />
							
							<label for="a2">Age : </label>
                            <input id="a2" name="a2" />
                            
							<label for="g2">Gender : </label>
                            <input id="g2" name="g2" />
                            </p>
							
							<p>
							<label for="p3">Passenger3 : </label>
                            <input id="p3" name="p3" />
                            
							<label for="a3">Age : </label>
                            <input id="a3" name="a3" />
                            
							<label for="g3">Gender : </label>
                            <input id="g3" name="g3" />
							</p>
							
							<p>
							<label for="p4">Passenger4 : </label>
                            <input id="p4" name="p4" />
                            
							<label for="a4">Age : </label>
                            <input id="a4" name="a4" />
                            
							<label for="g4">Gender : </label>
                            <input id="g4" name="g4" />
							</p>
							
							<p>
							<label for="p5">Passenger5 : </label>
                            <input id="p5" name="p5" />
                            
							<label for="a5">Age : </label>
                            <input id="a5" name="a5" />
                            
							<label for="g5">Gender : </label>
                            <input id="g5" name="g5" />
							</p>
							
							<p>
							<label for="p6">Passenger6 : </label>
                            <input id="p6" name="p6" />
                            
							<label for="a6">Age : </label>
                            <input id="a6" name="a6" />
                            
							<label for="g6">Gender : </label>
                            <input id="g6" name="g6" />
							</p>
							<?php echo "<input type ='hidden' name='from' value='{$_POST['from']}'>
							<input type ='hidden' name='train_num' value='{$_GET['trainum']}'>
							<input type ='hidden' name='to' value='{$_POST['to']}'>
							<input type ='hidden' name='doj' value='{$_POST['doj']}'>";
							?>
							<input type="submit" name="Submit" value="I agree to the terms and conditions. Book my ticket"></form></center>
	
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
