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
			<span class="logout"><a href="index.php?option=logout">Log out</a></span>		</div>

			<?php include("menu.php"); ?>
			
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

//print_r($_POST);
$username = $_SESSION['username'];
$class = $_POST['c1'];
$price = $_POST['price'];
$from = $_POST['from'];
$to = $_POST['to'];
$doj = $_POST['doj'];
$train_num = $_POST['train_num'];
$dob = date('Y\-m\-d');
$i = 1;

$query1 = mysql_query("SELECT max(sl) sl FROM `book_detail`");
if ($query1)
{
$row1=mysql_fetch_array($query1);
$pnr = $row1['sl'];
$pnr++;
}
else
{

}

$query = mysql_query("SELECT max(code) code FROM `book_detail` WHERE ((`train_num` = '$train_num') AND (`doj` = '0000-00-00')) ");
if ($query)
{
$row_code=mysql_fetch_array($query);
$code = $row_code['code'];
$code++;
$i=1;
$x=p1;
$y=a1;
$z=g1;
while($_POST["$x"])
{
$p = $_POST["$x"];
$a = $_POST["$y"];
$g = $_POST["$z"];
$query_insert=mysql_query("INSERT INTO `book_detail` (`sl`, `train_num`, `dob`, `doj`, `doe`, `pnr`, `username`, `passenger`, `age`, `gender`, `code`, `seat`, `price`, `to`, `from`, `status`, `class`)
VALUES (NULL, '$train_num', '$dob', '$doj', '$dob', '$pnr', '$username', '$p', '$a', '$g', '$code', '$seat', '$price', '$to', '$from', '1', '$class')");
$i++;
$x=p."$i";
$y=a."$i";
$z=g."$i";
//echo "{$train_num}<br> {$dob}<br> {$doj}<br> {$dob}<br> {$pnr}<br> {$username}<br> {$p}<br> {$a}<br> {$g}<br> {$code}<br> {1}<br> {$price}<br> {$to}<br> {$from}<br> {1}<br> {$class}";

}

}

else
{

$code = 1;
$i=1;
$x=p1;
$y=a1;
$z=g1;
while(($_POST["$x"]))
{
$p = $_POST["$x"];
$a = $_POST["$y"];
$g = $_POST["$z"];
$query_insert = mysql_query("INSERT INTO `book_detail` (`sl`, `train_num`, `dob`, `doj`, `doe`, `pnr`, `username`, `passenger`, `age`, `gender`, `code`, `seat`, `price`, `to`, `from`, `status`, `class`)
VALUES (NULL, '$train_num', '$dob', '$doj', '$dob', '$pnr', '$username', '$p', '$a', '$g', '$code', '1', '$price', '$to', '$from', '1', '$class')");
$i++;
$x=p."$i";
$y=a."$i";
$z=g."$i";
//echo "{$train_num}<br> {$dob}<br> {$doj}<br> {$dob}<br> {$pnr}<br> {$username}<br> {$p}<br> {$a}<br> {$g}<br> {$code}<br> {1}<br> {$price}<br> {$to}<br> {$from}<br> {1}<br> {$class}";
}

}

if($query_insert) echo "Successfully booked your ticket";
else echo "Error booking your ticket";
/*
$x=p1;
$y=a1;
$z=g1;
while($_POST["$x"])
{
$p = $_POST["$x"];
$a = $_POST["$y"];
$g = $_POST["$z"];
$i++;
$x=p."$i";
$y=a."$i";
$z=g."$i";
echo "{$p}<br>{$a}<br>{$g}";
echo "{$train_num}<br> {$dob}<br> {$doj}<br> {$dob}<br> {$pnr}<br> {$username}<br> {$p}<br> {$a}<br> {$g}<br> {$code}<br> {1}<br> {$price}<br> {$to}<br> {$from}<br> {1}<br> {$class}";
}*/
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