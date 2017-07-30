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
$sql = "DELETE FROM Poll WHERE poll_id = $poll_id" ;
mysql_query($sql,$con);
$sql1 = "DELETE FROM Poll_Audience WHERE poll_id = $poll_id" ;
mysql_query($sql1,$con);
$sql2 = "DELETE FROM Options WHERE poll_id = $poll_id" ;
mysql_query($sql2,$con);
?>

