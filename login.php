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

$email=$_POST['email'];
$password=$_POST['password'];
$sqll="SELECT* FROM Admin WHERE email='$email' and password='$password'";
 $result = mysql_query($sqll,$con);

if (mysql_num_rows($result) > 0) {
       header("Location: admin.html");
} else {
    echo mysql_error();
}
?>

