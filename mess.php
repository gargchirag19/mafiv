<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$servername = "localhost";
$username = "1248762";
$password = "12345678";

$con =  mysql_connect($servername, $username, $password,1248762);

if (!$con) 
{
  echo 'not connected to server';
}

mysql_select_db('1248762',$con) or die("not connected to database");

$day=$_POST['day'];
$breakfast=$_POST['breakfast'];
$lunch=$_POST['lunch'];
$snacks=$_POST['snacks'];
$dinner=$_POST['dinner'];


 $sqll = "UPDATE  Mess_Menu  SET breakfast='$breakfast',lunch='$lunch',snacks='$snacks',dinner='$dinner' WHERE day='$day'";
if (mysql_query($sqll)) {
    header("Location: admin.html");}
 


?>

