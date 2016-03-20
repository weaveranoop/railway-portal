<?php
include("db.php");
include("menu.php");echo "<br><br><br>Your ticket <br><br>";
$pnr = $_GET['pnr'];
$query = mysql_query("SELECT * FROM `book_detail` WHERE ( `pnr` = '$pnr' )");
while($row = mysql_fetch_array($query))
{
$x = "
PNR:\n
Name: \n
Train Number: \n
Train Name:\n
Price:\n
Arrival Time:\n
Departure Time:\n
From:\n
To:\n";
$y= $pnr."\n".
$row['passenger']."\n".
$row['train_num']."\n";

$query4 = mysql_query("SELECT * FROM `train_detail` WHERE ( `train_num` = '{$row['train_num']}' )");
while($row4 = mysql_fetch_array($query4))
{
$y1=$row4['train_name']."\n";
}
$y2=$row['price']."\n";

$query5 = mysql_query("SELECT * FROM `train_station` WHERE (( `train_num` = '{$row['train_num']}' ) AND ( `station` = '{$row['from']}'))");
while($row5 = mysql_fetch_array($query5))
{
echo "Arrival Time: ";
echo "{$row5['time_arr']}<br>";

echo "Departure Time: ";
echo "{$row5['time_dep']}<br>";
}
echo "From : ";
echo "{$row['from']}<br>";
echo "To : ";
echo "{$row['to']}<br>";
}

echo "<br><br>Have a happy journey";
?>

