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


$acc_no=$_POST['acc_number'];
$isbn=$_POST['isbn'];
$author=$_POST['author'];
$title=$_POST['title'];
$type=$_POST['type'];
$avail=$_POST['avail'];

 
 $sqll = "INSERT INTO Library (acc_number,isbn,author,title,type,avail) VALUES ('$acc_no','$isbn','$author','$title','$type','$avail')";


if (mysql_query($sqll)) {
     header("Location: add.html");
} else {
    echo mysql_error();
}
?>

