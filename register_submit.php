<?php
include("db.php");

$name = $_POST['name'];
$username = $_POST['username'];
$password = $_POST['password'];
$mail = $_POST['mail'];
$age = $_POST['age'];
$address = $_POST['address'];
$p_type = $_POST['p_type'];

//echo " $name <br> $username <br> $password <br> $mail <br> $age <br> $address <br> $p_type";
 
if ($name == NULL || 
$username == NULL || 
$password == NULL || 
$mail == NULL || 
$age == NULL || 
$address == NULL || 
$p_type == NULL )
{
echo "
Errors were encountered.<br>Either all the fields were not filled
<br>
 OR 
 <br>
 Username already exists 
 <br>
 OR 
 <br>
 An account is already registered with the Email ID provided";
echo "<p><form><input type=\"button\" value=\"Go Back and try again\" onclick=\"history.go(-1)\"></form>"; }

else{
$query=mysql_query("INSERT INTO profile (name, username, password, email_id, age, address, designation, admin_type)
VALUES ('$name', '$username', '$password', '$mail', '$age', '$address', '0', '0')"); 
if ($query)
{
header( 'Location: index.php' );
}
else 
{
echo "
Errors were encountered.<br>Either all the fields were not filled
<br>
 OR 
 <br>
 Username already exists 
 <br>
 OR 
 <br>
 An account is already registered with the Email ID provided";
echo "<p><form><input type=\"button\" value=\"Go Back and try again\" onclick=\"history.go(-1)\"></form>"; }}