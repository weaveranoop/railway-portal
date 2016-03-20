<?php
function user_login ($username1, $password1) {
//echo $username , $password;
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password="831004"; // Mysql password 
$db_name="dp"; // Database name 

// Connect to server and select database.
$con = mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name",$con)or die("cannot select DB");
  
 $query = "select * FROM profile WHERE 
      username = '{$username1}' AND 
      password = '{$password1}'"; 

  $result = mysql_query($query,$con);
  $count = mysql_num_rows($result); 
     
  if ($count==1) 
  $isValidUser = TRUE;
  
  //echo $isValidUser;
  return ($isValidUser);
}

?>
