<div id="module-menu">
<ul id="menu" >
<li class="node"><a class="" href="index.php?option=home_login">Railway Portal Home</a>
</li>
<li class="node"><a href="#" class="">Profile</a><ul>
<li><a href="index.php?option=pro_view">View</a></li>
<li><a href="index.php?option=pro_edit">Edit</a></li>
</ul>
</li>

<li class="node"><a href="#" class="">History</a><ul>
<li><a href="index.php?option=history_b">Booked</a></li>
<li><a href="index.php?option=history_c">Cancelled</a></li>
</ul>
</li>

<?php
include("db.php");
$username = $_SESSION['username'];
$p_type = mysql_query("SELECT * FROM `profile` WHERE username='{$username}'");
$row = mysql_fetch_array($p_type);
if (($row['p_type'])=='A') 
{
if (($row['admin_type'])=='R')
 {
 echo "<li class='node'><a href='#' class=''><font color = 'red'>Administrator</font></a><ul>
 <li><a href='index.php?option=route'><font color = 'red'>Route</font></a></li>
 </ul>
 </li>";
 }
else if
(($row['admin_type'])=='T')
 {
 echo "<li class='node'><a href='#' class=''><font color = 'red'>Administrator</font></a><ul>
 <li><a href='index.php?option=train_detail'><font color = 'red'>Train Details</font></a></li>
 </ul>
 </li>";
 }
else if
(($row['admin_type'])=='P')
 {
 echo "<li class='node'><a href='#' class=''><font color = 'red'>Administrator</font></a><ul>
 <li><a href='index.php?option=price'><font color = 'red'>Price</font></a></li>
 </ul>
 </li>";
 }
else if
(($row['designation'])=='ADMIN')
 {
 echo "<li class='node'><a href='#' class=''><font color = 'red'>Administrator</font></a><ul>
 <li><a href='index.php?option=route'><font color = 'red'>Route</font></a></li>
 <li><a href='index.php?option=train_detail'><font color = 'red'>Train Details</font></a></li>
 <li><a href='index.php?option=price'><font color = 'red'>Price</font></a></li>
 </ul>
 </li>";
 }
}
?>


</ul>
</div>
