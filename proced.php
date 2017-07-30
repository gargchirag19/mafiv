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

$poll_id=$_GET['poll_id'];
 
 $sqll = "UPDATE Poll SET check_poll=TRUE WHERE poll_id='$poll_id' ";


if (mysql_query($sqll)) {
     header("Location: admin.html");
} else {
    echo mysql_error();
}
?>

