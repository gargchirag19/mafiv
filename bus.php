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
$time=$_POST['time'];
$from=$_POST['from'];
$to=$_POST['to'];
$no_bus=$_POST['no_bus'];
$batch=$_POST['batch'];

 
 $sqll = "INSERT INTO Bus_TT  VALUES ('$day','$time','$from','$to','$no_bus','$batch')";


if (mysql_query($sqll)) {
    header("Location: admin.html");
} else {
    echo mysql_error();
}
?>

